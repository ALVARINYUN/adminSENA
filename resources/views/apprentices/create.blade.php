@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('css/registrocomputer.css')}}">
      <div class="container">
        <div class="main-container">
            <h2 class="text-center mb-4">Registrar Nuevo aprendiz</h2>
            
            <form action="{{route('apprentices.store')}}" method="POST" enctype="multipart/form-data">
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
                    <label for="marca" class="form-label fw-bold">Numero celular</label>
                    <input type="text" class="form-control" id="marca" placeholder="Celular" name="cell_number">
                </div>
                <div class="mb-4">
                    <label for="marca" class="form-label fw-bold">Id curso</label>
                    <input type="text" class="form-control" id="marca" placeholder="id_Curso" name="curse_id">
                </div>
                <div class="mb-4">
                    <label for="marca" class="form-label fw-bold">Id computador</label>
                    <input type="text" class="form-control" id="marca" placeholder="id_computador" name="computer_id">
                </div>

                <div class="d-flex justify-content-end gap-3">
                    <a href="{{route('apprentices.index') }}" class="btn btn-outline-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-sena">Guardar </button>
                </div>
            </form>
        </div>
    </div>
@endsection
