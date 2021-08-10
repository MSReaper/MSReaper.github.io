-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2020 at 07:49 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `studnotify`
--

CREATE TABLE `studnotify` (
  `sno` int(11) NOT NULL,
  `description` longtext DEFAULT NULL,
  `msg` longtext DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studnotify`
--

INSERT INTO `studnotify` (`sno`, `description`, `msg`) VALUES
(1, 'ddd', 'dddd'),
(2, 'fffffffffffffffffffffffffffffffffffffffffffffff', 'ffffffffffffffffffffffff\r\nffffffffffffffffffffffffffffff\r\nffffffffffffffffffffffffffffffffffffffff\r\nfffffffffffffffffffffffffffffffffffffffffffffffff\r\nffffffffffffffffffffffffffffffffffffffffffffffffffff\r\n\r\nffffffffffffffffffffffffffff\r\nffffffffffffffffffffffffffffff\r\ngggggggggggggg'),
(3, 'ff', 'ff'),
(4, 'fffaaaaaa', 'fffffffffffffffff'),
(5, 'ananya', 'ssss');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studnotify`
--
ALTER TABLE `studnotify`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studnotify`
--
ALTER TABLE `studnotify`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
