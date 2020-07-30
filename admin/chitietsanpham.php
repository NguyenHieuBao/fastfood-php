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
				header('location:quanlysanpham.php');
			}
			$query_item="SELECT tensp,gia,motasp,chitietsp,loaisp,linkhinh FROM sanpham WHERE masp=".$url;
			$result_item=mysqli_query($dbc,$query_item);check_errors($result_item,$query_item);
			if(mysqli_num_rows($result_item)<1)
			{
				header('location:quanlysanpham.php');
			}
			list($tensp1,$gia1,$motasp1,$chitietsp1,$loaisp1,$linkhinh1)=mysqli_fetch_array($result_item,MYSQLI_NUM);
		}else{
			header('location:quanlysanpham.php');
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
						<h3>Chi tiết sản phẩm</h3>
						<form method="POST" name="addSanpham" enctype="multipart/form-data">
							<div class="form-group">
						      <label for="tensp">Tên sản phẩm: </label>
						      <input type="text" class="form-control" id="tensp" value="<?php echo $tensp1;?>" placeholder="Tên sản phẩm" name="tensp" disabled>
						    </div>
							<div style="width: 15%;">
								<img src='../<?php echo $linkhinh1;?>' style="width:100%;">
							</div>
						    <div class="form-group">
						      <label for="gia">Giá: </label>
						      <input type="text" disabled class="form-control" id="gia" value="<?php echo $gia1;?>" placeholder="Giá" name="gia">
						    </div>
						    <div class="form-group">
						      <label for="mtsp">Mô tả sản phẩm: </label>
						      <textarea class="form-control" id="mtsp" disabled placeholder="Mô tả sản phẩm" name="mtsp" id="mtsp">
						      		<?php echo $motasp1;?>
						      </textarea>
						    </div>
							<div class="form-group">
						      <label for="ctsp">Chi tiết sản phẩm: </label>
						      <textarea class="form-control" id="ctsp" disabled placeholder="Chi tiết sản phẩm" name="ctsp">
						      		<?php echo $chitietsp1;?>
						      </textarea>
						    </div>
						    <div class="form-group">
						      <label for="loaisp">Loại sản phẩm: </label>
						      <input type="text" disabled class="form-control" id="loaisp" value="<?php echo $loaisp1;?>" placeholder="Loại sản phẩm" name="loaisp">
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
		window.location="quanlysanpham.php";
	}
</script>
</html>