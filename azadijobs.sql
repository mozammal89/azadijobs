-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 15, 2020 at 04:42 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `azadijobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `division_name`, `created_at`, `updated_at`) VALUES
(4, 'Dhaka', '2020-02-17 03:27:29', '2020-02-17 03:27:29'),
(6, 'Raj', '2020-02-19 06:02:28', '2020-02-19 06:02:28');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_categories`
--

CREATE TABLE `job_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_categories`
--

INSERT INTO `job_categories` (`id`, `job_category_name`, `created_at`, `updated_at`) VALUES
(6, 'CSE', '2020-02-18 04:52:37', '2020-02-18 04:52:37'),
(9, 'Private', '2020-02-19 06:03:00', '2020-02-19 06:03:00');

-- --------------------------------------------------------

--
-- Table structure for table `job_provider_registers`
--

CREATE TABLE `job_provider_registers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL DEFAULT '3',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `com_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `com_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `com_web_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `com_business_type` bigint(20) NOT NULL,
  `provider_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trade_license` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tin_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phn_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_starting_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_provider_registers`
--

INSERT INTO `job_provider_registers` (`id`, `role_id`, `user_id`, `com_name`, `com_address`, `com_web_link`, `com_business_type`, `provider_image`, `trade_license`, `tin_number`, `phn_number`, `email`, `company_starting_date`, `status`, `created_at`, `updated_at`) VALUES
(9, 3, 44, 'Soft Check', 'Uttara', 'soft tech LTD', 6, 'image1583817210.jpg', '123456', 'TIN 123', '123', 'soft@gmail.com', NULL, 1, '2020-03-09 00:10:18', '2020-03-09 23:13:30');

-- --------------------------------------------------------

--
-- Table structure for table `job_seeker_registers`
--

CREATE TABLE `job_seeker_registers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL DEFAULT '2',
  `user_id` int(11) NOT NULL,
  `seeker_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phn_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seeker_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seeker_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seeker_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interested_area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_seeker_registers`
--

INSERT INTO `job_seeker_registers` (`id`, `role_id`, `user_id`, `seeker_name`, `phn_number`, `seeker_address`, `seeker_email`, `seeker_image`, `interested_area`, `created_at`, `updated_at`) VALUES
(15, 2, 42, 'seeker new', '1234', 'uttara', 'seekprofile@gmail.com', 'image1583666565.jpg', '9', '2020-03-08 03:57:48', '2020-03-08 05:22:45');

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
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(15, '2020_02_17_074247_create_division_table', 2),
(16, '2020_02_18_044958_create_job_categories_table', 3),
(17, '2020_02_18_095141_create_sub_categories_table', 4),
(20, '2020_02_23_075024_create_job_provider_registers_table', 5),
(21, '2020_02_24_113150_create_job_seeker_registers_table', 6);

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
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sub_category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `cat_id`, `sub_category_name`, `created_at`, `updated_at`) VALUES
(1, 6, 'one', '2020-03-02 04:09:56', '2020-03-02 04:09:56'),
(2, 9, 'test', '2020-03-02 04:45:39', '2020-03-02 04:45:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL DEFAULT '2',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role_id`, `email`, `mobile`, `email_verified_at`, `provider`, `provider_id`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 1, 'admin@gmail.com', '01738851110', NULL, NULL, NULL, '$2y$10$1mrMzBIpi44pf1ZiAaQqq.yDEw16a1OSY4XfhuKY7u5scW.Nr/Yq2', 1, NULL, '2020-02-17 01:53:44', '2020-02-17 01:53:44'),
(2, 'seeker', 2, 'seeker@gmail.com', '017388511101', NULL, NULL, NULL, '$2y$10$1mrMzBIpi44pf1ZiAaQqq.yDEw16a1OSY4XfhuKY7u5scW.Nr/Yq2', 1, NULL, NULL, NULL),
(3, 'provider', 3, 'provider@gmail.com', '017388511102', NULL, NULL, NULL, '$2y$10$1mrMzBIpi44pf1ZiAaQqq.yDEw16a1OSY4XfhuKY7u5scW.Nr/Yq2', 1, NULL, NULL, NULL),
(42, 'seek', 2, 'seekprofile@gmail.com', '1234', NULL, NULL, NULL, '$2y$10$ttzdlZghmw5yGAqZlsRTG.dt2vRMeb6Xy1gYa2DAmWn0T7LX2yEuS', 1, NULL, '2020-03-08 03:57:48', '2020-03-08 03:57:48'),
(44, 'Soft', 3, 'soft@gmail.com', '123', NULL, NULL, NULL, '$2y$10$O8zY7ZPtwK5tFRDEB7uVYeag5mY17GAI5MrqI7kEIPIhYrgUBVFhO', 1, NULL, '2020-03-09 00:10:18', '2020-03-09 00:10:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_categories`
--
ALTER TABLE `job_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_provider_registers`
--
ALTER TABLE `job_provider_registers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_provider_registers_ibfk_1` (`user_id`);

--
-- Indexes for table `job_seeker_registers`
--
ALTER TABLE `job_seeker_registers`
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
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_cat_id_foreign` (`cat_id`);

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
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_categories`
--
ALTER TABLE `job_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `job_provider_registers`
--
ALTER TABLE `job_provider_registers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `job_seeker_registers`
--
ALTER TABLE `job_seeker_registers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `job_provider_registers`
--
ALTER TABLE `job_provider_registers`
  ADD CONSTRAINT `job_provider_registers_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `job_categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
