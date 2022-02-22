<?php

namespace MVC\core ;
// namespace for override 


class controller{

public function viwe($path,$pram){
//path come to specific path 
//pram is a accesstive arrey
extract($pram);
// extract make all index for varibles ["title"=>"xx"] ->$title="xx" and can use in specific viwe 
require_once(VIEWS.$path.".php");
}
///

}