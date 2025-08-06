-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 06, 2025 at 04:36 AM
-- Server version: 8.0.42-0ubuntu0.24.04.2
-- PHP Version: 8.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `student_name` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `father_name` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mother_name` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `contact_no` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `previous_degree` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `selected_course` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `student_aadhar` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `student_image` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `student_uniqueID` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `qr_details` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `qr_detailed_address` varchar(360) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `application_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_directory`
--

INSERT INTO `student_directory` (`id`, `student_name`, `father_name`, `mother_name`, `contact_no`, `previous_degree`, `selected_course`, `student_aadhar`, `student_image`, `student_uniqueID`, `qr_details`, `qr_detailed_address`, `application_date`) VALUES
(1, 'asdfasdf', 'asdf', 'asdfasdf', '2342342342', 'afsdf', 'Tally', '243451245234', 'http://localhost/eCertificate/uploads/67f92a386a6eb_Abhay.png', 'Z0H5GY3X', 'asdfasdf', 'http://localhost/eCertificate/students_certificate.php?student_uniqueID=Z0H5GY3X', '2025-04-11 14:42:00'),
(2, 'avdfa', 'sdfas', 'dfasdf', '2354575635', 'sdfgs', 'Photoshop', '567986797878', 'http://localhost/eCertificate/uploads/67f92ae879110_kochi2.png', '0ETUA6VW', 'http://localhost/eCertificate/qrcodes/0ETUA6VW.png', 'http://localhost/eCertificate/students_certificate.php?student_uniqueID=0ETUA6VW', '2025-04-11 14:44:56'),
(3, 'Vjasdj', 'lVijea', 'kjsadk2', '1322454312', 'bf', 'Tally', '321324634354', 'http://localhost/eCertificate/uploads/67f92bb852ed0_landscape.jpg', 'G8D9AVSI', 'http://localhost/eCertificate/qrcodes/G8D9AVSI.png', 'http://localhost/eCertificate/students_certificate.php?student_uniqueID=G8D9AVSI', '2025-04-11 14:48:24'),
(4, 'Satay', 'vasr', 'sdhwr', '9122313551', '6ndgh', 'PGDCA', '125552122255', 'http://localhost/eCertificate/uploads/67f92c8a88d37_pxfuel2.jpg', '761WHO5B', 'http://localhost/eCertificate/qrcodes/761WHO5B.png', 'http://localhost/eCertificate/students_certificate.php?student_uniqueID=761WHO5B', '2025-04-11 14:51:54'),
(5, 'Chandan', 'Suresh', 'Month', '1235452654', 'BCA', 'ADCA', '132132324655', 'http://localhost/eCertificate/uploads/67f92d49c25d6_pxfuel2.jpg', 'NWLPREXO', 'http://localhost/eCertificate/qrcodes/NWLPREXO.png', 'http://localhost/eCertificate/students_certificate.php?student_uniqueID=NWLPREXO', '2025-04-11 14:55:05'),
(6, 'Rahul', 'bsdfg', 'sbdff', '3232465465', '345', 'ADCA', '657563231324', 'http://localhost/eCertificate/uploads/67f92e1a73124_header-img1.png', 'YVBNUX1K', 'http://localhost/eCertificate/qrcodes/YVBNUX1K.png', 'http://localhost/eCertificate/students_certificate.php?student_uniqueID=YVBNUX1K', '2025-04-11 14:58:34'),
(7, 'Sonali', 'Sushil', 'Minakshi', '1132321324', 'BCA', 'PGDCA', '123543543354', 'http://localhost/eCertificate/uploads/67f92f9f1f38a_pxfuel.jpg', 'N7T08A5U', 'http://localhost/eCertificate/qrcodes/N7T08A5U.png', 'http://localhost/eCertificate/students_certificate.php?student_uniqueID=N7T08A5U', '2025-04-11 15:05:03'),
(8, 'Robin', 'Remy', 'Susana', '9199450345', 'Intermediate', 'DCA', '426512221321', 'http://localhost/eCertificate/uploads/6892d6435bc49_new.jpg', '5IREKJYB', 'http://localhost/eCertificate/qrcodes/5IREKJYB.png', 'http://localhost/eCertificate/students_certificate.php?student_uniqueID=5IREKJYB', '2025-08-06 04:12:51'),
(9, 'Robinson', 'Robin', 'Susena', '9199451532', 'Intermediate', 'ADCA', '400000000000', 'http://localhost/eCertificate/uploads/6892d6c5f3a77_new.jpg', '02U6YMSK', 'http://localhost/eCertificate/qrcodes/02U6YMSK.png', 'http://localhost/eCertificate/students_certificate.php?student_uniqueID=02U6YMSK', '2025-08-06 04:15:01');

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
