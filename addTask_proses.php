<?php

include 'koneksi.php';

session_start();
if (isset($_SESSION['username'])) 
{
    $username = $_SESSION['username'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $task_name = $_POST['task_name'];
        $task_done = isset($_POST['task_done']) ? 1 : 0;

        $progress_status = "Not Yet Started";

        $sql = "INSERT INTO tasks (username, task_text, progress_status) VALUES (:username, :task_text, :progress_status)";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':task_text', $task_name);
        $stmt->bindParam(':progress_status', $progress_status);
        $stmt->execute();
        
        header("Location: index.php"); 
        exit();

    }
} 

else 
{
    header("Location: login.php");
    exit();
}

$conn = null;
?>
