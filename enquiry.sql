-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2022 at 11:45 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enquiry`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `S.NO.` int(11) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `SUBJECT` varchar(255) NOT NULL,
  `MESSAGE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`S.NO.`, `NAME`, `EMAIL`, `SUBJECT`, `MESSAGE`) VALUES
(1, 'Sushma', '', 'CSE', 'kjafjdijd idfidj'),
(2, 'Raj', '', 'BCA', 'dfkj;aidjfid f'),
(3, 'Ravi', 'ravi@gmail.com', 'BBA', 'kdfj;dinfd '),
(4, 'Amit', 'amit@gmail.com', 'BA', 'djfkd;h'),
(5, 'Amit', 'amit@gmail.com', 'BA', 'djfkd;h'),
(6, 'Amit', 'amit@gmail.com', 'BA', 'djfkd;h'),
(7, 'Amit', 'amit@gmail.com', 'BA', 'djfkd;h'),
(8, 'Amit', 'amit@gmail.com', 'BA', 'djfkd;h'),
(9, 'Rama', 'rama@gmail.com', 'HR', 'djfdk');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `S_no` int(11) NOT NULL,
  `First_name` varchar(20) NOT NULL,
  `Last_name` varchar(20) NOT NULL,
  `Dob` date NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Mob_no` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Nationality` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `District` varchar(20) NOT NULL,
  `Pincode` varchar(10) NOT NULL,
  `Father_name` varchar(30) NOT NULL,
  `Mother_name` varchar(30) NOT NULL,
  `Father_occupation` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`S_no`, `First_name`, `Last_name`, `Dob`, `Email`, `Mob_no`, `Gender`, `Address`, `Nationality`, `State`, `City`, `District`, `Pincode`, `Father_name`, `Mother_name`, `Father_occupation`) VALUES
(1, 'Raj', 'Kumar', '2022-10-12', 'xyz@gmail.com', '1236547890', 'Male', 'xyz-b,janakpuri', 'Indian', 'Delhi', 'New Delhi', 'West Delhi', '110056', 'Pawan Kumar', 'Sudha Devi', 'Tailor'),
(2, 'Raj', 'Kumar', '2022-10-26', 'rk.raj01kumar@gmail.', '0954088591', 'Male', 'RZ-B-8, Nihal Vihar', 'American', 'Delhi', 'New Delhi', 'West Delhi', '110041', 'Pawan Sharma', 'Sudha Sharma', 'Tailor'),
(3, 'Ravi', 'Kumar', '2022-10-14', 'ravi@gmail.com', '2594975963', 'Male', 'RZ-B-8, Nihal Vihar', 'French', 'Delhi', 'New Delhi', 'West Delhi', '110041', 'Shyam Kumar', 'Shivani Devi', 'Doctor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`S.NO.`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`S_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `S.NO.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `S_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
