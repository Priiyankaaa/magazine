-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 03, 2018 at 11:14 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Magazine`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_username` varchar(25) NOT NULL,
  `a_password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_username`, `a_password`) VALUES
(1, 'PRIYANKA', 'PRI');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
(11, 'BUSINESS'),
(12, 'FASHION'),
(13, 'SPORTS'),
(14, 'TRAVEL&LIFESTYLE'),
(15, 'TRAVEL'),
(16, 'FOOD'),
(17, 'BEAUTY');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `log_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `action` varchar(20) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`log_id`, `m_id`, `action`, `date`) VALUES
(9, 31, 'DELETED', '2018-11-17 01:30:13'),
(11, 6, 'DELETED', '2018-11-17 09:33:43'),
(12, 7, 'INSERTED', '2018-11-18 10:36:35'),
(13, 8, 'INSERTED', '2018-11-18 10:36:35'),
(14, 9, 'INSERTED', '2018-11-18 10:36:35'),
(15, 11, 'INSERTED', '2018-11-18 10:47:09'),
(16, 11, 'DELETED', '2018-11-18 11:52:08'),
(17, 7, 'DELETED', '2018-11-18 11:52:38'),
(18, 8, 'DELETED', '2018-11-18 11:52:48'),
(19, 9, 'DELETED', '2018-11-18 11:52:50'),
(22, 5, 'DELETED', '2018-11-18 11:53:43'),
(23, 6, 'INSERTED', '2018-11-18 11:54:36'),
(24, 7, 'INSERTED', '2018-11-18 11:55:26'),
(25, 8, 'INSERTED', '2018-11-18 11:56:21'),
(26, 8, 'DELETED', '2018-11-18 11:56:42'),
(27, 7, 'DELETED', '2018-11-18 11:56:45'),
(28, 6, 'DELETED', '2018-11-18 22:10:34'),
(29, 6, 'INSERTED', '2018-11-18 22:11:01'),
(30, 6, 'DELETED', '2018-11-19 14:12:27');

-- --------------------------------------------------------

--
-- Table structure for table `magazine`
--

CREATE TABLE `magazine` (
  `mag_id` int(11) NOT NULL,
  `mag_name` varchar(25) NOT NULL,
  `pub_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `mag_price` int(11) NOT NULL,
  `mag_img` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `magazine`
--

INSERT INTO `magazine` (`mag_id`, `mag_name`, `pub_id`, `cat_id`, `mag_price`, `mag_img`) VALUES
(1, 'VOGUE', 2, 12, 220, 'vg.png'),
(2, 'Travel+Leisure', 1, 15, 170, 'TL1.png'),
(3, 'bon appetite', 1, 16, 320, 'ba.png'),
(4, 'ESPN', 2, 13, 170, 'ESPN.png'),
(5, 'Travel+Leisure \'17', 1, 15, 170, 'image1.png');

--
-- Triggers `magazine`
--
DELIMITER $$
CREATE TRIGGER `delete log` BEFORE DELETE ON `magazine` FOR EACH ROW insert into logs values(null,OLD.mag_id,"DELETED",NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insert log` AFTER INSERT ON `magazine` FOR EACH ROW insert into logs values(null,NEW.mag_id,'INSERTED',NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `pub_id` int(11) NOT NULL,
  `pub_name` varchar(25) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`pub_id`, `pub_name`, `address`) VALUES
(1, 'Conde Nasts\'s ', 'U.S.A'),
(2, 'Time Inc.\'s', 'Asia'),
(3, 'DC Thomson', 'Scottland'),
(4, 'Meredith Corp.', 'U.S.A');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `r_id` int(11) NOT NULL,
  `mag_id` int(11) NOT NULL,
  `rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`r_id`, `mag_id`, `rate`) VALUES
(1, 1, 5),
(2, 4, 4),
(3, 2, 0),
(6, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'Nisha', '123', 'nisha@gmail.com'),
(2, 'Bob', 'bob', 'bobgmail.com'),
(3, 'Mamatha', '12345', 'mamtha@gmail.com'),
(4, 'Monica', '123', 'monica@gmail.com'),
(5, 'JAGADISH', '123', 'jagadish@gmail.com'),
(6, 'MOHITU', 'MOHITU', 'mohitu@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `magazine`
--
ALTER TABLE `magazine`
  ADD PRIMARY KEY (`mag_id`),
  ADD KEY `pub_name` (`pub_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`pub_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `mag_id` (`mag_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `magazine`
--
ALTER TABLE `magazine`
  MODIFY `mag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `pub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `magazine`
--
ALTER TABLE `magazine`
  ADD CONSTRAINT `magazine_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`cat_id`),
  ADD CONSTRAINT `magazine_ibfk_2` FOREIGN KEY (`pub_id`) REFERENCES `publisher` (`pub_id`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`mag_id`) REFERENCES `magazine` (`mag_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
