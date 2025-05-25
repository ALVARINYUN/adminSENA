@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/tabla.css') }}">
    <h2 class="texto">Cursos</h2>
    <a href="{{ route('course.create') }}" class="btn btn-success">Crear </a>
    <table class='tabla'>
        <thead>
            <tr class="columnas">
                <th class='tx'>ID</th>
                <th class="tx">Numero</th>
                <th class="tx">Dia</th>
                <th class="tx">area_id</th>
                <th class="tx">Training_center_id</th>
                <th class="tx">Actualizar</th>
                <th class="tx">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
                <tr>
                    <td class="fil">{{ $course->id }}</td>
                    <td class="fil">{{ $course->course_number }}</td>
                    <td class="fil">{{ $course->day }}</td>
                    <td class="fil">{{ $course->area_id }}</td>
                    <td class="fil">{{ $course->training_center_id }}</td>
                    <td class="fil"> <a href=""class="btn btn-success btn-sm">Editar</a></td>
                    <td class="fil">
                        <form action="{{route('course.destroy', $course->id)}}" method="POST" class="d-inline">
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
        </tbody>
    </table>
@endsection
