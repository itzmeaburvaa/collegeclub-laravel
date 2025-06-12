-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2025 at 07:13 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collegeclub`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('aburvaa', '1818'),
('varshini', '1717');

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE `club` (
  `cname` varchar(100) NOT NULL,
  `logo` text NOT NULL,
  `intro` text NOT NULL,
  `mission` text NOT NULL,
  `faculty` varchar(100) NOT NULL,
  `facultyno` varchar(100) NOT NULL,
  `eventno` int(11) NOT NULL,
  `teamno` int(11) NOT NULL,
  `participants` int(11) NOT NULL,
  `year` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`cname`, `logo`, `intro`, `mission`, `faculty`, `facultyno`, `eventno`, `teamno`, `participants`, `year`) VALUES
('IOT', 'img/iot.jpg', 'This is IOT club', 'To improve knowledge of hardware', 'Ms. C. V. Nisha Angeline', '98421 75694', 30, 26, 500, '2013'),
('App Development', 'img/ADC.png', 'This empowers the app development among students', 'To improve technical knowledge among students', 'Ms. C. V. Nisha Angeline', '98421 75694', 15, 24, 150, '2020'),
('AR/VR', 'img/arvr.png', 'Using argumented and virtual reality to improve the physically abled students environment', 'To innovate the angle of three dimension', 'Dr. D. Tamilselvi\r\n', '98437 79092', 13, 17, 94, '2016'),
('Prometheans', 'img/p.png', 'Used in mechanical engineering department to improvise the innovation of new machineries.', 'Create new machines', 'Mr. K. Ravi Kumar', '82385 78990', 21, 33, 83, '2011'),
('Eureka', 'img/eureka.png', 'To improvise the new innovation in bikes and cars', 'Economic bike and cars', 'Mr. R. Moorthy', '9967854321', 12, 33, 89, '2009'),
('Coders Club', 'storage/img/QNKqHmhUHcGz6ifEc6vK4Na1cLyDu4YtCGnjzQwk.png', 'Motivates students to explore lot about the coding side', 'Improves students coding knowledge', 'Dr. A. M. Abirami', '97865 43219', 55, 36, 230, '2008'),
('Ekalayva', 'storage/img/SnaMoelXz7HutK00DzPhpE0a6toKy2RBl4CJ5qgU.png', 'This is about educating the importance of art and education', 'Spread more education', 'Mrs. S. Ramya', '88765 32490', 6, 25, 77, '2022'),
('SAE Collegiate Club', 'storage/img/5NEmwyNRjr09LQteRu230cmJYL4LoO7kJkorq4f7.png', 'This club is to improve colloboration', 'To encourage team activity', 'Ms. H. Jeya', '88764 33298', 18, 34, 120, '2017'),
('ISHARE Students Chapter', 'storage/img/bA6EOvcHKJz5kSsguIpmlNeYWTw79fwJ1U4vlGWZ.png', 'This is a medium to share everyone\'s idea', 'To encourage group discussion', 'Mr. K. Senthil Kumar', '97876 59235', 30, 28, 130, '2016'),
('YUKTA Racing', 'storage/img/oa9Hk5LhHlIw6YPC8mAHPxsNrFD9lQYjB2FgXS3v.png', 'This is about science experiments', 'To explore more things', 'Ms. K. Raji', '87422 70902', 19, 28, 100, '2019'),
('Algo Geeks', 'storage/img/JAv5Sv7LRPFMGhRfzjgezvS0handd9qRm3P7aB8p.png', 'To improve english knowledge among students', 'Promote English', 'Mrs. J. Kavya', '78439 00993', 10, 35, 77, '2021');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `year_of_study` varchar(50) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  `club1` varchar(100) DEFAULT NULL,
  `club2` varchar(100) DEFAULT NULL,
  `club3` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `name`, `photo`, `year_of_study`, `department`, `club1`, `club2`, `club3`, `created_at`, `updated_at`) VALUES
(1, 'Aburvaa', 'photos/CYq0F3maBz9tqPF0sfz4Fv0C4AE9dYLa3DMdXh6I.jpg', '3', 'IT', NULL, 'App Development', NULL, '2025-06-11 08:17:55', '2025-06-11 23:17:22'),
(2, 'Kiruthika', 'photos/UfNRmE5iDYiHgHqTrepfzEm4YVSmoSss6VXfMyzx.jpg', '3', 'ECE', 'AR/VR', NULL, 'Algo Geeks', '2025-06-11 08:55:21', '2025-06-11 23:16:50'),
(3, 'Varshini', 'photos/vwvTQ7kktCYPNDGrB304NIJiz7kKdMVSbbwy82qJ.webp', '2', 'IT', NULL, 'Prometheans', 'Ekalayva', '2025-06-11 08:55:43', '2025-06-11 23:17:10'),
(4, 'Ram', 'photos/bWGGqAhvQh6ALky3CGMFqb36Zf0GRHDselMtNQX8.jpg', '4', 'CSE', 'App Development', 'Prometheans', 'Ekalayva', '2025-06-11 10:19:03', NULL),
(5, 'Nikitha', 'photos/Ia7wnSWRmqPiSNF0YJK2i3zE8clMMnhAqjjO2o0a.jpg', '4', 'ECE', 'IOT', 'Prometheans', 'Coders Club', '2025-06-11 11:35:10', '2025-06-11 11:35:10');

-- --------------------------------------------------------

--
-- Table structure for table `teammem`
--

CREATE TABLE `teammem` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `year_of_study` varchar(10) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  `club1` varchar(100) DEFAULT NULL,
  `club2` varchar(100) DEFAULT NULL,
  `club3` varchar(100) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teammem`
--

INSERT INTO `teammem` (`id`, `name`, `photo`, `year_of_study`, `department`, `club1`, `club2`, `club3`, `updated_at`, `created_at`) VALUES
(1, 'Aburvaa', 'photos/CYq0F3maBz9tqPF0sfz4Fv0C4AE9dYLa3DMdXh6I.jpg', '3', 'IT', 'IOT', NULL, NULL, '2025-06-11 23:16:39', '2025-06-11 23:16:39'),
(2, 'Varshini', 'photos/vwvTQ7kktCYPNDGrB304NIJiz7kKdMVSbbwy82qJ.webp', '2', 'IT', 'IOT', NULL, NULL, '2025-06-11 23:17:10', '2025-06-11 23:17:10'),
(3, 'Aburvaa', 'photos/CYq0F3maBz9tqPF0sfz4Fv0C4AE9dYLa3DMdXh6I.jpg', '3', 'IT', 'Coders Club', NULL, NULL, '2025-06-11 23:17:22', '2025-06-11 23:17:22'),
(4, 'Harshini', 'photos/TTqMoRpgz9k4Wx69d4R9WzhDkx2zMh7hqiMTOukv.jpg', '2', 'CSE', 'IOT', NULL, NULL, '2025-06-11 23:18:52', '2025-06-11 23:18:52'),
(5, 'Nandhitha', 'photos/1F7oyLx9dWNNnVgTkMf8RCV1PAzMOE0FhcC8viCu.jpg', '2', 'IT', 'Coders Club', NULL, NULL, '2025-06-11 23:21:03', '2025-06-11 23:21:03');

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teammem`
--
ALTER TABLE `teammem`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `teammem`
--
ALTER TABLE `teammem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
