<?php
define("ROOT",dirname(__DIR__));
define("APP",ROOT."\\".'app');
define("CONFIG",APP."\\".'config');
define("CONTROLLERS",APP."\\".'controllers');
define("CORE",APP."\\".'core');
define("MODELS",APP."\\".'models');
define("VIEWS",APP."\\".'views\\');

define("SERVER","localhost");
define("USERNAME","root");
define ("PASSWORD","");
define ("DATABASE","mvc");
define ("DATABASE_TYPE","mysql");
define ("DOMAIN_NAME"," http:/mvc_without_ui/public");
define("PATH",DOMAIN_NAME)."/";


require_once("../vendor/autoload.php");
// composer 

$app= new MVC\core\app;


// inportant for call class app 
// construct app call uri() & render() 
// uri()-> split url after index 
// render()-> call controller and method and put parmeters

