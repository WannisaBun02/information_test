-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2023 at 08:33 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `information_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `information_tests`
--

CREATE TABLE `information_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `information_tests`
--

INSERT INTO `information_tests` (`id`, `name`, `age`, `gender`, `created_at`, `updated_at`) VALUES
(1, 'Kaia Stromans', 39, 'M', '2023-11-05 04:10:05', '2023-11-05 04:10:05'),
(2, 'Rodrigo Jones', 65, 'F', '2023-11-05 04:10:05', '2023-11-05 04:10:05'),
(3, 'Ryan Boehm III', 27, 'F', '2023-11-05 04:10:05', '2023-11-05 04:10:05'),
(4, 'Odessa Bernhard', 35, 'F', '2023-11-05 04:10:05', '2023-11-05 04:10:05'),
(5, 'Kenya Dietrich', 61, 'M', '2023-11-05 04:10:05', '2023-11-05 04:10:05'),
(6, 'Bobby Zboncak', 56, 'M', '2023-11-05 04:10:05', '2023-11-05 04:10:05'),
(11, 'admin', 12, 'M', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `information_tests`
--
ALTER TABLE `information_tests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `information_tests`
--
ALTER TABLE `information_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
