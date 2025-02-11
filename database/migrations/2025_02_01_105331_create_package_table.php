<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package', function (Blueprint $table) {
            $table->id();
            $table->string('photo')->nullable();
            $table->string('name');
            $table->string('location');
            $table->string('level');
            $table->string('experience');
            $table->string('fitness');
            $table->string('swimming_abilities');
            $table->string('time');
            $table->string('approach');
            $table->string('return');
            $table->string('min_age')->nullable();
            $table->string('swing_change')->nullable();
            $table->string('jump_change')->nullable();
            $table->string('slide_change')->nullable();
            $table->string('swim_change')->nullable();
            $table->longText('include')->nullable();
            $table->longText('description')->nullable();
            $table->string('price', 255);
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
        Schema::dropIfExists('package');
    }
};
