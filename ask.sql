-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2016 at 05:47 AM
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
-- Table structure for table `quest_ans`
--

DROP TABLE IF EXISTS `quest_ans`;
CREATE TABLE IF NOT EXISTS `quest_ans` (
  `quest_ans_id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `answer` text,
  `admin_name` varchar(40) DEFAULT NULL,
  `user_id_fk` int(11) NOT NULL,
  PRIMARY KEY (`quest_ans_id`),
  KEY `quest_ans_id` (`user_id_fk`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=utf8;

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
