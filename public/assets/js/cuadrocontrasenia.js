// Obtener elementos HTML
const recuperarContraseñaLink = document.getElementById("recuperar-contraseña-link");
const modal = document.getElementById("modal");
const closeModalButton = document.getElementsByClassName("close")[0];

// Mostrar el modal al hacer clic en el enlace
recuperarContraseñaLink.addEventListener("click", function () {
  modal.style.display = "block";
});

// Ocultar el modal al hacer clic en el botón de cierre
closeModalButton.addEventListener("click", function () {
  modal.style.display = "none";
});

// Ocultar el modal si se hace clic fuera de él
window.addEventListener("click", function (event) {
  if (event.target === modal) {
    modal.style.display = "none";
  }
});
