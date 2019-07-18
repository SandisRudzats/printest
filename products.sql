-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2019 at 02:27 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `printful`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `created`, `modified`) VALUES
(103, 'Sandis R', 'Test Task Testi Taski Test Task Testi Taski\r\nTest Task Testi Taski Test Task Testi Taski', '2019-07-18 02:08:19', '2019-07-18 00:08:19'),
(104, '123', '123', '2019-07-18 02:08:26', '2019-07-18 00:08:26'),
(105, 'al ba  ba a ba ba', 'al ba  ba a ba baal ba  ba a ba baal ba  ba a ba baal ba  ba a ba baal ba  ba a ba baal ba  ba a ba baal ba  ba a ba baal ba  ba a ba baal ba  ba a ba baal ba  ba a ba baal ba  ba a ba baal ba  ba a ba baal ba  ba a ba baal ba  ba a ba baal ba  ba a ba baal ba  ba a ba baal ba  ba a ba ba\r\n', '2019-07-18 02:08:46', '2019-07-18 00:08:46'),
(106, 'Sandis', 'sdsdsdsdsdsd', '2019-07-18 02:09:09', '2019-07-18 00:09:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
