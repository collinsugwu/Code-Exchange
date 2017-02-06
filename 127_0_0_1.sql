-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2017 at 06:23 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codexchange`
--
CREATE DATABASE IF NOT EXISTS `codexchange` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `codexchange`;

-- --------------------------------------------------------

--
-- Table structure for table `teach`
--

CREATE TABLE `teach` (
  `id` int(11) NOT NULL,
  `fullname` varchar(60) NOT NULL,
  `topic` varchar(300) NOT NULL,
  `category` varchar(40) NOT NULL,
  `venue` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `gender` varchar(40) NOT NULL,
  `applicants` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `posted_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach`
--

INSERT INTO `teach` (`id`, `fullname`, `topic`, `category`, `venue`, `date`, `time`, `gender`, `applicants`, `description`, `posted_by`) VALUES
(54, 'UGWU ANTHONY', 'THE RISE OF LARAVEL', 'bootstrap', 'SABO YABA', '2017-12-31', '13:59:00', 'Female', 6, 'LARAVEL HAS GROWN TO BECOME THE ', 'anthonyu73@yahoo.com'),
(55, 'DELE AJAYI', 'PHP FOR DOMMIES', 'php', 'NO 10 ALARA STREET SABO YABA', '2017-11-01', '13:59:00', 'Female', 2, 'to hrlp young programers understant programing', 'delsam94@yahoo.com'),
(59, 'wizubizu', 'the reason for growth', 'html', 'rytiuo', '2017-12-31', '12:59:00', 'Female', 123456, 'fyglhi;hj', 'anthonyu73@yahoo.com'),
(60, 'UGWU COLLINS', 'THE GROWTH OF CSS3', 'css', 'NATIONAL LIBERY', '2017-01-03', '13:01:00', 'Female', 11, 'the aim of css', 'jonejude@gmail.com'),
(61, 'Switch Switch', 'Programming', 'php', 'yaba', '2017-12-12', '09:00:00', 'All GENDER', 20, 'Full Description here', 'jonejude@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `teach_apply`
--

CREATE TABLE `teach_apply` (
  `id` int(11) NOT NULL,
  `teach_id` int(11) NOT NULL,
  `user_email` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach_apply`
--

INSERT INTO `teach_apply` (`id`, `teach_id`, `user_email`) VALUES
(88, 57, 'ugwucollins64@gmail.com'),
(89, 57, 'ugwucollins64@gmail.com'),
(96, 57, 'usmae@gmail.com'),
(97, 57, 'usmae@gmail.com'),
(98, 57, 'wizibizu@gmail.com'),
(99, 57, 'wizibizu@gmail.com'),
(100, 54, 'ugwucollins64@gmail.com'),
(101, 55, 'ugwucollins64@gmail.com'),
(102, 55, 'wizibizu@gmail.com'),
(103, 56, 'wizibizu@gmail.com'),
(104, 55, 'anthonyu73@yahoo.com'),
(105, 54, 'anthonyu73@yahoo.com'),
(106, 54, 'anthonyu73@yahoo.com'),
(107, 54, 'anthonyu73@yahoo.com'),
(108, 54, 'anthonyu73@yahoo.com'),
(109, 55, 'anthonyu73@yahoo.com'),
(110, 54, 'anthonyu73@yahoo.com'),
(111, 55, 'anthonyu73@yahoo.com'),
(112, 55, 'anthonyu73@yahoo.com'),
(113, 55, 'jonejude@gmail.com'),
(114, 54, 'jonejude@gmail.com'),
(115, 55, 'anthonyu73@yahoo.com'),
(116, 59, 'anthonyu73@yahoo.com'),
(117, 59, 'anthonyu73@yahoo.com'),
(118, 55, 'anthonyu73@yahoo.com'),
(119, 59, 'anthonyu73@yahoo.com'),
(120, 59, 'anthonyu73@yahoo.com'),
(121, 55, 'anthonyu73@yahoo.com'),
(122, 54, 'anthonyu73@yahoo.com'),
(123, 54, 'anthonyu73@yahoo.com'),
(124, 59, 'anthonyu73@yahoo.com'),
(125, 55, 'anthonyu73@yahoo.com'),
(126, 59, 'anthonyu73@yahoo.com'),
(127, 59, 'jonejude@gmail.com'),
(128, 55, 'jonejude@gmail.com'),
(129, 60, 'jonejude@gmail.com'),
(130, 60, 'jonejude@gmail.com'),
(131, 59, 'jonejude@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`id`, `firstname`, `email`, `phone`, `password`) VALUES
(45, 'collins', 'ude@unn.edu', 2147483647, 'asdfgh'),
(47, 'dele', 'usmae@gmail.com', 908888823, '12345678'),
(49, 'tonyguesswho', 'anthonyu73@yahoo.com', 904545444, 'guesswho'),
(50, 'jone', 'jonejude@gmail.com', 2147483647, 'jonejude');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teach`
--
ALTER TABLE `teach`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teach_apply`
--
ALTER TABLE `teach_apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teach`
--
ALTER TABLE `teach`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `teach_apply`
--
ALTER TABLE `teach_apply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;
--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
