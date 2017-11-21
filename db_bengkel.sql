-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2017 at 01:54 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bengkel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('elokanugrah', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `username` varchar(10) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `no_hp` varchar(13) DEFAULT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`username`, `nama`, `alamat`, `tgl_lahir`, `no_hp`, `password`) VALUES
('bahrudin', 'Bahrudin', 'Jalan Rantauan', '2017-11-15', '554423413214', ''),
('mahmud', 'Mahmud Sarifudin', 'Jalan Rusak Banjir Tergenang', '2017-11-09', '081235578891', 'mahmud123'),
('purnomo', 'Purnomo Mahrudi', 'Jalan Bagus KM. 3', '2007-02-06', '081276238999', 'purnomo123'),
('rahmat', 'Rahmat Ilahi Nuryakin', 'Jalan Rusak Simpang Lima', '2017-11-04', '081122335598', 'rahmat123');

-- --------------------------------------------------------

--
-- Table structure for table `pengerjaan`
--

CREATE TABLE `pengerjaan` (
  `id_pengerjaan` varchar(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `id_perbaikan` int(11) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `nopol` varchar(12) NOT NULL,
  `tgl_masuk` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengerjaan`
--

INSERT INTO `pengerjaan` (`id_pengerjaan`, `username`, `id_perbaikan`, `merk`, `tipe`, `nopol`, `tgl_masuk`) VALUES
('asdfghj', 'rahmat', 5, 'Toyota', 'Innova', 'BM 1203 NA', '2017-11-11'),
('c', 'purnomo', 5, 'c', 'c', 'c', '2017-11-17'),
('rrrrr', 'purnomo', 5, 'a', 'a', 'a', '2016-02-09'),
('uuuhh', 'mahmud', 5, 'Honda', 'CRV', 'BM 97 GG', '2017-11-13'),
('Xe', 'purnomo', 6, 'X', 'X', 'X', '2017-11-15');

-- --------------------------------------------------------

--
-- Table structure for table `perbaikan`
--

CREATE TABLE `perbaikan` (
  `id_perbaikan` int(11) NOT NULL,
  `nama_perbaikan` varchar(40) DEFAULT NULL,
  `deskripsi_perbaikan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perbaikan`
--

INSERT INTO `perbaikan` (`id_perbaikan`, `nama_perbaikan`, `deskripsi_perbaikan`) VALUES
(5, 'Cat Siram', 'Pengecatan ulang seluruh bodi mobil'),
(6, 'Ketok', 'Ketok Magic'),
(7, 'bbbbzzz', 'b');

-- --------------------------------------------------------

--
-- Table structure for table `stat_pengerjaan`
--

CREATE TABLE `stat_pengerjaan` (
  `id_statpengerjaan` int(11) NOT NULL,
  `id_pengerjaan` varchar(11) NOT NULL,
  `tgl_pengerjaan` date DEFAULT NULL,
  `status` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stat_pengerjaan`
--

INSERT INTO `stat_pengerjaan` (`id_statpengerjaan`, `id_pengerjaan`, `tgl_pengerjaan`, `status`) VALUES
(86, 'asdfghj', '2017-11-11', 'Mobil diterima di bengkel'),
(87, 'uuuhh', '2017-11-13', 'Mobil diterima di bengkel'),
(88, 'uuuhh', '2017-11-14', 'Pembongkaran Interior'),
(89, 'BBBB', '2017-11-15', 'ss'),
(90, 'asdfghj', '2017-11-15', 'X'),
(91, 'uuuhh', '2017-11-15', 'ffFF'),
(92, 'Xe', '2017-11-15', 'Mobil diterima di bengkel'),
(93, 'c', '2017-11-16', 'Mobil diterima di bengkel'),
(94, 'Xe', '2017-11-16', 'Pembongkaran Interior'),
(95, 'rrrrr', '2017-11-19', 'Mobil diterima di bengkel'),
(97, 'VVVVVV', '2017-11-20', 'Mobil diterima di bengkel'),
(98, 'VVVVVV', '2017-11-20', 'CCCCCCC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pengerjaan`
--
ALTER TABLE `pengerjaan`
  ADD PRIMARY KEY (`id_pengerjaan`);

--
-- Indexes for table `perbaikan`
--
ALTER TABLE `perbaikan`
  ADD PRIMARY KEY (`id_perbaikan`);

--
-- Indexes for table `stat_pengerjaan`
--
ALTER TABLE `stat_pengerjaan`
  ADD PRIMARY KEY (`id_statpengerjaan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `perbaikan`
--
ALTER TABLE `perbaikan`
  MODIFY `id_perbaikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `stat_pengerjaan`
--
ALTER TABLE `stat_pengerjaan`
  MODIFY `id_statpengerjaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
