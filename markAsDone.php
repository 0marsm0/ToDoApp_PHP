<?php
require_once 'databaseconnect.php';
global $conn;

$id = $_GET['id'];
$query = "UPDATE lists SET completed = now() WHERE id = '$id'";
mysqli_query($conn, $query) or die(mysqli_error($conn));
header('Location: list.php');
die();