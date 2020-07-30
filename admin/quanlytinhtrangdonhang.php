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
			$url=$_GET['ma-donhang'];
			$query="SELECT madh,makh,tenkh,tongtien,tinhtrang,thoigiandathang,hinhthucvanchuyen,hinhthucthanhtoan FROM donhang WHERE madh=".$url;
			$result=mysqli_query($dbc,$query);check_errors($result,$query);
			if(mysqli_num_rows($result)<1)
			{
				header('location:quanlyhoadonuser.php');
			}
			list($madh,$makh,$hoten,$tongtien,$tinhtrang,$thoigiandathang,$hinhthucvanchuyen,$hinhthucthanhtoan)=mysqli_fetch_array($result,MYSQLI_NUM);
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
				<?php
					if(isset($_POST['submit']))
					{
					    $data=$_POST['tinhtrang'];
					    $query_tk="UPDATE donhang SET tinhtrang=N'".$data."' WHERE madh=".$_GET['ma-donhang'];
						$result_tk=mysqli_query($dbc,$query_tk);check_errors($result_tk,$query_tk);
						header('location:quanlyhoadonuser.php');
					}
				?>
				<div class="col-sm-10 contain_right">
					<div style="background-color:white;margin-right: -29px;margin-left: -15px;color: black;padding: 40px;">
						<h3>Quản lý tình trạng đơn hàng</h3>
						<form method="POST" name="qldh">
							<div class="form-group">
						      <label for="madh">Mã đơn hàng:</label>
						      <input type="text" class="form-control" id="madh" name="madh" value="<?php echo $madh;?>"disabled='disabled'>
						    </div>
						    <div class="form-group">
						      <label for="hoten">Họ tên:</label>
						      <input type="text" class="form-control" id="hoten" name="hoten" value="<?php echo $hoten;?>"disabled='disabled'>
						    </div>
						    <div class="form-group">
						    	<label for="tinhtrang">Tình trạng:</label>
						    	<select class="form-control" id="tinhtrang" name="tinhtrang">
						      	<?php
						      		if($tinhtrang=='chưa')
						      		{
								      	echo "<option value='chưa'>Chưa giao</option>";
								      	echo "<option value='đang giao'>Đang giao</option>";
								      	echo "<option value='đã giao'>Đã giao</option>";
								      	echo "<option value='hủy'>Hủy</option>";
						      		}
						      		else if($tinhtrang=='đang giao'){
								      	echo "<option value='đang giao'>Đang giao</option>";
								      	echo "<option value='chưa'>Chưa giao</option>";
								      	echo "<option value='đã giao'>Đã giao</option>";
								      	echo "<option value='hủy'>Hủy</option>";
						      		}else if($tinhtrang=='đã giao'){
								      	echo "<option value='đã giao'>Đã giao</option>";
								      	echo "<option value='chưa'>Chưa giao</option>";
								      	echo "<option value='đang giao'>Đang giao</option>";
								      	echo "<option value='hủy'>Hủy</option>";
						      		}else{
								      	echo "<option value='hủy'>Hủy</option>";
						      			echo "<option value='chưa'>Chưa giao</option>";
								      	echo "<option value='đang giao'>Đang giao</option>";
								      	echo "<option value='đã giao'>Đã giao</option>";
						      		}
						      	?>
						      </select>
						    </div>
						    <div class="mess">
						    </div>
						    <button type="button" name="button" class="btn btn-primary" onclick="back();">Quay về</button>
						    <button type="submit" class="btn btn-primary" name="submit">Đồng ý</button>
						</form>
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