-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Agu 2021 pada 17.24
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ali`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ali2`
--

CREATE TABLE `ali2` (
  `id` int(11) NOT NULL,
  `nim` varchar(14) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `program_studi` varchar(50) NOT NULL,
  `alamat_domisili` varchar(100) NOT NULL,
  `nomor_hp` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ali2`
--

INSERT INTO `ali2` (`id`, `nim`, `nama_mahasiswa`, `program_studi`, `alamat_domisili`, `nomor_hp`) VALUES
(3, 'E010318019', 'Muhammad David Riyadi', 'Teknik Informatika', 'Handil Bakti', '0889923223'),
(4, 'E010318020', 'Ali Zainal Ilmi', 'Manajemen Informatika', 'Kapuas', '0827773232');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ali2`
--
ALTER TABLE `ali2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ali2`
--
ALTER TABLE `ali2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
