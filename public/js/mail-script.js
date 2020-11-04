

     $(document).ready(function() {
        var form = $('#formRegistro');
        var submit = $('.submit-btn'); 
        var alert = $('.alert-msg');

    
        form.on('submit', function(e) {
            e.preventDefault(); 

            $.ajax({
                url: 'mail.php', 
                type: 'POST', 
                dataType: 'html', 
                data: form.serialize(), 
                beforeSend: function() {
                    alert.fadeOut();
                    submit.html('Enviando....'); 
                },
                success: function(data) {
                    alert.html(data).fadeIn(); 
                    form.trigger('reset'); 
                    submit.attr("style", "display: none !important");; 
                },
                error: function(e) {
                    console.log(e)
                }
            });
        });
    });