-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2021 at 01:56 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `khs`
--

CREATE TABLE `khs` (
  `NIM` varchar(8) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `kodemk` varchar(5) NOT NULL,
  `namamk` varchar(50) NOT NULL,
  `nilai` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khs`
--

INSERT INTO `khs` (`NIM`, `Nama`, `kodemk`, `namamk`, `nilai`) VALUES
('MHS01', 'Siti', '01', 'Keamanan Komputer', 80),
('MHS03', 'Amirudin', '02', 'Pemrograman Mobile', 78),
('MHS04', 'Siti Maryam', '03', 'Forensik Digital', 88),
('MHS05', 'Jogi', '04', 'Sistem Pendukung Keputusan', 98),
('MHS03', 'Amirudin', '05', 'Interaksi Manusia dan Komputer', 90),
('MHS04', 'Siti Maryam', '01', 'Keamanan Komputer', 75),
('MHS05', 'Jogi', '02', 'Pemrograman Mobile', 88),
('MHS04', 'Siti Maryam', '01', 'Keamanan Komputer', 75);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(5) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jkel` varchar(1) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `tgllhr` date DEFAULT NULL,
  `umur` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jkel`, `alamat`, `tgllhr`, `umur`) VALUES
('MHS01', 'Siti', 'P', 'SOLO', '1999-03-23', '26'),
('MHS03', 'Amirudin', 'L', 'SEMARANG', '1998-08-11', '23'),
('MHS04', 'Siti Maryam', 'P', 'JAKARTA', '1995-04-15', '26'),
('MHS05', 'Jogi', 'L', 'MEDAN', '1998-11-07', '24');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kode` varchar(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `sks` int(10) NOT NULL,
  `sem` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`kode`, `nama`, `sks`, `sem`) VALUES
('01', 'Keamanan Komputer', 3, 5),
('02', 'Pemrograman Mobile', 3, 5),
('03', 'Forensik Digital', 3, 5),
('04', 'Sistem Pendukung Keputusan', 3, 5),
('05', 'Interaksi Manusia dan Komputer', 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `password`, `nama_lengkap`, `email`, `level`) VALUES
('asmara', '263793bc84240378b78f8cf8e725d3b7', 'Herdin Asmara Timor', 'asmara190018212@gmail.com', ''),
('omaulidya', '06e6deabedd10cfc04f215078ee11ca4', 'Ocha Maulidya', 'omaulidya@gmail.com', ''),
('yuno', 'd1d1eaab027a69ce6f30a3b8422f3c1f', 'Yuno J', 'yuyyuno@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `khs`
--
ALTER TABLE `khs`
  ADD KEY `NIM` (`NIM`,`kodemk`),
  ADD KEY `Nama` (`Nama`,`namamk`),
  ADD KEY `kodemk` (`kodemk`),
  ADD KEY `namamk` (`namamk`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `nama` (`nama`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `nama` (`nama`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `khs`
--
ALTER TABLE `khs`
  ADD CONSTRAINT `khs_ibfk_1` FOREIGN KEY (`kodemk`) REFERENCES `matakuliah` (`kode`),
  ADD CONSTRAINT `khs_ibfk_2` FOREIGN KEY (`NIM`) REFERENCES `mahasiswa` (`nim`),
  ADD CONSTRAINT `khs_ibfk_3` FOREIGN KEY (`Nama`) REFERENCES `mahasiswa` (`nama`),
  ADD CONSTRAINT `khs_ibfk_4` FOREIGN KEY (`namamk`) REFERENCES `matakuliah` (`nama`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
