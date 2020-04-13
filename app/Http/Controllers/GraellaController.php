<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Graella;
use App\Programa;
use App\Canal;

class GraellaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programas = Programa::all();
        $graellas = Graella::all();
        $canals= Canal::all();
        return view('graellas.indexGraella',compact('programas','graellas','canals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $createPrograma = \DB::table('programas')->select('id','nomPrograma','idCanal')->get();
        $createCanal = \DB::table('canals')->select('id','nomCanal')->get();
        return view('graellas.createGraella', compact('createPrograma','createCanal'));
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
            'hora' => 'required',
            'dia' => 'required'
        ]);
        $nuevaGraella = new Graella([
            'hora' => $request->get('hora'),
            'dia' => $request->get('dia')
        ]);

        $nuevaGraella->save();
        $nuevaGraella->programas()->attach($request->nomPrograma);
        return redirect()->route('graella.index')->with('success', 'Nueva graella creado');
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
        $graella = Graella::find($id);
        $graella->delete();
        return redirect()->route('graella.index')->with('success', 'Graella borrado');
    }
}
