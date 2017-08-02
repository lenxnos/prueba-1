<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPlanobras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_pre_planobras', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sector_id')->unsigned();
            $table->foreign('sector_id')->references('id')->on('core_sector_oe');
            $table->integer('financiamiento_id')->unsigned();
            $table->foreign('financiamiento_id')->references('id')->on('info_pre_ffinanciaobras');
            $table->string('nombre');
            $table->string('year', 4);
            $table->string('estado');
            $table->string('beneficiados');
            $table->float('asignado', 20, 2);
            $table->integer('avance_financiero');
            $table->integer('avance_fisico');
            $table->string('status');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('info_pre_planobras');
  }
}
