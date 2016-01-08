-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2016 at 04:45 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `izyparty`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `ladies_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`) VALUES
(1, ''),
(2, 'ardhanu'),
(3, 'okie');

-- --------------------------------------------------------

--
-- Table structure for table `dummy`
--

CREATE TABLE `dummy` (
  `id` int(11) NOT NULL,
  `jamban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `item_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `item_name`, `item_price`) VALUES
(1, '', '0.00'),
(2, 'chicken', '20000.00'),
(3, 'french fries', '20000.00'),
(4, 'cola', '5000.00');

-- --------------------------------------------------------

--
-- Table structure for table `ladies`
--

CREATE TABLE `ladies` (
  `ladies_id` int(11) NOT NULL,
  `ladies_name` varchar(30) NOT NULL,
  `ladies_price` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ladies`
--

INSERT INTO `ladies` (`ladies_id`, `ladies_name`, `ladies_price`) VALUES
(1, '', '0.00'),
(2, 'Ms. Elena', '100000.00'),
(3, 'Ms. Edna', '150000.00');

-- --------------------------------------------------------

--
-- Table structure for table `ladies_service`
--

CREATE TABLE `ladies_service` (
  `ladies_service_id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `ladies_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ladies_service`
--

INSERT INTO `ladies_service` (`ladies_service_id`, `customer_name`, `ladies_id`) VALUES
(1, '1', 2),
(8, 'dimas', 3),
(9, 'dimas', 1),
(10, 'dimas', 1),
(11, 'Reyhan', 1),
(12, 'Benhard', 2),
(13, '', 1),
(14, 'danu', 1),
(15, 'danu', 1),
(16, 'danu', 1),
(17, 'DhanuArd', 2),
(18, 'Nami', 2),
(19, '', 1),
(20, 'counting', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `order_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `customer_id`, `item_id`, `order_quantity`) VALUES
(1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_dummy`
--

CREATE TABLE `order_dummy` (
  `order_dummy_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `order_dummy_quantity` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_dummy`
--

INSERT INTO `order_dummy` (`order_dummy_id`, `item_id`, `order_dummy_quantity`, `customer_name`) VALUES
(1, 3, 66, ''),
(2, 3, 30, 'dimas'),
(9, 2, 300, 'dimas'),
(10, 2, 300, 'Reyhan'),
(11, 2, 13, 'Benhard'),
(16, 3, 21, ''),
(17, 2, 12, 'danu'),
(18, 3, 12, 'danu'),
(19, 4, 12, 'danu'),
(20, 3, 10, 'DhanuArd'),
(21, 3, 100, 'Nami'),
(22, 3, 10, ''),
(23, 3, 100, 'counting');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `room_name` varchar(20) NOT NULL,
  `room_type` varchar(20) NOT NULL,
  `room_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_name`, `room_type`, `room_price`) VALUES
(1, '', '', '0.00'),
(2, 'Room 1', 'Medium', '70000.00'),
(3, 'Room 2', 'Large', '100000.00');

-- --------------------------------------------------------

--
-- Table structure for table `roomorder`
--

CREATE TABLE `roomorder` (
  `roomorder_id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `room_id` int(11) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roomorder`
--

INSERT INTO `roomorder` (`roomorder_id`, `customer_name`, `room_id`, `start`, `end`) VALUES
(1, 'dimas', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Benhard', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'asas', 2, '2001-01-16 14:52:30', '0000-00-00 00:00:00'),
(5, 'asasas', 2, '2001-01-16 14:55:03', '0000-00-00 00:00:00'),
(6, 'asasasasas', 2, '2001-01-16 14:56:27', '2001-01-16 14:57:37'),
(7, '', 2, '2001-01-16 15:34:28', '0000-00-00 00:00:00'),
(8, '', 2, '2001-01-16 15:36:03', '0000-00-00 00:00:00'),
(9, '', 2, '2001-01-16 15:37:56', '0000-00-00 00:00:00'),
(10, '', 2, '2001-01-16 15:38:49', '0000-00-00 00:00:00'),
(11, '', 2, '2001-01-16 15:39:17', '0000-00-00 00:00:00'),
(12, '', 2, '2001-01-16 15:47:52', '0000-00-00 00:00:00'),
(13, 'danu', 2, '2001-01-16 15:54:12', '2001-01-16 15:59:36'),
(14, '', 2, '2001-01-16 16:00:11', '0000-00-00 00:00:00'),
(15, 'Ardi', 2, '2001-01-16 16:00:56', '0000-00-00 00:00:00'),
(16, 'Ardana', 2, '2001-01-16 16:03:00', '0000-00-00 00:00:00'),
(17, 'DhanuArd', 2, '2001-01-16 16:04:09', '2001-01-16 16:04:53'),
(18, 'Nami', 2, '2001-01-16 16:05:50', '2001-01-16 16:06:27'),
(19, 'counting', 2, '2001-08-16 21:25:48', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `authorization` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `authorization`) VALUES
(1, 'Daniel', 'daniel', 1),
(2, 'Aldi', 'aldi', 2),
(3, 'Dimas', 'dimas', 3),
(4, 'Danang', 'danang', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`),
  ADD UNIQUE KEY `customer_id` (`customer_id`),
  ADD UNIQUE KEY `room_id` (`room_id`),
  ADD KEY `ladies_id` (`ladies_id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `ladies_id_2` (`ladies_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `dummy`
--
ALTER TABLE `dummy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `ladies`
--
ALTER TABLE `ladies`
  ADD PRIMARY KEY (`ladies_id`),
  ADD KEY `ladies_id` (`ladies_id`);

--
-- Indexes for table `ladies_service`
--
ALTER TABLE `ladies_service`
  ADD PRIMARY KEY (`ladies_service_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`),
  ADD UNIQUE KEY `customer_id` (`customer_id`),
  ADD UNIQUE KEY `item_id` (`item_id`);

--
-- Indexes for table `order_dummy`
--
ALTER TABLE `order_dummy`
  ADD PRIMARY KEY (`order_dummy_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `roomorder`
--
ALTER TABLE `roomorder`
  ADD PRIMARY KEY (`roomorder_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `dummy`
--
ALTER TABLE `dummy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ladies`
--
ALTER TABLE `ladies`
  MODIFY `ladies_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ladies_service`
--
ALTER TABLE `ladies_service`
  MODIFY `ladies_service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `order_dummy`
--
ALTER TABLE `order_dummy`
  MODIFY `order_dummy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `roomorder`
--
ALTER TABLE `roomorder`
  MODIFY `roomorder_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `customer_id_fk` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`),
  ADD CONSTRAINT `item_id_fk` FOREIGN KEY (`item_id`) REFERENCES `item` (`item_id`),
  ADD CONSTRAINT `ladies_id_fk` FOREIGN KEY (`ladies_id`) REFERENCES `ladies` (`ladies_id`),
  ADD CONSTRAINT `room_id_fk` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `customer_id_fk_order` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`),
  ADD CONSTRAINT `item_id_fk_order` FOREIGN KEY (`item_id`) REFERENCES `item` (`item_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
