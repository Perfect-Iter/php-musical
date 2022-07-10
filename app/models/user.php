<?php

/*
interface userModel{
    function login($POST);
    function addUser($POST);
    function check_login(); 
}
*/
class User{
    private $Error = "";
    
    //login users
    function login($POST){
        
        //db instance
        $DB = Database::getInstance();;
    
        //if values parsed
        if(isset($POST['username']) && isset($POST['password'])){
            $arr['username'] = $POST['username'];
            $arr['password'] = $POST['password'];

            $query = "select * from users where username = :username && password = :password limit 1";
            $data = $DB->read($query, $arr);
            
            //if values returned
            if(is_array(($data))){
                //logged in
                $_SESSION['user_id'] = $data[0]->user_id;
                $_SESSION['user_name'] = $data[0]->user_id;
            } else{
                $this->Error .= "User does not exist";
            }
        } else{
            $this->Error .= "Please Enter Valid username or password";
        }
        $_SESSION['Error'] = $this->Error;
    }

    //sign up users
    function addUser($POST){

        $DB = Database::getInstance();
        if(isset($POST['username']) && isset($POST['password'])){
            
            $arr['user_id'] = $this->get_random_string(60);
            $arr['username'] = $POST['username'];
            $arr['email'] = $POST['email'];
            $arr['password'] = $POST['password'];
            $confirm_password = $POST['confirm_password'];
            $arr['role'] = $POST['role'];

            
            //username validation
            if(empty( $arr['username']) || !preg_match("/^[a-zA-z]+$/",  $arr['username'])){
                $this->Error .= "Please Enter a valid UserName <br>";
            }

            //email validation
            if(empty($arr['email']) || !preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/", $arr['email'])){
                $this->Error .= "Please Enter Valid Email <br>";
            }

            //check password and confirm if match
            if( $arr['password'] !== $confirm_password){
                $this->Error .= "Passwords do not match <br>";
            }

            if(empty( $arr['role'])){
                $this->Error .= "Role is required <br>";
            }                
            //password len
            if(strlen($arr['password']) < 8){
                $this->Error .= "Password too short <br>";
            }            
            if($this->Error == ""){
                $arr['date_joined'] = date("Y-m-d H:i:s");
                $arr['password'] = hash('sha1', $arr['password']);

                $query = "insert into users(user_id,username, email, password, role, date_joined) values (:user_id, :username, :email,:password, :role, :date_joined) limit 1";
                $data = $DB->write($query, $arr);
                
                if(is_array(($data))){
                    header("location: http://localhost/musixx/public/admin/users");
                    die;
                } 
            }

        } else{
            $this->Error .= "Please Enter Valid username or password <br>";
        }
        $_SESSION['Error'] = $this->Error;

    }

    //check login session
    function check_login(){
        if (isset($_SESSION['user_id'])){
            $DB = Database::getInstance();;
            
            $arr['user_id'] = $_SESSION['user_id'];

            $query = "select * from users where user_id = :user_id limit 1";
            $data = $DB->read($query, $arr);
            if(is_array(($data))){
                //logged in
                $_SESSION['user_id'] = $data[0]->user_id;
                $_SESSION['user_name'] = $data[0]->user_id;

                return true;
            }
        }

        return false;
    }

    private function get_random_string($length){
        $array = array(0,1,2,3,4,5,6,7,8,9,'a','b','c','d',
        'e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t',
        'u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L',
        'M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
    
        $text = "";
    
        $length = rand(6, $length);
    
        for ($i=0; $i <$length ; $i++) { 
            # code...
            $random = rand(0, 61);
    
            $text .=$array[$random];
        }
    
        return $text;
    }
}

?>