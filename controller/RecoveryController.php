<?php

/**
 * It is designed to control for forgotten password.
 * 
 * @author K.Kolarov 
 */
class RecoveryController {

    protected $registry;

    function __construct($registry) {
        $this->registry = $registry;
    }

    public function index() {

        $this->registry->template->show('login_page/recovery_email');
    }

    /**
     * If exist the email, send the code on the email and visualize
     * the next page.
     * 
     * @return void 
     */
    public function recoveryStepOne() {
//        $email = $_POST['email'];
//
//        $user = new User();
//
//        //it isn't work correct (cookies).
//        if ($user->checkEmail($email)) {
//            setcookie("email", $email, 0, "http://localhost/faceBuki/", false, true);
//
//            $code = getRandomSalt();
//            $user - updatePassword($code);
//        }

        $this->registry->template->show("login_page/recovery_code");
    }

    /**
     * Check whether the code matches,if he match, visualize the next page.
     * 
     * @return void 
     */
    public function recoveryStepTwo() {
        $email = $_COOKIE['email'];
        if (isset($email)) {
            $user = new User();
            $code = $_POST['code'];

            if ($user->checkUser($email, $code)) {
                $status = array("status" => "OK");
                echo json_encode($status);
            }
        }
    }

    /**
     * Set a new password in the database and visualize the index page. 
     * 
     * @return void
     */
    public function recoveryStepThree() {
        $email = $_COOKIE['email'];

        if (isset($email)) {
            $user = new User();
            $password = $_POST['password'];
            
            $user->updatePassword($email, $password);
        }
    }

}