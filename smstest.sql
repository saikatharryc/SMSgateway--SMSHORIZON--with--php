-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2017 at 07:25 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smsgateway`
--

-- --------------------------------------------------------

--
-- Table structure for table `smstest`
--

CREATE TABLE `smstest` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `msg` tinytext NOT NULL,
  `msg_id` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smstest`
--

INSERT INTO `smstest` (`id`, `name`, `mobile`, `msg`, `msg_id`) VALUES
(20, 'saikat chakrabortty', '8373886873', 'Hi%2Csaikat+chakrabortty+%2C+This+is+test+message.+Happy+SMSing.Powered+by+SMS+Horizon.', 'Error: No Sufficient balance (or) API key not found (or) No numbers (or) Invalid Sender ID '),
(21, 'saikat chakrabortty', '8373886873', 'Hi%2Csaikat+chakrabortty+%2C+This+is+test+message.+Happy+SMSing.Powered+by+SMS+Horizon.', 'Error: No Sufficient balance (or) API key not found (or) No numbers (or) Invalid Sender ID '),
(22, 'saikat chakrabortty', '8373886873', 'Hi%2Csaikat+chakrabortty+%2C+This+is+test+message.+Happy+SMSing.Powered+by+SMS+Horizon.', '88048918 ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `smstest`
--
ALTER TABLE `smstest`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `smstest`
--
ALTER TABLE `smstest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
