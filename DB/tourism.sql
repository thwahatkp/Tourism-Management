-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2022 at 11:40 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Id` int(10) NOT NULL,
  `Firstname` varchar(20) NOT NULL,
  `Lastname` varchar(20) NOT NULL,
  `Place` varchar(30) NOT NULL,
  `Mob` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Destination` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Id`, `Firstname`, `Lastname`, `Place`, `Mob`, `Email`, `Destination`) VALUES
(1, 'Ganesh', 'Naik', 'Honnavar', '2147483647', 'ganeshravinaik2001@gmail.com', 'Goa'),
(2, 'kiran', 'Naik', 'Honnavar', '845868956', 'kirannaik1@gmail.com', 'Mumbai'),
(7, 'Ganesh', 'Naik', 'Honnavar', '2147483647', 'ganeshravinaik2001@gmail.com', 'Mysore'),
(8, 'Hitesh', 'HT', 'Udupi', '458696561', 'hitesh45jk@gmail.com', 'Kerala'),
(9, 'Ganesh', 'Naik', 'Honnavar', '123456789', '2147483647ganeshravinaik2001@gmail.com', 'Kerala'),
(10, 'Ganesh', 'Naik', 'Honnavar', '2147483647', 'ganeshravinaik2001@gmail.com', 'India Gate'),
(11, 'Gajanan', 'Bhat', 'Kumta', '2147483647', 'gajabhat@gmail.com', 'Mysore'),
(13, 'thwaha ', 'kp', 'kannur', '9567238103', 'thwahatkp@gmail.com', 'thwaha');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Id` int(11) NOT NULL,
  `First-name` varchar(50) NOT NULL,
  `Last-name` varchar(50) NOT NULL,
  `Place` varchar(50) NOT NULL,
  `Mob` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Id`, `First-name`, `Last-name`, `Place`, `Mob`, `Email`, `Username`, `Password`) VALUES
(1, 'thwaha ', 'kp', 'kannur', '9567238103', 'thwahatkp@gmail.com', 'thwahatkp', '1');

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `Id` int(11) NOT NULL,
  `Src` varchar(100) NOT NULL,
  `Place-name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`Id`, `Src`, `Place-name`) VALUES
(4, 'amritsar1.jpg', 'Amritsar'),
(5, 'goa1.jpg', 'Goa'),
(6, 'hampi1.jpg', 'Hampi'),
(7, 'india_gate1.jpg', 'India Gate'),
(8, 'jogfalls1.jpg', 'Jogfalls'),
(9, 'kerala1.jpg', 'Kerala'),
(10, 'ladakh1.jpg', 'Ladakh'),
(11, 'manali1.jpg', 'Manali'),
(12, 'mysore1.jpg', 'Mysore'),
(13, 'rajasthan1.jpg', 'Rajasthan'),
(14, 'srinagar1.jpg', 'Srinagar'),
(15, 'tajmahal1.jpg', 'Tajmahal');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Feedback` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Id`, `Name`, `Email`, `Feedback`) VALUES
(2, 'thwaha', 'mhdthwahakp@gmail.com', 'ksgfhkdjlggfhfgmfgmghbbvvngbbmghnfgncfhcfnfnfgc'),
(3, '[value-2]', '[value-3]', '[value-4]'),
(4, '[value-2]', '[value-3]', '[value-4]'),
(5, '[value-2]', '[value-3]', '[value-4]'),
(6, '[value-2]', '[value-3]', '[value-4]'),
(7, '[value-2]', '[value-3]', '[value-4]'),
(8, '[value-2]', '[value-3]', '[value-4]'),
(9, '[value-2]', '[value-3]', '[value-4]');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `Id` int(11) NOT NULL,
  `Src` varchar(100) NOT NULL,
  `Place-name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`Id`, `Src`, `Place-name`) VALUES
(4, 'IMGamritsar3.jpg', 'Amritsar'),
(5, 'IMGamritsar4.jpg', 'Amritsar'),
(6, 'IMGgoa1.jpg', 'Goa'),
(7, 'IMGgoa2.jpg', 'Goa'),
(8, 'IMGgoa3.jpg', 'Goa'),
(9, 'IMGgoa4.jpg', 'Goa'),
(10, 'IMGgoa5.jpg', 'Goa'),
(11, 'IMGamritsar2.jpg', 'Amritsar'),
(12, 'IMGhampi1.jpg', 'Hampi'),
(13, 'IMGhampi2.jpg', 'Hampi'),
(14, 'IMGhampi3.jpg', 'Hampi'),
(15, 'IMGhampi4.jpg', 'Hampi'),
(16, 'IMGindia_gate1.jpg', 'India Gate'),
(17, 'IMGindia_gate2.jpg', 'India Gate'),
(18, 'IMGindia_gate3.jpg', 'India Gate'),
(19, 'IMGindia_gate4.jpg', 'India Gate'),
(20, 'IMGjogfalls1.jpg', 'Jogfalls'),
(21, 'IMGjogfalls2.jpg', 'Jogfalls'),
(22, 'IMGjogfalls3.jpg', 'Jogfalls'),
(23, 'IMGjogfalls4.jpg', 'Jogfalls'),
(24, 'IMGkerala1.jpg', 'Kerala'),
(25, 'IMGkerala2.jpg', 'Kerala'),
(26, 'IMGkerala3.jpg', 'Kerala'),
(27, 'IMGkerala4.jpg', 'Kerala'),
(28, 'IMGladakh1.jpg', 'Ladakh'),
(29, 'IMGladakh2.jpg', 'Ladakh'),
(30, 'IMGladakh3.jpg', 'Ladakh'),
(31, 'IMGladakh4.jpg', 'Ladakh'),
(32, 'IMGmanali1.jpg', 'Manali'),
(33, 'IMGmanali2.jpg', 'Manali'),
(34, 'IMGmanali3.jpg', 'Manali'),
(35, 'IMGmanali4.jpg', 'Manali'),
(36, 'IMGmysore1.jpg', 'Mysore'),
(37, 'IMGmysore2.jpg', 'Mysore'),
(38, 'IMGmysore3.jpg', 'Mysore'),
(39, 'IMGmysore4.jpg', 'Mysore'),
(40, 'IMGrajasthan1.jpg', 'Srinagar'),
(41, 'IMGrajasthan2.jpg', 'Srinagar'),
(42, 'IMGrajasthan3.jpg', 'Srinagar'),
(43, 'IMGrajasthan4.jpg', 'Srinagar'),
(44, 'IMGtajmahal1.jpg', 'Tajmahal'),
(45, 'IMGtajmahal2.jpg', 'Tajmahal'),
(46, 'IMGtajmahal3.jpg', 'Tajmahal'),
(47, 'IMGtajmahal4.jpg', 'Tajmahal');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `Id` int(10) NOT NULL,
  `Place-name` varchar(20) NOT NULL,
  `Place-city` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`Id`, `Place-name`, `Place-city`) VALUES
(2, 'Beach', 'Goa'),
(3, 'India Gate', 'Delhi'),
(4, 'Kerala Beach', 'Kerala'),
(5, 'Mysore Palace', 'Mysore'),
(6, 'Ladakh', 'Ladakh India'),
(16, 'thwaha', 'goa'),
(17, 'Tajmahal', 'hjkjhoj'),
(18, 'aesdxz', 'goa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
