<?php
	require_once('layout/header.php');
?>
<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<div class="row" style="margin-top: 20px;">
	<div class="col-md-12 table-responsive">
		<h3>Thêm Hóa Đơn</h3>
		<div class="panel panel-primary">
			<div class="panel-body">
				<form method="post" >
				<div class="row">
					<div class="col-md-9 col-12">
						<div class="form-group">
							<label for="usr">Tên Nhân Viên:</label>
							<select name="tennv" id="" class="form-control">
								<?php
									foreach($datanv as $a ):
								?>
									<option value="<?= $a['MaNhanVien']?>"><?=$a['TenNhanVien']?></option>
								<?php
									endforeach;
								?>
							</select>
						</div>
						<div class="form-group">
							<label for="pwd">Tên Khách Hàng:</label>
							<select name="tenkh" id="" class="form-control">
								<?php
									foreach($datakh as $a ):
								?>
									<option value="<?= $a['MaKH']?>"><?=$a['TenKH']?></option>
								<?php
									endforeach;
								?>
							</select>
						</div>

						<button class="btn btn-success"><input type="submit" name="ThemHD" value ="Lưu Hóa Đơn" style="background: none; border: none; color: #fff;"></button>
					</div>
					<div class="col-md-3 col-12" style="border: solid grey 1px; padding-top: 10px; padding-bottom: 10px;">
						<div class="form-group">
							<label for="usr">Tên Sản Phẩm:</label>
							<select name="tensp" id="" class="form-control">
								<?php
									foreach($datasp as $a ):
								?>
									<option value="<?= $a['MaSP']?>"><?=$a['TenSP']?></option>
								<?php
									endforeach;
								?>
                        	</select>
						</div>
						<div class="form-group">
							<label for="usr">Ngày Lập::</label>
							<input type="date"  name="ngaylap" class="form-control">
						</div>
						<div class="form-group">
							<label for="usr">Số Lượng:</label>
							<input type="number"  name="soluong" class="form-control">
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


	<!-- <form  method="post" >
		<tr>
			<a href="Index.php?action=HD">Danh Sách</a>
		</tr>
		<table border="1" >
			<thead>
					<td colspan="2" align="center">Thêm Hóa Đơn</td>
					
					<tr>
						<td >Tên Nhân Viên: </td>
						<td><select name="tennv" id="">
                            <?php
                            foreach($datanv as $a ):
                            ?>
                            <option value="<?= $a['MaNhanVien']?>"><?=$a['TenNhanVien']?></option>
                            <?php
                            endforeach;
                            ?>
                        </select></td>
					</tr>
					<tr>
						<td >Tên Khách Hàng: </td>
						<td><select name="tenkh" id="">
                            <?php
                            foreach($datakh as $a ):
                            ?>
                            <option value="<?= $a['MaKH']?>"><?=$a['TenKH']?></option>
                            <?php
                            endforeach;
                            ?>
                        </select></td>
					</tr>
					<tr>
						<td>Tên Sản Phẩm: </td>
						<td><select name="tensp" id="">
                            <?php
                            foreach($datasp as $a ):
                            ?>
                            <option value="<?= $a['MaSP']?>"><?=$a['TenSP']?></option>
                            <?php
                            endforeach;
                            ?>
                        </select></td>
					</tr>
					<tr>
						<td>Ngày Lập: </td>
						<td><input type="date"  name="ngaylap"></td>
					</tr>
					<tr>
						<td>Số Lượng: </td>
						<td><input type="number"  name="soluong"></td>
					</tr>
				<tr>
					<td><input type="submit" name="ThemHD" value ="Thêm"></td>
				    <td><input type="reset" value ="Reset"></td>
				</tr>
				</div>				
			</thead>
		</table>
	</form>
</body>
</html> -->