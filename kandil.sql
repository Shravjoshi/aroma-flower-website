-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2020 at 05:45 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kandil`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(255) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `uploaded_on` datetime(2) NOT NULL DEFAULT CURRENT_TIMESTAMP(2),
  `status` int(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `uploaded_on`, `status`) VALUES
(24, 'Aakash Deep', '2019-09-24 12:47:37.13', 0),
(25, 'Jute', '2019-09-24 12:48:05.93', 0),
(26, 'Panti', '2019-09-25 23:20:23.59', 0),
(27, 'mithai', '2019-11-22 11:40:18.96', 0),
(28, 'murti', '2019-11-24 07:46:48.83', 0),
(29, 'shirts', '2019-11-25 12:04:51.09', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(2555) NOT NULL,
  `address1` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pincode` int(255) NOT NULL,
  `uploaded_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `fname`, `email`, `mobile`, `address`, `address1`, `city`, `state`, `country`, `password`, `pincode`, `uploaded_on`) VALUES
(2, 'Ketan', 'wangadeketan@gmail.com', '8806259662', 'Krantisena Kaman, Shivsai Nagar', 'Kothrud, Pune', 'Pune', 'Maharashtra', 'India', '8698Ketan', 411038, '2019-09-26 07:01:01'),
(3, 'Ishwar Sathe', 'ishwar@gmail.com', '8527419632', 'kothrud', 'Kothrud Pune', 'Pune', 'Maharashtra', 'India', '8698ishwar', 411038, '2019-10-18 02:26:51'),
(4, 'Prashant', 'prashant@gmail.com', '8806259662', '', '', 'Pune', 'Maharashtra', 'India', '8698prashant', 0, '2019-10-19 05:56:16'),
(5, 'shivam', 'shiva@gmail.com', '7789456123', '', '', 'Pune', 'Maharashtra', 'India', '8698shiva', 0, '2019-10-18 06:21:31'),
(6, 'prashant', 'prashant45@gmail.com', '7775002363', '', '', 'Pune', 'Maharashtra', 'India', 'prashant45', 0, '2019-11-24 01:56:30'),
(7, 'ishwar sathe', 'ishwarsathe67@gmail.com', '8830819392', '', '', 'Pune', 'Maharashtra', 'India', 'ishwar123', 0, '2019-11-23 04:29:31'),
(8, 'ishwar sathe', 'ishwar.sathe.143@gmail.com', '9921965570', '', '', 'Pune', 'Maharashtra', 'India', 'ishwar123', 0, '2019-11-24 13:56:37'),
(9, 'guarav menge', 'gaurav@gmail.com', '9955662233', '', '', 'Pune', 'Maharashtra', 'India', 'guarav123', 0, '2019-11-25 03:03:55'),
(10, 'jai raje', 'jai@gmail.com', '8830819392', '', '', 'Pune', 'Maharashtra', 'India', 'jai123', 0, '2019-11-25 04:00:36'),
(11, 'sid', 'sid@gmail.com', '8830819392', 'sutardara,kothrud ,pune 411038', 'ertyuio', 'Pune', 'Maharashtra', 'India', 'sid123', 411038, '2019-11-25 06:39:00');

-- --------------------------------------------------------

--
-- Table structure for table `customers_cart`
--

CREATE TABLE `customers_cart` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `imageURL` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_unit` varchar(255) NOT NULL,
  `product_quantity` varchar(255) NOT NULL DEFAULT '1',
  `subtotal` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `incart_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers_cart`
--

