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
							$title=$_POST['tt'];
						}
						if(empty($_POST['nd']))
						{
							$errors[]='nd';
						}
						else
						{
							$noidung=$_POST['nd'];
						}
						if(($_FILES['img']['type']!="image/gif")
							&&($_FILES['img']['type']!="image/png")
							&&($_FILES['img']['type']!="image/jpeg")
							&&($_FILES['img']['type']!="image/jpg"))
						{
							$message="File không đúng định dạng";
							$errors[]='img';
						}
						elseif ($_FILES['img']['size']>1000000)
						{
							$message="Kích thước phải nhỏ hơn 1MB";
							$errors[]='img';
						}
						elseif ($_FILES['img']['size']=='')
						{
							$message="Bạn chưa chọn file ảnh";
							$errors[]='img';
						}
						date_default_timezone_set('Asia/Ho_Chi_Minh');
						$thoigian=date('Y-m-d H:i:s');
						$user=$_SESSION['usr']['uid'];
						if(empty($errors))
						{
							$img=$_FILES['img']['name'];
							$link_img='IMAGES/'.$img;
							move_uploaded_file($_FILES['img']['tmp_name'],'../IMAGES/'.$img);
							$query="INSERT INTO tintuc(tieude,noidung,thoigiandang,hinhanh,manv,tinhtrang)
									VALUES(N'$title',N'$noidung','$thoigian',N'$link_img','$user',1)";
							$results=mysqli_query($dbc,$query);
							check_errors($results,$query);
							if(mysqli_affected_rows($dbc)==1)
							{
								$message= "<p style='color:green;'>Thêm mới thành công</p>";
							}
							else
							{
								$message= "<p style='required'>Thêm mới không thành công</p>";
							}
						}
						else
						{
							$message="<p style='color:red;'>Bạn hãy nhập đầy đủ thông tin</p>";
						}
					}
				?>
				<div class="col-sm-10 contain_right">
					<div style="background-color:white;margin-right: -29px;margin-left: -15px;color: black;padding: 40px;">
						<h3>Thêm mới bài viết</h3>
						<form method="POST" name="addSanpham" enctype="multipart/form-data">
							<div class="form-group">
						      <label for="tensp">Tiêu đề: </label>
						      <input type="text" class="form-control" id="tt" placeholder="Tiêu đề" name="tt">
						    </div>
						    <div class="form-group">
								<label>Hình ảnh</label>
								<input type="file" name="img" value="">
							</div>
						    <?php
									if(isset($mess))
									{
										echo $mess;
									}
								?>
						    <div class="form-group">
						      <label for="mtsp">Nội dung: </label>
						      <textarea class="form-control" id="nd" placeholder="Nội dung" name="nd"></textarea>
						    </div>
						    <div class="mess">
						    	<?php
									if(isset($message))
									{
										echo $message;
									}
								?>
						    </div>
						    <button type="submit" class="btn btn-primary">Thêm mới</button>
						  </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>