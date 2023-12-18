-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2023 at 10:40 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `venus`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `description` varchar(200) NOT NULL,
  `brand` varchar(10) NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `description`, `brand`, `price`, `img`) VALUES
(1, 'CEL FQ3066TU 8GB, 512GB, W11, 15.6\", BLACK, WING BAG\n', 'HP', 26500, 'FQ3066TU'),
(2, 'I3-1125G4 quad DY0207TU 11th 8GB, 512GB, W11, MS, TCH, FP 14\" TREND', 'HP', 53000, 'DY0207TU'),
(3, 'I3 FD0006TU 13TH, 8GB, 512GB, W11, 15.6\", SILVER', 'HP', 46250, 'FD0006TU'),
(4, 'I3 FQ5007TU 12th 8GB, 512GB, W11, MS, 15.6\" SILVER ENTRY BAG\r\n', 'HP', 39000, 'FQ5007TU'),
(5, 'I3 FQ5185TU 12th 8GB, 512GB, W11, MS, SL 15.6\"\r\n', 'HP', 37250, 'FQ5185TU'),
(6, 'I3 11th  FR2515TU 8GB, 512GB, W11, MS, SL 15.6\", BAG\r\n', 'HP', 34500, 'FR2515TU'),
(7, 'I5-1240P DQ5007TU 12th 8GB, 512GB, W11, MS, SL 14\" BAG\r\n', 'HP', 56500, 'DQ5007TU'),
(8, 'I5  12th 16GB, 512 SSD, W11, MS, SL 14\", NO BAG\r\n', 'HP', 63000, 'DV2014TU'),
(9, 'Aspire 3 AMD Ryzen 5 7520 U Quad-Core Processor (Windows 11 Home,  8 GB,  512 GB SSD) A315-24P, 39.6 cm (15.6\") FHD Display, 1.78 Kg, Pure Silver\r\n', 'ACER', 31500, 'A315-R5F5'),
(10, 'i3-N305 8GB ,  512GB PCIe NVMe SSD ,  Intel® UHD Graphics W11 MS Office 2021 HS IN 15.6″ FHD)\r\n', 'ACER', 34500, 'A315-3590'),
(11, 'i3 12th , 8GB , 512GB SSD , W11,  MS , 15.6\", SILVER.\r\n', 'ACER', 33000, 'A315-329J'),
(12, 'i5 12th Aspire 5 Gaming, 8 GB, 512 GB SSD, 4 GB Graphics, NVIDIA GeForce RTX 2050 (Windows 11 Home with 39.62 cm (15.6\") FHD Display and 45% NTSC color gamut, Steel Gray, 1.8 KG\r\n', 'ACER', 50500, 'A515-57LE'),
(13, 'i5 12th Aspire 3 , 8 GB,  512 GB SSD, MS Office Home and Student, Intel Iris Xe Graphics)  39.6 cm (15.6 inches)(Windows 11 home FHD display ,  1.7 KG\r\n', 'ACER', 42500, 'A315-52Q3'),
(14, 'i5 11th , 8GB , 512GB SSD ,  W11, 15.6\", SILVER\r\n', 'ACER', 35000, 'AL15-51UN'),
(15, 'i7-12650H Nitro 5 Gaming , 16 GB, 1 TB SSD, NVIDIA GeForce RTX 3070 Ti, 165Hz) QHD (300 nits) 39.6 cm (15.6 inches) Windows 11 Home IPS Display, 2.6 KG\r\n', 'ACER', 94500, 'AN515-79X9'),
(16, '*i3-1115G4  ,  8GB DDR4 ,   512GB* PCIe® 3.0 SSD ,  15.6-inch ,  FHD (1920 x 1080) 16:9 aspect ratio ,  Fingerprint ,  Intel® UHD Graphics   ,  Transparent Silver ,  Chiclet Keyboard   ,  Windows 11 H', 'ASUS', 32550, 'EJ3379WS'),
(17, '*i3-1115G4, 8GB, 256GB PCIe SSD*, TRANSPARENT SILVER,  *15.6\"FHD OLED* , 1Y international warranty + McAfee, Win 11 + Office H&S, Backlit KB, Finger Print, BAG', 'ASUS', 37200, 'L303WS'),
(18, '*i3-1215U ,  8GB DDR4  ,  512GB* PCIe® 3.0 SSD ,  15.6-inch ,  FHD (1920 x 1080) 16:9  ,   Cool Silver ,  Backlit KB ,  Win 11 Home ,  MS Office \r\n', 'ASUS', 36350, 'NJ322WS'),
(19, 'Intel® Core™ i3-N305 ,   8GB DDR5 ,  512GB PCIe® 3.0 SSD ,  14.0-inch ,  FHD (1920 x 1080) 16:9  ,   ,  Mixed Black ,  NumberPad ,    Win 11 Home ,  MS Office ,  \r\n', 'ASUS', 35650, 'NK322WS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
