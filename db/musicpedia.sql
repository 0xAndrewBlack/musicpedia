-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2022 at 01:45 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musicpedia`
--
CREATE DATABASE IF NOT EXISTS `musicpedia` DEFAULT CHARACTER SET utf8 COLLATE utf8_hungarian_ci;
USE `musicpedia`;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--
-- Creation: Apr 09, 2022 at 11:28 AM
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL COMMENT 'message id',
  `time` datetime NOT NULL COMMENT 'sent at',
  `sender` int(11) NOT NULL COMMENT 'sender',
  `recipient` int(11) NOT NULL COMMENT 'recipient',
  `message` text COLLATE utf8_hungarian_ci NOT NULL COMMENT 'message'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- RELATIONSHIPS FOR TABLE `messages`:
--

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `time`, `sender`, `recipient`, `message`) VALUES
(1, '2022-04-08 17:02:10', 1, 2, 'Hali, Teszt!');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
-- Creation: Apr 09, 2022 at 11:43 AM
-- Last update: Apr 09, 2022 at 11:43 AM
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `registration_date` datetime NOT NULL COMMENT 'registration date',
  `email` varchar(64) COLLATE utf8_hungarian_ci NOT NULL COMMENT 'email address',
  `password` varchar(256) COLLATE utf8_hungarian_ci NOT NULL COMMENT 'hashed password',
  `about` text COLLATE utf8_hungarian_ci NOT NULL DEFAULT 'Hello Musicpedia!' COMMENT 'user about message',
  `pfp` text COLLATE utf8_hungarian_ci NOT NULL DEFAULT 'default.png' COMMENT 'profile picture filename',
  `firstname` text COLLATE utf8_hungarian_ci NOT NULL COMMENT 'keresztnév',
  `lastname` text COLLATE utf8_hungarian_ci NOT NULL COMMENT 'vezetéknév',
  `birthdate` date DEFAULT NULL COMMENT 'születési dátum',
  `privilege_level` int(11) NOT NULL DEFAULT 0 COMMENT 'jogosultsagi szint 0 user, 1 eloado, 10 admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- RELATIONSHIPS FOR TABLE `users`:
--

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `registration_date`, `email`, `password`, `about`, `pfp`, `firstname`, `lastname`, `birthdate`, `privilege_level`) VALUES
(0, '2022-04-09 13:40:35', 'admin@musicpedia.hu', '$2y$10$YVdhcB51lskhybSvIEx.NuxT/kn.oqUai2gh0sGXy3oBys4aQtUHu', 'Hello Musicpedia!', 'default.png', 'Admin', 'Fiók', '2077-04-01', 10),
(1, '2022-04-09 13:41:39', 'user@musicpedia.hu', '$2y$10$cv0q1/qJawjxIg7OFPo/7ugH3Unln2snnyscXgFSiBEX4sGKh0yuq', 'Hello Musicpedia!', 'default.png', 'Alap', 'Felhasználó', '2001-04-01', 0),
(2, '2022-04-09 13:42:15', 'test@example.com', '$2y$10$p44lGEPEGXVQ0oQefUrjNu.eEwLqwUj/xc6FjiKFsgbCJg636wjN2', 'Hello Musicpedia!', 'default.png', 'Teszt', 'Elek', '2002-04-01', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'message id', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
