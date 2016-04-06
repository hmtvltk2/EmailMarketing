-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2016 at 06:34 PM
-- Server version: 5.7.9-log
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `email`
--

-- --------------------------------------------------------

--
-- Table structure for table `chiendich`
--

CREATE TABLE `chiendich` (
  `maChienDich` int(11) NOT NULL,
  `maThu` int(11) DEFAULT NULL,
  `maDanhSachKhachHang` int(11) NOT NULL,
  `ngayGui` date NOT NULL,
  `tenChienDich` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `tenGui` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `emailGui` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `loiNhac` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `SLgui` int(11) NOT NULL,
  `SLmo` int(11) NOT NULL,
  `SLclickLink` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chiendich`
--

INSERT INTO `chiendich` (`maChienDich`, `maThu`, `maDanhSachKhachHang`, `ngayGui`, `tenChienDich`, `tenGui`, `emailGui`, `loiNhac`, `SLgui`, `SLmo`, `SLclickLink`) VALUES
(5, 5, 41, '2016-04-01', 'loa', 'sand', 'nhasachindigo9111@gmail.com', 'sd', 0, 0, 0),
(6, 5, 41, '2016-04-08', 'sd', 'sad', 'nhasachindigo9111@gmail.com', 'sad', 0, 0, 0),
(7, 5, 53, '2016-04-23', 'ád', 'sad', 'nhasachindigo9111@gmail.com', '', 0, 0, 0),
(8, 5, 53, '2016-04-16', 'loan', 'loan', 'nhasachindigo9111@gmail.com', 'sadd', 0, 0, 0),
(9, 5, 53, '2016-04-09', 'A', 'A', 'nhasachindigo9111@gmail.com', 'A', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `chuki`
--

CREATE TABLE `chuki` (
  `maChuKi` int(11) NOT NULL,
  `tenCongTy` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `diaChiCongTy` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `websiteCongTy` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `soDienThoai` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chuki`
--

INSERT INTO `chuki` (`maChuKi`, `tenCongTy`, `diaChiCongTy`, `websiteCongTy`, `soDienThoai`) VALUES
(1, 'Nhà sách InDigo', 'Phường Linh Trung - Quận Thủ Đức - Tp HCM', 'nhaSachInDigi.com', '84 - 654 - 671 1');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `maKhachHang` int(11) NOT NULL,
  `maLoaiKhachHang` int(11) NOT NULL,
  `tenKhachHang` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(70) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`maKhachHang`, `maLoaiKhachHang`, `tenKhachHang`, `email`) VALUES
