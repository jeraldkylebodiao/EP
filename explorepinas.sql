-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2018 at 11:33 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `explorepinas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blogs`
--

CREATE TABLE `tbl_blogs` (
  `id` int(11) NOT NULL,
  `tourist_name` varchar(50) NOT NULL,
  `desc_name` text NOT NULL,
  `reg_name` text NOT NULL,
  `prov_name` text NOT NULL,
  `city_name` text NOT NULL,
  `ts_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_blogs`
--

INSERT INTO `tbl_blogs` (`id`, `tourist_name`, `desc_name`, `reg_name`, `prov_name`, `city_name`, `ts_image`) VALUES
(21, 'Tagaytay', 'Tagaytay Descripton', 'Tagaytay Region', 'Tagaytay Province', 'Tagaytay City', 'wew.JPG'),
(29, 'asdsa', 'asdas', 'asdas', 'asdas', 'asdas', 'banaue-slide.jpg'),
(31, '1wewqe', 'qweqwe', 'qweqwe', 'qweqwe', 'qweqwe', 'mount-mayon-volcano-and-ruins-of-cagsaua-church-in-albay-bicol-philippines.jpg'),
(32, 'tytyty', 'tyty', 'ttytyty', 'tytytytyt', 'ytytyty', 'batanes_Islands.jpg'),
(33, 'Boracay', 'Boracay is Good', 'Region mo to', 'Province mo to', 'City mo to', 'Visayas.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `user_role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `user_role_id`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', 1),
(2, 'adminaccount', 'adminaccount@yahoo.com', 'adminaccount', 1),
(29, 'newbiedetected', 'newbiedetected@gmail.com', 'newbiedetected', 2),
(30, 'jheremie10', 'jheremie10@gmail.com', 'jheremie10', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_blogs`
--
ALTER TABLE `tbl_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_blogs`
--
ALTER TABLE `tbl_blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
