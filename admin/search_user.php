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
	$query="SELECT makh,taikhoan,hoten,dienthoai,email,diachi,trangthai,vaitro FROM khachhang WHERE makh like '%$data%' OR hoten like '%$data%' OR email like '%$data%' OR taikhoan like '%$data%' OR diachi like '%$data%' OR trangthai like '%$data%' OR vaitro like '%$data%' OR dienthoai like '%$data%'";
	$result=mysqli_query($dbc,$query);check_errors($result,$query);
	while(list($makh,$taikhoan,$hoten,$dienthoai,$email,$diachi,$trangthai,$vaitro)=mysqli_fetch_array($result,MYSQLI_NUM))
	{?>
		<tr>
			<td>
				<?php echo $makh;?>
			</td>
			<td>
				<?php echo $taikhoan;?>
			</td>
			<td>
				<?php echo $hoten;?>
			</td>
			<td>
				<?php echo $dienthoai;?>
			</td>
			<td>
				<?php echo $email;?>
			</td>
			<td>
				<?php
					if($trangthai==1)
					{
						echo "<b style='color:green'>Kích hoạt</b>";
					}else{
						echo "<b style='color:red;'>Đã khóa</b>";
					}
				?>
			</td>
			<td>
			<?php
				if($vaitro==0)
				{
					echo "Khách hàng";
				}else if($vaitro==1){
					echo "Manager";
				}else if($vaitro==3){
					echo "Posts";
				}else{
					echo "Admin";
				}
			?>
			</td>
			<td  style="text-align: center;">
				<a href="resert_password.php?id=<?php echo $makh;?>">
					<img src="../IMAGES/reset_mk.jpg" class="img_tbl1">
				</a>
			</td>
			<td  style="text-align: center;">
				<a href="edit_user.php?id=<?php echo $makh;?>">
					<img src="../IMAGES/icon_edit.png" class="img_tbl">
				</a>
			</td>
			<td style="text-align: center;">
				<a href="khoa_user.php?id=<?php echo $makh;?>">
					<img src="../IMAGES/doi_mk.png" class="img_tb2">
				</a>
			</td>
		</tr>
<?PHP }?>