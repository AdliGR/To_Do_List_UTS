-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2023 at 05:57 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utstodolist`
--

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name_task` varchar(255) NOT NULL,
  `task_status` tinyint(1) NOT NULL DEFAULT 0,
  `progress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `username`, `name_task`, `task_status`, `progress`) VALUES
(1, 'Shyehan Rafael', 'Menyapu', 1, 'Complete'),
(2, 'sasa', 'Mengepel', 0, 'Not yet started'),
(4, 'Shyehan Rafael', 'Beberes', 0, 'Not yet started'),
(6, 'Shyehan Rafael', 'Mengerjakann PR', 0, 'On Progress');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(3, 'Shyehan Rafael', 'raf@gmail.com', '$2y$10$2JJ7/sqUwZ8nm4mui4UkQeTXXRHBnh.B8Hb1QYJ/reY.MAr0oHJhe'),
(4, 'sasa', 'sasa@gmail.com', '$2y$10$upLc3N8WNEYIf8OOAfS/v.PATkjzItgdKgmnH87bNVtMtAgC26UsK'),
(5, 'dirsya', 'dirsya@gmail.com', '$2y$10$7OnyNtcAuIu6ISDYShH93usDwT/2.yyFwYMFW/VV38zKxEgTNPmQa'),
(6, 'dirsyaa', 'dirsyaa@gmail.com', '$2y$10$IXFCRKVywAZfkfYBHNu9EOY7iVmvUrX4Fk5M7HJbVh/qLJ2vefrwi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
