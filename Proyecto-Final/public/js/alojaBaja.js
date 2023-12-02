document.addEventListener("DOMContentLoaded", function () {
  document.querySelector('#destroy').onsubmit = function (event) {
      event.preventDefault();

      Swal.fire({
          title: "¿Quieres eliminar este registro?",
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