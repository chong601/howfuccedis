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
        Schema::create('ping_hosts', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('friendly_name');
            $table->text('hostname');
            $table->boolean('active')->default(true);
            $table->boolean('slug')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ping_hosts');
    }
};
