-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2018 at 06:53 AM
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
-- Database: `account`
--
CREATE DATABASE IF NOT EXISTS `account` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `account`;

-- --------------------------------------------------------

--
-- Table structure for table `tb_account`
--

CREATE TABLE `tb_account` (
  `nama` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_account`
--

INSERT INTO `tb_account` (`nama`, `username`, `password`, `gender`) VALUES
('feryadi', 'feryadi', 'feryadi', 'L');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_account`
--
ALTER TABLE `tb_account`
  ADD PRIMARY KEY (`username`);
--
-- Database: `biodata`
--
CREATE DATABASE IF NOT EXISTS `biodata` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `biodata`;

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `kode` varchar(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `tmp_lahir` varchar(15) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` tinyint(1) NOT NULL,
  `alamat` varchar(35) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`kode`, `nama`, `tmp_lahir`, `tgl_lahir`, `jk`, `alamat`, `status`, `catatan`) VALUES
('1', 'Feryadi', 'sambas', '1996-02-02', 1, 'sambas', 0, 'i still love you, maybe'),
('2', 'Reny Oktavia', 'Pemangkat', '1996-10-01', 1, 'Tebas', 0, 'ex');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`kode`);
--
-- Database: `codingan`
--
CREATE DATABASE IF NOT EXISTS `codingan` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `codingan`;

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`) VALUES
(5, 'Sony Xperia Z5 Premium'),
(6, 'Microsoft Lumia 650'),
(7, 'Google Pixel'),
(8, 'Nokia 3310');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Database: `db_ghober`
--
CREATE DATABASE IF NOT EXISTS `db_ghober` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_ghober`;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3'),
(4, 'Feryadi', 'feryadialoi', 'feryadialoi@gmail.com', 'd79b16b91915ad5b05270e606417e2a0'),
(5, 'user', 'user', 'user@user.com', 'ee11cbb19052e40b07aac0ca060c23ee'),
(6, 'aloi', 'aloi', 'aloi@aloi.com', '5882b239e4d032d1de6d6b8e275844aa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Database: `db_perpustakaanpc`
--
CREATE DATABASE IF NOT EXISTS `db_perpustakaanpc` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_perpustakaanpc`;

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `nis` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tmp_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('l','p') NOT NULL,
  `tingkat` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `isbn` varchar(16) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `tahun_terbit` varchar(4) NOT NULL,
  `jumlah_buku` varchar(4) NOT NULL,
  `lokasi` enum('Rak1','Rak2','Rak3','Rak4','Rak5','Rak6','Rak7','Rak8','Rak9','Rak10') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_peminjaman`
--

CREATE TABLE `tb_peminjaman` (
  `isbn` varchar(16) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `nis` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(50) NOT NULL,
  `status` varchar(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`username`, `status`, `nama`, `password`) VALUES
('admin', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
('user', 'user', 'user', 'ee11cbb19052e40b07aac0ca060c23ee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`isbn`);

--
-- Indexes for table `tb_peminjaman`
--
ALTER TABLE `tb_peminjaman`
  ADD KEY `isbn` (`isbn`,`nis`),
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_peminjaman`
--
ALTER TABLE `tb_peminjaman`
  ADD CONSTRAINT `tb_peminjaman_ibfk_1` FOREIGN KEY (`isbn`) REFERENCES `tb_buku` (`isbn`),
  ADD CONSTRAINT `tb_peminjaman_ibfk_2` FOREIGN KEY (`nis`) REFERENCES `tb_anggota` (`nis`);
--
-- Database: `malasngoding_login`
--
CREATE DATABASE IF NOT EXISTS `malasngoding_login` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `malasngoding_login`;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Feryadi', 'feryadialoi', 'd79b16b91915ad5b05270e606417e2a0'),
(2, 'admin', 'admin', 'd79b16b91915ad5b05270e606417e2a021232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
  `status` varchar(5) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`id`, `status`, `nama`, `username`, `password`) VALUES
(0, 'user', 'user', 'user', 'ee11cbb19052e40b07aac0ca060c23ee'),
(1, 'admin', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(3, 'user', 'Feryadi', 'feryadi', 'ee11cbb19052e40b07aac0ca060c23ee'),
(4, 'user', 'Kevin', 'kevin', 'ee11cbb19052e40b07aac0ca060c23ee');

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
('15420933', 'Feryadi', 'sambas', '2018-07-16', 'l', 'SMA'),
('15420934', 'aloi', 'sambass', '2018-07-18', 'l', 'TK/PG'),
('15420947', 'Mikazuki', 'Tsuki', '1212-12-12', 'l', 'SMA'),
('15420955', 'Lucia', 'Roselia', '1998-12-12', 'p', 'SMA'),
('15420960', 'Kotaro Saotome', 'Okinawa', '1997-11-20', 'l', 'SMA'),
('15420988', 'Mikaela', 'Swizz', '2000-12-12', 'l', 'SMA'),
('1542099', 'Ohara Mari', 'Mahora Gakuen', '1997-06-13', 'p', 'SMA'),
('1542203', 'Inori', 'Tokyo', '1996-11-25', 'p', 'SMA');

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
(72, 'Yuuki no Tsubasa', 'Rimi Sakihata', 'ASCII Media Japan', '', '1212056480321', '7', 'rak4', '2018-06-07'),
(73, 'My Adventure', 'Anonymous', 'NKZ', '2011', '1212550369874', '6', 'rak7', '2018-06-14'),
(74, 'My Wish', 'Yumi Tooyama', 'Aniplex Media Production', '2014', '1213365008254', '8', 'rak4', '2018-06-13');

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
(3, 'Forbidden Programming Language', '1542099242', 'Riko', '2018-04-01', '2018-05-05', 'kembali'),
(22, 'Belajar SQL', '11212121', 'Kevin', '2018-05-02', '2018-05-10', 'kembali'),
(23, 'Belajar PHP', '1121212', 'Kevin', '2018-05-01', '2018-05-15', 'kembali'),
(62, 'Mai Hime', '15420945', 'Minami', '2018-06-12', '2018-06-15', 'kembali'),
(63, 'Mai Hime', '15420945', 'Minami', '2018-02-02', '2018-08-08', 'kembali'),
(64, 'Mai Hime Yuki', '15420945', 'Minami', '2018-02-02', '2018-02-06', 'kembali'),
(65, 'Mai Hime', '15420945', 'Minami', '2018-06-06', '2018-06-08', 'kembali'),
(66, 'Mai Hime', '15420945', 'Minami', '0000-00-00', '0000-00-00', 'kembali'),
(67, 'Mai Hime', '15420945', 'Minami', '2018-02-02', '2018-08-08', 'kembali'),
(68, 'Mai Hime', '15420945', 'Minami', '2018-08-08', '2021-06-18', 'kembali'),
(69, 'Mai Hime', '15420945', 'Minami', '2018-06-12', '2019-08-13', 'kembali'),
(70, 'Mai Hime', '15420945', 'Minami', '2018-02-02', '2020-03-10', 'kembali'),
(71, 'Mai Hime Yuki', '15420945', 'Minami', '2018-02-02', '2020-11-11', 'kembali'),
(72, 'Mai Hime Yuki', '15420945', 'Minami', '2018-08-08', '1970-01-01', 'kembali'),
(73, 'Mai Hime', '15420945', 'Minami', '2018-08-08', '0000-00-00', 'kembali'),
(74, 'Mai Hime', '15420945', 'Minami', '2018-08-08', '0000-00-00', 'kembali'),
(75, 'Mai Hime', '15420945', 'Minami', '2018-08-08', '1970-01-01', 'kembali'),
(76, 'Mai Hime', '15420945', 'Minami', '2018-06-12', '0000-00-00', 'kembali'),
(77, 'Mai Hime', '15420945', 'Minami', '2018-06-06', '1970-01-01', 'kembali'),
(78, 'Mai Hime', '15420945', 'Minami', '2018-06-06', '1970-01-01', 'kembali'),
(79, 'Mai Hime', '15420945', 'Minami', '2018-02-02', '2018-07-21', 'kembali'),
(80, 'Mai Hime', '15420945', 'Minami', '2018-06-06', '0000-00-00', 'kembali'),
(81, 'Mai Hime', '15420945', 'Minami', '2018-06-06', '2018-09-26', 'kembali'),
(82, 'Mai Hime', '15420945', 'Minami', '2018-08-08', '2018-11-04', 'kembali'),
(83, 'Mai Hime', '15420945', 'Minami', '2018-05-05', '2018-10-06', 'kembali'),
(84, 'Mai Hime', '15420945', 'Minami', '2018-06-29', '2018-07-14', 'kembali'),
(85, 'Mai Hime', '15420945', 'Minami', '2018-07-05', '2019-01-12', 'pinjam');

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `nis` (`nis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
--
-- Database: `perpustakaanpc`
--
CREATE DATABASE IF NOT EXISTS `perpustakaanpc` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `perpustakaanpc`;

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `nis` varchar(15) NOT NULL,
  `nama_anggota` varchar(50) NOT NULL,
  `tmp_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('l','p') NOT NULL,
  `tingkat` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_anggota`
--

INSERT INTO `tb_anggota` (`nis`, `nama_anggota`, `tmp_lahir`, `tgl_lahir`, `jk`, `tingkat`) VALUES
('15420932', 'Feren', 'Sambas', '2018-07-18', 'p', 'TK/PG'),
('15420933', 'Feryadi', 'Sambas', '2018-07-18', 'l', 'TK/PG'),
('15420934', 'Handy', 'Pontianak', '2018-07-18', 'l', 'TK/PG'),
('15420944', 'Kevin', 'Pontianak', '2018-07-18', 'l', 'SMA'),
('15420964', 'Willy Yanpraga', 'Pontianak', '2018-07-18', 'l', 'TK/PG');

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `isbn` varchar(13) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `tahun_terbit` varchar(4) NOT NULL,
  `jumlah_buku` int(3) NOT NULL,
  `lokasi` enum('Rak1','Rak2','Rak3','Rak4','Rak5','Rak6','Rak7','Rak8','Rak9','Rak10') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`isbn`, `judul`, `pengarang`, `penerbit`, `tahun_terbit`, `jumlah_buku`, `lokasi`) VALUES
('00001', 'Matematika', 'Feryadi', 'Erlangga', '1968', 5, 'Rak1'),
('00002', 'Bahasa Indoneisa', 'Feryadi', 'Erlangga', '1968', 5, 'Rak1'),
('00003', 'Bahasa Inggris', 'Feryadi', 'Erlangga', '1968', 5, 'Rak1'),
('00004', 'IPA', 'Feryadi', 'Erlangga', '1968', 5, 'Rak1'),
('00005', 'IPS', 'Feryadi', 'Erlangga', '1968', 5, 'Rak1'),
('00006', 'Kalkulus I', 'Feryadi', 'Erlangga', '1968', 5, 'Rak1'),
('00007', 'Kalkulus II', 'Feryadi', 'Erlangga', '1968', 5, 'Rak1'),
('00008', 'Aljabar Linear', 'Feryadi', 'Erlangga', '1968', 5, 'Rak1'),
('00009', 'Statistika', 'Feryadi', 'Erlangga', '1968', 5, 'Rak1'),
('00010', 'Algoritma Pemrograman', 'Feryadi', 'Erlangga', '1968', 5, 'Rak1'),
('00011', 'Logika Pemrograman', 'Feryadi', 'Erlangga', '1968', 5, 'Rak1'),
('00012', 'SIstem Informasi Manajemen', 'Feryadi', 'Erlangga', '1968', 5, 'Rak1'),
('00013', 'Sistem Basis Data', 'Feryadi', 'Erlangga', '1968', 5, 'Rak1'),
('00014', 'Rekayasa Perangkat Lunak', 'Feryadi', 'Erlangga', '1968', 5, 'Rak1'),
('00015', 'Pemrograman', 'Feryadi', 'Erlangga', '1968', 5, 'Rak1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detil_peminjaman`
--

CREATE TABLE `tb_detil_peminjaman` (
  `kode_pinjam` varchar(6) NOT NULL,
  `isbn` varchar(13) NOT NULL,
  `lama_pinjam` int(3) NOT NULL,
  `jumlah` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_peminjaman`
--

CREATE TABLE `tb_peminjaman` (
  `kode_pinjam` varchar(6) NOT NULL,
  `nis` varchar(13) NOT NULL,
  `tgl_pinjam` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_peminjaman`
--

INSERT INTO `tb_peminjaman` (`kode_pinjam`, `nis`, `tgl_pinjam`) VALUES
('P0001', '15420933', '0000-00-00'),
('P0002', '15420933', '0000-00-00'),
('P0003', '15420933', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_temp_buku`
--

CREATE TABLE `tb_temp_buku` (
  `isbn` varchar(13) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `tahun_terbit` varchar(4) NOT NULL,
  `jumlah_buku` int(3) NOT NULL,
  `lokasi` enum('Rak1','Rak2','Rak3','Rak4','Rak5','Rak6','Rak7','Rak8','Rak9','Rak10') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_temp_buku`
--

INSERT INTO `tb_temp_buku` (`isbn`, `judul`, `pengarang`, `penerbit`, `tahun_terbit`, `jumlah_buku`, `lokasi`) VALUES
('00001', 'Matematika', 'Feryadi', 'Erlangga', '1968', 5, 'Rak1'),
('00002', 'Bahasa Indoneisa', 'Feryadi', 'Erlangga', '1968', 5, 'Rak1'),
('00003', 'Bahasa Inggris', 'Feryadi', 'Erlangga', '1968', 5, 'Rak1'),
('00004', 'IPA', 'Feryadi', 'Erlangga', '1968', 5, 'Rak1'),
('00005', 'IPS', 'Feryadi', 'Erlangga', '1968', 5, 'Rak1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(50) NOT NULL,
  `level` varchar(5) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`username`, `level`, `nama_user`, `password`) VALUES
('admin', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
('user', 'user', 'user', 'ee11cbb19052e40b07aac0ca060c23ee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`isbn`);

--
-- Indexes for table `tb_detil_peminjaman`
--
ALTER TABLE `tb_detil_peminjaman`
  ADD KEY `kode_pinjam` (`kode_pinjam`),
  ADD KEY `isbn` (`isbn`);

--
-- Indexes for table `tb_peminjaman`
--
ALTER TABLE `tb_peminjaman`
  ADD PRIMARY KEY (`kode_pinjam`),
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `tb_temp_buku`
--
ALTER TABLE `tb_temp_buku`
  ADD PRIMARY KEY (`isbn`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_detil_peminjaman`
--
ALTER TABLE `tb_detil_peminjaman`
  ADD CONSTRAINT `tb_detil_peminjaman_ibfk_1` FOREIGN KEY (`isbn`) REFERENCES `tb_buku` (`isbn`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_detil_peminjaman_ibfk_2` FOREIGN KEY (`kode_pinjam`) REFERENCES `tb_peminjaman` (`kode_pinjam`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_peminjaman`
--
ALTER TABLE `tb_peminjaman`
  ADD CONSTRAINT `tb_peminjaman_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `tb_anggota` (`nis`) ON UPDATE CASCADE;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

--
-- Dumping data for table `pma__designer_settings`
--

INSERT INTO `pma__designer_settings` (`username`, `settings_data`) VALUES
('root', '{\"angular_direct\":\"direct\",\"snap_to_grid\":\"off\",\"relation_lines\":\"true\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"db_perpustakaanpc\",\"table\":\"tb_peminjaman\"},{\"db\":\"perpustakaanpc\",\"table\":\"tb_peminjaman\"},{\"db\":\"perpustakaanpc\",\"table\":\"tb_anggota\"},{\"db\":\"perpustakaan\",\"table\":\"tb_transaksi\"},{\"db\":\"db_perpustakaanpc\",\"table\":\"tb_buku\"},{\"db\":\"perpustakaan\",\"table\":\"tb_buku\"},{\"db\":\"db_perpustakaanpc\",\"table\":\"tb_anggota\"},{\"db\":\"perpustakaan\",\"table\":\"tb_anggota\"},{\"db\":\"db_perpustakaanpc\",\"table\":\"tb_user\"},{\"db\":\"perpustakaan\",\"table\":\"tbuser\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2018-07-31 04:53:00', '{\"collation_connection\":\"utf8mb4_unicode_ci\",\"ThemeDefault\":\"pmahomme\",\"Export\\/file_template_server\":\"perpustakaan\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
