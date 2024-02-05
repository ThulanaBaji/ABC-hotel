-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2024 at 09:48 AM
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
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `reference`, `customer_name`, `num_adults`, `num_kids`, `check_in`, `check_out`, `items`, `room`, `total`, `status`) VALUES
(2, '5MEPXZGXN4', 'Mr. Rajitha Senadeera', 2, 2, 1706914800000, 1707087600000, '{\"1\":[\"Buffet\",\"2\",\"1000Rs\",\"2000Rs\"]}', 'double', '10000.00', 'paid'),
(10, '1JFNQBVVEO', 'Mrs. Andry Senanayake', 4, 2, 1712268000000, 1712440800000, '{\"1\":[\"Parking fee\",\"2 nights\",\"200Rs per night\",\"400Rs\"]}', 'deluxe', '6400.00', 'paid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
