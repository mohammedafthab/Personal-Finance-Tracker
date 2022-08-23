-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2022 at 04:03 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pfms`
--

-- --------------------------------------------------------

--
-- Table structure for table `credits`
--

CREATE TABLE `credits` (
  `userid` varchar(20) NOT NULL,
  `description` varchar(20) NOT NULL,
  `credit_amount` int(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `credits`
--

INSERT INTO `credits` (`userid`, `description`, `credit_amount`, `date`, `time`) VALUES
('Aftab', 'salary', 2000, '2022-07-01', '07:22:00'),
('abhi', 'a', 1999, '2022-07-28', '16:49:00');

-- --------------------------------------------------------

--
-- Table structure for table `debits`
--

CREATE TABLE `debits` (
  `userid` varchar(20) NOT NULL,
  `reason` varchar(20) NOT NULL,
  `debit_amount` int(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `debits`
--

INSERT INTO `debits` (`userid`, `reason`, `debit_amount`, `date`, `time`) VALUES
('Aftab', 'snacks', 500, '2022-07-04', '08:24:00'),
('abhi', 'XYZ', 199, '2022-07-24', '22:14:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `password`, `date`) VALUES
('abhi', '1234', '2022-07-16 11:43:41'),
('Aftab', '1234', '2022-07-16 07:21:51'),
('Tasleem', '1234', '2022-07-22 22:50:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `credits`
--
ALTER TABLE `credits`
  ADD KEY `userid_fk` (`userid`);

--
-- Indexes for table `debits`
--
ALTER TABLE `debits`
  ADD KEY `user_id_fk` (`userid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `userid` (`userid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `credits`
--
ALTER TABLE `credits`
  ADD CONSTRAINT `userid_fk` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `debits`
--
ALTER TABLE `debits`
  ADD CONSTRAINT `user_id_fk` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
