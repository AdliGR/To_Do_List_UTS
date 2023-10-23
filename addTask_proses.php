<?php
session_start();

require('koneksi.php');

if (isset($_POST['name_task'])) {
    $name_task = $_POST['name_task'];
    $username = $_SESSION['username'];
    $task_status = 0;
    $progress = "Not yet started";

    // Check if the name_task already exists in the database
    $sql_check = "SELECT name_task FROM task WHERE username = :username AND name_task = :name_task";
    $stmt_check = $conn->prepare($sql_check);
    $stmt_check->bindParam(':username', $username);
    $stmt_check->bindParam(':name_task', $name_task);
    $stmt_check->execute();

    if ($stmt_check->rowCount() > 0) {
        echo '<script>alert("Task with the same name already exists.");</script>';
        echo '<script>window.location.href = "addtask.php";</script>'; // Redirect back to addtask.php
    } else {
        // If the name_task is unique, insert it into the database
        $sql = "INSERT INTO task (username, name_task, task_status, progress) VALUES (:username, :name_task, :task_status, :progress)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':name_task', $name_task);
        $stmt->bindParam(':task_status', $task_status);
        $stmt->bindParam(':progress', $progress);

        if ($stmt->execute()) {
            echo '<script>window.location.href = "index.php";</script>'; // Redirect back to addtask.php
            exit();
        } else {
            echo '<script>alert("Failed to add the task.");</script>';
            echo '<script>window.location.href = "addtask.php";</script>'; // Redirect back to addtask.php
        }
    }
}

$conn = null;
?>
