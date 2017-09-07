-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2017 at 01:10 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihan_oop`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku_telp`
--

CREATE TABLE `buku_telp` (
  `id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku_telp`
--

INSERT INTO `buku_telp` (`id`, `nama`, `alamat`, `telp`, `email`) VALUES
(3, 'Rasmus ', 'Jl. Pettarani ', '789968906', 'rasmus@rasmusp.com'),
(5, 'Linus Torvalds', 'Jl. Perintis', '501102', 'linus@linus.com'),
(6, 'Richard Stallman', 'Jl. Urip ', '654321', 'rms@rms.com'),
(7, 'Matt Mullenweg', 'Jl. Sunu', '567123', 'matt@matt.com'),
(9, 'jajang', 'jl.tajir', '09089876', 'jajang@'),
(10, 'Ridawan', 'jl,pansnsa', '056789', 'ridawawn@'),
(11, 'jamal', 'jl.kopo', '067899', 'jamal@'),
(12, 'Agus', 'jl.satria', '04556789', 'agus@'),
(14, 'Jamila', 'jl.kolar', '067899', 'jamila@'),
(15, 'Yudi', 'jl.mobra', '06789', 'yudi@'),
(16, 'Fery R', 'jl.bayak', '06789', 'fery@'),
(18, 'Novianti', 'jl.kemangisan', '0568790', 'novi@'),
(19, 'Rdwan', 'jl.kopo', '06789', 'ridwan@'),
(20, 'Gusipul', 'jl.kolak', '05678', 'gusipul@'),
(21, 'Mirna', 'jl.golek', '07689', 'mirna@'),
(22, 'Udin', 'j.bapu', '06789', 'udin@'),
(23, 'Giring', 'jl.bayak', 'giring@', '067890'),
(24, 'Tatang', 'jl.Sultan', 'tatang@', '0678'),
(25, 'Gina', 'jlpalu', 'jalu@', '07890');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku_telp`
--
ALTER TABLE `buku_telp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku_telp`
--
ALTER TABLE `buku_telp`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
