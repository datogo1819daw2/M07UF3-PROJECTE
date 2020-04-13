<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Canal;

class CanalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $canals = Canal::all();
        return view('canals.indexCanal', compact('canals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('canals.createCanal');
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
            'nomCanal' => 'required',
            'logotipCanal' => 'required'
        ]);
        
        $logotip = $request->file('logotipCanal');
        $nomLogotip = rand() . '.' . $logotip->getClientOriginalExtension();
        $logotip->move(public_path('images'), $nomLogotip);

        $nouCanal = new Canal([
            'nomCanal' => $request->get('nomCanal'),
            'logotipCanal' => $nomLogotip
        ]);
        
        $nouCanal->save();
        return redirect()->route('canal.index')->with('success', 'Nuevo canal creado');
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
        $canal = Canal::find($id);
        return view('canals.editCanal', compact('canal'));
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
            'nomCanal' => 'required',
            'logotipCanal' => 'required'
        ]);

        $logotip = $request->file('logotipCanal');
        $nomLogotip = rand() . '.' . $logotip->getClientOriginalExtension();
        $logotip->move(public_path('images'), $nomLogotip);

        $canal = Canal::find($id);
        $canal->nomCanal = $request->get('nomCanal');
        $canal->logotipCanal = $nomLogotip;
        $canal->save();
        return redirect()->route('canal.index')->with('success', 'Datos actualizados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $canal = Canal::find($id);
        $canal->delete();
        return redirect()->route('canal.index')->with('success', 'Canal borrado');
    }
}