INSERT INTO `customers_cart` (`id`, `email`, `product_name`, `imageURL`, `product_price`, `product_unit`, `product_quantity`, `subtotal`, `status`, `incart_time`) VALUES
(46, 'wangadeketan@gmail.com', 'Red Aakash Deep ', 'admin/images/products/71nXjWBh0sL._SY445_.jpg', '250', '', '5', '250', 'delivered', '2019-11-24 13:53:52'),
(51, 'ishwar@gmail.com', '4 Color', 'admin/images/products/91qoja+kOdL._SY550_.jpg', '60', '', '1', '60', 'delivered', '2019-10-24 07:05:32'),
(52, 'prashant@gmail.com', 'Aakash Deep ', 'admin/images/products/1.jpg', '250', '', '2', '500', 'pending', '2019-10-24 07:05:32'),
(54, 'ishwar@gmail.com', 'Aakash Deep ', 'admin/images/products/1.jpg', '250', '', '1', '250', 'pending', '2019-10-24 07:05:32'),
(55, 'ishwar@gmail.com', 'Pink Aakash Deep', 'admin/images/products/61NHy9Amg8L._SY445_.jpg', '250', '', '3', '750', 'delivered', '2019-10-24 07:05:32'),
(56, 'ishwar@gmail.com', '4 Color2', 'admin/images/products/9147nV4A4uL._SY550_.jpg', '60', '', '1', '60', 'delivered', '2019-10-24 07:05:32'),
(58, 'ishwar@gmail.com', '4 Color1', 'admin/images/products/91qoja+kOdL._SY550_.jpg', '60', '', '5', '300', 'incart', '2019-10-24 07:05:32'),
(61, 'prashant@gmail.com', '4 Color2', 'admin/images/products/9147nV4A4uL._SY550_.jpg', '60', '', '1', '60', 'incart', '2019-10-24 07:05:32'),
(62, 'prashant@gmail.com', 'Jute 3', 'admin/images/products/IMG-20190925-WA0013.jpg', '150', '', '1', '150', 'delivered', '2019-10-24 07:05:32'),
(63, 'shiva@gmail.com', '4 Color3', 'admin/images/products/9194Tma+q1L._SY679_.jpg', '60', '', '1', '60', 'delivered', '2019-11-22 05:25:22'),
(64, 'shiva@gmail.com', 'Red Aakash Deep ', 'admin/images/products/71nXjWBh0sL._SY445_.jpg', '250', '', '1', '250', 'incart', '2019-11-22 05:19:25'),
(65, 'shiva@gmail.com', '4 Color1', 'admin/images/products/91qoja+kOdL._SY550_.jpg', '60', '', '1', '60', 'incart', '2019-11-22 05:19:31'),
(66, 'shiva@gmail.com', '4 Color2', 'admin/images/products/9147nV4A4uL._SY550_.jpg', '60', '', '1', '60', 'incart', '2019-11-22 05:19:36'),
(68, 'wangadeketan@gmail.com', 'Jute 2', 'admin/images/products/IMG-20190925-WA0014.jpg', '125', '', '1', '625', 'incart', '2019-11-24 13:51:36'),
(69, 'prashant45@gmail.com', '4 Color1', 'admin/images/products/91qoja+kOdL._SY550_.jpg', '60', '', '5', '60', 'delivered', '2019-11-24 13:45:31'),
(70, 'ishwarsathe67@gmail.com', 'Jute 4', 'admin/images/products/IMG-20190925-WA0012.jpg', '485', '', '5', '485', 'delivered', '2019-11-24 13:42:02'),
(72, 'ishwarsathe67@gmail.com', '4 Color2', 'admin/images/products/9147nV4A4uL._SY550_.jpg', '60', '', '1', '60', 'incart', '2019-11-23 06:11:35'),
(73, 'ishwarsathe67@gmail.com', '4 Color1', 'admin/images/products/91qoja+kOdL._SY550_.jpg', '60', '', '1', '60', 'incart', '2019-11-23 06:10:44'),
(75, 'prashant45@gmail.com', '4 Color2', 'admin/images/products/9147nV4A4uL._SY550_.jpg', '60', '', '1', '60', 'incart', '2019-11-24 02:07:14'),
(76, 'prashant45@gmail.com', 'Pink Aakash Deep', 'admin/images/products/61NHy9Amg8L._SY445_.jpg', '250', '', '1', '250', 'incart', '2019-11-24 02:23:51'),
(77, 'ishwar.sathe.143@gmail.com', 'Red Aakash Deep ', 'admin/images/products/71nXjWBh0sL._SY445_.jpg', '250', '', '2', '500', 'delivered', '2019-11-24 13:57:03'),
(78, 'gaurav@gmail.com', 'Jute 2', 'admin/images/products/IMG-20190925-WA0014.jpg', '125', '', '1', '125', 'delivered', '2019-11-25 03:04:56'),
(79, 'gaurav@gmail.com', '4 Color1', 'admin/images/products/91qoja+kOdL._SY550_.jpg', '60', '', '1', '60', 'incart', '2019-11-25 03:08:04'),
(80, 'gaurav@gmail.com', 'Red Aakash Deep ', 'admin/images/products/71nXjWBh0sL._SY445_.jpg', '250', '', '3', '750', 'incart', '2019-11-25 03:40:25'),
(81, 'jai@gmail.com', 'Pink Aakash Deep', 'admin/images/products/61NHy9Amg8L._SY445_.jpg', '250', '', '1', '250', 'delivered', '2019-11-25 04:00:56'),
(82, '', 'Red Aakash Deep ', 'admin/images/products/71nXjWBh0sL._SY445_.jpg', '250', '', '1', '250', 'incart', '2019-11-25 04:11:14'),
(83, '', 'Jute 1', 'admin/images/products/IMG-20190925-WA0015.jpg', '120', '', '1', '120', 'incart', '2019-11-25 04:40:29'),
(84, '', '4 Color1', 'admin/images/products/91qoja+kOdL._SY550_.jpg', '60', '', '1', '60', 'incart', '2019-11-25 05:15:03'),
(85, '', 'Jute 2', 'admin/images/products/IMG-20190925-WA0014.jpg', '125', '', '1', '125', 'incart', '2019-11-25 05:26:24'),
(86, 'sid@gmail.com', 'Jute 3', 'admin/images/products/IMG-20190925-WA0013.jpg', '150', '', '1', '150', 'delivered', '2019-11-25 05:29:47'),
(87, '', 'Jute 3', 'admin/images/products/IMG-20190925-WA0013.jpg', '150', '', '2', '300', 'incart', '2019-11-25 06:07:21'),
(88, '', 'Aakash Deep ', 'admin/images/products/1.jpg', '250', '', '2', '500', 'incart', '2019-11-25 06:37:48'),
(89, 'sid@gmail.com', 'Aakash Deep ', 'admin/images/products/1.jpg', '250', '', '2', '500', 'incart', '2019-11-25 06:38:43');

