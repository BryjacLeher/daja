<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @include('layouts.styles')
    <title>@yield('title')</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<script>
    $(document).ready(function() {
        $('table').addClass('table table-striped table-hover table-bordered');
        $('th').addClass('align-middle text-center');
    });
</script>

<body class="text-dark">
    <div class="text-center header">
        <p class="m-0 h4">DAJA painting and cleaning</p>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item ms-3">
                        <a class="nav-link" aria-current="page" href="{{ route('empleados.index') }}">Nuevo Empleado</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link" href="">Pasar Lista</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <br>
    <hr>
</body>

<footer>
    <p>&copy; Bryjac leher  mail: bryjac_leher@hotmail.com Todos los derechos reservados</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>
