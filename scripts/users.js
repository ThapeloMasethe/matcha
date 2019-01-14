function login() {
    var email     = $("#emailId").val();
    var password  = $("#password").val();

    if (email != "" && password != ""){
        $("#loadingSpinner").css({"display" : "block"});
        $.ajax({
            type:'post',
            url:'accounts.php',
            data:{
                login: 'login',
                email: email,
                password: password
            },
            success:function(response) {
                if (response == "success") {
                    window.location.href = "index.php";
                } else{
                    $("#loadingSpinner").css({"display":"none"});
                    alert("Wrong Details");
                }
            }
        });
        } else {
            alert("Please Fill All Details");
        }
        return false;
    }