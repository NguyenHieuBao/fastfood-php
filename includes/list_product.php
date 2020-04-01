<div class="ctn_product">
						<div class="ctn_product_ttl">
						    <span>
							  SẢN PHẨM
						    </span>
						    <span style="float: right;margin-right: 5%;" >
						    	<img src="IMAGES/icon_vmega.png">
						    </span>
					    </div>
					    <ul class="leve10">
					    	<li>
					    		<span class="spn_lv10">
					    			<i class="fa fa-angle-down">
					    			</i>
					    		</span>
					    		<span>
					    			<a href="#">
					    			<i class="fa fa-arrow-circle-right">
					    			</i>
					    			THỰC ĐƠN CHÍNH
					    		</a>
					    		</span>
					    		<ul class="lst_mn_lv10">
					    			<li>
					    				<a href="#">
					    					<i class="fa fa-check">
							    			</i>
							    			Món khai vị
					    				</a>
					    			</li>
					    			<li>
					    				<a href="#">
					    					<i class="fa fa-check">
							    			</i>
							    			Pizza
					    				</a>
					    			</li>
					    			<li>
					    				<a href="#">
					    					<i class="fa fa-check">
							    			</i>
							    			Salad
					    				</a>
					    			</li>
					    			<li>
					    				<a href="#">
					    					<i class="fa fa-check">
							    			</i>
							    			Soup Táo Mỹ
					    				</a>
					    			</li>
					    			<li>
					    				<a href="#">
					    					<i class="fa fa-check">
							    			</i>
							    			Bồ câu quay ngũ vị
					    				</a>
					    			</li>
					    			<li>
					    				<a href="#">
					    					<i class="fa fa-check">
							    			</i>
							    			Mỳ ý Spaghetti
					    				</a>
					    			</li>
					    		</ul>
					    	</li>
					    	<li>
								<a href="#">
					    			<i class="fa fa-arrow-circle-right">
					    			</i>
					    			THỰC ĐƠN ĐẶC BIỆT
					    		</a>
					    	</li>
					    	<li>

								<a href="#">
					    			<i class="fa fa-arrow-circle-right">
					    			</i>
					    			CƠM
					    		</a>
					    	</li>
					    	<li>
					    		<a href="#">
					    			<i class="fa fa-arrow-circle-right">
					    			</i>
					    			CHÁO
					    		</a>
					    	</li>
					    	<li>
					    		<a href="#">
					    			<i class="fa fa-arrow-circle-right">
					    			</i>
					    			PHỞ
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
					</div>