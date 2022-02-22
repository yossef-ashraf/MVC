<?php

namespace MVC\controllers ;
// namespace for override 
use MVC\core\controller;
// for can use extends controller
use MVC\models\user;
use MVC\core\session;
use MVC\core\helpers;
use GUMP;

class homecontroller extends controller{

public function index(){
$title="homecontroller";
$this->viwe("home\index",["title"=>$title]);
// 
}

public function details(){
$title="detailscontroller";
$this->viwe("home\details",["title"=>$title]);
// 
}



};