-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2024 at 03:25 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ajax-all-fld`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(30) NOT NULL,
  `cntry_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`, `cntry_id`) VALUES
(1, 'Delhi', 1),
(2, 'Mumbai', 1),
(3, 'Bangalore', 1),
(4, 'Kolkata', 1),
(5, 'Chennai', 1),
(6, 'Dhaka', 2),
(7, 'Chittagong', 2),
(8, 'Khulna', 2),
(9, 'Rajshahi', 2),
(10, 'Sylhet', 2),
(11, 'Sydney', 3),
(12, 'Melbourne', 3),
(13, 'Brisbane', 3),
(14, 'Perth', 3),
(15, 'Adelaide', 3),
(16, 'Johannesburg', 4),
(17, 'Cape Town', 4),
(18, 'Durban', 4),
(19, 'Pretoria', 4),
(20, 'Port Elizabeth', 4);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`) VALUES
(1, 'India'),
(2, 'Bangladesh'),
(3, 'Australia'),
(4, 'South Africa');

-- --------------------------------------------------------

--
-- Table structure for table `user-dtls`
--

CREATE TABLE `user-dtls` (
  `id` int(11) NOT NULL,
  `name` varchar(110) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `language` varchar(110) NOT NULL,
  `country` int(11) NOT NULL,
  `city` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user-dtls`
--

INSERT INTO `user-dtls` (`id`, `name`, `gender`, `age`, `language`, `country`, `city`) VALUES
(32, 'Pritam Pal', 'Male', 30, 'English,Bengali', 1, 4),
(33, 'Tapasi Chatterjee', 'Female', 26, 'Bengali,Hindi', 1, 3),
(34, 'Subham Pal', 'Male', 23, 'English,Bengali,Hindi', 3, 11),
(36, 'pritam', 'Female', 3, 'English,Hindi', 1, 4),
(37, 'Alice', 'Female', 25, 'English,Bangali', 1, 5),
(38, 'Bob', 'Male', 30, 'Hindi,English', 2, 10),
(39, 'Charlie', 'Male', 22, 'Bangali', 3, 15),
(40, 'Diana', 'Female', 28, 'Hindi', 4, 20),
(41, 'Eve', 'Female', 24, 'Bangali,English', 1, 3),
(42, 'Frank', 'Male', 29, 'Hindi,English', 2, 8),
(43, 'Grace', 'Female', 26, 'English', 3, 12),
(44, 'Hank', 'Male', 31, 'Hindi', 4, 18),
(45, 'Ivy', 'Female', 23, 'Bangali,Hindi', 1, 6),
(46, 'Jack', 'Male', 27, 'English,Bangali', 2, 9),
(47, 'Karen', 'Female', 21, 'Hindi', 3, 14),
(48, 'Leo', 'Male', 32, 'Bangali', 4, 17),
(49, 'Mia', 'Female', 25, 'English,Hindi', 1, 2),
(50, 'Nate', 'Male', 28, 'Hindi,English', 2, 11),
(51, 'Olivia', 'Female', 24, 'Bangali', 3, 13),
(53, 'Quinn', 'Female', 29, 'Hindi,English', 1, 4),
(54, 'Ray', 'Male', 23, 'Bangali,Hindi', 2, 7),
(55, 'Sophia', 'Female', 27, 'English', 3, 16),
(56, 'Tom', 'Male', 30, 'Hindi', 4, 20),
(57, 'Uma', 'Female', 22, 'Bangali,English', 1, 5),
(58, 'Vince', 'Male', 31, 'Hindi', 2, 10),
(59, 'Wendy', 'Female', 25, 'Bangali', 3, 15),
(60, 'Xander', 'Male', 28, 'English,Hindi', 4, 1),
(61, 'Yara', 'Female', 24, 'Hindi', 1, 3),
(62, 'Zane', 'Male', 26, 'Bangali,English', 2, 8),
(63, 'Amy', 'Female', 29, 'English', 3, 12),
(64, 'Brian', 'Male', 23, 'Hindi,Bangali', 4, 18),
(65, 'Cathy', 'Female', 27, 'English', 1, 6),
(66, 'David', 'Male', 32, 'Bangali', 2, 9),
(67, 'Ella', 'Female', 21, 'Hindi,English', 3, 14),
(68, 'Finn', 'Male', 25, 'English,Bangali', 4, 17),
(69, 'Gina', 'Female', 28, 'Hindi,English', 1, 2),
(70, 'Harry', 'Male', 24, 'Bangali', 2, 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `fk_cntry_id` (`cntry_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `user-dtls`
--
ALTER TABLE `user-dtls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_country` (`country`),
  ADD KEY `fk_user_city` (`city`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user-dtls`
--
ALTER TABLE `user-dtls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `fk_cntry_id` FOREIGN KEY (`cntry_id`) REFERENCES `country` (`country_id`);

--
-- Constraints for table `user-dtls`
--
ALTER TABLE `user-dtls`
  ADD CONSTRAINT `fk_user_city` FOREIGN KEY (`city`) REFERENCES `city` (`city_id`),
  ADD CONSTRAINT `fk_user_country` FOREIGN KEY (`country`) REFERENCES `country` (`country_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
