-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2015 at 11:04 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oes`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`uid` int(5) NOT NULL,
  `did` int(5) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `pword` varchar(30) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uid`, `did`, `uname`, `pword`, `type`) VALUES
(1, 0, 'admin', 'admin', 'Admin'),
(7, 8, 'spfort', '12345', 'Hospital'),
(8, 9, 'qwerty', '12345', 'FireForce'),
(9, 10, 'spfort', '12345', 'FireForce'),
(10, 11, '12345', '12345', 'FireForce'),
(11, 12, 'kims', '12345', 'Hospital'),
(12, 13, 'p2petta', '12345', 'Police');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
`case_id` int(5) NOT NULL,
  `incidence` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `location` varchar(50) NOT NULL,
  `landmark` varchar(100) NOT NULL,
  `in_mob_num` bigint(10) NOT NULL,
  `cont_numb` bigint(10) NOT NULL,
  `cont_person` varchar(50) NOT NULL,
  `blood` varchar(10) NOT NULL,
  `dor` varchar(12) NOT NULL,
  `ambu` int(5) NOT NULL,
  `fireforce` int(5) NOT NULL,
  `hospital` int(5) NOT NULL,
  `police` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`case_id`, `incidence`, `description`, `location`, `landmark`, `in_mob_num`, `cont_numb`, `cont_person`, `blood`, `dor`, `ambu`, `fireforce`, `hospital`, `police`) VALUES
(1, 'accident', 'Critical', 'Sasthamangalam', 'near post office', 9809535385, 9809577688, 'Aneesh', 'B+', '25/2/2015', 1, 1, 1, 1),
(2, 'FIRE ACCIDENT', 'Critical', 'Ulloor', 'near post office', 8754219663, 7894561235, 'Arun', 'A+', '04/03/2015', 1, 11, 10, 55),
(3, 'Bike Acident', '2 Affected', 'Thycadu', 'Near Village office', 8754219663, 5869471223, 'Kiran', 'O-', '04/03/2015', 1, 0, 10, 1),
(4, 'Bike Acident', 'Critical sityation need emergency', 'Vanchiyur', 'near post office', 8754219663, 9809577688, 'Aneesh', 'O-', '06/03/2015', 56, 0, 45, 36),
(5, '', '', '0', '', 0, 0, '', '', '13/03/2015', 0, 0, 0, 0),
(6, '', '', '0', '', 0, 0, '', '', '13/03/2015', 0, 0, 0, 0),
(7, 'Bick Acident', 'Critical situation', 'Pettah', 'Near post office', 9876543218, 8754219663, 'Aneesh', 'A+', '15/03/2015', 12, 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`did` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` bigint(12) NOT NULL,
  `location` varchar(100) NOT NULL,
  `department` varchar(50) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`did`, `name`, `phone`, `location`, `department`, `status`) VALUES
(8, 'SP Fort', 2779966, '0', 'Hospital', 1),
(9, 'dsfdsf', 2345678, 'Attipra', 'FireForce', 1),
(10, 'SP Fort', 34234324, 'Cheruvaikal', 'FireForce', 1),
(11, 'Abishek', 1234567, 'Manacaud', 'FireForce', 1),
(12, 'Kims', 2456879, 'Pettah', 'Hospital', 1),
(13, 'P2 Peatta', 546895, 'Pettah', 'Police', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
 ADD PRIMARY KEY (`case_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`did`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `uid` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
MODIFY `case_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `did` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
