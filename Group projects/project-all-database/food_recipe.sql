-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2018 at 12:03 PM
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
-- Database: `food_recipe`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `long_description` text COLLATE utf8mb4_unicode_ci,
  `about_image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `heading`, `title`, `short_description`, `long_description`, `about_image`, `created_at`, `updated_at`) VALUES
(1, 'About food item', 'About Our History', '<h3><span style=\"color: #696969; font-family: \'Open Sans\', sans-serif; letter-spacing: 0.5px; text-transform: capitalize;\">We Make Tasty Food,The Best Grills And Drinks.&nbsp;</span></h3>\r\n<p>&nbsp;</p>\r\n<h3><span style=\"color: #696969; font-family: \'Open Sans\', sans-serif; letter-spacing: 0.5px; text-transform: capitalize;\">We Make Tasty Food,The Best Grills And Drinks.&nbsp;</span></h3>', '<p class=\"text\" style=\"box-sizing: border-box; margin: 0px 0px 40px; padding: 0px;\"><span style=\"color: #4b4f56;\"><span style=\"color: #696969; font-family: \'Open Sans\', sans-serif; letter-spacing: 0.5px; text-transform: capitalize;\">We Make Tasty Food,The Best Grills And Drinks.</span></span></p>\r\n<p class=\"text\" style=\"box-sizing: border-box; margin: 0px 0px 40px; padding: 0px;\"><span style=\"color: #4b4f56;\">We pride ourselves on offering fresh and quality food inspired by cuisines from all around the world.</span></p>\r\n<p style=\"box-sizing: border-box; margin: 1em 0px 0px; text-transform: capitalize; color: #696969; line-height: 26px; letter-spacing: 0.5px; font-family: \'Open Sans\', sans-serif;\">.</p>', 'food-image/about.jpg', NULL, '2018-02-14 03:20:08');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'SOUP', 'vegetable soup, corn soup, thai thik or others.', 1, '2018-02-08 09:27:58', '2018-02-09 05:22:50'),
(2, 'BEEF', 'Beef meet ball, beef chilli, roasted garlic beef etc.', 1, '2018-02-08 09:29:29', '2018-02-09 05:24:19'),
(3, 'CHICKEN', 'Chicken chilli, masala chicken and more item.', 1, '2018-02-08 09:29:44', '2018-02-09 05:25:39'),
(4, 'VEGETABLE', 'Select from Seven item of vegetable category.', 1, '2018-02-08 09:29:59', '2018-02-09 05:21:35'),
(5, 'Fish', 'You can choose from variable type of fish recipe', 1, '2018-02-08 09:30:14', '2018-02-09 14:31:57'),
(7, 'BBQ', 'Three types BBQ item - Beef, Coral and Pomfret.', 1, '2018-02-09 05:16:33', '2018-02-09 05:16:33');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `phone1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `address`, `phone1`, `phone2`, `email`, `created_at`, `updated_at`) VALUES
(1, '<p>Kawran Bazar ,Dhaka</p>', '01765061564', '+12 222 333 2365', 'satyajit@gmail.com', NULL, '2018-02-14 03:16:53');

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `food_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `food_price` double(10,2) DEFAULT NULL,
  `food_quantity` int(11) DEFAULT NULL,
  `food_description` text COLLATE utf8mb4_unicode_ci,
  `food_image` text COLLATE utf8mb4_unicode_ci,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `category_id`, `food_name`, `food_price`, `food_quantity`, `food_description`, `food_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 4, 'Bread Egg', 200.00, 1, 'egg, bread, tomato and more.', 'food-image/gallery1.jpg', 1, '2018-02-08 09:36:02', '2018-02-09 13:28:37'),
