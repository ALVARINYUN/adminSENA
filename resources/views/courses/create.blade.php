@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('css/registrocomputer.css')}}">
      <div class="container">
        <div class="main-container">
            <h2 class="text-center mb-4">Registrar Nuevo curso</h2>
            
            <form action="{{route('course.store')}}" method="POST" enctype="multipart/form-data">
                @csrf 
                <div class="mb-4">
                    <label for="inventario" class="form-label fw-bold">Numero curso</label>
                    <input type="text" class="form-control" id="inventario" placeholder="Number" name="course_number">
                </div>

                <div class="mb-4">
                    <label for="marca" class="form-label fw-bold">Dia</label>
                    <input type="text" class="form-control" id="marca" placeholder="curse_number" name="day">
                </div>
                <div class="mb-4">
                    <label for="marca" class="form-label fw-bold">Area_id</label>
                    <input type="text" class="form-control" id="marca" placeholder="area_id" name="area_id">
                </div>
                <div class="mb-4">
                    <label for="marca" class="form-label fw-bold">Training_center_id</label>
                    <input type="text" class="form-control" id="marca" placeholder="training_center_id" name="training_center_id">
                </div>
                <div class="d-flex justify-content-end gap-3">
                    <a href="{{route('course.index') }}" class="btn btn-outline-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-sena">Guardar </button>
                </div>
            </form>
        </div>
    </div>
@endsection
