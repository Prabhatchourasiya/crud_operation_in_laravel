-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2021 at 08:27 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Est praesentium vol', 'Est ut voluptatum n', '2021-06-12 00:43:48', '2021-06-12 00:43:48'),
(2, 'Adipisicing vero cum', 'Enim id libero earum', '2021-06-12 00:43:55', '2021-06-12 00:43:55'),
(3, 'Magni provident nih', 'Veniam ut maxime du', '2021-06-12 00:44:02', '2021-06-12 00:44:02'),
(4, 'Natus et ipsam et of', 'Placeat nisi assume', '2021-06-12 00:44:11', '2021-06-12 00:44:11'),
(5, 'Sapiente fugiat aut', 'Fuga Quis unde volu', '2021-06-12 00:44:20', '2021-06-12 00:44:20'),
(6, 'Suscipit sapiente do', 'Rerum quia id velit', '2021-06-12 00:44:28', '2021-06-12 00:44:28'),
(7, 'Magnam reprehenderit', 'Magnam voluptatem no', '2021-06-12 00:44:36', '2021-06-12 00:44:36'),
(8, 'Sed quia non est mag', 'Tempora nulla dolore', '2021-06-12 00:44:43', '2021-06-12 00:44:43'),
(9, 'Voluptatem Cupidata', 'Error est deserunt q', '2021-06-12 00:44:51', '2021-06-12 00:44:51'),
(10, 'Perspiciatis blandi', 'Qui ipsa cum quisqu', '2021-06-12 00:45:00', '2021-06-12 00:45:00'),
(12, 'Nina Foreman', 'Non perspiciatis do', '2021-06-12 00:47:17', '2021-06-12 00:47:26'),
(13, 'Skyler Munoz', 'Sint quaerat quasi', '2021-06-12 00:54:37', '2021-06-12 00:54:51'),
(14, 'Gloria Thomas', 'Saepe fugiat itaque', '2021-06-12 00:55:52', '2021-06-12 00:56:18'),
(15, 'Ipsam aliquam eos s', 'Anim saepe minus con', '2021-06-12 00:56:27', '2021-06-12 00:56:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
