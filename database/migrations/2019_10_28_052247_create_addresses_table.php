<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('address')->default('pakistan');
            $table->string('countary');
            $table->string('city');
            $table->string('zip');
            $table->string('phone');

            $table->string('fname2')->nullable();
            $table->string('lname2')->nullable();
            $table->string('address2')->nullable();
            $table->string('countary2')->nullable();
            $table->string('city2')->nullable();
            $table->string('zip2')->nullable();
            $table->string('phone2')->nullable();
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
        Schema::dropIfExists('addresses');
    }
}
