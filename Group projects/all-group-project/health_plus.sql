-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2018 at 06:41 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health_plus`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `about_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `about_name`, `about_description`, `about_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(13, 'We Care About Your Health', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at placerat ante. Praesent nulla nunc, pretium dapibus efficitur in, auctor eget elit. Lorem ipsum dolor sit amet.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at placerat ante. Praesent nulla nunc, pretium dapibus efficitur in, auctor eget elit. Lorem ipsum dolor sit amet.</p>', 'about-images/about.jpg', 1, '2018-02-09 22:49:05', '2018-02-09 22:49:05');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `department_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department_name`, `department_title`, `department_description`, `department_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(3, 'Neurology', 'Physical examination', 'During There are a few main things that the doctor will accomplish during this initial visit: Baby, educate parents, and ask and answer questions. Every pediatrician\'s approach differs. Some will examine and provide information at the same time. Others will finish the examination, and then begin to ask questions. During the physical examination the doctor will need to see your baby naked to examine her entire body. The doctor will look at her eyes, ears, nose, skin, and limbs, and also test that she is responsive and has proper reflective actions (such as becoming a little fussy when introduced to a cold stethoscope). The doctor will also look for signs of jaundice or hernias. The doctor will examine the umbilical cord and a circumcised penis for signs of infection and proper healing. A lot will be covered, but don\'t be afraid to ask the doctor to slow down, repeat, or clarify information.', 'department-image/g5.jpg', 1, '2018-02-09 10:48:29', '2018-02-09 12:38:47'),
(4, 'Dental', 'Modern dentistry', 'Pierre There are a few main things that the doctor will accomplish during this initial visit: Examine Baby, educate parents, and ask and answer questions. Every pediatrician\'s approach differs. Some will examine and provide information at the same time. Others will finish the examination, and then begin to ask questions. During the physical examination the doctor will need to see your baby to examine her entire body. The doctor will look at her eyes, ears, nose, skin, and limbs, and also test that she is responsive and has proper reflective actions (such as becoming a little fussy when introduced to a cold stethoscope). The doctor will also look for signs of jaundice or hernias. The doctor will examine the umbilical cord and a circumcised penis for signs of infection and proper healing. A lot will be covered, but don\'t be afraid to ask the doctor to slow down, repeat, or clarify information.', 'department-image/g6.jpg', 1, '2018-02-09 10:49:51', '2018-02-09 12:39:16'),
(5, 'Eye Care', 'Definition of optometry and optometrist', 'The World are a few main things that the doctor will accomplish during this initial visit: Examine Baby, educate parents, and ask and answer questions. Every pediatrician\'s approach differs. Some will examine and provide information at the same time. Others will finish the examination, and then begin to ask questions. During the physical examination the doctor will need to see your baby naked to examine her entire body. The doctor will look at her eyes, ears, nose, skin, and limbs, and also test that she is responsive and has proper reflective actions (such as becoming a little fussy when introduced to a cold stethoscope). The doctor will also look for signs of jaundice or hernias. The doctor will examine the umbilical cord and a circumcised penis for signs of infection and proper healing. A lot will be covered, but don\'t be afraid to ask the doctor to slow down, repeat, or clarify information.', 'department-image/g7.jpg', 1, '2018-02-09 10:51:21', '2018-02-09 12:39:46'),
(6, 'Baby Care', 'Meeting the Doctor', '<p>There are a few main things that the doctor will accomplish during this initial visit: Examine Baby, educate parents, and ask and answer questions. Every pediatrician&#39;s approach differs. Some will examine and provide information at the same time. Others will finish the examination, and then begin to ask questions. During the physical examination the doctor will need to see your baby naked to examine her entire body. The doctor will look at her eyes, ears, nose, skin, and limbs, and also test that she is responsive and has proper reflective actions (such as becoming a little fussy when introduced to a cold stethoscope). The doctor will also look for signs of jaundice or hernias. The doctor will examine the umbilical cord and a circumcised penis for signs of infection and proper healing. A lot will be covered, but don&#39;t be afraid to ask the doctor to slow down, repeat, or clarify information.</p>', 'department-image/g2.jpg', 1, '2018-02-09 10:58:11', '2018-02-09 10:58:11');

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
(3, '2018_01_25_194455_create_abouts_table', 2),
(4, '2018_02_06_131127_create_menus_table', 3),
(5, '2018_02_08_121121_create_sliders_table', 4),
(6, '2018_02_08_163153_create_departments_table', 5),
(7, '2018_02_09_052656_create_teams_table', 6),
(8, '2018_02_09_084547_create_services_table', 7),
(9, '2018_02_09_103759_create_welcomes_table', 8);

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
  `service_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_title`, `service_name`, `service_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'HEALTH PLUS', 'Easy Booking', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1, '2018-02-09 02:56:31', '2018-02-11 05:27:28'),
(2, 'HEALTH PLUS', 'Emergency Care', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat risus eu pretium commodo.</p>', 1, '2018-02-09 23:10:12', '2018-02-09 23:10:12'),
(3, 'HEALTH PLUS', 'DNA Testing', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat risus eu pretium commodo.</p>', 1, '2018-02-09 23:10:28', '2018-02-09 23:10:28'),
(4, 'HEALTH PLUS', 'Experience', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat risus eu pretium commodo.</p>', 1, '2018-02-09 23:10:42', '2018-02-09 23:10:42'),
(5, 'HEALTH PLUS', 'General Treatment', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat risus eu pretium commodo.</p>', 1, '2018-02-09 23:11:05', '2018-02-09 23:11:05'),
(6, 'HEALTH PLUS', 'Eye Care', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat risus eu pretium commodo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat risus eu pretium commodo.</p>', 1, '2018-02-09 23:21:19', '2018-02-09 23:21:19');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `slider_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_sort_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_title`, `slider_sort_title`, `slider_description`, `slider_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(4, 'Free Consultation', 'REAL', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Sed blandit massa vel mauris sollicitudin dignissim.</p>', 'slider-images/banner.jpg', 1, '2018-02-09 12:44:00', '2018-02-09 12:44:00'),
(5, 'Free Consultation', 'REAL', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Sed blandit massa vel mauris sollicitudin dignissim.</p>', 'slider-images/banner1.jpg', 1, '2018-02-09 12:44:34', '2018-02-09 13:12:26'),
(6, 'Quality Care', 'HEALTH PLUS', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Sed blandit massa vel mauris sollicitudin dignissim.Lorem ipsum dolor&nbsp;</p>', 'slider-images/banner2.jpg', 1, '2018-02-09 12:45:38', '2018-02-09 12:45:38'),
(7, 'Quality Care', 'HEALTH PLUS', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Sed blandit massa vel mauris sollicitudin dignissim.Lorem ipsum dolor&nbsp;</p>', 'slider-images/banner3.jpg', 1, '2018-02-09 12:46:08', '2018-02-09 13:12:30'),
(8, 'Consultation Care', 'AMAZING', '<p>.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at placerat ante.</p>', 'slider-images/banner1.jpg', 1, '2018-02-09 12:48:12', '2018-02-09 12:48:12'),
(9, 'Consultation Care', 'AMAZING', '<p>.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at placerat ante.</p>', 'slider-images/banner3.jpg', 1, '2018-02-09 12:48:40', '2018-02-09 13:12:33');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `team_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_speciality` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_consultant` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `team_title`, `short_description`, `doctor_name`, `doctor_speciality`, `doctor_consultant`, `doctor_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Team: CR7', 'Description: Neurology Department', 'Name: Rabecca Scot', 'Speciality: MEDICINE', 'Consultant: Honorary Consultant', 'team-images/t1.jpg', 1, '2018-02-08 23:42:46', '2018-02-11 06:23:08'),
(6, 'Team: LM10', 'Description: Dental Department', 'Name: Rosy Carl', 'Speciality: MEDICINE', 'Consultant: Honorary Consultant', 'team-images/t4.jpg', 1, '2018-02-09 00:20:03', '2018-02-11 06:30:00'),
(8, 'Team: CR', 'Description: Baby Care Department', 'Name: Reena Scot', 'Speciality: MEDICINE', 'Consultant : Honorary Consultant', 'team-images/t3.jpg', 1, '2018-02-11 05:58:51', '2018-02-11 06:31:17'),
(9, 'Team: NJ10', 'Description: Baby Care Department', 'Name: David Martin', 'Speciality: MEDICINE', 'Consultant: Honorary Consultant', 'team-images/t2.jpg', 1, '2018-02-11 06:28:44', '2018-02-11 06:33:00');

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
(1, 'hasan', 'mehei@gmail.com', '$2y$10$ADG/09M1H8MWE45l2X2XiuMbTFP0GMuVaXyE7ymHHJVBvWUrc.7cG', 'kDknNIzxD8W7WZSpa6ASYefUU8YoFQb2YijrXZvI3uL8UtaC7L7hLV9oATfb', '2018-01-23 10:06:55', '2018-01-23 10:06:55'),
(2, 'Riazul', 'riazul@dot.com', '$2y$10$AHLetNHFrd.R5jVvda/nMeFHenW8RiVVV6ehlNcbzSQ7HhIWm/NyS', 'gFrTp0oLyDQpIixsroITokHdWdcdR8vD2Yv7Ps7wkGFlZ3b87u2ef0i3Els1', '2018-01-23 10:10:02', '2018-01-23 10:10:02');

-- --------------------------------------------------------

--
-- Table structure for table `welcomes`
--

CREATE TABLE `welcomes` (
  `id` int(10) UNSIGNED NOT NULL,
  `welcome_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `welcome_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `welcomes`
--

INSERT INTO `welcomes` (`id`, `welcome_title`, `welcome_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'WELCOME', 'Teeth Whitening is a professional teeth whitening service with results that last up to 2 years. With a range of teeth whitening options to ensure both comfort and effectiveness, the system has proven to be extremely popular throughout the NYC area.\r\n\r\nOur Company is the leading supplier of dental professionals worldwide. We offer safe and effective teeth whitening products that give immediate results. Our tooth whitening gels are the leading tooth bleaching gels on the market. We offer the lowest price on professional teeth bleaching systems on the web, in fact we are so confident that you won\'t find a better deal, we are willing to match or beat any other offers on the web. Now, you can safely and economically get whiter teeth, instantly, with the fastest, most effective and affordable teeth whitening system available today!', 0, '2018-02-09 04:44:55', '2018-02-09 11:00:57'),
(3, 'Welcome to our Health Plus', 'We offer diverse and qualitative services to private and corporate customers across the board. Our professional team of primary health care personnel is well seasoned and experienced in providing top level medical support.We offer diverse and qualitative services to private and corporate customers across the board. Our professional team of primary health care personnel is well seasoned and experienced in providing top level medical support.We offer diverse and qualitative services to private and corporate customers across the board. Our professional team of primary health care personnel is well seasoned and experienced in providing top level medical support.We offer diverse and qualitative services to private and corporate customers across the board. Our professional team of primary health care personnel is well seasoned and experienced in providing top level medical support.We offer diverse and qualitative services to private and corporate customers across the board. Our professional team of primary health care personnel is well seasoned and experienced in providing top level medical support.', 1, '2018-02-09 10:13:40', '2018-02-09 11:01:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
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
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `welcomes`
--
ALTER TABLE `welcomes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `welcomes`
--
ALTER TABLE `welcomes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
