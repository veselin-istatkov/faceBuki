$(document).ready(function(){

    $(".signin_form").submit(function(){
        var email = $(".signin_email").val();
        var password = $(".signin_password").val();
        
        $.ajax({
            type: "POST",
            url: "http://localhost/faceBuki/index.php?rt=index/checkUserAjax",
            data:{
                "email":email,
                "password":password
            },
            dataType: "json",
            success: function(data){
                if(data.status == "OK"){
                    alert("OK");
                    window.location = "http://localhost/faceBuki/view/index.php";
                }else{
                    alert("NO");
                }
            }
        });
        return false;
    });
});

//function SignIn(){
//    alert("YE");
//    $.ajax({
//        type: "POST",
//        url: "http://localhost/faceBuki/model/checkUserAjax.php",
//        dataType: "json",
//        success: function(data){
//            alert(data.status);
//        }
//    });
//
//    return false;
//}
    