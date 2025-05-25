@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{asset('css/tabla.css')}}">
<h2 class="texto">Computadores</h2>
<a href="{{ route('computers.create') }}" class="btn btn-success">Crear </a>
<table class='tabla'>
    <thead>
        <tr class="columnas">
           <th class='tx'>ID</th>
           <th class="tx">Numero</th>
           <th class="tx">Marca</th>
        </tr>
    </thead>
    <tbody>
        @foreach($computers as $computer)
        <tr>
            <td class="fil">{{$computer->id}}</td>
            <td class="fil">{{$computer->number}}</td>
            <td class="fil">{{$computer->brand}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection