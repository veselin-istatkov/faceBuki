<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="public/css/login_page/login.css" type="text/css" rel="stylesheet"/>
        <title>Facebuki-Welcome</title>
    </head>
    <body>
        <div class="main_container">
            <?php
            require("view/header.html");
            ?>
            <div class="form_container">
                <h3>Sign up</h3>
                <div class="form_wrapper">
                    <form method = "POST" action = "" name = "" class="signup_form">
                        <ol>
                            <li>
                                <input type="text" class="txt_look" id="txt_firstname" name="firstname" value="First name"/>
                            </li>
                            <li>
                                <input type="text" class="txt_look" id="txt_lastname" name="lastname" value="Last name"/>
                            </li>
                            <li>
                                <input type="text" class="txt_look" id="txt_email" name="email" value="Email"/>
                            </li>
                            <li>
                                <input type="password" class="txt_look" id="txt_password" name= "password" value="Password"/>
                            </li>
                            <li>
                                <input type="submit" class="btn_sign_up" value="Sign up"/>
                            </li>
                        </ol>
                    </form>
                </div>
            </div>
            <div class ="signup_error"></div>
        </div>
        <div class="footer">
            <?php
            require("view/footer.html");
            ?>
        </div>
    </body>
</html>