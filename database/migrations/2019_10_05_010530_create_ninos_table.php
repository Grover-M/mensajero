<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNinosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ninos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_animal');
            $table->string('password');
            $table->integer('id_carta')->nullable();
            $table->unsignedinteger('id_animal');
            $table->foreign('id_animal')->references('id')->on('animals');
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
        Schema::dropIfExists('ninos');
    }
}
