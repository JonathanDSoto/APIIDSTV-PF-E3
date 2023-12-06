document.addEventListener("DOMContentLoaded", function () {
  document.querySelector('#destroy').onsubmit = function (event) {
      event.preventDefault();

      Swal.fire({
          title: "¿Quieres eliminar este registro?",
          text: "¡Hacer esto puede generar la eliminación de registros asociados en otros modulos!",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Sí, eliminarlo",
          cancelButtonText: "No, cancelar"
      }).then((result) => {
          if (result.isConfirmed) {
              document.getElementById('destroy').submit();
          }
      });
  };
});