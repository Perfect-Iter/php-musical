<?php

    class Login extends controller{

        function index(){

            if((isset($_POST['email'])) && (isset($_POST['password']))){
                $user = $this->loadModel("user");
                $user->signup($_POST);
            }

            $this->view("login");
        }
    }

?>