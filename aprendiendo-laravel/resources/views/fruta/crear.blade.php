{{-- if para saber si viene de la accion edit/modificar --}}
@if (@isset($fruta) && is_object($fruta))
    <h1>Modificar una fruta</h1>
@else
    <h1> Crear una Fruta </h1>
@endif

<form action="{{ isset($fruta) ? action('FrutaController@update') : action('FrutaController@save') }}" method="POST">
    {{ csrf_field() }} {{-- se usa para  la seguridad de laravel y es obligatorio --}}
    {{-- si es para editar, le pasamos el id por un hidden --}}
    @if (@isset($fruta) && is_object($fruta))
    <input type="hidden" name="id" value="{{$fruta->id }}"><br>
    @endif
    {{-- los campos --}}
    <label for="nombre">Nombre</label><br>
    {{-- en el value = si existe el nombre mustralo y si no , no --}}
    {{-- {‌{ isset($name) ? $name : 'Valor por defecto' }} --}}
    <input type="text" name="nombre" value="{{ isset($fruta->nombre) ? $fruta->nombre : '' }}"><br>

    <label for="descripcion">Descripcion</label><br>
    <input type="text" name="descripcion" value="{{ isset($fruta->descripcion) ? $fruta->descripcion : '' }}"><br>

    <label for="precio">precio</label><br>
    <input type="number" name="precio" value="{{ isset($fruta->precio) ? $fruta->precio : 0 }}"><br>


    <input type="submit" value="Guardar">

</form>
