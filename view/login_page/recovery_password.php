<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="public/css/global/forgotten.css" type="text/css" rel="stylesheet"/>
        <title>Forgotten password wizzard</title>
    </head>
    <body>
        <?php
        include("view/header.html");
        ?>
        <div class="page_background">
            <div class="containerr">
                <div class="recovery_form">
                    <div class="text_container">
                        <h2>Recover password</h2>
                    </div>
                    <div class="progress_container">
                        <div class="img_container">
                            <div class="img_progress_email"></div>
                            <div class="clear"></div>
                            <div class="img_text_position"><span>Email</span></div>
                        </div>
                        <div class="img_container_code">
                            <div class="img_progress_code"></div>
                            <div class="clear"></div>
                            <div class="img_text_position"><span>Code</span></div>
                        </div>
                        <div class="img_container_recover">
                            <div class="img_progress_recover"></div>
                            <div class="clear"></div>
                            <div class="img_text_position"><span>Recover</span></div>
                        </div>
                    </div>
                    <div class="text_container">
                        <p>Please enter your new password in the fields below and click the recover button.</p>
                    </div>
                    <form method="POST" class="" action="index.php?rt=ForgottenPassword/recoveryPassword">
                        <label class="lbl_new_password"><span>New Password:</span>
                            <input type="password" class="txt_new_password" />
                        </label>
                        <label class="lbl_repeat_password"><span>Repeat Password:</span>
                            <input type="password" class="txt_repeat_password"/>
                        </label>
                        <input type="submit" class="btn_recover" value="Recover"/>
                    </form>
                </div>
                <div class="footer">
                    <?php
                    include("view/footer.html");
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>
