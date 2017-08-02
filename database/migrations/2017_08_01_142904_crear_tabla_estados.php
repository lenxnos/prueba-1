<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaEstados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('core_estados', function (Blueprint $table) {
        $table->increments('id');
        $table->string('codigo');
        $table->string('nombre');
        $table->string('capital');
        $table->integer('status');
    });
 }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('core_estados');

   }
}
