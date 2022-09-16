<?php
	require_once('layout/header.php');
?>
<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>


<div class="row" style="margin-top: 20px;">
	<div class="col-md-12 table-responsive">
		<h3>Sửa Nhà Cung Cấp:</h3>
		<div class="panel panel-primary">
			<div class="panel-body">
				<form method="post">
				<div class="row">
					<div class="col-md-9 col-12">
						<div class="form-group">
						  <label for="usr">Tên Nhà Cung Cấp:</label>
						  <td><input type="text" class="form-control" value="<?php echo $dataID['TenNCC']?>" name="namencc"></td>
						</div>
						<div class="form-group">
						  <label for="pwd">Địa Chỉ:</label>
						  <input type="text" class="form-control" value="<?php echo $dataID['DiaChi']?>" name="diachincc">
						</div>

						<button class="btn btn-success"><input type="submit" name="SuaNCC" value ="Lưu Nhà Cung Cấp" style="background: none; border: none; color: #fff;"></button>
					</div>
					<div class="col-md-3 col-12" style="border: solid grey 1px; padding-top: 10px; padding-bottom: 10px;">
						<div class="form-group">
							<label for="usr">Số Điện Thoại:</label>
							<input type="number" class="form-control" value="<?php echo $dataID['SDT']?>" name="sdtncc" minlength="10" maxlength="10">
						</div>
						<div class="form-group">
							<label for="usr">Email:</label>
							<input type="email" class="form-control" value="<?php echo $dataID['Email']?>" name="emailncc">
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
			<a href="Index.php?action=NCC">Danh Sách</a>
		</tr>
		<table border="1">
			<thead>
				<td colspan="2" align="center">Cập Nhập Nhà Cung Cấp</td>

				<tr>
					<td>Tên Nhà Cung Cấp: </td>
					<td><input type="text" value="<?php echo $dataID['TenNCC'] ?>" name="namencc"></td>
				</tr>

				<tr>
					<td>Địa Chỉ: </td>
					<td><input type="text" value="<?php echo $dataID['DiaChi'] ?>" name="diachincc"></td>
				</tr>
				<tr>
					<td>Số Điện Thoại: </td>
					<td><input type="number" value="<?php echo $dataID['SDT'] ?>" name="sdtncc" minlength="10" maxlength="10"></td>
				</tr>

				<tr>
					<td>Email: </td>
					<td>
						<input type="email" value="<?php echo $dataID['Email'] ?>" name="emailncc">
					</td>
				</tr>
				<tr>
					<td><input type="submit" name="SuaNCC" value="Cập Nhập"></td>
					<td><input type="reset" value="Reset"></td>
				</tr>
				</div>
			</thead>
		</table>
	</form>
</body>

</html> -->