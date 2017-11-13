<?php

use Illuminate\Database\Seeder;
use App\Tipo_de_gasto;
use App\Gasto;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipos_de_gastos = factory(Tipo_de_gasto::class)->times(50)->create();
        $gastos = factory(Gasto::class)->times(50)->create();
      }
}
