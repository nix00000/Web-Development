-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2020 at 01:03 PM
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
-- Database: `picnic`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_code` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_code`, `course`) VALUES
('BIO1', 'Biology1'),
('CHEM1', 'Chemistry1'),
('FIN1', 'Finance1'),
('MARKT1', 'Marketing1'),
('MATH01', 'Math1'),
('MATH02', 'Math2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `status` varchar(255) DEFAULT 'Student',
  `picture` varchar(255) DEFAULT 'profiles\\usera.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `lname`, `email`, `password`, `dob`, `status`, `picture`) VALUES
(7, 'Test', 'Test', 'test@test.com', '$2y$10$hAK3xzcPiAgqn/wXfdELguyyFWU/e4jpnussxwwqZq7Am.Inu6Enu', '1997-04-10', 'Student', 'profiles/profile.jpg'),
(8, 'Macolini', 'MnogoFini', 'macola@komsija.com', '$2y$10$z9gjB5iG7FB7u1nA1pvyd.WW8z2Izz6foBN.OHonQYmsIL7q8dQs6', '2019-03-19', 'Student', 'profiles/macaprofil.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users_courses`
--

CREATE TABLE `users_courses` (
  `userid` int(255) NOT NULL,
  `courseid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_courses`
--

INSERT INTO `users_courses` (`userid`, `courseid`) VALUES
(7, 'FIN1'),
(7, 'MARKT1'),
(8, 'BIO1'),
(8, 'CHEM1'),
(8, 'FIN1'),
(8, 'MARKT1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users_courses`
--
ALTER TABLE `users_courses`
  ADD UNIQUE KEY `UC_Person` (`userid`,`courseid`),
  ADD KEY `courseid` (`courseid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_courses`
--
ALTER TABLE `users_courses`
  ADD CONSTRAINT `users_courses_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_courses_ibfk_2` FOREIGN KEY (`courseid`) REFERENCES `courses` (`course_code`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
