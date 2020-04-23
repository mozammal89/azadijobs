-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 23, 2020 at 08:30 AM
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
-- Table structure for table `ads_managements`
--

CREATE TABLE `ads_managements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ads_cat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ads_cat_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ads_ref_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ads_position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ads_managements`
--

INSERT INTO `ads_managements` (`id`, `ads_cat_name`, `ads_cat_title`, `ads_ref_url`, `image`, `ads_position`, `start_date`, `end_date`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Juice', 'Pran Juice', 'https://www.pranfoods.net/brands/beverages', 'image1586672826.jpg', 'Position 2', '2020-04-12', '2020-04-30', '1', '2020-04-12 00:27:06', '2020-04-12 05:57:04'),
(6, 'Test', 'vokkhor', 'httpllll', 'image1586692319.jpg', 'Position 3', '2020-04-12', '2020-04-30', '0', '2020-04-12 05:51:59', '2020-04-12 05:55:31');

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
(7, 'Rangpur', '2020-03-29 04:22:21', '2020-03-29 04:23:16'),
(8, 'Rajshahi', '2020-04-02 00:40:38', '2020-04-02 00:40:38'),
(9, 'Syhllet', '2020-04-02 00:41:04', '2020-04-02 00:41:04'),
(10, 'Chottogram', '2020-04-02 00:41:24', '2020-04-02 00:41:24'),
(11, 'Khulna', '2020-04-02 00:41:48', '2020-04-02 00:41:48');

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
(10, 'Engineering', '2020-04-02 00:42:40', '2020-04-02 00:42:40'),
(11, 'Agricultural', '2020-04-02 00:42:51', '2020-04-02 00:42:51'),
(12, 'Government Job', '2020-04-02 00:43:31', '2020-04-02 00:43:31'),
(13, 'Private Job', '2020-04-02 00:43:41', '2020-04-02 00:43:41'),
(14, 'NGO', '2020-04-02 00:44:04', '2020-04-02 00:44:04');

-- --------------------------------------------------------

--
-- Table structure for table `job_provider_job_post`
--

CREATE TABLE `job_provider_job_post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_post_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application_deadline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `joining_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vacancy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_context` longtext COLLATE utf8mb4_unicode_ci,
  `job_responsibilities` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employment_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `educational_requirements` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `additional_requirements` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application_note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_provider_job_post`
--

INSERT INTO `job_provider_job_post` (`id`, `provider_id`, `job_title`, `category`, `sub_category`, `job_post_date`, `application_deadline`, `joining_date`, `vacancy`, `job_context`, `job_responsibilities`, `employment_status`, `educational_requirements`, `additional_requirements`, `job_location`, `salary`, `application_note`, `status`, `created_at`, `updated_at`) VALUES
(13, '60', 'Software Engineering', '10', '4', '02.04.2020', '22.04.2020', '30.04.2020', '2', '1. aaa\r\n2. BBBB\r\n3.CCC', '1. aaa\r\n2. BBBB\r\n3.CCC', 'full_time_job', '1. aaa\r\n2. BBBB\r\n3.CCC', '1. aaa\r\n2. BBBB\r\n3.CCC', '4', '100', 'abcd efgh ijkl mnop qrst uvw xyz', 1, '2020-04-02 02:05:37', '2020-04-09 05:55:42'),
(19, '60', 'Private Jobs', '13', '11', '06.04.2020', '20.04.2020', '30.04.2020', '2', '!. Need to work hard\r\n2. All the best', '!. Need to work hard\r\n2. All the best', 'part_time_job', '!. Need to work hard\r\n2. All the best', '!. Need to work hard\r\n2. All the best', '8', '100', '!. Need to work hard\r\n2. All the best', 1, '2020-04-06 04:49:52', '2020-04-09 05:56:22');

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
(10, 3, 60, 'AKTL', 'Gulshan', 'test check', 12, 'image1585551084.png', '4567', '7898', '12321', 'aktl@gmail.com', NULL, 1, '2020-03-30 00:51:24', '2020-04-02 00:50:17');

-- --------------------------------------------------------

--
-- Table structure for table `job_seeker_address`
--

CREATE TABLE `job_seeker_address` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) NOT NULL,
  `present_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parmanent_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parmanent_district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parmanent_country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parmanent_zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_seeker_address`
--

INSERT INTO `job_seeker_address` (`id`, `user_id`, `present_address`, `present_district`, `present_country`, `present_zip`, `parmanent_address`, `parmanent_district`, `parmanent_country`, `parmanent_zip`, `created_at`, `updated_at`) VALUES
(12, 59, 'Mirpur', 'Dhaka', 'BD', '1123', 'Dottobari', 'Bogra', 'BD', '7346', '2020-03-22 01:02:25', '2020-03-22 23:13:15');

-- --------------------------------------------------------

--
-- Table structure for table `job_seeker_cvs`
--

