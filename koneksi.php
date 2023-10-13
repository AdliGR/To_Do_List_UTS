<?php
$host = 'localhost';  
$database = 'utstodolist';  
$username = 'root';  
$password = '';  

try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("set names utf8");
} catch (PDOException $e) {
    echo "Koneksi database gagal: " . $e->getMessage();
    die();
}
?>
