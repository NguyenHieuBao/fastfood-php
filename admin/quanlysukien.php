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
						<h3>Quản lý sự kiện</h3>
					    <div style="clear: both;margin: 6%;"></div>
						<table class="table table-hover">
						    <thead>
						      <tr>
						        <th>Mã sự kiện</th>
						        <th>Tiêu đề</th>
						        <th>Giảm giá</th>
						        <th>Ngày bắt đầu</th>
						        <th>Ngày kết thúc</th>
						        <th>Tình trạng</th>
						        <th style="width: 7%;text-align: center;">Áp dụng</th>
						        <th style="width: 7%;text-align: center;">Khóa</th>
						        <th style="width: 5%;text-align: center;">Sửa</th>
						      </tr>
						    </thead>
						    <tbody>
						    	<?PHP
							    		$query="SELECT * FROM khuyenmai order by makm desc";
										$result=mysqli_query($dbc,$query);check_errors($result,$query);$i=1;
										while(list($makm, $tieude, $giatri, $stime, $etime, $tinhtrang)=mysqli_fetch_array($result,MYSQLI_NUM))
									    {?>
											<tr>
										      	<td>
										      		<?php echo $makm;?>
										      	</td>
										      	<td>
													<?php echo $tieude;?>
										      	</td>
										      	<td>
										      		<?php echo $giatri;?>%
										      	</td>
										      	<td>
													<?php echo $stime;?>
										      	</td>
										      	<td>
													<?php echo $etime;?>
										      	</td>
										      	<td>
													<?php
														if($tinhtrang==1)
														{
															echo "<b style='color:green'>Kích hoạt</b>";
														}else{
															echo "<b style='color:red;'>Đã khóa</b>";
														}
													?>
										      	</td>
										      	<td style="text-align: center;">
										      		<a href="apdungsukien.php?id=<?php echo $makm ?>">
										      			<img src="../IMAGES/doi_mk.png" class="img_tb2">
										      		</a>
										      	</td>
										      	<td style="text-align: center;">
										      		<a href="khoasukien.php?id=<?php echo $makm ?>">
										      			<img src="../IMAGES/doi_mk.png" class="img_tb2">
										      		</a>
										      	</td>
										      	<td  style="text-align: center;">
										      		<a href="suasukien.php?id=<?php echo $makm ?>">
														<img src="../IMAGES/icon_edit.png" class="img_tb2">
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