-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 18, 2011 at 08:25 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `praktikum_ol`
--

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_essay`
--

CREATE TABLE IF NOT EXISTS `jawaban_essay` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `id_mahasiswa` int(4) NOT NULL,
  `jawaban` text NOT NULL,
  `prake` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `jawaban_essay`
--


-- --------------------------------------------------------

--
-- Table structure for table `jawaban_ganda`
--

CREATE TABLE IF NOT EXISTS `jawaban_ganda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_mahasiswa` int(10) NOT NULL,
  `jawaban` varchar(2) NOT NULL,
  `id_mk` int(10) NOT NULL,
  `prake` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `jawaban_ganda`
--


-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id_mahasiswa` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` text NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_mahasiswa`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `username`, `password`, `nama`, `status`) VALUES
(1, '08018185', 'a04249f7470ea4b24135fe9133581852', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `prake`
--

CREATE TABLE IF NOT EXISTS `prake` (
  `prake` int(11) NOT NULL DEFAULT '1',
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prake`
--

INSERT INTO `prake` (`prake`, `id`) VALUES
(2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `soal_essay`
--

CREATE TABLE IF NOT EXISTS `soal_essay` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `soal` text NOT NULL,
  `prake` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `soal_essay`
--


-- --------------------------------------------------------

--
-- Table structure for table `soal_ganda`
--

CREATE TABLE IF NOT EXISTS `soal_ganda` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `soal` text NOT NULL,
  `a` text NOT NULL,
  `b` text NOT NULL,
  `c` text NOT NULL,
  `d` text NOT NULL,
  `id_mk` int(10) NOT NULL,
  `prake` int(10) NOT NULL,
  `key` varchar(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `soal_ganda`
--

INSERT INTO `soal_ganda` (`id`, `soal`, `a`, `b`, `c`, `d`, `id_mk`, `prake`, `key`) VALUES
(1, 'siapa nama anda', 'sapa aja', 'sapa boleh', 'sapa wae ', 'eaaa', 1, 1, 'a'),
(2, 'halo', '32', 'drf', 'dfg', 'df', 1, 1, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `soal_random_essay`
--

CREATE TABLE IF NOT EXISTS `soal_random_essay` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `prake` int(5) NOT NULL,
  `id_mahasiswa` int(5) NOT NULL,
  `id_soal` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `soal_random_essay`
--


-- --------------------------------------------------------

--
-- Table structure for table `user_ci`
--

CREATE TABLE IF NOT EXISTS `user_ci` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` int(4) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_ci`
--

INSERT INTO `user_ci` (`id`, `username`, `password`, `email`, `level`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@example.com', 1, '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
