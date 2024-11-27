<!-- resources/views/layouts/panel.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
   
</head>
<body>
    @include('partials.navbar') <!-- Navbar -->

    <div class="d-flex">
        @include('partials.sidebarVendedor') <!-- Sidebar -->
        
        <!-- Contenido principal -->
        <div class="flex-1 p-8 main-content">
            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('toggleClientes').addEventListener('click', function () {
            const clientesMenu = document.getElementById('clientesMenu');
            clientesMenu.classList.toggle('d-none');
        });
        document.getElementById('toggleReservas').addEventListener('click', function () {
            const reservasMenu = document.getElementById('reservasMenu');
            reservasMenu.classList.toggle('d-none');
        });

        document.getElementById('toggleRutas').addEventListener('click', function () {
            const rutasMenu = document.getElementById('rutasMenu');
            rutasMenu.classList.toggle('d-none');
        });

        document.getElementById('toggleEmpleado').addEventListener('click', function () {
            const empleadoMenu = document.getElementById('empleadoMenu');
            empleadoMenu.classList.toggle('d-none');
        });
        document.getElementById('toggleTour').addEventListener('click', function () {
            const tourMenu = document.getElementById('tourMenu');
            tourMenu.classList.toggle('d-none');
        });
    </script>
</body>

</html>