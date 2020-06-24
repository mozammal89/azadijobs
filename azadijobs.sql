-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 24, 2020 at 10:02 AM
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
(3, 'Juice', 'Pran Juice', 'https://www.pranfoods.net/brands/beverages', 'image1588447389.png', 'Position 2', '2020-04-12', '2020-04-30', '1', '2020-04-12 00:27:06', '2020-05-02 13:23:09'),
(4, 'Game Play', 'Marketing', 'www.gameplay.com', 'image1588524986.jpg', 'Position 2', '2020-05-04', '2020-05-31', '1', '2020-05-03 10:56:27', '2020-05-03 10:56:27');

-- --------------------------------------------------------

--
-- Table structure for table `apply_jobs`
--

CREATE TABLE `apply_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `seeker_id` bigint(20) UNSIGNED NOT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_post_id` bigint(20) UNSIGNED NOT NULL,
  `expected_salary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apply_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apply_jobs`
--

INSERT INTO `apply_jobs` (`id`, `seeker_id`, `provider_id`, `job_post_id`, `expected_salary`, `apply_date`, `created_at`, `updated_at`) VALUES
(9, 59, 'AKTL', 21, '1000000000', '2020-06-07 11:25:51', '2020-06-06 23:25:51', '2020-06-06 23:25:51'),
(10, 2, 'Provider Reshad', 30, '500', '2020-06-07 13:33:07', '2020-06-07 01:33:07', '2020-06-07 01:33:07');

-- --------------------------------------------------------

--
-- Table structure for table `cover_images`
--

CREATE TABLE `cover_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cover_images`
--

INSERT INTO `cover_images` (`id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(3, 'image1588586873.jpg', '1', '2020-05-04 02:15:10', '2020-05-04 04:07:53');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department_name`, `created_at`, `updated_at`) VALUES
(1, 'Technical', '2020-04-27 01:13:52', '2020-04-27 01:13:52'),
(2, 'Business', '2020-04-27 01:14:11', '2020-04-27 01:14:11'),
(3, 'Support', '2020-04-27 01:14:28', '2020-04-27 01:16:44');

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designation_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `designation_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2020-04-27 00:34:11', '2020-04-27 01:00:50'),
(3, 'Super Admin', '2020-04-27 00:36:23', '2020-04-27 01:01:03');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `district_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `district_name`, `created_at`, `updated_at`) VALUES
(2, 'Dhaka', '2020-04-28 01:27:22', '2020-04-28 01:27:22'),
(3, 'Bogura', '2020-04-28 01:27:38', '2020-04-28 01:27:38');

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
(11, 'Khulna', '2020-04-02 00:41:48', '2020-04-02 00:41:48'),
(12, 'Test', '2020-06-03 15:33:05', '2020-06-03 15:33:05'),
(13, 'Test', '2020-06-03 15:33:05', '2020-06-03 15:33:05');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parmanent_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_designation` bigint(20) UNSIGNED NOT NULL,
  `employee_department` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `user_id`, `employee_name`, `employee_id`, `employee_email`, `employee_phone`, `dob`, `present_address`, `parmanent_address`, `image`, `nid`, `passport`, `employee_designation`, `employee_department`, `created_at`, `updated_at`) VALUES
(3, NULL, 'Reshad Test', '01', 'res@gmail.com', '017', '2020-04-30', 'Dhaka', 'Bogra', 'image1587980090.jpg', '4521', '2563', 3, 1, '2020-04-27 02:43:30', '2020-04-27 03:54:07');

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
-- Table structure for table `footer_about_us_about_us`
--

CREATE TABLE `footer_about_us_about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `describtion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `web_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tech_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sales_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_about_us_about_us`
--

INSERT INTO `footer_about_us_about_us` (`id`, `describtion`, `email`, `web_link`, `tech_email`, `sales_email`, `mobile`, `address`, `created_at`, `updated_at`) VALUES
(2, '<h1 style=\"margin-top: 20px; font-size: 36px; font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: 500; color: rgb(51, 51, 51);\">Test</h1>', 'Test', 'Soft BD', 'abc', 'xyz', '0142354', 'Dhaka', '2020-06-24 00:11:42', '2020-06-24 00:11:42'),
(3, '<h1 style=\"margin-top: 20px; font-size: 36px; font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: 500; color: rgb(51, 51, 51);\">About us</h1><div class=\"content\" style=\"color: rgb(51, 51, 51); font-family: Verdana, Arial, Helvetica, sans-serif;\"><p align=\"justify\" style=\"margin-bottom: 10px;\">AzadiJobs.com likes to bridge the Job seekers and the employers of Chittagong by furnishing the best local job information. Dainik Azadi, one of the oldest newspapers of Bangladesh, has initiated this user friendly local job portal with a view to providing information regarding the desired jobs and thus helps the local employers search their required Human Resources (HR).<br></p><p align=\"justify\" style=\"margin-bottom: 10px;\">AzadiJobs.com serves as the primary source of both local and expatriate talent to the largest employers and recruitment agencies across this region. This portal will always explore to provide the maximum benefits to the employers as well as the job seekers in addition to meeting up their primary demands. We would like to impart professional training on different fields of interests and contemporary issues to make the incumbents easily acceptable to any particular employer. We aim at maximizing the number of organizations in the region to use Online Job Advertisement facility, Online CV Bank Access to build a better Port City.</p></div>', 'info@azadijobs.com', 'http://www.azadijobs.com/', 'support@azadijobs.com', 'sales@azadijobs.com', '+8801614692237(10am to 7pm),  +8801672443388', 'Azadi Technologies \r\n9 CDA Commercial Area 3rd Floor, Momin Road, Chittagong-4000', '2020-06-24 00:12:57', '2020-06-24 00:12:57');

-- --------------------------------------------------------

--
-- Table structure for table `footer_about_us_feedbacks`
--

CREATE TABLE `footer_about_us_feedbacks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedback` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_about_us_feedbacks`
--

INSERT INTO `footer_about_us_feedbacks` (`id`, `name`, `age`, `email`, `employment_status`, `feedback`, `created_at`, `updated_at`) VALUES
(1, 'Reshad', '25', 'test@gmail.com', 'Employed', 'This is a nice website.', '2020-06-23 04:04:09', '2020-06-23 04:04:09'),
(3, 'Mollick', '28', 'mollick@gmail.com', 'Unemployed', 'Hi How are you. This is a mind blowing job portal.', '2020-06-23 12:58:15', '2020-06-23 12:58:15');

-- --------------------------------------------------------

--
-- Table structure for table `footer_about_us_terms_and_conditions`
--

CREATE TABLE `footer_about_us_terms_and_conditions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `describtions` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_about_us_terms_and_conditions`
--

