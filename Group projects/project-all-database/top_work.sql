-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2018 at 12:05 PM
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
-- Database: `top_work`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` int(10) UNSIGNED NOT NULL,
  `candidate_id` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `candidate_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selected_skill` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `candidate_email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resume_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `candidate_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `candidate_id`, `candidate_name`, `selected_skill`, `candidate_email`, `resume_description`, `candidate_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(5, '2', 'Supper admin', '1', 'admin@gmail.com', '<p>I want to delete a News from database and when I hit the delete button all data from database deleted but the image is remains in upload folder. So, how do I this to work. thanks</p>', 'images/admin_v01D_support.png', 1, '2018-02-08 13:32:00', '2018-02-13 23:50:15');

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
(3, '2018_02_08_174142_create_candidates_table', 2),
(4, '2018_02_13_101256_create_services_table', 3);

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
  `company_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_education` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary_range` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `company_name`, `job_title`, `last_education`, `experience`, `job_category`, `salary_range`, `job_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Nnnn', 'Web Developer', 'BSC in CSE', '1 Year', '2', '50000-80000', '<h1>চাকরির বিবরণ</h1>\r\n\r\n<ul>\r\n	<li>শহরDhaka</li>\r\n	<li>কর্মস্থানBangladesh</li>\r\n	<li>চুক্তির ধরন</li>\r\n	<li>চাকরির ক্যাটাগরিIT / Software</li>\r\n	<li>বেতনঅনির্ধারিত</li>\r\n</ul>\r\n\r\n<h1>পছন্দসই প্রার্থী</h1>\r\n\r\n<ul>\r\n	<li>ক্যারিয়ার লেভেলঅভিজ্ঞ (নন ম্যানেজার)</li>\r\n	<li>ডিগ্রীস্নাতক ডিগ্রী</li>\r\n	<li>সর্বনিম্ন বছরের অভিজ্ঞতা২-৫ বছর</li>\r\n</ul>\r\n\r\n<h1>কোম্পানি বিবরণ</h1>\r\n\r\n<ul>\r\n	<li>কোম্পানী ইন্ডাস্ট্রিComputer / IT</li>\r\n	<li>কর্মী সংখ্যা১১-২০</li>\r\n</ul>\r\n\r\n<h1>পেশাগত দক্ষতা</h1>\r\n\r\n<p>PHP, Codeigniter/Laravel, HTML, CSS, SQL, Adobe Photoshop</p>\r\n\r\n<h1>ভাষাগত দক্ষতা</h1>\r\n\r\n<p>English</p>\r\n\r\n<h1>চাকরির বিবরণ</h1>\r\n\r\n<p>TMI looking for a Programmer who has work experience in Object Oriented PHP, Codeigniter/Laravel framework, JavaScript, AJAX, JQuery client side script. Analyze, design and develop dynamic Web Application based on project documents. Must be able to understand client requirements &amp; provide the design &amp; develop the way clients require. Must have hands-on SQL query writing skill for complex business requirements. Solid experience in based Object Oriented Programming. Send your cv at job@tmibd.com . Please put the updated email address on the cv because we will contact you via email.</p>\r\n\r\n<h1>পদের আবশ্যকতা</h1>\r\n\r\n<p>Must have 2-year job experience in JavaScript, AJAX, JQuery client side script development as well as HTML5, CSS &amp; Bootstrap. Need PHP and PHP framework programmer.Must have experience in different type of PHP framework: codeigniter. Must have hands on SQL query writing skill for complex business requirements. Experience in different type of third party REST &amp; SOAP API integration is added plus Ability to work under pressure Provide support to the existing client Work. Previous work experience in Accounting Software , General ERP,CRM would be plus</p>\r\n\r\n<h1>কোম্পানী সম্পর্কে</h1>\r\n\r\n<p>Techno MasPar International (TMI) provides the best quality product to its customers. We place our customer&rsquo;s satisfaction first. Our mission is to help you achieve advancement using technology.&nbsp;</p>', 1, '2018-02-13 05:23:19', '2018-02-13 06:25:34'),
