<?php
	session_start();
	if(isset($_SESSION['usr']['uid']))
	{
	}
	else
	{
		 header('Location:login.php');
	}
	require("../includes/connect_db.php");
	include("../includes/check_errors.php");
	$data=$_POST['data'];
	if($data=='-1')
	{
		$query="SELECT masp,tensp,gia,loaisp,linkhinh,chitietsp FROM sanpham";
		$result=mysqli_query($dbc,$query);check_errors($result,$query);
	}
	else{
		$query="SELECT masp,tensp,gia,loaisp,linkhinh,chitietsp FROM sanpham WHERE loaisp=N'$data'";
		$result=mysqli_query($dbc,$query);check_errors($result,$query);
	}
	while(list($masp,$tensp,$gia,$loaisp,$linkhinh,$chitietsp)=mysqli_fetch_array($result,MYSQLI_NUM))
	{
		$query1="SELECT makm FROM sanphamkhuyenmai where makm={$_POST['makm']} and masp={$masp}";
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
	      	<td style="text-align: center;">
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
						<input type="checkbox" id="ad<?php echo $masp;?>" name="apdungg" onchange="addDataToEvent(<?php echo $masp;?>, <?php echo $_POST['makm']; ?>)" checked>
				<?php	}else{?>
						<input type="checkbox" id="ad<?php echo $masp;?>" name="apdungg" onchange="addDataToEvent(<?php echo $masp;?>, <?php echo $_POST['makm']; ?>)">
				<?php	}
				?>
	      	</td>
	 	</tr>
	<?PHP }?>
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