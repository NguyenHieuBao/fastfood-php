<?php
	session_start();
	if(isset($_SESSION['user']['uid']))
	{
		include("includes/header_user.php");
	}
	else
	{
		 header('Location:index.php');
	}
	require("includes/connect_db.php");
	include("includes/check_errors.php");
	$url=$_SESSION['user']['uid'];
	$query_item="SELECT hoten,diachi,gioitinh,ngaysinh,dienthoai,vaitro,taikhoan,email FROM khachhang WHERE makh=".$url;
	$result_item=mysqli_query($dbc,$query_item);check_errors($result_item,$query_item);
	list($hoten,$diachi,$gioitinh,$ngaysinh,$dienthoai,$vaitro,$taikhoan,$email)=mysqli_fetch_array($result_item,MYSQLI_NUM);
?>
<div id="contain" style="margin-top: 2%;">
			<div class="row">
				<div class="col-md-3"  style="margin-bottom: 4%;">
					<?php 
						include('includes/selection_user.php');
					?>
				</div>
				<div class="col-md-9">
					<div style="background-color:#d74b33;float: left;color: white;">
						<h1 style="font-size: 24px; font-weight: normal; padding: 0 12px; text-align: left; margin: 0!important;line-height: 31px">
						    Thông tin tài khoản
					    </h1>
					</div>
					<div style="border-bottom:solid 1px #d74b33;clear: both;padding-top: 0.2%;"></div>
					<div id="form" class="col-md-8 col-md-offset-2 col-xs-12 col-sm-12 col-xs-offset-0 col-sm-offset-0">
						<form method="post" accept-charset="utf-8">
							<h2>
								Thông tin tài khoản
							</h2>
							<div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Tài khoản</label>
									<div class="col-sm-9">
										<label class="control-label ng-binding"><?php echo $taikhoan?></label>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Email</label>
									<div class="col-sm-9">
										<label class="control-label ng-binding"><?php echo $email?></label>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Mật khẩu</label>
									<div class="col-sm-9">
										<label class="control-label ng-binding">
											***
											<a href="thaydoimatkhau.php" style="color: #d74b33;">
												<i class="fa fa-edit"></i>
											</a>
										</label>
									</div>
								</div>

							</div>
							<div style="clear: both;">
							</div>
				            <h2>
								Thông tin cá nhân
							</h2>
							<div class="form-group">
				                <label for="hoten" class="col-sm-3 control-label">Họ tên<span class="warning" style="color: red">(*)</span></label>
				                <div class="col-sm-9">
				                    <input type="text" class="form-control" name="hoten" id="hoten" value="<?php echo $hoten?>" />
				                </div>
				            </div>
							<div class="form-group">
				                <label for="dienthoai" class="col-sm-3 control-label">Điện thoại<span class="warning" style="color: red">(*)</span> </label>
				                <div class="col-sm-9">
				                    <input type="text" class="form-control" name="dienthoai" id="dienthoai" value="<?php echo $dienthoai?>" />
				                </div>
				            </div>
				            <div class="form-group">
				                <label class="col-sm-3 control-label">Giới tính </label>
				                <div class="col-sm-9">
				                	<select name="gioitinh" id="gioitinh" class="form-control" style="margin-bottom: 15px;">
				                		<?php
				                			if($gioitinh=='nam'){
				                		?>
				                				<option value="nam">Nam</option>
				                				<option value="nu">Nữ</option>
				                		<?php
				                			}else{
				                		?>
				                				<option value="nu">Nữ</option>
												<option value="nam">Nam</option>
										<?php
				                			}
				                		 ?>
				                	</select>
				                </div>
				            </div>
				            <div class="form-group">
				                <label for="ngaysinh" class="col-sm-3 control-label">Ngày sinh </label>
				                <div class="col-sm-9">
				                    <input type="text" class="form-control" value="<?php echo $ngaysinh?>" name="ngaysinh" id="ngaysinh" placeholder="Ngày/Tháng/Năm" />
				                </div>
				            </div>
				            <div class="form-group">
				                <label for="diachi" class="col-sm-3 control-label">Địa chỉ </label>
				                <div class="col-sm-9">
				                    <input type="text" class="form-control" name="diachi" id="diachi" value="<?php echo $diachi?>" />
				                </div>
				            </div>
				            <div class="mess">
				            </div>
				            <div class="btn">
				            	<input type="button" name="update" value="Cập nhật" onclick="fromRegister();">
				            </div>
						</form>
					</div>
				</div>
			</div>
		</div>
</div>
<script type="text/javascript">
	function fromRegister()
	{
		var hoten=document.getElementById('hoten');
		var gioitinh=document.getElementById('gioitinh').value;
		var ngaysinh=document.getElementById('ngaysinh').value;
		var dienthoai=document.getElementById('dienthoai');
		var diachi=document.getElementById('diachi').value;

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
			url:"xulythongtincanhan.php",
			data:{hoten:hoten.value,gioitinh:gioitinh,ngaysinh:ngaysinh,dienthoai:dienthoai.value,diachi:diachi},
			cache:false,
			success:function(results){
				$('.mess').html(results);
			}
		});
	}
</script>
<?php  include("includes/footer.php");?>