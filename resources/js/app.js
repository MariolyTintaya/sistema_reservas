import './bootstrap';

document.getElementById('toggleReservas').addEventListener('click', function () {
    const reservasMenu = document.getElementById('reservasMenu');
    reservasMenu.classList.toggle('d-none');
});

document.getElementById('toggleRutas').addEventListener('click', function () {
    const rutasMenu = document.getElementById('rutasMenu');
    rutasMenu.classList.toggle('d-none');
});

document.getElementById('togglePaquete').addEventListener('click', function () {
    const paqueteMenu = document.getElementById('paqueteMenu');
    paqueteMenu.classList.toggle('d-none');
});
// Referencias a los elementos
const overlay = document.getElementById('notificationOverlay');
const popup = document.getElementById('notificationPopup');
const toggleReservasBtn = document.getElementById('toggleReservas');
const reservasMenu = document.getElementById('reservasMenu');
const closePopupBtn = document.getElementById('closePopupBtn');

// Mostrar/ocultar el menú de Reservas
toggleReservasBtn.addEventListener('click', () => {
    // Alternar visibilidad del menú
    reservasMenu.classList.toggle('d-none');
    
    // Mostrar la notificación
    overlay.style.display = 'block';
    popup.style.display = 'block';
});

// Ocultar la notificación al hacer clic en el botón "Cerrar"
closePopupBtn.addEventListener('click', () => {
    overlay.style.display = 'none';
    popup.style.display = 'none';
});

// Ocultar la notificación al hacer clic en el fondo semitransparente
overlay.addEventListener('click', () => {
    overlay.style.display = 'none';
    popup.style.display = 'none';
});