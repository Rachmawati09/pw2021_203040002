-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2021 at 07:29 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

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
  `nama_produk` varchar(100) NOT NULL,
  `Kegunaan` varchar(200) NOT NULL,
  `Harga` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skincare`
--

INSERT INTO `skincare` (`id`, `Gambar`, `nama_produk`, `Kegunaan`, `Harga`) VALUES
(3, 'toner.jpg', 'COSRX AHA/BHA Clarifying Treatment Toner', 'Membantu Mencegah Timbulnya Komedo. Sumber: Panoxyl. Komedo atau blackheads timbul karena adanya kotoran dan sebum yang terperangkap di dalam pori-pori kulit.', 'Rp.105.999,-'),
(4, 'lipbalm.jpg', 'Lip Balm Wardah', 'Melembabkan, Mengurangi Bibir Kering dan Pecah-PecahMelembabkan, Mengurangi Bibir Kering dan Pecah-Pecah', 'Rp.29.500,-'),
(5, 'maskara.jpg', 'Maskara Maybelline', 'Membuat bulu matamu lebih bervolume dan lebih lentik', 'Rp.85.500,-'),
(6, 'sleepmask.jpg', 'Laneige Water Sleeping Mask [15 mL]', 'Membantu kulit mempertahankan kelembaban sepanjang malam, Mengandung komposisi yang menyamankan dan melembutkan kulit saat tidur, Meningkatkan kemampuan kulit untuk beregenerasi', 'Rp.27.500,-'),
(8, 'masker organik.jpg', 'Masker Organik', 'Membantu mencerahkan mata, melembapkan wajah, menghilangkan bekas jerawat', 'Rp.15.000,-'),
(9, 'mousturaizer.jpeg', 'Cosrx Oil-free Ultra-Moisturizing Lotion (with Birch Sap)', 'Memperbaiki warna, tekstur, dan kulit yang rusak, membuat masalah-masalah kulitmu', 'Rp.239.000,-'),
(13, '96 mucin.jpg', 'COSRX Advance Snail Mucin 96 Power Essence', 'Membuat complexion wajah jadi lebih bersih sekaligus memberikan hidrasi, merevitalisasi dan meningkatkan elastisitas kulit, serta membuat tampilannya menjadi lebih segar', 'Rp.155,000,-');

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
