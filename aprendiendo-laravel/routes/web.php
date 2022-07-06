<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use phpDocumentor\Reflection\DocBlock\Tags\Uses;

Route::get('/', function () {
    // return view('welcome');
    return view('vistaPruebas');
    // echo "<h1>Hola mundo</h1>";
});
Route :: get('/formulario','PeliculaController@formulario');
Route :: Post('/recibir','PeliculaController@recibir');
// Route::get('/peliculas/{pagina?}', 'PeliculaController@index');
Route::get('/detalle/{year?}', [
    'middleware' => 'testYear',
    'uses' => 'PeliculaController@detalle',
    'as' => 'pelicula.detalle'
]);
Route::get('/peliculas/{pagina?}', [
    'uses' => 'PeliculaController@index',
    'as' => 'pelicula.index'
]);


#grupo de rutas
Route :: group(['prefix'=>'frutas'],function(){
    Route :: get('index','FrutaController@index');
    Route :: get('detalles/{id?}','FrutaController@detalles');
    //se ocupan 2 rutas, 1 para llamar al controlador(get) y otro a la vista(post)
    Route :: get('crear','FrutaController@crear');
    Route :: post('save','FrutaController@save');
    //para borrar y edit, que depende de detalles
    Route :: get('delete/{id}','FrutaController@delete');
    #para actualizar un registro 1.-(editConsulta(obtiene id) y update actualiza)
    Route :: get('edit/{id}','FrutaController@editConsulta');
    Route :: post('update','FrutaController@update');
});


// Route::get('peliculas', \App\Http\Controllers\PeliculaController);

#para crear rutas de tipo resource

Route :: resource('usuario','UsuarioController');


/*
Get: conseguir datos
Post : guardar datos
Put: actualizar recursos
delete: eliminar recursos
*/
/*
Route::get('/mostrarFecha', function () {
    $titulo = "estoy mostrando la fecha";
    return view('mostrarFecha', $arrayParametro = array('algo' => $titulo));
});
#pasar varios parametros a la ruta
Route::get('/pelicula/{titulo?}/{year?}', function ($titulo = 'No hay una pelicula seleccionada',$year = 2022) {
    return view('pelicula', $arrayParametro = array(
        'titulo' => $titulo,
        'year'=> $year));
})->where($arrayName = array(
    'titulo' => '[a-z]+',
    'year' => '[0-9]+'
    ));//condiciones con expresiones inclusivas


#
Route :: get('/listado-peliculas',function(){
    $titulo = "Listado Peliculas";
    $listado = $arrayName = array('batman','spider','algo');
    // return view('peliculas.listado',$parametro = array('titulo' => $titulo));
    #para renderizar una vista
    return view('peliculas.listado')
    ->with('titulo',$titulo)
    ->with('listado',$listado)
    ;
});

Route :: get('pagina-generica',function(){

    return view('pagina');
});
*/
