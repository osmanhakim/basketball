-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2025 at 03:41 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basketball`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '2025-05-08 12:14:15', '2025-05-08 12:14:15'),
(2, 1, '2025-05-08 12:14:16', '2025-05-08 12:14:16'),
(3, 1, '2025-05-08 12:14:17', '2025-05-08 12:14:17'),
(4, 1, '2025-05-08 12:14:18', '2025-05-08 12:14:18');

-- --------------------------------------------------------

--
-- Table structure for table `about_translations`
--

CREATE TABLE `about_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) NOT NULL,
  `title` varchar(191) NOT NULL,
  `sub_title` varchar(191) DEFAULT NULL,
  `description` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_translations`
--

INSERT INTO `about_translations` (`id`, `about_id`, `locale`, `title`, `sub_title`, `description`) VALUES
(1, 1, 'en', 'Basket-Ball Passion', 'Information About Us', 'Welcome to Basket-Ball Passion, your ultimate hub for everything basketball! We are dedicated to sharing the latest news, tips, and insights about the game we love. Whether you\'re a player, coach, or fan, our goal is to inspire and educate. Join us in celebrating the spirit of basketball and connecting with fellow enthusiasts worldwide.'),
(2, 1, 'ar', 'شغف كرة السلة', 'معلومات عنا', 'مرحبًا بكم في شغف كرة السلة، مركزكم الشامل لكل ما يتعلق بهذه اللعبة! نحن نشارك أحدث الأخبار والنصائح والتحليلات حول اللعبة التي نحب. سواء كنت لاعبًا أو مدربًا أو مشجعًا، هدفنا هو الإلهام والتعليم. انضم إلينا في الاحتفال بروح كرة السلة!'),
(3, 2, 'en', 'Little Dunk Heroes', 'Fun Basketball for Kids!', 'Welcome to Little Dunk Heroes—where kids learn basketball with joy! We teach basic skills, teamwork, and sportsmanship in a fun, safe environment. Our games and drills make every child feel like a superstar. Let’s dribble, shoot, and score with big smiles!'),
(4, 2, 'ar', 'أبطال الدنك الصغار', 'كرة سلة ممتعة للأطفال', 'مرحبًا بكم في أبطال الدنك الصغار—حيث يتعلم الأطفال كرة السلة بفرح! نعلمهم المهارات الأساسية، والعمل الجماعي، والروح الرياضية في بيئة ممتعة وآمنة. ألعابنا وتماريننا تجعل كل طفل يشعر بأنه نجم. دعونا نمرر، نسدد، ونحرز الأهداف بابتسامات كبيرة!'),
(5, 3, 'en', 'Mini Ballers Club', 'Kids Love Basketball!', 'Join the Mini Ballers Club—the coolest basketball adventure for kids! Through playful drills and mini-games, we help young players build confidence and make new friends. Basketball is about fun, learning, and growing together. Let’s bounce into action!'),
(6, 3, 'ar', 'نادي الكُرات الصغيرة', 'الأطفال يحبون كرة السلة', 'انضم إلى نادي الكُرات الصغيرة—مغامرة كرة السلة الأروع للأطفال! من خلال التمارين الممتعة والألعاب المصغرة، نساعد الصغار على بناء الثقة وتكوين صداقات جديدة. كرة السلة تعني المرح، التعلم، والنمو معًا. هيا نبدأ اللعب!'),
(7, 4, 'en', 'Tiny Hoops Academy', 'Where Kids Shoot for the Stars!', 'At Tiny Hoops Academy, every child discovers the magic of basketball! Our friendly coaches focus on fun fundamentals, coordination, and fair play. Whether shooting hoops or passing the ball, kids learn while laughing. Let’s play and dream big!'),
(8, 4, 'ar', 'أكاديمية السلال الصغيرة', 'حيث يصوب الأطفال نحو النجوم', 'في أكاديمية السلال الصغيرة، يكتشف كل طفل سحر كرة السلة! مدربوننا الودودون يركزون على الأساسيات الممتعة، التنسيق، واللعب النظيف. سواء في التسديد أو التمرير، الأطفال يتعلمون وهم يضحكون. هيا نلعب ونحلم كبيرًا!');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) DEFAULT NULL,
  `last_name` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `active` tinyint(1) DEFAULT 1,
  `created_by` varchar(191) DEFAULT 'system@app.com',
  `updated_by` varchar(191) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `first_name`, `last_name`, `email`, `password`, `active`, `created_by`, `updated_by`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, 'admin@app.com', '$2y$10$rVNdW13oh.oRCpm7WncKYum77m0ZpqjUMh8k2EbmOktKu7mv.QzlW', 1, 'system@app.com', NULL, NULL, '2025-05-08 12:14:11', '2025-05-08 12:14:11');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '2025-05-08 12:14:36', '2025-05-08 12:14:36'),
(2, 1, '2025-05-08 12:14:37', '2025-05-08 12:14:37'),
(3, 1, '2025-05-08 12:14:38', '2025-05-08 12:14:38');

-- --------------------------------------------------------

--
-- Table structure for table `blog_translations`
--

CREATE TABLE `blog_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) NOT NULL,
  `title` varchar(191) DEFAULT NULL,
  `description` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_translations`
--

INSERT INTO `blog_translations` (`id`, `blog_id`, `locale`, `title`, `description`) VALUES
(1, 1, 'en', 'Stay Healthy With', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. tellus lacus faucibus lectus, sed cursused eros ligula non odio.</p>'),
(2, 1, 'ar', 'حافظ على صحتك', '<p>هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً</p>'),
(3, 2, 'en', 'We Deliver Organic Fruits.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. tellus lacus faucibus lectus, sed cursused eros ligula non odio.</p>'),
(4, 2, 'ar', 'نحن نقدم الفواكه العضوية', '<p>هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً</p>'),
(5, 3, 'en', 'We care for your', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. tellus lacus faucibus lectus, sed cursused eros ligula non odio.</p>'),
(6, 3, 'ar', 'نحن نهتم بك', '<p>هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً</p>');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(191) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(1, 'fab fa-amazon-pay', 1, '2025-05-08 12:14:39', '2025-05-08 12:14:39'),
(2, 'fab fa-amazon-pay', 1, '2025-05-08 12:14:39', '2025-05-08 12:14:39'),
(3, 'fab fa-amazon-pay', 1, '2025-05-08 12:14:40', '2025-05-08 12:14:40');

-- --------------------------------------------------------

--
-- Table structure for table `category_translations`
--

CREATE TABLE `category_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) NOT NULL,
  `title` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_translations`
--

INSERT INTO `category_translations` (`id`, `category_id`, `locale`, `title`) VALUES
(1, 1, 'ar', 'فئة 1'),
(2, 1, 'en', 'Category 1'),
(3, 2, 'ar', 'فئة 2'),
(4, 2, 'en', 'Category 2'),
(5, 3, 'ar', 'فئة 3'),
(6, 3, 'en', 'Category 3');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `country_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2025-05-08 12:14:21', '2025-05-08 12:14:21'),
(2, 1, '2025-05-08 12:14:22', '2025-05-08 12:14:22'),
(3, 1, '2025-05-08 12:14:22', '2025-05-08 12:14:22'),
(4, 2, '2025-05-08 12:14:22', '2025-05-08 12:14:22'),
(5, 2, '2025-05-08 12:14:22', '2025-05-08 12:14:22'),
(6, 2, '2025-05-08 12:14:23', '2025-05-08 12:14:23'),
(7, 3, '2025-05-08 12:14:23', '2025-05-08 12:14:23'),
(8, 3, '2025-05-08 12:14:24', '2025-05-08 12:14:24'),
(9, 3, '2025-05-08 12:14:24', '2025-05-08 12:14:24');

-- --------------------------------------------------------

--
-- Table structure for table `city_translations`
--

CREATE TABLE `city_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) NOT NULL,
  `name` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `city_translations`
--

INSERT INTO `city_translations` (`id`, `city_id`, `locale`, `name`) VALUES
(1, 1, 'ar', 'القاهرة'),
(2, 1, 'en', 'Cairo'),
(3, 2, 'ar', 'الجيزه'),
(4, 2, 'en', 'Giza'),
(5, 3, 'ar', 'المنصورة'),
(6, 3, 'en', 'Mansoura'),
(7, 4, 'ar', 'مكه'),
(8, 4, 'en', 'Makka'),
(9, 5, 'ar', 'المدينه'),
(10, 5, 'en', 'El-Madeena'),
(11, 6, 'ar', 'الرياض'),
(12, 6, 'en', 'Al-Ryad'),
(13, 7, 'ar', 'مسقط'),
(14, 7, 'en', 'Maskat'),
(15, 8, 'ar', 'ظفار'),
(16, 8, 'en', 'Zaffar'),
(17, 9, 'ar', 'صحار'),
(18, 9, 'en', 'Sahar');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contactable_type` varchar(191) NOT NULL,
  `contactable_id` bigint(20) UNSIGNED NOT NULL,
  `contact` varchar(191) DEFAULT NULL,
  `type` varchar(191) DEFAULT NULL,
  `icon` varchar(191) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `contactable_type`, `contactable_id`, `contact`, `type`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\Setting', 1, '+966558555555', 'mobile', 'fas fa-mobile-alt', 1, '2025-05-08 12:14:13', '2025-05-08 12:14:13'),
