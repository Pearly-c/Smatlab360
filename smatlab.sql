-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2021 at 02:51 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smatlab`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `passwords` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `affcode` varchar(255) NOT NULL,
  `refBy` varchar(255) NOT NULL,
  `balance` varchar(255) NOT NULL,
  `picimage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `username`, `passwords`, `level`, `affcode`, `refBy`, `balance`, `picimage`) VALUES
(1, 'Basil', 'Aikabeli', 'basilaik@gmail.com', 'basilisk12', '8ff27c5be43e7c857f040e2834bdbd0d', '', '718764', '', '', ''),
(2, 'Russell', 'Markerel', 'ruxell4real@gmail.com', 'ruxell4real', '8ff27c5be43e7c857f040e2834bdbd0d', 'One', '693067', '718764', '', '0023ae6cf36912acdbd42e.jpg'),
(3, 'Elizabeth', 'Okaome', 'lisaokaome@gmail.com', 'lisa12', '8ff27c5be43e7c857f040e2834bdbd0d', 'One', '782711', '718764', '', '3.png'),
(4, 'Umeozulu', 'tochukwu', 'basilaik@gmail.com', 'toch12', '8ff27c5be43e7c857f040e2834bdbd0d', 'One', '187268', '693067', '', 'huiliangshao___BZFFAGPHS4R___.jpg'),
(5, 'Dennis', 'Ekhorutomwen', 'denis@gmail.com', 'denis12', '8ff27c5be43e7c857f040e2834bdbd0d', 'One', '201573', '', '', '1928B2CF-1AE2-4B87-AB8B-E5A82B04BFF0.jpeg'),
(6, 'Maduka', 'Uche', 'madu12@gmail.com', 'madu12', '8ff27c5be43e7c857f040e2834bdbd0d', 'One', '383616', '718764', '40,000', '0023ae6cf36912acdbd42e.jpg'),
(7, 'vincent', 'andrew', 'vincent@gmail.com', 'vincent181', 'be5d5d37542d75f93a87094459f76678', 'Starter', '932617', '', '', '957F8C03-BABD-4B91-ABCA-4E7EFBBC95B5.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
