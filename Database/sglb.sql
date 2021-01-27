-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2021 at 05:03 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sglb`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `ac_num` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `ac_type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ac_status` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `balance` int(15) NOT NULL,
  `fname` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`ac_num`, `user_id`, `ac_type`, `ac_status`, `balance`, `fname`) VALUES
(19, 34, 'savings', 'working', 4000, 'sindhu S'),
(20, 35, 'savings', 'working', 1900, 'luffy'),
(21, 36, 'savings', 'working', 10500, 'zoro'),
(22, 37, 'savings', 'working', 2100, 'nami'),
(23, 38, 'savings', 'working', 2800, 'usopp'),
(24, 39, 'savings', 'working', 1000, 'sanji vinsmoke'),
(25, 40, 'savings', 'working', 1000, 'franky'),
(26, 41, 'savings', 'working', 1000, 'robin'),
(27, 42, 'savings', 'working', 1000, 'brook'),
(28, 43, 'savings', 'working', 1000, 'chopper'),
(29, 44, 'savings', 'working', 1000, 'jinbe'),
(30, 45, 'savings', 'working', 700, 'veena mam'),
(31, 46, 'savings', 'working', 500, 'Swastik Gowda');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `fname` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `fname`, `email`, `pass`) VALUES
(1, 'swastik', 'swastik7999@gmail.com', 'pass'),
(2, 'sindhu', 'sindhu@gmail.com', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `credit_card`
--

CREATE TABLE `credit_card` (
  `card_num` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `card_bal` int(15) NOT NULL,
  `exp_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `credit_card`
--

INSERT INTO `credit_card` (`card_num`, `user_id`, `card_bal`, `exp_date`) VALUES
(17, 34, 4500, '2026-02-22'),
(18, 35, 2000, '2025-05-04'),
(19, 36, 4500, '2023-12-05'),
(20, 37, 3000, '2026-07-29'),
(21, 38, 1000, '2022-01-13'),
(22, 39, 5000, '2025-10-28'),
(23, 40, 5000, '2021-03-11'),
(24, 41, 5000, '2022-04-13'),
(25, 42, 5000, '2025-10-21'),
(26, 43, 5000, '2025-02-16'),
(27, 44, 5000, '2022-03-21'),
(28, 45, 2964, '2025-03-01'),
(29, 46, 1000, '2026-10-22');

-- --------------------------------------------------------

--
-- Table structure for table `locker`
--

CREATE TABLE `locker` (
  `lk_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `lk_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lk_cap` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `locker`
--

INSERT INTO `locker` (`lk_id`, `user_id`, `lk_type`, `lk_cap`) VALUES
(12, 34, 'Property', 'small'),
(13, 35, 'Money', 'Medium'),
(14, 36, 'Property', 'small'),
(15, 37, 'Money', 'small'),
(16, 38, 'Money', 'small'),
(17, 39, 'Money', 'small'),
(18, 40, 'Property', 'small'),
(19, 41, 'Money', 'small'),
(20, 42, 'Money', 'small'),
(21, 43, 'Money', 'small'),
(22, 44, 'Money', 'small'),
(23, 45, 'Jewellers', 'Medium'),
(24, 46, 'Jewellers', 'Medium');

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `log_id` int(5) NOT NULL,
  `user_id` int(10) NOT NULL,
  `log_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `pass` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `otp` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`log_id`, `user_id`, `log_time`, `pass`, `otp`) VALUES
