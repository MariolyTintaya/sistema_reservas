<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Gerente</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Agregar Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-gray-100 flex flex-col">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-purple-600 text-white shadow-lg">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Panel Vendedor</span>
            <div class="d-flex">
                <!-- Mostrar el nombre del usuario logueado -->
                @if (Auth::check())
                <span class="navbar-text me-3">
                    {{ Auth::user()->nombre }}
                </span>
                @else
                <span class="navbar-text me-3">
                    No hay usuario autenticado.
                </span>
                 @endif
                <!-- Enlace para cerrar sesión -->
                    <a href="{{ route('logoutReservas') }}" class="btn btn-link" 
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Cerrar sesión
                    </a>

                    <form id="logout-form" action="{{ route('logoutReservas') }}" method="POST" style="display: none;">
                    @csrf
                    </form>
            </div>
        </div>
    </nav>

    <div class="d-flex">

        <!-- Sidebar -->
        <div class="w-64 h-screen bg-purple-600 text-white">
            <div class="flex flex-col items-center justify-center p-4">
                <!-- Imagen redonda -->
                <img src="{{ asset('images/FONDO.jpg') }}" alt="Logo" class="w-16 h-16 rounded-full object-cover">
                
                <!-- Texto debajo de la imagen -->
                <h2 class="text-3xl font-bold text-center">London Travel Bolivia</h2>
            </div>
            <nav class="mt-6">
                <ul>
                    <li>
                        <a href="#" class="block py-3 px-4 text-white font-bold hover:bg-purple-700 hover:text-white no-underline">Opción 1</a>
                    </li>
                    <li>
                        <a href="#" class="block py-3 px-4 text-white font-bold hover:bg-purple-700 hover:text-white no-underline">Opción 2</a>
                    </li>
                    <li>
                        <a href="#" class="block py-3 px-4 text-white font-bold hover:bg-purple-700 hover:text-white no-underline">Opción 3</a>
                    </li>
                    <li>
                        <a href="#" class="block py-3 px-4 text-white font-bold hover:bg-purple-700 hover:text-white no-underline">Opción 4</a>
                    </li>
                    <li>
                        <a href="#" class="block py-3 px-4 text-white font-bold hover:bg-purple-700 hover:text-white no-underline">Opción 5</a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-8">
            <h1 class="text-3xl font-bold">Bienvenido al Dashboard de Vendedor</h1>
            <p class="mt-4">Aquí puedes agregar el contenido de tu aplicación.</p>
        </div>

    </div>

    <!-- Agregar Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>
