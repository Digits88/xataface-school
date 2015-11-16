-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2015 at 09:46 AM
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
