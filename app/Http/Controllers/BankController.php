<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bank;

class BankController extends Controller
{
  public function Directory(){

    $bancos = Bank::where('banco','LIKE','ga%')->get();
      return view('configuracion.bank', ['bancos' => $bancos]);
    }
}
