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
				header('location:quanlybaiviet.php');
			}
			$query_item="SELECT * FROM tintuc WHERE matt=".$url;
			$result_item=mysqli_query($dbc,$query_item);check_errors($result_item,$query_item);
			if(mysqli_num_rows($result_item)<1)
			{
				header('location:quanlybaiviet.php');
			}
			list($matt, $tieude, $noidung, $thoigiandang, $hinhanh, $manv)=mysqli_fetch_array($result_item,MYSQLI_NUM);
		}else{
			header('location:quanlybaiviet.php');
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
						<h3>Chi tiết bài viết</h3>
						<form method="POST" name="addSanpham" enctype="multipart/form-data">
							<div class="form-group">
						      <label for="tensp">Tiêu đề: </label>
						      <?php echo $tieude;?>
						    </div>
						    <div class="form-group">
						      <label for="tensp">Người đăng: #</label>
						      <?php echo $manv;?>
						    </div>
						    <div class="form-group">
						      <label for="tensp">Thời gian đăng: </label>
						      <?php echo $thoigiandang;?>
						    </div>
						    <div class="form-group">
						      <label for="tensp">Hình ảnh: </label>
						      <div style="width: 100%;">
						      	<img style="width: 20%;" src="../<?php echo $hinhanh;?>">
						      </div>
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
		window.location="quanlybaiviet.php";
	}
</script>
</html>