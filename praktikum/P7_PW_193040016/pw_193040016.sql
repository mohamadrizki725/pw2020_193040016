-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2020 at 09:17 AM
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
-- Database: `pw_193040016`
--

-- --------------------------------------------------------

--
-- Table structure for table `elektronik`
--

CREATE TABLE `elektronik` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `panel` varchar(100) NOT NULL,
  `ukuran` varchar(100) NOT NULL,
  `resolusi` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `elektronik`
--

INSERT INTO `elektronik` (`id`, `foto`, `nama`, `panel`, `ukuran`, `resolusi`, `harga`) VALUES
(1, '1.jpg', 'Xiaomi 4A324', 'AMOLED', '32 Inch', '1080p', 1897000),
(2, '2.jpg', 'Coocaa 40D5A', 'LED', '40 Inch', '1080p', 1980000),
(3, '4.jpg', 'Changchong L43H4', 'IPS', '43 Inch', '1080p', 3049000),
(4, '3.jpg', 'Sharp Aquos 24LE170', 'LCD', '24 Inch', '720p', 1095000),
(5, '5.jpg', 'TCL 32A3', 'LED', '32 Inch', '720p', 1830000),
(6, '6.jpg', 'LG 32LM630', 'IPS', '32 Inch', '1080p', 2225000),
(7, '7.jpg', 'Samsung 32N4300', 'AMOLED', '4O Inch', '1080p', 4520000),
(8, '8.jpg', 'Polytron CinemaX', 'LED', '32 Inch', '720p', 1975000),
(9, '9.jpg', 'Ichiko ST5526', 'IPS', '55 Inch', '2160p', 4899000),
(10, '10.jpg', 'Sony Bravia 55X8000', 'AMOLED', '55 Inch', '1440p', 8799000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'rizki', '$2y$10$EJelW1xnI5Ole2MkYC5R6ukW1r5BOLCyriu8Wuhx61EkKHJxGnXWe'),
(3, 'udin', '$2y$10$S5b8PtiBrEDG9EkBdKv84emB7pOHEzxBOsvdE7yx68KIRb3soLedO'),
(4, 'admin', '$2y$10$laXo9RHSosZgN0t7dM2IHuKR3zNv9hXGLUZgV4/m/4vbEEVxI1CFC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `elektronik`
--
ALTER TABLE `elektronik`
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
-- AUTO_INCREMENT for table `elektronik`
--
ALTER TABLE `elektronik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
