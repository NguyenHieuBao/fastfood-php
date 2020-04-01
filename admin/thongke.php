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
	?>
		<div id="mid">
			<div class="row" style="width: 100%;">
				<div class="col-sm-2">
					<?php
						if($_SESSION['usr']['vaitro']==2)
						{
							include('includes/menu_left1.php');
						}
						else
						{
							 include('includes/menu_left.php');
						}
					?>
				</div>
				<?php
					$query_sdh="SELECT count(madh) FROM donhang";
					$result_sdh=mysqli_query($dbc,$query_sdh);check_errors($result_sdh,$query_sdh);
					list($sodh)=mysqli_fetch_array($result_sdh,MYSQLI_NUM);

					$query_tt="SELECT sum(tongtien) FROM donhang WHERE tinhtrang=N'đã giao'";
					$result_tt=mysqli_query($dbc,$query_tt);check_errors($result_sdh,$query_tt);
					list($tt)=mysqli_fetch_array($result_tt,MYSQLI_NUM);

					$query="SELECT count(makh) FROM khachhang";
					$result=mysqli_query($dbc,$query);check_errors($result_sdh,$query);
					list($dhh)=mysqli_fetch_array($result,MYSQLI_NUM);
				?>
				<div class="col-sm-10 contain_right">
					<div style="background-color:white;margin-right: -29px;margin-left: -15px;color: black;padding: 40px;">
						<h3>Thống kê</h3>
						<div>Số đơn hàng được đặt: <label><?php echo $sodh;?></label></div>
						<div class="progress" style="height:30px;margin-top: 2%;">
							<div class="progress-bar" style="width:40%;height:30px"></div>
						</div>
						<div>Tổng số tiền thu được: <label><?php echo $tt;?> đồng</label></div>
						<div class="progress" style="height:30px;margin-top: 2%;">
							<div class="progress-bar" style="width:60%;height:30px"></div>
						</div>
						<div>Số người đăng ký thành viên: <label><?php echo $dhh;?></label></div>
						<div class="progress" style="height:30px;margin-top: 2%;">
							<div class="progress-bar" style="width:80%;height:30px"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>