CREATE TABLE `job_seeker_cvs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `seeker_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_seeker_cvs`
--

INSERT INTO `job_seeker_cvs` (`id`, `seeker_id`, `file`, `created_at`, `updated_at`) VALUES
(42, '59', '1586433014.pdf', '2020-04-09 05:49:51', '2020-04-09 05:50:14');

-- --------------------------------------------------------

--
-- Table structure for table `job_seeker_educations`
--

CREATE TABLE `job_seeker_educations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) NOT NULL,
  `school_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_grade` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_passing_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college_subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college_grade` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college_passing_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `versity_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `versity_subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `versity_grade` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `versity_passing_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_seeker_educations`
--

INSERT INTO `job_seeker_educations` (`id`, `user_id`, `school_name`, `school_subject`, `school_grade`, `school_passing_year`, `college_name`, `college_subject`, `college_grade`, `college_passing_year`, `versity_name`, `versity_subject`, `versity_grade`, `versity_passing_year`, `created_at`, `updated_at`) VALUES
(12, 59, 'ABC', 'Science', '0.00', '2012', 'XYZ', 'Science', '0.00', '2014', 'MNO', 'Dance', '0.00', '2019', '2020-03-22 01:02:25', '2020-03-24 01:19:57');

-- --------------------------------------------------------

--
-- Table structure for table `job_seeker_experiences`
--

CREATE TABLE `job_seeker_experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `ex_company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ex_company_designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ex_company_start_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ex_company_end_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ex_company_describtion` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_seeker_experiences`
--

INSERT INTO `job_seeker_experiences` (`id`, `user_id`, `ex_company_name`, `ex_company_designation`, `ex_company_start_date`, `ex_company_end_date`, `ex_company_describtion`, `created_at`, `updated_at`) VALUES
(2, 59, 'AKTL', 'Software Engineer', '03/01/2020 12:00 AM', '03/10/2020 12:00 AM', 'dasfdsfv', '2020-03-22 01:22:09', '2020-03-24 01:18:57');

-- --------------------------------------------------------

--
-- Table structure for table `job_seeker_profiles`
--

CREATE TABLE `job_seeker_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maritial_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_seeker_profiles`
--

INSERT INTO `job_seeker_profiles` (`id`, `user_id`, `first_name`, `last_name`, `father_name`, `mother_name`, `gender`, `dob`, `religion`, `nationality`, `nid`, `passport_number`, `maritial_status`, `mobile`, `email`, `created_at`, `updated_at`) VALUES
(16, 59, 'Ruhin', 'Mia', 'ABC', 'QWE', 'female', '2020-03-24', 'Islam', 'BD', 'NID345', 'PASS789', 'Divorce', '0170000000', 'ruhin@gmail.com', '2020-03-22 01:02:25', '2020-03-28 23:01:11');

-- --------------------------------------------------------

--
-- Table structure for table `job_seeker_registers`
--

CREATE TABLE `job_seeker_registers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL DEFAULT '2',
  `user_id` int(11) NOT NULL,
  `seeker_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phn_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seeker_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seeker_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seeker_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interested_area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_seeker_registers`
--

INSERT INTO `job_seeker_registers` (`id`, `role_id`, `user_id`, `seeker_name`, `phn_number`, `seeker_address`, `seeker_email`, `seeker_image`, `interested_area`, `created_at`, `updated_at`) VALUES
(28, 2, 59, 'Ruhin', '1234', 'Uttara', 'ruhin@gmail.com', 'image1584860545.jpg', '10', '2020-03-22 01:02:25', '2020-04-07 01:24:40');

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
(21, '2020_02_24_113150_create_job_seeker_registers_table', 6),
(22, '2020_03_15_052503_create_job_seeker_profiles_table', 7),
(23, '2020_03_15_185815_create_job_seeker_educations_table', 8),
(24, '2020_03_16_061743_create_job_seeker_address_table', 9),
(25, '2020_03_18_061719_create_job_seeker_experiences_table', 10),
(26, '2020_03_30_115024_create_job_provider_job_post_table', 11),
(27, '2020_04_08_053015_create_job_seeker_cvs_table', 12),
(28, '2020_04_11_090433_create_ads_managements_table', 13),
(29, '2020_04_13_183257_create_trainings_table', 14),
(30, '2020_04_13_184121_create_trainings_table', 15);

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
(3, 10, 'CSE', '2020-04-02 00:44:29', '2020-04-02 00:44:29'),
(4, 10, 'Mechanical Engineering', '2020-04-02 00:44:51', '2020-04-02 00:44:51'),
(5, 10, 'Footwear Engineering', '2020-04-02 00:45:16', '2020-04-02 00:45:16'),
(6, 11, 'Farming', '2020-04-02 00:45:32', '2020-04-02 00:45:32'),
(7, 14, 'Insurance', '2020-04-02 00:46:09', '2020-04-02 00:46:09'),
(8, 14, 'Home Loan', '2020-04-02 00:46:21', '2020-04-02 00:46:21'),
(9, 12, 'Bank', '2020-04-02 00:46:34', '2020-04-02 00:46:34'),
(10, 12, 'Police', '2020-04-02 00:46:51', '2020-04-02 00:46:51'),
(11, 13, 'Office', '2020-04-02 00:47:15', '2020-04-02 00:47:15');

