<?php
if (isset($_GET['id'])) {
    $task_id = $_GET['id'];

    require('koneksi.php');

    $sql = "DELETE FROM task WHERE id = :task_id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':task_id', $task_id);

    if ($stmt->execute()) {
        header("Location: index.php"); 
        exit();
    } else {
        echo "Gagal menghapus tugas. Silakan coba lagi.";
    }

    $conn = null; 
} else {
    echo "ID tugas tidak ditemukan.";
}
?>
