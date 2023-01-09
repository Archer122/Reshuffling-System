-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2022 at 02:52 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ers`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `indexNo` varchar(20) NOT NULL,
  `level` text NOT NULL,
  `programme` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `indexNo`, `level`, `programme`) VALUES
(1, 'UTB3500311', '100', 'Bsc. Marketing'),
(2, 'UTB3500312', '100', 'Bsc. Marketing'),
(3, 'UTB35003T1', '100', 'Bsc. Midwifery'),
(4, 'UTB35003T2', '100', 'Bsc. Midwifery'),
(5, 'UTB35003T3', '100', 'Bsc. Midwifery'),
(6, 'UTB35003T4', '100', 'Bsc. Midwifery'),
(7, 'UTB35003T5', '100', 'Bsc. Midwifery'),
(8, 'UTB35003T6', '100', 'Bsc. Midwifery'),
(9, 'UTB35003T0', '100', 'Bsc. Midwifery'),
(10, 'UTB35003TT', '100', 'Bsc. Midwifery'),
(11, 'UTB35003A3', '100', 'Bsc. Midwifery'),
(12, 'UTB35003D4', '100', 'Bsc. Midwifery'),
(13, 'UTB35003M5', '100', 'Bsc. Midwifery'),
(14, 'UTB35003G6', '100', 'Bsc. Midwifery'),
(15, 'UTB35003T0', '300', 'Bsc. Computer Science'),
(16, 'UTB35013TT', '300', 'Bsc. Computer Science'),
(17, 'UTB35023A3', '300', 'Bsc. Computer Science'),
(18, 'UTB35033D4', '300', 'Bsc. Computer Science'),
(19, 'UTB35043M5', '300', 'Bsc. Computer Science'),
(20, 'UTB35053G6', '300', 'Bsc. Computer Science'),
(21, 'UTB35063T0', '300', 'Bsc. Computer Science'),
(22, 'UTB35073TT', '300', 'Bsc. Computer Science'),
(23, 'UTB35083A3', '300', 'Bsc. Computer Science'),
(24, 'UTB35093D4', '300', 'Bsc. Computer Science'),
(25, 'UTB35033M5', '300', 'Bsc. Computer Science'),
(26, 'UTB35033T0', '300', 'Bsc. Computer Science'),
(27, 'UTB35033TT', '300', 'Bsc. Computer Science'),
(28, 'UTB35033A3', '300', 'Bsc. Computer Science'),
(29, 'UTB35033D4', '300', 'Bsc. Computer Science'),
(30, 'UTB35033M5', '300', 'Bsc. Computer Science'),
(31, 'UTB35033G6', '300', 'Bsc. Computer Science'),
(32, 'UTB35003T0', '300', 'Bsc. Computer Science'),
(33, 'UTB35013TT', '300', 'Bsc. Computer Science'),
(34, 'UTB35023A3', '300', 'Bsc. Computer Science'),
(35, 'UTB35033D4', '300', 'Bsc. Computer Science'),
(36, 'UTB35043M5', '300', 'Bsc. Computer Science'),
(37, 'UTB35053G6', '300', 'Bsc. Computer Science'),
(38, 'UTB35063T0', '300', 'Bsc. Computer Science'),
(39, 'UTB35073TT', '300', 'Bsc. Computer Science'),
(40, 'UTB35083A3', '300', 'Bsc. Computer Science'),
(41, 'UTB35093D4', '300', 'Bsc. Computer Science'),
(42, 'UTB35033M5', '300', 'Bsc. Computer Science'),
(43, 'UTB35033T0', '300', 'Bsc. Computer Science'),
(44, 'UTB35033TT', '300', 'Bsc. Computer Science'),
(45, 'UTB35033A3', '300', 'Bsc. Computer Science'),
(46, 'UTB35033D4', '300', 'Bsc. Computer Science'),
(47, 'UTB35033M5', '300', 'Bsc. Computer Science'),
(48, 'UTB35033G6', '300', 'Bsc. Computer Science'),
(49, 'UTB35033G6', '300', 'Bsc. Computer Science'),
(50, 'UEB35003T0', '200', 'Bsc. Accounting'),
(51, 'UEB35013TT', '200', 'Bsc. Accounting'),
(52, 'UEB35023A3', '200', 'Bsc. Accounting'),
(53, 'UEB35033D4', '200', 'Bsc. Accounting'),
(54, 'UEB35043M5', '200', 'Bsc. Accounting'),
(55, 'UEB35053G6', '200', 'Bsc. Accounting'),
(56, 'UEB35063T0', '200', 'Bsc. Accounting'),
(57, 'UEB35073TT', '200', 'Bsc. Accounting'),
(58, 'UEB35083A3', '200', 'Bsc. Accounting'),
(59, 'UEB35093D4', '200', 'Bsc. Accounting'),
(60, 'UEB35033M5', '200', 'Bsc. Accounting'),
(61, 'UEB35033T0', '200', 'Bsc. Accounting'),
(62, 'UEB35033TT', '200', 'Bsc. Accounting'),
(63, 'UEB35033A3', '200', 'Bsc. Accounting'),
(64, 'UEB35033D4', '200', 'Bsc. Accounting'),
(65, 'UEB35033M5', '200', 'Bsc. Accounting'),
(66, 'UEB35033G6', '200', 'Bsc. Accounting'),
(67, 'UEB35033G6', '200', 'Bsc. Accounting'),
(68, 'UWB35003T0', '100', 'Bsc. Mechnical Engineering'),
(69, 'UWB35013TT', '100', 'Bsc. Mechnical Engineering'),
(70, 'UWB35023A3', '100', 'Bsc. Mechnical Engineering'),
(71, 'UWB35033D4', '100', 'Bsc. Mechnical Engineering'),
(72, 'UWB35043M5', '100', 'Bsc. Mechnical Engineering'),
(73, 'UWB35053G6', '100', 'Bsc. Mechnical Engineering'),
(74, 'UWB35063T0', '100', 'Bsc. Mechnical Engineering'),
(75, 'UWB35073TT', '100', 'Bsc. Mechnical Engineering'),
(76, 'UWB35083A3', '100', 'Bsc. Mechnical Engineering'),
(77, 'UWB35093D4', '100', 'Bsc. Mechnical Engineering'),
(78, 'UWB35033M5', '100', 'Bsc. Mechnical Engineering'),
(79, 'UWB35033T0', '100', 'Bsc. Mechnical Engineering'),
(80, 'UWB35033TT', '100', 'Bsc. Mechnical Engineering'),
(81, 'UWB35033A3', '100', 'Bsc. Mechnical Engineering'),
(82, 'UWB35033D4', '100', 'Bsc. Mechnical Engineering'),
(83, 'UWB35033M5', '100', 'Bsc. Mechnical Engineering'),
(84, 'UWB35033G6', '100', 'Bsc. Mechnical Engineering'),
(85, 'UWB35033G6', '100', 'Bsc. Mechnical Engineering'),
(86, 'UZB35003T0', '100', 'Bsc. Mechnical Engineering'),
(87, 'UZB35013TT', '100', 'Bsc. Mechnical Engineering'),
(88, 'UZB35023A3', '100', 'Bsc. Mechnical Engineering'),
(89, 'UZB35033D4', '100', 'Bsc. Mechnical Engineering'),
(90, 'UZB35043M5', '100', 'Bsc. Mechnical Engineering'),
(91, 'UZB35053G6', '100', 'Bsc. Mechnical Engineering'),
(92, 'UZB35063T0', '100', 'Bsc. Mechnical Engineering'),
(93, 'UZB35073TT', '100', 'Bsc. Mechnical Engineering'),
(94, 'UZB35083A3', '100', 'Bsc. Mechnical Engineering'),
(95, 'UZB35093D4', '100', 'Bsc. Mechnical Engineering'),
(96, 'UZB35033M5', '100', 'Bsc. Mechnical Engineering'),
(97, 'UZB35033T0', '100', 'Bsc. Mechnical Engineering'),
(98, 'UZB35033TT', '100', 'Bsc. Mechnical Engineering'),
(99, 'UZB35033A3', '100', 'Bsc. Mechnical Engineering'),
(100, 'UZB35033D4', '100', 'Bsc. Mechnical Engineering'),
(101, 'UZB35033M5', '100', 'Bsc. Mechnical Engineering'),
(102, 'UZB35033G6', '100', 'Bsc. Mechnical Engineering'),
(103, 'UZB35033G6', '100', 'Bsc. Mechnical Engineering');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
