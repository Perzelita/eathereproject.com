-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 01, 2021 at 02:18 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eat_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_temp`
--

CREATE TABLE `cart_temp` (
  `cart_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `partner_id` varchar(255) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `unit` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `total` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart_temp`
--

INSERT INTO `cart_temp` (`cart_id`, `member_id`, `partner_id`, `menu_id`, `menu_name`, `unit`, `price`, `total`) VALUES
(1, 50, '41 ', 113, 'ICE Chocolate pie เต็มถาด', 7, 30, 210),
(112, 54, '53 ', 150, 'Sangis Verginis 1lte', 1, 200, 200);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `history_member_id` int(10) NOT NULL,
  `member_id` int(10) NOT NULL,
  `date` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `deposit` int(10) NOT NULL,
  `change` int(10) NOT NULL,
  `balance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`history_member_id`, `member_id`, `date`, `description`, `deposit`, `change`, `balance`) VALUES
(1, 2, '27-04-2021 17:27:24', 'เติมเงิน', 200, 0, 10340),
(2, 54, '30-04-2021 15:32:35', 'เติมเงิน', 200, 0, 200),
(3, 54, '30-04-2021 15:32:52', 'เติมเงิน', 200, 0, 400),
(4, 54, '30-04-2021 15:33:01', 'เติมเงิน', 200, 0, 600),
(5, 54, '30-04-2021 15:33:07', 'เติมเงิน', 200, 0, 800),
(6, 54, '30-04-2021 15:33:10', 'เติมเงิน', 20, 0, 820),
(7, 53, '30-04-2021 15:41:01', 'ถอนเงิน', 0, -5, 160);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `status_member` enum('cus','partner','shipper','admin') NOT NULL,
  `user` varchar(20) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(45) NOT NULL,
  `no_address` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `amphoe` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `zipcode` varchar(255) DEFAULT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `citizen_id` varchar(13) NOT NULL,
  `birthday` varchar(10) NOT NULL,
  `partner_name` varchar(30) NOT NULL,
  `food_type` varchar(25) NOT NULL,
  `open_order` varchar(5) NOT NULL,
  `close_order` varchar(5) NOT NULL,
  `bio` varchar(100) NOT NULL,
  `pic_profile` varchar(255) NOT NULL,
  `pic_ctizen_id` varchar(255) NOT NULL,
  `pic_cover` varchar(255) NOT NULL,
  `pic_acc` varchar(255) NOT NULL,
  `pic_verify` varchar(255) NOT NULL,
  `venchle_id` varchar(100) NOT NULL,
  `venchle_type` varchar(40) NOT NULL,
  `venchle_brand` varchar(40) NOT NULL,
  `venchle_series` varchar(40) NOT NULL,
  `venchle_propoties` varchar(40) NOT NULL,
  `pic_booking_driver` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `balance` int(11) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `status_member`, `user`, `telephone`, `password`, `email`, `no_address`, `district`, `amphoe`, `province`, `zipcode`, `latitude`, `longitude`, `name`, `surname`, `citizen_id`, `birthday`, `partner_name`, `food_type`, `open_order`, `close_order`, `bio`, `pic_profile`, `pic_ctizen_id`, `pic_cover`, `pic_acc`, `pic_verify`, `venchle_id`, `venchle_type`, `venchle_brand`, `venchle_series`, `venchle_propoties`, `pic_booking_driver`, `created`, `updated`, `balance`, `last_login`) VALUES
