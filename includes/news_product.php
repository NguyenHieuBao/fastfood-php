<div class="dtl_ports">
	<div class="dtl_ports_ttl">
		<div style="background-color:#d74b33;float: left;color: white;">
			<h1 style="font-size: 18px; font-weight: normal; padding: 0 12px; text-align: left; margin: 0!important;line-height: 31px">
			    Tin ẩm thực
		    </h1>
		</div>
		<div style="border-bottom:solid 1px #d74b33;clear: both;padding-top: 0.2%;"></div>
	</div>
	<div class="news-slide">
		<?php
	    	function truncateString1($str, $maxChars = 123, $holder = "...")
			{
			    if (strlen($str) > $maxChars) {
			        return trim(substr($str, 0, $maxChars)) . $holder;
			    } else {
			        return $str;
			    }
			}
		?>
	    <?php
			$query="SELECT * FROM `tintuc` where tinhtrang=1 LIMIT 4";
			$result=mysqli_query($dbc,$query);check_errors($result,$query);
			while(list($matt,$tieude,$noidung,$thoigiandang,$hinhanh)=mysqli_fetch_array($result,MYSQLI_NUM))
		    {?>
				<div class="col-md-3 col-sm-3 col-xs-12" style="padding: 0;">
					<div class="product-item" style="margin-left: 2%;">
						<div class="prt_item_banner">
							<a href="chitiettintuc.php?matt=<?php echo $matt ?>">
								<img src=<?php echo $hinhanh?>>
							</a>
						</div>
						<div class="prt_item_title">
							<a href="chitiettintuc.php?matt=<?php echo $matt ?>">
								<?php echo $tieude ?>
							</a>
						</div>
						<div class="prt_item_price2">
							<p>
							    <?php echo truncateString1($noidung) ?>
							</p>
						</div>
					</div>
				</div>
			<?PHP }
		?>
	</div>
</div>