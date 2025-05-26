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
                            Actualizar Instructor
                        </h2>
                    </div>

                    <div class="card-body p-4">
                        <form action="{{ route('teacher.update', $teacher->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row g-4">
                                <!-- Columna Izquierda -->
                                <div class="col-md-6">
                                    <!-- Nombre completo -->
                                    <div class="mb-4">
                                        <label class="form-label fw-bold text-success">
                                            <i class="bi bi-person-badge me-2"></i>Nombre
                                        </label>
                                        <input type="text"
                                            class="form-control @error('name') is-invalid @enderror"
                                            name="name" value="{{ old('name', $teacher->name) }}"
                                            placeholder="Ej: Numero del curso">
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label fw-bold text-success">
                                            <i class="bi bi-envelope me-2"></i>Email
                                        </label>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email', $teacher->email) }}" placeholder="email">
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                     <div class="mb-4">
                                        <label class="form-label fw-bold text-success">
                                            <i class="bi bi-envelope me-2"></i>Id area
                                        </label>
                                        <input type="text"
                                            class="form-control @error('area_id') is-invalid @enderror"
                                            name="area_id"
                                            value="{{ old('area_id', $teacher->area_id) }}"
                                            placeholder="area_id">
                                        @error('area_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label fw-bold text-success">
                                            <i class="bi bi-envelope me-2"></i>Id Centros de formacion
                                        </label>
                                        <input type="text"
                                            class="form-control @error('training_center_id') is-invalid @enderror"
                                            name="training_center_id"
                                            value="{{ old('training_center_id', $teacher->training_center_id) }}"
                                            placeholder="training_center_id">
                                        @error('training_center_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                    </div>
                </div>

                <!-- Botón centrado -->
                <div class="d-grid mt-4 col-md-8 mx-auto">
                    <button type="submit" class="btn btn-lg text-white fw-bold"
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
