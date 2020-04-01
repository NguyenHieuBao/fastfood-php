<?php
	session_start();
	if(isset($_SESSION['user']['uid']))
	{
		include("includes/header_user.php");
	}
	else
	{
		include("includes/header.php");
	}
	include("includes/connect_db.php");
	include("includes/check_errors.php");
	if(isset($_GET['san-pham']) && $_GET['san-pham']!=null)
	{
		$url=$_GET['san-pham'];
		$query_item="SELECT masp,tensp,gia,motasp,chitietsp,loaisp,linkhinh FROM sanpham WHERE masp=".$url;
		$result_item=mysqli_query($dbc,$query_item);check_errors($result_item,$query_item);
		if(mysqli_num_rows($result_item)<1)
		{
			header('location:index.php');
		}
		list($masp,$tensp,$gia,$motasp,$chitietsp,$loaisp,$linkhinh)=mysqli_fetch_array($result_item,MYSQLI_NUM);
	}else{
		header('location:index.php');
	}
?>
	<div id="contain" style="margin-top: 2%;">
		<div class="row">
			<div class="col-md-3">
				<div class="list_detail_item">
					<h3>
						CHÍNH SÁCH BÁN HÀNG
					</h3>
					<div>
						<ul>
							<li>
								<span>1</span>  Giao hàng TOÀN QUỐC
							</li>
							<li>
								<span>2</span>  Thanh toán khi nhận hàng
							</li>
							<li>
								<span>3</span>  Đổi trả trong 15 ngày
							</li>
							<li>
								<span>4</span>  Hoàn ngay tiền mặt
							</li>
							<li>
								<span>5</span>  Chất lượng đảm bảo
							</li>
							<li>
								<span>6</span>  Miễn phí vận chuyển:Đơn hàng từ 3 món trở lên
							</li>
						</ul>
					</div>
				</div>
					<div class="list_banner_detail" style="margin-bottom: 5%;">
						<div class="ctn_product_ttl">
						    <span>
							  SẢN PHẨM HOT
						    </span>
						    <span style="float: right;margin-right: 5%;" >
						    	<img src="IMAGES/icon_vmega.png">
						    </span>
					    </div>
					    <?php
						$query="SELECT masp,tensp,gia,motasp,chitietsp,loaisp,linkhinh FROM sanpham ORDER BY masp LIMIT 7,4";
						$result=mysqli_query($dbc,$query);check_errors($result,$query);
						while(list($masp1,$tensp1,$gia1,$motasp1,$chitietsp1,$loaisp1,$linkhinh1)=mysqli_fetch_array($result,MYSQLI_NUM))
					    {?>
							<div class="item_1_detail">
								<div class="imge_dtl">
									<a href="chitietsanpham.php?san-pham=<?php echo $masp1;?>">
										<img src=<?php echo $linkhinh1;?>>
									</a>
								</div>
								<div class="name_dtl">
									<a href="chitietsanpham.php?san-pham=<?php echo $masp1;?>"><?php echo $tensp1;?></a>
								</div>
								<div class="price_dtl" style="color: #d74b33;font-size: 16px;">
									<?php echo $gia1;?> ₫
								</div>
								<div class="buy_dtl" style="margin-top: 4%;">
									<input type="button" name="buyitem" value="Mua" onclick="addCart(<?php echo $masp1;?>);">
								</div>
							</div>
						<?PHP }
						?>
					</div>
				</div>
			<div class="col-md-9">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12 product-image clearfix pic">
						<a href="chitietsanpham.php?san-pham=<?php echo $masp;?>"><img src=<?php echo $linkhinh;?>></a>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 clearfix" style="text-align: left;">
						<div>
							<h2 style="font-weight: both;margin-top:0;"><?php echo $tensp;?></h2>
						</div>
						<div>
							<span style="color:red;font-size:26px; "><?php echo $gia;?>đ</span>
						</div>
						<div>
							<span style="font-size:22px;font-weight: both; ">Mã SP: #<?php echo $masp;?></span>
						</div>
						<div style="border-bottom: solid #dddddd 1px;margin-top: 4%;"></div>
						<div style="padding-top: 18px;">
							<?php echo $motasp;?>
						</div>
						<div style="border-bottom: solid #dddddd 1px;margin-top: 4%;"></div>
						<div style="margin-top: 15px;">
							<label style="font-size:16px;">Số lượng </label>
							<input type="number" id="soluong" name="item_amount" value="1" class="item_amount" min="1">
						</div>
						<div class="add_item_detail" onclick="editCartAjax(<?php echo $masp;?>);">
							<a>
								<i class="glyphicon glyphicon-shopping-cart"></i>
									 Thêm giỏ hàng
							</a>
						</div>
					</div>
				</div>
				<div class="posts_detail_dtl">
					<div class="posts_detail_dtl1">Chi tiết sản phẩm</div>
					<div class="posts_detail_dtl2">
						<?php echo $chitietsp;?>
						<div style="margin-top: 2%;">
							<img src=<?php echo $linkhinh;?>>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	function addCart(masp)
	{
		$.ajax({
			type:"POST",
			url:"includes/addCart.php",
			data:"id="+masp,
			cache:false,
			success:function(){
				alert("Bạn đã thêm vào giỏ hàng thành công");
			}
		});
	}
	function editCartAjax(masp)
	{
		var soluong=document.getElementById('soluong').value;
		$.ajax({
			type:"POST",
			url:"includes/amount_item.php",
			data:{id:masp,soluong:soluong},
			cache:false,
			success:function(){
				alert("Đã thêm vào giỏ hàng thành công");
			}
		});
	}
</script>
<?php  include("includes/footer.php");?>