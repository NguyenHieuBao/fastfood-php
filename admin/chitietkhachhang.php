	<?php
		session_start();
		if(isset($_SESSION['usr']['uid']))
		{
			include("includes/header.php");
		}
		else
		{
			 header('Location:login.php');
		}
		require("../includes/connect_db.php");
		include("../includes/check_errors.php");
		if(isset($_GET['ma-donhang']) && $_GET['ma-donhang']!=null)
		{
			$query_tk="SELECT makh,hoten,diachi,dienthoai FROM khachhangnhanhang WHERE madh=".$_GET['ma-donhang'];
			$result_tk=mysqli_query($dbc,$query_tk);check_errors($result_tk,$query_tk);
			if(mysqli_num_rows($result_tk)<1)
			{
				header('location:quanlyhoadonuser.php');
			}
			list($makh1,$hoten1,$diachi1,$dienthoai1)=mysqli_fetch_array($result_tk,MYSQLI_NUM);
		}else{
			header('location:quanlyhoadonuser.php');
		}
	?>
		<div id="mid">
			<div class="row" style="width: 100%;">
				<div class="col-sm-2">
					<?php
						if($_SESSION['usr']['vaitro']==2)
						{
							include('includes/menu_left1.php');
						}
						else if($_SESSION['usr']['vaitro']==1){
							include('includes/menu_left.php');
						}
						else if($_SESSION['usr']['vaitro']==3)
						{
							 include('includes/menu_left3.php');
						}
					?>
				</div>
				<div class="col-sm-10">
					<div style="background-color:white;margin-right: -29px;margin-left: -15px;color: black;padding: 40px;">
						<h3>Chi tiết đơn hàng: #<?php echo $_GET['ma-donhang'];?></h3>
					    <div style="clear: both;margin: 6%;"></div>
						<table class="table table-hover">
						    <thead>
						      <tr>
						        <th>Họ tên</th>
						        <th>Tài khoản</th>
						        <th>Email</th>
						        <th>Địa chỉ</th>
						        <th>Giới tính</th>
						        <th>Ngày sinh</th>
						        <th>Số điện thoại</th>
						      </tr>
						    </thead>
						    <tbody>
						    	<?PHP
							    		$query="SELECT hoten,taikhoan,email,diachi,gioitinh,ngaysinh,dienthoai FROM khachhang WHERE makh=".$makh1;
										$result=mysqli_query($dbc,$query);check_errors($result,$query);$i=1;
										while(list($hoten,$taikhoan,$email,$diachi,$gioitinh,$ngaysinh,$sodienthoai)=mysqli_fetch_array($result,MYSQLI_NUM))
									    {?>
											<tr>
										      	<td>
										      		<?php echo $hoten1;?>
										      	</td>
										      	<td>
										      		<?php echo $taikhoan;?>
										      	</td>
										      	<td>
													<?php echo $email;?>
										      	</td>
										      	<td>
										      		<?php echo $diachi1;?>
										      	</td>
										      	<td>
										      		<?php echo $gioitinh;?>
										      	</td>
										      	<td>
										      		<?php echo $ngaysinh;?>
										      	</td>
										      	<td>
										      		<?php echo $dienthoai1;?>
										      	</td>
									     	</tr>
									<?PHP }?>
						    </tbody>
				  		</table>
					<button type="button" name="button" class="btn btn-primary" onclick="back();">Quay về</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript">
	function back()
	{
		window.location="quanlyhoadonuser.php";
	}
</script>
</html>