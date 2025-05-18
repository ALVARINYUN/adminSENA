@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{asset('css/tabla.css')}}">
<h2 class="texto">Areas</h2>

<table class='tabla'>
    <thead>
        <tr class="columnas">
           <th class='tx'>ID</th>
           <th class="tx">Nombre</th>
        </tr>
    </thead>
    <tbody>
        @foreach($areas as $area)
        <tr>
            <td class="fil">{{$area->id}}</td>
            <td class="fil">{{$area->name}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection