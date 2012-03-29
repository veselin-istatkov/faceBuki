<?php

/**
 * It is design to control for login and index page.
 * 
 * @author Kamen Kolarov 
 */
class IndexController {

    protected $registry;

    function __construct($registry) {
        $this->registry = $registry;
    }

    public function index() {
        if (isset($_SESSION['sid'])) {
            $this->registry->template->show('index');
        } else {
            $this->registry->template->show('login_page/index');
        }
    }

    /**
     * If successful new user is created, visuallize the index page.
     * 
     * @return void 
     */
    public function registration() {

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['email'];
        $password = $_POST['password'];

        $user = new User($this->registry);
        $user->signUp($firstname, $lastname, $username, $password);

        $this->registry->template->show('index');
    }

    /**
     * if the user is fill correct information, visuallize the index page.
     * 
     * @return void  
     */
    public function signIn() {

        //JAVASCRIPT !

        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = new User($this->registry);

        if ($user->checkUser($email, $password)) {
            $this->registry->template->show('index');
        } else {
            $this->registry->template->show('login_page/index');
        }
    }

    public function checkUserAjax() {
        $username = $_POST['email'];
        $password = $_POST['password'];

        $user = new User($this->registry);

        if ($user->checkUser($username, $password)) {
            $status = array("status" => "OK");
            echo json_encode($status);
        } else {
            $status = array("status" => "ERROR");
            echo json_encode($status);
        }
    }

    public function SignUpAjax() {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['email'];
        $password = $_POST['password'];

        $user = new User($this->registry);
        $user->signUp($firstname, $lastname, $username, $password);
    }

}