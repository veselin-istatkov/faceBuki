<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="public/css/login_page/login.css" type="text/css" rel="stylesheet"/>
        <title>Facebuki-Welcome</title>
    </head>
    <body>
        <div class="main_container">
            <?php
            include("view/header.html");
            ?>
            <div id="form">
                <div id="formNav">
                    <ul>
                        <a href="#">
                            <li>Video</li>
                        </a><a href="#">
                            <li>Sign up</li>
                        </a>
                    </ul>
                </div>
                <div id="formWrapper">
                    <div id="formWrp">
                        <form method = "POST" action = "index.php?rt=index/registration" name = "" class="signup_form">
                            <table width="290" height="122" class="form">
                                <tr>
                                    <td width="139" height="60"><input class = "firstname" name="firstname" type="text" />
                                        <p class="formTitle">First name</p></td>
                                    <td width="139" align="right"><input class = "lastname" name="lastname" type="text" />
                                        <p class="formTitle">Last name</p></td>
                                </tr>
                                <tr>
                                    <td><input class="signup_email" name="email" type="email"/>
                                        <p class="formTitle">E-mail</p></td>
                                    <td align="right"><input class = "signup_password" name="password" type="password"/>
                                        <p class="formTitle">Password</p></td>
                                </tr>
                            </table>
                            <span class="formText">I agree with the<a href="#">Terms of use</a>*</span>
                            <input name="signup" type="submit" class="form_signUP" value="Sign up" />
                        </form>
                    </div>
                    <p class="insurance">*by clicking "Sign up" you agree with the terms of use</p>
                </div>
                <div class ="signup_error"></div>
            </div>
            <div class="footer">
                <?php
                include("view/footer.html");
                ?>
            </div>
        </div>
    </body>
</html>