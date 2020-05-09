-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2019 at 10:01 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ieg`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_news`
--

CREATE TABLE `category_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug_id` bigint(20) UNSIGNED NOT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `pid` bigint(20) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_news`
--

INSERT INTO `category_news` (`id`, `title`, `image`, `slug_id`, `keywords`, `description`, `pid`, `created_at`, `updated_at`) VALUES
(1, 'Highcharts Demo', NULL, 1, NULL, NULL, 0, '2019-07-30 11:08:05', '2019-07-30 11:08:05'),
(2, 'Dễ đọc nhưng nội dung không hề dễ dãi', NULL, 2, NULL, NULL, 1, '2019-07-30 11:08:17', '2019-07-30 11:08:17'),
(3, 'tin tuc', NULL, 15, NULL, NULL, 0, '2019-07-31 12:59:51', '2019-07-31 12:59:51'),
(4, 'su kien', NULL, 16, NULL, NULL, 0, '2019-07-31 13:00:12', '2019-07-31 13:00:12'),
(5, 'toi va ieg', NULL, 17, NULL, NULL, 0, '2019-07-31 13:00:32', '2019-07-31 13:00:32'),
(6, 'tin tucdsf', NULL, 18, NULL, NULL, 0, '2019-07-31 13:03:37', '2019-07-31 13:03:37');

-- --------------------------------------------------------

--
-- Table structure for table `cate_videos`
--

CREATE TABLE `cate_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug_id` bigint(20) UNSIGNED NOT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `pid` bigint(20) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cate_videos`
--

INSERT INTO `cate_videos` (`id`, `title`, `image`, `slug_id`, `keywords`, `description`, `pid`, `created_at`, `updated_at`) VALUES
(1, 'Đồ gỗ mỹ nghệ tinh xảo giá “khủng” tại chợ xuân phố núi sdasd', '/photos/2/wallpaper_op2.jpg', 27, NULL, NULL, 0, '2019-07-31 17:15:33', '2019-07-31 17:15:33');

-- --------------------------------------------------------

--
-- Table structure for table `dang_kies`
--

CREATE TABLE `dang_kies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dang_kies`
--

INSERT INTO `dang_kies` (`id`, `name`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'sdsd', '47383898', 'fdshfdh@gmail.com', '2019-10-16 10:04:51', '2019-10-16 10:04:51');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug_id` bigint(20) UNSIGNED NOT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `mdescription` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `uid` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `image`, `slug_id`, `keywords`, `mdescription`, `uid`, `description`, `content`, `created_at`, `updated_at`) VALUES
(1, 'toi va iegsdfsdfsdf', '/photos/2/tintuc_7.jpg', 20, NULL, NULL, 2, 'sdfsdf', '<p>dsfsdfsdfsdf</p>', '2019-07-31 13:54:14', '2019-10-20 12:03:05'),
(3, 'su kiensdsd', '/photos/2/tintuc_7.jpg', 22, NULL, NULL, 2, 'sdsd', '<p>sdsdsd</p>', '2019-07-31 14:00:22', '2019-10-20 12:02:25');

-- --------------------------------------------------------

--
-- Table structure for table `ieg_me_cates`
--

CREATE TABLE `ieg_me_cates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug_id` bigint(20) UNSIGNED NOT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `pid` bigint(20) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ieg_me_cates`
--

INSERT INTO `ieg_me_cates` (`id`, `title`, `image`, `slug_id`, `keywords`, `description`, `pid`, `created_at`, `updated_at`) VALUES
(1, 'toi va iegdssdfsdfsdf', '/photos/2/wallpaper_op2.jpg', 23, NULL, NULL, 0, '2019-07-31 14:15:51', '2019-07-31 14:17:40');

-- --------------------------------------------------------

--
-- Table structure for table `ieg_me_posts`
--

CREATE TABLE `ieg_me_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug_id` bigint(20) UNSIGNED NOT NULL,
  `cid` bigint(20) UNSIGNED DEFAULT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `mdescription` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `uid` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature` tinyint(1) NOT NULL DEFAULT 0,
  `public` tinyint(1) NOT NULL DEFAULT 1,
  `viewcount` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ieg_me_posts`
