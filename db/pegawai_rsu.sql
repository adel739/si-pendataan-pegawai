-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2021 at 09:41 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pegawai_rsu`
--

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `ruangan` varchar(25) NOT NULL,
  `no_telepon` int(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nip` int(20) NOT NULL,
  `nama_pegawai` varchar(100) NOT NULL,
  `profesi` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `status` varchar(25) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `no_perkara` (`profesi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `ruangan`, `no_telepon`, `alamat`, `nip`, `nama_pegawai`, `profesi`, `tgl_lahir`, `jenis_kelamin`, `agama`, `status`, `keterangan`) VALUES
(15, 'Ruang Rawat', 2147483647, 'Kisaran', 2147483647, 'Dian Eka Pratiwi', 'Suster', '2021-01-07', 'Perempuan', 'Islam', 'Single', '-'),
(16, 'Ruang Dokter', 2147483647, 'Kisaran', 2147483647, 'Chozi Junaidi Soleh', 'Dokter Spesialis Dalam', '2021-01-22', 'Laki-Laki', 'Islam', 'Single', '-');

-- --------------------------------------------------------

--
-- Table structure for table `profesi`
--

CREATE TABLE IF NOT EXISTS `profesi` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `profesi` varchar(50) NOT NULL,
  `nama_pegawai` varchar(100) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_berhenti` date NOT NULL,
  `masa_jabatan` int(10) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `profesi`
--

INSERT INTO `profesi` (`id`, `profesi`, `nama_pegawai`, `tgl_masuk`, `tgl_berhenti`, `masa_jabatan`, `keterangan`) VALUES
(6, 'Pegawai Transaksi', 'Dian Eka Pratiwi', '2021-01-07', '2021-01-23', 3, '-'),
(7, 'Pegawai Transaksi', 'Chozi Junaidi Soleh', '2020-11-12', '2021-01-23', 7, '-');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '827ccb0eea8a706c4c34a16891f84e7b', 'rsud_hams@yahoo.com', 'Adeliana Putri', 1, 'Staff Umum');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
