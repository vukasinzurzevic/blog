-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2016 at 07:05 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(3) NOT NULL AUTO_INCREMENT,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_content` text NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_author`, `post_date`, `post_content`) VALUES
(1, 'Naslov prvi', 'Vukasin', '2016-03-12', 'Pozdrav iz prvog teksta.                                                              '),
(2, 'Naslov drugi', 'Marko', '2016-03-12', 'Pozdrav iz drugog teksta.                                                              '),
(3, 'Naslov treci', 'Vukasin', '2016-03-12', 'Pozdrav iz treceg teksta.                                                              '),
(4, 'Naslov cetvrti', 'Marko', '2016-03-12', 'Pozdrav iz cetvrtog teksta.                                                              '),
(5, 'Naslov peti', 'Marko', '2016-03-12', 'Pozdrav iz petog teksta.                                                              '),
(6, 'Naslov sesti', 'Vukasin', '2016-03-12', 'Pozdrav iz sestog teksta.                                                      '),
(8, 'Naslov sedmi', 'Milos', '2016-03-12', 'Pozdrav iz sedmog teksta        '),
(9, 'Naslov osmi', 'vukasin', '2016-03-13', 'Pozdrav iz osmog teksta        '),
(10, 'Naslov osmi', 'vukasin', '2016-03-13', 'Pozdrav iz osmog teksta        '),
(11, 'Naslov deveti', 'marko', '2016-03-13', 'Pozdrav iz devetog teksta.        '),
(13, 'sadasd', 'asdasdas', '2016-03-13', '        asdasdasd');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_role`) VALUES
(1, 'milos', '123', 'Milos', 'Markovic', 'milos@gmail.com', 'subscriber'),
(2, 'vukasinnn', '234', 'Vukasin', 'Zurzevic', 'vukasin@gmail.com', 'admin'),
(4, 'pera', '777', 'Pera', 'Peric', 'peric@gmail.com', 'subscriber'),
(6, 'asdasdasd', 'asdasdasd', 'sadasd', 'asdasdas', 'asdasdas@gmail.com', 'subscriber');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
