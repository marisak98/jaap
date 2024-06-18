<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSociosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('PrimerNombre')->nullable();
            $table->string('SegundoNombre')->nullable();
            $table->string('PrimerApellido')->nullable();
            $table->string('SegundoApellido')->nullable();
            $table->string('Cedula')->nullable();
            $table->date('FechaNacimiento')->nullable();
            $table->string('Provincia')->nullable();
            $table->string('Canton')->nullable();
            $table->string('Parroquia')->nullable();
            $table->string('Barrio')->nullable();
            $table->string('CallePrincipal')->nullable();
            $table->string('CalleSecundaria')->nullable();
            $table->integer('NumeroCasa')->nullable();
            $table->string('Referencia')->nullable();
            $table->string('Telefonofijo')->nullable();
            $table->string('Celular')->nullable();
            $table->string('Correo')->nullable();
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
        Schema::dropIfExists('socios');
    }
}
