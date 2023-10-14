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
        Schema::create('evaluation_sections', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->string('name')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('form_id')->nullable();
            $table->datetime('available_start')->nullable(); //buka sesi
            $table->datetime('available_stop')->nullable(); //tutup sesi
            $table->integer('interval_time')->nullable(); //lama ujian
            $table->boolean('available')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluation_sections');
    }
};
