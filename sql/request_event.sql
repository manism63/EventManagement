-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2018 at 11:57 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `request_event`
--

CREATE TABLE `request_event` (
  `email_id` varchar(100) COLLATE ascii_bin NOT NULL,
  `request_desc` varchar(500) COLLATE ascii_bin NOT NULL,
  `request_id` int(11) NOT NULL,
  `curr_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Dumping data for table `request_event`
--

INSERT INTO `request_event` (`email_id`, `request_desc`, `request_id`, `curr_date`) VALUES
('', 'asdasdasdasddasdasd', 1, '2018-04-21 21:57:19'),
('', 'fsdfsdfsfdsdfsdf', 2, '2018-04-21 21:57:19'),
('cat', 'fsdfsdfs', 3, '2018-04-21 21:57:19'),
('jainanur@iu.edu', 'asdasd', 4, '2018-04-21 21:57:19'),
('jainanur@iu.edu', 'asdasdasdasdasd', 5, '2018-04-21 21:57:19'),
('jainanur@iu.edu', 'sadasdasdadas', 6, '2018-04-21 21:57:19'),
('jainanur@iu.edu', 'asdasdasdasdasd', 7, '2018-04-21 21:57:19'),
('jainanur@iu.edu', 'sadasdasasdasdasd', 8, '2018-04-21 21:57:19'),
('jainanur@iu.edu', 'sdassdasdasdasdasdasd', 9, '2018-04-21 21:57:19'),
('jainanur@iu.edu', 'asdasdasdasdasd', 10, '2018-04-21 21:57:19'),
('jainanur@iu.edu', 'asdasdasdasdasdassdasdasd', 11, '2018-04-21 21:57:19'),
('jainanur@iu.edu', 'asdasdassdasdasd', 12, '2018-04-21 21:57:19'),
('jainanur@iu.edu', 'dasdasdas', 13, '2018-04-21 21:57:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `request_event`
--
ALTER TABLE `request_event`
  ADD PRIMARY KEY (`request_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `request_event`
--
ALTER TABLE `request_event`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
