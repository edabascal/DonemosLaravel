<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            //$table->integer('requisition_id')->unsigned();
            $table->rememberToken();
            $table->timestamps();
        });
//DESCOMENTAS ESTO Y EXPLOTA ALL (NO PUEDO ESCRIBIR 'TO DO') A LA MIERDA PORQUE COMO UN GIL CREE PRIMERO LA TABLA COMPANY Y DESPUES REQUISITION. COMPANY USA REQUISITION... PERO REQUISITION USA COMPANY TAMBIEN Y TIRA ERROR. BEAMMM!
      // Schema::table('company', function (Blueprint $table) {
      //       $table->foreign('requisition_id')->references('id')->on('requisition');
      //   });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company');
    }
}
