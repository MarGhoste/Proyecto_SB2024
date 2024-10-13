// Obtener elementos necesarios
const optionSelect = document.getElementById('optionSelect');
const selectedOptionText = document.getElementById('selectedOption');

// Agregar un evento al cambiar la selección
optionSelect.addEventListener('change', () => {
  const selectedValue = optionSelect.value;
  selectedOptionText.textContent = selectedValue !== '' ? selectedValue : 'Ninguna opción';
});


///////////////////////////////////////////////////////////



function buscarInventario() {
  var laboratorio = document.getElementById('laboratorio').value;
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      document.getElementById('inventarioContainer').innerHTML = xhr.responseText;

      // Cambiar el texto del botón "Editar" a "Modificar"
      var editarButtons = document.getElementsByClassName('editar');
      for (var i = 0; i < editarButtons.length; i++) {
        editarButtons[i].innerText = 'Eliminar';
        // Agregar evento clic a los botones "Modificar"
        editarButtons[i].addEventListener('click', function () {
          // Lógica para permitir la modificación (puedes cambiar esto según tus necesidades)
          var fila = this.closest('tr');
          habilitarEdicion(fila);
        });
      }

      // Agregar un nuevo botón "Guardar" a cada fila
      var acciones = document.getElementsByClassName('acciones');
      for (var i = 0; i < acciones.length; i++) {
        acciones[i].innerHTML += '<button class="guardar" style="color:green;">Guardar</button>';
        // Agregar evento clic a los botones "Guardar"
        acciones[i].getElementsByClassName('guardar')[0].addEventListener('click', function () {
          // Lógica para guardar cambios en el servidor (puedes cambiar esto según tus necesidades)
          var fila = this.closest('tr');
          guardarCambios(fila);
        });
      }
    }
  };
  xhr.open("POST", "PHP/modificarinventario.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("laboratorio=" + laboratorio);
}

// Función para habilitar la edición de una fila
function habilitarEdicion(fila) {
  
}

// Función para guardar cambios en una fila
function guardarCambios(fila) {

}
