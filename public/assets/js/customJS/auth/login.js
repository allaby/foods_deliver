const base_url = $("#base_url").val();

function login() {
    // alert('ok')
    // $("#loginbtn").attr("disabled", true);
    $("#loginbtn").html('Connecting <i class="fa fa-spinner fa-spin"></i>');
    var email = $("#email").val()
    var password = $("#password").val()

    $.ajax({
        method: "POST",
        url: base_url + "/auth/login",
        data: {
            email: email,
            password: password
        },
        success: function(msg) {
            console.log(msg)
            var json = JSON.parse(msg)
            if (json.codeError == "warning") {
                $("#loginbtn").attr("disabled", false);
                $("#loginbtn").html('Register');
                $("#warning").html(json.message);
            } else if (json.codeError == "error") {
                $("#loginbtn").attr("disabled", false);
                $("#loginbtn").html('Register');
                $("#danger").html(json.message);
            } else if (json.codeError == "success") {
                $("#loginbtn").attr("disabled", false);
                $("#loginbtn").html('Register');
                $("#success").html('Connexion Successfull: Redercting...');
                window.location.href = base_url;
            }
        }
    })
}