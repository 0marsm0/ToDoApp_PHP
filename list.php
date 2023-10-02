<?php
require_once 'databaseconnect.php';
global $conn;

session_start();


$num = 1;
$id = $_SESSION['id'];
$query = "SELECT * FROM lists WHERE user_id = '$id' AND completed IS NULL";
$res = mysqli_query($conn, $query);
for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
?>

<form action="saveTask.php" method="POST">
    <div class="row">
        <div class="col">
            <input type="text" name="task" class="form-control" placeholder="Add task" aria-label="First name">
        </div>
        <div class="col">
            <input type="date" name="deadline" class="form-control" placeholder="Deadline" aria-label="Deadline">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </div>
</form>

<h2>
    Here is your actual task list!
</h2>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Task</th>
        <th scope="col">Deadline</th>
        <th scope="col">Done</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($data as $task) : ?>
    <tr>
        <th scope="row"><?=$num++?></th>
        <td><?=$task['task']?></td>
        <td><?=$task['deadline']?></td>
        <th scope="col"><a class="btn btn-primary" href="markAsDone.php?id=<?=$task['id']?>" role="button">Done</a></th>
        <th scope="col"><a class="btn btn-primary" href="editTask.php?id=<?=$task['id']?>" role="button">Edit</a></th>
        <th scope="col"><a class="btn btn-primary" href="deleteTask.php?id=<?=$task['id']?>" role="button">Delete</a></th>
    </tr>
    <?php endforeach;?>
    </tbody>
</table>
