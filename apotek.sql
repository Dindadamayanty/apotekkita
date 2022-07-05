-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2022 at 04:05 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotek`
--

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `nomorpasien` varchar(10) NOT NULL,
  `namapasien` varchar(50) NOT NULL,
  `alamatpasien` varchar(50) NOT NULL,
  `nohp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`nomorpasien`, `namapasien`, `alamatpasien`, `nohp`) VALUES
('119876', 'snow white', 'Rukoh', '085260667788'),
('119877', 'yasmin', 'lampriet', '086360876678'),
('119878', 'belle', 'lamdingin', '085261819181'),
('119879', 'mulan', 'batoh', '081360167856'),
('119880', 'flynn rider', 'lambaro	', '085361987654'),
('119881', 'elsa', 'sp.surabaya	', '081360987654');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `kodeobat` varchar(10) NOT NULL,
  `namaobat` varchar(20) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`kodeobat`, `namaobat`, `satuan`, `harga`) VALUES
('ASF1MG', 'Asam Folat Table', 'Botol', 9180),
('ATS60ML', 'Antasida DOEN II Sus', 'Botol', 5198),
('BRH8MG', 'Bromheksin table', 'Tablet', 5200),
('CTR10MG', 'Cetirizin Table', 'Tablet	', 13365),
('KTR10MG', 'Keterolac Injeksi', 'Ampul', 60750),
('MTLP5ML', 'Metoklopramide Injek', 'Ampul', 13500),
('TBCFDC', 'Obat Antituberkulosi', 'Paket', 1620000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `kodeobat` varchar(10) NOT NULL,
  `nomorpasien` varchar(10) NOT NULL,
  `jumlahobat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`kodeobat`, `nomorpasien`, `jumlahobat`) VALUES
('TBCFDC', '119879', 1),
('ATS60ML', '119879', 3),
('ASF1MG', '119878', 3),
('CTR10MG', '119880', 2),
('KTR10MG', '119877', 1),
('BRH8MG', '119876', 1),
('ATS60ML', '119880', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`nomorpasien`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`kodeobat`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD KEY `kodeobat` (`kodeobat`),
  ADD KEY `nomorpasien` (`nomorpasien`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`kodeobat`) REFERENCES `produk` (`kodeobat`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`nomorpasien`) REFERENCES `pasien` (`nomorpasien`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
