<?php
require_once 'databaseconnect.php';
global $conn;

$id = $_GET['id'];
$task = $_POST['task'];
$deadline = $_POST['deadline'];
$query = "UPDATE lists SET task = '$task', deadline = '$deadline' WHERE id = '$id'";
mysqli_query($conn, $query) or die(mysqli_error($conn));
header('Location: list.php');
die();
?>