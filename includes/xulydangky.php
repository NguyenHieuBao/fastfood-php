<?php
	require("connect_db.php");
	include("check_errors.php");
	$taikhoan=$_POST['taikhoan'];
	$email=$_POST['email'];
	$matkhau=md5($_POST['matkhau']);
	$hoten=$_POST['hoten'];
	$ngaysinh=$_POST['ngaysinh'];
	$gioitinh=$_POST['gioitinh'];
	$dienthoai=$_POST['dienthoai'];
	$diachi=$_POST['diachi'];
	$query_item="SELECT * FROM khachhang WHERE taikhoan='".$taikhoan."' or email='".$email."'";
	$result_item=mysqli_query($dbc,$query_item);check_errors($result_item,$query_item);
	if(mysqli_num_rows($result_item)>=1)
	{
		echo "<b style='color:red;'>Tài khoản hoặc email đã được tạo trước đó!!! Bạn vui lòng nhập email hoặc tài khoản mới</b>";
	}
	else{
		$query_tk="INSERT INTO khachhang(taikhoan,email,matkhau,hoten,ngaysinh,gioitinh,dienthoai,diachi,trangthai) VALUES('$taikhoan','$email','$matkhau',N'$hoten','$ngaysinh',N'$gioitinh','$dienthoai',N'$diachi',1)";
		$result_tk=mysqli_query($dbc,$query_tk);check_errors($result_tk,$query_tk);
		echo "<b style='color:green;font-size:20px;'> Bạn đã đăng ký thành công</b>";
	}
?>