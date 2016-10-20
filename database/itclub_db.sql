-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 20, 2016 at 12:47 PM
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
-- Table structure for table `aboutclub_table`
--

CREATE TABLE IF NOT EXISTS `aboutclub_table` (
  `heading` varchar(50) NOT NULL,
  `data1` varchar(100) NOT NULL,
  `data2` varchar(100) NOT NULL,
  `data3` varchar(100) NOT NULL,
  `data4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutclub_table`
--

INSERT INTO `aboutclub_table` (`heading`, `data1`, `data2`, `data3`, `data4`) VALUES
('IT CLUB HOW IT WORKS', ' To improve manpower skill through technical Training', ' Decisions on New technology and problems through Seminars', ' To Aware New technology and solves problems through Webinars', ''),
('IT CLUB FOR WHOM', 'Information Technology Students.', 'Information Technology Professional and Practitioner', 'Information Technology Companies', 'Information Technology Companies');

-- --------------------------------------------------------

--
-- Table structure for table `activities_table`
--

CREATE TABLE IF NOT EXISTS `activities_table` (
  `heading` varchar(20) NOT NULL,
  `data1` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activities_table`
--

INSERT INTO `activities_table` (`heading`, `data1`) VALUES
('Training', 'Training helps your business run better. It is essential for knowledge transfer. Through this we can give improvements in confidence, capability and competence.'),
('Seminars', 'In our seminars we share personal experiences regarding it, which provide a great deal in your practical.'),
('Conferences', 'At the conferences you can discuss any thing regarding information technology and your business');

-- --------------------------------------------------------

--
-- Table structure for table `home_table`
--

CREATE TABLE IF NOT EXISTS `home_table` (
  `heading` varchar(30) NOT NULL,
  `data1` varchar(700) NOT NULL,
  `data2` varchar(50) NOT NULL,
  `data3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_table`
--

INSERT INTO `home_table` (`heading`, `data1`, `data2`, `data3`) VALUES
('WHO WE ARE', 'I.T Club India® seeks to Advance the IT Profession through Professional Development & Awareness, Support of IT Education, and Government Policies on IT that improve society as a whole. I.T. Club India® represents Professionals, Companies and Organizations involved in consulting and providing products and services pertaining to Information Technology sector. The primary goal of the I.T. Club India is to promote management practices that will ensure the confidentiality, integrity and availability of information resources.', '', ''),
('OUR AIMS & OBJECTIVES', 'Technology Awareness', ' Business Engagement and Emplementation', 'Cyber Law & Govt. Policy Awareness');

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
('jh', 'hj', '1-01-1996', 'male', 'true', 'true', 'true', 'true', 'hj@W', 'hjh'),
('ok', 'ok', '1-01-1996', 'male', 'c++', 'mysql', '', '', 'ok@q', 'siodofsd'),
('m,m', 'm,m,', '1-01-1996', '', 'c++', '', '', '', 'm@S', ',mm,'),
('m,m', 'm,m,', '1-01-1996', '', 'c++', '', '', '', 'm@S', ',mm,'),
('op', 'op', '1-01-1996', 'Array', '', 'true', '', 'true', 'w@q', 'sddsd'),
('nm', 'nm', '1-01-1996', 'Array', '', '', '', '', 'nmn@w', 'cvc'),
('navjot', '123', '1-01-1996', 'Array', '', '', '', '', 'navjot@g', 'fgfgfg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
