<?php
include_once "Connection.php";

class Queries{

    private $db;

    function __construct(){
        $this->db=new Connection;
    }

    function userList(){
        $sql= $this->db->conn->prepare("SELECT * FROM users") ;
        $sql->execute();
        $result= $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function registerList($userName, $email, $passw){
        $sql= $this->db->conn->prepare("INSERT INTO users (user_name, email, password) VALUE (:userName, :email, :passw) ");
        $sql->bindValue(":userName", $userName);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":passw", $passw);
        $result= $sql->execute();
        return $result;
        

    }
    function deleteUsers($keyId){
        $sql= $this->db->conn->prepare("DELETE FROM users WHERE id= :keyId");
        $sql->bindValue(":keyId", $keyId);
        $result= $sql->execute();
        return $result;
    }



}