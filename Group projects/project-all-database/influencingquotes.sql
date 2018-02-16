-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2018 at 12:04 PM
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
-- Database: `influencingquotes`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_bio` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `author_name`, `author_bio`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Georgia O\'Keeffe', 'Georgia O\'Keeffe Quotes', 1, '2018-02-04 22:32:04', '2018-02-04 22:32:04'),
(2, 'Oscar Wilde', 'Oscar Wilde Quotes', 1, '2018-02-04 22:32:21', '2018-02-04 22:32:21'),
(3, 'Yogi Berra', 'Yogi Berra Quotes', 1, '2018-02-04 22:32:36', '2018-02-04 22:32:36'),
(4, 'Nancy Pelosi', 'Nancy Pelosi Quotes', 1, '2018-02-04 22:32:59', '2018-02-04 22:32:59'),
(5, 'Maria Montessori', 'Maria Montessori Quotes', 1, '2018-02-04 22:33:13', '2018-02-04 22:33:13'),
(6, 'Margaret Thatcher', 'Margaret Thatcher Quotes', 1, '2018-02-04 22:33:24', '2018-02-04 22:33:24'),
(7, 'Adam Smith', 'Adam Smith Quotes', 1, '2018-02-04 22:33:39', '2018-02-04 22:33:39'),
(8, 'Alan Watts', 'Alan Watts Quotes', 1, '2018-02-04 22:33:52', '2018-02-04 22:33:52'),
(9, 'Albert Camus', 'Albert Camus Quotes', 1, '2018-02-04 22:34:13', '2018-02-04 22:34:13'),
(10, 'Harry S Truman', 'Harry S Truman Quotes', 1, '2018-02-04 22:34:25', '2018-02-04 22:34:25'),
(11, 'Henry Rollins', 'Henry Rollins Quotes', 1, '2018-02-04 22:34:59', '2018-02-04 22:34:59'),
(12, 'Immanuel Kant', 'Immanuel Kant Quotes', 1, '2018-02-04 22:35:09', '2018-02-04 22:35:09'),
(13, 'Isaac Newton', 'Isaac Newton Quotes', 1, '2018-02-04 22:35:19', '2018-02-04 22:35:19'),
(14, 'Pablo Picasso', 'Pablo Picasso Quotes', 1, '2018-02-04 22:35:29', '2018-02-04 22:35:29'),
(15, 'Paulo Coelho', 'Paulo Coelho Quotes', 1, '2018-02-04 22:35:38', '2018-02-04 22:35:38'),
(16, 'Richard Bach', 'Richard Bach Quotes', 1, '2018-02-04 22:35:48', '2018-02-04 22:35:48'),
(17, 'Richard Dawkins', 'Richard Dawkins Quotes', 1, '2018-02-04 22:36:21', '2018-02-04 22:36:21'),
(18, 'Robin Williams', 'Robin Williams Quotes', 1, '2018-02-04 22:36:32', '2018-02-04 22:36:32'),
(19, 'Jimi Hendrix', 'Jimi Hendrix Quotes', 1, '2018-02-04 22:36:41', '2018-02-04 22:36:41'),
(20, 'Jim Morrison', 'Jim Morrison Quotes', 1, '2018-02-04 22:36:52', '2018-02-04 22:36:52'),
(21, 'Bob Marley', 'Bob Marley Quotes', 1, '2018-02-04 22:37:03', '2018-02-04 22:37:03'),
(22, 'Benjamin Franklin', 'Benjamin Franklin Quotes', 1, '2018-02-04 22:37:13', '2018-02-04 22:37:13'),
(23, 'Carol Burnett', 'Carol Burnett Quotes', 1, '2018-02-04 22:37:22', '2018-02-04 22:37:22'),
(24, 'Johnny Depp', 'Johnny Depp Quotes', 1, '2018-02-04 22:37:31', '2018-02-04 22:37:31'),
(25, 'Kevin Gates', 'Kevin Gates Quotes', 1, '2018-02-04 22:37:40', '2018-02-04 22:37:40'),
(26, 'Lord Byron', 'Lord Byron', 1, '2018-02-04 22:37:50', '2018-02-04 22:37:50'),
(27, 'Emily Dickinson', 'Emily Dickinson Quotes', 1, '2018-02-04 22:38:00', '2018-02-04 22:38:00'),
(28, 'Elie Wiesel', 'Elie Wiesel Quotes', 1, '2018-02-04 22:38:13', '2018-02-04 22:38:13'),
(29, 'Audrey Hepburn', 'Audrey Hepburn Quotes', 1, '2018-02-04 22:53:49', '2018-02-04 22:53:49'),
(30, 'Jenn Proske', 'Jenn Proske Quotes', 1, '2018-02-04 23:11:26', '2018-02-04 23:11:26'),
(31, 'Soren Kierkegaard', 'Soren Kierkegaard Quotes', 1, '2018-02-04 23:14:06', '2018-02-04 23:14:06'),
(32, 'Ken Kesey', 'Ken Kesey Quotes', 1, '2018-02-04 23:26:50', '2018-02-04 23:26:50'),
(33, 'Habibur Rahman Sir', 'Habibur Rahman Sir Bio', 1, '2018-02-14 03:33:16', '2018-02-14 03:33:16');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `quote_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `quote_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `quote_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `author_id`, `quote_title`, `quote_description`, `quote_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 23, 28, 'When a person doesn\'t have gratitude', 'When a person doesn\'t have gratitude, something is missing in his or her humanity.', 'quote-images/elie.png', 1, '2018-02-04 22:50:54', '2018-02-14 03:34:37'),
(2, 1, 23, 'Only I can change my life', 'Only I can change my life. No one can do it for me.', 'quote-images/no-one-can-change.png', 1, '2018-02-04 22:52:48', '2018-02-04 22:52:48'),
(3, 24, 29, 'I am Possible', 'Nothing is impossible, the word itself says \'I\'m possible\'!', 'quote-images/i-am-possible-quotes.png', 1, '2018-02-04 22:55:26', '2018-02-04 22:55:26'),
(4, 15, 1, 'I decided that if I could paint', 'I decided that if I could paint that flower in a huge scale, you could not ignore its beauty.', 'quote-images/nature-beautiful-hd-wallpaper.jpg', 1, '2018-02-04 23:01:47', '2018-02-04 23:01:47'),
(5, 25, 6, 'I love argument', 'I love argument, I love debate. I don\'t expect anyone just to sit there and agree with me, that\'s not their job.', 'quote-images/argument.jpg', 1, '2018-02-04 23:10:24', '2018-02-04 23:10:24'),
(6, 5, 30, 'It is important to stay positive because', 'Love yourself. It is important to stay positive because beauty comes from the inside out.', 'quote-images/love_yourself.jpg', 1, '2018-02-04 23:18:38', '2018-02-04 23:18:38'),
(7, 5, 31, 'Don\'t Forget', 'Don\'t Forget To Love Yourself', 'quote-images/love-yourself.png', 1, '2018-02-04 23:19:24', '2018-02-04 23:19:24'),
(8, 19, 22, 'You may delay', 'You may delay, but time will not.', 'quote-images/you-may-delay.jpg', 1, '2018-02-04 23:24:27', '2018-02-04 23:24:27'),
(9, 5, 32, 'You can\'t use it in the past tense', 'Loved. You can\'t use it in the past tense. Death does not stop that love at all.', 'quote-images/loved.jpg', 1, '2018-02-04 23:31:45', '2018-02-04 23:31:45'),
(10, 4, 3, 'Presentation', 'Birtm Presentation', 'quote-images/ntpc-power-plant-india-fb-wb_0.jpg', 1, '2018-02-14 03:34:23', '2018-02-14 03:34:23');

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
(1, 'Inspirational', 'Get Inspirational Quotes at Influencing Quotes.', 1, '2018-02-04 22:16:00', '2018-02-14 03:31:49'),
(2, 'Veterans Day', 'Get Veterans Day Quotes at Influencing Quotes.', 1, '2018-02-04 22:16:40', '2018-02-04 22:16:40'),
(3, 'Valentine\'s Day', 'Get Valentine\'s Day Quotes Daily on Inspirational Quotes.', 1, '2018-02-04 22:17:06', '2018-02-04 22:17:06'),
(4, 'Positive', 'Read Positive Quotes and Keep yourself fresh everyday.', 1, '2018-02-04 22:17:42', '2018-02-04 22:17:42'),
(5, 'Love', 'Love means knowing that no matter what, you have someone to count on. It\'s unconditional and makes you feel good on the inside. Get Love Quotes everyday at Influencing Quotes.', 1, '2018-02-04 22:18:56', '2018-02-04 22:18:56'),
(6, 'Happiness', 'Happiness means the state of being happy. Read Influencing Quote\'s Happiness Quotes daily and stay happy.', 1, '2018-02-04 22:19:54', '2018-02-04 22:19:54'),
(7, 'Friendship', 'Friendship is a relationship of mutual affection between people. Friendship is a stronger form of interpersonal bond than an association.', 1, '2018-02-04 22:20:49', '2018-02-04 22:20:49'),
(8, 'Travel', 'Travel Quotes Daily.', 1, '2018-02-04 22:21:35', '2018-02-04 22:21:35'),
(9, 'Knowledge', 'Knowledge is defined as what is learned, understood or aware of.', 1, '2018-02-04 22:22:25', '2018-02-04 22:22:25'),
(10, 'Life', 'Get life quotes simultaneously only at Inspirational Quotes.', 1, '2018-02-04 22:23:39', '2018-02-04 22:23:39'),
(11, 'Fitness', 'The condition of being physically fit and healthy.', 1, '2018-02-04 22:24:20', '2018-02-04 22:24:20'),
(12, 'Famous', 'Famous Quotes', 1, '2018-02-04 22:24:33', '2018-02-04 22:24:33'),
(13, 'Failure', 'Read Failure Quotes Daily. These will inspire you to bring success.', 1, '2018-02-04 22:25:32', '2018-02-04 22:25:32'),
(14, 'Wedding', 'Wedding Quotes', 1, '2018-02-04 22:25:51', '2018-02-04 22:25:51'),
(15, 'Nature', 'Nature Quotes', 1, '2018-02-04 22:26:03', '2018-02-04 22:26:03'),
(16, 'Business', 'Business Quotes', 1, '2018-02-04 22:26:26', '2018-02-04 22:26:26'),
(17, 'Dreams', 'A dream doesn\'t become reality through magic; it takes sweat, determination and hard work.', 1, '2018-02-04 22:27:20', '2018-02-04 22:27:20'),
(18, 'Intelligence', 'Intelligence Quotes', 1, '2018-02-04 22:27:43', '2018-02-04 22:27:43'),
(19, 'Truth', 'Truth Quotes', 1, '2018-02-04 22:28:04', '2018-02-04 22:28:04'),
(20, 'New Year\'s', 'New Year\'s Quote', 1, '2018-02-04 22:28:39', '2018-02-04 22:28:39'),
(21, 'Race', 'Race Quotes of Different Authors.', 1, '2018-02-04 22:38:58', '2018-02-04 22:38:58'),
(22, 'Moving On', 'Moving On Quotes Daily at Inspirational Quotes.', 1, '2018-02-04 22:39:24', '2018-02-04 22:39:24'),
(23, 'Thankful', 'Thankful Quotes', 1, '2018-02-04 22:39:45', '2018-02-04 22:39:45'),
(24, 'Motivational', 'Motivational Quotes', 1, '2018-02-04 22:55:03', '2018-02-04 22:55:03'),
(25, 'Argument', 'Argument Quotes', 1, '2018-02-04 23:03:15', '2018-02-04 23:03:15'),
(26, 'Bitm', 'Bitm Description', 1, '2018-02-14 03:32:09', '2018-02-14 03:32:09');

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
(3, '2018_01_31_205354_create_categories_table', 2),
(4, '2018_01_31_210503_create_authors_table', 3),
(5, '2018_02_01_171254_create_quotes_table', 4),
(6, '2018_02_01_180341_create_quotes_table', 5),
(7, '2018_02_01_192558_create_blogs_table', 6);

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
(1, 'Maruf Abdullah', 'marufcsediu@gmail.com', '$2y$10$g.gcxue0VxP2bi/AEjDQvu7EmwMw0TLMeNJemTKeoQUWNKq3RqP0.', 'R2fU0Bk6wmBEqPE5RD6fmvGVagCpFS0CeMtWAUJWt8MhpxFIMq73fCYTvv3G', '2018-01-31 11:59:21', '2018-01-31 11:59:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
