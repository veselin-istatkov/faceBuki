<?php

/**
 * IndexController decides which model to choose and to which view to send it. It only works with login and index page.
 * 
 * @author Kamen Kolarov 
 */
class IndexController {

    private $registry;

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
     * If the user has filled correct information, visuallizes the index page.
     * If not, visualizes the login page.
     * 
     * @return void  
     */
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
    
    /**
     * Creates a new record for a new user in db. After that visuallizes the index page.
     * 
     * @return void 
     */
    public function SignUpAjax() {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['email'];
        $password = $_POST['password'];

        $user = new User($this->registry);
        $user->signUp($firstname, $lastname, $username, $password);
    }

}