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
        <!-- Fondo semitransparente -->
        <div id="notificationOverlay" class="notification-overlay"></div>
        <!-- Notificación emergente -->
        <div id="notificationPopup" class="notification-popup">
            <h3>¡Acción realizada con éxito!</h3>
            <button id="closePopupBtn">Cerrar</button>
        </div>
        <!-- Main Content -->
        <div class="flex-1 p-8 main-content">
          <!-- Lista de reservas -->
          <ul role="list" class="divide-y divide-gray-100 text-sm">
              @foreach ($reservas as $reserva)
                  <li class="flex justify-between gap-x-6 py-4">
                      <div class="flex min-w-0 gap-x-4">
                          <div class="min-w-0 flex-auto">
                              <!-- Información principal de la reserva -->
                              <p class="font-semibold text-gray-900">Cliente: {{ $reserva->cliente->nombre }}</p>
                              <p class="mt-1 truncate text-xs text-gray-500">Número de personas: {{ $reserva->num_personas }}</p>
                              <p class="mt-1 truncate text-xs text-gray-500">Descripción del Tour: {{ $reserva->tour->descripcion }}</p>
                          </div>
                      </div>
                      <div class="hidden sm:flex sm:flex-col sm:items-end">
                          <!-- Información secundaria -->
                          <p class="text-gray-900">Fecha de reserva: {{ \Carbon\Carbon::parse($reserva->fecha_creacion)->format('Y-m-d') }}</p>
                          
                          <!-- Verificar si existe un transporte antes de acceder a "tipo_transporte" -->
                          <p class="mt-1 text-xs text-gray-500">
                              Tipo de Transporte: 
                              @if($reserva->transporte)
                                  {{ $reserva->transporte->tipo_transporte }}
                              @else
                                  No disponible
                              @endif
                          </p>
                          <p class="mt-1 text-xs text-gray-500">Tour ID: {{ $reserva->tour_id_tour }}</p>
                      </div>
                  </li>
              @endforeach
          </ul>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>