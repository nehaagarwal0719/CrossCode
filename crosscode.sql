-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2018 at 02:00 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crosscode`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `sap_id` varchar(11) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `uname` varchar(11) DEFAULT NULL,
  `pwd` varchar(15) DEFAULT NULL,
  `attempt` tinyint(1) DEFAULT '0',
  `score` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sap_id`, `name`, `uname`, `pwd`, `attempt`, `score`) VALUES
('', 'neha1', 'neha1', 'neha1', 1, 0),
('00', 'test', 'test', 'test', 1, 0),
('000000', 'test1', 'test1', 'test1', 1, 1),
('11710158', 'Akshit Bansal', 'aks158', 'cross158', 0, 0),
('17117094', 'Vagish dilawari ', 'vag094', 'cross094', 0, 0),
('500052925', 'Anonymous', 'anon', 'first', 2, 0),
('500052926', 'Amit', 'root', 'qwerty', 1, 1),
('500053159', 'Kartik Chawla', 'kar159', 'cross159', 0, 0),
('500053439', 'Vaishnavi Tiwari', 'vai439', 'cross439', 0, 0),
('500054060', 'Varun Manchanda', 'var060', 'cross060', 0, 0),
('500054707', 'abhishek menon', 'abh707', 'cross707', 0, 0),
('500060818', 'Vaibhav Kaushik', 'vai818', 'cross818', 0, 0),
('500061018', 'akshat singhal', 'aks018', 'cross018', 0, 0),
('500061071', 'Abhishek Sharma', 'abh071', 'cross071', 0, 0),
('500061140', 'Shambhavi Tewari', 'sha140', 'cross140', 0, 0),
('500061509', 'Nandini Mittal', 'nan509', 'cross509', 0, 0),
('500061675', 'neha', 'neha', 'neha', 1, 0),
('500062470', 'Rhythm Batra ', 'rhy470', 'cross470', 0, 0),
('500062898', 'Darshani Jain', 'dar898', 'cross898', 0, 0),
('500063028', 'Yogita', 'yog028', 'cross028', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`sap_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
