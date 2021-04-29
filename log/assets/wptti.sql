-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2020 at 07:23 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wptti`
--

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `id_registrasi` int(11) NOT NULL,
  `nama` varchar(30) CHARACTER SET latin1 NOT NULL,
  `ttl` varchar(50) CHARACTER SET latin1 NOT NULL,
  `no_registrasi` varchar(30) NOT NULL DEFAULT '-',
  `nim` varchar(20) DEFAULT '-',
  `prodi` varchar(30) CHARACTER SET latin1 DEFAULT '-',
  `score` int(10) NOT NULL,
  `foto` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nik` bigint(30) NOT NULL,
  `bukti` varchar(50) CHARACTER SET latin1 DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`id_registrasi`, `nama`, `ttl`, `no_registrasi`, `nim`, `prodi`, `score`, `foto`, `nik`, `bukti`) VALUES
(17, 'Leo Viranda Millennium', 'Pardasuka, 24 August 1999', '-', '', '', 0, '20190826_142533.jpg', 1805272408990001, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nik` bigint(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kontak` bigint(15) NOT NULL,
  `level` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nik`, `username`, `password`, `email`, `kontak`, `level`) VALUES
(1805272408990001, 'leoviranda', '$2y$10$VjsCsY.D0eyxPnNl/MHYjODhE/zDfVqUnM7hSnLpT2vv31qY4XLu2', 'leo.viranda24@gmail.com', 82306803517, 1),
(111111111111111111, 'admin', '$2y$10$jLHAlYIP57YqJZSJ5HqGYu.bVd2nIruGf6Hk7uRXZ5vFgfgqRDMIy', 'leo.14117167@student.itera.ac.id', 82306803517, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id_registrasi`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id_registrasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD CONSTRAINT `registrasi_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `user` (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
