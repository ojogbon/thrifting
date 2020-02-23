-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 23, 2020 at 07:33 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thrift`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `date` timestamp NOT NULL,
  `status` varchar(11) NOT NULL,
  `deleted` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `date`, `status`, `deleted`) VALUES
(1, 'admin', 'admin', '2020-02-23 04:24:30', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

DROP TABLE IF EXISTS `contactus`;
CREATE TABLE IF NOT EXISTS `contactus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(222) NOT NULL,
  `lastName` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phoneNumber` varchar(211) NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL,
  `status` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `firstName`, `lastName`, `email`, `phoneNumber`, `message`, `date`, `status`) VALUES
(1, 'root', 'main', 'root@gmail.com', '09088776677', 'this is the truth oo', '2020-02-23 07:13:13', '0'),
(2, 'dope', 'slim', 'slim@gmail.com', '09088776655', 'this is just for you', '2020-02-23 07:14:34', '0');

-- --------------------------------------------------------

--
-- Table structure for table `thrifttransaction`
--

DROP TABLE IF EXISTS `thrifttransaction`;
CREATE TABLE IF NOT EXISTS `thrifttransaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `officer_in_charge` int(11) NOT NULL,
  `amount_paid` double NOT NULL,
  `evidence_of_payment` varchar(212) NOT NULL,
  `path` varchar(222) NOT NULL,
  `date` timestamp NOT NULL,
  `status` varchar(11) NOT NULL,
  `deleted` varchar(11) NOT NULL,
  `note` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thrifttransaction`
--

INSERT INTO `thrifttransaction` (`id`, `user_id`, `officer_in_charge`, `amount_paid`, `evidence_of_payment`, `path`, `date`, `status`, `deleted`, `note`) VALUES
(1, 1, 1, 3000, '1.PNG', '../models/forAllImage/1.PNG,', '2020-02-12 03:08:05', 'marked', '0', 'this is the first note'),
(2, 2, 1, 3000, '1.PNG', '../models/forAllImage/1.PNG', '2020-02-12 03:49:28', 'marked', '0', 'this is it naa'),
(3, 1, 1, 5000, '2.PNG', '../models/forAllImage/2.PNG', '2020-02-12 03:50:42', 'marked', '0', 'you need to check well'),
(4, 1, 1, 5000, '3.PNG', '../models/forAllImage/3.PNG', '2020-02-12 04:09:50', 'marked', '0', 'food is ready '),
(5, 1, 0, 2000, 'register.PNG', '../models/forAllImage/register.PNG', '2020-02-23 04:16:34', '0', '0', 'this is my thrift price');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(222) NOT NULL,
  `lastname` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `password` varchar(212) NOT NULL,
  `phonenumber` varchar(222) NOT NULL,
  `date` timestamp NOT NULL,
  `status` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `phonenumber`, `date`, `status`) VALUES
(1, 'good ', 'boy', 'dea@gmail.com', '11111', '09088778899', '2020-02-23 02:08:06', '0');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
