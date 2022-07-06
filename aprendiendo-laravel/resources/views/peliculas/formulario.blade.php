<h1>Formulario en Laravel</h1>
<form action="{{action('PeliculaController@recibir')}}" method="POST">
    {{csrf_field()}}
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre">
    <br>
    <label for="email">Nombre</label>
    <input type="email" name="email">
    <br>
    <input type="Submit" value="Enviar">
</form>
