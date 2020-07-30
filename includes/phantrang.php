<?php
	require("connect_db.php");
	include("check_errors.php");
	if($_POST['page'])
	{
		$page = $_POST['page'];
		$current_page = $page;
		$page -= 1;
		$limit=12;
		$start = $page * $limit;
	}
	$query_pg="SELECT COUNT(masp) FROM sanpham";
	$result_pg=mysqli_query($dbc,$query_pg);
	check_errors($result_pg,$query_pg);
	list($record)=mysqli_fetch_array($result_pg,MYSQLI_NUM);
	if($record>$limit)
	{
		$per_page=ceil($record/$limit);
	}else{
		$per_page=1;
	}
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$now=date('Y-m-d H:i:s');
	$query_tk="SELECT masp,tensp,gia,motasp,chitietsp,loaisp,linkhinh FROM sanpham ORDER BY masp DESC LIMIT {$start},{$limit}";
	$result_tk=mysqli_query($dbc,$query_tk);check_errors($result_tk,$query_tk);
	while(list($masp,$tensp,$gia,$motasp,$chitietsp,$loaisp,$linkhinh)=mysqli_fetch_array($result_tk,MYSQLI_NUM))
    {
		$query_tk1="SELECT sum(khuyenmai.giatrikhuyenmai) FROM khuyenmai, sanphamkhuyenmai WHERE '{$now}'<=thoigianketthuc and '{$now}'>=thoigianbatdau and khuyenmai.makm=sanphamkhuyenmai.makm and sanphamkhuyenmai.masp={$masp} and khuyenmai.tinhtrang=1";
		$result_tk1=mysqli_query($dbc,$query_tk1);check_errors($result_tk1,$query_tk1);
		list($km)=mysqli_fetch_array($result_tk1,MYSQLI_NUM);
    	?>
		<div class="col-md-3 col-sm-3 col-xs-12" style="padding: 0;">
			<div class="product-item" style="position: relative;margin: 5px 3px 5px 0 ;">
				<div class="prt_item_banner" style="min-height: 146px;">
					<a href="chitietsanpham.php?san-pham=<?php echo $masp;?>" style="float: none;">
						<img src=<?php echo $linkhinh;?>>
					</a>
				</div>
				<div class="prt_item_title">
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
	<?PHP }?>
	<div style="width: 100%;text-align: center;clear: both;">
		<?php
			echo "<ul class='pagination click_page'>";
			if($per_page>1)
			{
				if($current_page!=1)
				{
					echo "<li page='".($current_page - 1)."'><a>Trở về</a></li>";
				}
				for($i=1;$i<=$per_page;$i++)
				{
					if($i!=$current_page)
					{
						echo "<li page='".$i."'><a>{$i}</a></li>";
					}
					else{
						echo "<li class='active' page='".$i."'><a>{$i}</a></li>";
					}
				}
					if($current_page!=$per_page)
					{
						echo "<li page='".($current_page+1)."'><a>Tiếp</a></li>";
					}
			}
			echo "</ul>";
		?>
	</div>
<script type="text/javascript">
	$(".click_page li").on('click',function(){
		var page = $(this).attr('page');
		phantrang(page);
	});
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