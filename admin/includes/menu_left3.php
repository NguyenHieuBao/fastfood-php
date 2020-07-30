					<ul class="list">
						<li>
							<a href="" style="background-color: #1b926c;">
								<i class="fa fa-fw fa-dashboard"></i> Dashboard
							</a>
						</li>
						<li>
							<a class="spn_lv10">
								<i class="fa fa-pencil-square-o"></i>  Quản lý bài viết <b class="caret"></b>
							</a>
							<ul style="display: none;">
					    			<li>
					    				<a href="thembaiviet.php">
					    					<i class="fa fa-check">
							    			</i>
							    			Thêm mới bài viết
					    				</a>
					    			</li>
					    			<li>
					    				<a href="quanlybaiviet.php">
					    					<i class="fa fa-check">
							    			</i>
							    			Quản lý bài viết
					    				</a>
					    			</li>
					    		</ul>
						</li>
						<li>
							<a class="spn_lv10">
								<i class="glyphicon glyphicon-calendar"></i>  Quản lý sự kiện <b class="caret"></b>
							</a>
							<ul style="display: none;">
					    			<li>
					    				<a href="themsukien.php">
					    					<i class="fa fa-check">
							    			</i>
							    			Thêm mới sự kiện
					    				</a>
					    			</li>
					    			<li>
					    				<a href="quanlysukien.php">
					    					<i class="fa fa-check">
							    			</i>
							    			Quản lý sự kiện
					    				</a>
					    			</li>
					    		</ul>
						</li>
						<li>
							<a href="quanlythongtinphanhoi.php">
								<i class="glyphicon glyphicon-list-alt"></i> Quản lý phản hồi
							</a>
						</li>
						<li>
							<a href="thongtinuser.php">
								<i class="glyphicon glyphicon-user"></i> Thông tin cá nhân
							</a>
						</li>
						<li>
							<a href="doimatkhau.php">
								<i class="fa fa-key"></i> Đổi mật khẩu
							</a>
						</li>
						<li>
							<a href="dangxuat.php">
								<i class="glyphicon glyphicon-log-out"></i> Đăng xuất
							</a>
						</li>
					</ul>
					<script type="text/javascript">
							    $(document).ready(function () {
							        $('.spn_lv10').on('click', function () {
							            $(this).removeAttr('href');
							            var element = $(this).parent('li');
							            if (element.hasClass('lst_mn_lv10')) {
							                element.removeClass('lst_mn_lv10');
							                element.children('ul').slideUp();
							            }
							            else {
							                element.addClass('lst_mn_lv10');
							                element.children('ul').slideDown();
							            }
							        });
							    });
					    </script>