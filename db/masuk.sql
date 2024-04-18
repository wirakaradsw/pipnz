-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2024 at 06:55 AM
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
-- Table structure for table `masuk`
--

CREATE TABLE IF NOT EXISTS `masuk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nama` varchar(100) NOT NULL,
  `tempatlahir` varchar(100) NOT NULL,
  `tgllahir` date NOT NULL,
  `kotanz` varchar(100) NOT NULL,
  `telponnz` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `tempatkerja` varchar(100) NOT NULL,
  `anggota` varchar(100) NOT NULL,
  `tottarbiyah` float NOT NULL,
  `tglpindah` date NOT NULL,
  `alasan` text NOT NULL,
  `status` varchar(100) NOT NULL,
  `partner` varchar(100) NOT NULL,
  `pembina` varchar(100) NOT NULL,
  `domisili` varchar(100) NOT NULL,
  `telponpembina` varchar(100) NOT NULL,
  `aktif` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `masuk`
--

INSERT INTO `masuk` (`id`, `date`, `nama`, `tempatlahir`, `tgllahir`, `kotanz`, `telponnz`, `email`, `pekerjaan`, `tempatkerja`, `anggota`, `tottarbiyah`, `tglpindah`, `alasan`, `status`, `partner`, `pembina`, `domisili`, `telponpembina`, `aktif`) VALUES
(1, '2024-04-17 03:37:44', 'Wira Kara', 'Jakarta', '2001-02-01', 'E405/320 Mansfield Street, Newtown, Wellington', '', 'dynamicsoulworks@gmail.com', 'Local Staff', 'KBRI Wellington', 'Anggota Madya', 20, '2012-02-12', 'Dapat Kerja di NZ', 'Menikah', 'Nank', 'Ridwan', 'Jakarta', '081812345678', 0),
(2, '2024-04-17 03:45:32', 'Wirasatya Adhikara', 'Jakarta', '1986-02-27', 'Wellington', '', 'wirakara@ymail.com', 'Wiraswasta', 'Rumah', 'Anggota Madya', 25, '2012-02-12', 'Hijrah', 'Menikah', 'Nank', 'Ridwan', 'Jakarta', '', 1),
(3, '2024-04-17 04:31:52', 'Wirasatya Adhikara', 'Jakarta', '1986-02-27', 'Wellington', '0212364539', 'wirakara@ymail.com', 'Wiraswasta', 'Rumah', 'Anggota Madya', 25, '2012-02-12', 'Hijrah', 'Menikah', 'Nank', 'Ridwan', 'Jakarta', '', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
