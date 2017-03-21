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
-- Table structure for table `history`
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
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `model`, `transaction`, `price`, `date`, `time`) VALUES
(1, 'robot A', 1, '$100', '01/04/2017', '07:23:23'),
(2, 'robot B', 2, '$25', '05/24/2016', '07:23:23'),
(3, 'robot C', 1, '$75', '09/01/2016', '07:23:23'),
(4, 'robot D', 2, '$50', '02/20/2016', '07:23:23'),
(5, 'robot E', 1, '$25', '02/09/2016', '07:23:23'),
(6, 'robot F', 2, '$50', '01/15/2017', '07:23:23');



--
-- Table structure for table `parts`
--

DROP TABLE IF EXISTS `partsdata`;
CREATE TABLE `partsdata` (
  `id` int(3) NOT NULL,
  `part_name` varchar(20) DEFAULT NULL,
  `part_code` varchar(20) DEFAULT NULL,
  `ca` varchar(20) DEFAULT NULL,
  `built_at` varchar(20) DEFAULT NULL,
  `built_time` varchar(20) DEFAULT NULL,
  `aquired_time` varchar(20) DEFAULT NULL,
  `part_type` varchar(20) DEFAULT NULL,
  `file_name` varchar(20) DEFAULT NULL,
  `href` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parts`
--

INSERT INTO `partsdata` (`id`, `part_name`, `part_code`, `ca`, 
                     `built_at`, `built_time`,
                     `aquired_time`, `part_type`, `file_name`, `href`) VALUES
(1, 'part A-1', 'A1', '000001', 'Strawberry', 'Jan-01-2017', 'Jan-30-2017', 'head', 'a1.jpeg', '/parts/1'),
(2, 'part A-2', 'A2', '000002', 'Strawberry', 'Jan-02-2017', 'Jan-30-2017', 'body', 'a2.jpeg', '/parts/2'),
(3, 'part A-3', 'A3', '000003', 'Strawberry', 'Jan-03-2017', 'Jan-30-2017', 'leg', 'a3.jpeg', '/parts/3'),
(4, 'part B-1', 'B1', '000004', 'Strawberry', 'Jan-04-2017', 'Jan-30-2017', 'head', 'b1.jpeg', '/parts/4'),
(5, 'part B-2', 'B2', '000005', 'Strawberry', 'Jan-05-2017', 'Jan-30-2017', 'body', 'b2.jpeg', '/parts/5'),
(6, 'part B-3', 'B3', '000006', 'Strawberry', 'Jan-06-2017', 'Jan-30-2017', 'leg', 'b3.jpeg', '/parts/6'),
(7, 'part C-1', 'C1', '000007', 'Strawberry', 'Jan-07-2017', 'Jan-30-2017', 'head', 'c1.jpeg', '/parts/7'),
(8, 'part C-2', 'C2', '000008', 'Strawberry', 'Jan-08-2017', 'Jan-30-2017', 'body', 'c2.jpeg', '/parts/8'),
(9, 'part C-3', 'C3', '000009', 'Strawberry', 'Jan-09-2017', 'Jan-30-2017', 'leg', 'c3.jpeg', '/parts/9'),
(10, 'part M-1', 'M1', '000010', 'Strawberry', 'Jan-10-2017', 'Jan-30-2017', 'head', 'm1.jpeg', '/parts/10'),
(11, 'part M-2', 'M2', '000011', 'Strawberry', 'Jan-11-2017', 'Jan-30-2017', 'body', 'm2.jpeg', '/parts/11'),
(12, 'part M-3', 'M3', '000012', 'Strawberry', 'Jan-12-2017', 'Jan-30-2017', 'leg', 'm3.jpeg', '/parts/12'),
(13, 'part R-1', 'R1', '000013', 'Strawberry', 'Jan-13-2017', 'Jan-30-2017', 'head', 'r1.jpeg', '/parts/13'),
(14, 'part R-2', 'R2', '000014', 'Strawberry', 'Jan-14-2017', 'Jan-30-2017', 'body', 'r2.jpeg', '/parts/14'),
(15, 'part R-3', 'R3', '000015', 'Strawberry', 'Jan-15-2017', 'Jan-30-2017', 'leg', 'r3.jpeg', '/parts/15'),
(16, 'part W-1', 'W1', '000016', 'Strawberry', 'Jan-16-2017', 'Jan-30-2017', 'head', 'w1.jpeg', '/parts/16'),
(17, 'part W-2', 'W2', '000017', 'Strawberry', 'Jan-17-2017', 'Jan-30-2017', 'body', 'w2.jpeg', '/parts/17'),
(18, 'part W-3', 'W3', '000018', 'Strawberry', 'Jan-18-2017', 'Jan-30-2017', 'leg', 'w3.jpeg', '/parts/18');
