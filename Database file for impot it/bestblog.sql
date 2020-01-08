-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2020 at 04:28 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bestblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created_at`, `updated_at`, `user_id`, `image`) VALUES
(9, 'اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام', 'اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام  اي  كلام', '2020-01-08 13:14:29', '2020-01-08 13:14:29', 1, 'cover_image_1578496469.png'),
(10, 'Installation', 'Server Requirements\r\nThe Laravel framework has a few system requirements. All of these requirements are satisfied by the Laravel Homestead virtual machine, so it\'s highly recommended that you use Homestead as your local Laravel development environment.\r\n\r\nHowever, if you are not using Homestead, you will need to make sure your server meets the following requirements:', '2020-01-08 13:25:20', '2020-01-08 13:25:20', 2, 'cover_image_1578497120.png'),
(11, 'keroles', 'Server Requirements\r\nThe Laravel framework has a few system requirements. All of these requirements are satisfied by the Laravel Homestead virtual machine, so it\'s highly recommended that you use Homestead as your local Laravel development environment.\r\n\r\nHowever, if you are not using Homestead, you will need to make sure your server meets the following requirements:', '2020-01-08 13:26:05', '2020-01-08 13:26:05', 2, 'cover_image_1578497165.jpg'),
(12, 'www', 'Server Requirements\r\nThe Laravel framework has a few system requirements. All of these requirements are satisfied by the Laravel Homestead virtual machine, so it\'s highly recommended that you use Homestead as your local Laravel development environment.\r\n\r\nHowever, if you are not using Homestead, you will need to make sure your server meets the following requirements:', '2020-01-08 13:26:42', '2020-01-08 13:26:42', 1, 'cover_image_1578497202.png'),
(13, 'Server Requirements', 'Server Requirements\r\nThe Laravel framework has a few system requirements. All of these requirements are satisfied by the Laravel Homestead virtual machine, so it\'s highly recommended that you use Homestead as your local Laravel development environment.\r\n\r\nHowever, if you are not using Homestead, you will need to make sure your server meets the following requirements:', '2020-01-08 13:27:16', '2020-01-08 13:27:16', 1, 'cover_image_1578497236.png');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
