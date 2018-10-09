-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 09, 2018 at 09:17 AM
-- Server version: 5.7.23-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `UhuruApp`
--

-- --------------------------------------------------------

--
-- Table structure for table `advices`
--

CREATE TABLE `advices` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `businesses`
--

CREATE TABLE `businesses` (
  `id` int(10) UNSIGNED NOT NULL,
  `steps` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `businesses`
--

INSERT INTO `businesses` (`id`, `steps`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam dolore inventore praesentium omnis ea, et, iusto numquam, nostrum dicta doloribus asperiores eos eius! At modi animi perferendis repellendus illum illo!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam dolore inventore praesentium omnis ea, et, iusto numquam, nostrum dicta doloribus asperiores eos eius! At modi animi perferendis repellendus illum illo!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam dolore inventore praesentium omnis ea, et, iusto numquam, nostrum dicta doloribus asperiores eos eius! At modi animi perferendis repellendus illum illo!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam dolore inventore praesentium omnis ea, et, iusto numquam, nostrum dicta doloribus asperiores eos eius! At modi animi perferendis repellendus illum illo!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam dolore inventore praesentium omnis ea, et, iusto numquam, nostrum dicta doloribus asperiores eos eius! At modi animi perferendis repellendus illum illo!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam dolore inventore praesentium omnis ea, et, iusto numquam, nostrum dicta doloribus asperiores eos eius! At modi animi perferendis repellendus illum illo!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam dolore inventore praesentium omnis ea, et, iusto numquam, nostrum dicta doloribus asperiores eos eius! At modi animi perferendis repellendus illum illo!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam dolore inventore praesentium omnis ea, et, iusto numquam, nostrum dicta doloribus asperiores eos eius! At modi animi perferendis repellendus illum illo!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam dolore inventore praesentium omnis ea, et, iusto numquam, nostrum dicta doloribus asperiores eos eius! At modi animi perferendis repellendus illum illo!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tota', '2018-10-09 03:46:14', '2018-10-09 03:52:39');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `categoryname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categoryname`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Mazao', 'aina zote za mboga za majani', NULL, '2018-10-05 05:52:34'),
(4, 'Electronics', 'Electrical devices such as mobile phones, radios etc', '2018-09-23 22:29:11', '2018-09-23 22:29:11');

-- --------------------------------------------------------

--
-- Table structure for table `debtors`
--

CREATE TABLE `debtors` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `credit_value` decimal(8,2) NOT NULL,
  `business_nature` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount_requested` decimal(8,2) NOT NULL,
  `collateral` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scale` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `id` int(10) UNSIGNED NOT NULL,
  `organization_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `collateral` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit_value` decimal(8,2) NOT NULL,
  `minimum_amount` decimal(8,2) NOT NULL,
  `scale` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contacts` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extra_notes` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loans`
--

INSERT INTO `loans` (`id`, `organization_name`, `collateral`, `credit_value`, `minimum_amount`, `scale`, `contacts`, `extra_notes`, `created_at`, `updated_at`) VALUES
(1, 'NMB', 'nyumba', '39.00', '500000.00', 'individual', 'machete94@jfsdf.vfvf', 'wefewf', '2018-10-03 01:35:29', '2018-10-03 08:21:59'),
(2, 'CRDB', 'nyumba', '11.00', '10000.00', 'both', '0766457248', 'Mkopo unalipia kwa haraka zaidi', '2018-10-03 01:56:50', '2018-10-03 08:54:38'),
(4, 'MUCOBA', 'nyumba, kiwanja', '28.24', '500000.00', 'individual', 'info@mucoba.or.tz', 'Located at Mufindi', '2018-10-03 02:51:08', '2018-10-03 08:22:45');

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
(3, '2018_09_20_100458_create_categories_table', 1),
(4, '2018_09_20_102909_create_products_table', 2),
(5, '2018_09_21_200324_create_advices_table', 2),
(6, '2018_09_21_200403_create_orders_table', 2),
(7, '2018_09_21_200425_create_debtors_table', 2),
(8, '2018_09_21_200537_create_loans_table', 2),
(9, '2018_09_21_223904_create_search_histories_table', 2),
(10, '2018_10_05_022144_create_trainings_table', 3),
(11, '2018_10_07_111036_create_businesses_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `contacts` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contacts` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extra_info` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `quantity`, `location`, `contacts`, `picture`, `extra_info`, `date_from`, `date_to`, `user_id`, `category_id`, `created_at`, `updated_at`) VALUES
(3, 'Redio', '120,000 Tsh', '4', 'Dar es Salaam, Tanzania', '0766457248', 'public/products/RoU3GRAJPVCnudf25gJCzsPXXIAuTEBAMB3vKBrS.jpeg', 'IN bluetooth, sehemu ya memory na radio', '2018-09-24', '2018-10-06', 0, 4, '2018-09-24 01:05:04', '2018-09-29 11:58:09'),
(28, 'carrot', '500', '20,000', 'Dar es Salaam, Tanzania', '0766457248', 'public/products/ExrWNfHzv69YyYP6mo6DjaknX5VvEcgJypPWj8Od.jpeg', 'wfwefwefewf', '2018-09-29', '2018-10-06', NULL, 2, '2018-09-29 12:26:08', '2018-09-29 12:26:08'),
(29, 'simu', '320000', '30', 'Dar es Salaam, Tanzania', '0766457248', 'public/products/nCNewXu91bvfQ7U7NvqrQiwsigyOcJtaSijllKjX.jpeg', 'dgdgdgfd', '2018-10-07', '2018-11-03', NULL, 4, '2018-10-07 08:48:28', '2018-10-07 08:48:28'),
(30, 'velit eligendi tempore', '500', '20,000', 'velit eligendi tempore', '0766457248', 'public/products/7BomtqXJSSqWJPYGJ3YnepKYta40pxvgiJb9LyFL.jpeg', 'velit eligendi temporevelit eligendi temporevelit eligendi temporevelit eligendi tempore', '2018-10-07', '2018-11-03', NULL, 4, '2018-10-07 15:12:36', '2018-10-07 15:12:36');

-- --------------------------------------------------------

--
-- Table structure for table `search_histories`
--

CREATE TABLE `search_histories` (
  `id` int(10) UNSIGNED NOT NULL,
  `item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trainings`
--

CREATE TABLE `trainings` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `posted_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainings`
--

INSERT INTO `trainings` (`id`, `title`, `category`, `body`, `posted_by`, `last_updated_by`, `created_at`, `updated_at`) VALUES
(4, 'wfwew', 'selected', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.', 'emmanuel  angelo mtasiwa', '', '2018-10-05 01:41:32', '2018-10-05 01:41:32'),
(5, 'wfwew', 'selected', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem itaque laborum minima nostrum architecto commodi ratione, quam dolore illo cum molestias fugiat blanditiis est alias repellat eius voluptatibus quisquam. Exercitationem.', 'emmanuel  angelo mtasiwa', '', '2018-10-05 01:43:15', '2018-10-05 01:43:15'),
(6, 'ufugaji', 'investments', 'fuga kuku wengiiiiiiiiiiiiiiiiiiiiiiii', 'emmanuel  angelo mtasiwa', 'emmanuel  angelo mtasiwa', '2018-10-05 02:01:02', '2018-10-05 02:08:09'),
(7, 'Ukulima wa bamia', 'investments', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est enim adipisci laudantium corrupti illum pariatur cumque eius repudiandae, impedit soluta odio placeat rem harum architecto repellat perspiciatis veritatis et maiores!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est enim adipisci laudantium corrupti illum pariatur cumque eius repudiandae, impedit soluta odio placeat rem harum architecto repellat perspiciatis veritatis et maiores!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est enim adipisci laudantium corrupti illum pariatur cumque eius repudiandae, impedit soluta odio placeat rem harum architecto repellat perspiciatis veritatis et maiores!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est enim adipisci laudantium corrupti illum pariatur cumque eius repudiandae, impedit soluta odio placeat rem harum architecto repellat perspiciatis veritatis et maiores!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est enim adipisci laudantium corrupti illum pariatur cumque eius repudiandae, impedit soluta odio placeat rem harum architecto repellat perspiciatis veritatis et maiores!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est enim adipisci laudantium corrupti illum pariatur cumque eius repudiandae, impedit soluta odio placeat rem harum architecto repellat perspiciatis veritatis et maiores!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est enim adipisci laudantium corrupti illum pariatur cumque eius repudiandae, impedit soluta odio placeat rem harum architecto repellat perspiciatis veritatis et maiores!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est enim adipisci laudantium corrupti illum pariatur cumque eius repudiandae, impedit soluta odio placeat rem harum architecto repellat perspiciatis veritatis et maiores!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est enim adipisci laudantium corrupti illum pariatur cumque eius repudiandae, impedit soluta odio placeat rem harum architecto repellat perspiciatis veritatis et maiores!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est enim adipisci laudantium corrupti illum pariatur cumque eius repudiandae, impedit soluta odio placeat rem harum architecto repellat perspiciatis veritatis et maiores!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est enim adipisci laudantium corrupti illum pariatur cumque eius repudiandae, impedit soluta odio placeat rem harum architecto repellat perspiciatis veritatis et maiores!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est enim adipisci laudantium corrupti illum pariatur cumque eius repudiandae, impedit soluta odio placeat rem harum architecto repellat perspiciatis veritatis et maiores!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est enim adipisci laudantium corrupti illum pariatur cumque eius repudiandae, impedit soluta odio placeat rem harum architecto repellat perspiciatis veritatis et maiores!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est enim adipisci laudantium corrupti illum pariatur cumque eius repudiandae, impedit soluta odio placeat rem harum architecto repellat perspiciatis veritatis et maiores!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est enim adipisci laudantium corrupti illum pariatur cumque eius repudiandae, impedit soluta odio placeat rem harum architecto repellat perspiciatis veritatis et maiores!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est enim adipisci laudantium corrupti illum pariatur cumque eius repudiandae, impedit soluta odio placeat rem harum architecto repellat perspiciatis veritatis et maiores!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est enim adipisci laudantium corrupti illum pariatur cumque eius repudiandae, impedit soluta odio placeat rem harum architecto repellat perspiciatis veritatis et maiores!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est enim adipisci laudantium corrupti illum pariatur cumque eius repudiandae, impedit soluta odio placeat rem harum architecto repellat perspiciatis veritatis et maiores!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est enim adipisci laudantium corrupti illum pariatur cumque eius repudiandae, impedit soluta odio placeat rem harum architecto repellat perspiciatis veritatis et maiores!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est enim adipisci laudantium corrupti illum pariatur cumque eius repudiandae, impedit soluta odio placeat rem harum architecto repellat perspiciatis veritatis et maiores!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est enim adipisci laudantium corrupti illum pariatur cumque eius repudiandae, impedit soluta odio placeat rem harum architecto repellat perspiciatis veritatis et maiores!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est enim adipisci laudantium corrupti illum pariatur cumque eius repudiandae, impedit soluta odio placeat rem harum architecto repellat perspiciatis veritatis et maiores!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est enim adipisci laudantium corrupti illum pariatur cumque eius repudiandae, impedit soluta odio placeat rem harum architecto repellat perspiciatis veritatis et maiores!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est enim adipisci laudantium corrupti illum pariatur cumque eius repudiandae, impedit soluta odio placeat rem harum architecto repellat perspiciatis veritatis et maiores!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est enim adipisci laudantium corrupti illum pariatur cumque eius repudiandae, impedit soluta odio placeat rem harum architecto repellat perspiciatis veritatis et maiores!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est enim adipisci laudantium corrupti illum pariatur cumque eius repudiandae, impedit soluta odio placeat rem harum architecto repellat perspiciatis veritatis et maiores!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est enim adipisci laudantium corrupti illum pariatur cumque eius repudiandae, impedit soluta odio placeat rem harum architecto repellat perspiciatis veritatis et maiores!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est enim adipisci laudantium corrupti illum pariatur cumque eius repudiandae, impedit soluta odio placeat rem harum architecto repellat perspiciatis veritatis et maiores!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est enim adipisci laudantium corrupti illum pariatur cumque eius repudiandae, impedit soluta odio placeat rem harum architecto repellat perspiciatis veritatis et maiores!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est enim adipisci laudantium corrupti illum pariatur cumque eius repudiandae, impedit soluta odio placeat rem harum architecto repellat perspiciatis veritatis et maiores!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est enim adipisci laudantium corrupti illum pariatur cumque eius repudiandae, impedit soluta odio placeat rem harum architecto repellat perspiciatis veritatis et maiores!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est enim adipisci laudantium corrupti illum pariatur cumque eius repudiandae, impedit soluta odio placeat rem harum architecto repellat perspiciatis veritatis et maiores!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est enim adipisci laudantium corrupti illum pariatur cumque eius repudiandae, impedit soluta odio placeat rem harum architecto repellat perspiciatis veritatis et maiores!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est enim adipisci laudantium corrupti illum pariatur cumque eius repudiandae, impedit soluta odio placeat rem harum architecto repellat perspiciatis veritatis et maiores!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est enim adipisci laudantium corrupti illum pariatur cumque eius repudiandae, impedit soluta odio placeat rem harum architecto repellat perspiciatis veritatis et maiores!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est enim adipisci laudantium corrupti illum pariatur cumque eius repudiandae, impedit soluta odio placeat rem harum architecto repellat perspiciatis veritatis et maiores!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est enim adipisci laudantium corrupti illum pariatur cumque eius repudiandae, impedit soluta odio placeat rem harum architecto repellat perspiciatis veritatis et maiores!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est enim adipisci laudantium corrupti illum pariatur cumque eius repudiandae, impedit soluta odio placeat rem harum architecto repellat perspiciatis veritatis et maiores!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est enim adipisci laudantium corrupti illum pariatur cumque eius repudiandae, impedit soluta odio placeat rem harum architecto repellat perspiciatis veritatis et maiores!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est enim adipisci laudantium corrupti illum pariatur cumque eius repudiandae, impedit soluta odio placeat rem harum architecto repellat perspiciatis veritatis et maiores!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est enim adipisci laudantium corrupti illum pariatur cumque eius repudiandae, impedit soluta odio placeat rem harum architecto repellat perspiciatis veritatis et maiores!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est enim adipisci laudantium corrupti illum pariatur cumque eius repudiandae, impedit soluta odio placeat rem harum architecto repellat perspiciatis veritatis et maiores!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est enim adipisci laudantium corrupti illum pariatur cumque eius repudiandae, impedit soluta odio placeat rem harum architecto repellat perspiciatis veritatis et maiores!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est enim adipisci laudantium corrupti illum pariatur cumque eius repudiandae, impedit soluta odio placeat rem harum architecto repellat perspiciatis veritatis et maiores!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est enim adipisci laudantium corrupti illum pariatur cumque eius repudiandae, impedit soluta odio placeat rem harum architecto repellat perspiciatis veritatis et maiores!', 'emmanuel  angelo mtasiwa', 'emmanuel  angelo mtasiwa', '2018-10-07 07:29:57', '2018-10-07 07:59:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'emmanuel  angelo mtasiwa', 'aemmanuel199@gmail.com', NULL, '$2y$10$tOpSNdCdBmqsOtaHBSU20.GcWhVKDCtwXn257Qn9vuPaQIW6MySoW', 'JfHsqhGicaPjKABv4AqNUY30Y9S8zp9s6dEmsv8bScKHIq9teykf2xhrDk0W', '2018-09-21 20:13:32', '2018-09-21 20:13:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advices`
--
ALTER TABLE `advices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `advices_user_id_foreign` (`user_id`);

--
-- Indexes for table `businesses`
--
ALTER TABLE `businesses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `debtors`
--
ALTER TABLE `debtors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `debtors_user_id_foreign` (`user_id`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `search_histories`
--
ALTER TABLE `search_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainings`
--
ALTER TABLE `trainings`
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
-- AUTO_INCREMENT for table `advices`
--
ALTER TABLE `advices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `businesses`
--
ALTER TABLE `businesses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `debtors`
--
ALTER TABLE `debtors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `search_histories`
--
ALTER TABLE `search_histories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `trainings`
--
ALTER TABLE `trainings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `advices`
--
ALTER TABLE `advices`
  ADD CONSTRAINT `advices_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `debtors`
--
ALTER TABLE `debtors`
  ADD CONSTRAINT `debtors_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
