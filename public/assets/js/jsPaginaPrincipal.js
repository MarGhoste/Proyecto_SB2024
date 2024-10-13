// Obtener el elemento del menú lateral
const sideMenu = document.getElementById("sideMenu");

// Agregar el evento de mouseover (pase del mouse) al menú lateral
sideMenu.addEventListener("mouseover", () => {
    sideMenu.style.width = "200px"; // Ancho más pequeño al abrir
    sideMenu.style.height = "200vh"; // Altura más pequeña al abrir
    sideMenu.style.left = "0"; // Mostrar el menú
    sideMenu.style.transition = "width 0.3s ease, height 0.3s ease"; // Transición suave
});

// Agregar el evento de mouseleave (fuera del mouse) al menú lateral
sideMenu.addEventListener("mouseleave", () => {
    sideMenu.style.width = "200px"; // Mantener el ancho pequeño al cerrar
    sideMenu.style.height = "200vh"; // Mantener la altura pequeña al cerrar
    sideMenu.style.left = "-200px"; // Ocultar el menú hacia la izquierda
    sideMenu.style.transition = "left 0.3s ease"; // Transición suave solo para la posición
});

//*/////////////////////////////////////////////////////////////////////////////////////////////*/
function mostrarHora() {
    const horaElemento = document.getElementById("horaActual");
    const fecha = new Date();

    const horas = fecha.getHours().toString().padStart(2, "0");
    const minutos = fecha.getMinutes().toString().padStart(2, "0");
    const segundos = fecha.getSeconds().toString().padStart(2, "0");

    const horaActual = `${horas}:${minutos}:${segundos}`;
    horaElemento.textContent = horaActual;
}

mostrarHora(); // Mostrar la hora inicialmente

// Actualizar la hora cada segundo
setInterval(mostrarHora, 1000);
