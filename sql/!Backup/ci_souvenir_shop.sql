-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2022 at 06:37 AM
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
-- Table structure for table `ci_souvenir_shop`
--

CREATE TABLE `ci_souvenir_shop` (
  `souvenir_shop_id` int(11) NOT NULL,
  `souvenir_shop_type` varchar(255) NOT NULL,
  `souvenir_shop_image` varchar(255) NOT NULL,
  `souvenir_shop_price` float(10,2) NOT NULL,
  `souvenir_shop_contact` varchar(255) NOT NULL,
  `souvenir_shop_datetime_create` datetime NOT NULL,
  `souvenir_shop_datetime_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_souvenir_shop`
--
ALTER TABLE `ci_souvenir_shop`
  ADD PRIMARY KEY (`souvenir_shop_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ci_souvenir_shop`
--
ALTER TABLE `ci_souvenir_shop`
  MODIFY `souvenir_shop_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
