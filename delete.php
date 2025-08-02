<?php
include 'connect.php';

$id = $_GET['id'];
$query = "DELETE FROM user WHERE ID = '$id'";

$result = mysqli_query($connect, $query);

header('location: index.php');
?>