(2, 'Ultimo IT Solutions', 'Web Developer', 'Diploma in CSE', '1 Year', '1', '80000-110000', '<p>Job Description / Responsibility</p>\r\n\r\n<ul>\r\n	<li>We are looking for developer who is really good at PHP, MySQL and WordPress mainly.</li>\r\n	<li>From Sketch to HTML or PSD to HTML.</li>\r\n	<li>Must have experience working on Magento.</li>\r\n	<li>Design, develop and improve websites.</li>\r\n	<li>Identify technical problems and procedures and communicate their applicable solutions.</li>\r\n	<li>Develop innovative, reusable Web-based tools for activism and community building.</li>\r\n	<li>Document the use and maintenance of all software and programs.</li>\r\n	<li>Troubleshoot and optimize website from errors.</li>\r\n	<li>Perform various tests on products and services.</li>\r\n	<li>Use good programming techniques to ensure a stable web environment.</li>\r\n	<li>Should have knowledge on HTML, XHTML, DHTML, HTML5, CSS, CSS3, BOOTSTRAP, JAVASCRIPT, JQUERY.</li>\r\n	<li>Should have sound knowledge on responsive design.</li>\r\n</ul>\r\n\r\n<p>Job Nature</p>\r\n\r\n<p>Full-time</p>\r\n\r\n<p>Educational Requirements</p>\r\n\r\n<ul>\r\n	<li>Minimum graduate on Computer science/ CSE. IT background is preferred.</li>\r\n</ul>\r\n\r\n<p>Experience Requirements</p>\r\n\r\n<ul>\r\n	<li>3 to 5 year(s)</li>\r\n	<li>The applicants should have experience in the following area(s):<br />\r\n	Programmer/ Software Engineer, Web Developer/ Web Designer, Graphic Designer, Content Developer, Animator</li>\r\n	<li>The applicants should have experience in the following business area(s):<br />\r\n	IT Enabled Service</li>\r\n</ul>\r\n\r\n<p>Job Requirements</p>\r\n\r\n<ul>\r\n	<li>Age 21 to 35 year(s)</li>\r\n	<li>The candidate should have practical experience in HTML, DHTML, CSS3, HTML5, PHP5, CSS Framework Bootstrap, WordPress, Php with framework Code Igniter, Ecommerce with W00Commerce and Magento, MYSQL, JQuery, JavaScript etc.</li>\r\n	<li>Must ability to work in Adobe Photoshop &amp; Illustrator.</li>\r\n	<li>Good Typing Skill both in Bengali &amp; English.</li>\r\n	<li>Self-motivated hard working team player and able to work under pressure.</li>\r\n	<li>Candidates having frequent job switching tendency need not to apply.</li>\r\n</ul>\r\n\r\n<p>Job Location</p>\r\n\r\n<p>Dhaka (Uttara)</p>\r\n\r\n<p>Salary Range</p>\r\n\r\n<ul>\r\n	<li>Tk. 16000 - 20000</li>\r\n</ul>\r\n\r\n<p>Other Benefits</p>\r\n\r\n<ul>\r\n	<li>Fresh &amp; friendly environment for all employees.</li>\r\n	<li>Fixed salary plus bonus on performance.</li>\r\n	<li>13 salary in a year (12 months + 1 bonus).</li>\r\n	<li>Personal Loan facilities as per the firm policy.</li>\r\n	<li>Tea, Coffee, etc. will be provided.</li>\r\n	<li>100% performance based increment yearly.</li>\r\n	<li>Salary provides to the bank directly.</li>\r\n</ul>\r\n\r\n<p>Job Source</p>\r\n\r\n<p>Bdjobs.com Online Job Posting</p>', 1, '2018-02-13 05:25:36', '2018-02-13 06:25:32'),
(3, 'BIG M Resources Limited', 'PHP Developer - Codeigniter, Laravel, Wordpress', 'B. Sc. in CSE but we believe in quality rather than certificates.', '1-5', '2', '50000-80000', '<ul>\r\n	<li>If you don&#39;t have 2 years of experience with Codeigniter/Laravel, Wordpress,jQuery and Ajax, please do not apply.</li>\r\n</ul>', 1, '2018-02-13 05:45:54', '2018-02-13 06:25:36'),
(4, 'ABC', 'Web Designer', 'B. Sc. in CSE but we believe in quality rather than certificates.', '1-3', '1', 'face to face communicate', '<p>HTML-5,css3,Bootstrap-4,Javascript,Jquery,</p>', 1, '2018-02-14 04:20:43', '2018-02-14 04:21:25');

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
(1, 'Ashiful Islam', 'ashiful.cse@gmail.com', '$2y$10$LdybTCXDwu90GiFWXRhRbuillSjiURBPBgRAByp2N4c.PNHYmNDvy', 'BpbAQLmFWA5TcyCQnwKXDxEVS9XwgCmOloqJQcqidAQ5P7cGw23R8LJmTVKH', '2018-02-01 07:40:02', '2018-02-01 07:40:02'),
(2, 'Supper admin', 'admin@gmail.com', '$2y$10$9vhOZi2rYA2KZs8f.1IPp.TrOCcVs81zQs1ienNQyu/L2.ePGWgUC', 'e5IvBDlAVy1wdTF5bfRdOpexmpclfiCfhHbOpJ24epNNBlngjxdp7ZjA04Uf', '2018-02-01 07:56:03', '2018-02-01 07:56:03'),
(6, 'Ashik', 'ashik@gmail.com', '$2y$10$eBe5JRqgPd2XpfBWDujjzeqCtego3TLUAqHbZrdh5PzKz6GOGd0BS', NULL, '2018-02-14 04:28:00', '2018-02-14 04:28:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `candidates_candidate_email_unique` (`candidate_email`);

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
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
