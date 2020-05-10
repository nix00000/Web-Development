-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2020 at 08:20 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `roomType` varchar(50) DEFAULT NULL,
  `noRooms` int(10) DEFAULT NULL,
  `noGuests` int(11) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `email`, `roomType`, `noRooms`, `noGuests`, `checkin`, `checkout`) VALUES
(1, 'm@a', 'sea', 1, 2, '2020-03-17', '2020-03-19'),
(3, 'm@a', 'Sea View', 1, 2, '2020-03-14', '2020-03-18'),
(4, 'm@a', 'Garden View', 1, 2, '2020-03-19', '2020-03-26'),
(5, 'm@a', 'Sea View', 1, 3, '2020-03-20', '2020-03-26'),
(6, 'm@a', 'Sea View', 1, 2, '2020-03-13', '2020-03-20'),
(7, 'm@a', 'Sea View', 2, 7, '2020-03-20', '2020-03-20'),
(8, 'm@a', 'Sea View', 1, 2, '2020-03-19', '2020-03-20'),
(9, 'm@a', 'Sea View', 1, 2, '2020-03-19', '2020-03-20'),
(10, 'm@a', 'Sea View', 1, 5, '2020-03-20', '2020-03-28'),
(11, 'm@a', 'Street View', 1, 1, '2020-03-21', '2020-03-26'),
(12, 'm@a', 'Sea View', 1, 1, '2020-04-01', '2020-04-04'),
(13, 'a@a', 'Sea View', 1, 1, '2020-03-17', '2020-03-19'),
(14, 'a@a', 'Street View', 1, 2, '2020-03-17', '2020-03-18'),
(15, 'a@a', 'Sea View', 1, 2, '2020-03-19', '2020-03-26'),
(16, 'a@a', 'Garden View', 2, 2, '2020-03-13', '2020-03-27'),
(17, 'anagrubor10@gmail.com', 'Sea View', 4, 8, '2021-01-07', '2021-04-30');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(15) NOT NULL,
  `room_type` varchar(20) DEFAULT NULL,
  `noBeds` int(10) DEFAULT NULL,
  `price` int(10) DEFAULT NULL,
  `totalRooms` int(10) DEFAULT NULL,
  `booked` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room_type`, `noBeds`, `price`, `totalRooms`, `booked`) VALUES
(1, 'Garden View', 3, 50, 95, 0),
(2, 'Street View', 4, 30, 119, 0),
(3, 'Sea View', 2, 80, 43, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(15) NOT NULL,
  `firstName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `password`) VALUES
(6, 'Nikola', 'Grubor', 'm@a', 'loop'),
(7, 'pike', 'loopic', 'a@a', 'pool'),
(8, 'ANA', 'Grubor', 'anagrubor10@gmail.com', 'moco'),
(9, 'qw', 'qw', 'q@a', '\\\' OR 1=1 UNION SELECT NULL,TABLE_NAME FROM INFORMATION_SCHEMA.TABLES#'),
(10, 'Macolini', 'komsija', 'macola@komsija.com', 'macola');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `password` (`password`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
