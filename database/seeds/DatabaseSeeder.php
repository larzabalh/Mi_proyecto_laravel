<?php

use Illuminate\Database\Seeder;
use App\Tipo_de_gasto;
use App\Gasto;
use App\Reg_Gasto;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipos_de_gastos = factory(Tipo_de_gasto::class)->times(5)->create();
        $gastos = factory(Gasto::class)->times(20)->create();
        $reg_gasto = factory(Reg_Gasto::class)->times(30)->create();
      }
}
