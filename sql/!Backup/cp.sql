-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2022 at 10:22 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cp`
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
  `active_participation_date` date NOT NULL,
  `active_participation_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
-- Table structure for table `ci_award`
--

CREATE TABLE `ci_award` (
  `award_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `award_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `award_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `award_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `calendar_study_datetime_create` datetime NOT NULL,
  `calendar_study_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_calendar_study`
--

INSERT INTO `ci_calendar_study` (`calendar_study_id`, `profile_id`, `calendar_study_open1`, `calendar_study_register1`, `calendar_study_exam_mid_term1`, `calendar_study_exam_final_term1`, `calendar_study_term_break1`, `calendar_study_term2`, `calendar_study_register2`, `calendar_study_exam_mid_term2`, `calendar_study_exam_final_term2`, `calendar_study_datetime_create`, `calendar_study_datetime_update`) VALUES
(1, 1, '01/08/2022', '02/09/2022', '03/09/2022', '04/09/2022', '05/09/2022', '06/09/2022', '07/09/2022', '08/09/2022', '09/09/2022', '2022-09-30 14:24:28', '2022-09-30 14:24:28');

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
(1, 1, 'btn-shopee2.jpg', 'ขั้นต้น', '2022-10-05 13:31:32', '2022-10-05 13:44:33'),
(2, 1, 'banner-img2.jpg', 'ขั้นกลาง', '2022-10-05 14:12:58', '2022-10-05 14:12:58');

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
  `certificate_date` date NOT NULL,
  `certificate_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(1, 1, 'test', 'CP', 'สำเร็จแล้ว', 'bg-vision.jpg', '2022-09-28 10:24:11', '2022-09-28 10:41:24');

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
(1, 1, 'test', 'test', 'ยังไม่เริ่ม', '4e586a799042f4cbc652c0eb553863da.png', '2022-10-05 11:55:48', '2022-10-05 11:55:48');

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
(1, 1, 'bg-vision.jpg', 'test01', 'test test test', '2022-09-28 11:29:01', '2022-09-28 11:36:36');

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
(4, 1, 4, 'ทดสอบ', 'ทดสอบ ผลการพัฒนา', '2022-09-30 15:36:18', '2022-09-30 15:36:18');

-- --------------------------------------------------------

--
-- Table structure for table `ci_level_planning_your_project`
--

CREATE TABLE `ci_level_planning_your_project` (
  `level_planning_your_project_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `level_planning_your_project_name` varchar(255) NOT NULL,
  `level_planning_your_project_description` varchar(255) NOT NULL,
  `level_planning_your_project_datetime_create` datetime NOT NULL,
  `level_planning_your_project_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `my_message_topic` varchar(255) NOT NULL,
  `my_message_answer` varchar(255) NOT NULL,
  `my_message_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `page_diary_life3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_money_from_home3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_study3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_relation3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_happy3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_note3` text COLLATE utf8_unicode_ci NOT NULL,
  `page_diary_datetime_create` datetime NOT NULL,
  `page_diary_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_page_diary`
--

INSERT INTO `ci_page_diary` (`page_diary_id`, `profile_id`, `page_diary_life1`, `page_diary_money_from_home1`, `page_diary_study1`, `page_diary_relation1`, `page_diary_happy1`, `page_diary_note1`, `page_diary_life2`, `page_diary_money_from_home2`, `page_diary_study2`, `page_diary_relation2`, `page_diary_happy2`, `page_diary_note2`, `page_diary_life3`, `page_diary_money_from_home3`, `page_diary_study3`, `page_diary_relation3`, `page_diary_happy3`, `page_diary_note3`, `page_diary_datetime_create`, `page_diary_datetime_update`) VALUES
(1, 1, '4', '4', '4', '4', '4', 'test1', '4', '4', '4', '4', '4', 'test2', '', '', '', '', '', '', '2022-09-21 13:57:40', '2022-09-30 15:16:12');

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

-- --------------------------------------------------------

--
-- Table structure for table `ci_profile`
--

CREATE TABLE `ci_profile` (
  `profile_id` int(11) NOT NULL,
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

INSERT INTO `ci_profile` (`profile_id`, `profile_capital_type`, `profile_card_no`, `profile_gender`, `profile_prefix`, `profile_image1`, `profile_image2`, `profile_image3`, `profile_image4`, `profile_name_th`, `profile_surname_th`, `profile_name_en`, `profile_surname_en`, `profile_name_ch`, `profile_surname_ch`, `profile_email_business`, `profile_email_personal`, `profile_mobile`, `profile_date_of_birth`, `profile_weight`, `profile_height`, `profile_address_th`, `profile_address_en`, `profile_my_ambition`, `profile_feilds_of_interests1`, `profile_my_goals`, `profile_feilds_of_interests2`, `profile_my_expectation`, `profile_feilds_of_interests3`, `profile_domicile`, `profile_institute`, `profile_faculty`, `profile_study_plan`, `profile_province_institute`, `profile_gpax`, `profle_salary_per_person_per_month`, `profile_special_working_status`, `profile_password`, `profile_datetime_create`, `profile_datetime_update`) VALUES
(1, 'ป.ตรี', '3100203440521', 'ชาย', 'นาย', '', '', '', '', 'สิทธิพร', 'ตรองวิเชียร', 'Sitiporn', 'Trongwichien', 'Ford', 'Fuji', 'nirvanaford94@gmail.com', 'sitiporn@orange-thailand.com', '0963203829', '1979-06-14', '73', '167', '366/66 ซ.สะพานขวา ถ.ประชาราษฎร์ 2 บางซื่อ กทม', '366/66 Soi Sapankhwa Pracharat 2 Road Bangsue Bangkok', 'Ambition', 'Interests 1', 'Goals', 'Interests 2', 'Expectation', 'Interests 3', 'กทม', 'ม.ธุรกิจบัณฑิตย์', 'คอมพิวเตอร์ธุรกิจ', 'คอมพิวเตอร์ธุรกิจ', 'กทม', '3.59', 10000.00, 'ไม่ทำ', 'qwaszx', '2022-09-14 17:09:01', '2022-09-19 10:55:11');

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
(2, 1, 'ข้อมูลสมาชิกในทีมครบถ้วน', '2022-10-05 14:12:45', '2022-10-05 14:12:45');

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
(1, 'คำถามที่ 1', '<h5 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; font-weight: 500; line-height: 1.75; font-size: 1rem; color: rgb(0, 140, 68); font-family: Poppins, Prompt, sans-serif; background-color: rgb(248, 248, 250);\">\r\n	Sed lacinia tortor non interdum tempus.</h5>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; line-height: 2; color: rgb(0, 0, 0); font-family: Poppins, Prompt, sans-serif; font-size: 14px; background-color: rgb(248, 248, 250);\">\r\n	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce porttitor diam sed enim posuere rutrum. Ut sapien ex, vehicula vitae molestie volutpat, bibendum ac lorem. Suspendisse aliquam efficitur ligula, sit amet blandit diam consequat id. Phasellus a vestibulum tellus. Donec molestie, purus nec rutrum convallis, sem dui maximus erat, ac pellentesque nulla diam quis orci. Sed nulla augue, euismod ac facilisis in, pellentesque ac velit. Proin dignissim at augue ac hendrerit. Proin vitae facilisis ligula.</p>\r\n<h5 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; font-weight: 500; line-height: 1.75; font-size: 1rem; color: rgb(0, 140, 68); font-family: Poppins, Prompt, sans-serif; background-color: rgb(248, 248, 250);\">\r\n	Vestibulum tempus diam quis mi feugiat congue.</h5>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; line-height: 2; color: rgb(0, 0, 0); font-family: Poppins, Prompt, sans-serif; font-size: 14px; background-color: rgb(248, 248, 250);\">\r\n	Pellentesque a enim ultricies, feugiat purus quis, tristique urna. Nam eu orci a eros sodales iaculis non ut odio. Proin at ante ut risus rutrum egestas at et tellus. Morbi lacinia dui ac sodales malesuada. Proin euismod lorem sit amet ante vestibulum, non maximus elit molestie.</p>\r\n', '2022-09-28 14:26:30', '2022-09-28 14:26:30'),
(2, 'คำถามที่ 2', '<h5 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; font-weight: 500; line-height: 1.75; font-size: 1rem; color: rgb(0, 140, 68); font-family: Poppins, Prompt, sans-serif; background-color: rgb(248, 248, 250);\">\r\n	Sed lacinia tortor non interdum tempus.</h5>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; line-height: 2; color: rgb(0, 0, 0); font-family: Poppins, Prompt, sans-serif; font-size: 14px; background-color: rgb(248, 248, 250);\">\r\n	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce porttitor diam sed enim posuere rutrum. Ut sapien ex, vehicula vitae molestie volutpat, bibendum ac lorem. Suspendisse aliquam efficitur ligula, sit amet blandit diam consequat id. Phasellus a vestibulum tellus. Donec molestie, purus nec rutrum convallis, sem dui maximus erat, ac pellentesque nulla diam quis orci. Sed nulla augue, euismod ac facilisis in, pellentesque ac velit. Proin dignissim at augue ac hendrerit. Proin vitae facilisis ligula.</p>\r\n<h5 style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; font-weight: 500; line-height: 1.75; font-size: 1rem; color: rgb(0, 140, 68); font-family: Poppins, Prompt, sans-serif; background-color: rgb(248, 248, 250);\">\r\n	Vestibulum tempus diam quis mi feugiat congue.</h5>\r\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; line-height: 2; color: rgb(0, 0, 0); font-family: Poppins, Prompt, sans-serif; font-size: 14px; background-color: rgb(248, 248, 250);\">\r\n	Pellentesque a enim ultricies, feugiat purus quis, tristique urna. Nam eu orci a eros sodales iaculis non ut odio. Proin at ante ut risus rutrum egestas at et tellus. Morbi lacinia dui ac sodales malesuada. Proin euismod lorem sit amet ante vestibulum, non maximus elit molestie.</p>\r\n', '2022-09-28 14:26:48', '2022-09-28 14:26:48');

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
('1t3t995lnbv58cnlntf4nvb5vp2bb217', '::1', 1664952589, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636343935323538393b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b70726f66696c655f69647c733a313a2231223b),
('20clh3ok18vord2tl4qflng9avjge5nc', '::1', 1664951437, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636343935313433373b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b70726f66696c655f69647c733a313a2231223b),
('3re1qd0f10v8h2b58ob2j2c8m1brcvp0', '::1', 1664956628, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636343935363433303b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b70726f66696c655f69647c733a313a2231223b),
('4aq58ba4jpvv1clls6nlc8t49buqdqgi', '::1', 1664954771, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636343935343737313b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b70726f66696c655f69647c733a313a2231223b),
('4l0lv6p68kun2erc8uk9lprbro37k04a', '::1', 1664956430, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636343935363433303b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b70726f66696c655f69647c733a313a2231223b),
('6aqphpaomishe5lesdmtm4jq00huohu3', '::1', 1664952987, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636343935323938373b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b70726f66696c655f69647c733a313a2231223b),
('7ogvar2h1bsp9ij71mq300nfltrgej04', '::1', 1664953307, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636343935333330373b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b70726f66696c655f69647c733a313a2231223b),
('8g5bf3fkfg3v14u58kqk9nko5gttobjc', '::1', 1664955770, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636343935353737303b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b70726f66696c655f69647c733a313a2231223b),
('8hpp769m4tmvtngu3d7reoph46h41jop', '::1', 1664956081, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636343935363038313b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b70726f66696c655f69647c733a313a2231223b),
('bsrdb1ovv3kvv0o9f6623vu1jnnboe1f', '::1', 1664950973, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636343935303937333b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b70726f66696c655f69647c733a313a2231223b),
('iqshlehobg4gguopg71jb5thd522vbh2', '::1', 1664950527, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636343935303532373b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b70726f66696c655f69647c733a313a2231223b),
('mnkgm34a22asdt8kvbcg521huh1klln9', '::1', 1664955126, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636343935353132363b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b70726f66696c655f69647c733a313a2231223b),
('npghf0t3ue4tqfi5asrajoncflpjdine', '::1', 1664954302, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636343935343330323b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b70726f66696c655f69647c733a313a2231223b),
('ott0fojq3qp8e58109v2jndn0novearf', '::1', 1664953612, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636343935333631323b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b70726f66696c655f69647c733a313a2231223b),
('p7u39b53dkui12jhp94oocscm5502j3v', '::1', 1664952101, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636343935323130313b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b70726f66696c655f69647c733a313a2231223b),
('prr7bkhgcvpi9ibh69be3nb0vr4mj2k4', '::1', 1664953948, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636343935333934383b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b70726f66696c655f69647c733a313a2231223b),
('q8pdairr8veffj8kkmdqt7jmltdb79tf', '::1', 1664951784, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636343935313738343b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b70726f66696c655f69647c733a313a2231223b),
('q9hmpptomf5aiuefaqmq4dm3cfr38cag', '::1', 1664949991, 0x5f5f63695f6c6173745f726567656e65726174657c693a313636343934393939313b73657373696f6e5f6c6f67696e7c623a313b73657373696f6e5f757365725f69647c733a313a2231223b73657373696f6e5f757365725f6465706172746d656e747c733a313a2231223b73657373696f6e5f757365726e616d657c733a353a2261646d696e223b6c616e677c733a323a227468223b70726f66696c655f69647c733a313a2231223b);

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
-- Table structure for table `ci_standardized_tests`
--

CREATE TABLE `ci_standardized_tests` (
  `standardized_tests_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `standardized_tests_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `standardized_tests_place` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `standardized_tests_date` date NOT NULL,
  `standardized_tests_datetime_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(3, 1, 'bg-vision.jpg', '2565', '1', '2', '3.19', '3.29', '2022-09-21 11:33:43', '2022-09-21 11:33:43');

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
(1, 1, '2022-10-01', '2022-10-31', 'Test1', 'Test2', 'Test3', '3.58', 'Test4', '2022-10-05 11:55:10', '2022-10-05 11:58:11');

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
(2, 'admin', 'กรุณาเข้าไปดำเนินการกรอกผลการศึกษา', '2022-09-20 00:00:00', '<p>\r\n	test</p>\r\n', '2022-09-20 11:33:34', '2022-09-20 11:33:34');

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
(2, 1, 2, 'read', 'undelete', '2022-09-20 11:33:34');

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
(1, 'Administrator', '50, 75, 76, 77, 82, 83, 84, 78, 85, 86, 87, 79, 80, 81', '5, 6, 7, 65, 66, 61, 62, 67, 68, 63, 64'),
(2, 'User', '0', '0');

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
(87, 'My Project', 'project', 6300, 1, 'project/backend');

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
(68, 87, 'Project', 'project,project_form', 2000, 1, 'project/backend/project');

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
  MODIFY `active_participation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ci_activity`
--
ALTER TABLE `ci_activity`
  MODIFY `activity_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ci_award`
--
ALTER TABLE `ci_award`
  MODIFY `award_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ci_banner_slide`
--
ALTER TABLE `ci_banner_slide`
  MODIFY `banner_slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ci_calendar_study`
--
ALTER TABLE `ci_calendar_study`
  MODIFY `calendar_study_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `category_project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ci_category_souvenir`
--
ALTER TABLE `ci_category_souvenir`
  MODIFY `category_souvenir_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ci_certificate`
--
ALTER TABLE `ci_certificate`
  MODIFY `certificate_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ci_chat`
--
ALTER TABLE `ci_chat`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ci_contact_us`
--
ALTER TABLE `ci_contact_us`
  MODIFY `contact_us_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ci_courses_offer_by_cp`
--
ALTER TABLE `ci_courses_offer_by_cp`
  MODIFY `courses_offer_by_cp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ci_courses_on_demand`
--
ALTER TABLE `ci_courses_on_demand`
  MODIFY `courses_on_demand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ci_document_download`
--
ALTER TABLE `ci_document_download`
  MODIFY `document_download_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ci_education`
--
ALTER TABLE `ci_education`
  MODIFY `education_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ci_english_update`
--
ALTER TABLE `ci_english_update`
  MODIFY `english_update_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ci_extra_curriculum`
--
ALTER TABLE `ci_extra_curriculum`
  MODIFY `extra_curriculum_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ci_ford`
--
ALTER TABLE `ci_ford`
  MODIFY `ford_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ci_form`
--
ALTER TABLE `ci_form`
  MODIFY `form_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ci_idp`
--
ALTER TABLE `ci_idp`
  MODIFY `idp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ci_level_planning_your_project`
--
ALTER TABLE `ci_level_planning_your_project`
  MODIFY `level_planning_your_project_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ci_making_plan`
--
ALTER TABLE `ci_making_plan`
  MODIFY `making_plan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ci_my_message`
--
ALTER TABLE `ci_my_message`
  MODIFY `my_message_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ci_page_diary`
--
ALTER TABLE `ci_page_diary`
  MODIFY `page_diary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ci_planning_your_project`
--
ALTER TABLE `ci_planning_your_project`
  MODIFY `planning_your_project_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ci_profile`
--
ALTER TABLE `ci_profile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ci_project`
--
ALTER TABLE `ci_project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ci_q_a`
--
ALTER TABLE `ci_q_a`
  MODIFY `q_a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT for table `ci_standardized_tests`
--
ALTER TABLE `ci_standardized_tests`
  MODIFY `standardized_tests_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ci_study`
--
ALTER TABLE `ci_study`
  MODIFY `study_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ci_training`
--
ALTER TABLE `ci_training`
  MODIFY `training_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ci_training_experiences`
--
ALTER TABLE `ci_training_experiences`
  MODIFY `training_experiences_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ci_webboard`
--
ALTER TABLE `ci_webboard`
  MODIFY `webboard_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ci_webboard_status`
--
ALTER TABLE `ci_webboard_status`
  MODIFY `webboard_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `sub_menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
