-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2025 at 02:23 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registerpx`
--

-- --------------------------------------------------------

--
-- Table structure for table `pasienbaru`
--

CREATE TABLE `pasienbaru` (
  `id_number` int(20) NOT NULL,
  `no_nik` varchar(16) NOT NULL,
  `no_bpjs` varchar(13) DEFAULT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `jenis_kelamin` char(2) NOT NULL,
  `tmplhir` varchar(20) NOT NULL,
  `tgl` date NOT NULL,
  `stts` varchar(10) NOT NULL,
  `pekerjaan` varchar(15) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pasienlama`
--

CREATE TABLE `pasienlama` (
  `id` int(20) NOT NULL,
  `no_nik` varchar(16) NOT NULL,
  `no_bpjs` varchar(13) DEFAULT NULL,
  `nama_lengkap` varchar(35) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pasienbaru`
--
ALTER TABLE `pasienbaru`
  ADD PRIMARY KEY (`id_number`),
  ADD KEY `no_nik` (`no_nik`),
  ADD KEY `no_bpjs` (`no_bpjs`);

--
-- Indexes for table `pasienlama`
--
ALTER TABLE `pasienlama`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no_nik` (`no_nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pasienbaru`
--
ALTER TABLE `pasienbaru`
  MODIFY `id_number` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pasienlama`
--
ALTER TABLE `pasienlama`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pasienlama`
--
ALTER TABLE `pasienlama`
  ADD CONSTRAINT `pasienlama_ibfk_1` FOREIGN KEY (`no_nik`) REFERENCES `pasienbaru` (`no_nik`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
