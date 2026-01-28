-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2025 at 11:01 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `4005db`
--
CREATE DATABASE IF NOT EXISTS `4005db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `4005db`;

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `a_id` int(11) NOT NULL,
  `a_position` varchar(11) NOT NULL,
  `a_title` varchar(11) NOT NULL,
  `a_name` varchar(11) NOT NULL,
  `a_lastname` varchar(11) NOT NULL,
  `a_birthday` date NOT NULL,
  `a_education` varchar(11) NOT NULL,
  `a_skill` varchar(11) NOT NULL,
  `a_talents` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`a_id`, `a_position`, `a_title`, `a_name`, `a_lastname`, `a_birthday`, `a_education`, `a_skill`, `a_talents`) VALUES
(3, 'วิศวกรซอฟต์', 'นาย', 'สมเกา', 'เหาเต็มหัว', '2004-07-20', 'ปริญญาโท', 'เก่งจัด', 'ทำนามา 10 ป');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `r_id` int(7) NOT NULL,
  `r_name` varchar(255) NOT NULL,
  `r_phone` varchar(255) NOT NULL,
  `r_height` int(10) NOT NULL,
  `r_address` varchar(255) NOT NULL,
  `r_birthday` date DEFAULT NULL,
  `r_color` varchar(255) NOT NULL,
  `r_major` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`r_id`, `r_name`, `r_phone`, `r_height`, `r_address`, `r_birthday`, `r_color`, `r_major`) VALUES
(1, 'เจษฎาวุฒิ มั่นยืน', '', 0, '', NULL, '', ''),
(2, 'สมสี ฮีจุ้ก', '', 0, '', NULL, '', ''),
(4, 'สมชาย ฮายโกร๊ะ', '0821594730', 0, '', NULL, '', ''),
(5, 'สมหาสาย', '05514654', 185, '', NULL, '', ''),
(6, 'สมพร หอนทั้งวัน', '0651423560', 199, '22', '2004-07-20', '#46fb73', 'การบัญชี');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `r_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
