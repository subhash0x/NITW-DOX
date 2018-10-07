-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2018 at 12:19 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dox`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `name` char(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`name`, `email`, `password`) VALUES
('subhash', 'sam@gmail.com', 'jack123');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `name` char(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `email`, `password`) VALUES
('ds', 'shvdbk@gad.com', 'bhjvsd'),
('subhash', 'subhash0x@gmail.com', 'ajbsdvb'),
('subhash', 'subhash0x@gmail.com', 'ajbsdvb'),
('jack', 'rick@gamil.com', 'sdfbhjbsd'),
('subhash', 'subhash0x@gmail.com', 'darkworld'),
('jack', 'jack@gmail.com', 'jack'),
('', '', ''),
('test', 'test@gmail.com', 'darkworld'),
('subhash', 'subhash123@gmail.com', 'subhash');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `file` char(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `size` varchar(20) NOT NULL,
  `photo` varchar(2000) NOT NULL,
  `subject` varchar(2000) NOT NULL,
  `branch` varchar(2000) NOT NULL,
  `tmp_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`file`, `type`, `size`, `photo`, `subject`, `branch`, `tmp_name`) VALUES
('', '', '', '11602.jpg', 'PSP', 'MCA', ''),
('', '', '', '13579.jpg', 'FM', 'MCA', ''),
('', '', '', '16472.jpg', 'c++', 'MCA', ''),
('', '', '', '15779.jpg', 'phy', 'B.tech', ''),
('', '', '', 'IMG-20170319-WA0015.jpg', 'xyz', 'M.tech', ''),
('', '', '', 'IMG-20170319-WA0037.jpg', 'MCA', '', ''),
('', '', '', '16373.jpg', 'accounts', 'MBA', ''),
('', '', '', 'IMG-20170319-WA0043.jpg', 'taxes', 'MBA', ''),
('', '', '', '17243.jpg', 'machine learning', 'M.tech', ''),
('', '', '', '17241.jpg', 'web', 'MCA', ''),
('', '', '', '17245.jpg', 'ds', 'MCA', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
