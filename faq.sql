--
-- Скрипт сгенерирован Devart dbForge Studio for MySQL, Версия 7.1.13.0
-- Домашняя страница продукта: http://www.devart.com/ru/dbforge/mysql/studio
-- Дата скрипта: 26.05.2016 23:29:56
-- Версия сервера: 5.5.5-10.1.8-MariaDB
-- Версия клиента: 4.1
--


-- 
-- Отключение внешних ключей
-- 
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;

-- 
-- Установить режим SQL (SQL mode)
-- 
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- 
-- Установка кодировки, с использованием которой клиент будет посылать запросы на сервер
--
SET NAMES 'utf8';

-- 
-- Установка базы данных по умолчанию
--

--
-- Описание для таблицы category
--
DROP TABLE IF EXISTS category;
CREATE TABLE IF NOT EXISTS category (
  id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Category ID',
  name VARCHAR(100) NOT NULL COMMENT 'Category name',
  PRIMARY KEY (id)
)
ENGINE = INNODB
AUTO_INCREMENT = 9
AVG_ROW_LENGTH = 2730
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы migration
--
DROP TABLE IF EXISTS migration;
CREATE TABLE IF NOT EXISTS migration (
  version VARCHAR(180) NOT NULL,
  apply_time INT(11) DEFAULT NULL,
  PRIMARY KEY (version)
)
ENGINE = INNODB
AVG_ROW_LENGTH = 8192
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы stopword
--
DROP TABLE IF EXISTS stopword;
CREATE TABLE IF NOT EXISTS stopword (
  id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Stopword ID',
  word VARCHAR(50) NOT NULL COMMENT 'Stopword',
  PRIMARY KEY (id)
)
ENGINE = INNODB
AUTO_INCREMENT = 7
AVG_ROW_LENGTH = 4096
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы user
--
DROP TABLE IF EXISTS user;
CREATE TABLE IF NOT EXISTS user (
  id INT(11) NOT NULL AUTO_INCREMENT,
  username VARCHAR(255) NOT NULL,
  auth_key VARCHAR(32) NOT NULL,
  password_hash VARCHAR(255) NOT NULL,
  password_reset_token VARCHAR(255) DEFAULT NULL,
  email VARCHAR(255) NOT NULL,
  status SMALLINT(6) NOT NULL DEFAULT 10,
  created_at INT(11) NOT NULL,
  updated_at INT(11) NOT NULL,
  PRIMARY KEY (id),
  UNIQUE INDEX email (email),
  UNIQUE INDEX password_reset_token (password_reset_token),
  UNIQUE INDEX username (username)
)
ENGINE = INNODB
AUTO_INCREMENT = 13
AVG_ROW_LENGTH = 2730
CHARACTER SET utf8
COLLATE utf8_unicode_ci;

--
-- Описание для таблицы question
--
DROP TABLE IF EXISTS question;
CREATE TABLE IF NOT EXISTS question (
  id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Question ID',
  id_category INT(11) UNSIGNED DEFAULT NULL COMMENT 'Category ID',
  datetime_added TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Date and time added',
  state ENUM('draft','published','hidden','') NOT NULL DEFAULT 'draft' COMMENT 'Status',
  is_blocked TINYINT(1) NOT NULL DEFAULT 0 COMMENT 'Is Blocked',
  is_telegram TINYINT(1) NOT NULL DEFAULT 0 COMMENT 'Is from Telegram Bot',
  author_name VARCHAR(100) NOT NULL COMMENT 'Author Name',
  author_mail VARCHAR(100) DEFAULT NULL COMMENT 'Author E-Mail',
  question TEXT NOT NULL COMMENT 'Question Text',
  answer TEXT DEFAULT NULL COMMENT 'Answer Text',
  PRIMARY KEY (id),
  INDEX blocked (is_blocked),
  INDEX category (id_category),
  INDEX state (state),
  INDEX telegram (is_telegram),
  CONSTRAINT FK_category FOREIGN KEY (id_category)
    REFERENCES category(id) ON DELETE CASCADE ON UPDATE CASCADE
)
ENGINE = INNODB
AUTO_INCREMENT = 34
AVG_ROW_LENGTH = 712
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы question_stopword
--
DROP TABLE IF EXISTS question_stopword;
CREATE TABLE IF NOT EXISTS question_stopword (
  id_question INT(11) UNSIGNED NOT NULL,
  id_stopword INT(11) UNSIGNED NOT NULL,
  PRIMARY KEY (id_question, id_stopword),
  CONSTRAINT FK_question FOREIGN KEY (id_question)
    REFERENCES question(id) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT FK_stopword FOREIGN KEY (id_stopword)
    REFERENCES stopword(id) ON DELETE CASCADE ON UPDATE CASCADE
)
ENGINE = INNODB
AVG_ROW_LENGTH = 8192
CHARACTER SET utf8
COLLATE utf8_general_ci;

