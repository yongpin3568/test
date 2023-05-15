-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2023 at 09:01 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `example_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `study_course` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `address`, `study_course`, `created_at`, `updated_at`) VALUES
(1, 'Yong Pin', 'yp123@gmail.com', 'Malaysia', 'IT', NULL, NULL),
(2, 'Yap', 'yap123@gmail.com', 'Finland', 'AC', NULL, NULL),
(3, 'Ng', 'ng@gmail.com', 'Klang', 'BS', NULL, NULL),
(4, 'Tan', 'tan@gmail.com', 'Pulau', 'BS', NULL, NULL),
(5, 'Since', 'Since32@gmail.com', 'Germany', 'IT', '2023-05-13 21:55:49', '2023-05-13 21:55:49'),
(6, 'Bird', 'bird123@gmail.com', 'Netherland', 'AC', '2023-05-13 21:56:35', '2023-05-13 21:56:35'),
(7, 'Cat', 'lovecat@gmail.com', 'Cat City', 'AC', '2023-05-13 22:30:16', '2023-05-13 22:54:15'),
(8, 'Coke', 'cokecoke@gmail.com', 'Cocacola', 'AC', '2023-05-13 22:30:42', '2023-05-13 22:30:42'),
(9, 'Rain', 'rainy@gmail.com', 'WholedayRain', 'IT', '2023-05-13 23:07:26', '2023-05-13 23:07:26'),
(10, 'Sun', 'sun88@gmail.com', 'sun', 'IT', '2023-05-13 23:24:10', '2023-05-13 23:24:10'),
(11, 'Sunny', 'sunny88@gmail.com', 'sunday', 'BS', '2023-05-13 23:24:35', '2023-05-13 23:24:35'),
(12, 'Heaven', 'great@gmail.com', 'Sky', 'BS', '2023-05-13 23:25:05', '2023-05-13 23:25:05'),
(13, 'Nether', 'bad@gmail.com', 'Underground', 'AC', '2023-05-13 23:25:25', '2023-05-13 23:25:25'),
(14, 'bunny', 'bunny@gmail.com', 'small cave', 'BS', '2023-05-13 23:25:51', '2023-05-13 23:25:51'),
(15, 'lion', 'lion@gmail.com', 'cave', 'AC', '2023-05-13 23:26:08', '2023-05-13 23:26:08'),
(16, 'Cindy', 'cindy@gmail.com', 'Cloud Street', 'BS', '2023-05-13 23:26:48', '2023-05-13 23:26:48'),
(17, 'Wendy', 'wendy@gmail.com', 'Street4', 'IT', '2023-05-13 23:27:09', '2023-05-13 23:27:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
