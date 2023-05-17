-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 15, 2022 at 05:33 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nails_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `userId` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` int(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contactId` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contactId`, `name`, `email`, `phone`) VALUES
(33, 'admin', 'admin@gmail.com', '3658888297'),
(34, 'moon', 'moon@hotmail.com', '2345678923'),
(39, 'mia', 'mia@gmail.com', '3333333333'),
(40, 'mia', 'mia@gmail.com', '3333333333'),
(41, 'claus', 'claus@gmail.com', '8790918318'),
(42, 'claus', 'claus@gmail.com', '8790918318'),
(43, 'claus', 'claus@gmail.com', '8790918318'),
(44, 'claus', 'claus@gmail.com', '8790918318'),
(45, 'one', 'one@gmail.com', '1234567890'),
(46, 'Hoang lan anh nguyen', 'hoanglananh.nguyen@gmail.com', '3658888297'),
(47, 'Hoang lan anh nguyen', 'hoanglananh.nguyen@gmail.com', '3658888297'),
(48, 'Hoang lan anh nguyen', 'hoanglananh.nguyen@gmail.com', '3658888297'),
(49, 'Hoang lan anh nguyen', 'hoanglananh.nguyen@gmail.com', '3658888297'),
(50, 'Hoang lan anh nguyen', 'Nghoangl@sheridancollege.ca', '3658888297'),
(51, 'Hoang lan anh nguyen', 'hoanglananh.nguyen@gmail.com', '3658888297'),
(52, '', '', ''),
(53, 'Hoang lan anh nguyen', 'hoanglananh.nguyen@gmail.com', '3658888297'),
(54, 'Hoang lan anh nguyen', 'hoanglananh.nguyen@gmail.com', '3658888297'),
(55, '', '', ''),
(56, '', '', ''),
(57, '', '', ''),
(58, '', '', ''),
(59, '', '', ''),
(60, 'Hoang lan anh nguyen', 'hoanglananh.nguyen@gmail.com', '3658888297'),
(61, '', '', ''),
(62, '', '', ''),
(63, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `imageId` int(11) NOT NULL,
  `imageName` varchar(300) NOT NULL,
  `userId` varchar(200) NOT NULL,
  `shape` varchar(300) NOT NULL,
  `type` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`imageId`, `imageName`, `userId`, `shape`, `type`) VALUES
(38, 'nail1.png', '24', 'square', 'gel'),
(45, 'nail2.png', '28', 'round', 'gel'),
(51, 'nail4.png', '24', 'round', 'gel'),
(52, 'nail5.png', '24', 'almond', 'gel'),
(55, 'nail6.png', '25', 'square', 'gel'),
(56, 'nail7.png', '25', 'almond', 'gel'),
(58, 'nail8.png', '19', 'square', 'gel'),
(60, 'nail9.png', '24', 'round', 'gel'),
(61, 'nail10.png', '19', 'almond', 'gel'),
(62, 'nail11.png', '19', 'almond', 'shellac');

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `serviceId` int(11) NOT NULL,
  `service` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`serviceId`, `service`, `price`) VALUES
(7, 'Luxury Medicure', '$99'),
(8, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `email`, `username`, `password`, `role`) VALUES
(2, 'hoho@hotmail.com', 'hoho123', 'hoho456', ''),
(18, 'admin@gmail.com', 'admin', 'admin123', 'admin'),
(19, 'bear@yahoo.com', 'bear', 'bear123', ''),
(24, 'two@gmail.com', 'two', '111', ''),
(25, 'test@gmail.com', 'test', '123', ''),
(26, 'hoanglananh.nguyen@gmail.com', 'superman1234', '111', ''),
(27, 'hoanglananh.nguyen@gmail.com', 'superman', '123rg', ''),
(28, 'max@gmail.com', 'max', 'max123', ''),
(29, 'Nghoangl@sheridancollege.ca', 'santa', '111', ''),
(30, 'Nghoangl@sheridancollege.ca', 'santa', '111', ''),
(31, 'Nghoangl@sheridancollege.ca', 'santa', '111', ''),
(32, 'Nghoangl@sheridancollege.ca', 'kitty', 'kitty123', ''),
(33, 'Nghoangl@sheridancollege.ca', 'kitty', 'kitty123', ''),
(34, 'Nghoangl@sheridancollege.ca', 'kitty', 'kitty123', ''),
(35, 'Nghoangl@sheridancollege.ca', 'kitty', 'kitty123', ''),
(36, 'Nghoangl@sheridancollege.ca', 'kitty', 'kitty123', ''),
(37, 'hey@gmail.com', 'hey', 'hey', ''),
(38, 'hey@gmail.com', 'hey', 'heyhey', ''),
(39, 'hey@gmail.com', 'hey', 'heyhey', ''),
(40, 'hey@gmail.com', 'hey', 'heyhey', ''),
(41, 'alo@hotmail.com', 'alo', 'alo', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contactId`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`imageId`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`serviceId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contactId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `imageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `serviceId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
