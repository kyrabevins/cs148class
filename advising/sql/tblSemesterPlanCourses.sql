-- phpMyAdmin SQL Dump
-- version 4.2.9
-- http://www.phpmyadmin.net
--
-- Host: webdb.uvm.edu
-- Generation Time: Oct 30, 2015 at 04:13 PM
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

CREATE TABLE IF NOT EXISTS `tblSemesterPlanCourses` (
  `fnkPlanId` int(11) NOT NULL,
  `fnkYear` tinyint(1) NOT NULL,
  `fnkTerm` varchar(10) NOT NULL,
  `fnkCourseId` int(11) NOT NULL,
  `fldDisplayOrder` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblSemesterPlanCourses`
--

INSERT INTO `tblSemesterPlanCourses` (`fnkPlanId`, `fnkYear`, `fnkTerm`, `fnkCourseId`, `fldDisplayOrder`) VALUES
(1, 1, 'Fall', 190, 1),
(1, 1, 'Fall', 461, 2),
(1, 1, 'Fall', 653, 3),
(1, 1, 'Fall', 1198, 4),
(1, 1, 'Fall', 1269, 5),
(1, 1, 'Spring', 194, 1),
(1, 1, 'Spring', 462, 2),
(1, 1, 'Spring', 1270, 3),
(1, 1, 'Spring', 2120, 4),
(1, 1, 'Spring', 2143, 5),
(1, 2, 'Fall', 195, 2),
(1, 2, 'Fall', 378, 1),
(1, 2, 'Fall', 2121, 3),
(1, 2, 'Fall', 2146, 4),
(1, 2, 'Spring', 196, 1),
(1, 2, 'Spring', 381, 2),
(1, 2, 'Spring', 829, 3),
(1, 2, 'Spring', 1960, 4),
(1, 3, 'Fall', 199, 1),
(1, 3, 'Fall', 203, 2),
(1, 3, 'Fall', 204, 3),
(1, 3, 'Fall', 208, 4),
(1, 3, 'Fall', 383, 5),
(1, 3, 'Spring', 200, 3),
(1, 3, 'Spring', 202, 1),
(1, 3, 'Spring', 207, 2),
(1, 3, 'Spring', 391, 4),
(1, 4, 'Fall', 215, 1),
(1, 4, 'Fall', 217, 3),
(1, 4, 'Fall', 219, 2),
(1, 4, 'Fall', 386, 4),
(1, 4, 'Fall', 392, 5),
(1, 4, 'Spring', 205, 2),
(1, 4, 'Spring', 210, 1),
(1, 4, 'Spring', 213, 3),
(1, 4, 'Spring', 388, 4),
(1, 4, 'Spring', 390, 6),
(1, 4, 'Spring', 393, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblSemesterPlanCourses`
--
ALTER TABLE `tblSemesterPlanCourses`
 ADD PRIMARY KEY (`fnkPlanId`,`fnkYear`,`fnkTerm`,`fnkCourseId`), ADD KEY `fnkCourseId` (`fnkCourseId`);

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
