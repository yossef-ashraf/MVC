<?php

namespace MVC\core ;


class app{
private $controller;
private $method;
private $prames;

public function __construct(){
$this->url();
$this->render();
}
////
private function url(){
if (!empty($_SERVER["QUERY_STRING"])) {
//$_SERVER["QUERY_STRING"] is come form url
$url=explode("/",$_SERVER["QUERY_STRING"]) ;
// this is controller
$this->controller= isset($url[0]) ? $url[0]."controller" : "" ;
// this is model
$this->method= isset($url[1]) ? $url[1] : "" ;
// for delet controller&model
unset($url[0],$url[1]);
// this is prames in url
$this->prames=array_values($url);
// echo $_SERVER["QUERY_STRING"];die;

}else{
$this->controller="homecontroller";
$this->method="index";
$this->prames=[];
}
//
}
///
private function render(){
$controller="MVC\controllers\\".$this->controller;
$prames=$this->prames;
if (class_exists($controller)) {
$controller= new $controller;
if (method_exists($controller,$this->method)) {
call_user_func_array(array($controller , $this->method),$prames);
}else{

echo "err method";

}
}else{

echo "err controller";

}
}
///


};