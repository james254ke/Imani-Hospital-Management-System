-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2022 at 02:15 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmsbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `corousel`
--

CREATE TABLE `corousel` (
  `id` int(11) NOT NULL,
  `Images` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `corousel`
--

INSERT INTO `corousel` (`id`, `Images`) VALUES
(1, 'theater.jpg'),
(2, 'eye.jpg'),
(3, 'children.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `managedepartments`
--

CREATE TABLE `managedepartments` (
  `id` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `managedepartments`
--

INSERT INTO `managedepartments` (`id`, `Title`) VALUES
(3, 'Emergency'),
(4, 'Martenity'),
(6, 'X-Ray  & Radiology'),
(7, 'Paediatric '),
(8, 'Nutrition &  Health Awareness'),
(13, 'Wardy');

-- --------------------------------------------------------

--
-- Table structure for table `manageusercategory`
--

CREATE TABLE `manageusercategory` (
  `id` int(11) NOT NULL,
  `Title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manageusercategory`
--

INSERT INTO `manageusercategory` (`id`, `Title`) VALUES
(26, 'Reception Desk'),
(27, 'Doctor'),
(28, 'Laboratory'),
(29, 'ICT & Admin');

-- --------------------------------------------------------

--
-- Table structure for table `manageusers`
--

CREATE TABLE `manageusers` (
  `id` int(11) NOT NULL,
  `Title` text NOT NULL,
  `Name` text NOT NULL,
  `Id_Number` int(11) NOT NULL,
  `Phone_Number` int(11) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Department` varchar(1000) NOT NULL,
  `Role` varchar(30) NOT NULL,
  `Image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manageusers`
--

INSERT INTO `manageusers` (`id`, `Title`, `Name`, `Id_Number`, `Phone_Number`, `Email`, `Password`, `Department`, `Role`, `Image`) VALUES
(3, 'Dr', 'james njihia', 36694980, 797580498, 'admin@gmail.com', '1234', 'Dental', 'Doctor', 'IMG_20210216_110838.jpg'),
(8, 'Prof', 'james njihia', 88888888, 797580498, 'janet90@gmail.com', '', 'Dental', 'Laboratory', 'IMG_20201211_171531.jpg'),
(10, 'Mr', 'Alex', 3345555, 2147483647, 'Alex@gmail.com', '1234', 'Dental', 'Reception Desk', 'IMG_20200809_142443.jpg'),
(12, 'Mr', '', 77777, 2147483647, 'njihia1@gmail.cm', '1234', 'Dental', 'Reception Desk', 'IMG_20201204_101324.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `Id` int(11) NOT NULL,
  `Category` text NOT NULL,
  `Description` varchar(10000) NOT NULL,
  `Author` text NOT NULL,
  `Fileimage` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `Id` int(11) NOT NULL,
  `Title` text NOT NULL,
  `Description` text NOT NULL,
  `Image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`Id`, `Title`, `Description`, `Image`) VALUES
(12, 'Dental', 'We offer a wide variety of medical services', 'IMG_20200809_142443.jpg'),
(13, 'Dental', 'We offer a wide variety of medical services', 'IMG_20200809_142443.jpg'),
(15, 'Pediatric', 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', 'IMG_20201118_160013.jpg'),
(16, 'maternity', 'wee', 'IMG_20200927_152530.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `corousel`
--
ALTER TABLE `corousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managedepartments`
--
ALTER TABLE `managedepartments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manageusercategory`
--
ALTER TABLE `manageusercategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manageusers`
--
ALTER TABLE `manageusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `corousel`
--
ALTER TABLE `corousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `managedepartments`
--
ALTER TABLE `managedepartments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `manageusercategory`
--
ALTER TABLE `manageusercategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `manageusers`
--
ALTER TABLE `manageusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