-- 
-- Вывод данных для таблицы category
--
INSERT INTO category VALUES
(3, 'PHP'),
(4, 'C++'),
(5, 'HTML'),
(6, 'JQuery'),
(7, 'SQL'),
(8, 'CSS');

-- 
-- Вывод данных для таблицы migration
--
INSERT INTO migration VALUES
('m000000_000000_base', 1463836483),
('m130524_201442_init', 1463836488);

-- 
-- Вывод данных для таблицы stopword
--
INSERT INTO stopword VALUES
(2, 'youtube'),
(3, '<script'),
(5, 'fuck'),
(6, 'vk.com');

-- 
-- Вывод данных для таблицы user
--
INSERT INTO user VALUES
(1, 'admin', 'jSFHq7XGCmVfkWM8k5zT_lSt1ZAgdLSN', '$2y$13$t.c/QlrrorKwufEBuq9oGOHtILIb8D7YIHSMuCBTt0.omfwog.G3i', NULL, 'admin@netology.ru', 10, 1463941572, 1463941572),
(2, 'tester', '', '$2y$13$JJVN.K.1eHazkJqstAp0e.n5SuQF64HCLSMDUL.H67Ysc9fBCW/xC', NULL, 'sdf@w.t333', 10, 1464198495, 1464211800),
(7, 'tester2', '', '$2y$13$P.Q42x5K.J7p4mdOrh9tb.CN1Q06pvY0znTNAxtapzOjOGn9mHx.C', NULL, 'sdf@w.t2w', 0, 1464199464, 1464207109),
(8, 'tester4', '', '$2y$13$fKr5Eggj7wMJLfTu7UBjd.sXdvI6KvL8FBqaJlyfvS6tPfGGXcEZS', NULL, 'sdf@w.t232', 0, 1464199570, 1464211788),
(11, 'Ali Ba-Ba', '', '$2y$13$r5bF3lSi55rG6gvCxR/d8eSJuxtrs2H.FRbulAHe/JEf.qC00boxS', NULL, 'alibaba@mail.com', 10, 1464211707, 1464211707),
(12, 'Winnie Fu***ing Pooh', '', '$2y$13$FKyB7Q54F16bc7Jt90WFTujaj5Ti50BJKh/jQF/imG3fDfN7ZFChi', NULL, 'wpooh@mail.com', 10, 1464211766, 1464211766);

