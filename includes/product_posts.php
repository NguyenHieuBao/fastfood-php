<div class="ctn_ports">
	<div class="ctn_ports_ttl">
		<span>
			Bài viết nổi bật
		</span>
		<span style="float: right;margin-right: 5%;">
		    <img src="IMAGES/icon_vmega.png">
		</span>
	</div>
	<?php
    	function truncateString($str, $maxChars = 123, $holder = "...")
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
		    <div class="ctn_ports_1">
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
		    	<div class="ctn_ports_1_ps">
		    		<p>
			    		<?php echo truncateString($noidung) ?>
					</p>
		    	</div>
		    </div>
		<?PHP }
	?>
</div>