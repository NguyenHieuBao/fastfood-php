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
						else if($_SESSION['usr']['vaitro']==1){
							include('includes/menu_left.php');
						}
						else if($_SESSION['usr']['vaitro']==3)
						{
							 include('includes/menu_left3.php');
						}
					?>
				</div>
				<div class="col-sm-10 contain_right">
					<div style="background-color:white;margin-right: -29px;margin-left: -15px;color: black;padding: 40px;">
						<div style="padding: 15px;border-bottom: solid #eee 1px;">
							<span style="font-size: 28px;font-weight: both;">Danh sách </span> <span style="color: #9d9d9d;">Bình luận</span>
						</div>
						<div style="background-color:#f5f5f5;padding: 10px;margin-top: 2%;color: #9d9d9d;">
							<i class="fa fa-fw fa-dashboard"></i> Dashboard
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>