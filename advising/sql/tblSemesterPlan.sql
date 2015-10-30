-- phpMyAdmin SQL Dump
-- version 4.2.9
-- http://www.phpmyadmin.net
--
-- Host: webdb.uvm.edu
-- Generation Time: Oct 30, 2015 at 10:47 AM
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
-- Table structure for table `tblSemesterPlan`
--
DROP TABLE IF EXISTS `tblSemesterPlan`;
CREATE TABLE IF NOT EXISTS `tblSemesterPlan` (
  `pmkYear` year(4) NOT NULL DEFAULT '0000',
  `pmkTerm` varchar(10) NOT NULL DEFAULT '',
  `fnkPlanId` int(10) NOT NULL DEFAULT '0',
  `fldDisplayOrder` int(20) DEFAULT NULL,
  `fldNumCredits` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblSemesterPlan`
--

INSERT INTO `tblSemesterPlan` (`pmkYear`, `pmkTerm`, `fnkPlanId`, `fldDisplayOrder`, `fldNumCredits`) VALUES
(2015, 'Fall', 1, 1, 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblSemesterPlan`
--
ALTER TABLE `tblSemesterPlan`
 ADD PRIMARY KEY (`pmkYear`,`pmkTerm`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

