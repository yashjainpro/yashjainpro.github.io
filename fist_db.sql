-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 08, 2016 at 03:19 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fist_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `friendreq`
--

CREATE TABLE IF NOT EXISTS `friendreq` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `toid` int(16) NOT NULL,
  `fromid` int(15) NOT NULL,
  `status` varchar(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `friendreq`
--

INSERT INTO `friendreq` (`id`, `toid`, `fromid`, `status`) VALUES
(11, 3, 2, 'pending'),
(12, 4, 2, 'pending'),
(13, 6, 2, 'pending'),
(14, 7, 2, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `rid` int(16) NOT NULL,
  `sid` int(16) NOT NULL,
  `message` varchar(132) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `rid`, `sid`, `message`) VALUES
(1, 3, 2, 'gdjadhjmmijidjj0jijdj-jsjjjshxuh'),
(2, 3, 2, 'hxdx8yqyqyyd hiud8y8yy8u9uu9u9u\r\n'),
(3, 3, 2, 'hxdx8yqyqyyd hiud8y8yy8u9uu9u9u\r\n'),
(4, 0, 2, 'gtryr7rtutr\r\n'),
(5, 3, 2, '3tt7ttdttd8y'),
(6, 3, 2, 'yudy8c870d79ydt8yd3y'),
(7, 3, 2, 'rtd8yyf9yyf9yfyyfyfyfyy'),
(8, 3, 2, 'ut2yyfyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy'),
(9, 3, 2, 'jri3yryfyhjvhjfui0371y938uc\r\n'),
(10, 3, 2, 'mejdmks'),
(11, 3, 2, 'ouu8cycch'),
(12, 3, 2, 'iytyryryr'),
(13, 3, 2, 'sdksksjdf\r\n'),
(14, 6, 2, 'deettitt'),
(15, 2, 6, 'eyry9ryyryy8qy8y'),
(16, 6, 2, 'xchccc'),
(17, 3, 2, 'xxxxxxxxxxxxxxcdxsxxcx'),
(18, 6, 2, 'gytr7ttr6rr\r\n\r\n'),
(19, 6, 2, 'pj9yt7tu7y7'),
(20, 6, 2, 'pj9yt7tu7y7');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `pid` int(32) NOT NULL,
  `post` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `pid`, `post`) VALUES
(1, 2, 'this is test'),
(2, 2, 'dhfdh lsd'),
(3, 3, 'ddyffiggugjg'),
(4, 3, 'gdgagdfhf\r\n'),
(5, 3, 'ftqatftsafgsbdf'),
(6, 2, 'iy7t7yy8u9ik0oi0\r\n'),
(7, 2, 'fDDFFDFFDFFXFTXS'),
(8, 2, 'r48yr28fgygdhvfc hvvvgvfvc\r\n'),
(9, 2, 'thid'),
(10, 2, 'fgg7gffgfgfgffftfttf6fte'),
(11, 2, 'vcxvxcv'),
(12, 2, 'cvcxvcx'),
(13, 2, 'cvxcvxcv'),
(14, 2, 'cvxcvxcvcv'),
(15, 2, 'cvbhfgh'),
(16, 2, 'fdgdfgerg'),
(17, 2, 'dcsdf'),
(18, 2, 'dfdsf'),
(19, 2, 'dfsdf'),
(20, 2, 'dfdsf'),
(21, 2, 'dfdsf'),
(22, 2, 'dfsdfdsf'),
(23, 2, 'dfdsfdsf'),
(24, 2, 'dsfdsfd'),
(25, 2, 'dsfdsf'),
(26, 2, 'hdufd\r\n'),
(27, 2, 'faf\r\n\r\n'),
(28, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(16) NOT NULL,
  `last_name` varchar(16) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `abt_u` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `date_of_birth` date NOT NULL,
  `email` varchar(32) NOT NULL,
  `mob_no` varchar(16) NOT NULL,
  `address` varchar(32) NOT NULL,
  `school_or_college` varchar(32) NOT NULL,
  `img` varchar(32) NOT NULL,
  `status` int(8) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `first_name`, `last_name`, `gender`, `abt_u`, `password`, `date_of_birth`, `email`, `mob_no`, `address`, `school_or_college`, `img`, `status`) VALUES
(2, 'yash', 'jain', 'male', 'loves to watch movies in free ti', '123123', '2016-07-01', 'yjain271196@gmail.com', '7891006986', 'gsudgqcubcbb', 'vubcubxubxbbubxbbx', '811banner_1.gif', 1),
(3, 'VANSHIKA', 'jain', 'female', 'loves to watch movies in free ti', '123456', '2016-07-28', 'vanhikajain311@gmail.com', '7891006987', 'gsudgqcubcbbbughbub', 'vubcubxubxbbubxbbx', '677banner_1.gif', 0),
(4, 'xyz', 'jain', 'male', 'loves to watch movies in free ti', '3241', '2007-07-27', 'xyz@gmail.com', '7891006987', 'gsudgqcubcbbbughbub', 'vubcubxubxbbubxbbx', '', 0),
(5, 'yash1', 'jain', 'male', 'dg7gdgg7sgg6g', '121121', '2016-07-28', 'yash1@gmail.com', '9928086406', 'gugdywdvvv', 'thapar', '', 0),
(6, 'shubham', 'jain', 'male', 'dg7gdgg7sgg6g', '123456', '2016-07-28', 'shubham@gmail.com', '9928086785', 'gugdywdvvv', 'du', '', 1),
(7, 'prateek', 'sharma', 'male', 'whdgf7t', '789', '1970-01-01', 'prateeksharma@gmail.com', '7894589458', 'huetf7d', 'ehgwte7dt7td', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
