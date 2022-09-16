<?php
	require_once('layout/header.php');
?>
<div class="container-fluid">
<div class="row" style="margin-top: 20px;">
<div class="col-md-12 table-responsive">
   
    <div class="search-wrapper">
        <span class="las la-search"></span>
            <form class = "can" action="" METHOD = "GET">
                <input  type="text" name="tukhoa" type="search" placeholder="Nhập tên nhà cung cấp" aria-label="Search">
                <input type="submit" name="timkiem" value="Tìm Kiếm">
                <input type="hidden" name="action" value="NCC">
		    </form>
    </div>

    <table border="1" class="table table-bordered table-hover" style="margin-top: 20px;">
        <tr>
            <a href="Index.php?action=EditNCC"><button class="btn btn-success">Thêm Nhà Cung Cấp</button></a>
        </tr>
        <tr>
            <th colspan="6">Danh Sách Nhà Cung Cấp</th>
        </tr>
        <tr>
            <th>STT</th>

            <th>Tên Nhà Cung Cấp</th>

            <th>Địa Chỉ</th>

            <th>Số Điện Thoại</th>

            <th>Email</th>
            <th>Hành Động</th>
        </tr>
        <?php
        $stt = 1;
        if($data != 0){
        foreach ($data as $value) {
        ?>
            <tr align="center">
                <td><?php echo $stt; ?></td>
                <td><?php echo $value['TenNCC']; ?></td>

                <td><?php echo $value['DiaChi']; ?></td>

                <td><?php echo $value['SDT']; ?></td>

                <td><?php echo $value['Email']; ?></td>
                <td><a href='Index.php?action=EditNCC&id=<?php echo $value['MaNCC']; ?>'><button class="btn btn-warning">Sửa</button></a>
                    <a href='Index.php?action=EditNCC&Xoa=<?php echo $value['MaNCC']; ?>' onclick="return confirm ('Bạn thật sư muốn xóa?')"><button class="btn btn-danger">Xóa</button></a>
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