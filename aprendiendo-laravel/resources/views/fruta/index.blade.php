<h1>Listado de Frutas</h1>
<h2><a href="{{action('FrutaController@crear')}}">Crear nueva fruta</a></h2>
{{-- este if es para mostrar los mensajes de eliminar y guardado  --}}
@if (session('status'))
<p style="background: green; color: aliceblue">
{{session('status')}}
</p>
@endif

<ul>
    @foreach ($frutas as $fruta )
    <li>
        <a href="{{action('FrutaController@detalles',['id'=>$fruta->id])}}">
            {{ $fruta->id .' - '. $fruta->nombre}}
        </a>
    </li>
    @endforeach
</ul>
