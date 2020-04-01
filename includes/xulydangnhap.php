<?php
	require("connect_db.php");
	include("check_errors.php");
	$taikhoan=$_POST['taikhoan'];
	$matkhau=md5($_POST['matkhau']);
	$query_item="SELECT makh,taikhoan,email FROM khachhang WHERE taikhoan='".$taikhoan."' and matkhau='".$matkhau."' and trangthai=1";
	$result_item=mysqli_query($dbc,$query_item);check_errors($result_item,$query_item);
	if(mysqli_num_rows($result_item)==1)
	{
		list($id,$user,$email)=mysqli_fetch_array($result_item,MYSQLI_NUM);
        $_SESSION['uid']=$id;
        $_SESSION['taikhoan']=$user;
        $_SESSION['email']=$email;
	}
	else{
		echo "<b style='color:red;'>Tài khoản hoặc mật khẩu không chính xác!!!</b>";
	}
?>