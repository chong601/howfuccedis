<?php

namespace App\Console\Commands;

use App\Models\PingHost;
use Illuminate\Console\Command;
use Illuminate\Contracts\Console\PromptsForMissingInput;
use function Laravel\Prompts\select;

class TogglePingHostAvailability extends Command implements PromptsForMissingInput
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'charts:toggle {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Toggles the availability of the ping host.';

    /**
     * Prompt for missing input arguments using the returned questions.
     *
     * @return array
     */
    protected function promptForMissingArgumentsUsing(): array
    {
        return [
            'name' => function () {
                return select(
                    label: 'Which ping host you want to toggle availability?',
                    options: PingHost::pluck('name')
                );
            }

        ];
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->argument('name');

        if (!PingHost::whereName($name)->exists()) {
            $this->error(sprintf('Ping host named %s not found!', $name));
        }

        $pingHost = PingHost::whereName($name)->firstOrFail();
        $existingActive = $pingHost->active;
        $this->info(sprintf('Setting %s to %s...', $name, strval(!$existingActive)));
        $pingHost->active = !$pingHost->active;
        $pingHost->save();
    }
}
