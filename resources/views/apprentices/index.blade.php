@extends('layouts.app')


@section('content')
    <link rel="stylesheet" href="{{ asset('css/tabla.css') }}">
    <h2 class="texto">Lista de estudiantes</h2>
    <a href="{{ route('apprentices.create') }}" class="btn btn-success">Crear </a>
    <table class="tabla">
        <thead>
            <tr class="columnas">
                <th class="tx">ID</th>
                <th class="tx">Nombre</th>
                <th class="tx">Email</th>
                <th class="tx">Teléfono</th>
                <th class="tx">Curso ID</th>
                <th class="tx">Computador ID</th>
                <th class="tx">Actualizar</th>
                <th class="tx">Eliminar</th>
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
                    <td class="fil"> <a href=""class="btn btn-success btn-sm">Editar</a></td>
                    <td class="fil">
                        <form action="{{ route('apprentice.destroy', $apprentice->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger d-flex align-items-center justify-content-center gap-2 mx-auto">
                                <i class="bi bi-trash-fill"></i> Eliminar
                            </button>
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
