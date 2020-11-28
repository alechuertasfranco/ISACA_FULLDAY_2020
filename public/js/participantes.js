let token = $('meta[name="csrf-token"]').attr("content");
let id_participante

$(".btn-pagar").on("click", function() {
    let boton = $(this);
    id_participante = boton.attr("id_participante");
    $("#modal_pagar").modal();

    $.ajax({
        type: "GET",
        url: "participante/" + id_participante,
        success: function(res) {
            console.log(res);
            document.getElementById("nombre_participante").value =
                res.nombres + " " + res.apellidos;
        },
        error: function(res) {
            console.log(res);
        }
    });
});

$("#btn_pagar").on("click", function() {
    let pago = document.getElementById("pago_participante").value;
    let metodo = document.getElementById("metodo_participante").value;
    let monto = document.getElementById("monto_participante").value;

    $.ajax({
        headers: {
            "X-CSRF-TOKEN": token,
        },
        type: "PUT",
        url: "participante/" + id_participante,
        data: {
            pago: pago,
            metodo: metodo,
            monto: monto
        },
        success: function(res) {
            console.log(res);
            $('#modal_pagar').modal();
            $('#modal_pagar').modal('hide');
            location.reload();
        },
        error: function(res) {
            console.log(res);
        }
    });
});