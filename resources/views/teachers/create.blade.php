@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('css/registrocomputer.css')}}">
      <div class="container">
        <div class="main-container">
            <h2 class="text-center mb-4">Registrar Nuevo curso</h2>
            
            <form action="{{route('teacher.store')}}" method="POST" enctype="multipart/form-data">
                @csrf 
                <div class="mb-4">
                    <label for="inventario" class="form-label fw-bold">Nombre</label>
                    <input type="text" class="form-control" id="inventario" placeholder="Nombre" name="name">
                </div>

                <div class="mb-4">
                    <label for="marca" class="form-label fw-bold">Email</label>
                    <input type="text" class="form-control" id="marca" placeholder="Email" name="email">
                </div>
                <div class="mb-4">
                    <label for="marca" class="form-label fw-bold">Area_id</label>
                    <input type="text" class="form-control" id="marca" placeholder="Area_id" name="Area_id">
                </div>
                <div class="mb-4">
                    <label for="marca" class="form-label fw-bold">Training_center_id</label>
                    <input type="text" class="form-control" id="marca" placeholder="Training_center_id" name="Training_center_id">
                </div>
                <div class="d-flex justify-content-end gap-3">
                    <a href="{{route('teacher.index') }}" class="btn btn-outline-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-sena">Guardar </button>
                </div>
            </form>
        </div>
    </div>
@endsection