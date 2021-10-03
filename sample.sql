-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2021 at 01:53 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sample`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `text` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `create_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `text`, `user_id`, `create_timestamp`, `update_timestamp`) VALUES
(13, 'My post new updated', 'my-post-new-updated', 'afsdfhjk', 0, '2021-10-01 10:43:41', '2021-10-01 10:43:41'),
(15, 'My post 64', 'my-post-64', 'safs', 0, '2021-10-01 10:43:41', '2021-10-01 10:43:41'),
(17, 'new post 1', 'new-post-1', 'THis is my post\r\n', 2, '2021-10-01 12:05:49', '2021-10-01 12:05:49'),
(18, 'new post 2', 'new-post-2', 'This is my post', 2, '2021-10-01 12:05:57', '2021-10-01 12:05:57'),
(19, 'new post', 'new-post', 'this is post', 1, '2021-10-01 12:35:28', '2021-10-01 12:35:28'),
(20, 'Test Title', 'test-title', 'This is test Post 1', 3, '2021-10-01 12:38:12', '2021-10-01 12:38:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `create_timestamp`, `update_timestamp`) VALUES
(1, 'Gaurav', 'gaurav.jss.027@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2021-10-01 11:15:38', '2021-10-01 11:15:38'),
(2, 'new_user', 'new@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2021-10-01 12:05:40', '2021-10-01 12:05:40'),
(3, 'test', 'test@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2021-10-01 12:37:57', '2021-10-01 12:37:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
