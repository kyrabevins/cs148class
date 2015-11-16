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
-- Table structure for table `tblBooks`
--

CREATE TABLE IF NOT EXISTS `tblBooks` (
  `pmkTitle` varchar(40) NOT NULL,
  `pmkAuthor` varchar(40) NOT NULL,
  `fldGenre` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblBooks`
--

INSERT INTO `tblBooks` (`pmkTitle`, `pmkAuthor`, `fldGenre`) VALUES
('Harry Potter and the Sorcerer''s Stone', 'J.K. Rowling', 'Fantasy'),
('Of Mice And Men ', 'John Steinbeck', 'Classic');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblBooks`
--
ALTER TABLE `tblBooks`
 ADD PRIMARY KEY (`pmkTitle`,`pmkAuthor`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

