-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2024 at 06:03 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelabc`
--

-- --------------------------------------------------------

--
-- Table structure for table `acc`
--

CREATE TABLE `acc` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(32) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(30) NOT NULL,
  `username` varchar(40) NOT NULL,
  `nic` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `acc`
--

INSERT INTO `acc` (`id`, `email`, `password`, `created_date`, `status`, `username`, `nic`) VALUES
(1, 'acc.admin@gmail.com', '7f4bba20acd3fc4168e3a6576d13adcb', '2023-12-10 15:21:16', 'available', 'stephen john', '657654534V');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(32) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` text NOT NULL,
  `username` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `created_date`, `status`, `username`) VALUES
(1, 'abc.admin@gmail.com', 'e99a18c428cb38d5f260853678922e03', '2023-12-07 06:18:26', 'available', 'sithike niran');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `reference` text NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `num_adults` int(11) NOT NULL,
  `num_kids` int(11) NOT NULL,
  `check_in` bigint(20) NOT NULL,
  `check_out` bigint(20) NOT NULL,
  `items` text DEFAULT NULL,
  `room` varchar(20) NOT NULL,
  `total` decimal(11,2) NOT NULL,
  `status` varchar(20) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `reference`, `customer_name`, `num_adults`, `num_kids`, `check_in`, `check_out`, `items`, `room`, `total`, `status`, `create_time`) VALUES
(2, '5MEPXZGXN4', 'Mr. Rajitha Senadeera', 2, 2, 1706914800000, 1707087600000, '{\"1\":[\"Buffet\",\"2\",\"1000Rs\",\"2000Rs\"]}', 'double', '10000.00', 'archived', '2024-02-05 23:05:14'),
(10, '1JFNQBVVEO', 'Mrs. Andry Senanayake', 4, 2, 1712268000000, 1712440800000, '{\"1\":[\"Parking fee\",\"2 nights\",\"200Rs per night\",\"400Rs\"]}', 'deluxe', '6400.00', 'paid', '2024-02-05 23:05:14'),
(12, '8WCKF7EO6P', 'Mr. Sithike Kodithuwakku', 2, 2, 1707087600000, 1707260400000, '{\"1\":[\"Parking fee\",\"2 nights\",\"500Rs per night\",\"1000Rs\"]}', 'deluxe', '7000.00', 'paid', '2024-02-06 02:30:23'),
(17, 'YSC84KBMCU', 'Mrs. Rosi Senanayake', 3, 2, 1707174000000, 1707260400000, NULL, 'deluxe', '3000.00', 'paid', '2024-02-06 02:41:10'),
(18, 'WGZ9A49QS2', 'Mr. Amanda Wesi', 3, 3, 1707087600000, 1707087600000, '{\"1\":[\"Buffet\",\"2\",\"1000Rs\",\"2000Rs\"]}', 'deluxe', '2000.00', 'paid', '2024-02-06 04:53:55');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Customer_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(11) NOT NULL,
  `country` varchar(20) NOT NULL,
  `adults` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `arrival` varchar(50) NOT NULL,
  `departure` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Customer_id`, `name`, `email`, `mobile`, `country`, `adults`, `children`, `arrival`, `departure`, `message`) VALUES
(852235681, 'Dewwin Wijerathna', 'dewwa@icloud.com', 772213935, 'England', 2, 2, '01/22/2024', '01/23/2024', 'Will be coming very early on the day of arrival.'),
(852236596, 'Dewwin Wijerathna', 'dewwa@icloud.com', 772213935, 'England', 2, 2, '01/22/2024', '01/23/2024', 'Will be coming very early on the day of arrival.');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `Item_code` int(11) NOT NULL,
  `Item_name` varchar(50) NOT NULL,
  `In_use_stock` int(11) NOT NULL,
  `Available_stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `Item_code`, `Item_name`, `In_use_stock`, `Available_stock`) VALUES
(5, 8945, 'Tooth brush', 90, 10),
(6, 9876, 'Towel', 10, 20),
(7, 9087, 'Indoor slipper', 22, 10);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `Customer_id` int(11) NOT NULL,
  `Room_id` int(11) NOT NULL,
  `Room_Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`Customer_id`, `Room_id`, `Room_Name`) VALUES
(852235681, 1, 'deluxe'),
(852236596, 2, 'deluxe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acc`
--
ALTER TABLE `acc`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_uni` (`email`) USING HASH;

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_uni` (`email`) USING HASH;

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`Customer_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`Room_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acc`
--
ALTER TABLE `acc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `Room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
