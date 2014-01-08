-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 05, 2014 at 08:11 PM
-- Server version: 5.5.33
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `whynotv4`
--

-- --------------------------------------------------------

--
-- Table structure for table `Pins`
--

CREATE TABLE `Pins` (
  `User` varchar(255) NOT NULL,
  `Event` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `URL` varchar(255) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `UserHistory`
--

CREATE TABLE `UserHistory` (
  `User` varchar(255) NOT NULL,
  `Event` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `URL` varchar(255) NOT NULL,
  `Choice` int(3) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `User` varchar(255) NOT NULL,
  `Latitude` float NOT NULL,
  `Longitude` float NOT NULL,
  `Category` varchar(255) NOT NULL,
  `LookingIn` varchar(255) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `UserTags`
--

CREATE TABLE `UserTags` (
  `User` varchar(255) NOT NULL,
  `Tag` varchar(255) NOT NULL,
  `Weight` int(3) NOT NULL,
  PRIMARY KEY (`User`,`Tag`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
