<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE email = :email";
    $stmt = $conn->prepare($query);
    $stmt->bindValue(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch();

    if ($user) {
        $storedPassword = $user['password']; 
        if (password_verify($password, $storedPassword)) {
            header("Location: main.html");
            exit();
        } else {
            echo "<script>alert('Email atau password salah. Silakan coba lagi.');</script>";
            echo "<script>window.location.href = 'login.html';</script>";
        }
    } else {
        echo "<script>alert('Email atau password salah. Silakan coba lagi.');</script>";
        echo "<script>window.location.href = 'login.html';</script>";
    }
}
?>
