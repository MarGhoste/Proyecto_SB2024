
   //Bloquear el botón "Atrás" del navegador 

   function bloquearBotonAtras() {
    window.onload = function () {
        history.pushState(null, null, location.href);
        window.onpopstate = function () {
            history.go(1);
        };
    };
}
