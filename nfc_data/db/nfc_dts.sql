-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2020 at 05:26 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nfc_dts`
--
CREATE DATABASE IF NOT EXISTS `nfc_dts` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `nfc_dts`;

-- --------------------------------------------------------

--
-- Table structure for table `dose_unit`
--

DROP TABLE IF EXISTS `dose_unit`;
CREATE TABLE IF NOT EXISTS `dose_unit` (
  `t_dose_unit` int(5) NOT NULL AUTO_INCREMENT,
  `du_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`t_dose_unit`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `dose_unit`
--

TRUNCATE TABLE `dose_unit`;
--
-- Dumping data for table `dose_unit`
--



-- --------------------------------------------------------

--
-- Table structure for table `p_drug`
--

DROP TABLE IF EXISTS `p_drug`;
CREATE TABLE IF NOT EXISTS `p_drug` (
  `d_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_expire` text COLLATE utf8mb4_unicode_ci COMMENT ' (วันหมดอายุ)',
  `d_info` text COLLATE utf8mb4_unicode_ci COMMENT ' (รายละเอียดยา)',
  `d_description` text COLLATE utf8mb4_unicode_ci COMMENT '(คำอธิบายเพิ่มเติม)',
  PRIMARY KEY (`d_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `p_drug`
--

TRUNCATE TABLE `p_drug`;
--
-- Dumping data for table `p_drug`
--

-- --------------------------------------------------------

--
-- Table structure for table `p_math_use_drug`
--

DROP TABLE IF EXISTS `p_math_use_drug`;
CREATE TABLE IF NOT EXISTS `p_math_use_drug` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `d_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=MyISAM AUTO_INCREMENT=82 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `p_math_use_drug`
--

TRUNCATE TABLE `p_math_use_drug`;
--
-- Dumping data for table `p_math_use_drug`
--



-- --------------------------------------------------------

--
-- Table structure for table `p_patient`
--

DROP TABLE IF EXISTS `p_patient`;
CREATE TABLE IF NOT EXISTS `p_patient` (
  `p_id` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_card_id` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'id จากโรงบาล',
  `p_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_lname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_age` int(11) NOT NULL,
  `p_blood` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_weight` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_height` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_gender` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`p_id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Truncate table before insert `p_patient`
--

TRUNCATE TABLE `p_patient`;
--
-- Dumping data for table `p_patient`
--


-- --------------------------------------------------------

--
-- Table structure for table `p_staff`
--

DROP TABLE IF EXISTS `p_staff`;
CREATE TABLE IF NOT EXISTS `p_staff` (
  `s_id` int(10) NOT NULL AUTO_INCREMENT,
  `s_uname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_passwd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_id` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `p_staff`
--

TRUNCATE TABLE `p_staff`;
--
-- Dumping data for table `p_staff`
--

INSERT INTO `p_staff` (`s_id`, `s_uname`, `s_passwd`, `p_id`) VALUES
(18, 'admin', '21232f29a57a5a73894a0ea801fc3', '0000000000');

-- --------------------------------------------------------

--
-- Table structure for table `p_terms_of_use`
--

DROP TABLE IF EXISTS `p_terms_of_use`;
CREATE TABLE IF NOT EXISTS `p_terms_of_use` (
  `t_id` int(20) NOT NULL AUTO_INCREMENT,
  `p_id` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_morning` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT '0' COMMENT ' (0=null,1active)',
  `t_midday` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT '0' COMMENT ' (0=null,1active)',
  `t_evening` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT '0' COMMENT ' (0=null,1active)',
  `t_befor_bed` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT '0' COMMENT ' (0=null,1active)',
  `t_frequency` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT '0' COMMENT ' (0=null ,else=active\r\n)',
  `t_when_symptoms` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT '0' COMMENT ' (0=null 1=active)',
  `t_food` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0=no action,1=befor food,2 after food',
  `t_dose` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'ปริมาณต่อครั้ง',
  `t_dose_unit` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'หน่วยนับ',
  `t_print_stage` int(1) DEFAULT '0' COMMENT 'สถานะปริ้น',
  PRIMARY KEY (`t_id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `p_terms_of_use`
--

TRUNCATE TABLE `p_terms_of_use`;
--
-- Dumping data for table `p_terms_of_use`
--



-- --------------------------------------------------------

--
-- Table structure for table `p_use`
--

DROP TABLE IF EXISTS `p_use`;
CREATE TABLE IF NOT EXISTS `p_use` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `p_use`
--

TRUNCATE TABLE `p_use`;
--
-- Dumping data for table `p_use`
--

INSERT INTO `p_use` (`u_id`, `u_description`) VALUES
(1, 'กิน'),
(2, 'ทา'),
(3, 'ฉีด\r\n');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
