-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2021 at 01:11 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `outhands`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`username`, `password`) VALUES
('Admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `loginreg`
--

CREATE TABLE `loginreg` (
  `username` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` int(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `file` varchar(20) NOT NULL,
  `id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginreg`
--

INSERT INTO `loginreg` (`username`, `email`, `password`, `phone`, `country`, `state`, `city`, `gender`, `file`, `id`) VALUES
('userone', 'aswinsudhakaran98@gm', '3445', 0, 'India', 'Kerala', 'Kottapppally', 'on', '', 4),
('melath', 'aswinsudhakaran98@gm', 'aswin11', 2147483647, 'India', 'Kerala', 'Kottapppally', 'female', '9549e916262ac8af3ac8', 10),
('userone', 'aswinsudhakaran98@gm', '+5+56', 2147483647, 'India', 'Kerala', 'Kottapppally', 'male', 'e7fd1a49f09532899bc9', 14),
('sudha75', 'sdf@gmail.com', 'dfdsf', 0, 'fdsa', 'fasf', 'sfa', 'male', '', 16),
('userone', 'dvd@gmail.com', 'dvv', 0, 'vsdv', 'dv', 'dv', 'male', '51a82056af31ef5c204a', 23),
('userone', 'aswinsudhakaran98@gm', 'userone', 2147483647, 'India', 'Kerala', 'Kottapppally', 'male', 'e97837b74bd9a7aca4b6', 26),
('userone', 'aswinsudhakaran98@gm', 'gff', 0, 'Indiad', 'Kerala', 'Kottapppally', 'male', 'aed6bef1b367825f3dfa', 27);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loginreg`
--
ALTER TABLE `loginreg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loginreg`
--
ALTER TABLE `loginreg`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
