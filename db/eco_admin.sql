-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2022 at 01:12 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eco_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`admin_id`, `admin_name`, `admin_username`, `admin_email`, `admin_password`) VALUES
(1, 'Md. Al Emam', 'alemam', 'alemam242@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `all_ctag`
--

CREATE TABLE `all_ctag` (
  `p_ctag` varchar(255) NOT NULL,
  `p_sub_ctag_1` varchar(255) NOT NULL,
  `p_sub_ctag_2` varchar(255) NOT NULL,
  `p_sub_ctag_3` varchar(255) NOT NULL,
  `p_sub_ctag_4` varchar(255) NOT NULL,
  `p_sub_ctag_5` varchar(255) NOT NULL,
  `p_sub_ctag_6` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_ctag`
--

INSERT INTO `all_ctag` (`p_ctag`, `p_sub_ctag_1`, `p_sub_ctag_2`, `p_sub_ctag_3`, `p_sub_ctag_4`, `p_sub_ctag_5`, `p_sub_ctag_6`) VALUES
('Men', 'Topwear', 'Sports and Active wear', 'Bottomwear', 'Festive wear', 'Footwear', 'Accessories'),
('Woman', 'Desi and Fusion wear', 'Western wear', 'Jewellery', 'Sports and Active wear', 'Footwear', 'Accessories'),
('Kid', 'Boys Clothing', 'Girls Clothing', 'Boys Footwear', 'Girls Foorwear', 'Infants', 'Kid Accessories'),
('Beauty', 'Makeup', 'Skincare,Bath and Body', 'Haircare', 'Fragrances', 'Mens Grooming', 'Beauty Gift'),
('Accessories', 'Watch', 'Sunglasses', 'Belts', 'Bath Accessories', 'Others', '');

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `product_id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart_details`
--

INSERT INTO `cart_details` (`product_id`, `ip_address`, `quantity`) VALUES
(2, '::1', 1),
(3, '::1', 1),
(4, '::1', 1),
(8, '::1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category`) VALUES
(1, 'feature_product'),
(2, 'offer_product'),
(3, 'cloths'),
(4, 'latest_product');

-- --------------------------------------------------------

--
-- Table structure for table `cloths`
--

CREATE TABLE `cloths` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cloths`
--

INSERT INTO `cloths` (`id`, `name`, `image`, `details`, `price`, `quantity`) VALUES
(9, 't-shirt', 'images/buy-1.jpg', 'red t-shirt', 260, 23),
(10, 'hoodie', 'images/1616502514_menshoodie.jpg', 'White Hoodie', 850, 30),
(11, 'Polo T-Shirt', 'images/product-4.jpg', 'Blue Polo T-Shirt', 360, 30);

-- --------------------------------------------------------

--
-- Table structure for table `feature_product`
--

CREATE TABLE `feature_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feature_product`
--

INSERT INTO `feature_product` (`id`, `name`, `image`, `details`, `price`, `quantity`) VALUES
(8, 'Samsung Galaxy S21 Ultra', 'images/1616492395_Samsung-Galaxy-S21-Ultra-1608287647-0-0.jpg', 'Original Authentic Product', 86999, 10),
(9, 'Bluetooth Headphone', 'images/1616502847_hdphn.jpg', 'Bluetooth Headphone Stylish Cool', 2699, 10),
(10, 'Smart Watch', 'images/exclusive.png', 'Stylish Cool Smart Watch', 2600, 10),
(13, 't-shirt', 'images/gallery-1.jpg', 'Red stylish t-shirt', 300, 17);

-- --------------------------------------------------------

--
-- Table structure for table `latest_product`
--

CREATE TABLE `latest_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `offer_product`
--

CREATE TABLE `offer_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offer_product`
--

INSERT INTO `offer_product` (`id`, `name`, `image`, `details`, `price`, `quantity`) VALUES
(1, 'Shoe', 'images/product-11.jpg', 'Stylish Brown Shoe', 1850, 10),
(2, 'Kets', 'images/product-10.jpg', 'Stylish Black Shoe', 2599, 10);

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE `pending_orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `invoice_number` int(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(255) NOT NULL,
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pending_orders`
--

INSERT INTO `pending_orders` (`order_id`, `user_id`, `invoice_number`, `product_id`, `quantity`, `order_status`) VALUES
(1, 1, 1784844013, 5, 2, 'accepted');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(255) NOT NULL,
  `p_name` varchar(255) DEFAULT NULL,
  `p_details` varchar(255) DEFAULT NULL,
  `p_colour` varchar(255) DEFAULT NULL,
  `p_ctag` varchar(255) DEFAULT NULL,
  `p_sub_ctag` varchar(255) DEFAULT NULL,
  `p_price` int(255) DEFAULT NULL,
  `p_quantity` int(255) DEFAULT NULL,
  `p_date` date DEFAULT NULL,
  `p_img1` varchar(255) DEFAULT NULL,
  `p_img2` varchar(255) DEFAULT NULL,
  `p_img3` varchar(255) DEFAULT NULL,
  `p_img4` varchar(255) DEFAULT NULL,
  `p_keyword` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_details`, `p_colour`, `p_ctag`, `p_sub_ctag`, `p_price`, `p_quantity`, `p_date`, `p_img1`, `p_img2`, `p_img3`, `p_img4`, `p_keyword`) VALUES
(1, 'HIGHLANDER Shirt', 'Men Maroon & Black Slim Fit Checked Casual Shirt', 'Maroon', 'Men', 'Topwear', 599, 23, '2022-11-10', 'img.jpg', 'img1.jpg', 'img2.jpg', 'img3.jpg', 'shirt, maroon shirt, men shirt, stylist shirt, classic shirt, formal shirt'),
(2, 'T-Shirt by HRX', 'MEN YELLOW PRINTED COTTON PURE COTTON T-SHIRT', 'yellow', 'Men', 'Topwear', 499, 20, '2022-11-11', 'id2img1.jpg', 'id2img2.jpg', 'id2img3.jpg', 'id2img4.jpg', 't-shirt, maroon t-shirt, men t-shirt, stylist t-shirt, t-classic shirt'),
(3, 'Black T-Shirt by HRX', 'MEN BLACK TYPOGRAPHY PRINTED COTTON T-SHIRT', 'black', 'Men', 'Topwear', 399, 15, '2022-11-17', 'id3img1.jpg', 'id3img2.jpg', 'id3img3.jpg', 'id3img4.jpg', 't-shirt, maroon t-shirt, men t-shirt, stylist t-shirt'),
(4, 'Dress for Female', 'Yellow colour teenage female dress', 'yellow', 'Woman', 'Desi and Fusion wear', 799, 10, '2022-11-02', 'w_i1.jpg', 'w_i2.jpg', 'w_i3.jpg', NULL, 't-shirt, maroon t-shirt, woman t-shirt, stylist t-shirt'),
(5, 'Formal Shirt', 'White color formal shirt', 'White', 'Men', 'Topwear', 599, 10, '2022-11-15', 'shirt1.webp', 'shirt2.webp', 'shirt3.webp', 'shirt4.webp', 'Shirt,White shirt,formal, men');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_address_2` varchar(255) DEFAULT NULL,
  `user_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `user_name`, `user_password`, `user_email`, `user_address`, `user_address_2`, `user_number`) VALUES
(NULL, '', 'root', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_ip` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_address2` varchar(255) DEFAULT NULL,
  `user_mobile` varchar(255) NOT NULL,
  `user_img` varchar(255) DEFAULT NULL,
  `otp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `name`, `username`, `user_email`, `user_password`, `user_ip`, `user_address`, `user_address2`, `user_mobile`, `user_img`, `otp`) VALUES
