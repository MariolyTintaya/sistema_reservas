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
                        <button id="toggleClientes" class="block w-100 py-3 px-4 text-white font-bold text-start btn btn-link btn-cliente">
                            Clientes
                        </button>
                        <div id="clientesMenu" class="d-none">
                            <ul class="list-unstyled ps-4">
                                <li><a href="{{ route('clientes.index') }}" class="text-white text-decoration-none">Ver Clientes</a></li>
                                <li><a href="{{ route('clientes.create') }}" class="text-white text-decoration-none">Crear Clientes</a></li>
                            </ul>
                        </div>
                    </li>
                    
                    <li>
                        <button id="toggleReservas" class="block w-100 py-3 px-4 text-white font-bold text-start btn btn-link btn-reserva">
                            Reservas
                        </button>
                        <div id="reservasMenu" class="d-none">
                            <ul class="list-unstyled ps-4">
                                <li><a href="{{ route('reporte.reservas') }}" target="_blank" class="text-white text-decoration-none">Reporte de Reservas</a></li>
                                <li><a href="{{ route('reservas.rapido') }}" class="text-white text-decoration-none">Reserva Rapida</a></li>
                                <li><a href="{{ route('depositos.index') }}" class="text-white text-decoration-none">Depositos</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button id="toggleRutas" class="block w-100 py-3 px-4 text-white font-bold text-start btn btn-link btn-destino">
                            Destinos
                        </button>
                        <div id="rutasMenu" class="d-none">
                            <ul class="list-unstyled ps-4">
                              <li><a href="{{ route('destinos.index') }}" class="text-white text-decoration-none">Destino</a></li>
                              <li><a href="parada.index" class="text-white text-decoration-none">Paradas</a></li>
                              <li><a href="rutas.index" class="text-white text-decoration-none">Rutas</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button id="toggleUsuarios" class="block w-100 py-3 px-4 text-white font-bold text-start btn btn-link btn-usuario btn-custom">
                            Empleados
                        </button>
                        <div id="usuariosMenu" class="d-none">
                            <ul class="list-unstyled ps-4">
                                <li><a href="{{ route('usuarios.ver') }}" class="text-white text-decoration-none">Usuarios</a></li>
                                <li><a href="{{ route('vendedores.index') }}" class="text-white text-decoration-none">Counters</a></li>
                                <li><a href="{{ route('guium.index') }}" class="text-white text-decoration-none">Guias</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button id="toggleTour" class="block w-100 py-3 px-4 text-white font-bold text-start btn btn-link btn-tour">
                            Tour
                        </button>
                        <div id="tourMenu" class="d-none">
                            <ul class="list-unstyled ps-4">
                                <li><a href="{{ route('tour.index') }}" class="text-white text-decoration-none">Tour</a></li>
                                <li><a href="{{ route('paquete.index') }}" class="text-white text-decoration-none">Paquetes</a></li>
                                <li><a href="{{ route('transporte.index') }}" class="text-white text-decoration-none">Transporte</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>