-- 
-- Вывод данных для таблицы question
--
INSERT INTO question VALUES
(3, 6, '2016-05-23 03:00:34', 'published', 0, 0, 'vasya', 'vasya@vasya.vasya', 'How to program JQuery?', 'Fluently.'),
(4, 3, '2016-05-23 17:56:25', 'published', 0, 0, 'Alex', 'alex@alex.com', 'What is PHP?', 'From the preface of the manual:\r\n\r\nPHP is an HTML-embedded scripting language. Much of its syntax is borrowed from C, Java and Perl with a couple of unique PHP-specific features thrown in. The goal of the language is to allow web developers to write dynamically generated pages quickly.\r\n'),
(5, 3, '2016-05-23 17:56:25', 'published', 0, 0, 'Dru', 'Dru@dell.com', 'Can I run several versions of PHP at the same time?', 'Yes. See the INSTALL file that is included in the PHP source distribution.'),
(6, 4, '2016-05-23 18:15:22', 'hidden', 0, 0, 'Fill', 'asher@mail.com', 'Is C++ a practical language?', 'Yes.\r\n\r\nC++ is a practical tool. It’s not perfect, but it’s useful.\r\nIn the world of industrial software, C++ is viewed as a solid, mature, mainstream tool. It has widespread industry support which makes it “good” from an overall business perspective.'),
(7, 4, '2016-05-23 18:15:22', 'published', 0, 0, 'Garry Veber', 'gveber@drt.org', 'Is C++ a perfect language?', 'Nope.\r\n\r\nC++ wasn’t designed to demonstrate what a perfect language looks like. It was designed to be a practical tool for solving real world problems. It has a few warts, as do all practical programming tools, but the only place where it’s appropriate to keep fiddling with something until it’s perfect is in a pure academic setting. That wasn’t C++’s goal.'),
(8, 4, '2016-05-23 18:17:40', 'published', 0, 0, 'Roseline', 'r.vott@sael.com', 'Why is C++ so big?', 'C++ is not a tiny language designed to be a minimal language for teaching, but neither are the languages people most often compare it to, such as C, Java, C#. They too are huge compared to say, Pascal as Dr. Wirth originally defined it – for good reasons. The programming world is far more complex today than it was 30 years ago, and modern programming languages reflect that.\r\n\r\nC++ isn’t as big as some people imagine. By word count, the size of the language specifications (excluding standard libraries) for C++, C#, and Java are currently within a few percentage points of each other. This reflects that they are general-purpose mainstream languages that have grown similar features – auto/var type deduction, range for loops, lambda functions, various levels of support for generic programming, and so on. It also reflects what design theorists call “essential complexity in the problem domain” – the complexity in the real world and that a serious language has to expose, everything from fundamental OS differences to calling C++ libraries.\r\n\r\nIn some cases C++ directly supports (i.e., in the language) what some other languages support through libraries, so the language part will be relatively larger. On the other hand, if you want to write a “typical modern application”, you need to consider operating system interfaces, GUI, databases, web interfaces, etc. the sum of language features, libraries, and programming conventions and standards that you must become familiar with dwarf the programming language. Here, C++’s size can be an advantage as far as it better supports good libraries.\r\n\r\nFinally, the days where a novice programmer can know all of a language are gone, at least for the languages in widespread industrial use. Few people know “all of C” or “all of Java” either and none of those are novices. It follows that nobody should have to apologize for the fact that novices do not know all of C++. What you must do - in any language – is to pick a subset, get working writing code, and gradually learn more of the language, its libraries, and its tools. For my suggestion on how beginners can approach C++, see Programming: Principles and Practice using C++.'),
(9, 4, '2016-05-23 18:17:40', 'hidden', 0, 0, 'Travis Gosh', 'tr.gosh@sart.go', 'What’s the best way to improve my C++ programs?', 'That depends on how you use it. Most people underestimate abstract classes and templates. Conversely, most people seriously overuse casts and macros. Have a look at one of Stroustrup’s papers or books for ideas. One way of thinking of abstract classes and templates is as interfaces that allow a more clean and logical presentation of services than is easy to provide through functions or single-rooted class hierarchies. See other sections of this FAQ for some specific examples and ideas.'),
(10, 5, '2016-05-23 18:29:30', 'published', 0, 1, 'Gregg', 'gregg@list.ru', 'When can I use HTML5?', 'People can already use parts of the platform that interoperate, but W3C''s mission is global interoperable, to ensure that the web is available to all. Not all elements are fully implemented yet and some of them provide builtin fallback mechanisms, such as <video> or <input>. One can use HTML5 today, knowing the existing limitations and ensuring proper fallbacks.'),
(11, 5, '2016-05-23 18:29:30', 'published', 0, 0, 'Kimmy', 'kim.string@fork.com', 'When will HTML5 be finished? What is the status of HTML5?', 'HTML5 is a work in progress. We expect to be feature complete by December 2012. W3C is developing a comprehensive test suite to achieve interoperability for the full specification by 2014, the target date for Recommendation. W3C''s primary goal is to ensure that the HTML5 standard is of the highest quality and allows the creation of interoperable implementations. The timeline in the charter is based on implementation expectations and development of a test suite. The timeline is designed to help the industry plan for adoption. Ongoing active participation by browser vendors, other software developers, and the community in implementation and testing will help ensure the successful and timely roll out of the standard.'),
(12, 5, '2016-05-23 19:00:06', 'draft', 0, 1, 'Fritz', 'fritz@uotlook.com', 'Will there be an HTML6?', NULL),
(13, 6, '2016-05-23 19:00:06', 'published', 0, 0, 'cris brown', 'cbrown45@dad.tor', 'How do I disable/enable a form element?', 'You can enable or disable a form element using the .prop() method:\r\n\r\n// Disable #x\r\n$( "#x" ).prop( "disabled", true );\r\n \r\n// Enable #x\r\n$( "#x" ).prop( "disabled", false );'),
(15, 3, '2016-05-23 23:02:01', 'draft', 0, 0, 'Benny Niemeijer', 'kefforeffalle-0913@yopmail.com', 'Same library with distinct version', NULL),
(16, 3, '2016-05-23 23:03:15', 'draft', 0, 0, 'BlueSam', 'Wheirlit@jourrapide.com', 'DataAnnotations CustomValidation not working', NULL),
(19, NULL, '2016-05-23 23:11:53', 'draft', 0, 1, 'Mathi901', 'jz1gniexi8vn7o5@7oe60n274.com', 'In URF How to insert information with custom many to many relation table', NULL),
(22, NULL, '2016-05-23 23:19:37', 'draft', 0, 1, 'A Rhoades', '7p9507oo@mbtjerpwxv.com', 'How to add a DataSource Connection for PostgreSQL Database to Visual Studio 2013? (In order to use Entity Framework)', NULL),
(24, NULL, '2016-05-23 23:23:00', 'draft', 0, 1, 'JVilla', 'e2tzixxxrr721q@apjpxsq.com', 'Convert string to type of another variable', NULL),
(25, NULL, '2016-05-23 23:24:12', 'draft', 0, 1, 'Brent Oliver', 'aur62gh9ldg9-w-@9mfsynni.com', 'Is it possible to force the use of “using” for disposable classes?', NULL),
(26, 3, '2016-05-23 23:59:26', 'draft', 0, 0, 'user4956321', 'l_63m6w8j@ucmk12k.com', 'DataAdapter.Fill performance anomaly', NULL),
(27, 3, '2016-05-23 23:59:56', 'draft', 0, 0, 'JDS', 'sdfsafgasfgasdfasdfa@asdf.er', 'Edit Home Page which is not part of betterCMS', NULL),
(28, 6, '2016-05-24 00:10:41', 'draft', 0, 0, 'TofuBug', 'sdf@sdf.rt', 'Which one is faster? Regex or EndsWith?', NULL),
(29, 5, '2016-05-24 00:10:54', 'draft', 0, 0, 'Leandro Tuttini', 'sdf@sdf.rt', 'Authenticating Website Members as Users in CKFinder v3', NULL),
(31, 4, '2016-05-26 01:06:42', 'draft', 1, 0, 'Vitya', 'qlpa0h6n@q1jcd0qm51n.com', 'I have youtube', NULL),
(33, 5, '2016-05-26 19:20:30', 'draft', 1, 0, 'Yest', '0onoong-.w7a-l@2cbakmtdlf.com', 'https://vk.com/laboca', NULL);

-- 
-- Вывод данных для таблицы question_stopword
--
INSERT INTO question_stopword VALUES
(31, 2),
(33, 6);

-- 
-- Восстановить предыдущий режим SQL (SQL mode)
-- 
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

-- 
-- Включение внешних ключей
-- 
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;