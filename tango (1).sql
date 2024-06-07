-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2024 at 04:16 AM
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
-- Database: `tango`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `nic` varchar(255) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `card_No` int(11) NOT NULL,
  `sec_No` int(11) NOT NULL,
  `service` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `plate` varchar(255) NOT NULL,
  `chasis` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `user_id`, `full_name`, `nic`, `phone_number`, `type`, `payment`, `card_No`, `sec_No`, `service`, `address`, `plate`, `chasis`, `discount`, `created_at`, `updated_at`) VALUES
(15, 1, 'userr', '212344', 0, 'Petrol', 'card', 332, 332, 'Car wash', 'ee', '3223', '3223', '2323', '2024-05-19 00:20:23', '2024-05-28 02:51:15'),
(19, 65, 'Dorian Dawson', '3223', 2323, 'Petrol', 'card', 23, 23, 'Car wash', 'sd', '23322332', '323', '233', '2024-05-31 01:38:42', '2024-05-31 01:38:42'),
(20, 65, 'rttt', '3223', 5552, 'Petrol', 'card', 323, 3232, 'Car wash', 'eeew', '3232', '3232', '3232', '2024-05-31 01:51:30', '2024-05-31 01:51:30'),
(25, 1, 'medan rosa', '2221', 2222, 'Petrol', 'card', 2222, 2222, 'Car wash', 'dagona', '2222', '2222', '2222', '2024-06-05 23:35:22', '2024-06-05 23:36:43'),
(32, 1, 'eeee', '2', 2222, 'Petrol', 'card', 2222, 2222, 'Car wash', 'dagona', '2222', '2222', '2222', '2024-06-06 00:30:11', '2024-06-06 00:38:02'),
(33, 1, 'eeee', '2', 2222, 'Petrol', 'card', 2222, 2222, 'Car wash', 'dagona', '2222', '2222', '2222', '2024-06-06 00:42:05', '2024-06-06 00:55:31'),
(34, 1, 'eeee', '2', 2222, 'Petrol', 'card', 2222, 2222, 'Car wash', 'dagona', '2222', '2222', '2222', '2024-06-06 00:56:23', '2024-06-06 01:25:50'),
(35, 1, 'ewe', '12', 1111, 'Petrol', 'card', 1111, 1111, 'Car wash', 'dagona', '1111', '1111', '1111', '2024-06-06 01:27:34', '2024-06-06 01:28:31'),
(37, 71, 'eone', '1', 1, 'Petrol', 'card', 1, 1, 'Battery change', 'dagona', '1', '1', '1', '2024-06-06 06:55:06', '2024-06-06 06:55:06'),
(38, 71, 'e2', '2', 2, 'Diesel', 'card', 2, 2, 'Tyre change', 'dagona', '2', '2', '2', '2024-06-06 06:55:32', '2024-06-06 06:55:32'),
(39, 71, 'e3', '3', 3, 'Electric', 'card', 3, 3, 'Engine oil change', 'dagona', '3', '3', '3', '2024-06-06 06:55:49', '2024-06-06 06:55:49'),
(40, 71, 'e4', '4', 4, 'Petrol', 'card', 4, 4, 'Fuel Delivery', 'dagona', '4', '4', '4', '2024-06-06 06:56:14', '2024-06-06 06:56:14'),
(41, 73, 'rosy', '2112', 2112, 'Diesel', 'card', 2112, 2112, 'Engine oil change', 'dagona', '2112', '2112', '2112', '2024-06-06 07:16:41', '2024-06-06 07:16:41');

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
(6, '2023_12_14_085148_create_sessions_table', 1),
(7, '2024_01_11_091707_create_products_table', 1),
(8, '2024_01_18_071855_create_bookings_table', 1),
(9, '2019_05_03_000001_create_customer_columns', 2),
(10, '2019_05_03_000002_create_subscriptions_table', 2),
(11, '2019_05_03_000003_create_subscription_items_table', 2),
(12, '2024_05_12_044334_create_planssub_table', 3),
(13, '2024_05_12_053211_create_planssub_table', 4),
(14, '2024_05_26_080015_add_plan_name_to_subscriptions_table', 5);

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
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `car_model` varchar(255) NOT NULL,
  `car_chasis` varchar(255) NOT NULL,
  `car_plate` varchar(255) NOT NULL,
  `car_plan` varchar(255) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`car_model`, `car_chasis`, `car_plate`, `car_plan`, `plan_id`, `user_id`, `updated_at`, `created_at`) VALUES
