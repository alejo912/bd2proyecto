<?php

namespace App\Http\Controllers;

use App\Subsidio;
use Illuminate\Http\Request;

class subsidio_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ins = Subsidio::all();
        return view('subsidios.index')->with('subsidios', $ins);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subsidios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subsidio = new Subsidio();
        $subsidio->codigo = $request->codigo;
        $subsidio->nombre = $request->nombre;
        $subsidio->estrato = $request->estrato;
        $subsidio->valor = $request->valor;
        $subsidio->save();

        return redirect('subsidios')->with('status', 'Subsidio Creada!');

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
        $ins = Subsidio::find($id);

        // redirect
        return View::make('subsidios.edit')
            ->with('subsidio', $ins);
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
        $ins = Subsidio::find($id);
        $ins->delete();

        // redirect
        Session::flash('message', 'Subsidio borrada!');
        return Redirect::to('Subsidios');
    }
}