(2, 2, 'Burger', 200.00, 1, 'Beef burger serves with salad, sauce.', 'food-image/blog2.jpg', 1, '2018-02-08 09:37:18', '2018-02-09 13:36:05'),
(3, 7, 'Pasta', 400.00, 2, 'two plates pasta only 400 taka.', 'food-image/sp4.jpg', 1, '2018-02-08 09:37:58', '2018-02-09 13:39:02'),
(4, 1, 'Veg Soup', 100.00, 2, 'vegetable soup for healthy life', 'food-image/post4.jpg', 1, '2018-02-08 09:38:56', '2018-02-09 14:30:54'),
(5, 7, 'Butter', 100.00, 1, 'take butter in low price', 'food-image/gallery3.jpg', 1, '2018-02-08 09:40:47', '2018-02-09 14:34:44'),
(7, 3, 'Masala chicken', 300.00, 1, 'gravy chicken, masala fried serves with fried rice', 'food-image/gallery9.jpg', 1, '2018-02-08 09:43:53', '2018-02-09 14:12:17'),
(9, 3, 'Eggs Benedict', 100.00, 2, 'egg, tamatoo and others', 'food-image/post2.jpg', 1, '2018-02-08 09:46:27', '2018-02-09 14:29:21'),
(10, 2, 'Beef butter masala', 500.00, 1, 'serves with plain naan and salad', 'food-image/dinner.jpg', 1, '2018-02-08 09:47:22', '2018-02-09 14:37:13'),
(11, 4, 'bread and coffee', 200.00, 2, 'bread, coffee ,vegetables for breakfast', 'food-image/gallery7.jpg', 1, '2018-02-08 09:49:21', '2018-02-09 14:19:40'),
(13, 5, 'Coral', 800.00, 2, 'Two pices coral only 800 taka. Get it now and enjoy test!', 'food-image/coral.jpg', 1, '2018-02-09 13:08:48', '2018-02-09 17:07:02'),
(14, 3, 'Chicken chilli', 290.00, 1, 'with mushroom, julian cut chicken, gravy serves with fried rice', 'food-image/chi.jpg', 1, '2018-02-09 13:19:33', '2018-02-09 17:06:00'),
(16, 3, 'Deviled egg', 150.00, 5, '<p>serve with egg, salad, vegetables</p>', 'food-image/gallery2.jpg', 1, '2018-02-09 17:00:46', '2018-02-09 17:00:46');

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
(3, '2018_02_06_134415_create_categories_table', 1),
(4, '2018_02_06_173842_create_foods_table', 1),
(5, '2018_02_08_043200_create_abouts_table', 1),
(6, '2018_02_08_111204_create_services_table', 1),
(7, '2018_02_08_121214_create_contacts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `service_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_description` text COLLATE utf8mb4_unicode_ci,
  `publication_status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `service_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Breakfast', 'Choose deviled egg or bread egg or others.', 1, '2018-02-08 09:31:12', '2018-02-09 16:05:34'),
(2, 'Drinks', 'Take coffee or several type of juice or lassi .', 1, '2018-02-08 09:32:10', '2018-02-09 15:36:41'),
(3, 'Starters recipes', 'We offers chicken chilli, beef butter masala with lowest price.', 1, '2018-02-08 09:32:14', '2018-02-09 15:38:08'),
(4, 'Soup recipes', 'Take vegetable soup for healthy life and enjoy your life.', 1, '2018-02-08 09:32:17', '2018-02-09 15:39:01'),
(5, 'Dinner Food', 'Beef butter masala, masala chicken or pasta and more.', 1, '2018-02-08 09:32:20', '2018-02-09 15:40:16'),
(6, 'Coffee', 'Take cold coffee or hot coffee with your friends and enjoy time.', 1, '2018-02-08 09:32:23', '2018-02-09 15:41:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Satyajit', 'admin@admin.com', '$2y$10$Z8SJID3nJnZtNhnYbibKzumIxaOGJ.aun5q6jprroK0MIGHulJS8C', NULL, '2018-02-08 09:12:08', '2018-02-08 09:12:08'),
(2, 'Jamal Uddin', 'jamal@mail.com', '$2y$10$L1K7ZQJqL8FCAIKq.WiMJuPVFKSUhrPOGCz5F7VZW2ZVMVorXstKe', 'rH9pgtBL5wlLLQMVxK1wOidMGUGprcnVOn1xBE2zjmM8LQz7ZUBw46AxLFvX', '2018-02-08 12:11:09', '2018-02-08 12:11:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
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
-- Indexes for table `services`
--
ALTER TABLE `services`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
