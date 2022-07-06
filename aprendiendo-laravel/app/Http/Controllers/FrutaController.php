<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrutaController extends Controller
{
    public function index()
    { //es como hacer un select *
        $frutas = DB::table('frutas')->orderBy('id', 'desc')->get(); //funciona como sql
        return view('fruta.index', ['frutas' => $frutas]);
    }

    public function detalles($id = 1)
    {
        //where(campo,operador,dato que se consulta)
        $frutas = DB::table('frutas')->where('id', '=', $id)->first();
        //$frutas es un objeto y con la funcion first sirve para tomar solo el objeto
        $arrayName = array('fruta' => $frutas);
        return view('fruta.detalles', $arrayName);
    }
    public function crear()
    {
        return view('fruta.crear');
    }
    public function save(Request $request)
    {
        $fruta = DB::table('frutas')->insert(array(
            //en el input, debe de ser igual al name del html
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'precio' => $request->input('precio'),
            'fecha' => date('Y-m-d')
        ));

        return redirect()->action('FrutaController@index')->with('status', 'Fruta creada Correctamente');
    }
    #delete y edit viene de la vista detalles.blade.php
    public function delete($id)
    {
        $fruta = DB::table('frutas')->where('id', $id)->delete();
        return redirect()->action('FrutaController@index')->with('status', 'Fruta borrada Correctamente');
    }

    public function editConsulta($id)
    {
        #1.- sacar el registro de bd
        $fruta = DB::table('frutas')->where('id', $id)->first();
        // var_dump($fruta);
        #2.-pasarle a la vista el objeto y rellenar el formulario
        return view('fruta.crear', ['fruta' => $fruta]); //reutilizamos vista para guardar
    }

    public function update(Request $request){
        $fruta = DB::table('frutas')->where('id',$request->input('id'))->update(array(
            //en el input, debe de ser igual al name del html
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'precio' => $request->input('precio')
        ));

        return redirect()->action('FrutaController@index')->with('status', 'Fruta actualizada Correctamente');
    }

}
