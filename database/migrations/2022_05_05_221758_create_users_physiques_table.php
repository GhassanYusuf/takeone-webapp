<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersPhysiquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_physiques', function (Blueprint $table) {
            $table->id();
            $table->string('user_id', 20)->unique()->nullable();
            $table->string('age', 3)->nullable();
            $table->float('height')->nullable();
            $table->float('weight')->nullable();
            $table->float('bmi')->nullable();
            $table->float('fat')->nullable();
            $table->float('bmr')->nullable();
            $table->float('visceral')->nullable();
            $table->float('muscle')->nullable();
            $table->float('bone')->nullable();
            $table->float('protine')->nullable();
            $table->float('water')->nullable();
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
        Schema::dropIfExists('users_physiques');
    }
}
