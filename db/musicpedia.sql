-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2022 at 05:05 PM
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

CREATE TABLE `messages` (
  `id` int(11) NOT NULL COMMENT 'message id',
  `time` datetime NOT NULL COMMENT 'sent at',
  `sender` int(11) NOT NULL COMMENT 'sender',
  `recipient` int(11) NOT NULL COMMENT 'recipient',
  `message_content` text COLLATE utf8_hungarian_ci NOT NULL COMMENT 'message'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `time`, `sender`, `recipient`, `message_content`) VALUES
(1, '2022-04-08 17:02:10', 1, 2, 'Hali, Teszt2!');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL COMMENT 'userId',
  `registration_date` datetime NOT NULL COMMENT 'registration date',
  `email` varchar(64) COLLATE utf8_hungarian_ci NOT NULL COMMENT 'email address',
  `password` varchar(256) COLLATE utf8_hungarian_ci NOT NULL COMMENT 'hashed password',
  `about_me` text COLLATE utf8_hungarian_ci NOT NULL COMMENT 'user about message',
  `keresztnev` text COLLATE utf8_hungarian_ci NOT NULL COMMENT 'keresztnév',
  `vezeteknev` text COLLATE utf8_hungarian_ci NOT NULL COMMENT 'vezetéknév',
  `brithdate` date DEFAULT NULL COMMENT 'születési dátum',
  `priviliege_level` int(11) NOT NULL COMMENT 'jogi szint 0 user 1 eloado 10 admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `registration_date`, `email`, `password`, `about_me`, `keresztnev`, `vezeteknev`, `brithdate`, `priviliege_level`) VALUES
(1, '2022-04-08 16:12:36', 'test@domain.tld', '12345', 'Hello', 'John', 'Doe', '2022-04-01', 0),
(2, '2022-04-08 17:02:50', 'test2@domain.tld', '12345', 'Hello2', 'Jane', 'Doe', '2022-04-01', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
