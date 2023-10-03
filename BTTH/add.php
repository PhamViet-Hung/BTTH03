<?php
require_once 'database.php';

$database = new Database();
$theLoai = $database->layDanhSachTheLoai();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tenBaiHat = $_POST['tenBaiHat'];
    $caSi = $_POST['caSi'];
    $idTheLoai = $_POST['idTheLoai'];

    $database->themBaiHat($tenBaiHat, $caSi, $idTheLoai);

    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Thêm mới bài hát</title>
</head>
<body>
    <h1>Thêm mới bài hát</h1>
    <form method="POST" action="">
        <label for="tenBaiHat">Tên bài hát:</label>
        <input type="text" id="tenBaiHat" name="tenBaiHat" required><br>

        <label for="caSi">Ca sĩ:</label>
        <input type="text" id="caSi" name="caSi" required><br>

        <label for="idTheLoai">Thể loại:</label>
        <select id="idTheLoai" name="idTheLoai" required>
            <?php foreach ($theLoai as $id => $tenTheLoai): ?>
            <option value="<?php echo $id; ?>"><?php echo $tenTheLoai; ?></option>
            <?php endforeach; ?>
        </select><br>

        <input type="submit" value="Thêm">
    </form>
    <a href="index.php">Quay lại</a>
</body>
</html>