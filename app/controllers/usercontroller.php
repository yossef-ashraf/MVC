<?php

namespace MVC\controllers ;
// namespace for override 
use MVC\core\controller;
// for can use extends controller
use MVC\core\session;
use MVC\core\helpers;
use MVC\models\user;
use GUMP;

class usercontroller extends controller{


    public function __construct(){
        Session::Start();
        }


/////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
// start login and register
public function login(){
    $this->viwe("home\login",["title"=>'login']);
    }
    
    public function register(){
    $this->viwe("home\\register",["title"=>'RegisterLogin']);
    }
    
    
    public function PostLogin(){
    $v= GUMP::is_valid($_POST, [ 
    'email'=>'required',
    'pass'=>'required' 
    ]);
    // print_r($_POST);die;
    if ($v == 1) {
    // echo "err ";die;
    $user= new user;
    $data=$user->GetUser($_POST['email'],$_POST['pass']);
    // echo "<pre>";
    // print_r($data);die;
    if ($data) {
    Session::Set("user",$_POST['email']);
    helpers::redirect('/admin/index');
    }else {
    echo "err user";
    }
    ///
    }
    }
    //////////////////////////////////////////////////////////////////
    public function RegisterLogin(){
    $v= GUMP::is_valid($_POST, [
    'email'=>'required', 
    'name'=>'required',
    'pass'=>'required'
    ]);
    if ($v == 1) {
    $data_arr = [
    'name' => $_POST['name'],
    'email'=> $_POST['email'],
    'pass' => $_POST['pass']
    ];
    $user= new user;
    $data=$user->SetUser($data_arr);
    // echo "<pre>";
    // print_r($data);
    helpers::redirect('home/login');
    }else{
    echo "err vald";
    }
    }
    
    // end login and register
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////
    



















// public function __construct(){
// Session::Start();
// $user_data = Session::Get('user');
// if(empty($user_data)){
// echo 'class not access';
// die;}
// }

// public function index(){
// echo 'class access'.'<br>';
// $user_data = Session::Get('user');
// echo $user_data;
// }


}