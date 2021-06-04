-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jun 2021 pada 18.17
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.1

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
-- Struktur dari tabel `skincare`
--

CREATE TABLE `skincare` (
  `id` int(11) NOT NULL,
  `Gambar` varchar(100) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `Kegunaan` varchar(200) NOT NULL,
  `Harga` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `skincare`
--

INSERT INTO `skincare` (`id`, `Gambar`, `nama_produk`, `Kegunaan`, `Harga`) VALUES
(3, 'foto2.png', 'COSRX AHA/BHA Clarifying Treatment Toner', 'Membantu Mencegah Timbulnya Komedo. Sumber: Panoxyl. Komedo atau blackheads timbul karena adanya kotoran dan sebum yang terperangkap di dalam pori-pori kulit.', 'Rp.105.999,-'),
(4, 'wardah.jpg', 'Lip Balm Wardah', 'Melembabkan, Mengurangi Bibir Kering dan Pecah-PecahMelembabkan, Mengurangi Bibir Kering dan Pecah-Pecah', 'Rp.29.500,-'),
(5, 'Maybelline.jpg', 'Maybelline Hypercurl Mascara', 'Membuat bulu matamu lebih bervolume dan lebih lentik', 'Rp.85.500,-'),
(6, 'foto8.jpeg', 'LANEIGE Lip Sleeping Masks', 'Membantu kulit mempertahankan kelembaban sepanjang malam, Mengandung komposisi yang menyamankan dan melembutkan kulit saat tidur, Meningkatkan kemampuan kulit untuk beregenerasi', 'Rp.27.500,-'),
(8, 'foto6.jpeg', 'Masker Organik', 'Membantu mencerahkan mata, melembapkan wajah, menghilangkan bekas jerawat', 'Rp.15.000,-'),
(9, 'foto5.jpeg', 'Cosrx Oil-free Ultra-Moisturizing Lotion (with Birch Sap)', 'Memperbaiki warna, tekstur, dan kulit yang rusak, membuat masalah-masalah kulitmu', 'Rp.239.000,-'),
(13, 'foto1.jpeg', 'COSRX Advance Snail Mucin 96 Power Essence 100ml', 'Membuat complexion wajah jadi lebih bersih sekaligus memberikan hidrasi, merevitalisasi dan meningkatkan elastisitas kulit, serta membuat tampilannya menjadi lebih segar', 'Rp.155,000,-'),
(14, 'foto3.jpeg', 'COSRX Low pH Good Morning Gel Cleanser', 'pembersih wajah yang digunakan untuk menenangkan, mengeksfoliasi, melembapkan sekaligus membersihkan kulit wajah', 'Rp 12.912'),
(15, 'foto7.jpeg', 'Parfume', 'Wangi. Parfum membantu Moms terhindar dari bau badan dan memastikan Moms harum sepanjang hari.', 'Rp 80.000'),
(16, 'foto4.png', 'Cosrx Centella Water Alcohol-Free Toner', 'Untuk menenangkan kulit yang iritasi karena jerawat/stress, menghidrasi, dan menutrisi kulit dengan vitamin dan mineral.', 'Rp. 157.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'chyntia', '$2y$10$Y2KCRqgpszABouStjEt3i.yD82Gx5/jKLSM5jpcyOONnVXQqAOXbm');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `skincare`
--
ALTER TABLE `skincare`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `skincare`
--
ALTER TABLE `skincare`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
