-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 18, 2024 at 08:55 AM
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
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `uploadContent`
--

CREATE TABLE `uploadContent` (
  `contentID` int(11) NOT NULL,
  `typeOfContent` varchar(50) NOT NULL,
  `categoryOfContent` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(3000) NOT NULL,
  `content` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uploadContent`
--

INSERT INTO `uploadContent` (`contentID`, `typeOfContent`, `categoryOfContent`, `title`, `description`, `content`) VALUES
(38, 'Image', 'Dietary Choice', 'Hello assss', 'Small changes in our daily routines can have significant benefits. Plus, we can always support enhancing sustainability on larger scales, such as carbon removal through tree planting offset programs. There is a lot to choose from like the One Month carbon offset which will allow you to make a great difference in just one month. Determine your total emissions using an ecological footprint counter first, and then choose one of the best carbon offset providers to remove your carbon emissions. By making earth-friendly choices and encouraging others to do so, you can make a huge difference in the planet’s health, from the climate and habitats for animals, to the conservation of natural resources… making the ‘real’ distinction between carbon footprints vs ecological footprints, just how low you can get yours.', '85934chart-differences-carbon-footprint-ecological-footprint.png'),
(40, 'Image', 'Energy Consumption', 'how to remove', 'Get your heat & electricity from “green” suppliers.\r\nEnergy industries across Europe have the highest carbon footprint compared to all other sectors. The one change you can make to offset your carbon emissions is to switch to green suppliers that use renewable sources to produce it. Choosing such suppliers will allow them to become more competitive in the market and lead to reduced prices.\r\nHere is How to Switch to a Green Energy Supplier →.\r\n\r\nBuy efficient appliances with high-energy labels.\r\nEnergy labelling of electronic appliances is pretty standardised in Europe. It goes from A (very efficient) to G (least efficient). While shopping for appliances, always check the label as an appliance with label A will be environmentally friendly because it uses less electrical input to operate. \r\n\r\nLearn about How to Shop Green Home Appliances →, check our manual entry on', '89398transport-carbon-footprint.jpg'),
(44, 'Image', 'Environmental Issue', 'Carbon Footprint of Tourism', 'Tourism is responsible for roughly 8% of the world’s carbon emissions. From plane flights and boat rides to souvenirs and lodging, various activities contribute to tourism’s carbon footprint. The majority of this footprint is emitted by visitors from high-income countries, with U.S. travelers at the top of the list. As the number of people who can afford to travel grows, so will tourism’s environmental footprint.\r\n\r\nKeep reading to learn about some of the different ways that travel produces CO2. ', '28694Carbon-Footprint-Tourism-Chart-STI-Web-2.png'),
(54, 'Infographic', 'Transportation', 'adad', 'suck\r\n', '2387085934chart-differences-carbon-footprint-ecological-footprint.png'),
(55, 'Image', 'Transportation', 'Assholeeee', 'zdsd', '77815food.jpg'),
(56, 'Image', 'Energy Consumption', 'hello', 'efdsfae', '44616Footprint-highres.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `uploadContent`
--
ALTER TABLE `uploadContent`
  ADD PRIMARY KEY (`contentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uploadContent`
--
ALTER TABLE `uploadContent`
  MODIFY `contentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
