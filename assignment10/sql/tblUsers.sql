-- phpMyAdmin SQL Dump
-- version 4.2.9
-- http://www.phpmyadmin.net
--
-- Host: webdb.uvm.edu
-- Generation Time: Nov 09, 2015 at 12:47 PM
-- Server version: 5.5.45-37.4-log
-- PHP Version: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `KBEVINS_books`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblUsers`
--

CREATE TABLE IF NOT EXISTS `tblUsers` (
  `pmkEmail` varchar(30) NOT NULL,
  `fldFirstName` varchar(30) NOT NULL,
  `fldLastName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblUsers`
--

INSERT INTO `tblUsers` (`pmkEmail`, `fldFirstName`, `fldLastName`) VALUES
('johndoe@uvm.edu', 'John', 'Doe'),
('kbevins@uvm.edu', 'Kyra', 'Bevins');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblUsers`
--
ALTER TABLE `tblUsers`
 ADD PRIMARY KEY (`pmkEmail`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

