<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPlaobrasMunicipios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_pre_planobras_municipios', function (Blueprint $table) {
        $table->integer('plan_id')->unsigned();
        $table->foreign('plan_id')->references('id')->on('info_pre_planobras');
        $table->integer('municipios_id')->unsigned();
        $table->foreign('municipios_id')->references('id')->on('core_entes_organos');
    });
 }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('info_pre_planobras_municipios');

    }
}
