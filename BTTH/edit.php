<?php
require_once 'database.php';

$database = new Database();
$baiHat = $database->layDanhSachBaiHat();
$theLoai = $database->layDanhSachTheLoai();

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tenBaiHat = $_POST['tenBaiHat'];
    $caSi = $_POST['caSi'];
    $idTheLoai = $_POST['idTheLoai'];

    $database->suaBaiHat($id, $tenBaiHat, $caSi, $idTheLoai);

    header('Location: index.php');
    exit;
}

$thongTinBaiHat = $baiHat[$id];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Chỉnh sửa bài hát</title>
</head>
<body>
    <h1>Chỉnh sửa bài hát</h1>
    <form method="POST" action="">
        <label for="tenBaiHat">Tên bài hát:</label>
        <input type="text" id="tenBaiHat" name="tenBaiHat" value="<?php echo $thongTinBaiHat['tenBaiHat']; ?>" required><br>

        <label for="caSi">Ca sĩ:</label>
        <input type="text" id="caSi" name="caSi" value="<?php echo $thongTinBaiHat['caSi']; ?>" required><br>

        <label for="idTheLoai">Thể loại:</label>
        <select id="idTheLoai" name="idTheLoai" required>
            <?php foreach ($theLoai as $thongTinTheLoai): ?>
                <option value="<?php echo $thongTinTheLoai['id']; ?>" <?php if ($thongTinTheLoai['id'] == $thongTinBaiHat['idTheLoai']) echo 'selected'; ?>>
                    <?php echo $thongTinTheLoai['tenTheLoai']; ?>
                </option>
            <?php endforeach; ?>
        </select><br>

        <input type="submit" value="Lưu">
    </form>

    
</body>
</html>