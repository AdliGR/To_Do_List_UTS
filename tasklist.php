<?php

require('koneksi.php'); 

$sql = "SELECT id, name_task, task_status, progress FROM task";
$result = $conn->query($sql);

if ($result->rowCount() > 0) {
    while ($row = $result->fetch()) {
        echo '<tr>';
        echo '<td>' . $row['name_task'] . '</td>';
        echo '<td><input type="checkbox" ' . ($row['task_status'] == 1 ? 'checked' : '') . '></td>';
        echo '<td>' . $row['progress'] . '</td>';
        echo '<td><a href="edit.php?id=' . $row['id'] . '" class="btn btn-info">Edit</a></td>';
        echo '<td><a href="delettask.php?id=' . $row['id'] . '" class="btn btn-danger">Delete</a></td>';
        echo '</tr>';
    }
} else {
    echo '<tr><td colspan="3">No tasks found</td></tr>';
}

$conn = null; 
?>
