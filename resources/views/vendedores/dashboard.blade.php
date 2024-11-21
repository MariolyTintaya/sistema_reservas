<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Vendedor</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        .small-img {
            width: 50px;
            height: 50px;
        }

        .main-content {
            height: calc(100vh - 60px);
            overflow-y: auto;
            max-width: calc(100% - 300px);
            margin-left: 300px;
        }

        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            width: 300px;
            display: flex;
            flex-direction: column;
            background-color: #9333ea;
        }

        .sidebar-content {
            flex-grow: 1;
            overflow-y: auto;
            padding: 10px;
        }

        .sidebar-header {
            padding: 20px;
            text-align: center;
            background-color: #6d28d9;
        }

        .sidebar-header img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
        }

        .main-content::-webkit-scrollbar {
            width: 10px;
        }

        .main-content::-webkit-scrollbar-thumb {
            background-color: #6B7280;
            border-radius: 10px;
        }

        .main-content::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        .btn-reserva,
        .btn-destino {
            font-weight: bold;
            font-size: 1.25rem;
            text-decoration: none;
        }
        .user-name {
    color: white; /* Cambia el color del texto a blanco */
    font-weight: bold; /* Hace el texto en negrita */
}
    </style>
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

        <!-- Main Content -->
        <div class="flex-1 p-8 main-content">
            <!-- Lista de contactos con tamaño reducido -->
            <ul role="list" class="divide-y divide-gray-100 text-sm">
              <li class="flex justify-between gap-x-6 py-4">
                <div class="flex min-w-0 gap-x-4">
                  <img class="small-img flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                  <div class="min-w-0 flex-auto">
                    <p class="font-semibold text-gray-900">Leslie Alexander</p>
                    <p class="mt-1 truncate text-xs text-gray-500">leslie.alexander@example.com</p>
                  </div>
                </div>
                <div class="hidden sm:flex sm:flex-col sm:items-end">
                  <p class="text-gray-900">Co-Founder / CEO</p>
                  <p class="mt-1 text-xs text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">3h ago</time></p>
                </div>
              </li>
              <li class="flex justify-between gap-x-6 py-4">
                <div class="flex min-w-0 gap-x-4">
                  <img class="small-img flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                  <div class="min-w-0 flex-auto">
                    <p class="font-semibold text-gray-900">Michael Foster</p>
                    <p class="mt-1 truncate text-xs text-gray-500">michael.foster@example.com</p>
                  </div>
                </div>
                <div class="hidden sm:flex sm:flex-col sm:items-end">
                  <p class="text-gray-900">Co-Founder / CTO</p>
                  <p class="mt-1 text-xs text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">3h ago</time></p>
                </div>
              </li>
              <li class="flex justify-between gap-x-6 py-4">
                <div class="flex min-w-0 gap-x-4">
                  <img class="small-img flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                  <div class="min-w-0 flex-auto">
                    <p class="font-semibold text-gray-900">Leslie Alexander</p>
                    <p class="mt-1 truncate text-xs text-gray-500">leslie.alexander@example.com</p>
                  </div>
                </div>
                <div class="hidden sm:flex sm:flex-col sm:items-end">
                  <p class="text-gray-900">Co-Founder / CEO</p>
                  <p class="mt-1 text-xs text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">3h ago</time></p>
                </div>
              </li>
              <li class="flex justify-between gap-x-6 py-4">
                <div class="flex min-w-0 gap-x-4">
                  <img class="small-img flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                  <div class="min-w-0 flex-auto">
                    <p class="font-semibold text-gray-900">Michael Foster</p>
                    <p class="mt-1 truncate text-xs text-gray-500">michael.foster@example.com</p>
                  </div>
                </div>
                <div class="hidden sm:flex sm:flex-col sm:items-end">
                  <p class="text-gray-900">Co-Founder / CTO</p>
                  <p class="mt-1 text-xs text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">3h ago</time></p>
                </div>
              </li>
              <li class="flex justify-between gap-x-6 py-4">
                <div class="flex min-w-0 gap-x-4">
                  <img class="small-img flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                  <div class="min-w-0 flex-auto">
                    <p class="font-semibold text-gray-900">Leslie Alexander</p>
                    <p class="mt-1 truncate text-xs text-gray-500">leslie.alexander@example.com</p>
                  </div>
                </div>
                <div class="hidden sm:flex sm:flex-col sm:items-end">
                  <p class="text-gray-900">Co-Founder / CEO</p>
                  <p class="mt-1 text-xs text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">3h ago</time></p>
                </div>
              </li>
              <li class="flex justify-between gap-x-6 py-4">
                <div class="flex min-w-0 gap-x-4">
                  <img class="small-img flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                  <div class="min-w-0 flex-auto">
                    <p class="font-semibold text-gray-900">Michael Foster</p>
                    <p class="mt-1 truncate text-xs text-gray-500">michael.foster@example.com</p>
                  </div>
                </div>
                <div class="hidden sm:flex sm:flex-col sm:items-end">
                  <p class="text-gray-900">Co-Founder / CTO</p>
                  <p class="mt-1 text-xs text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">3h ago</time></p>
                </div>
              </li>
              <li class="flex justify-between gap-x-6 py-4">
                <div class="flex min-w-0 gap-x-4">
                  <img class="small-img flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                  <div class="min-w-0 flex-auto">
                    <p class="font-semibold text-gray-900">Leslie Alexander</p>
                    <p class="mt-1 truncate text-xs text-gray-500">leslie.alexander@example.com</p>
                  </div>
                </div>
                <div class="hidden sm:flex sm:flex-col sm:items-end">
                  <p class="text-gray-900">Co-Founder / CEO</p>
                  <p class="mt-1 text-xs text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">3h ago</time></p>
                </div>
              </li>
              <li class="flex justify-between gap-x-6 py-4">
                <div class="flex min-w-0 gap-x-4">
                  <img class="small-img flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                  <div class="min-w-0 flex-auto">
                    <p class="font-semibold text-gray-900">Michael Foster</p>
                    <p class="mt-1 truncate text-xs text-gray-500">michael.foster@example.com</p>
                  </div>
                </div>
                <div class="hidden sm:flex sm:flex-col sm:items-end">
                  <p class="text-gray-900">Co-Founder / CTO</p>
                  <p class="mt-1 text-xs text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">3h ago</time></p>
                </div>
              </li>
              <li class="flex justify-between gap-x-6 py-4">
                <div class="flex min-w-0 gap-x-4">
                  <img class="small-img flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                  <div class="min-w-0 flex-auto">
                    <p class="font-semibold text-gray-900">Leslie Alexander</p>
                    <p class="mt-1 truncate text-xs text-gray-500">leslie.alexander@example.com</p>
                  </div>
                </div>
                <div class="hidden sm:flex sm:flex-col sm:items-end">
                  <p class="text-gray-900">Co-Founder / CEO</p>
                  <p class="mt-1 text-xs text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">3h ago</time></p>
                </div>
              </li>
              <li class="flex justify-between gap-x-6 py-4">
                <div class="flex min-w-0 gap-x-4">
                  <img class="small-img flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                  <div class="min-w-0 flex-auto">
                    <p class="font-semibold text-gray-900">Michael Foster</p>
                    <p class="mt-1 truncate text-xs text-gray-500">michael.foster@example.com</p>
                  </div>
                </div>
                <div class="hidden sm:flex sm:flex-col sm:items-end">
                  <p class="text-gray-900">Co-Founder / CTO</p>
                  <p class="mt-1 text-xs text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">3h ago</time></p>
                </div>
              </li>
              <!-- Resto de la lista -->
            </ul>
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
