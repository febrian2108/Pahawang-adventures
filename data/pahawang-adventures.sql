-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 24, 2024 at 10:21 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pahawang-adventures`
--

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` int UNSIGNED NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `notelp` varchar(25) DEFAULT NULL,
  `jmlorg` int DEFAULT NULL,
  `durasi` int DEFAULT NULL,
  `paket1` int DEFAULT NULL,
  `paket2` int DEFAULT NULL,
  `paket3` int DEFAULT NULL,
  `total` int DEFAULT NULL,
  `reg_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `nama`, `email`, `tanggal`, `notelp`, `jmlorg`, `durasi`, `paket1`, `paket2`, `paket3`, `total`, `reg_date`) VALUES
(1, 'rama', 'ramayuni@gmail.com', '2024-05-24', '9432043200', 2, 2, 1, 1, 1, 10800000, '2024-05-24 10:14:15'),
(3, 'endi', 'endiskuy@gmail.com', '2024-05-24', '9094320942', 10, 7, 1, 0, 1, 105000000, '2024-05-24 10:07:48'),
(5, 'yogi', 'yogi@gmail.com', '2024-05-24', '4327238555', 6, 2, 1, 0, 1, 18000000, '2024-05-24 10:08:08'),
(6, 'endi', 'endiskuy@gmail.com', '2024-05-24', '0324094923', 5, 4, 1, 1, 0, 44000000, '2024-05-24 10:08:25'),
(7, 'yudi', 'yudi01@gmail.com', '2024-05-24', '8459358843', 45, 2, 1, 1, 1, 243000000, '2024-05-24 10:08:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `reg_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `reg_date`) VALUES
(12124, 'admin', '$2y$10$o0F/LbqkT5VWuJ491XFQBuonvPfwlTz2mwj0c8pqabjTHgYZsR5fK', '2024-05-23 19:08:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12126;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
