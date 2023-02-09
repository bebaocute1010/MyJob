<?php
require '../Database/connect.php';
if (isset($_POST['email']) and isset($_POST['password'])) {
    $sql = "INSERT INTO users (email, password) VALUES ('" . $_POST['email'] . "', '" . $_POST['password'] . "')";
    try {
        $connect->exec($sql);
        $response = array("success" => true, "message" => "Tạo tài khoản thành công !");
        // header('Location: http://localhost/MyJob/T2_6/AllUsers.php');
    } catch (Exception $ex) {
        $response = array("success" => false, "message" => $ex->getMessage());
        // var_dump(json_encode($response));
    }
    echo json_encode($response);
}
