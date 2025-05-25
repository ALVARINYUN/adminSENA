@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('css/registrocomputer.css')}}">
      <div class="container">
        <div class="main-container">
            <h2 class="text-center mb-4">Registrar Nuevo Computador</h2>
            
            <form action="{{route('computers.store')}}" method="POST" enctype="multipart/form-data">
                @csrf 
                <div class="mb-4">
                    <label for="inventario" class="form-label fw-bold">Número </label>
                    <input type="text" class="form-control" id="inventario" placeholder="Ej: 12345" name="number">
                </div>

                <div class="mb-4">
                    <label for="marca" class="form-label fw-bold">Marca del Equipo</label>
                    <input type="text" class="form-control" id="marca" placeholder="Ej: Dell, HP, Lenovo" name="brand">
                </div>

                <div class="d-flex justify-content-end gap-3">
                    <a href="{{route('computers.index') }}" class="btn btn-outline-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-sena">Guardar </button>
                </div>
            </form>
        </div>
    </div>
@endsection
