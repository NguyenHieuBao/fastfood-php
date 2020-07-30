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
						<h3>Quản lý bài viết</h3>
						<!-- <div class="input-group" style="width: 30%;float: right;">
					      <input type="text" class="form-control" placeholder="Tìm kiếm" name="search" id="search_user">
					      <div class="input-group-btn">
					        <button class="btn btn-default" type="button" onclick="searchUser();"><i class="glyphicon glyphicon-search"></i></button>
					      </div>
					    </div>
					    <div class="input-group" style="width: 30%;clear:both;float: right;margin-top: 2%;margin-bottom: 2%;">
					    	<select id="phanloaiuser" class="form-control" onchange="selectUser();">
					    		<option value="-1">Tất cả</option>
					    		<option value="0">Khách hàng</option>
					    		<option value="1">Manager</option>
					    		<option value="2">Admin</option>
					    		<option value="3">Posts</option>
					    	</select>
					    </div> -->
					    <div style="clear: both;margin: 6%;"></div>
						<table class="table table-hover">
						    <thead>
						      <tr>
						        <th>Mã bài viết</th>
						        <th>Tiêu đề</th>
						        <th>Thời gian đăng</th>
						        <th>Tình trạng</th>
						        <th>Nội dung</th>
						        <th style="width: 5%;text-align: center;">Khóa</th>
						        <th style="width: 5%;text-align: center;">Sửa</th>
						        <th style="width: 5%;text-align: center;">Xóa</th>
						      </tr>
						    </thead>
						    <tbody>
						    	<?PHP
							    		$query="SELECT * FROM tintuc order by matt desc";
										$result=mysqli_query($dbc,$query);check_errors($result,$query);$i=1;
										while(list($matt, $tieude, $noidung, $thoigiandang, $hinhanh, $manv, $tinhtrang)=mysqli_fetch_array($result,MYSQLI_NUM))
									    {?>
											<tr>
										      	<td>
										      		<?php echo $matt;?>
										      	</td>
										      	<td>
													<?php echo $tieude;?>
										      	</td>
										      	<td>
										      		<?php echo $thoigiandang;?>
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
										      	<td>
										      		<a href="chitietbaiviet.php?id=<?php echo $matt;?>" style="color:red;">
										      			>>Xem chi tiết
										      		</a>
										      	</td>
										      	<td style="text-align: center;">
										      		<a href="khoabaiviet.php?id=<?php echo $matt;?>">
										      			<img src="../IMAGES/doi_mk.png" class="img_tb2">
										      		</a>
										      	</td>
										      	<td  style="text-align: center;">
										      		<a href="suabaiviet.php?id=<?php echo $matt?>">
														<img src="../IMAGES/icon_edit.png" class="img_tb2">
													</a>
										      	</td>
										      	<td style="text-align: center;">
										      		<a  onclick="messDelete(<?php echo $matt;?>);">
										      			<img src="../IMAGES/icon_delete.png" class="img_tb2">
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
	function messDelete(matt){
		if(confirm("Bạn có thực sự muốn xóa không")==true)
		{
			window.location='xoabaiviet.php?id='+matt;
		}
	}
</script>
</html>