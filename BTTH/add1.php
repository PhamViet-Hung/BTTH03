<?php
require_once 'database.php';

$database = new Database();
$theLoai = $database->layDanhSachTheLoai();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tenTheLoai = $_POST['tenTheLoai'];

    $database->themTheLoai($tenTheLoai);

    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Thêm mới thể loại</title>
</head>
<body>
    <h1>Thêm mới thể loại</h1>
    <form method="POST" action="">
        <label for="tenTheLoai">Tên thể loại:</label>
        <input type="text" id="tenTheLoai" name="tenTheLoai" required><br>

        <input type="submit" value="Thêm">
    </form>
    <a href="index.php">Quay lại</a>
</body>
</html>