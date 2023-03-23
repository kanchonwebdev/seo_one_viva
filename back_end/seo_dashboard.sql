-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2023 at 06:24 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seo_dashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `info_tbl`
--

CREATE TABLE `info_tbl` (
  `id` int(11) NOT NULL,
  `task_name` varchar(55) NOT NULL,
  `task_img` varchar(55) NOT NULL,
  `info_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `info_tbl`
--

INSERT INTO `info_tbl` (`id`, `task_name`, `task_img`, `info_id`) VALUES
(1, 'Web Design', 'Screenshot_7.png', '1'),
(2, 'Graphic Design task', 'fb-banner.png', '1'),
(3, 'Web Design', 'jersey3.jpg', '11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_tbl`
--
ALTER TABLE `info_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info_tbl`
--
ALTER TABLE `info_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
