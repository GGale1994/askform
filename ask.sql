-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2016 at 09:42 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ask`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `email` varchar(60) NOT NULL,
  `LoginStatus` int(1) NOT NULL DEFAULT '0',
  `LastUpdate` datetime NOT NULL DEFAULT '0001-01-01 00:00:00',
  PRIMARY KEY (`UserID`),
  UNIQUE KEY `Username` (`Username`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`UserID`, `Username`, `Password`, `Name`, `email`, `LoginStatus`, `LastUpdate`) VALUES
(7, 'admin', 'admin', 'Benz', 'b.narongrat.hongatsawin@gmail.com', 0, '2016-07-05 16:41:40'),
(6, 'admin2', 'admin2', 'Gale', '', 0, '0001-01-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `quest_ans`
--

DROP TABLE IF EXISTS `quest_ans`;
CREATE TABLE IF NOT EXISTS `quest_ans` (
  `quest_ans_id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `answer` text,
  `member_name` varchar(40) DEFAULT NULL,
  `user_id_fk` int(11) NOT NULL,
  `questsub_datetime` datetime DEFAULT NULL,
  `anssub_datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`quest_ans_id`),
  KEY `quest_ans_id` (`user_id_fk`)
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quest_ans`
--

INSERT INTO `quest_ans` (`quest_ans_id`, `question`, `answer`, `member_name`, `user_id_fk`, `questsub_datetime`, `anssub_datetime`) VALUES
(102, 'สามารถยืมหนังสือต่อทางออนไลน์ได้สูงสุดกี่ครั้งครับ', '2 ครั้งครับ', 'Benz', 142, '2016-07-05 04:17:00', '2016-07-06 05:00:00'),
(103, 'ช่วงปิดเทอมหอสมุดเปิดกี่โมงครับ', '8.00-19.00 ครับ', 'Gale', 143, '2016-07-07 00:00:00', '2016-07-09 10:20:00'),
(104, 'หากทำหนังสือเสียหายต้องดำเนินการอย่างไรบ้างครับ', NULL, 'Gale', 144, '2016-07-08 00:00:00', '2016-07-08 08:00:00'),
(105, 'สามารถนำของกินเข้าไปทานในห้องสมุดได้ไหมครับ', 'ไม่ได้ค่ะ ถ้าจะรับประทานต้องนั่งทานข้างนอกให้หมดก่อนเข้ามาในหอสมุดนะคะ', 'Benz', 145, '2016-07-16 00:00:00', '2016-07-17 06:12:13'),
(106, 'Learing english from movie มีฉายทุกวันไหนครับ', 'ศุกร์ค่ะ', 'Benz', 146, '2016-07-12 05:00:00', '2016-07-21 09:00:00'),
(107, 'สามาถยืมหนังสือได้สงสุดครั้งละกี่เล่มครับ', NULL, 'Gale', 147, '2016-07-13 00:00:00', '2016-07-27 09:00:00'),
(108, 'หอสมุดมีที่ให้นั่งชั้นไหนบ้างครับ', '1 2 3 4 และ 5 ค่ะ', 'Benz', 148, '2016-07-21 00:00:00', '2016-08-01 00:00:00'),
(109, 'ห้องสมุดมีอุปกรณ์อะไรให้ยืมใช้บ้างครับ', NULL, 'Benz', 149, '2016-07-05 18:32:00', '2016-07-20 11:22:43'),
(110, 'ห้องสมุดรับนักศึกษาฝึกงานไหมครับ', NULL, 'Gale', 150, '2016-07-07 00:00:00', '2016-07-30 00:00:00'),
(111, 'สัปดาห์นี้ที่ห้องสมุดมีหนังเรื่องอะไรฉายครับ', 'Goosebump ค่ะ', 'Gale', 151, '2016-07-30 00:00:00', '2016-07-31 00:00:00'),
(112, 'จองห้องค้นคว้ายังไงเหรอครับ', NULL, 'Gale', 152, '2016-07-27 10:32:54', '2016-07-30 00:00:00'),
(113, 'หยุดยาว 5 วันห้องสมุดปเปิดไหมครับ', NULL, 'Benz', 153, '2016-07-01 00:00:00', '2016-07-15 00:00:00'),
(114, 'เลยเวลาคืนหนังสือแล้วต้องเสียค่าปรับยังไงบ้างครับ', NULL, 'Benz', 154, '2016-07-16 00:00:00', '2016-07-30 00:00:00'),
(115, 'คอมพิวเตอร์มีให้บิรการชั้นไหนบ้างครับ', NULL, 'Gale', 155, '2016-08-01 00:00:00', '2016-08-02 00:00:00'),
(116, 'เครื่อง MAC มีให้บริการชั้นไหนบ้างครับ', NULL, 'Benz', 156, '2016-07-14 00:00:00', '2016-07-15 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

DROP TABLE IF EXISTS `user_info`;
CREATE TABLE IF NOT EXISTS `user_info` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL COMMENT 'ชื่อจริง',
  `lname` varchar(30) NOT NULL COMMENT 'นามสกุล',
  `email` varchar(50) NOT NULL COMMENT 'อีเมล',
  `tel` char(10) NOT NULL COMMENT 'เบอร์โทรศัพท์',
  `status` varchar(80) NOT NULL COMMENT 'สถานภาพ',
  `institute` varchar(80) NOT NULL COMMENT 'หน่วยงาน',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=157 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `fname`, `lname`, `email`, `tel`, `status`, `institute`) VALUES