-- --------------------------------------------------------

--
-- Table structure for table `trainings`
--

CREATE TABLE `trainings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `training_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `training_subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `training_describtion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `training_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `training_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `training_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `training_place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `training_hour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainings`
--

INSERT INTO `trainings` (`id`, `training_title`, `training_subject`, `training_describtion`, `training_name`, `training_number`, `training_address`, `training_place`, `training_hour`, `created_at`, `updated_at`) VALUES
(2, 'Learn PHP', 'PHP', 'This is a PHP training course. Hope you will like it.', 'Learn PHP', '1', 'Uttara', 'Home', '40 Hour', '2020-04-15 09:17:39', '2020-04-15 09:17:39'),
(3, 'Learn Java', 'Java', 'This a second training name as Java', 'JaaVaa', '2', 'Shahbag', 'Dhaka', '20 Hours', '2020-04-16 00:31:27', '2020-04-16 00:31:27');

-- --------------------------------------------------------

--
-- Table structure for table `training_course_outlines`
--

CREATE TABLE `training_course_outlines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `training_id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_describtion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `training_course_outlines`
--

INSERT INTO `training_course_outlines` (`id`, `training_id`, `date`, `type`, `topic`, `duration`, `topic_describtion`, `created_at`, `updated_at`) VALUES
(9, 2, '2020-04-30', 'class', 'Introduction New', '70 Hours', 'TEST', '2020-04-19 05:03:31', '2020-04-20 10:01:55'),
(10, 2, '2020-04-22', 'class', 'Introduction', '50 Hours', 'fgnbfgn', '2020-04-19 05:03:31', '2020-04-19 05:03:31'),
(15, 3, '2020-04-28', 'test', 'Introduction', '50 Hours', 'ttt', '2020-04-21 02:14:56', '2020-04-21 02:15:43'),
(16, 2, '2020-04-23', 'class', 'Introduction', '50 Hours', 'pp', '2020-04-22 00:40:48', '2020-04-22 00:40:48'),
(17, 3, '2020-04-28', 'test', 'Introduction', '50 Hours', 'ii', '2020-04-22 00:44:18', '2020-04-22 00:44:18');

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
(59, 'Ruhin', 2, 'ruhin@gmail.com', '1234', NULL, NULL, NULL, '$2y$10$xBs0qDmC0DqjH1mZrWWbXeDs7tR64euNTxHfBt5mh9Ks/on58ilzq', 1, NULL, '2020-03-22 01:02:25', '2020-04-07 01:24:40'),
(60, 'AKTL', 3, 'aktl@gmail.com', '12321', NULL, NULL, NULL, '$2y$10$8ms0BaK.p1UIemq3QxwH9OOJ66dTbMRaLxK6uhtQhsjroiSC0pESe', 1, NULL, '2020-03-30 00:51:24', '2020-03-30 00:51:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads_managements`
--
ALTER TABLE `ads_managements`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `job_provider_job_post`
--
ALTER TABLE `job_provider_job_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_provider_registers`
--
ALTER TABLE `job_provider_registers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_provider_registers_ibfk_1` (`user_id`);

--
-- Indexes for table `job_seeker_address`
--
ALTER TABLE `job_seeker_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_seeker_cvs`
--
ALTER TABLE `job_seeker_cvs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_seeker_educations`
--
ALTER TABLE `job_seeker_educations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_seeker_experiences`
--
ALTER TABLE `job_seeker_experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_seeker_profiles`
--
ALTER TABLE `job_seeker_profiles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`id`);

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
-- Indexes for table `trainings`
--
ALTER TABLE `trainings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training_course_outlines`
--
ALTER TABLE `training_course_outlines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `training_ibfk_1` (`training_id`);

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
-- AUTO_INCREMENT for table `ads_managements`
--
ALTER TABLE `ads_managements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_categories`
--
ALTER TABLE `job_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `job_provider_job_post`
--
ALTER TABLE `job_provider_job_post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `job_provider_registers`
--
ALTER TABLE `job_provider_registers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `job_seeker_address`
--
ALTER TABLE `job_seeker_address`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `job_seeker_cvs`
--
ALTER TABLE `job_seeker_cvs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `job_seeker_educations`
--
ALTER TABLE `job_seeker_educations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `job_seeker_experiences`
--
ALTER TABLE `job_seeker_experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job_seeker_profiles`
--
ALTER TABLE `job_seeker_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `job_seeker_registers`
--
ALTER TABLE `job_seeker_registers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `trainings`
--
ALTER TABLE `trainings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `training_course_outlines`
--
ALTER TABLE `training_course_outlines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

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

--
-- Constraints for table `training_course_outlines`
--
ALTER TABLE `training_course_outlines`
  ADD CONSTRAINT `training_ibfk_1` FOREIGN KEY (`training_id`) REFERENCES `trainings` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
