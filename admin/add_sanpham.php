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
						if(empty($_POST['tensp']))
						{
							$errors[]='tensp';
						}
						else
						{
							$tensp=$_POST['tensp'];
						}
						if(empty($_POST['gia']))
						{
							$errors[]='gia';
						}
						else
						{
							if(is_numeric($_POST['gia']))
							{
								$gia=$_POST['gia'];
							}
							else{
								$errors[]='gia';
								$mess="<p style='color:red;'>Giá phải là số nguyên không chứa ký nào khác ngoài số</p>";
							}
						}
						if(empty($_POST['mtsp']))
						{
							$errors[]='mtsp';
						}
						else
						{
							$mtsp=$_POST['mtsp'];
						}
						if(empty($_POST['ctsp']))
						{
							$errors[]='ctsp';
						}
						else
						{
							$ctsp=$_POST['ctsp'];
						}
						if(empty($_POST['loaisp']))
						{
							$errors[]='loaisp';
						}
						else
						{
							$loaisp=$_POST['loaisp'];
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
						if(empty($errors))
						{
							$img=$_FILES['img']['name'];
							$link_img='IMAGES/'.$img;
							move_uploaded_file($_FILES['img']['tmp_name'],'../IMAGES/'.$img);
							$query="INSERT INTO sanpham(tensp,gia,motasp,chitietsp,loaisp,linkhinh)
									VALUES(N'$tensp',$gia,N'$mtsp',N'$ctsp',N'$loaisp',N'$link_img')";
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
						<h3>Thêm mới sản phẩm</h3>
						<form method="POST" name="addSanpham" enctype="multipart/form-data">
							<div class="form-group">
						      <label for="tensp">Tên sản phẩm: </label>
						      <input type="text" class="form-control" id="tensp" placeholder="Tên sản phẩm" name="tensp">
						    </div>
						    <div class="form-group">
								<label>Ảnh sản phẩm</label>
								<input type="file" name="img" value="">
							</div>
						    <div class="form-group">
						      <label for="gia">Giá: </label>
						      <input type="text" class="form-control" id="gia" placeholder="Giá" name="gia">
						    </div>
						    <?php
									if(isset($mess))
									{
										echo $mess;
									}
								?>
						    <div class="form-group">
						      <label for="mtsp">Mô tả sản phẩm: </label>
						      <textarea class="form-control" id="mtsp" placeholder="Mô tả sản phẩm" name="mtsp"></textarea>
						    </div>
							<div class="form-group">
						      <label for="ctsp">Chi tiết sản phẩm: </label>
						      <textarea class="form-control" id="ctsp" placeholder="Chi tiết sản phẩm" name="ctsp"></textarea>
						    </div>
						    <div class="form-group">
						      <label for="loaisp">Loại sản phẩm: </label>
						      <input type="text" class="form-control" id="loaisp" placeholder="Loại sản phẩm" name="loaisp">
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
<script type="text/javascript">
	
</script>
</html>