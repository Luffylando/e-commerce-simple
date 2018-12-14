-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 14, 2018 at 01:47 PM
-- Server version: 5.7.24-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) UNSIGNED NOT NULL,
<<<<<<< HEAD
  `items` json NOT NULL,
=======
  `items` text NOT NULL,
>>>>>>> ec3b81617c1fa3e1d2da7767bb7671fe29658804
  `expire_date` datetime NOT NULL,
  `paid` tinyint(4) NOT NULL DEFAULT '0',
  `shipped` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `items`, `expire_date`, `paid`, `shipped`) VALUES
(137, '[{\"price\": \"15\", \"quantity\": \"1\", \"flower_id\": \"1\", \"flower_name\": \"Sakura\"}, {\"0\": {\"price\": \"15\", \"quantity\": \"1\", \"flower_id\": \"1\", \"flower_name\": \"Sakura\"}, \"price\": \"9\", \"quantity\": \"2\", \"flower_id\": \"2\", \"flower_name\": \"Sunflower\"}, {\"0\": {\"price\": \"15\", \"quantity\": \"1\", \"flower_id\": \"1\", \"flower_name\": \"Sakura\"}, \"1\": {\"0\": {\"price\": \"15\", \"quantity\": \"1\", \"flower_id\": \"1\", \"flower_name\": \"Sakura\"}, \"price\": \"9\", \"quantity\": \"2\", \"flower_id\": \"2\", \"flower_name\": \"Sunflower\"}, \"price\": \"10\", \"quantity\": \"3\", \"flower_id\": \"3\", \"flower_name\": \"Rose\"}]', '2018-12-16 12:52:37', 1, 1),
(138, '[{\"price\": \"15\", \"quantity\": \"1\", \"flower_id\": \"1\", \"flower_name\": \"Sakura\"}]', '2018-12-16 13:51:57', 1, 1),
(139, '[{\"price\": \"10\", \"quantity\": \"4\", \"flower_id\": \"3\", \"flower_name\": \"Rose\"}]', '2018-12-16 14:12:30', 1, 1),
(140, '[{\"price\": \"10\", \"quantity\": \"1\", \"flower_id\": \"3\", \"flower_name\": \"Rose\"}]', '2018-12-19 20:36:58', 0, 0),
(141, '[{\"price\": \"15\", \"quantity\": \"1\", \"flower_id\": \"1\", \"flower_name\": \"Sakura\"}]', '2019-01-13 12:15:39', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `category_parent` smallint(6) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_parent`) VALUES
(1, 'Wedding', 0),
(2, 'Birthday', 0),
(3, 'Specail', 0),
(4, 'Other', 0);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` enum('Admin','Technician','Editor') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `username`, `fullname`, `email`, `password`, `role`) VALUES
(1, 'Itachi', 'Itachi Uchiha', 'itachi@gmail.com', 'sifra123', 'Admin'),
(6, 'Naruto', 'Naruto Uzumaki', 'naruto@gmail.com', 'sifra123', 'Technician'),
(7, 'Wistalia', 'Zen Wistalia', 'zen@gmail.com', 'sifra123', 'Editor');

-- --------------------------------------------------------

--
-- Table structure for table `flowers`
--

CREATE TABLE `flowers` (
  `flowers_id` int(11) NOT NULL,
  `flower_name` varchar(255) NOT NULL,
  `old_price` int(11) NOT NULL,
  `actual_price` int(11) NOT NULL,
  `flower_img` varchar(255) NOT NULL,
  `availability` enum('Unavailable','Available') NOT NULL DEFAULT 'Available',
  `quantity` int(11) NOT NULL DEFAULT '10'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flowers`
--

INSERT INTO `flowers` (`flowers_id`, `flower_name`, `old_price`, `actual_price`, `flower_img`, `availability`, `quantity`) VALUES
(1, 'Sakura', 25, 15, '/e-commerce/Assets/img/flowers/cvet3.jpeg', 'Available', 5),
(2, 'Sunflower', 15, 9, '/e-commerce/Assets/img/flowers/cvet2.jpeg', 'Available', 4),
(3, 'Rose', 20, 10, '/e-commerce/Assets/img/flowers/cvet1.jpeg', 'Available', 10),
(4, 'White-Lily', 20, 8, '/e-commerce/Assets/img/flowers/white-lily.jpeg', 'Available', 10),
(5, 'Blue flower', 25, 15, '/e-commerce/Assets/img/flowers/blues.jpeg', 'Available', 10),
(6, 'Red Garbera', 25, 10, '/e-commerce/Assets/img/flowers/garbera.jpeg', 'Available', 10);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) UNSIGNED NOT NULL,
  `cart_id` int(11) UNSIGNED NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `zipcode` int(11) NOT NULL,
  `items` varchar(255) NOT NULL,
  `sub_total` decimal(10,2) NOT NULL,
  `tax` decimal(10,2) NOT NULL,
  `grand_total` decimal(10,2) NOT NULL,
  `transaction_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `cart_id`, `fullname`, `email`, `country`, `city`, `street`, `zipcode`, `items`, `sub_total`, `tax`, `grand_total`, `transaction_date`) VALUES
(14, 137, 'Sherlock Holmes', 'sher@gmail.com', 'England', 'London', 'Backer 221b', 44000, '6', '63.00', '0.07', '67.41', '2018-11-16 12:53:14'),
(15, 138, 'Auguste Dupin', 'dupin@gmail.com', 'France', 'Paris', 'Saint Germain 71', 40210, '1', '15.00', '0.07', '16.05', '2018-11-16 14:01:25'),
(16, 139, 'Naruto Uzumaki', 'naruto@gmail.com', 'Shinobi World', 'Konoha', 'Konoha Village 25', 9512, '4', '40.00', '0.07', '42.80', '2018-11-16 14:37:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `flowers`
--
ALTER TABLE `flowers`
  ADD PRIMARY KEY (`flowers_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `FK_cartTrans` (`cart_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `flowers`
--
ALTER TABLE `flowers`
  MODIFY `flowers_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `FK_cartTrans` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`cart_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
