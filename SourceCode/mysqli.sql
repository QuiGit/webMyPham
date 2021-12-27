-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2021 at 02:15 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mysqli`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `admin_status`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id_cart` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `code_cart` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cart_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`id_cart`, `id_khachhang`, `code_cart`, `cart_status`) VALUES
(361, 158, '4088', 0),
(362, 158, '9609', 0),
(363, 158, '2276', 0),
(364, 158, '2737', 0),
(365, 158, '8837', 0),
(366, 158, '1044', 0),
(367, 158, '6523', 0),
(369, 158, '4490', 0),
(370, 158, '9301', 0),
(372, 158, '883', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart_details`
--

CREATE TABLE `tbl_cart_details` (
  `id_cart_details` int(11) NOT NULL,
  `code_cart` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_cart_details`
--

INSERT INTO `tbl_cart_details` (`id_cart_details`, `code_cart`, `id_sanpham`, `soluongmua`) VALUES
(362, '4490', 186, 1),
(363, '9301', 187, 1),
(364, '2360', 185, 1),
(365, '883', 185, 1),
(366, '883', 181, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dangky`
--

CREATE TABLE `tbl_dangky` (
  `id_dangky` int(11) NOT NULL,
  `tenkhachhang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_dangky`
--

INSERT INTO `tbl_dangky` (`id_dangky`, `tenkhachhang`, `email`, `diachi`, `matkhau`, `dienthoai`) VALUES
(158, 'Võ Văn Quí', 'vovanqui18it@gmail.com', 'Thanh Bình, Đồng Tháp', '25f9e794323b453885f5181f1b624d0b', '0339093339');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(1, 'Khác', 0),
(75, 'Sửa rửa mặt', 0),
(76, 'Kem dưỡng', 0),
(77, 'Dưỡng tóc', 0),
(79, 'Che khuyết điểm', 0),
(80, 'Dầu gội - Dầu xả', 0),
(81, 'Chống nắng', 0),
(82, 'Sữa tắm', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `giasp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `id_thuonghieu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `tensanpham`, `giasp`, `hinhanh`, `noidung`, `id_danhmuc`, `id_thuonghieu`) VALUES
(181, 'Sữa Rửa Mặt Dạng Gel Cosrx Low pH Good Morning Gel Cleanser', '18000', '1636881986_sua-rua-mat.jpg', 'Sữa rửa mặt cũng phải chia ra sáng và tối? Thật ra đó là vì độ pH của dòng sản phẩm Cosrx Low pH Good Morning Gel Cleanser thấp hơn so với độ pH của da, nếu độ pH cao sẽ giúp làm sạch da nhiều hơn, tuy nhiên khuyết điểm đó là làm da nhanh khô và dễ gây kích ứng với làn da nhạy cảm.', 75, 22),
(182, 'Kem Dưỡng Cấp Ẩm Giúp Da Căng Mướt Dr.hometox Moisture Multi Cream', '145000', '1636882237_KD-da-cang-muot.png', 'Kem dưỡng cấp ẩm giúp da căng mướt Dr.hometox Moisture Multi Cream với công nghệ giữ ẩm và cấp ẩm hiện đại có thể đạt mức độ giữ ẩm đến hơn 6.000 lần so với các dòng kem dưỡng thông thường giúp làn da bạn luôn ở tình trạng đủ độ ẩm, tránh tình trạng khô và nứt nẻ trên da.', 76, 23),
(183, 'Tinh Chất Dưỡng Làm Mượt Tóc Byvibes Wonder Bath Grapefruit Hair Oil Serum', '135000', '1636882606_tc-duong-muot-toc.jpg', 'Tinh chất dưỡng làm mượt tóc Byvibes Wonder Bath Grapefruit Hair Oil Serum có công dụng chủ yếu là giúp tóc chắc khỏe hơn, ngăn ngừa tình trạng rụng tóc, hạn chế khả năng bị hói đầu, có thể kích thích mọc tóc, làm tóc dày hơn và bồng bềnh hơn.', 77, 24),
(184, 'Kem Che Khuyết Điểm Maybelline Instant Age Rewind Eraser Multi-Use Concealer', '159000', '1636882829_kem-che-khuyet-diem.png', 'Che Khuyết Điểm Maybelline Instant Age Rewind Treatment Concealer là kem che khuyết điểm dành cho vùng dưới mắt với thành phần có chứa Haloxyl có khả năng che phủ quầng thâm và bọng mắt một cách hiệu quả, đồng thời tạo sức sống cho gương mặt.', 79, 25),
(185, 'Bộ Dầu Gội Dầu Xả Tsubaki Shiseido', '280000', '1636883022_bo-dgdx-tsubaki-shisedio.jpg', 'Bộ Dầu Gội Dầu Xả Tsubaki Shiseido (Mẫu mới 2019) là dòng sản phẩm chăm sóc tóc rất nổi tiếng ở Nhật Bản, kết hợp 5 thành phần có nguồn gốc từ thực vật 100% giúp chăm sóc & bảo vệ tóc từ gốc đến ngọn. hỗ trợ mạnh mẽ nuôi dưỡng tóc thêm suông mượt, óng ả, cho tóc bóng khỏe và tránh tình trạng xơ rối.', 80, 26),
(186, 'Kem Chống Nắng The Saem Eco Earth Power SPF 50+ PA+++', '149000', '1636883281_kem-cn-ts-eco-earth.jpg', 'Trong tên gọi của sản phẩm The Saem Eco Earth Power Light Sun Cream SPF50+/PA++++ đã thể hiện được \"lý tưởng\" mà hãng The Saem hướng đến, sản phẩm giúp bảo vệ 100% dưới tác động của tia cực tím và làm dịu da trước ánh nắng mặt trời.', 81, 27),
(187, 'Xà Phòng Trị Thâm Vùng Nách Pelican', '110000', '1636883461_xa-phong-tri-tham-nach.jpg', 'Xà phòng trị thâm nách Pelican đem đến cho bạn gái làn da dưới cánh tay luôn sáng mịn, tự tin diện đồ theo đúng phong cách.Vùng da dưới cánh tay là một bộ phận cần được chăm sóc chu đáo, thâm đen, sần sùi do nhiều nguyên nhân như tổn thương do dùng nhíp, tẩy lông, cạo, hay do tiết mồ hôi quá nhiều. Xà phòng trị thâm nách PELICAN giúp tẩy tế bào chết, làm sáng, khử mùi vùng da dưới cánh tay từ Nhật Bản.\r\n\r\n', 82, 28);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_thuonghieu`
--

CREATE TABLE `tbl_thuonghieu` (
  `id_thuonghieu` int(11) NOT NULL,
  `tenthuonghieu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_thuonghieu`
--

INSERT INTO `tbl_thuonghieu` (`id_thuonghieu`, `tenthuonghieu`, `thutu`) VALUES
(22, 'Cosrx', 0),
(23, 'Dr.Hometox', 0),
(24, 'Byvibes', 0),
(25, 'Maybelline', 0),
(26, 'Khác', 0),
(27, 'The Saem', 0),
(28, 'Pelican', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `id_khachhang` (`id_khachhang`);

--
-- Indexes for table `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  ADD PRIMARY KEY (`id_cart_details`),
  ADD KEY `id_sanpham` (`id_sanpham`);

--
-- Indexes for table `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  ADD PRIMARY KEY (`id_dangky`);

--
-- Indexes for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Indexes for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`),
  ADD KEY `id_danhmuc` (`id_danhmuc`),
  ADD KEY `id_thuonghieu` (`id_thuonghieu`);

--
-- Indexes for table `tbl_thuonghieu`
--
ALTER TABLE `tbl_thuonghieu`
  ADD PRIMARY KEY (`id_thuonghieu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=373;

--
-- AUTO_INCREMENT for table `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  MODIFY `id_cart_details` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=367;

--
-- AUTO_INCREMENT for table `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  MODIFY `id_dangky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- AUTO_INCREMENT for table `tbl_thuonghieu`
--
ALTER TABLE `tbl_thuonghieu`
  MODIFY `id_thuonghieu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD CONSTRAINT `tbl_cart_ibfk_1` FOREIGN KEY (`id_khachhang`) REFERENCES `tbl_dangky` (`id_dangky`);

--
-- Constraints for table `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  ADD CONSTRAINT `tbl_cart_details_ibfk_1` FOREIGN KEY (`id_sanpham`) REFERENCES `tbl_sanpham` (`id_sanpham`),
  ADD CONSTRAINT `tbl_cart_details_ibfk_2` FOREIGN KEY (`id_cart_details`) REFERENCES `tbl_cart` (`id_cart`);

--
-- Constraints for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD CONSTRAINT `tbl_sanpham_ibfk_1` FOREIGN KEY (`id_danhmuc`) REFERENCES `tbl_danhmuc` (`id_danhmuc`),
  ADD CONSTRAINT `tbl_sanpham_ibfk_2` FOREIGN KEY (`id_thuonghieu`) REFERENCES `tbl_thuonghieu` (`id_thuonghieu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
