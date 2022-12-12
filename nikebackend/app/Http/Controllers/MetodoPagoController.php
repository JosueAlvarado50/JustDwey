<?php

namespace App\Http\Controllers;

use App\Models\MetodoPago;
use Illuminate\Http\Request;
use Mockery\Generator\Method;

class MetodoPagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $metodo = MetodoPago:: all();
        return $metodo;
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
        $metodo = new MetodoPago();
        $metodo->nombre=$request->nombre;
        $metodo->descripcion=$request->descripcion;
        $metodo->save();
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
        $metodo = MetodoPago::find($id);
        return $metodo;
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
        $metodo= MetodoPago::findOrFail($request->id);
        $metodo->nombre=$request->nombre;
        $metodo->descripcion=$request->descripcion;
        $metodo->save();
        
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
        $metodo = MetodoPago::find($id)->delete();
        return $metodo;
    }
}
