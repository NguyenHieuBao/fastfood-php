<?php
	require("connect_db.php");
	include("check_errors.php");
	$data=$_POST['data'];
	$query_tk="SELECT tenkh,tongtien,tinhtrang,thoigiandathang FROM donhang WHERE madh=".$data;
	$result_tk=mysqli_query($dbc,$query_tk);check_errors($result_tk,$query_tk);$i=1;
	list($tenkh,$tongtien1,$tinhtrang,$thoigiandathang)=mysqli_fetch_array($result_tk,MYSQLI_NUM);
	if(mysqli_num_rows($result_tk)>=1)
	{?>
		<div class="tble" style="margin-top: 2%;">
			<table class="table table-hover">
				<thead>
					<tr>
						<th style="width: 5%;">STT</th>
						<th style="width: 22%;">Hình ảnh</th>
						<th>Tên sản phẩm</th>
						<th>Giá</th>
						<th>Số lượng</th>
						<th>Thành tiền</th>
					</tr>
				</thead>
				<tbody>
					<?PHP
						$query="SELECT tensp,masp,tongtien,gia,soluong,linkhinh FROM sanphamtrongdonhang WHERE madh=".$data;
						$result=mysqli_query($dbc,$query);check_errors($result,$query);$i=1;
						while(list($tensp,$masp,$tongtien,$gia,$soluong,$linkhinh)=mysqli_fetch_array($result,MYSQLI_NUM))
						{?>
							<tr>
								<td>
									<?php echo $i++;?>
								</td>
								<td>
									<a style="color: red;">
									    <img src="<?php echo $linkhinh;?>"style="margin-top: -6px;">
									</a>
								</td>
								<td><?php echo ucwords($tensp);?></td>
								<td>
									<?php echo number_format($gia,0,',','.');?>
								</td>
								<td><?php echo $soluong;?></td>
								<td class="price">
									<?php echo number_format($tongtien,0,',','.');;?> đ
								</td>
							</tr>
						<?PHP }?>
				</tbody>
			</table>
		</div>
		<div style="background-color:#f6f6f6;padding-right: 10px;">
			<div class="row">
				<div class="col-md-5">
					<div class="table_user_info">
						<label style="border-bottom: solid red 1px;">
							Thông tin giao hàng
						</label>
						<div>
							[Anh/Chị] <?php echo $tenkh;?>
						</div>
						<div>
							Thời gian đặt hàng: <?php echo $thoigiandathang;?>
						</div>
					</div>
				</div>
			<div class="col-md-7">
				<div class="table_info">
					<label style="font-size:17px;padding-left: 1%;">Tổng tiền thanh toán</label>
					<span style="float: right;color: red;font-size:19px;margin-bottom: 5px;padding-right: 1%;"><?php echo $tongtien1;?> đ</span>
					<div style="float: right;clear: both;margin-bottom: 15px;padding-right: 1%;">
						Bao gồm VAT
					</div>
					<div class="table_info_div">
						<p>Trạng thái đơn hàng</p>
						<p><?php echo $tinhtrang;?></p>
					</div>
				</div>
			</div>
		</div>
<?php }?>