@extends('layouts.app')
@section('content')
<div class="container min-vh-100 d-flex align-items-center">
    <div class="row justify-content-center w-100">
        <div class="col-xl-6 col-lg-8 col-md-10">
            <div class="card border-0 shadow-lg" style="border-radius: 15px;">
                <!-- Encabezado con estilo SENA -->
                <div class="card-header py-3 text-white" style="background-color: #389045; border-radius: 15px 15px 0 0;">
                    <h2 class="h4 mb-0">
                        <i class="bi bi-pencil-square me-2"></i> 
                        Actualizar Aprendiz
                    </h2>
                </div>

                <div class="card-body p-4">
                    <form action="{{ route('apprentice.update', $apprentice->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row g-4">
                            <!-- Columna Izquierda -->
                            <div class="col-md-6">
                                <!-- Nombre completo -->
                                <div class="mb-4">
                                    <label class="form-label fw-bold text-success">
                                        <i class="bi bi-person-badge me-2"></i>Nombre completo
                                    </label>
                                    <input type="text" 
                                           class="form-control @error('name') is-invalid @enderror" 
                                           name="name"
                                           value="{{ old('name', $apprentice->name) }}"
                                           placeholder="Ej: Juan Pérez">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Email -->
                                <div class="mb-4">
                                    <label class="form-label fw-bold text-success">
                                        <i class="bi bi-envelope me-2"></i>Correo electrónico
                                    </label>
                                    <input type="email" 
                                           class="form-control @error('email') is-invalid @enderror" 
                                           name="email"
                                           value="{{ old('email', $apprentice->email) }}"
                                           placeholder="juan@sena.edu.co">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Columna Derecha -->
                            <div class="col-md-6">
                                <!-- Teléfono -->
                                <div class="mb-4">
                                    <label class="form-label fw-bold text-success">
                                        <i class="bi bi-phone me-2"></i>Teléfono
                                    </label>
                                    <input type="tel" 
                                           class="form-control @error('cell_number') is-invalid @enderror" 
                                           name="cell_number"
                                           value="{{ old('cell_number', $apprentice->cell_number) }}"
                                           placeholder="300 1234567">
                                    @error('cell_number')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- IDs con mejor espaciado -->
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label fw-bold text-success">
                                                <i class="bi bi-journal-bookmark me-2"></i>ID Curso
                                            </label>
                                            <input type="text" 
                                                   class="form-control @error('course_id') is-invalid @enderror" 
                                                   name="course_id"
                                                   value="{{ old('course_id', $apprentice->course_id) }}">
                                            @error('course_id')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label fw-bold text-success">
                                                <i class="bi bi-pc me-2"></i>ID Computador
                                            </label>
                                            <input type="text" 
                                                   class="form-control @error('computer_id') is-invalid @enderror" 
                                                   name="computer_id"
                                                   value="{{ old('computer_id', $apprentice->computer_id) }}">
                                            @error('computer_id')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Botón centrado -->
                        <div class="d-grid mt-4 col-md-8 mx-auto">
                            <button type="submit" 
                                    class="btn btn-lg text-white fw-bold" 
                                    style="background-color: #389045; transition: 0.3s;"
                                    onmouseover="this.style.backgroundColor='#2c6e37'" 
                                    onmouseout="this.style.backgroundColor='#389045'">
                                <i class="bi bi-save me-2"></i>Guardar Cambios
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
