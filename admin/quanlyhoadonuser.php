	<?php
		session_start();
		if(isset($_SESSION['usr']['uid']))
		{
			include("includes/header.php");
		}
		else
		{
			 header('Location:login.php');
		}
		require("../includes/connect_db.php");
		include("../includes/check_errors.php");
	?>
		<div id="mid">
			<div class="row" style="width: 100%;">
				<div class="col-sm-2">
					<?php
						if($_SESSION['usr']['vaitro']==2)
						{
							include('includes/menu_left1.php');
						}
						else if($_SESSION['usr']['vaitro']==1){
							include('includes/menu_left.php');
						}
						else if($_SESSION['usr']['vaitro']==3)
						{
							 include('includes/menu_left3.php');
						}
					?>
				</div>
				<div class="col-sm-10">
					<div style="background-color:white;margin-right: -29px;margin-left: -15px;color: black;padding: 40px;">
						<h3>Quản lý đơn hàng</h3>
						<div class="input-group" style="width: 30%;float: right;">
					      <input type="text" class="form-control" placeholder="Tìm kiếm" name="search" id="search_user">
					      <div class="input-group-btn">
					        <button class="btn btn-default" type="button" onclick="searchUser();"><i class="glyphicon glyphicon-search"></i></button>
					      </div>
					    </div>
					    <div style="clear: both;margin: 6%;"></div>
						<table class="table table-hover">
						    <thead>
						      <tr>
						        <th>Mã đơn hàng</th>
						        <th>Họ tên</th>
						        <th>Tổng tiền</th>
						        <th>Thời gian đặt</th>
						        <th>Vận chuyển</th>
						        <th>Thanh toán</th>
						        <th>Tình trạng</th>
						        <th>Khách hàng</th>
						        <th>Sản phẩm</th>
						        <th style="width: 9%;text-align: center;">Sửa</th>
						      </tr>
						    </thead>
						    <tbody>
						    	<?PHP
						    			$stt=1;
							    		$query="SELECT madh,makh,tenkh,tongtien,tinhtrang,thoigiandathang,hinhthucvanchuyen,hinhthucthanhtoan FROM donhang order by madh desc";
										$result=mysqli_query($dbc,$query);check_errors($result,$query);$i=1;
										while(list($madh,$makh,$hoten,$tongtien,$tinhtrang,$thoigiandathang,$hinhthucvanchuyen,$hinhthucthanhtoan)=mysqli_fetch_array($result,MYSQLI_NUM))
									    {?>
											<tr>
										      	<td>
										      		<?php echo $madh;?>
										      	</td>
										      	<td>
													<?php echo $hoten;?>
										      	</td>
										      	<td>
										      		<?php echo $tongtien;?> đ
										      	</td>
										      	<td>
										      		<?php echo $thoigiandathang;?>
										      	</td>
										      	<td>
										      			<?php echo $hinhthucvanchuyen;?>
										      	</td>
										      	<td>
										      		<?php echo $hinhthucthanhtoan;?>
										      	</td>
										      	<td>
										      			<?php
										      				if($tinhtrang=='chưa')
												      		{
										      					echo "<b style='color:red'>".$tinhtrang."</b>";
												      		}
												      		else if($tinhtrang=='đang giao'){
														      	echo "<b style='color:green'>".$tinhtrang."</b>";
												      		}else if($tinhtrang=='đã giao'){
														      	echo "<b style='color:green'>".$tinhtrang."</b>";
												      		}else{
														      	echo "<b style='color:red'>".$tinhtrang."</b>";
												      		}
										      			?>
										      	</td>
						        				<td>
						        					<a href="chitietkhachhang.php?ma-donhang=<?php echo $madh;?>" style="color: red;">
						        						>>Xem chi tiết
						        					</a>
						        				</td>
						        				<td>
						        					<a href="chitiethoadonuser.php?ma-donhang=<?php echo $madh;?>" style="color: red;">
						        						>>Xem chi tiết
						        					</a>
						        				</td>
						        				<td  style="text-align: center;">
										      		<a href="quanlytinhtrangdonhang.php?ma-donhang=<?php echo $madh;?>">
														<img src="../IMAGES/icon_edit.png" style="width: 30%;height: 17%;">
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
</body>
<script type="text/javascript">
	function searchUser()
	{
		var data=document.getElementById('search_user').value;
		if(data=="")
		{
			data="";
		}
		$.ajax({
			type:"POST",
			url:"search_donhang.php",
			data:"data="+data,
			cache:false,
			success:function(results){
				 $('tbody').html(results);
			}
		});
	}
</script>
</html>