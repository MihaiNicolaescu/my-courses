-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2022 at 01:47 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_courses_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `professor` varchar(128) NOT NULL,
  `type` varchar(64) NOT NULL,
  `begin_hour` time NOT NULL,
  `time` int(11) NOT NULL,
  `day` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `userID`, `name`, `professor`, `type`, `begin_hour`, `time`, `day`) VALUES
(6, 0, 'IA', 'Chelie', 'Curs', '18:00:00', 2, 'Luni');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fName` varchar(32) NOT NULL,
  `lName` varchar(32) NOT NULL,
  `university` int(64) NOT NULL,
  `specialization` int(64) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `fName`, `lName`, `university`, `specialization`, `year`) VALUES
(1, 'mihaitamihai65@gmail.com', '$2y$10$dywPMjOyKPoBzRdwbdLleeJ9To5z7QVjX9EIC.FhCZDdiq9w2JL9C', 'Mihăiță', 'Nicolaescu', 0, 0, 1),
(2, 'dev@app.com', '$2y$10$T4qeU8J.14ZXTKE7cFENv.KsZQu1JG0.W4tLRMYixt1zVmxaIJrou', 'Developer', 'Dev', 0, 0, 1),
(3, 'dev@app.com', '$2y$10$yOjTSIulb2FzUuZuUu9.y.sAy.rOnakuCKYUl4mhfeJ60XwOrapuy', 'Developer', 'Dev', 0, 0, 1),
(4, 'dev2@app.com', '$2y$10$QxfaCl3U9rLqZh2XbPObVuoJOZwa0YCqQ/SsUdsV3hJFF/uZplk7S', 'Developer', 'Dev', 0, 0, 1),
(5, 'dev3@app.com', '$2y$10$fw/MoVlSo84cEa.t8FV5T.OGGPN96Kaz9TPvs251R9AsggPcwJGky', 'Developer', 'Dev', 0, 0, 1),
(6, 'dev12@app.com', '$2y$10$AEk8IujgKeN8zeHamtcXA.DLC6gfXFM/v2ZJERpCKHqZVg/FEW68i', 'Developer', 'Dev', 0, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
