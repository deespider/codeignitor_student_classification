-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 28, 2021 at 01:56 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `school_info`
--

CREATE TABLE `school_info` (
  `school_name` varchar(100) NOT NULL,
  `school_code` varchar(20) NOT NULL,
  `school_address` varchar(200) NOT NULL,
  `school_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school_info`
--

INSERT INTO `school_info` (`school_name`, `school_code`, `school_address`, `school_type`) VALUES
('Airport English School', 'AES01', 'Kaikhali, Airport Gate 2', 'Boys'),
('Bishnwapur Sir Romesh', 'BSRI', 'Rajarhat Bishnwapur, Kol-135', 'Boys'),
('Bodhicariya Senior Secondary School', 'BSSS', 'New Town, Kolkata', 'Co-ed'),
('Kendra Vidyalay', 'KV01', 'Salt Lake, Kolkata', 'Co-ed'),
('Ramkrishna Mission', 'RM01', 'Berrackpore', 'Co-ed');

-- --------------------------------------------------------

--
-- Table structure for table `students_detail`
--

CREATE TABLE `students_detail` (
  `General` int(11) NOT NULL,
  `SC` int(11) NOT NULL,
  `ST` int(11) NOT NULL,
  `OBC` int(11) NOT NULL,
  `Muslim` int(11) NOT NULL,
  `Christian` int(11) NOT NULL,
  `Sikh` int(11) NOT NULL,
  `Buddhist` int(11) NOT NULL,
  `Parsi` int(11) NOT NULL,
  `Jain` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin@wb', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `school_info`
--
ALTER TABLE `school_info`
  ADD PRIMARY KEY (`school_code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
