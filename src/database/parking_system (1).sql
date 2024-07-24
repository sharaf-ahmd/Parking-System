-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2024 at 08:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(5) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` int(15) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `fname`, `lname`, `email`, `contact`, `password`) VALUES
(1, 'sara', 'john', 'saraj@gmail.com', 777235123, 'sara123'),
(2, 'emily', 'johnson', 'emilyj@gmail.com', 777122343, 'admin123'),
(3, 'marcus', 'rodriguz', 'marcus@gmail.com', 777122123, 'admin123'),
(4, 'sophia', 'smith', 'sophia@gmail.com', 774623801, 'admin678'),
(5, 'lauren', 'patel', 'lauren@gmail.com', 765749032, 'admin790');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `in_id` int(5) NOT NULL,
  `uid` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `message` varchar(300) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`in_id`, `uid`, `name`, `address`, `phone`, `message`, `status`) VALUES
(1, 1, 'ahamed', 'no.15 gelioya,kandy.', 779563325, 'what are the premium services available?', 'pending'),
(3, 3, 'mark', 'no.15 colombo road, kandy', 779954862, 'can i make a permanent booking for every weekdays?', 'Replied');

-- --------------------------------------------------------

--
-- Table structure for table `park_att`
--

CREATE TABLE `park_att` (
  `pa_id` int(5) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `NIC` varchar(20) NOT NULL,
  `contact` int(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `park_att`
--

INSERT INTO `park_att` (`pa_id`, `fname`, `lname`, `NIC`, `contact`, `email`, `gender`, `password`) VALUES
(1, 'alexander ', 'thompson', '200453209123', 778896564, 'alex@gmail.com', 'male', 'pass123'),
(3, 'Emily', 'Smith', '987654321V', 2147483647, 'emily.smith@example.com', 'Female', 'securepass123'),
(5, 'Sophia', 'Brown', '654321987V', 2147483647, 'sophia.brown@example.com', 'Female', 'strongpass456');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pm_id` int(5) NOT NULL,
  `customer_name` varchar(20) NOT NULL,
  `amount` int(20) NOT NULL,
  `pay_method` varchar(50) NOT NULL,
  `r_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `rp_id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`rp_id`, `name`, `message`) VALUES
(3, 'mark', 'thanks for reply we will reach you shortly');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `r_id` int(5) NOT NULL,
  `uid` int(5) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `date` date DEFAULT NULL,
  `slot` int(5) DEFAULT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`r_id`, `uid`, `customer`, `date`, `slot`, `price`) VALUES
(8, 1, 'alexander ', '2024-05-26', 1, 600),
(10, 5, 'ava', '2024-05-15', 15, 600);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(5) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `NIC` varchar(20) NOT NULL,
  `contact` int(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `fname`, `lname`, `NIC`, `contact`, `email`, `gender`, `password`) VALUES
(1, 'alexander ', 'thompson', '200453209123', 778896564, 'alex@gmail.com', 'male', 'pass123'),
(2, 'Daniel', 'Taylor', '258741369V', 1239874560, 'daniel.taylor@example.com', 'Male', 'securepass789'),
(3, 'Olivia', 'Hernandez', '147258369V', 2147483647, 'olivia.hernandez@example.com', 'Female', 'pass123word'),
(4, 'William', 'Lopez', '753951852V', 2147483647, 'william.lopez@example.com', 'Male', 'strongpass789'),
(5, 'ava', 'Gonzalez', '159753258V', 2147483647, 'ava.gonzalez@example.com', 'Female', 'password789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`in_id`);

--
-- Indexes for table `park_att`
--
ALTER TABLE `park_att`
  ADD PRIMARY KEY (`pa_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pm_id`),
  ADD KEY `f_key` (`r_id`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`rp_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `in_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `park_att`
--
ALTER TABLE `park_att`
  MODIFY `pa_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pm_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reply`
--
ALTER TABLE `reply`
  MODIFY `rp_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `r_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `f_key` FOREIGN KEY (`r_id`) REFERENCES `reservations` (`r_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
