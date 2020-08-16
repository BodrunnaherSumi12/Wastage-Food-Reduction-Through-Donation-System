-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2020 at 10:19 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `username`, `password`, `created_at`) VALUES
(16303031, 'sumi', 'sumi@gmail.com', 'sumi@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '2020-07-25 20:47:27');

-- --------------------------------------------------------

--
-- Table structure for table `donner_registration`
--

CREATE TABLE `donner_registration` (
  `u_ID` int(200) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Adress` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Town` varchar(100) NOT NULL,
  `Created_at` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donner_registration`
--
ALTER TABLE `donner_registration`
  ADD PRIMARY KEY (`u_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16303032;

--
-- AUTO_INCREMENT for table `donner_registration`
--
ALTER TABLE `donner_registration`
  MODIFY `u_ID` int(200) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
