-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 31, 2023 at 11:31 AM
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
-- Database: `cijene`
--

-- --------------------------------------------------------

--
-- Table structure for table `cijene`
--

DROP TABLE IF EXISTS `cijene`;
CREATE TABLE IF NOT EXISTS `cijene` (
  `id` int NOT NULL AUTO_INCREMENT,
  `naziv` varchar(50) NOT NULL,
  `cijena` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cijene`
--

INSERT INTO `cijene` (`id`, `naziv`, `cijena`) VALUES
(12, 'Vijača', '2.33'),
(4, 'Girja', '5.22'),
(11, 'Bench', '101.11'),
(10, 'Sprava za trčanje', '200.55'),
(9, 'Bučica ', '3.67'),
(13, 'Nivago Super Bučica', '1000000.00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
