-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2002 at 04:45 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `photo_sharing`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `first_name` varchar(100) NOT NULL,
  `Last_name` varchar(100) NOT NULL,
  `Admin_id` int(100) NOT NULL,
  `e_mail` int(100) NOT NULL,
  `password` int(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `mobile_number` int(100) NOT NULL,
  `pincode` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`first_name`, `Last_name`, `Admin_id`, `e_mail`, `password`, `Address`, `city`, `mobile_number`, `pincode`) VALUES
('mandeep', 'kaur', 2355, 46567, 765444, 'rrgfg', 'btl', 12334, 143505),
('mandeep', 'kaur', 2355, 46567, 765444, 'rrgfg', 'btl', 12334, 143505),
('mandeep', 'kaur', 2355, 46567, 765444, 'rrgfg', 'btl', 12334, 143505),
('mandeep', 'kaur', 2355, 46567, 765444, 'rrgfg', 'btl', 12334, 143505),
('mandeep', 'kaur', 2355, 46567, 765444, 'rrgfg', 'btl', 12334, 143505),
('mandeep', 'kaur', 2355, 46567, 765444, 'rrgfg', 'btl', 12334, 143505),
('mandeep', 'kaur', 2355, 46567, 765444, 'rrgfg', 'btl', 12334, 143505),
('mandeep', 'kaur', 2355, 46567, 765444, 'rrgfg', 'btl', 12334, 143505),
('mandeep', 'kaur', 2355, 46567, 765444, 'rrgfg', 'btl', 12334, 143505),
('mandeep', 'kaur', 2355, 46567, 765444, 'rrgfg', 'btl', 12334, 143505);

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `A_name` varchar(100) NOT NULL,
  `A_id` int(100) NOT NULL,
  `A_date` int(100) NOT NULL,
  `A_prize` int(100) NOT NULL,
  `A_size` int(100) NOT NULL,
  `user_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`A_name`, `A_id`, `A_date`, `A_prize`, `A_size`, `user_id`) VALUES
('nfgf', 1233, 7, 56, 45, 0),
('', 1234, 7, 56, 45, 0),
('', 1235, 7, 56, 45, 0),
('', 1236, 7, 56, 45, 0),
('', 1237, 7, 56, 45, 0),
('', 1238, 7, 56, 45, 0),
('', 1239, 7, 56, 45, 0),
('', 1240, 7, 56, 45, 0),
('gdfgd', 1241, 7, 444, 444, 0),
('sdf', 1242, 7, 34, 34, 0);

-- --------------------------------------------------------

--
-- Table structure for table `make_album`
--

CREATE TABLE `make_album` (
  `M_id` int(100) NOT NULL,
  `P_id` int(100) NOT NULL,
  `A_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `opreater`
--

CREATE TABLE `opreater` (
  `O_id` int(100) NOT NULL,
  `O_name` varchar(100) NOT NULL,
  `O_e-mail` varchar(100) NOT NULL,
  `O_password` int(100) NOT NULL,
  `O_mobile` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `photo_name` varchar(100) NOT NULL,
  `photo_id` int(100) NOT NULL,
  `photo_size` int(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `password`) VALUES
(1, 'sdsd', '123'),
(2, 'sdsd', '123'),
(3, 'sdsd', '123'),
(4, 'sdsd', '123'),
(5, 'sdsd', '123'),
(6, 'sdsd', '123'),
(7, 'sdsd', '123'),
(8, 'sdsd', '123'),
(9, 'sdsd', '123'),
(10, 'sdsd', '123'),
(11, 'sh', '123'),
(12, '', ''),
(13, '', ''),
(14, '', ''),
(15, 'shubham', '123'),
(16, '.shubham.', '.123.'),
(17, '.abc.', '.bbbb.'),
(18, '..', '..'),
(19, '.asdasd.', '.123.'),
(20, '..', '..'),
(21, '..', '..'),
(22, '..', '..'),
(23, '..', '..'),
(24, '..', '..'),
(25, '.mandeep.', '.1324.');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_name` varchar(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `mobile_number` int(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `e_mail` int(100) NOT NULL,
  `password` int(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pincode` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_name`, `user_id`, `mobile_number`, `Address`, `e_mail`, `password`, `city`, `pincode`) VALUES
('sdf', 1, 0, 'ss', 0, 0, 'sdf', 123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`A_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `A_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1243;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
