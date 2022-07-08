<?php

interface userModel{
    function login($POST);
    function signup($POST);
    function check_login(); 
}

class User{

    function login($POST){
        $DB = new Database();
        
        $_SESSION['error'] = "";
        if(isset($POST['username']) && isset($POST['password'])){
            $arr['username'] = $POST['username'];
            $arr['password'] = $POST['password'];

            $query = "select * from users where username = :username && password = :password limit 1";
            $data = $DB->read($query, $arr);
            
            if(is_array(($data))){
                //logged in
                $_SESSION['user_id'] = $data[0]->user_id;
                $_SESSION['user_name'] = $data[0]->user_id;
            }
        }




    }

    function signup($POST){

    }
    function check_login(){

    }
}

?>