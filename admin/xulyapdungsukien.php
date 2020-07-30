<?php
	require("../includes/connect_db.php");
	include("../includes/check_errors.php");

	$masp=$_POST['masp'];
	$url=$_POST['url'];

	$confirm=$_POST['confirm'];
	if(!isset($confirm)){
		$query_tk="INSERT INTO sanphamkhuyenmai(masp,makm) VALUES('$masp','$url')";
		$result_tk=mysqli_query($dbc,$query_tk);check_errors($result_tk,$query_tk);
	}else{
		$query_tk1="DELETE FROM sanphamkhuyenmai WHERE makm={$url} and masp={$masp}";
		$result_tk1=mysqli_query($dbc,$query_tk1);check_errors($result_tk1,$query_tk1);
	}

	// $query_item="SELECT * FROM khachhang WHERE taikhoan='".$taikhoan."' or email='".$email."'";
	// $result_item=mysqli_query($dbc,$query_item);check_errors($result_item,$query_item);
	// if(mysqli_num_rows($result_item)>=1)
	// {
	// 	echo "<b style='color:red;'>Tài khoản hoặc email đã được tạo trước đó!!! Bạn vui lòng nhập email hoặc tài khoản mới</b>";
	// }
	// else{
	// 	$query_tk="INSERT INTO khachhang(taikhoan,email,matkhau,hoten,ngaysinh,gioitinh,dienthoai,diachi,trangthai) VALUES('$taikhoan','$email','$matkhau',N'$hoten','$ngaysinh',N'$gioitinh','$dienthoai',N'$diachi',1)";
	// 	$result_tk=mysqli_query($dbc,$query_tk);check_errors($result_tk,$query_tk);
	// 	echo "<b style='color:green;font-size:20px;'> Bạn đã đăng ký thành công</b>";
	// }
?>