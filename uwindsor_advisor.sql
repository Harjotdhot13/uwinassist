-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2015 at 07:45 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `uwindsor_advisor`
--

-- --------------------------------------------------------

--
-- Table structure for table `banking services`
--

CREATE TABLE IF NOT EXISTS `banking services` (
  `BS_Id` varchar(10) NOT NULL,
  `Bank Name` varchar(25) NOT NULL,
  `Bank Address` varchar(50) NOT NULL,
  `Bank_Phone` int(10) NOT NULL,
  `Bank Hours` varchar(50) NOT NULL,
  `Bank Website` varchar(25) NOT NULL,
  `Other Information` text NOT NULL,
  PRIMARY KEY (`BS_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banking services`
--

INSERT INTO `banking services` (`BS_Id`, `Bank Name`, `Bank Address`, `Bank_Phone`, `Bank Hours`, `Bank Website`, `Other Information`) VALUES
('BS01', 'ScotiaBank', 'Downtown', 2147483647, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `chat_room`
--

CREATE TABLE IF NOT EXISTS `chat_room` (
  `UserId` varchar(10) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Message` text NOT NULL,
  PRIMARY KEY (`UserId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medical_services`
--

CREATE TABLE IF NOT EXISTS `medical_services` (
  `Med_id` varchar(10) NOT NULL,
  `Med_Name` varchar(25) NOT NULL,
  `Med_Address` varchar(50) NOT NULL,
  `Med_Phone` int(10) NOT NULL,
  `Med_Hours` varchar(50) NOT NULL,
  `Med_Comments` varchar(100) NOT NULL,
  PRIMARY KEY (`Med_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `other_information`
--

CREATE TABLE IF NOT EXISTS `other_information` (
  `OI_Id` varchar(10) NOT NULL,
  `Name_of_service` varchar(25) NOT NULL,
  `Information` text NOT NULL,
  PRIMARY KEY (`OI_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `recreation services`
--

CREATE TABLE IF NOT EXISTS `recreation services` (
  `RS_Id` varchar(10) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Phone Number` int(10) NOT NULL,
  `Other Information` text NOT NULL,
  PRIMARY KEY (`RS_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shopping_services`
--

CREATE TABLE IF NOT EXISTS `shopping_services` (
  `SS+Id` varchar(10) NOT NULL,
  `Name of the Shopping Center` varchar(25) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Phone Number` int(10) NOT NULL,
  `Hours` varchar(50) NOT NULL,
  `Other Info` text NOT NULL,
  PRIMARY KEY (`SS+Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transportation_service`
--

CREATE TABLE IF NOT EXISTS `transportation_service` (
  `TS_Id` varchar(10) NOT NULL,
  `Service_name` varchar(25) NOT NULL,
  `Information` text NOT NULL,
  PRIMARY KEY (`TS_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `UserID` varchar(10) NOT NULL,
  `First Name` varchar(15) NOT NULL,
  `Last Name` varchar(15) NOT NULL,
  `Phone Number` int(10) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Email Id` int(25) NOT NULL,
  `Password` varchar(12) NOT NULL,
  `Confirm Password` varchar(12) NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
