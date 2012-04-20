$(document).ready(function(){

    $(".signin_form").submit(function(){
        var email = $(".signin_email").val();
        var password = $(".signin_password").val();

        $.ajax({
            type: "POST",
            url: "http://localhost/faceBuki/index.php?rt=index/signInAjax",
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
    
    $(".signup_form").submit(function(){
        var firstname = $("#txt_firstname").val();
        var lastname = $("#txt_lastname").val();
        var email = $("#txt_email").val();
        var password =$("#txt_password").val();
        
        $.ajax({
            type: "POST",
            url: "http://localhost/faceBuki/index.php?rt=index/signUpAjax",
            data:{
                "email":email,
                "password":password,
                "firstname":firstname,
                "lastname":lastname
            },
            success: function(){
                window.location = "http://localhost/faceBuki/view/index.php";   
            }
        });
        return false;
    });
});


    