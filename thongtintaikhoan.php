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
						    THÔNG TIN TÀI KHOẢN
					    </h1>
					</div>
					<div style="border-bottom:solid 1px #d74b33;clear: both;padding-top: 0.2%;"></div>
					<div id="form" class="col-md-8 col-md-offset-2 col-xs-12 col-sm-12 col-xs-offset-0 col-sm-offset-0">
						<form action="" method="get" accept-charset="utf-8">
							<h2>
								Thông tin tài khoản
							</h2>
							<div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Tài khoản</label>
									<div class="col-sm-9">
										<label class="control-label ng-binding">nguyenhieubao2407@gmail.com</label>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">Email</label>
									<div class="col-sm-9">
										<label class="control-label ng-binding">nguyenhieubao2407@gmail.com</label>
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
				                <label for="hoten" class="col-sm-3 control-label">Họ tên</label>
				                <div class="col-sm-9">
				                    <input type="text" class="form-control" name="hoten" id="hoten" />
				                </div>
				            </div>
				            <div class="form-group">
				                <label class="col-sm-3 control-label">Giới tính </label>
				                <div class="col-sm-9">
				                	<select name="gioitinh" class="form-control" style="margin-bottom: 15px;">
				                		<option value="nam">Nam</option>
				                		<option value="nu">Nữ</option>
				                	</select>
				                </div>
				            </div>
				            <div class="form-group">
				                <label for="ngaysinh" class="col-sm-3 control-label">Ngày sinh </label>
				                <div class="col-sm-9">
				                    <input type="text" class="form-control" name="ngaysinh" id="ngaysinh" placeholder="DD/MM/YYYY" />
				                </div>
				            </div>
							<div class="form-group">
				                <label for="dienthoai" class="col-sm-3 control-label">Điện thoại </label>
				                <div class="col-sm-9">
				                    <input type="text" class="form-control" name="dienthoai" id="dienthoai" />
				                </div>
				            </div>
				            <div class="form-group">
				                <label for="diachi" class="col-sm-3 control-label">Địa chỉ </label>
				                <div class="col-sm-9">
				                    <input type="text" class="form-control" name="diachi" id="diachi" />
				                </div>
				            </div>
				            <div class="btn">
				            	<input type="submit" name="update" value="Cập nhật">
				            </div>
						</form>
					</div>
				</div>
			</div>
		</div>
</div>
<?php  include("includes/footer.php");?>