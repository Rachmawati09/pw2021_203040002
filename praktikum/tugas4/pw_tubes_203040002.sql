-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2021 at 07:18 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040002`
--

-- --------------------------------------------------------

--
-- Table structure for table `skincare`
--

CREATE TABLE `skincare` (
  `id` int(11) NOT NULL,
  `Gambar` varchar(100) NOT NULL,
  `Nama Produk` varchar(100) NOT NULL,
  `Kegunaan` varchar(200) NOT NULL,
  `Harga` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skincare`
--

INSERT INTO `skincare` (`id`, `Gambar`, `Nama Produk`, `Kegunaan`, `Harga`) VALUES
(1, 'corsx water.jpg', 'COSRX Centella Water 150mL', 'Untuk membersihkan kotoran makeup', 'Rp.154,600,-'),
(2, '96 mucin.jpg', 'COSRX Advance Snail Mucin 96 Power Essence', 'Membuat complexion wajah jadi lebih bersih sekaligus memberikan hidrasi, merevitalisasi dan meningkatkan elastisitas kulit, serta membuat tampilannya menjadi lebih segar', 'Rp.155,000,-'),
(3, 'toner.jpg', 'COSRX AHA/BHA Clarifying Treatment Toner', 'Membantu Mencegah Timbulnya Komedo. Sumber: Panoxyl. Komedo atau blackheads timbul karena adanya kotoran dan sebum yang terperangkap di dalam pori-pori kulit.', 'Rp.105.999,-'),
(4, 'lipbalm.jpg', 'Lip Balm Wardah', 'Melembabkan, Mengurangi Bibir Kering dan Pecah-PecahMelembabkan, Mengurangi Bibir Kering dan Pecah-Pecah', 'Rp.29.500,-'),
(5, 'maskara.jpg', 'Maskara Maybelline', 'Membuat bulu matamu lebih bervolume dan lebih lentik', 'Rp.85.500,-'),
(6, 'sleepmask.jpg', 'Laneige Water Sleeping Mask [15 mL]', 'Membantu kulit mempertahankan kelembaban sepanjang malam, Mengandung komposisi yang menyamankan dan melembutkan kulit saat tidur, Meningkatkan kemampuan kulit untuk beregenerasi', 'Rp.27.500,-'),
(7, 'face wash.jpg', 'COSRX Facial Wash Good Morning Low Ph', 'Membantu Meembersihkan Wajah dari sisa sisa makeup', 'Rp.29.900,-'),
(8, 'masker organik.jpg', 'Masker Organik Greeantea', 'Membantu mencerahkan mata, melembapkan wajah, menghilangkan bekas jerawat', 'Rp.15.000,-'),
(9, 'mousturaizer.jpeg', 'Cosrx Oil-free Ultra-Moisturizing Lotion (with Birch Sap)', 'Memperbaiki warna, tekstur, dan kulit yang rusak, membuat masalah-masalah kulitmu', 'Rp.239.000,-'),
(10, 'parfume.jpg', 'Parfum Tester C HANEL No 5 WOMEN tester', 'Menghasilkan aroma yang mirip dengan madu.', 'Rp.395.000,-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `skincare`
--
ALTER TABLE `skincare`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `skincare`
--
ALTER TABLE `skincare`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