(39, 34, '2020-11-17 04:00:52', 'pass', 5739),
(40, 34, '2020-11-17 04:02:00', 'pass', 9220),
(41, 34, '2020-11-17 04:06:07', 'pass', 4143),
(49, 35, '2020-11-23 03:33:47', '1luffy', 5534),
(50, 36, '2020-11-23 03:35:29', '2zoro', 1747),
(51, 37, '2020-11-23 03:38:01', '3nami', 1625),
(52, 38, '2020-11-23 03:39:01', '4usopp', 4092),
(53, 39, '2020-11-23 03:40:33', '5sanji', 3013),
(54, 40, '2020-11-23 03:41:56', '6franky', 9924),
(55, 41, '2020-11-23 03:44:01', '7robin', 1603),
(56, 42, '2020-11-23 03:45:32', '8brook', 5427),
(57, 43, '2020-11-23 03:46:44', '9chopper', 2790),
(58, 44, '2020-11-23 03:48:56', '10jinbe', 3549),
(59, 35, '2020-11-23 04:26:42', '1luffy', 3887),
(60, 35, '2020-11-23 04:32:01', '1luffy', 2249),
(61, 36, '2020-11-23 04:39:59', '2zoro', 6437),
(62, 37, '2020-11-23 04:46:41', '3nami', 1163),
(63, 38, '2020-11-23 04:50:11', '4usopp', 8083),
(64, 35, '2020-11-24 10:18:24', '1luffy', 2098),
(65, 35, '2020-11-26 03:53:06', '1luffy', 6437),
(66, 45, '2020-11-26 08:54:59', 'pass', 7996),
(67, 45, '2020-11-26 08:55:13', 'pass', 8505),
(68, 45, '2020-11-26 09:40:18', 'pass', 6468),
(69, 35, '2020-11-27 05:13:19', '1luffy', 5253),
(70, 35, '2020-11-27 06:54:02', '1luffy', 1646),
(71, 35, '2020-11-30 15:49:56', '1luffy', 4112),
(72, 35, '2020-12-09 09:21:21', '1luffy', 5569),
(73, 35, '2020-12-15 04:53:19', '1luffy', 1475),
(74, 36, '2020-12-15 04:53:52', '2zoro', 6607),
(75, 35, '2020-12-22 14:49:35', '1luffy', 1044),
(76, 35, '2020-12-22 15:10:49', '1luffy', 6558),
(77, 46, '2021-01-12 03:06:16', 'pass', 6869),
(78, 46, '2021-01-12 03:06:25', 'pass', 3694);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `t_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `old_bal` int(15) NOT NULL,
  `new_bal` int(15) NOT NULL,
  `t_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `t_amt` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`t_id`, `user_id`, `old_bal`, `new_bal`, `t_time`, `t_amt`) VALUES
(17, 34, 5000, 4500, '2020-11-17 04:08:11', 500),
(21, 35, 1000, 800, '2020-11-23 04:28:26', 200),
(22, 36, 1000, 1200, '2020-11-23 04:28:26', 200),
(23, 35, 5000, 4000, '2020-11-23 04:37:37', 1000),
(24, 36, 1200, 2200, '2020-11-23 04:37:37', 1000),
(25, 36, 2200, 1000, '2020-11-23 04:41:11', 1200),
(26, 35, 800, 2000, '2020-11-23 04:41:11', 1200),
(27, 36, 5000, 4500, '2020-11-23 04:42:24', 500),
(28, 37, 1000, 1500, '2020-11-23 04:42:24', 500),
(29, 37, 1500, 1000, '2020-11-23 04:47:25', 500),
(30, 35, 2000, 2500, '2020-11-23 04:47:25', 500),
(31, 37, 1000, 500, '2020-11-23 04:47:38', 500),
(32, 36, 1000, 1500, '2020-11-23 04:47:38', 500),
(33, 37, 5000, 3000, '2020-11-23 04:47:59', 2000),
(34, 38, 1000, 3000, '2020-11-23 04:47:59', 2000),
(35, 38, 5000, 1000, '2020-11-23 04:50:37', 4000),
(36, 35, 2500, 6500, '2020-11-23 04:50:37', 4000),
(37, 38, 3000, 2800, '2020-11-23 04:51:10', 200),
(38, 37, 500, 700, '2020-11-23 04:51:10', 200),
(39, 35, 6500, 6300, '2020-11-24 10:18:44', 200),
(40, 36, 1500, 1700, '2020-11-24 10:18:44', 200),
(41, 35, 6300, 5900, '2020-11-26 03:55:40', 400),
(42, 37, 700, 1100, '2020-11-26 03:55:40', 400),
(43, 45, 1000, 700, '2020-11-26 08:58:43', 300),
(44, 36, 1700, 2000, '2020-11-26 08:58:43', 300),
(45, 45, 5000, 4000, '2020-11-26 08:59:16', 1000),
(46, 36, 2000, 3000, '2020-11-26 08:59:16', 1000),
(47, 45, 3964, 2964, '2020-11-26 09:40:38', 1000),
(48, 36, 3000, 4000, '2020-11-26 09:40:38', 1000),
(49, 35, 5900, 4900, '2020-11-27 06:54:30', 1000),
(50, 37, 1100, 2100, '2020-11-27 06:54:30', 1000),
(51, 35, 4900, 2900, '2020-11-30 15:51:49', 2000),
(52, 36, 4000, 6000, '2020-11-30 15:51:49', 2000),
(53, 35, 2900, 1900, '2020-12-22 15:20:16', 1000),
(54, 34, 1000, 2000, '2020-12-22 15:20:16', 1000),
(55, 35, 4000, 2000, '2020-12-22 15:21:03', 2000),
(56, 34, 2000, 4000, '2020-12-22 15:21:03', 2000),
(57, 46, 1000, 500, '2021-01-12 03:11:00', 500),
(58, 36, 6000, 6500, '2021-01-12 03:11:00', 500),
(59, 46, 5000, 1000, '2021-01-12 03:11:32', 4000),
(60, 36, 6500, 10500, '2021-01-12 03:11:32', 4000);

