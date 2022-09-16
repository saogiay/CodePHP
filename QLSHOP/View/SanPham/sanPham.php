<?php
	require_once('layout/header.php');
?>

<div class="container-fluid">
<div class="row" style="margin-top: 20px;">
<div class="col-md-12 table-responsive">
    <div class="search-wrapper">
        <span class="las la-search"></span>
            <form class = "can" action="" METHOD = "GET">
                <input  type="text" name="tukhoa" type="search" placeholder="Nhập tên nhân viên" aria-label="Search">
                <input type="submit" name="timkiem" value="Tìm Kiếm">
                <input type="hidden" name="action" value="SP">
		    </form>
    </div>
<?php
// echo "<pre>";
// print_r($data1)
?>
<table border="1" class="table table-bordered table-hover" style="margin-top: 20px;">
    <tr>
        <a href="Index.php?action=ThemSanP"><button class="btn btn-success">Thêm Sản Phẩm</button></a>
    </tr>
    <tr>
        <th colspan="9">Danh Sách Sản Phẩm</th>
    </tr>
    <tr>
        <th>STT</th>

        <th>Tên Sản Phẩm</th>

        <th>Giá Nhập</th>

        <th>Giá Bán</th>

        <th>Tồn Kho</th>

        <th>Hình Ảnh</th>

        <th>Loại Sản Phẩm</th>
    </tr>
    <?php

    $stt = 1;
    if (($data) != null) {
        foreach ($data as $value) {
    ?>
            <tr align="center">
                <td><?php echo $stt; ?></td>
                <td><?php echo $value['TenSP'] ?></td>
                <td><?php echo $value['GiaNhap'] ?></td>
                <td><?php echo $value['GiaBan'] ?></td>
                <td><?php echo $value['TonKho'] ?></td>
                <td><img src="uploads/<?= $value['Image'] ?>" alt="" width="100px" height="100px"></td>
                <td><?php echo $value['TenLoaiSP'] ?></td>

                <td><a href='Index.php?action=EditSP&MaSP=<?php echo $value['MaSP']; ?>'><button class="btn btn-warning">Sửa</button></a>
                    <a href="index.php?action=XoaSP&MaSP=<?php echo $value['MaSP']; ?>" onclick="return confirm ('Bạn thật sư muốn xóa?')"><button class="btn btn-danger">Xóa</button></a>
                </td>
        <?php
            $stt++;
        }
    }
        ?>
            </tr>
</table>
<?php
	require_once('layout/footer.php');
?>