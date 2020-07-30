<?php
	session_start();
	require("connect_db.php");
	include("check_errors.php");
	if(isset($_POST['hoten']) && isset($_POST['dienthoai']) && isset($_POST['diachi']) && isset($_POST['vanchuyen']) && isset($_POST['thanhtoan']))
	{
		$id=$_SESSION['user']['uid'];
		$hoten=$_POST['hoten'];
		$vanchuyen=$_POST['vanchuyen'];
		$thanhtoan=$_POST['thanhtoan'];
		$dienthoai=$_POST['dienthoai'];
		$diachi=$_POST['diachi'];
	}
	else{
		$id=$_SESSION['user']['uid'];
		$vanchuyen=$_POST['vanchuyen'];
		$thanhtoan=$_POST['thanhtoan'];
		$hoten=$_SESSION['user']['hoten'];
		$dienthoai=$_SESSION['user']['dienthoai'];
		$diachi=$_SESSION['user']['diachi'];
	}
	$price=$_POST['price'];
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$date=date('Y-m-d H:i:s');
	$query_item="INSERT INTO donhang(makh,tenkh,tongtien,tinhtrang,thoigiandathang,hinhthucvanchuyen,hinhthucthanhtoan) VALUES('$id',N'$hoten','$price','chưa','$date','$vanchuyen','$thanhtoan')";
	$result_item=mysqli_query($dbc,$query_item);check_errors($result_item,$query_item);

	$query="SELECT madh from donhang WHERE donhang.MaDh NOT IN(select madh from sanphamtrongdonhang )";
	$result=mysqli_query($dbc,$query);check_errors($result,$query);
	list($madh)=mysqli_fetch_array($result,MYSQLI_NUM);
	$_SESSION['user']['madh']=$madh;
	$query_user="INSERT INTO khachhangnhanhang(makh,madh,hoten,dienthoai,diachi) VALUES('$id','$madh',N'$hoten','$dienthoai',N'$diachi')";
	$result_user=mysqli_query($dbc,$query_user);check_errors($result_user,$query_user);
	if(isset($_SESSION['cart']))
	{
		foreach ($_SESSION['cart'] as $k => $v)
		{
			if(isset($k))
			{
				$query_tk="SELECT masp,tensp,gia,motasp,chitietsp,loaisp,linkhinh FROM sanpham WHERE masp=".$k;
				$result_tk=mysqli_query($dbc,$query_tk);check_errors($result_tk,$query_tk);
				list($masp,$tensp,$gia,$motasp,$chitietsp,$loaisp,$linkhinh)=mysqli_fetch_array($result_tk,MYSQLI_NUM);

				$query_tk1="SELECT sum(khuyenmai.giatrikhuyenmai) FROM khuyenmai, sanphamkhuyenmai WHERE '{$date}'<=thoigianketthuc and '{$date}'>=thoigianbatdau and khuyenmai.makm=sanphamkhuyenmai.makm and sanphamkhuyenmai.masp={$k} and khuyenmai.tinhtrang=1";
				$result_tk1=mysqli_query($dbc,$query_tk1);check_errors($result_tk1,$query_tk1);
				list($km)=mysqli_fetch_array($result_tk1,MYSQLI_NUM);

				$price_item=$v*($gia-($gia*$km)/100);

				$tien=($gia-($gia*$km)/100);
				$query_db="INSERT INTO sanphamtrongdonhang(masp,madh,tensp,gia,soluong,tongtien,linkhinh) VALUES('$k','$madh','$tensp','$tien','$v','$price_item','$linkhinh')";
				$result_db=mysqli_query($dbc,$query_db);check_errors($result_db,$query_db);
			}
		}
	}
	unset($_SESSION['cart']);
?>