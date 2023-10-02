<?php
require_once 'databaseconnect.php';
global $conn;

session_start();

if(!empty($_POST['email']) && !empty($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $res = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $user = mysqli_fetch_assoc($res);
    var_dump($user);

    if(!empty($user)) {
        $_SESSION['auth'] = true;
        $_SESSION['id'] = $user['id'];
        $_SESSION['name'] = $user['name'];
        header('Location: index.php');
    } else {
        $_SESSION['flash'] = 'It seems that login or password doesn\'t match';
        echo $_SESSION['flash'];
        unset($_SESSION['flash']);
    }
}
?>

<?php if(empty($_SESSION['auth'])) : ?>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" aria-describedby="passwordHelpBlock">
            <div id="passwordHelpBlock" class="form-text"></div>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
<?php endif; ?>
