<!-- resources/views/admin_panel.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel del Administrador</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="{{ asset('js/script.js') }}" defer></script>
</head>
<body>
    <header>
        <h1>Bienvenido, Administrador</h1>
        <p>Seleccione una función para gestionar el sistema:</p>
    </header>

    <nav>
        <button onclick="mostrarFormularioReserva()">Registro de Reservas</button>
        <button onclick="mostrarFormularioCliente()">Registro de Clientes</button>
        <button onclick="registroPagos()">Pagos</button>
        <button onclick="gestionRutas()">Rutas y Transportes</button>
        <button onclick="seguridad()">Seguridad</button>
    </nav>

    <!-- Secciones para cada función -->
    <section id="formularioReserva" style="display:none;">
        <h2>Registro de Reservas</h2>
        <form>
            <label for="idReserva">ID de Reserva (Auto-incremental):</label>
            <input type="text" id="idReserva" disabled><br>

            <label for="estadoReserva">Estado:</label>
            <select id="estadoReserva">
                <option>Pendiente</option>
                <option>Cancelada</option>
                <option>Confirmada</option>
            </select><br>

            <label for="tipoPago">Tipo de Pago:</label>
            <select id="tipoPago">
                <option>Al contado</option>
                <option>En cuotas</option>
            </select><br>

            <label for="fechaCreacion">Fecha de Creación:</label>
            <input type="date" id="fechaCreacion"><br>

            <label for="numeroPersonas">Número de Personas:</label>
            <input type="number" id="numeroPersonas"><br>

            <label for="montoTotal">Monto Total:</label>
            <input type="number" id="montoTotal"><br>

            <button type="submit">Registrar Reserva</button>
        </form>
    </section>

    <section id="formularioCliente" style="display:none;">
        <h2>Registro de Datos de Clientes</h2>
        <form>
            <label for="nombreCliente">Nombre Completo:</label>
            <input type="text" id="nombreCliente"><br>

            <label for="ciPasaporte">CI o Pasaporte:</label>
            <input type="text" id="ciPasaporte"><br>

            <label for="numeroCelular">Número de Celular:</label>
            <input type="text" id="numeroCelular"><br>

            <label for="fechaNacimiento">Fecha de Nacimiento:</label>
            <input type="date" id="fechaNacimiento"><br>

            <label for="tipoCliente">Tipo de Cliente:</label>
            <select id="tipoCliente">
                <option>Nacional</option>
                <option>Extranjero</option>
            </select><br>

            <button type="submit">Registrar Cliente</button>
        </form>
    </section>

    <section id="formularioPagos" style="display:none;">
        <h2>Pagos</h2>
        <p>Aca se podra ver los ultimos Pagos</p>
    </section>

    <section id="formularioRutas" style="display:none;">
        <h2>Rutas y Transportes</h2>
        <p>Aca se podra ver Rutas y Transportes</p>
    </section>

    <section id="formularioSeguridad" style="display:none;">
        <h2>Seguridad</h2>
        <p>Formulario de Seguridad</p>
    </section>
</body>
</html>
