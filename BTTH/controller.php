<?php

$host = 'localhost';
$dbname = 'quanlybaihat';
$username = 'root';
$password = '';

// Tạo kết nối PDO
try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Lỗi kết nối đến cơ sở dữ liệu: ' . $e->getMessage();
    exit;
}
?>