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

function toInicio() {
    document.getElementById('inicio').scrollIntoView({ behavior: "smooth" });
};


function toInscripcion() {
    document.getElementById('inscripcion').scrollIntoView({ behavior: "smooth" });
};


function toPago() {
    document.getElementById('pago').scrollIntoView({ behavior: "smooth" });
};


function toNosotros() {
    document.getElementById('nosotros').scrollIntoView({ behavior: "smooth" });
};

function redirect(url) {
    console.log(url)
    window.open(url, '_blank');
}


const inscribir = () => {

    let token = $('meta[name="csrf-token"]').attr("content");
    let data = $('#form-inscripcion').serialize();
    var submit = $('#btn-isaca-sub');
    data = data + '&aprobacion=' + aprobación.checked
    console.log(token)
    console.log(data)
    console.log(aprobación.checked)
    $.ajax({
        headers: {
            "X-CSRF-TOKEN": token,
        },
        type: "POST",
        url: 'participante',
        data: data,
        success: function(res) {
            console.log(res);
            if (res == 1) {
                Swal.fire({
                    icon: 'success',
                    title: 'Incripción realizada',
                    text: `Gracias ${formInscripcion.nombres.value}`,
                    footer: '<a target="_blank" href="https://www.facebook.com/ISACAUNT">Visítanos en Facebook</a>'
                })
            } else {
                Swal.fire({
                    icon: 'warning',
                    title: `Ya estabas inscrito ${formInscripcion.nombres.value}`,
                    text: `Continua con el siguiente paso y revisa nuestros métodos de pago`,
                    footer: '<a target="_blank" href="mailto:untstudentgroup.isaca@gmail.com">¿Quieres saber más? Contactanos</a>'
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