(1, 'Md. Al Emam', 'alemam', 'alemam242@gmail.com', '$2y$10$K.Vknx8tgTwrYMrAjnRO7eFOr8nQ7JP9mRazc.bhkLJ620nNTPPIi', '::1', 'mirpur-2', '', '01643155847', '', ''),
(9, 'Hr Shammo', 'shammo', 'shammo@gmail.com', '$2y$10$hrL25pi/XDXmnTSljypOGep0Nz.C3bgeyu4MUtihf79/tyvU4DZeO', '::1', 'Mirpur 14,Dhaka', 'Mirpur 14,Dhaka', '123456789', '', ''),
(13, 'Md. Al Emam Suvo', 'suvo', 'alemam242@gmail.com', '$2y$10$86XlJigjM56WMkFpFLES4Ou9Sr9Bndp10UJScN0/xYGf02Z7dJhqS', '::1', 'Chapai nawabganj, Shibganj', 'Shibganj, Monakasa', '01643155847', '', ''),
(14, 'Hamim Reza', 'hrshammo', 'hrshammo@gmail.com', '$2y$10$I6yZDpWRj4O4rveMeX9f/.Gmv813kmX1Zowsj7JHS94UAz98Ounlu', '::1', 'Stark Tower, New York City', '221B baker street', '01769696969', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` int(255) NOT NULL,
  `invoice_number` int(255) NOT NULL,
  `total_products` int(255) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`order_id`, `user_id`, `amount`, `invoice_number`, `total_products`, `order_date`, `order_status`) VALUES
(1, 1, 1000, 1784844013, 2, '2022-11-19 11:38:22', 'accepted');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`admin_id`,`admin_username`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `cloths`
--
ALTER TABLE `cloths`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature_product`
--
ALTER TABLE `feature_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `latest_product`
--
ALTER TABLE `latest_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer_product`
--
ALTER TABLE `offer_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`,`username`);

--
-- Indexes for table `user_orders`
--
ALTER TABLE `user_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cloths`
--
ALTER TABLE `cloths`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `feature_product`
--
ALTER TABLE `feature_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `latest_product`
--
ALTER TABLE `latest_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offer_product`
--
ALTER TABLE `offer_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pending_orders`
--
ALTER TABLE `pending_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_orders`
--
ALTER TABLE `user_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
