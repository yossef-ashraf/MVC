<?php
namespace  MVC\models ;
use MVC\core\model ;

class user extends model {

public function GetAllUser(){
return model::db()->run("select * FROM users")->fetchAll();
}
// get all user from bd
//


public function GetUser($email , $pass){
$data= model::db()->row("select * FROM users WHERE email = ? && pass = ? ", [$email , $pass]);
return  $data;
}
//  get user from bd to Check from user 
//


public function SetUser($data){
$data=model::db()->insert('users', $data);
return  $data;
}
//  insert user for bd 
//

public function deleteuser($id){
$data=model::db()->insert('users', ['id'=>$id]);
return  $data;
}
//  delete user form bd 
//

}