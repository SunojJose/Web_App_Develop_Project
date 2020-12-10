-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2020 at 09:32 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
-- 

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double(10,2) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `memory` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `list_price` double(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `featured` int(11) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brand`, `model`, `category`, `image`, `color`, `memory`, `price`, `list_price`, `quantity`, `featured`, `description`) VALUES
(1, 'Apple', 'iPhone se', 'Smart Phone', './images/products/se.jpg', 'black', '64 GB', 440.85, 490.85, 2, 0, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(2, 'Apple', 'iPhone se', 'Smart Phone', './images/products/se.jpg', 'silver', '64 GB', 440.85, 490.85, 1, 0, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(3, 'Apple', 'iPhone7', 'Smart Phone', './images/products/i7.jpg', 'black', '128 GB', 249.00, 299.00, 1, 0, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(4, 'Apple', 'iPhone7', 'Smart Phone', './images/products/i7.jpg', 'space grey', '128 GB', 249.00, 299.00, 2, 0, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(5, 'Apple', 'iPhone X', 'Smart Phone', './images/products/x.jpg', 'white', '256 GB', 799.99, 849.99, 3, 0, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(6, 'Apple', 'iPhone XR', 'Smart Phone', './images/products/xr.jpg', 'grey', '64 GB', 599.05, 599.05, 4, 1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(7, 'Apple', 'iPhone XR', 'Smart Phone', './images/products/xr.jpg', 'blue', '128 GB', 874.00, 874.00, 1, 1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(8, 'Apple', 'iPhone XR', 'Smart Phone', './images/products/xr.jpg', 'space grey', '64 GB', 599.05, 599.05, 5, 1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(9, 'Apple', 'iPhone XS', 'Smart Phone', './images/products/xs.jpg', 'black', '256 GB', 1326.97, 1326.97, 2, 1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(10, 'Apple', 'iPhone XS', 'Smart Phone', './images/products/xs.jpg', 'gold', '256 GB', 1326.97, 1326.97, 5, 1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(11, 'Apple', 'iPhone XS', 'Smart Phone', './images/products/xs.jpg', 'white', '64 GB', 587.01, 587.01, 3, 1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(12, 'Apple', 'iPhone XS', 'Smart Phone', './images/products/xs.jpg', 'silver', '64 GB', 587.01, 587.01, 2, 1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(13, 'Apple', 'iPhone XS Max', 'Smart Phone', './images/products/XS-Max.png', 'gold', '64 GB', 778.00, 778.00, 1, 1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(14, 'Apple', 'iPhone XS Max', 'Smart Phone', './images/products/XS-Max.png', 'silver', '256 GB', 1326.49, 1326.49, 3, 1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(15, 'Apple', 'iPhone 11', 'Smart Phone', './images/products/iphone11.jpg', 'midnight green', '64 GB', 697.00, 697.00, 6, 1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(16, 'Apple', 'iPhone 11', 'Smart Phone', './images/products/iphone11.jpg', 'black', '64 GB', 647.00, 647.00, 3, 1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(17, 'Apple', 'iPhone 11', 'Smart Phone', './images/products/iphone11.jpg', 'gold', '64 Gb', 697.00, 697.00, 4, 1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(18, 'Apple', 'iPhone 11', 'Smart Phone', './images/products/iphone11.jpg', 'silver', '64 GB', 647.00, 697.00, 6, 0, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(19, 'Apple', 'iPhone 11 Pro', 'Smart Phone', './images/products/iphone11.jpg', 'gold', '64 Gb', 1079.00, 1079.00, 4, 1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(20, 'Apple', 'iPhone 11 Pro', 'Smart Phone', './images/products/iphone11.jpg', 'silver', '64 GB', 1079.00, 1079.00, 9, 1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(21, 'Apple', 'iPhone 11 Pro Max', 'Smart Phone', './images/products/iphone11.jpg', 'midnight green', '64 GB', 1138.00, 1138.00, 10, 1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(22, 'Apple', 'iPhone 11 Pro Max', 'Smart Phone', './images/products/iphone11.jpg', 'silver', '64 Gb', 1200.00, 1200.00, 6, 1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(23, 'Apple', 'iPhone 12 Mini', 'Smart Phone', './images/products/iPhone12.jpg', 'black', '64 GB', 914.00, 914.00, 10, 2, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(24, 'Apple', 'iPhone 12 Pro', 'Smart Phone', './images/products/iPhone12.jpg', 'Gold', '128 GB', 1159.00, 1159.00, 10, 2, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(25, 'Apple', 'iPhone 12 Pro Max', 'Smart Phone', './images/products/iPhone12.jpg', 'black', '128 GB', 1279.00, 1279.00, 10, 2, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(26, 'Apple', 'iPhone 12 ', 'Smart Phone', './images/products/iPhone12.jpg', 'Silver', '64 GB', 914.00, 914.00, 10, 2, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(27, 'Apple', 'iPad Pro', 'Tablet', './images/products/ipad-pro.png', 'black', '128 GB', 1115.00, 1115.00, 10, 1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(28, 'Apple', 'iPad Pro', 'Tablet', './images/products/ipad-pro.png', 'space grey', '128 GB', 1115.00, 1115.00, 10, 1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(29, 'Apple', 'iPad Pro', 'Tablet', './images/products/ipad-pro.png', 'silver', '128 GB', 1115.00, 1115.00, 10, 1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(30, 'Apple', 'iPad Pro', 'Tablet', './images/products/ipad-pro.png', 'silver', '256 GB', 1332.00, 1332.00, 10, 1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(31, 'Apple', 'iPad Pro', 'Tablet', './images/products/ipad-pro.png', 'space grey', '256 GB', 1332.00, 1332.00, 10, 1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(32, 'SAMSUNG', 'tab S7', 'Tablet', './images/products/tabs7.jpg', 'white', '128 GB', 719.00, 719.00, 6, 1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(33, 'SAMSUNG', 'tab S7', 'Tablet', './images/products/tabs7.jpg', 'black', '128 GB', 719.00, 719.00, 6, 1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(34, 'SAMSUNG', 'Galaxy S9', 'Smart Phone', './images/products/s9.jpg', 'gold', '64 GB', 443.00, 493.00, 6, 0, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(35, 'SAMSUNG', 'Galaxy S20 5G', 'Smart Phone', './images/products/s20.jpg', 'cloud blue', '128 GB', 1029.00, 1029.00, 8, 1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(36, 'SAMSUNG', 'Galaxy S20 Ultra 5G', 'Smart Phone', './images/products/s20ultra.jpg', 'white', '128 GB', 1138.00, 1138.00, 8, 1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(37, 'SAMSUNG', 'Galaxy S20 Ultra 5G', 'Smart Phone', './images/products/s20ultraG.jpg', 'grey', '128 GB', 1138.00, 1138.00, 8, 1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(38, 'SAMSUNG', 'Galaxy S20 Ultra 5G', 'Smart Phone', './images/products/s20u5g.jpg', 'black', '128 GB', 1138.00, 1138.00, 7, 1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(39, 'SAMSUNG', 'Galaxy A20E 4G', 'Smart Phone', './images/products/a20.png', 'blue', '32 GB', 159.00, 169.00, 4, 0, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(40, 'SAMSUNG', 'Galaxy A30 4G', 'Smart Phone', './images/products/a30.jpg', 'blue', '32 GB', 229.00, 229.00, 6, 1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(41, 'SAMSUNG', 'Galaxy A50 ', 'Smart Phone', './images/products/a50.png', 'grey', '128 GB', 299.00, 350.00, 5, 0, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(42, 'SAMSUNG', 'Galaxy A70 ', 'Smart Phone', './images/products/a70.jpg', 'grey', '128 GB', 350.00, 399.00, 4, 0, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(43, 'SAMSUNG', 'Note 20 5G', 'Smart Phone', './images/products/note20.jpg', 'gold', '128 GB', 792.00, 792.00, 4, 1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(44, 'SAMSUNG', 'Note 20 5G', 'Smart Phone', './images/products/note20g.jpg', 'grey', '128 GB', 792.00, 792.00, 4, 1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(45, 'SAMSUNG', 'Note 20 Ultra 5G', 'Smart Phone', './images/products/Note20_Ultra.jpg', 'silver', '256 GB', 1030.00, 1030.00, 5, 1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(46, 'Huawei', 'P30', 'Smart Phone', './images/products/P30.png', 'blue', '128 GB', 430.00, 430.00, 5, 1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(47, 'Huawei', 'P30 Pro', 'Smart Phone', './images/products/p30pro.jpg', 'black', '128 GB', 450.00, 450.00, 5, 1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(48, 'Huawei', 'P30 Pro', 'Smart Phone', './images/products/p30pro.jpg', 'black', '256 GB', 737.00, 737.00, 5, 1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(49, 'Huawei', 'P30 Pro', 'Smart Phone', './images/products/p30pro.jpg', 'grey', '256 GB', 737.00, 737.00, 5, 1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.'),
(50, 'Huawei', 'P30 Pro', 'Smart Phone', './images/products/p30pro.jpg', 'silver', '256 GB', 737.00, 737.00, 5, 1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam architecto, voluptatibus officiis natus odit aliquam reprehenderit qui, eius ad perspiciatis aspernatur commodi eveniet quaerat adipisci.');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address_1` varchar(100) NOT NULL,
  `address_2` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name_2` (`user_name`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_name` (`user_name`),
  ADD KEY `date` (`date`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD CONSTRAINT `userdetails_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
