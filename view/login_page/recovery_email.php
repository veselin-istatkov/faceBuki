<!DOCTYPE HTML">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="public/css/login_page/forgotten.css" type="text/css" rel="stylesheet"/>
        <title>Forgotten password wizzard</title>
    </head>
    <body>
        <?php
        require("view/header.html");
        ?>
        <div class="page_background">
            <div class="containerr">
                <div class="recovery_form">
                    <div class="text_container">
                        <h2>Forgot your password</h2>
                    </div>
                    <div class="progress_container">
                        <div class="img_container">
                            <div class="img_progress_email_completed"></div>
                            <div class="clear"></div>
                            <div class="progress_bar_no_gradient"></div>
                        </div>
                        <div class="img_container_code">
                            <div class="img_progress_code"></div>
                            <div class="clear"></div>
                            <div class="progress_bar_no_gradient"></div>                         
                        </div>
                        <div class="img_container_recover">
                            <div class="img_progress_recover"></div>
                            <div class="clear"></div>                      
                        </div>
                    </div>
                    <form method="post" class="" action="index.php?rt=Recovery/recoveryEmail">
                        <div class="text_position">
                            <p>To begin the password recovery please enter your email in the box below!</p>
                        </div>
                        <input type="" class="txt_email" value=""/>
                        <input type="submit"  class="btn_to_code" value="Next"/>
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

