
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
                <input type="hidden" name="action" value="NV">
		    </form>
    </div>
        
    <table border="1" class="table table-bordered table-hover" style="margin-top: 20px;">
        <tr>
            <a href="Index.php?action=EditNV"><button class="btn btn-success">Thêm Nhân Viên</button></a>
        </tr>
        <tr>
            <th colspan="9">Danh Sách Nhân Viên</th>
        </tr>
        <tr>
            <th>STT</th>

            <th>Tên Nhân Viên</th>

            <th>Ngày Sinh</th>

            <th>Giới Tính</th>

            <th>Địa Chỉ</th>

            <th>Số Điện Thoại</th>

            <th>Chức Vụ</th>
        </tr>
        <?php
        $stt = 1;
        if($data != null){
            foreach($data as $value){
        ?>
        <tr align="center">
            <td><?php echo $stt; ?></td>

            <td><?php echo $value['TenNhanVien']; ?></td>

            <td><?php echo $value['NgaySinh']; ?></td>

            <td><?php echo $value['GioiTinh']; ?></td>

            <td><?php echo $value['DiaChi']; ?></td>

            <td><?php echo $value['SoDT']; ?></td>

            <td><?php echo $value['TenChucVu']; ?></td>
            <td><a style="width: 50px" href='Index.php?action=EditNV&id=<?php echo $value['MaNhanVien'];?>'><button class="btn btn-warning">Sửa</button></a>
                <a style="width: 50px" href='Index.php?action=EditNV&Xoa=<?php echo $value['MaNhanVien'];?>' onclick="return confirm ('Bạn thật sư muốn xóa?')"><button class="btn btn-danger">Xóa</button></a>
            </td>
            <?php  
            $stt ++;
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