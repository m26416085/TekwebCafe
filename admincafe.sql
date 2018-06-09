-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2018 at 03:17 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

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
-- Table structure for table `admincafe`
--

CREATE TABLE `admincafe` (
  `id` int(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `tgllahir` varchar(20) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admincafe`
--

INSERT INTO `admincafe` (`id`, `nama`, `tgllahir`, `jk`, `alamat`, `username`, `password`) VALUES
(8, 'Jeffrey', '1998-06-16', 'L', 'Jl. Siwalankerto', 'jeffrey', 'jeffrey');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admincafe`
--
ALTER TABLE `admincafe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admincafe`
--
ALTER TABLE `admincafe`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
<<<<<<< HEAD
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
=======
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
>>>>>>> ae75d0d6b6bfdf76a536f62e9f823e6d6b9168e3
