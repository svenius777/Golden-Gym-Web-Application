-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 31, 2023 at 11:30 AM
-- Server version: 8.0.31
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `upisi_mysql`
--

-- --------------------------------------------------------

--
-- Table structure for table `clanovi`
--

DROP TABLE IF EXISTS `clanovi`;
CREATE TABLE IF NOT EXISTS `clanovi` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ime` varchar(30) COLLATE utf16_croatian_ci NOT NULL,
  `prezime` varchar(30) COLLATE utf16_croatian_ci NOT NULL,
  `email` varchar(50) COLLATE utf16_croatian_ci NOT NULL,
  `broj_mobitela` varchar(15) COLLATE utf16_croatian_ci NOT NULL,
  `spol` varchar(10) COLLATE utf16_croatian_ci NOT NULL,
  `datum_rodenja` date NOT NULL,
  `datum_pocetka` date NOT NULL,
  `salji_obavijesti` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf16 COLLATE=utf16_croatian_ci;

--
-- Dumping data for table `clanovi`
--

INSERT INTO `clanovi` (`id`, `ime`, `prezime`, `email`, `broj_mobitela`, `spol`, `datum_rodenja`, `datum_pocetka`, `salji_obavijesti`) VALUES
(26, 'Držislav', 'Držislavić', 'drzislav@gmail.com', '099-333-3331', 'M', '1998-06-26', '2023-05-26', 1),
(25, 'Branimir', 'Branimirić', 'branimir@gmail.com', '099-333-3333', 'M', '1998-06-11', '2023-05-22', 0),
(22, 'Sven', 'Kucina', 'sven@gmail.com', '099-242-3333', 'M', '2002-02-05', '2023-05-03', 1),
(24, 'Pero', 'Perić', 'pero@gmail.com', '099-222-2222', 'Ž', '1999-09-10', '2023-05-22', 0),
(23, 'Ana', 'Anić', 'ana@gmail.com', '099-111-1111', 'Ž', '1999-09-01', '2023-05-25', 0),
(21, 'Marko', 'Markić', 'marko@gmail.com', '099-242-3211', 'M', '2023-05-04', '2023-06-03', 1),
(27, 'Ratimir', 'Ratimirić', 'ratimir@gmail.com', '099-333-3332', 'M', '1998-07-11', '2023-05-16', 0),
(28, 'Trpimir', 'Trpimirić', 'trpimir@gmail.com', '099-333-3335', 'M', '1998-07-31', '2023-05-16', 1),
(29, 'Maja', 'Majić', 'maja@gmail.com', '099-333-3337', 'Ž', '1997-07-08', '2023-05-08', 1),
(30, 'Mirna', 'Mirnić', 'mirna@gmail.com', '099-333-3338', 'Ž', '1997-07-25', '2023-05-19', 0),
(31, 'Ines', 'Kucina', 'ines@gmail.com', '099-111-2222', 'Ž', '1995-02-08', '2023-05-12', 0),
(32, 'veredana', 'germanis', 'v@gmail.com', '099-333-3333', 'Ž', '2023-05-23', '2023-06-01', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
