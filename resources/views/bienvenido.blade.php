@extends('layouts.app')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('css/bienvenido.css')}}">
<body>
    <main class="main">
        <div class="bienvenido">
            <h2 class="titulo">¡Bienvenidos!</h2>
            <p class="texto">
                Plataforma integral para la gestión eficiente de aprendices, instructores, cursos, sedes, áreas formativas y equipos institucionales.<br>
                
            </p>
        </div>
    </main>
</body>
@endsection