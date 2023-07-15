-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jul 2023 pada 07.28
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indonesiasehat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `masyarakat`
--

CREATE TABLE `masyarakat` (
  `id` int(11) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `riwayat` varchar(255) NOT NULL,
  `vaksin` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `usia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `masyarakat`
--

INSERT INTO `masyarakat` (`id`, `nik`, `nama`, `riwayat`, `vaksin`, `alamat`, `usia`) VALUES
(13, '3175097107050001', 'Farras Iqbal Tawakal', 'Tidak Pernah Terinveksi Covid', 'Sinopharm', 'Jl.Angsa n0.21 004/05 condet Jakarta Timur', '18'),
(14, '3175', 'Muti Freyana Putra', 'Tidak Pernah Terinveksi Covid', 'Moderna', 'Jl.Bebek n0.21 004/05 condet Jakarta Timur', '16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `nik`, `nama`, `password`, `level`) VALUES
(2, '3175', 'iqbal', 'pass', 'admin'),
(7, '4175', 'balong', 'mas', 'Masyarakat'),
(8, '3100', 'Farras Iqbal Tawakal', 'password', 'Masyarakat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vaksin`
--

CREATE TABLE `vaksin` (
  `id_vaksin` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `dosis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `vaksin`
--

INSERT INTO `vaksin` (`id_vaksin`, `nama`, `dosis`) VALUES
(1, 'Sinovac', '120,000 Dosis'),
(2, 'AstraZeneca', '100,000 Dosis'),
(4, 'Sinopharm', '10,000 Dosis');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `vaksin`
--
ALTER TABLE `vaksin`
  ADD PRIMARY KEY (`id_vaksin`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `masyarakat`
--
ALTER TABLE `masyarakat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `vaksin`
--
ALTER TABLE `vaksin`
  MODIFY `id_vaksin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
