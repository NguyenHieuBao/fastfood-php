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
						        <th>Mã sản phẩm</th>
						        <th>Hình ảnh</th>
						        <th>Tên sản phẩm</th>
						        <th>Giá</th>
						        <th>Số lượng</th>
						        <th>Tổng tiền</th>
						      </tr>
						    </thead>
						    <tbody>
						    	<?PHP
							    		$query="SELECT masp,tensp,gia,soluong,tongtien,linkhinh FROM sanphamtrongdonhang WHERE madh=".$_GET['ma-donhang'];
										$result=mysqli_query($dbc,$query);check_errors($result,$query);$i=1;
										while(list($masp,$tensp,$gia,$soluong,$tongtien,$linkhinh)=mysqli_fetch_array($result,MYSQLI_NUM))
									    {?>
											<tr>
										      	<td>
										      		<?php echo $masp;?>
										      	</td>
										      	<td>
										      		<img src=<?php echo $linkhinh;?> class="img_table">
										      	</td>
										      	<td>
													<?php echo $tensp;?>
										      	</td>
										      	<td>
										      		<?php echo $gia;?> đ
										      	</td>
										      	<td>
										      		<?php echo $soluong;?>
										      	</td>
										      	<td>
										      			<?php echo $tongtien;?>
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
	function searchUser()
	{
		var data=document.getElementById('search_user').value;
		if(data=="")
		{
			data="";
		}
		$.ajax({
			type:"POST",
			url:"search_user.php",
			data:"data="+data,
			cache:false,
			success:function(results){
				 $('tbody').html(results);
			}
		});
	}
</script>
</html>