('Nisi iure provident', '859', '374', 'Standard', 1, 20, '2024-05-08 15:38:17', '2024-05-08 15:38:17'),
('Aut reprehenderit do', '14', '726', 'Standard', 2, 20, '2024-05-08 15:39:52', '2024-05-08 15:39:52'),
('sas', '2121', '2121', 'Standard', 16, 48, '2024-05-16 02:41:17', '2024-05-16 02:41:17'),
('ee', '3', '3', 'Standard', 17, 49, '2024-05-19 05:47:15', '2024-05-19 05:47:15'),
('qw', '1222121', '2122121', 'Standard', 26, 62, '2024-05-30 03:46:40', '2024-05-30 03:46:40'),
('ww', '2121', '2121', 'Standard', 27, 62, '2024-05-30 03:52:27', '2024-05-30 03:52:27'),
('ggg', '23', '23', 'Premium', 28, 62, '2024-05-30 03:57:26', '2024-05-30 03:57:26'),
('weew', '323', '232', 'Standard', 29, 62, '2024-05-30 04:01:56', '2024-05-30 04:01:56'),
('uii', '88', '88', 'Premium', 30, 63, '2024-05-30 04:05:09', '2024-05-30 04:05:09'),
('ewewe', '23', '232', 'Standard', 31, 63, '2024-05-30 04:16:20', '2024-05-30 04:16:20'),
('rre', '2121', '2121', 'Standard', 32, 65, '2024-05-31 06:41:08', '2024-05-31 06:41:08'),
('rre', '2121', '2121', 'Standard', 33, 65, '2024-05-31 06:41:23', '2024-05-31 06:41:23'),
('eee', '1212', '1212', 'Standard', 34, 66, '2024-06-02 14:01:46', '2024-06-02 14:01:46'),
('ewewwwqq', '23', '23', 'Premium', 35, 68, '2024-06-03 13:35:19', '2024-06-03 13:35:19'),
('insight', '2222', '2222', 'Premium', 37, 71, '2024-06-06 05:02:07', '2024-06-06 05:02:07'),
('naduu', '9999', '9999', 'Premium', 38, 71, '2024-06-06 07:03:32', '2024-06-06 07:03:32'),
('reer', '3232', '3232', 'Premium', 39, 73, '2024-06-06 12:46:52', '2024-06-06 12:46:52');

-- --------------------------------------------------------

--
-- Table structure for table `planssub`
--

CREATE TABLE `planssub` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `stripe_plan` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `planssub`
--

