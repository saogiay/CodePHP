<?php
	require_once('layout/header.php');
?>
<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<div class="row" style="margin-top: 20px;">
	<div class="col-md-12 table-responsive">
		<h3>Thêm Nhân Viên</h3>
		<div class="panel panel-primary">
			<div class="panel-body">
				<form method="post" >
				<div class="row">
					<div class="col-md-9 col-12">
						<div class="form-group">
						  <label for="usr">Tên Nhân Viên:</label>
						  <input type="text" class="form-control" name="tenNV">
						</div>
						<div class="form-group">
						  <label for="pwd">Địa Chỉ:</label>
						  <!-- <textarea class="form-control" rows="5" name="diachi" id="description"></textarea> -->
						  <input type="text" class="form-control" rows="5" name="diachi">
						</div>

						<button class="btn btn-success"><input type="submit" name="ThemNV" value ="Thêm Nhân Viên" style="background: none; border: none; color: #fff;"></button>
					</div>
					<div class="col-md-3 col-12" style="border: solid grey 1px; padding-top: 10px; padding-bottom: 10px;">
						<div class="form-group">
							<label for="usr">Số Điện Thoại:</label>
							<input type="text" class="form-control" minlength="10" maxlength="10" name="SoDT">
						</div>
						<div class="form-group">
							<label for="usr">Ngày Sinh:</label>
							<input type="date" class="form-control"  name="ngaysinh">
						</div>
						<div class="form-group">
						  <label for="usr">Giới Tính:</label>
						<select name="gioitinh" id="" class="form-control">
                            <option value="Nam">Nam</option>
                            <option value="Nu">Nữ</option>
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

	<!-- <form  method="post" >
		<table border="1" >
			<thead>
					<td colspan="2" align="center">Thêm nhân viên</td>
					
					<tr>
						<td >Tên nhân viên: </td>
						<td><input type="text"  name="tenNV"></td>
					</tr>

                    <tr>
						<td >Ngày sinh: </td>
						<td><input type="date"  name="ngaysinh"></td>
					</tr>

                    <tr>
						<td >Giới tính: </td>
						<td><select name="gioitinh" id="">
                            <option value="Nam">Nam</option>
                            <option value="Nu">Nữ</option>
                        </select></td>
					</tr>

                    <tr>
						<td >Địa chỉ: </td>
						<td><input type="text"  name="diachi"></td>
					</tr>

					<tr>
						<td>SĐT: </td>
						<td><input type="number" minlength="10" maxlength="10" name="SoDT"></td>
					</tr>
					<tr>
						<td>Ảnh: </td>
						<td><input type="file" class="form-control" id="Image" name="anh" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*"></td>
					</tr>

				<tr>
					<td>Chức vụ: </td>
					<td>
						<input type="text"  name="chucvu">
					</td>
				</tr>
				<tr>
					<td><input type="submit" name="ThemNV" value ="Cập Nhập"></td>
				    <td><input type="reset" value ="Reset"></td>
				</tr>
				</div>				
			</thead>
		</table>
	</form> -->
<?php
	require_once('layout/footer.php');
?>