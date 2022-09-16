<!DOCTYPE html>
<html>

<head>
	<title>Thêm Chức Vụ</title>
	<meta charset="utf-8">
</head>

<body>
	<form method="post">
		<tr>
			<a href="Index.php?action=CV">Danh Sách</a>
		</tr>
		<table border="1">
			<thead>
				<td colspan="2" align="center">Thêm Chức Vụ</td>

				<tr>
					<td>Tên Chức Vụ: </td>
					<td><input type="text" value="<?php echo $dataID['TenChucVu'] ?>" name="tencv"></td>
				</tr>

				<tr>
					<td><input type="submit" name="SuaCV" value="Cập Nhập"></td>
					<td><input type="reset" value="Reset"></td>
				</tr>
			</thead>
		</table>
	</form>
</body>

</html>