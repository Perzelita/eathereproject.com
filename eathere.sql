-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3336
-- Generation Time: Oct 18, 2019 at 06:39 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eathere`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id_address` int(11) NOT NULL,
  `member_id_member` int(11) NOT NULL,
  `no_address` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `amphoe` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `zipcode` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id_address`, `member_id_member`, `no_address`, `district`, `amphoe`, `province`, `zipcode`, `location`) VALUES
(22, 22, 'p', 'นนทรี', 'กบินทร์บุรี', 'ปราจีนบุรี', '25110', NULL),
(36, 36, 'กรุณากรอกที่อยู่ ชื่อ เลขที่ หมู่บ้าน ตรอก ซอย', 'ศิลา', 'เมืองขอนแก่น', 'ขอนแก่น', '40000', 'จุดพิกัด'),
(37, 37, 'กรุณากรอกที่อยู่ ชื่อ เลขที่ หมู่บ้าน ตรอก ซอย', 'บางเขน', 'เมืองนนทบุรี', 'นนทบุรี', '11000', 'จุดพิกัด');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(45) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `last_login` varchar(45) DEFAULT NULL,
  `status_member` enum('cus','restur','deli','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `user`, `telephone`, `password`, `email`, `created`, `updated`, `last_login`, `status_member`) VALUES
(22, 'bbbbb', '0000000000', '$2y$10$A2u.ez3wAwdODAgIVh0I2OC00sFYYZO/IOtU4oU1maVN0F3oqSsS6', 'aa@aa.com', '2019-10-09 19:55:23', '2019-10-09 19:55:23', '2019-10-09 19:55:23', 'cus'),
(36, 'Perzelita', '0807464246', '$2y$10$Z/Z63a0XzG50nEo364l4yuB9/pJe3C/ypTqpCDdIP/P29Hv4XB1J2', 'margretha.neung@gmail.com', '2019-10-14 00:05:25', '2019-10-14 00:05:25', '2019-10-14 00:05:25', 'cus'),
(37, 'bbbb', '1111111111', '$2y$10$apPXKuZlQDp9Cq9B8JKnJuRZpPZaqn5hxgdPkt.skQVfTOijmEC7G', 'margretha.neung@gmail.com', '2019-10-14 00:08:58', '2019-10-14 00:08:58', '2019-10-14 00:08:58', 'cus');

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `idwallet` int(11) NOT NULL,
  `balance` int(11) DEFAULT NULL,
  `cashback` int(11) DEFAULT NULL,
  `withdraw` varchar(45) DEFAULT NULL,
  `deposit` varchar(45) DEFAULT NULL,
  `change` varchar(45) DEFAULT NULL,
  `member_id_member` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id_address`,`member_id_member`),
  ADD KEY `fk_address_member_idx` (`member_id_member`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`idwallet`,`member_id_member`),
  ADD KEY `fk_wallet_member1_idx` (`member_id_member`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id_address` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `fk_address_member` FOREIGN KEY (`member_id_member`) REFERENCES `member` (`id_member`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wallet`
--
ALTER TABLE `wallet`
  ADD CONSTRAINT `fk_wallet_member1` FOREIGN KEY (`member_id_member`) REFERENCES `member` (`id_member`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
