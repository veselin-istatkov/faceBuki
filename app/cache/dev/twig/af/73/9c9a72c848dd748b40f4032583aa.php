<?php

/* FacebukiLoginPageBundle:LoginPage:index.html.php */
class __TwigTemplate_af739c9a72c848dd748b40f4032583aa extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t\t<link href=\"<?php echo \$view['assets']->getUrl('css/login_page.css') ?>\" rel=\"stylesheet\" type=\"text/css\" />
\t\t<link href=\"<?php echo \$view['assets']->getUrl('css/header.css') ?>\" rel=\"stylesheet\" type=\"text/css\" />
        <title>Facebuki-Welcome</title>
    </head>
    <body>
        <div class=\"main_container\">
            <?php
\t\t\t\techo \$view->render(\"FacebukiLoginPageBundle:LoginPage:header.html.php\")
            ?>
            <div class=\"form_container\">
                <h3>Sign up</h3>
                <div class=\"form_wrapper\">
                    <form method = \"POST\" action = \"\" name = \"\" class=\"signup_form\">
                        <ol>
                            <li>
                                <input type=\"text\" class=\"txt_look\" id=\"txt_firstname\" name=\"firstname\" value=\"First name\"/>
                            </li>
                            <li>
                                <input type=\"text\" class=\"txt_look\" id=\"txt_lastname\" name=\"lastname\" value=\"Last name\"/>
                            </li>
                            <li>
                                <input type=\"text\" class=\"txt_look\" id=\"txt_email\" name=\"email\" value=\"Email\"/>
                            </li>
                            <li>
                                <input type=\"password\" class=\"txt_look\" id=\"txt_password\" name= \"password\" value=\"Password\"/>
                            </li>
                            <li>
                                <input type=\"submit\" class=\"btn_sign_up\" value=\"Sign up\"/>
                            </li>
                        </ol>
                    </form>
                </div>
            </div>
            <div class =\"signup_error\"></div>
        </div>
        <div class=\"footer\">
            <?php
\t\t\t\techo \$view->render(\"FacebukiLoginPageBundle:LoginPage:footer.html.php\")
            ?>
        </div>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "FacebukiLoginPageBundle:LoginPage:index.html.php";
    }

}
