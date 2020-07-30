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
				<div class="col-sm-10 contain_right">
					<div style="background-color:white;margin-right: -29px;margin-left: -15px;color: black;padding: 40px;">
						<h3>Thêm mới sự kiện</h3>
						<form>
							<div class="form-group">
						      <label for="hoten">Tiêu đề: </label>
						      <input type="text" class="form-control" id="ev" placeholder="Tiêu đề" name="ev">
						    </div>
						    <div class="form-group">
						      <label for="email">Giá trị khuyến mãi - tối đa 50%: </label>
						      <input type="number" class="form-control" id="km" placeholder="Giá trị khuyến mãi" name="km">
						    </div>
						    <div class="form-group">
						      <label for="taikhoan">Thời gian bắt đầu: </label>
						      <input type="datetime-local" id="stime" name="sday" class="form-control">
						    </div>
						    <div class="form-group">
						      <label for="taikhoan">Thời gian kết thúc: </label>
						      <input type="datetime-local" id="etime" name="eday" class="form-control">
						    </div>
						    <div class="mess">
						    </div>
						    <button type="button" class="btn btn-primary" onclick="fromAddUser();">Thêm</button>
						  </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript">
	function fromAddUser()
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
			url:"xulythemsukien.php",
			data:{tieude:tieude.value,giatri:giatri.value,stime:stime.value,etime:etime.value},
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