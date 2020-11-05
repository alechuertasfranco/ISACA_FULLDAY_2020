const formInscripcion = document.getElementById('form-inscripcion');
const aprobación = document.getElementById('aprobacion')

formInscripcion.addEventListener('submit', (e) => {
    e.preventDefault();
    if (formInscripcion.apellidos.value == '' || formInscripcion.nombres.value == '' || formInscripcion.email.value == '' || formInscripcion.telefono.value == '' || formInscripcion.tipo.value == '' || formInscripcion.organizacion.value == '') {
        Toast.fire({
            icon: 'warning',
            title: 'Debe llenar todos los campos'
        })
    } else {
        inscribir();
    }
})


function toInscripcion() {
    document.getElementById('inscripcion').scrollIntoView({ behavior: "smooth" });
};

function toInicio() {
    document.getElementById('inicio').scrollIntoView({ behavior: "smooth" });
};


const inscribir = () => {

    let token = $('meta[name="csrf-token"]').attr("content");
    let data = $('#form-inscripcion').serialize();
    var submit = $('#btn-isaca-sub');
    data = data + '&aprobacion=' + aprobación.checked
    $.ajax({
        headers: {
            "X-CSRF-TOKEN": token,
        },
        type: "POST",
        url: 'participante',
        data: data,
        beforeSend: function() {
            console.log("enviando")
            submit.html('Enviando....');
        },
        success: function(res) {
            console.log(res);
            if (res == 1) {
                Swal.fire({
                    icon: 'success',
                    title: 'Incripción completada',
                    text: `Esperamos tu validación ${formInscripcion.nombres.value}`,
                    footer: '<a target="_blank" href="https://www.facebook.com/ISACAUNPRG">¿Necesitas más información?</a>'
                })
            } else {
                Swal.fire({
                    icon: 'warning',
                    title: 'Este correo ya está inscrito',
                    text: `Gracias por haberte inscrito ${formInscripcion.nombres.value}`,
                    footer: '<a target="_blank" href="https://www.facebook.com/ISACAUNPRG">¿Tienes algún problema?</a>'
                })
            }
            formInscripcion.reset();
        },
        error: function(res) {
            console.log(res)
        }

    })
}

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