INSERT INTO `footer_about_us_terms_and_conditions` (`id`, `describtions`, `created_at`, `updated_at`) VALUES
(7, '<p>Hi new</p><p><b>Hlww new</b></p><p>Whoooo new</p>', '2020-06-22 11:47:14', '2020-06-23 00:50:22'),
(9, '<h1 style=\"margin-top: 20px; font-size: 36px; font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: 500; color: rgb(51, 51, 51);\">Disclaimer - Terms and condition</h1><div class=\"content\" style=\"color: rgb(51, 51, 51); font-family: Verdana, Arial, Helvetica, sans-serif;\"><p align=\"justify\" style=\"margin-bottom: 10px;\">This is a public site with free access and Azadijobs.com assumes no liability for the quality and genuineness of responses. Azadijobs.com is not liable for any information provided my any individual. The individual/company would have to conduct its own background checks on the bonafide nature of all responses.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">Azadijobs.com will not be liable on account of any inaccuracy of information on this web site. It is the responsibility of the visitor to further research the information on the site. Any breach of privacy or of the information provided by the consumer to Azadijobs.com to be placed on the website by technical or any other means is not the responsibility of Azadijobs.com. Azadijobs.com does not guarantee confidentiality of information provided to it by any person acquiring/using all/any information displayed on the Azadijobs.com website.</p><p style=\"margin-bottom: 10px;\"><strong style=\"font-weight: bold;\">RESUME DISPLAY</strong></p><p align=\"justify\" style=\"margin-bottom: 10px;\">1. Azadijobs.com allows you to Post/Submit your resume in the Azadijobs.com website free of cost.</p><p style=\"margin-bottom: 10px;\">2. The resume displayed can be updated free of cost.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">3. Azadijobs.com offers no guarantee, warranties that there would be a satisfactory response or any response once the resume is put on display.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com neither guarantees nor offers any warranty about the credentials of the prospective employer/organization which down loads the information and uses it to contact the prospective employee.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com would not be held liable for loss of any data technical or otherwise, information, particulars supplied by customers due to&nbsp;reasons beyond its control like corruption of data or delay or failure to perform as a result of any causes or conditions that are&nbsp; beyond Azadijobs.com reasonable control including but not to strikes, riots, civil unrest, Govt. policies, tampering of data by unauthorized persons like hackers, war and natural calamities.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">6.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; It shall be sole prerogative and responsibility of the individual to check&nbsp; the authenticity of all or any response received pursuant to the resume being displayed by Azadijobs.com for going out of station or in station for any job, interview and Azadijobs.com assumes no responsibility in respect thereof</p><p align=\"justify\" style=\"margin-bottom: 10px;\">7.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com reserves its right to reject any insertion or information/data provided by the user without assigning any reason.</p><p style=\"margin-bottom: 10px;\">8.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; This subscription is not transferable i.e. it is for the same person through out whole period.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">9.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com has the right to make all such modifications/editing of resume in order to fit resume in database.</p><p style=\"margin-bottom: 10px;\"><strong style=\"font-weight: bold;\">RESUME FLASH</strong></p><p align=\"justify\" style=\"margin-bottom: 10px;\">1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com offers no guarantee nor warranties that there would be a satisfactory response or any response once the resume is&nbsp; zapped.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com neither guarantees nor offers any warranty about the credentials of the prospective employer/organization which receives the information and uses it to contact the prospective employee.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; It shall be sole prerogative and responsibility of the individual to check&nbsp; the authenticity of all or any response received pursuant to the resume being zapped by Azadijobs.com for going out of station or in station for any job interview and Azadijobs.com assumes no responsibility in respect thereof.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The user shall have no right to demand any information regarding the organizations to whom the resume has been sent and Azadijobs.com would be in no legal or other obligation to disclose/reveal the particulars of the organizations.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com reserves its right to reject any insertion or information/data provided by the user without assigning any reason. But in such an eventuality, any amount so paid for, shall be refunded to the user on pro-rata basis.</p><p style=\"margin-bottom: 10px;\"><strong style=\"font-weight: bold;\">RESUME DEVELOPMENT</strong></p><p align=\"justify\" style=\"margin-bottom: 10px;\">1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The user shall certify that the information/data supplied by it toAzadijobs.comis accurate and correct.</p><p style=\"margin-bottom: 10px;\">2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The user shall give a reasonable time to Azadijobs.com for development of resume.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com would not be held liable for loss of any data technical or otherwise, information, particulars supplied by customers due to reasons beyond its control like corruption of data or delay or failure to perform as a result of any causes or conditions that are&nbsp; beyond Azadijobs.com reasonable control including but not to strikes, riots, civil unrest, Govt. policies, tampering of data by unauthorized persons like hackers, war and natural calamities.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com reserves its right to reject any insertion or information/data provided by the user without assigning any reason.</p><p style=\"margin-bottom: 10px;\"><strong style=\"font-weight: bold;\">CLASSIFIED JOB LISTING (SINGLE)</strong></p><p align=\"justify\" style=\"margin-bottom: 10px;\">1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com will allow the Subscriber/Recruiter to place the information only in classified section of the site Azadijobs.com</p><p align=\"justify\" style=\"margin-bottom: 10px;\">2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The insertion so displayed in the classified section of Azadijobs.com will be for a period of maximum 30 days, which period is subject to change without notice.</p><p style=\"margin-bottom: 10px;\">3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com reserves its right to reject any insertion or information/data provided by the user without assigning any reason. In such an eventuality, any amount so paid for, shall be refunded to the user on a pro-rata basis.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Azadijobs.com has the right to make all such modifications/editing of the vacancy details in order to fit in database.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The Subscriber/Recruiter may use up to a maximum of 2 email id\'s for vacancies posted on Azadijobs.com in the Classified section to collect response.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">6.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com may at its sole discretion include the vacancy intimated by client for display on Azadijobs.com in the print media through various media alliances in other print vehicles with no extra costs to the client. However, if a client wishes not to have its vacancies/requirement from appearing in print media, then the client shall specifically inform Azadijobs.com in writing accordingly at the time of intimating of the vacancy.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">7.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com offers no guarantee nor warranty that there would be a satisfactory response or any response once the job is put on display.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">8.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com shall in no way be held liable for any information provided by the applicant to the subscriber and it shall be the sole responsibility of the user to check, authenticate and verify the information/response received at its own cost and expense.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">9.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Azadijobs.com would not be held liable for any loss of&nbsp; data, technical or otherwise, information, particulars supplied by the customers, due&nbsp; the reasons beyond its control like corruption of data or delay or failure to perform as a result of any causes or conditions that are&nbsp; beyond Azadijobs.com reasonable control including but not to strike, riots, civil unrest, Govt. policies, tampering of data by unauthorized persons like hackers, war and natural calamities.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">10.&nbsp;&nbsp; The subscriber/Recruiter must give an undertaking to Azadijobs.com that the jobs sought to be advertised on the classified section of Azadijobs.com are in existence, are genuine and that the subscriber has the authority to list the jobs.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">11.&nbsp;&nbsp; The subscriber/Recruiter must give an undertaking to Azadijobs.com that there will be no fee charged from an applicant who responds to jobs advertised on the classified section of Azadijobs.com for processing of the application.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">12.&nbsp;&nbsp; Azadijobs.com reserves its right to change the look, feel, design, prominence, depiction, classification of the classified section of Azadijobs.com at any time without assigning any reason and without giving any notice.</p><p align=\"center\" style=\"margin-bottom: 10px;\">&nbsp;</p><p style=\"margin-bottom: 10px;\"><strong style=\"font-weight: bold;\">CLASSIFIED SUBSCRIPTIONS FOR VARIOUS PERIOD</strong></p><p style=\"margin-bottom: 10px;\">1.&nbsp;Azadijobs.com will allow the Subscriber/Recruiter to place the information only in classified section of the site Azadijobs.com</p><p style=\"margin-bottom: 10px;\">2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Each&nbsp; insertion so displayed in the classified section of Azadijobs.com shall be for a period of 30 days, which period is subject to change without notice.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com reserves its right to reject any insertion or information/data provided by the user without assigning any reason.&nbsp; On such an eventuality, any amount so paid for, shall be refunded to the user on pro-data basis.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com has the right to make all such modifications/editing of the vacancy details in order to fit in database.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The Subscriber/Recruiter may use up to a maximum of 2 email id\'s for vacancies posted on Azadijobs.com in the Classified section to collect response.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">6.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com may at its sole discretion include the vacancy intimated by client for display on Azadijobs.com in the print media through various media alliances in other print vehicles with no extra costs to the client. However, if a client wishes not to have its vacancies/requirement from appearing in print media, then the client shall specifically inform Azadijobs.com in writing accordingly at the time of intimating of the vacancy.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">7.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com offers no guarantee nor warranties that there would be a satisfactory response or any response once the job is put on display.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">8.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com shall in no way be held liable for any information provided by the applicant to the subscriber and it shall be the sole responsibility of the subscriber to check, authenticate and verify the information/response received at its own cost and expense.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">9.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com would not be held liable for loss of any data technical or otherwise, information, particulars supplied by the customers due to the reasons beyond its control like corruption of data or delay or failure to perform as a result of any causes or conditions that are&nbsp; beyond Azadijobs.com reasonable control including but not to strike, riots, civil unrest, Govt. policies, tampering of data by unauthorized persons like hackers, war and natural calamities.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">10.&nbsp;&nbsp; The subscriber/Recruiter must give an undertaking to Azadijobs.com that the jobs sought to be advertised on the classified section of are in existence, are genuine and that the subscriber has the authority to list the jobs.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">11.&nbsp;&nbsp; The subscriber/Recruiter must give an undertaking to Azadijobs.com that there will be no fee charged from an applicant who responds to jobs advertised on the classified section of Azadijobs.com for processing of the application.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">12.&nbsp;&nbsp; Azadijobs.com reserves its right to change the look, feel, design, prominence, depiction, classification of the classified section of Azadijobs.com at any time without assigning any reason and without giving any notice.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">13.&nbsp;&nbsp; The subscriber to this service shall be entitled to un listings during the period of subscription.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">14.&nbsp;&nbsp; This service is neither resalable nor transferable by the subscriber to any other person, corporate body, firm or individual.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">15.&nbsp;&nbsp; Only&nbsp; one office of one corporate entity / firm will be entitled to use this service and in case other offices of the same company/ associated companies, want to use the said service, then, they shall be liable to make extra payment for the service.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">16.&nbsp;&nbsp; The contact information given by the subscriber for all listing should be the same and the subscriber cannot give multiple contact information/data&nbsp; for the purpose of listing.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">17.&nbsp;&nbsp; Only insertions with contact information registered with Azadijobs.com will be displayed on the site</p><p style=\"margin-bottom: 10px;\"><strong style=\"font-weight: bold;\">Priority Jobs\' (SINGLE)</strong></p><p align=\"justify\" style=\"margin-bottom: 10px;\">1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com shall place the information relating to vacancies in the Priority Jobs\' &amp; Classified sections of Azadijobs.com .</p><p align=\"justify\" style=\"margin-bottom: 10px;\">2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The insertion so displayed at Azadijobs.com shall be for a period of 30 days, which period is subject to change without notice.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com has the right to make all such modifications/editing of the vacancy details in order to fit in database.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com reserves its right to reject any insertion or information/data provided by the user without assigning any reason.&nbsp; In such an eventuality, any amount so paid for, shall be refunded to the user on a pro-data basis.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Azadijobs.com may at its sole discretion include the vacancy intimated by client for display on Azadijobs.com in the print media through various media alliances in other print vehicles with no extra costs to the client. However, if a client wishes not to have its vacancies/requirement from appearing in print media, then the client shall specifically inform Azadijobs.com in writing accordingly at the time of intimating of the vacancy.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">6.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Azadijobs.com offers no guarantee nor warranties that there would be a satisfactory response or any response once the job vacancy is put on display.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">7.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com shall in no way be held liable for any information provided by&nbsp; applicant(s) to the subscriber and it shall be the sole responsibility of the subscriber to check, authenticate and verify the information/response received at its own cost and expense.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">8.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Azadijobs.com would not be held liable for any loss of data technical or otherwise, information, particulars supplied by the customers due to the reasons beyond its control like corruption of data or delay or failure to perform as a result of any causes or conditions that are&nbsp; beyond Azadijobs.com reasonable control including but not limited to strike, riots, civil unrest, Govt. policies, tampering of data by unauthorized persons like hackers, war and natural calamities.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">9.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The subscriber/Recruiter must give an undertaking to Azadijobs.com that the jobs sought to be advertised on the `Priority Jobs\'\' and `Classified\' sections of Azadijobs.com are in existence, genuine and the subscriber has the authority to list the jobs.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">10.&nbsp;&nbsp; The subscriber/Recruiter must give an undertaking to Azadijobs.com that the there will be no fee charged from an applicant who responds to jobs advertised on the ‘Priority Jobs\'’ and ‘Classified’ sections of Azadijobs.com for processing of the application.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">11.&nbsp;&nbsp; Azadijobs.com reserves its right to change the look, feel, design, prominence, depiction, classification of the&nbsp; `Priority Jobs\'\' and `Classified\' sections of Azadijobs.com at any time without assigning any reason and without giving any notice.</p><p style=\"margin-bottom: 10px;\"><strong style=\"font-weight: bold;\">PRIORITY JOBS SUBSCRIPTIONS</strong></p><p align=\"justify\" style=\"margin-bottom: 10px;\">1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com shall place the information relating to vacancies only in&nbsp; `Priority Jobs\'\' and `Classified\' sections of Azadijobs.com</p><p align=\"justify\" style=\"margin-bottom: 10px;\">2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The insertion so displayed in the classified section of Azadijobs.comshall be for a period of 30 days, which is subject to change without notice.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Azadijobs.com has the right to make all such modifications/editing of the vacancy details in order to fit in database.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com reserves its right to reject any insertion or information/data provided by the user without assigning any reason.&nbsp; In such an eventuality, any amount so paid for, shall be refunded to the user on a pro-data basis.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs. commit at its sole discretion include the vacancy intimated by client for display on Azadijobs.com in the print media through various media alliances in other print vehicles with no extra costs to the client. However, if a client wishes not to have its vacancies/requirement from appearing in print media, then the client shall specifically inform Azadijobs.com in writing accordingly at the time of intimating of the vacancy.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">6.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com offers no guarantee nor warranties that there would be a satisfactory response or any response once the job vacancy is put on display.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">7.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com shall in no way be held liable for any information provided by&nbsp; applicant(s) to the subscriber and it shall be the sole responsibility of the subscriber to check, authenticate and verify the information/response received at its own cost and expense.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">8.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Azadijobs.com would not be held liable for any loss of data technical or otherwise, information, particulars supplied by the customers due to&nbsp;&nbsp; reasons beyond its control like corruption of data or delay or failure to perform as a result of any causes or conditions that are&nbsp; beyond Azadijobs.com reasonable control including but not limited to strike, riots, civil unrest, Govt. policies, tampering of data by unauthorized persons like hackers, war and natural calamities.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">9.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The subscriber/Recruiter must give an undertaking to Azadijobs.com that the jobs sought to be advertised on the&nbsp; `Priority Jobs\'\' and `Classified\' sections of Azadijobs.com are in existence, genuine and the subscriber has the authority to list the jobs.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">10.&nbsp;&nbsp; The subscriber/Recruiter must give an undertaking to Azadijobs.com that there will be no fee charged from an applicant who responds to jobs advertised on the \'Priority Jobs\' and ‘Classified’ sections of Azadijobs.com for processing of the application.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">11.Azadijobs.com reserves its right to change the look, feel, design, prominence, depiction, classification of the classified and/or Priority Jobs\' section of Azadijobs.com at any time without assigning any reason and without giving any notice.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">12.&nbsp;&nbsp; The subscriber to this service shall be entitled for unlimited listing during the period of subscription.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">13.&nbsp;&nbsp; This service is neither resalable nor transferable by the subscriber to any other person, corporate body, firm or individual.</p><p style=\"margin-bottom: 10px;\">&nbsp;</p><p style=\"margin-bottom: 10px;\"><br><br></p><p style=\"margin-bottom: 10px;\"><strong style=\"font-weight: bold;\">MANUAL SHORTLISTING</strong></p><p align=\"justify\" style=\"margin-bottom: 10px;\">1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com agrees to provide the service to the subscriber only for the duration and the number of vacancies contracted for, to the best of its ability.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com will receive, open, read and sort all resumes received in response to the vacancies for which the service is offered.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sorting shall be done using the parameters for selection decided by the subscriber.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">4.&nbsp;&nbsp;&nbsp;Azadijobs.com would not be held liable for any loss of data technical or otherwise, information, particulars supplied by the customers due to the reasons beyond its control like corruption of data or delay or failure to perform as a result of any causes or conditions that are&nbsp; beyond Azadijobs.com reasonable control including but not limited to strike, riots, civil unrest, Govt. policies, tampering of data by unauthorized persons like hackers, war and natural calamities.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; It is made clear that the subscriber being one corporate/business entity, cannot transfer/sell/sublet the micro site or any part thereof to any third party</p><p style=\"margin-bottom: 10px;\"><strong style=\"font-weight: bold;\">DISPLAY OF BANNERS</strong></p><p align=\"justify\" style=\"margin-bottom: 10px;\">1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Azadijobs.com agrees to provide the service to the subscriber only for the duration or the number of impressions contracted for, to the best of its ability.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Azadijobs.com will display banners on the home page on a rotation basis, wherein banners from different subscribers are displayed in a sequential manner, managed by a smart software.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; In case of “Run of the Web site” deals, Azadijobs.com reserves the right to choose the sections where the banners of a subscriber is to be displayed, at any point in time, during the period of the contract.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com reserves its right to reject any insertion or information/data provided by the user without assigning any reason.&nbsp; In such an eventuality, any amount so paid for, shall be refunded to the user on a pro-data basis.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com offers no guarantee nor warranties that there would be a satisfactory response or any response once the banners are put on display.</p><p style=\"margin-bottom: 10px;\"></p><p align=\"justify\" style=\"margin-bottom: 10px;\">6.&nbsp;&nbsp;&nbsp;&nbsp;Azadijobs.com would not be held liable for any loss of data technical or otherwise, information, particulars supplied by the customers due to the reasons beyond its control like corruption of data or delay or failure to perform as a result of any causes or conditions that are&nbsp; beyond Azadijobs.com reasonable control including but not to strike, riots, civil unrest, Govt. policies, tampering of data by unauthorized persons like hackers, war and natural calamities.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">7.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; It is made clear that the subscriber being one corporate/business entity, cannot transfer/sell/sublet the micro site or any part thereof to any third party.</p></div>', '2020-06-23 01:40:58', '2020-06-23 01:40:58');

