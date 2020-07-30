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
			<div class="col-md-9">
				<div style="background-color:#d74b33;float: left;color: white;">
					<h1 style="font-size: 18px; font-weight: normal; padding: 0 12px; text-align: left; margin: 0!important;line-height: 31px">
					    Tin tức
				    </h1>
				</div>
				<div style="border-bottom:solid 1px #d74b33;clear: both;padding-top: 0.2%;"></div>
				<?php
			    	function truncateString2($str, $maxChars = 223, $holder = "...")
					{
					    if (strlen($str) > $maxChars) {
					        return trim(substr($str, 0, $maxChars)) . $holder;
					    } else {
					        return $str;
					    }
					}
				?>
			    <?php
					$query="SELECT * FROM `tintuc` where tinhtrang=1 order by matt desc";
					$result=mysqli_query($dbc,$query);check_errors($result,$query);
					while(list($matt,$tieude,$noidung,$thoigiandang,$hinhanh)=mysqli_fetch_array($result,MYSQLI_NUM))
				    {?>
					    <div class="ctn_ports_1" style="float: left;">
					     	<div tyle="width: 100%;">
					    		<div class="ctn_ports_1_img">
							    	<a href="chitiettintuc.php?matt=<?php echo $matt ?>">
							    		<img src=<?php echo $hinhanh ?>>
							    	</a>
					    		</div>
					    	</div>
					    	<div style="width: 100%;">
					    		<div class="ctn_ports_1_ctn">
							    	<a href="chitiettintuc.php?matt=<?php echo $matt ?>">
							    		<?php echo $tieude ?>
							    	</a>
								</div>
					    	</div>
					    	<div style="font-style: italic;margin-bottom: 10px;color: #aaaaaa;font-size: 11px;margin-left: 32%;">
					    		<p>
						    		<?php echo $thoigiandang ?>
								</p>
					    	</div>
					    	<div style="font-size: 13px;margin-left: 32%;margin-top: 3%;">
					    		<p>
						    		<?php echo truncateString2($noidung) ?>
								</p>
					    	</div>
					    </div>
					<?PHP }
				?>
			</div>
			<div class="col-md-3">
				<?php  include("includes/product_posts.php");?>
			</div>
		</div>
	</div>
</div>
	<?php  include("includes/footer.php");?>