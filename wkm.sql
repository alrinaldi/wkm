-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 03, 2023 at 06:11 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wkm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `anggota_team`
--

CREATE TABLE `anggota_team` (
  `id` int(11) NOT NULL,
  `nama` int(11) NOT NULL,
  `id_inovator` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_produk`
--

CREATE TABLE `data_produk` (
  `part_name` varchar(255) NOT NULL,
  `customer_part_number` varchar(255) NOT NULL,
  `special_tag` varchar(255) NOT NULL,
  `part_description` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `production_plant` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `report_mf2w` tinyint(1) NOT NULL,
  `report_mf4w` tinyint(1) NOT NULL,
  `report_db` tinyint(1) NOT NULL,
  `hso` tinyint(1) NOT NULL,
  `Discontinue` tinyint(1) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event_periode`
--

CREATE TABLE `event_periode` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `periode` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event_periode`
--

INSERT INTO `event_periode` (`id`, `nama`, `periode`, `kategori`, `tanggal`, `status`, `created_by`, `created_date`) VALUES
(1, 'TKMPN', '2023/2024', 'TKMPN', '2023-04-22', 'Open', 'Yutaka Manufacturing Indonesia', '2023-04-09'),
(2, 'K3 ZZZZZ', '2023/2024', 'ICC-OSH', '2023-04-04', 'Open', 'Yutaka Manufacturing Indonesia', '2023-04-09');

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
-- Table structure for table `foto_ringkasan`
--

CREATE TABLE `foto_ringkasan` (
  `id` int(11) NOT NULL,
  `foto` text NOT NULL,
  `id_ringkasan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inovator`
--

CREATE TABLE `inovator` (
  `id` int(11) NOT NULL,
  `nama_team` varchar(100) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `file_makalah` text DEFAULT NULL,
  `achievment` varchar(100) DEFAULT NULL,
  `id_stream` int(11) DEFAULT NULL,
  `id_nilai` int(11) DEFAULT NULL,
  `foto_team` text DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `lampiran` text DEFAULT NULL,
  `id_ringkasan` int(11) DEFAULT NULL,
  `perusahaan` text DEFAULT NULL,
  `jadwal` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inovator`
--

INSERT INTO `inovator` (`id`, `nama_team`, `kategori`, `file_makalah`, `achievment`, `id_stream`, `id_nilai`, `foto_team`, `created_date`, `created_by`, `status`, `lampiran`, `id_ringkasan`, `perusahaan`, `jadwal`) VALUES
(1, 'D-PRO', 'QCC', '', '', 1, 0, '', '0000-00-00', '', 'Verified', '', 0, 'PT. Yutaka Manufacturing Indonesia', '00:00:00'),
(2, 'SUANA', 'Juri Magang', NULL, NULL, NULL, NULL, NULL, '2023-04-15', 'aldi', 'Created', NULL, NULL, 'PT KRAKATAU STEEL PERSERO Tbk.', NULL),
(3, 'SSAS', 'QCO', NULL, NULL, NULL, NULL, NULL, '2023-04-15', 'aldi', 'Created', NULL, NULL, 'PT SEMEN BATURAJA (PERSERO) Tbk.', NULL),
(4, 'TRF', 'QCP', NULL, NULL, NULL, NULL, NULL, '2023-04-15', 'aldi', 'Created', NULL, NULL, 'PT PETROSEA, TBK', NULL),
(5, 'DD', 'QCC', NULL, NULL, NULL, NULL, NULL, '2023-04-15', 'aldi', 'Created', NULL, NULL, 'PT. Yutaka Manufacturing Indonesia', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `juri`
--

CREATE TABLE `juri` (
  `id` int(11) NOT NULL,
  `nama_juri` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `perusahaan` text NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `userid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `juri`
--

INSERT INTO `juri` (`id`, `nama_juri`, `kategori`, `perusahaan`, `created_by`, `created_date`, `status`, `userid`) VALUES
(1, 'Alfrinaldi', 'Juri Magang', 'YMI', 'Yutaka Manufacturing Indonesia', '2023-04-09', 'Aktif', 'aldi');

-- --------------------------------------------------------

--
-- Table structure for table `juri_stream`
--

CREATE TABLE `juri_stream` (
  `id` int(11) NOT NULL,
  `id_stream` int(11) NOT NULL,
  `id_juri` int(11) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `juri_stream`
--

INSERT INTO `juri_stream` (`id`, `id_stream`, `id_juri`, `created_by`, `created_date`) VALUES
(1, 1, 1, 'aldi', '2023-04-09 13:45:20');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_04_02_061257_create_sessions_table', 1),
(7, '2023_04_02_095633_add_role_to_users_table', 2),
(8, '2023_04_02_142224_create_admins_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE `penilaian` (
  `id` int(11) NOT NULL,
  `penerapan_aktivitas` double NOT NULL,
  `proses_pemecahan` double NOT NULL,
  `solusi` double NOT NULL,
  `tingkat_kesulitan` double NOT NULL,
  `mutu_pelaksanaan` double NOT NULL,
  `ketepatan_evaluasi` double NOT NULL,
  `dampak_hasil` double NOT NULL,
  `standarisasi` double NOT NULL,
  `mutu_makalah` double NOT NULL,
  `mutu_presentasi` double NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL,
  `id_inovator` int(11) NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penilaian`
--

INSERT INTO `penilaian` (`id`, `penerapan_aktivitas`, `proses_pemecahan`, `solusi`, `tingkat_kesulitan`, `mutu_pelaksanaan`, `ketepatan_evaluasi`, `dampak_hasil`, `standarisasi`, `mutu_makalah`, `mutu_presentasi`, `created_by`, `created_date`, `id_inovator`, `updated_at`) VALUES
(1, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 'aldi', '2023-05-31 14:27:11', 1, '2023-05-31 14:38:53');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `created_by` varchar(60) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id`, `nama`, `created_by`, `created_date`) VALUES
(1, 'PT ASTRA DAIHATSU MOTOR', '', '0000-00-00 00:00:00'),
(2, 'PT DONGGI-SENORO LNG', '', '0000-00-00 00:00:00'),
(3, 'PT PETROKIMIA GRESIK', '', '0000-00-00 00:00:00'),
(4, 'PT PUPUK ISKANDAR MUDA', '', '0000-00-00 00:00:00'),
(5, 'PT KALTIM DAYA MANDIRI', '', '0000-00-00 00:00:00'),
(6, 'PT AMERTA INDAH OTSUKA', '', '0000-00-00 00:00:00'),
(7, 'PT ADARO INDONESIA', '', '0000-00-00 00:00:00'),
(8, 'PT TOWER BERSAMA INFRASTRUCTURE TBK', '', '0000-00-00 00:00:00'),
(9, 'PT PEGADAIAN', '', '0000-00-00 00:00:00'),
(10, 'PT PG RAJAWALI II', '', '0000-00-00 00:00:00'),
(11, 'PT SOLUSI BANGUN INDONESIA', '', '0000-00-00 00:00:00'),
(12, 'PT TRIPUTRA AGRO PERSADA TBK', '', '0000-00-00 00:00:00'),
(13, 'PT. DAYA ADICIPTA MOTORA', '', '0000-00-00 00:00:00'),
(14, 'PT PUPUK KALIMANTAN TIMUR', '', '0000-00-00 00:00:00'),
(15, 'PT SEMEN BATURAJA (PERSERO) Tbk.', '', '0000-00-00 00:00:00'),
(16, 'PT UNITED TRACTORS PANDU ENGINEERING', '', '0000-00-00 00:00:00'),
(17, 'PT PETROSEA, TBK', '', '0000-00-00 00:00:00'),
(18, 'PT SARIHUSADA GENERASI MAHARDHIKA', '', '0000-00-00 00:00:00'),
(19, 'PT BUMITAMA GUNAJAYA AGRO', '', '0000-00-00 00:00:00'),
(20, 'PT KRAKATAU STEEL PERSERO Tbk.', '', '0000-00-00 00:00:00'),
(21, 'PT SANGHIANG PERKASA', '', '0000-00-00 00:00:00'),
(22, 'PT SOLUSI BANGUN INDONESIA', '', '0000-00-00 00:00:00'),
(23, 'PT KERETA API INDONESIA (PERSERO)', '', '0000-00-00 00:00:00'),
(24, 'PT DHL SUPPLY CHAIN INDONESIA', '', '0000-00-00 00:00:00'),
(25, 'PT HASNUR RIUNG SINERGI', '', '0000-00-00 00:00:00'),
(26, 'PT DHARMA AGUNG WIJAYA', '', '0000-00-00 00:00:00'),
(27, 'PT TOYOTA MOTOR MANUFACTURING INDONESIA', '', '0000-00-00 00:00:00'),
(28, 'PT SEMEN INDONESIA (PERSERO)', '', '0000-00-00 00:00:00'),
(29, 'Koperasi Konsumen Karyawan Keluarga Besar Petrokimia Gresik', '', '0000-00-00 00:00:00'),
(30, 'PT MOLTEN ALUMINUM PRODUCER INDONESIA', '', '0000-00-00 00:00:00'),
(32, 'PT. Yutaka Manufacturing Indonesia', '', '2023-04-15 17:43:17');

-- --------------------------------------------------------

--
-- Table structure for table `produksi_mf2w`
--

CREATE TABLE `produksi_mf2w` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `part_name` varchar(255) NOT NULL,
  `operator` varchar(255) NOT NULL,
  `inspector` varchar(255) NOT NULL,
  `tables` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `shift` int(11) NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ringkasan_materi`
--

CREATE TABLE `ringkasan_materi` (
  `id` int(11) NOT NULL,
  `tema` text NOT NULL,
  `masalah` text NOT NULL,
  `dampak_masalah` text NOT NULL,
  `penyebab_utama` text NOT NULL,
  `solusi` text NOT NULL,
  `dampak_hasil_solusi` text NOT NULL,
  `prestasi` text NOT NULL,
  `created_date` date NOT NULL,
  `created_by` varchar(20) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
('j0Ro6Kvj5YSUZIkzrxkar1jhaK0WnHRlK3MvZ9Jr', 1, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiZU5pa29sdkl5MndXV2RtRVVCeEJ2UHlVb1A1UDBOZzhvOXpJaGRyeCI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQzOiJodHRwOi8vMTI3LjAuMC4xOjg5ODkvYWRtaW5hZGRzdHJlYW1ldmVudC8xIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRwZGFjcHEyc0NGZHV2Mk43WEFsYzZ1NnRab0xJRzI3SDguOXdScnE2WFh6bEZBVVQxR0EwMiI7fQ==', 1685763984),
('j6sHz9yROpgvucUudRMnOw7RuUqYlEexjW3ynCTa', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMTN3ZUJuWVM2cUFTeHhqTk9YTHl5MER2NDlNVFpPZkROeWdTc2h2cSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwNCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1933397051);

-- --------------------------------------------------------

--
-- Table structure for table `stream`
--

CREATE TABLE `stream` (
  `id` int(11) NOT NULL,
  `code_stream` varchar(50) NOT NULL,
  `nama_stream` varchar(50) NOT NULL,
  `jadwal` date NOT NULL,
  `id_event` int(11) NOT NULL,
  `id_juri` int(11) DEFAULT NULL,
  `created_by` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stream`
--

INSERT INTO `stream` (`id`, `code_stream`, `nama_stream`, `jadwal`, `id_event`, `id_juri`, `created_by`, `created_date`, `status`) VALUES
(1, 'XKAS', 'XKAS', '2023-04-09', 1, NULL, 'Yutaka Manufacturing Indonesia', '2023-04-09 00:00:00', 'Open'),
(2, 'test1', 'test1', '2023-04-09', 1, NULL, 'Yutaka Manufacturing Indonesia', '2023-04-09 00:00:00', 'Open'),
(3, 'X2K', 'X2K', '2023-04-09', 2, NULL, 'Yutaka Manufacturing Indonesia', '2023-04-09 00:00:00', 'Open'),
(4, '1A', '1A', '2023-04-15', 1, NULL, 'Yutaka Manufacturing Indonesia', '2023-04-15 00:00:00', 'Open');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `perusahaan` text NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `perusahaan`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `role`) VALUES
(1, '', 'Yutaka Manufacturing Indonesia', 'alfrinaldi.taufik@yutaka.co.id', 'PT. Yutaka Manufacturing Indonesia', NULL, '$2y$10$pdacpq2sCFduv2N7XAlc6u6tZoLIG27H8.9wRrq6XXzlFAUT1GA02', NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-01 23:44:01', '2023-04-01 23:44:01', 'user'),
(2, 'aldi', 'Yutaka Manufacturing Indonesia', 'alfrinalditaufik@gmail.com', 'PT. Yutaka Manufacturing Indonesia', NULL, '$2y$10$pdacpq2sCFduv2N7XAlc6u6tZoLIG27H8.9wRrq6XXzlFAUT1GA02', NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-01 23:44:01', '2023-04-01 23:44:01', 'juri');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anggota_team`
--
ALTER TABLE `anggota_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_produk`
--
ALTER TABLE `data_produk`
  ADD PRIMARY KEY (`part_name`);

--
-- Indexes for table `event_periode`
--
ALTER TABLE `event_periode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `foto_ringkasan`
--
ALTER TABLE `foto_ringkasan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inovator`
--
ALTER TABLE `inovator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `juri`
--
ALTER TABLE `juri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `juri_stream`
--
ALTER TABLE `juri_stream`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produksi_mf2w`
--
ALTER TABLE `produksi_mf2w`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produksi_mf2w_part_name_foreign` (`part_name`);

--
-- Indexes for table `ringkasan_materi`
--
ALTER TABLE `ringkasan_materi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `stream`
--
ALTER TABLE `stream`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `anggota_team`
--
ALTER TABLE `anggota_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event_periode`
--
ALTER TABLE `event_periode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `foto_ringkasan`
--
ALTER TABLE `foto_ringkasan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inovator`
--
ALTER TABLE `inovator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `juri`
--
ALTER TABLE `juri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `juri_stream`
--
ALTER TABLE `juri_stream`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `produksi_mf2w`
--
ALTER TABLE `produksi_mf2w`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ringkasan_materi`
--
ALTER TABLE `ringkasan_materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stream`
--
ALTER TABLE `stream`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produksi_mf2w`
--
ALTER TABLE `produksi_mf2w`
  ADD CONSTRAINT `produksi_mf2w_part_name_foreign` FOREIGN KEY (`part_name`) REFERENCES `data_produk` (`part_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
