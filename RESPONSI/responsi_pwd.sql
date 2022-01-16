-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2022 at 07:21 AM
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
-- Database: `responsi_pwd`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pasien`
--

CREATE TABLE `data_pasien` (
  `nomor` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `ttl` date NOT NULL,
  `temting` varchar(200) NOT NULL,
  `hasil` varchar(50) NOT NULL,
  `tindakan` varchar(50) NOT NULL,
  `tgl_periksa` date NOT NULL,
  `dokter` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pasien`
--

INSERT INTO `data_pasien` (`nomor`, `nama`, `ttl`, `temting`, `hasil`, `tindakan`, `tgl_periksa`, `dokter`) VALUES
('AN01', 'Tommy', '2012-06-02', 'Amuntai', 'flu', 'pemberian obat flu vitamin', '2022-01-13', 'dr. Arga Bramantya, Sp.A.'),
('AN02', 'Giselle', '2009-02-05', 'Amuntai', 'Maag', 'pemberian ranitidine', '2022-01-13', 'dr. Arga Bramantya, Sp.A.'),
('GG01', 'Riska', '2000-01-01', 'Banjarbaru', 'gigi', 'konsul', '2022-01-14', 'dr. Monica, M.Si,Sp.KG'),
('GG02', 'Mitha', '1998-06-12', 'Kelua', 'gigi bungsu', 'pencabutan gigi bungsu', '2022-01-14', 'dr. Monica, M.Si, Sp.KG.'),
('GG03', 'Ocha', '2001-02-08', 'putri jaleha', 'gigi', 'perawatan', '2022-01-15', 'dr. Monica, M.Si, Sp.KG.'),
('PD01', 'Lintang', '2003-07-21', 'Mabuun', 'Obesitas', 'konsul berkala', '2022-01-14', 'dr. Lily Mabelle, Sp.PD.'),
('SJ01', 'Chan', '2001-05-28', 'Tanjung', 'GAD', 'konsul 2 minggu/sekali', '2022-01-14', 'dr. Ade Kenzie Sanjaya, Sp.KJ.'),
('SR01', 'Mahendra', '2014-04-28', 'Tanjung', 'Meningitis', 'terapi simtomatik', '2022-01-14', 'dr. Yunanda Nugroho, Sp.S.');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `kodedok` varchar(30) NOT NULL,
  `namadok` varchar(50) NOT NULL,
  `spesialis` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `notelp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `uname` varchar(20) NOT NULL,
  `pass` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uname`, `pass`) VALUES
('omaulidya', 'atiny');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `No` varchar(10) NOT NULL,
  `namaob` varchar(50) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pasien`
--
ALTER TABLE `data_pasien`
  ADD PRIMARY KEY (`nomor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
