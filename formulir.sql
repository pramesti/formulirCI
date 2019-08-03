-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2019 at 03:36 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formulir`
--

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE `identitas` (
  `nama` varchar(250) NOT NULL,
  `nim` int(50) NOT NULL,
  `fakultas` varchar(250) NOT NULL,
  `jurusan` varchar(250) NOT NULL,
  `ipk` varchar(50) NOT NULL,
  `no_hp` int(250) NOT NULL,
  `nama_sd` varchar(250) NOT NULL,
  `tahun_sd` int(50) NOT NULL,
  `nama_smp` varchar(250) NOT NULL,
  `tahun_smp` int(50) NOT NULL,
  `nama_sma` varchar(250) NOT NULL,
  `tahun_sma` int(50) NOT NULL,
  `nama_s1` varchar(250) NOT NULL,
  `tahun_s1` int(50) NOT NULL,
  `nama_organisasi` varchar(250) NOT NULL,
  `jabatan` varchar(250) NOT NULL,
  `nama_organisasi1` varchar(250) NOT NULL,
  `jabatan1` varchar(250) NOT NULL,
  `nama_organisasi2` varchar(250) NOT NULL,
  `jabatan2` varchar(250) NOT NULL,
  `nama_organisasi3` varchar(250) NOT NULL,
  `jabatan3` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`nama`, `nim`, `fakultas`, `jurusan`, `ipk`, `no_hp`, `nama_sd`, `tahun_sd`, `nama_smp`, `tahun_smp`, `nama_sma`, `tahun_sma`, `nama_s1`, `tahun_s1`, `nama_organisasi`, `jabatan`, `nama_organisasi1`, `jabatan1`, `nama_organisasi2`, `jabatan2`, `nama_organisasi3`, `jabatan3`) VALUES
('hvh', 878, 'gjf', 'jhgh', '57', 0, '', 0, '', 0, '', 0, '', 0, '', '', '', '', '', '', '', ''),
('d', 87687, 'gjf', 'f', '567', 867, 'hghg', 7687, 'jhbjh', 87, 'hvjhv', 977, 'asdfghj', 6876, 'hjvhjv', 'fchc', 'dfsd', 'kjkj', 'nkjn', 'bbk', 'khnj', 'jhjh'),
('d', 87687, 'gjf', 'f', '567', 867, 'hghg', 7687, 'jhbjh', 87, 'hvjhv', 977, 'asdfghj', 6876, 'hjvhjv', 'fchc', 'dfsd', 'kjkj', 'nkjn', 'bbk', 'pojikhg', 'jhjh'),
('hvh', 23456, 'gjf', 'f', '567', 6789, 'hghg', 34678, 'f', 345678, 'hvjhv', 45678, 'asdfghj', 4678, 'hjvhjv', '45678', '', '', '', '', '', ''),
('hvh', 23456, 'gjf', 'f', '567', 6789, 'hghg', 34678, 'f', 345678, 'hvjhv', 45678, 'asdfghj', 4678, 'hjvhjv', '45678', '', '', '', '', '', ''),
('hvh', 23456, 'gjf', 'f', '567', 6789, 'hghg', 34678, 'f', 345678, 'hvjhv', 45678, 'asdfghj', 4678, 'hjvhjv', '45678', '', '', '', '', '', ''),
('Sabilla Ayu P', 23789, 'sdfghjk', 'f', '567', 6789, 'hghg', 34678, 'f', 345678, 'hvjhv', 45678, 'asdfghj', 4678, 'hjvhjv', '45678', '', '', '', '', '', ''),
('hvh', 23456, 'gjf', 'f', '567', 34567890, 'hghg', 45678, 'jhbjh', 56789, 'hvjhv', 45678, 'asdfghj', 56789, 'hjvhjv', '', '', '', '', '', '', ''),
('hvh', 23456, 'gjf', 'jhgh', '656', 3456789, 'hghg', 346789, 'jhbjh', 34678, 'hvjhv', 456789, 'asdfghj', 4689, 'hjvhjv', '', '', '', '', '', '', ''),
('Sabilla Ayu P', 23456, 'gjf', 'jhgh', '656', 2147483647, 'hghg', 2012, 'jhbjh', 2015, 'hvjhv', 3019, 'asdfghj', 3232, 'hjvhjv', '', '', '', '', '', '', ''),
('hvh', 23456, 'gjf', 'jhgh', '567', 345678, 'hghg', 2345678, 'jhbjh', 234567, 'hvjhv', 345678, 'asdfghj', 346789, 'hjvhjv', '', '', '', '', '', '', ''),
('hvh', 23789, 'gjf', 'jhgh', '567', 23458, 'f', 346, 'jhbjh', 4567, 'hvjhv', 4678, 'asdfghj', 4578, 'hjvhjv', '', '', '', '', '', '', ''),
('Sabilla Ayu P', 23456, 'gjf', 'jhgh', '567', 456890, 'hghg', 345678, 'jhbjh', 6789, 'hvjhv', 349, 'asdfghj', 3456789, 'hjvhjv', '', '', '', '', '', '', ''),
('hvh', 23456, 'gjf', 'jhgh', '567', 4567, 'hghg', 45678, 'jhbjh', 567, 'hvjhv', 45678, 'asdfghj', 345678, 'hjvhjv', '', '', '', '', '', '', ''),
('hvh', 23789, 'gjf', 'jhgh', '57', 239567, 'hghg', 345678, 'jhbjh', 456789, 'hvjhv', 5678, 'asdfghj', 34, 'hjvhjv', '', '', '', '', '', '', ''),
('d', 23456, 'gjf', 'jhgh', '656', 23456789, 'hghg', 34678, 'jhbjh', 4578, 'hvjhv', 34567, 'asdfghj', 4689, 'hjvhjv', '', '', '', '', '', '', ''),
('hvh', 23456, 'gjf', 'jhgh', '57', 35678, 'hghg', 4678, 'jhbjh', 34678, 'hvjhv', 34567, 'asdfghj', 4678, 'hjvhjv', '', '', '', '', '', '', ''),
('Helmi Zulfikas', 12346789, 'Komputer', 'sdha', '656', 389, 'hghg', 345678, 'jhbjh', 45678, 'r', 86789, 'asdfghj', 458, 'hjvhjv', '', '', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
