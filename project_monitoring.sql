-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 16 Jul 2022 pada 07.29
-- Versi server: 5.6.38
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_monitoring`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `projects`
--

CREATE TABLE `projects` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `client` varchar(100) NOT NULL,
  `leader` varchar(100) NOT NULL,
  `start_date` varchar(10) NOT NULL,
  `end_date` varchar(10) NOT NULL,
  `progress` int(2) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `projects`
--

INSERT INTO `projects` (`id`, `name`, `client`, `leader`, `start_date`, `end_date`, `progress`) VALUES
(5, 'Website HIMA TI', 'Politeknik Hasnur', 'Junaidi Abdul Rahman', '2022-07-05', '2022-07-27', 85),
(2, 'Booking Room System', 'Wetland Square Banjarmasin', 'Fakhrurozi', '2022-07-30', '2022-08-23', 24),
(4, 'Sistem Akademik Mahasiswa', 'Politeknik Unggulan Kalimantan', 'Junaidi Abdul Rahman', '2022-07-25', '2022-09-27', 65),
(6, 'Sistem Pendaftaran TA', 'Politeknik Hasnur', 'Fakhrurozi', '2022-07-05', '2022-07-27', 23);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
