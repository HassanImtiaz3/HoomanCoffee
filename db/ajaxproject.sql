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
-- Database: `ajaxproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `usercredentials`
--

CREATE TABLE `usercredentials` (
  `userId` int(11) NOT NULL,
  `userFname` text NOT NULL,
  `userLname` text NOT NULL,
  `userEmail` text NOT NULL,
  `userPassword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `usercredentials`
--

INSERT INTO `usercredentials` (`userId`, `userFname`, `userLname`, `userEmail`, `userPassword`) VALUES
(1, 'Hassan', 'imtiaz', 'hassanimtiazip@gmail.com', 'Hassan@123'),
(2, 'Hassan', 'imtiaz', 'Hassan123@12', 'Hassan@123'),
(3, '', '', '', ''),
(4, '', '', '', ''),
(5, '', '', '', ''),
(6, 'Hassan', 'imtiaz', 'ekaanabbas642@gmail.com', '1122'),
(7, 'Hassan', 'imtiaz', 'ekaanabbas642@gmail.com', '1122'),
(9, 'Hassan', 'imtiaz', 'reservations@azpinklimos.com', '123'),
(10, 'Hassan', 'imtiaz', 'reservations@azpinklimos.com', '123'),
(11, '', '', '', ''),
(12, 'Hassan', 'imtiaz', 'ekaanabbas642@gmail.com', '1122'),
(13, 'Hassan', 'imtiaz', 'ekaanabbas642@gmail.com', '1122'),
(14, 'Hassan', 'imtiaz', 'hassanimtiazip@gmail.com', '1122');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usercredentials`
--
ALTER TABLE `usercredentials`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usercredentials`
--
ALTER TABLE `usercredentials`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
