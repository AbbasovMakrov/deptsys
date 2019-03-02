-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 02, 2019 at 08:51 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deptsys`
--
CREATE DATABASE IF NOT EXISTS `deptsys` DEFAULT CHARACTER SET utf32 COLLATE utf32_unicode_ci;
USE `deptsys`;

-- --------------------------------------------------------

--
-- Table structure for table `depts`
--

CREATE TABLE `depts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `money` int(11) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `arrived` int(11) DEFAULT NULL,
  `left` int(11) DEFAULT NULL,
  `product` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `depts`
--

INSERT INTO `depts` (`id`, `name`, `money`, `date`, `created_at`, `updated_at`, `arrived`, `left`, `product`) VALUES
(31, 'محمد', 5000, '2019-02-22', '2019-02-22 10:31:27', '2019-02-22 11:13:41', 1000, 4000, 'طاسة'),
(32, 'محمد', 5000, '2019-02-22', '2019-02-22 11:18:17', '2019-02-22 11:18:17', 1000, 4000, 'قوري'),
(33, 'محمد', 2000, '2019-02-22', '2019-02-22 14:02:00', '2019-02-22 14:02:00', 1000, 1000, 'تيست'),
(34, 'abbas', 1000, '2019-02-22', '2019-02-22 14:02:35', '2019-02-22 14:02:54', 151, 849, 'تيست2');

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
(3, '2019_02_16_222900_create_depts_table', 1),
(4, '2019_02_17_143349_add_arrived_to_depts_table', 2),
(5, '2019_02_17_152626_add_left_to_depts_table', 3),
(6, '2019_02_22_102254_add_product_to_depts_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--



-- --------------------------------------------------------

--
-- Table structure for table `users`
--


--
-- Indexes for dumped tables
--

--
-- Indexes for table `depts`
--
ALTER TABLE `depts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`


--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `depts`
--
ALTER TABLE `depts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
