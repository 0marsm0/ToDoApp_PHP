<nav>
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php if(empty($_SESSION['auth'])) : ?> disabled <?php endif;?>" href="list.php">list</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php if(empty($_SESSION['auth'])) : ?> disabled <?php endif;?>" href="#">profile</a>
        </li>
        <?php if(empty($_SESSION['auth'])) : ?>
        <a class="btn btn-success" href="login.php" role="button">login</a>
        <?php else : ?>
        <a class="btn btn-outline-success" href="logout.php" role="button">logout</a>
        <?php endif;?>
    </ul>
</nav>