@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/tabla.css') }}">
    <h2 class="texto">Teacher</h2>
    <a href="{{ route('teacher.create') }}" class="btn btn-success">Crear </a>
    <table class='tabla'>
        <thead>
            <tr class="columnas">
                <th class='tx'>ID</th>
                <th class="tx">Nombre</th>
                <th class="tx">Email</th>
                <th class="tx">area_id</th>
                <th class="tx">Training_center_id</th>
                <th class="tx">Actualizar</th>
                <th class="tx">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teachers as $teacher)
                <tr>
                    <td class="fil">{{ $teacher->id }}</td>
                    <td class="fil">{{ $teacher->name }}</td>
                    <td class="fil">{{ $teacher->email }}</td>
                    <td class="fil">{{ $teacher->area_id }}</td>
                    <td class="fil">{{ $teacher->training_center_id }}</td>
                    <td class="fil"> <a href="{{route('teacher.edit', $teacher->id)}}"class="btn btn-success btn-sm">Editar</a></td>
                    <td class="fil">
                        <form action="{{route('teacher.destroy', $teacher->id)}}" method="POST" class="d-inline">
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