(2, 'App\\Models\\Setting', 1, '+966558555555', 'whatsapp', 'fab fa-whatsapp', 1, '2025-05-08 12:14:13', '2025-05-08 12:14:13'),
(3, 'App\\Models\\Setting', 1, 'contact@advacon.com', 'email', 'far fa-envelope', 1, '2025-05-08 12:14:13', '2025-05-08 12:14:13'),
(4, 'App\\Models\\Setting', 1, 'https://www.facebook.com/', 'social', 'lab la-facebook-f', 1, '2025-05-08 12:14:14', '2025-05-08 12:14:14'),
(5, 'App\\Models\\Setting', 1, 'https://twitter.com/', 'social', 'lab la-twitter', 1, '2025-05-08 12:14:14', '2025-05-08 12:14:14'),
(6, 'App\\Models\\Setting', 1, 'https://google.com/', 'social', 'lab la-google', 1, '2025-05-08 12:14:14', '2025-05-08 12:14:14'),
(7, 'App\\Models\\Setting', 1, 'https://www.linkedin.com/', 'social', 'lab la-linkedin-in', 1, '2025-05-08 12:14:14', '2025-05-08 12:14:14'),
(8, 'App\\Models\\Setting', 1, 'https://www.instagram.com/', 'social', 'lab la-instagram', 1, '2025-05-08 12:14:14', '2025-05-08 12:14:14'),
(9, 'App\\Models\\Setting', 1, 'mailto:mail@website.com', 'social', 'las la-envelope', 1, '2025-05-08 12:14:14', '2025-05-08 12:14:14');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) DEFAULT NULL,
  `last_name` varchar(191) DEFAULT NULL,
  `subject` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `counters`
--

CREATE TABLE `counters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `created_at`, `updated_at`) VALUES
(1, '2025-05-08 12:14:19', '2025-05-08 12:14:19'),
(2, '2025-05-08 12:14:20', '2025-05-08 12:14:20'),
(3, '2025-05-08 12:14:21', '2025-05-08 12:14:21');

-- --------------------------------------------------------

--
-- Table structure for table `country_translations`
--

CREATE TABLE `country_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) NOT NULL,
  `name` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `country_translations`
--

INSERT INTO `country_translations` (`id`, `country_id`, `locale`, `name`) VALUES
(1, 1, 'ar', 'مصر'),
(2, 1, 'en', 'Egypt'),
(3, 2, 'ar', 'السعودية'),
(4, 2, 'en', 'Saudi Arabia'),
(5, 3, 'ar', 'عمان'),
(6, 3, 'en', 'Oman');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faq_translations`
--

CREATE TABLE `faq_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `faq_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) NOT NULL,
  `question` varchar(191) DEFAULT NULL,
  `answer` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(191) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(1, 'las la-thumbs-up', 1, '2025-05-08 12:14:27', '2025-05-08 12:14:27'),
(2, 'las la-trophy', 1, '2025-05-08 12:14:27', '2025-05-08 12:14:27'),
(3, 'las la-user-tie', 1, '2025-05-08 12:14:28', '2025-05-08 12:14:28'),
(4, 'lni lni-heart', 1, '2025-05-08 12:14:28', '2025-05-08 12:14:28');

-- --------------------------------------------------------

--
-- Table structure for table `feature_translations`
--

CREATE TABLE `feature_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `feature_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) NOT NULL,
  `title` varchar(191) DEFAULT NULL,
  `description` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feature_translations`
--

