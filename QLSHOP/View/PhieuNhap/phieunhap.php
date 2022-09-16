<?php
	require_once('layout/header.php');
?><div class="container-fluid">
<div class="row" style="margin-top: 20px;">
<div class="col-md-12 table-responsive">
<div class="search-wrapper">
        <span class="las la-search"></span>
            <form class = "can" action="" METHOD = "GET">
                <input  type="text" name="tukhoa" type="search" placeholder="Nhập tên nhà cung cấp" aria-label="Search">
                <input type="submit" name="timkiem" value="Tìm Kiếm">
                <input type="hidden" name="action" value="PN">
		    </form>
    </div>
    
    <table border="1" class="table table-bordered table-hover" style="margin-top: 20px;">
        <tr>
            <a href="Index.php?action=EditPN"><button class="btn btn-success">Thêm Phiếu Nhập</button></a>
        </tr>
        <tr>
            <th colspan="9">DANH SÁCH PHIẾU NHẬP</th>
        </tr>
        <tr>
            <th>STT</th>

            <th>Tên Nhân Viên</th>

            <th>Tên NCC</th>

            <th>Tên SP</th>

            <th>Ngày Nhập</th>

            <th>Số Lượng</th>

            <th>Tổng Tiền</th>

            <th>Hành Động</th>
        </tr>
        <?php
        $stt = 1;
        if($data !=0){
            foreach($data as $values){
        ?>
        <tr align="center">
            <td><?php echo $stt; ?></td>

            <td><?php echo $values['TenNhanVien']; ?></td>

            <td><?php echo $values['TenNCC']; ?></td>

            <td><?php echo $values['TenSP']; ?></td>

            <td><?php echo $values['NgayNhap']; ?></td>

            <td><?php echo $values['SoLuong']; ?></td>

            <td><?php echo $values['TongTien']; ?></td>

            <td><a href='Index.php?action=EditPN&id=<?php echo $values['MaPhieuNhap'];?>'><button class="btn btn-warning">Sửa</button></a>

                <a href='Index.php?action=EditPN&Xoa=<?php echo $values['MaPhieuNhap'];?>' onclick="return confirm ('Bạn thật sự muốn xóa?')"><button class="btn btn-danger">Xóa</button></a>
            </td>
            <?php  
            $stt ++;
        }}
        ?>
        </tr>
    </table>
<?php
	require_once('layout/footer.php');
?>