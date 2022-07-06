<h1>Listado de Frutas detalles</h1>
<h2>{{$fruta->nombre}}</h2>
<p>
    {{-- {{$fruta->id}} --}}
    {{$fruta->descripcion}}
    {{-- {{$fruta->precio}} --}}
</p>

<a href="{{action('FrutaController@delete',['id' => $fruta->id])}}">Eliminar</a>
<a href="{{action('FrutaController@editConsulta',['id' => $fruta->id])}}">Actualizar</a>

