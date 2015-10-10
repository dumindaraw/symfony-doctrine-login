-- phpMyAdmin SQL Dump
-- version 4.4.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 28, 2015 at 11:29 PM
-- Server version: 5.5.44-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_details_tbl`
--

CREATE TABLE IF NOT EXISTS `employee_details_tbl` (
  `employeeid` int(11) NOT NULL,
  `firstname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employee_details_tbl`
--

INSERT INTO `employee_details_tbl` (`employeeid`, `firstname`, `lastname`, `address`) VALUES
(1, 'Duminda', 'Wanninayake', 'No 23, Old Hospital Road, Nikaweratiya'),
(2, 'Kevin ', 'Pieterson', 'No67/A, Wolfhovn Street, Manchester');

-- --------------------------------------------------------

--
-- Table structure for table `user_login_tbl`
--

CREATE TABLE IF NOT EXISTS `user_login_tbl` (
  `userid` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_login_tbl`
--

INSERT INTO `user_login_tbl` (`userid`, `username`, `password`) VALUES
(1, 'duminda', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'kevin', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_details_tbl`
--
ALTER TABLE `employee_details_tbl`
  ADD PRIMARY KEY (`employeeid`);

--
-- Indexes for table `user_login_tbl`
--
ALTER TABLE `user_login_tbl`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_details_tbl`
--
ALTER TABLE `employee_details_tbl`
  MODIFY `employeeid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
