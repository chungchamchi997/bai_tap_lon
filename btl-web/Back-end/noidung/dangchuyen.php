<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<title>dangchuyen</title>
</head>
<body>

	<form method="POST" action="dangchuyen.php">
	<fieldset>
	    <legend>Đăng chuyện</legend>
	    	<table>
	    		<tr>
	    			<td>Nhập tên chuyện</td>
	    			<td><input type="text" name="ten_chuyen" size="50"></td>
	    		</tr>
	    		<tr>
	    			<td>Tên chương</td>
	    			<td><input type="text" name="ten_chuong" size="50"></td>
	    		</tr>
	    		<tr>
	    			<td>Tác giả</td>
	    			<td><input type="text" name="tac_gia" size="50"></td>
	    		</tr>
	    		<tr>
	    			<td>Thể loại</td>
	    			<td><input type="text" name="the_loai" size="50"></td>
	    		</tr>
	    		<tr>
	    			<td>Chọn ảnh đại diện</td>
	    			<td>
	    				<form method="POST" enctype="multipart/form-data">
	    					<input type="file" name="anh_bia">
	    				</form>
	    			</td>
	    		</tr>
	    		<tr>
	    			<td>Chọn file chuyện</td>
	    			<td>
	    				<form method="POST" enctype="multipart/form-data">
	    					<input type="file" name="file_chuyen">
	    				</form>
	    			</td>
	    		</tr>
	    		<tr>
	    			<td colspan="2" align="center"> <input type="submit" name="btn_submit" value="Đăng tải"></td>
	    		</tr>
	    	</table>
    </fieldset>
</form>
<?php 
$link = new mysqli('localhost', 'root', '' ,'btl-web') or die("Không thể kết nối CSDL");
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
if (isset($_POST['btn_submit'])) {
	// lấy thông tin nhập
	$ten_chuyen=$_POST["ten_chuyen"];
	$ten_chuong=$_POST["ten_chuong"];
	$tac_gia=$_POST["tac_gia"];
	$the_loai=$_POST["the_loai"];

	if ($ten_chuyen == "" || $ten_chuong ==""||$the_loai=="") {
		echo "không được để trống tên chuyện, tên trương và thể loại!";
	}
	if($_FILES["anh_bia"]["error"]>0 || $_FILES["file_chuyen"]["error"]>0){
			echo "upload file lỗi, hãy thử lại!";}
	}
	else {
		// tiến hành up file và lấy đường link 
			move_uploaded_file($_FILES['anh_bia']['tmp_name'],
			 "upload/".$_FILES['anh_bia']['name']);
			move_uploaded_file($_FILES["file_chuyen"]["tmp_name"],
			 "upload/".$_FILES["file_chuyen"]["name"]);
			
			$hinh_anh="upload/".$_FILES["anh_bia"]["name"];
			$duong_dan="upload/".$_FILES["file_anh"]["name"];
			// cập nhật link vào csdl
$sql="INSERT INTO chuyen(ten_chuyen,ten_the_loai,tac_gia,hinh anh)  VALUES('$ten_chuyen','$the_loai','$tac_gia','$hinh_anh');
    INSERT INTO chuong(ten_chuong,ten_chuyen,duong_dan) VALUES('$ten_chuong','$ten_chuyen','$duong_dan');";
mysqli_query($link,$sql);
echo" <br> upload dữ liệu thành công";



	}

	
?>
	
	
</body>
</html>