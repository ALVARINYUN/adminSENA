@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/tabla.css') }}">
    <h2 class="texto">Computadores</h2>
    <a href="{{ route('computers.create') }}" class="btn btn-success">Crear </a>
    <table class='tabla'>
        <thead>
            <tr class="columnas">
                <th class='tx'>ID</th>
                <th class="tx">Numero</th>
                <th class="tx">Marca</th>
                <th class="tx">Actualizar</th>
                <th class="tx">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($computers as $computer)
                <tr>
                    <td class="fil">{{ $computer->id }}</td>
                    <td class="fil">{{ $computer->number }}</td>
                    <td class="fil">{{ $computer->brand }}</td>
                    <td class="fil"> <a href="{{route('computer.edit', $computer->id)}}"class="btn btn-success btn-sm">Editar</a></td>
                    <td class="fil">
                        <form action="{{route('computer.destroy', $computer->id)}}" method="POST" class="d-inline">
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
