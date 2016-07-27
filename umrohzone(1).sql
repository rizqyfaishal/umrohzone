-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2016 at 03:04 AM
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
  `status_visa` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
`no_booking` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `status_payment` tinyint(2) NOT NULL,
  `status_dokumen` tinyint(1) NOT NULL,
  `no_resi` varchar(255) NOT NULL,
  `status_visa` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`no_booking`, `id_user`, `id_paket`, `status_payment`, `status_dokumen`, `no_resi`, `status_visa`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 0, '', 0, '2016-07-26 16:33:50', '2016-07-26 09:33:50');

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
  `deskripsi` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
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
  `id_waktutempat` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
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
  `upgrade` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_07_26_002802_create_sessions_table', 1);

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
  `id_agen` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`kode_bookingpaket`, `harga`, `waktu`, `durasi`, `lokasi_berangkat`, `id_hotel`, `kuota`, `discount`, `rating`, `id_pesawat`, `id_info`, `id_agen`, `created_at`, `updated_at`) VALUES
('1', 0, '0000-00-00', 0, '', 0, 0, '', '', 0, 0, 0, '2016-07-26 12:57:40', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `kode_bookingbnb` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
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
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rekening`
--

CREATE TABLE IF NOT EXISTS `rekening` (
`id` int(11) NOT NULL,
  `bank` varchar(266) NOT NULL,
  `no_rek` varchar(266) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8_unicode_ci,
  `payload` text COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `no_rek` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `no_hp`, `password`, `email`, `alamat`, `bank`, `no_rek`, `created_at`, `updated_at`) VALUES
(1, 'sd', '', '$2y$10$axldLitNHdlwUN/5QKmLtuJFWeGgIil2KObqr2hzRwwEuQ4IM/Qy2', 'asd@sd.ca', 'sd', 'bri', '23', '2016-07-26 15:40:56', '2016-07-26 08:40:56'),
(2, '', '', '$2y$10$labou6VGfDvB6K3uANCAsOhEETOkpScjmxRZlFUo8vviXmRRCjS06', 'sds@sds.com', 'asdsad', '', '', '2016-07-26 01:51:45', '2016-07-26 01:51:45');

-- --------------------------------------------------------

--
-- Table structure for table `waktu_tempat`
--

CREATE TABLE IF NOT EXISTS `waktu_tempat` (
`id` int(11) NOT NULL,
  `waktu_manasik` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

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
-- Indexes for table `rekening`
--
ALTER TABLE `rekening`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
 ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
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
MODIFY `no_booking` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
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
-- AUTO_INCREMENT for table `rekening`
--
ALTER TABLE `rekening`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `waktu_tempat`
--
ALTER TABLE `waktu_tempat`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
