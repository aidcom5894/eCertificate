-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 11, 2025 at 04:10 PM
-- Server version: 8.0.41-0ubuntu0.20.04.1
-- PHP Version: 7.4.3-4ubuntu2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecertificate`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_directory`
--

CREATE TABLE `student_directory` (
  `id` int NOT NULL,
  `student_name` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `father_name` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `mother_name` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `contact_no` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  `previous_degree` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `selected_course` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `student_aadhar` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `student_image` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `student_uniqueID` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `qr_details` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `application_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_directory`
--

INSERT INTO `student_directory` (`id`, `student_name`, `father_name`, `mother_name`, `contact_no`, `previous_degree`, `selected_course`, `student_aadhar`, `student_image`, `student_uniqueID`, `qr_details`, `application_date`) VALUES
(1, 'SDFGSF', 'sdfgsfg', 'sdfgsfdg', '3453453453', 'dfgdfg', 'Tally', '344444444444', 'http://localhost/eCertificate/uploads/67f8ef8aa518a_63.jpg', 'KXGVF5A0', 'QR Content', '2025-04-11 10:31:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_directory`
--
ALTER TABLE `student_directory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_directory`
--
ALTER TABLE `student_directory`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
