-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2017 at 01:07 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `factory`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('pnflp4egjvbvdokcci2ku44rh1p67m3l', '127.0.0.1', 1488930882, 0x5f5f63695f6c6173745f726567656e65726174657c693a313438383933303837393b);

-- --------------------------------------------------------

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);


--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `history`;
CREATE TABLE `history` (
  `id` int(3) NOT NULL,
  `model` varchar(20) DEFAULT NULL,
  `transaction` int(1) DEFAULT NULL,
  `price` int(20) DEFAULT NULL,
  `date` varchar(10) DEFAULT NULL,
  `time` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tasks`
--

INSERT INTO `history` (`id`, `model`, `transaction`, `price`, `date`, `time`) VALUES
(1, 'robot A', 1, $100, '01/04/2017', '07:23:23'),
(2, 'robot B', 2, $25, '05/24/2016', '07:23:23'),
(3, 'robot C', 1, $75, '09/01/2016', '07:23:23'),
(4, 'robot D', 2, $50, '02/20/2016', '07:23:23'),
(5, 'robot E', 1, $25, '02/09/2016', '07:23:23'),
(6, 'robot F', 2, $50, '01/15/2017', '07:23:23');