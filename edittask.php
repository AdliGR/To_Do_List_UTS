<?php
require('koneksi.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Menerima data yang dikirimkan melalui formulir
    $task_id = $_POST['id'];
    $task_name = $_POST['name_task'];
    $progress = $_POST['progress'];

    // Mengubah task_status menjadi 1 jika progress adalah "Complete"
    $task_status = ($progress === 'Complete') ? 1 : 0;

    // Query untuk memperbarui data tugas
    $sql = "UPDATE task SET name_task = :name_task, progress = :progress, task_status = :task_status WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $task_id);
    $stmt->bindParam(':name_task', $task_name);
    $stmt->bindParam(':progress', $progress);
    $stmt->bindParam(':task_status', $task_status);

    if ($stmt->execute()) {
        header("Location: index.php");
        exit;
    } else {
        echo "Gagal memperbarui tugas.";
    }
}

$conn = null;
?>