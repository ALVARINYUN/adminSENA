@extends('layouts.app')


@section('content')
<link rel="stylesheet" href="{{asset('css/tabla.css')}}">
<h2 class="texto">Lista de estudiantes</h2>

<table class="tabla">
    <thead>
        <tr class="columnas">
            <th class="tx">ID</th>
            <th class="tx">Nombre</th>
            <th class="tx">Email</th>
            <th class="tx">Teléfono</th>
            <th class="tx">Curso ID</th>
            <th class="tx">Computador ID</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($apprentices as $apprentice)
            <tr>
                <td class="fil">{{ $apprentice->id }}</td>
                <td class="fil">{{ $apprentice->name }}</td>
                <td class="fil">{{ $apprentice->email }}</td>
                <td class="fil">{{ $apprentice->cell_number }}</td>
                <td class="fil">{{ $apprentice->course_id }}</td>
                <td class="fil">{{ $apprentice->computer_id }}</td>
                
            </tr>
        @endforeach
    </tbody>
</table>
@endsection