<?php

namespace App\Console\Commands;

use App\Models\PingHost;
use Illuminate\Console\Command;
use Illuminate\Contracts\Console\PromptsForMissingInput;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use function Laravel\Prompts\multiselect;
use function Laravel\Prompts\select;

class AddNewPingHost extends Command implements PromptsForMissingInput
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'chart:new-ping-host
                            {name : Name of the ping host}
                            {target : The hostname of the target}
                            {--friendly-name= : A name to show on charts}
                            {--slug : Indicate that the target is part of route path}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Adds a new ping host';

    /**
     * Prompt for missing input arguments using the returned questions.
     *
     * @return array
     */
    protected function promptForMissingArgumentsUsing()
    {
        return [
            'name' => 'What name you want to use?',
            'target' => 'What is the ping target?'
        ];
    }

    /**
     * Perform actions after the user was prompted for missing arguments.
     *
     * @param  \Symfony\Component\Console\Input\InputInterface  $input
     * @param  \Symfony\Component\Console\Output\OutputInterface  $output
     * @return void
     */
    protected function afterPromptingForMissingArguments(InputInterface $input, OutputInterface $output)
    {
        $input->setOption('slug', select(
            label: 'Is the target part of route path?',
            options: ['Yes', 'No'])
        );
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->argument('name');
        $target = $this->argument('target');
        $isSlug = $this->option('slug') === true;
        $friendlyName = $this->option('friendly-name');

        if (PingHost::whereHostname($target)->exists()) {
            $this->error('This hostname already exists.');
        }

        if (PingHost::whereName($name)->exists()) {
            $this->error('This name is already taken.');
        }

        if (empty($friendlyName)) {
            $friendlyName = $name;
        }

        PingHost::create(['name' => $name, 'hostname' => $target, 'slug' => $isSlug, 'friendly_name' => $friendlyName]);
        $this->info(sprintf('Ping host named "%s" with hostname "%s" has been successfully added!', $name, $target));
    }
}
