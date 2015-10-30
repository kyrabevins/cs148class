-- phpMyAdmin SQL Dump
-- version 4.2.9
-- http://www.phpmyadmin.net
--
-- Host: webdb.uvm.edu
-- Generation Time: Oct 30, 2015 at 04:08 PM
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
-- Table structure for table `tblFourYrPlan`
--

CREATE TABLE IF NOT EXISTS `tblFourYrPlan` (
`pmkPlanId` int(10) NOT NULL,
  `fldDateCreated` datetime NOT NULL,
  `fldCatalogYr` varchar(9) NOT NULL,
  `fldMajor` varchar(35) NOT NULL,
  `fldMinor` varchar(35) NOT NULL,
  `fnkNumCredits` int(3) NOT NULL,
  `fnkStudentId` mediumint(8) unsigned NOT NULL,
  `fnkAdvisorId` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblFourYrPlan`
--

INSERT INTO `tblFourYrPlan` (`pmkPlanId`, `fldDateCreated`, `fldCatalogYr`, `fldMajor`, `fldMinor`, `fnkNumCredits`, `fnkStudentId`, `fnkAdvisorId`) VALUES
(1, '2015-10-01 00:00:00', '2015-2016', 'Business Administration', 'Computer Science', 120, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblFourYrPlan`
--
ALTER TABLE `tblFourYrPlan`
 ADD PRIMARY KEY (`pmkPlanId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblFourYrPlan`
--
ALTER TABLE `tblFourYrPlan`
MODIFY `pmkPlanId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
