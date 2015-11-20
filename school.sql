-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2015 at 01:04 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE IF NOT EXISTS `dashboard` (
  `dashboard_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`dashboard_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `dashboard`
--

INSERT INTO `dashboard` (`dashboard_id`) VALUES
(1);

-- --------------------------------------------------------

--
-- Table structure for table `dataface__failed_logins`
--

CREATE TABLE IF NOT EXISTS `dataface__failed_logins` (
  `attempt_id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `time_of_attempt` int(11) NOT NULL,
  PRIMARY KEY (`attempt_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dataface__modules`
--

CREATE TABLE IF NOT EXISTS `dataface__modules` (
  `module_name` varchar(255) NOT NULL,
  `module_version` int(11) DEFAULT NULL,
  PRIMARY KEY (`module_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dataface__mtimes`
--

CREATE TABLE IF NOT EXISTS `dataface__mtimes` (
  `name` varchar(255) NOT NULL,
  `mtime` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dataface__mtimes`
--

INSERT INTO `dataface__mtimes` (`name`, `mtime`) VALUES
('dashboard', 1447678898),
('dataface__failed_logins', 1447664728),
('dataface__modules', 1447054834),
('dataface__mtimes', 1447054890),
('dataface__preferences', 1447684658),
('dataface__record_mtimes', 1447684658),
('dataface__version', 1447054834),
('homework', 1447054834),
('notifications', 1447054835),
('payments', 1447054835),
('sessions', 1447074754),
('users', 1447068726);

-- --------------------------------------------------------

--
-- Table structure for table `dataface__preferences`
--

CREATE TABLE IF NOT EXISTS `dataface__preferences` (
  `pref_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(64) NOT NULL,
  `table` varchar(128) NOT NULL,
  `record_id` varchar(255) NOT NULL,
  `key` varchar(128) NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`pref_id`),
  KEY `username` (`username`),
  KEY `table` (`table`),
  KEY `record_id` (`record_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dataface__record_mtimes`
--

CREATE TABLE IF NOT EXISTS `dataface__record_mtimes` (
  `recordhash` varchar(32) NOT NULL,
  `recordid` varchar(255) NOT NULL,
  `mtime` int(11) NOT NULL,
  PRIMARY KEY (`recordhash`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dataface__version`
--

CREATE TABLE IF NOT EXISTS `dataface__version` (
  `version` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dataface__version`
--

INSERT INTO `dataface__version` (`version`) VALUES
(0);

-- --------------------------------------------------------

--
-- Table structure for table `homework`
--

CREATE TABLE IF NOT EXISTS `homework` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `activation` text NOT NULL,
  `installation` text NOT NULL,
  `password` varchar(200) NOT NULL,
  `subject` text NOT NULL,
  `studentclass` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `teacher` text NOT NULL,
  `assignedDate` varchar(50) NOT NULL,
  `dueDate` varchar(50) NOT NULL,
  `wfield1` text NOT NULL,
  `wfield2` text NOT NULL,
  `wfield3` text NOT NULL,
  `wfield4` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homework`
--

INSERT INTO `homework` (`id`, `username`, `activation`, `installation`, `password`, `subject`, `studentclass`, `description`, `teacher`, `assignedDate`, `dueDate`, `wfield1`, `wfield2`, `wfield3`, `wfield4`) VALUES
(1, 'simba', 'dhjdsjhdsjdsj', 'sdhjsdjhgsdj', '1234sims', 'shona', '4B', 'ita bvunzo dziri papeji 140', 'Mr Matambanadzo', '25 Gumiguru 2015', '26 Gumiguru 2015', '', '', '', ''),
(2, 'taf', 'sismslala', 'jkjkdhjhd', '1234sims', 'English', '4B', 'Do this on page 22', 'Mr Matambanadzo', '27 October 2015', '29 October 2015', '', '', '', ''),
(3, 'innate', 'kdsnjkhkdsnkl', 'dscbvjsdvkj', '1234sims', 'Maths', '4B', 'Questions 1-10 on page 45', 'Mr Matambanadzo', '27 October 2015', '28 October 2015', '', '', '', ''),
(4, 'cresterp', 'kjhdskjhsjscbkj', 'nbvhjdcghdbskj', '1234sims', 'Content', '4B', 'Question 1-15 on pages 14, 15', 'Mr Matambanadzo', '28 October 2015', '29 October 2015', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `activation` text NOT NULL,
  `installation` text NOT NULL,
  `password` varchar(200) NOT NULL,
  `results` varchar(200) NOT NULL,
  `wfield1` text NOT NULL,
  `wfield2` text NOT NULL,
  `wfield3` text NOT NULL,
  `wfield4` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQUE` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `username`, `activation`, `installation`, `password`, `results`, `wfield1`, `wfield2`, `wfield3`, `wfield4`) VALUES
(1, 'simba', 'jksdhlkjhdasjsd', 'dskbjsdgbksdhvds', '1234sims', 'Wagona', '', '', '', ''),
(2, 'taf', 'jhdssajbkjsks', 'jhhgadvskgsa', '1234sims', '7/10 Wagona', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `activation` text NOT NULL,
  `installation` text NOT NULL,
  `password` varchar(200) NOT NULL,
  `balance` varchar(9) NOT NULL,
  `wfield1` text NOT NULL,
  `wfield2` text NOT NULL,
  `wfield3` text NOT NULL,
  `wfield4` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQUE` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `username`, `activation`, `installation`, `password`, `balance`, `wfield1`, `wfield2`, `wfield3`, `wfield4`) VALUES
(1, 'simba', 'jdjkbhsldbljcbs', 'hjgkdgskhjgvdjgsdc', '1234sims', '$0.00', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `username` varchar(32) DEFAULT NULL,
  `token_id` varchar(64) NOT NULL,
  `expires` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`username`, `token_id`, `expires`) VALUES
('simba', '8ab07837-86e3-11e5-9de1-20689db45687', 1447078354),
('simba', 'b5bb021c-86e3-11e5-9de1-20689db45687', 1447078427),
('simba', 'bccdcf72-86e6-11e5-9de1-20689db45687', 1447079727),
('simba', '3433199a-86e7-11e5-9de1-20689db45687', 1447079927),
('simba', '84fcc329-86e8-11e5-9de1-20689db45687', 1447080492),
('simba', '9ead748e-8786-11e5-9314-20689db45687', 1447148395),
('simba', 'e365cb72-87ad-11e5-9314-20689db45687', 1447165262),
('simba', 'e55eed76-87ad-11e5-9314-20689db45687', 1447165265),
('simba', 'e683b106-87ad-11e5-9314-20689db45687', 1447165267),
('simba', 'e7ea73f6-87ad-11e5-9314-20689db45687', 1447165269),
('simba', 'e8c35a3e-87ad-11e5-9314-20689db45687', 1447165271),
('simba', 'ea0e66bf-87ad-11e5-9314-20689db45687', 1447165273),
('simba', 'eb1ff89c-87ad-11e5-9314-20689db45687', 1447165275),
('simba', 'ecf05b59-87ad-11e5-9314-20689db45687', 1447165278),
('simba', '73032dfd-8881-11e5-9676-20689db45687', 1447256126),
('simba', '4a8d304c-8885-11e5-9676-20689db45687', 1447257776),
('simba', 'b2ab1cf5-888b-11e5-a3a3-44a842ee6a95', 1447260506);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL DEFAULT '''''',
  `role` enum('regular','admin') NOT NULL DEFAULT 'regular',
  `password` varchar(32) NOT NULL DEFAULT '''''',
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `role`, `password`) VALUES
(1, 'simba', 'regular', '1234sims'),
(2, 'cresterp', 'admin', 'p');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
