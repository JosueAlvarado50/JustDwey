<?php

namespace App\Http\Controllers;
use App\Models\hcompras;
use Illuminate\Http\Request;

class HcomprasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $compra = hcompras::all();
        return $compra;
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
        $compra = new hcompras();
        $compra->carritos = $request->carritos;
        $compra->save();
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
        $compra = hcompras::find($id);
        return $compra;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hcompras $compra)
    {
        //
        $compra= hcompras::findOrFail($request->id);
        $compra->carritos = $request->carritos;
        $compra->save();
        return $compra;
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
        $compra = hcompras::find($id)->delete();
        return $compra;
    }
}