(32, 16, '', 'aAA@gmail.com'),
(33, 16, 'a', 'aAA@gmail.com'),
(34, 16, 'sda', 'a@gmail.com'),
(35, 16, 'sda', 'a@gmail.com'),
(36, 16, 'sda', 'a@gmail.com'),
(38, 16, 'sda', 'a@gmail.com'),
(39, 16, 'sda', 'a@gmail.com'),
(40, 16, 'sda', 'a@gmail.com'),
(41, 16, 'sda', 'a@gmail.com'),
(42, 16, 'sda', 'a@gmail.com'),
(44, 24, 'a', 'aa@gmail.com'),
(46, 24, 'zbb', 'loancnp'),
(47, 25, 'À', 'aa@gmail.com'),
(50, 25, 'danh sách a', 'aaVv@gmail.com'),
(51, 25, 'sda', 'aad@gmail.com'),
(53, 25, 'sad', 'aa@gmail.com'),
(54, 25, 'sad', 'aab@gmail.com'),
(55, 25, 'sad', 'dsad@gmail.com'),
(56, 25, 'sad', 'ala@gmail.com'),
(57, 27, 'ádasd', 'aa@gmail.com'),
(58, 27, 'sakhfj', 'loancnpm@gmail.com'),
(59, 27, 'dskaljdk', 'sadka@gmail.com'),
(60, 27, 'ádasd', 'ala@gmail.com'),
(61, 27, 'sad', 'sinsin0453@gmail.com'),
(62, 27, '', 'booking@phongmarketing.com'),
(63, 27, '', 'banbientap@phongmarketing.com'),
(65, 25, '', 'booking@phongmarketing.com'),
(66, 25, '', 'banbientap@phongmarketing.com'),
(67, 24, '', 'booking@phongmarketing.com'),
(69, 13, '', 'booking@phongmarketing.com'),
(70, 13, 'sadad', 'banbientap@phongmarketing.co'),
(73, 37, 'sada', 'sinsin0453@gmail.com'),
(74, 37, 'a', 'aa@gmail.com'),
(75, 37, 'asd', 'loancnpm@gmail.com'),
(76, 37, 'sdjskagd', 'aabfg@gmail.com'),
(78, 37, '', 'booking@phongmarketing.com'),
(79, 37, '', 'banbientap@phongmarketing.com'),
(81, 16, '', 'booking@phongmarketing.com'),
(83, 38, '', 'booking@phongmarketing.com'),
(85, 38, 'ử', 'aAA@gmail.com'),
(86, 38, 'dsjfh', 'aa@gmail.com'),
(88, 41, '', 'AJAX = Asynchronous JavaScript and XML \r\n'),
(89, 41, '', 'CSS = Cascading Style Sheets \r\n'),
(90, 41, '', 'HTML = Hyper Text Markup Language \r\n'),
(91, 41, '', 'PHP = PHP Hypertext Preprocessor \r\n'),
(95, 45, '', 'sadka@gmail.com'),
(96, 45, 'sad', 'a@gmail.com'),
(97, 45, 'sad', 'saadka@gmail.com'),
(98, 45, 'admin', 'sinsin0453@gmail.com'),
(99, 45, 'sad', 'b@gmail.com'),
(100, 45, 'sad', 'l@gmail.com'),
(101, 45, 'shagd', 'h@gmail.com'),
(102, 45, 'sadj', 'jsadl@gmail.com'),
(103, 47, 'admin', 'alad@gmail.com'),
(104, 47, 'sad', 'sinnhoi9111@gmail.com'),
(105, 47, 'sad', 'sinsin0453@gmail.com'),
(106, 47, 'sad', 'sf@gmail.com'),
(107, 47, 'sda', 'sads@gmail.com'),
(108, 47, 'sads@gmail.com', 'sads@gmaidl.com'),
(109, 47, 'd', 'sads@gmail.comm'),
(110, 47, 'sa', 'alert@gmail.com'),
(111, 47, 'sa', 'lon@gmail.com'),
(113, 47, 'sda', 'llksahkd@gmail.com'),
(114, 47, 'sad', 'ksahkdlll@gmail.com'),
(115, 47, 'sdsadsaf', 'sgdksahkdlll@gmail.comsd'),
(116, 47, 'á', 'sadkas@gmail.com'),
(119, 51, '', 'booking@phongmarketing.com'),
(120, 51, '', 'banbientap@phongmarketing.com'),
(121, 50, '', 'AJAX = Asynchronous JavaScript and XML \r\n'),
(122, 50, '', 'CSS = Cascading Style Sheets \r\n'),
(123, 50, '', 'HTML = Hyper Text Markup Language \r\n'),
(124, 50, '', 'PHP = PHP Hypertext Preprocessor \r\n'),
(125, 50, '', 'SQL = Structured Query Language \r\n'),
(126, 50, '', 'SVG = Scalable Vector Graphics \r\n'),
(127, 50, '', 'XML = EXtensible Markup Language'),
(131, 49, '', 'AJAX = Asynchronous JavaScript and XML \r\n'),
(132, 49, '', 'CSS = Cascading Style Sheets \r\n'),
(133, 49, '', 'HTML = Hyper Text Markup Language \r\n'),
(134, 49, '', 'PHP = PHP Hypertext Preprocessor \r\n'),
(135, 49, '', 'SQL = Structured Query Language \r\n'),
(136, 49, '', 'SVG = Scalable Vector Graphics \r\n'),
(137, 49, '', 'XML = EXtensible Markup Language'),
(138, 48, '', 'AJAX = Asynchronous JavaScript and XML \r\n'),
(139, 48, '', 'CSS = Cascading Style Sheets \r\n'),
(140, 48, '', 'HTML = Hyper Text Markup Language \r\n'),
(141, 48, '', 'PHP = PHP Hypertext Preprocessor \r\n'),
(142, 48, '', 'SQL = Structured Query Language \r\n'),
(143, 48, '', 'SVG = Scalable Vector Graphics \r\n'),
(144, 48, '', 'XML = EXtensible Markup Language'),
(145, 13, '', 'AJAX = Asynchronous JavaScript and XML \r\n'),
(146, 13, '', 'CSS = Cascading Style Sheets \r\n'),
(147, 13, '', 'HTML = Hyper Text Markup Language \r\n'),
(148, 13, '', 'PHP = PHP Hypertext Preprocessor \r\n'),
(149, 13, '', 'SQL = Structured Query Language \r\n'),
(150, 13, '', 'SVG = Scalable Vector Graphics \r\n'),
(151, 13, '', 'XML = EXtensible Markup Language'),
(152, 52, '', 'AJAX = Asynchronous JavaScript and XML \r\n'),
(153, 52, '', 'CSS = Cascading Style Sheets \r\n'),
(154, 52, '', 'HTML = Hyper Text Markup Language \r\n'),
(155, 52, '', 'PHP = PHP Hypertext Preprocessor \r\n'),
(156, 52, '', 'SQL = Structured Query Language \r\n'),
(157, 52, '', 'SVG = Scalable Vector Graphics \r\n'),
(158, 52, '', 'XML = EXtensible Markup Language'),
(159, 51, '', 'AJAX = Asynchronous JavaScript and XML \r\n'),
(160, 51, '', 'CSS = Cascading Style Sheets \r\n'),
(161, 51, '', 'HTML = Hyper Text Markup Language \r\n'),
(162, 51, '', 'PHP = PHP Hypertext Preprocessor \r\n'),
(163, 51, '', 'SQL = Structured Query Language \r\n'),
(164, 51, '', 'SVG = Scalable Vector Graphics \r\n'),
(165, 51, '', 'XML = EXtensible Markup Language'),
(175, 53, 'loanguyen9111@gmail.com', 'loannguyen9111@gmail.com'),
(176, 53, 'sad', '13520453@gm.uit.edu.vn');

