-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2025 at 07:26 AM
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
-- Table structure for table `contactdetails`
--

CREATE TABLE `contactdetails` (
  `ContactID` int(11) NOT NULL,
  `FullName` varchar(200) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Message` text NOT NULL,
  `ContactDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `CustomerID` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `PhoneNumber` varchar(20) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`CustomerID`, `FirstName`, `LastName`, `Email`, `PhoneNumber`, `Address`) VALUES
(1, 'John', 'Doe', 'john.doe@example.com', '123-456-7890', '123 Elm St, Springfield, IL'),
(2, 'Jane', 'Smith', 'jane.smith@example.com', '234-567-8901', '456 Oak Ave, Chicago, IL');

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `PaymentID` int(11) NOT NULL,
  `ReservationID` int(11) NOT NULL,
  `PaymentDate` datetime NOT NULL,
  `Amount` decimal(10,2) NOT NULL,
  `PaymentMethod` varchar(50) DEFAULT NULL,
  `PaymentStatus` varchar(20) DEFAULT 'Completed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`PaymentID`, `ReservationID`, `PaymentDate`, `Amount`, `PaymentMethod`, `PaymentStatus`) VALUES
(1, 1, '2025-01-10 18:00:00', 300.00, 'Credit Card', 'Completed'),
(2, 2, '2025-01-15 12:00:00', 750.00, 'Cash', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `restaurantreservations`
--

CREATE TABLE `restaurantreservations` (
  `ReservationID` int(11) NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `TableID` int(11) NOT NULL,
  `ReservationDate` datetime NOT NULL,
  `NumberOfGuests` int(11) NOT NULL,
  `SpecialRequests` text DEFAULT NULL,
  `Status` varchar(20) DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `restaurantreservations`
--

INSERT INTO `restaurantreservations` (`ReservationID`, `CustomerID`, `TableID`, `ReservationDate`, `NumberOfGuests`, `SpecialRequests`, `Status`) VALUES
(1, 1, 1, '2025-01-10 19:00:00', 2, 'Window seat, vegetarian meal', 'Confirmed'),
(2, 2, 2, '2025-01-12 20:00:00', 4, 'None', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `restauranttables`
--

CREATE TABLE `restauranttables` (
  `TableID` int(11) NOT NULL,
  `TableNumber` int(11) NOT NULL,
  `SeatingCapacity` int(11) NOT NULL,
  `Location` varchar(50) DEFAULT NULL,
  `Status` varchar(20) DEFAULT 'Available'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `restauranttables`
--

INSERT INTO `restauranttables` (`TableID`, `TableNumber`, `SeatingCapacity`, `Location`, `Status`) VALUES
(1, 1, 2, 'Window side', 'Available'),
(2, 2, 4, 'Near the bar', 'Reserved'),
(3, 3, 6, 'Private room', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `roomreservations`
--

CREATE TABLE `roomreservations` (
  `ReservationID` int(11) NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `RoomID` int(11) NOT NULL,
  `CheckInDate` date NOT NULL,
  `CheckOutDate` date NOT NULL,
  `TotalAmount` decimal(10,2) NOT NULL,
  `PaymentStatus` varchar(20) DEFAULT 'Unpaid'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roomreservations`
--

INSERT INTO `roomreservations` (`ReservationID`, `CustomerID`, `RoomID`, `CheckInDate`, `CheckOutDate`, `TotalAmount`, `PaymentStatus`) VALUES
(1, 1, 2, '2025-01-10', '2025-01-12', 300.00, 'Unpaid'),
(2, 2, 3, '2025-01-15', '2025-01-18', 750.00, 'Paid');

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
(3, 'Suite', 250.00, 4, 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `PasswordHash` varchar(255) NOT NULL,
  `Role` varchar(20) DEFAULT 'Guest'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Username`, `PasswordHash`, `Role`) VALUES
(1, 'admin', '$2y$10$7e8a2d839db3be9ad7882b41b4d43b282bda4e3a40219bc88d92fyYtV3jxsq', 'Admin'),
(2, 'manager', '$2y$10$56f75c7d5e3f6b52cb68c3fb29d02d422fc27997a43dbf98e76018YSFG7njs', 'Manager'),
(3, 'guest', '$2y$10$12456x8f74db98d902fdb3e5e8f378ed5678e2356bb8f8709a209bzHFGXcZYj', 'Guest');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactdetails`
--
ALTER TABLE `contactdetails`
  ADD PRIMARY KEY (`ContactID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`PaymentID`),
  ADD KEY `ReservationID` (`ReservationID`);

--
-- Indexes for table `restaurantreservations`
--
ALTER TABLE `restaurantreservations`
  ADD PRIMARY KEY (`ReservationID`),
  ADD KEY `CustomerID` (`CustomerID`),
  ADD KEY `TableID` (`TableID`);

--
-- Indexes for table `restauranttables`
--
ALTER TABLE `restauranttables`
  ADD PRIMARY KEY (`TableID`);

--
-- Indexes for table `roomreservations`
--
ALTER TABLE `roomreservations`
  ADD PRIMARY KEY (`ReservationID`),
  ADD KEY `CustomerID` (`CustomerID`),
  ADD KEY `RoomID` (`RoomID`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`RoomID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactdetails`
--
ALTER TABLE `contactdetails`
  MODIFY `ContactID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `PaymentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `restaurantreservations`
--
ALTER TABLE `restaurantreservations`
  MODIFY `ReservationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `restauranttables`
--
ALTER TABLE `restauranttables`
  MODIFY `TableID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roomreservations`
--
ALTER TABLE `roomreservations`
  MODIFY `ReservationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `RoomID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`ReservationID`) REFERENCES `roomreservations` (`ReservationID`) ON DELETE CASCADE;

--
-- Constraints for table `restaurantreservations`
--
ALTER TABLE `restaurantreservations`
  ADD CONSTRAINT `restaurantreservations_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `customers` (`CustomerID`),
  ADD CONSTRAINT `restaurantreservations_ibfk_2` FOREIGN KEY (`TableID`) REFERENCES `restauranttables` (`TableID`);

--
-- Constraints for table `roomreservations`
--
ALTER TABLE `roomreservations`
  ADD CONSTRAINT `roomreservations_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `customers` (`CustomerID`),
  ADD CONSTRAINT `roomreservations_ibfk_2` FOREIGN KEY (`RoomID`) REFERENCES `rooms` (`RoomID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
