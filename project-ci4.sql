-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2023 at 03:01 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project-ci4`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'ryan@gmail.com', 1, '2023-10-19 19:56:35', 1),
(2, '::1', 'wahyu@gmail.com', 2, '2023-10-19 22:42:57', 1),
(3, '::1', 'azka', 3, '2023-10-20 01:20:04', 0),
(4, '::1', 'azka@gmail.com', 3, '2023-10-20 01:25:17', 0),
(5, '::1', 'ryan@gmail.com', 1, '2023-10-20 01:25:38', 1),
(6, '::1', 'azka@gmail.com', 3, '2023-10-20 01:27:56', 1),
(7, '::1', 'ryan@gmail.com', 1, '2023-10-20 01:41:01', 1),
(8, '::1', 'wahyu@gmail.com', 2, '2023-10-20 03:36:13', 1),
(9, '::1', 'sani', 4, '2023-10-20 03:38:25', 0),
(10, '::1', 'ryan@gmail.com', 1, '2023-10-20 03:38:35', 1),
(11, '::1', 'sani@gmail.com', 4, '2023-10-20 03:39:40', 1),
(12, '::1', 'ryan@gmail.com', 1, '2023-10-20 03:40:24', 1),
(13, '::1', 'ryan@gmail.com', 1, '2023-10-20 06:11:52', 1),
(14, '::1', 'ryan@gmail.com', 1, '2023-10-20 09:37:43', 1),
(15, '::1', 'ryan@gmail.com', 1, '2023-10-20 17:08:50', 1),
(16, '::1', 'ryan', NULL, '2023-10-21 02:06:33', 0),
(17, '::1', 'ryan@gmail.com', 1, '2023-10-21 02:06:44', 1),
(18, '::1', 'ryan@gmail.com', 1, '2023-10-21 04:49:06', 1),
(19, '::1', 'ryan@gmail.com', 1, '2023-10-21 04:50:50', 1),
(20, '::1', 'wahyu@gmail.com', 2, '2023-10-21 13:18:14', 1),
(21, '::1', 'sindi@gmail.com', 5, '2023-10-21 14:05:29', 1),
(22, '::1', 'intan@gmail.com', 6, '2023-10-22 04:30:42', 1),
(23, '::1', 'intan@gmail.com', 6, '2023-10-22 04:35:00', 1),
(24, '::1', 'intan@gmail.com', 6, '2023-10-22 05:11:11', 1),
(25, '::1', 'sindi', NULL, '2023-10-22 05:11:46', 0),
(26, '::1', 'sindi', 5, '2023-10-22 05:11:58', 0),
(27, '::1', 'ryan@gmail.com', 1, '2023-10-22 05:12:17', 1),
(28, '::1', 'intan@gmail.com', 6, '2023-10-22 05:16:19', 1),
(29, '::1', 'ryan@gmail.com', 1, '2023-10-23 08:13:23', 1),
(30, '::1', 'ryan@gmail.com', 1, '2023-10-23 08:13:53', 1),
(31, '::1', 'sindi', NULL, '2023-10-23 08:14:58', 0),
(32, '::1', 'sindi', NULL, '2023-10-23 08:15:11', 0),
(33, '::1', 'sindi', NULL, '2023-10-23 08:15:29', 0),
(34, '::1', 'wahyu@gmail.com', 2, '2023-10-23 08:15:49', 1),
(35, '::1', 'wahyu', 2, '2023-10-23 08:16:32', 0),
(36, '::1', 'ryan@gmail.com', 1, '2023-10-23 08:16:45', 1),
(37, '::1', 'ryan', NULL, '2023-11-02 07:07:23', 0),
(38, '::1', 'ryan', NULL, '2023-11-02 07:07:23', 0),
(39, '::1', 'ryan@gmail.com', 1, '2023-11-02 07:07:36', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) DEFAULT NULL,
  `jenis_barang` varchar(255) DEFAULT NULL,
  `foto_barang` varchar(255) DEFAULT NULL,
  `kode_barang` int(10) DEFAULT NULL,
  `jumlah_barang` int(10) DEFAULT NULL,
  `harga_jual` int(10) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `nama_barang`, `jenis_barang`, `foto_barang`, `kode_barang`, `jumlah_barang`, `harga_jual`, `created_at`, `update_at`) VALUES
(1, 'Baju Muslim', 'baju', '1697821933_1f101353866b92a5a7b9.jpg', 11, 12, 50000, '2023-10-20 19:26:50', '2023-10-20 19:27:08'),
(2, 'Baju Koko', 'baju', '1697802649_95f5c35d0f9e4c3b5416.jpg', 12, 12, 50000, '2023-10-20 19:27:14', '2023-10-20 19:27:20'),
(4, 'beko', 'mainan', '1697822242_596c0e2d0d6d0701213a.jpg', 21, 12, 10000, '2023-10-21 09:25:57', '2023-10-21 09:26:03'),
(6, 'jam tangan', 'aksesoris', '1697854998_e03b5cd7811697494647.png', 31, 12, 20000, '2023-10-21 02:23:18', '2023-10-21 02:24:58');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(2, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1697744966, 1),
(3, '2023-10-20-053539', 'App\\Database\\Migrations\\Items', 'default', 'App', 1697781854, 2),
(4, '2023-10-21-043701', 'App\\Database\\Migrations\\Order', 'default', 'App', 1697863532, 3);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama_kasir` varchar(255) DEFAULT NULL,
  `total_harga` int(10) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `nama_kasir`, `total_harga`, `created_at`, `update_at`) VALUES
