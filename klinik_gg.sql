-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2017 at 10:19 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik_gg`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `idAppointment` int(20) NOT NULL,
  `namaDokter` varchar(20) NOT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `waktu` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `keluhan` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `idDokter` varchar(20) NOT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`idDokter`, `nama`, `username`) VALUES
('1', 'dr.Nurul', 'nurul'),
('2', 'dr.Arif', 'arif');

-- --------------------------------------------------------

--
-- Table structure for table `jadwaldokter`
--

CREATE TABLE `jadwaldokter` (
  `jadwalId` varchar(20) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `waktu` varchar(20) DEFAULT NULL,
  `idDokter` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kupon`
--

CREATE TABLE `kupon` (
  `idKupon` varchar(20) NOT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `idPembayaran` int(11) NOT NULL,
  `tanggalPembayaran` date DEFAULT NULL,
  `totalPembayaran` varchar(32) DEFAULT NULL,
  `idKupon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`idPembayaran`, `tanggalPembayaran`, `totalPembayaran`, `idKupon`) VALUES
(4, '0000-00-00', '124155', ''),
(5, '0000-00-00', '10000000000', ''),
(6, '0000-00-00', '1221515', ''),
(7, '0000-00-00', '12215151', ''),
(8, '0000-00-00', '12215151', ''),
(9, '0000-00-00', '124145', ''),
(10, '2017-12-08', '11431145', ''),
(11, '0000-00-00', '124145', ''),
(12, '0000-00-00', '5000000', '');

-- --------------------------------------------------------

--
-- Table structure for table `tanggal`
--

CREATE TABLE `tanggal` (
  `idTanggal` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `idDokter` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tanggal`
--

INSERT INTO `tanggal` (`idTanggal`, `tanggal`, `idDokter`) VALUES
('1', '2017-12-01', '1'),
('2', '2017-12-01', '2'),
('3', '2017-12-02', '1'),
('4', '2017-12-04', '1'),
('5', '2017-12-05', '2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `role`) VALUES
('dokter1', 'dokter1', 'dokter'),
('perawat', 'perawat', 'perawat'),
('dokter2', 'dokter2', 'dokter');

-- --------------------------------------------------------

--
-- Table structure for table `waktukerja`
--

CREATE TABLE `waktukerja` (
  `idWaktu` int(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `idTanggal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `waktukerja`
--

INSERT INTO `waktukerja` (`idWaktu`, `time`, `idTanggal`) VALUES
(1, '08:00-09:00', '1'),
(2, '09:00-10:00', '1'),
(3, '08:00-09:00', '2'),
(4, '10:00-11:00', '1'),
(5, '11:00-12:00', '1'),
(6, '13:00-14:00', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`idAppointment`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`idDokter`);

--
-- Indexes for table `jadwaldokter`
--
ALTER TABLE `jadwaldokter`
  ADD PRIMARY KEY (`jadwalId`),
  ADD KEY `idDokter` (`idDokter`);

--
-- Indexes for table `kupon`
--
ALTER TABLE `kupon`
  ADD PRIMARY KEY (`idKupon`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`idPembayaran`);

--
-- Indexes for table `tanggal`
--
ALTER TABLE `tanggal`
  ADD PRIMARY KEY (`idTanggal`),
  ADD KEY `dokter` (`idDokter`);

--
-- Indexes for table `waktukerja`
--
ALTER TABLE `waktukerja`
  ADD PRIMARY KEY (`idWaktu`),
  ADD KEY `a` (`idTanggal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `idAppointment` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `idPembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `waktukerja`
--
ALTER TABLE `waktukerja`
  MODIFY `idWaktu` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwaldokter`
--
ALTER TABLE `jadwaldokter`
  ADD CONSTRAINT `jadwaldokter_ibfk_1` FOREIGN KEY (`idDokter`) REFERENCES `dokter` (`idDokter`);

--
-- Constraints for table `tanggal`
--
ALTER TABLE `tanggal`
  ADD CONSTRAINT `dokter` FOREIGN KEY (`idDokter`) REFERENCES `dokter` (`idDokter`);

--
-- Constraints for table `waktukerja`
--
ALTER TABLE `waktukerja`
  ADD CONSTRAINT `a` FOREIGN KEY (`idTanggal`) REFERENCES `tanggal` (`idTanggal`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
