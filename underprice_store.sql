-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Des 2021 pada 20.43
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `underprice_store`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_product`
--

CREATE TABLE `detail_product` (
  `id` int(11) NOT NULL,
  `product_id` varchar(512) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `price` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_product`
--

INSERT INTO `detail_product` (`id`, `product_id`, `name`, `price`) VALUES
(1, 'underprice-1001', 'Warrior Artemis Blue', '250000'),
(2, 'underprice-1002', 'Warrior Artemis Blue Black', '250000'),
(3, 'underprice-1003', 'Warrior Arthur All White', '250000'),
(4, 'underprice-1004', 'Warrior Arthur Black White', '240000'),
(5, 'underprice-1005', 'Warrior Atlanta Black White', '250000'),
(6, 'underprice-1006', 'Warrior Classic Black White High', '250000'),
(7, 'underprice-1007', 'Warrior Classic Black White Low', '240000'),
(8, 'underprice-1008', 'Warrior Helios Black Low', '250000'),
(9, 'underprice-1009', 'Warrior Helios Cream High', '240000'),
(10, 'underprice-1010', 'Warrior Helios Grey High', '250000'),
(11, 'underprice-1011', 'Warrior Hermes Black White Low', '250000'),
(12, 'underprice-1012', 'Warrior Hermes White High', '240000'),
(13, 'underprice-1013', 'Warrior Hermes White Low', '250000'),
(14, 'underprice-1014', 'Warrior Omega Blue White High', '240000'),
(15, 'underprice-1015', 'Warrior Poseidon Black', '250000'),
(16, 'underprice-1016', 'Ventela All is Well High', '240000'),
(17, 'underprice-1017', 'Ventela Armor Black Natural', '240000'),
(18, 'underprice-1018', 'Ventela Armor Denim Black', '250000'),
(19, 'underprice-1019', 'Ventela Basic Black Natural High', '240000'),
(20, 'underprice-1020', 'Ventela Basic White Low', '250000'),
(21, 'underprice-1021', 'Ventela BTS 178 Low', '240000'),
(22, 'underprice-1022', 'Ventela BTS Black Natural High', '250000'),
(23, 'underprice-1023', 'Ventela BTS Grey High', '240000'),
(24, 'underprice-1024', 'Ventela BTS Navy Low', '240000'),
(25, 'underprice-1025', 'Ventela Public Black Gum High', '240000'),
(26, 'underprice-1026', 'Patrobas Cloud Black White High', '250000'),
(27, 'underprice-1027', 'Patrobas Cloud Black White Low', '240000'),
(28, 'underprice-1028', 'Patrobas Cloud Navy High', '240000'),
(29, 'underprice-1029', 'Patrobas Cloud Navy Low', '240000'),
(30, 'underprice-1030', 'Patrobas Cloud Off White High', '250000'),
(31, 'underprice-1031', 'Patrobas Cloud Off White Low', '250000'),
(32, 'underprice-1032', 'Patrobas Cloud Olive High', '240000'),
(33, 'underprice-1033', 'Patrobas Cloud Olive Low', '250000'),
(34, 'underprice-1034', 'Patrobas Equip All Black Low', '250000'),
(35, 'underprice-1035', 'Patrobas Equip Black White High', '240000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `kode` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `barang_pesanan` varchar(200) NOT NULL,
  `jumlah_pesanan` varchar(200) NOT NULL,
  `harga` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_card`
--

CREATE TABLE `product_card` (
  `id` int(11) NOT NULL,
  `image_url` varchar(5000) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `category` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `product_card`
--

INSERT INTO `product_card` (`id`, `image_url`, `product_id`, `category`) VALUES
(1, 'Warrior/Warrior%20Artemis%20Blue/product-1.jpg Warrior/Warrior%20Artemis%20Blue/product-2.jpg Warrior/Warrior%20Artemis%20Blue/product-3.jpg', 'underprice-1001', 1),
(2, 'Warrior/Warrior%20Artemis%20Blue%20Black/product-1.jpg Warrior/Warrior%20Artemis%20Blue%20Black/product-2.jpg Warrior/Warrior%20Artemis%20Blue%20Black/product-3.jpg', 'underprice-1002', 1),
(3, 'Warrior/Warrior%20Arthur%20All%20White/product-1.jpg Warrior/Warrior%20Arthur%20All%20White/product-2.jpg Warrior/Warrior%20Arthur%20All%20White/product-3.jpg', 'underprice-1003', 1),
(4, 'Warrior/Warrior%20Arthur%20Black%20White/product-1.jpg Warrior/Warrior%20Arthur%20Black%20White/product-2.jpg', 'underprice-1004', 1),
(5, 'Warrior/Warrior%20Atlanta%20Black%20White/product-1.jpg Warrior/Warrior%20Atlanta%20Black%20White/product-2.jpg Warrior/Warrior%20Atlanta%20Black%20White/product-3.jpg', 'underprice-1005', 1),
(6, 'Warrior/Warrior%20Classic%20Black%20White%20High/product-1.jpg Warrior/Warrior%20Classic%20Black%20White%20High/product-2.jpg Warrior/Warrior%20Classic%20Black%20White%20High/product-3.jpg', 'underprice-1006', 1),
(7, 'Warrior/Warrior%20Classic%20Black%20White%20Low/product-1.jpg Warrior/Warrior%20Classic%20Black%20White%20Low/product-2.jpg Warrior/Warrior%20Classic%20Black%20White%20Low/product-3.jpg', 'underprice-1007', 1),
(8, 'Warrior/Warrior%20Helios%20Black%20Low/product-1.jpg Warrior/Warrior%20Helios%20Black%20Low/product-2.jpg Warrior/Warrior%20Helios%20Black%20Low/product-3.jpg', 'underprice-1008', 1),
(9, 'Warrior/Warrior%20Helios%20Cream%20High/product-1.jpg Warrior/Warrior%20Helios%20Cream%20High/product-2.jpg Warrior/Warrior%20Helios%20Cream%20High/product-3.jpg', 'underprice-1009', 1),
(10, 'Warrior/Warrior%20Helios%20Grey%20High/product-1.jpg Warrior/Warrior%20Helios%20Grey%20High/product-2.jpg Warrior/Warrior%20Helios%20Grey%20High/product-3.jpg', 'underprice-1010', 1),
(11, 'Warrior/Warrior%20Hermes%20Black%20White%20Low/product-1.jpg Warrior/Warrior%20Hermes%20Black%20White%20Low/product-2.jpg Warrior/Warrior%20Hermes%20Black%20White%20Low/product-3.jpg', 'underprice-1011', 1),
(12, 'Warrior/Warrior%20Hermes%20White%20High/product-1.jpg Warrior/Warrior%20Hermes%20White%20High/product-2.jpg Warrior/Warrior%20Hermes%20White%20High/product-3.jpg', 'underprice-1012', 1),
(13, 'Warrior/Warrior%20Hermes%20White%20Low/product-1.jpg Warrior/Warrior%20Hermes%20White%20Low/product-2.jpg Warrior/Warrior%20Hermes%20White%20Low/product-3.jpg', 'underprice-1013', 1),
(14, 'Warrior/Warrior%20Omega%20Blue%20White%20High/product-1.jpg Warrior/Warrior%20Omega%20Blue%20White%20High/product-2.jpg Warrior/Warrior%20Omega%20Blue%20White%20High/product-3.jpg', 'underprice-1014', 1),
(15, 'Warrior/Warrior%20Poseidon%20Black/product-1.jpg Warrior/Warrior%20Poseidon%20Black/product-2.jpg Warrior/Warrior%20Poseidon%20Black/product-3.jpg', 'underprice-1015', 1),
(16, 'Ventela/Ventela%20All%20is%20Well%20High/product-1.jpg Ventela/Ventela%20All%20is%20Well%20High/product-2.jpg Ventela/Ventela%20All%20is%20Well%20High/product-3.jpg', 'underprice-1016', 2),
(17, 'Ventela/Ventela%20Armor%20Black%20Natural/product-1.jpg Ventela/Ventela%20Armor%20Black%20Natural/product-2.jpg Ventela/Ventela%20Armor%20Black%20Natural/product-3.jpg', 'underprice-1017', 2),
(18, 'Ventela/Ventela%20Armor%20Denim%20Black/product-1.jpg Ventela/Ventela%20Armor%20Denim%20Black/product-2.jpg Ventela/Ventela%20Armor%20Denim%20Black/product-3.jpg', 'underprice-1018', 2),
(19, 'Ventela/Ventela%20Basic%20Black%20Natural%20High/product-1.jpg Ventela/Ventela%20Basic%20Black%20Natural%20High/product-2.jpg Ventela/Ventela%20Basic%20Black%20Natural%20High/product-3.jpg', 'underprice-1019', 2),
(20, 'Ventela/Ventela%20Basic%20White%20Low/product-1.jpg Ventela/Ventela%20Basic%20White%20Low/product-2.jpg Ventela/Ventela%20Basic%20White%20Low/product-3.jpg', 'underprice-1020', 2),
(21, 'Ventela/Ventela%20BTS%20178%20Low/product-1.jpg Ventela/Ventela%20BTS%20178%20Low/product-2.jpg Ventela/Ventela%20BTS%20178%20Low/product-3.jpg', 'underprice-1021', 2),
(22, 'Ventela/Ventela%20BTS%20Black%20Natural%20High/product-1.jpg Ventela/Ventela%20BTS%20Black%20Natural%20High/product-2.jpg Ventela/Ventela%20BTS%20Black%20Natural%20High/product-3.jpg', 'underprice-1022', 2),
(23, 'Ventela/Ventela%20BTS%20Grey%20High/product-1.jpg Ventela/Ventela%20BTS%20Grey%20High/product-2.jpg Ventela/Ventela%20BTS%20Grey%20High/product-3.jpg', 'underprice-1023', 2),
(24, 'Ventela/Ventela%20BTS%20Navy%20Low/product-1.jpg Ventela/Ventela%20BTS%20Navy%20Low/product-2.jpg Ventela/Ventela%20BTS%20Navy%20Low/product-3.jpg', 'underprice-1024', 2),
(25, 'Ventela/Ventela%20Public%20Black%20Gum%20High/product-1.jpg Ventela/Ventela%20Public%20Black%20Gum%20High/product-2.jpg Ventela/Ventela%20Public%20Black%20Gum%20High/product-3.jpg', 'underprice-1025', 2),
(26, 'Pantrobas/Patrobas%20Cloud%20Black%20White%20High/product-1.jpg Pantrobas/Patrobas%20Cloud%20Black%20White%20High/product-2.jpg Pantrobas/Patrobas%20Cloud%20Black%20White%20High/product-3.jpg Pantrobas/Patrobas%20Cloud%20Black%20White%20High/product-4.jpg Pantrobas/Patrobas%20Cloud%20Black%20White%20High/product-5.jpg', 'underprice-1026', 3),
(27, 'Pantrobas/Patrobas%20Cloud%20Black%20White%20Low/product-1.jpg Pantrobas/Patrobas%20Cloud%20Black%20White%20Low/product-2.jpg Pantrobas/Patrobas%20Cloud%20Black%20White%20Low/product-3.jpg', 'underprice-1027', 3),
(28, 'Pantrobas/Patrobas%20Cloud%20Navy%20High/product-1.jpg Pantrobas/Patrobas%20Cloud%20Navy%20High/product-2.jpg Pantrobas/Patrobas%20Cloud%20Navy%20High/product-3.jpg Pantrobas/Patrobas%20Cloud%20Navy%20High/product-4.jpg Pantrobas/Patrobas%20Cloud%20Navy%20High/product-5.jpg', 'underprice-1028', 3),
(29, 'Pantrobas/Patrobas%20Cloud%20Navy%20Low/product-1.jpg Pantrobas/Patrobas%20Cloud%20Navy%20Low/product-2.jpg Pantrobas/Patrobas%20Cloud%20Navy%20Low/product-3.jpg', 'underprice-1029', 3),
(30, 'Pantrobas/Patrobas%20Cloud%20Off%20White%20High/product-1.jpg Pantrobas/Patrobas%20Cloud%20Off%20White%20High/product-2.jpg Pantrobas/Patrobas%20Cloud%20Off%20White%20High/product-3.jpg Pantrobas/Patrobas%20Cloud%20Off%20White%20High/product-4.jpg Pantrobas/Patrobas%20Cloud%20Off%20White%20High/product-5.jpg', 'underprice-1030', 3),
(31, 'Pantrobas/Patrobas%20Cloud%20Off%20White%20Low/product-1.jpg Pantrobas/Patrobas%20Cloud%20Off%20White%20Low/product-2.jpg Pantrobas/Patrobas%20Cloud%20Off%20White%20Low/product-3.jpg', 'underprice-1031', 3),
(32, 'Pantrobas/Patrobas%20Cloud%20Olive%20High/product-1.jpg Pantrobas/Patrobas%20Cloud%20Olive%20High/product-2.jpg Pantrobas/Patrobas%20Cloud%20Olive%20High/product-3.jpg Pantrobas/Patrobas%20Cloud%20Olive%20High/product-4.jpg Pantrobas/Patrobas%20Cloud%20Olive%20High/product-5.jpg', 'underprice-1032', 3),
(33, 'Pantrobas/Patrobas%20Cloud%20Olive%20Low/product-1.jpg Pantrobas/Patrobas%20Cloud%20Olive%20Low/product-2.jpg Pantrobas/Patrobas%20Cloud%20Olive%20Low/product-3.jpg', 'underprice-1033', 3),
(34, 'Pantrobas/Patrobas%20Equip%20All%20Black%20Low/product-1.jpg Pantrobas/Patrobas%20Equip%20All%20Black%20Low/product-2.jpg Pantrobas/Patrobas%20Equip%20All%20Black%20Low/product-3.jpg', 'underprice-1034', 3),
(35, 'Pantrobas/Patrobas%20Equip%20Black%20White%20High/product-1.jpg Pantrobas/Patrobas%20Equip%20Black%20White%20High/product-2.jpg Pantrobas/Patrobas%20Equip%20Black%20White%20High/product-3.jpg', 'underprice-1035', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_product`
--
ALTER TABLE `detail_product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_id` (`product_id`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`);

--
-- Indeks untuk tabel `product_card`
--
ALTER TABLE `product_card`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
