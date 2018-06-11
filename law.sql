-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2017 at 11:25 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `law`
--

-- --------------------------------------------------------

--
-- Table structure for table `case_posted`
--

CREATE TABLE `case_posted` (
  `ucaseid` int(100) NOT NULL,
  `uid` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `case_name` varchar(100) NOT NULL,
  `case_type` varchar(45) NOT NULL,
  `case_text` varchar(100) NOT NULL,
  `contactnumber` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `case_posted`
--

INSERT INTO `case_posted` (`ucaseid`, `uid`, `name`, `case_name`, `case_type`, `case_text`, `contactnumber`) VALUES
(0, 0, '', 's', 's', 's', 0),
(0, 0, '', 'w', 'w', 'w', 0),
(0, 0, '', 'w', 'w', 'w', 0),
(0, 0, '', 'w', 'w', 'w', 0),
(0, 0, '', 'a', 'a', 'a', 0),
(0, 0, '', 'a', 'njhyfut', 's', 7027091097),
(0, 0, '', 'q', 'q', 'q', 0),
(0, 0, '', 'z', 'z', 'z', 0),
(0, 0, '', 'x', 'x', 'x', 0),
(0, 0, '', 'c', 'c', 'c', 0),
(0, 0, '', 'b', 'b', 'b', 0),
(2, 3, 'Sushma', 'Muder case', 'murder', 'ajnhfdjhu', 1234567890),
(0, 0, 'q', 'w', 'qw', 'qw', 0),
(0, 0, '', '', '', '', 0),
(0, 0, '', '', '', '', 0),
(0, 0, 'Shristi', 'Sushma murder', 'murder case', 'killed', 7027091097),
(0, 0, 'sushma', '2', '2', 'w', 0),
(0, 0, 'e', 'e', 'e', 'e', 0),
(0, 0, 'e', 'e', 'e', 'e', 0),
(0, 0, 'e', 'e', 'e', 'e', 0),
(0, 0, 'e', 'e', 'e', 'e', 0),
(0, 0, 'e', 'e', 'e', 'e', 0),
(0, 0, 'e', 'e', 'e', 'e', 0),
(0, 0, 'e', 'e', 'e', 'e', 0),
(0, 0, 'e', 'e', 'e', 'e', 0),
(0, 0, 'e', 'e', 'e', 'e', 0);

-- --------------------------------------------------------

--
-- Table structure for table `citizen`
--

CREATE TABLE `citizen` (
  `uid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `contactno` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `citizen`
--

INSERT INTO `citizen` (`uid`, `name`, `location`, `occupation`, `contactno`) VALUES
(0, 'sushma', 'H. NO. 469 NEAR KIRSHI VIGYAN KENDER VPO SHIKOHPUR DISTT. GURGAON', 'btech', 7027091097),
(0, 'sushma', 'H. NO. 469 NEAR KIRSHI VIGYAN KENDER VPO SHIKOHPUR DISTT. GURGAON', 'b', 23434232);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `query_name` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `query_desc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`query_name`, `email`, `query_desc`) VALUES
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('Sushma', 'sushma2219@gmail.com', ''),
('Sushma', 'sushma2219@gmail.com', 'what are the advantages of this site.'),
('Shristi', 'shristi@gmail.com', 'How to search case '),
('shreya', 'sheya@gmail.com', 'Which lawyer is suitable for crime case.'),
('simran', 'simran@gmail.com', 'How to contact lawyer'),
('', '', ''),
('nikita', 'nikita@gmail.com', 'how to get the law details'),
('nikita', 'nikita@gmail.com', 'how to get the law details'),
('nikita', 'nikita@gmail.com', 'how to get the law details'),
('nikita', 'nikita@gmail.com', 'how to get the law details'),
('neelu', 'neelu@gmail.com', 'how to get the case dates'),
('neelu', 'neelu@gmail.com', 'how to get the case dates'),
('neelu', 'neelu@gmail.com', 'how to get the case dates'),
('Shristi', 'shristi@gmail.com', 'ewfef'),
('Shristi', 'shristi@gmail.com', 'hftyr');

-- --------------------------------------------------------

--
-- Table structure for table `laws`
--

CREATE TABLE `laws` (
  `law_id` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laws`
--

INSERT INTO `laws` (`law_id`, `Name`, `Description`) VALUES
(1, 'The sexual harassment of women at workplace Prevention,Prohibition, and Redressal Act 2013', 'http://wcd.nic.in/sites/default/files/Sexual-Harassment-at-Workplace-Act.pdf'),
(2, 'The Sexual Harassment of Women at Workplace, (Prevention,Prohibition, and Redressal Act 2013, Rules', 'http://wcd.nic.in/sites/default/files/Sexual-Harassment-at-Workplace-Rules.pdf'),
(3, 'Handbook on Sexual Harassment of Women at Workplace', 'http://wcd.nic.in/sites/default/files/Handbook%20on%20Sexual%20Harassment%20of%20Women%20at%20Workplace.pdf'),
(4, 'National Commission for Women Act', 'http://wcd.nic.in/sites/default/files/ncwact.pdf'),
(5, 'Indecent Representation of Women', 'http://wcd.nic.in/act/indecent-representation-women'),
(6, 'Dowry Prohibition Rules', 'http://wcd.nic.in/act/dowry-prohibition-rules'),
(7, 'The Commission of Sati Prevention Act and rules', 'http://wcd.nic.in/act/commission-sati-prevention-act-and-rules'),
(8, 'Dowry Prohibition Act, 1961', 'http://wcd.nic.in/act/dowry-prohibition-act-1961'),
(9, 'Protection of Women from Domestic Violence Act, 2005', 'http://wcd.nic.in/sites/default/files/wdvact.pdf'),
(10, 'The Protection of Women from Domestic Violence Act, 2005 Rules', 'http://wcd.nic.in/sites/default/files/domesticviolenceact05.pdf'),
(11, 'Training Module for Two Day Workshop on Sexual Harassment of Women at Workplace (Prevention, Prohibition And Redressal) Act, 2013', 'http://wcd.nic.in/sites/default/files/ISTM_Training%20Module%20To%20be%20uploaded.pdf'),
(12, 'Recommended Panel of Institutes or Organizations under sexual harassment of Women at workplace Prevention,Prohibition, and Redressal Act 2013', 'http://wcd.nic.in/sites/default/files/Reccomended%20panel%20of%20inst.pdf'),
(13, 'The Immortal Traffic (Prevention) Act, 1956', 'http://ncw.nic.in/acts/THEIMMORALTRAFFIC(PREVENTION)ACT1956.pdf'),
(14, 'The Criminal Law (Amendment) Act,2013 ', 'http://ncw.nic.in/acts/The_Criminal_Law_Amendment_Act_2013.pdf'),
(15, 'TheMarriedWomenPropertyAct1874-3of1874', 'http://ncw.nic.in/acts/TheMarriedWomenPropertyAct1874-3of1874.pdf'),
(16, 'The_Family_Courts_Act_1984', 'http://ncw.nic.in/acts/The_Family_Courts_Act_1984.pdf'),
(17, 'ThePre-NatalDiagnosticTechniques(RegulationandPreventionofmisuse)Act1994', 'http://ncw.nic.in/acts/ThePre-NatalDiagnosticTechniques(RegulationandPreventionofmisuse)Act1994.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `lawyer`
--

CREATE TABLE `lawyer` (
  `uid` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `type` varchar(10) NOT NULL,
  `location` varchar(11) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `Experience` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lawyer`
--

INSERT INTO `lawyer` (`uid`, `name`, `type`, `location`, `qualification`, `Experience`) VALUES
(0, 'sushma', 'babs', 'gf', 'jg', 'js');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message` varchar(200) NOT NULL,
  `lawyer_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` bigint(20) UNSIGNED NOT NULL,
  `cname` varchar(45) NOT NULL,
  `username` varchar(100) NOT NULL DEFAULT 'write your full name',
  `password` varchar(100) NOT NULL,
  `u_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `cname`, `username`, `password`, `u_type`) VALUES
(2, 'Sushma', 'sushma2219@gmail.com', 'q', 'Citizen'),
(5, '', 'sushma.bmu.14cse@bml.edu.in', 'exs', 'Citizen'),
(7, 'Shristi', 'shristi@gmail.com', '123', 'Lawyer'),
(22, '', 's@df', 'de', 'Citizen'),
(23, 'sushma', 'sushma2219@gmail.com', '12345', 'Citizen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laws`
--
ALTER TABLE `laws`
  ADD PRIMARY KEY (`law_id`);

--
-- Indexes for table `lawyer`
--
ALTER TABLE `lawyer`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laws`
--
ALTER TABLE `laws`
  MODIFY `law_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
