-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2025 at 05:11 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xipplg12025`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `idkaryawan` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `tp_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`idkaryawan`, `nama`, `alamat`, `tp_lahir`, `tgl_lahir`) VALUES
('K-001', 'Aulia Rizky', 'Genteng', 'Banyuwangi', '1995-05-15'),
('K-002', 'Bambang Sudiro', 'Rogojampi', 'Jember', '1992-11-20'),
('K-003', 'Citra Dewi', 'Srono', 'Banyuwangi', '1998-08-03'),
('K-004', 'Dani Irawan', 'Cluring', 'Banyuwangi', '1990-01-28'),
('K-005', 'Elisa Putri', 'Banyuwangi', 'Surabaya', '1997-04-10'),
('K-006', 'Fajar Nurhadi', 'Sempu', 'Banyuwangi', '1993-09-07'),
('K-007', 'Gilang Pratama', 'Singojuruh', 'Malang', '1996-12-25'),
('K-008', 'Hana Sari', 'Ketapang', 'Banyuwangi', '1989-06-12'),
('K-009', 'Irfan Maulana', 'Wongsorejo', 'Probolinggo', '1994-03-30'),
('K-010', 'Joko Pamungkas', 'Muncar', 'Banyuwangi', '1991-07-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`idkaryawan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
latihansoalkibidi