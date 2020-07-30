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
<style type="text/css">
	a.bdr{
		color: black;
		text-decoration: none;
	}
	a.bdr:hover{
		color: #d74b33;
	}
</style>
	<div id="contain" style="margin-top: 2%;">
		<div style="background-color:#d74b33;float: left;color: white;">
			<h1 style="font-size: 18px; font-weight: normal; padding: 0 12px; text-align: left; margin: 0!important;line-height: 31px">
			    Giới thiệu
		    </h1>
		</div>
		<div style="border-bottom:solid 1px #d74b33;clear: both;padding-top: 0.2%;margin-bottom: 2%;"></div>
		<div class="row">
			<div class="col-md-9">
				<?php
					$url=$_GET['matt'];
					$query="SELECT * FROM tintuc where matt=".$url;
					$result=mysqli_query($dbc,$query);check_errors($result,$query);
					while(list($matt,$tieude,$noidung,$thoigiandang,$hinhanh)=mysqli_fetch_array($result,MYSQLI_NUM))
				    {?>
					    <h3>
					    	<?php echo $tieude ?>
					    </h3>
					    <div style="font-style: italic;margin-bottom: 10px;color: #aaaaaa;font-size: 14px;">
				    		<p>
					    		<?php echo $thoigiandang ?>
							</p>
				    	</div>
				    	<div>
				    		<?php echo $noidung ?>
				    	</div>
					<?PHP }
				?>
				<div style="margin-top: 5%;">
					<h4 style="font-weight: bold;">
						Tin tức liên quan
					</h4>
					<?php
						$query="SELECT * FROM tintuc where tinhtrang=1 ORDER BY matt DESC LIMIT 4 ";
						$result=mysqli_query($dbc,$query);check_errors($result,$query);
						while(list($matt,$tieude,$noidung,$thoigiandang,$hinhanh)=mysqli_fetch_array($result,MYSQLI_NUM))
					    {?>
						    <p>
						    	<a href="chitiettintuc.php?matt=<?php echo $matt ?>" class="bdr">
						    		<i class="fa fa-long-arrow-right"></i>
						    		<?php echo $tieude ?>
						    	</a>
						    </p>
						<?PHP }
					?>
				</div>
			</div>
			<div class="col-md-3">
				<?php  include("includes/product_posts.php");?>
			</div>
		</div>
	</div>
</div>
	<?php  include("includes/footer.php");?>