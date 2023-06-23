<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponsibleunitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responsibleunits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('Phone');
            $table->string('sexo');

            $table->integer('id_unit')->unsigned();
            $table->foreign('id_unit')->references('id')->
            on('units')->OnDelete('cascade')->OnUpdate('cascade');
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
        Schema::dropIfExists('responsibleunits');
    }
}
