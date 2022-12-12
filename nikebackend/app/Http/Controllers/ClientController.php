<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Clientes::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('dashboard');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    public function getClient($name){
        $cliente = Clientes::where('nombre', $name)->get();
        return $cliente;

    }

    public function index()
    {
        //
        $cliente = Clientes::all();
        return $cliente;
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
        $cliente = new Clientes();
        $cliente->email = $request->email;
        $cliente->password = $request->password;
        $cliente->nombre = $request->nombre;
        $cliente->telefono = $request->telefono;
        $cliente->fecha_nac = $request->fecha_nac;
        $cliente->region = $request->region;
        $cliente->ciudad = $request->ciudad;
        $cliente->domicilio = $request->domicilio;
        $cliente->codigo_postal = $request->codigo_postal;
        $cliente->save();
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
        $cliente = Clientes::find($id);
        echo('todo bien');
        return $cliente;
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

        $cliente = Clientes::findOrFail($request->id);
        $cliente->email = $request->email;
        $cliente->password = $request->password;
        $cliente->nombre = $request->nombre;
        $cliente->telefono = $request->telefono;
        $cliente->fecha_nac = $request->fecha_nac;
        $cliente->region = $request->region;
        $cliente->ciudad = $request->ciudad;
        $cliente->domicilio = $request->domicilio;
        $cliente->codigo_postal = $request->codigo_postal;
        $cliente->save();
         return $cliente;
    }
    public function Userlogin(Request $request)
    {
        //
        $cliente = Clientes::findOrFail($request->email);
         return $cliente;
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
        $cliente = Clientes::find($id)->delete();
        return $cliente;
    }
}
