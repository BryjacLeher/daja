@extends('layouts.general')

@section('title', 'Empleados')
@section('content')
<div class="text-center titulo">Empleados</div>
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<div class="container cuadroNavegacion">
    <!-- Formulario de búsqueda -->
<form action="{{ route('empleados.search') }}" method="GET" class="fbusqueda">
    <div class="bloqueBusqueda"> 
        <div></div>
        <div class="input-group">
            <!-- Cuadro de texto para ingresar el término de búsqueda -->
            <input type="text" name="termino" placeholder="Buscar por nombre..." class="campo" value="{{ old('termino', $termino ?? '') }}">
            <!-- Botón para enviar el formulario -->
            <button type="submit" class="btn btn-primary campobotonb"><i class="bi bi-search"></i></button>
        </div>
    </div>
</form>

    <div class="contBotonesInndex">
        <a href="{{ route('empleados.create') }}" class="btn btn-outline-success border-3 gruesa"><i class="bi bi-plus-circle-fill"></i> Nuevo</a>
    </div>
</div>

<div class="contenedorGrande">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Teléfono</th>
                <th>Paga por Hora</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $empleado)
                <tr>
                    <td>{{ $empleado->id }}</td>
                    <td>{{ $empleado->nombre }}</td>
                    <td>{{ $empleado->apellido }}</td>
                    <td>{{ $empleado->telefono }}</td>
                    <td>{{ $empleado->paga_por_hora }}</td>
                    <td>
                        <form class="btn-group centrado" action="{{ route('empleados.destroy', $empleado->id) }}" method="POST">
                            <a class="btn btn-outline-primary" href="{{ route('empleados.edit', $empleado->id) }}"><i class="bi bi-pencil-square"></i></a>                                   
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('¿Deseas borrar el empleado con ID {{$empleado->id}}?')" class="btn btn-outline-danger">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    
</div>
@if(session('pdfPath'))
        <script>
            // Descargar el archivo PDF
            const pdfPath = "{{ asset(session('pdfPath')) }}";
            const link = document.createElement('a');
            link.href = pdfPath;
            link.download = '';
            link.click();
        </script>
    @endif
@endsection
