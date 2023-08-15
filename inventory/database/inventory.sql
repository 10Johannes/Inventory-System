-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2023 at 03:25 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE `credentials` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`id`, `username`, `password`) VALUES
(61, 'dave', 'chua');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `ISBN` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `issued_to` varchar(100) NOT NULL,
  `date_acquired` datetime(6) NOT NULL,
  `purchased_value` varchar(100) NOT NULL,
  `PO_ref_no` varchar(100) NOT NULL,
  `warranty` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `auditor` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `category`, `description`, `model`, `brand`, `ISBN`, `location`, `issued_to`, `date_acquired`, `purchased_value`, `PO_ref_no`, `warranty`, `remarks`, `auditor`) VALUES
(2, 'adasd', 'asdsad', 'asdsad', 'sad', 'dasd', 'dasd', 'dasd', '2023-08-14 11:32:00.000000', 'dasdasd', 'dasd', 'dasd', 'sad', 0),
(3, 'sdds', 'adsad', 'dasd', 'dsad', 'dasd', 'dasdsa', 'dasd', '2023-08-14 11:38:00.000000', 'dsad', 'dsad', 'sad', 'sad', 0),
(4, 'dasda', 'dadads', 'sadsda', 'dasd', 'asd', 'das', 'dasd', '2023-08-14 11:42:00.000000', 'dasd', 'dasd', 'dasd', 'sdad', 0),
(5, 'asda', 'asdasd', 'asd', 'asd', 'asd', 'asd', 'asd', '2023-08-14 11:46:00.000000', 'asdasd', 'asdasdas', 'asdasd', 'asdasd', 0),
(6, 'asdasd', 'asdasd', 'asdasda', 'asda', 'asdasd', 'asdasd', 'asdas', '2023-08-14 11:58:00.000000', 'asdasd', 'asd', 'asd', 'asd', 45),
(7, 'laptop', 'malupit', 'aspire', 'acer', '123', '3rd flr', 'rey', '2023-08-14 12:27:00.000000', '30k', '123', '1year', 'brandnew', 45),
(8, 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', '2023-08-14 12:37:00.000000', 'asd', 'asd', 'asd', 'asd', 48),
(9, 'dasd', 'dasd', 'sa', 'das', 'sad', 'das', 'dasd', '2023-08-14 12:41:00.000000', 'dasdas', 'asdsa', 'dsad', 'dasdsad', 48),
(10, 'asda', 'asdasd', 'asdasd', 'asdasd', 'asdas', 'asda', 'asda', '2023-08-14 12:44:00.000000', 'asd', 'asdas', 'asdasd', 'asdasd', 48),
(11, 'adasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asda', 'asdasd', '2023-08-14 13:29:00.000000', 'asdas', 'asd', 'asd', 'asdasd', 48),
(12, 'dad', 'dasd', 'dada', 'das', 'dasd', 'das', 'dasd', '2023-08-14 13:35:00.000000', 'da', 'da', 'das', 'fd', 49);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `credentials`
--
ALTER TABLE `credentials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `credentials`
--
ALTER TABLE `credentials`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
