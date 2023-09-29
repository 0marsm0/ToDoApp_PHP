<?php

session_start();

if(isset($_SESSION['auth'])) {
    header('Location: /pages/registration.php');
    die();
}