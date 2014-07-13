-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2014 at 07:54 AM
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

--
-- Dumping data for table `coursetb`
--

INSERT INTO `coursetb` (`course_code`, `course_name`, `amozeshi_group_name`) VALUES
(56, 'آمار و احتمالات مهندسی', 'کامپیوتر'),
(61, 'کارگاه عمومی', 'کامپیوتر'),
(62, 'مبانی کامپیوترو برنامه سازی', 'کامپیوتر'),
(63, 'برنامه سازی پیشرفته', 'کامپیوتر'),
(64, 'ساختمان های گسسته', 'کامپیوتر'),
(65, 'زبان ماشین و اسمبلی', 'کامپیوتر'),
(66, 'ساختمان داده ها', 'کامپیوتر'),
(67, 'زبان تخصصی', 'کامپیوتر'),
(68, 'مدار الکتریکی 1', 'کامپیوتر'),
(69, 'آزمایشگاه مدار الکترونیکی', 'کامپیوتر'),
(70, 'مدار منطقی', 'کامپیوتر'),
(71, 'آزمایشگاه مدار منطقی', 'کامپیوتر'),
(72, 'ریاضی مهندسی', 'کامپیوتر'),
(74, 'معماری کامپیوتر', 'کامپیوتر'),
(75, 'آزمایشگاه معماری کامپیوتر', 'کامپیوتر'),
(76, 'سیستم عامل', 'کامپیوتر'),
(77, 'نظریه زبان ها و ماشین ها', 'کامپیوتر'),
(79, 'ریزپردازنده 1', 'کامپیوتر'),
(80, 'آزمایشگاه ریزپردازنده 1', 'کامپیوتر'),
(81, 'مدارهای الکترونیکی', 'کامپیوتر'),
(82, 'آزمایشگاه مدارهای الکترونیکی', 'کامپیوتر'),
(83, 'شبکه های کامپیوتری', 'کامپیوتر'),
(85, 'ذخیره و بازیابی اطلاعات', 'کامپیوتر'),
(86, 'طراحی و پیاده سازی زبان های بر', 'کامپیوتر'),
(87, 'اصول طراحی کامپایلرها', 'کامپیوتر'),
(89, 'اصول طراحی پایگاه داده ها', 'کامپیوتر'),
(92, 'طراحی الگوریتم ها', 'کامپیوتر'),
(95, 'پروژه', 'کامپیوتر'),
(97, 'هوش مصنوعی', 'کامپیوتر'),
(98, 'سیستم های اطلاعاتی مدیریت', 'کامپیوتر'),
(119, 'مهندسی نرم افزار (1)', 'کامپیوتر'),
(120, 'مهندسی نرم افزار (2)', 'کامپیوتر'),
(128, 'آزمایشگاه سیستم عامل', 'کامپیوتر');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `timetb`
--

INSERT INTO `timetb` (`id`, `day_of_week`, `start_time`, `end_time`, `melli_code`) VALUES
(10, 1, '00:30:00', '00:50:00', 13885546),
(11, 1, '00:02:00', '00:03:00', 13895818),
(12, 1, '00:04:00', '00:05:00', 13895818),
(13, 1, '00:06:00', '00:07:00', 13895818),
(14, 1, '00:01:00', '00:02:00', 13885546),
(15, 1, '00:03:00', '00:04:00', 13885546),
(16, 4, '12:00:00', '13:00:00', 13885546);

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
('سوگل', 'شیروانی', 'سروش', 10390300, '1990-01-15', 'تهران', 'تهران', 0, NULL, 10390300, 'کارشناسی ارشد آزمون داده', 'کامپیوتر', '2188366988', 'sh.09@yahoo.com', '2188939393', '9124578469', 'کارشناسی', '86f1f4a4560acd56abe2d5625b037ead94d7c97c', 0, 'اسلام', 'م کاج, جهارراه سرو', 'م کاج, خیابان توحید', 1, 1),
('نجمه', 'شمس بخش', 'حامد', 13885546, '2014-08-21', 'ایلام', 'خوزستان', 0, NULL, 13885546, 'لیسانس', 'کامپیوتر', '22506446', 'zshamsbakhsh@gmail.com', '23659898', '09358754125', 'دیپلم', '86f1f4a4560acd56abe2d5625b037ead94d7c97c', 1, 'اسلام', 'تهران', 'تهران', 1, 1),
('آرام', 'جعفری', 'حسین', 13895818, '1960-09-16', 'تهران', 'تهران', 0, NULL, 13895818, 'دکترا', 'کامپیوتر', '2122087062', 'aram@gmail.com', '2177229933', NULL, NULL, '86f1f4a4560acd56abe2d5625b037ead94d7c97c', 0, 'اسلام', 'سمنگان، خیابان ارشی\r\nپلاک 2', 'پونک, م پونک, خیابان بوستان, پلاک 29', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_coursetb`
--

CREATE TABLE IF NOT EXISTS `user_coursetb` (
  `melli_code` int(11) NOT NULL,
  `course_code` int(11) NOT NULL,
  PRIMARY KEY (`melli_code`,`course_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `user_coursetb`
--

INSERT INTO `user_coursetb` (`melli_code`, `course_code`) VALUES
(13885546, 56),
(13885546, 69),
(13885546, 79),
(13895818, 56),
(13895818, 62),
(13895818, 74);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
