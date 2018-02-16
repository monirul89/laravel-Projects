-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2018 at 12:06 PM
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
-- Database: `amar_news`
--

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
(1, 'Bangladesh', 'National newspapers in Bangladesh', 1, '2018-02-13 16:35:08', '2018-02-13 16:35:08'),
(2, 'World', 'World News: 24/7 Breaking News from world leading', 1, '2018-02-13 16:35:45', '2018-02-13 16:35:45'),
(3, 'Sports', 'Sports news in world', 1, '2018-02-13 16:36:11', '2018-02-13 16:36:11'),
(4, 'Health', 'Health news in world', 1, '2018-02-13 16:36:32', '2018-02-13 16:36:32'),
(5, 'Technology', 'Technology news in world', 1, '2018-02-13 16:38:13', '2018-02-13 16:38:13'),
(6, 'Live Cricket Score', 'World Live Cricket Score', 1, '2018-02-13 16:38:44', '2018-02-13 16:38:44'),
(7, 'Economy', 'PM seeks IFAD support for rural economy', 1, '2018-02-13 16:44:50', '2018-02-13 16:44:50');

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
(3, '2018_02_09_194709_create_categories_table', 2),
(4, '2018_02_09_204259_create_sub_categories_table', 3),
(5, '2018_02_10_052146_create_sub_categories_table', 4),
(6, '2018_02_11_213014_create_news_table', 5),
(7, '2018_02_11_215838_create_news_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `sub_category_id` int(11) DEFAULT NULL,
  `news_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `long_description` text COLLATE utf8mb4_unicode_ci,
  `news_image` text COLLATE utf8mb4_unicode_ci,
  `publication_status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `category_id`, `sub_category_id`, `news_title`, `short_description`, `long_description`, `news_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 'Donors lose interest in Rohingyas: WFP', 'WFP Executive Director David Beasley has said donor agencies are gradually losing their interest in providing food assistance for the displaced Rohingyas in Bangladesh.', '<h2>World Food Programme Executive Director David Beasley has said donor agencies are gradually losing their interest in providing food assistance for the displaced Rohingyas in Bangladesh.</h2>\r\n\r\n<p>He made the comment during a meeting with Prime Minister Sheikh Hasina at her hotel suite on Monday evening (local time).</p>', 'news-images/pm_sheikh_hasina_10.jpg', 0, '2018-02-13 17:12:12', '2018-02-14 03:44:43'),
(2, 1, 3, 'Khaleda not shown held in any other case', 'Home Minister Asaduzzaman Khan Kamal yesterday categorically said BNP Chairperson Khaleda Zia landed in jail following the verdict in the Zia Orphanage..', '<p>Home Minister Asaduzzaman Khan Kamal yesterday categorically said BNP Chairperson Khaleda Zia landed in jail following the verdict in the Zia Orphanage Trust graft case and she was not shown arrested in any other cases.</p>\r\n\r\n<p>&quot;Confusion is being created over the matter,&rdquo; he said while talking to reporters at his Secretariat office.</p>', 'news-images/home_minister_kamsl.jpg', 1, '2018-02-13 17:15:33', '2018-02-13 17:15:33'),
(3, 1, 5, 'Sonali Bank: SC clears way for recruiting 2,201 officers', 'The Supreme Court has cleared the way for Sonali Bank to resume the process of recruiting manpower to 2,201 posts of senior officer, officer and cash officer.', '<p>The Supreme Court has cleared the way for Sonali Bank to resume the process of recruiting manpower to 2,201 posts of senior officer, officer and cash officer.</p>\r\n\r\n<p>The apex court yesterday lifted its earlier order that had directed the bank to maintain status quo on the recruitment.</p>\r\n\r\n<p>The four-member bench of the SC&#39;s Appellate Division headed by Chief Justice Syed Mahmud Hossain passed the order, dismissing five separate leave-to- appeal petitions filed by the job seekers against the High Court verdict on the issue.</p>', 'news-images/supreme_court_0_5.jpg', 1, '2018-02-13 17:20:43', '2018-02-14 02:35:21'),
(4, 1, 6, 'Checking SSC Question Leaks: Nothing seems to be working', 'The MCQs of Physics got leaked out as well. And like on the previous eight SSC exam mornings since February 1, the leaked questions..', '<p>The MCQs of Physics got leaked out as well. And like on the previous eight SSC exam mornings since February 1, the leaked questions were circulated on social media hours before the test began.</p>\r\n\r\n<p>Images of &quot;Ga&quot; set of the multiple choice questions along with answers were available in Facebook groups by 9:00am yesterday.</p>\r\n\r\n<p>Examinees cover their faces as photojournalists take their photos after an SSC examination at Bangladesh Mohila Samity High School and College centre in Chittagong city&#39;s Dampara area yesterday. A magistrate had found candidates with a set of MCQs on their mobile phones and tabs in a bus near the centre before the examination. After the physics exam was over, the authorities expelled 24 candidates as the questions matched with the original ones. Photo: Star</p>', 'news-images/ssc_examination.jpg', 1, '2018-02-13 17:25:32', '2018-02-13 17:25:32'),
(5, 1, 7, 'Bathed in colours of spring', 'The lively campus of Dhaka University becomes livelier in February during the Amar Ekushey Granthamela. It lit up with colours yesterday when the first day of Bangla month Falgun met February.', '<p>The lively campus of Dhaka University becomes livelier in February during the Amar Ekushey Granthamela. It lit up with colours yesterday when the first day of Bangla month Falgun met February.</p>\r\n\r\n<p>People, especially women, adorned with flower tiaras and bright-coloured outfits, gathered at the Charukala Institute premises on the campus in the morning to usher in &ldquo;Ritu Raj&rdquo; spring -- the season of flowers.</p>\r\n\r\n<p>Wearing a flower tiara on Pahela Falgun, the first day of spring, a woman checks out books at a stall at the &quot;Amar Ekushey Granthamela&quot;. The photo was taken from Suhrawardy Udyan yesterday. Photo: Prabir Das</p>', 'news-images/pahela_falgun_2.jpg', 1, '2018-02-13 17:30:09', '2018-02-13 17:30:09'),
(6, 2, 3, 'What Kim Jong-un\'s new photo tells us about North Korea', 'In a report on Tuesday, North Korea\'s state media indicated that leader Kim Jong-un was delighted with the outcome of his country\'s attendance at the Winter Olympics.', '<p>In a report on Tuesday, North Korea&#39;s state media indicated that leader Kim Jong-un was delighted with the outcome of his country&#39;s attendance at the Winter Olympics.</p>\r\n\r\n<p>Accompanying the report was an unusually relaxed picture of Mr Kim with his sister and the head of state. As analyst Michael Madden explains, a lot can be read into such pictures from the secretive state.</p>\r\n\r\n<p>As far as Kim Jong-un&#39;s commemorative photo sessions go, this projects a fairly relaxed image of top officials.</p>', 'news-images/_100007302_mm00264477.jpg', 1, '2018-02-13 17:38:07', '2018-02-13 17:38:07'),
(7, 1, 7, 'abc', 'abckdekljkj', '<p>jdfjkdfjfsk dkfjkfd</p>', 'news-images/download.jpg', 1, '2018-02-14 04:43:53', '2018-02-14 04:43:53');

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
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `sub_category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `sub_category_name`, `sub_category_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Cricket', 'Cricket is a bat-and-ball game played between two teams of eleven players each on a cricket field', 1, '2018-02-13 16:57:30', '2018-02-13 16:57:30'),
(2, 'Football', 'Football is a family of team sports that involve, to varying degrees, kicking a ball with a foot to score a goal.', 1, '2018-02-13 16:58:39', '2018-02-13 16:58:39'),
(3, 'Politics', 'Politics is the process of making decisions that apply to members of a group.', 1, '2018-02-13 17:00:16', '2018-02-14 02:35:11'),
(4, 'Tennis', 'Tennis is a racket sport that can be played individually against a single opponent or between two teams of two players each.', 1, '2018-02-13 17:02:05', '2018-02-13 17:02:05'),
(5, 'Law', 'Law is a system of rules that are created and enforced through social or governmental institutions to regulate behavior.', 1, '2018-02-13 17:04:05', '2018-02-13 17:04:05'),
(6, 'Education', 'Education is the process of facilitating learning, or the acquisition of knowledge, skills, values, beliefs, and habits. Educational methods include storytelling, discussion, teaching, training, and directed research.', 1, '2018-02-13 17:23:00', '2018-02-13 17:23:00'),
(7, 'Others', 'Others news in bangladesh', 1, '2018-02-13 17:29:01', '2018-02-13 17:29:01');

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
(1, 'habib', 'an.admin@gmail.com', '$2y$10$GoxphyC1nLCZAu3IuT287.VBKD2cjs0sfeDMolXOe/N8i9mHGl/52', 'VjpTNAE6Avf32ypJPgSQFVNsqzU3jnabdMeZoROdk6S2s7W1f269EsQh643H', '2018-02-08 14:40:41', '2018-02-08 14:40:41'),
(2, 'Monirul Sumon', 'sumon1019@gmail.com', '$2y$10$YsE1faE4Z0NEH2De4dlnuuxyk5NfYLFDqOtt9afe3wdkzNUogy79e', NULL, '2018-02-09 13:26:03', '2018-02-09 13:26:03'),
(3, 'Md. Ruhul Amin Shah', 'ruhulcse301@gmail.com', '$2y$10$RjXFGMoTIara0XcmWVSf/.OypwTKkaE72ZQpDhTrGsoYleS6kvYJC', 'qgnWUhki8p0yqvhBfLzJ37q9FKmULS2FvF1wwjNLf6gFLfNKXMH6iBQfncVq', '2018-02-12 09:13:10', '2018-02-12 09:13:10');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `news`
--
ALTER TABLE `news`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
