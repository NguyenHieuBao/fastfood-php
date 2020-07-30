<?php
	require("connect_db.php");
	include("check_errors.php");

	$email=$_POST['email'];
	$hoten=$_POST['hoten'];
	$dienthoai=$_POST['dienthoai'];
	$noidung=$_POST['noidung'];
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$thoigian=date('Y-m-d H:i:s');

	$query_tk="INSERT INTO phanhoi(email,dienthoai,noidung,hoten,thoigian,tinhtrang) VALUES('$email','$dienthoai',N'$noidung',N'$hoten','$thoigian','chưa')";
		$result_tk=mysqli_query($dbc,$query_tk);check_errors($result_tk,$query_tk);
		echo "<b style='color:green;font-size:20px;'> Bạn đã gửi phản hồi thành công</b>";
?>