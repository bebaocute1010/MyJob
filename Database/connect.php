<?php
require 'config.php';
try {
    $connect = new PDO("mysql:host=$host;dbname=$dbName", $username, $password);
} catch (PDOException $e) {
    echo ($e);
}
