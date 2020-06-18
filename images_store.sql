-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 18, 2020 at 07:47 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `images_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `images_collection_table`
--

CREATE TABLE `images_collection_table` (
  `img_id` int(255) NOT NULL COMMENT 'img_id = Id of Image\r\n',
  `img_name` varchar(255) NOT NULL COMMENT 'img_name = Name of Image',
  `img_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images_collection_table`
--

INSERT INTO `images_collection_table` (`img_id`, `img_name`, `img_date`) VALUES
(1, '234486.jpg', '2020-06-18 10:14:01'),
(2, '98068.jpg', '2020-06-18 10:14:19'),
(3, '99469.jpg', '2020-06-18 10:15:02'),
(4, '566868.jpg', '2020-06-18 10:15:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images_collection_table`
--
ALTER TABLE `images_collection_table`
  ADD PRIMARY KEY (`img_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images_collection_table`
--
ALTER TABLE `images_collection_table`
  MODIFY `img_id` int(255) NOT NULL AUTO_INCREMENT COMMENT 'img_id = Id of Image\r\n', AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
