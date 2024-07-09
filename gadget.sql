-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2023 at 01:40 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gadget`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_admin`
--

CREATE TABLE `data_admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_admin`
--

INSERT INTO `data_admin` (`id`, `nama`, `jenis_kelamin`, `username`, `password`) VALUES
(1, 'fasyaa', 'Laki - laki', 'fasyaal', 'fasyaal'),
(2, 'syami', 'laki_laki', 'syami', 'syami'),
(3, 'hadi', 'laki_laki', 'hadi', 'hadi'),
(4, 'ripa', 'Laki-Laki', 'ripa', 'ripa'),
(7, 'Kodri', 'Perempuan', 'kodri', 'kodri123'),
(8, 'Chongpay', 'Laki-Laki', 'congpay', 'congpay123'),
(9, 'congpay', 'Laki-Laki', 'congpay', 'congpay123');

-- --------------------------------------------------------

--
-- Table structure for table `data_operator`
--

CREATE TABLE `data_operator` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_operator`
--

INSERT INTO `data_operator` (`id`, `nama`, `jenis_kelamin`, `username`, `password`) VALUES
(2, 'operator', 'Perempuan', 'operator', 'operator123');

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `gambar` varchar(250) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`id`, `nama`, `jenis_kelamin`, `gambar`, `username`, `password`) VALUES
(1, 'syami', 'ceuwe', '582640949_bg1kecil.jpg', 'syami', '$2y$10$SNSv3I08R7H3AtOoNbov0eCpF3DrrQaMK.oBb4Q8i25uQwDQdp07W'),
(2, 'fasya', 'ceuwe', '745177506_bg1kecil.jpg', 'fasya', '$2y$10$x11GDPRbcUis0F9fEglAu..yrTfJqgszTqZcjAEVZ2AbdcUWTkaEq');

-- --------------------------------------------------------

--
-- Table structure for table `inpo_gadget`
--

CREATE TABLE `inpo_gadget` (
  `id` int(11) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `seri` varchar(100) NOT NULL,
  `tahun_produksi` date NOT NULL,
  `ram` varchar(100) NOT NULL,
  `processor` varchar(100) NOT NULL,
  `os` varchar(50) NOT NULL,
  `ssd_hdd` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inpo_gadget`
--

INSERT INTO `inpo_gadget` (`id`, `jenis`, `merk`, `seri`, `tahun_produksi`, `ram`, `processor`, `os`, `ssd_hdd`) VALUES
(4, 'HP', 'Asus', 'Tuf Gaming F15', '2023-09-08', '16gb', 'intel i7', 'Android', 'Hsd'),
(5, 'Pc', 'Asus', 'Tuf Gaming F15', '2023-08-30', '16gb', 'intel i7', 'Windows', 'SSD'),
(6, 'Hp', 'Asus', 'Tuf Gaming F15', '2023-08-29', '16gb', 'intel i7', 'Windows', 'SSD'),
(7, 'Laptop', '', 'Tuf Gaming F15', '2023-08-29', '16gb', 'intel i7', 'Windows', 'SSD'),
(8, 'Tablet', 'Asus', 'Tuf Gaming F15', '2023-09-06', '16gb', 'intel i7', 'Windows', 'SSD'),
(10, 'Laptop', '', 'A60', '2023-10-13', '16gb', 'intel i7', 'Windows', 'SSD');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(225) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Fasya', 'fasyaal', 'fasyaal123', 'admin'),
(2, 'Arka', 'arkakey', 'arkakey123', 'user'),
(3, 'Riski', 'riski', 'riski123', 'operator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_admin`
--
ALTER TABLE `data_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_operator`
--
ALTER TABLE `data_operator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inpo_gadget`
--
ALTER TABLE `inpo_gadget`
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
-- AUTO_INCREMENT for table `data_admin`
--
ALTER TABLE `data_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `data_operator`
--
ALTER TABLE `data_operator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `inpo_gadget`
--
ALTER TABLE `inpo_gadget`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
