-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 12, 2021 at 06:10 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `cname` varchar(50) NOT NULL,
  `number` int(10) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `product` varchar(50) NOT NULL,
  `cemail` varchar(50) NOT NULL,
  `cemail2` varchar(50) NOT NULL,
  `reference` varchar(50) NOT NULL,
  `feedback` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`cname`, `number`, `remarks`, `product`, `cemail`, `cemail2`, `reference`, `feedback`) VALUES
('name', 2, 'asd asd asd asd', 'asd asd asd asd asd', 'asd2@gmail.com', 'asd2@gmail.com', 'asd2@gmail.com', 'asd'),
('name', 12435253, 'asd asd asd asd', 'asd asd asd asd asd', 'asd2@gmail.com', 'asd2@gmail.com', 'asd2@gmail.com', 'asd'),
('name', 12435253, 'asd asd asd asd', 'asd asd asd asd asd', 'asd2@gmail.com', 'asd2@gmail.com', 'asd2@gmail.com', 'asd'),
('name', 12435253, 'asd asd asd asd', 'asd asd asd asd asd', 'asd2@gmail.com', 'asd2@gmail.com', 'asd2@gmail.com', 'asd');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
