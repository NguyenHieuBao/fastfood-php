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
?>
			<div id="slide">
				<div id="container">
						<div id="slideshow" class="cycle-slideshow" 
							data-cycle-fx="fade" 
							data-cycle-manual-fx="scrollHorz" 
							data-cycle-pager-fx = "fade" 
							data-cycle-manual-speed="860"
							data-cycle-prev="#prev"  	
							data-cycle-next="#next"
							data-cycle-speed="800"  
							data-cycle-timeout="3000" 
							data-cycle-pager = "#pager" 
							data-cycle-pager-template="<a href='#'><img src='{{src}}' width=150 height=100></a>"
				         	<img src="IMAGES/lm5.jpg" id="intro_img"/>
				         	<img src="IMAGES/slide_1.jpg" id="intro_img"/>
							<img src="IMAGES/slide_2.jpg" id="intro_img"/>
    					 </div>
       				<div id="pager"></div>
				</div>
			</div>
			<div id="banner">
				<img src="IMAGES/banner_top.jpg">
			</div>
			<div id="md_product">
				<div class="prt_title" style="padding: 10px 0 5px 0px;">
					<div style="background-color:#d74b33;float: left;color: white;">
						<h1 style="font-size: 18px; font-weight: normal; padding: 0 12px; text-align: left; margin: 0!important;line-height: 31px">
						    Sản phẩm nổi bật
					    </h1>
					</div>
					<div style="border-bottom:solid 1px #d74b33;clear: both;padding-top: 0.2%;"></div>
				</div>
				<div class="row prt_lstmenu">
					<?php
						date_default_timezone_set('Asia/Ho_Chi_Minh');
						$now=date('Y-m-d H:i:s');
						$query="SELECT *, SUM(SoLuong) from sanphamtrongdonhang GROUP BY Masp ORDER BY SUM(SoLuong) DESC LIMIT 4";
						$result=mysqli_query($dbc,$query);check_errors($result,$query);
						while(list($masp,$madh,$tensp,$gia,$soluong,$tongtien,$linkhinh,$sum)=mysqli_fetch_array($result,MYSQLI_NUM))
					    {
					    	$query_tk1="SELECT sum(khuyenmai.giatrikhuyenmai) FROM khuyenmai, sanphamkhuyenmai WHERE '{$now}'<=thoigianketthuc and '{$now}'>=thoigianbatdau and khuyenmai.makm=sanphamkhuyenmai.makm and sanphamkhuyenmai.masp={$masp} and khuyenmai.tinhtrang=1";
							$result_tk1=mysqli_query($dbc,$query_tk1);check_errors($result_tk1,$query_tk1);
							list($km)=mysqli_fetch_array($result_tk1,MYSQLI_NUM);
					?>
							<div class="col-md-3 col-sm-3 col-xs-12">
								<div class="product-item">
									<div class="prt_item_banner">
										<a href="chitietsanpham.php?san-pham=<?php echo $masp;?>" style="float: none;">
											<img src=<?php echo $linkhinh;?>>
										</a>
									</div>
									<div class="prt_item_title" style="margin-top: 2%;">
										<a href="chitietsanpham.php?san-pham=<?php echo $masp;?>">
											<?php echo ucwords($tensp); ?>
										</a>
									</div>
									<?php
										if(isset($km)){
									?>
										<div class="prt_item_price">
											<span style="text-decoration: line-through;"> <?php echo number_format($gia,0,',','.'); ?> ₫ </span>
											<span style="color: red;">
												<?php echo number_format(($gia-($gia*$km)/100),0,',','.'); ?> ₫
											</span>
										</div>
									<?php
										}else{
									?>
											<div class="prt_item_price">
												<?php echo number_format($gia,0,',','.'); ?> ₫
											</div>
									<?php
										}
									?>
									<div class="prt_item_buy" onclick="addCart(<?php echo $masp;?>);" style="cursor: pointer;">
										<a>
											MUA HÀNG
										</a>
										<img src="IMAGES/addcart2.png">
									</div>
								</div>
							</div>
						<?PHP }
					?>
				</div>
			</div>
		<div id="contain">
			<div class="row">
				<div class="col-md-3">
					<?php  include("includes/product_banner.php");?>
					<?php  include("includes/product_posts.php");?>
				</div>
				<div class="col-md-9">
					<div style="background-color:#d74b33;float: left;color: white;">
						<h1 style="font-size: 18px; font-weight: normal; padding: 0 12px; text-align: left; margin: 0!important;line-height: 31px">
						    Sản phẩm
					    </h1>
					</div>
					<div style="border-bottom:solid 1px #d74b33;clear: both;padding-top: 0.2%;"></div>
					<div class="product-wrapper row">
						<script type="text/javascript">
							function phantrang(page){
								$.ajax({
							        type:"POST",
							        url:"includes/phantrang.php",
							        data:"page="+page,
							        cache:false,
							        success:function(results){
							            $('.product-wrapper').html(results);
							        }
							    });
							}
							phantrang(1);
						</script>
					</div>
					<?php  include("includes/news_product.php");?>
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
	</script>
<?php  include("includes/footer.php");?>