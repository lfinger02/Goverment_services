-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2019 at 10:35 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `business_studies`
--

CREATE TABLE `business_studies` (
  `id` int(11) NOT NULL,
  `exam_ID` int(11) NOT NULL,
  `exam_subject` varchar(25) NOT NULL,
  `exam_name` text NOT NULL,
  `exam_marks` int(11) NOT NULL,
  `exam_year` year(4) NOT NULL,
  `exam_time` int(11) NOT NULL,
  `exam_icon` varchar(25) NOT NULL,
  `exam_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business_studies`
--

INSERT INTO `business_studies` (`id`, `exam_ID`, `exam_subject`, `exam_name`, `exam_marks`, `exam_year`, `exam_time`, `exam_icon`, `exam_link`) VALUES
(1, 0, 'Business Studies', 'November 2015 Business Studies P1', 100, 2015, 30, 'business.svg', ''),
(2, 1, 'Business Studies', 'February & March 2015 Business Studies P1', 100, 2015, 30, 'business.svg', 'business_studies/2015FebP1.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business_studies`
--
ALTER TABLE `business_studies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `business_studies`
--
ALTER TABLE `business_studies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
