-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 16, 2024 at 06:18 AM
-- Server version: 8.0.35
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mohmarke_mr_protfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Abdallh_Elzayat', 'admin@gmail.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, '2024-08-06 03:33:07', '2024-08-06 03:33:07');

-- --------------------------------------------------------

--
-- Table structure for table `banner_homes`
--

CREATE TABLE `banner_homes` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_homes`
--

INSERT INTO `banner_homes` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(5, 'الاسم  هنا ثلاثي', 'هيبقي هنا نبذة عني لا تقل سطر كدا', '2024-08-07 11:38:14', '2024-08-28 01:31:35');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'كورس التسويق الالكتروني تعديل', 'يبللليبلييبللليبلييبللليبلييبللليبلييبللليبلييبللليبلييبللليبلييبللليبلييبللليبلييبللليبلييبللليبلييبللليبلييبللليبلييبللليبلييبللليبلييبللليبلييبللليبلييبللليبلييبللليبلييبللليبلييبللليبلييبللليبلييبللليبلييبللليبلييبللليبلييبللليبلييبللليبلييبللليبلييبللليبلييبللليبلييبللليبلييبللليبلييبللليبلييبللليبلييبللليبلييبللليبلييبللليبلييبللليبلييبللليبلييبللليبلييبللليبلييبللليبلييبللليبلي\"', 'testtesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttestte', 'uploads/12Yo3qLlgHP4CDGeW0Ds.png', '2024-08-26 05:42:28', '2024-08-26 05:54:08'),
(3, 'Minima minim soluta', 'Consequuntur cum omnConsequuntur cum omnConsequuntur cum omnConsequuntur cum omnConsequuntur cum omnConsequuntur cum omnConsequuntur cum omnConsequuntur cum omnConsequuntur cum omnConsequuntur cum omnConsequuntur cum omnConsequuntur cum omnConsequuntur cum omnConsequuntur cum omnConsequuntur cum omnConsequuntur cum omnConsequuntur cum omnConsequuntur cum omnConsequuntur cum omnConsequuntur cum omnConsequuntur cum omnConsequuntur cum omnConsequuntur cum omnConsequuntur cum omnConsequuntur cum omnConsequuntur cum omnConsequuntur cum omnConsequuntur cum omn', 'Exercitation dolor t', 'uploads/fSYc4PSlHPLblH1j8mzR.png', '2024-08-26 06:18:22', '2024-08-26 06:18:22'),
(4, 'Aut in in officia ni', 'Rerum exercitationemRerum exercitationemRerum exercitationemRerum exercitationemRerum exercitationemRerum exercitationemRerum exercitationemRerum exercitationemRerum exercitationemRerum exercitationemRerum exercitationem', 'Et ex est ut est aut', 'uploads/jT4aYSRUyaT1JPVytW8T.png', '2024-08-26 06:18:38', '2024-08-26 06:18:38'),
(5, 'كورس التسويق الالكتروني', 'كورس التسويق الالكتروني\"', 'كورس التسويق الالكتروني', 'uploads/qeQUMMlrt0L1ah6Z9fuj.png', '2024-08-27 16:40:03', '2024-08-27 16:44:22');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `image`, `created_at`, `updated_at`) VALUES
(6, 'uploads/uyBBPvEQHKHTgSkQRGg4.png', '2024-08-07 14:47:38', '2024-08-07 14:56:02'),
(7, 'uploads/4xxIGzVatQqQKWKtfdjn.jpg', '2024-08-07 14:47:51', '2024-08-07 14:47:51'),
(8, 'uploads/iBecZmyYnCsyNtpNUQxu.png', '2024-08-07 15:07:26', '2024-08-07 15:07:26'),
(9, 'uploads/UjXXtt3doesLSmxZYnIX.png', '2024-08-07 15:09:33', '2024-08-07 15:09:33'),
(10, 'uploads/KzvtsmIpKWMnoux8qVc3.png', '2024-08-07 15:09:46', '2024-08-07 15:09:46'),
(11, 'uploads/MvXQfyfGKNttX7ZcHx5N.png', '2024-08-07 15:10:04', '2024-08-07 15:10:04'),
(12, 'uploads/dx2jK6cWJ8jlrysnM3US.png', '2024-08-07 15:10:21', '2024-08-07 15:10:21'),
(13, 'uploads/hyQluHR4R89312i5Wry2.png', '2024-08-23 03:40:31', '2024-08-23 03:40:31');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_text` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `instructor_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `description`, `content_text`, `instructor_name`, `price`, `image`, `created_at`, `updated_at`) VALUES
(14, 'كورس برمجة', 'كورس برمجةكورس برمجةكورس برمجةكورس برمجة', 'كورس برمجةكورس برمجةكورس برمجةكورس برمجةكورس برمجةكورس برمجةكورس برمجةكورس برمجةكورس برمجةكورس برمجةكورس برمجةكورس برمجةكورس برمجةكورس برمجةكورس برمجةكورس برمجةكورس برمجةكورس برمجةكورس برمجةكورس برمجةكورس برمجة', 'Regina Irwin', 222.00, 'uploads/vesg3QkcNnB5LztkznsP.png', '2024-08-27 08:03:31', '2024-08-27 08:03:31'),
(15, 'HTML', 'HTML', 'HTML', 'TEST', 500.00, 'uploads/6ohkV2eJ8WGWKH3tATj4.jpg', '2024-09-04 11:52:32', '2024-09-04 11:52:32'),
(16, 'كورس التسويق الالكتروني', 'كورس التسويق الالكترونيكورس التسويق الالكترونيكورس التسويق الالكترونيكورس التسويق الالكترونيكورس التسويق الالكترونيكورس التسويق الالكترونيكورس التسويق الالكترونيكورس التسويق الالكترونيكورس التسويق الالكترونيكورس التسويق الالكتروني', 'كورس التسويق الالكترونيكورس التسويق الالكترونيكورس التسويق الالكترونيكورس التسويق الالكترونيكورس التسويق الالكترونيكورس التسويق الالكترونيكورس التسويق الالكترونيكورس التسويق الالكتروني', 'abdallh elzayat', 233.00, 'uploads/zq1QsBeBwJDZlDfnITx7.jpeg', '2024-09-14 06:22:37', '2024-09-14 06:22:37');

-- --------------------------------------------------------

--
-- Table structure for table `course_user`
--

CREATE TABLE `course_user` (
  `id` bigint UNSIGNED NOT NULL,
  `course_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'برمجة  موقع برمجة  موقع برمجة  موقع برمجة  موقع برمجة  موقع برمجة  موقع برمجة  موقع برمجة  موقع برمجة  موقع برمجة  موقع 342423434324324234234234324', 'برمجة  موقع برمجة  موقع برمجة  موقع برمجة  موقع برمجة  موقع برمجة  موقع برمجة  موقع برمجة  موقع برمجة  موقع برمجة  موقع 342423434324324234234234324', 'uploads/E5Grl4OqRPIogyxMyp9Y.png', '2024-08-09 05:25:06', '2024-08-09 05:57:45'),
