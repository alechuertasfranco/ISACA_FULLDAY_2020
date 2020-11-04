const formInscripcion = document.getElementById('form-inscripcion');
formInscripcion.addEventListener('submit', (e) => {
  e.preventDefault();
  if(formInscripcion.nom_ape.value == '' || formInscripcion.email.value == '' || formInscripcion.telefono.value == '') {
    Toast.fire({
      icon: 'warning',
      title: 'Complete todos los campos'
    })
  } else {
    inscribir();
  }
})

const inscribir = () => {
  
  const data = $('#form-inscripcion').serialize();
   var submit = $('#btn-isaca-sub'); 
  $.ajax({
    type: "POST",
    async:true,
    url: 'inscripcion_process.php',
    data: data,
    beforeSend: function() {
                    console.log("enviando")
                    submit.html('Enviando....'); 
                },
    success: function(res) {
      console.log(res);
      if(res == 1) {
        Swal.fire({
          icon: 'success',
          title: 'Incripción satisfactoria',
          text: `Gracias por inscribirte ${formInscripcion.nom_ape.value}`,
          footer: '<a target="_blank" href="https://www.facebook.com/ISACAUNPRG">¿Necesitas más información?</a>'
        })
      } else {
        Swal.fire({
          icon: 'warning',
          title: 'Este correo ya está inscrito',
          text: `Gracias por haberte inscrito ${formInscripcion.nom_ape.value}`,
          footer: '<a target="_blank" href="https://www.facebook.com/ISACAUNPRG">¿Tienes algún problema?</a>'
        })
      }
      formInscripcion.reset();
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


