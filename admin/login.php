<?php
	session_start();
	if(isset($_SESSION['usr']['uid']))
	{
		header('Location:admin.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ĐĂNG NHẬP</title>
</head>
<style type="text/css">
	body{
		margin: 0;
		padding: 0;
		background-color:black;
	}
	#form{
		background-color: white;
		width: 30%;
		text-align:center;
		padding: 20px;
		margin:auto;
		margin-top: 10%;
		padding-top: 30px;
	}
	.rgt{
		width: 50%;
		height: 30px;
		margin-bottom: 2%;
		padding-left: 2%;
	}
	.btn_rgt{
		padding: 10px;
		color: white;
		cursor: pointer;
	}
</style>
<body>
<?php
	require("../includes/connect_db.php");
	include("../includes/check_errors.php");
	if(isset($_POST['submit']))
	{
	    $errors=array();
	    if(empty($_POST['taikhoan']))
	    {
	        $errors[]='taikhoan';
	    }else
	    {
	        $taikhoan=$_POST['taikhoan'];
	    }
	     if(empty($_POST['matkhau']))
	    {
	        $errors[]='matkhau';
	    }else
	    {
	        $matkhau=md5($_POST['matkhau']);
	    }
	    if(empty($errors))
	    {
	        $query_item="SELECT makh,hoten,taikhoan,vaitro,email,diachi,gioitinh,ngaysinh,dienthoai FROM khachhang WHERE taikhoan='".$taikhoan."' and matkhau='".$matkhau."' and trangthai=1";
			$result_item=mysqli_query($dbc,$query_item);check_errors($result_item,$query_item);
	        if(mysqli_num_rows($result_item)==1)
	        {
	            list($id,$tenkh,$user,$vaitro,$email,$diachi,$gioitinh,$ngaysinh,$dienthoai)=mysqli_fetch_array($result_item,MYSQLI_NUM);
		        if($vaitro==1 || $vaitro==2 || $vaitro==3)
		        {
		        	$_SESSION['usr']['uid']=$id;
			        $_SESSION['usr']['user']=$tenkh;
			        $_SESSION['usr']['taikhoan']=$user;
			        $_SESSION['usr']['vaitro']=$vaitro;
		        	$_SESSION['usr']['email']=$email;
			        $_SESSION['usr']['diachi']=$diachi;
			        $_SESSION['usr']['gioitinh']=$gioitinh;
			        $_SESSION['usr']['ngaysinh']=$ngaysinh;
			        $_SESSION['usr']['dienthoai']=$dienthoai;
		            header('Location:admin.php');
		        }
		        else{
		        	$errors[]='error';
		        }
	        }
	        else
	        {
	        	 $errors[]='error';
	        }
	    }else{
	    }
	}
?>
	<form method="post" accept-charset="utf-8">
		<div id="form">
			<div>
				<input class="rgt" type="text" name="taikhoan" value="" placeholder=" Tài khoản" id="tk">
			</div>
			<div>
				<input class="rgt" type="password" name="matkhau" value="" placeholder=" Mật khẩu" id="mk">
			</div>
			<?php
				if(isset($errors)&&in_array('error',$errors))
				{
					echo "<b style='color:red;'>Tài khoản hoặc mật khẩu không chính xác!!!</b>";
				}
			?>
			<div>
				<input class="btn_rgt" style="background-color: blue;border: none;" type="submit" name="submit" value="Đăng nhập">
			</div>
		</div>
	</form>
</body>
</html>