-- --------------------------------------------------------

--
-- Table structure for table `ordered_products`
--

CREATE TABLE `ordered_products` (
  `id` int(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `imageURL` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_unit` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_quantity` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `ordered_on` datetime(2) NOT NULL DEFAULT CURRENT_TIMESTAMP(2),
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `payment_method` varchar(255) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `quantity` int(250) NOT NULL,
  `pay_method` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `oredered_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `email`, `fname`, `pname`, `address`, `country`, `state`, `city`, `pincode`, `mobile`, `quantity`, `pay_method`, `amount`, `status`, `oredered_on`) VALUES
(3, '', 'ishwar@gmail.com', '', '4 Color', '', '', '', '', '', '', 1, '', 60, 'delivered', '2019-10-24 07:01:15'),
(9, 'NULL', 'prashant@gmail.com', '', 'Aakash Deep ', '', '', '', '', '', '', 1, '', 250, 'delivered', '2019-10-24 07:01:15'),
(10, 'NULL', 'prashant@gmail.com', '', 'Aakash Deep ', '', '', '', '', '', '', 1, '', 250, 'incart', '2019-10-24 07:01:15'),
(11, 'NULL', 'prashant@gmail.com', '', 'Jute 3', '', '', '', '', '', '', 1, '', 150, 'delivered', '2019-10-24 07:01:15'),
(12, 'NULL', 'prashant@gmail.com', '', 'Jute 3', '', '', '', '', '', '', 1, '', 150, 'delivered', '2019-10-24 07:01:15'),
(13, 'NULL', 'ishwar@gmail.com', '', '4 Color', '', '', '', '', '', '', 1, '', 60, 'delivered', '2019-10-24 07:01:15'),
(14, 'NULL', 'shiva@gmail.com', '', '4 Color3', '', '', '', '', '', '', 1, '', 60, 'delivered', '2019-11-22 05:25:22'),
(15, 'NULL', 'shiva@gmail.com', '', '4 Color3', '', '', '', '', '', '', 1, '', 60, 'delivered', '2019-11-22 05:29:44'),
(16, 'NULL', 'ishwar@gmail.com', '', '4 Color', '', '', '', '', '', '', 1, '', 60, 'delivered', '2019-11-23 04:22:07'),
(17, 'NULL', 'ishwarsathe67@gmail.com', '', 'Jute 4', '', '', '', '', '', '', 1, '', 485, 'delivered', '2019-11-23 04:30:09'),
(18, 'NULL', 'prashant45@gmail.com', '', '4 Color1', '', '', '', '', '', '', 1, '', 60, 'delivered', '2019-11-24 01:57:31'),
(19, 'NULL', 'prashant45@gmail.com', '', '4 Color1', '', '', '', '', '', '', 1, '', 60, 'delivered', '2019-11-24 01:59:01'),
(20, 'NULL', 'prashant45@gmail.com', '', '4 Color1', '', '', '', '', '', '', 1, '', 60, 'delivered', '2019-11-24 02:05:17'),
(21, 'NULL', 'prashant45@gmail.com', '', '4 Color1', '', '', '', '', '', '', 1, '', 60, 'delivered', '2019-11-24 02:07:56'),
(22, 'NULL', 'prashant45@gmail.com', '', '4 Color1', '', '', '', '', '', '', 1, '', 60, 'delivered', '2019-11-24 02:19:01'),
(23, 'NULL', 'prashant45@gmail.com', '', '4 Color1', '', '', '', '', '', '', 1, '', 60, 'delivered', '2019-11-24 02:19:54'),
(24, 'NULL', 'prashant45@gmail.com', '', '4 Color1', '', '', '', '', '', '', 1, '', 60, 'delivered', '2019-11-24 02:20:56'),
(25, 'NULL', 'prashant45@gmail.com', '', '4 Color1', '', '', '', '', '', '', 1, '', 60, 'delivered', '2019-11-24 02:24:29'),
(26, 'NULL', 'ishwar@gmail.com', '', '4 Color', '', '', '', '', '', '', 1, '', 60, 'delivered', '2019-11-24 02:30:53'),
(27, 'NULL', 'ishwar@gmail.com', '', '4 Color', '', '', '', '', '', '', 1, '', 60, 'delivered', '2019-11-24 02:37:53'),
(28, 'NULL', 'ishwar@gmail.com', '', '4 Color', '', '', '', '', '', '', 1, '', 60, 'delivered', '2019-11-24 02:55:52'),
(29, 'NULL', 'ishwarsathe67@gmail.com', '', 'Jute 4', '', '', '', '', '', '', 1, '', 485, 'delivered', '2019-11-24 04:22:24'),
(30, 'NULL', 'ishwarsathe67@gmail.com', '', 'Jute 4', '', '', '', '', '', '', 1, '', 485, 'delivered', '2019-11-24 04:24:43'),
(31, 'NULL', 'ishwarsathe67@gmail.com', '', 'Jute 4', '', '', '', '', '', '', 1, '', 485, 'delivered', '2019-11-24 10:32:02'),
(32, 'NULL', 'ishwarsathe67@gmail.com', '', 'Jute 4', '', '', '', '', '', '', 1, '', 485, 'delivered', '2019-11-24 10:33:31'),
(33, 'NULL', 'ishwarsathe67@gmail.com', '', 'Jute 4', '', '', '', '', '', '', 1, '', 485, 'delivered', '2019-11-24 10:50:20'),
(34, 'NULL', 'ishwarsathe67@gmail.com', '', 'Jute 4', '', '', '', '', '', '', 1, '', 485, 'delivered', '2019-11-24 11:08:06'),
(35, 'NULL', 'ishwarsathe67@gmail.com', '', 'Jute 4', '', '', '', '', '', '', 1, '', 485, 'delivered', '2019-11-24 11:09:05'),
(36, 'NULL', 'ishwarsathe67@gmail.com', '', 'Jute 4', '', '', '', '', '', '', 1, '', 485, 'delivered', '2019-11-24 11:15:48'),
(37, 'NULL', 'ishwarsathe67@gmail.com', '', 'Jute 4', '', '', '', '', '', '', 1, '', 485, 'delivered', '2019-11-24 11:17:49'),
(38, 'NULL', 'ishwarsathe67@gmail.com', '', 'Jute 4', '', '', '', '', '', '', 1, '', 485, 'delivered', '2019-11-24 11:19:02'),
(39, '', '', '', '', '', '', '', '', '', '', 0, '', 0, 'pending', '2019-11-24 11:29:38'),
(40, 'NULL', 'ishwarsathe67@gmail.com', '', 'Jute 4', '', '', '', '', '', '', 1, '', 485, 'delivered', '2019-11-24 13:32:02'),
(41, 'NULL', 'ishwarsathe67@gmail.com', '', 'Jute 4', '', '', '', '', '', '', 1, '', 485, 'delivered', '2019-11-24 13:42:02'),
(42, 'NULL', 'prashant45@gmail.com', '', '4 Color1', '', '', '', '', '', '', 1, '', 60, 'delivered', '2019-11-24 13:45:31'),
(43, 'NULL', 'prashant45@gmail.com', '', '4 Color1', '', '', '', '', '', '', 5, '', 60, 'delivered', '2019-11-24 13:46:41'),
(44, 'NULL', 'prashant45@gmail.com', '', '4 Color1', '', '', '', '', '', '', 5, '', 60, 'delivered', '2019-11-24 13:48:45'),
(45, 'NULL', 'wangadeketan@gmail.com', '', 'Red Aakash Deep ', '', '', '', '', '', '', 1, '', 250, 'delivered', '2019-11-24 13:52:01'),
(46, 'NULL', 'wangadeketan@gmail.com', '', 'Red Aakash Deep ', '', '', '', '', '', '', 5, '', 250, 'delivered', '2019-11-24 13:53:52'),
(47, 'NULL', 'ishwar.sathe.143@gmail.com', '', 'Red Aakash Deep ', '', '', '', '', '', '', 2, '', 500, 'delivered', '2019-11-24 13:57:03'),
(48, 'NULL', 'ishwar.sathe.143@gmail.com', '', 'Red Aakash Deep ', '', '', '', '', '', '', 2, '', 500, 'delivered', '2019-11-24 14:37:58'),
(49, 'NULL', 'ishwar.sathe.143@gmail.com', '', 'Red Aakash Deep ', '', '', '', '', '', '', 2, '', 500, 'delivered', '2019-11-24 14:39:18'),
(50, 'NULL', 'gaurav@gmail.com', '', 'Jute 2', '', '', '', '', '', '', 1, '', 125, 'delivered', '2019-11-25 03:04:56'),
(51, 'NULL', 'gaurav@gmail.com', '', 'Jute 2', '', '', '', '', '', '', 1, '', 125, 'delivered', '2019-11-25 03:08:44'),
(52, 'NULL', 'gaurav@gmail.com', '', 'Jute 2', '', '', '', '', '', '', 1, '', 125, 'delivered', '2019-11-25 03:21:19'),
(53, 'NULL', 'gaurav@gmail.com', '', 'Jute 2', '', '', '', '', '', '', 1, '', 125, 'delivered', '2019-11-25 03:23:34'),
(54, 'NULL', 'gaurav@gmail.com', '', 'Jute 2', '', '', '', '', '', '', 1, '', 125, 'delivered', '2019-11-25 03:24:18'),
(55, 'NULL', 'gaurav@gmail.com', '', 'Jute 2', '', '', '', '', '', '', 1, '', 125, 'delivered', '2019-11-25 03:28:29'),
(56, 'NULL', 'gaurav@gmail.com', '', 'Jute 2', '', '', '', '', '', '', 1, '', 125, 'delivered', '2019-11-25 03:40:56'),
(57, 'NULL', 'gaurav@gmail.com', '', 'Jute 2', '', '', '', '', '', '', 1, '', 125, 'delivered', '2019-11-25 03:41:57'),
(58, 'NULL', 'gaurav@gmail.com', '', 'Jute 2', '', '', '', '', '', '', 1, '', 125, 'delivered', '2019-11-25 03:49:22'),
(59, 'NULL', 'gaurav@gmail.com', '', 'Jute 2', '', '', '', '', '', '', 1, '', 125, 'delivered', '2019-11-25 03:54:10'),
(60, 'NULL', 'jai@gmail.com', '', 'Pink Aakash Deep', '', '', '', '', '', '', 1, '', 250, 'delivered', '2019-11-25 04:00:56'),
(61, 'NULL', 'ishwarsathe67@gmail.com', '', 'Jute 4', '', '', '', '', '', '', 5, '', 485, 'delivered', '2019-11-25 05:27:43'),
(62, 'NULL', 'sid@gmail.com', '', 'Jute 3', '', '', '', '', '', '', 1, '', 150, 'delivered', '2019-11-25 05:29:46');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_company` varchar(255) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_specification` varchar(10000) NOT NULL,
  `product_price` varchar(10000) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_quantity` varchar(255) NOT NULL,
  `product_unit` varchar(255) NOT NULL,
  `uploaded_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_company`, `category_name`, `product_description`, `product_specification`, `product_price`, `product_image`, `product_quantity`, `product_unit`, `uploaded_on`) VALUES
(108, 'Aakash Deep ', '', 'Aakash Deep', 'Mill Oil is an innovative oil filled radiator with the most modern technology. If you are looking for something that can make your interior look awesome, and at the same time give you the pleasant warm feeling during the winter.', '', '250', '1.jpg', '12', '', '2019-09-26 04:08:18'),
(109, 'Red Aakash Deep ', '', 'Aakash Deep', '100% Indian ', '', '250', '71nXjWBh0sL._SY445_.jpg', '12', '', '2019-09-26 04:08:28'),
(110, 'Pink Aakash Deep', '', 'Aakash Deep', '100% Indian ', '', '250', '61NHy9Amg8L._SY445_.jpg', '12', '', '2019-09-26 04:08:24'),
(111, '4 Color', '', 'Panti', 'Multicolor reflection plastics diya  set of 4, Fully hand made design', '', '60', '91KyR33zWQL._SY550_.jpg', '25', '', '2019-09-25 17:52:48'),
(112, '4 Color1', '', 'Panti', 'Multicolor reflection plastics diya  set of 4, Fully hand made design', '', '60', '91qoja+kOdL._SY550_.jpg', '25', '', '2019-10-18 02:25:25'),
(113, '4 Color2', '', 'Panti', 'Multicolor reflection plastics diya  set of 4, Fully hand made design', '', '60', '9147nV4A4uL._SY550_.jpg', '25', '', '2019-10-18 02:25:36'),
(114, '4 Color3', '', 'Panti', 'Multicolor reflection plastics diya  set of 4, Fully hand made design', '', '60', '9194Tma+q1L._SY679_.jpg', '25', '', '2019-10-18 02:25:46'),
(115, 'Jute 1', '', 'Jute', 'Eco Friendaly Kandil. Handmade Decorative Kandils. Hanging Lanterns.', '', '120', 'IMG-20190925-WA0015.jpg', '2', '', '2019-09-26 04:11:24'),
(116, 'Jute 2', '', 'Jute', 'Eco Friendaly Kandil. Handmade Decorative Kandils. Hanging Lanterns.', '', '125', 'IMG-20190925-WA0014.jpg', '0', '', '2019-11-25 03:28:29'),
(117, 'Jute 3', '', 'Jute', 'Eco Friendaly Kandil. Handmade Decorative Kandils. Hanging Lanterns.', '', '150', 'IMG-20190925-WA0013.jpg', '25', '', '2019-09-26 04:12:15'),
(118, 'Jute 4', '', 'Jute', 'Eco Friendaly Kandil. Handmade Decorative Kandils. Hanging Lanterns.', '', '485', 'IMG-20190925-WA0012.jpg', '12', '', '2019-09-26 04:12:38'),
(119, 'murti1', '', 'murti', 'very much attractive', '', '500', 'ganpati1.jpg', '25', '', '2019-11-24 02:17:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers_cart`
--
ALTER TABLE `customers_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordered_products`
--
ALTER TABLE `ordered_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `customers_cart`
--
ALTER TABLE `customers_cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `ordered_products`
--
ALTER TABLE `ordered_products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
