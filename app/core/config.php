<?php

    if($_SERVER['SERVER_NAME'] == "localhost"){
        
        //localhost
        define("ROOT", "http://localhost/musixx/public");

        define("DB_DRIVER","mysql");
        define("DB_HOST","localhost");
        define("DB_USER","root");
        define("DB_PASSWORD","");
        define("DB_NAME","music_site_db");
    } else{
        //online server
        define("ROOT", "http://www.mysite.com");

        define("DB_DRIVER","mysql");
        define("DB_HOST","localhost");
        define("DB_USER","root");
        define("DB_PASSWORD","");
        define("DB_NAME","music_site_db");
    }

?>