<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <link href="public/css/header.css" rel="stylesheet" type="text/css"/>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <script type="text/javascript" src="public/js/login_page/form_validation.js"></script>
        <title></title>
    </head>
    <body>
        <div class="container">
            <div class="head">
                <a href="app_dev.php"><div class="logo"></div></a>
                <div class="clear"></div>
                <form method="POST" class= "signin_form" action="">
                    <fieldset class="field">
                        <input class="signin_email" name="email" type="text"/>                   
                        <input class="signin_password" name="password" type="password"/>                   
                        <input class="signin" type="submit" value="Sign in"/>              
                        <label class="remember">
                            <input type="checkbox"/>
                            <span class="forgot_color">Remember</span> </label>  
                        <label class="forgot">
                            <a href="app_dev.php/Recovery" style="text-decoration:none;">
                                <span class="forgot_color">Forgot It?</span>
                            </a>
                        </label>
                    </fieldset>
                </form>
            </div>
        </div>
    </body>
</html>