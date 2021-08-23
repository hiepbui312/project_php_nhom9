-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2021 at 10:11 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'dien thoai'),
(3, 'May tinh');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(500) NOT NULL,
  `thoi_quen` varchar(500) NOT NULL,
  `so_thich` varchar(500) NOT NULL,
  `sinh_nhat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `phone`, `password`, `thoi_quen`, `so_thich`, `sinh_nhat`) VALUES
(2, 'hiep', 971086969, '4297f44b13955235245b2497399d7a93', 'dep trai', 'dit bu', '2000-03-01'),
(3, 'hao', 2147483647, '4297f44b13955235245b2497399d7a93', 'an', 'ngu', '2000-03-03'),
(4, 'le hao', 123123123, '4297f44b13955235245b2497399d7a93', 'hoc', 'hoc', '2000-11-11'),
(6, 'hiep', 0, '202cb962ac59075b964b07152d234b70', '123', '123', '2021-08-09'),
(7, 'cong', 123, '202cb962ac59075b964b07152d234b70', '123', '123', '2021-08-17'),
(8, 'hiep123', 123, '202cb962ac59075b964b07152d234b70', '123', '123', '2021-08-16');

-- --------------------------------------------------------

--
-- Table structure for table `ngan_sach`
--

CREATE TABLE `ngan_sach` (
  `price` bigint(20) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ngan_sach`
--

INSERT INTO `ngan_sach` (`price`, `id`) VALUES
(1117000000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `date`, `price`) VALUES
(27, 8, '2021-08-23', 14000000);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `quantity`) VALUES
(36, 27, 12, 1),
(37, 27, 11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `category_id` int(11) NOT NULL,
  `ma_hang` varchar(500) NOT NULL,
  `bao_hanh` int(11) NOT NULL,
  `so_imei` varchar(500) NOT NULL,
  `so_serial` varchar(500) NOT NULL,
  `ton_kho` int(11) NOT NULL,
  `xuat_su` varchar(500) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `ma_hang`, `bao_hanh`, `so_imei`, `so_serial`, `ton_kho`, `xuat_su`, `price`) VALUES
(5, 'iphone 6', 1, '123123', 6, '312', '123', 19, 'Trung quoc', 1000000),
(6, 'iphone 7', 1, '123321', 6, '123', '123', 10, 'My', 2000000),
(7, 'acer nitro 5', 3, '123123123', 6, '312', '123', 19, 'Trung quoc', 5000000),
(8, 'macbook m1', 3, '12332144', 6, '123', '123', 9, 'My', 7000000),
(9, 'iphone 8', 1, '123123', 6, '312', '123', 19, 'Trung quoc', 1000000),
(10, 'iphone 9', 1, '123321', 6, '123', '123', 8, 'My', 2000000),
(11, 'acer nitro 6', 3, '123123123', 6, '312', '123', 5, 'Trung quoc', 5000000),
(12, 'macbook m2', 3, '12332144', 6, '123', '123', 3, 'My', 7000000);

-- --------------------------------------------------------

--
-- Table structure for table `tra_hang`
--

CREATE TABLE `tra_hang` (
  `id` int(11) NOT NULL,
  `product_name` varchar(500) NOT NULL,
  `product_price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `customer_email` varchar(500) NOT NULL,
  `tt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tra_hang`
--

INSERT INTO `tra_hang` (`id`, `product_name`, `product_price`, `quantity`, `order_date`, `customer_email`, `tt`) VALUES
(17, 'iphone 9', 2000000, 1, '2021-08-23', '', 2000000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'nva@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ngan_sach`
--
ALTER TABLE `ngan_sach`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tra_hang`
--
ALTER TABLE `tra_hang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ngan_sach`
--
ALTER TABLE `ngan_sach`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tra_hang`
--
ALTER TABLE `tra_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
