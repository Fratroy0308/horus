<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;

class SitioController extends Controller
{
    public function contacto($codigo = null)
    {
        
        if($codigo==1234){
            $nombre = 'Raul';
            $correo = 'raul@gmail.com';
            $comentario = 'prueba de clase';
        }else{
            $nombre = null;
            $correo = null;
            $comentario = null;
        }
        return view('paginas.contacto', compact('nombre', 'correo', 'comentario'));
    }

    public function landingpage() 
    {
        return view('paginas.landingpage');
    }

    public function menu() 
    {
        return view('menu.index');
    }

    public function guardar(Request $request) 
    {
        //dd($request->all());

        $request->validate([
            'nombre' => 'required|max:255|min:3', 
            'correo' => ['required', 'email'], 
            'comentario' => 'required', 
        ]);   


       // DB::table('contactos')->insert($request->except('_token'));

       // $contacto = new Contacto()
       // $contacto->nombre = $request->nombre;
       // $contacto->correo = $request->correo;
       // $contacto->comentario = $request->comentario;
       // $contacto-> save();

       // Contacto::create([
        // 'nombre' =>  $request->nombre,
        // 'correo' => $request->correo,
       //  'comentario' => $request->comentario, 
       // ]);
       Contacto::create($request->all());

       return redirect('/contacto');
    }

    public function index() 
    {
        $contactos = contacto::all();
        return view('contacto.contactoIndex', compact('contactos'));
    }

    public function show($id) 
    {
       
    }

    public function update(Request $request) 
    {
       
    }

    public function delete(Request $request) 
    {
       
    }

}