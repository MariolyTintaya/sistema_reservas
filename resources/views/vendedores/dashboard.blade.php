<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Vendedor</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-100 flex flex-col">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-purple-600 text-white shadow-lg">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Panel Vendedor</span>
            <div class="d-flex">
                @if (Auth::check())
                <span class="navbar-text me-3 user-name">
                    {{ Auth::user()->nombre }}
                </span>
                @else
                <span class="navbar-text me-3">
                    No hay usuario autenticado.
                </span>
                @endif
                <a href="{{ route('logout') }}" class="btn btn-link"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Cerrar sesión
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </nav>

    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-header">
                <img src="{{ asset('images/FONDO.jpg') }}" alt="Logo" class="rounded-full object-cover">
                <h2 class="text-3xl font-bold text-white">London Travel Bolivia</h2>
            </div>
            <div class="sidebar-content">
                <nav class="mt-6">
                    <ul>
                        <li>
                            <button id="toggleReservas" class="block w-100 py-3 px-4 text-white font-bold text-start btn btn-link btn-reserva">
                                Reservas
                            </button>
                            <div id="reservasMenu" class="d-none">
                                <ul class="list-unstyled ps-4">
                                    <li><a href="{{ route('reservas.create') }}" class="text-white text-decoration-none">Crear una Reserva</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <button id="toggleRutas" class="block w-100 py-3 px-4 text-white font-bold text-start btn btn-link btn-destino">
                                Destino
                            </button>
                            <div id="rutasMenu" class="d-none">
                                <ul class="list-unstyled ps-4">
                                  <li><a href="{{ route('destinos.index') }}" class="text-white text-decoration-none">Destinos</a></li>
                                  <li><a href="{{ route('destinos.create') }}" class="text-white text-decoration-none">Nuevo Destino</a></li>
                                  <li><a href="{{ route('paradas.create') }}" class="text-white text-decoration-none">Nueva Parada</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <button id="togglePaquete" class="block w-100 py-3 px-4 text-white font-bold text-start btn btn-link btn-destino">
                                Paquete
                            </button>
                            <div id="paqueteMenu" class="d-none">
                                <ul class="list-unstyled ps-4">
                                  <li><a href="{{ route('tours.index') }}" class="text-white text-decoration-none">Tour</a></li>
                                  <li><a href="{{ route('tours.create') }}" class="text-white text-decoration-none">Nuevo Tour</a></li>
                                  <li><a href="{{ route('guia.create') }}" class="text-white text-decoration-none">Nuevo Guia</a></li>
                                  <li><a href="{{ route('paquetes.create') }}" class="text-white text-decoration-none">Nuevo Paquete</a></li>
                                  <li><a href="{{ route('transportes.create') }}" class="text-white text-decoration-none">Nuevo Transporte</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- resources/views/components/lista-reservas.blade.php -->
        <div>
            @foreach ($reservas as $reserva)
                <p>{{ $reserva->cliente->nombre }}</p>
                <p>{{ $reserva->tour->nombre }}</p>
                <p>{{ $reserva->transporte->nombre }}</p>
            @endforeach
        </div>

        <!-- Agregar enlaces de paginación -->
        <div class="pagination">
            {{ $reservas->links() }}
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('toggleReservas').addEventListener('click', function () {
            const reservasMenu = document.getElementById('reservasMenu');
            reservasMenu.classList.toggle('d-none');
        });

        document.getElementById('toggleRutas').addEventListener('click', function () {
            const rutasMenu = document.getElementById('rutasMenu');
            rutasMenu.classList.toggle('d-none');
        });

        document.getElementById('togglePaquete').addEventListener('click', function () {
            const paqueteMenu = document.getElementById('paqueteMenu');
            paqueteMenu.classList.toggle('d-none');
        });
    </script>
</body>

</html>
