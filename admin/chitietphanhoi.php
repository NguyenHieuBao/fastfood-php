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
			if(!is_numeric($url)){
				header('location:quanlythongtinphanhoi.php');
			}
			$query_item="SELECT * FROM phanhoi WHERE mapt=".$url;
			$result_item=mysqli_query($dbc,$query_item);check_errors($result_item,$query_item);
			if(mysqli_num_rows($result_item)<1)
			{
				header('location:quanlythongtinphanhoi.php');
			}
			list($mapt,$hoten,$email,$dienthoai,$noidung,$tinhtrang,$thoigian)=mysqli_fetch_array($result_item,MYSQLI_NUM);
		}else{
			header('location:quanlythongtinphanhoi.php');
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
				<div class="col-sm-10 contain_right">
					<div style="background-color:white;margin-right: -29px;margin-left: -15px;color: black;padding: 40px;">
						<h3>Chi tiết thông tin phản hồi</h3>
						<form method="POST" name="addSanpham" enctype="multipart/form-data">
							<div class="form-group">
						      <label for="tensp">Họ và tên: </label>
						      <?php echo $hoten;?>
						    </div>
						    <div class="form-group">
						      <label for="tensp">Email: </label>
						      <?php echo $email;?>
						    </div>
						    <div class="form-group">
						      <label for="tensp">Điện thoại: </label>
						      <?php echo $dienthoai;?>
						    </div>
						    <div class="form-group">
						      <label for="tensp">Thời gian: </label>
						      <?php echo $thoigian;?>
						    </div>
						    <div class="form-group">
						      <label for="mtsp">Nội dung: </label>
						      <div style="margin-top: 1%;">
						      		<?php echo $noidung;?>
						      </div>
						    </div>
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
		window.location="quanlythongtinphanhoi.php";
	}
</script>
</html>