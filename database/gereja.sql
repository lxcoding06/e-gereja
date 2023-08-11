-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 01 Jul 2023 pada 13.45
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gereja`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `baptis`
--

CREATE TABLE `baptis` (
  `id` int(11) NOT NULL,
  `nama_anak` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `tp_lahir` varchar(50) NOT NULL,
  `lg_lahir` varchar(50) NOT NULL,
  `lg_baptis` varchar(50) NOT NULL,
  `ayah` varchar(50) NOT NULL,
  `ibu` varchar(50) NOT NULL,
  `saksi` varchar(50) NOT NULL,
  `petugas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jemaat`
--

CREATE TABLE `jemaat` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `tp_lahir` varchar(50) NOT NULL,
  `lg_lahir` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kematian`
--

CREATE TABLE `kematian` (
  `id` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tp_lahir` varchar(50) NOT NULL,
  `lg_lahir` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `lg_kematian` varchar(50) NOT NULL,
  `waktu_kematian` varchar(50) NOT NULL,
  `bukti_kematian` varchar(50) NOT NULL,
  `petugas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pernikahan`
--

CREATE TABLE `pernikahan` (
  `id` int(50) NOT NULL,
  `calon_suami` varchar(50) NOT NULL,
  `tp_csuami` varchar(50) NOT NULL,
  `lg_csuami` varchar(50) NOT NULL,
  `calon_istri` varchar(50) NOT NULL,
  `tp_cistri` varchar(50) NOT NULL,
  `lg_cistri` varchar(50) NOT NULL,
  `lg_pernikahan` varchar(50) NOT NULL,
  `saksi1` varchar(50) NOT NULL,
  `saksi2` varchar(50) NOT NULL,
  `petugas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `baptis`
--
ALTER TABLE `baptis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jemaat`
--
ALTER TABLE `jemaat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kematian`
--
ALTER TABLE `kematian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pernikahan`
--
ALTER TABLE `pernikahan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `baptis`
--
ALTER TABLE `baptis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jemaat`
--
ALTER TABLE `jemaat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kematian`
--
ALTER TABLE `kematian`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pernikahan`
--
ALTER TABLE `pernikahan`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
