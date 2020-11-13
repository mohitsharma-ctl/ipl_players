-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 13, 2020 at 02:32 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipl`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(6) UNSIGNED NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ipl_players`
--

CREATE TABLE `ipl_players` (
  `id` int(6) UNSIGNED NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `team` varchar(50) NOT NULL,
  `roll` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `price` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ipl_players`
--

INSERT INTO `ipl_players` (`id`, `fullname`, `team`, `roll`, `nationality`, `price`) VALUES
(53, 'KL Rahul', 'kxip', 'bat', 'ind', 10),
(57, 'Ajankiya Rahane', 'rr', 'bat', 'ind', 212),
(58, 'Rahul Tewatia', 'rr', 'bat', 'ind', 321),
(59, 'Prithvi Shaw', 'dc', 'bat', 'ind', 111),
(61, 'Random Player', 'dc', 'bat', 'ind', 112),
(62, 'Rohit Sharma', 'mi', 'bat', 'ind', 111),
(63, 'test test', 'kkr', 'bat', 'ind', 11),
(64, 'test test', 'dc', 'bat', 'ind', 111),
(65, 'test test', 'rcb', 'bat', 'ind', 11),
(66, 'test test', 'srh', 'bat', 'ind', 11),
(67, 'john doe', 'srh', 'bat', 'ind', 110),
(68, 'John Ruskin', 'rcb', 'bat', 'ind', 110),
(70, 'Mohit Sharma', 'kkr', 'bat', 'ind', 110),
(72, 'Sourav Ganguly', 'kkr', 'bat', 'ind', 110),
(73, 'Mohit Sharma', 'kkr', 'bat', 'ind', 110),
(74, 'Mohit Sharma', 'kkr', 'bat', 'ind', 110),
(75, 'Mohit Sharma', 'kkr', 'bat', 'ind', 110),
(76, 'Mohit Sharma', 'kkr', 'bat', 'ind', 110),
(77, 'Mohit Sharma', 'kkr', 'bat', 'ind', 110),
(79, 'John Doe', 'csk', 'bat', 'ind', 102),
(80, 'Tommy Voja', 'csk', 'bat', 'out', 20),
(81, 'Kunal Pandya', 'mi', 'bat', 'ind', 111),
(82, 'Chris Gayle', 'kxip', 'bat', 'ind', 212);

-- --------------------------------------------------------

--
-- Table structure for table `MyGuests`
--

CREATE TABLE `MyGuests` (
  `id` int(6) UNSIGNED NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ipl_players`
--
ALTER TABLE `ipl_players`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `MyGuests`
--
ALTER TABLE `MyGuests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ipl_players`
--
ALTER TABLE `ipl_players`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `MyGuests`
--
ALTER TABLE `MyGuests`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
