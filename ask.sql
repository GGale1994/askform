-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2016 at 08:28 AM
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
  `LoginStatus` int(1) NOT NULL DEFAULT '0',
  `LastUpdate` datetime NOT NULL DEFAULT '0001-01-01 00:00:00',
  PRIMARY KEY (`UserID`),
  UNIQUE KEY `Username` (`Username`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`UserID`, `Username`, `Password`, `Name`, `LoginStatus`, `LastUpdate`) VALUES
(5, 'admin', 'admin', 'Benz', 0, '0001-01-01 00:00:00'),
(6, 'admin2', 'admin2', 'Gale', 0, '0001-01-01 00:00:00');

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
  PRIMARY KEY (`quest_ans_id`),
  KEY `quest_ans_id` (`user_id_fk`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quest_ans`
--

INSERT INTO `quest_ans` (`quest_ans_id`, `question`, `answer`, `member_name`, `user_id_fk`) VALUES
(63, 'ยืนหนังสือย้อนหลังจะโดนปรับหรือเปล่าครับ', NULL, NULL, 98);

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
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `fname`, `lname`, `email`, `tel`, `status`, `institute`) VALUES
(98, 'พิทักษ์', 'กำเนิดชัย', 'pitak_gamnerdchai@eiei.com', '0123456789', 'นิสิต ป.ตรี  (Undergraduate)', 'จุฬาลงกรณ์มหาวิทยาลัย คณะสหเวชศาสตร์');

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
