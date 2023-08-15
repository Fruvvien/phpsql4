<?php

class Connection{
    private $dsn="mysql:host=localhost;dbname=phpsql4;charset=UTF8";
    private $user="root";
    private $pass="";
    public $conn;

    function __construct(){
        try{
            $this->conn= new PDO($this->dsn, $this->user, $this->pass);

        }catch(PDOExpection $e){
            echo $e;
        }
    
    }
}