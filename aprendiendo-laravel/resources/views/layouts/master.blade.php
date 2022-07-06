<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Titulo - @yield('titulo')</title>
</head>

<body>
    @section('header')
        <h1>CABECERA DE LA WEB (master) </h1>
    @show
    <hr>

    <div class='container'>
        @yield('content')
    </div>
    <hr>

    @section('footer')
        PIE DE PÁGINA DE LA WEB (master)
    @show

    {{-- @endsection --}}
</body>

</html>
