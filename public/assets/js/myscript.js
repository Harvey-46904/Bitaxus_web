const fullscreenButton = document.getElementById('fullscreenButton');
const fullscreenDiv = document.getElementById('fullscreenDiv');

// Función para abrir el div en pantalla completa
function openFullscreenDiv() {
  fullscreenDiv.style.display = 'block'; // Mostrar el div
}

// Evento click para abrir el div en pantalla completa
fullscreenButton.addEventListener('click', openFullscreenDiv);
