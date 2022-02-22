<?php

namespace MVC\core ;

class Session
{

public static function Start()
{
@session_start();
// @ is a error operator
//start session
}

public static function Set($key,$value)
{
$_SESSION[$key] = $value;
//set session

}

public static function Get($key)
{
if(isset($_SESSION[$key]))
return $_SESSION[$key];
//Get session

}

public static function Stop()
{
session_destroy();
//end session
}


}