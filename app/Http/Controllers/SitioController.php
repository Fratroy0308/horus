<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitioController extends Controller
{
    public function contacto($codigo = null)
    {
        
    if($codigo==1234){
        $nombre = 'Nombre de prueba';
        $correo = 'correo@gmial.com';
        $comentario = 'El comentario es una prueba';
    }else{
        $nombre = null;
        $correo = null;
        $comentario = null;
    }

    
    return view('paginas.contacto', compact('nombre', 'correo', 'comentario'));
    
    }
    //

    public function landingpage() {
        return view('paginas.landingpage');
    }

}