(1, 'ryan', 50000, '2023-10-21 13:01:58', NULL),
(2, 'ryan', 50000, '2023-10-21 13:14:09', NULL),
(4, 'wahyu', 10000, '2023-10-21 13:18:42', NULL),
(5, 'sindi', 20000, '2023-10-21 14:41:36', NULL),
(6, 'intan', 50000, '2023-10-22 05:16:57', NULL),
(7, 'ryan', 50000, '2023-10-23 08:20:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `ktp` varchar(255) DEFAULT NULL,
  `role` enum('admin','kasir') DEFAULT 'kasir',
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `ktp`, `role`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ryan', '1231', '121', 'admin', 'ryan@gmail.com', 'ryan', '$2y$10$CCcmtqvc55aEBxwkI2Pfle5x0liCdiKcmmhzFERm3sXHKqu3nP35u', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-10-19 19:56:24', '2023-10-19 19:56:24', NULL),
(2, 'wahyu', '1232', '122', 'admin', 'wahyu@gmail.com', 'wahyu', '$2y$10$CymBf1mdD308cCe9nKSlvOFsM2R1upB63Z30agTAaWDNj.L7Xy2KG', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-10-19 22:42:47', '2023-10-19 22:42:47', NULL),
(5, 'sindi', '1233', '1235', 'admin', 'sindi@gmail.com', 'sindi', '$2y$10$oAZ51g5C9SSDRO7uIKCnNuJzeCXYNHTV2R8.rv4X/BNRJb.EcwCxS', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-10-21 14:05:13', '2023-10-21 14:05:13', NULL),
(6, 'intan', '1234', '12344', 'admin', 'intan@gmail.com', 'intan', '$2y$10$jMiER1j9p8oTW5twdruHUu7612pj87bbQ0yGH6oNYYqq9M1k8.UYW', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-10-22 04:30:30', '2023-10-22 04:30:30', NULL),
(7, 'anton', '0811', '12333', 'kasir', 'anton@gmail.com', 'anton', '$2y$10$CCcmtqvc55aEBxwkI2Pfle5x0liCdiKcmmhzFERm3sXHKqu3nP35u', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2023-10-23 08:18:09', '2023-10-23 08:18:09', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
