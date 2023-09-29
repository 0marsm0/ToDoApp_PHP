<?php
session_start();
$_SESSION['auth'] = null;
$_SESSION['email'] = null;
$_SESSION['name'] = null;
header('Location: index.php');
die();