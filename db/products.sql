-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2023 at 09:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
  `img` varchar(20) NOT NULL,
  `ram` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `description`, `brand`, `price`, `img`, `ram`) VALUES
(1, 'CEL FQ3066TU 8GB, 512GB, W11, 15.6\", BLACK, WING BAG\n', 'HP', 26500, 'FQ3066TU', '8gb'),
(2, 'I3-1125G4 quad DY0207TU 11th 8GB, 512GB, W11, MS, TCH, FP 14\" TREND', 'HP', 53000, 'DY0207TU', '8gb'),
(3, 'I3 FD0006TU 13TH, 8GB, 512GB, W11, 15.6\", SILVER', 'HP', 46250, 'FD0006TU', '8gb'),
(4, 'I3 FQ5007TU 12th 8GB, 512GB, W11, MS, 15.6\" SILVER ENTRY BAG\r\n', 'HP', 39000, 'FQ5007TU', '8gb'),
(5, 'I3 FQ5185TU 12th 8GB, 512GB, W11, MS, SL 15.6\"\r\n', 'HP', 37250, 'FQ5185TU', '8gb'),
(6, 'I3 11th  FR2515TU 8GB, 512GB, W11, MS, SL 15.6\", BAG\r\n', 'HP', 34500, 'FR2515TU', '8gb'),
(7, 'I5-1240P DQ5007TU 12th 8GB, 512GB, W11, MS, SL 14\" BAG\r\n', 'HP', 56500, 'DQ5007TU', '8gb'),
(8, 'I5  12th 16GB, 512 SSD, W11, MS, SL 14\", NO BAG\r\n', 'HP', 63000, 'DV2014TU', '16gb'),
(9, 'Aspire 3 AMD Ryzen 5 7520 U Quad-Core Processor (Windows 11 Home,  8 GB,  512 GB SSD) A315-24P, 39.6 cm (15.6\") FHD Display, 1.78 Kg, Pure Silver\n', 'ACER', 31500, 'A315-R5F5', '8gb'),
(10, 'i3-N305 8GB ,  512GB PCIe NVMe SSD ,  Intel® UHD Graphics W11 MS Office 2021 HS IN 15.6″ FHD)\r\n', 'ACER', 34500, 'A315-3590', '8gb'),
(11, 'i3 12th , 8GB , 512GB SSD , W11,  MS , 15.6\", SILVER.\r\n', 'ACER', 33000, 'A315-329J', '8gb'),
(12, 'i5 12th Aspire 5 Gaming, 8 GB, 512 GB SSD, 4 GB Graphics, NVIDIA GeForce RTX 2050 (Windows 11 Home with 39.62 cm (15.6\") FHD Display and 45% NTSC color gamut, Steel Gray, 1.8 KG\r\n', 'ACER', 50500, 'A515-57LE', '8gb'),
(13, 'i5 12th Aspire 3 , 8 GB,  512 GB SSD, MS Office Home and Student, Intel Iris Xe Graphics)  39.6 cm (15.6 inches)(Windows 11 home FHD display ,  1.7 KG\r\n', 'ACER', 42500, 'A315-52Q3', '8gb'),
(14, 'i5 11th , 8GB , 512GB SSD ,  W11, 15.6\", SILVER\r\n', 'ACER', 35000, 'AL15-51UN', '8gb'),
(15, 'i7-12650H Nitro 5 Gaming , 16 GB, 1 TB SSD, NVIDIA GeForce RTX 3070 Ti, 165Hz) QHD (300 nits) 39.6 cm (15.6 inches) Windows 11 Home IPS Display, 2.6 KG\r\n', 'ACER', 94500, 'AN515-79X9', '16gb'),
(16, '*i3-1115G4  ,  8GB DDR4 ,   512GB* PCIe® 3.0 SSD ,  15.6-inch ,  FHD (1920 x 1080) 16:9 aspect ratio ,  Fingerprint ,  Intel® UHD Graphics   ,  Transparent Silver ,  Chiclet Keyboard   ,  Windows 11 H', 'ASUS', 32550, 'X1500EA-EJ3379WS', '8gb'),
(17, '*i3-1115G4, 8GB, 256GB PCIe SSD*, TRANSPARENT SILVER,  *15.6\"FHD OLED* , 1Y international warranty + McAfee, Win 11 + Office H&S, Backlit KB, Finger Print, BAG', 'ASUS', 37200, 'K513EA-L303WS', '8gb'),
(18, '*i3-1215U ,  8GB DDR4  ,  512GB* PCIe® 3.0 SSD ,  15.6-inch ,  FHD (1920 x 1080) 16:9  ,   Cool Silver ,  Backlit KB ,  Win 11 Home ,  MS Office \r\n', 'ASUS', 36350, 'X1504ZA-NJ322WS', '8gb'),
(19, 'Intel® Core™ i3-N305 ,   8GB DDR5 ,  512GB PCIe® 3.0 SSD ,  14.0-inch ,  FHD (1920 x 1080) 16:9  ,   ,  Mixed Black ,  NumberPad ,    Win 11 Home ,  MS Office ,  \r\n', 'ASUS', 35650, 'E1404GA-NK322WS', '8gb'),
(20, '*i3-1215U / 8GB DDR4  / 512GB PCIe® 3.0 SSD */ 15.6-inch / FHD (1920 x 1080) 16:9  /  Quiet Blue /  Backlit KB / Win 11 Home / MS Office \r\n', 'ASUS', 36550, 'X1504ZA-NJ321WS', '8gb'),
(21, '*Intel® Core™ i3-1220P /8GB DDR4 / 512GB PCIe® 3.0 SSD / 15.6-inch */ FHD (1920 x 1080) 16:9 /Quiet Blue /FingerPrint / Win 11 Home / MS Office \r\n', 'ASUS', 37150, 'X1502ZA-EJ385WS', '8gb'),
(22, '*i3-1315U  /8GB DDR4  / 512GB* PCIe® 4.0 SSD / 15.6-inch / FHD (1920 x 1080) 16:9  / Indie Black /Backlit KB / Win 11 Home / MS Office  \r\n', 'ASUS', 40300, 'K3504VAB-NJ321WS', '8gb'),
(23, '*i3-1315U  /8GB DDR4  / 512GB* PCIe® 4.0 SSD / 15.6-inch / FHD (1920 x 1080) 16:9  / Cool Silver /Backlit KB / Win 11 Home / MS Office \r\n', 'ASUS', 40300, 'K3504VAB-NJ322WS', '8gb'),
(24, '*i3-1315U  / 8GB DDR4  / 512GB PCIe® 4.0 SSD* / 15.6-inch / FHD (1920 x 1080) 16:9  / COOL SILVER   / Backlit KB / Win 11 Home / MS Office /BAG\r\n', 'ASUS', 39550, 'X1504VA-NJ322WS', '8gb'),
(25, '*i3-N305 /8GB DDR5 / 512GB* PCIe® 3.0 SSD / 15.6-inch / FHD (1920 x 1080) 16:9  /Cool Silver /Backlit KB / Win 11 Home / MS Office\r\n', 'ASUS', 35650, 'E1504GA-NJ321WS', '8gb'),
(26, '*i5 1135G7 / 8GB / 512GB SSD* / Transparent Silver / 14.0-inch / FHD / 1Y International Warranty / McAfee / Win 11 / Office H&S 2021 / FingerPrint \r\n', 'ASUS', 39200, 'X415EA-EK522WS', '8gb'),
(27, '*i5 11400H/ RTX3050- 4GB/ 16GB (2 x 8GB)/ 512GB SSD* / 15.6 FHD-144hz/ Backlit KB- 1 zone RGB/ 90Whr/ WIN 11/ Office Home & Student 2021/ McAfee(1 year)/ 2B-GRAP BLACK /BAG\r\n', 'ASUS', 64200, 'FX506HC-HN362WS', '16gb'),
(28, '*i5 11400H/ RTX3050- 4GB/ 8G/ 1T SSD* / 15.6 FHD-144hz/ Backlit KB- 1 zone RGB/ 90Whr/ WIN 11/ McAfee(1 year)/ 2B-GRAPHITE BLACK \r\n', 'ASUS', 62250, 'FX506HC-HN119W', '4gb'),
(29, '*i5-11400H/ RTX2050- 4GB/ 8GB/ 512GB SSD/ 17.3 FHD*-144hz/ Backlit KB- 1 zone RGB/ 48Whr/ WIN 11/ Office H&S 2021/ McAfee(1 year)/ 2B-GRAPHITE BLACK/BAG\r\n', 'ASUS', 54500, 'FX706HF-HX018WS', '8gb'),
(30, '*i5 - 12450H/RTX 3050Ti/16GB/512GB  PCIe SSD*/Cool Silver/15.6\" FHD OLED/1Y international warranty + McAfee/Win 11 + Office H&S/Finger Print/Backlit KB\n', 'ASUS', 74550, 'K6500ZE-L502WS', '16gb'),
(31, '*i5-12500H/ RTX3050- 4GB/ 16GB (2 x 8GB)/ 512GB SSD/ 17.3 FHD-144hz*/ Backlit KB- 1 zone RGB/ 90Whr/ WIN 11/  McAfee(1 year)/ 1A-MECHA GRAY\r\n', 'ASUS', 71650, 'FX707ZC4-HX067W', '16gb'),
(32, 'Intel®Core™ i5-1235U / 16GB (8*2) DDR4 / 512GB PCIe® 4.0 SSD / 15.6-inch / FHD (1920 x 1080) 16:9 / COOL SILVER/  Backlit KB / Win 11 Home / MS Office\r\n', 'ASUS', 55350, 'X1504ZA-NJ542WS', '16gb'),
(33, '*i5-12500H/ RTX3050- 4GB/ 8GB/ 512GB SSD* / 15.6 FHD-144hz/ Backlit KB- 1 zone RGB/ 90Whr/ WIN 11/ Office H&S 2021/ / McAfee(1 year)/ 1A-MECHA GRAY\r\n', 'ASUS', 71100, 'FX507ZC4-HN115WS', '8gb'),
(34, '*i5-1235U / 8GB (4*2) DDR4 / 512GB* PCIe® 3.0 SSD / 15.6-inch / FHD (1920 x 1080) 16:9  /Icelight Silver / Backlit KB / Win 11 Home / MS Office/BAG\r\n', 'ASUS', 46050, 'X1502ZA-EJ531WS', '8gb'),
(35, '*i5-1235U / 8GB (4*2) DDR4 / 512GB* PCIe® 3.0 SSD / 15.6-inch / FHD (1920 x 1080) 16:9  /Quiet Blue /  Backlit KB / Win 11 Home / MS Office/BAG\r\n', 'ASUS', 46050, 'X1502ZA-EJ532WS', '8gb'),
(36, 'I5 DV2153TU 12th 16GB/1TB SSD/W11/MS/SL 14\"', 'HP', 66000, 'DV2153TU', '16gb'),
(37, 'I5 EG3018TU 13th 16GB/1TB/W11/MS/SL 15.6\"', 'HP', 72500, 'EG3018TU', '16gb'),
(38, 'I5  12th 16GB/512GB/W11/MS/TCH/FPR/PEN/SL 14/BAG', 'HP', 72000, 'EK0074TU', '16gb'),
(39, 'I5  12th 8GB/512GB/W11/MS/TCH/BACKLIT KB/SL 14\"/BAG', 'HP', 68500, 'EK0084TU', '8gb'),
(40, 'I5-1335U  EK1010TU 13th 16GB/1TBSSD/W11/MS/TCH 14\"/TREND', 'HP', 77000, 'EK1010TU', '16gb'),
(41, 'I5-12450H  FA0165TX 12th 8GB/512GB/4GB 1650/W11/MS/BLUE 15.6\"/NO BAG', 'HP', 57000, 'FA0165TX', '8gb'),
(42, 'I5-12450H  12th 16GB/512GB/4GB RTX 3050/W11/MS/BLUE 15.6 NO BAG', 'HP', 68500, 'FA0555TX', '16gb'),
(43, 'I5 FA1124TX 12th 8GB/512GB/4GB-2050/W11/BL/15.6', 'HP', 57000, 'FA1124TX', '8gb'),
(44, 'I5 FA1145TX  12th 16GB/1TB/4GB/2050 RTX/W11/MS/BLU 15.6\"', 'HP', 65000, 'FA1145TX', '16gb'),
(45, 'I5 FQ2510TU 11th 16GB/512GB/W11/MS/SL 15.6\"', 'HP', 47000, 'FQ2510TU', '16gb'),
(46, 'I5-1235U FQ5112TU 12th 16GB/512GB/W11/MS/SIL 15.6\"  ENTRY BAG', 'HP', 56000, 'FQ5112TU', '16gb'),
(47, 'I5 FQ5202TU 12th 8GB/512GB/W11/MS/15.6\"SL', 'HP', 50000, 'FQ5202TU', '8gb'),
(48, 'I5  11th 8GB/512GB/W11/MS/SL 15.6\" BAG', 'HP', 45500, 'FR4000TU', '8gb'),
(49, 'I7-1255U DV2015TU 12th 16GB/1TB SSD/W11/MS/SL 14\" NO BAG', 'HP', 80000, 'DV2015TU', '16gb'),
(50, 'I7-1360P EG3036TU 13th 16GB/1TB SSD/W11/MS/SL 15.6\"', 'HP', 85000, 'EG3036TU', '16gb');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
