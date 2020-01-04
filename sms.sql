-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2019 at 07:13 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission_form`
--

CREATE TABLE `admission_form` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `roll` varchar(20) NOT NULL,
  `admission_id` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `blood_group` varchar(20) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `biography` varchar(1024) NOT NULL,
  `photo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission_form`
--

INSERT INTO `admission_form` (`fname`, `lname`, `roll`, `admission_id`, `email`, `phone`, `gender`, `dob`, `blood_group`, `religion`, `class`, `section`, `biography`, `photo`) VALUES
('Md.Saddam', 'Hossain', 'MCSE01', 1, 'csesolve6548@gmail.com', '01615469777', 'Male', '1992-11-30', 'A+', 'Islam', 'Play', 'Pakhi', 'Maa', ''),
('Md.Saddam', 'Hossain', 'MCSE02', 2, 'csesolve6548@gmail.com', '01522114477', 'Male', '1996-11-30', 'A+', 'Islam', 'Play', 'Pakhi', 'test', '447913.jpg'),
('Jaman', 'Ahmed', 'MCSE03', 3, 'csesolve6548@gmail.com', '01722554477', 'Male', '1997-11-30', 'A+', 'Islam', 'Play', 'Pakhi', 'test', '447913.jpg'),
('Sathi', 'Akter', 'MM01', 4, 'csesolve6548@gmail.com', '01587554411', 'Female', '1998-10-30', 'A+', 'Islam', 'Play', 'Pakhi', 'Test', '447913.jpg'),
('Shamima', 'Akter', 'H02', 5, 'csesolve6548@gmail.com', '01622554477', 'Female', '1999-11-20', 'A+', 'Islam', 'Play', 'Pakhi', 'test', '447913.jpg'),
('Mizanur Rahman', 'Azhari', 'KM01', 8, 'mra@gmail.com', '01555002211', 'Male', '1980-11-22', 'A+', 'Islam', 'Play', 'Pakhi', 'test', ''),
('Asad', 'Nur', 'KH02', 9, 'csesolve6548@gmail.com', '01520212523', 'Male', '1996-11-11', 'A+', 'Islam', 'Play', 'Pakhi', 'test', '447913.jpg'),
('Hafizur Rahman', 'Siddique', 'HM01', 10, 'csesolve6548@gmail.com', '01600000333', 'Male', '1996-11-11', 'A+', 'Islam', 'Play', 'Pakhi', 'test', 'images/215818.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission_form`
--
ALTER TABLE `admission_form`
  ADD PRIMARY KEY (`admission_id`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `roll` (`roll`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission_form`
--
ALTER TABLE `admission_form`
  MODIFY `admission_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
