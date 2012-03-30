<?php

/**
 * @Entity @Table(name="users")
 **/
class User {

    /**
     * @Id
     * @Column(name="id",type="integer")
     * @GeneratedValue  
     **/
    private $uId;
    
    /**
     * @Column(name="full_name",type="string",length=50) 
     **/
    private $fullName;

    /**
     * @Column(name="first_name",type="string",length=20) 
     **/
    private $firstName;

    /**
     * @Column(name="last_name",type="string",length=20) 
     **/
    private $lastName;

    /**
     * @Column(type="boolean", nullable=true) 
     **/
    private $gender;

    /**
     * @Column(type="string",length=50,unique=true) 
     **/
    private $username;

    /**
     * @Column(type="datetime",nullable=true) 
     **/
    private $birthday;

    /**
     * @Column(type="string",length=50,nullable=true) 
     **/
    private $city;

    /**
     * @Column(type="string",length=50,nullable=true) 
     **/
    private $education;

    /**
     * @Column(type="string",length=80) 
     **/
    private $password;
    private $registry;

    public function __construct($registry = null) {
        $this->registry = $registry;
    }

    public function __set($name, $value) {
        
    }

    /**
     * Check whether, we have got the email in the database. 
     * 
     * @param string $email
     * @return boolean
     */
    public function checkEmail($email) {
        $query = "SELECT id FROM users WHERE email=?";
        $statement = $this->database->getConnection->executeQuery($query, array($email), array("type" => "SELECT"));
        $id = $statement->fetch();

        if (isset($id)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Check if the password and email of the user match with password and 
     * email in the database.
     * 
     * @param string $email
     * @param string $password
     * @return boolean
     */
    public function checkUser($email, $password) {

        $query = "SELECT password FROM users WHERE username = ?";
        $statement = $this->registry->database->getConnection()->executeQuery($query, array($email), array(PDO::PARAM_STR));
        $passFromDB = $statement->fetchColumn();

        if (comparePassword($password, $passFromDB)) {
            return true;
        } else {
            return false;
        }
    }
    /**
     * Update the password in the database.
     * 
     * @param string $email
     * @param string $password
     * @return void 
     */
    public function updatePassword($email, $password) {
        $salt = getRandomSalt();
        $hash = getPasswordHash($salt, $password);
        $this->registry->database->getConnection()->update("users", array("password" => $hash), array("username" => $email));
    }
    
    /**
     * Create a new user.
     * 
     * @param string $firstName
     * @param string $lastName
     * @param string $userName
     * @param string $password
     * @return void 
     */
    public function signUp($firstName, $lastName, $userName, $password) {
        $salt = getRandomSalt();
        $hash = getPasswordHash($salt, $password);

        $userInfo = array('username' => $userName, 'first_name' => $firstName, 'last_name' =>
            $lastName, 'last_name' => $lastName, 'full_name' => $firstName . ' ' . $lastName, 'password' => $hash);
        $this->registry->database->getConnection()->insert("users", $userInfo);
    }

}

?>
