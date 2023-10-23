<?php
require('koneksi.php');

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];

$sql = "SELECT id, name_task, task_status, progress FROM task WHERE username = :username ORDER BY CASE 
    WHEN progress = 'Not yet started' THEN 1
    WHEN progress = 'On Progress' THEN 2
    WHEN progress = 'Complete' THEN 3
    ELSE 4
    END";
$result = $conn->prepare($sql);
$result->bindParam(':username', $username, PDO::PARAM_STR);
$result->execute();

if ($result->rowCount() > 0) {
    while ($row = $result->fetch()) {
        echo '<tr data-aos="fade">';
        echo '<td>' . $row['name_task'] . '</td>';
        echo '<td><input type="checkbox" ' . ($row['task_status'] == 1 ? 'checked' : '') . ' disabled></td>';

        $progress_color = '';
        if ($row['progress'] == 'Not yet started') {
            $progress_color = 'red';
        } elseif ($row['progress'] == 'On Progress') {
            $progress_color = 'yellow';
        } elseif ($row['progress'] == 'Complete') {
            $progress_color = 'green';
        }

        echo '<td style="color: ' . $progress_color . ';">' . $row['progress'] . '</td>';
        
        echo '<td>';
        if ($row['task_status'] == 1) {
            echo '<a href="index.php" class="btn btn-warning" onclick="alert(\'Task already Completed\');">Edit</a>';
        } else {
            echo '<a href="edit.php?id=' . $row['id'] . '" class="btn btn-info">Edit</a>';
        }
        echo '</td>';
        echo '<td><a href="delettask.php?id=' . $row['id'] . '" class="btn btn-danger">Delete</a></td>';
        echo '</tr>';
    }
} else {
    echo '<tr><td colspan="3">No tasks found</td></tr>';
}

$conn = null;
?>
