<?php
    require('connect.php');
    if(isset($_POST['email']) and isset($_POST['password'])){
        $sql = "INSERT INTO users (email, password) VALUES ('".$_POST['email']."', '".$_POST['password']."')";
        try{
            $connect->exec($sql);
            header('Location: http://localhost/MyJob/T2_6/AllUsers.php');
        }
        catch(Exception $ex){
            echo($ex);
        }
    }
?>