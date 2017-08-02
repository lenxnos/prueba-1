<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaEnteOrganos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('core_entes_organos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('estructura')->unsigned();
            $table->foreign('estructura')->references('id')->on('core_estructura_oe');
            $table->integer('sector')->unsigned();
            $table->foreign('sector')->references('id')->on('core_sector_oe');
            $table->string('nombre');
            $table->string('siglas', 50);
            $table->string('email')->nullable();
            $table->string('max_autoridad')->nullable();
            $table->string('telefono', 50)->nullable();
            $table->string('localidad');
            $table->text('descripcion');
            $table->string('logo');
            $table->integer('tipo_organo');
            $table->integer('status');
            $table->string('cod_adscripcion', 10)->default('NULL');
            $table->string('cod_actividad', 10)->default('NULL');
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
       Schema::dropIfExists('core_entes_organos');
   }
}
