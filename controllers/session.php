<?php
//start the session 
session_start();

//IF $_SESSION['user'] has not been set, I set it to a value 
if(!isset($_SESSION['user']))
{
    $_SESSION['user'] = array(
        "id" => 1,
        "username" => "alesanchezr"
    );
}

//We are be able to use $_SESSION['user'] whenever we want, the value will stay even if we reload the website.