--

INSERT INTO `ieg_me_posts` (`id`, `title`, `image`, `slug_id`, `cid`, `keywords`, `mdescription`, `uid`, `description`, `content`, `feature`, `public`, `viewcount`, `created_at`, `updated_at`) VALUES
(1, 'toi va ieg fsdfsdf sdfdsf', '/photos/2/wallpaper_op2.jpg', 24, 1, NULL, NULL, 2, 'dsfdsf', '<p>dsfdsf dsfdsfsdf</p>', 1, 1, 0, '2019-07-31 14:28:25', '2019-07-31 14:28:25');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_07_03_044644_entrust_setup_tables', 1),
(8, '2019_07_28_171300_create_slugs_table', 2),
(9, '2019_07_28_171944_create_category_news_table', 2),
(13, '2019_07_28_172508_create_news_table', 3),
(14, '2019_07_31_203515_create_events_table', 4),
(15, '2019_07_31_210427_create_ieg_me_cates_table', 5),
(16, '2019_07_31_210546_create_ieg_me_posts_table', 5),
(17, '2019_07_31_213025_create_pages_table', 6),
(18, '2019_08_01_000517_create_cate_videos_table', 7),
(19, '2019_08_31_214706_create_videos_table', 7),
(20, '2019_10_16_165431_create_dang_kies_table', 8),
(21, '2019_10_16_172828_create_tu_vans_table', 9),
(22, '2019_10_16_194444_create_nang_lucs_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `nang_lucs`
--

CREATE TABLE `nang_lucs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `namec` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nam` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trungtam` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nang_lucs`
--

INSERT INTO `nang_lucs` (`id`, `name`, `phone`, `email`, `text`, `namec`, `nam`, `trungtam`, `created_at`, `updated_at`) VALUES
(1, 'sdsd', '47383898', 'tien2vv@gmail.com', 'dsfdsfsdf', 'sdfasd', '213123', 'sdfsdf', '2019-10-16 12:53:05', '2019-10-16 12:53:05');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug_id` bigint(20) UNSIGNED NOT NULL,
  `cid` bigint(20) UNSIGNED DEFAULT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `mdescription` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `uid` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature` tinyint(1) NOT NULL DEFAULT 0,
  `public` tinyint(1) NOT NULL DEFAULT 1,
  `viewcount` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `image`, `slug_id`, `cid`, `keywords`, `mdescription`, `uid`, `description`, `content`, `feature`, `public`, `viewcount`, `created_at`, `updated_at`) VALUES
