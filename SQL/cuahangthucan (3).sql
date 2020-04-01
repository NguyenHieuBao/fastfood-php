-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2019 at 05:41 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cuahangthucan`
--

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `MaDh` int(100) NOT NULL,
  `MaKh` int(100) NOT NULL,
  `TenKh` varchar(100) NOT NULL,
  `TongTien` int(100) NOT NULL,
  `TinhTrang` varchar(100) NOT NULL,
  `ThoiGianDatHang` varchar(100) NOT NULL,
  `HinhThucVanChuyen` varchar(100) NOT NULL,
  `HinhThucThanhToan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`MaDh`, `MaKh`, `TenKh`, `TongTien`, `TinhTrang`, `ThoiGianDatHang`, `HinhThucVanChuyen`, `HinhThucThanhToan`) VALUES
(1, 2, 'Nguyễn Hiếu Bảo', 597000, 'đã giao', '2019-05-14 11:41:21', 'Xe máy', 'Trực tiếp'),
(2, 4, 'Lê Thị A', 217000, 'đang giao', '2019-05-14 14:27:19', 'Xe máy', 'Trực tiếp'),
(3, 2, 'Nguyễn Văn A', 1154000, 'chưa', '2019-05-14 23:47:57', 'Xe đạp', 'Ngân hàng'),
(4, 7, 'abcdsadas', 260000, 'chưa', '2019-05-15 19:23:19', 'Xe máy', 'Trực tiếp'),
(5, 7, 'abc', 299000, 'chưa', '2019-05-15 19:23:55', 'Xe máy', 'Ngân hàng');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKh` int(100) NOT NULL,
  `HoTen` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `TaiKhoan` varchar(100) NOT NULL,
  `MatKhau` varchar(100) NOT NULL,
  `DiaChi` varchar(1000) NOT NULL,
  `GioiTinh` varchar(100) NOT NULL,
  `NgaySinh` varchar(100) NOT NULL,
  `DienThoai` varchar(100) NOT NULL,
  `TrangThai` int(100) NOT NULL,
  `VaiTro` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MaKh`, `HoTen`, `Email`, `TaiKhoan`, `MatKhau`, `DiaChi`, `GioiTinh`, `NgaySinh`, `DienThoai`, `TrangThai`, `VaiTro`) VALUES
