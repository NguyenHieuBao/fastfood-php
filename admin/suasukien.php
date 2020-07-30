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
		if(isset($_GET['id']) && $_GET['id']!=null)
		{
			$url=$_GET['id'];
			$query_item="SELECT * FROM khuyenmai WHERE makm=".$url;
			$result_item=mysqli_query($dbc,$query_item);check_errors($result_item,$query_item);
			if(mysqli_num_rows($result_item)<1)
			{
				header('location:quanlysukien.php');
			}
			list($makm, $tieude, $giatri, $stime, $etime)=mysqli_fetch_array($result_item,MYSQLI_NUM);
		}else{
			header('location:quanlysukien.php');
		}
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
				<div class="col-sm-10 contain_right">
					<div style="background-color:white;margin-right: -29px;margin-left: -15px;color: black;padding: 40px;">
						<h3>Sửa sự kiện</h3>
						<form>
							<div class="form-group">
						      <label for="hoten">Tiêu đề: </label>
						      <input type="text" class="form-control" id="ev" placeholder="Tiêu đề" name="ev" value="<?php echo $tieude ?>">
						    </div>
						    <div class="form-group">
						      <label for="email">Giá trị khuyến mãi - tối đa 50%: </label>
						      <input type="number" class="form-control" id="km" placeholder="Giá trị khuyến mãi" name="km" value="<?php echo $giatri ?>">
						    </div>
						    <div class="form-group">
						      <label for="taikhoan">Thời gian bắt đầu: </label>
						      <input type="datetime-local" id="stime" name="sday" class="form-control" value="<?php echo $stime ?>">
						    </div>
						    <div class="form-group">
						      <label for="taikhoan">Thời gian kết thúc: </label>
						      <input type="datetime-local" id="etime" name="eday" class="form-control" value="<?php echo $etime ?>">
						    </div>
						    <div class="mess">
						    </div>
						    <button type="button" name="button" class="btn btn-primary" onclick="back();">Quay về</button>
						    <button type="button" class="btn btn-primary" name="button" onclick="fromAddUser(<?php echo $url ?>);">Chỉnh sửa</button>
						 </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript">
	function back()
	{
		window.location="quanlysukien.php";
	}
	function fromAddUser(id)
	{
		var tieude=document.getElementById('ev');
		var giatri=document.getElementById('km');
		var stime=document.getElementById('stime');
		var etime=document.getElementById('etime');
		var apdung=document.getElementsByName('optradio');

		if(tieude.value==""){
			alert("Tiêu đề không được để trống");
			tieude.focus();
			return false;
		}

		if(!Number.isInteger(parseInt(giatri.value))){
			alert("Giá trị không hợp lệ");
			giatri.focus();
			return false;
		}else{
			if(giatri.value < 0){
				alert("Giá trị khuyến mãi phải lớn hơn 0");
				giatri.focus();
				return false;
			}else if(giatri.value > 50){
				alert("Giá trị khuyến mãi nhỏ hơn 50");
				giatri.focus();
				return false;
			}
		}

		if(stime.value==""){
			alert("Thời gian bắt đầu không được để trống");
			stime.focus();
			return false;
		}

		if(etime.value==""){
			alert("Thời gian kết thúc không được để trống");
			etime.focus();
			return false;
		}
		if(etime.value <= stime.value){
			alert("Thời gian bắt đầu và kết thúc không hợp lệ");
			etime.focus();
			return false;
		}
		$.ajax({
			type:"POST",
			url:"xulysuasukien.php",
			data:{tieude:tieude.value,giatri:giatri.value,stime:stime.value,etime:etime.value,id:id},
			cache:false,
			success:function(results){
				$('.mess').html(results);
				tieude.value="";
				giatri.value="";
				stime.value="";
				etime.value="";
			}
		});
	}
</script>
</html>