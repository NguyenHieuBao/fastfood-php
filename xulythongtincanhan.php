<?php
	session_start();
	require("includes/connect_db.php");
	include("includes/check_errors.php");

	$hoten=$_POST['hoten'];
	$dienthoai=$_POST['dienthoai'];
	$ngaysinh=$_POST['ngaysinh'];
	$gioitinh=$_POST['gioitinh'];
	$diachi=$_POST['diachi'];
	$url=$_SESSION['user']['uid'];

	$query_tk="UPDATE khachhang SET hoten=N'$hoten',dienthoai='$dienthoai',ngaysinh='$ngaysinh',gioitinh=N'$gioitinh',diachi=N'$diachi' WHERE makh=".$url;
		$result_tk=mysqli_query($dbc,$query_tk);check_errors($result_tk,$query_tk);
		echo "<b style='color:green;font-size:20px;'> Bạn đã sửa thông tin cá nhân thành công</b>";
?>