(2, 'برمجة  موقع برمجة  موقع برمجة  موقع برمجة  موقع برمجة  موقع برمجة  موقع', 'برمجة  موقع برمجة  موقع برمجة  موقع برمجة  موقع برمجة  موقع برمجة  موقع برمجة  موقع برمجة  موقع برمجة  موقع برمجة  موقع برمجة  موقع برمجة  موقع برمجة  موقع', 'uploads/vOpyv1z4Hrvoq1EwnL6w.png', '2024-08-09 05:57:11', '2024-08-09 05:57:11'),
(3, 'برمجة  موقع برمجة  موقع برمجة  موقع برمجة  موقع برمجة  موقع برمجة  موقع برمجة  موقع برمجة  موقع برمجة  موقع برمجة  موقع 342423434324324234234234324', 'برمجة  موقع برمجة  موقع برمجة  موقع برمجة  موقع برمجة  موقع برمجة  موقع برمجة  موقع برمجة  موقع برمجة  موقع برمجة  موقع 342423434324324234234234324', 'uploads/5AqS0powWmNX4ZPe5BGN.png', '2024-08-09 05:57:32', '2024-08-09 05:57:32'),
(4, 'تطبيق فلاتر متكامل', 'مناقشتها هنا. يمكنني المساعدة في فهم وتحليل الكود المقدم في النصوص والبرمجة النصية، ولكن لا أستطيع الوصول إلى ملفات أو أكواد خارج نطاق النصوص التي ترسلها هنا مباشرة', 'uploads/ie4FcEmHZhCxQQDy0v8q.png', '2024-08-09 05:58:11', '2024-08-09 05:58:11'),
(5, 'Sage Calhoun', 'Sunt esse porro qu', 'uploads/6Yo1HBQlNdOi7ctQHYdp.png', '2024-08-18 14:20:52', '2024-08-18 14:20:52'),
(6, 'Wing Ramirez', 'Labore ipsum occaeca', 'uploads/7mRN24AkpJ6sOvVO1Wxf.png', '2024-08-18 14:21:12', '2024-08-18 14:21:12'),
(7, 'Daquan Stephens', 'Fugiat dignissimos o', 'uploads/J4CsPjubEWXajukZUDme.png', '2024-08-18 14:21:42', '2024-08-18 14:21:42'),
(8, 'Ivan Blevins', 'Temporibus deleniti', 'uploads/XD4yXTo1H8FLrM1jWbHa.png', '2024-09-09 12:02:49', '2024-09-09 12:02:49'),
(9, 'Rina Marquez', 'Alias magni ex cumqu', 'uploads/YNUfdwGzMb03eP73K311.png', '2024-09-09 12:12:48', '2024-09-09 12:12:48');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_08_06_062029_create_admins_table', 1),
(6, '2024_08_07_073806_create_banner_homes_table', 1),
(7, '2024_08_07_155602_create_companies_table', 1),
(8, '2024_08_07_190711_create_testimonials_table', 1),
(9, '2024_08_08_014117_create_orders_table', 1),
(10, '2024_08_08_043711_create_services_table', 1),
(11, '2024_08_09_064825_create_teams_table', 1),
(12, '2024_08_09_075901_create_galleries_table', 1),
(13, '2024_08_24_093727_create_courses_table', 1),
(14, '2024_08_24_094116_create_videos_table', 1),
(15, '2024_08_24_094428_create_course_user_table', 1),
(16, '2024_08_26_080459_create_blogs_table', 1),
(17, '2024_08_28_024239_create_products_table', 1),
(18, '2024_08_28_024409_create_product_user_table', 1),
(19, '2024_09_01_171518_create_payments_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(3, 'abdallh', 'abdallhelzayat@gmail.com', '01019386883', 'اريد تصميم موقع تعريفي لي', 'اريد تصميم موقع تعريفي لي', '2024-08-08 01:29:54', '2024-08-08 01:29:54'),
(4, 'عبدالله الزيات', 'abdallhelzayat194@gmail.com', '01212484233', 'اريد تصميم وبرمجة متجر الكتروني', 'اريد تصميم وبرمجة متجر الكتروني', '2024-08-08 01:31:31', '2024-08-08 01:31:31'),
(5, 'Blaze Meyer', 'maracu@mailinator.com', '+1 (837) 425-6853', 'Earum voluptates dol', 'Quibusdam eaque anim', '2024-08-12 13:47:24', '2024-08-12 13:47:24'),
(6, 'عبدالله الزيات', 'abdallhelzayat194@gmail.com', '01212484233', 'اريد كورس التسويق', 'الكورس اريدة لو سمحت', '2024-08-18 14:05:50', '2024-08-18 14:05:50'),
(7, 'abdallh Elzayat', 'abdallhelzayat.dev@gmail.com', '01212484233', 'استشارة بهدف معرفة التسويق', 'abdalllllllllllllllllllllllllllllll', '2024-08-23 04:11:50', '2024-08-23 04:11:50'),
(8, 'abdallh Elzayat', 'abdallhelzayat194@gmail.com', '123456789', 'استشارة بهدف معرفة التسويق', 'اغاقغغفلابلالبابابلابا', '2024-08-26 03:30:46', '2024-08-26 03:30:46'),
(9, 'يسبيسبسيبسيبيبسيبيسبيسب', 'nagykerollos110@gmail.com', '01212484233', 'استشارة بهدف معرفة التسويق', 'يىلابتيلاىسباتيسلابسيابلاريلسبريسغفبريبغفيسربسيربيليىلابتيلاىسباتيسلابسيابلاريلسبريسغفبريبغفيسربسيربيليىلابتيلاىسباتيسلابسيابلاريلسبريسغفبريبغفيسربسيربيليىلابتيلاىسباتيسلابسيابلاريلسبريسغفبريبغفيسربسيربيليىلابتيلاىسباتيسلابسيابلاريلسبريسغفبريبغفيسربسيربيليىلابتيلاىسباتيسلابسيابلاريلسبريسغفبريبغفيسربسيربيليىلابتيلاىسباتيسلابسيابلاريلسبريسغفبريبغفيسربسيربيل', '2024-08-27 07:58:18', '2024-08-27 07:58:18');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `gateway` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(8,2) NOT NULL,
  `status` enum('pending','successful','failed') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `course_id` bigint UNSIGNED DEFAULT NULL,
  `product_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user_id`, `gateway`, `reference_id`, `amount`, `status`, `course_id`, `product_id`, `created_at`, `updated_at`) VALUES
