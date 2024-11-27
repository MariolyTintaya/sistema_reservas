<nav class="navbar navbar-expand-lg navbar-light bg-purple-600 text-white shadow-lg">
    <div class="container-fluid">
        <!-- Logo o Título alineado a la izquierda -->
        <a class="navbar-brand ms-3 text-white" href="#">London Travel Bolivia</a>
        <!-- Sección de usuario y cerrar sesión alineada a la derecha -->
        <div class="d-flex ms-auto">
            @if (Auth::check())
                <span class="navbar-text me-3 user-name text-white">
                    {{ Auth::user()->nombre }}  {{ Auth::user()->apellido }}
                </span>
            @else
                <span class="navbar-text me-3">
                    No hay usuario autenticado.
                </span>
            @endif
            <button class="btn btn-outline-blue" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Cerrar Sesión
            </button>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
</nav>
