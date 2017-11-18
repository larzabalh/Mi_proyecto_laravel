<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Reg_Gasto;
use App\Gasto;
use App\Tipo_de_gasto;
use App\Http\Requests\GastosRequest;

class RegistrodeGastosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $reg_gastos =Reg_Gasto::comentario($request->get('comentario'))->get();
        $gastos = Gasto::all();
        $tipos = Tipo_de_gasto::all();


        return view('registros.gastos')
        ->with('reg_gastos', $reg_gastos)
        ->with('gastos', $gastos)
        ->with('tipos', $tipos);
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
    public function store(Request $request)
    {
      $reg_gastos = new Reg_Gasto([
        'fecha' => $request->input('fecha'),
        'gasto_id' => $request->input('gasto'),
        'importe' => $request->input('importe'),
        'comentario' => $request->input('comentario')

      ]);
      $reg_gastos->save();
      return redirect()->route('registrodegastos.index');
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
}
