function sanpham(img,img1,img2,img3,img4,kiemtrarank,rank,tuong,trangphuc,gia,gia1,ma,tt1,tt2,tt3,tt4,tt5,tt6)
			{
				this.img=img;
				this.img1=img1;
				this.img2=img2;
				this.img3=img3;
				this.img4=img4;
				this.kiemtrarank=kiemtrarank;
				this.rank=rank;
				this.tuong=tuong;
				this.trangphuc=trangphuc;
				this.gia=gia;
				this.gia1=gia1;
				this.ma=ma;
				this.tt1=tt1;
				this.tt2=tt2;
				this.tt3=tt3;
				this.tt4=tt4;
				this.tt5=tt5;
				this.tt6=tt6;
			}
			var a=new Array();
			function mangsanpham()
			{
			
				a[0]=new sanpham("../IMAGES/a1.jpg","../IMAGES/lm1.jpg","../IMAGES/lm2.jpg","../IMAGES/lm3.jpg","../IMAGES/lm4.jpg",1,"thách đấu",100,50,20000000,"20.000.000",1,"Email, SĐT: Chưa kích hoạt","Giá thẻ cào: 20.000.000 VND","Giá chuyển khoản: 18.000.000 VND","Quánh giá : Acc nhiều skin,tướng chơi ngon");				
				a[1]=new sanpham("../IMAGES/a2.jpg","../IMAGES/lm5.jpg","../IMAGES/lm6.jpg","../IMAGES/lm7.jpg","../IMAGES/lm8.jpg",1,"vàng",70,58,1000000,"1.000.000",2,"Email, SĐT: Chưa kích hoạt","Giá thẻ cào: 1.000.000 VND","Giá chuyển khoản: 900.000 VND","Quánh giá : Acc nhiều skin,tướng chơi ngon");
				a[2]=new sanpham("../IMAGES/a3.jpg","../IMAGES/lm9.jpg","../IMAGES/lm10.jpg","../IMAGES/lm11.jpg","../IMAGES/lm12.jpg",1,"vàng",130,55,3000000,"3.000.000",3,"Email, SĐT: Chưa kích hoạt","Giá thẻ cào: 3.000.000 VND","Giá chuyển khoản: 2.800.000 VND","Quánh giá : Acc nhiều skin,tướng chơi ngon");				
				a[3]=new sanpham("../IMAGES/a4.jpg","../IMAGES/lm13.jpg","../IMAGES/lm14.jpg","../IMAGES/lm15.jpg","../IMAGES/lm16.jpg",1,"kim cương",160,70,4500000,"4.500.000",4,"Email, SĐT: Chưa kích hoạt","Giá thẻ cào: 4.500.000 VND","Giá chuyển khoản: 4.000.000 VND","Quánh giá : Acc nhiều skin,tướng chơi ngon");
				a[4]=new sanpham("../IMAGES/a2.jpg","../IMAGES/lm17.jpg","../IMAGES/lm18.jpg","../IMAGES/lm19.jpg","../IMAGES/lm20.jpg",1,"vàng",120,40,2500000,"2.500.000",5,"Email, SĐT: Chưa kích hoạt","Giá thẻ cào: 2.500.000 VND","Giá chuyển khoản: 2.400.000 VND","Quánh giá : Acc nhiều skin,tướng chơi ngon");
				a[5]=new sanpham("../IMAGES/a5.jpg","../IMAGES/lm1.jpg","../IMAGES/lm2.jpg","../IMAGES/lm3.jpg","../IMAGES/lm4.jpg",1,"kim cương",140,30,4300000,"4.300.000",6,"Email, SĐT: Chưa kích hoạt","Giá thẻ cào: 4.300.000 VND","Giá chuyển khoản: 4.000.000 VND","Quánh giá : Acc nhiều skin,tướng chơi ngon");
				a[6]=new sanpham("../IMAGES/a6.jpg","../IMAGES/lm5.jpg","../IMAGES/lm6.jpg","../IMAGES/lm7.jpg","../IMAGES/lm8.jpg",0,"chưa rank",60,20,1000000,"1.000.000",7,"Email, SĐT: Chưa kích hoạt","Giá thẻ cào: 1.000.000 VND","Giá chuyển khoản: 800.000 VND","Quánh giá : Acc nhiều skin,tướng chơi ngon");
				a[7]=new sanpham("../IMAGES/a7.jpg","../IMAGES/lm9.jpg","../IMAGES/lm10.jpg","../IMAGES/lm11.jpg","../IMAGES/lm12.jpg",1,"vàng",140,30,2400000,"2.400.000",8,"Email, SĐT: Chưa kích hoạt","Giá thẻ cào: 2.400.000 VND","Giá chuyển khoản: 2.200.000 VND","Quánh giá : Acc nhiều skin,tướng chơi ngon");
				a[8]=new sanpham("../IMAGES/a8.jpg","../IMAGES/lm13.jpg","../IMAGES/lm14.jpg","../IMAGES/lm15.jpg","../IMAGES/lm16.jpg",1,"kim cương",140,70,2400000,"2.400.000",9,"Email, SĐT: Chưa kích hoạt","Giá thẻ cào: 2.400.000 VND","Giá chuyển khoản: 2.200.000 VND","Quánh giá : Acc nhiều skin,tướng chơi ngon");
				a[9]=new sanpham("../IMAGES/a9.jpg","../IMAGES/lm17.jpg","../IMAGES/lm18.jpg","../IMAGES/lm19.jpg","../IMAGES/lm20.jpg",0,"chưa rank",20,30,2000000,"2.0000.000",10,"Email, SĐT: Chưa kích hoạt","Giá thẻ cào: 2.000.000 VND","Giá chuyển khoản: 1.800.000 VND","Quánh giá : Acc nhiều skin,tướng chơi ngon");
				a[10]=new sanpham("../IMAGES/a10.jpg","../IMAGES/lm1.jpg","../IMAGES/lm2.jpg","../IMAGES/lm3.jpg","../IMAGES/lm4.jpg",1,"bạc",40,70,2000000,"2.000.000",11,"Email, SĐT: Chưa kích hoạt","Giá thẻ cào: 2.000.000 VND","Giá chuyển khoản: 1.800.000 VND","Quánh giá : Acc nhiều skin,tướng chơi ngon");
				a[11]=new sanpham("../IMAGES/a1.jpg","../IMAGES/lm6.jpg","../IMAGES/lm7.jpg","../IMAGES/lm8.jpg","../IMAGES/lm9.jpg",1,"bạc",100,50,4000000,"4.000.000",12,"Email, SĐT: Chưa kích hoạt","Giá thẻ cào: 4.000.000 VND","Giá chuyển khoản: 3.800.000 VND","Quánh giá : Acc nhiều skin,tướng chơi ngon");
				a[12]=new sanpham("../IMAGES/a2.jpg","../IMAGES/lm10.jpg","../IMAGES/lm11.jpg","../IMAGES/lm12.jpg","../IMAGES/lm13.jpg",1,"kim cương",90,40,4000000,"4.000.000",13,"Email, SĐT: Chưa kích hoạt","Giá thẻ cào: 4.000.000 VND","Giá chuyển khoản: 3.800.000 VND","Quánh giá : Acc nhiều skin,tướng chơi ngon");
				a[13]=new sanpham("../IMAGES/a3.jpg","../IMAGES/lm14.jpg","../IMAGES/lm15.jpg","../IMAGES/lm16.jpg","../IMAGES/lm17.jpg",0,"chưa rank",40,60,500000,"500.000",14,"Email, SĐT: Chưa kích hoạt","Giá thẻ cào: 500.000 VND","Giá chuyển khoản: 480.000 VND","Quánh giá : Acc nhiều skin,tướng chơi ngon");
				a[14]=new sanpham("../IMAGES/a4.jpg","../IMAGES/lm5.jpg","../IMAGES/lm18.jpg","../IMAGES/lm19.jpg","../IMAGES/lm20.jpg",1,"thách đấu",110,70,3000000,"3.000.000",15,"Email, SĐT: Chưa kích hoạt","Giá thẻ cào: 3.000.000 VND","Giá chuyển khoản: 2.800.000 VND","Quánh giá : Acc nhiều skin,tướng chơi ngon");
				a[15]=new sanpham("../IMAGES/a5.jpg","../IMAGES/lm1.jpg","../IMAGES/lm2.jpg","../IMAGES/lm3.jpg","../IMAGES/lm4.jpg",1,"bạc",40,30,10000000,"10.000.000",16,"Email, SĐT: Chưa kích hoạt","Giá thẻ cào: 10.000.000 VND","Giá chuyển khoản: 9.500.000 VND","Quánh giá : Acc nhiều skin,tướng chơi ngon");
				a[16]=new sanpham("../IMAGES/a6.jpg","../IMAGES/lm5.jpg","../IMAGES/lm6.jpg","../IMAGES/lm7.jpg","../IMAGES/lm8.jpg",1,"váng",70,40,4000000,"4.000.000",17,"Email, SĐT: Chưa kích hoạt","Giá thẻ cào: 4.000.000 VND","Giá chuyển khoản: 3.800.000 VND","Quánh giá : Acc nhiều skin,tướng chơi ngon");
				a[17]=new sanpham("../IMAGES/a7.jpg","../IMAGES/lm9.jpg","../IMAGES/lm10.jpg","../IMAGES/lm11.jpg","../IMAGES/lm12.jpg",1,"kim cương",90,70,6500000,"6.500.000",18,"Email, SĐT: Chưa kích hoạt","Giá thẻ cào: 6.500.000 VND","Giá chuyển khoản: 6.000.000 VND","Quánh giá : Acc nhiều skin,tướng chơi ngon");
				a[18]=new sanpham("../IMAGES/a8.jpg","../IMAGES/lm13.jpg","../IMAGES/lm14.jpg","../IMAGES/lm15.jpg","../IMAGES/lm16.jpg",1,"vàng",70,40,5000000,"5.000.000",19,"Email, SĐT: Chưa kích hoạt","Giá thẻ cào: 5.000.000 VND","Giá chuyển khoản: 4.500.000 VND","Quánh giá : Acc nhiều skin,tướng chơi ngon");
				a[19]=new sanpham("../IMAGES/a9.jpg","../IMAGES/lm17.jpg","../IMAGES/lm18.jpg","../IMAGES/lm19.jpg","../IMAGES/lm20.jpg",0,"chưa rank",70,40,1500000,"1.500.000",20,"Email, SĐT: Chưa kích hoạt","Giá thẻ cào: 1.500.000 VND","Giá chuyển khoản: 1.400.000 VND","Quánh giá : Acc nhiều skin,tướng chơi ngon");
				a[20]=new sanpham("../IMAGES/a10.jpg","../IMAGES/lm1.jpg","../IMAGES/lm2.jpg","../IMAGES/lm3.jpg","../IMAGES/lm4.jpg",1,"bạc",40,50,4500000,"4.500.000",21,"Email, SĐT: Chưa kích hoạt","Giá thẻ cào: 4.500.000 VND","Giá chuyển khoản: 4.400.000 VND","Quánh giá : Acc nhiều skin,tướng chơi ngon");	
				a[21]=new sanpham("../IMAGES/a1.jpg","../IMAGES/lm4.jpg","../IMAGES/lm1.jpg","../IMAGES/lm2.jpg","../IMAGES/lm3.jpg",1,"thách đấu",100,80,15000000,"15.000.000",22,"Email, SĐT: Chưa kích hoạt","Giá thẻ cào: 15.000.000 VND","Giá chuyển khoản: 14.500.000 VND","Quánh giá : Acc nhiều skin,tướng chơi ngon");
				a[22]=new sanpham("../IMAGES/a2.jpg","../IMAGES/lm5.jpg","../IMAGES/lm6.jpg","../IMAGES/lm7.jpg","../IMAGES/lm8.jpg",1,"kim cương",100,40,7000000,"7.000.000",23,"Email, SĐT: Chưa kích hoạt","Giá thẻ cào: 7.000.000 VND","Giá chuyển khoản: 6.800.000 VND","Quánh giá : Acc nhiều skin,tướng chơi ngon");
				a[23]=new sanpham("../IMAGES/a1.jpg","../IMAGES/lm1.jpg","../IMAGES/lm2.jpg","../IMAGES/lm3.jpg","../IMAGES/lm4.jpg",1,"thách đấu",300,180,29000000,"29.000.000",24,"Email, SĐT: Chưa kích hoạt","Giá thẻ cào: 29.000.000 VND","Giá chuyển khoản: 18.000.000 VND","Quánh giá : Acc nhiều skin,tướng chơi ngon");	
			}
				function phantrang(s,p){
						mangsanpham();
						document.getElementById('tron').style.border="yellow 3px solid";
						document.getElementById('tron1').style.border="none";
						var limit=8;
						var dem=0;
						var s1;
						var start,per_page,current_page,record;
						if(typeof s == 'undefined' || s<1)
						{
							 start=0;
						}else{
							 start=s;
						}
						if(typeof p == 'undefined' || p<1)
						{
							
							 record=a.length;
							if(record>limit)
							{
								 per_page=Math.ceil(record/limit);
							}else{
								 per_page=1;
							}
						}else{
							 per_page=p;
						}
						for(var i=start;i<a.length;i++)
						{
							s1+="<div class='m-top'><div class='m-top1'><div class='div1'><a onclick='chuyentrang("+a[i].ma+");'><img src='"+a[i].img+"'></a></div><div class='div2'><ul class='font'><li>Rank:"+a[i].rank+"</li><li>Tướng:"+a[i].tuong+"</li><li>Trang phục:"+a[i].trangphuc+"</li></ul><span class='gia'>"+a[i].gia1+"đ</span><p class='buy' onclick='kiemTraMuaSP("+a[i].ma+");'><a>MUA NGAY</a></p></div></div></div>";
							dem++;
							if(dem==limit)
							{
								break;
							}

						}
						s1+="<div style='clear:both;'></div>";
						s1+="<ul class='pagination pm'>";
						    if(per_page>1)
						    {
						        current_page=(start/limit)+1;
						        
						        if(current_page!=1)
						        {
						            s1+="<li><a onclick='phantrang("+(start-limit)+","+per_page+");'>BACK</a></li>";
						            
						        }
						        for(var i=1;i<=per_page;i++)
						        {
						            if(i!=current_page)
						            {
						            	s1+="<li><a onclick='phantrang("+limit*(i-1)+","+per_page+");'>"+i+"</a></li>";
						            }
						            else{
						                s1+="<li class='active'><a>"+i+"</a></li>";
						            }
						        }
						        if(current_page!=per_page)
						        {
						        	start=parseInt(start);
			        				var kq=start+limit;
						            s1+="<li><a onclick='phantrang("+kq+","+per_page+");'>NEXT</a></li>";
						        }
						    }
						s1+="</ul>";
						document.getElementById('mid').innerHTML=s1;
			}








			function sanpham1(img,img1,img2,img3,img4,kiemtrarank,rank,vk_hokage,trangbivip,socaitrang,gia,gia1,ma,tt1,tt2,tt3,tt4,tt5,tt6)
			{
				this.img=img;
				this.img1=img1;
				this.img2=img2;
				this.img3=img3;
				this.img4=img4;
				this.kiemtrarank=kiemtrarank;
				this.rank=rank;
				this.vk_hokage=vk_hokage;
				this.trangbivip=trangbivip;
				this.socaitrang=socaitrang;
				this.gia=gia;
				this.gia1=gia1;
				this.ma=ma;
				this.tt1=tt1;
				this.tt2=tt2;
				this.tt3=tt3;
				this.tt4=tt4;
				this.tt5=tt5;
				this.tt6=tt6;
			}
			var ab=new Array();
			function mangsanpham1()
			{
				ab[0]=new sanpham1("../IMAGES/ll1.jpg","../IMAGES/lla2.png","../IMAGES/lla3.png","../IMAGES/lla4.png","../IMAGES/lla5.png",1,"2","có",8,7,20000000,"20.000.000",1,"Acc hệ hỏa(vủ khí Đao)","Tài khoản đạt rank 5,nạp khoản 50000k.","Có vủ khí hokage +12,điểm tấn công cơ bản cao.","Tấn cả trang bị là đồ (tinh thạch),có đâỳ đủ các chỉ sồ.","Tài khoản có 7 cải trang đã gép","Đánh giá acc chới khá ngon,chuyên ks hệ phong");
				ab[1]=new sanpham1("../IMAGES/ll2.jpg","../IMAGES/lla6.png","../IMAGES/lla7.png","../IMAGES/lla8.png","../IMAGES/lla9.png",1,"2","có",8,7,1500000,"1.500.000",2,"Acc hệ phong(vủ khí Dao)","Tài khoản đạt rank 8,nạp khoản 40000k.","Có vủ khí hokage +12,điểm tấn công cơ bản cao.","Tấn cả trang bị là đồ (tinh thạch),có đâỳ đủ các chỉ sồ.","Tài khoản có 12 cải trang đã gép","Đánh giá acc chới khá ngon,chuyên ks hệ lôi");
				ab[2]=new sanpham1("../IMAGES/ll3.jpg","../IMAGES/lla10.png","../IMAGES/lla11.png","../IMAGES/lla12.png","../IMAGES/lla13.png",1,"3","có",10,12,4000000,"4.000.000",3,"Acc hệ thổ(vủ khí Phi Tiêu)","Tài khoản đạt rank 6,nạp khoản 50000k.","Có vủ khí hokage +12,điểm tấn công cơ bản cao.","Tấn cả trang bị là đồ (tinh thạch),có đâỳ đủ các chỉ sồ.","Tài khoản có 25 cải trang đã gép","Đánh giá acc chới khá ngon,chuyên ks hệ thủy");
				ab[3]=new sanpham1("../IMAGES/ll4.jpg","../IMAGES/lla14.png","../IMAGES/lla15.png","../IMAGES/lla16.png","../IMAGES/lla12.png",1,"2","có",8,7,3500000,"3.500.000",4,"Acc hệ thủy(vủ khí Gậy)","Tài khoản đạt rank 10,nạp khoản 20000k.","Có vủ khí hokage +12,điểm tấn công cơ bản cao.","Tấn cả trang bị là đồ (tinh thạch),có đâỳ đủ các chỉ sồ.","Tài khoản có 10 cải trang đã gép","Đánh giá acc chới khá ngon,chuyên ks hệ hỏa");
				ab[4]=new sanpham1("../IMAGES/ll5.jpg","../IMAGES/lla17.png","../IMAGES/lla18.png","../IMAGES/lla19.png","../IMAGES/lla20.png",1,"5","không",10,5,550000,"550.000",5,"Acc hệ hỏa(vủ khí Đao)","Tài khoản đạt rank 7,nạp khoản 50000k.","Có vủ khí hokage +12,điểm tấn công cơ bản cao.","Tấn cả trang bị là đồ (tinh thạch),có đâỳ đủ các chỉ sồ.","Tài khoản có 21 cải trang đã gép","Đánh giá acc chới khá ngon,chuyên ks hệ phong");
				ab[5]=new sanpham1("../IMAGES/ll6.jpg","../IMAGES/lla2.png","../IMAGES/lla3.png","../IMAGES/lla4.png","../IMAGES/lla5.png",0,"chưa rank","có",11,5,7000000,"7.000.000",6,"Acc hệ hỏa(vủ khí Đao)","Tài khoản đạt rank 8,nạp khoản 20000k.","Có vủ khí hokage +12,điểm tấn công cơ bản cao.","Tấn cả trang bị là đồ (tinh thạch),có đâỳ đủ các chỉ sồ.","Tài khoản có 14 cải trang đã gép","Đánh giá acc chới khá ngon,chuyên ks hệ phong");
				ab[6]=new sanpham1("../IMAGES/ll1.jpg","../IMAGES/lla6.png","../IMAGES/lla7.png","../IMAGES/lla8.png","../IMAGES/lla9.png",1,"5","có",10,11,1505000,"1.505.000",7,"Acc hệ gậy(vủ khí Thủy)","Tài khoản đạt rank 5,nạp khoản 40000k.","Có vủ khí hokage +12,điểm tấn công cơ bản cao.","Tấn cả trang bị là đồ (tinh thạch),có đâỳ đủ các chỉ sồ.","Tài khoản có 7 cải trang đã gép","Đánh giá acc chới khá ngon,chuyên ks hệ phong");
				ab[7]=new sanpham1("../IMAGES/ll2.jpg","../IMAGES/lla10.png","../IMAGES/lla11.png","../IMAGES/lla12.png","../IMAGES/lla13.png",0,"chưa rank","không",11,20,4000000,"4.000.000",8,"Acc hệ hỏa(vủ khí Đao)","Tài khoản đạt rank 7,nạp khoản 50000k.","Có vủ khí hokage +12,điểm tấn công cơ bản cao.","Tấn cả trang bị là đồ (tinh thạch),có đâỳ đủ các chỉ sồ.","Tài khoản có 14 cải trang đã gép","Đánh giá acc chới khá ngon,chuyên ks hệ phong");
				ab[8]=new sanpham1("../IMAGES/ll3.jpg","../IMAGES/lla14.png","../IMAGES/lla14.png","../IMAGES/lla16.png","../IMAGES/lla12.png",0,"chưa rank","không",11,2,700000,"700.000",9,"Acc hệ hỏa(vủ khí Đao)","Tài khoản đạt rank 4,nạp khoản 40000k.","Có vủ khí hokage +12,điểm tấn công cơ bản cao.","Tấn cả trang bị là đồ (tinh thạch),có đâỳ đủ các chỉ sồ.","Tài khoản có 4 cải trang đã gép","Đánh giá acc chới khá ngon,chuyên ks hệ phong");
				ab[9]=new sanpham1("../IMAGES/ll4.jpg","../IMAGES/lla17.png","../IMAGES/lla18.png","../IMAGES/lla19.png","../IMAGES/lla20.png",1,"4","có",10,50,750000,"750.000",10,"Acc hệ hỏa(vủ khí Đao)","Tài khoản đạt rank 5,nạp khoản 45000k.","Có vủ khí hokage +12,điểm tấn công cơ bản cao.","Tấn cả trang bị là đồ (tinh thạch),có đâỳ đủ các chỉ sồ.","Tài khoản có 7 cải trang đã gép","Đánh giá acc chới khá ngon,chuyên ks hệ phong");
				ab[10]=new sanpham1("../IMAGES/ll5.jpg","../IMAGES/lla2.png","../IMAGES/lla3.png","../IMAGES/lla4.png","../IMAGES/lla5.png",1,"5","có",11,5,800000,"800.000",11,"Acc hệ hỏa(vủ khí Đao)","Tài khoản đạt rank 5,nạp khoản 52000k.","Có vủ khí hokage +12,điểm tấn công cơ bản cao.","Tấn cả trang bị là đồ (tinh thạch),có đâỳ đủ các chỉ sồ.","Tài khoản có 5 cải trang đã gép","Đánh giá acc chới khá ngon,chuyên ks hệ phong");
				ab[11]=new sanpham1("../IMAGES/ll6.jpg","../IMAGES/lla6.png","../IMAGES/lla7.png","../IMAGES/lla8.png","../IMAGES/lla9.png",0,"chưa rank","không",10,5,400000,"400.000",12,"Acc hệ phong (vủ khí Dao)","Tài khoản đạt rank 5,nạp khoản 20000k.","Có vủ khí hokage +12,điểm tấn công cơ bản cao.","Tấn cả trang bị là đồ (tinh thạch),có đâỳ đủ các chỉ sồ.","Tài khoản có 7 cải trang đã gép","Đánh giá acc chới khá ngon,chuyên ks hệ thổ");
				ab[12]=new sanpham1("../IMAGES/ll1.jpg","../IMAGES/lla10.png","../IMAGES/lla11.png","../IMAGES/lla12.png","../IMAGES/lla13.png",1,"8","có",11,23,1500000,"1.500.000",13,"Acc hệ hỏa(vủ khí Đao)","Tài khoản đạt rank 7,nạp khoản 2000k.","Có vủ khí hokage +12,điểm tấn công cơ bản cao.","Tấn cả trang bị là đồ (tinh thạch),có đâỳ đủ các chỉ sồ.","Tài khoản có 5 cải trang đã gép","Đánh giá acc chới khá ngon,chuyên ks hệ phong");
				ab[13]=new sanpham1("../IMAGES/ll2.jpg","../IMAGES/lla14.png","../IMAGES/lla15.png","../IMAGES/lla16.png","../IMAGES/lla12.png",1,"7","có",5,14,400000,"400.000",14,"Acc hệ hỏa(vủ khí Đao)","Tài khoản đạt rank 8,nạp khoản 41000k.","Có vủ khí hokage +12,điểm tấn công cơ bản cao.","Tấn cả trang bị là đồ (tinh thạch),có đâỳ đủ các chỉ sồ.","Tài khoản có 24 cải trang đã gép","Đánh giá acc chới khá ngon,chuyên ks hệ phong");
				ab[14]=new sanpham1("../IMAGES/ll3.jpg","../IMAGES/lla17.png","../IMAGES/lla18.png","../IMAGES/lla19.png","../IMAGES/lla20.png",0,"chưa rank","không",10,5,1600000,"1.600.000",15,"Acc hệ hỏa(vủ khí Đao)","Tài khoản đạt rank 5,nạp khoản 40000k.","Có vủ khí hokage +12,điểm tấn công cơ bản cao.","Tấn cả trang bị là đồ (tinh thạch),có đâỳ đủ các chỉ sồ.","Tài khoản có 14 cải trang đã gép","Đánh giá acc chới khá ngon,chuyên ks hệ phong");
				ab[15]=new sanpham1("../IMAGES/ll4.jpg","../IMAGES/lla2.png","../IMAGES/lla3.png","../IMAGES/lla4.png","../IMAGES/lla5.png",0,"chưa rank","không",11,12,4500000,"4.500.000",16,"Acc hệ hỏa(vủ khí Đao)","Tài khoản đạt rank 5,nạp khoản 30000k.","Có vủ khí hokage +12,điểm tấn công cơ bản cao.","Tấn cả trang bị là đồ (tinh thạch),có đâỳ đủ các chỉ sồ.","Tài khoản có 12 cải trang đã gép","Đánh giá acc chới khá ngon,chuyên ks hệ phong");
				ab[16]=new sanpham1("../IMAGES/ll5.jpg","../IMAGES/lla6.png","../IMAGES/lla7.png","../IMAGES/lla8.png","../IMAGES/lla9.png",0,"chưa rank","không",5,6,600000,"600.000",17,"Acc hệ hỏa(vủ khí Đao)","Tài khoản đạt rank 5,nạp khoản 50000k.","Có vủ khí hokage +12,điểm tấn công cơ bản cao.","Tấn cả trang bị là đồ (tinh thạch),có đâỳ đủ các chỉ sồ.","Tài khoản có 17 cải trang đã gép","Đánh giá acc chới khá ngon,chuyên ks hệ phong");
				ab[17]=new sanpham1("../IMAGES/ll6.jpg","../IMAGES/lla10.png","../IMAGES/lla11.png","../IMAGES/lla12.png","../IMAGES/lla13.png",0,"chưa rank","không",5,4,5000000,"5.000.000",18,"Acc hệ hỏa(vủ khí Đao)","Tài khoản đạt rank 5,nạp khoản 20000k.","Có vủ khí hokage +12,điểm tấn công cơ bản cao.","Tấn cả trang bị là đồ (tinh thạch),có đâỳ đủ các chỉ sồ.","Tài khoản có 21 cải trang đã gép","Đánh giá acc chới khá ngon,chuyên ks hệ phong");
				ab[18]=new sanpham1("../IMAGES/ll1.jpg","../IMAGES/lla14.png","../IMAGES/lla15.png","../IMAGES/lla16.png","../IMAGES/lla12.png",0,"chưa rank","không",10,5,800000,"800.000",19,"Acc hệ hỏa(vủ khí Đao)","Tài khoản đạt rank 5,nạp khoản 32000k.","Có vủ khí hokage +12,điểm tấn công cơ bản cao.","Tấn cả trang bị là đồ (tinh thạch),có đâỳ đủ các chỉ sồ.","Tài khoản có 7 cải trang đã gép","Đánh giá acc chới khá ngon,chuyên ks hệ phong");
				ab[19]=new sanpham1("../IMAGES/ll2.jpg","../IMAGES/lla17.png","../IMAGES/lla18.png","../IMAGES/lla19.png","../IMAGES/lla20.png",1,"8","có",11,5,1200000,"1.200.000",20,"Acc hệ hỏa(vủ khí Đao)","Tài khoản đạt rank 8,nạp khoản 4100k.","Có vủ khí hokage +12,điểm tấn công cơ bản cao.","Tấn cả trang bị là đồ (tinh thạch),có đâỳ đủ các chỉ sồ.","Tài khoản có 12 cải trang đã gép","Đánh giá acc chới khá ngon,chuyên ks hệ phong");		
				ab[20]=new sanpham1("../IMAGES/ll3.jpg","../IMAGES/lla2.png","../IMAGES/lla3.png","../IMAGES/lla4.png","../IMAGES/lla5.png",0,"chưa rank","không",5,6,20000000,"20.000.000",21,"Acc hệ hỏa(vủ khí Đao)","Tài khoản đạt rank 5,nạp khoản 50000k.","Có vủ khí hokage +12,điểm tấn công cơ bản cao.","Tấn cả trang bị là đồ (tinh thạch),có đâỳ đủ các chỉ sồ.","Tài khoản có 17 cải trang đã gép","Đánh giá acc chới khá ngon,chuyên ks hệ phong");	
				ab[21]=new sanpham1("../IMAGES/ll4.jpg","../IMAGES/lla6.png","../IMAGES/lla7.png","../IMAGES/lla8.png","../IMAGES/lla9.png",0,"chưa rank","có",50,46,15000000,"15.000.000",22,"Acc hệ hỏa(vủ khí Đao)","Tài khoản đạt rank 5,nạp khoản 20000k.","Có vủ khí hokage +12,điểm tấn công cơ bản cao.","Tấn cả trang bị là đồ (tinh thạch),có đâỳ đủ các chỉ sồ.","Tài khoản có 21 cải trang đã gép","Đánh giá acc chới khá ngon,chuyên ks hệ phong");
				ab[22]=new sanpham1("../IMAGES/ll1.jpg","../IMAGES/lla10.png","../IMAGES/lla11.png","../IMAGES/lla12.png","../IMAGES/lla13.png",0,"chưa rank","không",110,52,1600000,"1.600.000",23,"Acc hệ hỏa(vủ khí Đao)","Tài khoản đạt rank 5,nạp khoản 2000k.","Có vủ khí hokage +12,điểm tấn công cơ bản cao.","Tấn cả trang bị là đồ (tinh thạch),có đâỳ đủ các chỉ sồ.","Tài khoản có 7 cải trang đã gép","Đánh giá acc chới khá ngon,chuyên ks hệ phong");
				ab[23]=new sanpham1("../IMAGES/ll3.jpg","../IMAGES/lla17.png","../IMAGES/lla18.png","../IMAGES/lla19.png","../IMAGES/lla20.png",1,"10","có",110,52,3000000,"3.000.000",24,"Acc hệ thủy(vủ khí Gậy)","Tài khoản đạt rank 10,nạp khoản 20000k.","Có vủ khí hokage +12,điểm tấn công cơ bản cao.","Tấn cả trang bị là đồ (tinh thạch),có đâỳ đủ các chỉ sồ.","Tài khoản có 7 cải trang đã gép","Đánh giá acc chới khá ngon,chuyên ks hệ hỏa");
			}
				function phantrang1(s,p){
						mangsanpham1();
						var limit=8;
						var dem=0;
						var s1;
						var start,per_page,current_page,record;
						if(typeof s == 'undefined' || s<1)
						{
							 start=0;
						}else{
							 start=s;
						}
						if(typeof p == 'undefined' || p<1)
						{
							 record=a.length;
							if(record>limit)
							{
								 per_page=Math.ceil(record/limit);
							}else{
								 per_page=1;
							}
						}else{
							 per_page=p;
						}
						for(var i=start;i<ab.length;i++)
						{
							s1=s1+"<div class='m-top'><div class='m-top1'><div class='div1'><a onclick='chuyentrang1("+ab[i].ma+");'><img src='"+ab[i].img+"'></a></div><div class='div2'><ul class='font'><li>Rank:"+ab[i].rank+"</li><li>Vủ khí hokage :"+ab[i].vk_hokage+"</li><li>Trang bị +12 :"+ab[i].trangbivip+"</li><li>Số cải trang :"+ab[i].socaitrang+"</li></ul><span class='gia'>"+ab[i].gia1+"đ</span><p class='buy' onclick='kiemTraMuaSP1("+ab[i].ma+");'><a>MUA NGAY</a></p></div></div></div>";
							dem++;
							if(dem==limit)
							{
								break;
							}

						}
						s1+="<ul class='pagination pm'>";
						    if(per_page>1)
						    {
						        current_page=(start/limit)+1;
						        
						        if(current_page!=1)
						        {
						            s1+="<li><a onclick='phantrang1("+(start-limit)+","+per_page+");'>BACK</a></li>";
						            
						        }
						        for(var i=1;i<=per_page;i++)
						        {
						            if(i!=current_page)
						            {
						            	s1+="<li><a onclick='phantrang1("+limit*(i-1)+","+per_page+");'>"+i+"</a></li>";
						            }
						            else{
						                s1+="<li class='active'><a>"+i+"</a></li>";
						            }
						        }
						        if(current_page!=per_page)
						        {
						        	start=parseInt(start);
			        				var kq=start+limit;
						            s1+="<li><a onclick='phantrang1("+kq+","+per_page+");'>NEXT</a></li>";
						        }
						    }
						s1+="</ul>";
						document.getElementById('mid').innerHTML=s1;
			}
			function dangxuat()
		{
			window.location.replace("./textjs.html");
		}
		function reset()
		{
			document.getElementById('mid').reset();
		}
		function kiemtra(gia,rank,s,p)
		{
			var s1,s2,dem4=0;
			mangsanpham();
			var b=new Array();
			var j=0;
			gia=parseInt(gia);
			if(Number.isNaN(gia))
			{
				s2="<div class='call'>SẢN PHẨM BẠN CHỌN HIỆN KHÔNG ĐƯỢC TÌM THẤY!</div>";
				document.getElementById('mid').innerHTML=s2;
			}else if(rank==0){
				
				for(var i=0;i<a.length;i++)
				{
					if(a[i].gia<=gia)
					{
							b[j++]=new sanpham(a[i].img,a[i].img1,a[i].img2,a[i].img3,a[i].img4,a[i].kiemtrarank,a[i].rank,a[i].tuong,a[i].trangphuc,a[i].gia,a[i].gia1,a[i].ma,a[i].tt1,a[i].tt2,a[i].tt3,a[i].tt4,a[i].tt5);
							dem4++;
					}
				}
			}
			else{
				for(var i=0;i<a.length;i++)
				{
					if(a[i].gia<=gia)
					{
						if(a[i].rank==rank){
							b[j++]=new sanpham(a[i].img,a[i].img1,a[i].img2,a[i].img3,a[i].img4,a[i].kiemtrarank,a[i].rank,a[i].tuong,a[i].trangphuc,a[i].gia,a[i].gia1,a[i].ma,a[i].tt1,a[i].tt2,a[i].tt3,a[i].tt4,a[i].tt5);
							dem4++;
						}
					}
				}
			}
			if(dem4==0)
			{
				s2="<div class='call'>SẢN PHẨM BẠN CHỌN HIỆN KHÔNG ĐƯỢC TÌM THẤY!</div>";
				document.getElementById('mid').innerHTML=s2;
				return false;
			}
			var limit=8,dem=0;
			var start,per_page,current_page,record;
			mangsanpham();
			if(typeof s == 'undefined' || s<1)
						{
							 start=0;
						}else{
							 start=s;
						}
						if(typeof p == 'undefined' || p<1)
						{
							record=b.length;
							if(record>limit)
							{
								 per_page=Math.ceil(record/limit);
							}else{
								 per_page=1;
							}
						}else{
							 per_page=p;
						}
			for(var i=start;i<b.length;i++)
			{
					s1=s1+"<div class='m-top'><div class='m-top1'><div class='div1'><a onclick='chuyentrang("+b[i].ma+");'><img src='"+b[i].img+"'></a></div><div class='div2'><ul class='font'><li>Rank:"+b[i].rank+"</li><li>Tướng:"+b[i].tuong+"</li><li>Trang phục:"+b[i].trangphuc+"</li></ul><span class='gia'>"+b[i].gia1+"đ</span><p class='buy' onclick='kiemTraMuaSP("+b[i].ma+");'><a>MUA NGAY</a></p></div></div></div>";
					dem++;
					if(dem==limit)
					{
						break;
					}
			}
			s1+="<div style='clear:both;'></div>";
			s1=s1+"<ul class='pagination pm'>";
				if(per_page>1)
						    {
						        current_page=(start/limit)+1;
						        
						        if(current_page!=1)
						        {
						            s1+="<li><a onclick='kiemtra("+gia+","+rank+","+(start-limit)+","+per_page+");'>BACK</a></li>";
						            
						        }
						        for(var i=1;i<=per_page;i++)
						        {
						            if(i!=current_page)
						            {
						            	s1+="<li><a onclick='kiemtra("+gia+","+rank+","+limit*(i-1)+","+per_page+");'>"+i+"</a></li>";
						            }
						            else{
						                s1+="<li class='active'><a>"+i+"</a></li>";
						            }
						        }
						        if(current_page!=per_page)
						        {
						        	start=parseInt(start);
			        				var kq=start+limit;
						            s1+="<li><a onclick='kiemtra("+gia+","+rank+","+kq+","+per_page+");'>NEXT</a></li>";
						        }
						    }
			s1=s1+"</ul>";
			document.getElementById('mid').innerHTML=s1;
		}
		function kiemtra1(gia,rank,s,p)
		{
			var s1,s2,dem4=0;
			mangsanpham1();
			var b=new Array();
			var j=0;
			gia=parseInt(gia);
			if(Number.isNaN(gia))
			{
				s2="<div class='call'>SẢN PHẨM BẠN CHỌN HIỆN KHÔNG ĐƯỢC TÌM THẤY!</div>";
				document.getElementById('mid').innerHTML=s2;
			}else if(rank==0){
				
				for(var i=0;i<ab.length;i++)
				{
					if(ab[i].gia<=gia)
					{
							b[j++]=new sanpham1(ab[i].img,a[i].img1,ab[i].img2,ab[i].img3,ab[i].img4,ab[i].kiemtrarank,ab[i].rank,ab[i].vk_hokage,ab[i].trangbivip,ab[i].socaitrang,ab[i].gia,ab[i].gia1,ab[i].ma,ab[i].tt1,ab[i].tt2,ab[i].tt3,ab[i].tt4,ab[i].tt5);
							dem4++;
					}
				}
			}
			else{
				for(var i=0;i<ab.length;i++)
				{
					if(ab[i].gia<=gia)
					{
						if(ab[i].rank==rank){
							b[j++]=new sanpham1(ab[i].img,a[i].img1,ab[i].img2,ab[i].img3,ab[i].img4,ab[i].kiemtrarank,ab[i].rank,ab[i].vk_hokage,ab[i].trangbivip,ab[i].socaitrang,ab[i].gia,ab[i].gia1,ab[i].ma,ab[i].tt1,ab[i].tt2,ab[i].tt3,ab[i].tt4,ab[i].tt5);
							dem4++;
						}
					}
				}
			}
			if(dem4==0)
			{
				s2="<div class='call'>SẢN PHẨM BẠN CHỌN HIỆN KHÔNG ĐƯỢC TÌM THẤY!</div>";
				document.getElementById('mid').innerHTML=s2;
				return false;
			}
			var limit=8,dem=0;
			var start,per_page,current_page,record;
			mangsanpham1();
			if(typeof s == 'undefined' || s<1)
						{
							 start=0;
						}else{
							 start=s;
						}
						if(typeof p == 'undefined' || p<1)
						{
							record=b.length;
							if(record>limit)
							{
								 per_page=Math.ceil(record/limit);
							}else{
								 per_page=1;
							}
						}else{
							 per_page=p;
						}
			for(var i=start;i<b.length;i++)
			{
					s1=s1+"<div class='m-top'><div class='m-top1'><div class='div1'><a onclick='chuyentrang1("+b[i].ma+");'><img src='"+b[i].img+"'></a></div><div class='div2'><ul class='font'><li>Rank:"+b[i].rank+"</li><li>Vủ khí hokage :"+b[i].vk_hokage+"</li><li>Trang bị +12 :"+b[i].trangbivip+"</li><li>Số cải trang :"+b[i].socaitrang+"</li></ul><span class='gia'>"+b[i].gia1+"đ</span><p class='buy' onclick='kiemTraMuaSP1("+b[i].ma+");'><a>MUA NGAY</a></p></div></div></div>";
					dem++;
					if(dem==limit)
					{
						break;
					}
			}
			s1+="<div style='clear:both;'></div>";
			s1=s1+"<ul class='pagination pm'>";
				if(per_page>1)
						    {
						        current_page=(start/limit)+1;
						        
						        if(current_page!=1)
						        {
						            s1+="<li><a onclick='kiemtra1("+gia+","+rank+","+(start-limit)+","+per_page+");'>BACK</a></li>";
						            
						        }
						        for(var i=1;i<=per_page;i++)
						        {
						            if(i!=current_page)
						            {
						            	s1+="<li><a onclick='kiemtra1("+gia+","+rank+","+limit*(i-1)+","+per_page+");'>"+i+"</a></li>";
						            }
						            else{
						                s1+="<li class='active'><a>"+i+"</a></li>";
						            }
						        }
						        if(current_page!=per_page)
						        {
						        	start=parseInt(start);
			        				var kq=start+limit;
						            s1+="<li><a onclick='kiemtra1("+gia+","+rank+","+kq+","+per_page+");'>NEXT</a></li>";
						        }
						    }
			s1=s1+"</ul>";
			document.getElementById('mid').innerHTML=s1;
		}
		function timkiem1()
		{
			var d=document.getElementById('s1').value;
			var r=document.getElementById('s2').value;
			r=r.toLowerCase();
					if(d!="")
					{
						if(r!="")
						{
							kiemtra1(d,r,0,0);
						}else{
							kiemtra1(d,0,0,0);
						}
					}else if(d=="")
					{
						if(r!="")
						{
							kiemtra1(40000000,r,0,0);
						}else{
							return false;
						}
					}
		}
		function timkiem()
		{
			var d=document.getElementById('s1').value;
			var r=document.getElementById('s2').value;
			r=r.toLowerCase();
					if(d!="")
					{
						if(r!="")
						{
							kiemtra(d,r,0,0);
						}else{
							kiemtra(d,0,0,0);
						}
					}else if(d=="")
					{
						if(r!="")
						{
							kiemtra(40000000,r,0,0);
						}else{
							return false;
						}
					}
		}
		function kiemtraDK(){
			var a=document.getElementById('tk').value;
			var b=document.getElementById('mk').value;
			var c=document.getElementById('mkl').value;
			var vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
			var mobile = $('#mobile').val();
			if(mobile !==''){
				if (vnf_regex.test(mobile) == false) 
				{
					alert('Số điện thoại của bạn không đúng định dạng!');
					return false;
				}
			}else{
				alert('Bạn chưa điền số điện thoại!');
				return false;
			}

			for(var i=0;i<a.length;i++)
			{
				if(a[i]==" "){
					alert("Tên đăng nhập ko được chứa khoảng trắng");
					return false;
				}
			}
			for(var i=0;i<b.length;i++)
			{
				if(b[i]==" "){
					alert("Mật khẩu ko được chứa khoảng trắng");
					return false;
				}
			}
			if(a.length<6 || a.length>=15){
				alert("Tên đăng nhập phải có từ 6-15 kí tự");
				return false;
			}else if((b.length<8 || b.length>=16)||a===b){
				alert("Mật khẩu phải có ít nhất 8-16 kí tự và phải khác với tài khoản");
				return false;
			}else if(c!==b){
				alert("Xác nhận mật khẩu không đúng");
				return false;
			}
			else{
				if (typeof(Storage) !== "undefined") {
    				var data = localStorage.length;
   					for(var i=0;i<data;i++)
   					{
   						if(localStorage.key(a)==a)
   						{
   							alert("Tài khoản đã tồn tại");
   							return false;
   						}
   					}
   					localStorage[a] = b;
				} else {
   					alert('Trình duyệt của bạn không hỗ trợ');
				}

					alert("Bạn đã đăng kí thành công");
			}
		}
		function kiemtraDN()
		{
			var c=document.getElementById('tk1').value;
			var d=document.getElementById('mk1').value;
			var dem=0;
			if(c=="nguoilaoi"&&d=="langla1")
				{
					window.location="./admin.html?tendangnhap="+c;
					return true;
				}
			for(var i=0;i<localStorage.length;i++)
			{
				if(localStorage.key(i)==c && localStorage.getItem(localStorage.key(i))==d)
				{
					 window.location="./textjs.html?tendangnhap="+c;
					alert("Bạn đã đăng nhập thành công");
					return true;
				}
			}
			if(dem==0)
			{
				alert("Tài khoản hoặc mật khẩu không chính xác");
			}
		}
		function dangky()
		{
			var s5;
			s5="<div id='dkdn'><div><ul>";
			s5+="<li style='color:yellow;cursor:pointer;'>ĐĂNG KÝ</li><LI style='cursor:pointer;' onclick='dangnhap();'>ĐĂNG NHẬP</LI></ul></div>";
			s5+="<div style='clear: both;'><div><input type='text' name='taikhoan' id='tk' value='' placeholder='Tài khoản'size='45'>";
			s5+="</div><div><input type='text' name='sdt' id='mobile' value='' placeholder='Số điện thoại'size='45'></div><div>";
			s5+="<input type='password' name='matkhau' id='mk' value='' placeholder='Mật khẩu'size='45'>";
			s5+="</div><div><input type='password' name='mkl' id='mkl' value='' placeholder='Nhập lại mật khẩu'size='45'></div>";
			s5+="<div class='ps1'><input type='button' name='submit' value='Đăng kí' id='submit' onclick='kiemtraDK();'>";
			s5+="</div></div>";
			document.getElementById('mid').innerHTML=s5;
		}
		function dangnhap(){
			var s6;
			s6="<div id='dkdn'><div><ul>";
			s6+="<li style='cursor:pointer;' onclick='dangky();'>ĐĂNG KÝ</li><LI style='cursor:pointer;color:yellow;'>ĐĂNG NHẬP</LI></ul></div>";
			s6+="<div style='clear: both;'><div><input type='text' name='taikhoan' id='tk1' value='' placeholder='Tài khoản'size='45'>";
			s6+="</div><div>";
			s6+="<input type='password' name='matkhau' id='mk1' value='' placeholder='Mật khẩu'size='45'>";
			s6+="</div>";
			s6+="<div class='ps1'><input type='button' name='submit' value='Đăng nhập' id='submit'onclick='kiemtraDN();'>";
			s6+="</div></div>";
			document.getElementById('mid').innerHTML=s6;
		}
		function GetURLParameter(sParam)
			{
				    var sPageURL = window.location.search.substring(1);
				    var sURLVariables = sPageURL.split('&');
				    for (var i = 0; i < sURLVariables.length; i++) 
				    {
				        var sParameterName = sURLVariables[i].split('=');
				        if (sParameterName[0] == sParam)
				        {
				            return sParameterName[1];
				        }
				    }
			}
		var c=new Array();
		var cd=new Array();
		var j=0,j1=0;
		function kiemTraMuaSP(masp)
		{
			mangsanpham();
			var tk=GetURLParameter('tendangnhap');
			var dem10=0;
			for(var i=0;i<localStorage.length;i++)
			{
				if(localStorage.key(i)==tk)
				{
					dem10++;
				}
			}
			if(dem10!=1)
			{
				alert("Bạn cần đăng nhập để mua sản phẩm");
			}else{
				for(var i=0;i<a.length;i++)
				{
					if(a[i].ma==masp)
					{
						c[j++]=new sanpham(a[i].img,a[i].img1,a[i].img2,a[i].img3,a[i].img4,a[i].kiemtrarank,a[i].rank,a[i].tuong,a[i].trangphuc,a[i].gia,a[i].gia1,a[i].ma,a[i].tt1,a[i].tt2,a[i].tt3,a[i].tt4,a[i].tt5);
					}
				}
				alert("Cảm ơn bạn đã mua sản phẩm của chúng tôi");
			}
		}
		function kiemTraMuaSP1(masp)
		{
			mangsanpham1();
			var tk=GetURLParameter('tendangnhap');
			var dem=0;
			for(var i=0;i<localStorage.length;i++)
			{
				if(localStorage.key(i)==tk)
				{
					dem++;
				}
			}
			if(dem!=1)
			{
				alert("Bạn cần đăng nhập để mua sản phẩm");
			}else{
				for(var i=0;i<ab.length;i++)
				{
					if(ab[i].ma==masp)
					{
						cd[j1++]=new sanpham1(ab[i].img,a[i].img1,ab[i].img2,ab[i].img3,ab[i].img4,ab[i].kiemtrarank,ab[i].rank,ab[i].vk_hokage,ab[i].trangbivip,ab[i].socaitrang,ab[i].gia,ab[i].gia1,ab[i].ma,ab[i].tt1,ab[i].tt2,ab[i].tt3,ab[i].tt4,ab[i].tt5);
					}
				}
				alert("Cảm ơn bạn đã mua sản phẩm của chúng tôi");
			}
		}

