-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2016 at 03:06 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `umrohzone`
--

-- --------------------------------------------------------

--
-- Table structure for table `agen`
--

CREATE TABLE IF NOT EXISTS `agen` (
`no_agen` int(11) NOT NULL,
  `direktur` varchar(255) NOT NULL,
  `kontak_direktur` varchar(255) NOT NULL,
  `ppij` int(11) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `no_rek` varchar(255) NOT NULL,
  `nama_agen` varchar(255) NOT NULL,
  `notelp` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `rating` varchar(2) NOT NULL,
  `propinsi` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `status_visa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
`no_booking` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `status_payment` tinyint(1) NOT NULL,
  `status_dokumen` tinyint(1) NOT NULL,
  `no_resi` varchar(255) NOT NULL,
  `status_visa` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE IF NOT EXISTS `hotel` (
`id` int(11) NOT NULL,
  `koordinat` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `review` text NOT NULL,
  `fasilitas` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
`id` int(11) NOT NULL,
  `syarat` text NOT NULL,
  `agenda` text NOT NULL,
  `fasilitas` text NOT NULL,
  `id_waktutempat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jamaah`
--

CREATE TABLE IF NOT EXISTS `jamaah` (
  `id_user` int(11) NOT NULL,
  `id_jamaah` int(11) NOT NULL,
  `mahrom` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `upgrade` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE IF NOT EXISTS `paket` (
  `kode_bookingpaket` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `waktu` date NOT NULL,
  `durasi` int(11) NOT NULL,
  `lokasi_berangkat` varchar(255) NOT NULL,
  `id_hotel` int(11) NOT NULL,
  `kuota` int(11) NOT NULL,
  `discount` varchar(15) NOT NULL,
  `rating` varchar(2) NOT NULL,
  `id_pesawat` int(11) NOT NULL,
  `id_info` int(11) NOT NULL,
  `id_agen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penerbangan`
--

CREATE TABLE IF NOT EXISTS `penerbangan` (
  `id_waktutempat` int(11) NOT NULL,
  `id_penerbangan` int(11) NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `bandara` varchar(255) NOT NULL,
  `terminal` varchar(100) NOT NULL,
  `kode_bookingbnb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pesawat`
--

CREATE TABLE IF NOT EXISTS `pesawat` (
`id` int(11) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `makanan` varchar(255) NOT NULL,
  `hiburan` varchar(255) NOT NULL,
  `penghargaan` varchar(255) NOT NULL,
  `rating` varchar(2) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_rek` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `waktu_tempat`
--

CREATE TABLE IF NOT EXISTS `waktu_tempat` (
`id` int(11) NOT NULL,
  `waktu_manasik` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agen`
--
ALTER TABLE `agen`
 ADD PRIMARY KEY (`no_agen`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
 ADD PRIMARY KEY (`no_booking`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jamaah`
--
ALTER TABLE `jamaah`
 ADD PRIMARY KEY (`id_user`,`id_jamaah`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
 ADD PRIMARY KEY (`kode_bookingpaket`);

--
-- Indexes for table `penerbangan`
--
ALTER TABLE `penerbangan`
 ADD PRIMARY KEY (`id_waktutempat`,`id_penerbangan`);

--
-- Indexes for table `pesawat`
--
ALTER TABLE `pesawat`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `waktu_tempat`
--
ALTER TABLE `waktu_tempat`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agen`
--
ALTER TABLE `agen`
MODIFY `no_agen` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
MODIFY `no_booking` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pesawat`
--
ALTER TABLE `pesawat`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `waktu_tempat`
--
ALTER TABLE `waktu_tempat`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
