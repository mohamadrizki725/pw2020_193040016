-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2020 at 05:32 PM
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
-- Database: `tubes_193040016`
--

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `cpu` varchar(255) NOT NULL,
  `vga` varchar(255) NOT NULL,
  `storage` varchar(255) NOT NULL,
  `layar` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`id`, `nama`, `cpu`, `vga`, `storage`, `layar`, `harga`, `gambar`) VALUES
(1, 'ASUS ROG G531', 'INTEL CORE I5 9300H', 'NVIDIA GTX 1650', '512 SSD / 8GB RAM', 'IPS 15.6', 15000000, 'asusrogg531.png'),
(2, 'ACER NITRO 5', 'AMD RYZEN 5 3550H', 'GTX 1050', '512 SSD / 8GB RAM', 'IPS 15.6', 12000000, 'acernitro5.png'),
(3, 'LENOVO LEGION Y530', 'INTEL CORE I5 8300H', 'NVIDIA GTX 1050 TI', '1TB HDD / 8GB RAM', 'IPS 15.6', 12500000, 'legiony530.png'),
(4, 'HP OMEN', 'INTEL CORE I7 8750H', 'RTX 2060', '1TB SSD / 16GB RAM', 'IPS 15.6', 16000000, 'omen.png'),
(5, 'ACER PREDATOR TRITON 300', 'INTEL CORE I5 9300H', 'NVDIA GTX 1650', '1TB SSD / 8GB RAM', 'IPS 15.6', 20000000, 'triton.png'),
(24, 'ASUS ZEPHYRUS G5022', 'AMD RYZEN 7 3750H', 'NVIDIA GTX 1660TI', '512 SSD / 8GB RAM', 'IPS 15.6', 16000000, 'asusze.png'),
(25, 'MSI APLHA 15', 'AMD RYZEN 7 3750H', 'AMD RADEON RX 5500M', '512 GB SSD / 8GB RAM', 'IPS 15.6', 14500000, 'msi-alpha.png'),
(50, 'ASUS TUF FX505DT', 'AMD RYZEN 5 3550H ', 'GTX 1650', '1TB HDD / 8GB RAM', 'IPS 15.6', 11800000, '5ec1542c84b23.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(3, 'pw', '$2y$10$AqFHUWbvKua4B.exbwJh4u2t/vo8bXP6Q1o4tQ65yMGA7nBU0lLne'),
(4, 'udin', '$2y$10$fTqd5G/abBNIZW5yNn.Y2uPBiFV19OzRnSWdjhz4PPVAHOn18nSvK'),
(5, 'irma', '$2y$10$yIN6yQ6hauh3qDOCJQHTv.vgYRwLI0AC6eJMosZ.5f5TuJBlOt7wy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
