-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2022 at 10:02 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_pii`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id` int(20) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `no_telp` int(20) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `nama`, `no_telp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Nico', 6282322, 'Sunyaragi', '2022-05-18 10:07:03', '2022-05-18 10:07:03'),
(2, 'Sonny', 62873626, 'Bandung', '2022-05-18 10:07:42', '2022-05-18 10:07:42'),
(3, 'Iwan', 62873277, 'Jakarta', '2022-05-18 10:08:11', '2022-05-18 10:08:11'),
(4, 'Murni', 62877277, 'Jogja', '2022-05-18 10:08:30', '2022-05-18 10:08:30'),
(5, 'Yola', 628726363, 'Semarang', '2022-05-18 10:08:51', '2022-05-18 10:08:51'),
(6, 'Kelpin', 6284343, 'Cirebon', '2022-05-18 10:09:12', '2022-05-18 10:09:12'),
(7, 'Usman', 6288276, 'Mundu', '2022-05-18 10:09:44', '2022-05-18 10:09:44'),
(8, 'Silpi', 628723727, 'Kasepuhan', '2022-05-18 10:10:00', '2022-05-18 10:10:00'),
(9, 'Dimas', 62862326, 'Pecilon', '2022-05-18 10:13:47', '2022-05-18 10:13:47'),
(10, 'Tri', 628723626, 'Perum', '2022-05-18 10:14:05', '2022-05-18 10:14:05'),
(11, 'Juwantoo', 6286326, 'Lobunta', '2022-05-18 10:15:10', '2022-05-18 10:15:24'),
(12, 'Alfilahh', 62826, 'Bandung', '2022-05-18 10:15:58', '2022-05-18 10:16:21');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Keluarga', 'Grup Keluarga Kandung', '2022-05-18 10:10:51', '2022-05-18 10:10:51'),
(2, 'Kuliah', 'Grup Teman Kuliah', '2022-05-18 10:12:16', '2022-05-18 10:12:16'),
(3, 'SMP', 'Grup Teman SMP', '2022-05-18 10:14:26', '2022-05-18 10:14:26'),
(4, 'SMA', 'Grup Teman SMA', '2022-05-18 10:16:46', '2022-05-18 10:16:46');

-- --------------------------------------------------------

--
-- Table structure for table `member_groups`
--

CREATE TABLE `member_groups` (
  `id` int(11) NOT NULL,
  `friends_id` int(11) NOT NULL,
  `groups_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member_groups`
--

INSERT INTO `member_groups` (`id`, `friends_id`, `groups_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2022-05-18 10:11:33', '2022-05-18 10:11:33'),
(2, 2, 1, 1, '2022-05-18 10:11:33', '2022-05-18 10:11:33'),
(3, 3, 1, 1, '2022-05-18 10:11:33', '2022-05-18 10:11:33'),
(4, 4, 1, 1, '2022-05-18 10:11:33', '2022-05-18 10:11:33'),
(5, 5, 1, 1, '2022-05-18 10:11:33', '2022-05-18 10:11:33'),
(6, 1, 2, 2, '2022-05-18 10:12:41', '2022-05-18 10:12:51'),
(7, 6, 2, 1, '2022-05-18 10:12:41', '2022-05-18 10:12:41'),
(8, 7, 2, 1, '2022-05-18 10:12:41', '2022-05-18 10:12:41'),
(9, 8, 2, 1, '2022-05-18 10:12:41', '2022-05-18 10:12:41'),
(10, 9, 3, 1, '2022-05-18 10:14:48', '2022-05-18 10:14:48'),
(11, 10, 3, 1, '2022-05-18 10:14:48', '2022-05-18 10:14:48'),
(12, 11, 4, 1, '2022-05-18 10:16:59', '2022-05-18 10:16:59'),
(13, 12, 4, 1, '2022-05-18 10:16:59', '2022-05-18 10:16:59');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_10_170039_create_groups_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_groups`
--
ALTER TABLE `member_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `member_groups`
--
ALTER TABLE `member_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