////////////////////////////////////////////////////////////////////
		function xoaGH(s,p,masp,gh)
		{
			var s6,tong=0,j=0;
			var limit=8,dem=0,dem9=0;
			var start,per_page,current_page,record;
			if(typeof s == 'undefined' || s<1)
						{
							 start=0;
						}else{
							 start=s;
						}
						if(typeof p == 'undefined' || p<1)
						{
							record=gh.length;
							if(record>limit)
							{
								 per_page=Math.ceil(record/limit);
							}else{
								 per_page=1;
							}
						}else{
							 per_page=p;
						}
			for(var i=0;i<gh.length;i++)
			{
				if(c[i].ma==masp)
				{
					c.splice(i,1);
					break;
				}
			}
			for(var i=0;i<c.length;i++)
			{
				tong=tong+c[i].gia;
			}
			for(var i=start;i<c.length;i++)
			{
				s6+="<div class='m-top'><div class='m-top1'><div class='div1'><a href='./chitiet1_LANGLA.html?id="+c[i].ma+"&ten=lienminhhuyenthoai'><img src='"+c[i].img+"'></a></div><div class='div2'><ul class='font'><li>Rank:"+c[i].rank+"</li><li>Tướng:"+c[i].tuong+"</li><li>Trang phục:"+c[i].trangphuc+"</li></ul><span class='gia'>"+c[i].gia1+"đ</span><p class='buy'><a onclick='xoaGH("+0+","+0+","+c[i].ma+");'>XÓA</a></p></div></div></div>";
				dem++;
				if(dem==limit)
				{
					break;
				}
			}
			s6+="<h2 style=' clear:both; margin-left:1%; color:yellow;'>TỔNG SỐ TIỀN LÀ: "+tong+" đồng</h2>";
			if(dem==0)
			{
				var s7;
				s7="<div class='call'>Bạn chưa mua gì cả!</div>";
				document.getElementById('mid').innerHTML=s7;
				return false;
			}
			s6=s6+"<ul class='pagination pm'>";
				if(per_page>1)
						    {
						        current_page=(start/limit)+1;
						        
						        if(current_page!=1)
						        {
						            s6+="<li><a onclick='xoaGH("+(start-limit)+","+per_page+");'>BACK</a></li>";
						            
						        }
						        for(var i=1;i<=per_page;i++)
						        {
						            if(i!=current_page)
						            {
						            	s6+="<li><a onclick='xoaGH("+limit*(i-1)+","+per_page+");'>"+i+"</a></li>";
						            }
						            else{
						                s6+="<li class='active'><a>"+i+"</a></li>";
						            }
						        }
						        if(current_page!=per_page)
						        {
						        	start=parseInt(start);
			        				var kq=start+limit;
						            s6+="<li><a onclick='xoaGH("+kq+","+per_page+");'>NEXT</a></li>";
						        }
						    }
			s6=s6+"</ul>";
			document.getElementById('mid').innerHTML=s6;

		}
