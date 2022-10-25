<?php

namespace App\Http\Controllers;

use App\Models\proveedor;
use App\Models\producto;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores = proveedor::all();
        return view('proveedor.proveedorIndex', compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proveedor.proveedor');
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
            'proveedor' => 'required|max:255|min:3', 
            'correo' => ['required', 'email'], 
            'telefono' => 'required', 
            'direccion' => 'required', 
        ]);   

        Proveedor::create($request->all());

        return redirect('/proveedor');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function show(proveedor $proveedor)
    {
        return view('proveedor.proveedorShow', compact('proveedor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function edit(proveedor $proveedor)
    {
        return view('proveedor.proveedorEdit', compact('proveedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, proveedor $proveedor)
    {
        $request->validate([
            'proveedor' => 'required|max:255|min:3', 
            'correo' => ['required', 'email'], 
            'telefono' => 'required', 
            'direccion' => 'required', 
        ]);   

        Proveedor::where('id', $cliente->id)->update($request->except('_token', '_method'));

        return redirect('/proveedor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(proveedor $proveedor)
    {
        $proveedor->delete();
        return redirect('/proveedor');
    }
}
