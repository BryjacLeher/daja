<!DOCTYPE html>
<html>
<head>
    <title>Employee Information</title>
    <style>
        /* Agrega estilos si es necesario */
    </style>
</head>
<body>
    <h1>Employee Information</h1>
    <p>Employee ID: {{ $empleado->id }}</p>
    <p>Name: {{ $empleado->nombre }} {{ $empleado->apellido }}</p>
    <p>Phone: {{ $empleado->telefono }}</p>
    <p>Pay Per Hour: ${{ $empleado->paga_por_hora }}</p>

    <!-- Usa qrCodePath para la imagen del QR -->
    <img src="{{ $qrCodePath }}" alt="Employee QR Code">
</body>
</html>
