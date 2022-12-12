<?php

namespace App\Http\Controllers;
use App\Models\products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $product = products::all();
        return $product;
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
        $product = new products();
        $product->modelo = $request->modelo;
        $product->tipo = $request->tipo;
        $product->precio = $request->precio;
        $product->descripcion = $request->descripcion;
        $product->color = $request->color;
        $product->talla_26 = $request->talla_26;
        $product->talla_27 = $request->talla_27;
        $product->img_model_1 = $request->img_model_1;
        $product->img_model_2 = $request->img_model_2;
        $product->img_model_3 = $request->img_model_3;
        $product->img_1 = $request->img_1;
        $product->img_2 = $request->img_2;
        $product->img_3 = $request->img_3;
        $product->img_4 = $request->img_4;
        $product->img_5 = $request->img_5;
        $product->img_6 = $request->img_6;
        $product->img_7 = $request->img_7;
        $product->img_8 = $request->img_8;
        $product->img_9 = $request->img_9;
        $product->categoria_id = $request->categoria_id;
        $product->save();
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
        $product = products::find($id);
        return $product;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, products $product)
    {
        //
        $product = products::findOrFail($request->id);
        $product->modelo = $request->modelo;
        $product->tipo = $request->tipo;
        $product->precio = $request->precio;
        $product->descripcion = $request->descripcion;
        $product->color = $request->color;
        $product->talla_26 = $request->talla_26;
        $product->talla_27 = $request->talla_27;
        $product->img_model_1 = $request->img_model_1;
        $product->img_model_2 = $request->img_model_2;
        $product->img_model_3 = $request->img_model_3;
        $product->img_1 = $request->img_1;
        $product->img_2 = $request->img_2;
        $product->img_3 = $request->img_3;
        $product->img_4 = $request->img_4;
        $product->img_5 = $request->img_5;
        $product->img_6 = $request->img_6;
        $product->img_7 = $request->img_7;
        $product->img_8 = $request->img_8;
        $product->img_9 = $request->img_9;
        $product->save();
        return $product;
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
        $product = products::find($id)->delete();
        return $product;
    }
}