(1, 'cus', 'bbbbb', '00', '$2y$10$rO4xE0niGVtRuAW2C9YhnuCRP/d07ldhfQJLd8My5/SbraVlOsW3y', 'bb@bb.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-01-23 09:23:51', '2020-01-23 09:23:51', 2000, '2020-01-23 09:23:51'),
(2, 'cus', 'Chaowarin', '0807464246', '$2y$10$ZspF./.q5sIY3bjJJFGifuXWYRLyIq4gUU8DhIgQ8DEz1C78y.Xxm', 'Neung_secket@windowslive.com', '9 /8', 'เพ็ญ', 'เพ็ญ', 'อุดรธานี', '41150', '16.480112', '102.81569700000001', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-03-24 08:44:18', '2020-03-24 08:44:18', 3175, '2020-03-24 08:44:18'),
(41, 'partner', 'Shewonle3474', '0870176619', '$2y$10$bQ9bf8qtHfEPqAvcRBSxg.o9gSUzs/9FitwmJIqzflaaWfnKB1YuK', 'margretha.neung@gmail.com', '99', 'ท่าพระ', 'เมืองขอนแก่น', 'ขอนแก่น', '40260', '16.4801783', '102.8157854', 'Amerate', 'Shewonle', '1111111111111', '2020-11-26', 'Shewonle DESS  ', 'อาหารหวาน', '13.00', '16.00', '', 'fast-food.png', 'S__11599975.jpg', 'french.jpg', 'Untitled-1-removebg-preview.png', 'S__11599975.jpg', '', '', '', '', '', '', '2020-11-16 18:01:24', '2021-04-29 18:44:00', 10459, '2020-11-16 19:35:00'),
(43, 'admin', 'Amonda', '+668074642', '$2y$10$52mbz4WqGNRfCVgWc1k63OUoPybr3xoLkltwolz.o3jYIYSUUtcZO', 'margretha.neung@gmail.com', '9/8 Tambon Phen , Ampur Phen', 'วัง', 'ท่าชนะ', 'สุราษฎร์ธานี', '84170', '17.684229', '102.8974165', 'Amonda', 'Gergen', '0123456789123', '2020-09-30', 'Amonda Restaurannt', 'อาหารหวาน', '14', '20', '-', '1.jpg', '2.JPG', '3.jpg', '4.jpg', '5.jfif', '', '', '', '', '', '', '2020-11-16 19:40:50', '2020-11-16 19:40:00', 0, '2020-11-16 19:40:00'),
(44, 'admin', 'admin', 'admin', '$2y$10$yq2DYjjuDXuftRKlXh.v5ORjWLmWT0ndVgsICDiWdxRXw2TGvSMMm', 'ad@ad.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-11-23 20:26:00', '2020-11-23 20:26:00', 0, '2020-11-23 20:26:00'),
(45, 'partner', 'Wiratchaya', '0661591656', '$2y$10$QWlWkp7Nd0X2ZQP65TeNe.jkD7Hfp0.QIPFQ8KGgHIQpRiUzR.wz.', 'wiratchaya0406@gmail.com', '237/5', 'ในเมือง', 'เมืองขอนแก่น', 'ขอนแก่น', '40000', '16.4252417', ' 102.8391374', 'วิรัชญา', 'วิเศษกุลพรหม', '1679900366282', '1996-06-04', 'Bread you', 'อาหารหวาน', '09', '18', '', '98AD6FF2-27DF-4929-ABC7-8970E8C6A137.jpeg', '9F468265-49BC-46F1-9063-44FC53D4A2D7.jpeg', '90A426F0-645A-413D-98AC-C214E2F1A16B.png', '432AC785-DF96-42B4-AC2D-7605C7B83611.jpeg', 'B7A0FA51-B848-40E9-BF57-6C812D7B4018.jpeg', '', '', '', '', '', '', '2020-12-01 14:35:00', '2020-12-01 14:35:00', 0, '2020-12-01 14:35:00'),
(46, 'partner', 'Map Cafe’ 2', '0823011640', '$2y$10$V4RNmW7rCDsHsoOkzqd3tO/HbjaepTdKvaSbJXLxpYs0REbiIuyj2', 'mapcafekk@gmail.com', '150-152', 'ในเมือง', 'เมืองขอนแก่น', 'ขอนแก่น', '40000', '16.430879799865135', '102.83180495679849', 'กนกวรรณ', 'ศุภฤกษ์มงคล', '1409900542236', '1989-04-26', 'แมพคาเฟ่ต์', 'อาหารหวาน', '9', '17', '', '6C872EE3-32CF-41A2-93B1-282000B67BB3.jpeg', '0251CEDA-74DE-4C0C-9DC2-7C421207CEE2.jpeg', '9141B052-5CB7-4C42-98D4-184921FA5B49.jpeg', 'FFFE87AF-FC9B-4634-A774-D8E19145EA25.jpeg', 'image.jpg', '', '', '', '', '', '', '2020-12-01 14:49:00', '2020-12-01 14:50:00', 0, '2020-12-01 14:50:00'),
(47, 'partner', 'นนทชาติ', '0657254646', '$2y$10$NaX1UscFwpNemZM.y4zEE.fWNUEYv7qkBDlhGQ291IzSXiX/.Qwb6', 'nontachat.s@gmail.com', '209/1 หมู่ 12', 'ศิลา', 'เมืองขอนแก่น', 'ขอนแก่น', '40000', '16.480404562609824', '102.81349090159108', 'นนทชาติ', 'แสนบุญศรี', '1419900605181', '1996-07-19', 'สีนานวล คาเฟ่', 'อาหารคาว และ อาหารหวาน', '10.00', '21.30', 'เป็นร้านอาหารไทยในมหาวิทยาลัยขอนแก่น ผู้คนรู้จักพอสมควร ต่อมาไม่นานขายดี ได้ขยายสาขาไปฝั่งกังสดาลด้ว', '86203C33-452C-4E5B-9B17-2A105829C442.jpeg', 'CC39CB6B-C07A-41AF-B160-511FEE3952D3.jpeg', '98E28634-028A-4CA5-BEE1-89F133DE8095.jpeg', '4F5D3EF0-AEC5-4673-9372-0EB2CB91D2BC.jpeg', 'C6EB231B-B662-4379-90FA-F31D03D3FA73.jpeg', '', '', '', '', '', '', '2020-12-01 17:02:00', '2020-12-01 17:03:00', 0, '2020-12-01 17:03:00'),
(48, 'cus', 'rapassit', '0964199989', '$2y$10$B5tVMh1e.ykUuv41FZuVheU8A6T3ZyS.sPudqkGhiYANFGL5NCmtq', 'rapassit@kku.ac.th', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-12-09 07:34:34', '2020-12-09 07:34:34', 0, '2020-12-09 07:34:34'),
(49, 'cus', 'Nooo', '0801234567', '$2y$10$tgttwJn6aNq6QwH2iJOC4.CQ3oZicj/cfNQndFFAixF1rI581VYTa', 'a@aa.com', '98/3', 'ศิลา', 'เมืองขอนแก่น', 'ขอนแก่น', '40000', '16.480112', '102.81569700000001', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-12-14 14:07:34', '2020-12-14 14:07:34', 910, '2020-12-14 14:07:34'),
(50, 'cus', 'db', '0946572035', '$2y$10$r1/zLJZZSfxzfW4ukEu9eO8x5GDNpBceJvrHtguZ8hVxPTR0QpeEG', 'jiyataw287@nmailv.com', '9999', 'ศิลา', 'เมืองขอนแก่น', 'ขอนแก่น', '40000', '16.479259', '102.818115', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-12-17 16:39:11', '2020-12-17 16:39:11', 90, '2020-12-17 16:39:11'),
(51, 'partner', 'Kuls', '0892367890', '$2y$10$5a1KjW7Ttjs6xKRtngij5e9H/Zbv1nZce3F9qtgfKKa9HnseyGD46', 'margretha.neung@gmail.com', '9/8', 'เพ็ญ', 'เพ็ญ', 'อุดรธานี', '41150', '17.6876', '102.6627', 'Kulnanita', 'Kuls', '1433422953263', '1996-05-21', 'กุล คาเฟ่', 'อาหารหวาน', '12.00', '13.00', '---', '140657718_4870829226321781_4745835071224901888_n.jpg', '140657718_4870829226321781_4745835071224901888_n.jpg', '140657718_4870829226321781_4745835071224901888_n.jpg', '140657718_4870829226321781_4745835071224901888_n.jpg', '140657718_4870829226321781_4745835071224', '', '', '', '', '', '', '2021-04-26 20:08:00', '2021-04-26 20:13:00', 0, '2021-04-26 20:13:00'),
(52, 'shipper', 'Milked', '0812312312', '$2y$10$WdbPWkk8wRV11BO9QvktR.tr9.CNmyI6krOnvONDksa4Pb2va.Zee', 'Milky_g@gmail.com', 'Milky Resident 305/12', 'ศิลา', 'เมืองขอนแก่น', 'ขอนแก่น', '40000', '17.6876', '102.6627', 'Milky', 'Raiders', '1212312121121', '1999-02-05', '', '', '', '', '', '140657718_4870829226321781_4745835071224901888_n.jpg', '140657718_4870829226321781_4745835071224901888_n.jpg', '', '140657718_4870829226321781_4745835071224901888_n.jpg', '140657718_4870829226321781_4745835071224', 'จจ 8613', 'รถมอเตอร์ไซต์ส่วนตัว', 'Yamaha', 'Filano', 'สีชมพูพาสเทล                            ', '140657718_4870829226321781_4745835071224901888_n.jpg', '2021-04-27 17:10:38', '2021-04-27 17:12:00', 39, '2021-04-27 17:12:00'),
(53, 'partner', 'Lady Tall', '0836781822', '$2y$10$soqE0m4tt.p21oprFsFFPOm01XvERWUgY.ZoG8Cvhp/Ab31Z1qU2G', 'Acina@residentvillage.com', 'Temitescu Casle', 'เพ็ญ', 'เพ็ญ', 'อุดรธานี', '41150', '17.2062', '102.4366', 'Acina', 'Demitescu', '1423200132624', '1993-07-20', 'ไวน์เลิศรสของ Demitescu', 'เครื่องดื่ม', '17.00', '24.00', 'ร้านขายไวน์ที่มีรสเลิศ', '1.webp', '2.jpg', '3.webp', '4.1.jpg', '1.webp', '', '', '', '', '', '', '2021-04-30 15:20:00', '2021-04-30 15:21:00', 160, '2021-04-30 15:21:00'),
(54, 'cus', 'Ethan Winter', '0812356142', '$2y$10$F99Ix.zy7FdX4/touKkfUu7KyX0rx98MnAzyhATuT6stbLr5SAoaa', 'Ethan@residentvillage.com', 'Village', 'ศิลา', 'เมืองขอนแก่น', 'ขอนแก่น', '40000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-04-30 15:25:19', '2021-04-30 15:25:19', 820, '2021-04-30 15:25:19');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `partner_id_fk` int(11) NOT NULL,
  `avalable` enum('0','1') DEFAULT NULL,
  `menu_name` varchar(255) DEFAULT NULL,
  `unit` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `partner_id_fk`, `avalable`, `menu_name`, `unit`, `price`) VALUES
(1, 41, '1', 'ผัดยุงลาย', 1, 25),
(112, 41, '1', 'Hockaido milk Bread', 1, 60),
(113, 41, '1', 'ICE Chocolate pie เต็มถาด', 1, 30),
(115, 45, '1', 'เอแคร์', 1, 80),
(116, 45, '1', 'ขนมปังนมสดฮอกไกโด', 1, 25),
(117, 45, '1', ' เต้าฮวยนมสดมะพร้าวอ่อน', 1, 35),
(118, 45, '1', 'เปี๊ยะเผือกไข่เค็ม', 1, 45),
(119, 45, '1', 'เปี๊ยะไข่เค็มลาวา', 1, 120),
(122, 46, '0', 'เอสเพEspEspress ', 1, 45),
(123, 46, '1', 'Iced Latte', 1, 65),
(124, 46, '0', 'Hot Latte', 1, 55),
(125, 46, '1', 'Iced Americano', 1, 50),
(126, 46, '1', 'Hot Americano', 1, 50),
(128, 47, '1', 'ปลากระพงทอดน้ำปลา', 1, 369),
(129, 47, '1', 'ห่อหมกมะพร้าว', 1, 259),
(130, 47, '1', 'กุ้งทอดซอสมะขาม', 1, 289),
(131, 47, '1', 'ปลาหมึกผัดไข่เค็ม', 1, 199),
(132, 47, '1', 'ขาหมูทอดทอง', 1, 359),
(133, 47, '1', 'ต้มยำกุ้ง', 1, 199),
(134, 47, '1', 'แกงคั่วหอยขม', 1, 189),
(136, 47, '1', 'ทอดมันกุ้ง', 1, 189),
(137, 47, '1', 'ทอดมันปลากราย', 1, 179),
(138, 47, '1', 'น้ำพริกลงเรือ', 1, 289),
(139, 47, '1', 'ปลาช่อนเผาจิ้มแจ่ว', 1, 329),
(140, 47, '1', 'ปูนิ่มคั่วพริกเกลือ', 1, 259),
(141, 47, '1', 'ตำปูปลาร้า', 1, 80),
(142, 47, '1', 'ข้าวโถ', 1, 80),
(143, 47, '1', 'บัวลอย', 1, 35),
(144, 47, '1', 'สาคู', 1, 35),
(145, 47, '1', 'ลูกตาล', 1, 35),
(146, 47, '1', 'สละลอยแก้ว', 1, 35),
(147, 47, '1', 'สละลอยแก้ว', 1, 35),
(148, 51, NULL, NULL, NULL, NULL),
(149, 53, NULL, NULL, NULL, NULL),
(150, 53, '1', 'Sangis Verginis 1lte', 1, 200),
(151, 53, '0', 'Sangis Miden', 1, 600);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `partner_id` int(11) NOT NULL,
  `shipper_id` int(11) DEFAULT NULL,
  `member_id` int(11) NOT NULL,
  `time_order` int(11) NOT NULL,
  `cus_name` varchar(255) NOT NULL,
  `menu_id_fk` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `early` int(11) NOT NULL,
  `deliver_early` int(11) NOT NULL,
  `extra_early` int(11) NOT NULL,
  `time_estimate` int(11) DEFAULT NULL,
  `status_order` enum('1','2','3','4','5','6') DEFAULT NULL,
  `note_to_shipper` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `time`, `partner_id`, `shipper_id`, `member_id`, `time_order`, `cus_name`, `menu_id_fk`, `total`, `early`, `deliver_early`, `extra_early`, `time_estimate`, `status_order`, `note_to_shipper`) VALUES
(54, '2021-04-29 11:39:03', 41, NULL, 2, 0, 'Chaowarin', 0, 120, 102, 18, 114, 19, '1', ''),
(55, '2021-04-29 11:57:16', 41, 52, 2, 0, 'Chaowarin', 0, 60, 51, 9, 57, 19, '5', ''),
(56, '2021-04-30 04:28:30', 41, NULL, 2, 0, 'Chaowarin', 0, 30, 26, 5, 29, 11, '1', ''),
(57, '2021-04-30 04:29:21', 41, NULL, 2, 0, 'Chaowarin', 0, 60, 51, 9, 57, 11, '1', ''),
(58, '2021-04-30 08:33:50', 53, NULL, 2, 0, 'Chaowarin', 0, 200, 170, 30, 190, 16, '1', ''),
(59, '2021-04-30 08:39:51', 53, 52, 2, 0, 'Chaowarin', 0, 200, 170, 30, 190, 16, '5', '');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_details_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `unit` int(11) DEFAULT NULL,
  `price_total` int(11) DEFAULT NULL,
  `totaly` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_details_id`, `order_id`, `menu_id`, `menu_name`, `unit`, `price_total`, `totaly`) VALUES
(49, 49, 113, 'ICE Chocolate pie เต็มถาด', 3, 30, 90),
(50, 50, 112, 'Hockaido milk Bread', 2, 60, 120),
(51, 51, 112, 'Hockaido milk Bread', 2, 60, 120),
(52, 52, 112, 'Hockaido milk Bread', 2, 60, 120),
(53, 53, 112, 'Hockaido milk Bread', 2, 60, 120),
(54, 54, 112, 'Hockaido milk Bread', 2, 60, 120),
(55, 55, 113, 'ICE Chocolate pie เต็มถาด', 2, 30, 60),
(56, 56, 113, 'ICE Chocolate pie เต็มถาด', 1, 30, 30),
(57, 57, 113, 'ICE Chocolate pie เต็มถาด', 2, 30, 60),
(58, 58, 150, 'Sangis Verginis 1lte', 1, 200, 200),
(59, 59, 150, 'Sangis Verginis 1lte', 1, 200, 200);

-- --------------------------------------------------------

--
-- Table structure for table `partner_avalable`
--

CREATE TABLE `partner_avalable` (
  `partner_avalable_id` int(11) NOT NULL,
  `partner_id_fk` int(11) NOT NULL,
  `status` enum('open','close') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `partner_avalable`
--

INSERT INTO `partner_avalable` (`partner_avalable_id`, `partner_id_fk`, `status`) VALUES
(25, 41, 'open'),
(27, 43, 'open'),
(28, 45, 'open'),
(29, 46, 'open'),
(30, 47, 'open'),
(31, 51, 'open'),
(32, 53, 'close');

-- --------------------------------------------------------

--
-- Table structure for table `request_deposit`
--

CREATE TABLE `request_deposit` (
  `request_deposit_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `balance_least` int(11) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `status` enum('1','2','3') DEFAULT NULL,
  `namebank` varchar(30) NOT NULL,
  `evidence_tran` varchar(100) DEFAULT NULL,
  `date` date NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `request_deposit`
--

INSERT INTO `request_deposit` (`request_deposit_id`, `member_id`, `telephone`, `balance_least`, `amount`, `status`, `namebank`, `evidence_tran`, `date`, `time`) VALUES
(1, 2, '0807464246', 10200, 200, '2', 'ธนคารกรุงไทย', '140657718_4870829226321781_4745835071224901888_n.jpg', '2021-04-27', '17:26'),
(2, 2, '0807464246', 3575, 20, '1', 'ธนคารกสิกร', 'IMG_1215.JPG', '2021-04-30', '13:27'),
(3, 54, '0812356142', 0, 20, '2', 'ธนคารกสิกร', 'IMG_1215.JPG', '2021-04-30', '22:22'),
(4, 54, '0812356142', 0, 200, '2', 'ธนคารกสิกร', 'IMG_1215.JPG', '2021-03-03', '11:11');

-- --------------------------------------------------------

--
-- Table structure for table `request_kyc`
--

CREATE TABLE `request_kyc` (
  `request_kyc_id` int(11) NOT NULL,
  `status_verify_id` int(11) DEFAULT NULL,
  `type_kyc` enum('partner','shipper') DEFAULT NULL,
  `user` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `citizen_id` varchar(13) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telephone` varchar(10) DEFAULT NULL,
  `birthday` varchar(10) DEFAULT NULL,
  `no_address1` varchar(255) DEFAULT NULL,
  `no_address2` varchar(50) NOT NULL,
  `district` varchar(255) DEFAULT NULL,
  `amphoe` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `zipcode` varchar(255) DEFAULT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `partner_name` varchar(30) NOT NULL,
  `food_type` varchar(30) NOT NULL,
  `open_order` varchar(5) NOT NULL,
  `close_order` varchar(5) NOT NULL,
  `bio` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `pic_profile` varchar(100) NOT NULL,
  `pic_ctizen_id` varchar(100) NOT NULL,
  `pic_cover` varchar(40) NOT NULL DEFAULT 'NULL',
  `pic_acc` varchar(100) NOT NULL,
  `pic_verify` varchar(40) DEFAULT NULL,
  `venchle_id` varchar(100) NOT NULL,
  `venchle_type` varchar(40) NOT NULL,
  `venchle_brand` varchar(40) NOT NULL,
  `venchle_series` varchar(40) NOT NULL,
  `venchle_propoties` varchar(40) NOT NULL,
  `pic_booking_driver` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `request_kyc`
--

INSERT INTO `request_kyc` (`request_kyc_id`, `status_verify_id`, `type_kyc`, `user`, `name`, `surname`, `citizen_id`, `email`, `telephone`, `birthday`, `no_address1`, `no_address2`, `district`, `amphoe`, `province`, `zipcode`, `latitude`, `longitude`, `partner_name`, `food_type`, `open_order`, `close_order`, `bio`, `timestamp`, `pic_profile`, `pic_ctizen_id`, `pic_cover`, `pic_acc`, `pic_verify`, `venchle_id`, `venchle_type`, `venchle_brand`, `venchle_series`, `venchle_propoties`, `pic_booking_driver`) VALUES
(1, 0, 'partner', 'Michel', 'Seena', 'Michel', '', 'aaa@aaa.com', '', '2020-12-08', '9/8 Tambon Phen , Ampur Phen', '-', 'ศิลา', 'เมืองขอนแก่น', 'ขอนแก่น', '40000', '', '', 'Michel ber', 'อาหารหวาน', '12.00', '18.00', '------', '2020-12-14 07:18:00', '5.jfif', '2.JPG', '3.jpg', '2.JPG', '1.jpg', '', '', '', '', '', ''),
(18, 1, 'partner', 'Amonda', 'Amonda', 'Gergen', '0123456789123', 'margretha.neung@gmail.com', '+668074642', '2020-09-30', '9/8 Tambon Phen , Ampur Phen', '-', 'วัง', 'ท่าชนะ', 'สุราษฎร์ธานี', '84170', '17.684229', '102.8974165', 'Amonda Restaurannt', 'อาหารหวาน', '14', '20', '-', '2020-11-16 12:40:56', '1.jpg', '2.JPG', '3.jpg', '4.jpg', '5.jfif', '', '', '', '', '', ''),
(19, 1, 'shipper', 'asdasda', 'kadfe', 'นามสกุasdล', '0123456789012', 'margretha.neung@gmail.com', '0123456789', '2020-10-18', '9/8 Tambon Phen , Ampur Phen', '-', 'ศรีกะอาง', 'บ้านนา', 'นครนายก', '26110', '17.684231999999998', '102.89743039999999', '', '', '', '', '', '2020-10-23 15:18:49', '1565941463_คอนทัวร์เฟสโซ! ใช้อย่างไร - FACE SO!.jpg', '2.JPG', 'NULL', '4.jpg', '5.png', '10313', 'รถมอเตอร์ไซต์ส่วนตัว', '-', '-', '                                        ', '3.jpg'),
(20, 0, 'partner', '-', 'หมีหมู', '-', '-', 'a@a.com', '-', '2020-10-07', '-', '-', '-', '-', '-', '-', '17.6844175', '102.8974868', '-', 'อาหารคาว', '-', '-', '-', '2020-10-25 14:03:00', '2.JPG', '4.jpg', '1565941463_คอนทัวร์เฟสโซ! ใช้อย่างไร - F', '3.jpg', '5.png', '', '', '', '', '', ''),
(21, 2, 'partner', '', '-', '-', '', 'a@a', '', '', '', '', '', '', '', '', '', '', '', 'อาหารคาว', '', '', '', '2021-04-19 15:59:51', '', '', '', '', '', '', '', '', '', '', ''),
(22, 1, 'shipper', 'ONI', 'MEMEMMEM', 'ONIKA', '0846877968236', 'margretha.neung@gmail.com', '+668074642', '2020-10-26', '9/8 Tambon Phen , Ampur Phen', '-', 'บ้านกง', 'หนองเรือ', 'ขอนแก่น', '40240', '17.6844143', '102.8974834', '', '', '', '', '', '2020-10-26 12:50:42', '5.png', '1565941463_คอนทัวร์เฟสโซ! ใช้อย่างไร - FACE SO!.jpg', 'NULL', '4.jpg', '5.png', 'AW 5758', 'รถมอเตอร์ไซต์ส่วนตัว', 'Yamaha', 'fino', 'สีขาว                                   ', '2.JPG'),
(23, 1, 'partner', 'Shewonle3474', 'Amerate', 'Shewonle', '1111111111111', 'margretha.neung@gmail.com', '0870176619', '2020-11-26', '99', '4', 'ท่าพระ', 'เมืองขอนแก่น', 'ขอนแก่น', '40260', '16.4801783', '102.8157854', 'Shewonle Dessert', 'อาหารหวาน', '11', '16', '-', '2020-11-16 12:35:17', 'fast-food.png', 'S__11599975.jpg', 'gray-bridge-and-trees-814499.jpg', 'Untitled-1-removebg-preview.png', 'S__11599975.jpg', '', '', '', '', '', ''),
(24, 1, 'partner', 'Wiratchaya', 'วิรัชญา', 'วิเศษกุลพรหม', '1679900366282', 'wiratchaya0406@gmail.com', '0661591656', '1996-06-04', '237/5', 'รอบเมือง', 'ในเมือง', 'เมืองขอนแก่น', 'ขอนแก่น', '40000', '16.4252417', ' 102.8391374', 'Bread you', 'อาหารหวาน', '09', '18', '', '2020-12-01 07:35:33', '98AD6FF2-27DF-4929-ABC7-8970E8C6A137.jpeg', '9F468265-49BC-46F1-9063-44FC53D4A2D7.jpeg', '90A426F0-645A-413D-98AC-C214E2F1A16B.png', '432AC785-DF96-42B4-AC2D-7605C7B83611.jpeg', 'B7A0FA51-B848-40E9-BF57-6C812D7B4018.jpe', '', '', '', '', '', ''),
(25, 1, 'partner', 'Map Cafe’ 2', 'กนกวรรณ', 'ศุภฤกษ์มงคล', '1409900542236', 'mapcafekk@gmail.com', '0823011640', '1989-04-26', '150-152', 'ศรีจันทร์', 'ในเมือง', 'เมืองขอนแก่น', 'ขอนแก่น', '40000', '16.430879799865135', '102.83180495679849', 'แมพคาเฟ่ต์', 'อาหารหวาน', '9', '17', '', '2020-12-01 07:50:13', '6C872EE3-32CF-41A2-93B1-282000B67BB3.jpeg', '0251CEDA-74DE-4C0C-9DC2-7C421207CEE2.jpeg', '9141B052-5CB7-4C42-98D4-184921FA5B49.jpe', 'FFFE87AF-FC9B-4634-A774-D8E19145EA25.jpeg', 'image.jpg', '', '', '', '', '', ''),
(26, 1, 'partner', 'นนทชาติ', 'นนทชาติ', 'แสนบุญศรี', '1419900605181', 'nontachat.s@gmail.com', '0657254646', '1996-07-19', '209/1 หมู่ 12', '-', 'ศิลา', 'เมืองขอนแก่น', 'ขอนแก่น', '40000', '16.480404562609824', '102.81349090159108', 'สีนานวล คาเฟ่', 'อาหารคาว และ อาหารหวาน', '10.00', '21.30', 'เป็นร้านอาหารไทยในมหาวิทยาลัยขอนแก่น ผู้คนรู้จักพอสมควร ต่อมาไม่นานขายดี ได้ขยายสาขาไปฝั่งกังสดาลด้ว', '2020-12-01 10:03:07', '86203C33-452C-4E5B-9B17-2A105829C442.jpeg', 'CC39CB6B-C07A-41AF-B160-511FEE3952D3.jpeg', '98E28634-028A-4CA5-BEE1-89F133DE8095.jpe', '4F5D3EF0-AEC5-4673-9372-0EB2CB91D2BC.jpeg', 'C6EB231B-B662-4379-90FA-F31D03D3FA73.jpe', '', '', '', '', '', ''),
(27, 2, 'shipper', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2021-04-19 16:00:25', '', '', 'NULL', '', '', '', 'รถยนต์ส่วนตัว', '', '', '                                        ', ''),
(28, 1, 'shipper', 'Danny', 'Thepparit', 'Upparia', '', 'danny@gmail.com', '', '1999-05-10', '204/35', '-', 'ศิลา', 'เมืองขอนแก่น', 'ขอนแก่น', '40000', '', '', '', '', '', '', '', '2020-12-11 12:20:46', 'dan-1.jpg', '2.JPG', 'NULL', '4.jpg', '5.png', 'กข 8315 อุดรธานี', 'รถมอเตอร์ไซต์ส่วนตัว', 'Honda', 'PCX', '                                        ', '3.jpg'),
(29, 2, 'shipper', '', '', '', '', '', '0987654321', '', '85/63 Kaseansin Park', '-', 'ศิลา', 'เมืองขอนแก่น', 'ขอนแก่น', '40000', '', '', '', '', '', '', '', '2020-12-11 12:34:51', 'dan-1.jpg', '2.JPG', 'NULL', '4.jpg', '5.png', 'กก 8777 อด', 'รถมอเตอร์ไซต์ส่วนตัว', 'Honda', 'PCX', 'สีขาว', '4.jpg'),
(30, 1, 'shipper', 'Danny', 'Thepparit', 'Uppara', '0987654321654', 'danny@gmail.com', '0987654321', '1999-10-05', '85/63 Kaseansin Park', '-', 'ศิลา', 'เมืองขอนแก่น', 'ขอนแก่น', '40000', '', '', '', '', '', '', '', '2020-12-11 12:49:15', 'dan-1.jpg', '2.JPG', 'NULL', '4.jpg', '5.png', 'กก 8534 อด', 'รถมอเตอร์ไซต์ส่วนตัว', 'Honda', 'PCX', 'สีขาว', '3.jpg'),
(31, 1, 'partner', 'Kuls', 'Kulnanita', 'Kuls', '1433422953263', 'margretha.neung@gmail.com', '0892367890', '1996-05-21', '9/8', '-', 'เพ็ญ', 'เพ็ญ', 'อุดรธานี', '41150', '17.6876', '102.6627', 'กุล คาเฟ่', 'อาหารหวาน', '12.00', '13.00', '---', '2021-04-26 13:13:34', '140657718_4870829226321781_4745835071224901888_n.jpg', '140657718_4870829226321781_4745835071224901888_n.jpg', '140657718_4870829226321781_4745835071224', '140657718_4870829226321781_4745835071224901888_n.jpg', '140657718_4870829226321781_4745835071224', '', '', '', '', '', ''),
(32, 1, 'shipper', 'Milked', 'Milky', 'Raiders', '1212312121121', 'Milky_g@gmail.com', '0812312312', '1999-02-05', 'Milky Resident 305/12', '-', 'ศิลา', 'เมืองขอนแก่น', 'ขอนแก่น', '40000', '17.6876', '102.6627', '', '', '', '', '', '2021-04-27 10:12:01', '140657718_4870829226321781_4745835071224901888_n.jpg', '140657718_4870829226321781_4745835071224901888_n.jpg', 'NULL', '140657718_4870829226321781_4745835071224901888_n.jpg', '140657718_4870829226321781_4745835071224', 'จจ 8613', 'รถมอเตอร์ไซต์ส่วนตัว', 'Yamaha', 'Filano', 'สีชมพูพาสเทล                            ', '140657718_4870829226321781_4745835071224901888_n.jpg'),
(33, 1, 'partner', 'Lady Tall', 'Acina', 'Demitescu', '1423200132624', 'Acina@residentvillage.com', '0836781822', '1993-07-20', 'Temitescu Casle', 'Village', 'เพ็ญ', 'เพ็ญ', 'อุดรธานี', '41150', '17.2062', '102.4366', 'ไวน์เลิศรสของ Demitescu', 'เครื่องดื่ม', '17.00', '24.00', 'ร้านขายไวน์ที่มีรสเลิศ', '2021-04-30 08:21:35', '1.webp', '2.jpg', '3.webp', '4.1.jpg', '1.webp', '', '', '', '', '', ''),
(34, 0, 'shipper', 'KarlMoonwalk', 'Kral', 'Heisenberg', '1183072510346', 'Hisen@residentvillage.com', '0637821622', '1993-10-02', 'Lican Factory', 'Lican', 'เพ็ญ', 'เพ็ญ', 'อุดรธานี', '41150', '17.684225299999998', '102.89741199999999', '', '', '', '', '', '2021-04-30 08:20:34', '1,5.png', '2.jpg', 'NULL', '4.1.jpg', '1,5.png', 'จจ 6310 อุดรธานี', 'รถมอเตอร์ไซต์ส่วนตัว', 'Yamaha', 'Filano', 'สีดำเงา', '3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `request_withdraw`
--

CREATE TABLE `request_withdraw` (
  `request_withdraw_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `status_member` varchar(100) NOT NULL DEFAULT 'NULL',
  `name` varchar(100) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `balance_least` int(11) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `status` enum('1','2','3') DEFAULT NULL,
  `namebank` varchar(30) NOT NULL,
  `no_account` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `request_withdraw`
--

INSERT INTO `request_withdraw` (`request_withdraw_id`, `member_id`, `status_member`, `name`, `telephone`, `balance_least`, `amount`, `status`, `namebank`, `no_account`, `date`, `time`) VALUES
(1, 53, 'partner', 'Acina', '0836781822', 165, 5, '2', 'Promptpay', '444444444', '2021-04-30', '15:40');

-- --------------------------------------------------------

--
-- Table structure for table `shipper`
--

CREATE TABLE `shipper` (
  `shipper_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `venchle_id` varchar(45) DEFAULT NULL,
  `venchle` varchar(45) DEFAULT NULL,
  `location` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shipper`
--

INSERT INTO `shipper` (`shipper_id`, `member_id`, `venchle_id`, `venchle`, `location`) VALUES
(0, 52, NULL, NULL, ''),
(3, 49, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `temp_price`
--

CREATE TABLE `temp_price` (
  `temp_id` int(11) NOT NULL,
  `partner_id_fk` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(100) NOT NULL,
  `avalable` varchar(100) NOT NULL,
  `unit` int(11) NOT NULL,
  `price_def` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `total_summary`
--

CREATE TABLE `total_summary` (
  `total_summary_id` int(11) NOT NULL,
  `total_summary` int(11) NOT NULL,
  `salary` int(11) NOT NULL,
  `salary_month` int(11) NOT NULL,
  `deposit` int(11) NOT NULL,
  `withdraw` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `total_summary`
--

INSERT INTO `total_summary` (`total_summary_id`, `total_summary`, `salary`, `salary_month`, `deposit`, `withdraw`) VALUES
(1, 0, 0, 0, 10340, 0),
(2, 0, 0, 0, 10540, 0),
(3, 0, 0, 0, 10940, 0),
(4, 0, 0, 0, 11540, 0),
(5, 0, 0, 0, 12340, 0),
(6, 0, 0, 0, 13160, 0),
(7, 13155, 0, 0, 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `total_summary_partner`
--

CREATE TABLE `total_summary_partner` (
  `total_summary_partner_id` int(11) NOT NULL,
  `partner_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `salary` int(11) NOT NULL,
  `salary_month` int(11) NOT NULL,
  `balance` int(11) NOT NULL,
  `withdraw` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `total_summary_partner`
--

INSERT INTO `total_summary_partner` (`total_summary_partner_id`, `partner_id`, `total`, `salary`, `salary_month`, `balance`, `withdraw`, `description`) VALUES
(1, 51, 0, 0, 0, 0, 0, ''),
(2, 41, 210, 1, 1, 10000, 0, 'ยอดขายออเดอร์ที่50'),
(3, 41, 420, 2, 2, 10000, 0, 'ยอดขายออเดอร์ที่50'),
(4, 41, 330, 103, 103, 10000, 0, 'ยอดขายออเดอร์ที่53'),
(5, 41, 330, 103, 103, 10102, 0, 'ยอดขายออเดอร์ที่53'),
(6, 41, 330, 103, 103, 10204, 0, 'ยอดขายออเดอร์ที่53'),
(7, 41, 330, 103, 103, 10306, 0, 'ยอดขายออเดอร์ที่53'),
(8, 41, 270, 52, 52, 10408, 0, 'ยอดขายออเดอร์ที่55'),
(9, 53, 0, 0, 0, 0, 0, ''),
(10, 53, 200, 170, 170, 0, 0, 'ยอดขายออเดอร์ที่59'),
(11, 53, 170, 0, 0, 165, 5, 'ถอนเงินออก');

-- --------------------------------------------------------

--
-- Table structure for table `total_summary_shipper`
--

CREATE TABLE `total_summary_shipper` (
  `total_summary_shipper_id` int(11) NOT NULL,
  `shipper_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `salary` int(11) NOT NULL,
  `salary_month` int(11) NOT NULL,
  `balance` int(11) NOT NULL,
  `withdraw` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `total_summary_shipper`
--

INSERT INTO `total_summary_shipper` (`total_summary_shipper_id`, `shipper_id`, `total`, `salary`, `salary_month`, `balance`, `withdraw`, `description`) VALUES
(1, 52, 0, 0, 0, 0, 0, ''),
(2, 52, 60, 9, 9, 0, 0, 'ยอดขายออเดอร์ที่55'),
(3, 52, 200, 30, 30, 9, 0, 'ยอดขายออเดอร์ที่59');

-- --------------------------------------------------------

--
-- Table structure for table `transcription`
--

CREATE TABLE `transcription` (
  `id_transcription` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `description` varchar(50) NOT NULL,
  `deposit` int(11) DEFAULT NULL,
  `change` int(11) DEFAULT NULL,
  `balance` int(11) DEFAULT NULL,
  `note` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transcription`
--

INSERT INTO `transcription` (`id_transcription`, `date`, `description`, `deposit`, `change`, `balance`, `note`) VALUES
(1, '27-04-2021 17:26:21', 'คำขอการเติมเงินเบอร์ 0807464246', 200, 0, 0, 'คำขอเติมเงินลูกค้า'),
(2, '27-04-2021 17:27:24', 'เติมเงินเป็นที่เรียบร้อย', 200, 0, 10340, 'Completed'),
(3, '30-04-2021 13:11:32', 'คำขอการเติมเงินเบอร์ 0807464246', 20, 0, 0, 'คำขอเติมเงินลูกค้า'),
(4, '30-04-2021 15:31:45', 'คำขอการเติมเงินเบอร์ 0812356142', 20, 0, 0, 'คำขอเติมเงินลูกค้า'),
(5, '30-04-2021 15:32:19', 'คำขอการเติมเงินเบอร์ 0812356142', 200, 0, 0, 'คำขอเติมเงินลูกค้า'),
(6, '30-04-2021 15:32:35', 'เติมเงินเป็นที่เรียบร้อย', 200, 0, 200, 'Completed'),
(7, '30-04-2021 15:32:52', 'เติมเงินเป็นที่เรียบร้อย', 200, 0, 400, 'Completed'),
(8, '30-04-2021 15:33:01', 'เติมเงินเป็นที่เรียบร้อย', 200, 0, 600, 'Completed'),
(9, '30-04-2021 15:33:07', 'เติมเงินเป็นที่เรียบร้อย', 200, 0, 800, 'Completed'),
(10, '30-04-2021 15:33:10', 'เติมเงินเป็นที่เรียบร้อย', 20, 0, 820, 'Completed'),
(11, '30-04-2021 15:40:43', 'ถอนเงินจำนวน5กับPartner Acina', 0, 5, 165, 'Completed'),
(12, '30-04-2021 15:41:01', 'ถอนเงิน', 0, -5, 160, 'Completed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_temp`
--
ALTER TABLE `cart_temp`
  ADD PRIMARY KEY (`cart_id`),
  ADD UNIQUE KEY `cart_id` (`cart_id`),
  ADD KEY `member_id_cart_fk` (`member_id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`history_member_id`),
  ADD UNIQUE KEY `history_member_id` (`history_member_id`),
  ADD KEY `member_id_fk` (`member_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`),
  ADD UNIQUE KEY `telephone` (`telephone`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`),
  ADD UNIQUE KEY `menu_id` (`menu_id`),
  ADD KEY `partner_name_fk` (`partner_id_fk`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`) USING BTREE,
  ADD KEY `order_id` (`order_id`) USING BTREE;

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_details_id`),
  ADD UNIQUE KEY `order_details_id` (`order_details_id`);

--
-- Indexes for table `partner_avalable`
--
ALTER TABLE `partner_avalable`
  ADD PRIMARY KEY (`partner_avalable_id`),
  ADD KEY `partner_id_fk` (`partner_id_fk`);

--
-- Indexes for table `request_deposit`
--
ALTER TABLE `request_deposit`
  ADD PRIMARY KEY (`request_deposit_id`),
  ADD UNIQUE KEY `request_deposit_id` (`request_deposit_id`);

--
-- Indexes for table `request_kyc`
--
ALTER TABLE `request_kyc`
  ADD PRIMARY KEY (`request_kyc_id`);

--
-- Indexes for table `request_withdraw`
--
ALTER TABLE `request_withdraw`
  ADD PRIMARY KEY (`request_withdraw_id`);

--
-- Indexes for table `shipper`
--
ALTER TABLE `shipper`
  ADD PRIMARY KEY (`shipper_id`),
  ADD KEY `shipper_id_fk` (`member_id`);

--
-- Indexes for table `temp_price`
--
ALTER TABLE `temp_price`
  ADD PRIMARY KEY (`temp_id`),
  ADD UNIQUE KEY `temp_id` (`temp_id`);

--
-- Indexes for table `total_summary`
--
ALTER TABLE `total_summary`
  ADD PRIMARY KEY (`total_summary_id`);

--
-- Indexes for table `total_summary_partner`
--
ALTER TABLE `total_summary_partner`
  ADD PRIMARY KEY (`total_summary_partner_id`);

--
-- Indexes for table `total_summary_shipper`
--
ALTER TABLE `total_summary_shipper`
  ADD PRIMARY KEY (`total_summary_shipper_id`);

--
-- Indexes for table `transcription`
--
ALTER TABLE `transcription`
  ADD PRIMARY KEY (`id_transcription`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_temp`
--
ALTER TABLE `cart_temp`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `history_member_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `partner_avalable`
--
ALTER TABLE `partner_avalable`
  MODIFY `partner_avalable_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `request_deposit`
--
ALTER TABLE `request_deposit`
  MODIFY `request_deposit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `request_kyc`
--
ALTER TABLE `request_kyc`
  MODIFY `request_kyc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `request_withdraw`
--
ALTER TABLE `request_withdraw`
  MODIFY `request_withdraw_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `temp_price`
--
ALTER TABLE `temp_price`
  MODIFY `temp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `total_summary`
--
ALTER TABLE `total_summary`
  MODIFY `total_summary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `total_summary_partner`
--
ALTER TABLE `total_summary_partner`
  MODIFY `total_summary_partner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `total_summary_shipper`
--
ALTER TABLE `total_summary_shipper`
  MODIFY `total_summary_shipper_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transcription`
--
ALTER TABLE `transcription`
  MODIFY `id_transcription` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
