-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Agu 2019 pada 14.27
-- Versi server: 10.3.15-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_penjualan_uas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(10) UNSIGNED NOT NULL,
  `nama_barang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` double(10,2) NOT NULL,
  `gambar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga`, `gambar`, `created_at`, `updated_at`) VALUES
(6, 'Lemari 2 Pintu', 1300000.00, '1565006504_lemaripintu2.jpg', '2019-08-05 05:01:44', '2019-08-05 05:01:44'),
(7, 'Lemari 3 Pintu', 1500000.00, '1565006534_lemaripintu3.jpg', '2019-08-05 05:02:14', '2019-08-05 05:02:14'),
(8, 'Meja', 850000.00, '1565006562_meja.jpg', '2019-08-05 05:02:42', '2019-08-05 05:02:42'),
(9, 'Meja Makan Set', 5500000.00, '1565006587_mejamakanset.jpg', '2019-08-05 05:03:07', '2019-08-05 05:03:07'),
(10, 'Rak Pajangan Kayu', 650000.00, '1565006613_rakpajangankayu.jpg', '2019-08-05 05:03:33', '2019-08-05 05:03:33'),
(11, 'Rak Televisi', 2500000.00, '1565006636_raktv.jpg', '2019-08-05 05:03:56', '2019-08-05 05:03:56'),
(12, 'Ranjang Dipan', 3750000.00, '1565006662_ranjangdipan.jpg', '2019-08-05 05:04:22', '2019-08-05 05:04:22'),
(13, 'Sofa Charm Corner', 2500000.00, '1565006688_sofacharmcorner.jpg', '2019-08-05 05:04:48', '2019-08-05 05:04:48'),
(14, 'Sofa Reno', 1500000.00, '1565006707_sofareno.jpg', '2019-08-05 05:05:07', '2019-08-05 05:05:07'),
(16, 'Kursi', 100000.00, '1565006819_kursi.jpg', '2019-08-05 05:06:59', '2019-08-05 05:06:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_07_31_061651_create_user', 1),
(2, '2019_08_01_082454_create_barang', 2),
(3, '2019_08_01_083113_create_transaksi', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `no_transaksi` int(10) UNSIGNED NOT NULL,
  `nama_barang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` double(10,2) NOT NULL,
  `tot_harga` double(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`no_transaksi`, `nama_barang`, `qty`, `harga`, `tot_harga`, `created_at`, `updated_at`) VALUES
(1, 'Kursi', 4, 100000.00, 400000.00, '2019-08-08 04:50:46', '2019-08-08 04:50:46'),
(2, 'Meja', 1, 850000.00, 850000.00, '2019-08-08 11:32:04', '2019-08-08 11:32:04'),
(3, 'Sofa Charm Corner', 1, 2500000.00, 2500000.00, '2019-08-08 11:33:09', '2019-08-08 11:33:09'),
(4, 'Lemari 3 Pintu', 3, 1500000.00, 4500000.00, '2019-08-08 11:35:00', '2019-08-08 11:35:00'),
(5, 'Rak Pajangan Kayu', 2, 650000.00, 1300000.00, '2019-08-08 11:35:00', '2019-08-08 11:35:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_login` int(10) UNSIGNED NOT NULL,
  `nama_user` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_login`, `nama_user`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', '$2y$10$N2uP00ScVuXfjhhGwLXh3O9vI1tyhc7hwCgKXeh2W1Z2xoq9J8tzi', 'GkAFIWvX3o1hh0IM7YW3jJmhOJaf4rCMDvi6DpPlBSLHug1HSlhYOKxURiQZ', '2019-08-05 05:36:57', '2019-08-05 05:36:57'),
(10, 'Ujang', 'ujang', 'ujang123', NULL, '2019-08-07 05:36:47', '2019-08-07 05:36:47'),
(11, 'Syafira', 'syafira', 'syafira123', NULL, '2019-08-08 00:08:14', '2019-08-08 00:08:14');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`no_transaksi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_login`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `no_transaksi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_login` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
