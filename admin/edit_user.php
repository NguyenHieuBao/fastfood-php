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
			$query_item="SELECT hoten,diachi,gioitinh,ngaysinh,dienthoai,vaitro FROM khachhang WHERE makh=".$url;
			$result_item=mysqli_query($dbc,$query_item);check_errors($result_item,$query_item);
			if(mysqli_num_rows($result_item)<1)
			{
				header('location:quanlyuser.php');
			}
			list($hoten,$diachi,$gioitinh,$ngaysinh,$dienthoai,$vaitro)=mysqli_fetch_array($result_item,MYSQLI_NUM);
		}else{
			header('location:quanlyuser.php');
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
						else
						{
							 include('includes/menu_left.php');
						}
					?>
				</div>
				<div class="col-sm-10 contain_right">
					<div style="background-color:white;margin-right: -29px;margin-left: -15px;color: black;padding: 40px;">
						<h3>Chỉnh sửa thông tin user</h3>
						<form method="POST" name="edituser">
							<div class="form-group">
						      <label for="hoten">Họ tên: <span style="color: red;">(*)</span></label>
						      <input type="text" class="form-control" id="hoten" placeholder="Họ tên" value="<?php echo $hoten;?>" name="hoten">
						    </div>
						    <div class="form-group">
						      <label for="sdt">Số điện thoại: <span style="color: red;">(*)</span></label>
						      <input type="text" class="form-control" id="sdt" placeholder="Số điện thoại" value="<?php echo $dienthoai;?>" name="sdt">
						    </div>
						    <div class="form-group">
						      <label for="diachi">Địa chỉ:</label>
						      <input type="text" class="form-control" id="diachi" placeholder="Địa chỉ" value="<?php echo $diachi;?>" name="diachi">
						    </div>
						    <div class="form-group">
						      <label for="gioitinh">Giới tính:</label>
						      <select class="form-control" id="gioitinh" name="gioitinh">
						      	<?php
						      		$gioitinh=strtoupper($gioitinh);
						      		if($gioitinh=='NAM')
						      		{
								      	echo "<option value='Nam'>Nam</option>";
								      	echo "<option value='Nữ''>Nữ</option>";
						      		}
						      		else{
								      	echo "<option value='Nữ''>Nữ</option>";
						      			echo "<option value='Nam'>Nam</option>";
						      		}
						      	?>
						      </select>
						    </div>
						    <div class="form-group">
						      <label for="ngaysinh">Ngày sinh:</label>
						      <input type="text" class="form-control" id="ngaysinh" placeholder="DD/MM/YYYY" value="<?php echo $ngaysinh;?>" name="ngaysinh">
						    </div>
						    <div class="form-group">
						      <label for="vaitro">Vai trò:</label>
						      <select class="form-control" id="vaitro" name="vaitro">
						      	<?php
						      		if($vaitro==0)
						      		{
								      	echo "<option value='0'>Người dùng cuối</option>";
								      	echo "<option value='1'>Manager</option>";
								      	echo "<option value='2'>Admin</option>";
						      		}
						      		else if($vaitro==1){
								      	echo "<option value='1'>Manager</option>";
								      	echo "<option value='0'>Người dùng cuối</option>";
								      	echo "<option value='2'>Admin</option>";
						      		}else{
								      	echo "<option value='2'>Admin</option>";
								      	echo "<option value='0'>Người dùng cuối</option>";
						      			echo "<option value='1'>Manager</option>";
						      		}
						      	?>
						      </select>
						    </div>
						    <div class="mess"></div>
						    <button type="button" name="button" class="btn btn-primary" onclick="back();">Quay về</button>
						    <button type="button" class="btn btn-primary" onclick="fromEdit(<?php echo $_GET['id'];?>);">Chỉnh sửa</button>
						  </form>
					</div>
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript">
	function back()
	{
		window.location="quanlyuser.php";
	}
	function fromEdit(makh)
	{
		var hoten=document.getElementById('hoten');
		var gioitinh=document.getElementById('gioitinh').value;
		var ngaysinh=document.getElementById('ngaysinh').value;
		var dienthoai=document.getElementById('sdt');
		var diachi=document.getElementById('diachi').value;
		var vaitro=document.getElementById('vaitro').value;
		if(hoten.value==""){
			alert("Họ tên không được để trống");
			hoten.focus();
			return false;
		}
		else{
			pattern=/\d/gi;
			if(pattern.test(hoten.value)==true){
				alert("Họ tên không hợp lệ");
				hoten.focus();
				return false;
			}
		}
		if(dienthoai=="")
		{
			alert("Số điện thoại không được để trống");
			dienthoai.focus();
			return false;
		}else{
			pattern=/^[0-9]{10,12}$/;
			if(pattern.test(dienthoai.value)==false){
				alert("Số điện thoại phải là số và có từ 10 đến 12 ký tự");
				dienthoai.focus();
				return false;
			}
		}
		if(ngaysinh=="")
		{
			ngaysinh="";
		}
		if(diachi=="")
		{
			diachi="";
		}
		$.ajax({
			type:"POST",
			url:"includes/xuly_edit.php",
			data:{id:makh,hoten:hoten.value,gioitinh:gioitinh,ngaysinh:ngaysinh,dienthoai:dienthoai.value,diachi:diachi,vaitro:vaitro},
			cache:false,
			success:function(results){
				$('.mess').html(results);
			}
		});
	}
</script>
</body>
</html>