<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->float('budjet');

            $table->integer('id_client')->unsigned();
            $table->foreign('id_client')->references('id')->
            on('clientcompanies')->OnDelete('cascade')->OnUpdate('cascade');

            $table->integer('id_chief')->unsigned();
            $table->foreign('id_chief')->references('id')->
            on('projectchiefs')->OnDelete('cascade')->OnUpdate('cascade');
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
        Schema::dropIfExists('projects');
    }
}
