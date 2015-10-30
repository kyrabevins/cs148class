-- phpMyAdmin SQL Dump
-- version 4.2.9
-- http://www.phpmyadmin.net
--
-- Host: webdb.uvm.edu
-- Generation Time: Oct 30, 2015 at 12:09 PM
-- Server version: 5.5.45-37.4-log
-- PHP Version: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `KBEVINS_advising`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblAdvisors`
--

CREATE TABLE IF NOT EXISTS `tblAdvisors` (
  `pmkAdvisorId` int(10) NOT NULL DEFAULT '0',
  `fldFirstName` varchar(20) DEFAULT NULL,
  `fldLastName` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblAdvisors`
--

INSERT INTO `tblAdvisors` (`pmkAdvisorId`, `fldFirstName`, `fldLastName`) VALUES
(12345, 'Gina', 'Bobby');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblAdvisors`
--
ALTER TABLE `tblAdvisors`
 ADD PRIMARY KEY (`pmkAdvisorId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
