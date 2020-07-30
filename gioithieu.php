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
		<div style="background-color:#d74b33;float: left;color: white;">
			<h1 style="font-size: 18px; font-weight: normal; padding: 0 12px; text-align: left; margin: 0!important;line-height: 31px">
			    Giới thiệu
		    </h1>
		</div>
		<div style="border-bottom:solid 1px #d74b33;clear: both;padding-top: 0.2%;margin-bottom: 2%;"></div>
		<p>
			<label>Mua hàng giảm giá</label> qua mạng từ lâu đã như là một thói quen, một cách sống của người Việt Nam. Cuộc sống ngày càng phát triển, nhu cầu ngày càng cao hơn, Thì viêc mua sắm đó như là một xu hướng tấc yếu. Thế nhưng, đôi khi thời gian của bạn eo hẹp, bạn không có nhiều thì giờ để có thể lang thang qua từng con đường, dạo quanh từng con chợ hay những shop thời trang để tìm và chọn cho mình một sản phẩm ưng ý.
		</p>
		<p>
			Nắm bắt được nhu cầu đó chúng tôi đã cho ra đời một trang thương mại điện tử nhằm đáp ứng được lượng lớn nhu cầu của khách hàng trong cuộc sống hằng ngày. Đó chính là VIE FOOD Đến với VIE FOOD bạn chỉ cần một chiếc điện thoai hay một máy tính có kết nối internet , chỉ cần một Click bạn cũng có thể tìm mua cho mình một sản phẩm phù hợp vừa rẻ và chất lượng. Không những thế, bạn sẽ tiết kiệm được một lượng lớn thời gian để có thể làm những công việc khác .
		</p>
		<p>
			Mục tiêu của VIE FOOD là mang lại những sản phẩm và dịch vụ tuyệt vời nhất, giảm giá lên đến 90% cho các thành viên của VIE FOOD và cho cộng đồng tại Thành phố Hồ Chí Minh. Ưu điểm lớn nhất khi bạn đến với VIE FOOD là sự hỗ trợ nhiệt tình, thân thiện của đội ngũ nhân viên và đống thời đó là hàng loạt sản phẩm chất lương được giảm với mức giá rất ưu đãi, Hơn thế nữa đó là bạn được giao hàng tận nơi miễn phí trong nội thành khu vực TP Hồ Chí Minh. Trong thời gian ngắn thành lập VIE FOOD đã có được những bước thành công đang kể và nhận được sự tín nhiệm đông đảo của lượng lớn khách hàng, Và cũng nắm bắt được nhu cầu chung, VIE FOOD tiếp tục mở rộng hình thức giao hàng tận nơi trên toàn quốc với giá rẻ phù hợp nhằm đẩy mạnh hơn nữa, khẳng định thương hiệu hơn nữa trong thời gian tới.
		</p>
		<p>
			<label>Cam kết đối với khách hàng</label><br/>
			Với phương châm “ Khách hàng là thượng đế” thì không có gì quan trọng hơn với chúng tôi là nhận được sự tin tưởng và hợp tác lâu dài với khách hàng, để VIE FOOD có thể vươn xa hơn nữa, tạo nên một khối cộng đống VIE FOOD đoàn kết và phát triển vũng mạnh. Vì thế, nhiệm vụ của chúng tôi không đơn thuần chỉ là mua – bán, trao- đổi mà hơn thế nữa chúng tôi muốn hướng đến một mối quan hệ dài lâu. Chúng tôi không chỉ dừng lại ở việc làm cho đồng tiền của bạn có giá trị hơn mà còn phải có nhiệm vụ bảo vệ nó an toàn tuyệt đối trong từng giao dịch. VIE FOOD sẽ bảo đảm an toàn cho mọi thanh toán cũng như chất lượng dịch vụ sản phẩm đã được lên sàn.
		</p>
		<p>
			<label>Niềm tự hào</label><br/>
			Sức mạnh của VIE FOOD đến từ đội ngủ nhân viên chăm sóc khách hàng chuyên nghiệp. Vì vậy, Qúy khách cần hỗ trợ hoặc giải đáp thắc mắc xin hãy đến với chúng tôi qua tổng đài 08 6299 7046 Qúy khách sẽ được giải đáp về dịch vụ, sản phậm và thông tin khuyến mãi
			Thới gian làm việc từ thứ 2 - thứ 6: 8h00 - 17h00 (Nghỉ trưa: 12h00 - 13h30)Thứ 7: 8h30 - 12h00. Nhằm giải đáp mọi thắc mắc của khách hàng mọi lúc mọi nơi.
		</p>
		<p>
			Đội ngủ nhân viên chăm sóc khách hàng nhiệt tình của VIE FOOD chắc chắn sẽ làm cho quý khách hài lòng và tín dùng. Ngoài ra, hình thức Chat Yahoo giúp khách hàng đang online tiết kiệm được chi phí điện thoại. Các nhân viên cũng sẽ chăm sóc khách hàng qua diễn đan, email hoặc khi khách hàng yêu cầu sản phẩm mới, hoặc thắc mắc, hoặc thắc mắc về cách thức mua hàng, các vấn đề liên quan đến VIE FOOD
		</p>
		<p>
			Tiếp đến là đội ngủ nhân viên giao hàng nhanh nhẹn, chuyên nghiệp, luôn mỉm cười đó là một ưu thế của VIE FOOD so với các công ty còn lại.
			Khách hàng sẽ được nhận sản phẩm trong một thời gian sớm nhất đồng thời đối với các mặt hàng điện tử hay gia dụng sẽ được bảo hàng trong thơi gian gian từ 3 tháng đến 1 năm. Với phong cách làm việc nhanh chóng, kỷ luật và hiểu quả quý khách hàng hãy yên tâm đến với chúng tôi trong từng giao dịch. Chung tôi tin rằng, luôn đem lại nhũng giá trị thật nhất cho khách hàng, một khi khách hàng đã tin tưởng và sử dụng dịch vụ của VIE FOOD
		</p>
		<p>
			<label>Yên tâm đến với VIE FOOD để trở thành người tiêu dùng thông minh bạn nhé!</label>
		</p>
	</div>
</div>
	<?php  include("includes/footer.php");?>