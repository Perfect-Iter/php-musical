
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="http://localhost/musixx/public/assets/css/style.css?1234">
    <title>MUSIXX</title>
</head>
<body>
    <style>
        header a{
            color: white;
        }
        .dropdown-list{
            background-color: #444;
        }
    </style>
    <header style="background-color: #3e344e; color: white;">
        <div class="logo-holder">
            <a href="http://localhost/musixx/public/"><img src="http://localhost/musixx/public/assets/img/logo.png" alt=""></a>
        </div>

        <div class="header-div">
            <div class="main-title">ADMIN</div>
            <div class="main-nav">
                <div class="nav-item active"><a href="http://localhost/musixx/public/">Dashboard</a></div>
                <div class="nav-item"><a href="#">Music</a></div>
     
                <div class="nav-item"><a href="#">Artists</a></div>
                <div class="nav-item"><a href="#">Contact Us</a></div>
                <div class="nav-item dropdown">
                    <a href="#">Hi, User</a>
                    <div class="dropdown-list">
                        <div class="nav-item"><a href="#">Profile</a></div>
                        <div class="nav-item"><a href="http://localhost/musixx/public/admin">Admin</a></div>
                        <div class="nav-item"><a href="#">Logout</a></div>
                    </div>
                </div>
                
            </div>
        </div>
    </header>
    <section class="admin-content" style="min-height: 400px;">

        <div class="login-holder">
            <h2>PAGE NOT FOUND</h2>

        </div>

    </section>


<?php
   $this->view("footer");
?>