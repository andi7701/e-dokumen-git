-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2022 at 12:50 AM
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
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `nip` varchar(21) NOT NULL,
  `id_unor` int(3) DEFAULT NULL,
  `jenis_kelamin` enum('LAKI-LAKI','PEREMPUAN') NOT NULL,
  `agama` enum('ISLAM','KRISTEN','KATOLIK','HINDU','BUDDHA','KONGHUCHU','LAIN-LAIN') NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `foto` varchar(40) NOT NULL,
  `level` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `username`, `password`, `nama`, `nip`, `id_unor`, `jenis_kelamin`, `agama`, `alamat`, `no_hp`, `foto`, `level`) VALUES
(25, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin', '', NULL, '', '', '', '', '', 'admin'),
(28, '199806062022032017', 'ac44ebd989ba36b0462e9cb995bf21ad', 'NUR HAYATI, A.MD.KOM.', '199806062022032017', 3, 'PEREMPUAN', 'ISLAM', '', '', '', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `berkas_dokumen`
--

CREATE TABLE `berkas_dokumen` (
  `id` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `id_dokumen` int(11) NOT NULL,
  `judul_berkas` varchar(80) NOT NULL,
  `file` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE `dokumen` (
  `id` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokumen`
--

INSERT INTO `dokumen` (`id`, `judul`) VALUES
(1, 'SK CPNS'),
(2, 'SK PNS'),
(3, 'SK KENAIKAN PANGKAT'),
(4, 'SK JABATAN'),
(5, 'IJAZAH  PENDIDIKAN'),
(6, 'KTP'),
(7, 'KK'),
(8, 'AKTA LAHIR'),
(9, 'SURAT NIKAH'),
(10, 'KARTU PEGAWAI'),
(11, 'SK KENAIKAN GAJI BERKALA'),
(12, 'SK HUKUMAN DISIPLIN'),
(13, 'DIKLAT STRUKTURAL'),
(14, 'DIKLAT FUNGSIONAL'),
(15, 'DIKLAT TEKNIS'),
(16, 'SK MUTASI'),
(17, 'SK PENSIUN'),
(20, 'LAIN-LAIN');

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
(3, '', 'BADAN KEPEGAWAIAN PENDIDIKAN DAN PELATIHAN', 'BADAN KEPEGAWAIAN PENDIDIKAN DAN PELATIHAN'),
(4, '', 'BAGIAN UMUM', 'SEKRETARIAT DAERAH');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_unor` (`id_unor`);

--
-- Indexes for table `berkas_dokumen`
--
ALTER TABLE `berkas_dokumen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_akun` (`id_akun`),
  ADD KEY `id_dokumen` (`id_dokumen`);

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unor`
--
ALTER TABLE `unor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `berkas_dokumen`
--
ALTER TABLE `berkas_dokumen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `unor`
--
ALTER TABLE `unor`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `akun`
--
ALTER TABLE `akun`
  ADD CONSTRAINT `akun_ibfk_1` FOREIGN KEY (`id_unor`) REFERENCES `unor` (`id`);

--
-- Constraints for table `berkas_dokumen`
--
ALTER TABLE `berkas_dokumen`
  ADD CONSTRAINT `berkas_dokumen_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `berkas_dokumen_ibfk_2` FOREIGN KEY (`id_dokumen`) REFERENCES `dokumen` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
