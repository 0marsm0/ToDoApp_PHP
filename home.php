<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'databaseconnect.php';

?>

<h1 class="main__header">
    <?php if(empty($_SESSION['auth'])) : ?>
        Manage your task
    <?php else : ?>
        Welcome <?=$_SESSION['name']?>!
    <?php endif;?>
</h1>
<div class="main__content">
    <div class="main__content-elem"><img src="img/todo_1.jpg"></div>
    <div class="main__content-elem"><img src="img/todo_2.jpg"></div>
    <div class="main__content-elem"><img src="img/todo_3.jpg"></div>
</div>

<a class="btn btn-primary" href="registration.php" role="button">Get Started</a>


