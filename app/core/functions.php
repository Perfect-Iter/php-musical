<?php
    function show($item){
        echo "<pre>";
        print_r($item);
        echo "</pre>";
    }

    //session checker
    function check_login_session(){
        $db = Database::getInstance();
        if(isset($_SESSION['user_id'])){

            $arr['user_id'] = $_SESSION['user_id'];
            $sql ="select * from users where user_id = :user_id limit 1";

            $result = $db->read($sql, $arr);
            if(is_array($result)){
                return $result[0];
            }
        }

        return false;
    }

    //check for error messages in session
    function check_error_message(){
        if(isset($_SESSION['Error']) && $_SESSION['Error'] != ""){
            echo $_SESSION['Error'];
            unset($_SESSION['Error']);
        }
    }

    function message($message = '', $clear = false){
        if(!empty($message)){
            $_SESSION['message'] = $message;
        } else{
            $msg = $_SESSION['message'];
            if($clear){
                unset($_SESSION['message']);
            }
            return $msg;
        }
        return false;
    }


?>