-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Bulan Mei 2020 pada 15.43
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040016`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nrp` char(9) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'M. FARHAN AS SIDDIQ', '193040010', 'farhan@unpas.ac.id', 'Teknik Informatika', 'iron.jpg'),
(2, 'FAHRI ARLIANSYAH', '193040011', 'fahri@unpas.ac.id', 'Teknik Informatika', 'hulk.jpg'),
(3, 'AJI FATTAH A.D', '193040012', 'aji@unpas.ac.id', 'Teknik Informatika', 'batman.jpg'),
(4, 'AYU SRI RAHAYU', '193040013', 'ayu@unpas.ac.id', 'Teknik Informatika', 'spiderman.jpg'),
(5, 'M RIZKY FAUZAN', '193040014', 'rizkyf@unpas.ac.id', 'Teknik Informatika', 'superman.jpg'),
(6, 'SELI SUHAELI S', '193040015', 'seli@unpas.ac.id', 'Teknik Informatika', 'thor.jpg'),
(7, 'M RIZKI RAMDANI', '193040016', 'rizkir@unpas.ac.id', 'Teknik Informatika', 'captain.jpg'),
(9, 'ADITYA PRATAMA S', '193040018', 'aditya@unpas.ac.id', 'Teknik Informatika', 'joker.jpg'),
(10, 'TAUFIK HIDAYAT', '193040019', 'taufik@unpas.ac.id', 'Teknik Informatika', 'doctor.jpg'),
(32, 'PIKI JURIL', '193040000', 'piki@mail.ac.id', 'Teknik Mesin', 'nophoto.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(3, 'udin', '$2y$10$U1FkfwdAEtiFgRn0FY/gGe0OmBWvu7K9o6ZKMSirMui04UroUSk/u'),
(4, 'admin', '$2y$10$mt.Yc2x0KMAmBCpf4AP4i.T4Fmn6IkOEBawl54kcnIW6f.FH26T8C');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
