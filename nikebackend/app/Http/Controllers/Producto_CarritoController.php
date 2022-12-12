<?php

namespace App\Http\Controllers;
use App\Models\ProductoCarrito;
use Illuminate\Http\Request;

class Producto_CarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pc = ProductoCarrito::all();
        return $pc;

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
        $pc = new ProductoCarrito();
        $pc->producto_id = $request->producto_id;
        $pc->cantidad = $request->cantidad;
        $pc->precio = $request->precio;
        $pc->descuento = $request->descuento;
        $pc->carrito_id = $request->carrito_id;
        $pc->save();
        return $pc;
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
        $pc = ProductoCarrito::find($id);
        return $pc;
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
        $pc = ProductoCarrito::findOrFail($request->id);
        $pc->producto_id = $request->producto_id;
        $pc->cantidad = $request->cantidad;
        $pc->precio = $request->precio;
        $pc->descuento = $request->descuento;
        $pc->carrito_id = $request->carrito_id;
        $pc->save();
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
        $pc = ProductoCarrito::find($id)->delete();
        return $pc;
    }
}
