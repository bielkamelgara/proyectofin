<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('area');

            $table->integer('id_building')->unsigned();
            $table->foreign('id_building')->references('id')-> 
            on('buildings')->OnDelete('cascade')->OnUpdate('cascade');

            $table->integer('id_employe')->unsigned();
            $table->foreign('id_employe')->references('id')-> 
            on('employees')->OnDelete('cascade')->OnUpdate('cascade');

            $table->integer('id_project')->unsigned();
            $table->foreign('id_project')->references('id')-> 
            on('projects')->OnDelete('cascade')->OnUpdate('cascade');
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
        Schema::dropIfExists('units');
    }
}
