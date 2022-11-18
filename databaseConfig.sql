-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 10, 2022 at 12:58 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ca3`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentsDetails`
--

CREATE TABLE `studentsDetails` (
  `id` int(11) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `regNo` varchar(8) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `courseStart` date NOT NULL,
  `courseEnd` date NOT NULL,
  `image` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentsDetails`
--

INSERT INTO `studentsDetails` (`id`, `firstName`, `lastName`, `regNo`, `email`, `mobile`, `dob`, `courseStart`, `courseEnd`, `image`, `address`) VALUES
(18, 'Nitesh', 'khatri', '12102335', 'niteshkhatri545@gmail.com', '9873848154', '2000-04-22', '2022-08-28', '2023-05-31', '', 'New delhi'),
(19, 'Deepak', 'Kumar', '12102231', 'deepakkumar6154@gmail.com', '8789700832', '1999-08-18', '2022-12-01', '2023-02-01', 'userDp.png', 'Patna'),
(20, 'Abhishek ', 'Ranjan', '12102243', 'abhishekranjan45@gmail.com', '7542332109', '1999-08-23', '2023-02-02', '2024-02-02', 'userDp.png', 'Kankarbagh, Patna');

-- --------------------------------------------------------

--
-- Table structure for table `userTable`
--

CREATE TABLE `userTable` (
  `id` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userTable`
--

INSERT INTO `userTable` (`id`, `username`, `password`, `created`) VALUES
(1, 'gokunik', 'test123', '2022-10-07 17:21:03'),
(2, 'venkata', 'test123', '2022-10-07 17:21:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentsDetails`
--
ALTER TABLE `studentsDetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userTable`
--
ALTER TABLE `userTable`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentsDetails`
--
ALTER TABLE `studentsDetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `userTable`
--
ALTER TABLE `userTable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
