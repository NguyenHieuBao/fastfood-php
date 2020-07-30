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
	require("includes/connect_db.php");
	include("includes/check_errors.php");
?>
<div id="contain" style="margin-top: 2%;">
	<div style="background-color:#d74b33;float: left;color: white;">
		<h1 style="font-size: 16px; font-weight: normal; padding: 0 12px; text-align: left; margin: 0!important;line-height: 31px">
			Giỏ hàng của tôi
		</h1>
	</div>
	<div style="border-bottom:solid 1px #d74b33;clear: both;padding-top: 0.2%;"></div>
	<?php include('includes/trinhtuthuchien.php');?>
	<div class="tble">
		<table class="table table-hover">
		    <thead>
		      <tr>
		        <th style="width: 10%;"></th>
		        <th style="width: 22%;">Tên sản phẩm</th>
		        <th>Giá</th>
		        <th>Số lượng</th>
		        <th>Thành tiền</th>
		        <th> Xóa</th>
		      </tr>
		    </thead>
		    <tbody>
				<?php
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
						date_default_timezone_set('Asia/Ho_Chi_Minh');
						$now=date('Y-m-d H:i:s');
						$str=implode(",",$item);
						$query="SELECT masp,tensp,gia,motasp,chitietsp,loaisp,linkhinh FROM sanpham WHERE masp in ($str)";
						$results=mysqli_query($dbc,$query);
						check_errors($results,$query);
						while(list($masp,$tensp,$gia,$motasp,$chitietsp,$loaisp,$linkhinh)=mysqli_fetch_array($results,MYSQLI_NUM))
					    {
					    	$query_tk1="SELECT sum(khuyenmai.giatrikhuyenmai) FROM khuyenmai, sanphamkhuyenmai WHERE '{$now}'<=thoigianketthuc and '{$now}'>=thoigianbatdau and khuyenmai.makm=sanphamkhuyenmai.makm and sanphamkhuyenmai.masp={$masp} and khuyenmai.tinhtrang=1";
							$result_tk1=mysqli_query($dbc,$query_tk1);check_errors($result_tk1,$query_tk1);
							list($km)=mysqli_fetch_array($result_tk1,MYSQLI_NUM);
					    	?>
							<tr id="#<?php echo $masp;?>">
						      	<td>
						      		<a>
						      			<img src=<?php echo $linkhinh;?>>
						      		</a>
						      	</td>
						      	<td>
									<a>
						      			<span><?php echo ucwords($tensp);?><span>
						      		</a>
						      	</td>
						      	<td class="price"><?php echo number_format(($gia-($gia*$km)/100),0,',','.'); ?>đ</td>
						      	<td>
						      		<script type="text/javascript">
						      			function sanpham(masp,gia)
										{
											this.masp=masp;
											this.gia=gia;
										}
										function addSession(masp,gia)
										{
											var a=new sanpham(masp,gia);var dem=0;
											var retrievedData = sessionStorage.getItem("addCart");
											var addCart = JSON.parse(retrievedData);
											if(addCart == null){
												addCart = new Array();
												addCart.push(a);
											}
											else{
												for (var i = 0; i < addCart.length; i++) {
													if(addCart[i].masp==masp)
													{
														dem++;
														addCart[i].gia=gia;
													}
												}
												if(dem==0)addCart.push(a);
											}
											sessionStorage.setItem("addCart", JSON.stringify(addCart));
										}
						      			addSession(<?php echo $masp;?>,<?php echo ($gia-($gia*$km)/100);?>);
						      		</script>
						      		<input type="number" name="item_amount" value="<?php echo $_SESSION['cart'][$masp];?>" class="item_amount" min="1" id="item_amount<?php echo $masp;?>" onkeyup="amountItem(<?php echo $masp;?>,<?php echo ($gia-($gia*$km)/100);?>);" onchange="amountItem(<?php echo $masp;?>,<?php echo ($gia-($gia*$km)/100);?>);">
						      	</td>
						      	<td class="price" id="price_tl<?php echo $masp;?>">
						      		<script type="text/javascript">
						      			function total_price()
										{
											var retrievedData = sessionStorage.getItem("addCart");
											var addCart = JSON.parse(retrievedData);
											var totalPrice=0;
											if(addCart == null){
											}
											else{
												for (var i = 0; i < addCart.length; i++) {
													totalPrice+=addCart[i].gia;
												}
											}
											sessionStorage.setItem('totalPrice', totalPrice);
											$('.total_price').html(totalPrice.toLocaleString()+' đ');
										}
										function editCartAjax(masp,soluong)
										{
											var retrievedData = sessionStorage.getItem("addCart");
											var addCart = JSON.parse(retrievedData);
											if(addCart == null){
											}
											else{
												$.ajax({
													type:"POST",
													url:"includes/amount_item.php",
													data:{id:masp,soluong:soluong},
													cache:false,
													success:function(){
													}
												});
											}
										}
						      			function amountItem(masp,gia)
										{
											var id='item_amount'+masp;
											var id2='price_tl'+masp;
											var a=document.getElementById(id).value;
											if(a>=1)
											{
												var price=gia*a;
											}
											else{
												var price=gia*0;
											}
											addSession(masp,price);
											total_price();
											editCartAjax(masp,a);
						      				document.getElementById(id2).innerHTML=price.toLocaleString()+' đ';
										}
						      			amountItem(<?php echo $masp;?>,<?php echo ($gia-($gia*$km)/100);?>);
						      		</script>
						      	</td>
						      	<td class="price">
									<script type="text/javascript">
										function delete_session(masp)
										{
											var retrievedData = sessionStorage.getItem("addCart");
											var addCart = JSON.parse(retrievedData);
											if(addCart == null){
											}
											else{
												$.ajax({
													type:"POST",
													url:"includes/delete_cart.php",
													data:{id:masp},
													cache:false,
													success:function(){
														alert("Bạn đã xóa thành công");
													}
												});
											}
										}
										function deleteCart(masp)
										{
											var str='#'+masp;
											var a=new Array();var j=0;
											document.getElementById(str).style.display='none';
											var retrievedData = sessionStorage.getItem("addCart");
											var addCart = JSON.parse(retrievedData);
											for (var i = 0; i < addCart.length; i++) {
												if(addCart[i].masp==masp)
												{
													continue;
												}
												else{
													a[j++]=new sanpham(addCart[i].masp,addCart[i].gia);
												}
											}
											sessionStorage.setItem("addCart", JSON.stringify(a));
											delete_session(masp);
											total_price();
										}
									</script>
						      		<i class="glyphicon glyphicon-trash" onclick="deleteCart(<?php echo $masp;?>);"></i>
						      	</td>
				     		</tr>
						<?PHP }
					}
				?>
		    </tbody>
  		</table>
  		<div class="total">
  			<span>
  				<b>Tổng thanh toán:</b>
  			</span>
  			<span class="total_price" id="total_price">
  				<script type="text/javascript">
					total_price();
  				</script>
  			</span>
  		</div>
  		<div class="btn_ctn">
  			<a href="sanpham.php"><input type="button" name="btn_buyitm" value="TIẾP TỤC MUA HÀNG" class="btn_buyitm"></a>
  			<?php
  				if(isset($_SESSION['user']['uid']))
  				{
  					$makh= $_SESSION['user']['uid'];
  				} else {
  					$makh='0';
  				}
  			?>
  			<a><input type="button" name="btn_prcitm" value="TIẾN HÀNH THANH TOÁN" class="btn_prcitm" onclick="thanhtoan(<?php echo $makh;?>);"></a>
  		</div>
	</div>
</div>
</div>
<script type="text/javascript">
	function thanhtoan(makh)
	{
		var retrievedData = sessionStorage.getItem("addCart");
		var addCart = JSON.parse(retrievedData);
		if(addCart == ""){
			alert("Bạn cần mua sản phẩm để thanh toán");
		}
		else if(makh=="0")
		{
			alert("Bạn cần đăng nhập để thanh toán");
		}
		else{
			 window.location="thanhtoan.php";
		}
	}
</script>
<?php  include("includes/footer.php");?>