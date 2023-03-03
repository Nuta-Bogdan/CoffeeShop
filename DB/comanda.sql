-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2022 at 05:31 PM
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
-- Database: `cafeadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `comanda`
--

CREATE TABLE `comanda` (
  `idComanda` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `produse` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comanda`
--

INSERT INTO `comanda` (`idComanda`, `idUser`, `produse`) VALUES
(1, 1, '1*7,2*3,3*2'),
(2, 1, '1*1,2*2'),
(3, 1, '3*2'),
(4, 4, '2*1,3*1'),
(5, 4, ''),
(6, 4, '2*1'),
(7, 4, ''),
(8, 4, '1*3,2*1'),
(9, 4, '2*2'),
(10, 4, ''),
(11, 4, '1*1,4*2'),
(12, 4, '1*4'),
(13, 4, '1*1'),
(14, 4, '1*2'),
(15, 4, '1*1'),
(16, 4, '1*1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comanda`
--
ALTER TABLE `comanda`
  ADD PRIMARY KEY (`idComanda`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comanda`
--
ALTER TABLE `comanda`
  MODIFY `idComanda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
