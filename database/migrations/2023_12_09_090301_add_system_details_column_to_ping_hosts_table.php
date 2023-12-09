<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('ping_hosts', function (Blueprint $table) {
            $table->text('system_details')->nullable()->after('hostname');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ping_hosts', function (Blueprint $table) {
            $table->dropColumn('system_details');
        });
    }
};
