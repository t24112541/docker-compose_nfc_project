-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2020 at 05:54 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

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
-- Table structure for table `p_drug`
--

DROP TABLE IF EXISTS `p_drug`;
CREATE TABLE IF NOT EXISTS `p_drug` (
  `d_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_expire` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT ' (วันหมดอายุ)',
  `d_info` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT ' (รายละเอียดยา)',
  PRIMARY KEY (`d_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `p_drug`
--

TRUNCATE TABLE `p_drug`;
--
-- Dumping data for table `p_drug`
--

INSERT INTO `p_drug` (`d_id`, `d_name`, `d_expire`, `d_info`) VALUES
('111122', 'ยาธาตุน้ำขาว', '2024-09-15', 'บรรเทาอาการท้องเสีย จุกเสียด แน่นท้อง'),
('111123', '0.05% DPCP (F 12249) (diphenylcyclopropenone 50 mg/100 mL) cutaneous solution, 5 mL bottle', '2025-02-05', ''),
('111124', 'พารา', '2023-06-07', ''),
('7894521', 'พาราเซตามอน', '2566-02-01', 'เมื่อมีไข้ ปวดหัว ตัวร้อน');

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
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `p_math_use_drug`
--

TRUNCATE TABLE `p_math_use_drug`;
--
-- Dumping data for table `p_math_use_drug`
--

INSERT INTO `p_math_use_drug` (`m_id`, `u_id`, `d_id`) VALUES
(59, 1, '111122'),
(55, 1, '111123'),
(56, 2, '111123'),
(57, 3, '111123'),
(58, 1, '111124'),
(60, 1, '7894521');

-- --------------------------------------------------------

--
-- Table structure for table `p_patient`
--

DROP TABLE IF EXISTS `p_patient`;
CREATE TABLE IF NOT EXISTS `p_patient` (
  `p_id` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_lname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_age` int(11) NOT NULL,
  `p_blood` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_weight` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_height` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_gender` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`p_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Truncate table before insert `p_patient`
--

TRUNCATE TABLE `p_patient`;
--
-- Dumping data for table `p_patient`
--

INSERT INTO `p_patient` (`p_id`, `p_name`, `p_lname`, `p_age`, `p_blood`, `p_weight`, `p_height`, `p_gender`) VALUES
('1', 'สุชาติ', 'บุญผลา', 35, 'B', '168', '54', 'W'),
('2', 'ชัชชาติ', 'อารมณ์ดี', 56, 'B', '54', '165', 'M'),
('5', 'เบญจมาศ', 'มโน', 59, 'AB', '45', '154', 'W'),
('1114', 'เยาวมาล์', '1114', 14, 'AB', '114', '1114', 'W'),
('8', 'คำแก้ว', 'ชบางาม', 8, 'AB', '41', '145', 'W'),
('1199900669905', 'จาริยา', 'ทัพจันทร์', 21, 'O', '50', '150', 'W'),
('15', 'ซึบาสะ', '15', 15, 'A', '15', '15', 'M'),
('1369900467391', 'ชาญวิทย', 'บุญ', 21, 'B', '75', '175', 'M'),
('12345678', 'ch', 'vt', 15, 'A', '13', '114', 'M'),
('111', 'master', '11', 22, 'O', '11', '11', 'M'),
('113', 'admin', 'tester', 22, 'B', '75', '175', 'M'),
('7777', '7777', '7777', 7777, 'A', '7777', '7777', 'M'),
('88', '8e88', '88', 88, 'A', '88', '88', 'M');

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
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `p_staff`
--

TRUNCATE TABLE `p_staff`;
--
-- Dumping data for table `p_staff`
--

INSERT INTO `p_staff` (`s_id`, `s_uname`, `s_passwd`, `p_id`) VALUES
(17, '88', '2a38a4a916c49e5833517c5d31070', '88'),
(14, 'cv', 'a1b01e73b573fca8eb1a656df9a38', '12345678'),
(13, '1114', 'd6ef5f7f914c1991a55bb22ec879c', '1114'),
(12, '11', 'c20ad4d7fe97759a27a0c9bff6710', '111'),
(11, '113', '73278a4a6960eeb76a8fd49ec6997', '113'),
(16, '7777', 'd79c878888c21930244d8ff36d2db', '7777');

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
  `t_dose` int(11) NOT NULL COMMENT 'ปริมาณต่อครั้ง',
  `t_dose_unit` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'หน่วยนับ',
  PRIMARY KEY (`t_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `p_terms_of_use`
--

TRUNCATE TABLE `p_terms_of_use`;
--
-- Dumping data for table `p_terms_of_use`
--

INSERT INTO `p_terms_of_use` (`t_id`, `p_id`, `d_id`, `t_morning`, `t_midday`, `t_evening`, `t_befor_bed`, `t_frequency`, `t_when_symptoms`, `t_food`, `t_dose`, `t_dose_unit`) VALUES
(1, '1', '111124', '1', '1', '1', '0', '0', '0', '2', 2, 'เม็ด'),
(2, '1', '111122', '0', '0', '0', '0', '4', '1', '0', 1, 'ช้อนโต๊ะ');

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
