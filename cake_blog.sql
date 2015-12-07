-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2015 at 07:57 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cake_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `body` text,
  `user_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `publish` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `body`, `user_id`, `created`, `modified`, `publish`) VALUES
(28, 'xbfxxh', 'zdsgzrh', 9, '2015-12-07 03:49:42', '2015-12-07 03:49:42', 0),
(30, 'cc', 'ccc', 9, '2015-12-07 03:51:45', '2015-12-07 03:51:45', 1),
(31, 'This is New Article', 'What To write In this one', 9, '2015-12-07 04:33:06', '2015-12-07 04:33:06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL,
  `Comment` varchar(255) NOT NULL,
  `article_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `Comment`, `article_id`) VALUES
(29, 'dsgs', 28),
(30, 'sacas', 28),
(32, 'sfs', 31),
(33, 'dsd', 31),
(34, 'dvdvv', 31),
(35, 'dsdsfs', 3),
(36, 'dfs', 31),
(37, 'sfdh', 31),
(38, 'as', 31);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`) VALUES
(1, 'bagga', '$2y$10$3LhEPh.mw/jLboV86u8J6OhiADpPW1aKYLP/l45t3dHENW/PWGCiq', 'author', NULL, NULL),
(2, 'gmail', '$2y$10$cuxIk.7FxKUYFp92s6ozVOdFq0ck9L57o5O6dHs/kBiTc5un/MRVy', 'author', NULL, NULL),
(3, 'anj', '$2y$10$3pTqhKnI/EiSEvuKT5tExeX2qWISX0VKqsj4TLmdSkytvGewJ3nxy', 'admin', NULL, NULL),
(4, 'simi', '$2y$10$LiKL8YhDrYKR9QYrtBmIWeNQsgX2JpxaN76eKr/SLyWNd6dPiowEK', 'admin', NULL, NULL),
(5, 'simi1', '$2y$10$zbv9D6GGjabt7jckg4wtoeSX9JmU/3bSWPi0SmE5aQtEQYMnJzVSu', 'admin', NULL, NULL),
(6, 'author', '$2y$10$nftyP.D7VLg7BnxTPc4oM.E09YpRYSo3vs/P7L46yofBXqd25BFJu', 'author', NULL, NULL),
(7, 'authors', '$2y$10$3u8lyg3wavCvRziWVuLoreSA4AvI7/RlfNMGBQt4v2FH1bHR4/i7C', 'author', NULL, NULL),
(8, 'parth', '$2y$10$VNKJRMZd6rDLMrrtYFFTheZpRqT4m1doytQWSGxiXUmw2EGFkTgMO', 'author', NULL, NULL),
(9, 'man', '$2y$10$PuUFAc288ZqlNJUeGe8e1esDwXbmw90/Wfr54tcg94WjFjbFzR8Xe', 'author', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
