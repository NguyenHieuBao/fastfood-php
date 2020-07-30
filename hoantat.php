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
		<div class="alert_success">
			<i class="fa-fw fa fa-check"></i>
			<strong>Success! </strong>
			<span>Đơn hàng của bạn đã được mua thành công</span>
		</div>
		<div class="pmnt_order_scc">
			<?php
				$query_tk="SELECT thoigiandathang,hinhthucthanhtoan,tongtien FROM donhang WHERE madh=".$_SESSION['user']['madh'];
				$result_tk=mysqli_query($dbc,$query_tk);check_errors($result_tk,$query_tk);
				list($time,$pay,$total_price)=mysqli_fetch_array($result_tk,MYSQLI_NUM);
			?>
			<div class="order_scc">
				<h3>Mã đơn hàng của bạn:<span style="color: red;"> #<?php echo $_SESSION['user']['madh'];?></span></h3>
				<p>
				    <b>Ngày đặt:</b><span> <?php echo $time;?></span>
				</p>
				<p>
					<b>Phương thức thanh toán:</b><span> <?php echo $pay;?></span>
				</p>
				<h4>
					Thông tin đơn hàng
				</h4>
				<table class="table table-hover">
				    <thead>
				      <tr>
				        <th style="width: 10%;">STT</th>
				        <th style="width: 22%;">Tên sản phẩm</th>
				        <th>Giá</th>
				        <th>Số lượng</th>
				        <th>Thành tiền</th>
				      </tr>
				    </thead>
				    <tbody>
				    <?PHP
				    	$query="SELECT masp,tensp,gia,soluong,tongtien,linkhinh FROM sanphamtrongdonhang WHERE madh=".$_SESSION['user']['madh'];
							$result=mysqli_query($dbc,$query);check_errors($result,$query);$i=1;
							while(list($masp,$tensp,$gia,$soluong,$tongtien,$linkhinh)=mysqli_fetch_array($result,MYSQLI_NUM))
						    {?>
								<tr>
							      	<td>
							      		<?php echo $i++;?>
							      	</td>
							      	<td>
							      		<span><?php echo ucwords($tensp);?><span>
							      	</td>
							      	<td class="price" style="color: black;"><?php echo number_format($gia,0,',','.');?> đ</td>
							      	<td>
							      		<?php echo $soluong;?>
							      	</td>
							      	<td class="price" style="color: black;"><?php echo number_format($tongtien,0,',','.');?> đ</td>
						     	</tr>
						<?PHP }?>
				    </tbody>
  				</table>
  				<div style="width: 100%;text-align: right;">
  					<label>TỔNG THANH TOÁN:</label>
  					<span style="color: red;font-size: 16px;margin-right: 8%;"><?php echo number_format($total_price,0,',','.');?> đ</span>
  				</div>
			</div>
		</div>
		<div class="btn_ctn">
  			<a href="sanpham.php"><input type="button" name="btn_buyitm" value="TIẾP TỤC MUA HÀNG" class="btn_buyitm"></a>
  			<a href="quanlydonhang.php"><input type="button" name="btn_prcitm" value="ĐƠN HÀNG CỦA TÔI" class="btn_prcitm"></a>
  		</div>
	</div>
</div>
<?php  include("includes/footer.php");?>