-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2020 at 01:39 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
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
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'M. FARHAN AS SIDDIQ', '193040010', 'farhan@unpas.ac.id', 'Teknik Informatika', ''),
(2, 'FAHRI ARLIANSYAH', '193040011', 'fahri@unpas.ac.id', 'Teknik Informatika', ''),
(3, 'AJI FATTAH A.D', '193040012', 'aji@unpas.ac.id', 'Teknik Informatika', ''),
(4, 'AYU SRI RAHAYU', '193040013', 'ayu@unpas.ac.id', 'Teknik Informatika', ''),
(5, 'M RIZKY FAUZAN', '193040014', 'rizkyf@unpas.ac.id', 'Teknik Informatika', ''),
(6, 'SELI SUHAELI S', '193040015', 'seli@unpas.ac.id', 'Teknik Informatika', ''),
(7, 'M RIZKI RAMDANI', '193040016', 'rizkir@unpas.ac.id', 'Teknik Informatika', ''),
(8, 'PIKI JUHRIL K', '193040017', 'piki@unpas.ac.id', 'Teknik Informatika', ''),
(9, 'ADITYA PRATAMA S', '193040018', 'aditya@unpas.ac.id', 'Teknik Informatika', ''),
(10, 'TAUFIK HIDAYAT', '193040019', 'taufik@unpas.ac.id', 'Teknik Informatika', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
