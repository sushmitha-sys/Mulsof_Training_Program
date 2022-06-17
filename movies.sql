-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2022 at 11:38 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(255) NOT NULL,
  `mov_name` varchar(255) NOT NULL,
  `actror` varchar(255) NOT NULL,
  `actress` varchar(255) NOT NULL,
  `year` int(255) NOT NULL,
  `director` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `mov_name`, `actror`, `actress`, `year`, `director`) VALUES
(1, 'KGF', 'Yash', 'Srinidhi Shetty', 2018, 'Prashanth Neel '),
(2, 'Hello Charli', 'rakshith Shetty', 'Sangeetha ', 2022, 'Pankaj Saraswat'),
(3, ' Ulidavaru Kandanthe', ' Rakshit Shetty ', ' Thara', 2014, ' Rakshit Shetty '),
(4, 'RangiTaranga', ' Nirup Bhandar', ' Radhika Narayan', 2015, ' Anup Bhandari'),
(5, ' Ugramm ', ' Sriimurali', ' Haripriya', 2014, ' Prashanth Neel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
