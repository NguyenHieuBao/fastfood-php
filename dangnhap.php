<?php
	session_start();
	if(isset($_SESSION['user']['uid']))
	{
	    header('Location:index.php');
	}
	include("includes/header.php");
?>
<?php
	require("includes/connect_db.php");
	include("includes/check_errors.php");
	if(isset($_POST['submit']))
	{
	    $errors=array();
	    if(empty($_POST['taikhoan']))
	    {
	        $errors[]='taikhoan';
	    }else
	    {
	        $taikhoan=$_POST['taikhoan'];
	    }
	     if(empty($_POST['matkhau']))
	    {
	        $errors[]='matkhau';
	    }else
	    {
	        $matkhau=md5($_POST['matkhau']);
	    }
	    if(empty($errors))
	    {
	        $query_item="SELECT makh,taikhoan,email,diachi,hoten,dienthoai FROM khachhang WHERE taikhoan='".$taikhoan."' and matkhau='".$matkhau."' and trangthai=1 and vaitro=0";
			$result_item=mysqli_query($dbc,$query_item);check_errors($result_item,$query_item);
	        if(mysqli_num_rows($result_item)==1)
	        {
	            list($id,$user,$email,$diachi1,$hoten1,$dienthoai1)=mysqli_fetch_array($result_item,MYSQLI_NUM);
		        $_SESSION['user']['uid']=$id;
		        $_SESSION['user']['taikhoan']=$user;
		        $_SESSION['user']['email']=$email;
		        $_SESSION['user']['diachi']=$diachi1;
		        $_SESSION['user']['hoten']=$hoten1;
		        $_SESSION['user']['dienthoai']=$dienthoai1;
	            header('Location:index.php');
	        }
	        else
	        {
	        	 $errors[]='error';
	        }
	    }else{
	    }
	}
?>
<div id="contain" style="margin-top: 2%;">
			<div class="row">
				<div class="col-md-3">
					<?php  include("includes/selection_list.php");?>
				</div>
				<div class="col-md-9">
					<div style="background-color:#d74b33;float: left;color: white;">
						<h1 style="font-size: 24px; font-weight: normal; padding: 0 12px; text-align: left; margin: 0!important;line-height: 31px">
						    ĐĂNG NHẬP
					    </h1>
					</div>
					<div style="border-bottom:solid 1px #d74b33;clear: both;padding-top: 0.2%;"></div>
					<div id="form" class="col-md-8 col-md-offset-2 col-xs-12 col-sm-12 col-xs-offset-0 col-sm-offset-0">
						<form method="POST" name="login">
							<div class="form-group">
				                <label for="taikhoan" class="col-sm-4 control-label" style="text-align:right;">Tài khoản </label>
				                <div class="col-sm-8">
				                    <input type="text" class="form-control" name="taikhoan" id="taikhoan" />
				                </div>
				            </div>
							<div class="form-group">
				                <label for="matkhau" class="col-sm-4 control-label" style="text-align:right;">Mật khẩu </label>
				                <div class="col-sm-8">
				                    <input type="password" class="form-control" name="matkhau" id="matkhau" />
				                </div>
				            </div>
				            <div class="form-group">
				            	<div class="col-sm-4 control-label"></div>
				            	<div class="col-sm-8 messlogin">
						            <?php
						            	if(isset($errors)&&in_array('error',$errors))
									    {
									        echo "<b style='color:red;'>Tài khoản hoặc mật khẩu không chính xác!!!</b>";
									    }
						             ?>
						        </div>
				            </div>
				            <div class="btn">
				            	<input type="submit" name="submit" value="Đăng nhập">
				            </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function login()
		{
			var taikhoan=document.getElementById('taikhoan');
			var matkhau=document.getElementById('matkhau');
			if(taikhoan.value=="")
			{
				alert("Vui lòng nhập tài khoản");
				taikhoan.focus();
				return false;
			}
			else if(matkhau.value=="")
			{
				alert("Vui lòng nhập mật khẩu");
				matkhau.focus();
				return false;
			}
			else
			{
				$.ajax({
					type:"POST",
					url:"includes/xulydangnhap.php",
					data:{taikhoan:taikhoan.value,matkhau:matkhau.value},
					cache:false,
					success:function(results){
						$('.messlogin').html(results);
						taikhoan.value="";
						matkhau.value="";
					}
				});
			}
		}
	</script>
<?php  include("includes/footer.php");?>