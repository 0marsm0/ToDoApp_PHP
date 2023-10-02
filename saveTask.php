<?php
require_once 'databaseconnect.php';
global $conn;

session_start();

$id = $_SESSION['id'];
$task = $_POST['task'];
$deadline = $_POST['deadline'];
$query = "INSERT INTO lists SET user_id = '$id', task = '$task', deadline = '$deadline', created = now()";
mysqli_query($conn, $query) or die(mysqli_error($conn));
header('Location: list.php');
die();

