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
					<div class="tble" style="margin-top: 2%;">
						<table class="table table-hover">
						    <thead>
						      <tr>
						        <th style="width: 10%;">STT</th>
						        <th style="width: 22%;">Mã đơn hàng</th>
						        <th>Tên khách hàng</th>
						        <th>Tổng tiền</th>
						        <th>Tình trạng</th>
						        <th></th>
						      </tr>
						    </thead>
						    <tbody>
						    	<?PHP
							    		$query="SELECT madh,tenkh,tongtien,tinhtrang FROM donhang WHERE makh={$_SESSION['user']['uid']} order by madh desc";
										$result=mysqli_query($dbc,$query);check_errors($result,$query);$i=1;
										while(list($madh,$tenkh,$tongtien,$tinhtrang)=mysqli_fetch_array($result,MYSQLI_NUM))
									    {?>
											<tr>
										      	<td>
										      		<?php echo $i++;?>
										      	</td>
										      	<td class="price">
													<a href="chitietdonhang.php?madonhang=<?php echo $madh;?>">
										      			<span>#<?php echo $madh;?><span>
										      		</a>
										      	</td>
										      	<td><?php echo ucwords($tenkh);?></td>
										      	<td>
										      			<?php echo number_format($tongtien,0,',','.');?> đ
										      	</td>
										      	<td>	<?php echo ucwords($tinhtrang);?></td>
										      	<td class="price">
										      		<a href="chitietdonhang.php?madonhang=<?php echo $madh;?>" style="color: red;">
										      			<i class="fa fa-angle-double-right "></i>Xem đơn hàng
										      		</a>
										      	</td>
									     	</tr>
									<?PHP }?>
						    </tbody>
				  		</table>
					</div>
				</div>
			</div>
	</div>
</div>
<?php  include("includes/footer.php");?>