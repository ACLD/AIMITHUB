-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2016 at 07:23 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aimit`
--

-- --------------------------------------------------------

--
-- Table structure for table `leavenotes`
--

CREATE TABLE IF NOT EXISTS `leavenotes` (
  `leave_id` int(100) NOT NULL,
  `regnum` int(100) NOT NULL,
  `date` date NOT NULL,
  `sub` text NOT NULL,
  `description` text NOT NULL,
  `subject_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leavenotes`
--

INSERT INTO `leavenotes` (`leave_id`, `regnum`, `date`, `sub`, `description`, `subject_id`) VALUES
(0, 161747, '2016-10-19', 'application for leave note', 'went for a movie', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `regnum` int(20) NOT NULL,
  `name` text NOT NULL,
  `password` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`regnum`, `name`, `password`, `email`, `contact`) VALUES
(161747, 'Cecil mathew', '1234', 'cecilmathew@gmail.com', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `leavenotes`
--
ALTER TABLE `leavenotes`
  ADD PRIMARY KEY (`leave_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`regnum`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
