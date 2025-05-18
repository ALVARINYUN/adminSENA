@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/tabla.css') }}">

<h2 class="texto">Relaciones Cursos - Instructores</h2>

<table class='tabla'>
    <thead>
        <tr class="columnas">
            <th class='tx'>ID</th>
            <th class="tx">ID Curso</th>
            <th class="tx">ID Instructor</th>
        </tr>
    </thead>
    <tbody>
        @foreach($courses as $course)
            @foreach($course->teachers as $teacher)
            <tr>
                <td class="fil">{{ $teacher->pivot->id }}</td>
                <td class="fil">{{ $course->id }}</td>
                <td class="fil">{{ $teacher->id }}</td>
            </tr>
            @endforeach
        @endforeach
    </tbody>
</table>

@endsection