-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2022 at 04:44 PM
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

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `doc`, `docEmail`, `time`, `patientName`, `date`, `patientEmail`, `status`, `docId`) VALUES
(24, 'Dr. Sheikh Parvin Rumi', 'parvin@gmail.com', '11:00 am', 'Forbe Rithyam', '2022-05-06        ', 'rithyamforbe@gmail.com', NULL, 50),
(25, 'Dr. Sheikh Parvin Rumi', 'parvin@gmail.com', '9:00 am', 'Forbe Rithyam', '2022-05-06        ', 'rithyamforbe@gmail.com', NULL, 50),
(26, 'Dr. Sheikh Parvin Rumi', 'parvin@gmail.com', '10:00 am', 'Forbe Rithyam', '2022-05-06        ', 'rithyamforbe@gmail.com', NULL, 50),
(27, 'Dr. Sheikh Parvin Rumi', 'parvin@gmail.com', '01:00 pm', 'Forbe Rithyam', '2022-05-06        ', 'rithyamforbe@gmail.com', NULL, 50),
(28, 'Dr. Sheikh Parvin Rumi', 'parvin@gmail.com', '02:00 pm', 'Forbe Rithyam', '2022-05-06        ', 'rithyamforbe@gmail.com', NULL, 50),
(29, 'Dr. Shakila Banu', 'shakila@gmail.com', '9:00 am', 'Forbe Rithyam', '2022-05-06        ', 'rithyamforbe@gmail.com', NULL, 48),
(30, 'Dr. Shakila Banu', 'shakila@gmail.com', '10:00 am', 'Forbe Rithyam', '2022-05-06        ', 'rithyamforbe@gmail.com', NULL, 48),
(31, 'Dr. Brian Duncan', 'huxyjuc@mailinator.com', '9:00 am', 'Forbe Rithyam', '2022-05-06        ', 'rithyamforbe@gmail.com', NULL, 53),
(32, 'Dr. Sheikh Parvin Rumi', 'parvin@gmail.com', '03:00 pm', 'Forbe Rithyam', '2022-05-06        ', 'rithyamforbe@gmail.com', NULL, 50);

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
(19, 'Abigail Wallace', 'jyvuxepy@mailinator.com', 'Quidem dolor et exce', '+1 (758) 536-2431', 'Urology', '626fa2213bc612.39067336.jpg', 'Sed odio asperiores ', NULL);

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
(54, NULL, 'biryrypah@mailinator.com', '1yZJgad7', 'Dr. Kevyn Cardenas', 'Pierce', '1983-07-10', 'Anesthesiology', '626f925de70218.03397710.jpg', 'male', '1', '14/1, shaymoli, mirpur road, 1207', NULL, NULL);

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
