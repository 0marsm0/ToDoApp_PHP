<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once 'databaseconnect.php';
global $conn;

session_start();


    if(!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm']) && !empty($_POST['name'])) {
        if($_POST['password'] === $_POST['confirm']) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $name = $_POST['name'];
            $query = "INSERT INTO users SET email = '$email', password = '$password', name = '$name', registered = NOW()";
            mysqli_query($conn, $query);
            header('Location: login.php');
        } else {
            echo '1';
        }
    } else {
        echo '2';
    }
?>


<form action="" method="POST">
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control">
        <div id="passwordHelpBlock" class="form-text"></div>
    </div>
    <div class="mb-3">
        <label for="confirm" class="form-label">Confirm password</label>
        <input type="password" name="confirm" class="form-control">
        <div id="passwordHelpBlock" class="form-text"></div>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"></div>
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
</form>