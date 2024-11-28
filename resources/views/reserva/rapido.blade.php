@extends('layouts.panelGerente') 

@section('title', 'Reserva Rapida')

@section('content')
    <!-- Contenido principal -->
    <h3 class="text-xl font-bold text-gray-700 mb-4">Reserva Rápida</h3>

    <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
        <!-- Botones de acciones -->
        <div class="bg-white p-6 shadow-lg rounded-lg">
            <h4 class="text-lg font-bold text-gray-800">Acciones</h4>
            <p class="text-sm text-gray-600 mb-4">Elige una opción para proceder.</p>

            <!-- Botones para mostrar los formularios -->
            <button id="crearReservaBtn" class="btn btn-primary mb-4 w-full">Crear Reserva</button>
            <button id="crearClienteBtn" class="btn btn-primary mb-4 w-full">Crear Cliente</button>
            <button id="crearDepositoBtn" class="btn btn-primary mb-4 w-full">Crear Deposito</button>
        </div>

        <!-- Formulario Crear Reserva -->
        <script>
             //Formulario Crear Reserva
             document.getElementById('crearReservaBtn').addEventListener('click', () => {
               window.location.href = "{{ route('reservas.create') }}";
            });
            //Formulario Crear Cliente 
            document.getElementById('crearClienteBtn').addEventListener('click', () => {
               window.location.href = "{{ route('clientes.create') }}";
            });
            //Formulario Crear Deposito 
            document.getElementById('crearDepositoBtn').addEventListener('click', () => {
               window.location.href = "{{ route('depositos.create') }}";
            });
        </script>

        <!-- Formulario Crear Deposito -->
        <div id="crearDepositoForm" class="hidden bg-white p-6 shadow-lg rounded-lg col-span-3">
            <h4 class="text-lg font-bold text-gray-800">Formulario de Crear Deposito</h4>
            <form action="{{ route('depositos.store') }}" method="POST">
                @csrf
                <!-- Aquí puedes poner los campos del formulario de depósito -->
                <div class="mb-4">
                    <label for="monto" class="block text-sm font-medium text-gray-700">Monto</label>
                    <input type="number" id="monto" name="monto" class="w-full p-2 border rounded">
                </div>
                <button type="submit" class="btn btn-primary">Crear Deposito</button>
            </form>
        </div>
    </div>

    <script>
        // Mostrar y ocultar formularios al presionar los botones
        document.getElementById('crearReservaBtn').addEventListener('click', function() {
            toggleVisibility('crearReservaForm');
        });

        document.getElementById('crearClienteBtn').addEventListener('click', function() {
            toggleVisibility('crearClienteForm');
        });

        document.getElementById('crearDepositoBtn').addEventListener('click', function() {
            toggleVisibility('crearDepositoForm');
        });

        function toggleVisibility(formId) {
            // Ocultar todos los formularios
            document.getElementById('crearReservaForm').classList.add('hidden');
            document.getElementById('crearClienteForm').classList.add('hidden');
            document.getElementById('crearDepositoForm').classList.add('hidden');
            
            // Mostrar el formulario correspondiente
            document.getElementById(formId).classList.remove('hidden');
        }
    </script>
@endsection
