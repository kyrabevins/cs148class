-- phpMyAdmin SQL Dump
-- version 4.2.9
-- http://www.phpmyadmin.net
--
-- Host: webdb.uvm.edu
-- Generation Time: Nov 09, 2015 at 12:48 PM
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
-- Table structure for table `tblUsersBooks`
--

CREATE TABLE IF NOT EXISTS `tblUsersBooks` (
  `fnkEmail` varchar(30) NOT NULL,
  `fnkTitle` varchar(40) NOT NULL,
  `fnkAuthor` varchar(40) NOT NULL,
  `fldDateFinished` date NOT NULL,
  `fldFavorite` tinytext NOT NULL,
  `fldRating` int(1) NOT NULL,
  `fldDescription` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblUsersBooks`
--

INSERT INTO `tblUsersBooks` (`fnkEmail`, `fnkTitle`, `fnkAuthor`, `fldDateFinished`, `fldFavorite`, `fldRating`, `fldDescription`) VALUES
('kbevins@uvm.edu', 'Harry Potter and the Sorcerer''s Stone', 'J.K. Rowling', '2014-08-01', 'Yes', 5, 'This book was one of my all-time favorite books during my childhood. It helped me really get into reading as a kid. Full of magic, excitement, and fun! Loved it!!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblUsersBooks`
--
ALTER TABLE `tblUsersBooks`
 ADD PRIMARY KEY (`fnkEmail`,`fnkTitle`,`fnkAuthor`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

