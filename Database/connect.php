<?php
require 'database.php';
try {
    $connect = new PDO("mysql:host=$host;dbname=$dbName", $username, $password);
} catch (PDOException $e) {
    echo ($e);
}
