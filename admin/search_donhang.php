<?php
	session_start();
	if(isset($_SESSION['usr']['uid']))
	{
	}
	else
	{
		 header('Location:login.php');
	}
	require("../includes/connect_db.php");
	include("../includes/check_errors.php");
	$data=$_POST['data'];
	$query="SELECT madh,tenkh,tinhtrang,tongtien,thoigiandathang,hinhthucvanchuyen,hinhthucthanhtoan FROM donhang WHERE madh like '%$data%' OR tenkh like '%$data%' OR tinhtrang like '%$data%' OR tongtien like '%$data%' OR thoigiandathang like '%$data%' OR hinhthucvanchuyen like '%$data%' OR hinhthucthanhtoan like '%$data%'";
	$result=mysqli_query($dbc,$query);check_errors($result,$query);$i=1;
	while(list($madh,$hoten,$tinhtrang,$tongtien,$thoigiandathang,$hinhthucvanchuyen,$hinhthucthanhtoan)=mysqli_fetch_array($result,MYSQLI_NUM))
	{?>
		<tr>
										      	<td>
										      		<?php echo $madh;?>
										      	</td>
										      	<td>
													<?php echo $hoten;?>
										      	</td>
										      	<td>
										      		<?php echo $tongtien;?> đ
										      	</td>
										      	<td>
										      		<?php echo $thoigiandathang;?>
										      	</td>
										      	<td>
										      			<?php echo $hinhthucvanchuyen;?>
										      	</td>
										      	<td>
										      		<?php echo $hinhthucthanhtoan;?>
										      	</td>
										      	<td>
										      			<?php
										      				if($tinhtrang=='chưa')
												      		{
										      					echo "<b style='color:red'>".$tinhtrang."</b>";
												      		}
												      		else if($tinhtrang=='đang giao'){
														      	echo "<b style='color:green'>".$tinhtrang."</b>";
												      		}else if($tinhtrang=='đã giao'){
														      	echo "<b style='color:green'>".$tinhtrang."</b>";
												      		}else{
														      	echo "<b style='color:red'>".$tinhtrang."</b>";
												      		}
										      			?>
										      	</td>
						        				<td>
						        					<a href="chitietkhachhang.php?ma-donhang=<?php echo $madh;?>" style="color: red;">
						        						>>Xem chi tiết
						        					</a>
						        				</td>
						        				<td>
						        					<a href="chitiethoadonuser.php?ma-donhang=<?php echo $madh;?>" style="color: red;">
						        						>>Xem chi tiết
						        					</a>
						        				</td>
						        				<td  style="text-align: center;">
										      		<a href="quanlytinhtrangdonhang.php?ma-donhang=<?php echo $madh;?>">
														<img src="../IMAGES/icon_edit.png" style="width: 30%;height: 17%;">
													</a>
										      	</td>
									     	</tr>
<?PHP }?>