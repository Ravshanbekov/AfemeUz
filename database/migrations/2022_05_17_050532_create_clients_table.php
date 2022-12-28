<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastname');
            $table->string('email');
            $table->string('phone')->unique();
            $table->string('image')->nullable();
            $table->string('pssport');
            $table->string('user_type');
            $table->string('devays_id')->nullable();
            $table->string('devays_type')->nullable();
            $table->string('region_id');
            $table->string('city_id')->nullable();
            $table->string('description')->nullable();
            $table->string('experience')->nullable();
            $table->string('password')->nullable();
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
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
        Schema::dropIfExists('clients');
    }
}
