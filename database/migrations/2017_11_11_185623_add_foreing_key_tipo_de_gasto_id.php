<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeingKeyTipoDeGastoId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gastos', function (Blueprint $table) {
          $table->integer('tipo_de_gasto_id')->nullable()->unsigned();

          $table->foreign('tipo_de_gasto_id')->references('id')->on('tipos_de_gastos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gastos', function (Blueprint $table) {
          $table->dropForeign('gastos_tipo_de_gasto_id_foreign');
        });
    }
}
