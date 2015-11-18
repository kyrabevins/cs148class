p
-- version 4.2.9
-- http://www.phpmyadmin.net
--
-- Host: webdb.uvm.edu
-- Generation Time: Nov 16, 2015 at 10:03 AM
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
-- Table structure for table `tblAdministrators`
--

CREATE TABLE IF NOT EXISTS `tblAdministrators` (
  `pmkAdminId` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblAdministrators`
--

INSERT INTO `tblAdministrators` (`pmkAdminId`) VALUES
('jcrew@uvm.edu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblAdministrators`
--
ALTER TABLE `tblAdministrators`
 ADD PRIMARY KEY (`pmkAdminId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
