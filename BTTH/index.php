<?php
require_once 'database.php';

$database = new Database();
$baiHat = $database->layDanhSachBaiHat();
$theLoai = $database->layDanhSachTheLoai();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Quản lý bài hát</title>
</head>
<body>
    <h1>Danh sách bài hát</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Tên bài hát</th>
            <th>Ca sĩ</th>
            <th>Thể loại</th>
           
        </tr>
        <?php foreach ($baiHat as $id => $thongTinBaiHat): ?>
        <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $thongTinBaiHat['tenBaiHat']; ?></td>
            <td><?php echo $thongTinBaiHat['caSi']; ?></td>
            <td><?php echo $database->layTheLoai($thongTinBaiHat['idTheLoai']); ?></td>
           
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="add.php">Thêm mới bài hát</a>

    

    <h1>Danh sách thể loại</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Tên thể loại</th>
           
        </tr>
        <?php foreach ($theLoai as $id => $tenTheLoai): ?>
        <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $tenTheLoai; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $id; ?>">Chỉnh sửa</a>
            </td>
            <td>
                <a href="delete.php?id=<?php echo $id; ?>">Xóa</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="add1.php">Thêm mới thể loại</a>
</body>
</html>