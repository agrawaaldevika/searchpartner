-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2015 at 02:22 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `social_media`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_pass`) VALUES
(1, 'awpareshan@gmail.com', 'walikhan');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `com_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `comment_author` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`com_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`com_id`, `post_id`, `user_id`, `comment`, `comment_author`, `date`) VALUES
(1, 6, 1, 'Hi, how are you? ', 'wali', '2015-10-16 22:17:33'),
(3, 7, 2, 'hello this is one more testing comment. ', 'Abdul Wali', '2015-10-24 23:57:13'),
(4, 7, 2, 'once again a comment here!', 'Abdul Wali', '2015-10-24 23:57:28');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(255) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `msg_sub` text NOT NULL,
  `msg_topic` text NOT NULL,
  `reply` text NOT NULL,
  `status` text NOT NULL,
  `msg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `sender`, `receiver`, `msg_sub`, `msg_topic`, `reply`, `status`, `msg_date`) VALUES
(2, '1', '3', 'How are you?', 'I am Abdul Wali, what about yourself?', 'no_reply', 'unread', '2015-10-17 22:12:38'),
(3, '2', '1', 'Hello abdul, how are you?', 'Hello Abdul, I want to learn about HTML and css, please guide me. ', 'thanks Malala for message, I will help you. ', 'read', '2015-10-17 23:08:56'),
(4, '7', '1', 'hi, this is a testing', 'hello this is a testing message', 'no_reply', 'read', '2015-10-17 23:11:29');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `post_title` text NOT NULL,
  `post_content` text NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `user_id`, `topic_id`, `post_title`, `post_content`, `post_date`) VALUES
(1, 1, 3, 'I want to Learn HTML, Please teach me', 'Hey everyone, this is Abdul, and I want to learn something new today. Hey everyone, this is Abdul, and I want to learn something new today. Hey everyone, this is Abdul, and I want to learn something new today. Hey everyone, this is Abdul, and I want to learn something new today. Hey everyone, this is Abdul, and I want to learn something new today. ', '2015-10-16 20:18:18'),
(2, 1, 1, 'I want to learn PHP', 'I want to learn PHPI want to learn PHPI want to learn PHPI want to learn PHPI want to learn PHP', '2015-10-16 20:22:46'),
(3, 1, 1, 'I want to learn AJAX and PHP', 'I need some JavaScript TechniquesI need some JavaScript TechniquesI need some JavaScript TechniquesI need some JavaScript TechniquesI need some JavaScript TechniquesI need some JavaScript TechniquesI need some JavaScript TechniquesI need some JavaScript Techniques', '2015-10-16 20:23:30'),
(4, 1, 5, 'How to Make Money with Google Adsense', 'Please let me know about make mone online with adsense. Please let me know about make mone online with adsense.Please let me know about make mone online with adsense.Please let me know about make mone online with adsense.Please let me know about make mone online with adsense.', '2015-10-16 21:08:11'),
(7, 2, 5, 'I want to learn HTML and jquery', 'Hi, I want to learn HTML and CSS with something new today, please guide me. Hi, I want to learn HTML and CSS with something new today, please guide me. Hi, I want to learn HTML and CSS with something new today, please guide me. Hi, I want to learn HTML and CSS with something new today, please guide me. ', '2015-10-24 23:08:13');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE IF NOT EXISTS `topics` (
  `topic_id` int(11) NOT NULL AUTO_INCREMENT,
  `topic_name` varchar(255) NOT NULL,
  PRIMARY KEY (`topic_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`topic_id`, `topic_name`) VALUES
(1, 'PHP'),
(2, 'jquery'),
(3, 'HTML'),
(4, 'CSS'),
(6, 'JavaScript'),
(7, 'MySQLi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_country` text NOT NULL,
  `user_gender` text NOT NULL,
  `user_birthday` text NOT NULL,
  `user_image` text NOT NULL,
  `user_reg_date` text NOT NULL,
  `user_last_login` text NOT NULL,
  `status` text NOT NULL,
  `ver_code` int(100) NOT NULL,
  `posts` text NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_pass`, `user_email`, `user_country`, `user_gender`, `user_birthday`, `user_image`, `user_reg_date`, `user_last_login`, `status`, `ver_code`, `posts`) VALUES
(1, 'Abdul Wali', 'walikhan', 'awpareshan@gmail.com', 'United Arab Emirates', 'male', '3-4-2001', 'abdul wali funny (2).jpg', '3243', '23423', 'verified', 0, 'yes'),
(2, 'Malala', 'walikhan123', 'crickteri@yahoo.com', 'Pakistan', 'Male', '2015-10-22', 'malala-yousafzai.jpg', '2015-10-01 02:41:36', '', 'verified', 1221487526, 'yes'),
(4, 'Khan', 'khankhan', 'khan@yahoo.com', 'Pakistan', 'Male', '2015-10-23', 'default.jpg', '2015-10-01 02:46:03', '', 'unverified', 1262054514, 'no'),
(5, 'Janan', 'warkadang', 'warka@gmail.com', 'Afghanistan', 'Male', '2015-10-16', 'default.jpg', '2015-10-01 02:51:55', '', 'unverified', 1830189006, 'no'),
(6, 'dang', 'dangdang', 'dang@yahoo.com', 'Pakistan', 'Female', '2015-10-14', 'default.jpg', '2015-10-01 02:52:45', '', 'unverified', 1659221215, 'no');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