INSERT INTO `feature_translations` (`id`, `feature_id`, `locale`, `title`, `description`) VALUES
(1, 1, 'en', 'Stay Healthy', 'Basketball keeps you active, improves stamina, and enhances overall fitness'),
(2, 1, 'ar', 'حافظ على صحتك', 'تساعد كرة السلة في الحفاظ على النشاط، تحسين التحمل، وتعزيز اللياقة العامة'),
(3, 2, 'en', 'Build Muscle', 'Regular playing strengthens legs, arms, and core muscles'),
(4, 2, 'ar', 'بناء العضلات', 'الممارسة المنتظمة تقوي عضلات الساقين، الذراعين، ومنطقة الوسط'),
(5, 3, 'en', 'Strengthen Immune System', 'Physical activity boosts immunity and fights illnesses'),
(6, 3, 'ar', 'تقوية الجهاز المناعي', 'النشاط البدني يعزز المناعة ويحارب الأمراض'),
(7, 4, 'en', 'Cuts Heart Diseases', 'Basketball improves cardiovascular health and reduces heart risks'),
(8, 4, 'ar', 'تقليل أمراض القلب', 'تحسن كرة السلة صحة القلب وتقلل من مخاطر الأمراض القلبية');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filable_type` varchar(191) NOT NULL,
  `filable_id` bigint(20) UNSIGNED NOT NULL,
  `path` text DEFAULT NULL,
  `type` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `filable_type`, `filable_id`, `path`, `type`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\Setting', 1, 'seeders/settings/logo.png', 'logo', '2025-05-08 12:14:12', '2025-05-08 12:14:12'),
(2, 'App\\Models\\Setting', 1, 'seeders/settings/', 'white_logo', '2025-05-08 12:14:12', '2025-05-08 12:14:12'),
(3, 'App\\Models\\Setting', 1, 'seeders/settings/favicon.png', 'favicon', '2025-05-08 12:14:12', '2025-05-08 12:14:12'),
(4, 'App\\Models\\Setting', 1, 'seeders/settings/', 'contact_img', '2025-05-08 12:14:13', '2025-05-08 12:14:13'),
(5, 'App\\Models\\Setting', 1, 'seeders/settings/', 'footer_img', '2025-05-08 12:14:13', '2025-05-08 12:14:13'),
(6, 'App\\Models\\Setting', 1, 'seeders/settings/breadcrumb.jpg', 'breadcrumb', '2025-05-08 12:14:13', '2025-05-08 12:14:13'),
(7, 'App\\Models\\About', 1, 'seeders/about/standalone-0-img.jpg', 'image', '2025-05-08 12:14:16', '2025-05-08 12:14:16'),
(8, 'App\\Models\\About', 2, 'seeders/about/standalone-1-img.jpg', 'image', '2025-05-08 12:14:17', '2025-05-08 12:14:17'),
(9, 'App\\Models\\About', 3, 'seeders/about/standalone-2-img.jpg', 'image', '2025-05-08 12:14:18', '2025-05-08 12:14:18'),
(10, 'App\\Models\\About', 4, 'seeders/about/standalone-3-img.jpg', 'image', '2025-05-08 12:14:19', '2025-05-08 12:14:19'),
(11, 'App\\Models\\Slider', 1, 'seeders/sliders/slider1.jpg', 'image', '2025-05-08 12:14:25', '2025-05-08 12:14:25'),
(12, 'App\\Models\\Slider', 2, 'seeders/sliders/slider2.jpg', 'image', '2025-05-08 12:14:26', '2025-05-08 12:14:26'),
(13, 'App\\Models\\Testimonial', 1, 'seeders/testimonials/face-1.jpg', 'image', '2025-05-08 12:14:29', '2025-05-08 12:14:29'),
(14, 'App\\Models\\Testimonial', 2, 'seeders/testimonials/face-2.jpg', 'image', '2025-05-08 12:14:30', '2025-05-08 12:14:30'),
(15, 'App\\Models\\Testimonial', 3, 'seeders/testimonials/face-3.jpg', 'image', '2025-05-08 12:14:30', '2025-05-08 12:14:30'),
(16, 'App\\Models\\Testimonial', 4, 'seeders/testimonials/face-4.jpg', 'image', '2025-05-08 12:14:31', '2025-05-08 12:14:31'),
(17, 'App\\Models\\Testimonial', 5, 'seeders/testimonials/face-5.jpg', 'image', '2025-05-08 12:14:31', '2025-05-08 12:14:31'),
(18, 'App\\Models\\Page', 3, 'seeders/pages/first_standalone.jpeg', 'image', '2025-05-08 12:14:35', '2025-05-08 12:14:35'),
(19, 'App\\Models\\Page', 4, 'seeders/pages/second_standalone.jpg', 'image', '2025-05-08 12:14:36', '2025-05-08 12:14:36'),
(20, 'App\\Models\\Page', 5, 'seeders/pages/third_standalone.jpg', 'image', '2025-05-08 12:14:36', '2025-05-08 12:14:36'),
(21, 'App\\Models\\Blog', 1, 'seeders/blogs/1.jpg', 'image', '2025-05-08 12:14:37', '2025-05-08 12:14:37'),
(22, 'App\\Models\\Blog', 2, 'seeders/blogs/2.jpg', 'image', '2025-05-08 12:14:38', '2025-05-08 12:14:38'),
(23, 'App\\Models\\Blog', 3, 'seeders/blogs/3.jpg', 'image', '2025-05-08 12:14:38', '2025-05-08 12:14:38'),
(24, 'App\\Models\\Category', 1, 'seeders/categories/1.jpg', 'image', '2025-05-08 12:14:39', '2025-05-08 12:14:39'),
(25, 'App\\Models\\Category', 2, 'seeders/categories/2.jpg', 'image', '2025-05-08 12:14:40', '2025-05-08 12:14:40'),
(26, 'App\\Models\\Category', 3, 'seeders/categories/3.jpg', 'image', '2025-05-08 12:14:40', '2025-05-08 12:14:40'),
(27, 'App\\Models\\Product', 1, 'seeders/products/1.jpg', 'image', '2025-05-08 12:14:41', '2025-05-08 12:14:41'),
(28, 'App\\Models\\Product', 2, 'seeders/products/2.jpg', 'image', '2025-05-08 12:14:42', '2025-05-08 12:14:42'),
(29, 'App\\Models\\Product', 3, 'seeders/products/3.jpg', 'image', '2025-05-08 12:14:42', '2025-05-08 12:14:42'),
(30, 'App\\Models\\Product', 4, 'seeders/products/4.jpg', 'image', '2025-05-08 12:14:43', '2025-05-08 12:14:43'),
(31, 'App\\Models\\Product', 5, 'seeders/products/5.jpg', 'image', '2025-05-08 12:14:43', '2025-05-08 12:14:43'),
(32, 'App\\Models\\Product', 6, 'seeders/products/6.jpg', 'image', '2025-05-08 12:14:44', '2025-05-08 12:14:44'),
(33, 'App\\Models\\Product', 7, 'seeders/products/7.jpg', 'image', '2025-05-08 12:14:45', '2025-05-08 12:14:45'),
(34, 'App\\Models\\Product', 8, 'seeders/products/8.jpg', 'image', '2025-05-08 12:14:45', '2025-05-08 12:14:45'),
(35, 'App\\Models\\Photo', 1, '/seeders/gallery/portfolio-1.jpg', 'image', '2025-05-08 12:14:47', '2025-05-08 12:14:47'),
(36, 'App\\Models\\Photo', 2, '/seeders/gallery/portfolio-2.jpg', 'image', '2025-05-08 12:14:48', '2025-05-08 12:14:48'),
(37, 'App\\Models\\Photo', 3, '/seeders/gallery/portfolio-3.jpg', 'image', '2025-05-08 12:14:48', '2025-05-08 12:14:48'),
(38, 'App\\Models\\Photo', 4, '/seeders/gallery/portfolio-4.jpg', 'image', '2025-05-08 12:14:48', '2025-05-08 12:14:48'),
(39, 'App\\Models\\Photo', 5, '/seeders/gallery/kid1.jpg', 'image', '2025-05-08 12:14:50', '2025-05-08 12:14:50'),
(40, 'App\\Models\\Photo', 6, '/seeders/gallery/kid2.jpg', 'image', '2025-05-08 12:14:50', '2025-05-08 12:14:50'),
(41, 'App\\Models\\Photo', 7, '/seeders/gallery/kid3.jpg', 'image', '2025-05-08 12:14:51', '2025-05-08 12:14:51'),
(42, 'App\\Models\\Photo', 8, '/seeders/gallery/kid4.jpg', 'image', '2025-05-08 12:14:52', '2025-05-08 12:14:52'),
(43, 'App\\Models\\Photo', 9, '/seeders/gallery/kid5.jpg', 'image', '2025-05-08 12:14:53', '2025-05-08 12:14:53'),
(44, 'App\\Models\\Photo', 10, '/seeders/gallery/kid6.jpg', 'image', '2025-05-08 12:14:53', '2025-05-08 12:14:53'),
(45, 'App\\Models\\Video', 1, 'seeders/basket/1.png', 'image', '2025-05-08 12:14:54', '2025-05-08 12:14:54'),
(46, 'App\\Models\\Video', 2, 'seeders/basket/2.png', 'image', '2025-05-08 12:14:55', '2025-05-08 12:14:55'),
(47, 'App\\Models\\Video', 3, 'seeders/basket/3.png', 'image', '2025-05-08 12:14:55', '2025-05-08 12:14:55'),
(48, 'App\\Models\\Video', 4, 'seeders/basket/4.png', 'image', '2025-05-08 12:14:56', '2025-05-08 12:14:56'),
(49, 'App\\Models\\Video', 5, 'seeders/basket/5.png', 'image', '2025-05-08 12:14:57', '2025-05-08 12:14:57'),
(50, 'App\\Models\\Video', 6, 'seeders/basket/6.png', 'image', '2025-05-08 12:14:57', '2025-05-08 12:14:57');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2013_04_25_100855_create_countries_table', 1),
(2, '2013_04_25_100911_create_cities_table', 1),
(3, '2013_04_25_102858_create_country_translations_table', 1),
(4, '2013_04_25_102925_create_city_translations_table', 1),
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2022_11_27_081551_create_admins_table', 1),
(10, '2022_11_27_103330_create_files_table', 1),
(11, '2022_11_28_170707_laratrust_setup_tables', 1),
(12, '2022_12_01_151040_create_settings_table', 1),
(13, '2022_12_01_151053_create_setting_translations_table', 1),
(14, '2022_12_06_104919_create_projects_table', 1),
(15, '2022_12_06_104938_create_project_translations_table', 1),
(16, '2022_12_08_164754_create_testimonials_table', 1),
(17, '2022_12_08_164806_create_testimonial_translations_table', 1),
(18, '2022_12_11_090114_create_categories_table', 1),
(19, '2022_12_11_090145_create_category_translations_table', 1),
(20, '2022_12_11_125447_create_products_table', 1),
(21, '2022_12_11_125501_create_product_translations_table', 1),
(22, '2022_12_12_085318_create_services_table', 1),
(23, '2022_12_12_085333_create_service_translations_table', 1),
(24, '2022_12_12_111039_create_pages_table', 1),
(25, '2022_12_12_111055_create_page_translations_table', 1),
(26, '2022_12_12_144039_create_sliders_table', 1),
(27, '2022_12_12_144145_create_slider_translations_table', 1),
(28, '2022_12_12_152843_create_blogs_table', 1),
(29, '2022_12_12_152858_create_blog_translations_table', 1),
(30, '2022_12_12_155342_create_faqs_table', 1),
(31, '2022_12_12_155359_create_faq_translations_table', 1),
(32, '2022_12_21_090957_create_contacts_table', 1),
(33, '2023_01_01_165419_create_news_letters_table', 1),
(34, '2023_01_02_084934_create_news_letter_messages_table', 1),
(35, '2023_01_02_090705_create_jobs_table', 1),
(36, '2023_10_29_133402_create_contact_us_table', 1),
(37, '2023_11_21_155735_create_features_table', 1),
(38, '2023_11_21_155757_create_feature_translations_table', 1),
(39, '2024_04_25_100756_create_orders_table', 1),
(40, '2024_04_25_100833_create_reviews_table', 1),
(41, '2024_04_25_104400_create_order_product_table', 1),
(42, '2024_07_14_165941_teams', 1),
(43, '2024_07_14_172002_counters', 1),
(44, '2024_07_15_095914_clients', 1),
(45, '2025_04_23_000001_create_abouts_table', 1),
(46, '2025_04_23_000002_create_about_translations_table', 1),
(47, '2025_04_23_111609_create_photos_table', 1),
(48, '2025_04_27_095059_create_photo_translations_table', 1),
(49, '2025_05_08_132404_a_d_d__video_table', 1),
(50, '2025_05_08_132545_add__video_translation', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news_letters`
--

CREATE TABLE `news_letters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news_letter_messages`
--

CREATE TABLE `news_letter_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(191) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unit_price` decimal(8,2) NOT NULL,
  `total_amount` decimal(8,2) NOT NULL,
  `order_status` varchar(191) DEFAULT NULL,
  `payment_method` varchar(191) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `identifier` varchar(191) DEFAULT NULL,
  `link` varchar(191) DEFAULT NULL,
  `video` varchar(191) DEFAULT NULL,
  `has_link` tinyint(1) DEFAULT 0,
  `has_title` tinyint(1) DEFAULT 0,
  `has_sub_title` tinyint(1) DEFAULT 0,
  `has_description` tinyint(1) DEFAULT 0,
  `has_image` tinyint(1) DEFAULT 0,
  `has_video` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `identifier`, `link`, `video`, `has_link`, `has_title`, `has_sub_title`, `has_description`, `has_image`, `has_video`, `created_at`, `updated_at`) VALUES
