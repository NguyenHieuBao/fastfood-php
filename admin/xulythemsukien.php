<?php
	require("../includes/connect_db.php");
	include("../includes/check_errors.php");

	$tieude=$_POST['tieude'];
	$giatri=$_POST['giatri'];
	$stime=$_POST['stime'];
	$etime=$_POST['etime'];

	$query_tk="INSERT INTO khuyenmai(tieude,giatrikhuyenmai,thoigianbatdau,thoigianketthuc,tinhtrang) VALUES(N'$tieude','$giatri','$stime','$etime',1)";
		$result_tk=mysqli_query($dbc,$query_tk);check_errors($result_tk,$query_tk);
		echo "<b style='color:green;font-size:20px;'> Bạn đã thêm mới sự kiện thành công</b>";
?>