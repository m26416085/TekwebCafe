-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2018 at 01:06 PM
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
-- Table structure for table `eventcafe`
--

CREATE TABLE `eventcafe` (
  `idevent` int(10) NOT NULL,
  `namaevent` varchar(50) NOT NULL,
  `deskripsievent` varchar(300) NOT NULL,
  `tanggalevent` varchar(20) NOT NULL,
  `kodepromoevent` varchar(20) NOT NULL,
  `gambarevent` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventcafe`
--

INSERT INTO `eventcafe` (`idevent`, `namaevent`, `deskripsievent`, `tanggalevent`, `kodepromoevent`, `gambarevent`) VALUES
(1, 'Lebaran', '', '1998-06-15', 'LEBARANTIBA', 0x39636136306265302d346566382d346235622d386563332d653132376432336639656233),
(2, 'Petra', '', '1998-01-01', '', 0x313334393338),
(3, '', '', '', '', ''),
(4, '', '', '', '', ''),
(5, 'Dejavu!', '', '0001-01-01', '', 0x64656a617675212121),
(6, 'Dejavu 2!!', '', '2000-02-02', 'DEJAVU!!!', 0x64656a6176752121212e6a7067),
(7, 'Dejavu! 3', '', '0001-01-01', '', 0x64656a6176752121212e6a7067);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eventcafe`
--
ALTER TABLE `eventcafe`
  ADD PRIMARY KEY (`idevent`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eventcafe`
--
ALTER TABLE `eventcafe`
  MODIFY `idevent` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