(6, 1, 'thawani', 'checkout_CmtOrW0ryVYMCjIFe4qxmK6GApKeL6GIDjTIDj7phpwcCW1Ylp', 672.00, 'successful', NULL, 8, '2024-09-07 17:53:29', '2024-09-07 17:53:54'),
(7, 1, 'thawani', 'checkout_a1wcbYu7eNdyQtgVWJ96DKslKFvZKpLnGUcyEmYAYYGm4tKDRj', 500.00, 'successful', 15, NULL, '2024-09-07 17:54:07', '2024-09-07 18:00:38'),
(8, 1, 'thawani', 'checkout_wsboyU0UVAILsroVP1HhDvURMxWk2oJsssJH0mRo10IW5tsJmw', 151.00, 'successful', NULL, 9, '2024-09-07 18:00:53', '2024-09-07 18:01:19'),
(9, 1, 'thawani', 'checkout_DY7iUTCn378UkqF3Jp2Sm5e9jglGmbdsFIRuWXyGCBBq276htE', 222.00, 'successful', 14, NULL, '2024-09-07 18:01:38', '2024-09-07 18:02:03'),
(10, 1, 'thawani', 'checkout_D1VRsv3AMTz1Kg7anNekKC45ruq9uC3WOGF7IBW7FdDmuHTVQN', 500.00, 'successful', 15, NULL, '2024-09-07 18:02:26', '2024-09-07 18:03:11'),
(11, 1, 'thawani', 'checkout_4miap5BnwN4thWuME3dsErhozoZa94LZ8EuxsCePzJ52dJencv', 500.00, 'pending', 15, NULL, '2024-09-07 18:05:54', '2024-09-07 18:05:54'),
(12, 8, 'thawani', 'checkout_foJkwlXegd4FUqnh8yS9UIWWqZVdPsAGP6gygLs1HHm9j3NHVo', 672.00, 'successful', NULL, 8, '2024-09-08 16:58:48', '2024-09-08 16:59:09'),
(13, 8, 'thawani', 'checkout_y8NEMmQCe5l4LptE1SI7dLF9Dvx0Xky8xxXXNORprPPESr8GDu', 500.00, 'successful', 15, NULL, '2024-09-08 16:59:24', '2024-09-08 16:59:47'),
(14, 8, 'thawani', 'checkout_RyyGqsziSYcZKQncfcIa6H5XHBWNzMNq3wZZSuxwvBu39Y8wbz', 222.00, 'pending', 14, NULL, '2024-09-08 17:00:21', '2024-09-08 17:00:21');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `file_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `image`, `price`, `file_path`, `created_at`, `updated_at`) VALUES
(8, 'Arthur Solisss', 'Sit at dolor sed re', 'products_images/W2C2KdyZyBlZISO1m0dqYCQhc7kXTgR2C4MjUAQi.png', 672.00, 'products_files/HTi2sB5dE3OGGqstRJyb9s1ivcPEKNFVsf240BUw.docx', '2024-09-07 16:07:26', '2024-09-09 13:08:05'),
(9, 'Sydnee Robles', 'Voluptatem In sint', 'products_images/m1zmcguZXsbffJUPu4S1iajyWvQh7V3G7A0xjCGh.png', 151.00, 'products_files/3LpyGiMkSR7V30ywJRX55roJpepJ5QR9GPv1ZjN1.docx', '2024-09-07 16:12:22', '2024-09-07 16:12:22'),
(17, 'Scarlett Daniels', 'Quod rerum nostrud f', 'products_images/60sDyOwsOtMmrx58scflh7xCf8df7lzr24d8piBZ.jpg', 525.00, 'products_files/ODRsnxU6zhHgLU5tEnNJ5mGTmH06EhquVgdmwQRf.docx', '2024-09-09 12:57:51', '2024-09-09 12:57:51'),
(18, 'Kimberly Duran', 'Odio omnis dolor ali', 'products_images/E9sv0ifDSLM1fET8tzwELOu3rSsdnVxQRRsZ431e.jpg', 116.00, 'products_files/h0hOtxXrDrTf7SkAX7rZHIBR2EOF7MxzW7CRVYIt.docx', '2024-09-09 12:58:28', '2024-09-09 12:58:28'),
(19, 'Ainsley Payne', 'Est illum doloribus', 'products_images/ZnBJJXgEvNKqloeuD7NKDZ3CY0gP4Qz4Tr8ErXNN.jpg', 983.00, 'products_files/rFeADlW5lfQERwoULgPUtLxBpltuf3RmLN6or4Sb.docx', '2024-09-09 13:00:06', '2024-09-09 13:00:06'),
(20, 'Austin Rowe', 'Tempor nulla laboris', 'products_images/EYfwLKCJcGnVr3UZ3eAzFSS485sAHlHnrWjgpEnP.png', 59.00, 'products_files/38ganR1Gy3Z7nuf7OOJCbS3bjdeoNPK1YDLRJGml.docx', '2024-09-10 00:14:50', '2024-09-10 00:14:50');

-- --------------------------------------------------------

--
-- Table structure for table `product_user`
--

CREATE TABLE `product_user` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `status` enum('pending','completed','canceled') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 'تسوويق', 'مناقشتها هنا. يمكنني المساعدة في فهم وتحليل الكود المقدم في النصوص والبرمجة النصية، ولكن لا أستطيع الوصول إلى ملفات أو أكواد خارج نطاق النصوص التي ترسلها هنا مباشرة', 'uploads/pMmXP4E6c8WZpAaY5NEK.png', '2024-08-08 03:05:40', '2024-08-08 03:05:40'),
(3, 'برمجة مواقع', 'مناقشتها هنا. يمكنني المساعدة في فهم وتحليل الكود المقدم في النصوص والبرمجة النصية، ولكن لا أستطيع الوصول إلى ملفات أو أكواد خارج نطاق النصوص التي ترسلها هنا مباشرة', 'uploads/90NPOSyjwx3YC8xUAa2i.png', '2024-08-08 03:18:12', '2024-08-08 03:18:12'),
(4, 'برمجة تطبيقات', 'مناقشتها هنا. يمكنني المساعدة في فهم وتحليل الكود المقدم في النصوص والبرمجة النصية، ولكن لا أستطيع الوصول إلى ملفات أو أكواد خارج نطاق النصوص التي ترسلها هنا مباشرة', 'uploads/2HJBgE705mA5WGgrUSVS.png', '2024-08-08 03:18:27', '2024-08-08 03:18:27'),
(5, 'اعلانات سوشيال ميديا', 'مناقشتها هنا. يمكنني المساعدة في فهم وتحليل الكود المقدم في النصوص والبرمجة النصية، ولكن لا أستطيع الوصول إلى ملفات أو أكواد خارج نطاق النصوص التي ترسلها هنا مباشرة', 'uploads/2hGcufAigjLzHnhDjuV2.png', '2024-08-08 03:18:54', '2024-08-08 03:18:54'),
(6, 'تسويق الكتروني', 'مناقشتها هنا. يمكنني المساعدة في فهم وتحليل الكود المقدم في النصوص والبرمجة النصية، ولكن لا أستطيع الوصول إلى ملفات أو أكواد خارج نطاق النصوص التي ترسلها هنا مباشرة', 'uploads/DFpoEkSXJTsTB3DfaTfH.png', '2024-08-08 03:19:22', '2024-08-08 03:19:22'),
(7, 'برمجة مواقع ورد بريس', 'مناقشتها هنا. يمكنني المساعدة في فهم وتحليل الكود المقدم في النصوص والبرمجة النصية، ولكن لا أستطيع الوصول إلى ملفات أو أكواد خارج نطاق النصوص التي ترسلها هنا مباشرة', 'uploads/wq8smXbCsA3UHonZwYss.png', '2024-08-08 04:03:35', '2024-08-08 04:03:35');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `x_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `description`, `image`, `facebook_link`, `x_link`, `instagram_link`, `created_at`, `updated_at`) VALUES
(2, 'عبدالله الزيات', 'مناقشتها هنا. يمكنني المساعدة في فهم وتحليل الكود المقدم في النصوص والبرمجة النصية، ولكن لا أستطيع الوصول إلى ملفات أو أكواد خارج نطاق النصوص التي ترسلها هنا مباشرة', 'uploads/lp5kCPhgQJAzJtz22ADc.png', 'snnfbdjsfknbdsjfsndsjfnbdsf', 'sfsdfsdnbfhjsdbnhjdbfhdsbfhj', 'dsfknsdfjndsjkfndsfjkndjkfdfdff', '2024-08-09 04:23:47', '2024-08-09 04:23:47'),
(3, 'Kieran Medina', 'مناقشتها هنا. يمكنني المساعدة في فهم وتحليل الكود المقدم في النصوص والبرمجة النصية، ولكن لا أستطيع الوصول إلى ملفات أو أكواد خارج نطاق النصوص التي ترسلها هنا مباشرة', 'uploads/mVUCjHXrGa1ofeNQeo4D.png', 'Duis dicta quaerat a', 'Velit cillum quaerat', 'Enim et laborum expl', '2024-08-09 04:33:56', '2024-08-09 04:39:04'),
(4, 'Colette Barber', 'مناقشتها هنا. يمكنني المساعدة في فهم وتحليل الكود المقدم في النصوص والبرمجة النصية، ولكن لا أستطيع الوصول إلى ملفات أو أكواد خارج نطاق النصوص التي ترسلها هنا مباشرة', 'uploads/96FD9SSlHribUuKOyHxT.png', 'Voluptatum consequat', 'Voluptatem quam dolo', 'Voluptatem similiqu', '2024-08-09 04:34:15', '2024-08-09 04:40:44'),
(5, 'Linda Kirk', 'مناقشتها هنا. يمكنني المساعدة في فهم وتحليل الكود المقدم في النصوص والبرمجة النصية، ولكن لا أستطيع الوصول إلى ملفات أو أكواد خارج نطاق النصوص التي ترسلها هنا مباشرة', 'uploads/nRorR8syEEb0y6FKKNpp.png', 'Deserunt facilis com', 'Dolor tempora est fu', 'Aspernatur laboris q', '2024-08-09 04:34:35', '2024-08-09 04:40:57'),
(6, 'India Mercado', 'مناقشتها هنا. يمكنني المساعدة في فهم وتحليل الكود المقدم في النصوص والبرمجة النصية، ولكن لا أستطيع الوصول إلى ملفات أو أكواد خارج نطاق النصوص التي ترسلها هنا مباشرة', 'uploads/W3dFHupa1aS0mvz6l0bU.png', 'Aut quia quisquam id', 'Aut excepturi minus', 'Minim ipsam adipisci', '2024-08-09 04:34:51', '2024-08-09 04:41:09'),
(7, 'Neve Gamble', 'Voluptates accusamus', 'uploads/HVYtBJMp2mU90HtL7ZCT.jpg', 'Esse aute et est q', 'Ex temporibus iusto', 'Qui voluptas libero', '2024-09-09 13:11:46', '2024-09-09 13:11:46'),
(8, 'Declan Collins', 'Excepteur pariatur', 'uploads/Mr6gmP56RFnsOAdoGqvY.jpg', 'Nostrud nostrum volu', 'Sunt est esse aliqua', 'Quod non vero tempor', '2024-09-09 13:11:58', '2024-09-09 13:11:58'),
(9, 'Fredericka Raymond', 'Eveniet rerum sed v', 'uploads/9AIM0nRUXL0ST4bI0rS2.jpg', 'Neque asperiores sit', 'Nihil adipisci nobis', 'Duis do esse aliqua', '2024-09-09 13:12:11', '2024-09-09 13:12:11');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nickname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `nickname`, `description`, `image`, `created_at`, `updated_at`) VALUES
(3, 'عبدالله الزيات', 'شركة ماجيا', 'الخدمة ممتازة والرد سريع من الموظفين بداخل الشركة', 'uploads/2FFgbUtLeaQ5B9CZjDYX.png', '2024-08-07 16:46:53', '2024-08-08 00:06:18'),
(4, 'محمد علي', 'شركة نون للتجاة', 'الخدمة ممتازة والرد سريع من الموظفين بداخل الشركة', 'uploads/PGxOoDeeNhF3m50JqryO.png', '2024-08-07 16:47:11', '2024-08-08 00:06:43'),
(5, 'محمد هلال', 'شركة المتوكل للتنظيف', 'الخدمة ممتازة والرد سريع من الموظفين بداخل الشركة', 'uploads/Sxvg80BGHWKM1SvLeX5T.png', '2024-08-07 16:53:00', '2024-08-08 00:07:22'),
(6, 'اسامة السيد', 'شركة النايف للعقارات', 'الخدمة ممتازة والرد سريع من الموظفين بداخل الشركة', 'uploads/2a0WWItfl1IP63QAB81l.png', '2024-08-09 03:43:42', '2024-08-09 03:44:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'عبدالله الزيات', '', 'abdallhelzayat194@gmail.com', NULL, '$2y$10$c5ZoiDxG8Nl4NqEwT/LW9.wkefa37NPc/3LWEVNpbwVug/FkFF58a', NULL, '2024-08-06 01:37:49', '2024-08-06 01:37:49'),
(2, 'عبدالله الزيات', '', 'admin@gmail.com', NULL, '$2y$10$7qEC.jQ7fvUxQE3b2dHfFeLsNR2RpYlLkEji9MSAIV0v7Y/9nuAAy', NULL, '2024-08-06 16:26:47', '2024-08-06 16:26:47'),
(3, 'عبدالله الزيات', '', 'abdallhelzayat@gmail.com', NULL, '$2y$10$gZt8Wgmy0fuQsGVn7PMtV.NHYDIfgHIlOpLpTvn9JwNnS3nv55N2m', NULL, '2024-08-07 11:33:37', '2024-08-07 11:33:37'),
(4, 'عبدالله الزيات', '01212484233', 'abdallh@gmail.com', NULL, '$2y$10$OqbncmUvUXCpJBwAJit/SeZY65TkC1RZQQuh0miewm4XU2q.Lxrd.', NULL, '2024-08-07 12:53:46', '2024-08-07 12:53:46'),
(5, 'عبدالله الزيات', '1212484233', 'abdallh20@gmail.com', NULL, '$2y$10$zlF/e8n3yrQDLCAHNpZd0etT51Xpk93Sg005gGitim4XOTEvCIXQG', NULL, '2024-08-09 06:10:55', '2024-08-09 06:10:55'),
(6, 'abdallh Elzayat', '123456789', 'abdallhelzayat200@gmail.com', NULL, '$2y$10$ZNUm3mEfORyDFx9SGAS.Z.7cJivMxuiUi7QdAz6KvHbUbju0Qpgzm', NULL, '2024-08-22 03:15:49', '2024-08-22 03:15:49'),
(7, 'Test Account', '0123455678', 'test@gmail.com', NULL, '$2y$10$vnOI/yt1IYrrHk5UK45cBO2QcHlBJmIQBQLdfmxVo2ZF/nP7x4kmW', NULL, '2024-09-04 10:40:57', '2024-09-04 10:40:57'),
(8, 'superadmin@appdevs.net', '123456789', 'testtest@gmail.com', NULL, '$2y$10$ru6icA8JyRXvM83HJ.JeHON04Im5PoKdzVW6rkZjA4X59d6qBeSqW', NULL, '2024-09-08 16:58:25', '2024-09-08 16:58:25');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint UNSIGNED NOT NULL,
  `course_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `course_id`, `title`, `description`, `video`, `created_at`, `updated_at`) VALUES
(3, 14, '98u98', 'jnuiojki', 'videos/ezU1OPSKSaLley83bixNBLrQNTnqBJ01xRN7jafv.mp4', '2024-09-04 11:40:43', '2024-09-04 11:40:43'),
(4, 14, 'test2', 'test12', 'videos/9eGDhZ7omSEHonnqA7b2Zh7e9tzmRejwj2zIR5KS.mp4', '2024-09-04 11:42:58', '2024-09-04 11:42:58'),
(5, 15, 'اساسيات', 'test', 'videos/qN8C56Hk1p1M3s2ADIsAaMnNiciG30uPyxenU0Ng.mp4', '2024-09-04 11:52:49', '2024-09-04 11:52:49'),
(6, 15, 'مبادئ', 'مبادئ', 'videos/E3mALR2n0Gp6ypmzIsMszHFTFVBRgttM4jFa6NlX.mp4', '2024-09-04 11:54:54', '2024-09-04 11:54:54'),
(7, 15, 'test', 'test', 'videos/UdoLwTb0ENJDgJoxiO8kkAKzqeplA2UmSr0IffKT.mp4', '2024-09-04 11:55:53', '2024-09-04 11:55:53'),
(8, 15, 'test', 'test', 'videos/1YyLSqzUba895IG4qDOYC4GvnZtGC0zScOHfssxP.mp4', '2024-09-04 12:11:30', '2024-09-04 12:11:30'),
(9, 15, 'test3', 'test344', 'videos/dnvCNiDq46FSfrWFlm1jh8TnsMG7foUaOeUdf6Ks.mp4', '2024-09-04 12:11:35', '2024-09-04 12:11:35'),
(10, 15, 'test56', 'dfg', 'videos/jgET5uZ78qIbQGvPkBgIFHsKg211im8v2oSO4RnW.mp4', '2024-09-04 12:11:40', '2024-09-04 12:11:40'),
(11, 15, 'dfg', 'dfg', 'videos/kqm8b65ATipiR32LCc81STg9Ht4oU9vWYLDZuGJb.mp4', '2024-09-04 12:11:44', '2024-09-04 12:11:44'),
(12, 15, 'sdf', 'sdf', 'videos/fJm9PkoX507ZRyE8Z9WonSyqGyHHOf7x8S99Hbwo.mp4', '2024-09-04 12:11:49', '2024-09-04 12:11:49'),
(13, 15, 'xcvsdf', 'sdf', 'videos/WDcmOrYZesqa3TEkRDJaWo2i55cGxVDyT3IglnCI.mp4', '2024-09-04 12:11:55', '2024-09-04 12:11:55'),
(14, 15, 'qweqwe', 'wersdf', 'videos/78wXHNLCQMnl2NLbnnLN3pVF6ZpHDoiuYJecvQFq.mp4', '2024-09-04 12:11:58', '2024-09-04 12:11:58'),
(15, 15, 'asdas', 'asdasd', 'videos/KbPo2E9ZtqnimHGv9Q3dtyqydFfJRhzpFtlUs4Ms.mp4', '2024-09-04 12:12:04', '2024-09-04 12:12:04'),
(16, 15, '5346t45', 'werwer', 'videos/ZCWTeSTZ1vn3LojmxQSXaGj9Zkf7w8wrlTfoMX3s.mp4', '2024-09-04 12:12:08', '2024-09-04 12:12:08'),
(17, 15, 'sdfsdf', 'dfgdfg', 'videos/KbSBMHBhd7QDZPbdlkDW3mDpKbAlA1pOVocYzBzu.mp4', '2024-09-04 12:12:12', '2024-09-04 12:12:12'),
(18, 15, 'e5t5e4t', 'dfgdfg', 'videos/wHR0LNhoPssYDpAiyR2H8rnXnFp7Bi3lYgcCNQ3I.mp4', '2024-09-04 12:12:18', '2024-09-04 12:12:18'),
(19, 14, 'فيديو المقدمة', 'ريلريبلؤرليبليبليبليبليبل', 'videos/3biYISJrOTLy9VEx1f83KZZlvoR7nY5JNQmGOXTj.mp4', '2024-09-04 16:53:02', '2024-09-04 16:53:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `banner_homes`
--
ALTER TABLE `banner_homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_user`
--
ALTER TABLE `course_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_user_course_id_foreign` (`course_id`),
  ADD KEY `course_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_user_id_foreign` (`user_id`),
  ADD KEY `payments_course_id_foreign` (`course_id`),
  ADD KEY `payments_product_id_foreign` (`product_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_user`
--
ALTER TABLE `product_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_user_user_id_foreign` (`user_id`),
  ADD KEY `product_user_product_id_foreign` (`product_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
  ADD KEY `videos_course_id_foreign` (`course_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner_homes`
--
ALTER TABLE `banner_homes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `course_user`
--
ALTER TABLE `course_user`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product_user`
--
ALTER TABLE `product_user`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course_user`
--
ALTER TABLE `course_user`
  ADD CONSTRAINT `course_user_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `course_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payments_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_user`
--
ALTER TABLE `product_user`
  ADD CONSTRAINT `product_user_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
