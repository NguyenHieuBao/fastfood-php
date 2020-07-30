-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 13, 2020 lúc 05:40 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cuahangthucan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
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
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`MaDh`, `MaKh`, `TenKh`, `TongTien`, `TinhTrang`, `ThoiGianDatHang`, `HinhThucVanChuyen`, `HinhThucThanhToan`) VALUES
(1, 2, 'Nguyễn Hiếu Bảo', 597000, 'đã giao', '2019-05-14 11:41:21', 'Xe máy', 'Trực tiếp'),
(2, 4, 'Lê Thị A', 217000, 'đang giao', '2019-05-14 14:27:19', 'Xe máy', 'Trực tiếp'),
(3, 2, 'Nguyễn Văn A', 1154000, 'chưa', '2019-05-14 23:47:57', 'Xe đạp', 'Ngân hàng'),
(4, 7, 'abcdsadas', 260000, 'đã giao', '2019-05-15 19:23:19', 'Xe máy', 'Trực tiếp'),
(5, 7, 'abc', 299000, 'chưa', '2019-05-15 19:23:55', 'Xe máy', 'Ngân hàng'),
(6, 4, 'Lê Thị A', 1765000, 'chưa', '2020-06-01 11:56:54', 'Xe máy', 'Trực tiếp'),
(7, 4, 'Lê Thị A', 325000, 'chưa', '2020-06-01 12:19:31', 'Xe máy', 'Trực tiếp'),
(8, 4, 'Lê Thị A', 386050, 'chưa', '2020-06-08 14:27:04', 'Xe máy', 'Trực tiếp'),
(9, 4, 'Lê Thị A', 597150, 'chưa', '2020-06-08 14:35:02', 'Xe máy', 'Trực tiếp'),
(10, 4, 'Lê Thị A', 408100, 'chưa', '2020-06-08 14:37:25', 'Xe máy', 'Trực tiếp'),
(11, 4, 'Lê Thị A', 408100, 'chưa', '2020-06-08 14:41:11', 'Xe máy', 'Trực tiếp'),
(12, 4, 'Lê Thị A', 408100, 'chưa', '2020-06-08 14:43:26', 'Xe máy', 'Trực tiếp'),
(13, 4, 'Lê Thị A', 408100, 'chưa', '2020-06-08 14:44:38', 'Xe máy', 'Trực tiếp'),
(14, 4, 'Lê Thị A', 756700, 'chưa', '2020-06-08 14:51:23', 'Xe máy', 'Trực tiếp'),
(15, 4, 'Lê Thị A', 207000, 'chưa', '2020-06-08 14:53:05', 'Xe máy', 'Trực tiếp'),
(16, 4, 'Lê Thị A', 284000, 'chưa', '2020-06-08 17:24:29', 'Xe máy', 'Trực tiếp'),
(17, 4, 'Lê Thị A', 225000, 'chưa', '2020-06-08 17:25:22', 'Xe máy', 'Trực tiếp'),
(18, 4, 'Lê Thị A', 166000, 'chưa', '2020-06-08 17:27:19', 'Xe máy', 'Trực tiếp'),
(19, 4, 'Lê Thị A', 275000, 'chưa', '2020-06-08 17:42:40', 'Xe máy', 'Trực tiếp'),
(21, 8, 'Nguyễn Văn B', 219000, 'chưa', '2020-06-13 22:32:35', 'Xe máy', 'Trực tiếp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
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
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MaKh`, `HoTen`, `Email`, `TaiKhoan`, `MatKhau`, `DiaChi`, `GioiTinh`, `NgaySinh`, `DienThoai`, `TrangThai`, `VaiTro`) VALUES
(1, 'Nguyễn Bảo', 'nguyenhieubaoit@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'tphcm', 'Nam', '01/01/1999hjkhjk', '0123456789', 1, 2),
(2, 'Nguyễn Hiếu Bảo', 'nguyenhieubao2606@gmail.com', 'avatar', 'e10adc3949ba59abbe56e057f20f883e', 'tphcm', 'Nam', '24/07/1999', '0123456789', 1, 0),
(3, 'Nguyễn Hiếu Bảo', 'nguyenhieubao2407@gmail.com', 'manager', '1d0258c2440a8d19e716292b231e3190', 'tphcm', 'Nam', '01/01/1999', '0236547811', 1, 1),
(4, 'Nguyễn Hiếu Bảo', 'lethia@gmail.com', 'enduser', 'ffc1254d735927c3de44dfc0365e2ba0', 'Thành phố Hồ Chí Minh', 'nam', '02/02/2000', '0321654989', 1, 0),
(5, 'Trần Văn C', 'nguyenhieubao1234@gmail.com', 'avatarag0p', 'd3636343c0895d207ad200214c1198d6', '', 'Nam', '', '0359874102', 1, 0),
(6, 'nguyễn thị c', 'nguyenthic@gmail.com', 'comehere', '0ebd88da86bc4c5a4ba34d4d78fd1637', 'q1-tphcm', 'Nữ', '03.03.2000', '0987654321', 1, 0),
(7, 'abc', 'abc@gmail.com', 'avatar123', 'e10adc3949ba59abbe56e057f20f883e', '', 'Nam', '', '5654645645', 1, 0),
(8, 'Nguyễn Văn B', 'abcd@gmail.com', 'postman', '03d476861afd384510f2cb80ccfa8511', 'tphcm', 'Nam', '01/02/2000', '0258796413', 1, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhangnhanhang`
--

CREATE TABLE `khachhangnhanhang` (
  `Makh` int(100) NOT NULL,
  `MaDh` int(100) NOT NULL,
  `HoTen` varchar(100) NOT NULL,
  `DienThoai` varchar(100) NOT NULL,
  `DiaChi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `khachhangnhanhang`
--

INSERT INTO `khachhangnhanhang` (`Makh`, `MaDh`, `HoTen`, `DienThoai`, `DiaChi`) VALUES
(2, 1, 'Nguyễn Hiếu Bảo', '0123456789', 'tphcm'),
(4, 2, 'Lê Thị A', '0321654987', 'q5-tphcm'),
(2, 3, 'Nguyễn Văn A', '0321659874', 'q5-tphcm'),
(7, 4, 'abcdsadas', '0372262406', 'dfsdfdfsd'),
(7, 5, 'abc', '5654645645', ''),
(4, 6, 'Lê Thị A', '0321654987', 'q5-tphcm'),
(4, 7, 'Lê Thị A', '0321654987', 'q5-tphcm'),
(4, 8, 'Lê Thị A', '0321654987', 'q5-tphcm'),
(4, 9, 'Lê Thị A', '0321654987', 'q5-tphcm'),
(4, 10, 'Lê Thị A', '0321654987', 'q5-tphcm'),
(4, 11, 'Lê Thị A', '0321654987', 'q5-tphcm'),
(4, 12, 'Lê Thị A', '0321654987', 'q5-tphcm'),
(4, 13, 'Lê Thị A', '0321654987', 'q5-tphcm'),
(4, 14, 'Lê Thị A', '0321654987', 'q5-tphcm'),
(4, 15, 'Lê Thị A', '0321654987', 'q5-tphcm'),
(4, 16, 'Lê Thị A', '0321654987', 'q5-tphcm'),
(4, 17, 'Lê Thị A', '0321654987', 'q5-tphcm'),
(4, 18, 'Lê Thị A', '0321654987', 'q5-tphcm'),
(4, 19, 'Lê Thị A', '0321654987', 'q5-tphcm'),
(8, 20, 'Nguyễn Văn B', '0258796413', 'tphcm'),
(8, 21, 'Nguyễn Văn B', '0258796413', 'tphcm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `makm` int(11) NOT NULL,
  `tieude` varchar(255) NOT NULL,
  `giatrikhuyenmai` int(11) NOT NULL,
  `thoigianbatdau` varchar(255) NOT NULL,
  `thoigianketthuc` varchar(255) NOT NULL,
  `tinhtrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`makm`, `tieude`, `giatrikhuyenmai`, `thoigianbatdau`, `thoigianketthuc`, `tinhtrang`) VALUES
(1, 'Giảm giá sốc', 6, '2020-06-07T16:44', '2020-06-14T16:44', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanhoi`
--

CREATE TABLE `phanhoi` (
  `mapt` int(11) NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dienthoai` varchar(255) NOT NULL,
  `noidung` text NOT NULL,
  `tinhtrang` varchar(255) NOT NULL,
  `thoigian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `phanhoi`
--

INSERT INTO `phanhoi` (`mapt`, `hoten`, `email`, `dienthoai`, `noidung`, `tinhtrang`, `thoigian`) VALUES
(1, 'Nguyễn hiếu bảo', 'enduser@gmail.com', '01236549877', 'Rất tốt. Tôi rất hài lòng', 'đã giải quyết', '2020-06-07'),
(2, 'Bảo Nguyễn', 'nhb@gmail.com', '0258963147', 'Cần bổ sung', 'đã giải quyết', '2020-06-07 15:10:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quyen`
--

CREATE TABLE `quyen` (
  `maquyen` int(11) NOT NULL,
  `tenquyen` varchar(255) NOT NULL,
  `chuthich` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `quyen`
--

INSERT INTO `quyen` (`maquyen`, `tenquyen`, `chuthich`) VALUES
(0, 'Khách hàng', 'Mua sản phẩm, Phản hồi, Kiểm tra thông tin cá nhân,...'),
(1, 'Manager', 'Quản lý sản phẩm,quản lý đơn hàng,...'),
(2, 'Admin', 'Quản lý user'),
(3, 'Postman', 'Quản lý sự kiện, Quản lý bài viết, Phản hồi góp ý');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
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
-- Đang đổ dữ liệu cho bảng `sanpham`
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
(24096, 'bánh tiêu cay', 40000, 'Bánh tiêu ăn ngon nhất là vào lúc vừa chiên xong, kịp để ráo bớt dầu. Bánh mập ú, phổng phao và nóng hổi. Thằng nào thằng ấy vừa ăn vừa xuýt xoa như sướng lắm. Cắn miếng là bánh ngập miệng, vừa ngậy vừa thơm thơm. Bánh tiêu ăn kèm với tương ớt thì ngon hết biết.', 'Bánh tiêu ăn ngon nhất là vào lúc vừa chiên xong, kịp để ráo bớt dầu. Bánh mập ú, phổng phao và nóng hổi. Thằng nào thằng ấy vừa ăn vừa xuýt xoa như sướng lắm. Cắn miếng là bánh ngập miệng, vừa ngậy vừa thơm thơm. Bánh tiêu ăn kèm với tương ớt thì ngon hết biết.', '', 'Món khai vị', 'IMAGES/sup_ngheu_large.jpg'),
(24097, 'bánh tráng kẹp', 45000, 'Bánh tráng kẹp tương đối quen thuộc đối với Hội An hay Đà Lạt. Bánh tráng kẹp cũng trở thành một thương hiệu cho phố phường Đà Nẵng. Bánh tương đối mỏng và mềm, được cắt thành miếng tam giác vừa tay. Có nhiều loại bánh tráng kẹp được biến tấu với các vị khác nhau theo sở thích khách hàng.', 'Bánh tráng kẹp tương đối quen thuộc đối với Hội An hay Đà Lạt. Bánh tráng kẹp cũng trở thành một thương hiệu cho phố phường Đà Nẵng. Bánh tương đối mỏng và mềm, được cắt thành miếng tam giác vừa tay. Có nhiều loại bánh tráng kẹp được biến tấu với các vị khác nhau theo sở thích khách hàng.', '', 'Món khai vị', 'IMAGES/09_large.jpg'),
(24098, 'mít trộn', 79000, 'Một món ăn khác làm mê mẩn tín đồ ăn vặt Đà Nẵng đó chính là mít trộn. Sữa chua mít mọi người biết tới nhiều. Mít trộn thì có vẻ khá lạ lẫm. Nhưng đây cũng là một trong những món ăn được ưa chuộng bậc nhất của các bạn trẻ.', 'Một món ăn khác làm mê mẩn tín đồ ăn vặt Đà Nẵng đó chính là mít trộn. Sữa chua mít mọi người biết tới nhiều. Mít trộn thì có vẻ khá lạ lẫm. Nhưng đây cũng là một trong những món ăn được ưa chuộng bậc nhất của các bạn trẻ.', '', 'Món khai vị', 'IMAGES/supreme_pizza_large.jpg'),
(24099, 'pizza cá hồi', 170000, 'Pizza phủ xúc xích, thịt bò, ớt chuông, nấm rơm và hành tây. Món pizza vẫn luôn là món khoái khẩu cho các chị em trong những dịp đi chơi hay gọi đến nhà đều rất tiện lợi\r\n', 'Pizza phủ xúc xích, thịt bò, ớt chuông, nấm rơm và hành tây. Món pizza vẫn luôn là món khoái khẩu cho các chị em trong những dịp đi chơi hay gọi đến nhà đều rất tiện lợi\r\n', '', 'pizza', 'IMAGES/01_caa1b381-07d9-406b-56bd-a6b6c0c86845_large.jpg'),
(24100, 'pizza bò', 185000, 'Pizza phủ xúc xích, thịt bò, ớt chuông, nấm rơm và hành tây. Món pizza vẫn luôn là món khoái khẩu cho các chị em trong những dịp đi chơi hay gọi đến nhà đều rất tiện lợi', 'Pizza phủ xúc xích, thịt bò, ớt chuông, nấm rơm và hành tây. Món pizza vẫn luôn là món khoái khẩu cho các chị em trong những dịp đi chơi hay gọi đến nhà đều rất tiện lợi', '', 'pizza', 'IMAGES/03_large.jpg'),
(24101, 'pizza hải sản', 192000, 'Pizza phủ xúc xích, thịt bò, ớt chuông, nấm rơm và hành tây. Món pizza vẫn luôn là món khoái khẩu cho các chị em trong những dịp đi chơi hay gọi đến nhà đều rất tiện lợi\r\n', 'Pizza phủ xúc xích, thịt bò, ớt chuông, nấm rơm và hành tây. Món pizza vẫn luôn là món khoái khẩu cho các chị em trong những dịp đi chơi hay gọi đến nhà đều rất tiện lợi\r\n', '', 'pizza', 'IMAGES/09_large.jpg'),
(24102, 'pizza thập cẩm', 155000, 'Pizza phủ xúc xích, thịt bò, ớt chuông, nấm rơm và hành tây. Món pizza vẫn luôn là món khoái khẩu cho các chị em trong những dịp đi chơi hay gọi đến nhà đều rất tiện lợi\r\n', 'Pizza phủ xúc xích, thịt bò, ớt chuông, nấm rơm và hành tây. Món pizza vẫn luôn là món khoái khẩu cho các chị em trong những dịp đi chơi hay gọi đến nhà đều rất tiện lợi\r\n', '', 'pizza', 'IMAGES/06_large.jpg'),
(24103, 'pizza chay', 165000, 'Pizza phủ xúc xích, thịt bò, ớt chuông, nấm rơm và hành tây. Món pizza vẫn luôn là món khoái khẩu cho các chị em trong những dịp đi chơi hay gọi đến nhà đều rất tiện lợi\r\n', 'Pizza phủ xúc xích, thịt bò, ớt chuông, nấm rơm và hành tây. Món pizza vẫn luôn là món khoái khẩu cho các chị em trong những dịp đi chơi hay gọi đến nhà đều rất tiện lợi\r\n', '', 'pizza', 'IMAGES/pizza_nho_large.jpg'),
(24104, 'pizza rau củ', 160000, 'Pizza phủ xúc xích, thịt bò, ớt chuông, nấm rơm và hành tây. Món pizza vẫn luôn là món khoái khẩu cho các chị em trong những dịp đi chơi hay gọi đến nhà đều rất tiện lợi', 'Pizza phủ xúc xích, thịt bò, ớt chuông, nấm rơm và hành tây. Món pizza vẫn luôn là món khoái khẩu cho các chị em trong những dịp đi chơi hay gọi đến nhà đều rất tiện lợi', '', 'pizza', 'IMAGES/pizza_lap_xuong_large.jpg'),
(24105, 'pizza lạp xưởng', 167000, 'Pizza phủ xúc xích, thịt bò, ớt chuông, nấm rơm và hành tây. Món pizza vẫn luôn là món khoái khẩu cho các chị em trong những dịp đi chơi hay gọi đến nhà đều rất tiện lợi', 'Pizza phủ xúc xích, thịt bò, ớt chuông, nấm rơm và hành tây. Món pizza vẫn luôn là món khoái khẩu cho các chị em trong những dịp đi chơi hay gọi đến nhà đều rất tiện lợi', '', 'pizza', 'IMAGES/supreme_pizza_large.jpg'),
(24109, 'pizza thập cẩm', 195000, 'Món salad Nga luôn tươi ngon và hấp dẫn những ai thưởng thức.', 'Món salad Nga luôn tươi ngon và hấp dẫn những ai thưởng thức.\r\nCách làm:\r\n\r\n- Luộc chín hạt đậu Hà Lan, khoai tây và cà rốt rồi vớt ra, để ráo nước, cho chung vào một bát to.\r\n\r\n- Trút dưa chuột muối vào\r\n\r\n- Lần lượt cho dấm, dầu ô liu, muối và hạt tiêu để tăng hương vị, trộn đều. Lưu ý, làm việc này khi các loại rau củ vẫn còn đang ấm nhé!\r\n\r\n- Bạn có thể cho thêm trứng sắt hạt lựu vào lúc này, hoặc trứng chỉ để trang trí. Cho mayonnaise vào trộn đều\r\n\r\n- Bọc bát salad Nga lại và cho vào tủ lạnh để trong 1 giờ.\r\n\r\n- Sau đó, cho salad Nga ra đĩa, trang trí với trứng, dưa chuột muối rồi thưởng thức.\r\n ', '', 'pizza', 'IMAGES/03_large.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanphamkhuyenmai`
--

CREATE TABLE `sanphamkhuyenmai` (
  `masp` int(11) NOT NULL,
  `makm` int(11) NOT NULL,
  `chuthich` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `sanphamkhuyenmai`
--

INSERT INTO `sanphamkhuyenmai` (`masp`, `makm`, `chuthich`) VALUES
(24079, 1, ''),
(24080, 1, ''),
(24080, 2, ''),
(24106, 2, ''),
(24082, 1, ''),
(24106, 1, ''),
(24107, 1, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanphamtrongdonhang`
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
-- Đang đổ dữ liệu cho bảng `sanphamtrongdonhang`
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
(24081, 5, 'Supreme', 269000, 1, 269000, 'IMAGES/supreme_pizza_large.jpg'),
(24104, 6, 'pizza rau củ', 160000, 4, 640000, 'IMAGES/pizza_lap_xuong_large.jpg'),
(24097, 6, 'bánh tráng kẹp', 45000, 3, 135000, 'IMAGES/09_large.jpg'),
(24099, 6, 'pizza cá hồi', 170000, 4, 680000, 'IMAGES/01_caa1b381-07d9-406b-56bd-a6b6c0c86845_large.jpg'),
(24089, 6, 'Salad bắp cải', 70000, 4, 280000, 'IMAGES/salad_trai_cay_large.jpg'),
(24079, 7, 'Xà lách trộn kiểu Nga', 59000, 5, 295000, 'IMAGES/salad_thit_nuong_vi_large.jpg'),
(24105, 8, 'pizza lạp xưởng', 167000, 1, 167000, 'IMAGES/supreme_pizza_large.jpg'),
(24106, 8, 'pizza tôm', 199000, 1, 199000, 'IMAGES/06_large.jpg'),
(24106, 9, 'pizza tôm', 0, 3, 597000, 'IMAGES/06_large.jpg'),
(24106, 10, 'pizza tôm', 199000, 2, 398000, 'IMAGES/06_large.jpg'),
(24106, 11, 'pizza tôm', 199000, 2, 398000, 'IMAGES/06_large.jpg'),
(24106, 12, 'pizza tôm', 0, 2, 398000, 'IMAGES/06_large.jpg'),
(24106, 13, 'pizza tôm', 189050, 2, 378100, 'IMAGES/06_large.jpg'),
(24106, 14, 'pizza tôm', 189050, 2, 378100, 'IMAGES/06_large.jpg'),
(24096, 14, 'bánh tiêu cay', 40000, 1, 40000, 'IMAGES/sup_ngheu_large.jpg'),
(24080, 14, 'Tomato sp', 57800, 3, 173400, 'IMAGES/my_xao_thap_cam_large.jpg'),
(24082, 14, 'Súp rau', 29000, 1, 29000, 'IMAGES/sup_cua_large.jpg'),
(24079, 14, 'Xà lách trộn kiểu Nga', 53100, 2, 106200, 'IMAGES/salad_thit_nuong_vi_large.jpg'),
(24079, 15, 'Xà lách trộn kiểu Nga', 59000, 3, 177000, 'IMAGES/salad_thit_nuong_vi_large.jpg'),
(24079, 16, 'Xà lách trộn kiểu Nga', 55460, 2, 110920, 'IMAGES/salad_thit_nuong_vi_large.jpg'),
(24080, 16, 'Tomato sp', 63920, 2, 127840, 'IMAGES/my_xao_thap_cam_large.jpg'),
(24079, 17, 'Xà lách trộn kiểu Nga', 55460, 1, 55460, 'IMAGES/salad_thit_nuong_vi_large.jpg'),
(24080, 17, 'Tomato sp', 63920, 2, 127840, 'IMAGES/my_xao_thap_cam_large.jpg'),
(24080, 18, 'Tomato sp', 68000, 2, 136000, 'IMAGES/my_xao_thap_cam_large.jpg'),
(24080, 19, 'Tomato sp', 68000, 1, 68000, 'IMAGES/my_xao_thap_cam_large.jpg'),
(24079, 19, 'Xà lách trộn kiểu Nga', 59000, 3, 177000, 'IMAGES/salad_thit_nuong_vi_large.jpg'),
(24106, 20, '', 0, 1, 0, ''),
(24079, 20, 'Xà lách trộn kiểu Nga', 55460, 2, 110920, 'IMAGES/salad_thit_nuong_vi_large.jpg'),
(24104, 20, 'pizza rau củ', 160000, 1, 160000, 'IMAGES/pizza_lap_xuong_large.jpg'),
(24108, 21, 'pizza thập cẩm', 189000, 1, 189000, 'IMAGES/03_large.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `matt` int(255) NOT NULL,
  `tieude` varchar(255) NOT NULL,
  `noidung` text NOT NULL,
  `thoigiandang` date NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `manv` int(11) NOT NULL,
  `tinhtrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`matt`, `tieude`, `noidung`, `thoigiandang`, `hinhanh`, `manv`, `tinhtrang`) VALUES
(3, 'Khuyến mãi thứ 2, thứ 6 hàng tuần', '						      								      		 Áp dụng cho thứ 2, thứ 4, thứ 6 hàng tuần\r\n Áp dụng cho các hình thức: giao bánh và mang về\r\nKhông áp dụng ngày lễ, tết						      						      ', '2020-06-07', 'IMAGES/sup_cua_large.jpg', 8, 1),
(4, 'Khuyến mãi thứ 3, thứ 5 hàng tuần', '						      								      								      								      		Áp dụng cho ngày thứ 3 và thứ 5 hàng tuần\r\n    Áp dụng cho các hình thức: giao bánh và mang về\r\n    Không áp dụng ngày lễ, tết						      						      						      						      ', '2020-06-07', 'IMAGES/banh_phu_socola_large.jpg', 8, 1),
(7, 'Tặng 1 bánh pizza miễn phí cho ngày sinh nhật của bạn', '						      								      		Tặng 1 pizza cỡ M (áp dụng cho tất cả các loại pizza trừ số 3, 11 và 12)\r\n    Quý khách vui lòng mang theo chứng minh thư nhân dân hoặc các giấy tờ tương đương thể hiện ngày sinh nhật trùng với ngày nhận bánh\r\n    Mỗi khách hàng chỉ được nhận 1 bánh tặng miễn phí\r\n    Chỉ áp dụng với các đơn hàng có giá trị trên 250.000đ\r\n    Cửa hàng tặng miễn phí tối đa 10 bánh/ 1 ngày cho 10 người đăng kí đầu tiên						      						      ', '2020-06-07', 'IMAGES/pizza_lap_xuong_large.jpg', 8, 1),
(8, 'Ăn cực ngon với Vie Food', '						      								      								      		Món ăn đa dạng, thực phẩm đạt chỉ tiêu dinh dưỡng cũng như an toàn thực phẩm. Hãy cùng gia đình và người thân đến Vie Food. Chúng tôi sẽ không làm bạn thất vọng.						      						      						      ', '2020-06-07', 'IMAGES/04_large.jpg', 8, 1),
(9, 'Thực phẩm mới', 'Nhiều thực phẩm mới sẽ ra mắt trong 2020.Các bạn cùng nhau chờ đón nhé.', '2020-06-07', 'IMAGES/09_large.jpg', 8, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`MaDh`),
  ADD KEY `MaKh` (`MaKh`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKh`);

--
-- Chỉ mục cho bảng `khachhangnhanhang`
--
ALTER TABLE `khachhangnhanhang`
  ADD KEY `Makh` (`Makh`),
  ADD KEY `MaDh` (`MaDh`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`makm`);

--
-- Chỉ mục cho bảng `phanhoi`
--
ALTER TABLE `phanhoi`
  ADD PRIMARY KEY (`mapt`);

--
-- Chỉ mục cho bảng `quyen`
--
ALTER TABLE `quyen`
  ADD PRIMARY KEY (`maquyen`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`Masp`);

--
-- Chỉ mục cho bảng `sanphamtrongdonhang`
--
ALTER TABLE `sanphamtrongdonhang`
  ADD KEY `Masp` (`Masp`,`Madh`),
  ADD KEY `Madh` (`Madh`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`matt`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `MaDh` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKh` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `makm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `phanhoi`
--
ALTER TABLE `phanhoi`
  MODIFY `mapt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `quyen`
--
ALTER TABLE `quyen`
  MODIFY `maquyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `Masp` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24110;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `matt` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
