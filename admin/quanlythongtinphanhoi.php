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
						<h3>Quản lý thông tin phản hồi</h3>
					    <div style="clear: both;margin: 6%;"></div>
						<table class="table table-hover">
						    <thead>
						      <tr>
						        <th>Mã phản hồi</th>
						        <th>Họ tên</th>
						        <th>Email</th>
						        <th>Số điện thoại</th>
						        <th>Thòi gian</th>
						        <th>Tình trạng</th>
						        <th>Nội dung</th>
						        <th style="width: 9%;text-align: center;">Sửa</th>
						      </tr>
						    </thead>
						    <tbody>
						    	<?PHP
							    		$query="SELECT * FROM phanhoi order by mapt desc";
										$result=mysqli_query($dbc,$query);check_errors($result,$query);$i=1;
										while(list($mapt,$hoten,$email,$dienthoai,$noidung,$tinhtrang,$thoigian)=mysqli_fetch_array($result,MYSQLI_NUM))
									    {?>
											<tr>
										      	<td>
										      		<?php echo $mapt;?>
										      	</td>
										      	<td>
													<?php echo $hoten;?>
										      	</td>
										      	<td>
										      		<?php echo $email;?>
										      	</td>
										      	<td>
										      		<?php echo $dienthoai;?>
										      	</td>
										      	<td>
										      			<?php echo $thoigian;?>
										      	</td>
										      	<td>
									      			<?php
									      				if($tinhtrang=='chưa')
											      		{
									      					echo "<b style='color:red'>".$tinhtrang."</b>";
											      		}
											      		else if($tinhtrang=='đang giải quyết'){
													      	echo "<b style='color:green'>".$tinhtrang."</b>";
											      		}else{
													      	echo "<b style='color:green'>".$tinhtrang."</b>";
											      		}
									      			?>
										      	</td>
						        				<td>
						        					<a href="chitietphanhoi.php?id=<?php echo $mapt?>" style="color: red;">
						        						>>Xem chi tiết
						        					</a>
						        				</td>
						        				<td  style="text-align: center;">
										      		<a href="quanlytinhtrangphanhoi.php?ma-phanhoi=<?php echo $mapt ?>">
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
</html>