<?php
require('koneksi.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        $taskId = $_POST['task_id'];
        $newProgress = $_POST['progress'];

        $allowedProgress = ['Not yet started', 'On Progress', 'Complete'];
        if (in_array($newProgress, $allowedProgress)) {
            $sql = "UPDATE task SET progress = :progress WHERE id = :id AND username = :username";
            $result = $conn->prepare($sql);
            $result->bindParam(':progress', $newProgress, PDO::PARAM_STR);
            $result->bindParam(':id', $taskId, PDO::PARAM_INT);
            $result->bindParam(':username', $username, PDO::PARAM_STR);
            $result->execute();
        }
    }
}

header("Location: index.php");
exit();