(2, 'Highcharts Demo gfhfgh', '/photos/2/tintuc_6.jpg', 10, 1, 'werewr', 'ewrwer', 2, '<p>fgh hfghfg</p>', '<p>fghfgh gfhfg</p>', 1, 1, 0, '2019-07-30 11:31:34', '2019-10-02 12:21:04'),
(3, 'Highcharts Demo asdasd', '/photos/2/tintuc_6.jpg', 11, 1, NULL, NULL, 2, '<p>asdasd</p>', '<p>dfsdfsdfsd</p>', 0, 1, 0, '2019-07-30 11:48:20', '2019-10-02 12:20:56'),
(4, 'Thất vọngsdfsdfsdfsd', '/photos/2/tintuc_6.jpg', 12, 1, NULL, NULL, 2, '<p>dfgdf</p>', '<p>dfgdfgdf dfgdfgdfg</p>', 0, 1, 0, '2019-07-30 11:49:03', '2019-10-02 12:20:48'),
(5, 'Dễ đọc nhưng nội dung', '/photos/2/tintuc_6.jpg', 13, 1, 'asdas', 'asdasd', 2, 'sdas', '<p>asdsa</p>', 0, 1, 0, '2019-07-30 12:34:00', '2019-10-02 12:20:38'),
(6, 'Dễ đọc nhưng nội', '/photos/2/tintuc_6.jpg', 14, 1, 'asdas', 'sdasd', 2, 'asdasdas asdsa', '<p>sad asdasdas asdasd</p>', 1, 1, 0, '2019-07-30 12:35:11', '2019-10-02 12:20:30'),
(7, 'toi va ieg sdfsdfdsf', '/photos/2/tintuc_6.jpg', 19, 1, NULL, NULL, 2, 'sdfsdfsdfsdf', '<p>sdfsdfdsf</p>', 0, 0, 0, '2019-07-31 13:05:46', '2019-10-02 12:20:05');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `slug_id` bigint(20) UNSIGNED NOT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `mdescription` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `uid` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug_id`, `keywords`, `mdescription`, `uid`, `description`, `content`, `created_at`, `updated_at`) VALUES
(1, 'su kien sdfsdfds sdfsdfsdfds', 26, NULL, NULL, 2, 'dsfsdfds dsfdf', '<p>sdfdsfs dsfsdf</p>', '2019-07-31 14:43:23', '2019-07-31 14:43:23');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'role-create', 'Create Role', 'Create New Role', '2019-07-28 10:04:49', '2019-07-28 10:04:49'),
(2, 'role-edit', 'Create Edit', 'Edit Role', '2019-07-28 10:04:49', '2019-07-28 10:04:49'),
(3, 'role-show', 'Show Role', 'Show Role', '2019-07-28 10:04:49', '2019-07-28 10:04:49'),
(4, 'role-list', 'Display Role Listing', 'List All Roles', '2019-07-28 10:04:49', '2019-07-28 10:04:49'),
(5, 'role-update', 'Update Role', 'Update Role Information', '2019-07-28 10:04:49', '2019-07-28 10:04:49'),
(6, 'role-delete', 'Delete Role', 'Delete Role', '2019-07-28 10:04:49', '2019-07-28 10:04:49'),
(7, 'user-create', 'Create User', 'Create New User', '2019-07-28 10:04:49', '2019-07-28 10:04:49'),
(8, 'user-list', 'Display User Listing', 'List All Users', '2019-07-28 10:04:49', '2019-07-28 10:04:49'),
(9, 'user-update', 'Update User', 'Update User Information', '2019-07-28 10:04:49', '2019-07-28 10:04:49'),
(10, 'user-delete', 'Delete User', 'Delete User', '2019-07-28 10:04:49', '2019-07-28 10:04:49'),
(11, 'user-edit', 'User Edit', 'Edit User', '2019-07-28 10:04:49', '2019-07-28 10:04:49'),
(12, 'user-show', 'Show User', 'Show User', '2019-07-28 10:04:49', '2019-07-28 10:04:49');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 4),
(2, 4),
(3, 4),
(4, 4),
(5, 4),
(6, 4),
(7, 4),
(8, 4),
(9, 4),
(10, 4),
(11, 4),
(12, 4);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(4, 'admin', 'Admin', 'Full Permission', '2019-07-28 10:04:49', '2019-07-28 10:04:49');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `slugs`
--

CREATE TABLE `slugs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slugs`
--

INSERT INTO `slugs` (`id`, `slug`, `type`, `created_at`, `updated_at`) VALUES
(1, 'highcharts-demo', 'postcate', '2019-07-30 11:08:05', '2019-07-30 11:08:05'),
(2, 'de-doc-nhung-noi-dung-khong-he-de-dai', 'postcate', '2019-07-30 11:08:16', '2019-07-30 11:08:16'),
(4, 'de-doc-nhung-noi-dung-khong-he-de-dai-sdfsdfsdf', 'new', '2019-07-30 11:15:20', '2019-07-30 11:15:20'),
(5, 'de-doc-nhung-noi-dung-khong-he-de-dai-sdfsdfsdf hfghfg', 'new', '2019-07-30 11:18:01', '2019-07-30 11:18:01'),
(6, 'de-doc-nhung-noi-dung-khong-he-de-dai-sdfsdfsdf-hfghfgh', 'new', '2019-07-30 11:20:49', '2019-07-30 11:20:49'),
(7, 'that-vong', 'new', '2019-07-30 11:21:30', '2019-07-30 11:21:30'),
(10, 'highcharts-demo-gfhfgh', 'new', '2019-07-30 11:31:34', '2019-07-30 11:31:34'),
(11, 'highcharts-demo-asdasd', 'new', '2019-07-30 11:48:20', '2019-07-30 11:48:20'),
(12, 'that-vongsdfsdfsdfsd', 'new', '2019-07-30 11:49:03', '2019-10-02 11:55:45'),
(13, 'de-doc-nhung-noi-dung', 'new', '2019-07-30 12:34:00', '2019-10-02 11:54:55'),
(14, 'de-doc-nhung-noi', 'new', '2019-07-30 12:35:11', '2019-10-02 11:55:10'),
(15, 'tin-tuc', 'postcate', '2019-07-31 12:59:51', '2019-07-31 12:59:51'),
(16, 'su-kien', 'postcate', '2019-07-31 13:00:12', '2019-07-31 13:00:12'),
(17, 'toi-va-ieg', 'postcate', '2019-07-31 13:00:32', '2019-07-31 13:00:32'),
(18, 'tin-tucdsf', 'postcate', '2019-07-31 13:03:37', '2019-07-31 13:03:37'),
(19, 'toi-va-ieg-sdfsdfdsf', 'new', '2019-07-31 13:05:46', '2019-07-31 13:05:46'),
(20, 'toi-va-iegsdfsdfsdf', 'new', '2019-07-31 13:54:14', '2019-07-31 13:54:14'),
(22, 'su-kiensdsd', 'new', '2019-07-31 14:00:22', '2019-07-31 14:00:22'),
(23, 'toi-va-iegdssdfsdfsdf', 'icate', '2019-07-31 14:15:51', '2019-07-31 14:15:51'),
(24, 'toi-va-ieg-fsdfsdf-sdfdsf', 'new', '2019-07-31 14:28:25', '2019-07-31 14:28:25'),
(25, 'su-kien-sdfsdfds', 'page', '2019-07-31 14:42:54', '2019-07-31 14:42:54'),
(26, 'su-kien-sdfsdfds-sdfsdfsdfds', 'page', '2019-07-31 14:43:23', '2019-07-31 14:43:23'),
(27, 'do-go-my-nghe-tinh-xao-gia-“khung”-tai-cho-xuan-pho-nui-sdasd', 'cvideo', '2019-07-31 17:15:33', '2019-07-31 17:15:33'),
(28, 'do-go-my-nghe-tinh-xao-gia-“khung”-tai-cho-xuan-pho-nui-sdasd-sdfsdfsdf', 'video', '2019-07-31 17:32:16', '2019-07-31 17:32:16');

-- --------------------------------------------------------

--
-- Table structure for table `tu_vans`
--

CREATE TABLE `tu_vans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tu_vans`
--

INSERT INTO `tu_vans` (`id`, `name`, `phone`, `email`, `text`, `created_at`, `updated_at`) VALUES
(1, 'sdsd', '47383898', 'tien2vv@gmail.com', 'sdfsdf', '2019-10-16 11:44:10', '2019-10-16 11:44:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Admin User', 'tien2vv@gmail.com', NULL, '$2y$10$8ipDZJuzO5lKALO89e7JkebjEQ9/Hj/uzJ3kLH.NE9L53/VrRN0R.', NULL, '2019-07-28 10:04:49', '2019-07-28 10:04:49');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug_id` bigint(20) UNSIGNED NOT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `mdescription` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `uid` bigint(20) UNSIGNED NOT NULL,
  `cid` bigint(20) UNSIGNED DEFAULT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature` tinyint(1) NOT NULL DEFAULT 0,
  `viewcount` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `image`, `slug_id`, `keywords`, `mdescription`, `uid`, `cid`, `link`, `feature`, `viewcount`, `created_at`, `updated_at`) VALUES
(1, 'Đồ gỗ mỹ nghệ tinh xảo giá “khủng” tại chợ xuân phố núi sdasd sdfsdfsdf', '/photos/2/wallpaper_op2.jpg', 28, NULL, NULL, 2, 1, 'https://www.youtube.com/watch?v=UBv-GcD3jHE', 1, 0, '2019-07-31 17:32:16', '2019-10-02 20:35:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_news`
--
ALTER TABLE `category_news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_news_slug_id_foreign` (`slug_id`);

