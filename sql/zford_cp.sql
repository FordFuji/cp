-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 22, 2023 at 02:04 PM
-- Server version: 10.4.26-MariaDB-log
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zford_cp`
--

-- --------------------------------------------------------

--
-- Table structure for table `captcha`
--

CREATE TABLE `captcha` (
  `captcha_id` bigint(13) UNSIGNED NOT NULL,
  `captcha_time` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `word` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `captcha`
--

INSERT INTO `captcha` (`captcha_id`, `captcha_time`, `ip_address`, `word`) VALUES
(29, 1580956690, '::1', 'HZxbrvgG'),
(30, 1580956698, '::1', 'YVI0afe7'),
(31, 1580956906, '::1', 'drxfsQtG'),
(32, 1580956925, '::1', '04lY5RKn'),
(33, 1580956951, '::1', '67O2jOdG'),
(34, 1580957128, '::1', 'GQsXEqv0'),
(35, 1580957480, '::1', 'ICWXMmr1'),
(36, 1580957586, '::1', '87VzjNXA'),
(37, 1580957594, '::1', 'qDoLi2aP'),
(38, 1580957660, '::1', 'TdYfmfCZ'),
(39, 1580957688, '::1', 'IfqekZPx'),
(40, 1580958374, '::1', '6X2qmCRV'),
(41, 1580958409, '::1', 'GsP1blCR'),
(42, 1580958493, '::1', 'KtSKt77r'),
(43, 1580958523, '::1', 't7elicux'),
(44, 1580958575, '::1', 'i144VsbT'),
(45, 1580958606, '::1', 'ICshWrPA'),
(46, 1580958617, '::1', 'ICMkgxiE'),
(47, 1580958639, '::1', 'gvtARig9'),
(48, 1580960299, '::1', 'LGJKfmo5'),
(49, 1580963848, '::1', '9Ar3Q8P7'),
(50, 1580963882, '::1', 'OYXCd9te'),
(51, 1582260806, '::1', 'ow2HUc7o'),
(52, 1582261190, '::1', 'LVzd7EfR'),
(53, 1582261320, '::1', 'QcBpko41'),
(54, 1582261322, '::1', '8uIfZY2V'),
(55, 1582261346, '::1', 'rMXFVmML'),
(56, 1582261988, '::1', 'joX8LuV0'),
(57, 1582262791, '::1', 'OiCjItkn'),
(58, 1582265276, '::1', 'MhDXCQzi'),
(59, 1584945382, '203.209.93.51', '739RYTMu'),
(60, 1584945391, '203.209.93.51', 'EfHo69Yt'),
(61, 1585212449, '180.180.241.2', 'HZJlxuf9'),
(62, 1585212670, '180.180.241.2', 'lkRDV2W2'),
(63, 1585285296, '27.55.85.80', 'T4rsU2gI'),
(64, 1585285346, '27.55.85.80', '1WHPTHpO'),
(65, 1585730363, '180.180.217.3', 'XHke6kRr'),
(66, 1586247471, '180.180.217.3', '52G324gJ'),
(67, 1587355946, '180.180.217.3', 'rXUPFHqG'),
(68, 1587530557, '223.24.61.157', 'Ow96z3V7'),
(69, 1591255378, '124.122.197.130', 'sw1ibDZE'),
(70, 1591970356, '182.232.48.152', 'uhI5NVwZ'),
(71, 1592374452, '180.180.217.3', '6y0glYbx'),
(72, 1592374505, '180.180.217.3', 'T2aoemvD'),
(73, 1593426845, '180.180.217.3', '5NdNVG78'),
(74, 1593748940, '203.209.93.51', 'ymyTom8i'),
(75, 1593751036, '203.209.93.51', 'XOVNfdWF'),
(76, 1593751047, '203.209.93.51', 'Z6xpLE5T'),
(77, 1593751958, '203.209.93.51', 'q8EQT2JA'),
(78, 1594971667, '180.180.217.3', 'xLAyBp2m'),
(79, 1595507597, '51.15.239.61', 'leZeFrZT'),
(80, 1595507605, '51.15.239.61', 'FBMQ1UJP'),
(81, 1595507605, '51.15.239.61', 'kd0i6AAT'),
(82, 1596082161, '203.209.93.51', 'rnGxr6Al'),
(83, 1596082199, '203.209.93.51', 'o01AD7FK'),
(84, 1596083008, '203.209.93.51', 'nYdlKoXs'),
(85, 1596090578, '203.209.93.51', 'b5xcRiHp'),
(86, 1596090981, '203.209.93.51', 'YqYcukFN'),
(87, 1596092356, '203.209.93.51', 'l4flwuNO'),
(88, 1596094853, '124.120.116.246', '08PbnLJg'),
(89, 1596094966, '124.120.116.246', 'ddb6F5li'),
(90, 1596095007, '203.209.93.51', 'hryI9681'),
(91, 1596095148, '124.120.116.246', 'fLn6MgnT'),
(92, 1596095226, '124.120.116.246', 'Q0OTGMrR'),
(93, 1596095303, '124.120.116.246', '3PdO9IQb'),
(94, 1596095452, '203.209.93.51', 'be4cBHEL'),
(95, 1596096159, '124.120.116.246', 'AdYbCAxG'),
(96, 1596096226, '203.209.93.51', 'Ld2guqhY'),
(97, 1596610941, '124.122.197.92', 'WZzxupBk');

-- --------------------------------------------------------

--
-- Table structure for table `ci_active_participation`
--

CREATE TABLE `ci_active_participation` (
  `active_participation_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `active_participation_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active_participation_place` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active_participation_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active_participation_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_active_participation`
--

INSERT INTO `ci_active_participation` (`active_participation_id`, `profile_id`, `active_participation_name`, `active_participation_place`, `active_participation_date`, `active_participation_datetime_create`) VALUES
(36, 1, 'Test ใบรับรอง 2', 'Bangsue', '2022', '2022-10-18 10:24:03'),
(37, 1, 'Test ใบรับรอง 2', 'Dusit', '2021', '2022-10-18 10:24:03'),
(43, 2, 'Test1', '67890', '2555', '2022-11-11 10:02:17');

-- --------------------------------------------------------

--
-- Table structure for table `ci_activity`
--

CREATE TABLE `ci_activity` (
  `activity_id` int(11) NOT NULL,
  `activity_image` varchar(255) NOT NULL,
  `activity_name` varchar(255) NOT NULL,
  `activity_description` text NOT NULL,
  `activity_detail` text NOT NULL,
  `activity_datetime_create` datetime NOT NULL,
  `activity_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ci_alumni_activity`
--

CREATE TABLE `ci_alumni_activity` (
  `alumni_activity_id` int(11) NOT NULL,
  `alumni_activity_type` varchar(255) NOT NULL,
  `alumni_activity_image` varchar(255) NOT NULL,
  `alumni_activity_name` varchar(255) NOT NULL,
  `alumni_activity_description` varchar(255) NOT NULL,
  `alumni_activity_detail` text NOT NULL,
  `alumni_activity_datetime_create` datetime NOT NULL,
  `alumni_activity_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_alumni_activity`
--

INSERT INTO `ci_alumni_activity` (`alumni_activity_id`, `alumni_activity_type`, `alumni_activity_image`, `alumni_activity_name`, `alumni_activity_description`, `alumni_activity_detail`, `alumni_activity_datetime_create`, `alumni_activity_datetime_update`) VALUES
(3, '', 'bg-vision.jpg', 'test name', 'test', '<p>\r\n	test</p>\r\n', '2022-10-14 16:40:11', '2022-10-14 16:49:20');

-- --------------------------------------------------------

--
-- Table structure for table `ci_award`
--

CREATE TABLE `ci_award` (
  `award_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `award_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `award_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `award_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_award`
--

