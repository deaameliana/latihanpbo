-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 18, 2026 at 01:54 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihan_pbo_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kamar`
--

CREATE TABLE `tabel_kamar` (
  `id_kamar` int NOT NULL,
  `nama_tamu` varchar(100) NOT NULL,
  `tanggal_checkin` date NOT NULL,
  `durasi_menginap` int NOT NULL,
  `harga_dasar_kamar` decimal(12,2) NOT NULL,
  `jenis_kamar` enum('Standard','Deluxe','Suite') NOT NULL,
  `tipe_kasur` varchar(50) DEFAULT NULL,
  `pemandangan_kamar` varchar(100) DEFAULT NULL,
  `akses_lounge_eksekutif` tinyint(1) DEFAULT NULL,
  `layanan_spa_pribadi` tinyint(1) DEFAULT NULL,
  `butler_personal` varchar(100) DEFAULT NULL,
  `dekorasi_spesial` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_kamar`
--

INSERT INTO `tabel_kamar` (`id_kamar`, `nama_tamu`, `tanggal_checkin`, `durasi_menginap`, `harga_dasar_kamar`, `jenis_kamar`, `tipe_kasur`, `pemandangan_kamar`, `akses_lounge_eksekutif`, `layanan_spa_pribadi`, `butler_personal`, `dekorasi_spesial`) VALUES
(1, 'Andi Saputra', '2026-07-01', 2, '350000.00', 'Standard', 'Single', NULL, NULL, NULL, NULL, NULL),
(2, 'Budi Santoso', '2026-07-02', 3, '350000.00', 'Standard', 'Twin', NULL, NULL, NULL, NULL, NULL),
(3, 'Citra Dewi', '2026-07-03', 1, '350000.00', 'Standard', 'Single', NULL, NULL, NULL, NULL, NULL),
(4, 'Dedi Pratama', '2026-07-04', 4, '350000.00', 'Standard', 'Twin', NULL, NULL, NULL, NULL, NULL),
(5, 'Eka Putri', '2026-07-05', 2, '350000.00', 'Standard', 'Queen', NULL, NULL, NULL, NULL, NULL),
(6, 'Farhan Akbar', '2026-07-06', 3, '350000.00', 'Standard', 'Single', NULL, NULL, NULL, NULL, NULL),
(7, 'Gina Maharani', '2026-07-07', 2, '350000.00', 'Standard', 'Queen', NULL, NULL, NULL, NULL, NULL),
(8, 'Hendra Wijaya', '2026-07-08', 3, '750000.00', 'Deluxe', 'King Size', 'Kolam Renang', 1, NULL, NULL, NULL),
(9, 'Indah Sari', '2026-07-09', 2, '750000.00', 'Deluxe', 'King Size', 'Laut', 1, NULL, NULL, NULL),
(10, 'Joko Susilo', '2026-07-10', 4, '750000.00', 'Deluxe', 'Queen', 'Kota', 1, NULL, NULL, NULL),
(11, 'Kartika Ayu', '2026-07-11', 2, '750000.00', 'Deluxe', 'King Size', 'Gunung', 1, NULL, NULL, NULL),
(12, 'Lukman Hakim', '2026-07-12', 5, '750000.00', 'Deluxe', 'Twin', 'Taman', 0, NULL, NULL, NULL),
(13, 'Maya Lestari', '2026-07-13', 3, '750000.00', 'Deluxe', 'King Size', 'Laut', 1, NULL, NULL, NULL),
(14, 'Nanda Putra', '2026-07-14', 2, '750000.00', 'Deluxe', 'Queen', 'Kota', 0, NULL, NULL, NULL),
(15, 'Olivia Rahma', '2026-07-15', 5, '1500000.00', 'Suite', NULL, NULL, NULL, 1, 'Butler Premium', 'Honeymoon Package'),
(16, 'Putra Nugraha', '2026-07-16', 4, '1500000.00', 'Suite', NULL, NULL, NULL, 1, 'Butler Gold', 'Birthday Decoration'),
(17, 'Qori Aulia', '2026-07-17', 7, '1500000.00', 'Suite', NULL, NULL, NULL, 1, 'Butler Premium', 'Anniversary Package'),
(18, 'Rizky Kurniawan', '2026-07-18', 3, '1500000.00', 'Suite', NULL, NULL, NULL, 0, 'Butler Silver', 'VIP Welcome'),
(19, 'Salsa Nabila', '2026-07-19', 6, '1500000.00', 'Suite', NULL, NULL, NULL, 1, 'Butler Premium', 'Romantic Decoration'),
(20, 'Taufik Hidayat', '2026-07-20', 2, '1500000.00', 'Suite', NULL, NULL, NULL, 0, 'Butler Gold', 'Executive Package');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_kamar`
--
ALTER TABLE `tabel_kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_kamar`
--
ALTER TABLE `tabel_kamar`
  MODIFY `id_kamar` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
