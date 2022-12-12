<?php

namespace App\Http\Controllers;
use App\Models\Carritos;
use Illuminate\Http\Request;

class CarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $carrito = Carritos::all();
        return $carrito;

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
        $carrito = new Carritos();
        $carrito->id=$request->id;
        $carrito->cliente_id=$request->cliente_id;
        $carrito->save();
        return $carrito;
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
        $carrito = Carritos::find($id);
        return $carrito;
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
        $carrito = Carritos::findOrFail($request->id);
        $carrito->cliente_id=$request->cliente_id;
        $carrito->save();
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
        $carrito = Carritos::find($id)->delete();
        return $carrito;
    }
}
