-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2024 at 02:17 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codelto_live`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutuses`
--

CREATE TABLE `aboutuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutuses`
--

INSERT INTO `aboutuses` (`id`, `name`, `icon`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Conceptualization', '/upload/abouticon/conceptuation.png', 'Jointly, we dissect your concept and figure out what to get out of the game.', NULL, '2023-08-21 06:38:52'),
(2, 'Requirement Finalization', '/upload/abouticon/requirement_finalization.png', 'Next, we draw outlines and agree upon what the final game should look like.', NULL, NULL),
(3, ' Milestone Creation', '/upload/abouticon/milestone_creation.png\n', 'Now, we jointly set up milestones. Milestones benchmark the game\'s progress.', NULL, NULL),
(4, 'Design & Development', '/upload/abouticon/design_development.png', 'Armed with the inputs, our team swiftly swings into action. The Embryo stage.\r\n\r\n', NULL, NULL),
(5, 'QA & Testing', '/upload/abouticon/qa_testing.png', 'The no-mercy, zero-tolerance stage. We check for all possible areas of improvements.', NULL, NULL),
(6, 'Final Delivery', '/upload/abouticon/final_delivery.png', 'Without any compromises anywhere, we stick to the \"In time. Every time.\" rule.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `image`, `content`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Individuals', '/upload/clientimg/conceptuation.png', 'Opportunity to \r\nearn from the $75 billion\r\ngaming market', 'Looking to make extra buck, now\'s the right time to invest in mobile gaming. It\'s bigger than pc gaming.', '2023-08-04 08:24:37', '2023-08-04 08:24:37'),
(5, 'Brands', '/upload/clientimg/milestone_creation.png', 'Games are a \nfun way to engage \nwith your customers.', 'Let\'s spread the word about your brand by creating fun games which promotes you organically.', '2023-08-21 22:54:09', '2023-08-22 05:52:44');

-- --------------------------------------------------------

--
-- Table structure for table `contactuses`
--

CREATE TABLE `contactuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_subject` varchar(255) NOT NULL,
  `contact_message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactuses`
--

INSERT INTO `contactuses` (`id`, `contact_name`, `contact_email`, `contact_subject`, `contact_message`, `created_at`, `updated_at`) VALUES
(1, 'abca', 'manu@gmail.com', 'hi,', 'dfdsfd', '2023-08-01 06:15:20', '2023-08-01 06:15:20'),
(3, 'khushali', 'khushali@gmail.com', 'This is just a testing', 'This is just a testing to send email', '2023-08-08 02:20:24', '2023-08-08 02:20:24'),
(4, 'vivek', 'vivek@gmail.com', 'testing', 'hello, sir.....', '2023-08-08 02:25:00', '2023-08-08 02:25:00'),
(5, 'vaani', 'vaani123@gmail.com', 'website design', 'hello,,,,,,,,,,,', '2023-08-08 02:29:21', '2023-08-08 02:29:21'),
(7, 'ami', 'ami@gmail.com', 'testing', 'This is just a testing to send email', '2023-08-08 02:34:34', '2023-08-08 02:34:34'),
(8, 'sakshi', 'sakshi@gmail.com', 'create website', 'hello, good afternoon,', '2023-08-08 02:58:11', '2023-08-08 02:58:11'),
(11, 'sanju', 'sanju@gmail.com', 'Request for Portfolio & Rates 😊', 'ar Sir, I hope this message finds you well. My name is Sanju', '2023-08-09 05:38:31', '2023-08-09 05:38:31'),
(13, 'akhshy patel', 'akhshy@gmail.com', 'Emotional Intelligence Interactive Storybook App for Kids', 'Hi there. I\'m currently working with a child psychologist to design an app that develops the emotional intelligence of young kids.', '2023-08-15 02:18:32', '2023-08-15 02:18:32'),
(14, 'sds', 'sanju@gmail.com', 'hi,', 'sdsf', '2023-08-16 02:06:30', '2023-08-16 02:06:30'),
(15, 'dharam', 'dharm@gmail.com', 'create laravel developer', 'hello sir, me laravel developer comapany in 1 years experierence and work .', '2023-08-17 06:18:45', '2023-08-17 06:18:45'),
(17, 'ansh', 'ansh123@gmail.com', 'This is just a testing', 'ere243gthgtg', '2023-08-23 01:16:50', '2023-08-23 01:16:50'),
(18, 'shivam', 'shivam123@gmail.com', 'kidding game', 'hello, sir.....', '2023-08-23 01:49:16', '2023-08-23 01:49:16'),
(25, 'jagruti', 'jagu@gmail.com', 'This is just a testing', 'httyy', '2023-08-23 04:53:26', '2023-08-23 04:53:26'),
(26, 'hansu', 'hansu@gmail.com', 'This is just a testing', 'hello,', '2023-08-23 05:00:49', '2023-08-23 05:00:49'),
(27, 'Bhumi', 'bhumi12@gmail.com', 'Testing', 'Hello, sir..', '2023-08-26 06:37:28', '2023-08-26 06:37:28'),
(31, 'ansh', 'ansh@gmail.com', 'This is just a testing', 'This is just a testing to send email', '2023-09-30 04:29:08', '2023-09-30 04:29:08');

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
-- Table structure for table `footer_other_links`
--

CREATE TABLE `footer_other_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link_name` varchar(255) NOT NULL,
  `url_links` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_other_links`
--

INSERT INTO `footer_other_links` (`id`, `link_name`, `url_links`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'http://127.0.0.1:8000/', 'Codelto Technology', '2023-08-24 10:01:20', NULL),
(2, 'Services', '/services', 'Services -Codelto Technology', '2023-08-24 10:01:20', NULL),
(3, 'Why Us?', '/whyus', 'Why Us? -Codelto Technology', '2023-08-24 10:01:20', NULL),
(4, 'Testimonials', '/testimonials', 'Testimonials -Codelto Technology', '2023-08-24 10:01:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menuitems`
--

CREATE TABLE `menuitems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page` varchar(255) NOT NULL,
  `canonical_url` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menuitems`
--

INSERT INTO `menuitems` (`id`, `page`, `canonical_url`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'http://127.0.0.1:8000/', 'Codelto Technology', '2023-08-22 09:48:18', NULL),
(2, 'Services', '/services', 'Services', '2023-08-22 09:48:34', NULL),
(3, 'Why Us?', '/whyus', 'Why Us?', '2023-08-22 09:48:42', NULL),
(4, 'Testimonials', '/testimonials', 'Testimonials', '2023-08-22 09:48:50', NULL),
(5, 'Our Team', '/ourteam', 'Our Team', '2023-08-22 09:48:59', NULL),
(6, 'Contact Us', '/contactus', 'Contact Us', '2023-08-22 09:49:08', '2023-08-22 09:49:56');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_31_053630_create_aboutuses_table', 1),
(6, '2023_07_31_065448_create_siteconfigs_table', 2),
(7, '2023_08_01_075334_create_contactuses_table', 3),
(8, '2023_08_01_060546_create_clients_table', 4),
(9, '2023_08_10_075323_create_services_table', 5),
(10, '2023_08_17_071414_create_services_table', 6),
(11, '2023_08_21_061257_create_website_seos_table', 7),
(12, '2023_08_21_064730_create_website_seos_table', 8),
(13, '2023_08_21_072847_create_menu_items_table', 9),
(14, '2023_08_22_090939_create_menuitems_table', 10),
(15, '2023_08_23_051707_add_timestamps_in_siteconfigs_table', 11),
(16, '2023_08_24_072002_create_statistics_numbers_table', 12),
(17, '2023_08_24_082708_create_technologies_table', 13),
(18, '2023_08_24_094156_create_footer_other_links_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
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
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `serviceId` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `side` enum('left','right') NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`serviceId`, `name`, `description`, `side`, `image`, `created_at`, `updated_at`) VALUES
(1, '2D & 3D MOBILE GAME DEVELOPMENT', 'Our 2D & 3D games erase the borderline between reality and gaming. Our passion, skill and our experience makes us one of the best mobile game developement companies of India Why not get in touch right now? Let\'s talk.', 'left', '', '2023-08-17 07:18:01', '2023-08-17 07:18:01'),
(2, 'ANDROID GAME DEVELOPMENT', 'We use Unity game engine to develop Android Mobile Games.\r\nEnd-to-end robust game development of games for Android smartphones, tables and TV.\r\nOur deep understanding of game designing and mastery game engine make us the top Android game development company.', 'left', '', '2023-08-17 07:18:01', '2023-08-17 07:18:01'),
(3, 'iOS GAME DEVELOPMENT ', 'We design mobile games that are engaging, highly interactive, and addictive.\nIt is a leading iOS game development agency, which knows how to produce entertaining games of iPhone and iPad devices.\nAlso, we develop cross platform gaming apps.', 'right', '', '2023-08-17 07:18:01', '2023-08-17 07:18:01'),
(4, 'AR/VR GAME DEVELOPMENT', 'AR and VR games blurs the line between reality and computer generated graphics.\nit has team of talented designers and coders working with AR and VR games.\nWe can developed Geo-location based games, AR Sports, RPGs and FPS games with these technologiesz.', 'right', '', '2023-08-17 07:18:01', '2023-08-17 07:18:01');

-- --------------------------------------------------------

--
-- Table structure for table `siteconfigs`
--

CREATE TABLE `siteconfigs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `configKey` varchar(255) NOT NULL,
  `configVal` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siteconfigs`
--

INSERT INTO `siteconfigs` (`id`, `configKey`, `configVal`, `created_at`, `updated_at`) VALUES
(1, 'aboutTitle', 'Making of a great game...', NULL, '2023-08-23 00:15:00'),
(2, 'aboutSubTitle', 'This is how we go about making truly awesome stuff. Everytime.', NULL, '2023-08-23 06:06:58'),
(3, 'serviceTitle', 'About our game developement services', NULL, NULL),
(4, 'serviceSubTitle', 'We make things you\'ll love!', NULL, NULL),
(5, 'homeHeaderTitle', 'Our clients tell us\nwe\'re ', NULL, NULL),
(6, 'homeHeaderSubTitle', 'Because we know more than just game development & design.\r\nWe know how to keep gamers play on for days.\r\nWe know how to convert gamers into paying users.', NULL, NULL),
(7, 'homeHeaderImage', 'upload/bannerheaderimg/bannerBg.jpg', NULL, NULL),
(8, 'footerCopyright', 'Codelto Technology © All Rights Reserved', NULL, NULL),
(9, 'contactusTitle', 'Contact us...', NULL, NULL),
(10, 'contactusSubTitle', ' We’re are always in search of creative people', NULL, NULL),
(11, 'contactusAddress', '403, Dhara Arcade, Near Mahadev Chowk, \r\nMota Varachha, Surat, GJ, India', NULL, NULL),
(12, 'contactusMobileno1', '+91 9998-855-118', NULL, NULL),
(13, 'contactusEmail', 'support@cipherhex.com', NULL, NULL),
(14, 'OurclientsTitle', 'Who are our clients?', NULL, NULL),
(15, 'OurclientsSubTitle', 'We work with lot of different people. ', NULL, NULL),
(16, 'linkedInLink', 'https://www.linkedin.com/company/13257105/', NULL, NULL),
(17, 'FacebookLink', 'https://www.facebook.com/cipherhex/', NULL, NULL),
(18, 'YoutubeLink', 'https://www.youtube.com/channel/UCvAGOb2aGFO89rjNGb4ZJkQ', NULL, NULL),
(19, 'TwitterLink', '', NULL, NULL),
(20, 'homeHeaderTitleBold', 'more than a\nmobile game development\ncompany.', NULL, NULL),
(21, 'contactusSubTitle1', 'Fill out the form below and we\'ll arrange a time for a detailed discussion', NULL, NULL),
(22, 'serviceimageright', 'upload/service/mobile-development-1.webp', NULL, NULL),
(23, 'serviceimageleft', 'upload/service/mobile-development-2.webp', NULL, NULL),
(24, 'serviceName1', '2D & 3D MOBILE GAME DEVELOPMENT', NULL, NULL),
(25, 'serviceDescription1', 'Our 2D & 3D games erase the borderline between reality and gaming. Our passion, skill and our experience makes us one of the best mobile game developement companies of India Why not get in touch right now? Let\'s talk.', NULL, NULL),
(26, 'serviceName2', 'ANDROID GAME DEVELOPMENT', NULL, NULL),
(27, 'serviceDescription2', 'We use Unity game engine to develop Android Mobile Games.\nEnd-to-end robust game development of games for Android smartphones, tables and TV.\nOur deep understanding of game designing and mastery game engine make us the top Android game development company.', NULL, NULL),
(28, 'serviceName3', 'iOS GAME DEVELOPMENT ', NULL, NULL),
(29, 'serviceDescription3', 'We design mobile games that are engaging, highly interactive, and addictive.\r\nIt is a leading iOS game development agency, which knows how to produce entertaining games of iPhone and iPad devices.\r\nAlso, we develop cross platform gaming apps.', NULL, NULL),
(30, 'serviceName4', 'AR/VR GAME DEVELOPMENT', NULL, NULL),
(31, 'serviceDescription4', 'AR and VR games blurs the line between reality and computer generated graphics.\r\nit has team of talented designers and coders working with AR and VR games.\r\nWe can developed Geo-location based games, AR Sports, RPGs and FPS games with these technologiesz.', NULL, NULL),
(32, 'contactusMobileno2', '+91 9998-854-400', '2023-08-24 07:24:09', '2023-08-24 07:24:09'),
(33, 'contactusAddressLink', 'https://www.google.com/maps/place/Cipherhex+Technology/@21.2372039,72.8806331,17z/data=!3m1!4b1!4m6!3m5!1s0x3be04e5539c1cde1:0x6ea21118d0f566b6!8m2!3d21.237199!4d72.885504!16s%2Fg%2F11c31y51t0?entry=ttu', '2023-08-24 07:24:20', '2023-08-24 07:24:20'),
(34, 'footerHeaderName1', 'Technology', '2023-08-24 07:24:20', '2023-08-24 07:24:20'),
(35, 'footerHeaderName2', 'Other Links', '2023-08-24 07:24:20', '2023-08-24 07:24:20'),
(36, 'footerHeaderName3', 'Contact Us', '2023-08-24 07:24:20', '2023-08-24 07:24:20'),
(37, 'navbarlogo', 'upload/logo/logo.png', '2023-08-24 07:24:20', '2023-08-24 07:24:20'),
(38, 'navbarsmallogo', 'upload/logo/logo-color.png', '2023-08-24 07:24:20', '2023-08-24 07:24:20'),
(39, 'faviconimg_title', '/upload/logo/fav.png', '2023-08-24 07:24:20', '2023-08-25 05:15:54');

-- --------------------------------------------------------

--
-- Table structure for table `statistics_numbers`
--

CREATE TABLE `statistics_numbers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `stats_name` varchar(255) NOT NULL,
  `stats_number` varchar(255) NOT NULL,
  `icon_img` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statistics_numbers`
--

INSERT INTO `statistics_numbers` (`id`, `stats_name`, `stats_number`, `icon_img`, `created_at`, `updated_at`) VALUES
(1, 'EMPLOYEES', '25', 'fas fa-user-secret', '2023-08-24 07:40:29', '2023-08-24 02:37:30'),
(2, 'HAPPY CLIENTS', '81', 'fas fa-smile-wink', '2023-08-24 07:43:15', NULL),
(3, 'CLIENTS PROJECTS', '110', 'fas fa-cube', '2023-08-24 07:43:48', NULL),
(4, 'HOME PRODUCTS', '13', 'fas fa-child', '2023-08-24 07:44:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `technologies`
--

CREATE TABLE `technologies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `technology_name` varchar(255) NOT NULL,
  `url_links` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `technologies`
--

INSERT INTO `technologies` (`id`, `technology_name`, `url_links`, `created_at`, `updated_at`) VALUES
(1, 'Android', '/services', '2023-08-24 08:43:27', NULL),
(2, 'iOS', '/services', '2023-08-24 08:43:27', NULL),
(3, 'Unity', '/services', '2023-08-24 08:43:27', NULL),
(4, 'Web Development', '/services', '2023-08-24 08:43:27', NULL),
(5, 'Social Integration', '/services', '2023-08-24 08:43:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `website_seos`
--

CREATE TABLE `website_seos` (
  `seo_id` bigint(20) UNSIGNED NOT NULL,
  `page` varchar(255) NOT NULL,
  `canonical_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `website_seos`
--

INSERT INTO `website_seos` (`seo_id`, `page`, `canonical_url`) VALUES
(1, 'Home', 'http://127.0.0.1:8000/'),
(2, 'Services', '/services'),
(3, 'Why Us?\r\n', '/whyus'),
(4, 'Testimonials', '/testimonials'),
(5, 'Our Team', '/ourteams'),
(6, 'Contact Us', '/contactus');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutuses`
--
ALTER TABLE `aboutuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactuses`
--
ALTER TABLE `contactuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `footer_other_links`
--
ALTER TABLE `footer_other_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menuitems`
--
ALTER TABLE `menuitems`
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
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`serviceId`);

--
-- Indexes for table `siteconfigs`
--
ALTER TABLE `siteconfigs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statistics_numbers`
--
ALTER TABLE `statistics_numbers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technologies`
--
ALTER TABLE `technologies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `website_seos`
--
ALTER TABLE `website_seos`
  ADD PRIMARY KEY (`seo_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutuses`
--
ALTER TABLE `aboutuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contactuses`
--
ALTER TABLE `contactuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footer_other_links`
--
ALTER TABLE `footer_other_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `menuitems`
--
ALTER TABLE `menuitems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `serviceId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `siteconfigs`
--
ALTER TABLE `siteconfigs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `statistics_numbers`
--
ALTER TABLE `statistics_numbers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `technologies`
--
ALTER TABLE `technologies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `website_seos`
--
ALTER TABLE `website_seos`
  MODIFY `seo_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
