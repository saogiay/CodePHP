<?php
	require_once('layout/header.php');
?>
<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<div class="row" style="margin-top: 20px;">
	<div class="col-md-12 table-responsive">
		<h3>Thêm Phiếu Nhập</h3>
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

						<button class="btn btn-success"><input type="submit" name="ThemPN" value ="Thêm Phiếu Nhập" style="background: none; border: none; color: #fff;"></button>
					</div>
					<div class="col-md-3 col-12" style="border: solid grey 1px; padding-top: 10px; padding-bottom: 10px;">
						<div class="form-group">
							<label for="usr">Mã Sản Phẩm:</label>
							<select name="masp" id="" class="form-control">
								<?php
								foreach($data6 as $a ):
								?>
								<option value="<?= $a['MaSP']?>"><?=$a['TenSP']?></option>
								<?php
								endforeach;
								?>
							</select>
						</div>
						<div class="form-group">
							<label for="usr">Ngày Nhập:</label>
							<input type="date" name="ngaynhappn" class="form-control" class="form-control">
						</div>
						<div class="form-group">
							<label for="usr">Số Lượng:</label>
							<input type="number"  name="soluongsp" min="0" class="form-control">
						</div>
						<div class="form-group">
							<label for="usr">Tổng Tiền:</label>
							<input type="number"  name="tongtienhd" class="form-control">
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

	