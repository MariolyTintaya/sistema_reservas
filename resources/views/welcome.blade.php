<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>London Travel Bolivia</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Función para alternar el menú desplegable de Paquetes
        function toggleDropdown(id) {
            const dropdown = document.getElementById(id);
            dropdown.classList.toggle('hidden');
        }

        // Función para cerrar todos los menús
        function closeAllDropdowns() {
            const dropdowns = document.querySelectorAll('.dropdown-menu');
            dropdowns.forEach(dropdown => dropdown.classList.add('hidden'));
        }

        // Cerrar menús al hacer clic fuera
        document.addEventListener('click', function (event) {
            if (!event.target.closest('.dropdown') && !event.target.closest('.lg:hidden')) {
                closeAllDropdowns();
            }
        });

        // Funciones para redirigir
        function goToBienvenido() {
            window.location.href = "#"; // Redirigir a la página de inicio
        }

        function goToSobreNosotros() {
            window.location.href = "#sobreNosotros"; // Redirigir a la sección de sobre nosotros
        }

        function goToPaquetes() {
            window.location.href = "#paquetes"; // Redirigir a la página de paquetes
        }

        function goToGuias() {
            window.location.href = "#guias"; // Redirigir a la página de guías
        }
    </script>
</head>
<body class="bg-gray-100">
    <!-- Navigation Panel -->
    <nav class="bg-[#c084fc] fixed top-0 left-0 right-0 z-50">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <!-- "London Travel Bolivia" a la Izquierda -->
                <div class="flex items-center">
                    <a href="#" class="text-white font-bold text-xl">London Travel Bolivia</a>
                </div>
                <!-- Opciones Centradas -->
                <div class="hidden sm:flex space-x-4">
                    <!-- Botón Bienvenidos -->
                    <a href="javascript:void(0);" onclick="goToBienvenido()" class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-violet-800 hover:text-white">
                        Bienvenidos
                    </a>
                    <!-- Botón Sobre Nosotros -->
                    <a href="javascript:void(0);" onclick="goToSobreNosotros()" class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-violet-800 hover:text-white">
                        Sobre Nosotros
                    </a>
                    <!-- Menú de Paquetes -->
                    <div class="relative dropdown">
                        <button id="paquetesButton" type="button" onclick="toggleDropdown('paquetes-dropdown'); toggleDropdown('paquetesPanel')" class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-violet-800 hover:text-white">
                            Paquetes
                        </button>
                        <div id="paquetes-dropdown" class="absolute left-0 mt-2 w-64 bg-white hover:bg-violet-800 hover:text-white shadow-lg rounded-lg hidden dropdown-menu">
                            <div class="p-4">
                                <div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
                                    <a href="javascript:void(0);" onclick="goToPaquetes()" class="font-semibold text-gray-900">
                                        Paquete 1
                                    </a>
                                </div>
                                <div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
                                    <a href="javascript:void(0);" onclick="goToPaquetes()" class="font-semibold text-gray-900">
                                        Paquete 2
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Botón Guias -->
                    <a href="javascript:void(0);" onclick="goToGuias()" class="rounded-md px-3 py-2 text-sm font-medium text-white hover:bg-violet-800 hover:text-white">
                        Guias
                    </a>
                </div>
                <!-- Login a la Derecha -->
                <div class="flex items-center">
                    <a href="{{ route('loginReservas') }}" class="text-white hover:text-fuchsia-700 text-lg font-medium">
                        Login
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Main Content -->
    <div class="relative isolate px-6 pt-14 lg:px-8">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
            <div class="text-center">
                <h1 class="text-balance text-5xl font-semibold tracking-tight text-gray-900 sm:text-7xl">LONDON TRAVEL BOLIVIA</h1>
                <p class="mt-8 text-pretty text-lg font-medium text-gray-500 sm:text-xl/8">Descubre la Magia de tus destinos viajando junto a nosotros</p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Iniciemos</a>
                    <a href="#" class="text-sm/6 font-semibold text-gray-900">Leer Mas <span aria-hidden="true">→</span></a>
                </div>
            </div>
            </div>
            <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
                <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
    </div>



    <script>
        // Panel desplegable
        const paquetesButton = document.getElementById("paquetesButton");
        const paquetesPanel = document.getElementById("paquetesPanel");

        paquetesButton.addEventListener("mouseenter", () => {
            paquetesPanel.classList.add("visible");
        });

        paquetesButton.addEventListener("mouseleave", () => {
            setTimeout(() => paquetesPanel.classList.remove("visible"), 200);
        });

        paquetesPanel.addEventListener("mouseenter", () => {
            paquetesPanel.classList.add("visible");
        });

        paquetesPanel.addEventListener("mouseleave", () => {
            paquetesPanel.classList.remove("visible");
        });
    </script>
</body>
</html>