(1, 'Nguyễn Bảo', 'nguyenhieubaoit@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'tphcm', 'Nam', '01/01/1999hjkhjk', '0123456789jhkjh', 0, 2),
(2, 'Nguyễn Hiếu Bảo', 'nguyenhieubao2606@gmail.com', 'avatar', 'e10adc3949ba59abbe56e057f20f883e', 'tphcm', 'Nam', '24/07/1999', '0123456789', 1, 0),
(3, 'Nguyễn Hiếu Bảo', 'nguyenhieubao2407@gmail.com', 'manager', '1d0258c2440a8d19e716292b231e3190', 'tphcm', 'Nam', '01/01/1999', '023654789', 1, 1),
(4, 'Lê Thị A', 'lethia@gmail.com', 'enduser', 'ffc1254d735927c3de44dfc0365e2ba0', 'q5-tphcm', 'Nữ', '02/02/2000', '0321654987', 1, 0),
(5, 'Trần Văn C', 'nguyenhieubao1234@gmail.com', 'avatarag0p', 'd3636343c0895d207ad200214c1198d6', '', 'Nam', '', '0359874102', 1, 0),
(6, 'nguyễn thị c', 'nguyenthic@gmail.com', 'comehere', '0ebd88da86bc4c5a4ba34d4d78fd1637', 'q1-tphcm', 'Nữ', '03.03.2000', '0987654321', 1, 0),
(7, 'abc', 'abc@gmail.com', 'avatar123', 'e10adc3949ba59abbe56e057f20f883e', '', 'Nam', '', '5654645645', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `khachhangnhanhang`
--

CREATE TABLE `khachhangnhanhang` (
  `Makh` int(100) NOT NULL,
  `MaDh` int(100) NOT NULL,
  `HoTen` varchar(100) NOT NULL,
  `DienThoai` varchar(100) NOT NULL,
  `DiaChi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khachhangnhanhang`
--

INSERT INTO `khachhangnhanhang` (`Makh`, `MaDh`, `HoTen`, `DienThoai`, `DiaChi`) VALUES
(2, 1, 'Nguyễn Hiếu Bảo', '0123456789', 'tphcm'),
(4, 2, 'Lê Thị A', '0321654987', 'q5-tphcm'),
(2, 3, 'Nguyễn Văn A', '0321659874', 'q5-tphcm'),
(7, 4, 'abcdsadas', '0372262406', 'dfsdfdfsd'),
(7, 5, 'abc', '5654645645', '');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `Masp` int(100) NOT NULL,
  `Tensp` varchar(100) NOT NULL,
  `Gia` int(100) NOT NULL,
  `MoTaSp` varchar(10000) NOT NULL,
  `ChiTietSP` text NOT NULL,
  `ThongTinNgoai` text NOT NULL,
  `LoaiSp` varchar(100) NOT NULL,
  `LinkHinh` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`Masp`, `Tensp`, `Gia`, `MoTaSp`, `ChiTietSP`, `ThongTinNgoai`, `LoaiSp`, `LinkHinh`) VALUES
(24079, 'Xà lách trộn kiểu Nga', 59000, 'Món salad Nga luôn tươi ngon và hấp dẫn những ai thưởng thức.', 'Món salad Nga luôn tươi ngon và hấp dẫn những ai thưởng thức.\r\nCách làm:\r\n\r\n- Luộc chín hạt đậu Hà Lan, khoai tây và cà rốt rồi vớt ra, để ráo nước, cho chung vào một bát to.\r\n\r\n- Trút dưa chuột muối vào\r\n\r\n- Lần lượt cho dấm, dầu ô liu, muối và hạt tiêu để tăng hương vị, trộn đều. Lưu ý, làm việc này khi các loại rau củ vẫn còn đang ấm nhé!\r\n\r\n- Bạn có thể cho thêm trứng sắt hạt lựu vào lúc này, hoặc trứng chỉ để trang trí. Cho mayonnaise vào trộn đều\r\n\r\n- Bọc bát salad Nga lại và cho vào tủ lạnh để trong 1 giờ.\r\n\r\n- Sau đó, cho salad Nga ra đĩa, trang trí với trứng, dưa chuột muối rồi thưởng thức.\r\n ', '', 'salad', 'IMAGES/salad_thit_nuong_vi_large.jpg'),
(24080, 'Tomato sp', 68000, 'Mỳ Ý sốt cà chua hương vị ngon, thưởng thức rất hợp khẩu vị\r\n\r\nMón ăn không gây béo mà hương vị lại đầy đủ, rất dễ ăn', '   Mỳ Spaghetti vốn là một món ăn độc đáo đặc trưng cho vùng đất Ý sôi động, náo nhiệt, một chiếc nôi văn hóa ẩm thực đa dạng gần như nhất thế giới. Những sợi mỳ mềm dai được làm từ bột mỳ, điều đặc biệt làm nên món mỳ spaghetti độc đáo đó chính là nước sốt cà chua thần thánh và bò băm viên ngon lành ăn kèm. Tuy là một món ăn đơn giản nhưng hương vị mang đầy chất Ý đã khiến món mỳ trở nên nổi tiếng và xuất hiện trên khắp thế giới với nhiều sự biến thể khác nhau, đem lại sự đa dạng cho món mỳ Ý truyền thống này.\r\nMỳ Ý sốt cà chua hương vị ngon, thưởng thức rất hợp khẩu vị\r\nMón ăn không gây béo mà hương vị lại đầy đủ, rất dễ ăn', '', 'mỳ ý', 'IMAGES/my_xao_thap_cam_large.jpg'),
(24081, 'Supreme', 269000, 'Pizza phủ xúc xích, thịt bò, ớt chuông, nấm rơm và hành tây.\r\n\r\nMón pizza vẫn luôn là món khoái khẩu cho các chị em trong những dịp đi chơi hay gọi đến nhà đều rất tiện lợi', 'Pizza phủ xúc xích, thịt bò, ớt chuông, nấm rơm và hành tây.\r\n\r\nMón pizza vẫn luôn là món khoái khẩu cho các chị em trong những dịp đi chơi hay gọi đến nhà đều rất tiện lợi\r\n ', '', 'pizza', 'IMAGES/supreme_pizza_large.jpg'),
(24082, 'Súp rau', 29000, 'Súp rau củ cải và carot thơm ngon, thưởng thức tuyệt vời sau khi đã ăn pizza.', 'Súp rau củ cải và carot thơm ngon, thưởng thức tuyệt vời sau khi đã ăn pizza.\r\n\r\nMón canh ngon lành mà không hề ngán, lại đầy dinh dưỡng', '', 'súp', 'IMAGES/sup_cua_large.jpg'),
(24083, 'Súp gà kem sữa', 39000, ' Món súp gà là món ăn đầy đủ chất dinh dưỡng, dễ ăn lại dễ tiêu hóa, không gây đầy bụng khó tiêu. ', ' Món súp gà là món ăn đầy đủ chất dinh dưỡng, dễ ăn lại dễ tiêu hóa, không gây đầy bụng khó tiêu. \r\n Món súp gà không chỉ thơm ngon, dễ làm mà còn là món ăn bổ dưỡng, rất có ích cho sức khỏe người dùng', '', 'súp', 'IMAGES/sup_tom_large.jpg'),
(24084, 'Seafood Pesto', 269000, 'Pizza hải sản với tôm, mực nghêu và nấm trên nền sốt Pesto và phô mai.', 'Pizza hải sản với tôm, mực nghêu và nấm trên nền sốt Pesto và phô mai.\r\n\r\nMón ăn vô cùng hấp dẫn và ngon lành, vô cùng tiện lợi\r\n ', '', 'pizza', 'IMAGES/pizza_lap_xuong_large.jpg'),
(24085, 'Seafood Chowder', 59000, 'Súp hải sản phủ bánh nướng.\r\n\r\nMón canh ngon lành và đầy màu sắc, hương vị thơm ngon, bổ dưỡng', 'Súp hải sản phủ bánh nướng.\r\n\r\nMón canh ngon lành và đầy màu sắc, hương vị thơm ngon, bổ dưỡng\r\n ', '', 'Thực đơn đặc biệt', 'IMAGES/sup_ngheu_large.jpg'),
(24086, 'Seafood pepper', 259000, 'Pizza hải sản tôm, mực, thịt cua, dứa, hành tây phủ với nước sốt tiêu đen và phô mai.\r\n\r\nMón ăn bổ dưỡng và vô cùng ngon miệng', 'Pizza hải sản tôm, mực, thịt cua, dứa, hành tây phủ với nước sốt tiêu đen và phô mai.\r\n\r\nMón ăn bổ dưỡng và vô cùng ngon miệng', '', 'pizza', 'IMAGES/pizza_nho_large.jpg'),
(24087, 'Nui thập cẩm', 69000, 'Mực, tôm, cá ngừ, ớt Đà Lạt, cà chua tươi, hành tây, sốt cà chua, phô mai.\r\n\r\nMón mì thơm ngon, bổ dưỡng và hoàn toàn có thể thay thế bữa sáng cho bạn.', 'Mực, tôm, cá ngừ, ớt Đà Lạt, cà chua tươi, hành tây, sốt cà chua, phô mai.\r\n\r\nMón mì thơm ngon, bổ dưỡng và hoàn toàn có thể thay thế bữa sáng cho bạn.', '', 'Thực đơn đặc biệt', 'IMAGES/04_large.jpg'),
(24088, 'Salad cá ngừ', 135000, 'Salad cá ngừ non bổ dưỡng phù hợp cho những người giảm cân', 'Cá ngừ và các gia vị thấm vào xà lách, cà chua và dưa leo tạo vị chua ngọt. Hương vị hòa quyện tạo nên món ăn hấp dẫn.\r\n\r\nThực đơn với cá đảm bảo cung cấp đầy đủ chất dinh dưỡng và không lo bị béo', '', 'salad', 'IMAGES/salad__thit_xong_khoi_large.jpg'),
(24089, 'Salad bắp cải', 70000, 'Salad với 2 loại bắp cải cực kỳ dễ làm và ăn hết sức ngon miệng, không thể thiếu khi khai vị.', 'Salad với 2 loại bắp cải cực kỳ dễ làm và ăn hết sức ngon miệng, không thể thiếu khi khai vị.\r\n\r\nThực đơn với món salad này cũng vô cùng phù hợp khi phải ăn quá nhiều món dầu mỡ', '', 'salad', 'IMAGES/salad_trai_cay_large.jpg'),
(24090, 'Pizza Sốt Cà Bò', 190000, 'Cà Chua Một Nắng, Pho Mát Dê, Rau Chân Vịt, Hành Nướng, Hạt Lentil, Cà Tím, Bông Cải, Nấm, Ô liu Đen & Tỏi Nướng tạo hương vị ngon không dễ dàng quên được.', 'Cà Chua Một Nắng, Pho Mát Dê, Rau Chân Vịt, Hành Nướng, Hạt Lentil, Cà Tím, Bông Cải, Nấm, Ô liu Đen & Tỏi Nướng tạo hương vị ngon không dễ dàng quên được.\r\nNgoài ra khi bạn đi chơi hay gọi về nhà', '', 'pizza', 'IMAGES/06_large.jpg'),
(24091, 'Pizza với thịt lợn', 210000, 'Đùi Lợn Xông Khói, Rau Arugula, Tỏi Nướng & Tinh Dầu Nấm Truffle.', 'Đùi Lợn Xông Khói, Rau Arugula, Tỏi Nướng & Tinh Dầu Nấm Truffle.\r\n\r\nMón ăn ngon lành và tươi mới, màu sắc vô cùng bắt mắt', '', 'pizza', 'IMAGES/09_large.jpg'),
(24092, 'Pizza Supreme', 259000, 'Pizza cao cấp với 9 loại nhân phủ: xúc xích, thịt nguội, thịt bò, xúc xích gà, thơm, nấm, hành tây ớt chuông và ôliu.', 'Pizza cao cấp với 9 loại nhân phủ: xúc xích, thịt nguội, thịt bò, xúc xích gà, thơm, nấm, hành tây ớt chuông và ôliu.\r\n\r\nMón ăn vô cùng hấp dẫn và tiện lợi', '', 'pizza', 'IMAGES/03_large.jpg'),
(24093, 'Pizza Bốn Mùa', 380000, 'Cá Hồi Xông Khói, Pho Mát, Nụ Bạch hoa, Thìa Là & Hành Tây.\r\n\r\nCác nguyên liệu tự nhiên vô cùng ngon lành và bổ dưỡng, khó lòng mà từ chối', 'Cá Hồi Xông Khói, Pho Mát, Nụ Bạch hoa, Thìa Là & Hành Tây.\r\n\r\nCác nguyên liệu tự nhiên vô cùng ngon lành và bổ dưỡng, khó lòng mà từ chối', '', 'pizza', 'IMAGES/01_caa1b381-07d9-406b-56bd-a6b6c0c86845_large.jpg'),
(24094, 'Pizza Hải Sản', 190000, 'Sốt cà chua, fomat, lá nguyệt quế, trông bánh vô cùng đẹp mắt và hương vị tuyệt vời.\r\n\r\nMón ăn ngon và bổ dưỡng, đầy màu sắc làm cho khẩu vị thật tuyệt', 'Sốt cà chua, fomat, lá nguyệt quế, trông bánh vô cùng đẹp mắt và hương vị tuyệt vời.\r\n\r\nMón ăn ngon và bổ dưỡng, đầy màu sắc làm cho khẩu vị thật tuyệt', '', 'pizza', 'IMAGES/03_large.jpg'),
(24095, 'Bánh phủ socola', 79000, 'Bánh phủ socola vô cùng dễ ăn mà cách làm lại rất đơn giản, không gây béo phì.', 'Bánh phủ socola vô cùng dễ ăn mà cách làm lại rất đơn giản, không gây béo phì.\r\n\r\nMón này còn làm đồ ăn vặt vô cùng ngon miệng', '', 'MÓn khai vị', 'IMAGES/banh_phu_socola_large.jpg'),
(24096, 'BÁNH TIÊU TƯƠNG ỚT', 40000, 'Bánh tiêu ăn ngon nhất là vào lúc vừa chiên xong, kịp để ráo bớt dầu. Bánh mập ú, phổng phao và nóng hổi. Thằng nào thằng ấy vừa ăn vừa xuýt xoa như sướng lắm. Cắn miếng là bánh ngập miệng, vừa ngậy vừa thơm thơm. Bánh tiêu ăn kèm với tương ớt thì ngon hết biết.', 'Bánh tiêu ăn ngon nhất là vào lúc vừa chiên xong, kịp để ráo bớt dầu. Bánh mập ú, phổng phao và nóng hổi. Thằng nào thằng ấy vừa ăn vừa xuýt xoa như sướng lắm. Cắn miếng là bánh ngập miệng, vừa ngậy vừa thơm thơm. Bánh tiêu ăn kèm với tương ớt thì ngon hết biết.', '', 'Món khai vị', 'IMAGES/sup_ngheu_large.jpg'),
(24097, 'BÁNH TRÁNG KẸP', 45000, 'Bánh tráng kẹp tương đối quen thuộc đối với Hội An hay Đà Lạt. Bánh tráng kẹp cũng trở thành một thương hiệu cho phố phường Đà Nẵng. Bánh tương đối mỏng và mềm, được cắt thành miếng tam giác vừa tay. Có nhiều loại bánh tráng kẹp được biến tấu với các vị khác nhau theo sở thích khách hàng.', 'Bánh tráng kẹp tương đối quen thuộc đối với Hội An hay Đà Lạt. Bánh tráng kẹp cũng trở thành một thương hiệu cho phố phường Đà Nẵng. Bánh tương đối mỏng và mềm, được cắt thành miếng tam giác vừa tay. Có nhiều loại bánh tráng kẹp được biến tấu với các vị khác nhau theo sở thích khách hàng.', '', 'Món khai vị', 'IMAGES/09_large.jpg'),
(24098, 'MÍT TRỘN', 79000, 'Một món ăn khác làm mê mẩn tín đồ ăn vặt Đà Nẵng đó chính là mít trộn. Sữa chua mít mọi người biết tới nhiều. Mít trộn thì có vẻ khá lạ lẫm. Nhưng đây cũng là một trong những món ăn được ưa chuộng bậc nhất của các bạn trẻ.', 'Một món ăn khác làm mê mẩn tín đồ ăn vặt Đà Nẵng đó chính là mít trộn. Sữa chua mít mọi người biết tới nhiều. Mít trộn thì có vẻ khá lạ lẫm. Nhưng đây cũng là một trong những món ăn được ưa chuộng bậc nhất của các bạn trẻ.', '', 'Món khai vị', 'IMAGES/supreme_pizza_large.jpg'),
(24099, 'pizza cá hồi', 170000, 'Pizza phủ xúc xích, thịt bò, ớt chuông, nấm rơm và hành tây. Món pizza vẫn luôn là món khoái khẩu cho các chị em trong những dịp đi chơi hay gọi đến nhà đều rất tiện lợi\r\n', 'Pizza phủ xúc xích, thịt bò, ớt chuông, nấm rơm và hành tây. Món pizza vẫn luôn là món khoái khẩu cho các chị em trong những dịp đi chơi hay gọi đến nhà đều rất tiện lợi\r\n', '', 'pizza', 'IMAGES/01_caa1b381-07d9-406b-56bd-a6b6c0c86845_large.jpg'),
(24100, 'pizza bò', 185000, 'Pizza phủ xúc xích, thịt bò, ớt chuông, nấm rơm và hành tây. Món pizza vẫn luôn là món khoái khẩu cho các chị em trong những dịp đi chơi hay gọi đến nhà đều rất tiện lợi', 'Pizza phủ xúc xích, thịt bò, ớt chuông, nấm rơm và hành tây. Món pizza vẫn luôn là món khoái khẩu cho các chị em trong những dịp đi chơi hay gọi đến nhà đều rất tiện lợi', '', 'pizza', 'IMAGES/03_large.jpg'),
(24101, 'pizza hải sản', 192000, 'Pizza phủ xúc xích, thịt bò, ớt chuông, nấm rơm và hành tây. Món pizza vẫn luôn là món khoái khẩu cho các chị em trong những dịp đi chơi hay gọi đến nhà đều rất tiện lợi\r\n', 'Pizza phủ xúc xích, thịt bò, ớt chuông, nấm rơm và hành tây. Món pizza vẫn luôn là món khoái khẩu cho các chị em trong những dịp đi chơi hay gọi đến nhà đều rất tiện lợi\r\n', '', 'pizza', 'IMAGES/09_large.jpg'),
(24102, 'pizza thập cẩm', 155000, 'Pizza phủ xúc xích, thịt bò, ớt chuông, nấm rơm và hành tây. Món pizza vẫn luôn là món khoái khẩu cho các chị em trong những dịp đi chơi hay gọi đến nhà đều rất tiện lợi\r\n', 'Pizza phủ xúc xích, thịt bò, ớt chuông, nấm rơm và hành tây. Món pizza vẫn luôn là món khoái khẩu cho các chị em trong những dịp đi chơi hay gọi đến nhà đều rất tiện lợi\r\n', '', 'pizza', 'IMAGES/06_large.jpg'),
(24103, 'pizza chay', 165000, 'Pizza phủ xúc xích, thịt bò, ớt chuông, nấm rơm và hành tây. Món pizza vẫn luôn là món khoái khẩu cho các chị em trong những dịp đi chơi hay gọi đến nhà đều rất tiện lợi\r\n', 'Pizza phủ xúc xích, thịt bò, ớt chuông, nấm rơm và hành tây. Món pizza vẫn luôn là món khoái khẩu cho các chị em trong những dịp đi chơi hay gọi đến nhà đều rất tiện lợi\r\n', '', 'pizza', 'IMAGES/pizza_nho_large.jpg'),
(24104, 'pizza rau củ', 160000, 'Pizza phủ xúc xích, thịt bò, ớt chuông, nấm rơm và hành tây. Món pizza vẫn luôn là món khoái khẩu cho các chị em trong những dịp đi chơi hay gọi đến nhà đều rất tiện lợi', 'Pizza phủ xúc xích, thịt bò, ớt chuông, nấm rơm và hành tây. Món pizza vẫn luôn là món khoái khẩu cho các chị em trong những dịp đi chơi hay gọi đến nhà đều rất tiện lợi', '', 'pizza', 'IMAGES/pizza_lap_xuong_large.jpg'),
(24105, 'pizza lạp xưởng', 167000, 'Pizza phủ xúc xích, thịt bò, ớt chuông, nấm rơm và hành tây. Món pizza vẫn luôn là món khoái khẩu cho các chị em trong những dịp đi chơi hay gọi đến nhà đều rất tiện lợi', 'Pizza phủ xúc xích, thịt bò, ớt chuông, nấm rơm và hành tây. Món pizza vẫn luôn là món khoái khẩu cho các chị em trong những dịp đi chơi hay gọi đến nhà đều rất tiện lợi', '', 'pizza', 'IMAGES/supreme_pizza_large.jpg'),
(24106, 'pizza tôm', 199000, 'Pizza phủ xúc xích, thịt bò, ớt chuông, nấm rơm và hành tây. Món pizza vẫn luôn là món khoái khẩu cho các chị em trong những dịp đi chơi hay gọi đến nhà đều rất tiện lợi', 'Pizza phủ xúc xích, thịt bò, ớt chuông, nấm rơm và hành tây. Món pizza vẫn luôn là món khoái khẩu cho các chị em trong những dịp đi chơi hay gọi đến nhà đều rất tiện lợi', '', 'pizza', 'IMAGES/06_large.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sanphamtrongdonhang`
--

CREATE TABLE `sanphamtrongdonhang` (
  `Masp` int(100) NOT NULL,
  `Madh` int(100) NOT NULL,
  `Tensp` varchar(200) NOT NULL,
  `Gia` int(200) NOT NULL,
  `SoLuong` int(200) NOT NULL,
  `TongTien` int(200) NOT NULL,
  `LinkHinh` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanphamtrongdonhang`
--

INSERT INTO `sanphamtrongdonhang` (`Masp`, `Madh`, `Tensp`, `Gia`, `SoLuong`, `TongTien`, `LinkHinh`) VALUES
(24079, 1, 'Xà lách trộn kiểu Nga', 59000, 2, 118000, 'IMAGES/salad_thit_nuong_vi_large.jpg'),
(24086, 1, 'Seafood pepper', 259000, 1, 259000, 'IMAGES/pizza_nho_large.jpg'),
(24090, 1, 'Pizza Sốt Cà Bò', 190000, 1, 190000, 'IMAGES/06_large.jpg'),
(24096, 2, 'BÁNH TIÊU TƯƠNG ỚT', 40000, 1, 40000, 'IMAGES/sup_ngheu_large.jpg'),
(24082, 2, 'Súp rau', 29000, 1, 29000, 'IMAGES/sup_cua_large.jpg'),
(24079, 2, 'Xà lách trộn kiểu Nga', 59000, 2, 118000, 'IMAGES/salad_thit_nuong_vi_large.jpg'),
(24081, 3, 'Supreme', 269000, 1, 269000, 'IMAGES/supreme_pizza_large.jpg'),
(24082, 3, 'Súp rau', 29000, 2, 58000, 'IMAGES/sup_cua_large.jpg'),
(24084, 3, 'Seafood Pesto', 269000, 2, 538000, 'IMAGES/pizza_lap_xuong_large.jpg'),
(24086, 3, 'Seafood pepper', 259000, 1, 259000, 'IMAGES/pizza_nho_large.jpg'),
(24094, 4, 'Pizza Hải Sản', 190000, 1, 190000, 'IMAGES/03_large.jpg'),
(24096, 4, 'BÁNH TIÊU TƯƠNG ỚT', 40000, 1, 40000, 'IMAGES/sup_ngheu_large.jpg'),
(24081, 5, 'Supreme', 269000, 1, 269000, 'IMAGES/supreme_pizza_large.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`MaDh`),
  ADD KEY `MaKh` (`MaKh`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKh`);

--
-- Indexes for table `khachhangnhanhang`
--
ALTER TABLE `khachhangnhanhang`
  ADD KEY `Makh` (`Makh`),
  ADD KEY `MaDh` (`MaDh`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`Masp`);

--
-- Indexes for table `sanphamtrongdonhang`
--
ALTER TABLE `sanphamtrongdonhang`
  ADD KEY `Masp` (`Masp`,`Madh`),
  ADD KEY `Madh` (`Madh`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `MaDh` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKh` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `Masp` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24107;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`MaKh`) REFERENCES `khachhang` (`MaKh`);

--
-- Constraints for table `khachhangnhanhang`
--
ALTER TABLE `khachhangnhanhang`
  ADD CONSTRAINT `khachhangnhanhang_ibfk_1` FOREIGN KEY (`Makh`) REFERENCES `khachhang` (`MaKh`),
  ADD CONSTRAINT `khachhangnhanhang_ibfk_2` FOREIGN KEY (`MaDh`) REFERENCES `donhang` (`MaDh`);

--
-- Constraints for table `sanphamtrongdonhang`
--
ALTER TABLE `sanphamtrongdonhang`
  ADD CONSTRAINT `sanphamtrongdonhang_ibfk_1` FOREIGN KEY (`Madh`) REFERENCES `donhang` (`MaDh`),
  ADD CONSTRAINT `sanphamtrongdonhang_ibfk_2` FOREIGN KEY (`Masp`) REFERENCES `sanpham` (`Masp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
