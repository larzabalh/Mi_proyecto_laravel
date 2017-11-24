<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;
use App\Cliente;
use App\Facturador;
use App\Liquidador;
use App\Cobrador;
use App\Disponibilidad;
use App\Periodo;
use App\IngresosMensuales;

class IngresosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $clientes = Cliente::orderBy('cliente','ASC')->get();
      $facturadores = Facturador::orderBy('facturador','ASC')->get();
      $liquidadores = Liquidador::orderBy('liquidador','ASC')->get();
      $cobradores = Cobrador::orderBy('cobrador','ASC')->get();
      $disponibilidades = Disponibilidad::orderBy('disponibilidad','ASC')->get();
      $periodos = Periodo::orderBy('id','ASC')->get();

      // dd($facturadores,$liquidadores,$cobradores,$disponibilidades);
      return view('ingresos.mensuales')
      ->with('clientes', $clientes)
      ->with('facturadores', $facturadores)
      ->with('liquidadores', $liquidadores)
      ->with('cobradores', $cobradores)
      ->with('disponibilidades', $disponibilidades)
      ->with('periodos', $periodos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      // dd($request->input('cliente'));
      dd($request->cliente);
        return 'aca estoy';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function mensual(Request $request)
    {
      $clientes = $request->input('cliente');

      $ingresomensual = new IngresosMensuales([
        'periodo_id' => $request->input('periodo'),

        foreach ($clientes as $key => $value) {
        'cliente_id' =>$value,
        }
        endforeach

        // 'tipo_de_gasto_id' => $gasto->tipo_de_gasto_id,
        'honorario' => $request->input('honorario')

      ]);
      $ingresomensual->save();
      return redirect()->route('ingresos.mensual');

  // dd($request);

      // dd($request->input('cliente'));
    }
}
