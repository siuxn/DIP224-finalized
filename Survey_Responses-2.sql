-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 14, 2024 at 06:30 PM
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
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `Survey_Responses`
--

CREATE TABLE `Survey_Responses` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `Design` int(11) NOT NULL,
  `Navigation` int(11) NOT NULL,
  `Usability` int(11) NOT NULL,
  `Met_needs` text NOT NULL,
  `Improvements` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Survey_Responses`
--

INSERT INTO `Survey_Responses` (`id`, `email`, `Design`, `Navigation`, `Usability`, `Met_needs`, `Improvements`) VALUES
(8, 'e@gmail.com', 5, 5, 5, 'Extremely', 'Nothing to add\r\n'),
(9, 'irene@gmail.com', 4, 3, 3, 'Extremely', 'could add on more features\r\n'),
(10, 'sylvia@gmail.com', 2, 2, 5, 'Moderately', 'change the design'),
(11, 'rae@gmail.com', 5, 5, 5, 'Extremely', 'amazing \r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Survey_Responses`
--
ALTER TABLE `Survey_Responses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Survey_Responses`
--
ALTER TABLE `Survey_Responses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Survey_Responses`
--
ALTER TABLE `Survey_Responses`
  ADD CONSTRAINT `survey_responses_ibfk_1` FOREIGN KEY (`email`) REFERENCES `login` (`email`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
