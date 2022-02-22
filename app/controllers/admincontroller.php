<?php

namespace MVC\controllers ;
// namespace for override 
use MVC\core\controller;
// for can use extends controller
use MVC\models\user;
use MVC\models\category;
use MVC\core\session;
use MVC\core\helpers;
use GUMP;

class admin extends controller{

public function __construct(){
Session::Start();
$user_data = Session::Get('user');
if(empty($user_data)){
echo 'class not access';
die;}
}

public function index(){
$title="admin";
$this->viwe("back\index",["title"=>$title]);
// 
}



}