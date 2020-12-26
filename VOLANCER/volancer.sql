-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2020 at 03:26 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `volancer`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kegiatan`
--

CREATE TABLE `tb_kegiatan` (
  `id_keg` int(225) NOT NULL,
  `judul_keg` text NOT NULL,
  `kat_keg` varchar(100) NOT NULL,
  `des_keg` text NOT NULL,
  `tgl_keg` date NOT NULL,
  `tempat_keg` text NOT NULL,
  `email_keg` varchar(225) NOT NULL,
  `nama_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kegiatan`
--

INSERT INTO `tb_kegiatan` (`id_keg`, `judul_keg`, `kat_keg`, `des_keg`, `tgl_keg`, `tempat_keg`, `email_keg`, `nama_file`) VALUES
(7, 'Relawan Konservasi', 'konservasi', 'Peduli dengan pelestarian lingkungan konservasi penangkaran bakau', '2020-12-20', 'Wisata Hutan Manggrove', 'yayang123@yahoo.com', 'Mangrove-Boardwalk-Denpasar-1.jpg'),
(8, 'Relawan Event Pekan Raya', 'acara', 'Diperlukan relawan sebanyak 40 orang untuk menjadi partisipan di acara pekan raya gianyar', '2020-12-30', 'Lapangan Astina Gianyar', 'dindahartani24@gmail.com', 'pekanraya.jpg'),
(9, 'Relawan Menolong Korban Banjir', 'humanis', 'Menolong korban banjir dengan bersama-sama pergi ke posko darurat dan membagikan bahan pangan', '2020-12-14', 'Posko Darurat Bencana Desa Mawar', 'ssss4@gmail.com', 'poskobanjir.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `no_hp` varchar(225) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `email`, `no_hp`, `password`, `level`) VALUES
(1, 'wasantab', 'wasanta.bhaskara32@gmail.com', '081236915511', 'bhaskara32', 'admin'),
(2, 'dindahartani', 'dindahartani24@gmail.com', '087860758656', 'hartani02', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  ADD PRIMARY KEY (`id_keg`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  MODIFY `id_keg` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
