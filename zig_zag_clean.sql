-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2021 at 06:43 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zig_zag_clean`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `name`, `email`, `phone`, `address`, `date`) VALUES
(1, 'Rahul Kumar Gupta', 'rg204880@gmail.com', '8777841197', 'Khandsa Sabji mandi', '2021-02-07 18:30:00'),
(2, 'Rahul Kumar Gupta', 'rg204880@gmail.com', '8777841197', 'Khandsa Sabji mandi', '2021-02-07 18:30:00'),
(3, 'Rahul Kumar Gupta', 'rg204880@gmail.com', '8777841197', 'Khandsa Sabji mandi', '2021-02-07 18:30:00'),
(4, 'rahull', 'rg6568276@gmail.com', '8777841197', 'oyuuhbuioofyiygu', '2021-02-14 08:58:02'),
(5, 'rahull', 'rg6568276@gmail.com', '8777841197', 'oyuuhbuioofyiygu', '2021-02-14 09:06:53'),
(6, 'ssahid', 'khanshahid9283@gmail.com', '8777841197', 'jhlhbjk', '2021-02-14 09:07:37'),
(7, 'golu', 'rg204880@gmail.com', '8777841197', 'hggfhd', '2021-02-14 09:11:24'),
(8, 'Rahul Kumar Gupta', 'rg204880@gmail.com', '8777841197', 'gkgjg', '2021-02-14 09:28:25'),
(9, 'shahid', 'khanshahid9283@gmail.com', '8777841197', 'a', '2021-02-14 09:40:12'),
(10, 'shahid', 'khanshahid9283@gmail.com', '8777841197', 'a', '2021-02-14 09:42:56'),
(11, 'jkd.qk', 'rg204880@gmail.com', '8777841197', 'dsdfarf', '2021-02-14 16:16:44'),
(12, 'jkd.qk', 'rg204880@gmail.com', '8777841197', 'dsdfarf', '2021-02-14 16:27:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Email`, `Password`, `Timestamp`) VALUES
(1, 'zigzagclean@gmail.com', '123456', '2021-02-07 19:39:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