--
-- Indexes for table `cate_videos`
--
ALTER TABLE `cate_videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cate_videos_slug_id_foreign` (`slug_id`);

--
-- Indexes for table `dang_kies`
--
ALTER TABLE `dang_kies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `events_slug_id_foreign` (`slug_id`),
  ADD KEY `events_uid_foreign` (`uid`);

--
-- Indexes for table `ieg_me_cates`
--
ALTER TABLE `ieg_me_cates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ieg_me_cates_slug_id_foreign` (`slug_id`);

--
-- Indexes for table `ieg_me_posts`
--
ALTER TABLE `ieg_me_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ieg_me_posts_slug_id_foreign` (`slug_id`),
  ADD KEY `ieg_me_posts_cid_foreign` (`cid`),
  ADD KEY `ieg_me_posts_uid_foreign` (`uid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nang_lucs`
--
ALTER TABLE `nang_lucs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_slug_id_foreign` (`slug_id`),
  ADD KEY `news_cid_foreign` (`cid`),
  ADD KEY `news_uid_foreign` (`uid`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pages_slug_id_foreign` (`slug_id`),
  ADD KEY `pages_uid_foreign` (`uid`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `slugs`
--
ALTER TABLE `slugs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slugs_slug_unique` (`slug`);

--
-- Indexes for table `tu_vans`
--
ALTER TABLE `tu_vans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `videos_slug_id_foreign` (`slug_id`),
  ADD KEY `videos_uid_foreign` (`uid`),
  ADD KEY `videos_cid_foreign` (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_news`
--
ALTER TABLE `category_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cate_videos`
--
ALTER TABLE `cate_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dang_kies`
--
ALTER TABLE `dang_kies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ieg_me_cates`
--
ALTER TABLE `ieg_me_cates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ieg_me_posts`
--
ALTER TABLE `ieg_me_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `nang_lucs`
--
ALTER TABLE `nang_lucs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slugs`
--
ALTER TABLE `slugs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tu_vans`
--
ALTER TABLE `tu_vans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_news`
--
ALTER TABLE `category_news`
  ADD CONSTRAINT `category_news_slug_id_foreign` FOREIGN KEY (`slug_id`) REFERENCES `slugs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cate_videos`
--
ALTER TABLE `cate_videos`
  ADD CONSTRAINT `cate_videos_slug_id_foreign` FOREIGN KEY (`slug_id`) REFERENCES `slugs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_slug_id_foreign` FOREIGN KEY (`slug_id`) REFERENCES `slugs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `events_uid_foreign` FOREIGN KEY (`uid`) REFERENCES `users` (`id`);

--
-- Constraints for table `ieg_me_cates`
--
ALTER TABLE `ieg_me_cates`
  ADD CONSTRAINT `ieg_me_cates_slug_id_foreign` FOREIGN KEY (`slug_id`) REFERENCES `slugs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ieg_me_posts`
--
ALTER TABLE `ieg_me_posts`
  ADD CONSTRAINT `ieg_me_posts_cid_foreign` FOREIGN KEY (`cid`) REFERENCES `ieg_me_cates` (`id`),
  ADD CONSTRAINT `ieg_me_posts_slug_id_foreign` FOREIGN KEY (`slug_id`) REFERENCES `slugs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ieg_me_posts_uid_foreign` FOREIGN KEY (`uid`) REFERENCES `users` (`id`);

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_cid_foreign` FOREIGN KEY (`cid`) REFERENCES `category_news` (`id`),
  ADD CONSTRAINT `news_slug_id_foreign` FOREIGN KEY (`slug_id`) REFERENCES `slugs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `news_uid_foreign` FOREIGN KEY (`uid`) REFERENCES `users` (`id`);

--
-- Constraints for table `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `pages_slug_id_foreign` FOREIGN KEY (`slug_id`) REFERENCES `slugs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pages_uid_foreign` FOREIGN KEY (`uid`) REFERENCES `users` (`id`);

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_cid_foreign` FOREIGN KEY (`cid`) REFERENCES `cate_videos` (`id`),
  ADD CONSTRAINT `videos_slug_id_foreign` FOREIGN KEY (`slug_id`) REFERENCES `slugs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `videos_uid_foreign` FOREIGN KEY (`uid`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
