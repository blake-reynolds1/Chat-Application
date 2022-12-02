-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 02, 2022 at 01:04 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 236, 512, 'hi'),
(2, 236, 512, 'hi'),
(3, 236, 512, 'hiiii'),
(4, 236, 512, 'hh'),
(5, 236, 512, 'hi'),
(6, 728, 512, 'hello'),
(7, 512, 512, 'hi'),
(8, 728, 236, 'aaaa'),
(9, 236, 236, 'aaa'),
(10, 728, 728, 'hey'),
(11, 728, 236, 'hello'),
(12, 236, 728, 'hello'),
(13, 728, 236, 'YOOO'),
(14, 728, 236, 'asdsdfghjksadfghjkdskfbkjlasdnflksdklmfkmsdkfksdllf\'msdfkls'),
(15, 728, 728, 'asdfasdf'),
(16, 236, 728, 'asdfadsf'),
(17, 728, 236, 'hey'),
(18, 728, 236, 'hey'),
(19, 728, 236, 'hey'),
(20, 728, 236, 'hey'),
(21, 728, 236, 'hi'),
(22, 728, 236, 'hwey'),
(23, 728, 236, 'hi'),
(24, 236, 728, 'hey'),
(25, 728, 657, 'hey'),
(26, 657, 728, 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `unique_id` int(200) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(400) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(236, 'hi', 'hello', 'hi@gmail.com', 'gi', '1669423700Pisanello_024b.jpg', 'Offline now'),
(512, 'Jan', 'Huss', 'huss@gmail.com', 'Jan', '1669595491jan hussss 2.jpg', 'Offline now'),
(657, 'Leo', 'Messi', 'Messi@gmail.com', 'Messi', '1669845658jan hussss 2.jpg', 'Offline now'),
(728, 'Blake', 'Reynolds', 'asdf@gmail.com', 'asdf', '1669595443alex.jpg', 'Offline now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`unique_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
