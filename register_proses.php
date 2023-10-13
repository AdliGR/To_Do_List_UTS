<?php
include('koneksi.php'); 

function hashPassword($password) {
    return password_hash($password, PASSWORD_BCRYPT);
}

$response = array('status' => 'error', 'message' => '');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = hashPassword($_POST['password']);

    $sql = "INSERT INTO user (username, email, password) VALUES (:username, :email, :password)";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
        $response['status'] = 'success';
        $response['message'] = 'Registrasi berhasil. Silakan login.';
    } else {
        $response['message'] = 'Registrasi gagal. Silakan coba lagi.';
    }
}

$conn = null;

echo json_encode($response);
?>
