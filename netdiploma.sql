-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: May 24, 2016 at 05:40 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `id_category`, `datetime_added`, `state`, `is_blocked`, `is_telegram`, `author_name`, `author_mail`, `question`, `answer`) VALUES
(3, 6, '2016-05-23 00:00:34', 'published', 0, 0, 'vasya', 'vasya@vasya.vasya', 'How to program JQuery?', 'Fluently.'),
(4, 3, '2016-05-23 14:56:25', 'published', 0, 0, 'Alex', 'alex@alex.com', 'What is PHP?', 'From the preface of the manual:\r\n\r\nPHP is an HTML-embedded scripting language. Much of its syntax is borrowed from C, Java and Perl with a couple of unique PHP-specific features thrown in. The goal of the language is to allow web developers to write dynamically generated pages quickly.\r\n'),
(5, 3, '2016-05-23 14:56:25', 'published', 0, 0, 'Dru', 'Dru@dell.com', 'Can I run several versions of PHP at the same time?', 'Yes. See the INSTALL file that is included in the PHP source distribution.'),
(6, 4, '2016-05-23 15:15:22', 'published', 0, 0, 'Fill', 'asher@mail.com', 'Is C++ a practical language?', 'Yes.\r\n\r\nC++ is a practical tool. It’s not perfect, but it’s useful.\r\nIn the world of industrial software, C++ is viewed as a solid, mature, mainstream tool. It has widespread industry support which makes it “good” from an overall business perspective.'),
(7, 4, '2016-05-23 15:15:22', 'published', 0, 0, 'Garry Veber', 'gveber@drt.org', 'Is C++ a perfect language?', 'Nope.\r\n\r\nC++ wasn’t designed to demonstrate what a perfect language looks like. It was designed to be a practical tool for solving real world problems. It has a few warts, as do all practical programming tools, but the only place where it’s appropriate to keep fiddling with something until it’s perfect is in a pure academic setting. That wasn’t C++’s goal.'),
(8, 4, '2016-05-23 15:17:40', 'published', 0, 0, 'Roseline', 'r.vott@sael.com', 'Why is C++ so big?', 'C++ is not a tiny language designed to be a minimal language for teaching, but neither are the languages people most often compare it to, such as C, Java, C#. They too are huge compared to say, Pascal as Dr. Wirth originally defined it – for good reasons. The programming world is far more complex today than it was 30 years ago, and modern programming languages reflect that.\r\n\r\nC++ isn’t as big as some people imagine. By word count, the size of the language specifications (excluding standard libraries) for C++, C#, and Java are currently within a few percentage points of each other. This reflects that they are general-purpose mainstream languages that have grown similar features – auto/var type deduction, range for loops, lambda functions, various levels of support for generic programming, and so on. It also reflects what design theorists call “essential complexity in the problem domain” – the complexity in the real world and that a serious language has to expose, everything from fundamental OS differences to calling C++ libraries.\r\n\r\nIn some cases C++ directly supports (i.e., in the language) what some other languages support through libraries, so the language part will be relatively larger. On the other hand, if you want to write a “typical modern application”, you need to consider operating system interfaces, GUI, databases, web interfaces, etc. the sum of language features, libraries, and programming conventions and standards that you must become familiar with dwarf the programming language. Here, C++’s size can be an advantage as far as it better supports good libraries.\r\n\r\nFinally, the days where a novice programmer can know all of a language are gone, at least for the languages in widespread industrial use. Few people know “all of C” or “all of Java” either and none of those are novices. It follows that nobody should have to apologize for the fact that novices do not know all of C++. What you must do - in any language – is to pick a subset, get working writing code, and gradually learn more of the language, its libraries, and its tools. For my suggestion on how beginners can approach C++, see Programming: Principles and Practice using C++.'),
(9, 4, '2016-05-23 15:17:40', 'published', 0, 0, 'Travis Gosh', 'tr.gosh@sart.go', 'What’s the best way to improve my C++ programs?', 'That depends on how you use it. Most people underestimate abstract classes and templates. Conversely, most people seriously overuse casts and macros. Have a look at one of Stroustrup’s papers or books for ideas. One way of thinking of abstract classes and templates is as interfaces that allow a more clean and logical presentation of services than is easy to provide through functions or single-rooted class hierarchies. See other sections of this FAQ for some specific examples and ideas.'),
(10, 5, '2016-05-23 15:29:30', 'published', 0, 1, 'Gregg', NULL, 'When can I use HTML5?', 'People can already use parts of the platform that interoperate, but W3C''s mission is global interoperable, to ensure that the web is available to all. Not all elements are fully implemented yet and some of them provide builtin fallback mechanisms, such as <video> or <input>. One can use HTML5 today, knowing the existing limitations and ensuring proper fallbacks.'),
(11, 5, '2016-05-23 15:29:30', 'published', 0, 0, 'Kimmy', 'kim.string@fork.com', 'When will HTML5 be finished? What is the status of HTML5?', 'HTML5 is a work in progress. We expect to be feature complete by December 2012. W3C is developing a comprehensive test suite to achieve interoperability for the full specification by 2014, the target date for Recommendation. W3C''s primary goal is to ensure that the HTML5 standard is of the highest quality and allows the creation of interoperable implementations. The timeline in the charter is based on implementation expectations and development of a test suite. The timeline is designed to help the industry plan for adoption. Ongoing active participation by browser vendors, other software developers, and the community in implementation and testing will help ensure the successful and timely roll out of the standard.'),
(12, 5, '2016-05-23 16:00:06', 'draft', 0, 1, 'Fritz', NULL, 'Will there be an HTML6?', NULL),
(13, 6, '2016-05-23 16:00:06', 'published', 0, 0, 'cris brown', 'cbrown45@dad.tor', 'How do I disable/enable a form element?', 'You can enable or disable a form element using the .prop() method:\r\n\r\n// Disable #x\r\n$( "#x" ).prop( "disabled", true );\r\n \r\n// Enable #x\r\n$( "#x" ).prop( "disabled", false );'),
(15, 3, '2016-05-23 20:02:01', 'draft', 0, 0, 'asdf', 'asdf', 'asdf', NULL),
(16, 3, '2016-05-23 20:03:15', 'draft', 0, 0, 'asdf', 'asdf', 'asdfasdf', NULL),
(17, NULL, '2016-05-23 20:08:04', 'draft', 0, 0, 'sdfgsdfg', 'xdfgsdfg', 'sdfgsdfg', NULL),
(18, NULL, '2016-05-23 20:08:42', 'draft', 0, 0, 'sdfgsdfg', 'xdfgsdfg', 'sdfgsdfg', NULL),
(19, NULL, '2016-05-23 20:11:53', 'draft', 0, 0, 'sdfgsdfg', 'xdfgsdfg', 'sdfgsdfg', NULL),
(20, NULL, '2016-05-23 20:14:16', 'draft', 0, 0, 'sdfgsdfg', 'dfgsd', 'dfgsdfgd\r\n', NULL),
(21, NULL, '2016-05-23 20:14:56', 'draft', 0, 0, 'sdfg', 'sdfgs', 'dfgsdfg', NULL),
(22, NULL, '2016-05-23 20:19:37', 'draft', 0, 0, 'asdfasdf', ';lkj', 'asdf', NULL),
(23, NULL, '2016-05-23 20:21:06', 'draft', 0, 0, 'asdf', 'asdf', 'asdf', NULL),
(24, NULL, '2016-05-23 20:23:00', 'draft', 0, 0, 'asdf', 'asdf', 'sdfg', NULL),
(25, NULL, '2016-05-23 20:24:12', 'draft', 0, 0, 'kjkjh', 'kjhg', 'jghfjgf', NULL),
(26, 3, '2016-05-23 20:59:26', 'draft', 0, 0, 'asdfasdf', 'sdfsafgasfgasdfasdfa@asdf.er', 'sdfsdf', NULL),
(27, 3, '2016-05-23 20:59:56', 'draft', 0, 0, 'asdfasdf', 'sdfsafgasfgasdfasdfa@asdf.er', 'sdfsdf', NULL),
(28, 6, '2016-05-23 21:10:41', 'draft', 0, 0, 'asdf', 'sdf@sdf.rt', 'sfdgsdfg', NULL),
(29, 5, '2016-05-23 21:10:54', 'draft', 0, 0, 'asdf', 'sdf@sdf.rt', 'sdfgsdfg', NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stopword`
--

INSERT INTO `stopword` (`id`, `word`) VALUES
(1, 'fuck');

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
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Question ID',AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `stopword`
--
ALTER TABLE `stopword`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Stopword ID',AUTO_INCREMENT=4;
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
