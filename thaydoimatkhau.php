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
<style type="text/css" media="screen">
	.form-control{
		width: 60%;
	}
</style>
	<div id="contain" style="margin-top: 2%;">
			<div class="row">
				<div class="col-md-3"  style="margin-bottom: 4%;">
					<?php 
						include('includes/selection_user.php');
					?>
				</div>
				<div class="col-md-9">
					<div style="background-color:#d74b33;float: left;color: white;">
						<h1 style="font-size: 21px; font-weight: normal; padding: 0 12px; text-align: left; margin: 0!important;line-height: 31px">
						    Thay đổi mật khẩu
					    </h1>
					</div>
					<div style="border-bottom:solid 1px #d74b33;clear: both;padding-top: 0.2%;"></div>
						<form>
							<div class="form-group">
				                <label for="mkc" class="col-sm-4 control-label" style="text-align:right;">Mật khẩu cũ </label>
				                <div class="col-sm-8">
				                    <input type="password" class="form-control" name="mkc" id="mkc" />
				                </div>
				            </div>
							<div class="form-group">
				                <label for="mkm" class="col-sm-4 control-label" style="text-align:right;">Mật khẩu mới</label>
				                <div class="col-sm-8">
				                    <input type="password" class="form-control" name="mkm" id="mkm" />
				                </div>
				            </div>
				            <div class="form-group">
				                <label for="xnmk" class="col-sm-4 control-label" style="text-align:right;">Xác nhận mật khẩu</label>
				                <div class="col-sm-8">
				                    <input type="password" class="form-control" name="xnmk" id="xnmk" />
				                </div>
				            </div>
				            <div class="form-group">
				            	<div class="col-sm-4 control-label"></div>
				            	<div class="col-sm-8 messlogin"></div>
				            </div>
				            <div class="btn">
				            	<input type="button" name="ktdn" value="Cập nhật" onclick="changePass(<?php echo $_SESSION['user']['uid'];?>);">
				            </div>
						</form>
				</div>
			</div>
	</div>
</div>
<script type="text/javascript">
	function changePass(makh)
	{
		var mkc=document.getElementById('mkc');
		var mkm=document.getElementById('mkm');
		var xnmk=document.getElementById('xnmk');
		pattern=/^[a-zA-Z0-9]{6,}$/;
		if(pattern.test(mkc.value)==false){
			alert("Mật khẩu cũ phải có ít nhất 6 ký tự,không có khoảng trắng và ký tự đặc biệt");
			mkc.focus();
			return false;
		}
		pattern=/^[a-zA-Z0-9]{6,}$/;
		if(pattern.test(mkm.value)==false){
			alert("Mật khẩu phải có ít nhất 6 ký tự,không có khoảng trắng và ký tự đặc biệt");
			mkm.focus();
			return false;
		}
		if(xnmk.value!=mkm.value){
			alert("Xác nhận mật khẩu không đúng");
			xnmk.focus();
			return false;
		}
		$.ajax({
			type:"POST",
			url:"includes/change_password.php",
			data:{mkc:mkc.value,mkm:mkm.value,makh:makh},
			cache:false,
			success:function(results){
				$('.messlogin').html(results);
				mkc.value="";
				mkm.value="";
				xnmk.value="";
			}
		});
	}
</script>
<?php  include("includes/footer.php");?>