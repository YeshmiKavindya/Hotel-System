-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2025 at 11:16 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `imageID` int(11) NOT NULL,
  `imagename` varchar(20) DEFAULT NULL,
  `file_path` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`imageID`, `imagename`, `file_path`, `description`) VALUES
(1, 'Image1', '../images/4.jpg', 'pool'),
(2, 'Image2', '../images/9.jpg', 'room'),
(3, 'Image3', '../images/11.jpg', 'room'),
(4, 'Image4', '../images/27.jpg', 'lobby'),
(5, 'Image5', '../images/28.jpg', 'restaurant'),
(6, 'Image6', '../images/36.jpg', 'lobby'),
(7, 'Image7', '../images/39.jpg', 'room'),
(8, 'Image8', '../images/41.jpg', 'room'),
(9, 'Image9', '../images/44.jpg', 'lobby'),
(10, 'Image10', '../images/49.jpg', 'lobby'),
(11, 'Image11', '../images/52.jpg', 'room'),
(12, 'Image12', '../images/55.jpg', 'restaurant'),
(13, 'Image13', '../images/58.jpg', 'restaurant'),
(14, 'Image14', '../images/60.jpg', 'pool'),
(15, 'Image15', '../images/61.jpg', 'pool'),
(16, 'Image16', '../images/62.jpg', 'room'),
(17, 'Image17', '../images/63.jpg', 'room'),
(18, 'Image18', '../images/64.jpg', 'room'),
(19, 'Image19', '../images/65.jpg', 'room'),
(20, 'Image20', '../images/66.jpg', 'room'),
(21, 'Image21', '../images/67.jpg', 'room'),
(22, 'Image22', '../images/68.jpg', 'lobby'),
(23, 'Image23', '../images/70.jpg', 'room'),
(24, 'Image24', '../images/71.jpg', 'room'),
(25, 'Image25', '../images/72.jpg', 'room'),
(26, 'Image26', '../images/73.jpg', 'room'),
(27, 'Image27', '../images/74.jpg', 'food'),
(28, 'Image28', '../images/75.jpg', 'food'),
(29, 'Image29', '../images/76.jpg', 'food'),
(30, 'Image30', '../images/77.jpg', 'food'),
(31, 'Image31', '../images/78.jpg', 'food'),
(32, 'Image32', '../images/79.jpg', 'food'),
(33, 'Image33', '../images/80.jpg', 'food'),
(34, 'Image34', '../images/81.jpg', 'food'),
(35, 'Image35', '../images/82.jpg', 'food'),
(36, 'Image36', '../images/83.jpg', 'food'),
(37, 'Image37', '../images/84.jpg', 'food'),
(38, 'Image38', '../images/85.jpg', 'food'),
(39, 'Image39', '../images/86.jpg', 'food'),
(40, 'Image40', '../images/87.jpg', 'food'),
(41, 'Image41', '../images/88.jpg', 'food'),
(42, 'Image42', '../images/89.jpg', 'food'),
(43, 'Image43', '../images/69.jpg', 'room');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `RoomID` int(11) NOT NULL,
  `RoomType` varchar(50) NOT NULL,
  `PricePerNight` decimal(10,2) NOT NULL,
  `Capacity` int(11) NOT NULL,
  `Status` varchar(20) DEFAULT 'Available'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`RoomID`, `RoomType`, `PricePerNight`, `Capacity`, `Status`) VALUES
(1, 'Single', 100.00, 1, 'Available'),
(2, 'Double', 150.00, 2, 'Available'),
(3, 'Suite', 250.00, 4, 'Occupied'),
(4, 'Deluxe', 200.00, 2, 'Available'),
(5, 'Presidential', 500.00, 5, 'Available'),
(6, 'Single', 120.00, 1, 'Occupied'),
(7, 'Double', 180.00, 2, 'Available'),
(8, 'Penthouse', 800.00, 6, 'Available'),
(9, 'Standard', 80.00, 1, 'Available'),
(10, 'Luxury', 300.00, 3, 'Occupied');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`imageID`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`RoomID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `imageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `RoomID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
