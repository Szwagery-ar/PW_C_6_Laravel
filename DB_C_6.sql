-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2024 at 05:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tubes_pw`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000001_create_cache_table', 1),
(2, '0001_01_01_000002_create_jobs_table', 1),
(3, '2024_12_09_020014_create_obats_table', 1),
(4, '2024_12_09_050232_create_users_table', 1),
(5, '2024_12_09_083619_create_sessions_table', 1),
(6, '2024_12_10_162654_transaksi', 1),
(7, '2024_12_10_162712_pembelian_obat', 1),
(8, '2024_12_01_092139_create_sessions_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `obats`
--

CREATE TABLE `obats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_obat` varchar(255) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga_obat` double NOT NULL,
  `jenis_obat` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `obats`
--

INSERT INTO `obats` (`id`, `nama_obat`, `stok`, `harga_obat`, `jenis_obat`, `deskripsi`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Isolate Whey', 3, 200000, 'protein', 'suplemen baik untuk kesehatan', 'image1.png', NULL, NULL),
(2, 'Volini', 1, 200000, 'obat keras', 'suplemen baik untuk kesehatan', 'image2.png', NULL, NULL),
(3, 'Stay-Free', 2, 200000, 'softex', 'suplemen baik untuk kesehatan', 'image10.png', NULL, '2024-12-17 02:58:53'),
(4, 'Tolak angin', 7, 200000, 'herbal', 'obat baik untuk kesehatan', 'image22.png', NULL, '2024-12-17 02:53:03'),
(5, 'Sumagesic', 15, 200000, 'obat keras', 'obat baik untuk kesehatan', 'image17.png', NULL, NULL),
(6, 'Imboost', 4, 200000, 'vitamin', 'vitamin baik untuk kesehatan', 'image15.png', NULL, '2024-12-17 02:51:35'),
(7, 'Digeraft', 99, 200000, 'obat', 'obat baik untuk kesehatan', 'image13.png', NULL, '2024-12-17 03:00:02'),
(8, 'episoft', 70, 200000, 'obat', 'krim baik untuk kesehatan', 'image7.png', NULL, NULL),
(9, 'sanmol', 900, 10000, 'obat', 'obat baik untuk kesehatan', 'apotek_online_k24klik_20200810090629359225_SANMOL-4-TAB 1.png', NULL, NULL),
(10, 'One Touch', 19, 1000, 'herbal', 'loh kok ada ikan', 'apotek_online_k24klik_20200810090629359225_SANMOL-4-TAB 1.png', NULL, '2024-12-17 02:51:35'),
(11, 'One Touch', 20, 1000, 'alat', 'alat, bukan obat', 'image4.png', NULL, NULL),
(12, 'betadin', 20, 1000, 'obat', 'obat untuk luka', 'image4.png', NULL, NULL),
(13, 'cotton', 20, 1000, 'obat', 'obat untuk luka', 'image14.png', NULL, NULL),
(14, 'Paramex', 5, 3500, 'obat', 'Nothing', '1734430056.jpg', '2024-12-17 03:07:36', '2024-12-17 03:07:36');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_obat`
--

CREATE TABLE `pembelian_obat` (
  `id_pembelian_obat` bigint(20) UNSIGNED NOT NULL,
  `id_transaksi` bigint(20) UNSIGNED NOT NULL,
  `id_obat` bigint(20) UNSIGNED NOT NULL,
  `harga_obat` double NOT NULL,
  `jumlah_obat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembelian_obat`
--

INSERT INTO `pembelian_obat` (`id_pembelian_obat`, `id_transaksi`, `id_obat`, `harga_obat`, `jumlah_obat`) VALUES
(1, 2, 1, 200000, 2),
(2, 3, 1, 200000, 2),
(3, 4, 1, 200000, 2),
(4, 6, 1, 200000, 1),
(5, 8, 11, 1000, 5),
(6, 10, 6, 200000, 3),
(7, 10, 3, 200000, 1),
(8, 10, 10, 1000, 1),
(9, 10, 4, 200000, 1),
(10, 13, 4, 200000, 1),
(11, 14, 4, 200000, 1),
(12, 16, 3, 200000, 1),
(13, 18, 7, 200000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `reservasi_konsultasi`
--

CREATE TABLE `reservasi_konsultasi` (
  `id_reservasi_konsultasi` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap_pasien` varchar(255) NOT NULL,
  `keluhan` text NOT NULL,
  `usia_pasien` int(11) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `berat_badan_pasien` double NOT NULL,
  `alergi_pasien` varchar(255) DEFAULT NULL,
  `tanggal_reservasi_konsultasi` date NOT NULL,
  `jam_reservasi_konsultasi` time NOT NULL,
  `harga_reservasi_konsultasi` decimal(10,2) NOT NULL,
  `metode_transaksi_reservasi` varchar(255) NOT NULL,
  `status_reservasi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservasi_konsultasi`
--

INSERT INTO `reservasi_konsultasi` (`id_reservasi_konsultasi`, `id_user`, `nama_lengkap_pasien`, `keluhan`, `usia_pasien`, `jenis_kelamin`, `berat_badan_pasien`, `alergi_pasien`, `tanggal_reservasi_konsultasi`, `jam_reservasi_konsultasi`, `harga_reservasi_konsultasi`, `metode_transaksi_reservasi`, `status_reservasi`, `created_at`, `updated_at`) VALUES
(13, 2, 'Nico', 'kekenyangan', 21, 'Laki-laki', 44, 'debu', '2024-12-16', '09:00:00', 35000.00, 'DANA', 'Completed', '2024-12-16 06:35:35', '2024-12-16 06:35:35'),
(14, 3, 'Anggi', 'kelaparan', 22, 'Laki-laki', 67, NULL, '2024-12-17', '13:00:00', 35000.00, 'BNI', 'Completed', '2024-12-17 02:56:10', '2024-12-17 02:56:10'),
(15, 3, 'sinta', 'apaya', 12, 'Perempuan', 55, 'kacang', '2024-12-17', '13:00:00', 35000.00, 'BCA', 'Completed', '2024-12-17 02:57:53', '2024-12-17 02:57:53');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('wqwyeJPZDuiYMfP8BGJ4wy0t0Qy8ru3mGGMhAN3D', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Edg/131.0.0.0', 'YTo1OntzOjQ6InVzZXIiO2E6MTp7czo2OiJwcm9maWwiO2E6NTp7czo0OiJuYW1lIjtzOjA6IiI7czo4OiJwYXNzd29yZCI7czowOiIiO3M6MTI6InBob25lX251bWJlciI7czowOiIiO3M6NzoiYWRkcmVzcyI7czowOiIiO3M6NToiZW1haWwiO3M6MDoiIjt9fXM6NjoiX3Rva2VuIjtzOjQwOiJhb3F4bkhFUmY3QUxOaHZMVlUwRHFYNndqbm5EMlNWN2hpVFdHajRDIjtzOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozNjoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2plbmlzT2JhdC9vYmF0Ijt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mzt9', 1734430117);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `status_pengiriman` varchar(255) NOT NULL,
  `total_harga` double NOT NULL,
  `metode_transaksi` varchar(255) NOT NULL,
  `total_bayar` double NOT NULL,
  `status_transaksi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `status_pengiriman`, `total_harga`, `metode_transaksi`, `total_bayar`, `status_transaksi`, `created_at`, `updated_at`) VALUES
(2, 1, 'Pending', 400000, 'OVO', 0, 'Pending', NULL, NULL),
(3, 1, 'Pending', 400000, 'OVO', 0, 'Pending', NULL, NULL),
(4, 1, 'Pending', 400000, 'Gopay', 0, 'Pending', NULL, NULL),
(5, 1, 'Pending', 0, 'Gopay', 0, 'Pending', NULL, NULL),
(6, 2, 'Pending', 200000, 'Gopay', 0, 'Pending', NULL, NULL),
(7, 2, 'Pending', 0, 'Gopay', 0, 'Pending', NULL, NULL),
(8, 2, 'Pending', 5000, 'BCA', 0, 'Pending', NULL, NULL),
(9, 2, 'Pending', 0, 'BCA', 0, 'Pending', NULL, NULL),
(10, 3, 'Pending', 1001000, 'Gopay', 0, 'Pending', NULL, NULL),
(11, 3, 'Pending', 0, 'Gopay', 0, 'Pending', NULL, NULL),
(12, 3, 'Pending', 0, 'OVO', 0, 'Pending', NULL, NULL),
(13, 3, 'Pending', 200000, 'BCA', 0, 'Pending', NULL, NULL),
(14, 3, 'Pending', 200000, 'BCA', 0, 'Pending', NULL, NULL),
(15, 3, 'Pending', 0, 'BCA', 0, 'Pending', NULL, NULL),
(16, 3, 'Pending', 200000, 'Gopay', 0, 'Pending', NULL, NULL),
(17, 3, 'Pending', 0, 'Gopay', 0, 'Pending', NULL, NULL),
(18, 3, 'Pending', 200000, 'BCA', 0, 'Pending', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','customer') NOT NULL DEFAULT 'customer',
  `phone_number` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `profile_photo_path` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `phone_number`, `address`, `profile_photo_path`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'icha', 'icha@gmail.com', '$2y$12$TcPDJBPTE/MJD2hcBLvrBuAxi/6gSgxna/SzxGLJesCH00k0LgNKi', 'customer', '081234567', 'DK Kedung Rejo RT 41 / RW 01, Jambu Barat, Mlonggo,', NULL, NULL, '2024-12-15 03:42:56', '2024-12-15 03:42:56', NULL),
(2, 'Kambing', 'dina@gmail.com', '$2y$12$wq4gRdFcuHhbOUDnOiPiveJKpot3W00sJlaKm5OUvs9dFsX6vM0pu', 'customer', '088392372', 'jajajaja', 'profile-photos/b6V7V18Fb42HkHvv8nRV4yfih1Q80bVV1u5D9RPg.png', NULL, '2024-12-16 05:56:23', '2024-12-16 06:27:55', NULL),
(3, 'Keke', 'ella@gmail.com', '$2y$12$PLaegzkzD95zA0w0XT4q2.rMuAcuXWA86RIA1gceLo0ANe2w5vIjW', 'customer', '88392372', 'halo', 'profile-photos/r8xqaHCP0Kg3BeeRiM5v9eFGoMTQksEBbI5hUTUF.png', NULL, '2024-12-17 02:15:25', '2024-12-17 03:04:46', NULL),
(4, 'Admin', 'admin@gmail.com', '$2y$12$PPtZY2vqXHJKx81GXz5fz.g0yMrJWz7HIKFkuSFLclH5d.4l89fX2', 'admin', NULL, NULL, NULL, NULL, '2024-12-17 03:05:28', '2024-12-17 03:05:28', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obats`
--
ALTER TABLE `obats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembelian_obat`
--
ALTER TABLE `pembelian_obat`
  ADD PRIMARY KEY (`id_pembelian_obat`),
  ADD KEY `pembelian_obat_id_transaksi_foreign` (`id_transaksi`),
  ADD KEY `pembelian_obat_id_obat_foreign` (`id_obat`);

--
-- Indexes for table `reservasi_konsultasi`
--
ALTER TABLE `reservasi_konsultasi`
  ADD PRIMARY KEY (`id_reservasi_konsultasi`),
  ADD KEY `reservasi_konsultasi_id_user_foreign` (`id_user`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `transaksi_id_user_foreign` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `obats`
--
ALTER TABLE `obats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pembelian_obat`
--
ALTER TABLE `pembelian_obat`
  MODIFY `id_pembelian_obat` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `reservasi_konsultasi`
--
ALTER TABLE `reservasi_konsultasi`
  MODIFY `id_reservasi_konsultasi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembelian_obat`
--
ALTER TABLE `pembelian_obat`
  ADD CONSTRAINT `pembelian_obat_id_obat_foreign` FOREIGN KEY (`id_obat`) REFERENCES `obats` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pembelian_obat_id_transaksi_foreign` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`) ON DELETE CASCADE;

--
-- Constraints for table `reservasi_konsultasi`
--
ALTER TABLE `reservasi_konsultasi`
  ADD CONSTRAINT `reservasi_konsultasi_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
