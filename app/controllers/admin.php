<?php

    class Admin extends Loader{
        function index($section = "", $action = ""){
            
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