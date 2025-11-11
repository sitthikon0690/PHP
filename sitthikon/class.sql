-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 30, 2015 at 03:10 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
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
  `ID` int(10) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `pass_word` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passwd`
--

INSERT INTO `passwd` (`ID`, `user_name`, `pass_word`, `name`, `surname`) VALUES
(1, 'admin1', 'admin1', 'somjai', 'nadee'),
(2, 'admin2', 'admin2', 'napon', 'sukon');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `StudentID` int(10) NOT NULL,
  `SFirstname` varchar(20) NOT NULL,
  `SLastname` varchar(20) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Major` varchar(30) NOT NULL,
  `TeacherID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`StudentID`, `SFirstname`, `SLastname`, `Address`, `Major`, `TeacherID`) VALUES
(4011902, 'Jaruwan', 'Lamai', 'Phuket', 'Ebiz', 102),
(4011903, 'Somchai', 'Sabaidee', 'Trang', 'CS', 103),
(4011904, 'Pongpan', 'Kijawat', 'Songkla', 'IT', 102),
(4011905, 'Kasem', 'KongKaew', 'Pang-Nga', 'IT', 101),
(4011901, 'Kittima', 'Jaisu', 'Krabi', 'SE', 101);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `TeacherID` int(10) NOT NULL,
  `TFirstname` varchar(20) NOT NULL,
  `TLastname` varchar(20) NOT NULL,
  `RoomNo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`TeacherID`, `TFirstname`, `TLastname`, `RoomNo`) VALUES
(103, 'Somsak', 'Sae-sue', 'R314'),
(101, 'Kasama', 'Sarathee', 'R424'),
(102, 'Jarunee', 'Leelawat', 'R208');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
