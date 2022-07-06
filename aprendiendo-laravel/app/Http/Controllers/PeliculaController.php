<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Request;
class PeliculaController extends Controller
{
    public function index($pagina=1){
        $titulo = 'listado de peliculas controller';
        return view('peliculas.index',[
            'titulo' => $titulo ,
            'pagina'=> $pagina
        ]);
    }
    public function detalle(){
    return view('peliculas.detalle');
    }

    public function formulario(){
        return view('peliculas.formulario');
    }
    public function recibir(Request $request){
        $nombre =$request->input('nombre');
        $email =$request->input('email');
        return "el nombre es " .$nombre. " y el email es: ". $email;
    }
}