-- --------------------------------------------------------

--
-- Table structure for table `loaidanhsach`
--

CREATE TABLE `loaidanhsach` (
  `maLoai` int(11) NOT NULL,
  `tenloai` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `ngayTao` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaidanhsach`
--

INSERT INTO `loaidanhsach` (`maLoai`, `tenloai`, `ngayTao`) VALUES
(13, 'sfa', '2016-03-20'),
(16, '', '2016-03-13'),
(24, 'sa', '2016-03-13'),
(25, 'dá', '2016-03-27'),
(27, 'sagdlskaf', '2016-03-13'),
(37, 'sadsad', '2016-03-20'),
(38, 'sadsad', '2016-03-06'),
(41, 'sagf', '2016-04-23'),
(45, 's', '2016-04-10'),
(47, 'sad', '2016-04-17'),
(48, 'loan', '2016-04-08'),
(49, 'sad', '2016-04-22'),
(50, 'ádh', '2016-04-15'),
(51, 'sadskal', '2016-04-16'),
(52, 'áà', '2016-04-02'),
(53, 'sadfaf', '2016-04-16');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `maTaiKhoan` int(11) NOT NULL,
  `tenTaiKhoan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `matKhau` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`maTaiKhoan`, `tenTaiKhoan`, `email`, `matKhau`) VALUES
(1, 'adminm', 'nhasachindigo9111@gmail.com', '**********');

-- --------------------------------------------------------

--
-- Table structure for table `thietlapgui`
--

CREATE TABLE `thietlapgui` (
  `maThietLap` int(11) NOT NULL,
  `emailGui` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `matKhauEmail` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `emailNhanTraLoi` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thietlapgui`
--

INSERT INTO `thietlapgui` (`maThietLap`, `emailGui`, `matKhauEmail`, `emailNhanTraLoi`) VALUES
(1, 'nhasachindigo9111@gmail.com', 'vyirnwatrglkhhce', 'nhasachindigo9111@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `thudientu`
--

CREATE TABLE `thudientu` (
  `maThu` int(11) NOT NULL,
  `tenThu` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `tieuDe` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `noiDung` varchar(2000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thudientu`
--

INSERT INTO `thudientu` (`maThu`, `tenThu`, `tieuDe`, `noiDung`) VALUES
(5, 'sahgfkl', 'sadhak', 'file_Email/5.txt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chiendich`
--
ALTER TABLE `chiendich`
  ADD PRIMARY KEY (`maChienDich`),
  ADD KEY `maThu` (`maThu`),
  ADD KEY `maDanhSachKhachHang` (`maDanhSachKhachHang`);

--
-- Indexes for table `chuki`
--
ALTER TABLE `chuki`
  ADD PRIMARY KEY (`maChuKi`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`maKhachHang`),
  ADD KEY `maLoaiKhachHang` (`maLoaiKhachHang`);

--
-- Indexes for table `loaidanhsach`
--
ALTER TABLE `loaidanhsach`
  ADD PRIMARY KEY (`maLoai`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`maTaiKhoan`);

--
-- Indexes for table `thietlapgui`
--
ALTER TABLE `thietlapgui`
  ADD PRIMARY KEY (`maThietLap`);

--
-- Indexes for table `thudientu`
--
ALTER TABLE `thudientu`
  ADD PRIMARY KEY (`maThu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chiendich`
--
ALTER TABLE `chiendich`
  MODIFY `maChienDich` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `chuki`
--
ALTER TABLE `chuki`
  MODIFY `maChuKi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `maKhachHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;
--
-- AUTO_INCREMENT for table `loaidanhsach`
--
ALTER TABLE `loaidanhsach`
  MODIFY `maLoai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `maTaiKhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `thietlapgui`
--
ALTER TABLE `thietlapgui`
  MODIFY `maThietLap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `thudientu`
--
ALTER TABLE `thudientu`
  MODIFY `maThu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `chiendich`
--
ALTER TABLE `chiendich`
  ADD CONSTRAINT `chiendich_ibfk_1` FOREIGN KEY (`maThu`) REFERENCES `thudientu` (`maThu`),
  ADD CONSTRAINT `chiendich_ibfk_2` FOREIGN KEY (`maDanhSachKhachHang`) REFERENCES `loaidanhsach` (`maLoai`);

--
-- Constraints for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `khachhang_ibfk_1` FOREIGN KEY (`maLoaiKhachHang`) REFERENCES `loaidanhsach` (`maLoai`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
