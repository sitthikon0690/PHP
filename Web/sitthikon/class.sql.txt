-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2016 at 04:55 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `class`
--

-- --------------------------------------------------------

--
-- Table structure for table `passwd`
--

CREATE TABLE IF NOT EXISTS `passwd` (
  `PassID` int(20) NOT NULL,
  `FName` char(20) NOT NULL,
  `Lname` char(20) NOT NULL,
  `Username` char(20) NOT NULL,
  `Passwd` char(10) NOT NULL,
  `Status` char(10) NOT NULL,
  PRIMARY KEY (`PassID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passwd`
--

INSERT INTO `passwd` (`PassID`, `FName`, `Lname`, `Username`, `Passwd`, `Status`) VALUES
(1, 'Sucha', 'Jaidee', 'Sucha', '222222', 'User'),
(2, 'Naree', 'Sangjun', 'Naree', '111111', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `StudentID` int(10) NOT NULL AUTO_INCREMENT,
  `SFirstname` varchar(20) NOT NULL,
  `SLastname` varchar(20) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Major` varchar(30) NOT NULL,
  `TeacherID` int(10) NOT NULL,
  PRIMARY KEY (`StudentID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4011908 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`StudentID`, `SFirstname`, `SLastname`, `Address`, `Major`, `TeacherID`) VALUES
(4011901, 'Kittima ', 'Jaisu', 'Krabi', 'SE', 101),
(4011902, 'Jaruwan', 'Lamai', 'Phuket', 'Ebiz', 102),
(4011903, 'Somchai', 'Sabaidee', 'Trang', 'CS', 103),
(4011904, 'Pongpan', 'Kijawat', 'Songkla', 'IT', 102),
(4011905, 'Kasem', 'KongKaew', 'Pang-Nga', 'IT', 101),
(4011906, 'kanjana', 'thongglin', 'phuket', 'IT', 101),
(4011907, '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `TeacherID` int(10) NOT NULL AUTO_INCREMENT,
  `TFirstname` varchar(20) NOT NULL,
  `TLastname` varchar(20) NOT NULL,
  `RoomNo` varchar(20) NOT NULL,
  PRIMARY KEY (`TeacherID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=105 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`TeacherID`, `TFirstname`, `TLastname`, `RoomNo`) VALUES
(101, 'Kasama', 'Sarathee', 'R424'),
(102, 'Jarunee', 'Leelawat', 'R208'),
(103, 'Somsak', 'Sae-sue', 'R314');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
