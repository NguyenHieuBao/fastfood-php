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
						if(empty($errors))
						{
							$link_img=$linkhinh1;
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
							$query="UPDATE sanpham SET tensp=N'$tensp',gia=$gia,motasp=N'$mtsp',chitietsp=N'$ctsp',loaisp=N'$loaisp',linkhinh=N'$link_img' WHERE masp=".$url;
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
						<h3>Sửa sản phẩm</h3>
						<form method="POST" name="addSanpham" enctype="multipart/form-data">
							<div class="form-group">
						      <label for="tensp">Tên sản phẩm: </label>
						      <input type="text" class="form-control" id="tensp" value="<?php echo $tensp1;?>" placeholder="Tên sản phẩm" name="tensp">
						    </div>
						    <div class="form-group">
								<label>Ảnh sản phẩm</label>
								<input type="file" name="img" value="" id="img_file">
							</div>
							<div style="width: 15%;">
								<img src='../<?php echo $linkhinh1;?>' style="width:100%;">
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
						      <label for="gia">Giá: </label>
						      <input type="text" class="form-control" id="gia" value="<?php echo $gia1;?>" placeholder="Giá" name="gia">
						    </div>
						    <?php
									if(isset($mess))
									{
										echo $mess;
									}
								?>
						    <div class="form-group">
						      <label for="mtsp">Mô tả sản phẩm: </label>
						      <textarea class="form-control" id="mtsp" placeholder="Mô tả sản phẩm" name="mtsp" id="mtsp">
						      		<?php echo $motasp1;?>
						      </textarea>
						    </div>
							<div class="form-group">
						      <label for="ctsp">Chi tiết sản phẩm: </label>
						      <textarea class="form-control" id="ctsp" placeholder="Chi tiết sản phẩm" name="ctsp">
						      		<?php echo $chitietsp1;?>
						      </textarea>
						    </div>
						    <div class="form-group">
						      <label for="loaisp">Loại sản phẩm: </label>
						      <input type="text" class="form-control" id="loaisp" value="<?php echo $loaisp1;?>" placeholder="Loại sản phẩm" name="loaisp">
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
		window.location="quanlysanpham.php";
	}
</script>
</html>