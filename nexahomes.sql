-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 17, 2025 at 10:01 AM
-- Server version: 8.0.41
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nexahomes`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_pics`
--

DROP TABLE IF EXISTS `blog_pics`;
CREATE TABLE IF NOT EXISTS `blog_pics` (
  `id` int NOT NULL AUTO_INCREMENT,
  `homeloanpic` varchar(100) NOT NULL,
  `carloanpic` varchar(100) NOT NULL,
  `personalloanpic` varchar(100) NOT NULL,
  `solarloanpic` varchar(100) NOT NULL,
  `mercenaryloanpic` varchar(100) NOT NULL,
  `businessloanpic` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_loans`
--

DROP TABLE IF EXISTS `enquiry_loans`;
CREATE TABLE IF NOT EXISTS `enquiry_loans` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Mobile` bigint NOT NULL,
  `Email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `enquiry_loans`
--

INSERT INTO `enquiry_loans` (`id`, `Name`, `City`, `Mobile`, `Email`) VALUES
(5, 'sanjay', 'kanpur', 98765432, 'info123@gmail.com'),
(6, 'Bidhan Bhattacharya', 'Kanpur', 8303809563, 'bidhanbhattacharya2711@gmail.com'),
(7, 'raju', 'Kanpur', 8303809563, 'bidhanbhattacharya2711@gmail.com'),
(11, 'Bidhan Bhattacharya', 'Kanpur', 1232456578, 'bidhanbhattacharya2711@gmail.com'),
(12, 'Bidhan Bhattacharya', 'Kanpur', 42423424242, 'bidhanbhattacharya2711@gmail.com'),
(17, 'Bidhan Bhattacharya', 'Kanpur', 42423424242, 'bidhanbhattacharya2711@gmail.com'),
(18, 'Bidhan Bhattacharya', 'Kanpur', 42423424242, 'bidhanbhattacharya2711@gmail.com'),
(19, 'Bidhan Bhattacharya', 'Kanpur', 3434343434, 'bidhanbhattacharya2711@gmail.com'),
(20, 'Bidhan Bhattacharya', 'Kanpur', 3434343434, 'bidhanbhattacharya2711@gmail.com'),
(21, 'Bidhan Bhattacharya', 'Kanpur', 3434343434, 'bidhanbhattacharya2711@gmail.com'),
(22, 'Bidhan Bhattacharya', 'Kanpur', 232323232323, 'bidhanbhattacharya2711@gmail.com'),
(23, 'Bidhan Bhattacharya', 'Kanpur', 232323232323, 'bidhanbhattacharya2711@gmail.com'),
(24, 'Bidhan Bhattacharya', 'Kanpur', 232323232323, 'bidhanbhattacharya2711@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `manage_admin`
--

DROP TABLE IF EXISTS `manage_admin`;
CREATE TABLE IF NOT EXISTS `manage_admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `manage_admin`
--

INSERT INTO `manage_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 12345);

-- --------------------------------------------------------

--
-- Table structure for table `realstate_enquiry`
--

DROP TABLE IF EXISTS `realstate_enquiry`;
CREATE TABLE IF NOT EXISTS `realstate_enquiry` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Phone` bigint NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `realstate_enquiry`
--

INSERT INTO `realstate_enquiry` (`id`, `Name`, `Phone`, `Location`, `Email`) VALUES
(2, 'Bidhan Bhattacharya', 787668877, 'kanpur', 'bidhanbhattacharya2711@gmail.com'),
(3, 'Bidhan Bhattacharya', 8303809563, 'kanpur', 'info123@gmail.com'),
(4, 'Bidhan Bhattacharya', 8303809563, 'kanpur', 'info123@gmail.com'),
(5, 'Bidhan Bhattacharya', 8303809563, 'kanpur', 'info123@gmail.com'),
(6, 'Bidhan Bhattacharya', 8303809563, 'kanpur', 'bidhanbhattacharya2711@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
