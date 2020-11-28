let token = $('meta[name="csrf-token"]').attr("content");
let premio = $('#sorteo');

$("#btn-sortear").on("click", function() {
    console.log(premio.val())
    $("#section_sorteo").fadeOut();
    $("#section_sorteo")
        .promise()
        .done(function() {
            $(".cuenta_regresiva").fadeIn(800);
        });
    // Update the count down every 1 second
    let numero = 3
    var x = setInterval(function() {
        document.getElementById("cuenta").innerHTML = numero;
        numero--;
        // If the count down is over, write some text
        if (numero < 0) {
            clearInterval(x);
            document.getElementById("cuenta").innerHTML = "";
            $.ajax({
                type: "GET",
                url: "sortear",
                success: function(res) {
                    console.log(res);
                    let ganador = res[Math.floor(Math.random() * res.length)]
                    Swal.fire({
                        icon: 'success',
                        title: 'Felicitaciones',
                        text: ganador.nombres + " " + ganador.apellidos,
                        footer: 'Ganaste ' + premio.val()
                    }).then(function() {
                        $(".cuenta_regresiva").fadeOut();
                        $(".cuenta_regresiva")
                            .promise()
                            .done(function() {
                                $("#section_sorteo").fadeIn(800);
                            });
                    });
                },
                error: function(res) {
                    console.log(res);
                }
            });

        }
    }, 1000);

    // $.ajax({
    //     type: "GET",
    //     url: "participante/" + id_participante,
    //     success: function(res) {
    //         console.log(res);
    //         document.getElementById("nombre_participante").value =
    //             res.nombres + " " + res.apellidos;
    //     },
    //     error: function(res) {
    //         console.log(res);
    //     }
    // });
});

// $("#btn_pagar").on("click", function() {
//     let pago = document.getElementById("pago_participante").value;
//     let metodo = document.getElementById("metodo_participante").value;
//     let monto = document.getElementById("monto_participante").value;

//     $.ajax({
//         headers: {
//             "X-CSRF-TOKEN": token,
//         },
//         type: "PUT",
//         url: "participante/" + id_participante,
//         data: {
//             pago: pago,
//             metodo: metodo,
//             monto: monto
//         },
//         success: function(res) {
//             console.log(res);
//             $('#modal_pagar').modal();
//             $('#modal_pagar').modal('hide');
//             location.reload();
//         },
//         error: function(res) {
//             console.log(res);
//         }
//     });
// });