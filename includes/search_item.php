<?php
	require("connect_db.php");
	include("check_errors.php");
	if($_POST['page'])
	{
		$page = $_POST['page'];
		$name = $_POST['name'];
		$current_page = $page;
		$page -= 1;
		$limit=12;
		$start = $page * $limit;
	}
	$query_pg="SELECT COUNT(masp) FROM sanpham WHERE tensp like N'%$name%' or loaisp like N'%$name%' or gia like N'%$name%' or chitietsp like N'%$name%'";
	$result_pg=mysqli_query($dbc,$query_pg);
	check_errors($result_pg,$query_pg);
	list($record)=mysqli_fetch_array($result_pg,MYSQLI_NUM);
	if($record>$limit)
	{
		$per_page=ceil($record/$limit);
	}else{
		$per_page=1;
	}
	$query_tk="SELECT masp,tensp,gia,motasp,chitietsp,loaisp,linkhinh FROM sanpham WHERE tensp like N'%$name%' or loaisp like N'%$name%' or gia like N'%$name%' or chitietsp like N'%$name%' ORDER BY masp LIMIT {$start},{$limit}";
	$result_tk=mysqli_query($dbc,$query_tk);check_errors($result_tk,$query_tk);
	while(list($masp,$tensp,$gia,$motasp,$chitietsp,$loaisp,$linkhinh)=mysqli_fetch_array($result_tk,MYSQLI_NUM))
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
	<?PHP }?>
	<div style="width: 100%;text-align: center;clear: both;">
		<?php
			echo "<ul class='pagination click_page'>";
			if($per_page>1)
			{
				if($current_page!=1)
				{
					echo "<li page='".($current_page - 1)."'><a>BACK</a></li>";
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
						echo "<li page='".($current_page+1)."'><a>NEXT</a></li>";
					}
			}
			echo "</ul>";
		?>
	</div>
<script type="text/javascript">
	$(".click_page li").on('click',function(){
		var page = $(this).attr('page');
		searchItem(page);
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