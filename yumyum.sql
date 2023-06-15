-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2023 at 04:12 AM
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
-- Database: `yumyum`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_t`
--

CREATE TABLE `admin_t` (
  `admin_id` varchar(4) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_pic` longblob NOT NULL,
  `user_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cust_t`
--

CREATE TABLE `customer_t` (
  `cust_id` varchar(10) NOT NULL,
  `cust_name` varchar(255) NOT NULL,
  `cust_contact` varchar(15) NOT NULL,
  `cust_pic` longblob NOT NULL,
  `user_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `history_t`
--

CREATE TABLE `history_t` (
  `cust_id` varchar(10) NOT NULL,
  `rest_id` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rating_t`
--

CREATE TABLE `rating_t` (
  `cust_id` varchar(10) NOT NULL,
  `rest_id` varchar(255) NOT NULL,
  `review` varchar(255) NOT NULL,
  `rating` int(1) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_t`
--

CREATE TABLE `restaurant_t` (
  `rest_id` varchar(255) NOT NULL,
  `rest_name` varchar(255) NOT NULL,
  `rest_contact` varchar(30) NOT NULL,
  `rest_category` varchar(255) NOT NULL,
  `rest_address` varchar(255) NOT NULL,
  `price_min` float NOT NULL,
  `price_max` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rest_picture_table`
--

CREATE TABLE `rest_picture_table` (
  `pic_id` int(255) NOT NULL,
  `rest_id` varchar(255) NOT NULL,
  `rest_pic` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spinwheel_t`
--

CREATE TABLE `spinwheel_t` (
  `rest_id` varchar(255) NOT NULL,
  `cust_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_t`
--

CREATE TABLE `user_t` (
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(30) NOT NULL,
  `position` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_t`
--
ALTER TABLE `admin_t`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `user_email` (`user_email`);

--
-- Indexes for table `cust_t`
--
ALTER TABLE `customer_t`
  ADD PRIMARY KEY (`cust_id`),
  ADD KEY `user_email` (`user_email`);

--
-- Indexes for table `history_t`
--
ALTER TABLE `history_t`
  ADD PRIMARY KEY (`cust_id`,`rest_id`),
  ADD KEY `rest_id` (`rest_id`);

--
-- Indexes for table `rating_t`
--
ALTER TABLE `rating_t`
  ADD PRIMARY KEY (`cust_id`,`rest_id`),
  ADD KEY `rest_id` (`rest_id`);

--
-- Indexes for table `restaurant_t`
--
ALTER TABLE `restaurant_t`
  ADD PRIMARY KEY (`rest_id`);

--
-- Indexes for table `rest_picture_table`
--
ALTER TABLE `rest_picture_table`
  ADD PRIMARY KEY (`pic_id`,`rest_id`),
  ADD KEY `rest_id` (`rest_id`);

--
-- Indexes for table `spinwheel_t`
--
ALTER TABLE `spinwheel_t`
  ADD PRIMARY KEY (`rest_id`,`cust_id`),
  ADD KEY `cust_id` (`cust_id`);

--
-- Indexes for table `user_t`
--
ALTER TABLE `user_t`
  ADD PRIMARY KEY (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rest_picture_table`
--
ALTER TABLE `rest_picture_table`
  MODIFY `pic_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_t`
--
ALTER TABLE `admin_t`
  ADD CONSTRAINT `admin_t_ibfk_1` FOREIGN KEY (`user_email`) REFERENCES `user_t` (`user_email`);

--
-- Constraints for table `cust_t`
--
ALTER TABLE `customer_t`
  ADD CONSTRAINT `customer_t_ibfk_1` FOREIGN KEY (`user_email`) REFERENCES `user_t` (`user_email`);

--
-- Constraints for table `history_t`
--
ALTER TABLE `history_t`
  ADD CONSTRAINT `history_t_ibfk_1` FOREIGN KEY (`rest_id`) REFERENCES `restaurant_t` (`rest_id`),
  ADD CONSTRAINT `history_t_ibfk_2` FOREIGN KEY (`cust_id`) REFERENCES `customer_t` (`cust_id`);

--
-- Constraints for table `rating_t`
--
ALTER TABLE `rating_t`
  ADD CONSTRAINT `rating_t_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customer_t` (`cust_id`),
  ADD CONSTRAINT `rating_t_ibfk_2` FOREIGN KEY (`rest_id`) REFERENCES `restaurant_t` (`rest_id`);

--
-- Constraints for table `rest_picture_table`
--
ALTER TABLE `rest_picture_table`
  ADD CONSTRAINT `rest_picture_table_ibfk_1` FOREIGN KEY (`rest_id`) REFERENCES `restaurant_t` (`rest_id`);

--
-- Constraints for table `spinwheel_t`
--
ALTER TABLE `spinwheel_t`
  ADD CONSTRAINT `spinwheel_t_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customer_t` (`cust_id`),
  ADD CONSTRAINT `spinwheel_t_ibfk_2` FOREIGN KEY (`rest_id`) REFERENCES `restaurant_t` (`rest_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
