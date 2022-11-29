<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use App\Models\producto;
use App\Models\venta;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function __Construct(){
        $this->middleware('auth')->only('create','edit','destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = cliente::all();
        return view('cliente.clienteIndex', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.cliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:255|min:3', 
            'correo' => ['required', 'email'], 
            'telefono' => 'required', 
            'direccion' => 'required', 
        ]);   

        Cliente::create($request->all());

        return redirect('/cliente');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(cliente $cliente)
    {
        $productos = producto::all();
        //$productos = DB::table('proveedors')
        //->join('productos', 'productos.proveedor_id', '=', 'proveedors.id')
        //->get();

        $ventas = $cliente->ventas;
        //$ventas = venta::where('idcliente',  $cliente->id)->get();
        return view('cliente.clienteShow', compact('cliente', 'ventas', 'productos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(cliente $cliente)
    {
        return view('cliente.clienteEdit', compact('cliente'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cliente $cliente)
    {
        //
        //dd($request->all());
        $request->validate([
            'nombre' => 'required|max:255|min:3', 
            'correo' => ['required', 'email'], 
            'telefono' => 'required', 
            'direccion' => 'required', 
        ]);   

        Cliente::where('id', $cliente->id)->update($request->except('_token', '_method'));

        return redirect('/cliente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(cliente $cliente)
    {
        //
        $cliente->delete();
        return redirect('/cliente');
    }
}
