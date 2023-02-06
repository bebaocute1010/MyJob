<?php
require('config.php');
try{
    $connect = new PDO("mysql:host=$host;dbname=$db", $username, $password);
}
catch (PDOException $e){
    echo($e);
}
?>