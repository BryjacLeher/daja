@extends('layouts.general')

@section('title', 'Editar Empleado')
@section('content')
<div class="text-center titulo">Editar Empleado</div>
    <form action="{{ route('empleados.update', $empleado->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="contenedoralineados">
            {{-- Contenedor "leftcolumn" --}}
            <div class="leftcolumn">
                <div class="mb-3">
                    <label for="nombre">Nombre <span style="color: red;">*</span></label>
                    <input type="text" class="form-control campo_formulario" id="nombre" name="nombre" value="{{ $empleado->nombre }}" required>
                </div>
                <div class="mb-3">
                    <label for="apellido">Apellido <span style="color: red;">*</span></label>
                    <input type="text" class="form-control campo_formulario" id="apellido" name="apellido" value="{{ $empleado->apellido }}" required>
                </div>
                <div class="mb-3">
                    <label for="telefono">Teléfono</label>
                    <input type="text" class="form-control campo_formulario" id="telefono" name="telefono" value="{{ $empleado->telefono }}">
                </div>
            </div>
        
            {{-- Contenedor "rightcolumn" --}}
            <div class="rightcolumn">
                <div class="mb-3">
                    <label for="paga_por_hora">Paga por Hora <span style="color: red;">*</span></label>
                    <input type="number" step="0.01" class="form-control campo_formulario" id="paga_por_hora" name="paga_por_hora" value="{{ $empleado->paga_por_hora }}" required>
                </div>
            </div>
        </div>
        
        {{-- Contenedor "fulldebajo" --}}
        <div class="fulldebajo">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-primary gruesa">Guardar cambios</button>
            </div>
        </div>
    </form>
@endsection
