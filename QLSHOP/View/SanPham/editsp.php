<?php
	require_once('layout/header.php');
?>
<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<div class="row" style="margin-top: 20px;">
	<div class="col-md-12 table-responsive">
		<h3>Sửa Sản Phẩm</h3>
		<div class="panel panel-primary">
			<div class="panel-body">
				<form method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-9 col-12">
						<div class="form-group">
						  <label for="usr">Tên Sản Phẩm:</label>
						  <td><input type="text" class="form-control" name="TenSP" value="<?php echo $dataID['TenSP']?>"></td>
						</div>
						<div class="form-group">
						  <label for="pwd">Giá Nhập:</label>
						  <td><input type="text" class="form-control" name="GiaNhap" value="<?php echo $dataID['GiaNhap']?>"></td>
						</div>
						<button class="btn btn-success"><input type="submit" name="update_SP" value ="Lưu Sản Phẩm" style="background: none; border: none; color: #fff;"></button>
					</div>
					<div class="col-md-3 col-12" style="border: solid grey 1px; padding-top: 10px; padding-bottom: 10px;">
						<div class="form-group">
							<label for="usr">Giá Bán::</label>
							<td><input type="text" class="form-control" name="GiaBan" value="<?php echo $dataID['GiaBan']?>"></td>
						</div>
						<div class="form-group">
							<label for="usr">Ảnh Sản Phẩm:</label>
							<input type="file" class="form-control" name="Anh">
						</div>
						<div class="form-group">
							<label for="usr">Tồn Kho:</label>
							<td><input type="text" class="form-control" name="TonKho" value="<?php echo $dataID['TonKho']?>"></td>
						</div>
						<div class="form-group">
						    <label for="usr">Loại Sản Phẩm:</label>
							<select name="MaLoaiSP" id="" class="form-control">
								<?php
								foreach($data1 as $a ):
								?>
								<option value="<?= $a['MaLoaiSP']?>"><?=$a['TenLoaiSP']?></option>
								<?php
								endforeach;
								?>
							</select>
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
