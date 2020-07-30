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
	$query="SELECT masp,tensp,gia,loaisp,linkhinh,chitietsp FROM sanpham WHERE masp like '%$data%' OR tensp like '%$data%' OR gia like '%$data%' OR loaisp like '%$data%' OR motasp like '%$data%' OR linkhinh like '%$data%' ORDER BY masp DESC";
	$result=mysqli_query($dbc,$query);check_errors($result,$query);
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
	      	<td>
	      		<?php
					if(isset($makm)){
				?>
						<input type="checkbox" id="ad<?php echo $masp;?>" name="apdungg" onchange="addDataToEvent(<?php echo $masp;?>, <?php echo $_POST['makm']; ?>)" checked>
				<?php
					}else{
				?>
						<input type="checkbox" id="ad<?php echo $masp;?>" name="apdungg" onchange="addDataToEvent(<?php echo $masp;?>, <?php echo $_POST['makm']; ?>)">
				<?php
					}
				?>
	      	</td>
     	</tr>
<?PHP }?>