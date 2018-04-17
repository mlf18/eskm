-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 09, 2018 at 05:19 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eskm_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `berita` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jadwals`
--

CREATE TABLE `jadwals` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `mulai` date NOT NULL,
  `selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jawabans`
--

CREATE TABLE `jawabans` (
  `id` int(10) UNSIGNED NOT NULL,
  `responden_id` int(10) UNSIGNED NOT NULL,
  `kuesioner_id` int(10) UNSIGNED NOT NULL,
  `jawaban` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jawabans`
--

INSERT INTO `jawabans` (`id`, `responden_id`, `kuesioner_id`, `jawaban`) VALUES
(2, 1, 1, '0'),
(3, 9, 1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `kabupatens`
--

CREATE TABLE `kabupatens` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `provinsi_id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kabupatens`
--

INSERT INTO `kabupatens` (`id`, `user_id`, `provinsi_id`, `nama`) VALUES
(1, 2, 1, 'Kabupaten Banjarnegara');

-- --------------------------------------------------------

--
-- Table structure for table `kuesioners`
--

CREATE TABLE `kuesioners` (
  `id` int(10) UNSIGNED NOT NULL,
  `upp_id` int(10) UNSIGNED NOT NULL,
  `pertanyaan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kuesioners`
--

INSERT INTO `kuesioners` (`id`, `upp_id`, `pertanyaan`, `kategori`) VALUES
(1, 1, 'Ada ?', 'dropdown');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(71, '2014_10_12_000000_create_users_table', 1),
(72, '2014_10_12_100000_create_password_resets_table', 1),
(73, '2018_03_04_030711_create_provinsis_table', 1),
(74, '2018_03_04_030713_create_kabupatens_table', 1),
(75, '2018_03_04_030753_create_opdprovinsis_table', 1),
(76, '2018_03_04_030755_create_opdkabupatens_table', 1),
(77, '2018_03_04_042035_create_upps_table', 1),
(78, '2018_04_03_233326_create_jadwals_table', 1),
(79, '2018_04_03_233400_create_respondens_table', 1),
(80, '2018_04_03_233402_create_kuesioners_table', 1),
(81, '2018_04_03_233409_create_jawabans_table', 1),
(82, '2018_04_04_154140_create_beritas_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `opdkabupatens`
--

CREATE TABLE `opdkabupatens` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `kabupaten_id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `opdprovinsis`
--

CREATE TABLE `opdprovinsis` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `provinsi_id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `provinsis`
--

CREATE TABLE `provinsis` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `provinsis`
--

INSERT INTO `provinsis` (`id`, `user_id`, `nama`) VALUES
(1, 1, 'Provinsi Jateng');

-- --------------------------------------------------------

--
-- Table structure for table `respondens`
--

CREATE TABLE `respondens` (
  `id` int(10) UNSIGNED NOT NULL,
  `nip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kabupaten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `umur` int(11) NOT NULL,
  `pendidikan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pekerjaan` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `respondens`
--

INSERT INTO `respondens` (`id`, `nip`, `nama`, `kabupaten`, `umur`, `pendidikan`, `pekerjaan`) VALUES
(1, '123', '123', '1', 21, 'SD', 'swasta'),
(8, '123', '123', '1', 22, 'SD', 'swasta'),
(9, '123', '123', '1', 22, 'SD', 'swasta');

-- --------------------------------------------------------

--
-- Table structure for table `upps`
--

CREATE TABLE `upps` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `upps`
--

INSERT INTO `upps` (`id`, `user_id`, `nama`) VALUES
(1, 1, 'Iptekin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'provinsi',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `kategori`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'provjateng', 'prov@prov.com', '$2y$10$JEki/SeG83OerRO6g9Bz0uHv6Xuk5pRxrpz8t/pu5G/cMoQSRf0Kq', 'provinsi', NULL, '2018-04-08 06:08:45', '2018-04-08 06:08:45'),
(2, 'banjarnegara', 'b@b.com', '$2y$10$PgiIkCkHRn9i2AqI//.r8eLf1.Je.jBFL1C549sRq3XAko0tXCylm', 'kabupaten', NULL, '2018-04-08 06:09:51', '2018-04-08 06:10:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwals`
--
ALTER TABLE `jadwals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jadwals_user_id_foreign` (`user_id`);

--
-- Indexes for table `jawabans`
--
ALTER TABLE `jawabans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jawabans_responden_id_foreign` (`responden_id`),
  ADD KEY `jawabans_kuesioner_id_foreign` (`kuesioner_id`);

--
-- Indexes for table `kabupatens`
--
ALTER TABLE `kabupatens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kabupatens_user_id_foreign` (`user_id`),
  ADD KEY `kabupatens_provinsi_id_foreign` (`provinsi_id`);

--
-- Indexes for table `kuesioners`
--
ALTER TABLE `kuesioners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kuesioners_upp_id_foreign` (`upp_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opdkabupatens`
--
ALTER TABLE `opdkabupatens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `opdkabupatens_user_id_foreign` (`user_id`),
  ADD KEY `opdkabupatens_kabupaten_id_foreign` (`kabupaten_id`);

--
-- Indexes for table `opdprovinsis`
--
ALTER TABLE `opdprovinsis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `opdprovinsis_user_id_foreign` (`user_id`),
  ADD KEY `opdprovinsis_provinsi_id_foreign` (`provinsi_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `provinsis`
--
ALTER TABLE `provinsis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `provinsis_user_id_foreign` (`user_id`);

--
-- Indexes for table `respondens`
--
ALTER TABLE `respondens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upps`
--
ALTER TABLE `upps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `upps_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwals`
--
ALTER TABLE `jadwals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jawabans`
--
ALTER TABLE `jawabans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kabupatens`
--
ALTER TABLE `kabupatens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kuesioners`
--
ALTER TABLE `kuesioners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `opdkabupatens`
--
ALTER TABLE `opdkabupatens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `opdprovinsis`
--
ALTER TABLE `opdprovinsis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `provinsis`
--
ALTER TABLE `provinsis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `respondens`
--
ALTER TABLE `respondens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `upps`
--
ALTER TABLE `upps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwals`
--
ALTER TABLE `jadwals`
  ADD CONSTRAINT `jadwals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `jawabans`
--
ALTER TABLE `jawabans`
  ADD CONSTRAINT `jawabans_kuesioner_id_foreign` FOREIGN KEY (`kuesioner_id`) REFERENCES `kuesioners` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `jawabans_responden_id_foreign` FOREIGN KEY (`responden_id`) REFERENCES `respondens` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `kabupatens`
--
ALTER TABLE `kabupatens`
  ADD CONSTRAINT `kabupatens_provinsi_id_foreign` FOREIGN KEY (`provinsi_id`) REFERENCES `provinsis` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `kabupatens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `kuesioners`
--
ALTER TABLE `kuesioners`
  ADD CONSTRAINT `kuesioners_upp_id_foreign` FOREIGN KEY (`upp_id`) REFERENCES `upps` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `opdkabupatens`
--
ALTER TABLE `opdkabupatens`
  ADD CONSTRAINT `opdkabupatens_kabupaten_id_foreign` FOREIGN KEY (`kabupaten_id`) REFERENCES `kabupatens` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `opdkabupatens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `opdprovinsis`
--
ALTER TABLE `opdprovinsis`
  ADD CONSTRAINT `opdprovinsis_provinsi_id_foreign` FOREIGN KEY (`provinsi_id`) REFERENCES `provinsis` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `opdprovinsis_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `provinsis`
--
ALTER TABLE `provinsis`
  ADD CONSTRAINT `provinsis_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `upps`
--
ALTER TABLE `upps`
  ADD CONSTRAINT `upps_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
