-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2018 at 04:17 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdev`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(40) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('adreesahmad007@gmail.com', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(10) NOT NULL,
  `verify` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `city` varchar(15) NOT NULL,
  `title` varchar(18) NOT NULL,
  `category` varchar(10) NOT NULL,
  `price` varchar(6) NOT NULL,
  `description` varchar(200) NOT NULL,
  `ad_date` datetime(5) NOT NULL,
  `image` varchar(20) NOT NULL,
  `image2` varchar(20) NOT NULL,
  `image3` varchar(20) NOT NULL,
  `image4` varchar(20) NOT NULL,
  `image5` varchar(20) NOT NULL,
  `image6` varchar(20) NOT NULL,
  `video_title` varchar(20) NOT NULL,
  `video_location` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `verify`, `name`, `phone`, `location`, `city`, `title`, `category`, `price`, `description`, `ad_date`, `image`, `image2`, `image3`, `image4`, `image5`, `image6`, `video_title`, `video_location`) VALUES
(4, '', '', '', 'Punjab', 'sadiq', '', 'Mobil', '', '', '2018-09-17 05:43:38.00000', '', '', '', '', '', '', '', ''),
(5, '', 'ali', '03009670103', 'Sindh', 'sakha', 'samsung c7', 'Mobil', '20000', '10/10 condition', '2018-09-17 07:26:50.00000', 'c7.jpg', 'login.png', '', '', '', '', '', ''),
(9, 'Verified', '', '', '', '', '', '', '', '', '2018-09-23 06:20:22.00000', '', '', '', '', '', '', '', ''),
(10, 'Verified', 'adrees ahmad', '03082400107', 'Punjab', 'Rahim Yar Khan', 'oppo', 'Mobile', '40000', 'in normal condition', '2018-09-23 06:24:23.00000', 'back.jpg', '', '', '', '', '', '4872.mp4', '576685303.mp4'),
(11, 'Verified', 'adrees ahmad', '03082400107', 'Punjab', 'Rahim Yar Khan', 'oppo', 'Mobile', '40000', 'kkkkkkkkkkkkkkkkkkkkk', '2018-09-23 06:30:06.00000', 'back.jpg', '', '', '', '', '', '', ''),
(17, 'Verified', '', '', '', '', '', '', '', 'ffgfdgsfdgfsdg', '2018-09-23 06:51:40.00000', 'back.jpg', 'back.jpg', 'back.jpg', 'back.jpg', 'back.jpg', 'back.jpg', '4872.mp4', '908165973.mp4'),
(18, 'Verified', '', '', '', '', '', '', '', '', '2018-09-23 06:53:49.00000', '13.jpg', '', '', 'login.jpg', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catname` varchar(30) NOT NULL,
  `cat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catname`, `cat`) VALUES
('samsung', 'Mobile'),
('Nokia', 'Mobile'),
('Motorola', 'Mobile'),
('Iphone', 'Mobile'),
('Property', 'Property'),
('Shop', 'Property'),
('Plot', 'Property'),
('Apartment', 'Property'),
('Toyota', 'vehicles'),
('Civic', 'vehicles'),
('Suzuki', 'vehicles'),
('Honda', 'vehicles');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `msg` varchar(30) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `name`, `msg`, `date`) VALUES
(34, 'adrees', 'hello every one', '2018-09-17 04:00:11'),
(35, 'adrees', 'hello every one', '2018-09-17 04:00:18'),
(36, 'adrees', 'hello every one', '2018-09-17 04:00:54'),
(37, 'adrees', 'hello every one', '2018-09-17 04:01:45'),
(38, 'adrees', 'hello every one', '2018-09-17 04:02:16'),
(39, 'adrees', 'hello every one', '2018-09-17 04:02:28'),
(42, '', 'aaa', '2018-09-23 11:28:06'),
(43, '', 'aaa', '2018-09-23 11:28:27'),
(44, '', 'aaa', '2018-09-23 01:49:13'),
(45, '', 'hello', '2018-09-23 02:52:07'),
(46, '', 'khan', '2018-09-23 05:53:57');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `cityname` varchar(20) NOT NULL,
  `countryid` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`cityname`, `countryid`) VALUES
('Rahim Yar Khan', 'Punjab'),
('sadiq Abad', 'Punjab'),
('Liaqat Pur', 'Punjab'),
('BWp', 'Punjab'),
('Ghotki', 'Sindh'),
('sakhar', 'Sindh'),
('Dadu', 'Sindh'),
('Peshawar', 'KPK'),
('Chitral', 'KPK');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(20) NOT NULL,
  `image` varchar(40) NOT NULL,
  `uploaded_on` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `uploaded_on`) VALUES
(25, 'Array', '2018-08-05 18:17:35.000000');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `message` text NOT NULL,
  `date-time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender`, `receiver`, `message`, `date-time`) VALUES
(1, 'a', 'b', 'Hello Pakistan', '2018-01-30 16:07:56'),
(2, 'c', 'd', 'Send by c', '2018-01-30 16:07:56'),
(3, 'aa', '', 'hhhh', '2018-01-30 16:37:14');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `confirm_password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`first_name`, `last_name`, `email`, `password`, `confirm_password`) VALUES
('adrees', 'ahmad', 'adreesahmad007@gmail.com', 'adrees', 'adrees'),
('adrees', 'ahmad', '', '', ''),
('haris', 'mukhtar', 'haris.ryk88@gmail.com', '123456', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
