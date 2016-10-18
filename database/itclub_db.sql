-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 18, 2016 at 05:46 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `itclub_db`
--
CREATE DATABASE IF NOT EXISTS `itclub_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `itclub_db`;

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

CREATE TABLE IF NOT EXISTS `users_table` (
  `name` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `DOB` varchar(30) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `C` varchar(10) NOT NULL,
  `C++` varchar(10) NOT NULL,
  `java` varchar(10) NOT NULL,
  `mysql` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_table`
--

INSERT INTO `users_table` (`name`, `password`, `DOB`, `sex`, `C`, `C++`, `java`, `mysql`, `email`, `address`) VALUES
('navjot', '123', '5-03-1999', 'male', '', 'c++', '', 'mysql', 'n@gm', 'cvxcxcv'),
('kl', 'kl', '1-01-1996', 'male', 'c', 'c++', 'java', 'mysql', 'kl@e', 'klklk'),
('ui', 'ui', '1-01-1996', 'female', 'false', 'c++', 'java', 'mysql', 'uiui@ghg', 'uiui'),
('nm', 'nm', '1-01-1996', 'female', 'true', '', '', '', 'nm@gk', 'nmnm'),
('vb', 'vb', '1-01-1996', 'male', '', '', '', '', 'jkjw@sr', 'fdfdf'),
('jh', 'hj', '1-01-1996', 'male', 'true', 'true', 'true', 'true', 'hj@W', 'hjh');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
