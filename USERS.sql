-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 05, 2021 at 12:44 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `USERS`
--

-- --------------------------------------------------------

--
-- Table structure for table `Details`
--

CREATE TABLE `Details` (
  `title` varchar(10) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `emailAddress` varchar(100) NOT NULL,
  `addressLine1` varchar(100) NOT NULL,
  `addressLine2` varchar(100) NOT NULL,
  `town` varchar(100) NOT NULL,
  `county` varchar(100) NOT NULL,
  `eircode` varchar(100) NOT NULL,
  `deliveryAddressLine1` varchar(100) NOT NULL,
  `deliveryAddressLine2` varchar(100) NOT NULL,
  `deliveryTown` varchar(100) NOT NULL,
  `deliveryCounty` varchar(100) NOT NULL,
  `deliveryEircode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Details`
--

INSERT INTO `Details` (`title`, `firstname`, `surname`, `mobile`, `emailAddress`, `addressLine1`, `addressLine2`, `town`, `county`, `eircode`, `deliveryAddressLine1`, `deliveryAddressLine2`, `deliveryTown`, `deliveryCounty`, `deliveryEircode`) VALUES
('Mr', 'Christopher', 'Boland', '07704953050', 'chrissbb90@gmail.com', '15', 'Ritches Road', 'London', 'Wicklow', 'A98 FV52', '15', 'Ritches Road', 'London', 'Wicklow', 'A98 FV52'),
('Mr', 'Christopher', 'Boland', '07704953050', 'chrissbb90@gmail.com', '15', 'Ritches Road', 'London', 'Wicklow', 'A98 FV52', '15', 'Ritches Road', 'London', 'Wicklow', 'A98 FV52');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
