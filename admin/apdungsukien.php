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
		$ul=$_GET['id'];
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
						<h3>Áp dụng sản phẩm: </h3>
						<div class="input-group" style="width: 30%;float: right;">
					      <input type="text" class="form-control" placeholder="Tìm kiếm" name="search" id="search_user">
					      <div class="input-group-btn">
					        <button class="btn btn-default" type="button" onclick="searchUser(<?php echo $_GET['id'] ?>);"><i class="glyphicon glyphicon-search"></i></button>
					      </div>
					    </div>
					    <div class="input-group" style="width: 30%;clear:both;float: right;margin-top: 2%;margin-bottom: 2%;">
						    <select name="loaisp" id="lsp" class="form-control" onchange="searchName(<?php echo $_GET['id'] ?>);">
								<option value="-1">Tất cả</option>
								<?php
									$query="SELECT DISTINCT LoaiSp FROM sanpham";
									$result=mysqli_query($dbc,$query);check_errors($result,$query);
									while(list($loaisp)=mysqli_fetch_array($result,MYSQLI_NUM))
									{?>
										<option value="<?php echo $loaisp; ?>">
											<?php echo $loaisp; ?>
										</option>
									<?PHP }
								?>
							</select>
						</div>
					    <div style="clear: both;margin: 6%;"></div>
						<table class="table table-hover">
						    <thead>
						      <tr>
						        <th>Mã sản phẩm</th>
						        <th>Hình ảnh</th>
						        <th>Tên sản phẩm</th>
						        <th>Giá</th>
						        <th style="text-align: center;">Loại sản phẩm</th>
						        <th>Chi tiết sản phẩm</th>
						        <th style="width: 7%;">Áp dụng</th>
						      </tr>
						    </thead>
						    <tbody>
						    	<?PHP
							    		$query="SELECT masp,tensp,gia,loaisp,linkhinh,chitietsp FROM sanpham ORDER BY masp DESC";
										$result=mysqli_query($dbc,$query);check_errors($result,$query);
										while(list($masp,$tensp,$gia,$loaisp,$linkhinh,$chitietsp)=mysqli_fetch_array($result,MYSQLI_NUM))
									    {
									    	$query1="SELECT makm FROM sanphamkhuyenmai where makm={$_GET['id']} and masp={$masp}";
											$result1=mysqli_query($dbc,$query1);check_errors($result1,$query1);
											list($makm)=mysqli_fetch_array($result1,MYSQLI_NUM);
									    	?>
											<tr>
										      	<td>
										      		<?php echo $masp;?>
										      	</td>
										      	<td>
										      		<img src='../<?php echo $linkhinh;?>' class="img_table">
										      	</td>
										      	<td>
													<?php echo $tensp;?>
										      	</td>
										      	<td>
										      		<?php echo $gia;?> đ
										      	</td>
										      	<td style="text-align:center;">
										      		<?php echo $loaisp;?>
										      	</td>
										      	<td style="text-align:center;">
										      		<a href="chitietsanpham.php?id=<?php echo $masp;?>" style="color:red;">
										      			>>Xem chi tiết
										      		</a>
										      	</td>
										      	<td  style="text-align: center;">
													<?php
														if(isset($makm)){
													?>
															<input type="checkbox" id="ad<?php echo $masp;?>" name="apdungg" onchange="addDataToEvent(<?php echo $masp;?>, <?php echo $ul; ?>)" checked>
													<?php	}else{?>
															<input type="checkbox" id="ad<?php echo $masp;?>" name="apdungg" onchange="addDataToEvent(<?php echo $masp;?>, <?php echo $ul; ?>)">
													<?php	}
													?>
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
	function searchName(makm)
	{
		var data=document.getElementById('lsp').value;
		if(data=="-1")
		{
			data="-1";
		}
		$.ajax({
			type:"POST",
			url:"search_loaisp_event.php",
			data:{data:data,makm:makm},
			cache:false,
			success:function(results){
			 	$('tbody').html(results);
			}
		});
	}
	function messDelete(masp){
		if(confirm("Bạn có thực sự muốn xóa không")==true)
		{
			window.location='delete_item.php?id='+masp;
		}
	}
	function searchUser(makm)
	{
		var data=document.getElementById('search_user').value;
		if(data=="")
		{
			data="";
		}
		$.ajax({
			type:"POST",
			url:"search_item_event.php",
			data:{data:data,makm:makm},
			cache:false,
			success:function(results){
				 $('tbody').html(results);
			}
		});
	}
	function addDataToEvent(masp,url){
		let data=document.getElementById('ad'+masp);
		if(data.checked){
			$.ajax({
				type:"POST",
				url:"xulyapdungsukien.php",
				data:{url:url,masp:masp},
				cache:false,
				success:function(results){
					 alert("Bạn đã thêm thành công");
				}
			});
		}else{
			$.ajax({
				type:"POST",
				url:"xulyapdungsukien.php",
				data:{url:url,masp:masp,confirm:0},
				cache:false,
				success:function(results){
					 alert("Bạn đã hủy thành công");
				}
			});
		}
	}
</script>
</html>