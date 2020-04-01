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
				<div class="prt_title">
					<div style="background-color:#d74b33;float: left;color: white;">
						<h1 style="font-size: 18px; font-weight: normal; padding: 0 12px; text-align: left; margin: 0!important;line-height: 31px">
						    Sản phẩm nổi bật
					    </h1>
					</div>
					<div style="border-bottom:solid 1px #d74b33;clear: both;padding-top: 0.2%;"></div>
				</div>
				<div class="row prt_lstmenu">
					<?php
						$query="SELECT masp,tensp,gia,motasp,chitietsp,loaisp,linkhinh FROM sanpham ORDER BY masp LIMIT 15,4";
						$result=mysqli_query($dbc,$query);check_errors($result,$query);
						while(list($masp,$tensp,$gia,$motasp,$chitietsp,$loaisp,$linkhinh)=mysqli_fetch_array($result,MYSQLI_NUM))
					    {?>
							<div class="col-md-3 col-sm-3 col-xs-12">
								<div class="product-item">
									<div class="prt_item_banner">
										<a href="chitietsanpham.php?san-pham=<?php echo $masp;?>">
											<img src=<?php echo $linkhinh;?>>
										</a>
									</div>
									<div class="prt_item_title">
										<a href="chitietsanpham.php?san-pham=<?php echo $masp;?>">
											<?php echo $tensp; ?>
										</a>
									</div>
									<div class="prt_item_price">
										<?php echo $gia; ?> ₫
									</div>
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