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
						<h3>Quản lý user</h3>
						<div class="input-group" style="width: 30%;float: right;">
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
					    </div>
					    <div style="clear: both;margin: 6%;"></div>
						<table class="table table-hover">
						    <thead>
						      <tr>
						        <th>Mã</th>
						        <th  style="text-align: center;">Tài khoản</th>
						        <th  style="text-align: center;">Họ tên</th>
						        <th  style="text-align: center;">Điện thoại</th>
						        <th  style="text-align: center;">Email</th>
						        <th  style="text-align: center;">Trạng thái</th>
						        <th  style="text-align: center;">Vai trò</th>
						        <th style="width: 5%;text-align: center;">ResertPass</th>
						        <th style="width: 5%;text-align: center;">Sửa</th>
						        <th style="width: 5%;text-align: center;">Khóa</th>
						      </tr>
						    </thead>
						    <tbody>
						    	<?PHP
							    		$query="SELECT makh,taikhoan,hoten,dienthoai,email,diachi,trangthai,vaitro FROM khachhang";
										$result=mysqli_query($dbc,$query);check_errors($result,$query);$i=1;
										while(list($makh,$taikhoan,$hoten,$dienthoai,$email,$diachi,$trangthai,$vaitro)=mysqli_fetch_array($result,MYSQLI_NUM))
									    {?>
											<tr>
										      	<td>
										      		<?php echo $makh;?>
										      	</td>
										      	<td>
													<?php echo $taikhoan;?>
										      	</td>
										      	<td>
										      		<?php echo $hoten;?>
										      	</td>
										      	<td>
										      			<?php echo $dienthoai;?>
										      	</td>
										      	<td>
										      		<?php echo $email;?>
										      	</td>
										      	<td>
													<?php
														if($trangthai==1)
														{
															echo "<b style='color:green'>Kích hoạt</b>";
														}else{
															echo "<b style='color:red;'>Đã khóa</b>";
														}
													?>
										      	</td>
										      	<td>
										      		<?php
														if($vaitro==0)
														{
															echo "Khách hàng";
														}else if($vaitro==1){
															echo "Manager";
														}else if($vaitro==3){
															echo "Posts";
														}else{
															echo "Admin";
														}
													?>
										      	</td>
										      	<td  style="text-align: center;">
										      		<a href="resert_password.php?id=<?php echo $makh;?>">
										      			<img src="../IMAGES/reset_mk.jpg" class="img_tbl1">
										      		</a>
										      	</td>
										      	<td  style="text-align: center;">
										      		<a href="edit_user.php?id=<?php echo $makh;?>">
														<img src="../IMAGES/icon_edit.png" class="img_tb2">
													</a>
										      	</td>
										      	<td style="text-align: center;">
										      		<a href="khoa_user.php?id=<?php echo $makh;?>">
										      			<img src="../IMAGES/doi_mk.png" class="img_tb2">
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
	function selectUser()
	{
		var data=document.getElementById('phanloaiuser').value;
		if(data=="-1")
		{
			data="-1";
		}
		$.ajax({
			type:"POST",
			url:"select_user.php",
			data:"data="+data,
			cache:false,
			success:function(results){
			 	$('tbody').html(results);
			}
		});
	}
	function searchUser()
	{
		var data=document.getElementById('search_user').value;
		if(data=="")
		{
			data="";
		}
		$.ajax({
			type:"POST",
			url:"search_user.php",
			data:"data="+data,
			cache:false,
			success:function(results){
				 $('tbody').html(results);
			}
		});
	}
</script>
</html>