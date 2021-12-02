<?php

namespace App;

use App\Core\Model\Login;


class Auth
{
    public static function login($login, $password)
    {
        $loginy = Login::getAll();
        foreach ($loginy as $l) {
            if ($login == $l->getEmail()) {
                if ($password == $l->getPassword()) {
                    $_SESSION["name"] = $login;
                    return true;
                } else {
                    return false;
                }
            }
        }

        return false;
    }

    public static function isLogged(){
        return isset($_SESSION['name']);
    }

    public static function getName(){
        return (Auth::isLogged() ? $_SESSION['name'] : "");
    }


    public static function logout()
    {
        unset($_SESSION['name']);
        session_destroy();
    }
}