<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentBikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rent_bikes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('city_id');
            $table->string('name');
            $table->text('description');
            $table->double('rent');
            $table->string('color');
            $table->string('image');
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
        Schema::dropIfExists('rent_bikes');
    }
}
