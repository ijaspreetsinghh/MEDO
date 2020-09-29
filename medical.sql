-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 22, 2019 at 10:10 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `medical`
--

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE IF NOT EXISTS `documents` (
  `doc_id` int(10) NOT NULL AUTO_INCREMENT,
  `patient_id` int(10) NOT NULL,
  `doctor_id` int(10) NOT NULL,
  `lab_id` int(10) NOT NULL,
  `desc` varchar(1000) NOT NULL,
  `doc_name` varchar(250) NOT NULL,
  `doc` varchar(250) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `patient_age` varchar(10) NOT NULL,
  `dis_desc` varchar(500) NOT NULL,
  `disease` varchar(250) NOT NULL,
  PRIMARY KEY (`doc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`doc_id`, `patient_id`, `doctor_id`, `lab_id`, `desc`, `doc_name`, `doc`, `date`, `patient_age`, `dis_desc`, `disease`) VALUES
(33, 1, 4, 32, '', 'wedfg', '', '2019-07-22 09:31:04', '56', '', ''),
(34, 5, 2, 32, 'changing', 'changed', '', '2019-07-22 09:41:00', '18', '', ''),
(35, 5, 2, 7, 'description', 'document', '0417-breakfast-egg-white-oatmeal-strawberries-peanut-butter.jpg', '2019-07-22 09:54:30', '12', '', ''),
(36, 5, 2, 7, 'weg', 'document', '', '2019-07-22 09:59:02', '12', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `table`
--

CREATE TABLE IF NOT EXISTS `table` (
  `user_id` int(20) NOT NULL AUTO_INCREMENT,
  `user_type` varchar(20) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `contact_no` bigint(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `table`
--

INSERT INTO `table` (`user_id`, `user_type`, `first_name`, `last_name`, `username`, `password`, `contact_no`, `email`, `gender`, `image`) VALUES
(1, 'Civilian', 'Inderjit Kaur', 'Malhi', 'iinderjit', 'bowbow', 9855509026, 'inderjit2481999@gmail.com', 'female', 'about.jpg'),
(2, 'Doctor', '23r4t', 'Singh4tayuery5t4r3qe', 'ewrge', 'ggg', 9999999999, 'jaspreet.codrity@gmail.com', 'male', 'gallery-2.jpg'),
(3, 'laboratorian', 'Harwinder', 'Kaur', 'harw', 'gg', 9877646088, 'abhivashisht@gmail.com', 'male', 'gallery-1.jpg'),
(4, 'Doctor', 'Jaspreet', 'Singh', 'ijaspreet', 'pta ni', 9876888062, 'jaspreet.codrity@gmail.com', 'male', 'bg_1.jpg'),
(5, 'Civilian', 'Jaspreet', 'Singh', 'jj', 'jj', 9876888062, 'jaspreet.codrity@gmail.com', 'male', 'mypic-m.jpg'),
(6, 'Laboratorian', 'ff', 'ff', 'ff', 'ff', 1234123434, 'beawwwsome@gmail.com', 'male', '0417-breakfast-egg-white-oatmeal-strawberries-peanut-butter.jpg'),
(7, 'Laboratorian', 'jaspreet', 'singh', 'h', 'h', 2222222222, 'beawwwsome@gmail.com', 'male', '64333899_857258224631995_3327380841465643008_n.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
