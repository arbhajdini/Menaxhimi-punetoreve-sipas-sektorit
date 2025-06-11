-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2025 at 05:03 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umps`
--

-- --------------------------------------------------------

--
-- Table structure for table `perdoruesit_umps`
--

CREATE TABLE `perdoruesit_umps` (
  `id_perdoruesi_umps` int(11) NOT NULL,
  `perdoruesi_umps` varchar(255) NOT NULL,
  `fjalekalimi_umps` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `perdoruesit_umps`
--

INSERT INTO `perdoruesit_umps` (`id_perdoruesi_umps`, `perdoruesi_umps`, `fjalekalimi_umps`) VALUES
(4, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `perdoruesit_umps`
--
ALTER TABLE `perdoruesit_umps`
  ADD PRIMARY KEY (`id_perdoruesi_umps`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `perdoruesit_umps`
--
ALTER TABLE `perdoruesit_umps`
  MODIFY `id_perdoruesi_umps` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
