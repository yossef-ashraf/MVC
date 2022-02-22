<?php

namespace mvc\core;

class helpers{
public static function redirect($path){
header ("LOCATION:".DOMAIN_NAME.$path);
}

}