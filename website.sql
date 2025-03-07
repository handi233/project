-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Nov 2023 pada 01.21
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien_baru`
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
-- Struktur dari tabel `pasien_lama`
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
-- Indeks untuk tabel `pasien_baru`
--
ALTER TABLE `pasien_baru`
  ADD PRIMARY KEY (`no_nik`) USING BTREE,
  ADD KEY `id` (`id`) USING BTREE;

--
-- Indeks untuk tabel `pasien_lama`
--
ALTER TABLE `pasien_lama`
  ADD KEY `id` (`id`) USING BTREE,
  ADD KEY `no_nik` (`no_nik`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pasien_baru`
--
ALTER TABLE `pasien_baru`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pasien_lama`
--
ALTER TABLE `pasien_lama`
  ADD CONSTRAINT `pasien_lama_ibfk_1` FOREIGN KEY (`no_nik`) REFERENCES `pasien_baru` (`no_nik`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pasien_lama_ibfk_2` FOREIGN KEY (`id`) REFERENCES `pasien_baru` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
