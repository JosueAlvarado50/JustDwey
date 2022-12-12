<?php

namespace App\Http\Controllers;

use App\Models\Ventas;
use Illuminate\Http\Request;

class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $venta = Ventas::all();
        return $venta;
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
        $venta = new Ventas();
        $venta->cliente_id=$request->cliente_id;
        $venta->carrito_id=$request->carrito_id;
        $venta->metodo_Pagos_id=$request->metodo_Pagos_id;
        $venta->Monto_total=$request->Monto_total;
        $venta->save();

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
        $venta = Ventas::find($id);
        return $venta;
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
        $venta = Ventas::findOrFail($request->id);
        $venta->cliente_id=$request->cliente_id;
        $venta->carrito_id=$request->carrito_id;
        $venta->metodo_Pagos_id=$request->metodo_Pagos_id;
        $venta->Monto_total=$request->Monto_total;
        $venta->save();
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
        $venta = Ventas::find($id)->delete();
        return $venta;
    }
}
