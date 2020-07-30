<!DOCTYPE html>
<html>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<meta charset="UTF-8">
	<title>VIE Food</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./CSS/mycss.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="JAVASCRIPT/pbjquery.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
	<script src="JAVASCRIPT/jquery1.js" type="text/javascript"></script>
	<script src="JAVASCRIPT/jquery2.js" type="text/javascript"></script>
</head>
<body>
	<div id="da_w2">
		<div id="header">
			<div id="top">
				<div>
					<div class="right">
						<ul class="menu">
							<li>
								<a href="kiemtradonhang.php"><i class="fa fa-pencil-square-o"></i> Kiểm tra đơn hàng</a>
							</li>
							<li>
								<a href="giohang.php"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a>
							</li>
							<li>
								<a href="dangnhap.php"><i class="fa fa-sign-in"></i>  Đăng nhập</a>
							</li>
							<li>
								<a href="dangky.php"><i class="fa fa-key"></i>  Đăng ký</a>
							</li>
						</ul>
					</div>
					<div class="left">
						<div  class="wrd_frst">
							<i class="fa fa-phone">
								Hotline:0123456789
							</i>
						</div>
					</div>
					
				</div>
			</div>
			<div id="mid">
				<div class="md_search">
					<input id="all" type="text" name="all" value="" placeholder="Tìm kiếm..." style="padding-left: 1%;">
					<button type="button" value="search" onclick="searchItem(1);">
						<i class="fa fa-search">
						</i>
					</button>
				</div>
				<div class="md_banner">
					<a href="index.php" title="VIE Food">
						<img src="IMAGES/logo.png">
					</a>
				</div>
			</div>
			<div id="lst_menu">
				<ul class="lst_menu_ul">
					<li class="addclass1" onclick="addclass();">
						<a href="index.php" title="TRANG CHỦ">
							<span>TRANG CHỦ</span>
						</a>
						<div></div>
					</li>
					<li class="s">/</li>
					<li class="addclass1">
						<a href="sanpham.php" title="SẢN PHẨM">
							<span>SẢN PHẨM</span>
						</a>
					</li>
					<li class="s">/</li>
					<li>
						<a href="tintuc.php" title="TIN TỨC">TIN TỨC</a>
					</li>
					<li class="s">/</li>
					<li>
						<a href="gioithieu.php" title="GIỚI THIỆU">GIỚI THIỆU</a>
					</li>
					<li class="s">/</li>
					<li>
						<a href="lienhe.php" title="LIÊN HỆ">LIÊN HỆ</a>
					</li>
					<li class="s">/</li>
				</ul>
			</div>
		</div>
		<div style="clear: both;border-bottom: solid #dddddd 1px;"></div>
</body>
</html>