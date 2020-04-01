<?php
	require("../../includes/connect_db.php");
	include("../../includes/check_errors.php");
	$id=$_POST['id'];
	$gioitinh=$_POST['gioitinh'];
	$hoten=$_POST['hoten'];
	$ngaysinh=$_POST['ngaysinh'];
	$dienthoai=$_POST['dienthoai'];
	$diachi=$_POST['diachi'];
	$vaitro=$_POST['vaitro'];
	$query_item="UPDATE khachhang SET hoten=N'".$hoten."',ngaysinh='".$ngaysinh."',gioitinh='".$gioitinh."',diachi=N'".$diachi."',dienthoai='".$dienthoai."',vaitro='".$vaitro."' WHERE makh=".$id;
	$result_item=mysqli_query($dbc,$query_item);check_errors($result_item,$query_item);
	if(mysqli_affected_rows($dbc)==1)
	{
		echo "<b style='color:green;'>Bạn đã thay đổi thông tin thành công</b>";
	}
?>