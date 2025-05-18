@extends('layouts.app')


@section('content')
<link rel="stylesheet" href="{{asset('css/tabla.css')}}">
<h2 class="texto">Sedes</h2>

<table class="tabla">
    <thead>
        <tr class="columnas">
            <th class="tx">ID</th>
            <th class="tx">Nombre</th>
            <th class="tx">Direccion</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($trainingsCenters as $trainingCenter)
            <tr>
                <td class="fil">{{ $trainingCenter->id }}</td>
                <td class="fil">{{ $trainingCenter->name }}</td>
                <td class="fil">{{ $trainingCenter->location }}</td>
                
            </tr>
        @endforeach
    </tbody>
</table>
@endsection