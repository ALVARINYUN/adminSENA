@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('css/registrocomputer.css')}}">
      <div class="container">
        <div class="main-container">
            <h2 class="text-center mb-4">Registrar Nueva area</h2>
            
            <form action="{{route('areas.store')}}" method="POST" enctype="multipart/form-data">
                @csrf 
                <div class="mb-4">
                    <label for="inventario" class="form-label fw-bold">Nombre</label>
                    <input type="text" class="form-control" id="name" placeholder="Nombre" name="name">
                </div>
                <div class="d-flex justify-content-end gap-3">
                    <a href="{{route('areas.index') }}" class="btn btn-outline-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-sena">Guardar </button>
                </div>
            </form>
        </div>
    </div>
@endsection