INSERT INTO `planssub` (`id`, `name`, `slug`, `stripe_plan`, `price`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Standard Plan', 'Standard', 'price_1PFU81Rp34CsmONydYYSOnAy', 126000, 'Standard Plan', '2024-05-12 00:58:07', '2024-05-12 00:58:07'),
(2, 'Premium Plan', 'Premium', 'price_1PFU8mRp34CsmONyfVci38Dj', 136000, 'Premium Plan', '2024-05-12 00:58:07', '2024-05-12 00:58:07');

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
('SgJwm4NorBoCyOSclBqY6W2Oy866cuhhlfplMh62', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSGhJRndFSXJhaXpya2NONk1jWldkMEF5VEdYUE81UkYzRDFTNG13ayI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1717726456);

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `plan_name` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `stripe_id` varchar(255) NOT NULL,
  `stripe_status` varchar(255) NOT NULL,
  `stripe_price` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `ends_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `user_id`, `plan_name`, `type`, `stripe_id`, `stripe_status`, `stripe_price`, `quantity`, `trial_ends_at`, `ends_at`, `created_at`, `updated_at`) VALUES
(1, 44, '', '1', 'sub_1PFxgPRp34CsmONyEywVREhc', 'active', 'price_1PFU81Rp34CsmONydYYSOnAy', 1, NULL, NULL, '2024-05-13 06:38:46', '2024-05-13 06:38:49'),
(2, 44, '', '1', 'sub_1PFxhgRp34CsmONy4tL1M5gD', 'active', 'price_1PFU81Rp34CsmONydYYSOnAy', 1, NULL, NULL, '2024-05-13 06:40:06', '2024-05-13 06:40:09'),
(3, 44, '', '2', 'sub_1PFxl0Rp34CsmONynMlFbuIj', 'active', 'price_1PFU8mRp34CsmONyfVci38Dj', 1, NULL, NULL, '2024-05-13 06:43:31', '2024-05-13 06:43:35'),
(4, 44, '', '2', 'sub_1PFxlXRp34CsmONyniwZl53Q', 'active', 'price_1PFU8mRp34CsmONyfVci38Dj', 1, NULL, NULL, '2024-05-13 06:44:04', '2024-05-13 06:44:07'),
(5, 44, '', '2', 'sub_1PFxnXRp34CsmONyeTGKAuYg', 'active', 'price_1PFU8mRp34CsmONyfVci38Dj', 1, NULL, NULL, '2024-05-13 06:46:09', '2024-05-13 06:46:12'),
(6, 49, '', '1', 'sub_1PI2FiRp34CsmONyywsWDag0', 'active', 'price_1PFU81Rp34CsmONydYYSOnAy', 1, NULL, NULL, '2024-05-18 23:55:52', '2024-05-18 23:55:55'),
(7, 49, '', '1', 'sub_1PI2P3Rp34CsmONytGeduIhP', 'active', 'price_1PFU81Rp34CsmONydYYSOnAy', 1, NULL, NULL, '2024-05-19 00:05:31', '2024-05-19 00:05:34'),
(8, 49, '', 'userrt', 'sub_1PI2WqRp34CsmONy9uDdA5d4', 'active', 'price_1PFU81Rp34CsmONydYYSOnAy', 1, NULL, NULL, '2024-05-19 00:13:34', '2024-05-19 00:13:38'),
(9, 49, '', 'nadun', 'sub_1PI2ZaRp34CsmONyHZW4es1L', 'active', 'price_1PFU81Rp34CsmONydYYSOnAy', 1, NULL, NULL, '2024-05-19 00:16:24', '2024-05-19 00:16:27'),
(10, 52, '', 'nadun', 'sub_1PKGg1Rp34CsmONyxn7H4fID', 'active', 'price_1PFU8mRp34CsmONyfVci38Dj', 1, NULL, NULL, '2024-05-25 03:44:12', '2024-05-25 03:44:15'),
(11, 53, '', 'medan', 'sub_1PKbcyRp34CsmONywFyIYnqA', 'active', 'price_1PFU8mRp34CsmONyfVci38Dj', 1, NULL, NULL, '2024-05-26 02:06:25', '2024-05-26 02:06:28'),
(12, 63, NULL, 'iii', 'sub_1PM0FDRp34CsmONy98zANUDX', 'active', 'price_1PFU8mRp34CsmONyfVci38Dj', 1, NULL, NULL, '2024-05-29 22:35:42', '2024-05-29 22:35:45'),
(13, 63, NULL, 'popo', 'sub_1PM0PuRp34CsmONyhsRiWmp0', 'active', 'price_1PFU81Rp34CsmONydYYSOnAy', 1, NULL, NULL, '2024-05-29 22:46:44', '2024-05-29 22:46:47'),
(14, 65, NULL, 'medda', 'sub_1PMP9sRp34CsmONyCoEa6532', 'active', 'price_1PFU81Rp34CsmONydYYSOnAy', 1, NULL, NULL, '2024-05-31 01:11:50', '2024-05-31 01:11:53'),
(15, 66, NULL, 'user', 'sub_1PNEzFRp34CsmONy5USeYWBT', 'active', 'price_1PFU81Rp34CsmONydYYSOnAy', 1, NULL, NULL, '2024-06-02 08:32:20', '2024-06-02 08:32:24'),
(16, 68, NULL, 'nadun', 'sub_1PNb32Rp34CsmONyUIb7zVeZ', 'active', 'price_1PFU8mRp34CsmONyfVci38Dj', 1, NULL, NULL, '2024-06-03 08:05:44', '2024-06-03 08:05:47'),
(17, 1, NULL, 'user', 'sub_1PNqNYRp34CsmONyzc9EloiX', 'active', 'price_1PFU8mRp34CsmONyfVci38Dj', 1, NULL, NULL, '2024-06-04 00:27:56', '2024-06-04 00:27:59'),
(18, 71, NULL, 'medan', 'sub_1POYT2Rp34CsmONypFVL9fUe', 'active', 'price_1PFU8mRp34CsmONyfVci38Dj', 1, NULL, NULL, '2024-06-05 23:32:29', '2024-06-05 23:32:33'),
(19, 71, NULL, 'naduu', 'sub_1POaMbRp34CsmONyjzXnW6Qb', 'active', 'price_1PFU8mRp34CsmONyfVci38Dj', 1, NULL, NULL, '2024-06-06 01:33:59', '2024-06-06 01:34:01'),
(20, 73, NULL, 'user', 'sub_1POfimRp34CsmONynLJGxk7N', 'active', 'price_1PFU8mRp34CsmONyfVci38Dj', 1, NULL, NULL, '2024-06-06 07:17:14', '2024-06-06 07:17:16');

-- --------------------------------------------------------

--
-- Table structure for table `subscription_items`
--

CREATE TABLE `subscription_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subscription_id` bigint(20) UNSIGNED NOT NULL,
  `stripe_id` varchar(255) NOT NULL,
  `stripe_product` varchar(255) NOT NULL,
  `stripe_price` varchar(255) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscription_items`
--

INSERT INTO `subscription_items` (`id`, `subscription_id`, `stripe_id`, `stripe_product`, `stripe_price`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 'si_Q6A0SXaRj7fb8k', 'prod_Q5fSF6AmfB4YDK', 'price_1PFU81Rp34CsmONydYYSOnAy', 1, '2024-05-13 06:38:46', '2024-05-13 06:38:46'),
(2, 2, 'si_Q6A12Ye2aUxl1m', 'prod_Q5fSF6AmfB4YDK', 'price_1PFU81Rp34CsmONydYYSOnAy', 1, '2024-05-13 06:40:06', '2024-05-13 06:40:06'),
(3, 3, 'si_Q6A52yClmkJad0', 'prod_Q5fTsp5iZr63vV', 'price_1PFU8mRp34CsmONyfVci38Dj', 1, '2024-05-13 06:43:31', '2024-05-13 06:43:31'),
(4, 4, 'si_Q6A5MzRaskeu6V', 'prod_Q5fTsp5iZr63vV', 'price_1PFU8mRp34CsmONyfVci38Dj', 1, '2024-05-13 06:44:04', '2024-05-13 06:44:04'),
(5, 5, 'si_Q6A7ExjJruyei4', 'prod_Q5fTsp5iZr63vV', 'price_1PFU8mRp34CsmONyfVci38Dj', 1, '2024-05-13 06:46:09', '2024-05-13 06:46:09'),
(6, 6, 'si_Q8IrbEp3ZHBCy4', 'prod_Q5fSF6AmfB4YDK', 'price_1PFU81Rp34CsmONydYYSOnAy', 1, '2024-05-18 23:55:52', '2024-05-18 23:55:52'),
(7, 7, 'si_Q8J14mB8v5wQ79', 'prod_Q5fSF6AmfB4YDK', 'price_1PFU81Rp34CsmONydYYSOnAy', 1, '2024-05-19 00:05:31', '2024-05-19 00:05:31'),
(8, 8, 'si_Q8J9Ua5O5zWect', 'prod_Q5fSF6AmfB4YDK', 'price_1PFU81Rp34CsmONydYYSOnAy', 1, '2024-05-19 00:13:34', '2024-05-19 00:13:34'),
(9, 9, 'si_Q8JB6qgAiNnyMn', 'prod_Q5fSF6AmfB4YDK', 'price_1PFU81Rp34CsmONydYYSOnAy', 1, '2024-05-19 00:16:24', '2024-05-19 00:16:24'),
(10, 10, 'si_QAbtph5IkcCnjk', 'prod_Q5fTsp5iZr63vV', 'price_1PFU8mRp34CsmONyfVci38Dj', 1, '2024-05-25 03:44:12', '2024-05-25 03:44:12'),
(11, 11, 'si_QAxYeIw6Ckax08', 'prod_Q5fTsp5iZr63vV', 'price_1PFU8mRp34CsmONyfVci38Dj', 1, '2024-05-26 02:06:25', '2024-05-26 02:06:25'),
(12, 12, 'si_QCP38DBRGDZYvu', 'prod_Q5fTsp5iZr63vV', 'price_1PFU8mRp34CsmONyfVci38Dj', 1, '2024-05-29 22:35:42', '2024-05-29 22:35:42'),
(13, 13, 'si_QCPEHBEnyEGSvy', 'prod_Q5fSF6AmfB4YDK', 'price_1PFU81Rp34CsmONydYYSOnAy', 1, '2024-05-29 22:46:44', '2024-05-29 22:46:44'),
(14, 14, 'si_QConYTACAo2IbA', 'prod_Q5fSF6AmfB4YDK', 'price_1PFU81Rp34CsmONydYYSOnAy', 1, '2024-05-31 01:11:50', '2024-05-31 01:11:50'),
(15, 15, 'si_QDgLfXQ0hSA0Sz', 'prod_Q5fSF6AmfB4YDK', 'price_1PFU81Rp34CsmONydYYSOnAy', 1, '2024-06-02 08:32:20', '2024-06-02 08:32:20'),
(16, 16, 'si_QE39Dh2qC0scTA', 'prod_Q5fTsp5iZr63vV', 'price_1PFU8mRp34CsmONyfVci38Dj', 1, '2024-06-03 08:05:44', '2024-06-03 08:05:44'),
(17, 17, 'si_QEIz4RXt23gHtk', 'prod_Q5fTsp5iZr63vV', 'price_1PFU8mRp34CsmONyfVci38Dj', 1, '2024-06-04 00:27:56', '2024-06-04 00:27:56'),
(18, 18, 'si_QF2YNTK5fsbh2l', 'prod_Q5fTsp5iZr63vV', 'price_1PFU8mRp34CsmONyfVci38Dj', 1, '2024-06-05 23:32:29', '2024-06-05 23:32:29'),
(19, 19, 'si_QF4VU6GCXxSJ7t', 'prod_Q5fTsp5iZr63vV', 'price_1PFU8mRp34CsmONyfVci38Dj', 1, '2024-06-06 01:33:59', '2024-06-06 01:33:59'),
(20, 20, 'si_QFA2SSD9JDE4rP', 'prod_Q5fTsp5iZr63vV', 'price_1PFU8mRp34CsmONyfVci38Dj', 1, '2024-06-06 07:17:14', '2024-06-06 07:17:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT '2',
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
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
  `stripe_id` varchar(255) DEFAULT NULL,
  `pm_type` varchar(255) DEFAULT NULL,
  `pm_last_four` varchar(4) DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `stripe_id`, `pm_type`, `pm_last_four`, `trial_ends_at`) VALUES
(1, '1', 'admin', 'admin@admin.com', '2024-02-14 04:36:26', '$2y$12$yiYihVd.id/dvxvrMHN7eOGf1UdIDOoDdBpp15yiLzfFI/BhROPdW', NULL, NULL, NULL, 'WSTFYiOIPzgXVvwl8kQjEW3Mr1LrOvwl8TMvBf84vqNyrZuSFpKDNpbBuVfL', NULL, NULL, '2024-02-14 04:36:26', '2024-06-04 00:27:54', 'cus_QEIziKRHtRckTz', 'visa', '4242', NULL),
(44, '2', 'Amena Copeland', 'zaxidexam@mailinator.com', NULL, '$2y$12$FVoQUnlN2bat4K1T7Yqdd.8RFnni1R1ePoeexdRNuuMnDcOUP9DvS', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-13 06:00:01', '2024-05-13 06:43:30', 'cus_Q6A0RE2G6zGNqN', 'visa', '4242', NULL),
(49, '2', 'Barclay Lane', 'ponu@mailinator.com', NULL, '$2y$12$nHEEE0R18BNMKvcvT8/eq.lDZmrJa0QVFIFRii9QLEqSJP5p2Zagm', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-18 23:49:00', '2024-05-19 00:16:23', 'cus_Q8Ir8AErnO6imG', 'visa', '4242', NULL),
(50, '2', 'Alvin Guzman', 'buqulyto@mailinator.com', NULL, '$2y$12$oNCQu5scKfTidEOlMCyR9.nlpwYXjV1pQldAH8u3B9BhYJKPjsN6e', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-19 09:32:34', '2024-05-19 09:32:34', NULL, NULL, NULL, NULL),
(52, '2', 'Kameko Velez', 'najode@mailinator.com', NULL, '$2y$12$dH5Ex7C1/QnrxqwYKBYPuu/iALmInve.EesdlF6Rh4KXWzVaDsNFe', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-25 03:07:53', '2024-05-25 03:44:11', 'cus_QAbtSiAwITOonr', 'visa', '4242', NULL),
(53, '2', 'Rogan Pugh', 'qabyqif@mailinator.com', NULL, '$2y$12$BERAV.t.giq0PTVdxMjDKe2VOyq0N1yv6HeBR4hovnsu72lY1dPIe', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-26 02:05:30', '2024-05-26 02:06:24', 'cus_QAxYkPFGJPLicb', 'visa', '4242', NULL),
(57, '2', 'Glenna Kidd', 'qoxot@mailinator.com', NULL, '$2y$12$5sN75WknEcFs781kF.14hOv7MFcHPs1nyc2OxKvoqvGr5TDAx8p3e', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-26 02:44:50', '2024-05-26 02:45:21', 'cus_QAyAWxu4r9VzNF', 'visa', '4242', NULL),
(58, '2', 'Ronan Baird', 'xemybepo@mailinator.com', NULL, '$2y$12$z3/RxxLTduHihqQKL0qdYOg4KnSziri7D35PPkSRfPLABw97wpQDe', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-26 02:46:48', '2024-05-26 02:46:48', NULL, NULL, NULL, NULL),
(62, '2', 'Zia Lynn', 'muho@mailinator.com', NULL, '$2y$12$fRiOa.JRKBNYuqIvky6yje.rJzHfVdC96/P20dBJ2BR1al0Kb0.r6', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-29 21:12:49', '2024-05-29 22:17:27', 'cus_QCOliQLhsAaz2z', 'visa', '4242', NULL),
(63, '2', 'Fulton Logan', 'wyjyhopab@mailinator.com', NULL, '$2y$12$hsyvTEHhlz9e.mhZ3aKnlu0GJ4nmr1AWG643dAhyGHtHEhohSCle6', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-29 22:34:51', '2024-05-29 22:35:41', 'cus_QCP3G9x6G4jVlY', 'visa', '4242', NULL),
(64, '2', 'Cecilia Dudley', 'herova@mailinator.com', NULL, '$2y$12$43DZ7srXhHbnCL6IhPuo8u45o5TUEkX.JWzArTDQWQpOtSOROqDPK', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-29 23:14:27', '2024-05-29 23:14:27', NULL, NULL, NULL, NULL),
(65, '2', 'Shelley Mendez', 'toletuvymi@mailinator.com', NULL, '$2y$12$y99ORQzilibi3xUmKATBgu8ULHKdwOWfj8BzTWXGSzIaEGzcRpgZi', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-31 01:10:05', '2024-05-31 01:11:49', 'cus_QCon4xwLZ8woL6', 'visa', '4242', NULL),
(66, '2', 'Mannix Garrett', 'seqygogo@mailinator.com', NULL, '$2y$12$hIMK8Ms461qC4x6HBOPni.awR5p8gh2hsXQs/Pg3dzLETk3nvYCEK', NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-02 08:29:29', '2024-06-02 08:32:18', 'cus_QDgL8QyRlr8xnq', 'visa', '4242', NULL),
(68, '2', 'Dieter Graves', 'sygap@mailinator.com', NULL, '$2y$12$6Ow96sV5QwMQTxAEcXmJ.Oi2ocqJ3Zxj7Bi86.4Je.qv7l.j2R932', NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-03 08:04:31', '2024-06-03 08:05:43', 'cus_QE39XwftZtXioY', 'visa', '4242', NULL),
(70, '2', 'Scott Gonzales', 'zufugebeci@mailinator.com', NULL, '$2y$12$E0jbfLGeYwiSzL3dQsmnCO5CWKzgmC8P8FTIaTwsvKWw.61cUirBi', NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-04 00:35:30', '2024-06-04 00:35:30', NULL, NULL, NULL, NULL),
(71, '2', 'medan', 'medan@gmail.com', NULL, '$2y$12$hALzgSvHgB4Njgl1if5ro.Y/5aAGuWSVTbe0qBYUrudqKZbecNwhC', NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-05 23:31:51', '2024-06-06 00:45:05', 'cus_QF2YIUZFCPQAWL', 'visa', '4242', NULL),
(73, '2', 'Merrill Mcbride', 'haqytuhudo@mailinator.com', NULL, '$2y$12$Uix6vYTNXslVCVNdbRFmPu3WiZyaU0pcfoIPdndFDxYjSItjTjJNW', NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-06 07:15:48', '2024-06-06 07:17:12', 'cus_QFA2ejm1JSA1rP', 'visa', '4242', NULL),
(76, '2', 'nadun1', 'nadun@gmail.com', NULL, '$2y$12$yrVYVgbLYC1D4rXlHgmL6O3iNaYL9g3P9x0jAzpMb4Rl7txH1m/ni', NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-06 08:37:15', '2024-06-06 20:43:53', NULL, NULL, NULL, NULL),
(77, '2', 'Maggie Matthews', 'jorilab@mailinator.com', NULL, '$2y$12$zHU1U3NaFZv/5tTfiaBCb.h2TmoZB3jEKUTn1GEq18BKtPUVk/SzO', NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-06 20:41:26', '2024-06-06 20:41:26', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`plan_id`);

--
-- Indexes for table `planssub`
--
ALTER TABLE `planssub`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscriptions_stripe_id_unique` (`stripe_id`),
  ADD KEY `subscriptions_user_id_stripe_status_index` (`user_id`,`stripe_status`);

--
-- Indexes for table `subscription_items`
--
ALTER TABLE `subscription_items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscription_items_stripe_id_unique` (`stripe_id`),
  ADD KEY `subscription_items_subscription_id_stripe_price_index` (`subscription_id`,`stripe_price`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_stripe_id_index` (`stripe_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `plan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `planssub`
--
ALTER TABLE `planssub`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `subscription_items`
--
ALTER TABLE `subscription_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD CONSTRAINT `subscriptions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `subscription_items`
--
ALTER TABLE `subscription_items`
  ADD CONSTRAINT `subscription_items_ibfk_1` FOREIGN KEY (`subscription_id`) REFERENCES `subscriptions` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
