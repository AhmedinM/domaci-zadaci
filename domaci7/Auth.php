<?php

session_start();
class Auth{
    public function check(){
        if(!isset($_SESSION["logedin"]) || $_SESSION["logedin"]!==true){
            return false;
        }else{
            return true;
        }
    }

    public function attempt($email,$password){
        if($email=='admin@test.com' && $password=='secret'){
            return true;
        }else{
            return false;
        }
    }
}