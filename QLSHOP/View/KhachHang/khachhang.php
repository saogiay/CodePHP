<?php
	require_once('layout/header.php');
?>
<div class="container-fluid">
<div class="row" style="margin-top: 20px;">
<div class="col-md-12 table-responsive">
    
<div class="search-wrapper">
        <span class="las la-search"></span>
            <form class = "can" action="" METHOD = "GET">
                <input  type="text" name="tukhoa" type="search" placeholder="Nhập tên khách hàng" aria-label="Search">
                <input type="submit" name="timkiem" value="Tìm Kiếm">
                <input type="hidden" name="action" value="KH">
		    </form>
    </div>

    <table border="1" class="table table-bordered table-hover" style="margin-top: 20px;">
        <tr>
            <a href="Index.php?action=EditKH"><button class="btn btn-success">Thêm Khách Hàng</button></a>
        </tr>
        <tr>
            <th colspan="6">Danh Sách Khách Hàng</th>
        </tr>
        <tr>
            <th>STT</th>

            <th>Tên Khách Hàng</th>

            <th>Ngày Sinh</th>

            <th>Giới Tính</th>

            <th>Địa Chỉ</th>

            <th>Số Điện Thoại</th>

            <th>Thao Tác</th>
        </tr>
        <?php
        $stt = 1;
        if($data != 0){
        foreach ($data as $value) {
        ?>
            <tr align="center">
                <td><?php echo $stt; ?></td>
                <td><?php echo $value['TenKH']; ?></td>

                <td><?php echo $value['NgaySinh']; ?></td>

                <td><?php echo $value['GioiTinh']; ?></td>

                <td><?php echo $value['DiaChi']; ?></td>

                <td><?php echo $value['SDT']; ?></td>
                <td><a href='Index.php?action=EditKH&id=<?php echo $value['MaKH']; ?>'><button class="btn btn-warning">Sửa</button></a>
                    <a href='Index.php?action=EditKH&Xoa=<?php echo $value['MaKH']; ?>' onclick="return confirm ('Bạn thật sư muốn xóa?')"><button class="btn btn-danger">Xóa</button></a>
                </td>
            <?php
            $stt++;
        }
    }
            ?>
            </tr>
    </table>

</div>
</div>
</div>

<?php
	require_once('layout/footer.php');
?>