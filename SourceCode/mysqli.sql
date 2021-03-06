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
(158, 'V?? V??n Qu??', 'vovanqui18it@gmail.com', 'Thanh B??nh, ?????ng Th??p', '25f9e794323b453885f5181f1b624d0b', '0339093339');

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
(1, 'Kh??c', 0),
(75, 'S???a r???a m???t', 0),
(76, 'Kem d?????ng', 0),
(77, 'D?????ng t??c', 0),
(79, 'Che khuy???t ??i???m', 0),
(80, 'D???u g???i - D???u x???', 0),
(81, 'Ch???ng n???ng', 0),
(82, 'S???a t???m', 0);

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
(181, 'S???a R???a M???t D???ng Gel Cosrx Low pH Good Morning Gel Cleanser', '18000', '1636881986_sua-rua-mat.jpg', 'S???a r???a m???t c??ng ph???i chia ra s??ng v?? t???i? Th???t ra ???? l?? v?? ????? pH c???a d??ng s???n ph???m Cosrx Low pH Good Morning Gel Cleanser th???p h??n so v???i ????? pH c???a da, n???u ????? pH cao s??? gi??p l??m s???ch da nhi???u h??n, tuy nhi??n khuy???t ??i???m ???? l?? l??m da nhanh kh?? v?? d??? g??y k??ch ???ng v???i l??n da nh???y c???m.', 75, 22),
(182, 'Kem D?????ng C???p ???m Gi??p Da C??ng M?????t Dr.hometox Moisture Multi Cream', '145000', '1636882237_KD-da-cang-muot.png', 'Kem d?????ng c???p ???m gi??p da c??ng m?????t Dr.hometox Moisture Multi Cream v???i c??ng ngh??? gi??? ???m v?? c???p ???m hi???n ?????i c?? th??? ?????t m???c ????? gi??? ???m ?????n h??n 6.000 l???n so v???i c??c d??ng kem d?????ng th??ng th?????ng gi??p l??n da b???n lu??n ??? t??nh tr???ng ????? ????? ???m, tr??nh t??nh tr???ng kh?? v?? n???t n??? tr??n da.', 76, 23),
(183, 'Tinh Ch???t D?????ng L??m M?????t T??c Byvibes Wonder Bath Grapefruit Hair Oil Serum', '135000', '1636882606_tc-duong-muot-toc.jpg', 'Tinh ch???t d?????ng l??m m?????t t??c Byvibes Wonder Bath Grapefruit Hair Oil Serum c?? c??ng d???ng ch??? y???u l?? gi??p t??c ch???c kh???e h??n, ng??n ng???a t??nh tr???ng r???ng t??c, h???n ch??? kh??? n??ng b??? h??i ?????u, c?? th??? k??ch th??ch m???c t??c, l??m t??c d??y h??n v?? b???ng b???nh h??n.', 77, 24),
(184, 'Kem Che Khuy???t ??i???m Maybelline Instant Age Rewind Eraser Multi-Use Concealer', '159000', '1636882829_kem-che-khuyet-diem.png', 'Che Khuy???t ??i???m Maybelline Instant Age Rewind Treatment Concealer l?? kem che khuy???t ??i???m d??nh cho v??ng d?????i m???t v???i th??nh ph???n c?? ch???a Haloxyl c?? kh??? n??ng che ph??? qu???ng th??m v?? b???ng m???t m???t c??ch hi???u qu???, ?????ng th???i t???o s???c s???ng cho g????ng m???t.', 79, 25),
(185, 'B??? D???u G???i D???u X??? Tsubaki Shiseido', '280000', '1636883022_bo-dgdx-tsubaki-shisedio.jpg', 'B??? D???u G???i D???u X??? Tsubaki Shiseido (M???u m???i 2019) l?? d??ng s???n ph???m ch??m s??c t??c r???t n???i ti???ng ??? Nh???t B???n, k???t h???p 5 th??nh ph???n c?? ngu???n g???c t??? th???c v???t 100% gi??p ch??m s??c & b???o v??? t??c t??? g???c ?????n ng???n. h??? tr??? m???nh m??? nu??i d?????ng t??c th??m su??ng m?????t, ??ng ???, cho t??c b??ng kh???e v?? tr??nh t??nh tr???ng x?? r???i.', 80, 26),
(186, 'Kem Ch???ng N???ng The Saem Eco Earth Power SPF 50+ PA+++', '149000', '1636883281_kem-cn-ts-eco-earth.jpg', 'Trong t??n g???i c???a s???n ph???m The Saem Eco Earth Power Light Sun Cream SPF50+/PA++++ ???? th??? hi???n ???????c \"l?? t?????ng\" m?? h??ng The Saem h?????ng ?????n, s???n ph???m gi??p b???o v??? 100% d?????i t??c ?????ng c???a tia c???c t??m v?? l??m d???u da tr?????c ??nh n???ng m???t tr???i.', 81, 27),
(187, 'X?? Ph??ng Tr??? Th??m V??ng N??ch Pelican', '110000', '1636883461_xa-phong-tri-tham-nach.jpg', 'X?? ph??ng tr??? th??m n??ch Pelican ??em ?????n cho b???n g??i l??n da d?????i c??nh tay lu??n s??ng m???n, t??? tin di???n ????? theo ????ng phong c??ch.V??ng da d?????i c??nh tay l?? m???t b??? ph???n c???n ???????c ch??m s??c chu ????o, th??m ??en, s???n s??i do nhi???u nguy??n nh??n nh?? t???n th????ng do d??ng nh??p, t???y l??ng, c???o, hay do ti???t m??? h??i qu?? nhi???u. X?? ph??ng tr??? th??m n??ch PELICAN gi??p t???y t??? b??o ch???t, l??m s??ng, kh??? m??i v??ng da d?????i c??nh tay t??? Nh???t B???n.\r\n\r\n', 82, 28);

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
(26, 'Kh??c', 0),
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
