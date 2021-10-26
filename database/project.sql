-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2020 at 07:01 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ma` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ma`, `username`, `pass`) VALUES
(1, 'aaa', '123'),
(3, 'iloth', '123');

-- --------------------------------------------------------

--
-- Table structure for table `dang_ki`
--

CREATE TABLE `dang_ki` (
  `Code` int(11) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `user` varchar(200) CHARACTER SET latin1 NOT NULL,
  `pass` varchar(20) CHARACTER SET latin1 NOT NULL,
  `sdt` char(10) CHARACTER SET latin1 NOT NULL,
  `email` varchar(233) CHARACTER SET latin1 NOT NULL,
  `diachi` text NOT NULL,
  `gioitinh` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dang_ki`
--

INSERT INTO `dang_ki` (`Code`, `ten`, `user`, `pass`, `sdt`, `email`, `diachi`, `gioitinh`) VALUES
(4, 'TBH', 'abc', '147', '355987648', 'aaaaaaa', 'bbbbbbb', 1),
(13, 'aaa', 'kkk', 'jing', '0358524913', 'tyuytuty', 'kkk', 0),
(14, 'TBH', 'tranhung.iloth', '123', '35509998', 'tranhung01a@gmail.com', 'Thanh hoa', 0),
(15, 'Hoàng Minh Anh', 'jingle', '123', '035509998', 'minhanh@gmail.com', 'Bạch Đằng', 0),
(19, 'Hoàng Minh Anh', 'mamama', '123', '355099462', 'ssas@gmail.com', 'Hà Nội', 0),
(20, 'TBHa', 'gagaga', '123', '355099462', 'vghgh@gm', 'Trần Bá Hùng', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don`
--

CREATE TABLE `hoa_don` (
  `ma_hoa_don` int(11) NOT NULL,
  `ma_khach_hang` int(100) NOT NULL,
  `ten_nguoi_nhan` varchar(100) NOT NULL,
  `sdt_nguoi_nhan` char(10) CHARACTER SET latin1 NOT NULL,
  `dia_chi_nguoi_nhan` varchar(100) NOT NULL,
  `thoi_gian` date NOT NULL,
  `tong_tien` int(11) NOT NULL,
  `tinh_trang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hoa_don`
--

INSERT INTO `hoa_don` (`ma_hoa_don`, `ma_khach_hang`, `ten_nguoi_nhan`, `sdt_nguoi_nhan`, `dia_chi_nguoi_nhan`, `thoi_gian`, `tong_tien`, `tinh_trang`) VALUES
(14, 7, 'iLoth', '0355987648', 'Ha Noi', '2019-12-09', 0, 1),
(15, 7, 'Trần Bá Hùng', '0355987648', 'Hà Nội', '2019-12-09', 0, 0),
(16, 7, 'Trần Bá Hùng', '0355987648', 'Hà Nội', '2019-12-09', 0, 0),
(17, 7, 'Chameleon', '0355987648', 'Ha Noi', '2019-12-09', 0, 0),
(18, 7, 'TranHung', '0355987648', 'Thanh Hoa', '2019-12-09', 0, 0),
(20, 7, 'TranHung', '0356787665', 'VietNam', '2019-12-09', 250000, 0),
(21, 7, 'iLoth', '0355987648', 'Ha Noi', '2019-12-10', 250000, 0),
(22, 7, 'iLoth', '0355987648', 'Ha Noi', '2019-12-10', 0, 0),
(23, 7, 'iLoth', '0355987648', 'Ha Noi', '2019-12-21', 1750000, 0),
(24, 7, 'uuuuuuu', '0356787667', 'aaaaaa', '2019-12-23', 0, 0),
(25, 7, 'uuuuuuu', '0356787667', 'aaaaaa', '2019-12-23', 0, 0),
(26, 7, 'ooooooooo', '0356787660', 'thanh hoa', '2019-12-23', 0, 0),
(27, 7, 'aaaakkk', '0355987648', 'aaskskk', '2019-12-23', 269000, 0),
(28, 7, 'qÆ°er', '0355987648', 'qqqqwww', '2019-12-23', 250000, 0),
(29, 7, 'qÆ°er', '0355987648', 'qqqqwww', '2019-12-23', 0, 0),
(30, 7, 'iLoth', '0355987648', 'Ha Noi', '2019-12-23', 250000, 0),
(31, 7, 'iLoth', '0355987648', 'Ha Noi', '2019-12-23', 250000, 0),
(32, 7, 'iLoth', '0355987648', 'Ha Noi', '2019-12-23', 0, 0),
(33, 7, 'iLoth', '0355987648', 'Ha Noi', '2019-12-23', 0, 0),
(34, 7, 'Ã¢sa', '0356787665', 'Ã¢sa', '2020-01-08', 500000, 0),
(35, 13, 'aaa', '0356787660', 'kkk', '2020-01-08', 280000, 0),
(36, 7, 'iLoth', '0355987648', 'Ha Noi', '2020-01-09', 120000, 0),
(37, 7, 'iLoth', '0355987648', 'Ha Noi', '2020-01-09', 410000, 0),
(38, 13, 'aaa', '0356787665', 'kkk', '2020-01-09', 429000, 0),
(39, 19, 'Trần Bá Hùng', '0355099462', 'Thanh Hóa', '2020-01-14', 250000, 0),
(40, 13, 'aaa', '0358524913', 'aaa', '2020-01-15', 250000, 0),
(41, 13, 'aaa', '0358524913', 'kkk', '2020-01-15', 250000, 0),
(42, 15, 'Hoàng Minh Anh', '0368097814', 'Hà Nội', '2020-01-15', 250000, 1),
(43, 15, 'Hoàng Minh Anh', '0356787665', 'Hà Nội', '2020-01-16', 160000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don_chi_tiet`
--

CREATE TABLE `hoa_don_chi_tiet` (
  `ma_hoa_don_ct` int(11) NOT NULL,
  `ma_san_pham` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `ma_hoa_don` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hoa_don_chi_tiet`
--

INSERT INTO `hoa_don_chi_tiet` (`ma_hoa_don_ct`, `ma_san_pham`, `so_luong`, `ma_hoa_don`) VALUES
(1, 2, 1, 28),
(2, 2, 1, 30),
(3, 2, 1, 31),
(4, 2, 2, 34),
(5, 6, 1, 35),
(6, 9, 1, 36),
(7, 2, 1, 37),
(8, 1, 1, 37),
(9, 3, 1, 38),
(10, 1, 1, 38),
(11, 2, 1, 39),
(12, 2, 1, 40),
(13, 2, 1, 41),
(14, 2, 1, 42),
(15, 1, 1, 43);

-- --------------------------------------------------------

--
-- Table structure for table `nha_san_xuat`
--

CREATE TABLE `nha_san_xuat` (
  `ma_nsx` int(11) NOT NULL,
  `ten_nsx` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nha_san_xuat`
--

INSERT INTO `nha_san_xuat` (`ma_nsx`, `ten_nsx`) VALUES
(1, 'YEHWADAM'),
(2, 'The Ordinary'),
(3, 'E.L.F'),
(4, 'THE ORDINARY');

-- --------------------------------------------------------

--
-- Table structure for table `tblloai`
--

CREATE TABLE `tblloai` (
  `ma` int(11) NOT NULL,
  `loai` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblloai`
--

INSERT INTO `tblloai` (`ma`, `loai`) VALUES
(1, 'Son'),
(2, 'Mascara'),
(3, 'Kem Trang Diem');

-- --------------------------------------------------------

--
-- Table structure for table `tblsanpham`
--

CREATE TABLE `tblsanpham` (
  `ma` int(11) NOT NULL,
  `ten` varchar(100) NOT NULL,
  `anh` varchar(500) NOT NULL,
  `gia` int(100) NOT NULL,
  `mota` text CHARACTER SET utf8 NOT NULL,
  `maloai` int(11) NOT NULL,
  `ma_nsx` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsanpham`
--

INSERT INTO `tblsanpham` (`ma`, `ten`, `anh`, `gia`, `mota`, `maloai`, `ma_nsx`) VALUES
(1, 'Sivanna Colors Matte Lips #09', '8.jpg', 160000, '<p>Son Kem Lì Lip Crush Matte là có nguồn gốc xuất xứ từ Hàn Quốc</p><p>Son tạo được ấn tượng nổi bật bởi chất son mướt có độ bóng nhẹ, bảng màu tươi mới với nhiều màu sắc tươi trẻ năng động.</p><p>Độ bám của son có thể lên đến 7 tiếng</p>\r\n', 1, 1),
(2, 'ECOLE Highfix Lip Manicure #7', '2.jpg', 250000, '<p>Son Kem Lì Lip Crush Matte là có nguồn gốc xuất xứ từ Hàn Quốc</p><p>Son tạo được ấn tượng nổi bật bởi chất son mướt có độ bóng nhẹ, bảng màu tươi mới với nhiều màu sắc tươi trẻ năng động.</p> ', 1, 1),
(3, ' Holika Water Drop Tint #7', '3.jpg', 269000, '', 1, 3),
(4, '3CE Mood Recipe Lip', '4.jpg', 270000, '', 1, 2),
(5, 'Apieu BR01', '5.jpg', 320000, '', 1, 1),
(6, 'AGANPAN pit a pat lipstick', '6.jpg', 280000, '', 1, 2),
(7, 'Sivanna Colors Matte Lips #07', '7.jpg', 165000, '', 1, 3),
(8, 'Lip Crush Matte #10', '1.jpg', 240000, '', 1, 3),
(9, 'Freshian Big Mascara 01 Curling', 'freshian_big_mascara_01_curling.jpg', 120000, '', 2, 3),
(10, 'Mascara Mega Proof Master', 'mega-proof-mascara_master.jpg', 450000, '', 2, 2),
(11, 'Mascara Freshian Big 02 Volume', 'freshian_mascara_02_volume.jpg', 380000, '', 2, 4),
(12, 'Mascara THEFACESHOP 2 In 1 Curling', 'MascaraTHEFACESHOP2IN1_CURLING.jpg', 290000, '', 2, 1),
(13, 'Brightening UV Pact SPF50+ PA+++', '3_1.jpg', 350000, '', 3, 4),
(14, 'Bare Skin Mineral Cover Powder SPF27 PA++', '3_2.jpg', 300000, '', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tinh_trang`
--

CREATE TABLE `tinh_trang` (
  `ma` int(11) NOT NULL,
  `tinh_trang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tinh_trang`
--

INSERT INTO `tinh_trang` (`ma`, `tinh_trang`) VALUES
(1, 'Đặt hàng thành công'),
(2, 'Đang giao'),
(3, 'Đã giao'),
(4, 'Đã hủy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ma`);

--
-- Indexes for table `dang_ki`
--
ALTER TABLE `dang_ki`
  ADD PRIMARY KEY (`Code`);

--
-- Indexes for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`ma_hoa_don`),
  ADD KEY `ma_khach_hang` (`ma_khach_hang`);

--
-- Indexes for table `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  ADD PRIMARY KEY (`ma_hoa_don_ct`),
  ADD KEY `ma_hoa_don` (`ma_hoa_don`),
  ADD KEY `ma_san_pham` (`ma_san_pham`);

--
-- Indexes for table `nha_san_xuat`
--
ALTER TABLE `nha_san_xuat`
  ADD PRIMARY KEY (`ma_nsx`);

--
-- Indexes for table `tblloai`
--
ALTER TABLE `tblloai`
  ADD PRIMARY KEY (`ma`);

--
-- Indexes for table `tblsanpham`
--
ALTER TABLE `tblsanpham`
  ADD PRIMARY KEY (`ma`),
  ADD KEY `maloai` (`maloai`),
  ADD KEY `ma_nsx` (`ma_nsx`);

--
-- Indexes for table `tinh_trang`
--
ALTER TABLE `tinh_trang`
  ADD PRIMARY KEY (`ma`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dang_ki`
--
ALTER TABLE `dang_ki`
  MODIFY `Code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `ma_hoa_don` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  MODIFY `ma_hoa_don_ct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `nha_san_xuat`
--
ALTER TABLE `nha_san_xuat`
  MODIFY `ma_nsx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblloai`
--
ALTER TABLE `tblloai`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblsanpham`
--
ALTER TABLE `tblsanpham`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tinh_trang`
--
ALTER TABLE `tinh_trang`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  ADD CONSTRAINT `hoa_don_chi_tiet_ibfk_1` FOREIGN KEY (`ma_hoa_don`) REFERENCES `hoa_don` (`ma_hoa_don`),
  ADD CONSTRAINT `hoa_don_chi_tiet_ibfk_2` FOREIGN KEY (`ma_san_pham`) REFERENCES `tblsanpham` (`ma`);

--
-- Constraints for table `tblsanpham`
--
ALTER TABLE `tblsanpham`
  ADD CONSTRAINT `tblsanpham_ibfk_1` FOREIGN KEY (`maloai`) REFERENCES `tblloai` (`ma`),
  ADD CONSTRAINT `tblsanpham_ibfk_2` FOREIGN KEY (`ma_nsx`) REFERENCES `nha_san_xuat` (`ma_nsx`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
