@include('includes.header')
<?php
echo "<h1> {$titulo} </h1>";
echo "<h2> $listado[1] </h2>";
echo '<br>';
?>
<h3>{{ $listado[0] }}</h3>
{{-- comentarios --}}

{{-- php isset --}}
<?= isset($director) ? $director : 'no existe director en php' ?>
<br>

{{-- laravel isset --}}
{{ $director ?? 'no existe director en blade' }}

{{-- ------------------------------------------------------------------------------------------------- --}}
{{-- estructuras de control --}}
@if ($titulo && count($listado) >= 5)
    <h1>el titulo existe y el listado si es mayor a 5: {{ count($listado) }}</h1>
@elseif($titulo)
    <h1>el titulo existe y el listado NO es mayor a 5: {{ count($listado) }} , </h1>
@else
    <h1>el titulo no existe</h1>
@endif

{{-- bucles --}}
@for ($i = 1; $i <= 5; $i++)
    el numero es {{ $i }}
@endfor
<hr />
{{-- while --}}
<?php $contador = 1; ?>

@while ($contador < 20)
    @if ($contador % 2 == 0)
        numero par : {{ $contador }} <br>
    @endif
    <?php $contador++; ?>
@endwhile
<hr />

{{-- foreach --}}
@foreach ($listado as $pelicula)
    <p>{{ $pelicula }}</p>
@endforeach

@include('includes.footer')
