-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2022 at 12:47 PM
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
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ci_webboard`
--
ALTER TABLE `ci_webboard`
  MODIFY `webboard_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ci_webboard_status`
--
ALTER TABLE `ci_webboard_status`
  MODIFY `webboard_status_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
