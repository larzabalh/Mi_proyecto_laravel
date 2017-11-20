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
        // $tipos_de_gastos = factory(Tipo_de_gasto::class)->times(5)->create();
           // $gastos = factory(Gasto::class)->times(20)->create();
         DB::table('tipos_de_gastos')->insert([
           ['id' => '1', 'tipo' => 'FIJO','created_at' => new DateTime, 'updated_at' => new DateTime],
           ['id' => '2', 'tipo' => 'VARIABLE','created_at' => new DateTime, 'updated_at' => new DateTime],
           ['id' => '3', 'tipo' => 'OFICINA','created_at' => new DateTime, 'updated_at' => new DateTime],
           ['id' => '4', 'tipo' => 'GISELA','created_at' => new DateTime, 'updated_at' => new DateTime],
           ['id' => '5', 'tipo' => 'LIA','created_at' => new DateTime, 'updated_at' => new DateTime],
           ['id' => '6', 'tipo' => 'PADRES','created_at' => new DateTime, 'updated_at' => new DateTime],
         ]);

         DB::table('gastos')->insert([
          ['id' => '1', 'gasto' => 'Florencia','tipo_de_gasto_id' => 3,'created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => '2', 'gasto' => 'Agustina','tipo_de_gasto_id' => 3,'created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => '3', 'gasto' => 'Jose Luis','tipo_de_gasto_id' => 3,'created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => '4', 'gasto' => 'Graciela','tipo_de_gasto_id' => 3,'created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => '5', 'gasto' => 'Bety','tipo_de_gasto_id' => 3,'created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => '6', 'gasto' => 'Alquiler Ramon Falcon','tipo_de_gasto_id' => 3,'created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => '7', 'gasto' => 'Amvitium','tipo_de_gasto_id' => 3,'created_at' => new DateTime, 'updated_at' => new DateTime],

          ['id' => '8', 'gasto' => 'Lidia','tipo_de_gasto_id' => 1,'created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => '9', 'gasto' => 'Las Nieves Pedro','tipo_de_gasto_id' => 1,'created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => '10', 'gasto' => 'Las Nieves Ana','tipo_de_gasto_id' => 1,'created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => '11', 'gasto' => 'Diario Clarin','tipo_de_gasto_id' => 1,'created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => '12', 'gasto' => 'OSDE','tipo_de_gasto_id' => 1,'created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => '13', 'gasto' => 'ATM XR 300','tipo_de_gasto_id' => 1,'created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => '14', 'gasto' => 'Monotributo','tipo_de_gasto_id' => 1,'created_at' => new DateTime, 'updated_at' => new DateTime],


          ['id' => '15', 'gasto' => 'TELEFONO','tipo_de_gasto_id' => 2,'created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => '16', 'gasto' => 'LUZ','tipo_de_gasto_id' => 2,'created_at' => new DateTime, 'updated_at' => new DateTime],

          ['id' => '17', 'gasto' => 'NUSKIN','tipo_de_gasto_id' => 4,'created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => '18', 'gasto' => 'VIAJE A EEUU','tipo_de_gasto_id' => 4,'created_at' => new DateTime, 'updated_at' => new DateTime],

          ['id' => '19', 'gasto' => 'ACA','tipo_de_gasto_id' => 5,'created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => '20', 'gasto' => 'UBER','tipo_de_gasto_id' => 5,'created_at' => new DateTime, 'updated_at' => new DateTime],

          ['id' => '21', 'gasto' => 'VIAJE A PERU','tipo_de_gasto_id' => 6,'created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => '22', 'gasto' => 'TV','tipo_de_gasto_id' => 6,'created_at' => new DateTime, 'updated_at' => new DateTime],


        ]);

        $reg_gasto = factory(Reg_Gasto::class)->times(30)->create();

        DB::table('disponibilidades')->insert([
          ['id' => '1', 'disponibilidad' => 'CAJA OFICINA','created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => '2', 'disponibilidad' => 'CAJA CASA','created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => '3', 'disponibilidad' => 'SANTANDER','created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => '4', 'disponibilidad' => 'HSBC','created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => '5', 'disponibilidad' => 'PATAGONIA','created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => '6', 'disponibilidad' => 'GALICIA','created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => '7', 'disponibilidad' => 'CIUDAD','created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => '8', 'disponibilidad' => 'FRANCES','created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => '9', 'disponibilidad' => 'PATAGONIA OMAR','created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => '10', 'disponibilidad' => 'PATAGONIA IN TIME SRL','created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => '11', 'disponibilidad' => 'NACION','created_at' => new DateTime, 'updated_at' => new DateTime],
        ]);

        DB::table('liquidadores')->insert([
          ['id' => '1', 'liquidador' => 'JOSE LUIS','created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => '2', 'liquidador' => 'FLORENCIA','created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => '3', 'liquidador' => 'ELIZABET','created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => '4', 'liquidador' => 'GRACIELA','created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => '5', 'liquidador' => 'BETTY','created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => '6', 'liquidador' => 'AGUSTINA','created_at' => new DateTime, 'updated_at' => new DateTime],

        ]);

        DB::table('cobradores')->insert([
          ['id' => '1', 'cobrador' => 'HERNAN','created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => '2', 'cobrador' => 'GRACIELA','created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => '3', 'cobrador' => 'BETTY','created_at' => new DateTime, 'updated_at' => new DateTime],

        ]);

        DB::table('facturadores')->insert([
          ['id' => '1', 'facturador' => 'IN TIME SRL','created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => '2', 'facturador' => 'TORTORELLI VANESA','created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => '3', 'facturador' => 'LARZABAL HERNAN','created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => '4', 'facturador' => 'PANZITTA GRACIELA','created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => '5', 'facturador' => 'LARZABAL OMAR','created_at' => new DateTime, 'updated_at' => new DateTime],

        ]);

        DB::table('forma_pagos')->insert([
          ['id' => '1', 'forma_pago' => 'VISA','disponibilidad_id' => '3','created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => '2', 'forma_pago' => 'AMERICAN EXPRESS','disponibilidad_id' => '3','created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => '3', 'forma_pago' => 'SHOPPING','disponibilidad_id' => '3','created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => '4', 'forma_pago' => 'VISA','disponibilidad_id' => '4','created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => '5', 'forma_pago' => 'MASTERCARD','disponibilidad_id' => '4','created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => '6', 'forma_pago' => 'VISA','disponibilidad_id' => '5','created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => '7', 'forma_pago' => 'VISA','disponibilidad_id' => '7','created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => '8', 'forma_pago' => 'CENCOSUD','disponibilidad_id' => '3','created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => '9', 'forma_pago' => 'NATIVA','disponibilidad_id' => '11','created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => '10', 'forma_pago' => 'EFECTIVO','disponibilidad_id' => '1','created_at' => new DateTime, 'updated_at' => new DateTime],
          ['id' => '11', 'forma_pago' => 'DEBITO AUTOMATICO','disponibilidad_id' => '4','created_at' => new DateTime, 'updated_at' => new DateTime],
      
        ]);


      }
}
