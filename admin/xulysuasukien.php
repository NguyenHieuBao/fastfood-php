<?php
	require("../includes/connect_db.php");
	include("../includes/check_errors.php");

	$tieude=$_POST['tieude'];
	$giatri=$_POST['giatri'];
	$stime=$_POST['stime'];
	$etime=$_POST['etime'];
	$id=$_POST['id'];

	$query_tk="UPDATE khuyenmai SET tieude=N'$tieude',giatrikhuyenmai='$giatri',thoigianbatdau='$stime',thoigianketthuc='$etime' WHERE makm=".$id;
		$result_tk=mysqli_query($dbc,$query_tk);check_errors($result_tk,$query_tk);
		echo "<b style='color:green;font-size:20px;'> Bạn đã sửa sự kiện thành công</b>";
?>