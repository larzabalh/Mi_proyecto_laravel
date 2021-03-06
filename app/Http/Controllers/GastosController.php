<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gasto;
use App\Tipo_de_gasto;
use App\Http\Requests\GastosRequest;

class GastosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $gastos = Gasto::all();
      $tipos = Tipo_de_gasto::all();
        return view('configuracion.gasto', ['gastos' => $gastos,'tipos' => $tipos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GastosRequest $request)
    {
      $gasto = new Gasto([
        'gasto' => $request->input('gasto'),
        'tipo_de_gasto_id' => $request->input('tipo')
      ]);
      $gasto->save();
      return redirect()->route('gasto.index');
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
      $gasto = Gasto::find($id);
      $tipos = Tipo_de_gasto::all();
      return view('configuracion.gasto-editar')
      ->with('gasto', $gasto)
      ->with('tipos', $tipos);
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
      $gasto = Gasto::find($id);
      $gasto->gasto = $request->input('gasto');
      $gasto->tipo_de_gasto_id = $request->input('tipo');

      $gasto->save();

        return redirect()->route('gasto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $gasto = Gasto::find($id);
      $gasto->delete();
      return redirect()->route('gasto.index');
    }
}
