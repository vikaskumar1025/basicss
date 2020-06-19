-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 19, 2020 at 02:15 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `power_house_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `Power_house_list`
--

CREATE TABLE `Power_house_list` (
  `id` int(11) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `stationname` varchar(100) NOT NULL,
  `stationcode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Power_house_list`
--

INSERT INTO `Power_house_list` (`id`, `pincode`, `state`, `district`, `city`, `stationname`, `stationcode`) VALUES
(1, '152024', 'punjab', 'fazilka', 'jbd', 'sadar thana', '15156'),
(2, '152024', 'punjab', 'fazilka', 'jbd', 'sadar thana', '15156');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Power_house_list`
--
ALTER TABLE `Power_house_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Power_house_list`
--
ALTER TABLE `Power_house_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
