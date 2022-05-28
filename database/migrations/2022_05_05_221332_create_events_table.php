<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title', 45)->nullable();
            $table->enum('type', ['Q', 'E', 'N', 'R', 'I', 'T', 'O', 'W'])->nullable();   // Q : qualifiers, E : Exhebision, N : Nationals, R : Regionals, I : International, T : Tournament, O : Olympic, W : World Championship
            $table->string('rules')->nullable();                        // Event Rules & Regulations
            $table->json('location', 100)->nullable();                  // Event Location (Lat, Log)
            $table->date('enroll_start')->nullable();                   // Event Enroll Start Date
            $table->date('enroll_end')->nullable();                     // Event Enroll End Date
            $table->date('weighin')->nullable();                        // Event Weigh In Date
            $table->date('start_date')->nullable();                     // Event Start Date
            $table->date('end_date')->nullable();                       // Event End Date
            $table->time('start_time')->nullable();                     // Start Time
            $table->time('break_time')->nullable();                     // Break Time
            $table->time('end_time')->nullable();                       // End Time
            $table->enum('state', ['U', 'S', 'E'])->nullable();         // (u: upcoming, s: started, e: ended) Indicator The Event State
            $table->json('organizer')->nullable();                      // Organizer
            $table->string('logo', 45)->nullable();                     // End Time
            $table->enum('permission', ['W', 'A', 'R'])->nullable();    // Permition State
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
