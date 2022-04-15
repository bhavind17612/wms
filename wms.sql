-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2022 at 07:47 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wms`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `menuid` int(22) DEFAULT NULL,
  `work_group` varchar(22) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` varchar(20) NOT NULL,
  `updated_by` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `description`, `menuid`, `work_group`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'Inbound', 'Test', NULL, NULL, '2022-03-29 06:42:07', '2022-03-29 06:42:07', '1', NULL),
(2, 'Outbound', 'test asdasdsad', NULL, NULL, '2022-03-29 06:43:01', '2022-03-29 06:47:05', '1', '1'),
(3, 'Test', 'Test', NULL, NULL, '2022-03-29 06:43:12', '2022-03-29 06:43:12', '1', NULL);

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
-- Table structure for table `login_session`
--

CREATE TABLE `login_session` (
  `id` int(11) NOT NULL,
  `session_id` text NOT NULL,
  `user_id` int(22) NOT NULL,
  `last_access` timestamp NOT NULL DEFAULT current_timestamp(),
  `timeout` int(11) NOT NULL DEFAULT 30,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_session`
--

INSERT INTO `login_session` (`id`, `session_id`, `user_id`, `last_access`, `timeout`, `status`, `created_at`, `updated_at`) VALUES
(1, 'reuRx8ABj4vAE887mbQkHAnCjTk8otSM5seBkWl9', 1, '2022-03-26 04:46:18', 30, 'Inactive', '2022-03-26 10:16:18', '2022-03-26 10:22:20'),
(2, 'reuRx8ABj4vAE887mbQkHAnCjTk8otSM5seBkWl9', 1, '2022-03-26 10:22:22', 30, 'Inactive', '2022-03-26 10:22:22', '2022-03-26 10:32:27'),
(3, 'e1Xc2NZ1UGb4Ow8eVgT4Pst2hH9YdJtZmMRjcQEY', 1, '2022-03-26 05:42:19', 30, 'Inactive', '2022-03-26 10:32:41', '2022-03-26 10:42:55'),
(4, 'Sw6gx0vheE9sMIO9I41ch7k0J0ZEX0YnsqJWO7Te', 1, '2022-03-26 07:43:28', 30, 'Inactive', '2022-03-26 10:43:28', '2022-03-26 10:43:52'),
(5, 'spWgFlEWojwLjnFY0kcc83hezkhSAONQgg4AL2L3', 1, '2022-03-26 01:44:18', 30, 'Inactive', '2022-03-26 10:44:18', '2022-03-26 10:44:26'),
(6, '10j5NtVdKz67ASkoO0nQXWYJrz8xWHl3wiYw1Joc', 1, '2022-03-26 10:44:34', 30, 'Inactive', '2022-03-26 10:44:34', '2022-03-26 10:44:47'),
(7, '8nCx2sgyLAU3rRhapiAOiu83dnVB4YT6X3awJpTi', 1, '2022-03-26 10:45:26', 30, 'Inactive', '2022-03-26 10:44:52', '2022-03-26 10:45:30'),
(8, 'BpZz1WQXql39LEyzP60xwqEbomov0rqtm7h80N6S', 1, '2022-03-26 04:48:51', 30, 'Inactive', '2022-03-26 08:48:51', '2022-03-26 11:49:16'),
(9, 'SIen828zb0Rw4ah07ZenhtNrtKbCJlPDsBHZvLiX', 1, '2022-03-26 11:50:43', 30, 'Inactive', '2022-03-26 11:49:20', '2022-03-26 12:53:52'),
(10, 'eb5I5aWjD6v8ZVcI5uQiPspcgCquo93Rcu0yB0m8', 1, '2022-03-28 08:28:20', 30, 'Active', '2022-03-28 06:31:07', '2022-03-28 08:28:20'),
(11, '7z3oWVI3y3JuVeDCxHolYedsn9qHdlC4KVMHR60s', 1, '2022-03-28 06:34:31', 30, 'Active', '2022-03-28 06:34:31', '2022-03-28 06:34:31'),
(12, 'egiEjXoBKR0tDwJKJFCWkmPvMY9mP7RsxxtL5jaA', 1, '2022-03-28 09:38:09', 30, 'Inactive', '2022-03-28 08:35:26', '2022-03-28 10:30:42'),
(13, 'mvy6jeyzcHpEk0c4v30CvD6WmKb4t21MqjxtvHrQ', 1, '2022-03-28 10:30:54', 30, 'Active', '2022-03-28 10:30:46', '2022-03-28 10:30:54'),
(14, '15A6h262C7mOljbd9TFAWjqhrOVVJ1P5LINAyyGI', 1, '2022-03-29 07:31:04', 30, 'Active', '2022-03-29 05:38:42', '2022-03-29 07:31:04'),
(15, '45HZ5logSrBQGQPoKgIkOTGuu52qAbYgNZR35NcT', 1, '2022-03-29 10:19:25', 30, 'Active', '2022-03-29 09:49:29', '2022-03-29 10:19:25'),
(16, 'PitNWWLdzIFsVFkTaRZIsS6KZYgkQN1NdASa4pm0', 1, '2022-03-30 11:37:38', 30, 'Active', '2022-03-30 11:15:20', '2022-03-30 11:37:38');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `transaction_type` enum('UI','RF') NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `parent_id` decimal(50,0) DEFAULT NULL,
  `menu_type` enum('Sub-Menu','Transaction') NOT NULL,
  `sub_menu_id` decimal(50,0) DEFAULT NULL,
  `transaction_id` decimal(50,0) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` decimal(50,0) NOT NULL,
  `updated_by` decimal(50,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `type` enum('UI','RF') NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `parameter` varchar(50) DEFAULT NULL,
  `editable` enum('Yes','No','','') NOT NULL DEFAULT 'Yes',
  `uri` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(22) NOT NULL,
  `updated_by` varchar(22) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `type`, `name`, `description`, `parameter`, `editable`, `uri`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'UI', 'test', 'sdsdsd', NULL, 'Yes', 'test', '2022-03-29 10:15:19', '2022-03-29 10:15:19', '1', NULL),
(2, 'RF', 'sd', 'ss', NULL, 'Yes', 'test/ss', '2022-03-29 10:15:38', '2022-03-29 10:15:38', '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `is_deleted` enum('No','Yes') COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_group` char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dept_id` int(22) DEFAULT NULL,
  `menu_id` int(22) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `username`, `password`, `status`, `is_deleted`, `work_group`, `dept_id`, `menu_id`, `remember_token`, `created_at`, `updated_at`, `updated_by`) VALUES
(1, 'Mukhram', 'Baror', 'mukhram@gmail.com', 'admin', '$2y$10$Iv3k/BywmVSD7wF4eRqkp.PcIl6HESPO3h3G8trpwxuIrkotUJDpS', 'Active', 'No', '', 0, 0, NULL, NULL, NULL, NULL),
(2, 'Mukhramcsdsd', 'Mukhram', 'mukhrasm@gmail.com', 'admin1', '$2y$10$Aw2Vi3mAkCf7MkYqSEYB4OGccGkWIbWE.w4x6pF.GecPX5wgluTWa', 'Active', 'No', '', 0, 0, NULL, NULL, '2022-03-29 06:07:45', '1'),
(4, 'mujhra', 'mujhra', 'mukhram@DMON.COM', 'mukhrambror', '$2y$10$Vv.IxfzGivR7d/DS12IP7eZxjj6MtzI.QVMETJaP8uApyEnuskkse', 'Inactive', 'No', NULL, 1, NULL, NULL, '2022-03-28 08:27:11', '2022-03-29 06:07:55', '1'),
(5, 'mujhra', 'jsdsd', 'mukhradm@DMON.COM', 'Mukhram', '$2y$10$bah4eXHAcKZTtxuoW6yzuuBIeXHqsFgTx3TpR36mDutYHixtmAUgW', 'Inactive', 'No', NULL, NULL, NULL, NULL, '2022-03-28 08:42:34', '2022-03-29 06:17:33', '1'),
(6, 'mujhra', 'mujhra', 'mukshram@DMON.COM', 'sdsdsd', '$2y$10$AXXT459Ah2XGfI9TiIYmkeshZuERkdC67bYQXcRbTcqdBDTnek18.', 'Inactive', 'No', NULL, NULL, NULL, NULL, '2022-03-28 09:15:08', '2022-03-29 06:17:39', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `login_session`
--
ALTER TABLE `login_session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
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
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login_session`
--
ALTER TABLE `login_session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
