-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2018 at 01:51 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `to-let`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `phone`) VALUES
(1, 'admin', '1212', '01674933265'),
(2, 'admin', '1212', '012345678919'),
(3, 'shofiq', '1234', '012345678919'),
(4, 'shofiq', '1234', ''),
(5, 'shofiq', '1234', ''),
(6, 'marin', '1234', '01819460417');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `sector` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `location` varchar(1000) NOT NULL,
  `datee` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `name`, `phone`, `city`, `sector`, `status`, `location`, `datee`) VALUES
(5, 'to let for 2 ROOM', 'marin', '392648', 'Dhaka', 'Banani', 'Bachalor', 'house 3, road 15', ''),
(6, 'to let for 2 ROOM', 'marin', '39264892', 'Dhaka', 'Banani', 'Bachalor', 'house 3, road 15', '2017-07-28'),
(7, 'wiuiegriuwe', 'saraban', '01767404822', 'Dhaka', 'Banani', 'Family', '13 no', '2017-01-02'),
(8, 'to let for 2 ROOM', 'tahura', '012345678919', 'Dhaka', 'Uttara', 'Bachalor', '3 no house, 15 no road, sector 14', '2017-08-19'),
(15, 'to let for 2 ROOM', 'tahura', '1767404822', 'Dhaka', 'Uttara', 'Family', 'dfdhtdgmrf dgmt', '2018-12-31'),
(14, 'to let for 2 ROOM', 'marin', '01674933265', 'Dhaka', 'Banani', 'Bachalor', 'ytedi7', '2017-01-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
