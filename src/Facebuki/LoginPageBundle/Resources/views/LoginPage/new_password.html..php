<!DOCTYPE HTML>
<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="public/css/forgotten_password.css" type="text/css" rel="stylesheet"/>
        <title>Forgotten password wizzard</title>
    </head>
    <body>
        <?php
        require("view/login_page/header.html");
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
                            <div class="progress_bar_no_gradient"></div>
                        </div>
                        <div class="img_container_code">
                            <div class="img_progress_code"></div>
                            <div class="clear"></div>
                            <div class="progress_bar"></div>                         
                        </div>
                        <div class="img_container_recover">
                            <div class="img_progress_recover_completed"></div>
                            <div class="clear"></div>                      
                        </div>
                    </div>
                    <form method="POST" class="" action="">
                        <div class="text_container">
                            <p>Please enter your new password in the fields below and click the recover button.</p>
                        </div>
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
                    require("view/footer.html");
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>

