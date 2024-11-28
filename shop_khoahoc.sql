-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 28, 2024 lúc 03:24 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop_khoahoc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietkh`
--

CREATE TABLE `chitietkh` (
  `IDChiTietKH` int(10) NOT NULL,
  `IDKhoaHoc` int(10) NOT NULL,
  `MoTa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietkh`
--

INSERT INTO `chitietkh` (`IDChiTietKH`, `IDKhoaHoc`, `MoTa`) VALUES
(33, 1, 'bbbaaKhóa học \"Toán cơ bản\" giúp bạn nắm vững các kiến thức toán học cơ bản, phục vụ cho việc học và ứng dụng trong các môn học khác.'),
(34, 2, 'Khóa học \"Lập trình Python cơ bản\" cung cấp các kỹ năng lập trình cơ bản, giúp bạn xây dựng các ứng dụng đơn giản bằng Python.'),
(35, 3, 'Khóa học \"Marketing Online\" hướng dẫn bạn các chiến lược và công cụ để quảng bá sản phẩm, dịch vụ trực tuyến hiệu quả.'),
(36, 4, 'Khóa học \"Kỹ năng lãnh đạo\" giúp bạn phát triển khả năng lãnh đạo và quản lý nhóm hiệu quả trong môi trường làm việc.'),
(37, 5, 'Khóa học \"Thiết kế đồ họa\" giúp bạn học cách sử dụng các phần mềm thiết kế để tạo ra các sản phẩm đồ họa chuyên nghiệp.'),
(38, 6, 'Khóa học \"Toán nâng cao lớp 10\" cung cấp kiến thức toán học nâng cao, giúp học sinh lớp 10 chuẩn bị tốt cho kỳ thi.'),
(39, 7, 'Khóa học \"Văn học Việt Nam lớp 11\" giúp bạn hiểu sâu về các tác phẩm văn học và các kỹ năng phân tích văn học.'),
(40, 8, 'Khóa học \"Hóa học thực hành lớp 12\" cung cấp các bài tập thực hành hóa học, giúp bạn chuẩn bị cho kỳ thi tốt nghiệp.'),
(41, 9, 'Khóa học \"Lịch sử thế giới hiện đại\" giúp bạn hiểu rõ về các sự kiện lịch sử quan trọng từ thế kỷ 19 đến nay.'),
(42, 10, 'Khóa học \"Lập trình Python cơ bản\" giúp bạn hiểu rõ về lập trình Python, từ các khái niệm cơ bản đến xây dựng các ứng dụng nhỏ.'),
(43, 11, 'Khóa học \"Xây dựng ứng dụng Web với Node.js\" dạy bạn cách sử dụng Node.js để xây dựng các ứng dụng web mạnh mẽ và nhanh chóng.'),
(44, 12, 'Khóa học \"Quản trị hệ thống Linux\" giúp bạn làm chủ các kỹ năng quản lý hệ thống Linux, phục vụ cho công việc IT chuyên nghiệp.'),
(45, 13, 'Khóa học \"Phát triển ứng dụng với React\" cung cấp kiến thức để xây dựng các ứng dụng web động với React.js.'),
(46, 14, 'Khóa học \"Chiến lược Marketing căn bản\" giúp bạn hiểu các chiến lược marketing cơ bản để áp dụng vào việc kinh doanh và quảng bá.'),
(47, 15, 'Khóa học \"SEO và SEM nâng cao\" dạy bạn cách tối ưu hóa công cụ tìm kiếm và quảng cáo trực tuyến để đạt hiệu quả cao nhất.'),
(48, 16, 'Khóa học \"Tâm lý khách hàng\" giúp bạn hiểu tâm lý khách hàng để xây dựng chiến lược marketing hiệu quả hơn.'),
(49, 17, 'Khóa học \"Email Marketing chuyên nghiệp\" giúp bạn xây dựng chiến dịch email marketing hiệu quả để tiếp cận khách hàng tiềm năng.'),
(50, 18, 'Khóa học \"Kỹ năng giao tiếp cơ bản\" cung cấp các kỹ năng giao tiếp hiệu quả trong công việc và cuộc sống.'),
(51, 19, 'Khóa học \"Quản lý thời gian hiệu quả\" giúp bạn quản lý thời gian tốt hơn, từ đó nâng cao năng suất làm việc.'),
(52, 20, 'Khóa học \"Kỹ năng giải quyết vấn đề\" dạy bạn cách phân tích và giải quyết các vấn đề một cách hiệu quả và sáng tạo.'),
(53, 21, 'Khóa học \"Lập kế hoạch cá nhân\" giúp bạn lập kế hoạch cá nhân và quản lý mục tiêu một cách khoa học.'),
(54, 22, 'Khóa học \"Thiết kế logo chuyên nghiệp\" giúp bạn học cách thiết kế các logo đẹp mắt và ấn tượng cho doanh nghiệp hoặc sản phẩm.'),
(55, 23, 'Khóa học \"Thiết kế banner quảng cáo\" giúp bạn tạo ra các banner quảng cáo bắt mắt, thu hút sự chú ý của khách hàng.'),
(56, 24, 'Khóa học \"Dựng video cơ bản\" giúp bạn nắm vững các kỹ năng dựng video cơ bản sử dụng phần mềm phổ biến.'),
(57, 25, 'Khóa học \"Thiết kế giao diện ứng dụng\" cung cấp các kỹ năng thiết kế giao diện người dùng cho các ứng dụng di động và web.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `IDCmt` varchar(5) NOT NULL,
  `NguoiCmt` varchar(5) DEFAULT NULL,
  `NoiDung` varchar(100) DEFAULT NULL,
  `NgayCmt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangkyhoc`
--

CREATE TABLE `dangkyhoc` (
  `IDDangKyHoc` varchar(5) NOT NULL,
  `HocSinh` varchar(5) DEFAULT NULL,
  `KhoaHocDk` int(10) DEFAULT NULL,
  `NgayDangKi` datetime DEFAULT NULL,
  `TrangThai` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `IDCatagory` int(10) NOT NULL,
  `TenDanhMuc` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`IDCatagory`, `TenDanhMuc`) VALUES
(1, 'Giáo dục phổ thông'),
(2, 'Công nghệ thông tin'),
(3, 'Kinh doanh - Marketing'),
(4, 'Phát triển cá nhân'),
(5, 'Thiết kế'),
(6, 'Facebook Marketing'),
(7, 'Dữ liệu'),
(8, 'Bán hàng online'),
(9, 'Phát triển bản thân'),
(10, 'Handmade'),
(11, 'Chăm sóc trẻ'),
(12, 'Zalo Marketing'),
(13, 'Nuôi dạy con');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoahoc`
--

