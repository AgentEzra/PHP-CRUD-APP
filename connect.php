<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'crud_app';

$connect = new mysqli($host, $user, $password, $db);

if ($connect->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
?>
