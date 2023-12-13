-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2022 at 05:52 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shadi`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `Id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`Id`, `category`, `description`) VALUES
(1, 'Men\'s Collection', 'This category is for men collection'),
(2, 'Women\'s Collection', 'This is collectin for the Women\'s.'),
(3, 'Events', 'This is collection for events.');

-- --------------------------------------------------------

--
-- Table structure for table `favirate`
--

CREATE TABLE `favirate` (
  `fav_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `Id` int(11) NOT NULL,
  `imageurl` text NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`Id`, `imageurl`, `product_id`) VALUES
(5, 'PIMG-6342edea8c3803.38389108.jpg', 4),
(6, 'PIMG-6342edead2dd94.61783246.jpg', 4),
(9, 'PIMG-6342fcaa92b901.95839190.jpg', 6),
(10, 'PIMG-6342fcaab8b1a7.15053629.jpg', 6),
(15, 'PIMG-6343145e49bdb1.21748941.jpg', 9),
(16, 'PIMG-6343145f312dd3.56846891.jpg', 9),
(17, 'PIMG-63431658eb35a6.70716887.jpg', 10),
(18, 'PIMG-6343165914bd75.26996584.jpg', 10),
(19, 'PIMG-634bf0d0b7b921.07310465.jpg', 11),
(20, 'PIMG-634bf1040d9a67.46320691.jpg', 12),
(21, 'PIMG-634bf22630d5f1.90339559.jpg', 13),
(22, 'PIMG-634bf2c01668a5.76391814.jpg', 14),
(23, 'PIMG-634bf2e3626222.34699896.jpg', 15),
(24, 'PIMG-634bf31f2e0841.54303730.jpg', 16),
(25, 'PIMG-634bf342c3cfa9.03713474.jpg', 17),
(26, 'PIMG-634bf37a003493.80588379.png', 18),
(27, 'PIMG-634bf3ad94ab38.32690420.jpg', 19),
(28, 'PIMG-634bf3cfd39dd7.32659646.jpg', 20),
(29, 'PIMG-634bf414e66112.91346041.jpg', 21),
(30, 'PIMG-634bf465e5ef57.58484977.jpg', 22),
(31, 'PIMG-634bf4d33a2439.10205463.jpg', 23),
(32, 'PIMG-634bf4f638b8a2.85470372.jpg', 24),
(33, 'PIMG-634bf526aed7d6.87487890.jpeg', 25),
(34, 'PIMG-634bf5401e59b6.02585566.jpeg', 26),
(35, 'PIMG-634bf558dd2a03.40100029.jpeg', 27),
(36, 'PIMG-634bf5ae0f5385.41598081.jpeg', 28),
(37, 'PIMG-634bf5e43b4849.12347563.jpg', 29),
(38, 'PIMG-634bf61cab7610.03857843.jpeg', 30),
(39, 'PIMG-634bf651f3b7d3.83226983.jpg', 31),
(40, 'PIMG-634bf69e480c90.30915109.jpg', 32),
(41, 'PIMG-634bf6d8bcc6e5.85026384.png', 33),
(42, 'PIMG-634bf6f60f5ee9.31463847.jpg', 34),
(43, 'PIMG-634bf726519c40.78341092.jpg', 35),
(44, 'PIMG-634bf7417741f8.87025427.png', 36),
(45, 'PIMG-634bf78700b7c1.70062620.jpg', 37),
(46, 'PIMG-634bf7c389f878.59441667.jpg', 38),
(47, 'PIMG-634bf802737749.09637297.jpg', 39),
(48, 'PIMG-634bf8276bf096.43926020.jpg', 40),
(49, 'PIMG-634bf877873219.17894017.jpg', 41),
(50, 'PIMG-634bf8bc254109.59609730.jpg', 42),
(51, 'PIMG-634bf8d85df333.18765824.jpg', 43);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `products` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `address` text NOT NULL,
  `total_price` int(11) NOT NULL,
  `pay_mode` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `no_of_installment` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Id`, `title`, `description`, `price`, `category`) VALUES