CREATE TABLE `khoahoc` (
  `IDKhoaHoc` int(10) NOT NULL,
  `TenKhoaHoc` varchar(45) DEFAULT NULL,
  `Gia` int(11) DEFAULT NULL,
  `GiaoVien` varchar(50) DEFAULT NULL,
  `IDCatagory` int(10) DEFAULT NULL,
  `HinhAnh` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `khoahoc`
--

INSERT INTO `khoahoc` (`IDKhoaHoc`, `TenKhoaHoc`, `Gia`, `GiaoVien`, `IDCatagory`, `HinhAnh`) VALUES
(1, 'Khóa học Toán cơ bản', 50000000, 'Trần Thị B', 2, 'assets\\image\\products\\ngoai_ngu1.jpg'),
(2, 'Lập trình Python cơ bảnaa', 700000, 'Trần Thị B', 1, 'assets\\image\\products\\ngoai_ngu4.jpg'),
(3, 'Marketing Online', 1200000, 'Trần Thị F', 1, 'assets\\image\\products\\ngoai_ngu4.jpg'),
(4, 'Kỹ năng lãnh đạo', 1500000, 'Nguyễn Văn E', 1, 'https://example.com/images/ky_nang_lanh_dao.jpg'),
(5, 'Thiết kế đồ họa', 2000000, 'Trần Thị B', 6, 'https://example.com/images/thiet_ke_do_hoa.jpg'),
(6, 'Toán nâng cao lớp 10', 500000, 'Nguyễn Văn A', 1, 'assets\\image\\products\\ngoai_ngu1.jpg'),
(7, 'Văn học Việt Nam lớp 11', 450000, 'Trần Thị B', 1, 'assets\\image\\products\\ngoai_ngu1.jpg'),
(8, 'Hóa học thực hành lớp 12', 600000, 'Lê Văn C', 1, 'assets\\image\\products\\ngoai_ngu1.jpg'),
(9, 'Lịch sử thế giới hiện đại', 550000, 'Phạm Thị D', 1, 'assets\\image\\products\\ngoai_ngu1.jpg'),
(10, 'Lập trình Python cơ bản', 700000, 'Nguyễn Văn E', 2, 'assets\\image\\products\\ngoai_ngu4.jpg'),
(11, 'Xây dựng ứng dụng Web với Node.js', 900000, 'Trần Thị F', 2, 'assets\\image\\products\\ngoai_ngu4.jpg'),
(12, 'Quản trị hệ thống Linux', 800000, 'Lê Văn G', 2, 'assets\\image\\products\\ngoai_ngu4.jpg'),
(13, 'Phát triển ứng dụng với React', 1000000, 'Phạm Thị H', 2, 'assets\\image\\products\\ngoai_ngu4.jpg'),
(14, 'Chiến lược Marketing căn bản', 850000, 'Nguyễn Văn I', 3, 'https://example.com/images/marketing_can_ban.jpgassets\\image\\products\\ngoai_ngu4.jpgassets\\image\\products\\ngoai_ngu4.jpg'),
(15, 'SEO và SEM nâng cao', 1200000, 'Trần Thị J', 3, 'assets\\image\\products\\ngoai_ngu4.jpg'),
(16, 'Tâm lý khách hàng', 750000, 'Lê Văn K', 3, 'https://example.com/images/tam_ly_khach_hang.jpg'),
(17, 'Email Marketing chuyên nghiệp', 800000, 'Phạm Thị L', 3, 'https://example.com/images/email_marketing.jpg'),
(18, 'Kỹ năng giao tiếp cơ bản', 600000, 'Nguyễn Văn M', 4, 'https://example.com/images/giao_tiep_co_ban.jpg'),
(19, 'Quản lý thời gian hiệu quả', 550000, 'Trần Thị N', 4, 'https://example.com/images/quan_ly_thoi_gian.jpg'),
(20, 'Kỹ năng giải quyết vấn đề', 700000, 'Lê Văn O', 4, 'https://example.com/images/giai_quyet_van_de.jpg'),
(21, 'Lập kế hoạch cá nhân', 500000, 'Phạm Thị P', 4, 'https://example.com/images/ke_hoach_ca_nhan.jpg'),
(22, 'Thiết kế logo chuyên nghiệp', 1000000, 'Nguyễn Văn Q', 5, 'https://example.com/images/thiet_ke_logo.jpg'),
(23, 'Thiết kế banner quảng cáo', 900000, 'Trần Thị R', 5, 'https://example.com/images/banner_quang_cao.jpg'),
(24, 'Dựng video cơ bản', 800000, 'Lê Văn S', 5, 'https://example.com/images/video_co_ban.jpg'),
(25, 'Thiết kế giao diện ứng dụng', 1100000, 'Phạm Thị T', 5, 'https://example.com/images/thiet_ke_ung_dung.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `IDPost` varchar(5) NOT NULL,
  `NguoiPost` varchar(5) DEFAULT NULL,
  `Title` varchar(100) DEFAULT NULL,
  `Content` varchar(100) DEFAULT NULL,
  `NgayPost` datetime DEFAULT NULL,
  `NgayUpdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhtoan`
--

CREATE TABLE `thanhtoan` (
  `IDpay` varchar(5) NOT NULL,
  `LoaiPhuongThuc` varchar(45) DEFAULT NULL,
  `NguoiThanhToan` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `UserID` int(10) NOT NULL,
  `UserName` varchar(45) DEFAULT NULL,
  `Password` varchar(45) DEFAULT NULL,
  `HoVaTen` varchar(45) DEFAULT NULL,
  `image` varchar(1000) NOT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Address` varchar(45) DEFAULT NULL,
  `Phone` int(11) DEFAULT NULL,
  `LoaiTK` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`UserID`, `UserName`, `Password`, `HoVaTen`, `image`, `Email`, `Address`, `Phone`, `LoaiTK`) VALUES
(1, 'phongla', 'phong97', 'Lê Anh Phong', '', 'lap97@gmail.com', 'TP Thanh Hóa', 988777365, 1),
(2, 'nguyenvana', '', 'Nguyễn Văn An', 'assets/image/users/nguyenvana.jpg', 'nguyenvana@example.com', 'Hà Nội', 1234567890, 2),
(3, 'tranthib', '123456', 'Trần Thị B', 'assets/image/users/tranthib.jpg', 'tranthib@example.com', 'Hồ Chí Minh', 1234567891, 2),
(4, 'levanc', '123456', 'Lê Văn C', 'assets/image/users/levanc.jpg', 'levanc@example.com', 'Đà Nẵng', 1234567892, 2),
(5, 'phamthid', '123456', 'Phạm Thị D', 'assets/image/users/phamthid.jpg', 'phamthid@example.com', 'Cần Thơ', 1234567893, 2),
(6, 'nguyenvane', '123456', 'Nguyễn Văn E', 'assets/image/users/nguyenvane.jpg', 'nguyenvane@example.com', 'Hải Phòng', 1234567894, 2),
(7, 'tranthif', '123456', 'Trần Thị F', 'assets/image/users/tranthif.jpg', 'tranthif@example.com', 'Nghệ An', 1234567895, 2),
(8, 'levang', '123456', 'Lê Văn G', 'assets/image/users/levang.jpg', 'levang@example.com', 'Thanh Hóa', 1234567896, 2),
(9, 'phamthih', '123456', 'Phạm Thị H', 'assets/image/users/phamthih.jpg', 'phamthih@example.com', 'Huế', 1234567897, 2),
(10, 'nguyenvani', '123456', 'Nguyễn Văn I', 'assets/image/users/nguyenvani.jpg', 'nguyenvani@example.com', 'Quảng Ninh', 1234567898, 2),
(11, 'tranthij', '123456', 'Trần Thị J', 'assets/image/users/tranthij.jpg', 'tranthij@example.com', 'Bắc Ninh', 1234567899, 2),
(12, 'levank', '123456', 'Lê Văn K', 'assets/image/users/levank.jpg', 'levank@example.com', 'Nam Định', 1234567800, 2),
(13, 'phamthil', '123456', 'Phạm Thị L', 'assets/image/users/phamthil.jpg', 'phamthil@example.com', 'Thái Bình', 1234567801, 2),
(14, 'nguyenvanm', '123456', 'Nguyễn Văn M', 'assets/image/users/nguyenvanm.jpg', 'nguyenvanm@example.com', 'Hà Giang', 1234567802, 2),
(15, 'tranthin', '123456', 'Trần Thị N', 'assets/image/users/tranthiN.jpg', 'tranthin@example.com', 'Lào Cai', 1234567803, 2),
(16, 'levano', '123456', 'Lê Văn O', 'assets/image/users/levano.jpg', 'levano@example.com', 'Phú Thọ', 1234567804, 2),
(17, 'phamthip', '123456', 'Phạm Thị P', 'assets/image/users/phamthip.jpg', 'phamthip@example.com', 'Quảng Bình', 1234567805, 2),
(18, 'nguyenvanq', '123456', 'Nguyễn Văn Q', 'assets/image/users/nguyenvanq.jpg', 'nguyenvanq@example.com', 'Ninh Bình', 1234567806, 2),
(19, 'tranthir', '123456', 'Trần Thị R', 'assets/image/users/tranthir.jpg', 'tranthir@example.com', 'Bắc Giang', 1234567807, 2),
(20, 'levans', '123456', 'Lê Văn S', 'assets/image/users/levans.jpg', 'levans@example.com', 'Hà Nam', 1234567808, 2),
(21, 'phamthit', '123456', 'Phạm Thị T', 'assets/image/users/phamthit.jpg', 'phamthit@example.com', 'Thái Nguyên', 1234567809, 2),
(22, 'tranminhanh', '123456', 'Trần Minh Anh', 'assets/image/users/tranminhanh.jpg', 'minhanh@example.com', 'Hà Nội', 123450001, 3),
(23, 'nguyenan', '123456', 'Nguyễn An', 'assets/image/users/nguyenan.jpg', 'nguyenan@example.com', 'Hồ Chí Minh', 123450002, 3),
(24, 'phamngoclinh', '123456', 'Phạm Ngọc Linh', 'assets/image/users/phamngoclinh.jpg', 'ngoclinh@example.com', 'Đà Nẵng', 123450003, 3),
(25, 'levanson', '123456', 'Lê Văn Sơn', 'assets/image/users/levanson.jpg', 'vanson@example.com', 'Hải Phòng', 123450004, 3),
(26, 'hoangthuhuyen', '123456', 'Hoàng Thu Huyền', 'assets/image/users/hoangthuhuyen.jpg', 'thuhuyen@example.com', 'Nghệ An', 123450005, 3),
(27, 'dovanminh', '123456', 'Đỗ Văn Minh', 'assets/image/users/dovanminh.jpg', 'vanminh@example.com', 'Cần Thơ', 123450006, 3),
(28, 'nguyenquynhanh', '123456', 'Nguyễn Quỳnh Anh', 'assets/image/users/nguyenquynhanh.jpg', 'quynhanh@example.com', 'Huế', 123450007, 3),
(29, 'tranthithao', '123456', 'Trần Thị Thảo', 'assets/image/users/tranthithao.jpg', 'thithao@example.com', 'Hà Nam', 123450008, 3),
(30, 'nguyenthanhtam', '123456', 'Nguyễn Thanh Tâm', 'assets/image/users/nguyenthanhtam.jpg', 'thanhtam@example.com', 'Quảng Ninh', 123450009, 3),
(31, 'hoangvanbao', '123456', 'Hoàng Văn Bảo', 'assets/image/users/hoangvanbao.jpg', 'vanbao@example.com', 'Thái Bình', 123450010, 3),
(32, 'lethiphuong', '123456', 'Lê Thị Phương', 'assets/image/users/lethiphuong.jpg', 'phuong@example.com', 'Bắc Ninh', 123450011, 3),
(33, 'phamngoctuan', '123456', 'Phạm Ngọc Tuấn', 'assets/image/users/phamngoctuan.jpg', 'ngoctuan@example.com', 'Nam Định', 123450012, 3),
(34, 'dinhhoangnam', '123456', 'Đinh Hoàng Nam', 'assets/image/users/dinhhoangnam.jpg', 'hoangnam@example.com', 'Phú Thọ', 123450013, 3),
(35, 'nguyenhoanganh', '123456', 'Nguyễn Hoàng Anh', 'assets/image/users/nguyenhoanganh.jpg', 'hoanganh@example.com', 'Quảng Bình', 123450014, 3),
(36, 'tranvanhai', '123456', 'Trần Văn Hải', 'assets/image/users/tranvanhai.jpg', 'vanhai@example.com', 'Bắc Giang', 123450015, 3),
(37, 'hoangthithu', '123456', 'Hoàng Thị Thu', 'assets/image/users/hoangthithu.jpg', 'thithu@example.com', 'Lào Cai', 123450016, 3),
(38, 'lethithanh', '123456', 'Lê Thị Thanh', 'assets/image/users/lethithanh.jpg', 'thithanh@example.com', 'Hà Tĩnh', 123450017, 3),
(39, 'phamductai', '123456', 'Phạm Đức Tài', 'assets/image/users/phamductai.jpg', 'ductai@example.com', 'Hải Dương', 123450018, 3),
(40, 'dangvanthang', '123456', 'Đặng Văn Thắng', 'assets/image/users/dangvanthang.jpg', 'vanthang@example.com', 'Thái Nguyên', 123450019, 3);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
