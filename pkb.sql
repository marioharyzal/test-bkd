-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2022 at 07:17 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendapatanbpkd`
--

-- --------------------------------------------------------

--
-- Table structure for table `pkb`
--

CREATE TABLE `pkb` (
  `id` int(11) NOT NULL,
  `Status` enum('0','1') NOT NULL,
  `KodeBayar` varchar(8) NOT NULL,
  `Nopol` varchar(7) NOT NULL,
  `KodeWilayah` int(4) NOT NULL,
  `NamaWp` varchar(288) NOT NULL,
  `AlamatWp` varchar(288) NOT NULL,
  `JenisKendaraan` varchar(288) NOT NULL,
  `TipeKendaraan` varchar(8) NOT NULL,
  `MerkKendaraan` varchar(288) NOT NULL,
  `WarnaKendaraan` text NOT NULL,
  `TahunBuatan` int(4) NOT NULL,
  `NomorRangka` varchar(20) NOT NULL,
  `NomorMesin` varchar(20) NOT NULL,
  `PkbPokok` int(100) NOT NULL,
  `PkbDenda` int(100) NOT NULL,
  `SwdklljPokok` int(100) NOT NULL,
  `SwdklljDenda` int(100) NOT NULL,
  `Pnbp` int(100) NOT NULL,
  `TotalTagihan` int(100) NOT NULL,
  `Ntpd` int(100) NOT NULL,
  `TglAwal` date NOT NULL,
  `TglAkhir` date NOT NULL,
  `TglNtpd` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pkb`
--

INSERT INTO `pkb` (`id`, `Status`, `KodeBayar`, `Nopol`, `KodeWilayah`, `NamaWp`, `AlamatWp`, `JenisKendaraan`, `TipeKendaraan`, `MerkKendaraan`, `WarnaKendaraan`, `TahunBuatan`, `NomorRangka`, `NomorMesin`, `PkbPokok`, `PkbDenda`, `SwdklljPokok`, `SwdklljDenda`, `Pnbp`, `TotalTagihan`, `Ntpd`, `TglAwal`, `TglAkhir`, `TglNtpd`) VALUES
(1, '0', 'A8620DE', 'A8620DE', 2807, 'GANJAR WAHYUDIN', 'Air Long', 'Sepeda Motor Solo 1', 'D1B02N26', 'Honda', 'Putih', 2016, 'MH31PA002DK149678', 'JFZ2E1014439', 350000, 0, 0, 0, 15000, 17683793, 0, '2022-02-23', '2022-02-26', '2022-02-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pkb`
--
ALTER TABLE `pkb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pkb`
--
ALTER TABLE `pkb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