(6, 'Events Dress', 'This description', 300, 4),
(9, 'Shirt', 'this is description', 2000, 5),
(10, 'men shirt', 'description', 1500, 5),
(11, 'Shirwani With Shawl', 'Shirwani With Shawl', 8000, 1),
(12, 'Shirwani', 'Shirwani ', 5500, 1),
(13, 'Ring', 'Gold Ring', 20000, 21),
(14, 'Black Kurta', 'This is Description', 7000, 6),
(15, 'Waist Coat', 'This is Description', 7500, 6),
(16, 'White Kurta', 'This is Description', 6500, 7),
(17, 'Half White', 'This is Description', 7800, 7),
(18, 'Blue Suit', 'This is Description', 12500, 8),
(19, 'Cream Color', 'This is Description', 14000, 8),
(20, 'Maron', 'This is Description', 13500, 8),
(21, 'Khussa', 'This is Description', 3500, 9),
(22, 'White Khussa', 'This is Description', 4300, 9),
(23, 'Fraq', 'This is Description', 13500, 3),
(24, 'Lehnga', 'This is Description', 24500, 3),
(25, 'Lengha', 'This is Description', 65000, 3),
(26, 'Red Dress', 'This is Description', 45700, 3),
(27, 'Green', 'This is Description', 48700, 3),
(28, 'Bridal Dress', 'This is Description', 48000, 3),
(29, 'Jacket', 'This is Description', 8900, 10),
(30, 'Kurta', 'This is Description', 5800, 11),
(31, 'High hills', 'This is Description', 4500, 12),
(32, 'Mehndi Dress', 'This is Description', 15000, 13),
(33, 'Mayoo D1', 'This is Description', 22000, 14),
(34, 'Mayoo D2', 'This is Description', 24600, 14),
(35, 'Dholki D1', 'This is Description', 34000, 15),
(36, 'Dholki D2', 'This is Description', 33500, 15),
(37, 'Bharat Dress', 'This is Description', 29000, 16),
(38, 'Valima Dress', 'This is Description', 19000, 17),
(39, 'Bridal Showar', 'This is Description', 13400, 18),
(40, 'D2', 'This is Description', 14560, 18),
(41, 'Engagement', 'This is Description', 14800, 19),
(42, 'Nikkah D1', 'This is Description', 12000, 20),
(43, 'D2', 'This is Description', 19000, 20);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `Id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`Id`, `title`) VALUES
(1, 'user'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `subcategorios`
--

CREATE TABLE `subcategorios` (
  `Id` int(11) NOT NULL,
  `subcategory` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategorios`
--

INSERT INTO `subcategorios` (`Id`, `subcategory`, `description`, `cat_id`) VALUES
(1, 'Groom', 'This si desctiption of grrom', 1),
(3, 'Bride', 'This is description of bride', 2),
(6, 'Winter', 'Winter ', 1),
(7, 'Summer', 'Summer', 1),
(8, 'Three Piece Suit', 'Three Piece Suit', 1),
(9, 'Shoes', 'Shoes', 1),
(10, 'Winter', 'Winter', 2),
(11, 'Summer', 'Summer', 2),
(12, 'Shoes', 'Shoes', 2),
(13, 'Mahendi', 'Shoes', 3),
(14, 'Mayoo', 'mayoo', 3),
(15, 'Dholki', 'this is sub category', 3),
(16, 'Barat', 'this is sub category', 3),
(17, 'Nikkah', 'This is sub category', 3),
(18, 'Bridal Shower', 'this is sub category', 3),
(19, 'Engagement', 'this is sub category', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `username`, `email`, `password`, `role_id`) VALUES
(19, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 2),
(24, 'hammadawan', 'hammadawan9316@gmail.com', 'baa182f1f488bc93d76d8c0da382f6ee', 1),
(26, 'Ali', 'ali@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(27, 'john', 'johnrider3040@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(28, 'Ali', 'syedaliabbas1177@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(29, 'alinaqvi', 'syedaliabbas1177@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(30, 'Test', 'testuser@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Fk_userid` (`user_id`),
  ADD KEY `product_id` (`product_id`) USING BTREE;

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `favirate`
--
ALTER TABLE `favirate`
  ADD PRIMARY KEY (`fav_id`),
  ADD KEY `Fk_productTofavirate` (`product_id`),
  ADD KEY `FK_rider_id_favirate` (`user_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_order_user` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `subcategorios`
--
ALTER TABLE `subcategorios`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `fk_subcat_to_cat` (`cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `role_fk` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `favirate`
--
ALTER TABLE `favirate`
  MODIFY `fav_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subcategorios`
--
ALTER TABLE `subcategorios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `Fk_product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`Id`),
  ADD CONSTRAINT `Fk_userid` FOREIGN KEY (`user_id`) REFERENCES `users` (`Id`);

--
-- Constraints for table `favirate`
--
ALTER TABLE `favirate`
  ADD CONSTRAINT `FK_rider_id_favirate` FOREIGN KEY (`user_id`) REFERENCES `users` (`Id`),
  ADD CONSTRAINT `Fk_productTofavirate` FOREIGN KEY (`product_id`) REFERENCES `products` (`Id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_order_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`Id`);

--
-- Constraints for table `subcategorios`
--
ALTER TABLE `subcategorios`
  ADD CONSTRAINT `fk_subcat_to_cat` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`Id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `role_fk` FOREIGN KEY (`role_id`) REFERENCES `roles` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
