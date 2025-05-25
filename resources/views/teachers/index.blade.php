@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{asset('css/tabla.css')}}">
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
        </tr>
    </thead>
    <tbody>
        @foreach($teachers as $teacher)
        <tr>
            <td class="fil">{{$teacher->id}}</td>
            <td class="fil">{{$teacher->name}}</td>
            <td class="fil">{{$teacher->email}}</td>
            <td class="fil">{{$teacher->area_id}}</td>
            <td class="fil">{{$teacher->training_center_id}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection