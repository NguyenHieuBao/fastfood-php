<?php  
	
					   session_start();
include("includes/header.php");
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
		        <th></th>
		      </tr>
		    </thead>
		    <tbody>
		     		<?php
					   function addCart($masp)
					   {
							if(isset($_SESSION['cart'][$masp]))
							{
								$qty=$_SESSION['cart'][$masp] + 1;
							}
							else
							{
								$qty=10;
							}
							$_SESSION['cart'][$masp]=$qty;
						   echo $_SESSION['cart'][$masp];
					   }
					?>
		    </tbody>
  		</table>
  		<div class="total">
  			<span>
  				<b>Tổng thanh toán:</b>
  			</span>
  			<span class="total_price">
  				127,000đ
  			</span>
  		</div>
  		<div class="btn_ctn">
  			<a href="sanpham.php"><input type="button" name="btn_buyitm" value="TIẾP TỤC MUA HÀNG" class="btn_buyitm"></a>
  			<a href="thanhtoan.php"><input type="button" name="btn_prcitm" value="TIẾN HÀNH THANH TOÁN" class="btn_prcitm"></a>
  		</div>
	</div>
</div>
</div>
<div></div>
<?php  include("includes/footer.php");?>