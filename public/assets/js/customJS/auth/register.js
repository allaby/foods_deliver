const base_url = $("#base_url").val();

function register() {
    // alert('ok')
    // $("#regesterbtn").attr('desable', true);
    $("#regesterbtn").attr("disabled", true);
    $("#regesterbtn").html('Traitement en cours <i class="fa fa-spinner fa-spin"></i>');
    var firstname = $("#firstname").val()
    var lastname = $("#lastname").val()
    var email = $("#email").val()
    var phone = $("#phone").val()
    var pass1 = $("#pass1").val()
    var pass2 = $("#pass2").val()

    $.ajax({
        method: "POST",
        url: base_url + '/auth/register',
        data: {
            firstname: firstname,
            lastname: lastname,
            email: email,
            phone: phone,
            pass1: pass1,
            pass2: pass2
        },
        success: function(msg) {
            var json = JSON.parse(msg)
                // console.log(json)
            if (json.codeError == "warning") {
                $("#regesterbtn").attr("disabled", false);
                $("#regesterbtn").html('Register');
                $("#warning").html(json.message);
            } else if (json.codeError == "error") {
                $("#regesterbtn").attr("disabled", false);
                $("#regesterbtn").html('Register');
                $("#danger").html(json.message);
            } else if (json.codeError == "success") {
                $("#regesterbtn").attr("disabled", false);
                $("#regesterbtn").html('Register');
                $("#success").html('Register Successfull: Redercting...');
            }
        }
    })
}