<?php
	session_start();
	if(isset($_SESSION['user']['uid']))
	{
		include("includes/header_user.php");
	}
	else
	{
		include("includes/header.php");
	}
	include("includes/connect_db.php");
	include("includes/check_errors.php");
?>
<div id="contain" style="margin-top: 2%;">
			<div class="row">
				<div class="col-md-3">
					<div class="search_im_md" style="background-color: white;">
						<label>
							Tên sản phẩm:
						</label>
						<div>
							<input type="text" name="tensp" id="tensp" value="" placeholder="Tên sản phẩm..." style="padding-left:1%;width: 80%;" onkeyup="searchName(1);">
						</div>
						<label>
							Loại:
						</label>
						<div>
							<select name="loaisp" id="loaisp" onchange="searchName(1);">
								<option value="">Chọn loại</option>
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
						<label>
							Giá:
						</label>
						<div>
							<select name="gia" id="gia" onchange="searchName(1);">
								<option value="1">Tất cả giá</option>
								<option value="50000">0 đ - 50.000 đ</option>
								<option value="100000">50.000 đ - 100.000 đ</option>
								<option value="150000">100.000 đ - 150.000 đ</option>
								<option value="4">Trên 150.000 đ</option>
							</select>
						</div>
					</div>
				</div>
				<div class="col-md-9">
					<div style="background-color:#d74b33;float: left;color: white;">
						<h1 style="font-size: 18px; font-weight: normal; padding: 0 12px; text-align: left; margin: 0!important;line-height: 31px">
						    Sản phẩm
					    </h1>
					</div>
					<div style="border-bottom:solid 1px #d74b33;clear: both;padding-top: 0.2%;"></div>
					<div class="product-wrapper row">
						<script type="text/javascript">
							function phantrang(page){
								$.ajax({
							        type:"POST",
							        url:"includes/phantrang.php",
							        data:"page="+page,
							        cache:false,
							        success:function(results){
							        	$('.product-wrapper').html(results);
							        }
							    });
							}
							phantrang(1);
							function searchName(page)
							{
								var name=document.getElementById('tensp').value;
								var item=document.getElementById('loaisp').value;
								var price=document.getElementById('gia').value;
								if(name!="" || item!="" || price!="")
								{
									$.ajax({
								        type:"POST",
								        url:"includes/search_name.php",
								        data:{name:name,page:page,item:item,price:price},
								        cache:false,
								        success:function(results){
								        	$('.product-wrapper').html(results);
								        }
								    });
								}
								else{
									phantrang(1);
								}
							}
							function searchItem(page)
							{
								var name=document.getElementById('all').value;
								if(name!="")
								{
									$.ajax({
								        type:"POST",
								        url:"includes/search_item.php",
								        data:{name:name,page:page},
								        cache:false,
								        success:function(results){
								        	//document.getElementById('all').value="";
								        	$('.product-wrapper').html(results);
								        }
								    });
								}
							}
						</script>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php  include("includes/footer.php");?>