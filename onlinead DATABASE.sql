-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2020 at 12:21 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinead`
--

-- --------------------------------------------------------

--
-- Table structure for table `electronics`
--

CREATE TABLE `electronics` (
  `type` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `adTitle` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `estaterent`
--

CREATE TABLE `estaterent` (
  `email` varchar(100) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `bhk` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `building` varchar(100) NOT NULL,
  `buildArea` int(100) NOT NULL,
  `adTitle` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `estatesell`
--

CREATE TABLE `estatesell` (
  `email` varchar(100) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `bhk` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `building` varchar(100) NOT NULL,
  `buildArea` int(100) NOT NULL,
  `adTitle` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstName`, `lastName`, `email`, `phone`, `password`) VALUES
('a', 'a', 'a@a.com', '77', 'a'),
('Vasu', 'Mittal', 'vmittal355@gmail.com', '7973164456', 'superman');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `email` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `carAge` int(100) NOT NULL,
  `fuel` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `seating` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `adTitle` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `electronics`
--
ALTER TABLE `electronics`
  ADD KEY `fk_em` (`email`);

--
-- Indexes for table `estaterent`
--
ALTER TABLE `estaterent`
  ADD KEY `email` (`email`);

--
-- Indexes for table `estatesell`
--
ALTER TABLE `estatesell`
  ADD KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD KEY `email` (`email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `electronics`
--
ALTER TABLE `electronics`
  ADD CONSTRAINT `fk_em` FOREIGN KEY (`email`) REFERENCES `users` (`email`);

--
-- Constraints for table `estaterent`
--
ALTER TABLE `estaterent`
  ADD CONSTRAINT `estaterent_ibfk_1` FOREIGN KEY (`email`) REFERENCES `users` (`email`);

--
-- Constraints for table `estatesell`
--
ALTER TABLE `estatesell`
  ADD CONSTRAINT `estatesell_ibfk_1` FOREIGN KEY (`email`) REFERENCES `users` (`email`);

--
-- Constraints for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD CONSTRAINT `vehicles_ibfk_1` FOREIGN KEY (`email`) REFERENCES `users` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
