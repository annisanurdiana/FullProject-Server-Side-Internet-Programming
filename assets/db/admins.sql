-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2021 at 08:22 PM
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
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `no` int(100) NOT NULL,
  `fullname` varchar(269) NOT NULL,
  `email` varchar(269) NOT NULL,
  `country` varchar(269) NOT NULL,
  `created_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`no`, `fullname`, `email`, `country`, `created_at`) VALUES
(1, 'tess', 'tess@gmail.com', 'tess', '2021-09-24'),
(3, 'John Doe', 'johndoe@gmail.com', 'USA', '2021-09-25'),
(5, 'Wisnu Widianto', 'wisnuwidianto@gmail.com', 'Indonesia', '2021-09-25'),
(13, 'Laura Diana', 'lauradiana@yahoo.com', 'Australia', '2021-09-25'),
(14, 'Lee Takamura', 'leetakamuraa@yahoo.com', 'Japan', '2021-09-25'),
(18, 'Alexaa', 'alexaa@gmail.com', 'Singapore', '2021-09-25'),
(19, 'Celine Tam', 'celinetam@gmail.com', 'China', '2021-09-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`no`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
