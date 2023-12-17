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
        Schema::create('log_ingest_keys', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ping_host');
            $table->text('description')->nullable();
            $table->text('token');
            $table->timestamp('last_accessed')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_ingest_keys');
    }
};
