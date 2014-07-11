-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2014 at 09:31 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `applicantsinfodb`
--
CREATE DATABASE IF NOT EXISTS `applicantsinfodb` DEFAULT CHARACTER SET utf8 COLLATE utf8_persian_ci;
USE `applicantsinfodb`;

-- --------------------------------------------------------

--
-- Table structure for table `coursetb`
--

CREATE TABLE IF NOT EXISTS `coursetb` (
  `course_code` int(11) NOT NULL,
  `course_name` varchar(30) CHARACTER SET utf32 NOT NULL,
  `amozeshi_group_name` varchar(30) CHARACTER SET utf32 NOT NULL,
  PRIMARY KEY (`course_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `timetb`
--

CREATE TABLE IF NOT EXISTS `timetb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `day_of_week` int(3) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `melli_code` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `timetb`
--

INSERT INTO `timetb` (`id`, `day_of_week`, `start_time`, `end_time`, `melli_code`) VALUES
(1, 1, '00:01:00', '00:02:00', 13885546),
(3, 1, '00:05:00', '00:06:00', 13885546);

-- --------------------------------------------------------

--
-- Table structure for table `usertb`
--

CREATE TABLE IF NOT EXISTS `usertb` (
  `name` mediumtext CHARACTER SET utf32,
  `family` mediumtext CHARACTER SET utf32,
  `father_name` varchar(30) CHARACTER SET utf32 DEFAULT NULL,
  `shenasname_number` int(20) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `birth_location` varchar(30) CHARACTER SET utf32 DEFAULT NULL,
  `shenasname_place` varchar(30) CHARACTER SET utf32 DEFAULT NULL,
  `marriage_situation` tinyint(1) DEFAULT NULL,
  `nezam_vazife_situation` varchar(30) COLLATE utf8_persian_ci DEFAULT NULL,
  `melli_code` int(11) NOT NULL DEFAULT '0',
  `elmi_situation` varchar(50) CHARACTER SET utf32 DEFAULT NULL,
  `teaching_group` varchar(30) CHARACTER SET utf32 DEFAULT NULL,
  `tel_home` varchar(11) COLLATE utf8_persian_ci DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf32 DEFAULT NULL,
  `tel_work` varchar(11) COLLATE utf8_persian_ci DEFAULT NULL,
  `mobile` varchar(11) COLLATE utf8_persian_ci DEFAULT NULL,
  `teaching_maqtaa` varchar(50) CHARACTER SET utf32 DEFAULT NULL,
  `password` varchar(40) CHARACTER SET utf16 DEFAULT NULL,
  `admin_user` tinyint(1) DEFAULT '0',
  `religion` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `work_address` text COLLATE utf8_persian_ci,
  `home_address` text COLLATE utf8_persian_ci,
  `is_approved` tinyint(1) NOT NULL DEFAULT '0',
  `gender` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`melli_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `usertb`
--

INSERT INTO `usertb` (`name`, `family`, `father_name`, `shenasname_number`, `birth_date`, `birth_location`, `shenasname_place`, `marriage_situation`, `nezam_vazife_situation`, `melli_code`, `elmi_situation`, `teaching_group`, `tel_home`, `email`, `tel_work`, `mobile`, `teaching_maqtaa`, `password`, `admin_user`, `religion`, `work_address`, `home_address`, `is_approved`, `gender`) VALUES
('نجمه', 'شمس بخش', 'حامد', 13885546, '2014-08-21', 'ایلام', 'خوزستان', 0, NULL, 13885546, 'لیسانس', 'کامپیوتر', '22506446', 'zshamsbakhsh@gmail.com', '23659898', '09358754125', 'دیپلم', 'e165f0cca33d0612e55604304a2915ec48e6a323', 1, 'اسلام', 'تهران', 'تهران', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_coursetb`
--

CREATE TABLE IF NOT EXISTS `user_coursetb` (
  `melli_code` int(11) NOT NULL,
  `course_code` int(11) NOT NULL,
  PRIMARY KEY (`melli_code`,`course_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
