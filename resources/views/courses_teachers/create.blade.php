@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('css/registrocomputer.css')}}">
      <div class="container">
        <div class="main-container">
            <h2 class="text-center mb-4">Registrar curso-instructores</h2>
            
            <form action="{{route('courseteacher.store')}}" method="POST" enctype="multipart/form-data">
                @csrf 
                <div class="mb-4">
                    <label for="inventario" class="form-label fw-bold">Id curso</label>
                    <input type="text" class="form-control" id="inventario" placeholder="Course_id" name="course_id">
                </div>

                <div class="mb-4">
                    <label for="marca" class="form-label fw-bold">Id instructor</label>
                    <input type="text" class="form-control" id="marca" placeholder="Teacher_id" name="teacher_id">
                </div>
                <div class="d-flex justify-content-end gap-3">
                    <a href="{{route('courseteacher.index') }}" class="btn btn-outline-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-sena">Guardar </button>
                </div>
            </form>
        </div>
    </div>
@endsection