/////////////////////////////////////////////////////////////////////////////




		function kiemtraGH(s,p)
		{
			var gh=new Array();
			var j=0;
			var dem2=0;dem3=0,start1=0;
			for(var i=0;i<c.length;i++)
			{
				gh[j++]=new sanpham(c[i].img,c[i].img1,c[i].img2,c[i].img3,c[i].img4,c[i].kiemtrarank,c[i].rank,c[i].tuong,c[i].trangphuc,c[i].gia,c[i].gia1,c[i].ma,c[i].tt1,c[i].tt2,c[i].tt3,c[i].tt4,c[i].tt5);
				dem2++;
			}
			for(var i=0;i<cd.length;i++)
			{
				gh[j++]=new sanpham1(cd[i].img,cd[i].img1,cd[i].img2,cd[i].img3,cd[i].img4,cd[i].kiemtrarank,cd[i].rank,cd[i].vk_hokage,cd[i].trangbivip,cd[i].socaitrang,cd[i].gia,cd[i].gia1,cd[i].ma,cd[i].tt1,cd[i].tt2,cd[i].tt3,cd[i].tt4,cd[i].tt5);
				dem3++;
			}
			var s6,tong=0,j=0;
			var limit=8,dem=0;
			var start,per_page,current_page,record;
			if(typeof s == 'undefined' || s<1)
			{
				start=0;
			}else{
				start=s;
				start1=start;
			}
			if(typeof p == 'undefined' || p<1)
			{
				record=c.length+cd.length;
				if(record>limit)
				{
					per_page=Math.ceil(record/limit);
				}else{
					per_page=1;
				}
			}else{
				per_page=p;
			}
			for(var i=0;i<c.length;i++)
			{
				tong=tong+c[i].gia;
			}
			for(var i=0;i<cd.length;i++)
			{
				tong=tong+cd[i].gia;
			}
			if(cd.length==0)
			{
				for(var i=start;i<c.length;i++)
				{
					s6+="<div class='m-top'><div class='m-top1'><div class='div1'><a href='./chitietWEB_lol.html?id="+c[i].ma+"&ten=lienminhhuyenthoai'><img src='"+c[i].img+"'></a></div><div class='div2'><ul class='font'><li>Rank:"+c[i].rank+"</li><li>Tướng:"+c[i].tuong+"</li><li>Trang phục:"+c[i].trangphuc+"</li></ul><span class='gia'>"+c[i].gia1+"đ</span></div></div></div>";
					dem++;
					if(dem==limit)
					{
						break;
					}
				}
			}
			else if(c.length==0)
			{
				for(var i=start;i<cd.length;i++)
				{
					s6+="<div class='m-top'><div class='m-top1'><div class='div1'><a href='./chitiet1_LANGLA.html?id="+cd[i].ma+"&ten=langla'><img src='"+cd[i].img+"'></a></div><div class='div2'><ul class='font'><li>Rank:"+cd[i].rank+"</li><li>Vủ khí hokage :"+cd[i].vk_hokage+"</li><li>Trang bị +12 :"+cd[i].trangbivip+"</li><li>Số cải trang :"+cd[i].socaitrang+"</li></ul><span class='gia'>"+cd[i].gia1+"đ</span></div></div></div>";
					dem++;
					if(dem==limit)
					{
						break;
					}
				}
			}
			else{
				for(var i=start;i<gh.length;i++)
				{
					if(start>=c.length)
					{
						break;
					}
					s6+="<div class='m-top'><div class='m-top1'><div class='div1'><a href='./chitietWEB_lol.html?id="+gh[i].ma+"&ten=lienminhhuyenthoai'><img src='"+gh[i].img+"'></a></div><div class='div2'><ul class='font'><li>Rank:"+gh[i].rank+"</li><li>Tướng:"+gh[i].tuong+"</li><li>Trang phục:"+gh[i].trangphuc+"</li></ul><span class='gia'>"+gh[i].gia1+"đ</span></div></div></div>";
						dem2--;
						dem++;
						start++;
					if(dem==limit)
						{
							break;
						}
				}
				if(start>=c.length)
				{
						for(var i=start;i<gh.length;i++)
						{
							if(dem==limit)
							{
									break;
							}
							s6+="<div class='m-top'><div class='m-top1'><div class='div1'><a href='./chitiet1_LANGLA.html?id="+gh[i].ma+"&ten=langla'><img src='"+gh[i].img+"'></a></div><div class='div2'><ul class='font'><li>Rank:"+gh[i].rank+"</li><li>Vủ khí hokage :"+gh[i].vk_hokage+"</li><li>Trang bị +12 :"+gh[i].trangbivip+"</li><li>Số cải trang :"+gh[i].socaitrang+"</li></ul><span class='gia'>"+gh[i].gia1+"đ</span></div></div></div>";
							dem3--;
							dem++;
							if(dem==limit)
							{
									break;
							}
						}
				}
			}
			s6+="<h2 style=' clear:both; margin-left:1%; color:yellow;'>TỔNG SỐ TIỀN LÀ: "+tong+" đồng</h2>";
			if(dem==0)
			{
				var s7;
				s7="<div class='call'>Bạn chưa mua gì cả!</div>";
				document.getElementById('mid').innerHTML=s7;
				return false;
			}
			s6=s6+"<ul class='pagination pm'>";
				if(per_page>1)
						    {
						    	start=start1;
						        current_page=(start/limit)+1;
						        
						        if(current_page!=1)
						        {
						            s6+="<li><a onclick='kiemtraGH("+(start-limit)+","+per_page+");'>BACK</a></li>";
						            
						        }
						        for(var i=1;i<=per_page;i++)
						        {
						            if(i!=current_page)
						            {
						            	s6+="<li><a onclick='kiemtraGH("+limit*(i-1)+","+per_page+");'>"+i+"</a></li>";
						            }
						            else{
						                s6+="<li class='active'><a>"+i+"</a></li>";
						            }
						        }
						        if(current_page!=per_page)
						        {
						        	start=parseInt(start);
			        				var kq=start+limit;
						            s6+="<li><a onclick='kiemtraGH("+kq+","+per_page+","+dem2+","+dem3+");'>NEXT</a></li>";
						        }
						    }
			s6=s6+"</ul>";
			document.getElementById('mid').innerHTML=s6;
		}
		function locketqua1()
		{
			var s;
			s="<input type='button' name='button1' value='Tìm kiếm'onclick='timkiem();'>";
			s+="<input type='reset' name='button2' value='Hủy bỏ' onclick='reset();'>";
			document.getElementById('ps').innerHTML=s;
		}
		function locketqua2()
		{
			var s;
			s="<input type='button' name='button1' value='Tìm kiếm'onclick='timkiem1();'>";
			s+="<input type='reset' name='button2' value='Hủy bỏ' onclick='reset();'>";
			document.getElementById('ps').innerHTML=s;
		}
		function border1()
		{
			phantrang(0,0);
			locketqua1();
			document.getElementById('tron').style.border="yellow 3px solid";
			document.getElementById('tron1').style.border="none";
		}
		function border2()
		{
			phantrang1(0,0);
			locketqua2();
			document.getElementById('tron1').style.border="yellow 3px solid";
			document.getElementById('tron').style.border="none";
		}
		function chuyentrang(masp)
		{
			var tk=GetURLParameter('tendangnhap');
			var dem=0;
			for(var i=0;i<localStorage.length;i++)
			{
				if(localStorage.key(i)==tk)
				{
					dem++;
				}
			}
			if(dem!=1)
			{
				window.location="./chitietWEB_lol.html?id="+masp+"&sanpham=lienminhhuyenthoai";
			}else{
				window.location="./chitietWEB_lol.html?tendangnhap="+tk+"&id="+masp+"&sanpham=lienminhhuyenthoai";
			}
		}
		function chuyentrang1(masp)
		{
			var tk=GetURLParameter('tendangnhap');
			var dem=0;
			for(var i=0;i<localStorage.length;i++)
			{
				if(localStorage.key(i)==tk)
				{
					dem++;
				}
			}
			if(dem!=1)
			{
				window.location="./chitiet1_LANGLA.html?id="+masp+"&sanpham=langla";
			}else{
				window.location="./chitiet1_LANGLA.html?tendangnhap="+tk+"&id="+masp+"&sanpham=langla";
			}
		}

	var sdt=new Array();
	function sdt1(){
		for(var i=0;i<localStorage.length;i++)
		{
			if(i<10){
				sdt[i]="03"+i+"226"+i+"40"+i;
			}
			else{
				sdt[i]="09"+i+"4551"+i;
			}
		}
	}
	function xoakh(j){
		if (confirm('Bạn có chắc chắn muốn xóa không!')) {
			if ( typeof(Storage) !== "undefined") {
				for (var i = 0; i < localStorage.length; i++) {
					if(i==j)
					{
						var c=localStorage.key(i);
			    		localStorage.removeItem(c);
					}
				}
		    alert('Xóa Thành công');
		    qlkh();
			} else {
			    alert('Trình duyệt của bạn đã quá cũ. Hãy nâng cấp trình duyệt ngay!');
			}
		}else{
			return false;
		}
	}
	function kt(j)
	{
		var a=document.getElementById('mkm').value;
		var b=document.getElementById('xnmk').value;
		if(a!=b)
		{
			alert("Đề nghị admin nhập cho đúng ");
		}
		else{	
			for(var i=0;i<localStorage.length;i++)
			{
				if(i==j)
				{
					var c=localStorage.key(i);
					localStorage[c]=a;
					alert("Admin đã sữa thông tin thành công");
				}
			}
		}
		qlkh();
	}
	function suakh(j)
				{
					var s;
					s="<div style='clear: both; width: 50%;'><table><body><tr><td>Tài khoản:</td><td>";
					s+="<input type='text' name='taikhoan' value='"+localStorage.key(j)+"' disabled></td></tr><tr><td>Mật khẩu mới:</td><td><input type='text' name='mkm' value='' id='mkm'></td></tr><tr><td>Xác nhận mật khẩu:</td>";
					s+="<td><input type='text' name='xnmk' value='' id='xnmk'></td></tr><tr><td colspan='2' align='center'><input type='button' name='button' value='Thay đổi' onclick='kt("+j+");'></td></tr></body></table></div>";
					document.getElementById('content').innerHTML=s;
					document.getElementById('content1').innerHTML="";
				}
	function themkh()
	{
		var tk=document.getElementById('tk1').value;
		var mk=document.getElementById('mk1').value;
			var vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
			var mobile = $('.mobile').val();
			if(mobile !==''){
				if (vnf_regex.test(mobile) == false) 
				{
					alert('Số điện thoại của bạn không đúng định dạng!');
					return false;
				}
			}else{
				alert('Bạn chưa điền số điện thoại!');
				return false;
			}
			for(var i=0;i<tk.length;i++)
			{
				if(tk[i]==" "){
					alert("Tên đăng nhập ko được chứa khoảng trắng");
					return false;
				}
			}
			for(var i=0;i<mk.length;i++)
			{
				if(mk[i]==" "){
					alert("Mật khẩu ko được chứa khoảng trắng");
					return false;
				}
			}
			if(tk.length<6 || tk.length>=15){
				alert("Tên đăng nhập phải có từ 6-15 kí tự");
				return false;
			}else if((mk.length<8 || mk.length>=16)||tk===mk){
				alert("Mật khẩu phải có ít nhất 8-16 kí tự và phải khác với tài khoản");
				return false;
			}
		for(var i=0;i<localStorage.length;i++)
		{
			if(localStorage.key(i)==tk)
			{
				alert("Tài khoản đã tồn tại");
				return false;
			}
		}
		localStorage[tk]=mk;
		alert("Admin đã thêm thành công");
		qlkh();

	}
	function themsp()
	{
		alert("Admin đã thêm thành công");

	}
	function qlkh()
	{
		sdt1();
		var s,s1;
		s="<div id='qlkh'>";
		s+="<table align='center' border='1' cellspacing='20'cellpadding='20'><thead><tr><th>id</th><th>Tài khoản</th><th>Mật khẩu</th><th>Số điện thoại</th>";
		s+="<th>Sữa</th><th>Xóa</th></tr></thead><tbody>";
		for(var i=0;i<localStorage.length;i++)
		{
			s+="<tr>";
			s+="<td>"+i+"</td>";
			s+="<td>"+localStorage.key(i)+"</td>";
			var a=localStorage.key(i);
			s+="<td>"+localStorage.getItem(localStorage.key(i))+"</td>";
			s+="<td>"+sdt[i]+"</td>";
			s+="<td><img src='../IMAGES/check_1.jpg' onclick='suakh("+i+");'style='cursor:pointer;'></td>";
			s+="<td><img src='../IMAGES/check_1.jpg' onclick='xoakh("+i+");' style='cursor:pointer;'></td>";
			s+="</tr>";
		}
		s+="</tbody>";
		s+="</table>";
		s+="</div>";
		s1="<div style='font-size:36px; color:#00F; text-align:center;clear:both;'>Thêm khách hàng</div>";


		s1+="<div class='thaotac1'>Tên tài khoản : <input style='text' placeholder='Tên tài khoản mói' id='tk1' ></div>";
		s1+="<div class='thaotac1'>Nhập SĐT : <input style='text'  class='mobile' placeholder='Số điện thoại mói' id='sdt1'></div>";
		s1+="<div class='thaotac1'>Nhập mật khẩu  :<input style='text' placeholder='Mật khẩu mói' id='mk1'></div>";
		s1+="<div class='thaotac1'><input type='button' id='up' value='UPDATE' onclick='themkh();'/></div>";
		document.getElementById('content1').innerHTML=s;
		document.getElementById('content').innerHTML=s1;
		document.getElementById('qlkh').style.background="blue";
		document.getElementById('ttr').style.background="black";
		document.getElementById('qlsp').style.background="black";
	}
	function xoa(){
		return confirm("Bạn có chắc chắn muốn xóa không");
	}
	function qlsp()
	{
		var s,s1;
		mangsanpham();
		var tk=GetURLParameter('tendangnhap');
		s="<div id='qlsp'>";
		s+="<table align='center' border='1' cellspacing='20'cellpadding='20'><thead><tr><th>id</th><th>Rank</th><th>Tướng</th><th>Trang phục</th><th>Giá</th><th>Link hình</th>";
		s+="<th>Sữa</th><th>Xóa</th></tr></thead><tbody>";
		for(var i=0;i<a.length;i++)
		{
			s+="<tr>";
			s+="<td>"+a[i].ma+"</td>";
			s+="<td>"+a[i].rank+"</td>";
			s+="<td>"+a[i].tuong+"</td>";
			s+="<td>"+a[i].trangphuc+"</td>";
			s+="<td>"+a[i].gia1+"</td>";
			s+="<td>"+a[i].img+"</td>";
			s+="<td><a href='./chitietadmin1.html?id="+a[i].ma+"&tendangnhap="+tk+"'><img src='../IMAGES/check_1.jpg'></a></td>";
			s+="<td><img src='../IMAGES/check_1.jpg' onclick='xoa();' style='cursor:pointer;'></td>";
			s+="</tr>";
		}
		s+="</tbody>";
		s+="</table>";
		s+="</div>";
		s1="<div style='font-size:36px; color:#00F; text-align:center;clear:both;'>Thêm sản phẩm LIÊN MINH HUYỀN THOẠI</div>";


		s1+="<div class='thaotac1'>Nhập rank : <input style='text' placeholder='Tên rank'></div>";
		s1+="<div class='thaotac1'>Nhập số tướng : <input style='number' placeholder='Số tuóng'></div>";
		s1+="<div class='thaotac1'>Nhập số trang phục : <input style='number' placeholder='Số trang phục'></div>";
		s1+="<div class='thaotac1'>Nhập link ảnh : <input type='file' placeholder='../IMAGES/'></div>";
		s1+="<div class='thaotac1'>Nhập giá : <input style='number' placeholder='giá'></div>";
		s1+="<div class='thaotac1'><input type='button' id='up' value='UPDATE' onclick='themsp();'/></div>";
		document.getElementById('content1').innerHTML=s;
		document.getElementById('content').innerHTML=s1;
		document.getElementById('qlsp').style.background="blue";
		document.getElementById('ttr').style.background="black";
		document.getElementById('qlkh').style.background="black";
	}
	function qlsp1()
	{
		var s,s1;
		var tk=GetURLParameter('tendangnhap');
		mangsanpham1();
		s="<div id='qlsp'>";
		s+="<table align='center' border='1' cellspacing='20'cellpadding='20'><thead><tr><th>id</th><th>Rank</th><th>Vũ khí hokage</th><th>Trang bị</th><th>Số cải trang</th><th>Giá</th><th>Link hình</th>";
		s+="<th>Sữa</th><th>Xóa</th></tr></thead><tbody>";
		for(var i=0;i<ab.length;i++)
		{
			s+="<tr>";
			s+="<td>"+ab[i].ma+"</td>";
			s+="<td>"+ab[i].rank+"</td>";
			s+="<td>"+ab[i].vk_hokage+"</td>";
			s+="<td>"+ab[i].trangbivip+"</td>";
			s+="<td>"+ab[i].socaitrang+"</td>";
			s+="<td>"+ab[i].gia1+"</td>";
			s+="<td>"+ab[i].img1+"</td>";
			s+="<td><a href='./chitietadmin2.html?id="+ab[i].ma+"&tendangnhap="+tk+"'><img src='../IMAGES/check_1.jpg'></a></td>";
			s+="<td><img src='../IMAGES/check_1.jpg' onclick='xoa();' style='cursor:pointer;'></td>";
			s+="</tr>";
		}
		s+="</tbody>";
		s+="</table>";
		s+="</div>";
			s1="<div style='font-size:36px; color:#00F; text-align:center;clear:both;'>Thêm sản phẩm LÀNG LÁ</div>";
			s1+="<div class='thaotac1'>Nhập rank : <input style='text' placeholder='Tên rank'></div>";

			s1+="<div class='thaotac1'>Vủ khí hokage : <input type='radio' id='gioi' value='Có' name='gioitinh'/>&nbsp;Có<input name='gioitinh'type='radio' id='gioi1' value='Không' />&nbsp;Không</div>";
			s1+="<div class='thaotac1'>Nhập số trang bị +12 : <input style='text' placeholder='Số trang bị +12'></div>";
			s1+="<div class='thaotac1'>Nhập số cải trang : <input style='text' placeholder='Số cải trang'></div>";
			s1+="<div class='thaotac1'>Nhập link ảnh: <input type='file' placeholder='../IMAGES/'></div>";
			s1+="<div class='thaotac1'>Giá : <input style='text' placeholder='Giá'></div>";
			s1+="<div class='thaotac1'><input type='button' id='up' value='UPDATE' onclick='themsp();'/></div>";
		document.getElementById('content').innerHTML=s1;
		document.getElementById('content1').innerHTML=s;
		document.getElementById('qlsp').style.background="blue";
		document.getElementById('ttr').style.background="black";
		document.getElementById('qlkh').style.background="black";
	}
	function trangchu(){
		var s;
		s="<div id='qlsp'></div>";
		document.getElementById('content').innerHTML=s;
		document.getElementById('content1').innerHTML=s;
		document.getElementById('qlsp').style.background="black";
		document.getElementById('ttr').style.background="blue";
		document.getElementById('qlkh').style.background="black";
	}
	function dangxuat1()
	{
		window.location.replace("./textjs.html");
	}
	function kiemtra12()
	{
		var tk=GetURLParameter('tendangnhap');
		if(tk!="nguoilaoi")
		{
			window.location.replace("./textjs.html");
		}
	}

	function kiemtra2()
	{
		var tk=GetURLParameter('tendangnhap');
		if(tk!="nguoilaoi")
		{
			window.location.replace("./textjs.html");
		}
	}
	function thaydoi()
	{
		var tk=GetURLParameter('tendangnhap');
		alert("Admin đã thay đổi thành công");
		window.location.replace("./admin.html?tendangnhap="+tk);

	}
	function kiemtra3()
	{
		var tk=GetURLParameter('tendangnhap');
		if(tk!="nguoilaoi")
		{
			window.location.replace("./textjs.html");
		}
	}
	function chuyentrang12()
		{
			var tk=GetURLParameter('tendangnhap');
			var dem=0;
			for(var i=0;i<localStorage.length;i++)
			{
				if(localStorage.key(i)==tk)
				{
					dem++;
				}
			}
			if(dem!=1)
			{
				window.location.replace("./textjs.html");
			}else{
				window.location.replace("./textjs.html?tendangnhap="+tk+"");
			}
		}
		function chuyentrang123()
		{
			var tk=GetURLParameter('tendangnhap');
			var dem=0;
			for(var i=0;i<localStorage.length;i++)
			{
				if(localStorage.key(i)==tk)
				{
					dem++;
				}
			}
			if(dem!=1)
			{
				window.location.replace("./textjs.html");
			}else{
				window.location.replace("./textjs.html?tendangnhap="+tk+"");
			}
		}
		function giohang()
						{
							var tk=GetURLParameter('tendangnhap');
							if(typeof tk == 'undefined'||tk=="")
							{
								return false;
							}
							else{
								document.write("<div class='kh' onclick='kiemtraGH();'>SẢN PHẨM ĐÃ MUA</div>");
							}
						}
		