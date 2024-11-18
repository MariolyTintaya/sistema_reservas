<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>London Travel Bolivia</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function toggleDropdown(id) {
            const dropdown = document.getElementById(id);
            dropdown.classList.toggle('hidden');
        }

        function closeAllDropdowns() {
            const dropdowns = document.querySelectorAll('.dropdown-menu');
            dropdowns.forEach(dropdown => dropdown.classList.add('hidden'));
        }

        document.addEventListener('click', function (event) {
            if (!event.target.closest('.dropdown')) {
                closeAllDropdowns();
            }
        });
    </script>
</head>
<body class="bg-gray-100">
    <!-- Navigation Panel -->
    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex shrink-0 items-center">
                        <a href="#" class="text-white font-bold text-xl">London Travel Bolivia</a>
                    </div>
                    <div class="hidden sm:ml-6 sm:block">
                        <div class="flex space-x-4">
                            <div class="dropdown relative">
                                <button onclick="toggleDropdown('dashboard-menu')" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white">
                                    Dashboard
                                </button>
                                <div id="dashboard-menu" class="dropdown-menu absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black/5 hidden">
                                    <div class="py-1">
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700">Account settings</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700">Support</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700">License</a>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown relative">
                                <button onclick="toggleDropdown('team-menu')" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">
                                    Team
                                </button>
                                <div id="team-menu" class="dropdown-menu absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black/5 hidden">
                                    <div class="py-1">
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700">Team settings</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700">Members</a>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown relative">
                                <button onclick="toggleDropdown('projects-menu')" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">
                                    Projects
                                </button>
                                <div id="projects-menu" class="dropdown-menu absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black/5 hidden">
                                    <div class="py-1">
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700">Active projects</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700">Archived projects</a>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown relative">
                                <button onclick="toggleDropdown('calendar-menu')" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">
                                    Calendar
                                </button>
                                <div id="calendar-menu" class="dropdown-menu absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black/5 hidden">
                                    <div class="py-1">
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700">Upcoming events</a>
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700">Past events</a>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown relative">
                                <a href="{{ route('loginReservas') }}" 
                                  class="text-blue-500 hover:text-blue-700 text-lg font-medium">
                                     Login
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="text-center mt-10">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">Bienvenido a London Travel Bolivia</h1>
        <h2 class="text-2xl text-gray-600">Pantalla de Inicio :"v</h2>
    </div>
</body>
</html>
