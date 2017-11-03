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

}
