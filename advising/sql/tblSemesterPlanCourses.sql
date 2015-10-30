-- phpMyAdmin SQL Dump
-- version 4.2.9
-- http://www.phpmyadmin.net
--
-- Host: webdb.uvm.edu
-- Generation Time: Oct 30, 2015 at 10:48 AM
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
-- Table structure for table `tblSemesterPlanCourses`
--
DROP TABLE IF EXISTS `tblSemesterPlanCourses`;
CREATE TABLE IF NOT EXISTS `tblSemesterPlanCourses` (
  `pmkPlanId` int(10) NOT NULL,
  `fnkYear` year(4) NOT NULL,
  `fnkTerm` varchar(10) NOT NULL,
  `fnkCourseId` int(11) NOT NULL,
  `fldDisplayOrder` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblSemesterPlanCourses`
--

INSERT INTO `tblSemesterPlanCourses` (`pmkPlanId`, `fnkYear`, `fnkTerm`, `fnkCourseId`, `fldDisplayOrder`) VALUES
(1, 2015, 'Fall', 491, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblSemesterPlanCourses`
--
ALTER TABLE `tblSemesterPlanCourses`
 ADD PRIMARY KEY (`pmkPlanId`), ADD KEY `fnkCourseId` (`fnkCourseId`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblSemesterPlanCourses`
--
ALTER TABLE `tblSemesterPlanCourses`
ADD CONSTRAINT `tblSemesterPlanCourses_ibfk_1` FOREIGN KEY (`fnkCourseId`) REFERENCES `tblCourses` (`pmkCourseId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

