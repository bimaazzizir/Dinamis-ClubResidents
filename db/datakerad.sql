-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2018 at 05:41 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datakerad`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username_admin` varchar(50) NOT NULL,
  `password_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username_admin`, `password_admin`) VALUES
(3, 'aldrin', 'aldrin'),
(4, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `reservasi_ballroom`
--

CREATE TABLE `reservasi_ballroom` (
  `id_ballroom` int(11) NOT NULL,
  `nama_ballroom` varchar(150) NOT NULL,
  `identitas_ballroom` varchar(150) NOT NULL,
  `ruang_ballroom` varchar(150) NOT NULL,
  `tanggal_ballroom` date NOT NULL,
  `orang_ballroom` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservasi_ballroom`
--

INSERT INTO `reservasi_ballroom` (`id_ballroom`, `nama_ballroom`, `identitas_ballroom`, `ruang_ballroom`, `tanggal_ballroom`, `orang_ballroom`) VALUES
(1, 'Wiro', '089817283921', 'Grand Ballroom 2 [Rp. 1.000.000/ Hour]', '2018-07-28', 212);

-- --------------------------------------------------------

--
-- Table structure for table `reservasi_kamar`
--

CREATE TABLE `reservasi_kamar` (
  `id_reservasi` int(11) NOT NULL,
  `nama_reservasi` varchar(150) NOT NULL,
  `identitas_reservasi` varchar(150) NOT NULL,
  `alamat_reservasi` varchar(150) NOT NULL,
  `checkin_reservasi` date NOT NULL,
  `checkout_reservasi` date NOT NULL,
  `kamar_reservasi` varchar(150) NOT NULL,
  `kasur_reservasi` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservasi_kamar`
--

INSERT INTO `reservasi_kamar` (`id_reservasi`, `nama_reservasi`, `identitas_reservasi`, `alamat_reservasi`, `checkin_reservasi`, `checkout_reservasi`, `kamar_reservasi`, `kasur_reservasi`) VALUES
(3, 'Paijo', '085879123476', 'Prambanan, Klaten', '2018-07-20', '2018-07-22', 'Starlight Room [Rp. 1.000.000/ Day]', 'Double Bed');

-- --------------------------------------------------------

--
-- Table structure for table `reservasi_meetingroom`
--

CREATE TABLE `reservasi_meetingroom` (
  `id_meetingroom` int(11) NOT NULL,
  `nama_meetingroom` varchar(150) NOT NULL,
  `identitas_meetingroom` varchar(150) NOT NULL,
  `tanggal_meetingroom` date NOT NULL,
  `ruang_meetingroom` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservasi_meetingroom`
--

INSERT INTO `reservasi_meetingroom` (`id_meetingroom`, `nama_meetingroom`, `identitas_meetingroom`, `tanggal_meetingroom`, `ruang_meetingroom`) VALUES
(1, 'Supermi', '081324983645', '2018-07-30', 'Room 3 [Rp. 300.000/ Hour]');

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `id_saran` int(11) NOT NULL,
  `nama_saran` varchar(150) NOT NULL,
  `email_saran` varchar(150) NOT NULL,
  `kritik_saran` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`id_saran`, `nama_saran`, `email_saran`, `kritik_saran`) VALUES
(1, 'John Cena', 'johncena88@gmail.com', 'ntapz!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `reservasi_ballroom`
--
ALTER TABLE `reservasi_ballroom`
  ADD PRIMARY KEY (`id_ballroom`);

--
-- Indexes for table `reservasi_kamar`
--
ALTER TABLE `reservasi_kamar`
  ADD PRIMARY KEY (`id_reservasi`);

--
-- Indexes for table `reservasi_meetingroom`
--
ALTER TABLE `reservasi_meetingroom`
  ADD PRIMARY KEY (`id_meetingroom`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id_saran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reservasi_ballroom`
--
ALTER TABLE `reservasi_ballroom`
  MODIFY `id_ballroom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reservasi_kamar`
--
ALTER TABLE `reservasi_kamar`
  MODIFY `id_reservasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reservasi_meetingroom`
--
ALTER TABLE `reservasi_meetingroom`
  MODIFY `id_meetingroom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
