<!DOCTYPE html>
<html lang="en">

<head>
    <title>Danh Sách Chức Vụ</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>

    <div>
        <form action="" method="GET">
            <table>
                <tr>
                    <td><input type="text" name="tukhoa" placeholder="Nhập từ khóa cần tìm kiếm"></td>
                    <td><input type="submit" name="timkiem" value="Tìm Kiếm"></td>
                </tr>
                <input type="hidden" name="action" value="CV">
            </table>
        </form>
    </div>

    <table border="1" width=100%>
        <tr>
            <a href="Index.php?action=EditCV">Thêm Chức Vụ</a>
        </tr>
        <tr>
            <th colspan="6">Danh Sách Chức Vụ</th>
        </tr>
        <tr>
            <th>STT</th>

            <th>Tên Chức Vụ</th>

            <th>Thao Tác</th>
        </tr>
        <?php
        $stt = 1;
        if($data !=0){
        foreach ($data as $value) {
        ?>
            <tr align="center">
                <td><?php echo $stt; ?></td>

                <td><?php echo $value['TenChucVu']; ?></td>

                <td><a href='Index.php?action=EditCV&id=<?php echo $value['MaChucVu']; ?>'>Sửa</a>
                    <a href='Index.php?action=EditCV&Xoa=<?php echo $value['MaChucVu']; ?>' onclick="return confirm ('Bạn thật sư muốn xóa?')">Xóa</a>
                </td>
            <?php
            $stt++;
        }}
            ?>
            </tr>
    </table>
</body>

</html>