-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2019 at 03:30 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todo`
--

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `id` int(5) NOT NULL,
  `list_name` varchar(50) NOT NULL,
  `note` varchar(60) NOT NULL,
  `jam` time(6) NOT NULL,
  `tgl` date NOT NULL,
  `proses` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`id`, `list_name`, `note`, `jam`, `tgl`, `proses`) VALUES
(7, 'Pulang Kampung', 'Ke Dompu ', '13:00:00.000000', '2019-07-31', 'On Progress'),
(8, 'Nikah K Adhar', 'Ke Bima dengan Keluarga', '14:30:00.000000', '2019-08-08', 'On Progress'),
(9, 'Ke Malang', 'Nemuin SomeOne', '06:00:00.000000', '2019-08-16', 'On Progress'),
(10, 'Ke Sulawesi', 'Nikah Hendi', '13:03:00.000000', '2019-08-20', 'On Progress'),
(11, 'Main ke Karijawa', 'Bareng Teman', '16:09:00.000000', '2019-08-31', 'On Progress'),
(12, 'Balik Ke Yogyakarta', 'Bareng KK Lya', '16:56:00.000000', '2019-09-25', 'On Progress'),
(13, 'Ke Bandara Adisucipto', 'Jemput Imam', '05:00:00.000000', '2019-07-30', 'On Progress'),
(14, 'Ke Bandung', 'Liburan', '18:09:00.000000', '2019-08-10', 'On Progress'),
(15, 'Anterin Putri', 'Ke Mataram', '15:04:00.000000', '2019-08-22', 'On Progress');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
