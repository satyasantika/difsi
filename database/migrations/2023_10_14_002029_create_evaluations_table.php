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
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('section_id')->constrained();
            $table->string('participant_name'); //siswa
            $table->string('class');
            $table->integer('section_order');
            $table->datetime('time_start')->nullable(); //mulai mengerjakan
            $table->datetime('time_stop')->nullable(); //selesai mengerjakan
            $table->longText('item_list_order')->nullable(); //random or standar item
            $table->integer('score01')->nullable();
            $table->integer('score02')->nullable();
            $table->integer('score03')->nullable();
            $table->integer('score04')->nullable();
            $table->integer('score05')->nullable();
            $table->integer('score06')->nullable();
            $table->integer('score07')->nullable();
            $table->integer('score08')->nullable();
            $table->integer('score09')->nullable();
            $table->integer('score10')->nullable();
            $table->integer('score11')->nullable();
            $table->integer('score12')->nullable();
            $table->integer('score13')->nullable();
            $table->integer('score14')->nullable();
            $table->integer('score15')->nullable();
            $table->integer('score16')->nullable();
            $table->integer('score17')->nullable();
            $table->integer('score18')->nullable();
            $table->integer('score19')->nullable();
            $table->integer('score20')->nullable();
            $table->integer('score21')->nullable();
            $table->integer('score22')->nullable();
            $table->integer('score23')->nullable();
            $table->integer('score24')->nullable();
            $table->integer('score25')->nullable();
            $table->integer('score26')->nullable();
            $table->integer('score27')->nullable();
            $table->integer('score28')->nullable();
            $table->integer('score29')->nullable();
            $table->integer('score30')->nullable();
            $table->integer('score31')->nullable();
            $table->integer('score32')->nullable();
            $table->integer('score33')->nullable();
            $table->integer('score34')->nullable();
            $table->integer('score35')->nullable();
            $table->integer('score36')->nullable();
            $table->integer('score37')->nullable();
            $table->integer('score38')->nullable();
            $table->integer('score39')->nullable();
            $table->integer('score40')->nullable();
            $table->integer('score41')->nullable();
            $table->integer('score42')->nullable();
            $table->integer('score43')->nullable();
            $table->integer('score44')->nullable();
            $table->integer('score45')->nullable();
            $table->integer('score46')->nullable();
            $table->integer('score47')->nullable();
            $table->integer('score48')->nullable();
            $table->integer('score49')->nullable();
            $table->integer('score50')->nullable();
            $table->integer('total')->nullable();
            $table->boolean('available')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluations');
    }
};
