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
		if(isset($_GET['id']) && $_GET['id']!=null)
		{
			$url=$_GET['id'];
			$query_item="SELECT hoten,diachi,gioitinh,ngaysinh,dienthoai,vaitro,taikhoan,email,trangthai FROM khachhang WHERE makh=".$url;
			$result_item=mysqli_query($dbc,$query_item);check_errors($result_item,$query_item);
			if(mysqli_num_rows($result_item)<1)
			{
				header('location:quanlyuser.php');
			}
			list($hoten,$diachi,$gioitinh,$ngaysinh,$dienthoai,$vaitro,$taikhoan,$email,$trangthai)=mysqli_fetch_array($result_item,MYSQLI_NUM);
		}else{
			header('location:quanlyuser.php');
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
				<?php
					if(isset($_POST['submit']))
					{
					    $khoa=$_POST['khoa'];
					    $query_tk="UPDATE khachhang SET trangthai='".$khoa."' WHERE makh=".$_GET['id'];
						$result_tk=mysqli_query($dbc,$query_tk);check_errors($result_tk,$query_tk);
						header('location:quanlyuser.php');
					}
				?>
				<div class="col-sm-10 contain_right">
					<div style="background-color:white;margin-right: -29px;margin-left: -15px;color: black;padding: 40px;">
						<h3>Khóa user</h3>
						<form method="POST" name="blockuser">
							<div class="form-group">
						      <label for="taikhoan">Tài khoản:</label>
						      <input type="text" class="form-control" id="taikhoan" name="taikhoan" value="<?php echo $taikhoan;?>"disabled='disabled'>
						    </div>
						    <div class="form-group">
						      <label for="email">Email:</label>
						      <input type="text" class="form-control" id="email" name="email" value="<?php echo $email;?>"disabled='disabled'>
						    </div>
						    <div class="form-group">
						    	<?php
						    		if($trangthai==0)
						    		{
						    			echo "<label>";
							    		echo "<input type='radio' name='khoa' value='0' checked> Khóa";
								    	echo "</label>";
								    	echo "<br/>";
								    	echo "<label>";
								    	echo "<input type='radio' name='khoa' value='1'> Kích hoạt";
								    	echo "</label>";
						    		}else{
						    			echo "<label>";
							    		echo "<input type='radio' name='khoa' value='0'> Khóa";
								    	echo "</label>";
								    	echo "<br/>";
								    	echo "<label>";
								    	echo "<input type='radio' name='khoa' value='1' checked> Kích hoạt";
								    	echo "</label>";
						    		}
						    	?>
						    </div>
						    <div class="mess">
						    </div>
						    <button type="submit" class="btn btn-primary" name="submit">Đồng ý</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>