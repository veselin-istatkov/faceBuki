<?php

/**
 *  This are functions that help with password encryption.
 * 
 *  @author V.Istatkov
 */

define("LENGTH", 8);
define("SALT_POS_BEFORE_HASH", 5);
define("SALT_POS_AFTER_HASH", 37);

/**
 * Generates a random salt.
 * 
 * @return string Returns a random generated salt.
 */
function getRandomSalt() {
    $string = "";
    $possible = "0123456789abcdef";
    for ($i = 0; $i < LENGTH; $i++) {
        $toAdd = $possible[mt_rand(0, strlen($possible) - 1)];
        $string .= $toAdd;
    }
    return $string;
}

/**
 * Hashes a password using salt. Uses 'sha256' algorithm.
 * 
 * @param string $salt The salt that is put somewhere in the password.
 * @param string $password The password in plain text.
 * @return string The salty hashed password.
 */
function getPasswordHash($salt, $password) {
    $leftPass = substr("$password", 0, SALT_POS_BEFORE_HASH);
    $rightPass = substr("$password", SALT_POS_BEFORE_HASH);
    $hashedPass = hash('sha256', $leftPass . $salt . $rightPass);
    $leftPass = substr("$hashedPass", 0, SALT_POS_AFTER_HASH);
    $rightPass = substr("$hashedPass", SALT_POS_AFTER_HASH);
    return $leftPass . $salt . $rightPass;
}

/**
 * Compares two hashed passwords. 
 * 
 * @param string $password The password that you want to compare with one in db.
 * @param string $passFromDB The password from db.
 * @return boolean If passwords match, returns true. Otherwise, false. 
 */
function comparePassword($password, $passFromDB) {
    $salt = substr($passFromDB, SALT_POS_AFTER_HASH, 8);
    return $passFromDB == getPasswordHash($salt, $password);
}

/**
 * Generates a random password with fixed length.
 * 
 * @return string The random generated password. 
 */
function getRandomPassword() {
    $string = "";
    $possible = "abcdefghigklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_";
    for ($i = 0; $i < LENGTH - 2; $i++) {
        $toAdd = $possible[mt_rand(0, strlen($possible) - 1)];
        $string .= $toAdd;
    }
    return $string;
}

?>