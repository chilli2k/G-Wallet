-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2021 at 03:21 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `g-wallet`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`) VALUES
(1, 'admin', '123456'),
(2, 'admin2', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'Ramesh', 'ramesh@gmail.com', 'How to purchase gold?'),
(2, 'Ramesh', 'ramesh@gmail.com', 'The gold brought is deliverable or not?'),
(3, 'Suresh', 'suresh@mail.com', 'The gold bought is not reflected but the amount has been deducted!');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fb` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `fb`) VALUES
(1, 'Ramesh', 'ramesh@gmail.com', 'it\'s good'),
(2, 'Suresh', 'suresh@gmail.com', 'Very helpful');

-- --------------------------------------------------------

--
-- Table structure for table `gold_rate`
--

CREATE TABLE `gold_rate` (
  `id` int(11) NOT NULL,
  `day` date NOT NULL,
  `gr22k` varchar(10) NOT NULL,
  `gr24k` varchar(10) NOT NULL,
  `gr` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gold_rate`
--

INSERT INTO `gold_rate` (`id`, `day`, `gr22k`, `gr24k`, `gr`) VALUES
(1, '2021-01-13', '4000', '5200', 5200),
(2, '2020-12-31', '4,680', '5,096', 5096),
(3, '2021-01-01', '4,680', '5,170', 5170);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transid` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `trans_date` varchar(12) DEFAULT NULL,
  `action` varchar(55) NOT NULL,
  `amt` float NOT NULL,
  `balance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transid`, `email`, `trans_date`, `action`, `amt`, `balance`) VALUES
(1, 'abc@gmail.com', '2021-01-02 ', 'bought', 50, 10),
(2, 'ramesh@gmail.com', '2021-01-02 ', 'bought', 500, 20),
(12, 'ramesh@gmail.com', '01/12/2021 ', 'bought', 5000, 21.2572),
(13, 'suresh@gmail.com', '01/22/2021 ', 'bought', 50, 21.2669),
(14, 'umesh@gmail.com', '01/28/2021 ', 'bought', 100, 0.0193424),
(15, 'suresh@gmail.com', '01/28/2021 ', 'bought', 565, 21.3762),
(16, 'suresh@gmail.com', '01/28/2021 ', 'bought', 565, 21.4855),
(17, 'umesh@gmail.com', '02/01/2021 0', 'bought', 100, 0.0386848),
(18, 'umesh@gmail.com', '02/01/2021 0', 'bought', 100, 0.0580272),
(20, 'umesh@gmail.com', '02/01/2021 0', 'bought', 100, 0.0773696),
(24, 'umesh@gmail.com', '02/01/2021 0', 'bought', 1, 0.077563),
(25, 'umesh@gmail.com', '02/01/2021 0', 'bought', 120, 0.100774);

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` smallint(6) NOT NULL,
  `fName` varchar(255) NOT NULL,
  `lName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pno` bigint(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `fName`, `lName`, `email`, `pno`, `password`) VALUES
(1, 'gec', 'hassan', 'gech@gmail.com', 987654321, 'fkg'),
(2, 'namjoon', 'kim', 'knj@gmail.com', 987456321, 'bts'),
(3, 'jungkook', 'jeon', 'jjk@gmail.com', 987456123, 'bunny'),
(4, 'Suresh', 'hh', 'suresh@gmail.com', 9876543210, 'Suresh@2020'),
(5, 'Ramesh', 'hh', 'ramesh@gmail.com', 9876543210, 'Ramesh@2021'),
(6, 'ganesh', 'aa', 'ganesh@gmail.com', 9876543210, 'a@a'),
(7, 'Umesh', 'a', 'umesh@gmail.com', 9876543210, 'cc'),
(8, 'Harish', 'f', 'harish@gmail.com', 9876543210, 'Aa$123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gold_rate`
--
ALTER TABLE `gold_rate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transid`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gold_rate`
--
ALTER TABLE `gold_rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
