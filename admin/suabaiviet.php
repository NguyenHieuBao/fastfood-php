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
			$query_item="SELECT * FROM tintuc WHERE matt=".$url;
			$result_item=mysqli_query($dbc,$query_item);check_errors($result_item,$query_item);
			if(mysqli_num_rows($result_item)<1)
			{
				header('location:quanlybaiviet.php');
			}
			list($matt, $tieude, $noidung, $thoigiandang, $hinhanh)=mysqli_fetch_array($result_item,MYSQLI_NUM);
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
				<?php
					if($_SERVER['REQUEST_METHOD']=='POST')
					{
						$errors=array();
						if(empty($_POST['tt']))
						{
							$errors[]='tt';
						}
						else
						{
							$tieude=$_POST['tt'];
						}
						if(empty($_POST['nd']))
						{
							$errors[]='nd';
						}
						else
						{
							$noidung=$_POST['nd'];
						}
						if(empty($errors))
						{
							$link_img=$hinhanh;
							if(($_FILES['img']['type']!="image/gif")
								&&($_FILES['img']['type']!="image/png")
								&&($_FILES['img']['type']!="image/jpeg")
								&&($_FILES['img']['type']!="image/jpg"))
							{
								$message="File không đúng định dạng";
							}
							elseif ($_FILES['img']['size']>1000000)
							{
								$message="Kích thước phải nhỏ hơn 1MB";
							}
							elseif ($_FILES['img']['size']=='')
							{
								$message="Bạn chưa chọn file ảnh";
							}
							else
							{
								$img=$_FILES['img']['name'];
								$link_img='IMAGES/'.$img;
								move_uploaded_file($_FILES['img']['tmp_name'],'../IMAGES/'.$img);
							}
							date_default_timezone_set('Asia/Ho_Chi_Minh');
							$thoigian=date('Y-m-d H:i:s');
							$user=$_SESSION['usr']['uid'];
							$query="UPDATE tintuc SET tieude=N'$tieude',noidung=N'$noidung',thoigiandang='$thoigian',hinhanh=N'$link_img',manv='$user' WHERE matt=".$url;
							$results=mysqli_query($dbc,$query);
							check_errors($results,$query);
							if(mysqli_affected_rows($dbc)>=1)
							{
								$mes="<b style='color:green;'>Chỉnh sửa thành công</b>";
							}
							else
							{
								$mes="<b style='color:red;'>Bạn vui lỏng nhập đủ thông tin</b>";
							}
						}
						else
						{
							$mes="<b style='color:red;'>Bạn vui lỏng kiểm tra thông tin</b>";
						}
					}
				?>
				<div class="col-sm-10 contain_right">
					<div style="background-color:white;margin-right: -29px;margin-left: -15px;color: black;padding: 40px;">
						<h3>Sửa bài viết</h3>
						<form method="POST" name="addSanpham" enctype="multipart/form-data">
							<div class="form-group">
						      <label for="tensp">Tiêu đề: </label>
						      <input type="text" class="form-control" id="tt" value="<?php echo $tieude;?>" placeholder="Tên sản phẩm" name="tt">
						    </div>
						    <div class="form-group">
								<label>Hình ảnh</label>
								<input type="file" name="img" value="" id="img_file">
							</div>
							<div style="width: 15%;">
								<img src='../<?php echo $hinhanh;?>' style="width:100%;">
							</div>
							<div>
						    	<?php
									if(isset($message))
									{
										echo $message;
									}
								?>
						    </div>
						    <div class="form-group">
						      <label for="mtsp">Nội dung: </label>
						      <textarea class="form-control" id="mtsp" placeholder="Nội dung" name="nd" id="nd">
						      		<?php echo $noidung;?>
						      </textarea>
						    </div>
						    <div>
						    	<?php
						            if(isset($mes))
									{
										echo $mes;
									}
						        ?>
						    </div>
						    <button type="button" name="button" class="btn btn-primary" onclick="back();">Quay về</button>
						    <button type="submit" class="btn btn-primary" name="submit">Chỉnh sửa</button>
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
		window.location="quanlybaiviet.php";
	}
</script>
</html>