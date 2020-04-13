<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Programa;

class ProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programas = Programa::all();
        return view('programas.indexPrograma', compact('programas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $canal = \DB::table('canals')->select('id','nomCanal')->get();
        return view('programas.createPrograma', compact('canal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nomPrograma' => 'required',
            'descPrograma' => 'required',
            'tipoPrograma' => 'required',
            'clasPrograma' => 'required',
            'idCanal' => 'required'
        ]);
        $nuevoPrograma = new Programa([
            'nomPrograma' => $request->get('nomPrograma'),
            'descPrograma' => $request->get('descPrograma'),
            'tipoPrograma' => $request->get('tipoPrograma'),
            'clasPrograma' => $request->get('clasPrograma'),
            'idCanal' => $request->get('idCanal'),
        ]);
        $nuevoPrograma->save();
        return redirect()->route('programa.index')->with('success', 'Nuevo programa creado');
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
        $programa = Programa::find($id);
        $canal = \DB::table('canals')->select('id','nomCanal')->get();
        return view('programas.editPrograma', compact('programa', 'id', 'canal'));
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
        $this->validate($request, [
            'nomPrograma' => 'required',
            'descPrograma' => 'required',
            'tipoPrograma' => 'required',
            'clasPrograma' => 'required',
            'idCanal' => 'required'
        ]);
        $programa = Programa::find($id);
        $programa->nomPrograma = $request->get('nomPrograma');
        $programa->descPrograma = $request->get('descPrograma');
        $programa->tipoPrograma = $request->get('tipoPrograma');
        $programa->clasPrograma = $request->get('clasPrograma');
        $programa->idCanal = $request->get('idCanal');
        $programa->save();
        return redirect()->route('programa.index')->with('success', 'Datos actualizados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $programa = Programa::find($id);
        $programa->delete();
        return redirect()->route('programa.index')->with('success', 'Canal borrado');
    }
}
