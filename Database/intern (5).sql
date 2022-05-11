-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2022 at 06:11 AM
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
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(255) NOT NULL,
  `doc` varchar(255) NOT NULL,
  `docEmail` varchar(255) NOT NULL,
  `time` varchar(255) DEFAULT NULL,
  `patientName` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `patientEmail` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `docId` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `ptype` varchar(255) NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `message` varchar(255) NOT NULL,
  `response` varchar(255) DEFAULT NULL,
  `test_list` varchar(255) DEFAULT NULL,
  `guestId` int(255) NOT NULL,
  `test_result` varchar(255) DEFAULT NULL,
  `prescription` varchar(255) DEFAULT NULL,
  `m1` varchar(100) DEFAULT NULL,
  `t1` varchar(100) DEFAULT NULL,
  `d1` varchar(100) DEFAULT NULL,
  `m2` varchar(100) DEFAULT NULL,
  `t2` varchar(100) DEFAULT NULL,
  `d2` varchar(100) DEFAULT NULL,
  `m3` varchar(100) DEFAULT NULL,
  `t3` varchar(100) DEFAULT NULL,
  `d3` varchar(100) DEFAULT NULL,
  `m4` varchar(100) DEFAULT NULL,
  `t4` varchar(100) DEFAULT NULL,
  `d4` varchar(100) DEFAULT NULL,
  `m5` varchar(100) DEFAULT NULL,
  `t5` varchar(100) DEFAULT NULL,
  `d5` varchar(100) DEFAULT NULL,
  `m6` varchar(100) DEFAULT NULL,
  `t6` varchar(100) DEFAULT NULL,
  `d6` varchar(100) DEFAULT NULL,
  `m7` varchar(100) DEFAULT NULL,
  `t7` varchar(100) DEFAULT NULL,
  `d7` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`id`, `name`, `email`, `address`, `phone`, `ptype`, `file`, `message`, `response`, `test_list`, `guestId`, `test_result`, `prescription`, `m1`, `t1`, `d1`, `m2`, `t2`, `d2`, `m3`, `t3`, `d3`, `m4`, `t4`, `d4`, `m5`, `t5`, `d5`, `m6`, `t6`, `d6`, `m7`, `t7`, `d7`) VALUES
(36, 'Forbe Rithyam', 'rithyamforbe@gmail.com', 'Voluptas aut nulla q', '+1 (589) 693-4453', 'Obstetrics and gynecology', '627aa8e4816959.46437167.png', 'Reiciendis et volupt', 'fgdfg', 'TC, DC, ESR, Hemoglibin(CBC),B.T, C.T', 21, '627aaa22632f71.57475400.pdf', 'gfgdfgdfgdfg', 'gf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `name`, `surname`, `date`, `ptype`, `file`, `gender`, `utype`, `address`, `phone`, `designation`) VALUES
(21, NULL, 'rithyamforbe@gmail.com', '321', 'Forbe Rithyam', NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(48, NULL, 'shakila@gmail.com', 'jhqOEA7p', 'Dr. Shakila Banu', 'Shakila', '1988-07-06', 'Neurology', '626f8e7e5ed2f6.13910054.jpg', 'female', '1', 'Nandipara, Bonosree, dhaka', NULL, NULL),
(50, NULL, 'parvin@gmail.com', 'g2RPBscL', 'Dr. Sheikh Parvin Rumi', 'Sheikh', '1988-02-03', 'Allergy and Immunology', '626f90e0c088a5.18313266.jpg', 'female', '1', 'Nandipara, Bonosree, dhaka', NULL, NULL),
(51, NULL, 'paxugun@mailinator.com', 'B7RzAWCO', 'Dr. Rhona ', 'Olson', '2016-03-07', 'Medical genetics', '626f9187618ad9.92056110.jpg', 'female', '1', '695/1/a, baro maghbazar, 1217', NULL, NULL),
(52, NULL, 'jija@mailinator.com', 'p8jmMcJ1', 'Dr. Jason Howard', 'Conley', '2009-10-08', 'Nuclear medicine', '626f91db2e6b18.75827928.jpg', 'male', '1', ' 69/1, new circular road (2nd floor), mouchak, 1217', NULL, NULL),
(53, NULL, 'huxyjuc@mailinator.com', 'shajy82N', 'Dr. Brian Duncan', 'Bryant', '1977-06-09', 'Internal medicine', '626f9216aaf7d2.74373478.jpg', 'male', '1', 'gawair, ashkona, uttara, 1231', NULL, NULL),
(54, NULL, 'biryrypah@mailinator.com', '1yZJgad7', 'Dr. Kevyn Cardenas', 'Pierce', '1983-07-10', 'Anesthesiology', '626f925de70218.03397710.jpg', 'male', '1', '14/1, shaymoli, mirpur road, 1207', NULL, NULL),
(55, NULL, 'ridom@gmail.com', '123', 'Ridom', NULL, '2000-09-10', NULL, NULL, 'male', '3', 'Nandipara, Bonosree, dhaka', '01906985967', NULL),
(56, NULL, 'Rif@gmail.com', '123', 'Ridam', NULL, '2000-10-05', NULL, NULL, 'male', '3', 'Nandipara, Bonosree, dhaka', '01906985967', NULL),
(57, NULL, 'byva@mailinator.com', 'ULiThd0S', 'Lilah Hewitt', NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