INSERT INTO `ci_award` (`award_id`, `profile_id`, `award_image`, `award_name`, `award_datetime_create`) VALUES
(2, 2, '0ca05b724390dd0355cdc41fa83e9939.png', 'Test Award', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ci_banner_slide`
--

CREATE TABLE `ci_banner_slide` (
  `banner_slide_id` int(11) NOT NULL,
  `banner_slide_image` varchar(255) NOT NULL,
  `banner_slide_text1` varchar(255) NOT NULL,
  `banner_slide_text2` varchar(255) NOT NULL,
  `banner_slide_text3` varchar(255) NOT NULL,
  `banner_slide_text4` varchar(255) NOT NULL,
  `banner_slide_link` varchar(255) NOT NULL,
  `banner_slide_datetime_create` datetime NOT NULL,
  `banner_slide_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_banner_slide`
--

INSERT INTO `ci_banner_slide` (`banner_slide_id`, `banner_slide_image`, `banner_slide_text1`, `banner_slide_text2`, `banner_slide_text3`, `banner_slide_text4`, `banner_slide_link`, `banner_slide_datetime_create`, `banner_slide_datetime_update`) VALUES
(1, 'banner-img.jpg', 'cp1', 'cp2', 'cp3', 'cp4', 'https://www.sanook.com', '2022-09-09 11:40:02', '2022-09-09 11:40:02'),
(2, 'img-about.jpg', 'cp1', 'cp2', 'cp3', 'cp4', 'https://www.sanook.com', '2022-09-09 11:40:19', '2022-09-09 11:40:19');

-- --------------------------------------------------------

--
-- Table structure for table `ci_calendar_study`
--

CREATE TABLE `ci_calendar_study` (
  `calendar_study_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `calendar_study_open1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `calendar_study_register1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `calendar_study_exam_mid_term1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `calendar_study_exam_final_term1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `calendar_study_term_break1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `calendar_study_term2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `calendar_study_register2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `calendar_study_exam_mid_term2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `calendar_study_exam_final_term2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `calendar_study_term_break2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `calendar_study_open3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `calendar_study_register3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `calendar_study_exam_mid_term3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `calendar_study_exam_final_term3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `calendar_study_term_break3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `calendar_study_datetime_create` datetime NOT NULL,
  `calendar_study_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_calendar_study`
--

INSERT INTO `ci_calendar_study` (`calendar_study_id`, `profile_id`, `calendar_study_open1`, `calendar_study_register1`, `calendar_study_exam_mid_term1`, `calendar_study_exam_final_term1`, `calendar_study_term_break1`, `calendar_study_term2`, `calendar_study_register2`, `calendar_study_exam_mid_term2`, `calendar_study_exam_final_term2`, `calendar_study_term_break2`, `calendar_study_open3`, `calendar_study_register3`, `calendar_study_exam_mid_term3`, `calendar_study_exam_final_term3`, `calendar_study_term_break3`, `calendar_study_datetime_create`, `calendar_study_datetime_update`) VALUES
(1, 1, '01/08/2022', '02/09/2022', '03/09/2022', '04/09/2022', '05/09/2022', '06/09/2022', '07/09/2022', '08/09/2022', '09/09/2022', '01/11/2022', '02/11/2022', '03/11/2022', '04/11/2022', '05/11/2022', '06/11/2022', '2022-11-16 10:23:19', '2022-11-16 10:23:19'),
(2, 2, '01/08/2022', '02/10/2022', '03/10/2022', '04/10/2022', '05/10/2022', '06/10/2022', '07/10/2022', '08/10/2022', '09/10/2022', '', '', '', '', '', '', '2022-10-06 11:36:40', '2022-10-06 11:36:40');

-- --------------------------------------------------------

--
-- Table structure for table `ci_category1`
--

CREATE TABLE `ci_category1` (
  `category1_id` int(11) NOT NULL,
  `category1_name` varchar(255) NOT NULL,
  `category1_datetime_create` datetime NOT NULL,
  `category1_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ci_category2`
--

CREATE TABLE `ci_category2` (
  `category2_id` int(11) NOT NULL,
  `category1_id` int(11) NOT NULL,
  `category2_name` varchar(255) NOT NULL,
  `category2_datetime_create` datetime NOT NULL,
  `category2_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ci_category3`
--

CREATE TABLE `ci_category3` (
  `category3_id` int(11) NOT NULL,
  `category2_id` int(11) NOT NULL,
  `category3_name` varchar(255) NOT NULL,
  `category3_datetime_create` datetime NOT NULL,
  `category3_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ci_category_form`
--

CREATE TABLE `ci_category_form` (
  `category_form_id` int(11) NOT NULL,
  `category_form_name` varchar(255) NOT NULL,
  `category_form_datetime_create` datetime NOT NULL,
  `category_form_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_category_form`
--

INSERT INTO `ci_category_form` (`category_form_id`, `category_form_name`, `category_form_datetime_create`, `category_form_datetime_update`) VALUES
(1, 'แบบฟอร์ม', '2022-09-28 11:05:24', '2022-09-28 11:05:24'),
(2, 'ตัวอย่างการกรอกแบบฟอร์ม', '2022-09-28 11:05:47', '2022-09-28 11:05:47');

-- --------------------------------------------------------

--
-- Table structure for table `ci_category_project`
--

CREATE TABLE `ci_category_project` (
  `category_project_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `category_project_file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_project_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_project_datetime_create` datetime NOT NULL,
  `category_project_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_category_project`
--

INSERT INTO `ci_category_project` (`category_project_id`, `profile_id`, `category_project_file`, `category_project_name`, `category_project_datetime_create`, `category_project_datetime_update`) VALUES
(1, 1, 'btn-shopee2.jpg', 'Project Test', '2022-10-05 13:31:32', '2022-11-16 11:11:27'),
(2, 1, 'banner-img2.jpg', 'ขั้นกลาง', '2022-10-05 14:12:58', '2022-10-05 14:12:58'),
(3, 2, 'banner-img.jpg', 'ขั้นต้น', '2022-10-06 11:57:16', '2022-10-06 11:57:16');

-- --------------------------------------------------------

--
-- Table structure for table `ci_category_souvenir`
--

CREATE TABLE `ci_category_souvenir` (
  `category_souvenir_id` int(11) NOT NULL,
  `category_souvenir_name` varchar(255) NOT NULL,
  `category_souvenir_datetime_create` datetime NOT NULL,
  `category_souvenir_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ci_certificate`
--

CREATE TABLE `ci_certificate` (
  `certificate_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `certificate_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `certificate_place` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `certificate_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `certificate_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_certificate`
--

INSERT INTO `ci_certificate` (`certificate_id`, `profile_id`, `certificate_name`, `certificate_place`, `certificate_date`, `certificate_datetime_create`) VALUES
(59, 1, 'Test ใบรับรอง 1', 'Bangsue', '2022', '2022-10-18 10:24:02'),
(60, 1, 'Test ใบรับรอง 2', 'Dusit', '2021', '2022-10-18 10:24:02'),
(66, 2, 'Test1', 'Test Place', '2555', '2022-11-11 10:02:17');

-- --------------------------------------------------------

--
-- Table structure for table `ci_chat`
--

CREATE TABLE `ci_chat` (
  `chat_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `chat_qr_code_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chat_application` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chat_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_chat`
--

INSERT INTO `ci_chat` (`chat_id`, `profile_id`, `chat_qr_code_image`, `chat_application`, `chat_datetime_create`) VALUES
(2, 2, 'e79e8b1ab78b54722903b5babc6a7830.png', 'Line', '0000-00-00 00:00:00'),
(3, 2, 'b0cdadf6232e9aa69e427c855f91f03e.png', 'Twitter', '0000-00-00 00:00:00'),
(4, 2, 'c79217a81ad5097e7ab423f0d57b3b44.png', 'Chat', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ci_contact_us`
--

CREATE TABLE `ci_contact_us` (
  `contact_us_id` int(11) NOT NULL,
  `contact_us_name` varchar(255) NOT NULL,
  `contact_us_email` varchar(255) NOT NULL,
  `contact_us_telephone` varchar(255) NOT NULL,
  `contact_us_topic` varchar(255) NOT NULL,
  `contact_us_message` text NOT NULL,
  `contact_us_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_contact_us`
--

INSERT INTO `ci_contact_us` (`contact_us_id`, `contact_us_name`, `contact_us_email`, `contact_us_telephone`, `contact_us_topic`, `contact_us_message`, `contact_us_datetime_create`) VALUES
(1, 'สิทธิพร ตรองวิเชียร', 'sitiporn@orange-thailand.com', '0990943010', 'Test', 'test', '2022-10-06 12:19:52');

-- --------------------------------------------------------

--
-- Table structure for table `ci_courses_offer_by_cp`
--

CREATE TABLE `ci_courses_offer_by_cp` (
  `courses_offer_by_cp_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `courses_offer_by_cp_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `courses_offer_by_cp_who` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `courses_offer_by_cp_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `courses_offer_by_cp_certificate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `courses_offer_by_cp_datetime_create` datetime NOT NULL,
  `courses_offer_by_cp_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_courses_offer_by_cp`
--

INSERT INTO `ci_courses_offer_by_cp` (`courses_offer_by_cp_id`, `profile_id`, `courses_offer_by_cp_name`, `courses_offer_by_cp_who`, `courses_offer_by_cp_status`, `courses_offer_by_cp_certificate`, `courses_offer_by_cp_datetime_create`, `courses_offer_by_cp_datetime_update`) VALUES
(1, 1, 'test', 'CP', 'สำเร็จแล้ว', 'bg-vision.jpg', '2022-09-28 10:24:11', '2022-09-28 10:41:24'),
(2, 2, 'test', 'CP', 'ยังไม่เริ่ม', 'bg-vision1.jpg', '2022-10-06 11:44:24', '2022-10-06 11:44:24');

-- --------------------------------------------------------

--
-- Table structure for table `ci_courses_on_demand`
--

CREATE TABLE `ci_courses_on_demand` (
  `courses_on_demand_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `courses_on_demand_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `courses_on_demand_who` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `courses_on_demand_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `courses_on_demand_certificate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `courses_on_demand_datetime_create` datetime NOT NULL,
  `courses_on_demand_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_courses_on_demand`
--

INSERT INTO `ci_courses_on_demand` (`courses_on_demand_id`, `profile_id`, `courses_on_demand_name`, `courses_on_demand_who`, `courses_on_demand_status`, `courses_on_demand_certificate`, `courses_on_demand_datetime_create`, `courses_on_demand_datetime_update`) VALUES
(1, 1, 'test', 'test', 'ยังไม่เริ่ม', '4e586a799042f4cbc652c0eb553863da.png', '2022-10-05 11:55:48', '2022-10-05 11:55:48'),
(2, 2, 'หลักสูตรทดสอบ', 'CP', 'ระหว่างเรียน', 'banner-img3.jpg', '2022-10-06 11:44:49', '2022-10-07 15:25:23');

-- --------------------------------------------------------

--
-- Table structure for table `ci_document_download`
--

CREATE TABLE `ci_document_download` (
  `document_download_id` int(11) NOT NULL,
  `document_download_file` varchar(255) NOT NULL,
  `document_download_name` varchar(255) NOT NULL,
  `document_download_description` varchar(255) NOT NULL,
  `document_download_datetime_create` datetime NOT NULL,
  `document_download_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_document_download`
--

INSERT INTO `ci_document_download` (`document_download_id`, `document_download_file`, `document_download_name`, `document_download_description`, `document_download_datetime_create`, `document_download_datetime_update`) VALUES
(1, 'btn-shopee.jpg', 'Test Document', 'Test Document Download', '2022-09-28 14:05:05', '2022-09-28 14:05:25');

-- --------------------------------------------------------

--
-- Table structure for table `ci_education`
--

CREATE TABLE `ci_education` (
  `education_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `education_institute` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `education_level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `education_year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `education_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_education`
--

INSERT INTO `ci_education` (`education_id`, `profile_id`, `education_institute`, `education_level`, `education_year`, `education_datetime_create`) VALUES
(119, 1, 'ม. ธุรกิจบัณฑิตย์', 'ปริญญาตรี', '2022', '2022-10-18 10:24:02'),
(120, 1, 'รร. เทคนิควิมล', 'ปวส.', '2019', '2022-10-18 10:24:02'),
(126, 2, 'โยธินบุรณะ', 'ม.6', '2565', '2022-11-11 10:02:17');

-- --------------------------------------------------------

--
-- Table structure for table `ci_english_update`
--

CREATE TABLE `ci_english_update` (
  `english_update_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `english_update_year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `english_update_quarter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `english_update_hours` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `english_update_level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `english_update_datetime_create` datetime NOT NULL,
  `english_update_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_english_update`
--

INSERT INTO `ci_english_update` (`english_update_id`, `profile_id`, `english_update_year`, `english_update_quarter`, `english_update_hours`, `english_update_level`, `english_update_datetime_create`, `english_update_datetime_update`) VALUES
(1, 1, '2022', 'Q1', '5', '20', '2022-10-05 11:52:29', '2022-10-05 11:52:29'),
(2, 1, '2022', 'Q2', '20', '33', '2022-10-05 11:52:43', '2022-10-05 11:52:43'),
(3, 1, '2023', 'Q1', '55', '66', '2022-10-05 11:52:57', '2022-10-05 11:52:57');

-- --------------------------------------------------------

--
-- Table structure for table `ci_extra_curriculum`
--

CREATE TABLE `ci_extra_curriculum` (
  `extra_curriculum_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `extra_curriculum_course` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `extra_curriculum_institute` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `extra_curriculum_period` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `extra_curriculum_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_extra_curriculum`
--

INSERT INTO `ci_extra_curriculum` (`extra_curriculum_id`, `profile_id`, `extra_curriculum_course`, `extra_curriculum_institute`, `extra_curriculum_period`, `extra_curriculum_datetime_create`) VALUES
(170, 1, 'Test1', 'Bangsue', '3', '2022-10-18 10:24:02'),
(171, 1, 'Test2', 'Dusit', '6', '2022-10-18 10:24:02'),
(172, 1, 'Test3', 'Bangplad', '9', '2022-10-18 10:24:02'),
(178, 2, 'Test', 'Test', '5 ปี', '2022-11-11 10:02:17');

-- --------------------------------------------------------

--
-- Table structure for table `ci_ford`
--

CREATE TABLE `ci_ford` (
  `ford_id` int(11) NOT NULL,
  `ford_image` varchar(255) NOT NULL,
  `ford_name` varchar(255) NOT NULL,
  `ford_select` varchar(255) NOT NULL,
  `ford_ckeditor` longtext NOT NULL,
  `ford_username_create` varchar(255) NOT NULL,
  `ford_username_update` varchar(255) NOT NULL,
  `ford_datetime_create` datetime NOT NULL,
  `ford_datetime_update` datetime NOT NULL,
  `ford_ip_create` varchar(255) NOT NULL,
  `ford_ip_update` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_ford`
--

INSERT INTO `ci_ford` (`ford_id`, `ford_image`, `ford_name`, `ford_select`, `ford_ckeditor`, `ford_username_create`, `ford_username_update`, `ford_datetime_create`, `ford_datetime_update`, `ford_ip_create`, `ford_ip_update`) VALUES
(4, 'company.png', 'test1', '1', '<p>\r\n	abccc1</p>\r\n', '1', 'admin', '2016-10-22 06:54:29', '2021-09-24 08:09:41', '::1', '::1'),
(5, 'career.png', 'fsdafsaddf', '1', '<p>\r\n	fsdfsdaffds</p>\r\n', '1', 'admin', '2016-10-22 07:25:39', '2021-09-24 08:09:52', '::1', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `ci_form`
--

CREATE TABLE `ci_form` (
  `form_id` int(11) NOT NULL,
  `category_form_id` int(11) NOT NULL,
  `form_file` varchar(255) NOT NULL,
  `form_name` varchar(255) NOT NULL,
  `form_description` varchar(255) NOT NULL,
  `form_datetime_create` datetime NOT NULL,
  `form_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_form`
--

INSERT INTO `ci_form` (`form_id`, `category_form_id`, `form_file`, `form_name`, `form_description`, `form_datetime_create`, `form_datetime_update`) VALUES
(1, 1, 'bg-vision.jpg', 'test01', 'test test test', '2022-09-28 11:29:01', '2022-09-28 11:36:36'),
(2, 2, 'bg-vision1.jpg', 'test01', 'test02', '2022-10-06 11:45:55', '2022-10-06 11:45:55');

-- --------------------------------------------------------

--
-- Table structure for table `ci_idp`
--

CREATE TABLE `ci_idp` (
  `idp_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `skill_id` int(11) NOT NULL,
  `idp_skill_name` varchar(255) NOT NULL,
  `idp_skill_result` text NOT NULL,
  `idp_datetime_create` datetime NOT NULL,
  `idp_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_idp`
--

INSERT INTO `ci_idp` (`idp_id`, `profile_id`, `skill_id`, `idp_skill_name`, `idp_skill_result`, `idp_datetime_create`, `idp_datetime_update`) VALUES
(1, 1, 1, 'ทดสอบ', 'ทดสอบ ผลการพัฒนา', '2022-09-30 15:35:36', '2022-09-30 15:35:36'),
(2, 1, 2, 'ทดสอบ', 'ทดสอบ ผลการพัฒนา', '2022-09-30 15:35:53', '2022-09-30 15:35:53'),
(3, 1, 3, 'ทดสอบ', 'ทดสอบ ผลการพัฒนา', '2022-09-30 15:36:06', '2022-09-30 15:36:06'),
(4, 1, 4, 'ทดสอบ', 'ทดสอบ ผลการพัฒนา', '2022-09-30 15:36:18', '2022-09-30 15:36:18'),
(5, 2, 1, 'ทดสอบ', 'ทดสอบ ผลการพัฒนา', '2022-10-06 11:38:39', '2022-10-06 11:38:39');

-- --------------------------------------------------------

--
-- Table structure for table `ci_level_planning_your_project`
--

CREATE TABLE `ci_level_planning_your_project` (
  `level_planning_your_project_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `level_planning_your_project_embed_image` varchar(255) NOT NULL,
  `level_planning_your_project_embed_youtube` varchar(255) NOT NULL,
  `level_planning_your_project_name` varchar(255) NOT NULL,
  `level_planning_your_project_description` varchar(255) NOT NULL,
  `level_planning_your_project_datetime_create` datetime NOT NULL,
  `level_planning_your_project_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_level_planning_your_project`
--

INSERT INTO `ci_level_planning_your_project` (`level_planning_your_project_id`, `profile_id`, `level_planning_your_project_embed_image`, `level_planning_your_project_embed_youtube`, `level_planning_your_project_name`, `level_planning_your_project_description`, `level_planning_your_project_datetime_create`, `level_planning_your_project_datetime_update`) VALUES
(1, 1, 'bg-vision1.jpg', 'https://youtu.be/vBcHNA4Hc4Y', 'ขั้นต้น', 'test', '2022-10-10 14:10:58', '2022-10-10 15:22:09');

-- --------------------------------------------------------

--
-- Table structure for table `ci_log_login`
--

CREATE TABLE `ci_log_login` (
  `log_login_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `log_login_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_log_login`
--

INSERT INTO `ci_log_login` (`log_login_id`, `profile_id`, `log_login_datetime_create`) VALUES
(1, 1, '2022-10-07 16:04:01'),
(2, 1, '2022-10-07 16:16:14'),
(3, 1, '2022-10-10 09:17:11'),
(4, 1, '2022-10-10 13:33:39'),
(5, 1, '2022-10-12 09:16:59'),
(6, 1, '2022-10-12 17:31:40'),
(7, 1, '2022-10-14 09:25:17'),
(8, 1, '2022-10-14 12:46:46'),
(9, 1, '2022-10-14 17:56:18'),
(10, 1, '2022-10-14 19:01:08'),
(11, 1, '2022-10-17 10:08:51'),
(12, 1, '2022-10-18 10:17:37'),
(13, 2, '2022-11-08 10:04:46'),
(14, 2, '2022-11-11 08:25:54'),
(15, 2, '2022-11-11 10:25:11'),
(16, 1, '2022-11-16 10:05:26'),
(17, 2, '2022-11-16 13:59:25');

-- --------------------------------------------------------

--
-- Table structure for table `ci_making_plan`
--

CREATE TABLE `ci_making_plan` (
  `making_plan_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `making_plan_occupation1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `making_plan_person11` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `making_plan_study11` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `making_plan_study_term11` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `making_plan_term_other11` text COLLATE utf8_unicode_ci NOT NULL,
  `making_plan_person12` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `making_plan_study12` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `making_plan_study_term12` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `making_plan_term_other12` text COLLATE utf8_unicode_ci NOT NULL,
  `making_plan_person13` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `making_plan_study13` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `making_plan_study_term13` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `making_plan_term_other13` text COLLATE utf8_unicode_ci NOT NULL,
  `making_plan_occupation2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `making_plan_person21` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `making_plan_study21` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `making_plan_study_term21` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `making_plan_term_other21` text COLLATE utf8_unicode_ci NOT NULL,
  `making_plan_person22` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `making_plan_study22` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `making_plan_study_term22` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `making_plan_term_other22` text COLLATE utf8_unicode_ci NOT NULL,
  `making_plan_person23` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `making_plan_study23` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `making_plan_study_term23` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `making_plan_term_other23` text COLLATE utf8_unicode_ci NOT NULL,
  `making_plan_occupation3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `making_plan_person31` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `making_plan_study31` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `making_plan_study_term31` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `making_plan_term_other31` text COLLATE utf8_unicode_ci NOT NULL,
  `making_plan_person32` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `making_plan_study32` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `making_plan_study_term32` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `making_plan_term_other32` text COLLATE utf8_unicode_ci NOT NULL,
  `making_plan_person33` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `making_plan_study33` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `making_plan_study_term33` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `making_plan_term_other33` text COLLATE utf8_unicode_ci NOT NULL,
  `making_plan_datetime_create` datetime NOT NULL,
  `making_plan_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_making_plan`
--

INSERT INTO `ci_making_plan` (`making_plan_id`, `profile_id`, `making_plan_occupation1`, `making_plan_person11`, `making_plan_study11`, `making_plan_study_term11`, `making_plan_term_other11`, `making_plan_person12`, `making_plan_study12`, `making_plan_study_term12`, `making_plan_term_other12`, `making_plan_person13`, `making_plan_study13`, `making_plan_study_term13`, `making_plan_term_other13`, `making_plan_occupation2`, `making_plan_person21`, `making_plan_study21`, `making_plan_study_term21`, `making_plan_term_other21`, `making_plan_person22`, `making_plan_study22`, `making_plan_study_term22`, `making_plan_term_other22`, `making_plan_person23`, `making_plan_study23`, `making_plan_study_term23`, `making_plan_term_other23`, `making_plan_occupation3`, `making_plan_person31`, `making_plan_study31`, `making_plan_study_term31`, `making_plan_term_other31`, `making_plan_person32`, `making_plan_study32`, `making_plan_study_term32`, `making_plan_term_other32`, `making_plan_person33`, `making_plan_study33`, `making_plan_study_term33`, `making_plan_term_other33`, `making_plan_datetime_create`, `making_plan_datetime_update`) VALUES
(1, 1, 'กก', 'กก', 'ศึกษาด้วยตนเอง', 'อื่นๆ', 'กก', 'กก', 'ศึกษาจากหลักสูตร/บุคคลภายนอกซึ่งจัดหาเอง', 'อื่นๆ', 'กก', 'กก', 'ศึกษาจากหลักสูตรเพิ่มเติมซึ่งโครงการทุนฯ จัดเตรียมให้', 'อื่นๆ', 'กก', 'กก', 'กก', 'ศึกษาจากหลักสูตร/บุคคลภายนอกซึ่งจัดหาเอง', 'อื่นๆ', 'กก', 'กก', 'ศึกษาจากหลักสูตรเพิ่มเติมซึ่งโครงการทุนฯ จัดเตรียมให้', 'อื่นๆ', 'กก', 'กก', 'ศึกษาด้วยตนเอง', 'อื่นๆ', 'กก', 'กก', 'กก', 'ศึกษาจากหลักสูตรเพิ่มเติมของสถานศึกษา', 'อื่นๆ', 'กก', '', 'ศึกษาจากหลักสูตรเพิ่มเติมซึ่งโครงการทุนฯ จัดเตรียมให้', 'อื่นๆ', 'กก', '', 'ศึกษาจากหลักสูตรเพิ่มเติมของสถานศึกษา', 'อื่นๆ', 'กก', '2022-09-21 16:32:20', '2022-09-21 16:32:20');

-- --------------------------------------------------------

--
-- Table structure for table `ci_my_message`
--

CREATE TABLE `ci_my_message` (
  `my_message_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `webboard_id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `my_message_answer` varchar(255) NOT NULL,
  `my_message_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_my_message`
--

INSERT INTO `ci_my_message` (`my_message_id`, `profile_id`, `webboard_id`, `user_id`, `my_message_answer`, `my_message_datetime_create`) VALUES
(1, 1, 2, '', 'ทดสอบครับ', '2022-10-14 13:54:30'),
(2, 0, 2, '1', 'Test123', '2022-10-14 14:24:03'),
(3, 1, 2, '', 'ทดสอบครับ', '2022-10-14 14:41:08'),
(4, 1, 2, '', 'ทดสอบครับ', '2022-10-14 14:42:10'),
(5, 0, 2, '1', 'Test Again', '2022-10-14 14:47:23'),
(6, 1, 2, '', 'Abc', '2022-10-14 19:15:46'),
(7, 0, 2, '1', 'Test', '2022-10-14 19:19:17'),
(8, 1, 2, '', 'ทดสอบสำเร็จ', '2022-10-17 10:09:16'),
(9, 2, 3, '', 'Test', '2022-11-11 08:43:29'),
(10, 2, 3, '1', 'Test123', '2022-11-11 08:43:44'),
(11, 2, 3, '', 'Test', '2022-11-11 08:43:48'),
(12, 2, 3, '', 'abc', '2022-11-11 08:44:18'),
(13, 2, 3, '1', 'def', '2022-11-11 08:44:29'),
(14, 2, 3, '', 'abc', '2022-11-11 08:44:34'),
(15, 2, 3, '1', 'abc', '2022-11-11 08:47:59'),
(16, 2, 3, '', 'abc', '2022-11-11 08:48:12'),
(17, 2, 3, '', 'aaa', '2022-11-11 08:48:23'),
(18, 2, 3, '', 'ford', '2022-11-11 08:49:34'),
(19, 2, 3, '', 'ford', '2022-11-11 08:49:59'),
(20, 2, 3, '', 'test', '2022-11-11 08:50:16'),
(21, 2, 3, '', 'test', '2022-11-11 08:50:21'),
(22, 2, 3, '', 'test', '2022-11-11 08:50:24'),
(23, 2, 3, '', 'abc', '2022-11-11 08:51:42'),
(24, 2, 3, '1', 'test', '2022-11-11 08:51:55'),
(25, 2, 3, '', 'aaa', '2022-11-11 08:52:06'),
(26, 2, 4, '', 'test', '2022-11-11 08:54:15'),
(27, 2, 4, '1', 'abc', '2022-11-11 08:54:26'),
(28, 2, 4, '', 'def', '2022-11-11 08:54:34'),
(29, 2, 4, '', 'abc', '2022-11-11 08:59:40'),
(30, 2, 4, '1', 'test', '2022-11-11 08:59:58'),
(31, 2, 4, '', 'aaa', '2022-11-11 09:00:12'),
(32, 2, 4, '1', 'test', '2022-11-11 09:00:20'),
(33, 2, 4, '', 'bbb', '2022-11-11 09:00:32');

-- --------------------------------------------------------

--
-- Table structure for table `ci_page_diary`
--

CREATE TABLE `ci_page_diary` (
  `page_diary_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `page_diary_life1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_money_from_home1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_study1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_relation1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_happy1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_note1` text COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_life2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_money_from_home2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_study2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_relation2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_happy2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_note2` text COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_life_other1` text COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_money_from_home_other1` text COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_study_other1` text COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_relation_other1` text COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_happy_other1` text COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_note_other1` text COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_life_other2` text COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_money_from_home_other2` text COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_study_other2` text COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_relation_other2` text COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_happy_other2` text COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_note_other2` text COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_life2_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `page_diary_money_from_home2_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `page_diary_study2_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `page_diary_relation2_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `page_diary_happy2_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `page_diary_note2_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `page_diary_life_other2_1` text COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_money_from_home_other2_1` text COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_study_other2_1` text COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_relation_other2_1` text COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_happy_other2_1` text COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_money_from_home2_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `page_diary_note_other2_1` text COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_life2_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `page_diary_study2_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `page_diary_relation2_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `page_diary_happy2_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `page_diary_note2_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `page_diary_life_other2_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `page_diary_money_from_home_other2_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `page_diary_study_other2_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `page_diary_relation_other2_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `page_diary_happy_other2_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `page_diary_note_other2_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `page_diary_life3_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `page_diary_money_from_home3_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `page_diary_study3_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `page_diary_relation3_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `page_diary_happy3_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `page_diary_note3_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `page_diary_life_other3_1` text COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_money_from_home_other3_1` text COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_study_other3_1` text COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_relation_other3_1` text COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_happy_other3_1` text COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_note_other3_1` text COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_life3_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `page_diary_money_from_home3_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `page_diary_study3_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `page_diary_relation3_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `page_diary_happy3_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `page_diary_note3_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `page_diary_life_other3_2` text COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_money_from_home_other3_2` text COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_study_other3_2` text COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_relation_other3_2` text COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_happy_other3_2` text COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_note_other3_2` text COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_datetime_create` datetime NOT NULL,
  `page_diary_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_page_diary`
--

INSERT INTO `ci_page_diary` (`page_diary_id`, `profile_id`, `page_diary_life1`, `page_diary_money_from_home1`, `page_diary_study1`, `page_diary_relation1`, `page_diary_happy1`, `page_diary_note1`, `page_diary_life2`, `page_diary_money_from_home2`, `page_diary_study2`, `page_diary_relation2`, `page_diary_happy2`, `page_diary_note2`, `page_diary_life_other1`, `page_diary_money_from_home_other1`, `page_diary_study_other1`, `page_diary_relation_other1`, `page_diary_happy_other1`, `page_diary_note_other1`, `page_diary_life_other2`, `page_diary_money_from_home_other2`, `page_diary_study_other2`, `page_diary_relation_other2`, `page_diary_happy_other2`, `page_diary_note_other2`, `page_diary_life2_1`, `page_diary_money_from_home2_1`, `page_diary_study2_1`, `page_diary_relation2_1`, `page_diary_happy2_1`, `page_diary_note2_1`, `page_diary_life_other2_1`, `page_diary_money_from_home_other2_1`, `page_diary_study_other2_1`, `page_diary_relation_other2_1`, `page_diary_happy_other2_1`, `page_diary_money_from_home2_2`, `page_diary_note_other2_1`, `page_diary_life2_2`, `page_diary_study2_2`, `page_diary_relation2_2`, `page_diary_happy2_2`, `page_diary_note2_2`, `page_diary_life_other2_2`, `page_diary_money_from_home_other2_2`, `page_diary_study_other2_2`, `page_diary_relation_other2_2`, `page_diary_happy_other2_2`, `page_diary_note_other2_2`, `page_diary_life3_1`, `page_diary_money_from_home3_1`, `page_diary_study3_1`, `page_diary_relation3_1`, `page_diary_happy3_1`, `page_diary_note3_1`, `page_diary_life_other3_1`, `page_diary_money_from_home_other3_1`, `page_diary_study_other3_1`, `page_diary_relation_other3_1`, `page_diary_happy_other3_1`, `page_diary_note_other3_1`, `page_diary_life3_2`, `page_diary_money_from_home3_2`, `page_diary_study3_2`, `page_diary_relation3_2`, `page_diary_happy3_2`, `page_diary_note3_2`, `page_diary_life_other3_2`, `page_diary_money_from_home_other3_2`, `page_diary_study_other3_2`, `page_diary_relation_other3_2`, `page_diary_happy_other3_2`, `page_diary_note_other3_2`, `page_diary_datetime_create`, `page_diary_datetime_update`) VALUES
(1, 1, '1', '2', '3', '4', '5', 'test11', '4', '3', '2', '1', '2', 'test 12', '', '', '', '', 'test', '', 'test', '', '', '', '', '', '2', '3', '4', '1', '2', 'test 31', '', '', '', 'test', '', '4', '', '3', '5', '1', '2', 'test 22', '', '', 'test', '', '', '', '5', '2', '3', '4', '1', 'test 31', 'test', '', '', '', '', '', '5', '5', '2', '3', '4', 'test 32', 'test', 'test', '', '', '', '', '2022-09-21 13:57:40', '2022-11-16 13:51:45'),
(2, 2, '4', '4', '4', '4', '4', 'test', '4', '4', '4', '4', '4', 'test2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-10-06 11:37:26', '2022-10-06 11:37:38');

-- --------------------------------------------------------

--
-- Table structure for table `ci_photo_gallery`
--

CREATE TABLE `ci_photo_gallery` (
  `photo_gallery_id` int(11) NOT NULL,
  `photo_gallery_image` varchar(255) NOT NULL,
  `photo_gallery_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_photo_gallery`
--

INSERT INTO `ci_photo_gallery` (`photo_gallery_id`, `photo_gallery_image`, `photo_gallery_datetime_create`) VALUES
(1, 'image_resized.gif', '2022-10-14 15:56:23'),
(3, 'image_resized_2.gif', '2022-10-14 15:58:27'),
(5, 'image_resized_4.gif', '2022-10-14 16:03:46'),
(6, 'image_resized_5.gif', '2022-10-14 16:04:06');

-- --------------------------------------------------------

--
-- Table structure for table `ci_planning_your_project`
--

CREATE TABLE `ci_planning_your_project` (
  `planning_your_project_id` int(11) NOT NULL,
  `level_planning_your_project_id` int(11) NOT NULL,
  `planning_your_project_name` varchar(255) NOT NULL,
  `planning_your_project_file` varchar(255) NOT NULL,
  `planning_your_project_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_planning_your_project`
--

INSERT INTO `ci_planning_your_project` (`planning_your_project_id`, `level_planning_your_project_id`, `planning_your_project_name`, `planning_your_project_file`, `planning_your_project_datetime_create`) VALUES
(1, 1, 'test', '88f7a047983a85939ba0ece62c2c6ea7.mp4', '2022-10-10 14:50:31');

-- --------------------------------------------------------

--
-- Table structure for table `ci_profile`
--

CREATE TABLE `ci_profile` (
  `profile_id` int(11) NOT NULL,
  `profile_year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_year_th` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_type` enum('ศิษย์เก่า','นักเรียนทุน') COLLATE utf8_unicode_ci NOT NULL,
  `profile_model` int(11) NOT NULL,
  `profile_capital_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_card_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_prefix` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_image1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_image2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_image3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_image4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_name_th` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_surname_th` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_name_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_surname_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_name_ch` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_surname_ch` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_email_business` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_email_personal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_date_of_birth` date NOT NULL,
  `profile_weight` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_height` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_address_th` text COLLATE utf8_unicode_ci NOT NULL,
  `profile_address_en` text COLLATE utf8_unicode_ci NOT NULL,
  `profile_my_ambition` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_feilds_of_interests1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_my_goals` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_feilds_of_interests2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_my_expectation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_feilds_of_interests3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_domicile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_institute` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_faculty` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_study_plan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_province_institute` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_gpax` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profle_salary_per_person_per_month` float(10,2) NOT NULL,
  `profile_special_working_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_datetime_create` datetime NOT NULL,
  `profile_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_profile`
--

INSERT INTO `ci_profile` (`profile_id`, `profile_year`, `profile_year_th`, `profile_type`, `profile_model`, `profile_capital_type`, `profile_card_no`, `profile_gender`, `profile_prefix`, `profile_image1`, `profile_image2`, `profile_image3`, `profile_image4`, `profile_name_th`, `profile_surname_th`, `profile_name_en`, `profile_surname_en`, `profile_name_ch`, `profile_surname_ch`, `profile_email_business`, `profile_email_personal`, `profile_mobile`, `profile_date_of_birth`, `profile_weight`, `profile_height`, `profile_address_th`, `profile_address_en`, `profile_my_ambition`, `profile_feilds_of_interests1`, `profile_my_goals`, `profile_feilds_of_interests2`, `profile_my_expectation`, `profile_feilds_of_interests3`, `profile_domicile`, `profile_institute`, `profile_faculty`, `profile_study_plan`, `profile_province_institute`, `profile_gpax`, `profle_salary_per_person_per_month`, `profile_special_working_status`, `profile_password`, `profile_datetime_create`, `profile_datetime_update`) VALUES
(1, '2022', '2565', 'ศิษย์เก่า', 10, 'ป.ตรี', '3100203440521', 'ชาย', 'นาย', '0adb1de2c9b66c5ce51503b60af8aa8e.png', '', '', '', 'สิทธิพร', 'ตรองวิเชียร', 'Sitiporn', 'Trongwichien', 'Ford', 'Fuji', 'nirvanaford94@gmail.com', 'sitiporn@orange-thailand.com', '0963203829', '1979-06-14', '73', '167', '366/66 ซ.สะพานขวา ถ.ประชาราษฎร์ 2 บางซื่อ กทม', '366/66 Soi Sapankhwa Pracharat 2 Road Bangsue Bangkok', 'Ambition', 'Interests 1', 'Goals', 'Interests 2', 'Expectation', 'Interests 3', 'กทม', 'ม.ธุรกิจบัณฑิตย์', 'คอมพิวเตอร์ธุรกิจ', 'คอมพิวเตอร์ธุรกิจ', 'กทม', '3.59', 10000.00, 'ไม่ทำ', 'qwaszx', '2022-09-14 17:09:01', '2022-10-18 10:24:02'),
(2, '2023', '2566', 'ศิษย์เก่า', 11, 'ปวส', '3100203440513', 'ชาย', 'นาย', 'f8b074473bae723aea746f4983d62cc0.png', '', '', '', 'Ford', 'Fuji', 'Ford', 'Fuji', 'Ford', 'Fuji', 'nirvanaford94@gmail.com', 'nirvanaford94@gmail.com', '0999999999', '1979-06-14', '75', '167', 'Abc', 'Def', 'Test', 'Test', 'Test', 'Test', 'Test', 'Test', 'กทม', 'เทคนิควิมล', '', 'คอมพิวเตอร์ธุรกิจ', 'Bangkok', '3.59', 10000.00, 'ไม่ทำ', 'qwaszx', '2022-10-06 11:30:26', '2022-11-11 10:02:17'),
(7, '2022', '2565', 'ศิษย์เก่า', 10, 'ป.ตรี', '3100203445555', 'ชาย', 'นาย', '', '', '', '', 'อัตพร', 'ตรองวิเชียร', 'Sitiporn', 'Trongwichien', '', '', '', 'abc@abc.com', '990943010', '0000-00-00', '73', '167', '', '', '', '', '', '', '', '', 'กทม', 'ม.ธุรกิจบัณฑิตย์', 'เทคโนโลยีสารสนเทศ', 'คอมพิวเตอร์ธุรกิจ', 'กทม', '3.69', 15000.00, 'ทำ', 'qwaszx', '2022-11-11 10:07:57', '2022-11-11 10:07:57'),
(8, '2022', '2565', 'ศิษย์เก่า', 10, 'ป.ตรี', '3100203445555', 'ชาย', 'นาย', '', '', '', '', 'อัตพร', 'ตรองวิเชียร', 'Sitiporn', 'Trongwichien', '', '', '', 'abc@abc.com', '990943010', '0000-00-00', '73', '167', '', '', '', '', '', '', '', '', 'กทม', 'ม.ธุรกิจบัณฑิตย์', 'เทคโนโลยีสารสนเทศ', 'คอมพิวเตอร์ธุรกิจ', 'กทม', '3.69', 15000.00, 'ทำ', 'qwaszx', '2022-11-11 10:08:36', '2022-11-11 10:08:36'),
(9, '2022', '2565', 'นักเรียนทุน', 10, 'ป.ตรี', '3100203445555', 'ชาย', 'นาย', '', '', '', '', 'สิทธิพร', 'ตรองวิเชียร', 'Sitiporn', 'Trongwichien', '', '', '', 'abc@abc.com', '990943010', '2022-11-01', '73', '167', '', '', '', '', '', '', '', '', 'กทม', 'ม.ธุรกิจบัณฑิตย์', 'เทคโนโลยีสารสนเทศ', 'คอมพิวเตอร์ธุรกิจ', 'กทม', '3.69', 15000.00, 'ทำ', 'qwaszx', '2022-11-16 09:45:28', '2022-11-16 09:49:55');

-- --------------------------------------------------------

--
-- Table structure for table `ci_profile_update`
--

CREATE TABLE `ci_profile_update` (
  `profile_update_id` int(11) NOT NULL,
  `profile_update_image` varchar(255) NOT NULL,
  `profile_update_name` varchar(255) NOT NULL,
  `profile_update_description` varchar(1000) NOT NULL,
  `profile_update_detail` text NOT NULL,
  `profile_update_datetime_create` datetime NOT NULL,
  `profile_update_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_profile_update`
--

INSERT INTO `ci_profile_update` (`profile_update_id`, `profile_update_image`, `profile_update_name`, `profile_update_description`, `profile_update_detail`, `profile_update_datetime_create`, `profile_update_datetime_update`) VALUES
(1, 'cer.png', 'test456', 'test123', '<p>\r\n	test789</p>\r\n', '2022-10-14 16:46:41', '2022-10-14 16:47:30'),
(2, 'btn-shopee.jpg', 'test', 'test', '<p>\r\n	test</p>\r\n', '2022-10-14 16:48:24', '2022-10-14 16:48:24');

-- --------------------------------------------------------

--
-- Table structure for table `ci_project`
--

CREATE TABLE `ci_project` (
  `project_id` int(11) NOT NULL,
  `category_project_id` int(11) NOT NULL,
  `project_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `project_datetime_create` datetime NOT NULL,
  `project_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_project`
--

INSERT INTO `ci_project` (`project_id`, `category_project_id`, `project_status`, `project_datetime_create`, `project_datetime_update`) VALUES
(1, 1, 'ตรวจสอบก่อนส่ง', '2022-10-05 14:11:33', '2022-10-05 14:11:33'),
(2, 1, 'ข้อมูลสมาชิกในทีมครบถ้วน', '2022-10-05 14:12:45', '2022-10-05 14:12:45'),
(3, 3, 'ตรวจสอบก่อนส่ง', '2022-10-06 11:57:43', '2022-10-06 11:57:43');

-- --------------------------------------------------------

--
-- Table structure for table `ci_q_a`
--

CREATE TABLE `ci_q_a` (
  `q_a_id` int(11) NOT NULL,
  `q_a_question` varchar(255) NOT NULL,
  `q_a_answer` text NOT NULL,
  `q_a_datetime_create` datetime NOT NULL,
  `q_a_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_q_a`
--

INSERT INTO `ci_q_a` (`q_a_id`, `q_a_question`, `q_a_answer`, `q_a_datetime_create`, `q_a_datetime_update`) VALUES
(1, 'คำถามที่ 1', '<h5 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; font-weight: 500; line-height: 1.75; font-size: 1rem; color: rgb(0, 140, 68); font-family: Poppins, Prompt, sans-serif; background-color: rgb(248, 248, 250);\">\r\n	Sed lacinia tortor non interdum tempus.</h5>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; line-height: 2; color: rgb(0, 0, 0); font-family: Poppins, Prompt, sans-serif; font-size: 14px; background-color: rgb(248, 248, 250);\">\r\n	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce porttitor diam sed enim posuere rutrum. Ut sapien ex, vehicula vitae molestie volutpat, bibendum ac lorem. Suspendisse aliquam efficitur ligula, sit amet blandit diam consequat id. Phasellus a vestibulum tellus. Donec molestie, purus nec rutrum convallis, sem dui maximus erat, ac pellentesque nulla diam quis orci. Sed nulla augue, euismod ac facilisis in, pellentesque ac velit. Proin dignissim at augue ac hendrerit. Proin vitae facilisis ligula.</p>\r\n<h5 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; font-weight: 500; line-height: 1.75; font-size: 1rem; color: rgb(0, 140, 68); font-family: Poppins, Prompt, sans-serif; background-color: rgb(248, 248, 250);\">\r\n	Vestibulum tempus diam quis mi feugiat congue.</h5>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; line-height: 2; color: rgb(0, 0, 0); font-family: Poppins, Prompt, sans-serif; font-size: 14px; background-color: rgb(248, 248, 250);\">\r\n	Pellentesque a enim ultricies, feugiat purus quis, tristique urna. Nam eu orci a eros sodales iaculis non ut odio. Proin at ante ut risus rutrum egestas at et tellus. Morbi lacinia dui ac sodales malesuada. Proin euismod lorem sit amet ante vestibulum, non maximus elit molestie.</p>\r\n', '2022-09-28 14:26:30', '2022-10-06 11:58:40'),
(2, 'คำถามที่ 2', '<h5 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; font-weight: 500; line-height: 1.75; font-size: 1rem; color: rgb(0, 140, 68); font-family: Poppins, Prompt, sans-serif; background-color: rgb(248, 248, 250);\">\r\n	Sed lacinia tortor non interdum tempus.</h5>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; line-height: 2; color: rgb(0, 0, 0); font-family: Poppins, Prompt, sans-serif; font-size: 14px; background-color: rgb(248, 248, 250);\">\r\n	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce porttitor diam sed enim posuere rutrum. Ut sapien ex, vehicula vitae molestie volutpat, bibendum ac lorem. Suspendisse aliquam efficitur ligula, sit amet blandit diam consequat id. Phasellus a vestibulum tellus. Donec molestie, purus nec rutrum convallis, sem dui maximus erat, ac pellentesque nulla diam quis orci. Sed nulla augue, euismod ac facilisis in, pellentesque ac velit. Proin dignissim at augue ac hendrerit. Proin vitae facilisis ligula.</p>\r\n<h5 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; font-weight: 500; line-height: 1.75; font-size: 1rem; color: rgb(0, 140, 68); font-family: Poppins, Prompt, sans-serif; background-color: rgb(248, 248, 250);\">\r\n	Vestibulum tempus diam quis mi feugiat congue.</h5>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; line-height: 2; color: rgb(0, 0, 0); font-family: Poppins, Prompt, sans-serif; font-size: 14px; background-color: rgb(248, 248, 250);\">\r\n	Pellentesque a enim ultricies, feugiat purus quis, tristique urna. Nam eu orci a eros sodales iaculis non ut odio. Proin at ante ut risus rutrum egestas at et tellus. Morbi lacinia dui ac sodales malesuada. Proin euismod lorem sit amet ante vestibulum, non maximus elit molestie.</p>\r\n', '2022-09-28 14:26:48', '2022-09-28 14:26:48'),
(3, 'คำถามที่ 3', '<p>\r\n	test</p>\r\n', '2022-10-06 11:46:45', '2022-10-06 11:46:45');

-- --------------------------------------------------------

--
-- Table structure for table `ci_session`
--

CREATE TABLE `ci_session` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_session`
--

INSERT INTO `ci_session` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('01a7427122e0789f0c718e6e7469b0fb3410fa79', '147.92.179.114', 1666774269, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363737343236393b),
('061ff86b6bdd38d328ae0f6fd1b18e1d6fbbb712', '27.55.77.55', 1667292129, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636373239323132393b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('09a219fc4c2268da18b146e1b546a06a1d238457', '49.228.38.56', 1668139695, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383133393639353b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('0a17d6000b299d6b09efef0e9580ca3aa86ea58b', '147.92.179.105', 1667884569, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636373838343536393b6c616e677c733a323a227468223b),
('0b4b6979afa37ba11e28464cb67f5afcf7dd33f8', '147.92.179.114', 1666774207, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363737343230373b6c616e677c733a323a227468223b),
('0d70b312e4ad5b02652f0089a90991d1e45228b9', '125.24.170.146', 1667207914, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636373230373930383b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('0f9e9da76293c894feb924f92122925fb54d7b6f', '147.92.179.106', 1671931937, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637313933313933373b),
('1207bc2a62b2934ce27945c2a1424421ce395a84', '27.55.77.55', 1667285660, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636373238353636303b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('13e96028c395844049d8c2c190882b9bd2818be5', '147.92.179.109', 1667884573, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636373838343537333b),
('155004e61b291670695b346539a4c66c5d8cf81a', '147.92.179.116', 1667295889, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636373239353838383b6c616e677c733a323a227468223b),
('174362918cc20f178a5996b7b301eb63b3030a94', '1.46.85.59', 1668137013, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383133373031333b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('19apcphnok8raie99aaajmlpq1gifc7b', '::1', 1668567926, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383536373932363b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('1bb2348c9a7b29d2c7a5d9f27a160e6d23fa3da5', '49.228.34.13', 1671608790, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637313630383735373b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('1cc18fdda0d2050cc74b2392cc60dc0ae195c9fb', '147.92.179.110', 1666925493, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363932353439333b6c616e677c733a323a227468223b),
('1e87d270526a97e6202d400c3054dd329b29ff35', '1.46.85.59', 1668588261, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383538383236313b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('1f015d925f2e12a9b79deb2c3747e31f898e95f5', '27.55.77.55', 1667285347, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636373238353334373b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('204df9bac3d27c596731885bb5fd8c4a9a2c9add', '1.20.107.15', 1668652556, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383635323534333b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('20ce2b055cf0385282b9e3d719c6c624a3caf579', '27.55.77.55', 1667290683, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636373239303638333b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('26b8fbe4921b323fe59a02a8f7124ee238b8aff3', '27.55.77.55', 1667293442, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636373239333434323b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('29c446a239c68e4734bbd02bf9b0da1a74785740', '147.92.179.119', 1672891712, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637323839313731323b6c616e677c733a323a227468223b),
('2db68f2a5471eeb59982dfa96329dd74e4600c93', '1.46.137.147', 1669970387, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393937303338363b),
('2e172e0672954c0816a90ab162f8341c53aff623', '49.237.35.163', 1666782340, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363738323138303b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('2ifbv5ia5l1smbp323ja0qj9jkke4g55', '::1', 1668580235, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383538303233353b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b70726f66696c655f69647c733a313a2231223b),
('30351a4430e83efe888fa48fd97d10f1c2fde523', '147.92.179.117', 1671931938, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637313933313933373b6c616e677c733a323a227468223b),
('30cc6aaa0e250ea049b09bf4584734e9cdef389e', '27.55.77.55', 1667293444, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636373239333434323b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('36255b4dd64ba31186fa7fc0abe490cadad27ced', '1.47.2.230', 1666774180, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363737343138303b6c616e677c733a323a227468223b),
('383e40d1fa7bf34c8ea56d4c36c5c55b736e5d71', '27.55.77.55', 1667291824, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636373239313832343b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('39ac554a8e518c2db63f05843d33b381a8090cfb', '147.92.179.109', 1668135394, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383133353339343b6c616e677c733a323a227468223b),
('3f93b80ebb296b29bf43a7fae0f2a1949df9f832', '147.92.179.105', 1684727162, 0x5f5f63695f6c6173745f726567656e65726174657c693a313638343732373136323b6c616e677c733a323a227468223b),
('4043cd431cdb4beb21de5897bad50e236f354d3c', '147.92.179.106', 1667295949, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636373239353934393b6c616e677c733a323a227468223b),
('4084198b18ee15526c818d51c60085f9394ef9ca', '125.24.172.35', 1666932271, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363933323237313b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('42070b5a1373e8dd65eccefcc58006e55c3219a6', '1.46.85.59', 1668137316, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383133373331363b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b70726f66696c655f69647c733a313a2232223b),
('44f927575ea6daf6547192627e740b47dc040300', '147.92.179.111', 1668139572, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383133393537323b),
('4692e4a125874b6dc53e95b6f8d31ea85cc5f049', '1.20.107.15', 1668508029, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383530383032393b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('46ece317e2f910e2c8c3ec3ed7f3e85d9f89574a', '125.24.172.35', 1666937769, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363933373736363b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('4c01e0e063505615f2add8f128d9b5b2d4389e8e', '147.92.179.114', 1666925433, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363932353433333b6c616e677c733a323a227468223b),
('4c4f9572311c0772cf79b0158692d129d8f085c3', '49.228.38.56', 1668139695, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383133393639353b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('515164906db249d729f787bc2ebe80738f2ebf6b', '1.46.85.59', 1668136065, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383133363036353b6c616e677c733a323a227468223b70726f66696c655f69647c733a313a2232223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('527a595995be8e850e55eb0921b85fe24d07181f', '1.46.85.59', 1668588593, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383538383539333b6c616e677c733a323a227468223b70726f66696c655f69647c733a313a2232223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('52a21ce124b6c5bfaeb8d9dbb71acf0d816e7e57', '1.46.137.147', 1669955933, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393935353933333b),
('557b85d480c3d74f8e9a5d59ecc34bee9bc9f208', '27.55.77.55', 1667288191, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636373238383139313b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('58d818cb8452c6c674573dc492ee74a176b9ec5f', '1.20.107.15', 1667875617, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636373837353539313b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('5939dbacc6e1142a36a12bf7e18e76634f2e559f', '147.92.179.108', 1667346350, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636373334363335303b6c616e677c733a323a227468223b),
('5e5la253hvdgff07oksss72epec18i74', '::1', 1667881375, 0x6c616e677c733a323a227468223b5f5f63695f6c6173745f726567656e65726174657c693a313636373838313337353b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b70726f66696c655f69647c733a313a2232223b),
('5ff8221ed8b92ea18b645ec7cb27ac57a965d344', '147.92.179.109', 1667354588, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636373335343538373b6c616e677c733a323a227468223b),
('62cd158f523643b69b6043317322f57b606616a1', '27.55.77.55', 1667293087, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636373239333038373b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('65b9887c7aae263c5f70b7ec4e7f288714965249', '49.228.38.56', 1668070266, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383037303233393b6c616e677c733a323a227468223b),
('66c5171c1a0769da7457ca2b1102808bb1acaff8', '147.92.179.119', 1666844756, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363834343735363b6c616e677c733a323a227468223b),
('6sg3ebrqhu65qru6i4on59gklclpk7bp', '::1', 1667877397, 0x6c616e677c733a323a227468223b5f5f63695f6c6173745f726567656e65726174657c693a313636373837373339373b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b70726f66696c655f69647c733a313a2232223b),
('73a3dd812049c384d0ae424dfa4936476714b468', '1.46.85.59', 1668131374, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383133313337343b6c616e677c733a323a227468223b70726f66696c655f69647c733a313a2232223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('75b4706394252f69a52828cc2485ac351d7f76f7', '27.55.77.55', 1667292517, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636373239323531373b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('76c2e22920368555ce3e76fb2b53ca3aeb337737', '1.46.85.59', 1668130374, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383133303337343b6c616e677c733a323a227468223b70726f66696c655f69647c733a313a2232223b),
('76prej7dah9u9ipb3n7lf9ludalq85j4', '::1', 1667881835, 0x6c616e677c733a323a227468223b5f5f63695f6c6173745f726567656e65726174657c693a313636373838313638353b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b70726f66696c655f69647c733a313a2232223b),
('79018faed05ebce8fe60c807c012a771c6ac2b52', '1.46.85.59', 1668583461, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383538333436313b6c616e677c733a323a227468223b70726f66696c655f69647c733a313a2232223b),
('7961376e29f9416fc0e478d6561278c9233536be', '1.46.85.59', 1668137647, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383133373634373b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b70726f66696c655f69647c733a313a2232223b),
('7ab054a550054603fb10c3e470ee8f57f44e0bed', '1.46.85.59', 1668761532, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383736313532303b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('7e48dabe939b61256fc9eceeba63212fd94a5b2d', '49.228.34.13', 1671608757, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637313630383735373b6c616e677c733a323a227468223b),
('7f03d365e1920f05d5728009f132e9939f15efdf', '27.55.77.55', 1667283636, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636373238333633363b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('7f57f5d9c3983e6d39a38c46360fb352c30632fa', '1.20.107.15', 1667812585, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636373831323531363b6c616e677c733a323a227468223b),
('8628cd077cbb9d09739fbeacc5467d4cf93d615e', '1.46.85.59', 1668134589, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383133343538393b6c616e677c733a323a227468223b70726f66696c655f69647c733a313a2232223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('87df74d0b4c1ce1ee046c2e5d94332fdb5a1c298', '1.47.9.47', 1667362815, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636373336323739323b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('8bemetchqhv7feakvqo2h8kj1jq6o1ue', '::1', 1667876084, 0x6c616e677c733a323a227468223b5f5f63695f6c6173745f726567656e65726174657c693a313636373837363038343b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('8c3ff65454b0a3f7c9064e6e12a89cf518fc8394', '1.46.85.59', 1668139545, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383133393534333b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b70726f66696c655f69647c733a313a2232223b),
('916gd1hgbehhpv5e45gdumj7vhecgktg', '::1', 1668579217, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383537393231373b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b70726f66696c655f69647c733a313a2231223b),
('9783pkt732no0uqvluk7ao6v1bah1jv0', '::1', 1667881059, 0x6c616e677c733a323a227468223b5f5f63695f6c6173745f726567656e65726174657c693a313636373838313035393b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b70726f66696c655f69647c733a313a2232223b),
('9bc59ae6aaafa0dfb7d1bdad1c3078f80925afd9', '1.46.85.59', 1668588263, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383538383236333b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('9d8edee9d21e679ac684d86e87b906211745751c', '147.92.179.119', 1666844760, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363834343736303b),
('a2e1be337c1f0d635aac76cf7ef4e6b0a06ee25e', '1.46.85.59', 1668133447, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383133333434373b6c616e677c733a323a227468223b70726f66696c655f69647c733a313a2232223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('a4a0f9926295f0acff420ba276a1e5531ac4c3ef', '1.46.85.59', 1668588254, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383538383235343b6c616e677c733a323a227468223b70726f66696c655f69647c733a313a2232223b),
('a560e74ae2fb4a6b1aea12a432942cd9800227af', '1.46.85.59', 1668131940, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383133313934303b6c616e677c733a323a227468223b70726f66696c655f69647c733a313a2232223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('ae01586e2e2932f21ba6b7690b80e5900b29a567', '125.24.170.146', 1667207908, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636373230373930383b6c616e677c733a323a227468223b),
('af3955effdb9b3c413806f5d13d72d02ac6061fb', '1.46.85.59', 1668132666, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383133323636363b6c616e677c733a323a227468223b70726f66696c655f69647c733a313a2232223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('b16661ce416b11ac67bfc165d95ceb54b10eacdf', '49.237.35.163', 1666774281, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363737343238313b6c616e677c733a323a227468223b),
('b34307c9b2b385be505f35834b6b4399eb14f9f7', '147.92.179.115', 1666921874, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363932313837343b6c616e677c733a323a227468223b),
('b38575ac6b4bc29f96c293137bc68c82bd69d963', '125.24.172.35', 1666937924, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363933373736363b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('bc457b96eeae7af1e3e1f304bee2b66f8938bd89', '1.46.85.59', 1668135684, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383133353638343b6c616e677c733a323a227468223b70726f66696c655f69647c733a313a2232223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('bc464l298so79f37mm6nkhnrl008b4fj', '::1', 1668581481, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383538313438313b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b70726f66696c655f69647c733a313a2231223b),
('bc5bda435e91461d38c4bb399c937c800bb516f5', '1.20.107.15', 1668664168, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383636343032383b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('bsp86hg8veou1dm3tia642rl0ogo1ei3', '::1', 1667878763, 0x6c616e677c733a323a227468223b5f5f63695f6c6173745f726567656e65726174657c693a313636373837383736333b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b70726f66696c655f69647c733a313a2232223b),
('c1399dc7ff36cd0e10dda94a7a90782f0eeac333', '147.92.179.118', 1671608272, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637313630383237323b),
('c3c15d1f457fbe58e58d9a40cf4d33ce8868d4b9', '27.55.77.55', 1667287416, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636373238373431363b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('c4e41194c804edda412e98bdbd9f858c4048c4d2', '1.10.211.241', 1684739021, 0x5f5f63695f6c6173745f726567656e65726174657c693a313638343733393032303b6c616e677c733a323a227468223b),
('c57638d1a8487e499b4f72e71a927d6b696981b1', '147.92.179.116', 1667295894, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636373239353839333b),
('c5cd02423e72545f83356f5f7758270a18867fe4', '1.20.107.15', 1668508029, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383530383032393b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('c821954e5e348a82bb844753c6006cf07d26876d', '147.92.179.119', 1672891749, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637323839313734373b6c616e677c733a323a227468223b),
('c83667f9877001c86d5b75d46001d00749cd7cb0', '1.46.85.59', 1668131028, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383133313032383b6c616e677c733a323a227468223b70726f66696c655f69647c733a313a2232223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('cdec9d6fbfb52e149994342cda4037e070006a8c', '49.237.35.163', 1666782180, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363738323138303b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('cnj898je84l1mbdlsbbi9ttqmojuiphv', '::1', 1668566927, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383536363932373b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('d09b477eb5b481f36df82a9188aa6042ad8c798a', '1.47.2.230', 1666925614, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363932353537393b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('d45bb47d7bbaf1fca469337de5c74de000fd724d', '147.92.179.105', 1666924002, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363932343030323b6c616e677c733a323a227468223b),
('d4bc387cb5dd2efb9d70a0060f67bc9310733718', '27.55.77.55', 1667291518, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636373239313531383b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('d818488e5cb144cb74e269daa722f67a31d95283', '147.92.179.116', 1668139572, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383133393537323b),
('d9d852c34dae8ac601860ba5f4d6685fabc0c5ab', '1.46.137.148', 1672827076, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637323832373037363b6c616e677c733a323a227468223b),
('da5a87eca5ef2da2e4b4e887eb28a71a33833191', '147.92.179.110', 1666925495, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363932353439353b),
('dcbb13502447da7b01a835ad5facdc128769f71f', '1.46.85.59', 1669176575, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636393137363537353b),
('dee515b0187ef18a59be8e76b154f692e44c402c', '1.46.85.59', 1668130724, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383133303732343b6c616e677c733a323a227468223b70726f66696c655f69647c733a313a2232223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('e13dba3702c1d773ef50918bd8b4198669067537', '147.92.179.118', 1671608273, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637313630383237333b6c616e677c733a323a227468223b),
('e72865beac0d5bb0ec0b96b0a41e918a845723b1', '147.92.179.114', 1666774211, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363737343231313b),
('e7da1e37363246b5f88a874722f361b381059e63', '147.92.179.119', 1672891713, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637323839313731333b),
('e9641e252bced85f3f0e0dd123e2cdbe3ddbfe9c', '147.92.179.116', 1667295999, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636373239353939393b6c616e677c733a323a227468223b),
('eac8fa4144220a87c50e437967136d083abdcf36', '147.92.179.113', 1666925435, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363932353433353b),
('eaq6vpvnuscshp72g22cc59fnm6dttfj', '::1', 1667881685, 0x6c616e677c733a323a227468223b5f5f63695f6c6173745f726567656e65726174657c693a313636373838313638353b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b70726f66696c655f69647c733a313a2232223b),
('eb2ik71u1fhpke7fds80tgf22dnuqq8o', '::1', 1667880108, 0x6c616e677c733a323a227468223b5f5f63695f6c6173745f726567656e65726174657c693a313636373838303130383b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b70726f66696c655f69647c733a313a2232223b),
('ec6a898f4466dc3da7443708ff19ce15ac4d4644', '1.46.85.59', 1668136383, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383133363338333b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('ed3d8e01ed08c0411640f4faa5c67af76d2c3e8c', '1.46.85.59', 1668588856, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383538383539333b6c616e677c733a323a227468223b70726f66696c655f69647c733a313a2232223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('ed8b1f8389e19a1962188142abe0b1d35c232477', '147.92.179.119', 1672891774, 0x5f5f63695f6c6173745f726567656e65726174657c693a313637323839313737343b),
('eendpq55taifh7hgtf9u6c4uos7vlg7b', '::1', 1667880433, 0x6c616e677c733a323a227468223b5f5f63695f6c6173745f726567656e65726174657c693a313636373838303433333b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b70726f66696c655f69647c733a313a2232223b),
('eltp6e7ueosfe4e4q7rlk5af4r1gs9p9', '::1', 1667880738, 0x6c616e677c733a323a227468223b5f5f63695f6c6173745f726567656e65726174657c693a313636373838303733383b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b70726f66696c655f69647c733a313a2232223b),
('f1177a8146175dee95acc9cf6c2ab77dc82126d9', '147.92.179.114', 1666774267, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363737343236373b6c616e677c733a323a227468223b),
('f35ba4bf74cebaa7a6f4e5622b5186fc9086dc52', '27.55.77.55', 1667284949, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636373238343934393b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('f3783c91860a84d41e54e61462bae7069843131f', '49.237.35.163', 1666774331, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636363737343239303b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('f9a780c9a05a8ebb21f8af463c50bc6a0003373c', '1.46.85.59', 1668588257, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383538383235373b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('fa8311eb28a14ca86ed488c6942c26f4a2bf8cd8', '147.92.179.114', 1668651225, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383635313232353b),
('fb0506ba805a15b5ba32b1ec0bcfcb8f93d756ff', '27.55.77.55', 1667291217, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636373239313231373b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('fb140cda38931b3b28480c72c1c376b3e69bc94b', '1.46.85.59', 1668136686, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383133363638363b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('fb8e52a8f1913272934fcf468f5cbc912620fc9e', '1.46.85.59', 1668139543, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383133393534333b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b70726f66696c655f69647c733a313a2232223b),
('ff023a72f792714b09e47c6f4d010e36d45b769f', '1.46.85.59', 1668129946, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383132393934363b6c616e677c733a323a227468223b),
('fmcds02ls5pr2vll7df4llu8vup03cjp', '::1', 1667879118, 0x6c616e677c733a323a227468223b5f5f63695f6c6173745f726567656e65726174657c693a313636373837393131383b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b70726f66696c655f69647c733a313a2232223b),
('gghlldpemnmghev14phmvb32fe7a7ptc', '::1', 1668572294, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383537323239343b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b70726f66696c655f69647c733a313a2231223b),
('gmqks0aaq3jinsn0n66k75iaseon9ek3', '::1', 1667876663, 0x6c616e677c733a323a227468223b5f5f63695f6c6173745f726567656e65726174657c693a313636373837363636333b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('htqunt9ckh6boaindjg3v5kfsdhbe9e5', '::1', 1667879758, 0x6c616e677c733a323a227468223b5f5f63695f6c6173745f726567656e65726174657c693a313636373837393735383b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b70726f66696c655f69647c733a313a2232223b),
('i91lcvu0ov8r0r24g8lkddogni2bbl0f', '::1', 1667877738, 0x6c616e677c733a323a227468223b5f5f63695f6c6173745f726567656e65726174657c693a313636373837373733383b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b70726f66696c655f69647c733a313a2232223b),
('j1uevbhlu6ltgn865kt6aiovcb0mgk05', '::1', 1667876968, 0x6c616e677c733a323a227468223b5f5f63695f6c6173745f726567656e65726174657c693a313636373837363936383b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b70726f66696c655f69647c733a313a2232223b),
('j9pvme6ipt3l1ojch281ffm7g1no1m08', '::1', 1668567327, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383536373332373b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b),
('jo0v12a2div5nrj1odtvj0ngmi4nvv38', '::1', 1668568867, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383536383836373b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b70726f66696c655f69647c733a313a2231223b),
('ka8ulqvbjt5vsar2s2kb49s6ip7memj0', '::1', 1668579772, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383537393737323b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b70726f66696c655f69647c733a313a2231223b),
('mki5tqmqd1c43jde2fm0o49i8pvvudk4', '::1', 1668568276, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383536383237363b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b70726f66696c655f69647c733a313a2231223b),
('nm4ela6s0c0kgl53bkgbo569n8qr0gdl', '::1', 1668576938, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383537363933383b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b70726f66696c655f69647c733a313a2231223b),
('nrfulrqdutj0ehctpepf6qlgok4qmco3', '::1', 1668571478, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383537313437383b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b70726f66696c655f69647c733a313a2231223b),
('qdc221cad7tsmbnobntquf8comgb8s5u', '::1', 1668581505, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383538313438313b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b70726f66696c655f69647c733a313a2231223b),
('rudljdu207kj6q9fagv9v6p7p9l60gcf', '::1', 1668581146, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383538313134363b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b70726f66696c655f69647c733a313a2231223b),
('sta7vgq5hn2643aq47dc9ojjviah6sjp', '::1', 1667878131, 0x6c616e677c733a323a227468223b5f5f63695f6c6173745f726567656e65726174657c693a313636373837383133313b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b70726f66696c655f69647c733a313a2232223b),
('udp262j12dmnj20madkqflacm5g32852', '::1', 1668571872, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383537313837323b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b70726f66696c655f69647c733a313a2231223b),
('uet3o0pg95vmomfla1lae1i6jpghieeg', '::1', 1668571055, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636383537313035353b6c616e677c733a323a227468223b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b70726f66696c655f69647c733a313a2231223b),
('volpo3n9oqjb53ss28tqvo1k1i7b8omi', '::1', 1667878432, 0x6c616e677c733a323a227468223b5f5f63695f6c6173745f726567656e65726174657c693a313636373837383433323b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b70726f66696c655f69647c733a313a2232223b);

-- --------------------------------------------------------

--
-- Table structure for table `ci_skill`
--

CREATE TABLE `ci_skill` (
  `skill_id` int(11) NOT NULL,
  `skill_status` varchar(255) NOT NULL,
  `skill_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_skill`
--

INSERT INTO `ci_skill` (`skill_id`, `skill_status`, `skill_datetime_create`) VALUES
(1, 'ทักษะที่พัฒนาสำเร็จแล้ว', '2022-09-30 10:29:17'),
(2, 'ทักษะที่อยู่ระหว่างการพัฒนา', '2022-09-30 10:29:17'),
(3, 'ทักษะที่รอการพัฒนา', '2022-09-30 10:29:34'),
(4, 'ผู้อ่านแผนพัฒนา', '2022-09-30 10:29:34');

-- --------------------------------------------------------

--
-- Table structure for table `ci_souvenir`
--

CREATE TABLE `ci_souvenir` (
  `souvenir_id` int(11) NOT NULL,
  `category_souvenir_id` int(11) NOT NULL,
  `souvenir_image` varchar(255) NOT NULL,
  `souvenir_price` float(10,2) NOT NULL,
  `souvenir_before_discount_price` float(10,2) NOT NULL,
  `souvenir_link_contact` varchar(255) NOT NULL,
  `souvenir_datetime_create` datetime NOT NULL,
  `souvenir_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ci_souvenir_shop`
--

CREATE TABLE `ci_souvenir_shop` (
  `souvenir_shop_id` int(11) NOT NULL,
  `souvenir_shop_type` varchar(255) NOT NULL,
  `souvenir_shop_image` varchar(255) NOT NULL,
  `souvenir_shop_before_discount_price` float(10,2) NOT NULL,
  `souvenir_shop_price` float(10,2) NOT NULL,
  `souvenir_shop_contact` varchar(255) NOT NULL,
  `souvenir_shop_datetime_create` datetime NOT NULL,
  `souvenir_shop_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_souvenir_shop`
--

INSERT INTO `ci_souvenir_shop` (`souvenir_shop_id`, `souvenir_shop_type`, `souvenir_shop_image`, `souvenir_shop_before_discount_price`, `souvenir_shop_price`, `souvenir_shop_contact`, `souvenir_shop_datetime_create`, `souvenir_shop_datetime_update`) VALUES
(1, 'สั่งซื้อเสื้อโปโลโครงการทุน', 'banner-img1.jpg', 400.00, 350.50, 'https://www.sanook.com', '2022-10-10 11:55:32', '2022-10-10 13:15:35'),
(2, 'สั่งซื้อสินค้าผลงานนักเรียนทุน', 'bg-vision.jpg', 450.00, 400.75, 'https://www.hunsa.com', '2022-10-10 11:56:03', '2022-10-10 13:15:41');

-- --------------------------------------------------------

--
-- Table structure for table `ci_standardized_tests`
--

CREATE TABLE `ci_standardized_tests` (
  `standardized_tests_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `standardized_tests_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `standardized_tests_place` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `standardized_tests_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `standardized_tests_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_standardized_tests`
--

INSERT INTO `ci_standardized_tests` (`standardized_tests_id`, `profile_id`, `standardized_tests_name`, `standardized_tests_place`, `standardized_tests_date`, `standardized_tests_datetime_create`) VALUES
(37, 1, 'Test การทดสอบ 1', 'Bangsue', '2022', '2022-10-18 10:24:02'),
(38, 1, 'Test การทดสอบ 2', 'Dusit', '2021', '2022-10-18 10:24:02'),
(44, 2, '1', '2', '2555', '2022-11-11 10:02:17');

-- --------------------------------------------------------

--
-- Table structure for table `ci_study`
--

CREATE TABLE `ci_study` (
  `study_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `study_transcript_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `study_year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `study_level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `study_term` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `study_gpa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `study_gpax` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `study_datetime_create` datetime NOT NULL,
  `study_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_study`
--

INSERT INTO `ci_study` (`study_id`, `profile_id`, `study_transcript_image`, `study_year`, `study_level`, `study_term`, `study_gpa`, `study_gpax`, `study_datetime_create`, `study_datetime_update`) VALUES
(1, 1, 'banner-img1.jpg', '2566', '1', '1', '3.59', '3.56', '2022-09-21 10:16:25', '2022-09-30 14:19:19'),
(2, 1, 'bg-vision.jpg', '2565', '1', '2', '3.19', '3.29', '2022-09-21 10:27:01', '2022-09-21 10:27:01'),
(3, 1, 'bg-vision.jpg', '2565', '1', '2', '3.19', '3.29', '2022-09-21 11:33:43', '2022-09-21 11:33:43'),
(6, 2, 'cer.png', '2556', '1', '1', '3.59', '3.45', '2022-10-06 11:53:33', '2022-10-06 11:53:33');

-- --------------------------------------------------------

--
-- Table structure for table `ci_training`
--

CREATE TABLE `ci_training` (
  `training_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `training_date_begin` date NOT NULL,
  `training_date_end` date NOT NULL,
  `training_department` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `training_company` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `training_place` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `training_grade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `training_description_grade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `training_datetime_create` datetime NOT NULL,
  `training_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_training`
--

INSERT INTO `ci_training` (`training_id`, `profile_id`, `training_date_begin`, `training_date_end`, `training_department`, `training_company`, `training_place`, `training_grade`, `training_description_grade`, `training_datetime_create`, `training_datetime_update`) VALUES
(1, 1, '2022-10-01', '2022-10-31', 'Test1', 'Test2', 'Test3', '3.58', 'Test4', '2022-10-05 11:55:10', '2022-10-05 11:58:11'),
(2, 2, '2022-10-01', '2022-10-31', 'ฝ่ายผลิตและควบคุมคุณภาพอาหาร', 'CPRAM', 'อำเภอลาดหลุมแก้ว จังหวัดปทุมธานี 12140', '4.5/5', 'สามารถพัฒนาเพิ่มเติมด้านการใช้สื่อเพื่อการนำเสนอ', '2022-10-06 11:45:13', '2022-10-06 11:45:13');

-- --------------------------------------------------------

--
-- Table structure for table `ci_training_experiences`
--

CREATE TABLE `ci_training_experiences` (
  `training_experiences_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `training_experiences_trainning` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `training_experiences_place` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `training_experiences_period` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `training_experiences_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_training_experiences`
--

INSERT INTO `ci_training_experiences` (`training_experiences_id`, `profile_id`, `training_experiences_trainning`, `training_experiences_place`, `training_experiences_period`, `training_experiences_datetime_create`) VALUES
(103, 1, 'NIIT', 'สะพานหัวช้าง', '3', '2022-10-18 10:24:02'),
(104, 1, 'NetDesign', 'สยาม', '6', '2022-10-18 10:24:02'),
(115, 2, 'abc', 'def', '4 Year', '2022-11-11 10:02:17'),
(116, 2, 'ghi', 'jkl', '3 Year', '2022-11-11 10:02:17');

-- --------------------------------------------------------

--
-- Table structure for table `ci_webboard`
--

CREATE TABLE `ci_webboard` (
  `webboard_id` int(11) NOT NULL,
  `webboard_username` varchar(255) NOT NULL,
  `webboard_topic` varchar(255) NOT NULL,
  `webboard_datetime` datetime NOT NULL,
  `webboard_detail` text NOT NULL,
  `webboard_datetime_create` datetime NOT NULL,
  `webboard_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_webboard`
--

INSERT INTO `ci_webboard` (`webboard_id`, `webboard_username`, `webboard_topic`, `webboard_datetime`, `webboard_detail`, `webboard_datetime_create`, `webboard_datetime_update`) VALUES
(1, 'admin', 'กรุณาเข้าไปดำเนินการกรอกผลการศึกษา', '2022-09-19 17:20:00', '<p>\r\n	test</p>\r\n', '2022-09-19 17:49:15', '2022-09-19 17:49:15'),
(2, 'admin', 'กรุณาเข้าไปดำเนินการกรอกผลการศึกษา', '2022-09-20 00:00:00', '<p>\r\n	test</p>\r\n', '2022-09-20 11:33:34', '2022-09-20 11:33:34'),
(3, 'admin', 'Test', '2022-11-11 09:00:00', '<p>\r\n	Test</p>\r\n', '2022-11-11 08:43:09', '2022-11-11 08:43:09'),
(4, 'admin', 'test Subject', '2022-11-11 09:00:00', '<p>\r\n	test detail</p>\r\n', '2022-11-11 08:53:52', '2022-11-11 08:53:52');

-- --------------------------------------------------------

--
-- Table structure for table `ci_webboard_status`
--

CREATE TABLE `ci_webboard_status` (
  `webboard_status_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `webboard_id` int(11) NOT NULL,
  `webboard_status_read` varchar(255) NOT NULL,
  `webboard_status_delete` varchar(255) NOT NULL,
  `webboard_status_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_webboard_status`
--

INSERT INTO `ci_webboard_status` (`webboard_status_id`, `profile_id`, `webboard_id`, `webboard_status_read`, `webboard_status_delete`, `webboard_status_datetime_create`) VALUES
(2, 1, 2, 'read', 'undelete', '2022-09-20 11:33:34'),
(3, 1, 3, 'unread', 'undelete', '2022-11-11 08:43:09'),
(4, 2, 3, 'read', 'undelete', '2022-11-11 08:43:09'),
(5, 3, 3, 'unread', 'undelete', '2022-11-11 08:43:09'),
(6, 4, 3, 'unread', 'undelete', '2022-11-11 08:43:09'),
(7, 5, 3, 'unread', 'undelete', '2022-11-11 08:43:09'),
(8, 1, 4, 'unread', 'undelete', '2022-11-11 08:53:52'),
(9, 2, 4, 'unread', 'undelete', '2022-11-11 08:53:52'),
(10, 3, 4, 'unread', 'undelete', '2022-11-11 08:53:52'),
(11, 4, 4, 'unread', 'undelete', '2022-11-11 08:53:52'),
(12, 5, 4, 'unread', 'undelete', '2022-11-11 08:53:52');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(1000) NOT NULL,
  `department_menu` longtext NOT NULL,
  `department_sub_menu` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`, `department_menu`, `department_sub_menu`) VALUES
(1, 'Administrator', '50, 75, 91, 92, 76, 94, 77, 82, 83, 84, 78, 85, 86, 87, 79, 89, 80, 81, 88, 90, 93', '5, 6, 7, 72, 71, 73, 80, 74, 75, 76, 77, 78, 79, 81, 65, 66, 61, 62, 67, 68, 63, 64, 69, 70'),
(2, 'User', '0', '0'),
(5, 'Alumni', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `menu_controller` varchar(255) NOT NULL,
  `menu_sort` int(11) NOT NULL,
  `menu_enable` int(1) NOT NULL,
  `menu_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `menu_controller`, `menu_sort`, `menu_enable`, `menu_link`) VALUES
(1, 'Menu', 'menu', 10, 0, 'menu/backend'),
(2, 'Sub Menu', 'sub_menu', 20, 0, 'sub_menu/backend'),
(50, 'Authentication', 'authentication', 30, 1, 'authentication/backend'),
(73, 'Ford', 'ford', 1000, 0, 'ford/backend'),
(74, 'Product', 'product', 2000, 0, 'product/backend'),
(75, 'Banner Slide', 'banner_slide', 3000, 1, 'banner_slide/backend'),
(76, 'Register', 'register', 4000, 1, 'register/backend'),
(77, 'Webboard(My Message)', 'webboard', 5000, 1, 'webboard/backend'),
(78, 'My Course', 'my_course', 6000, 1, 'my_course/backend'),
(79, 'My Form', 'my_form', 7000, 1, 'my_download/backend'),
(80, 'Document Download', 'document_download', 8000, 1, 'document_download/backend'),
(81, 'Q & A', 'q_a', 9000, 1, 'q_a/backend'),
(82, 'My Study', 'my_study', 5500, 1, 'my_study/backend'),
(83, 'My Page Diary', 'page_diary', 5600, 1, 'page_diary/backend'),
(84, 'MY IDP', 'idp', 5700, 1, 'idp/backend'),
(85, 'My English Update', 'english_update', 6100, 1, 'english_update/backend'),
(86, 'My Training', 'training', 6200, 1, 'training/backend'),
(87, 'My Project', 'project', 6300, 1, 'project/backend'),
(88, 'Contact Us(Form)', 'contact_us', 10000, 1, 'contact_us/backend'),
(89, 'Planning Your Project', 'planning_your_project', 7500, 1, 'planning_your_project/backend'),
(90, 'Log Login', 'log_login', 11000, 1, 'log_login/backend'),
(91, 'Alumni Activity', 'alumni_activity', 3100, 1, 'alumni_activity/backend'),
(92, 'Souvenir Shop', 'souvenir_shop', 3200, 1, 'souvenir_shop/backend'),
(93, 'Import Excel', 'import_excel', 12000, 1, 'import_excel/backend'),
(94, 'My Profile', 'my_profile', 4500, 1, 'my_profile/backend');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu`
--

CREATE TABLE `sub_menu` (
  `sub_menu_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `sub_menu_name` varchar(255) NOT NULL,
  `sub_menu_controller` varchar(255) NOT NULL,
  `sub_menu_sort` int(11) NOT NULL,
  `sub_menu_enable` int(1) NOT NULL,
  `sub_menu_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_menu`
--

INSERT INTO `sub_menu` (`sub_menu_id`, `menu_id`, `sub_menu_name`, `sub_menu_controller`, `sub_menu_sort`, `sub_menu_enable`, `sub_menu_link`) VALUES
(5, 50, 'Department', 'department,department_form,department_save_update', 10, 1, 'authentication/backend/department'),
(6, 50, 'Permission', 'permission,permission_form,permission_save_update', 20, 1, 'authentication/backend/permission'),
(7, 50, 'User', 'user,user_form,user_save_update', 30, 1, 'authentication/backend/user'),
(57, 73, 'Ford', 'ford,ford_form,ford_save_update', 1000, 1, 'ford/backend/ford'),
(58, 74, 'Category 1', 'category1,category1_form,category1_save_update', 1000, 1, 'product/backend/category1'),
(59, 74, 'Category 2', 'category2,category2_form,category2_save_update', 2000, 1, 'product/backend/category2'),
(60, 74, 'Category 3', 'category3,category3_form,category3_save_update', 3000, 1, 'product/backend/category3'),
(61, 78, 'Courses offer by CP Scholarship Program', 'courses_offer_by_cp,courses_offer_by_cp_form', 1000, 1, 'my_course/backend/courses_offer_by_cp'),
(62, 78, 'Courses on Demand', 'courses_on_demand,courses_on_demand_form', 2000, 1, 'my_course/backend/courses_on_demand'),
(63, 79, 'หมวดหมู่ฟอร์ม', 'category_form,category_form_form', 1000, 1, 'my_form/backend/category_form'),
(64, 79, 'ฟอร์ม', 'form,form_form', 2000, 1, 'my_form/backend/form'),
(65, 82, 'Study', 'study,study_form', 1000, 1, 'my_study/backend/study'),
(66, 82, 'Calendar Study', 'calendar_study,calendar_study_form', 2000, 1, 'my_study/backend/calendar_study'),
(67, 87, 'Category Project', 'category_project,category_project_form', 1000, 1, 'project/backend/category_project'),
(68, 87, 'Project', 'project,project_form', 2000, 1, 'project/backend/project'),
(69, 89, 'Topic', 'level_planning_your_project,level_planning_your_project_form', 1000, 1, 'planning_your_project/backend/level_planning_your_project'),
(70, 89, 'Planning Your Project', 'planning_your_project,planning_your_project_form', 2000, 1, 'planning_your_project/backend/planning_your_project'),
(71, 91, 'Photo Gallery', 'photo_gallery,photo_gallery_form', 2000, 1, 'alumni_activity/backend/photo_gallery'),
(72, 91, 'Upcoming event', 'alumni_activity,alumni_activity_form', 1000, 1, 'alumni_activity/backend/alumni_activity'),
(73, 91, 'Profile update', 'profile_update,profile_update_form', 3000, 1, 'alumni_activity/backend/profile_update'),
(74, 94, 'Chat', 'chat,chat_form', 1000, 1, 'my_profile/backend/chat'),
(75, 94, 'Education', 'education,education_form', 2000, 1, 'my_profile/backend/education'),
(76, 94, 'Extra-curriculum', 'extra_curriculum,extra_curriculum_form', 3000, 1, 'my_profile/backend/extra_curriculum'),
(77, 94, 'Training & Experiences', 'training_experiences,training_experiences_form', 4000, 1, 'my_profile/backend/training_experiences'),
(78, 94, 'Certificate', 'certificate,certificate_form', 5000, 1, 'my_profile/backend/certificate'),
(79, 94, 'Standardized tests', 'standardized_tests,standardized_tests_form', 6000, 1, 'my_profile/backend/standardized_tests'),
(80, 94, 'Active participation', 'active_participation,active_participation_form', 7000, 1, 'my_profile/backend/active_participation'),
(81, 94, 'Award', 'award,award_form', 7000, 1, 'my_profile/backend/award');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_username` varchar(30) NOT NULL,
  `user_password` varchar(30) NOT NULL,
  `user_activated` int(1) NOT NULL,
  `user_username_create` varchar(255) NOT NULL,
  `user_datetime_create` datetime NOT NULL,
  `user_ip_create` varchar(255) NOT NULL,
  `user_username_update` varchar(255) NOT NULL,
  `user_datetime_update` datetime NOT NULL,
  `user_ip_update` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `department_id`, `user_email`, `user_name`, `user_username`, `user_password`, `user_activated`, `user_username_create`, `user_datetime_create`, `user_ip_create`, `user_username_update`, `user_datetime_update`, `user_ip_update`) VALUES
(1, 1, 'sitiporn@orange-thailand.com', 'Sitiporn Trongwichien', 'admin', 'qwaszx', 1, '1', '2018-02-10 03:46:48', '2018-02-13 14:51:25', 'admin', '2018-11-06 13:51:05', '::1'),
(28, 2, 'test@test.com', 'Test', 'test', 'qwaszx', 1, 'admin', '2018-11-06 13:51:25', '::1', 'admin', '2021-09-23 22:51:48', '::1'),
(29, 1, 'taneas@earthfactory.com', 'Taneas', 'Taneas', 'Earth1234', 1, 'admin', '2021-04-22 17:32:24', '180.180.217.3', 'admin', '2021-04-22 17:32:24', '180.180.217.3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `captcha`
--
ALTER TABLE `captcha`
  ADD PRIMARY KEY (`captcha_id`),
  ADD KEY `word` (`word`);

--
-- Indexes for table `ci_active_participation`
--
ALTER TABLE `ci_active_participation`
  ADD PRIMARY KEY (`active_participation_id`);

--
-- Indexes for table `ci_activity`
--
ALTER TABLE `ci_activity`
  ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `ci_alumni_activity`
--
ALTER TABLE `ci_alumni_activity`
  ADD PRIMARY KEY (`alumni_activity_id`);

--
-- Indexes for table `ci_award`
--
ALTER TABLE `ci_award`
  ADD PRIMARY KEY (`award_id`);

--
-- Indexes for table `ci_banner_slide`
--
ALTER TABLE `ci_banner_slide`
  ADD PRIMARY KEY (`banner_slide_id`);

--
-- Indexes for table `ci_calendar_study`
--
ALTER TABLE `ci_calendar_study`
  ADD PRIMARY KEY (`calendar_study_id`);

--
-- Indexes for table `ci_category1`
--
ALTER TABLE `ci_category1`
  ADD PRIMARY KEY (`category1_id`);

--
-- Indexes for table `ci_category2`
--
ALTER TABLE `ci_category2`
  ADD PRIMARY KEY (`category2_id`);

--
-- Indexes for table `ci_category3`
--
ALTER TABLE `ci_category3`
  ADD PRIMARY KEY (`category3_id`);

--
-- Indexes for table `ci_category_form`
--
ALTER TABLE `ci_category_form`
  ADD PRIMARY KEY (`category_form_id`);

--
-- Indexes for table `ci_category_project`
--
ALTER TABLE `ci_category_project`
  ADD PRIMARY KEY (`category_project_id`);

--
-- Indexes for table `ci_category_souvenir`
--
ALTER TABLE `ci_category_souvenir`
  ADD PRIMARY KEY (`category_souvenir_id`);

--
-- Indexes for table `ci_certificate`
--
ALTER TABLE `ci_certificate`
  ADD PRIMARY KEY (`certificate_id`);

--
-- Indexes for table `ci_chat`
--
ALTER TABLE `ci_chat`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `ci_contact_us`
--
ALTER TABLE `ci_contact_us`
  ADD PRIMARY KEY (`contact_us_id`);

--
-- Indexes for table `ci_courses_offer_by_cp`
--
ALTER TABLE `ci_courses_offer_by_cp`
  ADD PRIMARY KEY (`courses_offer_by_cp_id`);

--
-- Indexes for table `ci_courses_on_demand`
--
ALTER TABLE `ci_courses_on_demand`
  ADD PRIMARY KEY (`courses_on_demand_id`);

--
-- Indexes for table `ci_document_download`
--
ALTER TABLE `ci_document_download`
  ADD PRIMARY KEY (`document_download_id`);

--
-- Indexes for table `ci_education`
--
ALTER TABLE `ci_education`
  ADD PRIMARY KEY (`education_id`);

--
-- Indexes for table `ci_english_update`
--
ALTER TABLE `ci_english_update`
  ADD PRIMARY KEY (`english_update_id`);

--
-- Indexes for table `ci_extra_curriculum`
--
ALTER TABLE `ci_extra_curriculum`
  ADD PRIMARY KEY (`extra_curriculum_id`);

--
-- Indexes for table `ci_ford`
--
ALTER TABLE `ci_ford`
  ADD PRIMARY KEY (`ford_id`);

--
-- Indexes for table `ci_form`
--
ALTER TABLE `ci_form`
  ADD PRIMARY KEY (`form_id`);

--
-- Indexes for table `ci_idp`
--
ALTER TABLE `ci_idp`
  ADD PRIMARY KEY (`idp_id`);

--
-- Indexes for table `ci_level_planning_your_project`
--
ALTER TABLE `ci_level_planning_your_project`
  ADD PRIMARY KEY (`level_planning_your_project_id`);

--
-- Indexes for table `ci_log_login`
--
ALTER TABLE `ci_log_login`
  ADD PRIMARY KEY (`log_login_id`);

--
-- Indexes for table `ci_making_plan`
--
ALTER TABLE `ci_making_plan`
  ADD PRIMARY KEY (`making_plan_id`);

--
-- Indexes for table `ci_my_message`
--
ALTER TABLE `ci_my_message`
  ADD PRIMARY KEY (`my_message_id`);

--
-- Indexes for table `ci_page_diary`
--
ALTER TABLE `ci_page_diary`
  ADD PRIMARY KEY (`page_diary_id`);

--
-- Indexes for table `ci_photo_gallery`
--
ALTER TABLE `ci_photo_gallery`
  ADD PRIMARY KEY (`photo_gallery_id`);

--
-- Indexes for table `ci_planning_your_project`
--
ALTER TABLE `ci_planning_your_project`
  ADD PRIMARY KEY (`planning_your_project_id`);

--
-- Indexes for table `ci_profile`
--
ALTER TABLE `ci_profile`
  ADD PRIMARY KEY (`profile_id`);

--
-- Indexes for table `ci_profile_update`
--
ALTER TABLE `ci_profile_update`
  ADD PRIMARY KEY (`profile_update_id`);

--
-- Indexes for table `ci_project`
--
ALTER TABLE `ci_project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `ci_q_a`
--
ALTER TABLE `ci_q_a`
  ADD PRIMARY KEY (`q_a_id`);

--
-- Indexes for table `ci_session`
--
ALTER TABLE `ci_session`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `ci_skill`
--
ALTER TABLE `ci_skill`
  ADD PRIMARY KEY (`skill_id`);

--
-- Indexes for table `ci_souvenir`
--
ALTER TABLE `ci_souvenir`
  ADD PRIMARY KEY (`souvenir_id`);

--
-- Indexes for table `ci_souvenir_shop`
--
ALTER TABLE `ci_souvenir_shop`
  ADD PRIMARY KEY (`souvenir_shop_id`);

--
-- Indexes for table `ci_standardized_tests`
--
ALTER TABLE `ci_standardized_tests`
  ADD PRIMARY KEY (`standardized_tests_id`);

--
-- Indexes for table `ci_study`
--
ALTER TABLE `ci_study`
  ADD PRIMARY KEY (`study_id`);

--
-- Indexes for table `ci_training`
--
ALTER TABLE `ci_training`
  ADD PRIMARY KEY (`training_id`);

--
-- Indexes for table `ci_training_experiences`
--
ALTER TABLE `ci_training_experiences`
  ADD PRIMARY KEY (`training_experiences_id`);

--
-- Indexes for table `ci_webboard`
--
ALTER TABLE `ci_webboard`
  ADD PRIMARY KEY (`webboard_id`);

--
-- Indexes for table `ci_webboard_status`
--
ALTER TABLE `ci_webboard_status`
  ADD PRIMARY KEY (`webboard_status_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD PRIMARY KEY (`sub_menu_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `captcha`
--
ALTER TABLE `captcha`
  MODIFY `captcha_id` bigint(13) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `ci_active_participation`
--
ALTER TABLE `ci_active_participation`
  MODIFY `active_participation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `ci_activity`
--
ALTER TABLE `ci_activity`
  MODIFY `activity_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ci_alumni_activity`
--
ALTER TABLE `ci_alumni_activity`
  MODIFY `alumni_activity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ci_award`
--
ALTER TABLE `ci_award`
  MODIFY `award_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ci_banner_slide`
--
ALTER TABLE `ci_banner_slide`
  MODIFY `banner_slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ci_calendar_study`
--
ALTER TABLE `ci_calendar_study`
  MODIFY `calendar_study_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ci_category1`
--
ALTER TABLE `ci_category1`
  MODIFY `category1_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ci_category2`
--
ALTER TABLE `ci_category2`
  MODIFY `category2_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ci_category3`
--
ALTER TABLE `ci_category3`
  MODIFY `category3_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ci_category_form`
--
ALTER TABLE `ci_category_form`
  MODIFY `category_form_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ci_category_project`
--
ALTER TABLE `ci_category_project`
  MODIFY `category_project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ci_category_souvenir`
--
ALTER TABLE `ci_category_souvenir`
  MODIFY `category_souvenir_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ci_certificate`
--
ALTER TABLE `ci_certificate`
  MODIFY `certificate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `ci_chat`
--
ALTER TABLE `ci_chat`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ci_contact_us`
--
ALTER TABLE `ci_contact_us`
  MODIFY `contact_us_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ci_courses_offer_by_cp`
--
ALTER TABLE `ci_courses_offer_by_cp`
  MODIFY `courses_offer_by_cp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ci_courses_on_demand`
--
ALTER TABLE `ci_courses_on_demand`
  MODIFY `courses_on_demand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ci_document_download`
--
ALTER TABLE `ci_document_download`
  MODIFY `document_download_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ci_education`
--
ALTER TABLE `ci_education`
  MODIFY `education_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `ci_english_update`
--
ALTER TABLE `ci_english_update`
  MODIFY `english_update_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ci_extra_curriculum`
--
ALTER TABLE `ci_extra_curriculum`
  MODIFY `extra_curriculum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT for table `ci_ford`
--
ALTER TABLE `ci_ford`
  MODIFY `ford_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ci_form`
--
ALTER TABLE `ci_form`
  MODIFY `form_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ci_idp`
--
ALTER TABLE `ci_idp`
  MODIFY `idp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ci_level_planning_your_project`
--
ALTER TABLE `ci_level_planning_your_project`
  MODIFY `level_planning_your_project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ci_log_login`
--
ALTER TABLE `ci_log_login`
  MODIFY `log_login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `ci_making_plan`
--
ALTER TABLE `ci_making_plan`
  MODIFY `making_plan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ci_my_message`
--
ALTER TABLE `ci_my_message`
  MODIFY `my_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `ci_page_diary`
--
ALTER TABLE `ci_page_diary`
  MODIFY `page_diary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ci_photo_gallery`
--
ALTER TABLE `ci_photo_gallery`
  MODIFY `photo_gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ci_planning_your_project`
--
ALTER TABLE `ci_planning_your_project`
  MODIFY `planning_your_project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ci_profile`
--
ALTER TABLE `ci_profile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ci_profile_update`
--
ALTER TABLE `ci_profile_update`
  MODIFY `profile_update_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ci_project`
--
ALTER TABLE `ci_project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ci_q_a`
--
ALTER TABLE `ci_q_a`
  MODIFY `q_a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ci_skill`
--
ALTER TABLE `ci_skill`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ci_souvenir`
--
ALTER TABLE `ci_souvenir`
  MODIFY `souvenir_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ci_souvenir_shop`
--
ALTER TABLE `ci_souvenir_shop`
  MODIFY `souvenir_shop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ci_standardized_tests`
--
ALTER TABLE `ci_standardized_tests`
  MODIFY `standardized_tests_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `ci_study`
--
ALTER TABLE `ci_study`
  MODIFY `study_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ci_training`
--
ALTER TABLE `ci_training`
  MODIFY `training_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ci_training_experiences`
--
ALTER TABLE `ci_training_experiences`
  MODIFY `training_experiences_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `ci_webboard`
--
ALTER TABLE `ci_webboard`
  MODIFY `webboard_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ci_webboard_status`
--
ALTER TABLE `ci_webboard_status`
  MODIFY `webboard_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `sub_menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
