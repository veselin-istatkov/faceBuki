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
    public function recoveryEmail() {
        $email = $_POST['email'];

        $this->registry->template->show("login_page/recovery_code");
    }
    
    /**
     * Check whether the code matches,if he match, visualize the next page.
     * 
     * @return void 
     */
    public function recoveryCode() {
        $user = new User();
        $this->registry->template->show("login_page/recovery_password");
    }

    /**
     * Set a new password in the database and visualize the index page. 
     * 
     * @return void
     */
    public function recoveryPassword() {
        $user = new User();
        $this->registry->template->show("index");
    }

}