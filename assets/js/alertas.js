
console.log('uwu');

    function borrar() {
        const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn agregar',
            cancelButton: 'btn eliminar',
        },
        buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
        title: '¿Estás seguro?',
        text: "¡Se va a borrar para siempre!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText:"<a href='index.php?c=producto&a=desactivar&id='.$dato['idProducto'].'' class='btn agregar'>Sí, Borralo</a>",
        cancelButtonText: 'No, cancelar',
        reverseButtons: true,
        }).then((result) => {
        if (result.isConfirmed) {
            swalWithBootstrapButtons.fire(
            '¡Borrado!',
            'El dato ha sido eliminado',
            'success'
            )
        } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire(
            'Cancelado',
            'Se cancelo la eliminación del dato',
            'error'
            )
        }
    });
    }

    function modificar () {
        const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
        })

        Toast.fire({
        icon: 'success',
        title: 'Modificado correctamente'
    })
    }

    function agregar () {
        const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
        })

        Toast.fire({
        icon: 'success',
        title: 'Agregado correctamente'
    })
    }

    function regresar () {
        const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn agregar',
            cancelButton: 'btn eliminar',
        },
        buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
        title: '¿Estás seguro?',
        text: "¡Los cambios no se van a cambiar!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Sí, regresar',
        cancelButtonText: 'No, cancelar',
        reverseButtons: true,
        }).then((result) => {
        if (result.isConfirmed) {
            swalWithBootstrapButtons.fire(
            '¡Se canceló lo que estabas haciendo!',
            'Has regresado a xd',
            'success'
            )
        } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire(
            'Cancelado',
            'Continuas en este',
            'error'
            )
        }
    });
    }

    function bienvenida () {
        const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
        })

        Toast.fire({
        icon: 'success',
        title: 'Bienvenido a la página de prueba'
    })
    }