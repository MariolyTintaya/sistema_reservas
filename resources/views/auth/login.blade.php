<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-cover bg-center h-screen">
    <div class="flex items-center justify-center h-full">
        <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-6">
            <div class="flex justify-center mb-6">
                <img src="{{ asset('images/FONDO.jpg') }}" alt="Logo" style="width: 150px; height: 150px;" class="object-cover">
            </div>
            <h2 class="text-2xl font-bold text-center mb-6 text-gray-800">Iniciar sesión</h2>

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="correo" class="block text-gray-700 font-medium">Correo:</label>
                    <input type="email" id="correo" name="correo" 
                           class="w-full mt-2 p-2 border border-gray-300 rounded-md focus:ring focus:ring-purple-500 focus:outline-none @error('correo') is-invalid @enderror"
                           value="{{ old('correo') }}"  autocomplete="correo" autofocus>
                    @error('correo')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="contraseña" class="block text-gray-700 font-medium">Contraseña:</label>
                    <input type="password" id="contraseña" name="contraseña" 
                           class="w-full mt-2 p-2 border border-gray-300 rounded-md focus:ring focus:ring-purple-500 focus:outline-none @error('contraseña') is-invalid @enderror"
                            autocomplete="current-contraseña">
                    @error('contraseña')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="ml-2 block text-gray-700 font-medium" for="remember">
                            Recordarme
                        </label>
                    </div>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm text-purple-600 hover:underline">
                            ¿Olvidaste tu contraseña?
                        </a>
                    @endif
                </div>
                <button type="submit" 
                        class="w-full bg-purple-600 hover:bg-purple-700 text-white py-2 rounded-md font-medium transition duration-300">
                    Iniciar sesión
                </button>
            </form>

            <!-- Muestra los mensajes de error -->
            @if ($errors->any())
                <div class="mt-4 bg-red-100 text-red-600 p-3 rounded-md">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</body>
</html>