-- --------------------------------------------------------

--
-- Table structure for table `footer_employers_contacts`
--

CREATE TABLE `footer_employers_contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `web_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tech_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sales_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_employers_contacts`
--

INSERT INTO `footer_employers_contacts` (`id`, `email`, `web_link`, `tech_email`, `sales_email`, `mobile`, `address`, `created_at`, `updated_at`) VALUES
(2, 'This is a Test. Thank You', 'webtest', 'abc', 'xyz', '234', 'This is an awesome Job Portal', '2020-06-24 03:49:42', '2020-06-24 03:49:42'),
(3, 'info@azadijobs.com', 'http://www.azadijobs.com/', 'support@azadijobs.com', 'sales@azadijobs.com', '+8801614692237(10am to 7pm), +8801755608200', 'Azadi Technologies\r\n9 CDA Commercial Area 3rd Floor, Momin Road, Chittagong-4000', '2020-06-24 03:50:45', '2020-06-24 03:50:45');

-- --------------------------------------------------------

--
-- Table structure for table `footer_job_seekers_terms_and_conditions`
--

CREATE TABLE `footer_job_seekers_terms_and_conditions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `describtions` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_job_seekers_terms_and_conditions`
--

INSERT INTO `footer_job_seekers_terms_and_conditions` (`id`, `describtions`, `created_at`, `updated_at`) VALUES
(2, '<p>This is a Test. </p><p>thank You</p>', '2020-06-24 02:58:37', '2020-06-24 02:58:37'),
(3, '<h1 style=\"margin-top: 20px; font-size: 36px; font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: 500; color: rgb(51, 51, 51);\">Disclaimer - Terms and condition</h1><div class=\"content\" style=\"color: rgb(51, 51, 51); font-family: Verdana, Arial, Helvetica, sans-serif;\"><p align=\"justify\" style=\"margin-bottom: 10px;\">This is a public site with free access and Azadijobs.com assumes no liability for the quality and genuineness of responses. Azadijobs.com is not liable for any information provided my any individual. The individual/company would have to conduct its own background checks on the bonafide nature of all responses.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">Azadijobs.com will not be liable on account of any inaccuracy of information on this web site. It is the responsibility of the visitor to further research the information on the site. Any breach of privacy or of the information provided by the consumer to Azadijobs.com to be placed on the website by technical or any other means is not the responsibility of Azadijobs.com. Azadijobs.com does not guarantee confidentiality of information provided to it by any person acquiring/using all/any information displayed on the Azadijobs.com website.</p><p style=\"margin-bottom: 10px;\"><strong style=\"font-weight: bold;\">RESUME DISPLAY</strong></p><p align=\"justify\" style=\"margin-bottom: 10px;\">1. Azadijobs.com allows you to Post/Submit your resume in the Azadijobs.com website free of cost.</p><p style=\"margin-bottom: 10px;\">2. The resume displayed can be updated free of cost.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">3. Azadijobs.com offers no guarantee, warranties that there would be a satisfactory response or any response once the resume is put on display.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com neither guarantees nor offers any warranty about the credentials of the prospective employer/organization which down loads the information and uses it to contact the prospective employee.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com would not be held liable for loss of any data technical or otherwise, information, particulars supplied by customers due to&nbsp;reasons beyond its control like corruption of data or delay or failure to perform as a result of any causes or conditions that are&nbsp; beyond Azadijobs.com reasonable control including but not to strikes, riots, civil unrest, Govt. policies, tampering of data by unauthorized persons like hackers, war and natural calamities.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">6.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; It shall be sole prerogative and responsibility of the individual to check&nbsp; the authenticity of all or any response received pursuant to the resume being displayed by Azadijobs.com for going out of station or in station for any job, interview and Azadijobs.com assumes no responsibility in respect thereof</p><p align=\"justify\" style=\"margin-bottom: 10px;\">7.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com reserves its right to reject any insertion or information/data provided by the user without assigning any reason.</p><p style=\"margin-bottom: 10px;\">8.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; This subscription is not transferable i.e. it is for the same person through out whole period.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">9.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com has the right to make all such modifications/editing of resume in order to fit resume in database.</p><p style=\"margin-bottom: 10px;\"><strong style=\"font-weight: bold;\">RESUME FLASH</strong></p><p align=\"justify\" style=\"margin-bottom: 10px;\">1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com offers no guarantee nor warranties that there would be a satisfactory response or any response once the resume is&nbsp; zapped.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com neither guarantees nor offers any warranty about the credentials of the prospective employer/organization which receives the information and uses it to contact the prospective employee.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; It shall be sole prerogative and responsibility of the individual to check&nbsp; the authenticity of all or any response received pursuant to the resume being zapped by Azadijobs.com for going out of station or in station for any job interview and Azadijobs.com assumes no responsibility in respect thereof.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The user shall have no right to demand any information regarding the organizations to whom the resume has been sent and Azadijobs.com would be in no legal or other obligation to disclose/reveal the particulars of the organizations.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com reserves its right to reject any insertion or information/data provided by the user without assigning any reason. But in such an eventuality, any amount so paid for, shall be refunded to the user on pro-rata basis.</p><p style=\"margin-bottom: 10px;\"><strong style=\"font-weight: bold;\">RESUME DEVELOPMENT</strong></p><p align=\"justify\" style=\"margin-bottom: 10px;\">1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The user shall certify that the information/data supplied by it toAzadijobs.comis accurate and correct.</p><p style=\"margin-bottom: 10px;\">2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The user shall give a reasonable time to Azadijobs.com for development of resume.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com would not be held liable for loss of any data technical or otherwise, information, particulars supplied by customers due to reasons beyond its control like corruption of data or delay or failure to perform as a result of any causes or conditions that are&nbsp; beyond Azadijobs.com reasonable control including but not to strikes, riots, civil unrest, Govt. policies, tampering of data by unauthorized persons like hackers, war and natural calamities.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com reserves its right to reject any insertion or information/data provided by the user without assigning any reason.</p><p style=\"margin-bottom: 10px;\"><strong style=\"font-weight: bold;\">CLASSIFIED JOB LISTING (SINGLE)</strong></p><p align=\"justify\" style=\"margin-bottom: 10px;\">1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com will allow the Subscriber/Recruiter to place the information only in classified section of the site Azadijobs.com</p><p align=\"justify\" style=\"margin-bottom: 10px;\">2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The insertion so displayed in the classified section of Azadijobs.com will be for a period of maximum 30 days, which period is subject to change without notice.</p><p style=\"margin-bottom: 10px;\">3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com reserves its right to reject any insertion or information/data provided by the user without assigning any reason. In such an eventuality, any amount so paid for, shall be refunded to the user on a pro-rata basis.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Azadijobs.com has the right to make all such modifications/editing of the vacancy details in order to fit in database.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The Subscriber/Recruiter may use up to a maximum of 2 email id\'s for vacancies posted on Azadijobs.com in the Classified section to collect response.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">6.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com may at its sole discretion include the vacancy intimated by client for display on Azadijobs.com in the print media through various media alliances in other print vehicles with no extra costs to the client. However, if a client wishes not to have its vacancies/requirement from appearing in print media, then the client shall specifically inform Azadijobs.com in writing accordingly at the time of intimating of the vacancy.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">7.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com offers no guarantee nor warranty that there would be a satisfactory response or any response once the job is put on display.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">8.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com shall in no way be held liable for any information provided by the applicant to the subscriber and it shall be the sole responsibility of the user to check, authenticate and verify the information/response received at its own cost and expense.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">9.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Azadijobs.com would not be held liable for any loss of&nbsp; data, technical or otherwise, information, particulars supplied by the customers, due&nbsp; the reasons beyond its control like corruption of data or delay or failure to perform as a result of any causes or conditions that are&nbsp; beyond Azadijobs.com reasonable control including but not to strike, riots, civil unrest, Govt. policies, tampering of data by unauthorized persons like hackers, war and natural calamities.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">10.&nbsp;&nbsp; The subscriber/Recruiter must give an undertaking to Azadijobs.com that the jobs sought to be advertised on the classified section of Azadijobs.com are in existence, are genuine and that the subscriber has the authority to list the jobs.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">11.&nbsp;&nbsp; The subscriber/Recruiter must give an undertaking to Azadijobs.com that there will be no fee charged from an applicant who responds to jobs advertised on the classified section of Azadijobs.com for processing of the application.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">12.&nbsp;&nbsp; Azadijobs.com reserves its right to change the look, feel, design, prominence, depiction, classification of the classified section of Azadijobs.com at any time without assigning any reason and without giving any notice.</p><p align=\"center\" style=\"margin-bottom: 10px;\">&nbsp;</p><p style=\"margin-bottom: 10px;\"><strong style=\"font-weight: bold;\">CLASSIFIED SUBSCRIPTIONS FOR VARIOUS PERIOD</strong></p><p style=\"margin-bottom: 10px;\">1.&nbsp;Azadijobs.com will allow the Subscriber/Recruiter to place the information only in classified section of the site Azadijobs.com</p><p style=\"margin-bottom: 10px;\">2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Each&nbsp; insertion so displayed in the classified section of Azadijobs.com shall be for a period of 30 days, which period is subject to change without notice.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com reserves its right to reject any insertion or information/data provided by the user without assigning any reason.&nbsp; On such an eventuality, any amount so paid for, shall be refunded to the user on pro-data basis.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com has the right to make all such modifications/editing of the vacancy details in order to fit in database.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The Subscriber/Recruiter may use up to a maximum of 2 email id\'s for vacancies posted on Azadijobs.com in the Classified section to collect response.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">6.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com may at its sole discretion include the vacancy intimated by client for display on Azadijobs.com in the print media through various media alliances in other print vehicles with no extra costs to the client. However, if a client wishes not to have its vacancies/requirement from appearing in print media, then the client shall specifically inform Azadijobs.com in writing accordingly at the time of intimating of the vacancy.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">7.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com offers no guarantee nor warranties that there would be a satisfactory response or any response once the job is put on display.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">8.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com shall in no way be held liable for any information provided by the applicant to the subscriber and it shall be the sole responsibility of the subscriber to check, authenticate and verify the information/response received at its own cost and expense.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">9.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com would not be held liable for loss of any data technical or otherwise, information, particulars supplied by the customers due to the reasons beyond its control like corruption of data or delay or failure to perform as a result of any causes or conditions that are&nbsp; beyond Azadijobs.com reasonable control including but not to strike, riots, civil unrest, Govt. policies, tampering of data by unauthorized persons like hackers, war and natural calamities.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">10.&nbsp;&nbsp; The subscriber/Recruiter must give an undertaking to Azadijobs.com that the jobs sought to be advertised on the classified section of are in existence, are genuine and that the subscriber has the authority to list the jobs.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">11.&nbsp;&nbsp; The subscriber/Recruiter must give an undertaking to Azadijobs.com that there will be no fee charged from an applicant who responds to jobs advertised on the classified section of Azadijobs.com for processing of the application.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">12.&nbsp;&nbsp; Azadijobs.com reserves its right to change the look, feel, design, prominence, depiction, classification of the classified section of Azadijobs.com at any time without assigning any reason and without giving any notice.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">13.&nbsp;&nbsp; The subscriber to this service shall be entitled to un listings during the period of subscription.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">14.&nbsp;&nbsp; This service is neither resalable nor transferable by the subscriber to any other person, corporate body, firm or individual.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">15.&nbsp;&nbsp; Only&nbsp; one office of one corporate entity / firm will be entitled to use this service and in case other offices of the same company/ associated companies, want to use the said service, then, they shall be liable to make extra payment for the service.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">16.&nbsp;&nbsp; The contact information given by the subscriber for all listing should be the same and the subscriber cannot give multiple contact information/data&nbsp; for the purpose of listing.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">17.&nbsp;&nbsp; Only insertions with contact information registered with Azadijobs.com will be displayed on the site</p><p style=\"margin-bottom: 10px;\"><strong style=\"font-weight: bold;\">Priority Jobs\' (SINGLE)</strong></p><p align=\"justify\" style=\"margin-bottom: 10px;\">1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com shall place the information relating to vacancies in the Priority Jobs\' &amp; Classified sections of Azadijobs.com .</p><p align=\"justify\" style=\"margin-bottom: 10px;\">2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The insertion so displayed at Azadijobs.com shall be for a period of 30 days, which period is subject to change without notice.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com has the right to make all such modifications/editing of the vacancy details in order to fit in database.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com reserves its right to reject any insertion or information/data provided by the user without assigning any reason.&nbsp; In such an eventuality, any amount so paid for, shall be refunded to the user on a pro-data basis.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Azadijobs.com may at its sole discretion include the vacancy intimated by client for display on Azadijobs.com in the print media through various media alliances in other print vehicles with no extra costs to the client. However, if a client wishes not to have its vacancies/requirement from appearing in print media, then the client shall specifically inform Azadijobs.com in writing accordingly at the time of intimating of the vacancy.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">6.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Azadijobs.com offers no guarantee nor warranties that there would be a satisfactory response or any response once the job vacancy is put on display.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">7.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com shall in no way be held liable for any information provided by&nbsp; applicant(s) to the subscriber and it shall be the sole responsibility of the subscriber to check, authenticate and verify the information/response received at its own cost and expense.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">8.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Azadijobs.com would not be held liable for any loss of data technical or otherwise, information, particulars supplied by the customers due to the reasons beyond its control like corruption of data or delay or failure to perform as a result of any causes or conditions that are&nbsp; beyond Azadijobs.com reasonable control including but not limited to strike, riots, civil unrest, Govt. policies, tampering of data by unauthorized persons like hackers, war and natural calamities.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">9.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The subscriber/Recruiter must give an undertaking to Azadijobs.com that the jobs sought to be advertised on the `Priority Jobs\'\' and `Classified\' sections of Azadijobs.com are in existence, genuine and the subscriber has the authority to list the jobs.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">10.&nbsp;&nbsp; The subscriber/Recruiter must give an undertaking to Azadijobs.com that the there will be no fee charged from an applicant who responds to jobs advertised on the ‘Priority Jobs\'’ and ‘Classified’ sections of Azadijobs.com for processing of the application.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">11.&nbsp;&nbsp; Azadijobs.com reserves its right to change the look, feel, design, prominence, depiction, classification of the&nbsp; `Priority Jobs\'\' and `Classified\' sections of Azadijobs.com at any time without assigning any reason and without giving any notice.</p><p style=\"margin-bottom: 10px;\"><strong style=\"font-weight: bold;\">PRIORITY JOBS SUBSCRIPTIONS</strong></p><p align=\"justify\" style=\"margin-bottom: 10px;\">1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com shall place the information relating to vacancies only in&nbsp; `Priority Jobs\'\' and `Classified\' sections of Azadijobs.com</p><p align=\"justify\" style=\"margin-bottom: 10px;\">2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The insertion so displayed in the classified section of Azadijobs.comshall be for a period of 30 days, which is subject to change without notice.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Azadijobs.com has the right to make all such modifications/editing of the vacancy details in order to fit in database.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com reserves its right to reject any insertion or information/data provided by the user without assigning any reason.&nbsp; In such an eventuality, any amount so paid for, shall be refunded to the user on a pro-data basis.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs. commit at its sole discretion include the vacancy intimated by client for display on Azadijobs.com in the print media through various media alliances in other print vehicles with no extra costs to the client. However, if a client wishes not to have its vacancies/requirement from appearing in print media, then the client shall specifically inform Azadijobs.com in writing accordingly at the time of intimating of the vacancy.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">6.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com offers no guarantee nor warranties that there would be a satisfactory response or any response once the job vacancy is put on display.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">7.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com shall in no way be held liable for any information provided by&nbsp; applicant(s) to the subscriber and it shall be the sole responsibility of the subscriber to check, authenticate and verify the information/response received at its own cost and expense.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">8.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Azadijobs.com would not be held liable for any loss of data technical or otherwise, information, particulars supplied by the customers due to&nbsp;&nbsp; reasons beyond its control like corruption of data or delay or failure to perform as a result of any causes or conditions that are&nbsp; beyond Azadijobs.com reasonable control including but not limited to strike, riots, civil unrest, Govt. policies, tampering of data by unauthorized persons like hackers, war and natural calamities.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">9.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The subscriber/Recruiter must give an undertaking to Azadijobs.com that the jobs sought to be advertised on the&nbsp; `Priority Jobs\'\' and `Classified\' sections of Azadijobs.com are in existence, genuine and the subscriber has the authority to list the jobs.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">10.&nbsp;&nbsp; The subscriber/Recruiter must give an undertaking to Azadijobs.com that there will be no fee charged from an applicant who responds to jobs advertised on the \'Priority Jobs\' and ‘Classified’ sections of Azadijobs.com for processing of the application.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">11.Azadijobs.com reserves its right to change the look, feel, design, prominence, depiction, classification of the classified and/or Priority Jobs\' section of Azadijobs.com at any time without assigning any reason and without giving any notice.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">12.&nbsp;&nbsp; The subscriber to this service shall be entitled for unlimited listing during the period of subscription.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">13.&nbsp;&nbsp; This service is neither resalable nor transferable by the subscriber to any other person, corporate body, firm or individual.</p><p style=\"margin-bottom: 10px;\">&nbsp;</p><p style=\"margin-bottom: 10px;\"><br><br></p><p style=\"margin-bottom: 10px;\"><strong style=\"font-weight: bold;\">MANUAL SHORTLISTING</strong></p><p align=\"justify\" style=\"margin-bottom: 10px;\">1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com agrees to provide the service to the subscriber only for the duration and the number of vacancies contracted for, to the best of its ability.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com will receive, open, read and sort all resumes received in response to the vacancies for which the service is offered.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sorting shall be done using the parameters for selection decided by the subscriber.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">4.&nbsp;&nbsp;&nbsp;Azadijobs.com would not be held liable for any loss of data technical or otherwise, information, particulars supplied by the customers due to the reasons beyond its control like corruption of data or delay or failure to perform as a result of any causes or conditions that are&nbsp; beyond Azadijobs.com reasonable control including but not limited to strike, riots, civil unrest, Govt. policies, tampering of data by unauthorized persons like hackers, war and natural calamities.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; It is made clear that the subscriber being one corporate/business entity, cannot transfer/sell/sublet the micro site or any part thereof to any third party</p><p style=\"margin-bottom: 10px;\"><strong style=\"font-weight: bold;\">DISPLAY OF BANNERS</strong></p><p align=\"justify\" style=\"margin-bottom: 10px;\">1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Azadijobs.com agrees to provide the service to the subscriber only for the duration or the number of impressions contracted for, to the best of its ability.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Azadijobs.com will display banners on the home page on a rotation basis, wherein banners from different subscribers are displayed in a sequential manner, managed by a smart software.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">3.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; In case of “Run of the Web site” deals, Azadijobs.com reserves the right to choose the sections where the banners of a subscriber is to be displayed, at any point in time, during the period of the contract.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">4.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com reserves its right to reject any insertion or information/data provided by the user without assigning any reason.&nbsp; In such an eventuality, any amount so paid for, shall be refunded to the user on a pro-data basis.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">5.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Azadijobs.com offers no guarantee nor warranties that there would be a satisfactory response or any response once the banners are put on display.</p><p style=\"margin-bottom: 10px;\"></p><p align=\"justify\" style=\"margin-bottom: 10px;\">6.&nbsp;&nbsp;&nbsp;&nbsp;Azadijobs.com would not be held liable for any loss of data technical or otherwise, information, particulars supplied by the customers due to the reasons beyond its control like corruption of data or delay or failure to perform as a result of any causes or conditions that are&nbsp; beyond Azadijobs.com reasonable control including but not to strike, riots, civil unrest, Govt. policies, tampering of data by unauthorized persons like hackers, war and natural calamities.</p><p align=\"justify\" style=\"margin-bottom: 10px;\">7.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; It is made clear that the subscriber being one corporate/business entity, cannot transfer/sell/sublet the micro site or any part thereof to any third party.</p></div>', '2020-06-24 02:59:02', '2020-06-24 02:59:02');

