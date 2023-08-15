<?php

include_once "Queries.php";
$queries= new Queries();



if(isset($_POST["action"]) && $_POST["action"] == "userList"){
    echo json_encode($queries->userList());
}

if(isset($_POST["action"]) && $_POST["action"]== "register" && isset($_POST["keyAllData"])){
   $queriesRegisterReuslt= $queries->registerList($_POST["keyAllData"]["userName"], $_POST["keyAllData"]["email"], $_POST["keyAllData"]["passw"]);
    echo ($queriesRegisterReuslt);
}

if(isset($_POST["action"]) && $_POST["action"]=="deleteList" && isset($_POST["keyId"])){
    $queriesDeleteReuslt= $queries->deleteUsers($_POST["keyId"]);
    echo json_encode($queriesDeleteReuslt);
}


