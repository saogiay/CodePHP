<?php
	require_once('layout/header.php');
?>
<div class="col-md-12 table-responsive">
    <div class="search-wrapper">
        <span class="las la-search"></span>
            <form class = "can" action="" METHOD = "GET">
                <input  type="text" name="tukhoa" type="search" placeholder="Nhập tên khách hàng" aria-label="Search">
                <input type="submit" name="timkiem" value="Tìm Kiếm">
                <input type="hidden" name="action" value="HD">
		    </form>
    </div>

    <table border="1" class="table table-bordered table-hover" style="margin-top: 20px;">
        <tr>
            <a href="Index.php?action=EditHD"><button class="btn btn-success">Thêm Hóa Đơn</button></a>
        </tr>
        <tr>
            <th colspan="8">Danh Sách Hóa Đơn</th>
        </tr>
        <tr>
            <th>STT</th>

            <th>Tên Nhân Viên</th>

            <th>Tên Khách Hàng</th>

            <th>Tên Sản Phẩm</th>

            <th>Ngày Lập</th>

            <th>Số Lượng</th>

            <th>Tổng Tiền</th>

            <th>Hành Động</th>
        </tr>
        <?php
        $stt = 1;
            if($data != 0)
            {
            foreach($data as $value){
        ?>
        <tr align="center">
            <td><?php echo $stt; ?></td>
            <td><?php echo $value['TenNhanVien']; ?></td>

            <td><?php echo $value['TenKH']; ?></td>

            <td><?php echo $value['TenSP']; ?></td>

            <td><?php echo $value['NgayLap']; ?></td>

            <td><?php echo $value['SoLuong']; ?></td>

            <td><?php echo $value['TongTien']; ?></td>
            
            <td><a href='Index.php?action=EditHD&id=<?php echo $value['MaHoaDon'];?>'><button class="btn btn-warning">Sửa</button></a>
                <a href='Index.php?action=EditHD&Xoa=<?php echo $value['MaHoaDon'];?>' onclick="return confirm ('Bạn thật sư muốn xóa?')"><button class="btn btn-danger">Xóa</button></a>
            </td>
            <?php  
            $stt ++;
            }
        }
        ?>
        </tr>
    </table>
<?php
	require_once('layout/footer.php');
?>