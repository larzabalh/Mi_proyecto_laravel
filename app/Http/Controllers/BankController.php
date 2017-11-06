<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bank;


class BankController extends Controller
{
  public function Directory(){

    // $bancos = Bank::where('banco','LIKE','ga%')->get();
    $bancos = Bank::all();
      return view('configuracion.bank', ['bancos' => $bancos]);
    }

    public function editar($id){
      $banco = Bank::find($id);
      return view('configuracion.probando')->with('banco', $banco);
    }

    public function alta(Request $request){
      //La validacion la estoy haciendo en FORMULARIO REQUEST, si llego hasta aca esta todo ok.

      //Esto lo puedo usar si todos los campos del formulario son iguales a los campos de la base de datos!!!
      //Episode::create($request->all());
      //Si no coincide, le tengo que pasar todos los campos y asociarlos.

      $banco = Bank::create([
        'banco' => $request->input('banco')
      ]);

        return redirect('configuracion.bank');
      }

      public function formulario(){


          return view('configuracion.bank-alta');
        }
}
