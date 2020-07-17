-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2020 at 11:46 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_toko_tio`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(100) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `satuan_barang` varchar(20) NOT NULL,
  `harga_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `satuan_barang`, `harga_barang`) VALUES
(5, 'mozerela', '2', 2000),
(6, 'banana split', '22', 40002),
(9, 'Dorayaki2', '20', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_transaksi`
--

CREATE TABLE `tb_detail_transaksi` (
  `no_transaksi` char(6) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `harga_barang` int(11) NOT NULL,
  `jumlah_beli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_header_transaksi`
--

CREATE TABLE `tb_header_transaksi` (
  `no_transaksi` char(6) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_temp`
--

CREATE TABLE `tb_temp` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `satuan_barang` varchar(50) NOT NULL,
  `harga_barang` int(11) NOT NULL,
  `jumlah_beli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_temp`
--

INSERT INTO `tb_temp` (`id_barang`, `nama_barang`, `satuan_barang`, `harga_barang`, `jumlah_beli`) VALUES
(0, '', '', 0, 0),
(5, 'mozerela', '2', 2000, 0),
(6, 'banana split', '22', 40002, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `password_user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `email_user`, `password_user`) VALUES
(3, 'zakia', 'zakia2@gmail.com', '9784ea3da268563469df99b2e6593564'),
(5, 'wikaq', 'wikaq@yahoo.com', 'd5761865bf998665615a6de2b1ebe916'),
(6, 'Dani', 'dani@gmail.com', '21232f297a57a5a743894a0e4a801fc3'),
(8, 'sandika', 'sandika@gmail.com', 'f9b594c43e19f184ee59b1164b324602'),
(10, 'faisal', 'faisal@gmail.com', 'f4668288fdbf9773dd9779d412942905'),
(13, 'wati', 'wati@gmail.com', 'a92db7089e286f23cf575b0ddf35bc35'),
(23, 'alibaba', 'alibaba@gmail.com', 'ffccc52b393d6a9b366eb7fe3dff9ab5'),
(26, 'bibu', 'bibu@gmail.com', 'c6cf75507703172cb0732c870e4a008b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  ADD PRIMARY KEY (`no_transaksi`,`id_barang`),
  ADD KEY `no_transaksi` (`no_transaksi`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `tb_header_transaksi`
--
ALTER TABLE `tb_header_transaksi`
  ADD PRIMARY KEY (`no_transaksi`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_temp`
--
ALTER TABLE `tb_temp`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  ADD CONSTRAINT `tb_detail_transaksi_ibfk_1` FOREIGN KEY (`no_transaksi`) REFERENCES `tb_header_transaksi` (`no_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_detail_transaksi_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `tb_barang` (`id_barang`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_header_transaksi`
--
ALTER TABLE `tb_header_transaksi`
  ADD CONSTRAINT `tb_header_transaksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
