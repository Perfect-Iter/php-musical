<?php

    class Admin extends controller{
        function index($section = "", $action = ""){
            
            /*
            $user = $this->loadModel("user");

            if(!$result = $user->check_login()){
                header("location:http://localhost/musixx/public/login");
                die;
            }
            */

            switch($section){
                case 'dashboard':
                    $this->view("admin/dashboard");
                    break;
                case 'users':


                    $data['action'] = $action;                    
                    $this->view("admin/users", $data);
                    break;
                default:
                    $this->view("admin/404");
                    break;
            }
            
            $this->view("admin/admin");

        }
    }

?>