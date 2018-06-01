<?php

namespace App\Http\Controllers;

use App\Residencia;
use Illuminate\Http\Request;

class residencia_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ins = Residencia::all();
        return view('residencias.index')->with('residencias', $ins);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('residencias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $residencia = new Residencia();
        $residencia->direccion = $request->direccion;
        $residencia->barrio = $request->barrio;
        $residencia->municipio = $request->municipio;
        $residencia->estrato = $request->estrato;
        $residencia->tipo = $request->tipo;
        $residencia->codigo = $request->codigo;
        $residencia->gps = [$request->latitud, $request->longitud];
        $residencia->save();

        return redirect('residencias')->with('status', 'Residencia Creada!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ins = Residencia::find($id);
        $ins->delete();

        // redirect
        Session::flash('message', 'Residencia borrada!');
        return Redirect::to('residencias');
    }
}
