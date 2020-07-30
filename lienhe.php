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
?>
    <div id="contain" style="margin-top: 2%;">
        <div style="background-color:#d74b33;float: left;color: white;">
            <h1 style="font-size: 18px; font-weight: normal; padding: 0 12px; text-align: left; margin: 0!important;line-height: 31px">
                Liên hệ
            </h1>
        </div>
        <div style="border-bottom:solid 1px #d74b33;clear: both;padding-top: 0.2%;"></div>
        <div style="width: 100%;margin-top: 2%;">
            <div class="row" style="width: 100%;">
                <div class="col-lg-8 col-xl-8">
                    <div  style="font-size: 20px;margin-bottom: 2%;font-weight: bold;">
                        Gửi thông tin liên hệ
                    </div>
                    <div>
                        <p>
                            Xin vui lòng điền các yêu cầu vào mẫu dưới đây và gửi cho chúng tôi. Chúng tôi sẽ trả lời bạn ngay sau khi nhận được. Xin chân thành cảm ơn!
                        </p>
                    </div>
                    <div class="mess">
                    </div>
                    <div class="row" style="width: 100%;margin: 0;padding: 2%;background-color: #eeeeee;">
                        <div class="col-lg-12" style="margin-bottom: 4%;">
                            <h3 class="text-center">Bạn có gì muốn nhắn nhủ VIE Food?<br /></h3>
                            <div class="text-center"><i class="fa fa-envelope"></i><span style="margin-left: 1%;">viefood@gmail.com</span><i class="fa fa-phone" style="margin-left: 2%;"></i><span style="margin-left: 1%;">0123456789</span></div>
                        </div>
                        <div class="col-12 col-lg-4"><input id="ht" class="border rounded-0 border-dark" type="text" style="width: 100%;margin-top: 3%;margin-bottom: 3%;min-height: 35px;" placeholder="Họ và Tên" /></div>
                        <div class="col-12 col-lg-4"><input id="em" class="border rounded-0 border-dark" type="text" style="width: 100%;margin-top: 3%;margin-bottom: 3%;min-height: 35px;" placeholder="Email" /></div>
                        <div class="col-12 col-lg-4"><input id="pn" class="border rounded-0 border-dark" type="text" style="width: 100%;margin-top: 3%;margin-bottom: 3%;min-height: 35px;" placeholder="Số điện thoại" /></div>
                        <div class="col-12" style="padding: 2%;"><textarea id="nd" class="border rounded-0 border-dark" style="width: 100%;min-height: 200px;" placeholder="Nội dung"></textarea></div>
                        <div class="col-12" style="padding:0 2%;"><button onclick="check()" style="border-radius: 3px;height: 35px;color: white;background-color: #d74b33;width: 100%;border: none;" type="button">Gửi</button></div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 col-xl-4 hov" style="padding: 0;padding-right: 1%;">
                    <div style="font-size: 20px;margin-bottom: 4%;font-weight: bold;">
                        Địa chỉ liên hệ
                    </div>
                    <div style="margin-bottom: 2%;">
                        <i class="fa fa-map-marker"></i>
                        <label>Địa chỉ: </label> Q5 - Tp.Hồ Chí Minh
                    </div>
                    <div style="margin-bottom: 2%;">
                        <i class="fa fa-phone"></i>
                        <label>Điện thoại: </label> 0123456789
                    </div>
                    <div style="margin-bottom: 2%;">
                        <i class="fa fa-mobile"></i>
                        <label>Hotline: </label> 0123456987
                    </div>
                    <div style="margin-bottom: 2%;">
                        <i class="fa fa-envelope"></i>
                        <label>Email: </label> viefood@gmail.com
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function check(){
        let hoten = document.getElementById('ht');
        let email = document.getElementById('em');
        let dienthoai = document.getElementById('pn');
        let noidung = document.getElementById('nd');
        if(hoten.value == ''){
            alert("Họ và tên không được trống");
            hoten.focus();
            return false;
        }
        else{
            pattern=/\d/gi;
            if(pattern.test(hoten.value)==true){
                alert("Họ tên không hợp lệ");
                hoten.focus();
                return false;
            }
        }
        pattern=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)(([a-zA-Z0-9]{3})|([a-zA-Z0-9]{3})(\.[a-zA-Z0-9]{2}))$/;
        if(pattern.test(email.value)==false){
            alert("Email không hợp lệ");
            email.focus();
            return false;
        }
        if(dienthoai.value == ''){
            alert("Điện thoại không được trống");
            dienthoai.focus();
            return false;
        }
        else{
            pattern=/^[0-9]{10,12}$/;
            if(pattern.test(dienthoai.value)==false){
                alert("Số điện thoại phải là số và có từ 10 đến 12 ký tự");
                dienthoai.focus();
                return false;
            }
        }
        if(noidung.value == ''){
            alert("Vui lòng nhập nội dung");
            noidung.focus();
            return false;
        }
        $.ajax({
            type:"POST",
            url:"includes/xulylienhe.php",
            data:{email:email.value,hoten:hoten.value,dienthoai:dienthoai.value,noidung:noidung.value},
            cache:false,
            success:function(results){
                $('.mess').html(results);
                hoten.value="";
                email.value="";
                dienthoai.value="";
                noidung.value="";
            }
        });
    }
</script>
<?php  include("includes/footer.php");?>