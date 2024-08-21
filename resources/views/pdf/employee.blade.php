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

    <img src="{{ public_path('storage/qr-codes/employee-' . $empleado->id . '.png') }}" alt="Employee QR Code">
</body>
</html>
