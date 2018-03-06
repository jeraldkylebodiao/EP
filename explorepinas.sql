-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2018 at 09:28 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `editors`
--

CREATE TABLE `editors` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blogs`
--

CREATE TABLE `tbl_blogs` (
  `id` int(11) NOT NULL,
  `tourist_name` varchar(255) NOT NULL,
  `desc_name` varchar(255) NOT NULL,
  `reg_name` varchar(255) NOT NULL,
  `prov_name` varchar(255) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `ts_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_blogs`
--

INSERT INTO `tbl_blogs` (`id`, `tourist_name`, `desc_name`, `reg_name`, `prov_name`, `city_name`, `ts_image`) VALUES
(1, 'UPDATED DATA', 'UPDATED DATA', 'UPDATED DATA', 'UPDATED DATA', 'UPDATED DATA', 'requirements.jpg'),
(3, 'EDITED', 'EDITED', 'EDITED', 'EDITED', 'EDITED', '4474130-elizabeth-olsen-wallpapers.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `user_role_id`) VALUES
(1, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'newbiedetected', 'newbiedetected@gmail.com', '202cb962ac59075b964b07152d234b70', 2),
(3, 'newaccount', 'newaccount@gmail.com', '202cb962ac59075b964b07152d234b70', 2),
(5, 'jovenaccount', 'jovenaccount@gmail.com', '202cb962ac59075b964b07152d234b70', 2),
(6, 'jheremie10', 'jheremie10@gmail.com', '202cb962ac59075b964b07152d234b70', 2),
(7, 'nicail', 'nicail@yahoo.com', '202cb962ac59075b964b07152d234b70', 2),
(8, 'kyle12', 'kyle@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', 2),
(9, '11', '11@gmail.com', '6512bd43d9caa6e02c990b0a82652dca', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_posts`
--

CREATE TABLE `user_posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `post_name` varchar(255) NOT NULL,
  `post_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_posts`
--

INSERT INTO `user_posts` (`id`, `title`, `body`, `post_name`, `post_image`) VALUES
(2, 'NEW POST', 'NEW BODY asdasdasdsadadas', 'newaccount', 'thumb-1920-468713.jpg'),
(40, 'Discount?', '??', 'kyle12', '_MG_0408.JPG'),
(41, 'Sunflower', 'wew', 'kyle12', '_MG_0563.JPG'),
(42, 'Hearts day', '!!', '11', '_MG_0743.JPG'),
(43, 'balloon of Hearrts!!', 'All over the city filled with the color of red', '11', '_MG_0534.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `editors`
--
ALTER TABLE `editors`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `user_posts`
--
ALTER TABLE `user_posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `editors`
--
ALTER TABLE `editors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_blogs`
--
ALTER TABLE `tbl_blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_posts`
--
ALTER TABLE `user_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
