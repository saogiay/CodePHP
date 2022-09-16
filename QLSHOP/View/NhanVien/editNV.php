<?php
	require_once('layout/header.php');
?>
<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>


<div class="row" style="margin-top: 20px;">
	<div class="col-md-12 table-responsive">
		<h3>Sửa Nhân Viên</h3>
		<div class="panel panel-primary">
			<div class="panel-body">
				<form method="post">
				<div class="row">
					<div class="col-md-9 col-12">
						<div class="form-group">
						  <label for="usr">Tên Nhân Viên:</label>
						  <td><input type="text" class="form-control" value="<?php echo $dataID['TenNhanVien']?>" name="tenNV"></td>
						</div>
						<div class="form-group">
						  <label for="pwd">Địa Chỉ:</label>
						  <input type="text" class="form-control" value="<?php echo $dataID['DiaChi']?>" name="diachi">
						</div>

						<button class="btn btn-success"><input type="submit" name="SuaNV" value ="Lưu Nhân Viên" style="background: none; border: none; color: #fff;"></button>
					</div>
					<div class="col-md-3 col-12" style="border: solid grey 1px; padding-top: 10px; padding-bottom: 10px;">
						<div class="form-group">
							<label for="usr">Số Điện Thoại:</label>
							<input type="text" class="form-control" value="<?php echo $dataID['SoDT']?>" name="SoDT" minlength="10" maxlength="10">
						</div>
						<div class="form-group">
							<label for="usr">Ngày Sinh:</label>
							<input type="date" class="form-control" value="<?php echo $dataID['NgaySinh']?>" name="ngaysinh">
						</div>
						<div class="form-group">
						  <label for="usr">Giới Tính:</label>
						  <select name="gioitinh" id="">
								<option value="Nam" <?php if ($dataID['GioiTinh'] == 'Nam') {
														echo ("selected");
													} ?>>Nam</option>
								<option value="Nữ" <?php if ($dataID['GioiTinh'] == 'Nữ') {
														echo ("selected");
													} ?>>Nữ</option>
							</select>
						</div>
						<div class="form-group">
							<label for="usr">Chức Vụ:</label>
							<td>
									<select name="chucvu" id="">
										<?php
										foreach ($data1 as $a) :
										?>
											<option value="<?= $a['MaChucVu'] ?>"><?= $a['TenChucVu'] ?></option>
										<?php
										endforeach;
										?>
									</select>
								</td>
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