-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2016 at 02:15 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg_admin`
--

CREATE TABLE IF NOT EXISTS `reg_admin` (
  `id` int(11) NOT NULL,
  `admin_username` varchar(33) NOT NULL,
  `admin_password` varchar(33) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_admin`
--

INSERT INTO `reg_admin` (`id`, `admin_username`, `admin_password`) VALUES
(1, 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL,
  `regno` varchar(22) NOT NULL,
  `name` varchar(22) NOT NULL,
  `lname` varchar(22) NOT NULL,
  `dob` date NOT NULL,
  `yoa` date NOT NULL,
  `branch` varchar(22) NOT NULL,
  `roll` varchar(11) NOT NULL,
  `mobno` varchar(11) NOT NULL,
  `email` varchar(22) NOT NULL,
  `addr` varchar(33) NOT NULL,
  `m10` varchar(11) NOT NULL,
  `m12` varchar(11) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `nationality` varchar(22) NOT NULL,
  `hobbies` varchar(22) NOT NULL,
  `image` varchar(1111) NOT NULL,
  `valid` varchar(11) NOT NULL,
  `password` varchar(22) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `regno`, `name`, `lname`, `dob`, `yoa`, `branch`, `roll`, `mobno`, `email`, `addr`, `m10`, `m12`, `gender`, `nationality`, `hobbies`, `image`, `valid`, `password`) VALUES
(1, '20130999', 'z', 'z', '1995-01-22', '2013-03-22', 'BT', '13/BT/9', '9877899878', 'z@gmail.com', '1z road wb', '85%', '92%', 'female', 'indian', 'Singing,,', 'images/14-03-16-1457969123.jpg', '1', 'z'),
(2, '20130998', 'y', 'y', '1995-02-22', '2013-05-25', 'IT', '13/IT/40', '9841345676', 'y@gmail.com', '1y road', '89%', '90%', 'female', 'indian', 'Dancing,,', 'images/14-03-16-1457973589.jpg', '1', 'y'),
(4, '20130600', 'ranganath', 'kundu', '1995-12-26', '2013-06-26', 'IT', '13/IT/46', '8900716988', 'ranganathku@gmail.com', '16/22 akbar road', '85%', '92%', 'male', 'indian', 'Singing,football,', 'images/15-03-16-1458029098.jpg', '1', 'r');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reg_admin`
--
ALTER TABLE `reg_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reg_admin`
--
ALTER TABLE `reg_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
