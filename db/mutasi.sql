-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2024 at 04:37 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pipnz`
--

-- --------------------------------------------------------

--
-- Table structure for table `mutasi`
--

CREATE TABLE IF NOT EXISTS `mutasi` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nama` varchar(100) NOT NULL,
  `tempatlahir` varchar(100) NOT NULL,
  `tgllahir` date NOT NULL,
  `alamatindo` text NOT NULL,
  `telponindo` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `tempatkerja` varchar(100) NOT NULL,
  `anggota` varchar(100) NOT NULL,
  `tarbiyahnz` float NOT NULL,
  `tottarbiyah` float NOT NULL,
  `tglpindah` date NOT NULL,
  `alasan` text NOT NULL,
  `status` varchar(100) NOT NULL,
  `partner` varchar(100) NOT NULL,
  `pembina` varchar(100) NOT NULL,
  `domisili` varchar(100) NOT NULL,
  `telponpembina` varchar(100) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mutasi`
--

INSERT INTO `mutasi` (`no`, `date`, `nama`, `tempatlahir`, `tgllahir`, `alamatindo`, `telponindo`, `email`, `pekerjaan`, `tempatkerja`, `anggota`, `tarbiyahnz`, `tottarbiyah`, `tglpindah`, `alasan`, `status`, `partner`, `pembina`, `domisili`, `telponpembina`) VALUES
(1, '2024-04-16 10:24:59', 'Wirasatya Adhikara', 'Jakarta', '1986-02-27', 'E405/320 Mansfield Street\r\nNewtown', '0212364539', 'wirakara@gmail.com', 'Wirasawasta', 'Rumah', 'Anggota Madya', 25, 12.5, '2024-04-16', 'Selesai Studi S2', 'Menikah', 'Dinar Roosdianita', 'Mico Yustika', 'Australia', '+61 412 277 468'),
(2, '2024-04-16 10:28:54', 'Abdullah Anak Mushollah', 'Jakarta', '1982-02-02', 'Jl. Kalibata Utara No.60\r\nRT 006/02\r\nPancoran\r\nJakarta Selatan', '08181234567', 'email@email.com', 'Marbot', 'Masjid An-Nur', 'Anggota Pratama', 10, 3, '2024-04-01', 'Pindah Kerja', 'Tidak Menikah', '', 'Wirasatya Adhikara', 'New Zealand', '+64 21 236 4539'),
(3, '2024-04-16 11:05:58', '', '', '0000-00-00', '', '', '', '', '', '', 0, 0, '0000-00-00', '', '', '', '', '', ''),
(4, '2024-04-16 11:08:54', 'Syech Darno', 'Semarang', '1980-03-01', 'Jl. Jalan\r\nJakarta', '08188765432', 't@t.om', 'Mekanik', 'Bengkel Jaya', 'Anggota Dewasa', 12, 20, '2024-03-02', 'Ikut istri', 'Menikah', 'Jeng Mei', 'Mico Yustika', 'Australia', '+61 412 277 468');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
