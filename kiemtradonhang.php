<?php  include("includes/header.php");?>
		<div id="contain" style="margin-top: 2%;">
			<div style="background-color:#d74b33;float: left;color: white;">
				<h1 style="font-size: 24px; font-weight: normal; padding: 0 12px; text-align: left; margin: 0!important;line-height: 31px">
				Kiểm tra đơn hàng
				</h1>
			</div>
			<div style="border-bottom:solid 1px #d74b33;clear: both;padding-top: 0.2%;"></div>
			<div style="background-color:#eaeaea; margin-top: 1%;padding-left: 1%;">
				<form action="" method="get" accept-charset="utf-8">
					<div style="padding-top: 2%;padding-bottom: 2%;">
						<label for="madh" style="max-width: 100%;">Nhập mã đơn hàng   </label>
						<input type="text" name="madh" id="madh" value="" placeholder=" Mã số đơn hàng (VD:123456789)" style="min-width: 30%;height: 34px;    border-radius: 4px;border: none;padding-left: 1%;">
						<label><input type="button" name="ktdh" value="XEM NGAY" class="btn_checkdh" onclick="check();"></label>
					</div>
				</form>
			</div>
		</div>
		<div id="contain1">
			
		</div>
</div>
<script type="text/javascript">
	function check()
	{
		var a=document.getElementById('madh').value;
		if(a!="")
		{
			$.ajax({
				type:"POST",
				url:"includes/check_cart.php",
				data:"data="+a,
				cache:false,
				success:function(results){
					 $('#contain1').html(results);
				}
			});
		}
	}
</script>
<?php  include("includes/footer.php");?>