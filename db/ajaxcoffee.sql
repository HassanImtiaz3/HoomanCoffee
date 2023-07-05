-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2023 at 01:44 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ajaxcoffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `americanodata`
--

CREATE TABLE `americanodata` (
  `tableNumber` varchar(255) DEFAULT NULL,
  `itemName` varchar(255) DEFAULT NULL,
  `itemPrice` varchar(255) DEFAULT NULL,
  `itemQty` varchar(255) DEFAULT NULL,
  `itemTotal` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coffeedata`
--

CREATE TABLE `coffeedata` (
  `tableNumber` int(11) NOT NULL,
  `itemName` text NOT NULL,
  `itemPrice` int(11) NOT NULL,
  `itemQty` int(11) NOT NULL,
  `itemTotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `coffeedata`
--

INSERT INTO `coffeedata` (`tableNumber`, `itemName`, `itemPrice`, `itemQty`, `itemTotal`) VALUES
(1, 'Coffee', 350, 2, 700),
(1, 'Coffee', 350, 2, 700);

-- --------------------------------------------------------

--
-- Table structure for table `espressodata`
--

CREATE TABLE `espressodata` (
  `tableNumber` varchar(255) DEFAULT NULL,
  `itemName` varchar(255) DEFAULT NULL,
  `itemPrice` varchar(255) DEFAULT NULL,
  `itemQty` varchar(255) DEFAULT NULL,
  `itemTotal` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `moccadata`
--

CREATE TABLE `moccadata` (
  `tableNumber` varchar(255) DEFAULT NULL,
  `itemName` varchar(255) DEFAULT NULL,
  `itemPrice` varchar(255) DEFAULT NULL,
  `itemQty` varchar(255) DEFAULT NULL,
  `itemTotal` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `organicdata`
--

CREATE TABLE `organicdata` (
  `tableNumber` varchar(255) DEFAULT NULL,
  `itemName` varchar(255) DEFAULT NULL,
  `itemPrice` varchar(255) DEFAULT NULL,
  `itemQty` varchar(255) DEFAULT NULL,
  `itemTotal` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teadata`
--

CREATE TABLE `teadata` (
  `tableNumber` varchar(255) DEFAULT NULL,
  `itemName` varchar(255) DEFAULT NULL,
  `itemPrice` int(255) DEFAULT NULL,
  `itemQty` int(255) DEFAULT NULL,
  `itemTotal` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