(1, 'about_our_farm', NULL, NULL, 0, 1, 0, 1, 0, 0, '2025-05-08 12:14:34', '2025-05-08 12:14:34'),
(2, 'header_standalone', NULL, NULL, 0, 1, 1, 1, 0, 0, '2025-05-08 12:14:34', '2025-05-08 12:14:34'),
(3, 'first_standalone', NULL, NULL, 0, 1, 1, 1, 1, 0, '2025-05-08 12:14:35', '2025-05-08 12:14:35'),
(4, 'second_standalone', NULL, NULL, 0, 1, 1, 1, 1, 0, '2025-05-08 12:14:35', '2025-05-08 12:14:35'),
(5, 'third_standalone', NULL, NULL, 0, 1, 1, 1, 1, 0, '2025-05-08 12:14:36', '2025-05-08 12:14:36');

-- --------------------------------------------------------

--
-- Table structure for table `page_translations`
--

CREATE TABLE `page_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) NOT NULL,
  `title` varchar(191) DEFAULT NULL,
  `sub_title` varchar(191) DEFAULT NULL,
  `description` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_translations`
--

INSERT INTO `page_translations` (`id`, `page_id`, `locale`, `title`, `sub_title`, `description`) VALUES
(1, 1, 'en', 'About Our Farm', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'),
(2, 1, 'ar', 'حول مزرعتنا', NULL, 'هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.'),
(3, 2, 'en', 'Most flexible one page', 'Section Title', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'),
(4, 2, 'ar', 'الأكثر مرونة في صفحة واحدة', 'عنوان القسم', 'هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.'),
(5, 3, 'en', 'Most flexible one page', 'Standalone Heading', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'),
(6, 3, 'ar', 'الأكثر مرونة في صفحة واحدة', 'عنوان مستقل', 'هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.'),
(7, 4, 'en', 'Most flexible one page', 'Standalone Heading', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'),
(8, 4, 'ar', 'الأكثر مرونة في صفحة واحدة', 'عنوان مستقل', 'هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.'),
(9, 5, 'en', 'Most flexible one page', 'Standalone Heading', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'),
(10, 5, 'ar', 'الأكثر مرونة في صفحة واحدة', 'عنوان مستقل', 'هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `display_name` varchar(191) DEFAULT NULL,
  `description` varchar(191) DEFAULT NULL,
  `created_by` varchar(191) DEFAULT 'system@app.com',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'read-roles', 'read roles', 'read roles', 'system@app.com', '2025-05-08 12:13:41', '2025-05-08 12:13:41'),
(2, 'create-roles', 'create roles', 'create roles', 'system@app.com', '2025-05-08 12:13:41', '2025-05-08 12:13:41'),
(3, 'update-roles', 'update roles', 'update roles', 'system@app.com', '2025-05-08 12:13:41', '2025-05-08 12:13:41'),
(4, 'delete-roles', 'delete roles', 'delete roles', 'system@app.com', '2025-05-08 12:13:42', '2025-05-08 12:13:42'),
(5, 'read-admins', 'read admins', 'read admins', 'system@app.com', '2025-05-08 12:13:42', '2025-05-08 12:13:42'),
(6, 'create-admins', 'create admins', 'create admins', 'system@app.com', '2025-05-08 12:13:42', '2025-05-08 12:13:42'),
(7, 'update-admins', 'update admins', 'update admins', 'system@app.com', '2025-05-08 12:13:42', '2025-05-08 12:13:42'),
(8, 'delete-admins', 'delete admins', 'delete admins', 'system@app.com', '2025-05-08 12:13:42', '2025-05-08 12:13:42'),
(9, 'updateProfile-admins', 'updateProfile admins', 'updateProfile admins', 'system@app.com', '2025-05-08 12:13:42', '2025-05-08 12:13:42'),
(10, 'read-sliders', 'read sliders', 'read sliders', 'system@app.com', '2025-05-08 12:13:43', '2025-05-08 12:13:43'),
(11, 'create-sliders', 'create sliders', 'create sliders', 'system@app.com', '2025-05-08 12:13:43', '2025-05-08 12:13:43'),
(12, 'update-sliders', 'update sliders', 'update sliders', 'system@app.com', '2025-05-08 12:13:43', '2025-05-08 12:13:43'),
(13, 'delete-sliders', 'delete sliders', 'delete sliders', 'system@app.com', '2025-05-08 12:13:43', '2025-05-08 12:13:43'),
(14, 'read-features', 'read features', 'read features', 'system@app.com', '2025-05-08 12:13:43', '2025-05-08 12:13:43'),
(15, 'update-features', 'update features', 'update features', 'system@app.com', '2025-05-08 12:13:43', '2025-05-08 12:13:43'),
(16, 'read-counters', 'read counters', 'read counters', 'system@app.com', '2025-05-08 12:13:43', '2025-05-08 12:13:43'),
(17, 'update-counters', 'update counters', 'update counters', 'system@app.com', '2025-05-08 12:13:43', '2025-05-08 12:13:43'),
(18, 'read-clients', 'read clients', 'read clients', 'system@app.com', '2025-05-08 12:13:43', '2025-05-08 12:13:43'),
(19, 'create-clients', 'create clients', 'create clients', 'system@app.com', '2025-05-08 12:13:44', '2025-05-08 12:13:44'),
(20, 'update-clients', 'update clients', 'update clients', 'system@app.com', '2025-05-08 12:13:44', '2025-05-08 12:13:44'),
(21, 'delete-clients', 'delete clients', 'delete clients', 'system@app.com', '2025-05-08 12:13:44', '2025-05-08 12:13:44'),
(22, 'read-categories', 'read categories', 'read categories', 'system@app.com', '2025-05-08 12:13:44', '2025-05-08 12:13:44'),
(23, 'create-categories', 'create categories', 'create categories', 'system@app.com', '2025-05-08 12:13:44', '2025-05-08 12:13:44'),
(24, 'update-categories', 'update categories', 'update categories', 'system@app.com', '2025-05-08 12:13:44', '2025-05-08 12:13:44'),
(25, 'delete-categories', 'delete categories', 'delete categories', 'system@app.com', '2025-05-08 12:13:44', '2025-05-08 12:13:44'),
(26, 'read-products', 'read products', 'read products', 'system@app.com', '2025-05-08 12:13:44', '2025-05-08 12:13:44'),
(27, 'create-products', 'create products', 'create products', 'system@app.com', '2025-05-08 12:13:44', '2025-05-08 12:13:44'),
(28, 'update-products', 'update products', 'update products', 'system@app.com', '2025-05-08 12:13:44', '2025-05-08 12:13:44'),
(29, 'delete-products', 'delete products', 'delete products', 'system@app.com', '2025-05-08 12:13:45', '2025-05-08 12:13:45'),
(30, 'read-photos', 'read photos', 'read photos', 'system@app.com', '2025-05-08 12:13:45', '2025-05-08 12:13:45'),
(31, 'create-photos', 'create photos', 'create photos', 'system@app.com', '2025-05-08 12:13:45', '2025-05-08 12:13:45'),
(32, 'update-photos', 'update photos', 'update photos', 'system@app.com', '2025-05-08 12:13:45', '2025-05-08 12:13:45'),
(33, 'delete-photos', 'delete photos', 'delete photos', 'system@app.com', '2025-05-08 12:13:45', '2025-05-08 12:13:45'),
(34, 'read-projects', 'read projects', 'read projects', 'system@app.com', '2025-05-08 12:13:45', '2025-05-08 12:13:45'),
(35, 'create-projects', 'create projects', 'create projects', 'system@app.com', '2025-05-08 12:13:45', '2025-05-08 12:13:45'),
(36, 'update-projects', 'update projects', 'update projects', 'system@app.com', '2025-05-08 12:13:45', '2025-05-08 12:13:45'),
(37, 'delete-projects', 'delete projects', 'delete projects', 'system@app.com', '2025-05-08 12:13:45', '2025-05-08 12:13:45'),
(38, 'read-services', 'read services', 'read services', 'system@app.com', '2025-05-08 12:13:45', '2025-05-08 12:13:45'),
(39, 'create-services', 'create services', 'create services', 'system@app.com', '2025-05-08 12:13:45', '2025-05-08 12:13:45'),
(40, 'update-services', 'update services', 'update services', 'system@app.com', '2025-05-08 12:13:46', '2025-05-08 12:13:46'),
(41, 'delete-services', 'delete services', 'delete services', 'system@app.com', '2025-05-08 12:13:46', '2025-05-08 12:13:46'),
(42, 'read-teams', 'read teams', 'read teams', 'system@app.com', '2025-05-08 12:13:46', '2025-05-08 12:13:46'),
(43, 'create-teams', 'create teams', 'create teams', 'system@app.com', '2025-05-08 12:13:46', '2025-05-08 12:13:46'),
(44, 'update-teams', 'update teams', 'update teams', 'system@app.com', '2025-05-08 12:13:46', '2025-05-08 12:13:46'),
(45, 'delete-teams', 'delete teams', 'delete teams', 'system@app.com', '2025-05-08 12:13:46', '2025-05-08 12:13:46'),
(46, 'read-testimonials', 'read testimonials', 'read testimonials', 'system@app.com', '2025-05-08 12:13:46', '2025-05-08 12:13:46'),
(47, 'create-testimonials', 'create testimonials', 'create testimonials', 'system@app.com', '2025-05-08 12:13:46', '2025-05-08 12:13:46'),
(48, 'update-testimonials', 'update testimonials', 'update testimonials', 'system@app.com', '2025-05-08 12:13:46', '2025-05-08 12:13:46'),
(49, 'delete-testimonials', 'delete testimonials', 'delete testimonials', 'system@app.com', '2025-05-08 12:13:47', '2025-05-08 12:13:47'),
(50, 'read-partners', 'read partners', 'read partners', 'system@app.com', '2025-05-08 12:13:47', '2025-05-08 12:13:47'),
(51, 'create-partners', 'create partners', 'create partners', 'system@app.com', '2025-05-08 12:13:47', '2025-05-08 12:13:47'),
(52, 'update-partners', 'update partners', 'update partners', 'system@app.com', '2025-05-08 12:13:47', '2025-05-08 12:13:47'),
(53, 'delete-partners', 'delete partners', 'delete partners', 'system@app.com', '2025-05-08 12:13:47', '2025-05-08 12:13:47'),
(54, 'read-portfolios', 'read portfolios', 'read portfolios', 'system@app.com', '2025-05-08 12:13:47', '2025-05-08 12:13:47'),
(55, 'create-portfolios', 'create portfolios', 'create portfolios', 'system@app.com', '2025-05-08 12:13:48', '2025-05-08 12:13:48'),
(56, 'update-portfolios', 'update portfolios', 'update portfolios', 'system@app.com', '2025-05-08 12:13:48', '2025-05-08 12:13:48'),
(57, 'delete-portfolios', 'delete portfolios', 'delete portfolios', 'system@app.com', '2025-05-08 12:13:48', '2025-05-08 12:13:48'),
(58, 'read-blog', 'read blog', 'read blog', 'system@app.com', '2025-05-08 12:13:48', '2025-05-08 12:13:48'),
(59, 'create-blog', 'create blog', 'create blog', 'system@app.com', '2025-05-08 12:13:49', '2025-05-08 12:13:49'),
(60, 'update-blog', 'update blog', 'update blog', 'system@app.com', '2025-05-08 12:13:49', '2025-05-08 12:13:49'),
(61, 'delete-blog', 'delete blog', 'delete blog', 'system@app.com', '2025-05-08 12:13:50', '2025-05-08 12:13:50'),
(62, 'read-faqs', 'read faqs', 'read faqs', 'system@app.com', '2025-05-08 12:13:50', '2025-05-08 12:13:50'),
(63, 'create-faqs', 'create faqs', 'create faqs', 'system@app.com', '2025-05-08 12:13:50', '2025-05-08 12:13:50'),
(64, 'update-faqs', 'update faqs', 'update faqs', 'system@app.com', '2025-05-08 12:13:50', '2025-05-08 12:13:50'),
(65, 'delete-faqs', 'delete faqs', 'delete faqs', 'system@app.com', '2025-05-08 12:13:50', '2025-05-08 12:13:50'),
(66, 'read-pages', 'read pages', 'read pages', 'system@app.com', '2025-05-08 12:13:50', '2025-05-08 12:13:50'),
(67, 'create-pages', 'create pages', 'create pages', 'system@app.com', '2025-05-08 12:13:51', '2025-05-08 12:13:51'),
(68, 'update-pages', 'update pages', 'update pages', 'system@app.com', '2025-05-08 12:13:51', '2025-05-08 12:13:51'),
(69, 'read-abouts', 'read abouts', 'read abouts', 'system@app.com', '2025-05-08 12:13:51', '2025-05-08 12:13:51'),
(70, 'create-abouts', 'create abouts', 'create abouts', 'system@app.com', '2025-05-08 12:13:51', '2025-05-08 12:13:51'),
(71, 'update-abouts', 'update abouts', 'update abouts', 'system@app.com', '2025-05-08 12:13:51', '2025-05-08 12:13:51'),
(72, 'delete-abouts', 'delete abouts', 'delete abouts', 'system@app.com', '2025-05-08 12:13:51', '2025-05-08 12:13:51'),
(73, 'read-contacts', 'read contacts', 'read contacts', 'system@app.com', '2025-05-08 12:13:51', '2025-05-08 12:13:51'),
(74, 'create-contacts', 'create contacts', 'create contacts', 'system@app.com', '2025-05-08 12:13:51', '2025-05-08 12:13:51'),
(75, 'update-contacts', 'update contacts', 'update contacts', 'system@app.com', '2025-05-08 12:13:52', '2025-05-08 12:13:52'),
(76, 'delete-contacts', 'delete contacts', 'delete contacts', 'system@app.com', '2025-05-08 12:13:52', '2025-05-08 12:13:52'),
(77, 'read-settings', 'read settings', 'read settings', 'system@app.com', '2025-05-08 12:13:52', '2025-05-08 12:13:52'),
(78, 'update-settings', 'update settings', 'update settings', 'system@app.com', '2025-05-08 12:13:52', '2025-05-08 12:13:52'),
(79, 'read-courses', 'read courses', 'read courses', 'system@app.com', '2025-05-08 12:13:53', '2025-05-08 12:13:53'),
(80, 'create-courses', 'create courses', 'create courses', 'system@app.com', '2025-05-08 12:13:53', '2025-05-08 12:13:53'),
(81, 'export-courses', 'export courses', 'export courses', 'system@app.com', '2025-05-08 12:13:53', '2025-05-08 12:13:53'),
(82, 'read-contact_us', 'read contact_us', 'read contact_us', 'system@app.com', '2025-05-08 12:13:53', '2025-05-08 12:13:53'),
(83, 'delete-contact_us', 'delete contact_us', 'delete contact_us', 'system@app.com', '2025-05-08 12:13:53', '2025-05-08 12:13:53'),
(84, 'reply-contact_us', 'reply contact_us', 'reply contact_us', 'system@app.com', '2025-05-08 12:13:53', '2025-05-08 12:13:53'),
(85, 'read-news_letters', 'read news_letters', 'read news_letters', 'system@app.com', '2025-05-08 12:13:53', '2025-05-08 12:13:53'),
(86, 'show_subscribed_users-news_letters', 'show_subscribed_users news_letters', 'show_subscribed_users news_letters', 'system@app.com', '2025-05-08 12:13:54', '2025-05-08 12:13:54'),
(87, 'delete_subscribed_users-news_letters', 'delete_subscribed_users news_letters', 'delete_subscribed_users news_letters', 'system@app.com', '2025-05-08 12:13:54', '2025-05-08 12:13:54'),
(88, 'create-news_letters', 'create news_letters', 'create news_letters', 'system@app.com', '2025-05-08 12:13:54', '2025-05-08 12:13:54'),
(89, 'resend-news_letters', 'resend news_letters', 'resend news_letters', 'system@app.com', '2025-05-08 12:13:54', '2025-05-08 12:13:54'),
(90, 'delete-news_letters', 'delete news_letters', 'delete news_letters', 'system@app.com', '2025-05-08 12:13:54', '2025-05-08 12:13:54');

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
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(80, 1),
(81, 1),
(82, 1),
(83, 1),
(84, 1),
(85, 1),
(86, 1),
(87, 1),
(88, 1),
(89, 1),
(90, 1);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `status`, `project_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2025-05-08 12:14:46', '2025-05-08 12:14:46'),
(2, 1, 1, '2025-05-08 12:14:47', '2025-05-08 12:14:47'),
(3, 1, 1, '2025-05-08 12:14:48', '2025-05-08 12:14:48'),
(4, 1, 2, '2025-05-08 12:14:48', '2025-05-08 12:14:51'),
(5, 1, 2, '2025-05-08 12:14:49', '2025-05-08 12:14:49'),
(6, 1, 2, '2025-05-08 12:14:50', '2025-05-08 12:14:50'),
(7, 1, 2, '2025-05-08 12:14:51', '2025-05-08 12:14:51'),
(8, 1, 3, '2025-05-08 12:14:52', '2025-05-08 12:14:52'),
(9, 1, 3, '2025-05-08 12:14:52', '2025-05-08 12:14:52'),
(10, 1, 3, '2025-05-08 12:14:53', '2025-05-08 12:14:53');

-- --------------------------------------------------------

--
-- Table structure for table `photo_translations`
--

CREATE TABLE `photo_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `subtitle` varchar(191) NOT NULL,
  `locale` varchar(191) NOT NULL,
  `photo_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photo_translations`
--

INSERT INTO `photo_translations` (`id`, `title`, `subtitle`, `locale`, `photo_id`, `created_at`, `updated_at`) VALUES
(1, 'amazing', 'basket ball', 'en', 1, '2025-05-08 12:14:46', '2025-05-08 12:14:46'),
(2, 'رائع', 'كرة السلة', 'ar', 1, '2025-05-08 12:14:46', '2025-05-08 12:14:46'),
(3, 'goal', 'basket ball', 'en', 2, '2025-05-08 12:14:47', '2025-05-08 12:14:47'),
(4, 'رائع', 'كرة السلة', 'ar', 2, '2025-05-08 12:14:47', '2025-05-08 12:14:47'),
(5, 'omg', 'wonderful', 'en', 3, '2025-05-08 12:14:48', '2025-05-08 12:14:48'),
(6, 'ياالله', 'كرة السلة', 'ar', 3, '2025-05-08 12:14:48', '2025-05-08 12:14:48'),
(7, 'wow', 'great', 'en', 4, '2025-05-08 12:14:48', '2025-05-08 12:14:48'),
(8, 'واو', 'رائع', 'ar', 4, '2025-05-08 12:14:48', '2025-05-08 12:14:48'),
(9, 'wow', 'great', 'en', 5, '2025-05-08 12:14:50', '2025-05-08 12:14:50'),
(10, 'واو', 'رائع', 'ar', 5, '2025-05-08 12:14:50', '2025-05-08 12:14:50'),
(11, ' no comment', 'great', 'en', 6, '2025-05-08 12:14:50', '2025-05-08 12:14:50'),
(12, 'لا تعليق', 'رائع', 'ar', 6, '2025-05-08 12:14:50', '2025-05-08 12:14:50'),
(13, ' no comment', 'great', 'en', 7, '2025-05-08 12:14:51', '2025-05-08 12:14:51'),
(14, 'لا تعليق', 'رائع', 'ar', 7, '2025-05-08 12:14:51', '2025-05-08 12:14:51'),
(15, 'wow', 'great', 'en', 8, '2025-05-08 12:14:52', '2025-05-08 12:14:52'),
(16, 'واو', 'رائع', 'ar', 8, '2025-05-08 12:14:52', '2025-05-08 12:14:52'),
(17, ' no comment', 'great', 'en', 9, '2025-05-08 12:14:52', '2025-05-08 12:14:52'),
(18, 'لا تعليق', 'رائع', 'ar', 9, '2025-05-08 12:14:53', '2025-05-08 12:14:53'),
(19, ' no comment', 'great', 'en', 10, '2025-05-08 12:14:53', '2025-05-08 12:14:53'),
(20, 'لا تعليق', 'رائع', 'ar', 10, '2025-05-08 12:14:53', '2025-05-08 12:14:53');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `origin_price` decimal(8,2) DEFAULT NULL,
  `price_after_discount` decimal(8,2) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `status`, `origin_price`, `price_after_discount`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 100.00, 99.00, 10, '2025-05-08 12:14:40', '2025-05-08 12:14:40'),
(2, 1, 200.00, 199.00, 20, '2025-05-08 12:14:41', '2025-05-08 12:14:41'),
(3, 1, 300.00, 299.00, 30, '2025-05-08 12:14:42', '2025-05-08 12:14:42'),
(4, 1, 400.00, 399.00, 40, '2025-05-08 12:14:43', '2025-05-08 12:14:43'),
(5, 1, 500.00, 499.00, 50, '2025-05-08 12:14:43', '2025-05-08 12:14:43'),
(6, 1, 600.00, 599.00, 60, '2025-05-08 12:14:43', '2025-05-08 12:14:43'),
(7, 1, 700.00, 699.00, 70, '2025-05-08 12:14:44', '2025-05-08 12:14:44'),
(8, 1, 800.00, 799.00, 80, '2025-05-08 12:14:45', '2025-05-08 12:14:45');

-- --------------------------------------------------------

--
-- Table structure for table `product_translations`
--

CREATE TABLE `product_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) NOT NULL,
  `title` varchar(191) DEFAULT NULL,
  `description` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_translations`
--

INSERT INTO `product_translations` (`id`, `product_id`, `category_id`, `locale`, `title`, `description`) VALUES
(1, 1, 1, 'ar', 'منتج 1', '<p>هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>'),
(2, 1, 1, 'en', 'Product 1', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>'),
(3, 2, 1, 'ar', 'منتج 2', '<p>هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>'),
(4, 2, 1, 'en', 'Product 2', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>'),
(5, 3, 1, 'ar', 'منتج 3', '<p>هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>'),
(6, 3, 1, 'en', 'Product 3', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>'),
(7, 4, 1, 'ar', 'منتج 4', '<p>هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>'),
(8, 4, 1, 'en', 'Product 4', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>'),
(9, 5, 1, 'ar', 'منتج 5', '<p>هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>'),
(10, 5, 1, 'en', 'Product 5', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>'),
(11, 6, 1, 'ar', 'منتج 6', '<p>هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>'),
(12, 6, 1, 'en', 'Product 6', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>'),
(13, 7, 1, 'ar', 'منتج 7', '<p>هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>'),
(14, 7, 1, 'en', 'Product 7', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>'),
(15, 8, 1, 'ar', 'منتج 8', '<p>هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>'),
(16, 8, 1, 'en', 'Product 8', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '2025-05-08 12:14:45', '2025-05-08 12:14:45'),
(2, 1, '2025-05-08 12:14:49', '2025-05-08 12:14:49'),
(3, 1, '2025-05-08 12:14:52', '2025-05-08 12:14:52');

-- --------------------------------------------------------

--
-- Table structure for table `project_translations`
--

CREATE TABLE `project_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_translations`
--

INSERT INTO `project_translations` (`id`, `project_id`, `locale`, `name`) VALUES
(1, 1, 'en', 'Basket-ball Race'),
(2, 1, 'ar', 'سباق كرة السلة'),
(3, 2, 'en', 'kids Basket-ball'),
(4, 2, 'ar', 'اطفال كرة السلة'),
(5, 3, 'en', 'Others'),
(6, 3, 'ar', 'اخرين');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `display_name` varchar(191) DEFAULT NULL,
  `description` varchar(191) DEFAULT NULL,
  `is_super` tinyint(1) DEFAULT 0,
  `updated_by` varchar(191) DEFAULT NULL,
  `created_by` varchar(191) DEFAULT 'system@app.com',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `is_super`, `updated_by`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'super_admin', 'super admin', 'has all permissions', 1, NULL, 'system@app.com', '2025-05-08 12:13:40', '2025-05-08 12:13:40');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 1, 'App\\Models\\Admin');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(191) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(1, 'las la-paper-plane', 1, '2025-05-08 12:14:31', '2025-05-08 12:14:31'),
(2, 'las la-headset', 1, '2025-05-08 12:14:32', '2025-05-08 12:14:32'),
(3, 'las la-globe-europe', 1, '2025-05-08 12:14:33', '2025-05-08 12:14:33'),
(4, 'las la-phone', 1, '2025-05-08 12:14:33', '2025-05-08 12:14:33');

-- --------------------------------------------------------

--
-- Table structure for table `service_translations`
--

CREATE TABLE `service_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) NOT NULL,
  `title` varchar(191) DEFAULT NULL,
  `sub_title` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_translations`
--

INSERT INTO `service_translations` (`id`, `service_id`, `locale`, `title`, `sub_title`) VALUES
(1, 1, 'en', 'FREE SHIPPING', 'ON $100 ABOVE ORDER'),
(2, 1, 'ar', 'ًالشحن مجانا', 'على 100 دولار فوق الطلب'),
(3, 2, 'en', 'SUPPORT', 'ON $200 ABOVE ORDER'),
(4, 2, 'ar', 'يدعم', 'على 200 دولار فوق الطلب'),
(5, 3, 'en', 'FREE REFUND', 'ON $300 ABOVE ORDER'),
(6, 3, 'ar', 'استرداد مجاني', 'على 300 دولار فوق الطلب'),
(7, 4, 'en', 'CONTACT US', 'ON $400 ABOVE ORDER'),
(8, 4, 'ar', 'اتصل بنا', 'على 400 دولار فوق الطلب');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contact_email` varchar(191) DEFAULT NULL,
  `newsletter_email` varchar(191) DEFAULT NULL,
  `about_phone_first_country` varchar(191) DEFAULT NULL,
  `about_phone_second_country` varchar(191) DEFAULT NULL,
  `about_email_second_country` varchar(191) DEFAULT NULL,
  `about_email_first_country` varchar(191) DEFAULT NULL,
  `map` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `contact_email`, `newsletter_email`, `about_phone_first_country`, `about_phone_second_country`, `about_email_second_country`, `about_email_first_country`, `map`, `created_at`, `updated_at`) VALUES
(1, 'mohamed@app.com', 'mohamed@app.com', '+(34) 609 33 17 54', '+(34) 609 33 17 54', 'email@website.com', 'email@website.com', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d464030.3150545121!2d46.702759!3d24.684384!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f03f25336a507%3A0x8efb4c0747c02a81!2sMakkah%20Al%20Mukarramah%20Br%20Rd%2C%20As%20Sulimaniyah%2C%20Riyadh%20Saudi%20Arabia!5e0!3m2!1sen!2sus!4v1699202090296!5m2!1sen!2sus\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2025-05-08 12:14:12', '2025-05-08 12:14:12');

-- --------------------------------------------------------

--
-- Table structure for table `setting_translations`
--

CREATE TABLE `setting_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `setting_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) NOT NULL,
  `website_title` varchar(191) DEFAULT NULL,
  `meta_keywords` longtext DEFAULT NULL,
  `meta_title` longtext DEFAULT NULL,
  `meta_description` longtext DEFAULT NULL,
  `copyrights` text DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `footer_description` longtext DEFAULT NULL,
  `about_name_first_country` varchar(191) DEFAULT NULL,
  `about_address_first_country` longtext DEFAULT NULL,
  `about_name_second_country` varchar(191) DEFAULT NULL,
  `about_address_second_country` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting_translations`
--

INSERT INTO `setting_translations` (`id`, `setting_id`, `locale`, `website_title`, `meta_keywords`, `meta_title`, `meta_description`, `copyrights`, `address`, `footer_description`, `about_name_first_country`, `about_address_first_country`, `about_name_second_country`, `about_address_second_country`) VALUES
(1, 1, 'ar', 'لوحة التحكم', 'لوحة التحكم', 'لوحة التحكم', 'لوحة التحكم للإنشاءات', 'حقوق النشر © 2023 - لوحة التحكم .', 'ص.ب. ص.ب رقم 14765 الرياض 11434، طريق مكة، الرياض، المملكة العربية السعودية', '<p>تأسست شركة لوحة التحكم في المملكة العربية السعودية لتلبية الطلب المتزايد في مجال البناء والتطوير في المملكة العربية السعودية.</p>', 'مصر', 'القاهرة مصر', 'السعودية', 'الرياض السعودية'),
(2, 1, 'en', 'Dashboard', 'Dashboard', 'Dashboard', 'Dashboard Construction', 'Copyright © 2023 - ADVACON LTD.', 'P.O. Box No. 14765 Riyadh 11434, Makkah Road, Riyadh, Kingdom of Saudi Arabia', '<p>Dashboard was established in Saudi Arabia to meet the ever-growing demand in construction and development in the Kingdom of Saudi Arabia.</p>', 'United States', '201 Oak Street 27 Manchester, USA', 'Australia', '201 Oak Street 27 Manchester, USA');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `page_1` tinyint(1) NOT NULL DEFAULT 0,
  `page_2` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `status`, `page_1`, `page_2`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 0, '2025-05-08 12:14:25', '2025-05-08 12:14:25'),
(2, 1, 0, 1, '2025-05-08 12:14:26', '2025-05-08 12:14:26');

-- --------------------------------------------------------

--
-- Table structure for table `slider_translations`
--

CREATE TABLE `slider_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) NOT NULL,
  `title` varchar(191) DEFAULT NULL,
  `sub_title` varchar(191) DEFAULT NULL,
  `description` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider_translations`
--

INSERT INTO `slider_translations` (`id`, `slider_id`, `locale`, `title`, `sub_title`, `description`) VALUES
(1, 1, 'en', 'Basket-Ball Lovers', 'Where Passion Meets the Court', 'Join a community of young basketball fans chasing their dreams.\r\nWe focus on skill, spirit, and sportsmanship.\r\nBecause the love for the game starts early!'),
(2, 1, 'ar', 'محبين كرة السلة', 'حيث الشغف يلتقي بالميدان', 'انضم إلى مجتمع من عشاق كرة السلة الصغار في طريقهم لتحقيق الأحلام.\r\nنركز على المهارة، الروح الرياضية، والعمل الجماعي.\r\nلأن حب اللعبة يبدأ من الصغر!'),
(3, 2, 'en', 'About Basketball', 'More Than Just a Game', 'Basketball teaches focus, teamwork, and resilience.\r\nIt’s a sport that builds character on and off the court.\r\nFrom drills to dreams, every moment counts.'),
(4, 2, 'ar', 'عن كرة السلة', 'أكثر من مجرد لعبة', 'كرة السلة تعلّم التركيز والعمل الجماعي والصبر.\r\nهي رياضة تبني الشخصية داخل الملعب وخارجه.\r\nمن التمارين إلى الأحلام، كل لحظة لها قيمة.');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '2025-05-08 12:14:28', '2025-05-08 12:14:28'),
(2, 1, '2025-05-08 12:14:29', '2025-05-08 12:14:29'),
(3, 1, '2025-05-08 12:14:30', '2025-05-08 12:14:30'),
(4, 1, '2025-05-08 12:14:30', '2025-05-08 12:14:30'),
(5, 1, '2025-05-08 12:14:31', '2025-05-08 12:14:31');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial_translations`
--

CREATE TABLE `testimonial_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `testimonial_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonial_translations`
--

INSERT INTO `testimonial_translations` (`id`, `testimonial_id`, `locale`, `name`, `description`) VALUES
(1, 1, 'en', 'sara', 'Seeing my players\' shooting form improve week after week is why I coach!'),
(2, 1, 'ar', 'سارة', 'رؤية تحسن أداء اللاعبين في التصويب أسبوعًا بعد أسبوع هو سبب تدريبي'),
(3, 2, 'en', 'perlo', 'Nothing beats the moment when the team executes a perfect play we practiced!'),
(4, 2, 'ar', 'بيرلو', 'لا شيء يُضاهي لحظة تنفيذ الفريق لخطة تدربنا عليها بإتقان'),
(5, 3, 'en', 'mariem', 'Watching shy beginners become confident team players? That’s the magic.'),
(6, 3, 'ar', 'مريم', 'رؤية المبتدئين الخجولين يتحولون إلى لاعبين واثقين؟ هذه هي المعجزة.'),
(7, 4, 'en', 'khaled', 'I live for the ‘aha!’ moments when a drill finally clicks for a player.'),
(8, 4, 'ar', 'خالد', 'أعيش لأجل لحظات الـ \"فهمت!\" عندما يستوعب اللاعب التمرين أخيرًا'),
(9, 5, 'en', 'nancy', 'Building skills is great, but shaping respectful young athletes is everything.'),
(10, 5, 'ar', 'نانسي', 'تنمية المهارات رائع، لكن تشكيل رياضيين صغار محترمين هو الأهم');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) DEFAULT NULL,
  `last_name` varchar(191) DEFAULT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `profile_image` varchar(191) DEFAULT NULL,
  `address` varchar(191) DEFAULT NULL,
  `city_id` bigint(20) UNSIGNED DEFAULT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL,
  `link` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `status`, `link`, `created_at`, `updated_at`) VALUES
(1, 1, 'https://www.youtube.com/watch?v=YnrxuxyeAZg', '2025-05-08 12:14:53', '2025-05-08 12:14:53'),
(2, 1, 'https://www.youtube.com/watch?v=8tmEg-VxTYI', '2025-05-08 12:14:54', '2025-05-08 12:14:54'),
(3, 1, 'https://www.youtube.com/watch?v=MRrNi7uHmaY', '2025-05-08 12:14:55', '2025-05-08 12:14:55'),
(4, 1, 'https://www.youtube.com/watch?v=buVrB8_h9tE', '2025-05-08 12:14:55', '2025-05-08 12:14:55'),
(5, 1, 'https://www.youtube.com/watch?v=32dFSE_CHc0', '2025-05-08 12:14:56', '2025-05-08 12:14:56'),
(6, 1, 'https://www.youtube.com/watch?v=WJB6I5B2hL8', '2025-05-08 12:14:57', '2025-05-08 12:14:57');

-- --------------------------------------------------------

--
-- Table structure for table `video_translations`
--

CREATE TABLE `video_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(191) NOT NULL,
  `title` varchar(191) NOT NULL,
  `description` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `video_translations`
--

INSERT INTO `video_translations` (`id`, `video_id`, `locale`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'en', 'Slam Dunk Highlights', 'watch the best slam dunks from the recent tourmament', NULL, NULL),
(2, 1, 'ar', 'أبرز لقطات السلم دانك', 'شاهد أفضل لقطات السلم دانك من البطولة الأخيرة', NULL, NULL),
(3, 2, 'en', 'Coaching Tips for Young Players', 'Learn valuable coaching tips to improve your game.', NULL, NULL),
(4, 2, 'ar', 'نصائح تدريبية للاعبين الصغار', 'تعلّم نصائح تدريبية قيّمة لتحسين مستواك في اللعب', NULL, NULL),
(5, 3, 'en', '\n        Dribbling Drills for kids', 'Enhance your dribbling skills with these fun drills ', NULL, NULL),
(6, 3, 'ar', 'تمارين المراوغة للأطفال', 'طوّر مهاراتك في المراوغة مع هذه التمارين الممتعة', NULL, NULL),
(7, 4, 'en', 'Perfecting Your Free Throw ', 'step-by-step guide to improve your free throw accuracy', NULL, NULL),
(8, 4, 'ar', 'إتقان الرمية الحرة', 'دليل خطوة بخطوة لتحسين دقة رميتك الحرة', NULL, NULL),
(9, 5, 'en', 'Youth Basketball League Finals ', 'Catch all the action from the latest league finals.', NULL, NULL),
(10, 5, 'ar', 'نهائيات دوري كرة السلة للشباب', 'تابع كل الأحداث من نهائيات الدوري الأخيرة', NULL, NULL),
(11, 6, 'en', 'Fast Break Techniques', 'Master the art of fast breaks with these strategies.', NULL, NULL),
(12, 6, 'ar', 'تقنيات الهجمة السريعة', 'أتقن فن الهجمات السريعة مع هذه الاستراتيجيات', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_translations`
--
ALTER TABLE `about_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `about_translations_about_id_locale_unique` (`about_id`,`locale`),
  ADD KEY `about_translations_locale_index` (`locale`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_translations`
--
ALTER TABLE `blog_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_translations_blog_id_locale_unique` (`blog_id`,`locale`),
  ADD KEY `blog_translations_locale_index` (`locale`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_translations`
--
ALTER TABLE `category_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_translations_category_id_locale_unique` (`category_id`,`locale`),
  ADD KEY `category_translations_locale_index` (`locale`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_country_id_foreign` (`country_id`);

--
-- Indexes for table `city_translations`
--
ALTER TABLE `city_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `city_translations_city_id_locale_unique` (`city_id`,`locale`),
  ADD KEY `city_translations_locale_index` (`locale`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contacts_contactable_type_contactable_id_index` (`contactable_type`,`contactable_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counters`
--
ALTER TABLE `counters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country_translations`
--
ALTER TABLE `country_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `country_translations_country_id_locale_unique` (`country_id`,`locale`),
  ADD KEY `country_translations_locale_index` (`locale`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_translations`
--
ALTER TABLE `faq_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `faq_translations_faq_id_locale_unique` (`faq_id`,`locale`),
  ADD KEY `faq_translations_locale_index` (`locale`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature_translations`
--
ALTER TABLE `feature_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `feature_translations_feature_id_locale_unique` (`feature_id`,`locale`),
  ADD KEY `feature_translations_locale_index` (`locale`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `files_filable_type_filable_id_index` (`filable_type`,`filable_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_letters`
--
ALTER TABLE `news_letters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_letter_messages`
--
ALTER TABLE `news_letter_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_product_id_foreign` (`product_id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_product_order_id_foreign` (`order_id`),
  ADD KEY `order_product_product_id_foreign` (`product_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_translations`
--
ALTER TABLE `page_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `page_translations_page_id_locale_unique` (`page_id`,`locale`),
  ADD KEY `page_translations_locale_index` (`locale`);

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
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photos_project_id_foreign` (`project_id`);

--
-- Indexes for table `photo_translations`
--
ALTER TABLE `photo_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `photo_translations_photo_id_locale_unique` (`photo_id`,`locale`),
  ADD KEY `photo_translations_locale_index` (`locale`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_translations`
--
ALTER TABLE `product_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_translations_product_id_locale_unique` (`product_id`,`locale`),
  ADD KEY `product_translations_category_id_foreign` (`category_id`),
  ADD KEY `product_translations_locale_index` (`locale`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_translations`
--
ALTER TABLE `project_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `project_translations_project_id_locale_unique` (`project_id`,`locale`),
  ADD KEY `project_translations_locale_index` (`locale`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_translations`
--
ALTER TABLE `service_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `service_translations_service_id_locale_unique` (`service_id`,`locale`),
  ADD KEY `service_translations_locale_index` (`locale`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_translations`
--
ALTER TABLE `setting_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `setting_translations_setting_id_locale_unique` (`setting_id`,`locale`),
  ADD KEY `setting_translations_locale_index` (`locale`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_translations`
--
ALTER TABLE `slider_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slider_translations_slider_id_locale_unique` (`slider_id`,`locale`),
  ADD KEY `slider_translations_locale_index` (`locale`);

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
-- Indexes for table `testimonial_translations`
--
ALTER TABLE `testimonial_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `testimonial_translations_testimonial_id_locale_unique` (`testimonial_id`,`locale`),
  ADD KEY `testimonial_translations_locale_index` (`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_city_id_foreign` (`city_id`),
  ADD KEY `users_country_id_foreign` (`country_id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_translations`
--
ALTER TABLE `video_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `video_translations_video_id_locale_unique` (`video_id`,`locale`),
  ADD KEY `video_translations_locale_index` (`locale`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `about_translations`
--
ALTER TABLE `about_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog_translations`
--
ALTER TABLE `blog_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category_translations`
--
ALTER TABLE `category_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `city_translations`
--
ALTER TABLE `city_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `counters`
--
ALTER TABLE `counters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `country_translations`
--
ALTER TABLE `country_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq_translations`
--
ALTER TABLE `faq_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feature_translations`
--
ALTER TABLE `feature_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `news_letters`
--
ALTER TABLE `news_letters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news_letter_messages`
--
ALTER TABLE `news_letter_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `page_translations`
--
ALTER TABLE `page_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `photo_translations`
--
ALTER TABLE `photo_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_translations`
--
ALTER TABLE `product_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project_translations`
--
ALTER TABLE `project_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service_translations`
--
ALTER TABLE `service_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setting_translations`
--
ALTER TABLE `setting_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slider_translations`
--
ALTER TABLE `slider_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testimonial_translations`
--
ALTER TABLE `testimonial_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `video_translations`
--
ALTER TABLE `video_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `about_translations`
--
ALTER TABLE `about_translations`
  ADD CONSTRAINT `about_translations_about_id_foreign` FOREIGN KEY (`about_id`) REFERENCES `abouts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `blog_translations`
--
ALTER TABLE `blog_translations`
  ADD CONSTRAINT `blog_translations_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `category_translations`
--
ALTER TABLE `category_translations`
  ADD CONSTRAINT `category_translations_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `city_translations`
--
ALTER TABLE `city_translations`
  ADD CONSTRAINT `city_translations_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `country_translations`
--
ALTER TABLE `country_translations`
  ADD CONSTRAINT `country_translations_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `faq_translations`
--
ALTER TABLE `faq_translations`
  ADD CONSTRAINT `faq_translations_faq_id_foreign` FOREIGN KEY (`faq_id`) REFERENCES `faqs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `feature_translations`
--
ALTER TABLE `feature_translations`
  ADD CONSTRAINT `feature_translations_feature_id_foreign` FOREIGN KEY (`feature_id`) REFERENCES `features` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_product_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `page_translations`
--
ALTER TABLE `page_translations`
  ADD CONSTRAINT `page_translations_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `photos_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `photo_translations`
--
ALTER TABLE `photo_translations`
  ADD CONSTRAINT `photo_translations_photo_id_foreign` FOREIGN KEY (`photo_id`) REFERENCES `photos` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_translations`
--
ALTER TABLE `product_translations`
  ADD CONSTRAINT `product_translations_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_translations_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `project_translations`
--
ALTER TABLE `project_translations`
  ADD CONSTRAINT `project_translations_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `service_translations`
--
ALTER TABLE `service_translations`
  ADD CONSTRAINT `service_translations_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `setting_translations`
--
ALTER TABLE `setting_translations`
  ADD CONSTRAINT `setting_translations_setting_id_foreign` FOREIGN KEY (`setting_id`) REFERENCES `settings` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `slider_translations`
--
ALTER TABLE `slider_translations`
  ADD CONSTRAINT `slider_translations_slider_id_foreign` FOREIGN KEY (`slider_id`) REFERENCES `sliders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `testimonial_translations`
--
ALTER TABLE `testimonial_translations`
  ADD CONSTRAINT `testimonial_translations_testimonial_id_foreign` FOREIGN KEY (`testimonial_id`) REFERENCES `testimonials` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `video_translations`
--
ALTER TABLE `video_translations`
  ADD CONSTRAINT `video_translations_video_id_foreign` FOREIGN KEY (`video_id`) REFERENCES `videos` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
