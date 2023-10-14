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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->string('type')->nullable(); //tipe form (max/skor_4/skro_40/yes_no)
            $table->integer('count')->default(0);
            $table->integer('times')->default(1);
            $table->timestamps();
        });
        Schema::create('form_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('form_id')->constrained();
            $table->string('component')->nullable(); //petunjuk, item
            $table->string('component_order')->nullable();
            $table->string('name')->nullable();
            $table->integer('max_score')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_items');
        Schema::dropIfExists('forms');
    }
};
