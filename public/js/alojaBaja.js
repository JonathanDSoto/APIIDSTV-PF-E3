document.addEventListener("DOMContentLoaded", function () {
    document.body.addEventListener('submit', function (event) {
        if (event.target.id === 'destroy') {
            event.preventDefault();

            Swal.fire({
                title: "¿Quieres eliminar este registro?",
                text: "¡Hacer esto puede generar la eliminación de registros asociados en otros módulos!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Sí, eliminarlo",
                cancelButtonText: "No, cancelar"
            }).then((result) => {
                if (result.isConfirmed) {
                    event.target.submit();
                }
            });
        }
    });
});
