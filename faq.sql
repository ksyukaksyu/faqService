-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: May 23, 2016 at 03:09 AM
-- Server version: 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `netdiploma`
--
CREATE DATABASE IF NOT EXISTS `netdiploma` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `netdiploma`;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) unsigned NOT NULL COMMENT 'Category ID',
  `name` varchar(100) NOT NULL COMMENT 'Category name'
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(3, 'PHP'),
(4, 'C++'),
(5, 'HTML'),
(6, 'JQuery'),
(7, 'SQL'),
(8, 'CSS');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1463836483),
('m130524_201442_init', 1463836488);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) unsigned NOT NULL COMMENT 'Question ID',
  `id_category` int(11) unsigned DEFAULT NULL COMMENT 'Category ID',
  `datetime_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Date and time added',
  `state` enum('draft','published','hidden','') NOT NULL DEFAULT 'draft' COMMENT 'Status',
  `is_blocked` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Is Blocked',
  `is_telegram` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Is from Telegram Bot',
  `author_name` varchar(100) NOT NULL COMMENT 'Author Name',
  `author_mail` varchar(100) DEFAULT NULL COMMENT 'Author E-Mail',
  `question` text NOT NULL COMMENT 'Question Text',
  `answer` text COMMENT 'Answer Text'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `id_category`, `datetime_added`, `state`, `is_blocked`, `is_telegram`, `author_name`, `author_mail`, `question`, `answer`) VALUES
(3, 6, '2016-05-23 00:00:34', 'published', 0, 0, 'vasya', '', 'How to progr', 'dfdfdfdf');

-- --------------------------------------------------------

--
-- Table structure for table `question_stopword`
--

CREATE TABLE `question_stopword` (
  `id_question` int(11) unsigned NOT NULL,
  `id_stopword` int(11) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `stopword`
--

CREATE TABLE `stopword` (
  `id` int(11) unsigned NOT NULL COMMENT 'Stopword ID',
  `word` varchar(50) NOT NULL COMMENT 'Stopword'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stopword`
--

INSERT INTO `stopword` (`id`, `word`) VALUES
(1, 'fuck'),
(2, 'asdfasdf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'jSFHq7XGCmVfkWM8k5zT_lSt1ZAgdLSN', '$2y$13$t.c/QlrrorKwufEBuq9oGOHtILIb8D7YIHSMuCBTt0.omfwog.G3i', NULL, 'admin@netology.ru', 10, 1463941572, 1463941572);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`id_category`),
  ADD KEY `state` (`state`),
  ADD KEY `blocked` (`is_blocked`),
  ADD KEY `telegram` (`is_telegram`);

--
-- Indexes for table `question_stopword`
--
ALTER TABLE `question_stopword`
  ADD PRIMARY KEY (`id_question`,`id_stopword`),
  ADD KEY `FK_stopword` (`id_stopword`);

--
-- Indexes for table `stopword`
--
ALTER TABLE `stopword`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Category ID',AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Question ID',AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `stopword`
--
ALTER TABLE `stopword`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Stopword ID',AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `FK_category` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `question_stopword`
--
ALTER TABLE `question_stopword`
  ADD CONSTRAINT `FK_stopword` FOREIGN KEY (`id_stopword`) REFERENCES `stopword` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_question` FOREIGN KEY (`id_question`) REFERENCES `question` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
