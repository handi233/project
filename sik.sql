-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2025 at 11:13 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sik`
--

-- --------------------------------------------------------

--
-- Table structure for table `pasien_baru`
--

CREATE TABLE `pasien_baru` (
  `id` int(16) NOT NULL,
  `no_nik` int(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `email` varchar(20) NOT NULL,
  `tanggal_kunjung` date NOT NULL,
  `poli` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pasien_lama`
--

CREATE TABLE `pasien_lama` (
  `id` int(16) NOT NULL,
  `no_nik` int(16) NOT NULL,
  `tanggal_kunjung` date NOT NULL,
  `poli` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pasien_baru`
--
ALTER TABLE `pasien_baru`
  ADD PRIMARY KEY (`id`,`no_nik`) USING BTREE,
  ADD KEY `id` (`id`) USING BTREE,
  ADD KEY `no_nik` (`no_nik`);

--
-- Indexes for table `pasien_lama`
--
ALTER TABLE `pasien_lama`
  ADD PRIMARY KEY (`id`,`no_nik`) USING BTREE,
  ADD KEY `id` (`id`) USING BTREE,
  ADD KEY `no_nik` (`no_nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pasien_baru`
--
ALTER TABLE `pasien_baru`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pasien_lama`
--
ALTER TABLE `pasien_lama`
  ADD CONSTRAINT `pasien_lama_ibfk_1` FOREIGN KEY (`no_nik`) REFERENCES `pasien_baru` (`no_nik`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `pasien_lama_ibfk_2` FOREIGN KEY (`id`) REFERENCES `pasien_baru` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
