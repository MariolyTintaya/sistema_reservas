<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>London Travel</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Suavizar bordes en la barra de navegación */
    header {
      box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body class="bg-gray-100 text-gray-800">

  <header class="bg-white sticky top-0 z-10">
     <!-- Sección superior del navbar -->
  <div class="bg-gray-100 text-gray-700 text-sm py-2">
     <!-- Barra principal del navbar -->
    <div class="container mx-auto px-4 flex justify-between items-center">
      <div>
        <span>✉️ skytravelturismo034@gmail.com</span>
        <span class="mx-2">|</span>
        <span>📞 +591 64210077</span>
      </div>
      <div class="flex space-x-4">
        <a href="https://www.facebook.com/profile.php?id=61558572789887" class="text-purple-600 hover:text-purple-600">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
          </svg>
        </a>
        <a href="https://www.tiktok.com/@london_travel_bolivia95?fbclid=IwY2xjawGr1RFleHRuA2FlbQIxMAABHbuaUyQQR7wavaXeIQUHC6DSSXLh48Fh3AxVFHrnVTTyHl32nxdI7kpRbQ_aem_wGEU6O2I_Rky5vsW9lCq8g" class="text-purple-600 hover:text-purple-600">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
            <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"/>
          </svg>
        </a>
      </div>
    </div>
  </div>
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
      <!-- Logotipo -->
      <div class="flex items-center space-x-2">
        <h1 class="text-2xl font-bold text-gray-900">
          LONDON <span class="text-purple-600">TRAVEL</span>
        </h1>
      </div>
      <!-- Navegación -->
      <nav class="hidden md:flex space-x-6">
        <a href="#inicio" class="hover:text-purple-600">Inicio</a>
        <a href="#sobre" class="hover:text-purple-600">Sobre London Travel</a>
        <a href="#servicios" class="hover:text-purple-600">Servicios</a>
        <a href="#guias" class="hover:text-purple-600">Guías</a>
        
        <div class="relative group">
          <a href="#paquetes" class="hover:text-purple-600">Paquetes</a>
          <div class="absolute hidden group-hover:block bg-white shadow-md py-2 rounded w-40">
            <a href="#paquete1" class="block px-4 py-2 hover:bg-purple-50">paquete1</a>
            <a href="#paquete2" class="block px-4 py-2 hover:bg-purple-50">paquete2</a>
            <a href="#paquete3" class="block px-4 py-2 hover:bg-purple-50">paquete3</a>
            <a href="#paquete4" class="block px-4 py-2 hover:bg-purple-50">paquete4</a>
            <a href="#paquete5" class="block px-4 py-2 hover:bg-purple-50">paquete5</a>
            <a href="#paquete6" class="block px-4 py-2 hover:bg-purple-50">paquete6</a>
          </div>
        </div>
        <a href="{{ route('login') }}" class="hover:text-purple-600">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
            </svg>
        </a>
      </nav>
    </div>
  </header>
  
<!-- Main Content -->
<div class="relative isolate px-6 pt-14 lg:px-8">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#a855f7] to-[#6d28d9] opacity-40 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
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

  <!-- Sección Sobre London Travel -->
  <section id="sobre" class="container mx-auto px-4 py-12">
    <h2 class="text-3xl font-bold text-center mb-8">Sobre London Travel</h2>
    <p class="text-lg text-center">London Travel es una agencia de turismo líder, especializada en tours personalizados a destinos alrededor del mundo. Nos dedicamos a ofrecer experiencias únicas y memorables para nuestros clientes, asegurándonos de que cada viaje sea una aventura emocionante y segura.</p>
  </section>

  <!-- Sección de Servicios -->
  <section id="servicios" class="bg-gray-200 py-12">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center mb-8">Servicios que Ofrecemos</h2>
      <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded-lg shadow-md">
          <h3 class="text-xl font-bold mb-4">Tours Personalizados</h3>
          <p>Diseñamos paquetes de tours personalizados según las preferencias y necesidades de nuestros clientes.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
          <h3 class="text-xl font-bold mb-4">Asesoramiento en Destinos</h3>
          <p>Brindamos asesoría sobre los mejores destinos, actividades y alojamiento para hacer de tu viaje una experiencia inolvidable.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
          <h3 class="text-xl font-bold mb-4">Guías Turísticos Expertos</h3>
          <p>Contamos con guías locales altamente capacitados para acompañarte durante todo tu viaje.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Sección de Guías -->
  <section id="guias" class="container mx-auto px-4 py-12">
    <h2 class="text-3xl font-bold text-center mb-8">Nuestros Guías</h2>
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
      <div class="text-center">
        <img src={{ asset("images/Packages/Guia1.jpeg") }} alt="Guía 1" class="rounded-full mb-4">
        <h3 class="font-bold">Guia 1</h3>
      </div>
      
    </div>
  </section>

  <!-- Sección de Paquetes Destacados -->
  <section id="paquetes" class="container mx-auto px-4 py-12">
    <h2 class="text-3xl font-bold text-center mb-8">Paquetes Destacados</h2>
    <div class="grid md:grid-cols-3 gap-8">
      <!-- Generación dinámica de tarjetas -->
      ${generatePackageCards()}
    </div>
  </section>
  

  <!-- Pie de Página -->
  <footer class="bg-purple-600 text-white py-8">
    <div class="container mx-auto px-4 text-center">
      <p class="mb-4">© 2024 London Travel. Todos los derechos reservados.</p>
      <div class="space-x-4">
        <a href="#" class="hover:text-purple-50">Facebook</a>
        <a href="#" class="hover:text-purple-50">Instagram</a>
        <a href="#" class="hover:text-purple-50">Twitter</a>
      </div>
    </div>
  </footer>

  <!-- Agregar scripts al final para optimizar la carga -->
  <script>
    // Función para generar dinámicamente las tarjetas de paquetes
    function generatePackageCards() {
      const paquetes = [
        { titulo: 'Paquete 1', descripcion: 'descripcion del tour paquete 1.', imagen: '{{ asset("images/Packages/Copacabana.jpeg") }}'},
        { titulo: 'Paquete 2', descripcion: 'descripcion del tour paquete 2.', imagen: '{{ asset("images/Packages/Hotel_Dos_Rios.jpeg") }}' },
        { titulo: 'Paquete 3', descripcion: 'descripcion del tour paquete 3.', imagen: '{{ asset("images/Packages/Leque.jpeg") }}' },
        { titulo: 'Paquete 4', descripcion: 'descripcion del tour paquete 4.', imagen: '{{ asset("images/Packages/Machupichu.jpeg") }}' },
        { titulo: 'Paquete 5', descripcion: 'descripcion del tour paquete 5.', imagen: '{{ asset("images/Packages/Safari_de_Abejas.jpeg") }}' },
        { titulo: 'Paquete 6', descripcion: 'descripcion del tour paquete 6.', imagen: '{{ asset("images/Packages/Salar_Uyuni.jpeg") }}' },
      ];

      return paquetes.map(paquete => `
    <div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:scale-105 transition">
      <img src="${paquete.imagen}" alt="${paquete.titulo}" class="w-full h-48 object-cover">
      <div class="p-6">
        <h3 class="text-xl font-bold mb-2">${paquete.titulo}</h3>
        <p class="text-gray-600">${paquete.descripcion}</p>
        <button class="mt-4 bg-purple-500 px-4 py-2 text-white rounded hover:bg-purple-600">Reservar</button>
      </div>
    </div>
  `).join('');
    }

    // Inserta las tarjetas generadas en el DOM
    document.querySelector('#paquetes .grid').innerHTML = generatePackageCards();
  </script>
</body>

</html>
