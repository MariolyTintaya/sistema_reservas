<!-- resources/views/layouts/panel.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Gerente</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        /* Agrega tu estilo aquí (puedes pegar el CSS proporcionado) */
    </style>
</head>
<body class="bg-gray-100 flex flex-col">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-purple-600 text-white shadow-lg">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Panel Gerente</span>
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
                        <!-- Agrega aquí tus elementos de menú -->
                    </ul>
                </nav>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-8 main-content">
            @yield('content') <!-- Aquí se renderiza el contenido de las páginas específicas -->
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Agrega tus scripts aquí
    </script>
</body>
</html>
