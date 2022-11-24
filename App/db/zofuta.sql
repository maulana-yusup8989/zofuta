-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2022 at 05:04 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zofuta`
--

-- --------------------------------------------------------

--
-- Table structure for table `gor`
--

CREATE TABLE `gor` (
  `id_gor` int(11) NOT NULL,
  `nama_gor` varchar(25) NOT NULL,
  `alamat_gor` text NOT NULL,
  `latitude` text NOT NULL,
  `longtitude` text NOT NULL,
  `foto_gor` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gor`
--

INSERT INTO `gor` (`id_gor`, `nama_gor`, `alamat_gor`, `latitude`, `longtitude`, `foto_gor`) VALUES
(2, 'King Futsal', 'Maracang', '-6.5336482', '107.4357717', 'king-futsal.png'),
(3, 'Golden Futsal', 'Citalang', '17', '17', 'golden-futsal.png'),
(4, 'Blessing Futsal', 'Munjul', '20', '20', ''),
(5, 'Galaxy Futsal', 'Sadang', '27', '27', ''),
(6, 'Master Futsal', '12', '12', '12', '');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_lapangan` int(11) NOT NULL,
  `id_gor` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `waktu` text NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `id_lapangan`, `id_gor`, `status`, `waktu`, `tanggal`) VALUES
(1, 1, 2, 'Available', '06.00 - 07.00', '2022-11-23 09:07:10');

-- --------------------------------------------------------

--
-- Table structure for table `lapangan`
--

CREATE TABLE `lapangan` (
  `id_lapangan` int(11) NOT NULL,
  `id_gor` int(11) NOT NULL,
  `nama_lapangan` text NOT NULL,
  `ket_lapangan` text NOT NULL,
  `harga_sewa` int(11) NOT NULL,
  `foto_lapangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lapangan`
--

INSERT INTO `lapangan` (`id_lapangan`, `id_gor`, `nama_lapangan`, `ket_lapangan`, `harga_sewa`, `foto_lapangan`) VALUES
(1, 2, 'Lapangan 1', 'Rumput Sintetis', 100000, '');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id_payment` int(11) NOT NULL,
  `id_gor` int(11) NOT NULL,
  `id_lapangan` int(11) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `tanggal` datetime NOT NULL,
  `id_user` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `durasi_sewa` int(11) NOT NULL,
  `foto_struk` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `id_gor` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama_depan` text NOT NULL,
  `nama_belakang` text NOT NULL,
  `alamat_user` text NOT NULL,
  `nmr_tlp` varchar(13) NOT NULL,
  `email_user` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id_gor`, `username`, `password`, `nama_depan`, `nama_belakang`, `alamat_user`, `nmr_tlp`, `email_user`, `status`) VALUES
(1, 0, 'fahmi123', 'amin17', 'fahmi', 'amin nudin', 'Jatiluhur', '081211878267', 'dhafin.rr@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gor`
--
ALTER TABLE `gor`
  ADD PRIMARY KEY (`id_gor`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `lapangan`
--
ALTER TABLE `lapangan`
  ADD PRIMARY KEY (`id_lapangan`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id_payment`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gor`
--
ALTER TABLE `gor`
  MODIFY `id_gor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lapangan`
--
ALTER TABLE `lapangan`
  MODIFY `id_lapangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id_payment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
