<?php
session_start(); 

require('koneksi.php');

if (isset($_POST['name_task'])) {
    $name_task = $_POST['name_task'];
    $username = $_SESSION['username']; 
    $task_status = 0;
    $progress = "Not yet started";


    $sql = "INSERT INTO task (username, name_task, task_status, progress) VALUES (:username, :name_task, :task_status, :progress)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':name_task', $name_task);
    $stmt->bindParam(':task_status', $task_status);
    $stmt->bindParam(':progress', $progress);
    
    if ($stmt->execute()) {
        header("Location: index.php"); 
        exit();
    } else {
        echo "Failed to add the task.";
    }
}

$conn = null;
?>
