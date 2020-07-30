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
?>
	<div id="contain" style="margin-top: 2%;">
		<div style="background-color:#d74b33;float: left;color: white;">
			<h1 style="font-size: 20px; font-weight: normal; padding: 0 12px; text-align: left; margin: 0!important;line-height: 31px">
				Thanh toán
			</h1>
		</div>
		<div style="border-bottom:solid 1px #d74b33;clear: both;padding-top: 0.2%;"></div>
		<div class="steps clearfix">
		<ul class="mnu_cart">
			<li class="cart active col-md-2 col-xs-12 col-sm-4 col-md-offset-3 col-sm-offset-0 col-xs-offset-0" style="border-bottom: 2px solid #d74b33;">
				<span>
					<i class="glyphicon glyphicon-shopping-cart"></i>
				</span>
				<span>Giỏ hàng của tôi</span>
				<span class="step-number">
					<a>1</a>
				</span>
			</li>
			<li class="payment col-md-2 col-xs-12 col-sm-4" style="border-bottom-color: #d74b33;">
				<span style="color: #d74b33;">
					<i class="glyphicon glyphicon-usd"></i>
				</span>
				<span style="color: #d74b33;">Thanh toán</span>
				<span class="step-number">
					<a style="background-color:#d74b33;border-color: #d74b33;">2</a>
				</span>
			</li>
			<li class="finish col-md-2 col-xs-12 col-sm-4">
				<span>
					<i class="glyphicon glyphicon-ok"></i>
				</span>
				<span>Hoàn tất</span>
				<span class="step-number">
					<a>3</a>
				</span>
			</li>
		</ul>
	</div>
		<div class="row tt_item">
			<div class="col-md-4 col-sm-12 col-xs-12 payment-step step2">
				<h4>1. Địa chỉ thanh toán và giao hàng</h4>
				<div class="info_ctm">
					<h5>THÔNG TIN THANH TOÁN</h5>
					<div class="info">
						<label>Người nhận:
							<span><?php echo $_SESSION['user']['hoten'];?></span>
						</label>
						<label>Điện thoại:
							<span><?php echo $_SESSION['user']['dienthoai'];?></span>
						</label>
						<label>Email:
							<span><?php echo $_SESSION['user']['email'];?></span>
						</label>
						<label>Địa chỉ:
							<span><?php echo $_SESSION['user']['diachi'];?></span>
						</label>
					</div>
					<h5>THÔNG TIN THANH TOÁN</h5>
					<div>
						<label style="font-weight: normal;padding-left: 10px;">
							<input type="checkbox" name="add_check_oth" value="dc_gh" id="add_check_oth" onchange="change_info();">
							Giao hàng địa chỉ khác
						</label>
						<script type="text/javascript" charset="utf-8">
							function change_info()
							{
								var a=document.getElementById('add_check_oth');
								if (a.checked==true) {
									document.getElementById('info_other').style.display='block';
								}else{
									document.getElementById('info_other').style.display='none';
								}
							}
						</script>
					</div>
					<div class="info_other" id="info_other">
						<div class="form-group">
							<input type="text" class="form-control ng-pristine ng-valid ng-touched" id="name_oth" name="name_oth" value="" placeholder="Họ và tên">
						</div>
						<div class="form-group">
							<input type="text" class="form-control ng-pristine ng-valid ng-touched" id="phone_oth" name="phone_oth" value="" placeholder="Điện thoại">
						</div>
						<div class="form-group">
							<input type="text" class="form-control ng-pristine ng-valid ng-touched" id="addr_oth" name="addr_oth" id="addr_oth" value="" placeholder="Địa chỉ giao hàng">
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-12 col-xs-12 payment-step step2">
				<h4>2. Thanh toán và vận chuyển</h4>
				<div class="trsport">
					<h2>VẬN CHUYỂN</h2>
					<div class="form-group trsport_div">
						<select name="trsport_item" class="form-control ng-pristine ng-valid ng-touched" id="trsport_item">
							<option value="Xe máy">Xe máy</option>
							<option value="Xe đạp">Xe đạp</option>
						</select>
					</div>
					<h2>THANH TOÁN</h2>
					<div class="form-group trsport_div">
						<select name="pay_item" class="form-control ng-pristine ng-valid ng-touched" id="pay_item">
							<option value="Trực tiếp">TRỰC TIẾP</option>
							<option value="Ngân hàng">NGÂN HÀNG</option>
						</select>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-12 col-xs-12 payment-step step2">
				<h4>3. Thông tin đơn hàng</h4>
				<div class="info_order">
					<?PHP
						$d=0;
						if(isset($_SESSION['cart']))
						{
							foreach ($_SESSION['cart'] as $k => $v)
							{
								if(isset($k))
								{
									$d=1;
									$item[]=$k;
								}
							}
						}
						if($d == 1)
						{
							$totalprice=0;
							$str=implode(",",$item);
							$query="SELECT masp,tensp,gia,motasp,chitietsp,loaisp,linkhinh FROM sanpham WHERE masp in ($str)";
							$results=mysqli_query($dbc,$query);
							check_errors($results,$query);date_default_timezone_set('Asia/Ho_Chi_Minh');
							$now=date('Y-m-d H:i:s');
							while(list($masp,$tensp,$gia,$motasp,$chitietsp,$loaisp,$linkhinh)=mysqli_fetch_array($results,MYSQLI_NUM))
						    {
						    	$query_tk1="SELECT sum(khuyenmai.giatrikhuyenmai) FROM khuyenmai, sanphamkhuyenmai WHERE '{$now}'<=thoigianketthuc and '{$now}'>=thoigianbatdau and khuyenmai.makm=sanphamkhuyenmai.makm and sanphamkhuyenmai.masp={$masp} and khuyenmai.tinhtrang=1";
								$result_tk1=mysqli_query($dbc,$query_tk1);check_errors($result_tk1,$query_tk1);
								list($km)=mysqli_fetch_array($result_tk1,MYSQLI_NUM);
							    	$totalprice+=($gia-($gia*$km)/100)*$_SESSION['cart'][$masp];
						    ?>
								<div class="order">
									<span>
										<a href="#">
											<img src=<?php echo $linkhinh;?>>
										</a>
									</span>
									<div class="name_item">
										<a href="#"><?php echo ucwords($tensp).' x '.$_SESSION['cart'][$masp];?></a>
									</div>
									<span class="price_item price"><?php echo number_format(($gia-($gia*$km)/100)*$_SESSION['cart'][$masp],0,',','.');?> ₫</span>
								<div class="clear"></div>
								</div>
						    <?PHP } ?>
								<div class="ttl_price">
									<span class="prc">Thành tiền</span>
									<span class="mny_prc" style="font-weight: 600;font-size: 16px;"> <?php echo number_format($totalprice,0,',','.');?>₫</span>
								</div>
								<div class="ttl_price">
									<span class="prc">Phí VAT</span>
									<span class="mny_prc">30.000 ₫</span>
								</div>
								<div class="ttl_price">
									<span class="prc">Thanh toán</span>
									<span class="mny_prc" id="tltl_pr" style="color: red;font-size: 16px;">
										<?php echo number_format(($totalprice+30000),0,',','.');?>
									 ₫</span>
								</div>
								<div class="btn_order_div">
									<a>
										<input type="button" name="dathang" value="ĐẶT HÀNG" class="btn_order" onclick="check_address(<?php echo ($totalprice+30000);?>);">
									</a>
								</div>
						<?PHP }
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	function check_address(totalprice)
	{
		var check=document.getElementById('add_check_oth');
		var hoten=document.getElementById('name_oth');
		var dienthoai=document.getElementById('phone_oth');
		var diachi=document.getElementById('addr_oth');
		var vanchuyen=document.getElementById('trsport_item').value;
		var thanhtoan=document.getElementById('pay_item').value;
		if(check.checked==true || hoten.value!="" || dienthoai.value!="" || diachi.value!="")
		{
			if(hoten.value=="")
			{
				alert("Họ tên không hợp lệ");
				hoten.focus();
				return;
			}
			else{
				pattern=/\d/gi;
				if(pattern.test(hoten.value)==true){
					alert("Họ tên không hợp lệ");
					hoten.focus();
					return;
				}
			}
			pattern=/^[0-9]{10,12}$/;
			if(pattern.test(dienthoai.value)==false){
				alert("Số điện thoại không hợp lệ");
				dienthoai.focus();
				return;
			}
			if(diachi.value=="")
			{
				alert("Địa chỉ không hợp lệ");
				diachi.focus();
				return;
			}
			$.ajax({
				type:"POST",
				url:"includes/insert_user.php",
				data:{hoten:hoten.value,price:totalprice,dienthoai:dienthoai.value,diachi:diachi.value,vanchuyen:vanchuyen,thanhtoan:thanhtoan},
				cache:false,
				success:function(results){
					sessionStorage.clear();
					 window.location="hoantat.php";
				}
			});
		}
		else{
			$.ajax({
				type:"POST",
				url:"includes/insert_user.php",
				data:{vanchuyen:vanchuyen,thanhtoan:thanhtoan,price:totalprice},
				cache:false,
				success:function(results){
					sessionStorage.clear();
					 window.location="hoantat.php";
				}
			});
		}
	}
</script>
<?php  include("includes/footer.php");?>