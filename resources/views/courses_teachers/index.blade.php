@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/tabla.css') }}">

    <h2 class="texto">Relaciones Cursos - Instructores</h2>
    <a href="{{ route('courseteacher.create') }}" class="btn btn-success">Crear </a>
    <table class='tabla'>
        <thead>
            <tr class="columnas">
                <th class='tx'>ID</th>
                <th class="tx">ID Curso</th>
                <th class="tx">ID Instructor</th>
                <th class="tx">Actualizar</th>
                <th class="tx">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
                @foreach ($course->teachers as $teacher)
                    <tr>
                        <td class="fil">{{ $teacher->pivot->id }}</td>
                        <td class="fil">{{ $course->id }}</td>
                        <td class="fil">{{ $teacher->id }}</td>
                        <td class="fil"> <a href="{{ route('courseteacher.edit', [$course->id, $teacher->id]) }}"class="btn btn-success btn-sm">Editar</a></td>
                        <td class="fil">
                            <form action=" {{ route('courses.teachers.destroy', [$course->id, $teacher->id]) }} " method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button type="submit"
                                    class="btn btn-danger d-flex align-items-center justify-content-center gap-2 mx-auto">
                                    <i class="bi bi-trash-fill"></i> Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endforeach
        </tbody>
    </table>
@endsection
