-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2018 at 07:51 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

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
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `empid` int(20) NOT NULL,
  `Date` date NOT NULL,
  `attendance_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`empid`, `Date`, `attendance_status`) VALUES
(10, '2018-01-08', 'present'),
(11, '2018-01-08', 'absent'),
(12, '2018-01-08', 'absent');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `phoneno` int(10) DEFAULT NULL,
  `email` text,
  `cdate` date DEFAULT NULL,
  `approval` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `phoneno`, `email`, `cdate`, `approval`) VALUES
(4, 'nadir ali', 12331231, 'asdad@adad', '2018-01-05', 'Allowed');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `empid` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `contact` int(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` text,
  `nationality` varchar(45) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `salary` double(8,2) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empid`, `title`, `fname`, `lname`, `contact`, `email`, `address`, `nationality`, `country`, `salary`, `password`) VALUES
(10, 'Day Shift', 'hadi', 'malik', 123, 'hadimalik@gmail.com', 'seecs,nust,islamabad', 'Non Pakistani ', 'Denmark', 2000.00, '1234'),
(11, 'day employee', 'F', 'L', 123, '', '', '', '', 1200.00, ''),
(12, 'Day Shift', 'faraz', 'ahmad faraz', 122112, 'fraz@nust.edu.pk', 'adadada', 'Pakistan', 'Pakistan', 12222.00, '1234');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `usname` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `usname`, `pass`) VALUES
(1, 'Admin', '1234'),
(3, 'inshal', '1234'),
(4, 'hamaad', '5678'),
(5, 'mlatif.bese16seecs', '1111'),
(6, 'inshala', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `MenuId` int(11) NOT NULL,
  `DishName` varchar(45) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`MenuId`, `DishName`, `Price`) VALUES
(4, 'Freid Egg', 50),
(5, 'Aalu Mutter', 50),
(6, 'Roast/Fish', 50),
(7, 'Kulcha+Channa', 50),
(8, 'Daal Maash', 50),
(9, 'Pulao/ Manchurian', 50),
(10, 'Ommelete', 50),
(11, 'Karrhi+Pakorra', 50),
(12, 'Karrhi+Rice', 50),
(13, 'chickenchannay+halwa', 50),
(14, 'Bread Butter/Ommelet', 50),
(15, 'Aalu Paalak', 50),
(16, 'Biriyani+cold drink', 50),
(17, 'aalu Bhujia', 50),
(18, 'Rice+Daal Masoor', 50),
(19, 'Chicken Karrahi', 50);

-- --------------------------------------------------------

--
-- Table structure for table `newsletterlog`
--

CREATE TABLE `newsletterlog` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(52) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `news` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletterlog`
--

INSERT INTO `newsletterlog` (`id`, `title`, `subject`, `news`) VALUES
(1, 'Title', 'ubj', 'afhajsfa'),
(2, 'das', 'asd', 'sad'),
(3, 'Special Handi', 'Offer', 'On Next 2 weekends all customers should be entertained free lunch with Gobhi. xD\r\n'),
(4, 'Special Handi', 'Offer', 'On Next 2 weekends all customers should be entertained free lunch with Gobhi. xD\r\n'),
(5, 'Offer', 'Buy 1 Get 1 Free', 'Buy a dish to have one free.'),
(6, 'Offer', 'Buy 1 Get 1 Free', 'Buy a dish to have one free.'),
(7, 'hasha', 'ajajs', 'adad');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `title` varchar(5) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `troom` varchar(30) DEFAULT NULL,
  `tbed` varchar(30) DEFAULT NULL,
  `nroom` int(11) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `ttot` double(8,2) DEFAULT NULL,
  `fintot` double(8,2) DEFAULT NULL,
  `mepr` double(8,2) DEFAULT NULL,
  `meal` varchar(30) DEFAULT NULL,
  `btot` double(8,2) DEFAULT NULL,
  `noofdays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `title`, `fname`, `lname`, `troom`, `tbed`, `nroom`, `cin`, `cout`, `ttot`, `fintot`, `mepr`, `meal`, `btot`, `noofdays`) VALUES
(2, 'Dr.', 'Saad', 'Akhtar', 'Deluxe Room', 'Double', 1, '2018-01-03', '2018-01-05', 440.00, 484.00, 35.20, 'Full Board', 8.80, 2),
(3, 'Prof.', 'Inshal', 'Saleem', 'Superior Room', 'Single', 1, '2018-01-03', '2018-01-10', 2240.00, 2352.00, 89.60, 'Full Board', 22.40, 7),
(4, 'Mr.', 'Muhammad Hamaad', 'Latif', 'Superior Room', 'Single', 1, '2018-01-09', '2018-01-12', 960.00, 998.40, 28.80, 'Half Board', 9.60, 3),
(5, 'Mr.', 'Muhammad Asaad', 'Iqbal', 'Guest House', 'Quad', 1, '2018-01-19', '2018-01-31', 2160.00, 2505.60, 259.20, 'Half Board', 86.40, 12),
(8, 'Mr.', 'saed', 'addd', 'Superior Room', 'Double', 1, '2018-01-04', '2018-01-05', 320.00, 345.60, 19.20, 'Half Board', 6.40, 1),
(9, 'Dr.', 'Mahad', 'bajwa', 'Superior Room', 'Single', 1, '2018-01-05', '2018-01-06', 320.00, 323.20, 0.00, 'Room only', 3.20, 1);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(15) DEFAULT NULL,
  `bedding` varchar(10) DEFAULT NULL,
  `place` varchar(10) DEFAULT NULL,
  `cusid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `type`, `bedding`, `place`, `cusid`) VALUES
