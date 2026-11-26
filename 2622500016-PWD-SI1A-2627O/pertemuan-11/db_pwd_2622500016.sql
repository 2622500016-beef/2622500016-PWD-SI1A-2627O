-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 26, 2026 at 09:31 AM
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
-- Database: `db_pwd_2622500016`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kontak_2622500016`
--

CREATE TABLE `tbl_kontak_2622500016` (
  `id` int NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `semester` tinyint DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jenis_pesan` varchar(20) DEFAULT NULL,
  `minat` varchar(50) DEFAULT NULL,
  `prodi` varchar(2) DEFAULT NULL,
  `pesan` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_kontak_2622500016`
--

INSERT INTO `tbl_kontak_2622500016` (`id`, `nama`, `email`, `semester`, `tanggal`, `jenis_pesan`, `minat`, `prodi`, `pesan`) VALUES
(1, 'Ahmad  nizar  fadila', 'nizar@atmaluhur.ac.id', 2, '2026-11-26', 'saran', 'HTML, CSS', 'TI', 'ini percobaan'),
(2, 'Andi', 'andi@example.com', 2, '2026-11-26', 'pertanyaan', 'HTML, CSS', 'TI', 'Saya ingin belajar pemrograman web.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_kontak_2622500016`
--
ALTER TABLE `tbl_kontak_2622500016`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_kontak_2622500016`
--
ALTER TABLE `tbl_kontak_2622500016`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