-- --------------------------------------------------------

--
-- Table structure for table `trans_error`
--

CREATE TABLE `trans_error` (
  `te_id` int(10) NOT NULL,
  `t_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `reason` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `te_amt` int(15) NOT NULL,
  `te_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `trans_error`
--

INSERT INTO `trans_error` (`te_id`, `t_id`, `user_id`, `reason`, `te_amt`, `te_time`) VALUES
(13, 6355783, 34, 'Not enough money in account', 2000, '2020-11-17 04:07:12'),
(15, 1895543, 35, 'Not enough money in account', 2000, '2020-11-23 04:28:00'),
(16, 5221269, 36, 'Not enough money in account', 3000, '2020-11-23 04:40:38'),
(17, 1738089, 36, 'Not enough money in credit card', 10000, '2020-11-23 04:40:51'),
(18, 3118559, 38, 'Not enough money in credit card', 3000, '2020-11-23 04:50:50'),
(19, 4878705, 35, 'Not enough money in credit card', 5000, '2020-11-24 10:23:30'),
(20, 7742184, 45, 'Not enough money in account', 2000, '2020-11-26 08:58:28'),
(21, 1616119, 45, 'Not enough money in credit card', 4000, '2020-11-26 09:40:52'),
(22, 1481359, 35, 'Not enough money in account', 5000, '2020-11-27 06:55:14'),
(23, 7431895, 35, 'Not enough money in credit card', 5000, '2020-11-27 06:55:26'),
(24, 2759885, 35, 'Not enough money in credit card', 5000, '2020-11-30 15:51:06'),
(25, 2220152, 35, 'Not enough money in account', 5000, '2020-11-30 15:51:19'),
(26, 1681050, 46, 'Not enough money in account', 2000, '2021-01-12 03:10:44'),
(27, 2356755, 46, 'Not enough money in credit card', 10000, '2021-01-12 03:11:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `fname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `mob` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `address`, `email`, `mob`, `dob`, `gender`, `pass`) VALUES
(34, 'sindhu S', 'shimoga', 'sindhu@gmail.com', '9498645857', '2020-11-04', 'F', 'pass'),
(35, 'luffy', 'windmil village', 'luffy2@gmail.com', '9498645857', '2019-01-10', 'M', '1luffy'),
(36, 'zoro', 'banglore', 'zoro@gmail.com', '9498645858', '2018-01-23', 'M', '2zoro'),
(37, 'nami', 'mumbai', 'nami@gmail.com', '9498645859', '2019-02-12', 'F', '3nami'),
(38, 'usopp', 'delhi', 'usopp@gmail.com', '9498645850', '2017-02-23', 'M', '4usopp'),
(39, 'sanji vinsmoke', 'gujrat', 'sanji@gmail.com', '9498645851', '2014-11-23', 'M', '5sanji'),
(40, 'franky', 'tamilnadu', 'franky@gmail.com', '9498645852', '2018-11-23', 'M', '6franky'),
(41, 'robin', 'haryana', 'robin@gmail.com', '9498645853', '2014-08-23', 'F', '7robin'),
(42, 'brook', 'andra pradesh', 'brook@gmail.com', '9498645854', '1994-03-23', 'M', '8brook'),
(43, 'chopper', 'bihar', 'chopper@gmail.com', '9498645855', '2019-07-23', 'M', '9chopper'),
(44, 'jinbe', 'uttar pradesh', 'jinbe@gmail.com', '9498645856', '2018-11-23', 'M', '10jinbe'),
(45, 'veena mam', 'banglore', 'veenamam@gmail.com', '7760059852', '2016-02-26', 'F', 'pass'),
(46, 'Swastik Gowda', '2767 Unicorn Ln NW, Washington', 'everlastingdon5@gmail.com', '9498645857', '2000-05-31', 'M', 'pass');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ac_num`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `credit_card`
--
ALTER TABLE `credit_card`
  ADD PRIMARY KEY (`card_num`);

--
-- Indexes for table `locker`
--
ALTER TABLE `locker`
  ADD PRIMARY KEY (`lk_id`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `trans_error`
--
ALTER TABLE `trans_error`
  ADD PRIMARY KEY (`te_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `ac_num` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `credit_card`
--
ALTER TABLE `credit_card`
  MODIFY `card_num` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `locker`
--
ALTER TABLE `locker`
  MODIFY `lk_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `log_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `t_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `trans_error`
--
ALTER TABLE `trans_error`
  MODIFY `te_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
