-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2022 at 06:46 AM
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
-- Database: `intern`
--

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `ptype` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `response` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`id`, `fullname`, `email`, `address`, `phone`, `ptype`, `file`, `message`, `response`) VALUES
(12, 'Brielle Gentry', 'cyfyresa@mailinator.com', 'Nam reiciendis deser', '+1 (619) 569-4917', 'Ophthalmology', '626774ddce7a78.57943021.jpg', 'Deleniti modi pariat', NULL),
(13, 'Brielle Gentry', 'cyfyresa@mailinator.com', 'Nam reiciendis deser', '+1 (619) 569-4917', 'Ophthalmology', '62677528cf2df3.31154602.jpg', 'Deleniti modi pariat', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tech` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `ptype` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `utype` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `name`, `surname`, `date`, `ptype`, `file`, `gender`, `utype`, `address`) VALUES
(21, NULL, 'rithyamforbe@gmail.com', '321', 'Forbe Rithyam', NULL, NULL, NULL, NULL, NULL, '0', NULL),
(30, NULL, 'r@gmail.com', '258', 'Patrick Sherman', 'Anderson', '2003-02-08', 'Obstetrics and gynecology', '62675e8f429dd0.68211739.jpg', 'on', '1', 'Doloremque dolore ci'),
(31, NULL, 'rahaqegyx@mailinator.com', '2fMYG5Oq', 'Selma Austin', 'Stein', '1975-08-11', 'Pathology', '626771ad218761.43505137.jpg', 'female', '1', 'Maiores sit animi m'),
(32, NULL, 'miqakyvaw@mailinator.com', 'NM65CAUf', 'Zephr Wolfe', 'Murphy', '1987-07-18', 'Nuclear medicine', '626771c279fdd6.11602714.jpg', 'female', '1', 'Dolor unde dolores v');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
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
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
