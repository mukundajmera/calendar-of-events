-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 20, 2014 at 11:12 AM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `calendar`
--
CREATE DATABASE `calendar` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `calendar`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `password` (`password`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('myadmin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `eventcalendar`
--

CREATE TABLE IF NOT EXISTS `eventcalendar` (
  `eventid` varchar(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `eventdate` date NOT NULL,
  `eventfor` char(10) NOT NULL,
  `eventtype` char(20) NOT NULL,
  `semester` char(4) NOT NULL,
  `dept` varchar(30) NOT NULL,
  PRIMARY KEY (`eventid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventcalendar`
--

INSERT INTO `eventcalendar` (`eventid`, `title`, `eventdate`, `eventfor`, `eventtype`, `semester`, `dept`) VALUES
('1o', 'Pixels Audition @ PiRcube', '2017-10-08', 'student', 'dynamic', 'Odd', 'All'),
('2', 'Ganesh Chaturthi', '2017-11-14', 'both', 'fixed', 'Odd', 'All'),
('3', 'New Year', '2017-01-01', 'both', 'national holidays', 'Even', 'All'),
('4', 'Gandhi Jyanti', '2017-10-02', 'both', 'national holidays', 'Odd', 'All'),
('5', 'treasure hunt', '2017-09-17', 'student', 'dynamic', 'Odd', 'B.C.A'),
('6', 'Farewel', '2017-09-19', 'faculty', 'dynamic', 'Odd', 'B.C.A,B.B.M,M.C.A'),
('7', 'EWD @ MRD', '2017-09-20', 'student', 'dynamic', 'Odd', 'M.B.A'),
('8', 'Swimming selection @ Cricket Ground', '2015-02-13', 'student', 'dynamic', 'Even', 'B.C.A,M.C.A');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `q1` varchar(5) NOT NULL,
  `q2` varchar(5) NOT NULL,
  `q3` varchar(5) NOT NULL,
  `q4` varchar(5) NOT NULL,
  `q5` varchar(5) NOT NULL,
  `q6` varchar(5) NOT NULL,
  `q7` varchar(5) NOT NULL,
  `dept` varchar(10) NOT NULL,
  `total` int(3) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`sno`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `dept`, `total`) VALUES
(63, 'No', 'Yes', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'B.C.A', 5),
(62, 'No', 'Yes', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'B.C.A', 5),
(61, 'Yes', 'No', 'No', 'No', 'No', 'Yes', 'No', 'B.C.A', 2),
(60, 'Yes', 'Yes', 'Yes', 'No', 'Yes', 'No', 'Yes', 'B.C.A', 5),
(59, 'yes', 'no', 'yes', 'no', 'yes', 'no', 'yes', 'M.B.A', 4),
(58, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'B.C.A', 7);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `usn` varchar(12) NOT NULL,
  `department` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `usn` (`usn`),
  UNIQUE KEY `usn_2` (`usn`),
  UNIQUE KEY `usn_3` (`usn`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`firstname`, `lastname`, `usn`, `department`, `username`, `password`, `type`) VALUES
('Harish', 'Das', '78tbca7890', 'M.B.A', '12345harish', 'harish12', 'Teacher'),
('Rahul', 'Verma', '14MCA5001', 'M.C.A', 'rahul78', 'rahul12', 'Student'),
('Gaurav', 'Verma', '12BMSB6100', 'B.C.A', 'vermag', '123456', 'Student'),
('mukund', 'ajmera', '13bmsb6079', 'B.B.M', 'mukund1234566', '123456', 'Teacher'),
('Arjun', 'Tiwari', '12BMSB6017', 'B.C.A', 'arjun12', 'arjun78', 'Student'),
('Gaurav ', 'Verma', '12BMSB6036', 'B.C.A', 'gaurav123', '123456', 'Student'),
('Bharat', 'g', '12bmsb6013', 'B.B.M', 'bhrat23', '12345', 'Student'),
('santosh', 'Katti', '12BMSB6015', 'B.C.A', 'santosh', '123', 'Teacher'),
('Sidhanta', 'Sahoo', '45MBAT5001', 'M.C.A', 'ipsraj786', '123456', 'Teacher'),
('indrajeet', 'Kashyap', '13BMSB6038', 'B.C.A', 'indrajeet', '123456', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `suggestion`
--

CREATE TABLE IF NOT EXISTS `suggestion` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `suggestion` longtext NOT NULL,
  `dept` varchar(10) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `suggestion`
--
--

INSERT INTO `suggestion` (`sno`, `suggestion`, `dept`) VALUES
(19, ' \r\nwe want to book an event for MCA on 6th Oct', 'M.C.A'),
(18, 'i m mca', 'M.C.A');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
