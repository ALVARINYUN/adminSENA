@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{asset('css/tabla.css')}}">
<h2 class="texto">Cursos</h2>
<table class='tabla'>
    <thead>
        <tr class="columnas">
           <th class='tx'>ID</th>
           <th class="tx">Numero</th>
           <th class="tx">Dia</th>
           <th class="tx">area_id</th>
           <th class="tx">Training_center_id</th>
        </tr>
    </thead>
    <tbody>
        @foreach($courses as $course)
        <tr>
            <td class="fil">{{$course->id}}</td>
            <td class="fil">{{$course->course_number}}</td>
            <td class="fil">{{$course->day}}</td>
            <td class="fil">{{$course->area_id}}</td>
            <td class="fil">{{$course->training_center_id}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection