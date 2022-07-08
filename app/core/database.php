<?php

    //database class for connections
    class Database{

        public static $con;

        public function __construct(){
            try{
                
                //$string = "mysql:host=Localhost;dbname=db_name";
                $string = DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME;
                self::$con = new PDO($string, DB_USER, DB_PASSWORD);

            }catch (PDOException $e){

                die($e->getMessage());
            }
        }

        public static function getInstance(){
            if(self::$con){
                return self::$con;
            }

            return $connection = new self;
        }

        //retrieve from the database
        public function read($query, $data = array()){
            $statement = self::$con->prepare($query);
            $result = $statement->execute($data);

            if($result){
                $data = $statement->fetchAll(PDO::FETCH_OBJ);
                if(is_array($data) && count($data) > 0){
                    return $data;
                }
            }
            return false;
        }

        //insert to the database
        public function write($query, $data = array()){
            $statement = self::$con->prepare($query);
            $result = $statement->execute($data);

            if($result){
                return true;
            } 
            return false;
        }
    } 

?>