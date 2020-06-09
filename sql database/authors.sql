-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 09, 2020 at 06:36 PM
-- Server version: 5.7.30-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) COLLATE utf8_slovak_ci DEFAULT NULL,
  `lastname` varchar(50) COLLATE utf8_slovak_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_slovak_ci DEFAULT NULL,
  `project` varchar(50) COLLATE utf8_slovak_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `firstname`, `lastname`, `email`, `project`) VALUES
(1, 'Vladimir', 'Petrovic', 'petrovic.vlado96@gmail.com', 'Suspension'),
(2, 'Zelko', 'Urban', 'zelo.urban@gmail.com', 'Ball beam'),
(3, 'Dragana', 'Zrinji', 'dragana.zrinji@gmail.com', 'Inverted pendulum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
