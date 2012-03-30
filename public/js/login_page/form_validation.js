var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i; 
var ck_password = /^[A-Za-z0-9!&@#$%^*()_]{6,20}$/;
var ck_name = /^[A-Za-z0-9 ]{3,20}$/;

$(document).ready(function(){
    $(".signin_form").submit(function(){
        var email = $(".signin_email").val();
        var password = $(".signin_password").val();
        
        if(!ck_email.test(email)){
            alert("incorrect email");
            return false; 
        }else if(!ck_password.test(password)){
            alert("incorrect password");
            return false;
        }else{
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
        }
        return false;
    });
    $(".signup_form").submit(function(){
        var email = $(".signup_email").val();
        var password = $(".signup_password").val();
        var firstname = $(".firstname").val();
        var lastname = $(".lastname").val();
        
        if(!ck_email.test(email)){
            alert("uncorrect email");
            return false; 
        }else if(!ck_password.test(password)){
            alert("incorrect password");
            return false;
        }else if(!ck_name.test(firstname)){
            alert("incorrect firstname");
            return false;
        }else if(!ck_name.test(lastname)){
            alert("incorrect lastname");
            return false;
        }else{
          
            $.ajax({
                type: "POST",
                url: "http://localhost/faceBuki/index.php?rt=index/SignUpAjax",
                data:{
                    "email":email,
                    "password":password,
                    "firstname":firstname,
                    "lastname": lastname
                },
                success: function(){
                    window.location = "http://localhost/faceBuki/view/index.php";
                }
            
            });
        }
        return false;
    });
});
