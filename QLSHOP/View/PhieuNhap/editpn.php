<?php
	require_once('layout/header.php');
?>
<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<div class="row" style="margin-top: 20px;">
	<div class="col-md-12 table-responsive">
		<h3>Sửa Phiếu Nhập</h3>
		<div class="panel panel-primary">
			<div class="panel-body">
				<form method="post" >
				<div class="row">
					<div class="col-md-9 col-12">
						<div class="form-group">
						  <label for="usr">Mã Nhân Viên:</label>
						  <select name="manv" id="" class="form-control">
                            <?php
                            	foreach($data5 as $a):
                            ?>
                            	<option value="<?= $a['MaNhanVien']?>"><?=$a['TenNhanVien']?></option>
                            <?php
                            	endforeach;
                            ?>
                        </select>
						</div>
						<div class="form-group">
						  <label for="pwd">Mã Nhà Cung Cấp:</label>
						  <select name="mancc" id="" class="form-control">
								<?php
								foreach($data7 as $a ):
								?>
								<option value="<?= $a['MaNCC']?>"><?=$a['TenNCC']?></option>
								<?php
								endforeach;
								?>
                        </select>
						</div>

						<button class="btn btn-success"><input type="submit" name="SuaPN" value ="Lưu Phiếu Nhập" style="background: none; border: none; color: #fff;"></button>
					</div>
					<div class="col-md-3 col-12" style="border: solid grey 1px; padding-top: 10px; padding-bottom: 10px;">
						<div class="form-group">
							<label for="usr">Mã Sản Phẩm:</label>
							<select name="masp" id="" class="form-control">
								<?php
								foreach($data6 as $a ):
								?>
								<?php
								endforeach;
								?>
							</select>
						</div>
						<div class="form-group">
							<label for="usr">Ngày Nhập:</label>
							<input type="date" value="<?php echo $dataID['NgayNhap']?>" name="ngaynhappn" class="form-control">
						</div>
						<div class="form-group">
							<label for="usr">Số Lượng:</label>
							<input type="number" min="0" value="<?php echo $dataID['SoLuong']?>" name="soluongsp" class="form-control">
						</div>
						<div class="form-group">
							<label for="usr">Tổng Tiền:</label>
							<input type="number" value="<?php echo $dataID['TongTien']?>" name="tongtienhd" class="form-control">
						</div>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>

	
<?php
	require_once('layout/footer.php');
?>

	
	<!-- <form method="post">
		<tr>
			<a href="Index.php?action=PN">Danh Sách</a>
		</tr>
		<table border="1">
			<thead>
				<td colspan="2" align="center">Cập Nhật Phiếu Nhập</td>

				<tr>
					<td >Mã Nhân Viên: </td>

					<td><select name="manv" id="">
                        <?php
                        foreach($data5 as $a):
                        ?>
                        <option value="<?= $a['MaNhanVien']?>"><?=$a['TenNhanVien']?></option>
                        <?php
                        endforeach;
                        ?>
                    </select></td>
			    </tr>

				<tr>
				    <td >Mã Nhà Cung Cấp: </td>

					<td><select name="mancc" id="">
                        <?php
                        foreach($data7 as $a ):
                        ?>
                        <option value="<?= $a['MaNCC']?>"><?=$a['TenNCC']?></option>
                        <?php
                        endforeach;
                        ?>
                    </select></td>
				</tr>

				<tr>
					<td >Mã Sản Phẩm: </td>

					<td><select name="masp" id="">
                        <?php
                        foreach($data6 as $a ):
                        ?>
                        <option value="<?= $a['MaSP']?>"><?=$a['TenSP']?></option>
                        <?php
                        endforeach;
                        ?>
                    </select></td>
			    </tr>

				<tr>
					<td >Ngày Nhập: </td>
					<td><input type="date" value="<?php echo $dataID['NgayNhap']?>" name="ngaynhappn"></td>
				</tr>

				<tr>
				    <td>Số Lượng: </td>
					<td><input type="number" min="0" value="<?php echo $dataID['SoLuong']?>" name="soluongsp"></td>
				</tr>

				<!-- <tr>
					<td>Tổng Tiền: </td>
					<td><input type="number" value="<?php echo $dataID['TongTien']?>" name="tongtienhd" ></td>
				</tr> -->

				<tr>
					<td><input type="submit" name="SuaPN" value="Cập Nhập"></td>
					<td><input type="reset" value="Reset"></td>
				</tr>
			</thead>
		</table>
	</form>
</body>

</html> -->