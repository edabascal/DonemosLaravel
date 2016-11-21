<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAceptrequisitionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aceptrequisition', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('requisition_id')->unsigned();
            $table->foreign('requisition_id')->references('id')->on('requisition');
            $table->timestamps();
        });

        Schema::create('aceptrequisition_user', function (Blueprint $table) {
            $table->integer('aceptrequisition_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->foreign('aceptrequisition_id')->references('id')->on('aceptrequisition');
            $table->foreign('user_id')->references('id')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aceptrequisition');
    }
}
