$(document).ready(function () {

    $("#form-login").submit(function(e) {
        var url = "api/auth/login"; 
        $.ajax({
            type: "POST",
            url: url,
            data: $("#form-login").serialize(), 
            success: function(data)
            {
                if(data.status === "success") {
                    localStorage.setItem('token',data.data.token);
                    $.ajax({
                        type: "POST",
                        url: "login",
                        data: $("#form-login").serialize(),
                        success: function (data) {
                            window.location.href = "/";
                        }
                    });
                }
            },
            error: function(err){
                $('#error-login').html(err.responseJSON.error);
            }
            });
        e.preventDefault(); 
    });
    
});