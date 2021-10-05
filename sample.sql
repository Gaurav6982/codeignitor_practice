-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 05, 2021 at 05:35 PM
-- Server version: 5.7.35
-- PHP Version: 7.3.31-1+ubuntu20.04.1+deb.sury.org+1

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
  `create_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `text`, `user_id`, `create_timestamp`, `update_timestamp`) VALUES
(17, 'test', 'test', '&lt;script&gt;alert(&quot;Hello&quot;);&lt;/script&gt;', 2, '2021-10-01 12:05:49', '2021-10-01 12:05:49'),
(18, 'test', 'test', '&lt;script&gt;alert(&quot;Hello&quot;);&lt;/script&gt;', 2, '2021-10-01 12:05:57', '2021-10-01 12:05:57'),
(19, 'test', 'test', '&lt;script&gt;alert(&quot;Hello&quot;);&lt;/script&gt;', 1, '2021-10-01 12:35:28', '2021-10-01 12:35:28'),
(20, 'test', 'test', '&lt;script&gt;alert(&quot;Hello&quot;);&lt;/script&gt;', 3, '2021-10-01 12:38:12', '2021-10-01 12:38:12'),
(21, 'test', 'test', '&lt;script&gt;alert(&quot;Hello&quot;);&lt;/script&gt;', 4, '2021-10-03 14:58:03', '2021-10-03 14:58:03'),
(38, 'awd', 'awd', '1233', 5, '2021-10-05 11:57:42', '2021-10-05 11:57:42'),
(39, 'wad', 'wad', '12311', 5, '2021-10-05 11:59:14', '2021-10-05 11:59:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `create_timestamp`, `update_timestamp`) VALUES
(1, 'Gaurav', 'gaurav.jss.027@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2021-10-01 11:15:38', '2021-10-01 11:15:38'),
(2, 'new_user', 'new@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2021-10-01 12:05:40', '2021-10-01 12:05:40'),
(3, 'test', 'test@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2021-10-01 12:37:57', '2021-10-01 12:37:57'),
(4, 'Hello', 'hello@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2021-10-03 14:57:52', '2021-10-03 14:57:52'),
(5, 'test', 'test@test.com', '81dc9bdb52d04dc20036dbd8313ed055', '2021-10-05 08:31:14', '2021-10-05 08:31:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slug` (`slug`),
  ADD KEY `user_id` (`user_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
