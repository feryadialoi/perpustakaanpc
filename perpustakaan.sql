-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2018 at 01:30 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--
CREATE DATABASE IF NOT EXISTS `perpustakaan` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `perpustakaan`;

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`id`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `nis` varchar(15) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tmp_lahir` varchar(125) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('l','p') NOT NULL,
  `tingkat` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_anggota`
--

INSERT INTO `tb_anggota` (`nis`, `nama`, `tmp_lahir`, `tgl_lahir`, `jk`, `tingkat`) VALUES
('', '', '', '0000-00-00', '', ''),
('123123132', '123132132', '132132132', '0000-00-00', 'l', 'TK/PG'),
('152000353', 'Erina', 'Shinjuku', '1997-05-12', 'p', 'SMA'),
('15420940', 'Hanami', 'Osaka', '1998-12-12', 'p', 'SMA'),
('15420944', 'Kevin', 'Pontianak', '1997-02-13', 'l', 'SMP'),
('15420945', 'Minami', 'Osaka', '1997-02-14', 'p', 'SMP'),
('15420947', 'Mikazuki', 'Tsuki', '1212-12-12', 'l', 'SMA'),
('15420955', 'Lucia', 'Roselia', '1998-12-12', 'p', 'SMA'),
('15420988', 'Mikaela', 'Swizz', '2000-12-12', 'l', 'SMA'),
('1542203', 'Inori', 'Tokyo', '1996-11-25', 'p', 'SMA'),
('2000000000', 'Haruna', 'Tokyo', '1997-11-11', 'p', 'SMA');

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id` int(9) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `pengarang` varchar(250) NOT NULL,
  `penerbit` varchar(150) NOT NULL,
  `tahun_terbit` varchar(4) NOT NULL,
  `isbn` varchar(25) NOT NULL,
  `jumlah_buku` varchar(3) NOT NULL,
  `lokasi` enum('rak1','rak2','rak3','rak4','rak5','rak6','rak7','rak8','rak9','rak10') NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`id`, `judul`, `pengarang`, `penerbit`, `tahun_terbit`, `isbn`, `jumlah_buku`, `lokasi`, `tgl_input`) VALUES
(20, 'Mai Hime', 'Saito Muramasa', 'Shouten Jump', '2018', '1515202015', '5', 'rak3', '2017-12-12'),
(21, 'Mai Hime Yuki', 'Saito Muramasa', 'Shouten Jump', '2018', '1515202022', '5', 'rak2', '2018-03-15'),
(25, '', '', '', '1968', '', '', 'rak1', '0000-00-00'),
(26, '', '', '', '1968', '', '', 'rak1', '0000-00-00'),
(27, '', '', '', '1968', '', '', 'rak1', '0000-00-00'),
(28, '810354023026', '', '', '1968', '', '', 'rak1', '0000-00-00'),
(29, '810354023026', '', '', '1968', '', '', 'rak1', '0000-00-00'),
(30, '', '', '', '1968', '', '', 'rak1', '0000-00-00'),
(31, '', '', '', '1968', '', '', 'rak1', '0000-00-00'),
(32, '', '', '', '1968', '', '', 'rak1', '0000-00-00'),
(33, '', '', '', '1968', '', '', 'rak1', '0000-00-00'),
(34, '', '', '', '1968', '', '', 'rak1', '0000-00-00'),
(35, '', '', '', '1968', '', '', 'rak1', '0000-00-00'),
(36, '15', '', '', '1968', '', '', 'rak1', '0000-00-00'),
(37, '15', '', '', '1968', '', '', 'rak1', '0000-00-00'),
(38, '15', '', '', '1968', '', '', 'rak1', '0000-00-00'),
(39, '', '', '', '1968', '', '', 'rak1', '0000-00-00'),
(40, '', '', '', '1968', '', '', 'rak1', '0000-00-00'),
(41, '', '', '', '1968', '', '', 'rak1', '0000-00-00'),
(42, '', '', '', '1968', '', '', 'rak1', '0000-00-00'),
(43, '', '', '', '1968', '', '', 'rak1', '0000-00-00'),
(44, '810354023026', '', '', '1968', '', '', 'rak1', '0000-00-00'),
(45, '', '', '', '1968', '', '', 'rak1', '0000-00-00'),
(46, '', '', '', '1968', '', '', 'rak1', '0000-00-00'),
(47, '', '', '', '1968', '', '', 'rak1', '0000-00-00'),
(48, '', '', '', '1968', '', '', 'rak1', '0000-00-00'),
(49, '550', '550', '550', '1972', '550', '55', 'rak4', '2000-12-12'),
(50, '', '', '', '1968', '', '', 'rak1', '0000-00-00'),
(51, '', '', '', '1968', '', '', 'rak1', '0000-00-00'),
(52, '', '', '', '1968', '', '', 'rak1', '0000-00-00'),
(53, '', '', '', '1968', '', '', 'rak1', '0000-00-00'),
(54, '', '', '', '1968', '', '', 'rak1', '0000-00-00'),
(55, 'sasasasasa', '', '', '1968', '', '', 'rak1', '0000-00-00'),
(56, 'asd', '', '', '1968', '', '', 'rak1', '0000-00-00'),
(57, 'sdasd', '', '', '1968', '', '', 'rak1', '0000-00-00'),
(58, 'sdasd', '', '', '1968', '', '', 'rak1', '0000-00-00'),
(59, '', '', '', '1968', '', '', 'rak1', '0000-00-00'),
(60, '', '', '', '1968', '', '', 'rak1', '0000-00-00'),
(61, 'My Adventure', 'Kinoshita Yumiko', 'Shouten Jump', '2010', '102993902919', '2', 'rak2', '2012-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id` int(9) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `nis` varchar(15) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `status` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id`, `judul`, `nis`, `nama`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES
(3, 'Forbidden Programming Language', '1542099242', 'Riko', '2018-04-01', '2018-05-01', 'Pinjam'),
(22, 'Belajar SQL', '11212121', 'Kevin', '2018-05-02', '2018-05-10', 'kembali'),
(23, 'Belajar PHP', '1121212', 'Kevin', '2018-05-01', '2018-05-15', 'Pinjam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