(1, 'Superior Room', 'Single', 'Free', 0),
(2, 'Superior Room', 'Double', 'NotFree', 8),
(3, 'Superior Room', 'Triple', 'Free', NULL),
(4, 'Single Room', 'Quad', 'Free', NULL),
(6, 'Deluxe Room', 'Single', 'NotFree', 6),
(7, 'Deluxe Room', 'Double', 'NotFree', 2),
(8, 'Deluxe Room', 'Triple', 'Free', NULL),
(9, 'Deluxe Room', 'Quad', 'Free', NULL),
(10, 'Guest House', 'Single', 'Free', NULL),
(11, 'Guest House', 'Double', 'Free', NULL),
(12, 'Guest House', 'Quad', 'NotFree', 5),
(13, 'Single Room', 'Single', 'Free', NULL),
(14, 'Single Room', 'Double', 'Free', NULL),
(15, 'Single Room', 'Triple', 'Free', NULL),
(16, 'Guest House', 'Triple', 'Free', NULL),
(17, 'Superior Room', 'Single', 'Free', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

CREATE TABLE `roombook` (
  `id` int(10) UNSIGNED NOT NULL,
  `Title` varchar(5) DEFAULT NULL,
  `FName` text,
  `LName` text,
  `Email` varchar(50) DEFAULT NULL,
  `National` varchar(30) DEFAULT NULL,
  `Country` varchar(30) DEFAULT NULL,
  `Phone` text,
  `TRoom` varchar(20) DEFAULT NULL,
  `Bed` varchar(10) DEFAULT NULL,
  `NRoom` varchar(2) DEFAULT NULL,
  `Meal` varchar(15) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `stat` varchar(15) DEFAULT NULL,
  `nodays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roombook`
--

INSERT INTO `roombook` (`id`, `Title`, `FName`, `LName`, `Email`, `National`, `Country`, `Phone`, `TRoom`, `Bed`, `NRoom`, `Meal`, `cin`, `cout`, `stat`, `nodays`) VALUES
(13, 'Dr.', 'Hamaad', 'Latif', 'seecs@gmail.com', 'Pakistan', 'Pakistan', '121212', 'Superior Room', 'Single', '1', 'Room only', '2018-01-05', '2018-01-07', 'Not Conform', 2),
(14, 'Dr.', 'hadi', 'malik', 'asda@aads', 'Pakistan', 'Pakistan', '212312', 'Guest House', 'Single', '1', 'Breakfast', '2018-01-09', '2018-01-10', 'Not Conform', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD UNIQUE KEY `empid` (`empid`,`Date`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`MenuId`);

--
-- Indexes for table `newsletterlog`
--
ALTER TABLE `newsletterlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roombook`
--
ALTER TABLE `roombook`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `MenuId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `newsletterlog`
--
ALTER TABLE `newsletterlog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `roombook`
--
ALTER TABLE `roombook`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
