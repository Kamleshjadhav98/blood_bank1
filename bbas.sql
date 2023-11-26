-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2022 at 09:23 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbas`
--

-- --------------------------------------------------------

--
-- Table structure for table `donarradd`
--

CREATE TABLE `donarradd` (
  `id` int(70) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(10) NOT NULL,
  `mo_number` int(12) NOT NULL,
  `email` varchar(20) NOT NULL,
  `blood_group` varchar(5) NOT NULL,
  `medicaly_fit` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donarradd`
--

INSERT INTO `donarradd` (`id`, `name`, `gender`, `age`, `mo_number`, `email`, `blood_group`, `medicaly_fit`, `address`) VALUES
(1, 'Kamalesh Rajendr Jadhav', 'male', 25, 2147483647, 'kamalesh123@email.co', 'A+', 'YES', 'SINNAR'),
(2, 'Tushar Ramdas Mhaske', 'male', 21, 2147483647, 'tushar123@email.com', 'A+', 'YES', 'SINNAR');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donarradd`
--
ALTER TABLE `donarradd`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
