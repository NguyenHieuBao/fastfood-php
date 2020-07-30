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
						<h3>Thêm mới user</h3>
						<form>
							<div class="form-group">
						      <label for="hoten">Họ tên: <span style="color: red;">(*)</span></label>
						      <input type="text" class="form-control" id="hoten" placeholder="Họ tên" name="hoten">
						    </div>
						    <div class="form-group">
						      <label for="email">Email: <span style="color: red;">(*)</span></label>
						      <input type="text" class="form-control" id="email" placeholder="Email" name="email">
						    </div>
						    <div class="form-group">
						      <label for="taikhoan">Tài khoản: <span style="color: red;">(*)</span></label>
						      <input type="text" class="form-control" id="taikhoan" placeholder="Tài khoản" name="taikhoan">
						    </div>
						    <div class="form-group">
						      <label for="matkhau">Mật khẩu: <span style="color: red;">(*)</span></label>
						      <input type="password" class="form-control" id="matkhau" placeholder="Mật khẩu" name="matkhau">
						    </div>
						    <div class="form-group">
						      <label for="xnmk">Xác nhận mật khẩu: <span style="color: red;">(*)</span></label>
						      <input type="password" class="form-control" id="xnmk" placeholder="Xác nhận mật khẩu" name="xnmk">
						    </div>
						    <div class="form-group">
						      <label for="sdt">Số điện thoại: <span style="color: red;">(*)</span></label>
						      <input type="text" class="form-control" id="sdt" placeholder="Số điện thoại" name="sdt">
						    </div>
						    <div class="form-group">
						      <label for="diachi">Địa chỉ:</label>
						      <input type="text" class="form-control" id="diachi" placeholder="Địa chỉ" name="diachi">
						    </div>
						    <div class="form-group">
						      <label for="gioitinh">Giới tính:</label>
						      <select class="form-control" id="gioitinh" placeholder="DD/MM/YYYY" name="gioitinh">
						      	<option value="Nam">Nam</option>
						      	<option value="Nữ">Nữ</option>
						      </select>
						    </div>
						    <div class="form-group">
						      <label for="ngaysinh">Ngày sinh:</label>
						      <input type="text" class="form-control" id="ngaysinh" placeholder="DD/MM/YYYY" name="ngaysinh">
						    </div>
						    <div class="form-group">
						      <label for="vaitro">Vai trò: <span style="color: red;">(*)</span></label>
						      <select class="form-control" id="vaitro" name="vaitro">
						      	<option value="0">Người dùng cuối</option>
						      	<option value="1">Manager</option>
						      	<option value="2">Admin</option>
						      	<option value="3">Posts</option>
						      </select>
						    </div>
						    <div class="mess">
						    </div>
						    <button type="button" class="btn btn-primary" onclick="fromAddUser();">Đăng ký</button>
						  </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript">
	function fromAddUser()
	{
		var taikhoan=document.getElementById('taikhoan');
		var email=document.getElementById('email');
		var matkhau=document.getElementById('matkhau');
		var xnmk=document.getElementById('xnmk');
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
		pattern=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)(([a-zA-Z0-9]{3})|([a-zA-Z0-9]{3})(\.[a-zA-Z0-9]{2}))$/;
		if(pattern.test(email.value)==false){
			alert("Email không hợp lệ");
			email.focus();
			return false;
		}
		pattern=/^[a-zA-Z0-9]{6,}$/;
		if(pattern.test(taikhoan.value)==false){
			alert("Tài khoản phải có ít nhất 6 ký tự,không có khoảng trắng và ký tự đặc biệt");
			taikhoan.focus();
			return false;
		}
		pattern=/^[a-zA-Z0-9]{6,}$/;
		if(pattern.test(matkhau.value)==false){
			alert("Mật khẩu phải có ít nhất 6 ký tự,không có khoảng trắng và ký tự đặc biệt");
			matkhau.focus();
			return false;
		}
		if(xnmk.value!=matkhau.value){
			alert("Xác nhận mật khẩu không đúng");
			xnmk.focus();
			return false;
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
			url:"xulydangkyuser.php",
			data:{taikhoan:taikhoan.value,email:email.value,matkhau:matkhau.value,hoten:hoten.value,gioitinh:gioitinh,ngaysinh:ngaysinh,dienthoai:dienthoai.value,diachi:diachi,vaitro:vaitro},
			cache:false,
			success:function(results){
				$('.mess').html(results);
				taikhoan.value="";
				email.value="";
				matkhau.value="";
				xnmk.value="";
			}
		});
	}
</script>
</html>