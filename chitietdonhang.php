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
			<div class="row">
				<div class="col-md-3"  style="margin-bottom: 4%;">
					<?php 
						include('includes/selection_user.php');
					?>
				</div>
				<div class="col-md-9">
					<div style="background-color:#d74b33;float: left;color: white;">
						<h1 style="font-size: 20px; font-weight: normal; padding: 0 12px; text-align: left; margin: 0!important;line-height: 31px">
						    Đơn hàng của tôi
					    </h1>
					</div>
					<div style="border-bottom:solid 1px #d74b33;clear: both;padding-top: 0.2%;"></div>
					<?PHP
						$query_tk="SELECT tenkh,tongtien,tinhtrang,thoigiandathang FROM donhang WHERE madh=".$_GET['madonhang'];
						$result_tk=mysqli_query($dbc,$query_tk);check_errors($result_tk,$query_tk);$i=1;
						list($tenkh,$tongtien1,$tinhtrang,$thoigiandathang)=mysqli_fetch_array($result_tk,MYSQLI_NUM);
					?>
					<div>
						Đơn hàng của <?php echo $tenkh;?> (#<?php echo $_GET['madonhang'];?>) lúc <?php echo $thoigiandathang;?>
					</div>
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
									$query="SELECT tensp,masp,tongtien,gia,soluong,linkhinh FROM sanphamtrongdonhang WHERE madh=".$_GET['madonhang'];
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
									      		<?php echo number_format($tongtien,0,',','.');?> đ
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
										THÔNG TIN GIAO HÀNG
									</label>
									<div>
										[Anh/Chị] <?php echo $tenkh;?>
									</div>
									<div>
										<?php echo $_SESSION['user']['email'];?> | |
									</div>
								</div>
							</div>
							<div class="col-md-7">
								<div class="table_info">
						  			<label style="font-size:17px;padding-left: 1%;">Tổng tiền thanh toán</label>
						  			<span style="float: right;color: red;font-size:19px;margin-bottom: 5px;padding-right: 1%;"><?php echo number_format($tongtien1,0,',','.');?> đ</span>
						  			<div style="float: right;clear: both;margin-bottom: 15px;padding-right: 1%;">
						  				Bao gồm VAT
						  			</div>
						  			<div class="table_info_div">
						  				<p>Trạng thái đơn hàng</p>
						  				<p><?php echo ucwords($tinhtrang);?></p>
						  			</div>
					  			</div>
							</div>
						</div>
					</div>
					<div class="btn_detail_table">
					  	<a href="quanlydonhang.php" class="btn_detail_table1">
					  		TRỞ VỀ DANH SÁCH ĐƠN HÀNG
					  	</a>
					  	<a href="sanpham.php" class="btn_detail_table2">
					  		TIẾP TỤC MUA HÀNG
					  	</a>
					</div>
				</div>
			</div>
		</div>
</div>
<?php  include("includes/footer.php");?>