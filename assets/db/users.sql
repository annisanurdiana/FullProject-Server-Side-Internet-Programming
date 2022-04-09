-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2021 at 11:02 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ssip`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'anddianaa', '$2y$10$zULwknIi08.zYlS9OANIh.s24I8Xh8pVohdNq.dsgCX35.qVuFBNS', '2021-09-09 22:22:11'),
(2, 'qwerty', '$2y$10$QbP8y2QqFQyuemA/RbTFZOXMWDd0xEVdF1mhcG8yNhfp1gUidbLtG', '2021-09-09 22:22:50'),
(3, 'diana123', '$2y$10$k7VzUNryN7hFCmHlghMXe.ltklO/kiEZjkCNMbrd3.NUesN4gJWza', '2021-09-09 22:28:37'),
(4, 'nasi_padang_dotcom', '$2y$10$/YSkti/nnmtlm04GXQDwlefXNKElGdM0RPy8tzCxYPAO2ISC4yeGC', '2021-09-09 22:35:52'),
(5, 'nasipadang', '$2y$10$viPI0dK8SAZf/XicQEXKMeF.6/TNgpE0lGg7p5Gomii8.07TLuS8y', '2021-09-09 22:42:05'),
(8, 'preetyboy', '$2y$10$X4Duq83dommjnEZy3QrbO.j/xvmfVGfTJrwXe4hMx1psPM6I4/ODC', '2021-09-09 23:45:44'),
(10, 'adminmin', '$2y$10$qmnMAhvAHa1RR9b1LPU6oeeSh9s2hZjdatuqgBqemVzEVutuK3kOq', '2021-09-12 11:21:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
