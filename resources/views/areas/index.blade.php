@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/tabla.css') }}">
    <h2 class="texto">Areas</h2>
    <a href="{{ route('areas.create') }}" class="btn btn-success">Crear </a>
    <table class='tabla'>
        <thead>
            <tr class="columnas">
                <th class='tx'>ID</th>
                <th class="tx">Nombre</th>
                <th class="tx">Actualizar</th>
                <th class="tx">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($areas as $area)
                <tr>
                    <td class="fil">{{ $area->id }}</td>
                    <td class="fil">{{ $area->name }}</td>
                    <td class="fil"> <a href=""class="btn btn-success btn-sm">Editar</a></td>
                    <td class="fil">
                        <form action="{{route('area.destroy', $area->id)}}" method="POST" class="d-inline">
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
