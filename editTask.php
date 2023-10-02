<?php
require_once 'databaseconnect.php';
global $conn;

$id = $_GET['id'];
$query = "SELECT * FROM lists WHERE id = '$id'";
$res = mysqli_query($conn, $query);
$task = mysqli_fetch_assoc($res);

?>

<form action="editTaskAction.php?id=<?=$id?>" method="POST">
    <div class="row">
        <div class="col">
            <input type="text" name="task" value="<?=$task['task']?>" class="form-control"  aria-label="First name">
        </div>
        <div class="col">
            <input type="date" name="deadline" value="<?=$task['deadline']?>" class="form-control"  aria-label="Deadline">
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </div>
</form>