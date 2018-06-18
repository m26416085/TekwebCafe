-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2018 at 01:30 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbcafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `membercafe`
--

CREATE TABLE `membercafe` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `tgllahir` varchar(20) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membercafe`
--

INSERT INTO `membercafe` (`id`, `nama`, `tgllahir`, `jk`, `alamat`, `username`, `password`) VALUES
(2, 'komo', '1998-02-02', 'L', 'Samarinda', 'komo', 'komo'),
(3, 'momo', '1991-02-12', 'W', 'Samarinda', 'momo', 'momo'),
(4, 'chloe', '1997-02-22', 'W', 'Samarinda', 'chloe', 'chloe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `membercafe`
--
ALTER TABLE `membercafe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `membercafe`
--
ALTER TABLE `membercafe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
