-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2022 at 10:26 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_takahskh`
--

-- --------------------------------------------------------

--
-- Table structure for table `unor`
--

CREATE TABLE `unor` (
  `id` int(3) NOT NULL,
  `unor_id` varchar(32) NOT NULL,
  `unor` varchar(120) NOT NULL,
  `opd` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unor`
--

INSERT INTO `unor` (`id`, `unor_id`, `unor`, `opd`) VALUES
(1, '', 'INSPEKTORAT', 'INSPEKTORAT KABUPATEN'),
(2, '', 'BADAN KEPEGAWAIAN PENDIDIKAN DAN PELATIHAN', 'BADAN KEPEGAWAIAN PENDIDIKAN DAN PELATIHAN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `unor`
--
ALTER TABLE `unor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `unor`
--
ALTER TABLE `unor`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
