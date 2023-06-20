-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2023 at 06:33 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duanmau`
--

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `iddm` int(10) NOT NULL,
  `name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`iddm`, `name`) VALUES
(43, 'iphone\r\n'),
(44, 'samsung'),
(45, 'vivo'),
(46, 'remi'),
(47, 'oppo');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `idsp` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gia` decimal(10,0) NOT NULL DEFAULT 0,
  `anh` varchar(200) NOT NULL,
  `mota` text NOT NULL,
  `luotxem` int(10) NOT NULL DEFAULT 0,
  `iddm` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`idsp`, `name`, `gia`, `anh`, `mota`, `luotxem`, `iddm`) VALUES
(14, 'laptop asus', '290000000', '20896_laptop_asus_vivobook_a515ea_bq1530w.jpg', '', 0, 44),
(16, 'laptop asus a15', '290000000', '20896_laptop_asus_vivobook_a515ea_bq1530w.jpg', 'bfcghfhasjkdbas', 0, 43),
(21, 'sdasdasdad', '1554456454', '43387-84321-000-lead-iPhone-14-xl.jpg', 'dasdasdasdasgfasf', 0, 43),
(22, 'asdasdasdas', '900000000', '22142_laptop_gaming_asus_tuf_dash_f15_fx517zm_hn480w.jpg', 'asdasdasdasfasfasd', 0, 44),
(23, 'asdasghgfdgfgf', '1230000', '20896_laptop_asus_vivobook_a515ea_bq1530w.jpg', 'dsfsdfdaasfs', 45, 44),
(24, 'adhgshdghasghdgafsd', '852465610', '43387-84321-000-lead-iPhone-14-xl.jpg', 'annbfhshdkgskjd', 40, 44),
(25, 'laptop asus', '900000000', '22142_laptop_gaming_asus_tuf_dash_f15_fx517zm_hn480w.jpg', 'sajgdaksgdjashjkdhasd', 200, 44),
(26, 'zmehs', '1200', '20896_laptop_asus_vivobook_a515ea_bq1530w.jpg', 'asmndabsmbasdhkashd', 100, 44),
(27, 'asdjskdgagsdfhasfd', '15554', '43387-84321-000-lead-iPhone-14-xl.jpg', 'asbdkasjdghasdasd', 10, 44);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`iddm`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idsp`),
  ADD KEY `lk_sanpham_danhmuc` (`iddm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `iddm` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idsp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`iddm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