(142, 'ณัฐชนน', 'ศรอากาศ', 'nutchanon.gale@gmail.com', '0899188200', 'นิสิต ป.ตรี (Undergraduate)', 'จุฬาลงกรณ์มหาวิทยาลัย (Chulalongkorn University)  คณะสหเวชศาสตร์'),
(143, 'ณรงค์ชัชต์', 'หงส์อัศวิน', 'b.narongrat.hongatsawin@gmail.com', '0821153459', 'บุคลากรสายปฏิบัติการ (Staff)', 'จุฬาลงกรณ์มหาวิทยาลัย (Chulalongkorn University) คณะวิทยาศาตร์  '),
(144, 'อาณุภาพ', 'จำฟู', 'kidshadow@hotmail.com', '0899989999', 'บัณฑิตศึกษา (Graduate Student)', 'จุฬาลงกรณ์มหาวิทยาลัย (Chulalongkorn University)  คณะวิทยาศาสตร์'),
(145, 'วรัฏฐา', 'ปูก๋า', 'warattarose@hotmail.com', '0899188201', 'นิสิต ป.ตรี (Undergraduate)', 'จุฬาลงกรณ์มหาวิทยาลัย (Chulalongkorn University)  คณะสหเวชศาสตร์'),
(146, 'คณิน', 'ภูไบ', 'kaninpoobai@gmail.com', '0895236522', 'บัณฑิตศึกษา (Graduate Student)', 'จุฬาลงกรณ์มหาวิทยาลัย (Chulalongkorn University)  คณะวิทยาศาสตร์'),
(147, 'Ed', 'wall', 'edlol@hotmail.com', '0921152520', 'บุคลากรสายวิชาการ (Faculty)', 'จุฬาลงกรณ์มหาวิทยาลัย (Chulalongkorn University)  คณะแพทยศาสตร์'),
(148, 'ภานุพงษ์', 'ทันษา', 'panupontansa@gmail.com', '0855545555', 'บัณฑิตศึกษา (Graduate Student)', 'จุฬาลงกรณ์มหาวิทยาลัย (Chulalongkorn University)  คณะนิเทศศาสตร์'),
(149, 'รวีโรจน์', 'เตียววณิชกุล', 'nongroj38@hotmail.cm', '0897483274', 'นิสิต ป.ตรี (Undergraduate)', 'จุฬาลงกรณ์มหาวิทยาลัย (Chulalongkorn University)  คณะแพทย์ศาสตร์'),
(150, 'ปองวิชญ์', 'กลัดเข็มทอง', 'peachkub@hotmail.com', '0822253333', 'นิสิต ป.ตรี (Undergraduate)', 'จุฬาลงกรณ์มหาวิทยาลัย (Chulalongkorn University) คณะทันตแพทยศาสตร์  '),
(151, 'ธนวิช', 'คำโสภา', 'thanasea@gmail.com', '0921155440', 'นิสิต ป.ตรี (Undergraduate)', 'จุฬาลงกรณ์มหาวิทยาลัย (Chulalongkorn University)  คณะนิติศาสตร์'),
(152, 'ไพลิน', 'เผยฉวี', 'pailin@gmail.com', '0898889999', 'นิสิต ป.ตรี (Undergraduate)', 'จุฬาลงกรณ์มหาวิทยาลัย (Chulalongkorn University)  คณะแพทยศาสตร์'),
(153, 'อดิลักษณ์', 'ชูประทีป', 'yo_adiluck@gmail.com', '0921155540', 'นิสิต ป.ตรี (Undergraduate)', 'จุฬาลงกรณ์มหาวิทยาลัย (Chulalongkorn University)  คณะวิทยาศาตร์'),
(154, 'รวีรุจน์', 'เตียววณิชกุล', 'peerut@hotmail.com', '0858853340', 'นิสิต ป.ตรี (Undergraduate)', 'จุฬาลงกรณ์มหาวิทยาลัย (Chulalongkorn University)  คณะแพทยศาสตร์'),
(155, 'แพรวา', 'เตียววณิชกุล', 'prawiez@hotmail.com', '0845521150', 'นิสิต ป.ตรี (Undergraduate)', 'จุฬาลงกรณ์มหาวิทยาลัย (Chulalongkorn University)  คณะครุศาสตร์'),
(156, 'ณัฏฐชา', 'ศรอากาศ', 'fha@gmail.com', '0899188855', 'นิสิต ป.ตรี (Undergraduate)', 'จุฬาลงกรณ์มหาวิทยาลัย (Chulalongkorn University)  คณะแพทยศาสตร์');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `quest_ans`
--
ALTER TABLE `quest_ans`
  ADD CONSTRAINT `quest_ans_ibfk_1` FOREIGN KEY (`user_id_fk`) REFERENCES `user_info` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
