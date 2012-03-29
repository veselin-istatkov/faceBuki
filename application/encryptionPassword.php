<?php

define("LENGTH", 8);
define("SALT_POS_BEFORE_HASH", 5);
define("SALT_POS_AFTER_HASH", 37);

function getRandomSalt() {
    $string = "";
    $possible = "0123456789abcdef";
    for ($i = 0; $i < LENGTH; $i++) {
        $toAdd = $possible[mt_rand(0, strlen($possible) - 1)];
        $string .= $toAdd;
    }
    return $string;
}

function getPasswordHash($salt, $password) {
    $leftPass = substr("$password", 0, SALT_POS_BEFORE_HASH);
    $rightPass = substr("$password", SALT_POS_BEFORE_HASH);
    $hashedPass = hash('sha256', $leftPass . $salt . $rightPass);
    $leftPass = substr("$hashedPass", 0, SALT_POS_AFTER_HASH);
    $rightPass = substr("$hashedPass", SALT_POS_AFTER_HASH);
    return $leftPass . $salt . $rightPass;
}

function comparePassword($password, $passFromDB) {
    $salt = substr($passFromDB, SALT_POS_AFTER_HASH, 8);
    return $passFromDB == getPasswordHash($salt, $password);
}

function getRandomPass() {
    $string = "";
    $possible = "abcdefghigklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_";
    for ($i = 0; $i < LENGTH - 2; $i++) {
        $toAdd = $possible[mt_rand(0, strlen($possible) - 1)];
        $string .= $toAdd;
    }
    return $string;
}

?>