-- --------------------------------------------------------

--
-- Table structure for table `govt_jobs`
--

CREATE TABLE `govt_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dept_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_post_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application_deadline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vacancy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_context` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_responsibilities` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employment_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `educational_requirements` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `additional_requirements` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `application_note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `govt_jobs`
--

INSERT INTO `govt_jobs` (`id`, `job_title`, `dept_title`, `image`, `job_post_date`, `application_deadline`, `vacancy`, `job_context`, `job_responsibilities`, `employment_status`, `educational_requirements`, `additional_requirements`, `job_location`, `salary`, `application_note`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Govt Jobs', 'Engineering', 'demo.png', '2020-04-26', '2020-04-30', '2', 'yy', 'hj', 'Part Time Job', 'ghi', 'ghi', '8', '100', 'ghki', '1', '2020-04-26 03:52:19', '2020-04-26 04:44:11'),
(6, 'Govt Jobs', 'Agri', 'image1587898240.jpg', NULL, NULL, NULL, NULL, NULL, 'Employment Status', NULL, NULL, NULL, NULL, NULL, '1', '2020-04-26 04:50:40', '2020-04-26 04:50:40'),
(7, 'Govt Jobs', 'Agriculture', 'demo.png', '2020-04-26', '2020-04-30', '2', 'dfh', 'fdhdfh', 'Full Time Job', 'dfhh', 'dfh', '8', '100', 'hh', '0', '2020-04-26 04:51:24', '2020-04-26 04:52:19');

-- --------------------------------------------------------

--
-- Table structure for table `institutes`
--

CREATE TABLE `institutes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `institute_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute_contact_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `institutes`
--

INSERT INTO `institutes` (`id`, `institute_name`, `institute_email`, `institute_address`, `institute_contact_number`, `created_at`, `updated_at`) VALUES
(1, 'Bogura Zilla School', 'bzs@gmail.com', 'Bogura', '017', '2020-04-28 01:05:40', '2020-04-28 01:08:42');

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
(14, 'NGO', '2020-04-02 00:44:04', '2020-04-02 00:44:04'),
(15, 'Bank', '2020-05-05 04:16:58', '2020-05-05 04:16:58'),
(16, 'Others', '2020-05-05 04:18:28', '2020-05-05 04:18:28'),
(17, 'Garments', '2020-05-05 04:48:12', '2020-05-05 04:48:12'),
(18, 'Hospitality', '2020-05-05 04:49:15', '2020-05-05 04:49:15');

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
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `job_provider_job_post` (`id`, `provider_id`, `job_title`, `category`, `sub_category`, `job_post_date`, `application_deadline`, `experience`, `joining_date`, `vacancy`, `job_context`, `job_responsibilities`, `employment_status`, `educational_requirements`, `additional_requirements`, `job_location`, `salary`, `application_note`, `status`, `created_at`, `updated_at`) VALUES
(21, '60', 'Software Engineering', '10', '3', '05.05.2020', '31.05.2020', '2 years', '01.06.2020', '2', '1. Some Text\r\n2. Some other text\r\n3. Done', '1. Some Text\r\n2. Some other text\r\n3. Done', 'Full Time Job', '1. Some Text\r\n2. Some other text\r\n3. Done', '1. Some Text\r\n2. Some other text\r\n3. Done', '4', '10,000 - 20,000 BDT', '1. Some Text\r\n2. Some other text\r\n3. Done', 1, '2020-05-05 04:33:01', '2020-05-05 04:33:01'),
(22, '60', 'Architecture- XYZ Group', '10', '4', '05.05.2020', '30.05.2020', '3-4 years', '31.05.2020', '4', '1. Some Text\r\n2. Some other text\r\n3. Done', '1. Some Text\r\n2. Some other text\r\n3. Done', 'Full Time Job', '1. Some Text\r\n2. Some other text\r\n3. Done', '1. Some Text\r\n2. Some other text\r\n3. Done', '4', '15,000 - 20,000 BDT', '1. Some Text\r\n2. Some other text\r\n3. Done', 1, '2020-05-05 04:35:05', '2020-05-05 04:35:05'),
(23, '60', 'ATM Night Guard (XYZ Bank)', '16', '15', '05.05.2020', '30.05.2020', '6 years', '31.05.2020', '1', '1. Some Text\r\n2. Some other text\r\n3. Done', '1. Some Text\r\n2. Some other text\r\n3. Done', 'Full Time Job', '1. Some Text\r\n2. Some other text\r\n3. Done', '1. Some Text\r\n2. Some other text\r\n3. Done', '9', '8,000 - 12,000 BDT', '1. Some Text\r\n2. Some other text\r\n3. Done', 1, '2020-05-05 04:37:45', '2020-05-05 04:37:45'),
(24, '60', 'Mechanical Engineering (Part Time)', '10', '4', '05.05.2020', '30.05.2020', '3 years', '31.05.2020', '4', '1. Some Text\r\n2. Some other text\r\n3. Done', '1. Some Text\r\n2. Some other text\r\n3. Done', 'Part Time Job', '1. Some Text\r\n2. Some other text\r\n3. Done', '1. Some Text\r\n2. Some other text\r\n3. Done', '7', 'Negotiable', '1. Some Text\r\n2. Some other text\r\n3. Done', 1, '2020-05-05 04:39:44', '2020-05-05 04:39:44'),
(25, '60', 'NGO (Opera Group)', '14', '8', '05.05.2020', '30.05.2020', '0-1 years', '31.05.2020', '12', '1. Some Text\r\n2. Some other text\r\n3. Done', '1. Some Text\r\n2. Some other text\r\n3. Done', 'Full Time Job', '1. Some Text\r\n2. Some other text\r\n3. Done', '1. Some Text\r\n2. Some other text\r\n3. Done', '4', '16,000 - 22,000 BDT', '1. Some Text\r\n2. Some other text\r\n3. Done', 1, '2020-05-05 04:41:18', '2020-05-05 04:41:18'),
(26, '60', 'Farming Laborer', '11', '6', '05.05.2020', '16.07.2020', '2 years', '01.09.2020', '10', '1. Some Text\r\n2. Some other text\r\n3. Done', '1. Some Text\r\n2. Some other text\r\n3. Done', 'Full Time Job', '1. Some Text\r\n2. Some other text\r\n3. Done', '1. Some Text\r\n2. Some other text\r\n3. Done', '8', '6,000 - 10,000 BDT', '1. Some Text\r\n2. Some other text\r\n3. Done', 1, '2020-05-05 04:43:06', '2020-05-05 04:43:06'),
(27, '60', 'Govt Job (Office)', '12', '9', '07.05.2020', '18.05.2020', '1-2 years', '03.06.2020', '5', '1. Some Text\r\n2. Some other text\r\n3. Done', '1. Some Text\r\n2. Some other text\r\n3. Done', 'Full Time Job', '1. Some Text\r\n2. Some other text\r\n3. Done', '1. Some Text\r\n2. Some other text\r\n3. Done', '4', '16,000 - 23,000 BDT', '1. Some Text\r\n2. Some other text\r\n3. Done', 1, '2020-05-05 04:45:57', '2020-05-05 04:45:57'),
(28, '60', 'Private Jobs', '13', '11', '04.05.2020', '18.05.2020', '2 years', '25.05.2020', '3', '1. Some Text\r\n2. Some other text\r\n3. Done', '1. Some Text\r\n2. Some other text\r\n3. Done', 'Full Time Job', '1. Some Text\r\n2. Some other text\r\n3. Done', '1. Some Text\r\n2. Some other text\r\n3. Done', '4', 'Negotiable', '1. Some Text\r\n2. Some other text\r\n3. Done', 1, '2020-05-05 04:46:44', '2020-05-05 04:46:44'),
(29, '60', 'Home Jobs', '13', '11', '10.05.2020', '30.05.2020', '5-6 years', '31.05.2020', '2', '1. Try new thing\r\n2. Is it working?\r\n3. Yes\r\n4.No', '1.\r\n2.\r\n3.', 'Part Time Job', '1.\r\n2.\r\n3.', '1.\r\n2.\r\n3.', '4', '5,000-8,000 BDT', '1.\r\n2.\r\n3.\r\n4.', 1, '2020-05-10 03:21:07', '2020-05-10 03:21:07'),
(30, '69', 'Reshad Job', '10', '3', '07.06.2020', '30.06.2020', '5-6 years', '30.06.2020', '1', 'qqq', 'qq', 'Part Time Job', 'qq', 'qq', '8', '100', 'qq', 1, '2020-06-07 00:15:53', '2020-06-07 00:15:53');

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
(10, 3, 60, 'AKTL', 'Gulshan', 'test check', 12, 'image1585551084.png', '4567', '7898', '12321', 'aktl@gmail.com', NULL, 1, '2020-03-30 00:51:24', '2020-04-02 00:50:17'),
(11, 3, 61, 'Gramenn Phone', 'Banani', 'www.grameenphone.com', 13, 'image1588530728.jpg', '4562', '2365', '4444', 'grameenphone@gmail.com', '2020-05-05', 1, '2020-05-03 12:32:08', '2020-05-03 12:32:08'),
(12, 3, 62, 'Bangla Link', 'Dhaka', 'www.banglalink.com', 12, 'image1588530826.webp', '8878', '9969', '2222', 'www.banglalink@gmail.com', '2020-05-06', 1, '2020-05-03 12:33:46', '2020-05-03 12:33:46'),
(13, 3, 63, 'Airtel', 'Dhaka', 'www.airtel.com', 10, 'image1588530890.png', '6656', '4489', '12345', 'airtel@gmail.com', '2020-05-06', 1, '2020-05-03 12:34:50', '2020-05-03 12:34:50'),
(14, 3, 64, 'TeleTalk', 'Dhaka', 'www.teletalk.com', 14, 'image1588530956.png', '7789', '6654', '4438', 'teletalk@gmail.com', '2020-05-08', 1, '2020-05-03 12:35:56', '2020-05-03 12:35:56'),
(15, 3, 65, 'Test 6', 'Dhaka', 'sdfsdf', 12, 'image1588531375.jpg', '54', '4654', '1234', 'sadff@gmail.com', '2020-05-07', 1, '2020-05-03 12:42:55', '2020-05-03 12:42:55'),
(16, 3, 66, 'Test 7', 'Dhaka', 'gbkg', 10, 'image1588531428.png', '4564', '646', '9874', 'jgkh@gmail.com', '2020-05-08', 1, '2020-05-03 12:43:49', '2020-05-03 12:43:49'),
(17, 3, 67, 'Test 8', 'Dhaka', 'kjfgvbj', 11, 'image1588531481.png', '545', '2513', '3223', 'knj@gmail.com', '2020-05-13', 1, '2020-05-03 12:44:41', '2020-05-03 12:44:41'),
(18, 3, 68, 'Test 9', 'Dhaka', 'iugf', 13, 'image1588531590.png', '5454', '5454', '7789', 'uhgu@gmail.com', '2020-05-12', 1, '2020-05-03 12:46:30', '2020-05-03 12:46:30'),
(19, 3, 69, 'Provider Reshad', 'bogura', 'test@gmail.com', 10, 'image1591510189.jpg', '123', '456', '9248596', 'test@gmail.com', '2020-06-04', 1, '2020-06-07 00:09:50', '2020-06-07 00:09:50');

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
(28, 2, 59, 'Ruhin', '1234', 'Uttara', 'ruhin@gmail.com', 'image1584860545.jpg', '10', '2020-03-22 01:02:25', '2020-06-03 15:31:46');

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
(30, '2020_04_13_184121_create_trainings_table', 15),
(31, '2020_04_16_052241_create_training_course_outlines_table', 16),
(32, '2020_04_23_085956_create_govt_jobs_table', 16),
(33, '2020_04_27_061752_create_designations_table', 17),
(34, '2020_04_27_070452_create_departments_table', 18),
(36, '2020_04_27_074010_create_employees_table', 19),
(37, '2020_04_28_063516_create_institutes_table', 20),
(38, '2020_04_28_071515_create_districts_table', 21),
(39, '2020_04_29_045120_create_notices_table', 22),
(40, '2020_04_30_093758_create_cover_images_table', 23),
(42, '2020_06_02_142416_create_apply_jobs_table', 24),
(43, '2020_06_22_042138_create_footer_about_us_terms_and_conditions_table', 25),
(44, '2020_06_23_093655_create_footer_about_us_feedbacks_table', 26),
(46, '2020_06_23_204301_create_footer_about_us_about_us_table', 27),
(47, '2020_06_24_065304_create_footer_job_seekers_terms_and_conditions_table', 28),
(50, '2020_06_24_093914_create_footer_employers_contacts_table', 29);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `notice_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notice_describtion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deactive_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `notice_title`, `notice_describtion`, `active_date`, `deactive_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Holiday', '1. This is Test\r\n2. I need a break', '2020-04-29', '2020-04-29', '0', '2020-04-29 00:14:19', '2020-04-29 01:33:16'),
(2, 'Testtt', '1. ygdfi\r\n2.igif\r\n3.oijgv', '2020-04-29', '', '1', '2020-04-29 01:14:55', '2020-04-29 01:32:00');

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
(11, 13, 'Office', '2020-04-02 00:47:15', '2020-04-02 00:47:15'),
(12, 15, 'Govt Bank', '2020-05-05 04:19:15', '2020-05-05 04:19:15'),
(13, 15, 'Private Bank', '2020-05-05 04:20:11', '2020-05-05 04:20:11'),
(14, 16, 'Driving', '2020-05-05 04:20:49', '2020-05-05 04:20:49'),
(15, 16, 'Security Guard', '2020-05-05 04:21:05', '2020-05-05 04:21:05'),
(16, 16, 'Health & Fitness', '2020-05-05 04:23:11', '2020-05-05 04:23:11');

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
  `training_cost` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainings`
--

INSERT INTO `trainings` (`id`, `training_title`, `training_subject`, `training_describtion`, `training_name`, `training_number`, `training_address`, `training_place`, `training_hour`, `training_cost`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Learn PHP', 'PHP', 'This is a PHP training course. Hope you will like it.', 'Learn PHP', '1', 'Uttara', 'Home', '40 Hour', 'BDT 3000', '1', '2020-04-15 09:17:39', '2020-06-12 01:51:50'),
(3, 'Learn Java', 'Java', 'This a second training name as Java', 'JaaVaa', '2', 'Shahbag', 'Dhaka', '20 Hours', 'BDT 2000', '1', '2020-04-16 00:31:27', '2020-06-12 01:51:50'),
(4, 'Learn HTML', 'HTML', '1.jnhfjk\r\n2.wsfv', 'Free HTML', '3', 'Dhaka', 'Home', '20 Hours', 'Free', '1', '2020-06-13 03:50:24', '2020-06-13 03:50:24'),
(5, 'Learn JS', 'JS', 'IT IS A TESTING DESCRIBTION', 'JS Training', '4', 'Dhaka', 'Remote Training', '10 Hours', '1,000', '1', '2020-06-14 23:29:30', '2020-06-14 23:29:30');

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
(1, 2, '2020-04-30', 'class', 'Introduction', '50 Hours', '11111', '2020-04-23 03:29:25', '2020-04-23 03:30:10'),
(2, 3, '2020-04-25', 'test', 'Introduction New', '50 Hours', '22222', '2020-04-23 03:29:51', '2020-04-23 03:29:51');

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
(59, 'Ruhin', 2, 'ruhin@gmail.com', '1234', NULL, NULL, NULL, '$2y$10$xBs0qDmC0DqjH1mZrWWbXeDs7tR64euNTxHfBt5mh9Ks/on58ilzq', 1, NULL, '2020-03-22 01:02:25', '2020-06-03 15:31:46'),
(60, 'AKTL', 3, 'aktl@gmail.com', '12321', NULL, NULL, NULL, '$2y$10$8ms0BaK.p1UIemq3QxwH9OOJ66dTbMRaLxK6uhtQhsjroiSC0pESe', 1, NULL, '2020-03-30 00:51:24', '2020-03-30 00:51:24'),
(61, 'Gramenn Phone', 3, 'grameenphone@gmail.com', '4444', NULL, NULL, NULL, '$2y$10$IlO6UIxzw4DbJybchdGH1.t3TeOpdufl6bJuwdlFUcJQhZO9pZLv.', 1, NULL, '2020-05-03 12:32:08', '2020-05-03 12:32:08'),
(62, 'Bangla Link', 3, 'www.banglalink@gmail.com', '2222', NULL, NULL, NULL, '$2y$10$vMmYCc668tz2FGdWOcCX5e8KQHGlLs9pvVozZ.PVODxKlfqxWs9ve', 1, NULL, '2020-05-03 12:33:46', '2020-05-03 12:33:46'),
(63, 'Airtel', 3, 'airtel@gmail.com', '12345', NULL, NULL, NULL, '$2y$10$uhsDGLlEt/sybyzwippgWe1nXt/hRdssQsdr73BZBuPTpIkHBPR6y', 1, NULL, '2020-05-03 12:34:50', '2020-05-03 12:34:50'),
(64, 'TeleTalk', 3, 'teletalk@gmail.com', '4438', NULL, NULL, NULL, '$2y$10$VJDkBMqkVm914yFweWxC0uq/2Vyez7egzQkweGI6Jp1Lvi6sM9pJy', 1, NULL, '2020-05-03 12:35:56', '2020-05-03 12:35:56'),
(65, 'Test 6', 3, 'sadff@gmail.com', '1234', NULL, NULL, NULL, '$2y$10$1R.C6ezAb8iOK2yH2/IvF.Me8t22O0cyjMf3NhFQjqL1NJv.HMQNi', 1, NULL, '2020-05-03 12:42:55', '2020-05-03 12:42:55'),
(66, 'Test 7', 3, 'jgkh@gmail.com', '9874', NULL, NULL, NULL, '$2y$10$l81CPXCwqyJAog7ySDRh6umu3a1GoPUQd8edlKBguflZA/lZmvV32', 1, NULL, '2020-05-03 12:43:49', '2020-05-03 12:43:49'),
(67, 'Test 8', 3, 'knj@gmail.com', '3223', NULL, NULL, NULL, '$2y$10$0GJj9Rux.ITfVFvRLA6obeAazQej/r4dqOEYaXOqbEPNdBRVII6qq', 1, NULL, '2020-05-03 12:44:41', '2020-05-03 12:44:41'),
(68, 'Test 9', 3, 'uhgu@gmail.com', '7789', NULL, NULL, NULL, '$2y$10$.VcSnrqFdM75RPZv15cEou/Jtf18sEbzRZG8ew5z/odDGoXvvXi62', 1, NULL, '2020-05-03 12:46:30', '2020-05-03 12:46:30'),
(69, 'Provider Reshad', 3, 'test@gmail.com', '9248596', NULL, NULL, NULL, '$2y$10$xp./AwZpMctrTVOSdxgYpeacmV0eJISRiry8q086/4RQGGhOvRguu', 1, NULL, '2020-06-07 00:09:50', '2020-06-07 00:09:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads_managements`
--
ALTER TABLE `ads_managements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apply_jobs`
--
ALTER TABLE `apply_jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `apply_jobs_seeker_id_foreign` (`seeker_id`),
  ADD KEY `apply_jobs_job_post_id_foreign` (`job_post_id`);

--
-- Indexes for table `cover_images`
--
ALTER TABLE `cover_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employees_employee_designation_foreign` (`employee_designation`),
  ADD KEY `employees_employee_department_foreign` (`employee_department`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_about_us_about_us`
--
ALTER TABLE `footer_about_us_about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_about_us_feedbacks`
--
ALTER TABLE `footer_about_us_feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_about_us_terms_and_conditions`
--
ALTER TABLE `footer_about_us_terms_and_conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_employers_contacts`
--
ALTER TABLE `footer_employers_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_job_seekers_terms_and_conditions`
--
ALTER TABLE `footer_job_seekers_terms_and_conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `govt_jobs`
--
ALTER TABLE `govt_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `institutes`
--
ALTER TABLE `institutes`
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
-- Indexes for table `notices`
--
ALTER TABLE `notices`
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
  ADD KEY `training_course_outlines_training_id_foreign` (`training_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `apply_jobs`
--
ALTER TABLE `apply_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cover_images`
--
ALTER TABLE `cover_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footer_about_us_about_us`
--
ALTER TABLE `footer_about_us_about_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `footer_about_us_feedbacks`
--
ALTER TABLE `footer_about_us_feedbacks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `footer_about_us_terms_and_conditions`
--
ALTER TABLE `footer_about_us_terms_and_conditions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `footer_employers_contacts`
--
ALTER TABLE `footer_employers_contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `footer_job_seekers_terms_and_conditions`
--
ALTER TABLE `footer_job_seekers_terms_and_conditions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `govt_jobs`
--
ALTER TABLE `govt_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `institutes`
--
ALTER TABLE `institutes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job_categories`
--
ALTER TABLE `job_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `job_provider_job_post`
--
ALTER TABLE `job_provider_job_post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `job_provider_registers`
--
ALTER TABLE `job_provider_registers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `trainings`
--
ALTER TABLE `trainings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `training_course_outlines`
--
ALTER TABLE `training_course_outlines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `apply_jobs`
--
ALTER TABLE `apply_jobs`
  ADD CONSTRAINT `apply_jobs_job_post_id_foreign` FOREIGN KEY (`job_post_id`) REFERENCES `job_provider_job_post` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `apply_jobs_seeker_id_foreign` FOREIGN KEY (`seeker_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_employee_department_foreign` FOREIGN KEY (`employee_department`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employees_employee_designation_foreign` FOREIGN KEY (`employee_designation`) REFERENCES `designations` (`id`) ON DELETE CASCADE;

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
  ADD CONSTRAINT `training_course_outlines_training_id_foreign` FOREIGN KEY (`training_id`) REFERENCES `trainings` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
