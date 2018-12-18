-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2018 at 07:55 AM
-- Server version: 5.7.14
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmachinery`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `companyname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` int(11) NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `companyname`, `location`, `email`, `telephone`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'gavtechsolutions', 'Nairobi', 'info@gavtechsolutions.com', 728370802, '$2y$10$OD38WIoaoGJMgePzJjc3iO38GMy.y6Bfo1spYYR/QTgA8PlD6AfMi', '6AwhU0LgiJyQkZbsHr6KLMm0ZlFduX3GIlg9w27tXVIlqEpwpOOGV8HrGr08', '2018-08-13 04:19:18', '2018-08-13 04:19:18'),
(2, 'kcc', 'Nairobi', 'kcc@gmail.com', 722670208, '$2y$10$DEAzMec4DRQh/0CC7.bcxeVrpA9XQXOVS5IRTIxF6gWdgljM9LjWa', 'A5pq1bJxlqFOVWQIs9M13h621VJ7MclCg2rOgLOcBKekOyV7ejgBJe8w5avG', '2018-08-13 04:47:49', '2018-08-13 04:47:49'),
(3, 'coderoot', 'Kiambu', 'ibochas@gmail.com', 72837080, '$2y$10$iRzxph/3H/Khi9A6AXeT7eSF2zx6C0zxmMoiqggyYBbtz70f1d3D6', 'ZLVtlbQj7kRZYi12Ay0wHuKZWR3oMe5rNtLhng0SPCKlSmcldLPH1pemYw8V', '2018-08-29 18:32:48', '2018-08-29 18:32:48');

-- --------------------------------------------------------

--
-- Table structure for table `company_password_resets`
--

CREATE TABLE `company_password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `location`, `phone`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'samuel kibocha', 'kibochas@gmail.com', 'Nairobi', '0728370802', '$2y$10$PZhwquBsV4mRPVhHSnmvNeQ33lzVKyPUiDBOLDz7yvz9cN0Mmttje', 'O3LXKlAzipce4c47GIoWx6BHhbd5hsqe0dtbtKwa0UGWa12HmojPk4OdGDbA', '2018-08-18 07:51:55', '2018-08-18 07:51:55');

-- --------------------------------------------------------

--
-- Table structure for table `customer_password_resets`
--

CREATE TABLE `customer_password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `title`, `model`, `image`, `company_id`, `created_at`, `updated_at`) VALUES
(4, 'compactors', '3489', 'CM20180618-58323-54462_1535297995.jpg', 1, '2018-08-26 12:39:55', '2018-08-26 12:39:55'),
(5, 'Excavator', '3353', 'Excavator-C835883_1534103065_1535360128.jpg', 1, '2018-08-27 05:55:29', '2018-08-27 05:55:29'),
(6, 'scrapers', '3246', 'scrapers_1534102025_1535532668.jpg', 1, '2018-08-29 05:51:08', '2018-08-29 05:51:08'),
(7, 'scrappers', '901', 'Excavator-C835883_1534103065_1535533784.jpg', 1, '2018-08-29 06:09:44', '2018-08-29 06:09:44'),
(8, 'Excavator', '432', 'scrapers_1534102025_1535579208.jpg', 3, '2018-08-29 18:46:48', '2018-08-29 18:46:48');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_07_14_205214_create_companies_table', 1),
(4, '2018_07_14_205215_create_company_password_resets_table', 1),
(12, '2018_07_27_201021_create_posts_table', 4),
(10, '2018_07_27_200614_create_items_table', 3),
(7, '2018_07_29_135917_create_customers_table', 1),
(8, '2018_07_29_135918_create_customer_password_resets_table', 1),
(16, '2018_08_20_121647_create_requestings_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `item_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `statuspost` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `item_id`, `price`, `company_id`, `description`, `statuspost`, `created_at`, `updated_at`) VALUES
(6, 4, 67000, 1, 'red roof', 'hired', '2018-08-29 05:52:07', '2018-08-30 02:32:31'),
(11, 4, 6700, 1, 'yellow roof', 'not-hired', '2018-08-30 01:46:02', '2018-08-30 01:46:02'),
(8, 7, 60000, 1, 'strong', 'hired', '2018-08-29 06:10:48', '2018-08-29 13:02:17'),
(9, 8, 6000, 3, 'good', 'not-hired', '2018-08-29 18:48:17', '2018-08-29 18:48:17'),
(10, 4, 2000, 1, 'old but in good condition', 'not-hired', '2018-08-30 01:39:02', '2018-08-30 01:39:02');

-- --------------------------------------------------------

--
-- Table structure for table `requestings`
--

CREATE TABLE `requestings` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `companyname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reason` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `days` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `requestings`
--

INSERT INTO `requestings` (`id`, `post_id`, `customer_id`, `item_id`, `companyname`, `title`, `quantity`, `description`, `price`, `image`, `status`, `reason`, `days`, `created_at`, `updated_at`) VALUES
(4, 10, 1, 4, 'gavtechsolutions', 'compactors', '5', 'old but in good condition', '2000', 'CM20180618-58323-54462_1535297995.jpg', 'pending', '', '10', '2018-09-17 04:23:37', '2018-09-17 04:23:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `companies_email_unique` (`email`);

--
-- Indexes for table `company_password_resets`
--
ALTER TABLE `company_password_resets`
  ADD KEY `company_password_resets_email_index` (`email`),
  ADD KEY `company_password_resets_token_index` (`token`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `customer_password_resets`
--
ALTER TABLE `customer_password_resets`
  ADD KEY `customer_password_resets_email_index` (`email`),
  ADD KEY `customer_password_resets_token_index` (`token`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requestings`
--
ALTER TABLE `requestings`
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
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `requestings`
--
ALTER TABLE `requestings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
