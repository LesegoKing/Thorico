$(document).ready(function() {
    var form = $('#contact-form');

    form.on('submit',function (e) {
        var url  = $(this).attr('action');
        var type = $(this).attr('method');

        var form_name    = $('#form_name').val();
        var form_email   = $('#form_email').val();
        var form_phone   = $('#form_phone').val();
        var form_sites   = $('#form_sites').val();
        var form_message = $('#form_message').val();

        $.ajax({
            url: url,
            type: type,
            beforeSend: function(){
                $('#submit_btn').text("Sending...");
            },
            data: {
                form_name: form_name,
                form_email: form_email,
                form_phone: form_phone,
                form_sites: form_sites,
                form_message: form_message,
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {

                console.log(response.status);
                if(response.status==='success')
                {
                    $('#submit_btn').text(response.message);
                }

                var toastID = setTimeout(function(){
                    $('#submit_btn').text("SEND");
                    clearInterval(toastID);
                }, 3000);
            }
        });

        e.preventDefault();
        return false;
    });
});
