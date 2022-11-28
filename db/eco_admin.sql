-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2022 at 09:10 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

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
  `admin_type` varchar(255) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_mobile` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`admin_id`, `admin_type`, `admin_name`, `admin_username`, `admin_email`, `admin_mobile`, `admin_password`, `admin_img`) VALUES
(1, 'main', 'Md. Al Emam', 'alemam', 'alemam242@gmail.com', '01643155847', 'admin', 'IMG_1662046253186.jpg'),
(2, 'main', 'shammo', 'shammo', 'shammo@hrx.com', '01769696969', '1234', '307098871_2440100339476619_1492627081181804668_n.jpg'),
(6, 'temp', 'Nyema Khatun ', 'nayema', 'nayema@gmail.com', '0123456789', 'admin', 'NULL');

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
  `price` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart_details`
--

INSERT INTO `cart_details` (`product_id`, `price`, `ip_address`, `quantity`) VALUES
(24, '1800', '::1', 1),
(26, '1599', '::1', 1),
(29, '690', '::1', 1),
(31, '1390', '::1', 1);

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
  `product_id` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pending_orders`
--

INSERT INTO `pending_orders` (`order_id`, `user_id`, `invoice_number`, `product_id`, `quantity`, `order_status`) VALUES
(3, 17, 1826920499, '12', 1, 'accepted'),
(5, 1, 1306410171, '13', 1, 'pending'),
(7, 1, 1439398906, '4', 1, 'pending'),
(8, 1, 1439398906, '23', 1, 'accepted'),
(9, 14, 8524598, '24', 1, 'pending');

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
(5, 'EXPERT MT SLIPON Shoe', 'Accentuate your look wearing these knitted Slip-On sneakers by Hush Puppies which will keep your feet stress-free.UPPER/LINING• Soft knit uppers, combined with nubuck trim details•', 'Black', 'Men', 'Footwear', 99, 10, '2022-11-18', '1_63d41db9-23ad-40a1-b9af-24546a394a1a_1024x1024.webp', '2_026658fa-f7a3-4abf-b017-0129392b5e09_1024x1024.webp', '3_f037488b-b157-4848-8f4c-54534719c979_1024x1024.webp', '4_c871e943-e0cb-4b21-aa65-955d241e1290_1024x1024.webp', 'shoe,shoes, mans footwear, casual shoe for men'),
(6, 'Bata MACK Half-Moc', 'Accentuate your look wearing these knitted Slip-On sneakers by Hush Puppies which will keep your feet stress-free.UPPER/LINING• Soft knit uppers, combined with nubuck trim details•', 'Black', 'Men', 'Footwear', 855, 12, '2022-11-18', '1_a47b5d0e-4ff4-4233-a37c-95682e30e486_1024x1024.webp', '2_20da05b3-b290-45b9-bc8a-f2fe6a81f06e_1024x1024.webp', '3_cd6d187a-229b-4d14-906d-0b0e09d2d766_1024x1024.webp', '4_4afcfe43-8eae-4049-b30d-3b226354d22e_1024x1024.webp', 'shoe, mans footwear, casual shoe for men'),
(8, 'Two-Piece Set Short', 'Quick-Drying, Body Shape, Windbreak, Anti-Static', 'White', 'Men', 'Sports and Active wear', 455, 5, '2022-11-18', 'Artboard43_1024x1024.webp', 'Artboard33_1024x1024.webp', 'Artboard23_e47d5105-be30-4553-a78b-3476b238760e_1024x1024.webp', 'Artboard13_65edaed7-227b-462d-b631-803ecc26369a_1024x1024.webp', 'athletic wear, men comfort for sports'),
(9, 'Shree Sanskruti', 'MAROON PLAIN BANARASI SILK SAREE WITH BLOUSE', 'Maroon', 'Woman', 'Festive wear', 4492, 5, '2022-11-18', '26-2_large.jpg', '26-2_large (1).jpg', '26-1_large.jpg', '26-2_large.jpg', 'saree, women dress, eid saree, maroon saree'),
(10, 'women blazer', '100% Brand New   Fashion Uniform Design Office Lady Formal Blazers Material: Blazer Fiber + Cotton Color: Green, Black, Pink Chinese Size: S, M, L, XL, XXL,XXXL', 'Green', 'Woman', 'Western wear', 7000, 15, '2022-11-18', 'HTB1weqwHpXXXXauXXXXq6xXFXXXK.jpg', 'Elegant-Green-Half-Sleeve-2015-Summer-Female-Blazers-Coat-Uniform-Design-Jackets-Tops-Clothes-Business-Women.jpg_50x50.jpg_.webp', 'HTB1iTyLHpXXXXcXXVXXq6xXFXXXi.jpg', 'Elegant-Green-Half-Sleeve-2015-Summer-Female-Blazers-Coat-Uniform-Design-Jackets-Tops-Clothes-Business-Women.jpg_Q90.jpg_.webp', 'blazer, women dress, green coat'),
(12, 'Turquoise Collar Necklace', 'Lucky Brand fashion jewelry with etched metal detail and colored stone', 'Blue', 'Woman', 'Jewellery', 1098, 9, '2022-11-21', '71eUNLS6PgL._AC_UY500_.jpg', '81J82cFIDbL._AC_UX575_.jpg', '81J82cFIDbL._AC_UX575_.jpg', '71mv8kHUPlL._AC_UY500_.jpg', 'jewelry for women, necles'),
(13, 'Foam Slippers', 'Rubber sole Heel measures approximately IN\" TRENDY DESIGN: Sleepwear encompasses your body from head to toe, making these comfy slip-ons the luxurious cherry on top of your cozy routine. These slippers are designed with plush material, which will envelope', 'White', 'Woman', 'Girls Foorwear', 420, 20, '2022-11-21', '71e6rwkkmsS._AC_UY500_.jpg', '71XdoSAHmLS._AC_UY500_.jpg', '812WdP9qxKS._AC_UY500_.jpg', '81TPRJo32UL._AC_UY500_.jpg', 'shoe, womans footwear, casual shoe for women'),
(14, 'JOOVY Bassine', 'Designed with comfort in mind, this ultra-soft bassinet lets your baby sleep soundly and lie completely flat Zips open and closed. Includes UPF 50 Canopy and Bumper Bar. Compatible with both the Qool and Caboose S To use the bassinet in the front position', 'Black', 'Kid', 'Infants', 2000, 5, '2022-11-21', '51-pA8g2TVL._SX425_.jpg', '61KAraFAjUL._SY606_.jpg', '61o+Sq4lOQL._SX425_.jpg', '819gxFozP-S._SX425_.jpg', 'JOOVY Bassinet Black, baby trolly, black carrier for baby'),
(15, 'Makeup Kit ', 'SHANY All In One Harmony Makeup Kit - Ultimate Color Combination - New Edition', 'Black', 'Woman', 'Makeup', 4500, 10, '2022-11-21', '71yeZ70N+mL._SX425_.jpg', '71jFnixfinL._SX425_.jpg', '71u0IGrLKKL._SX425_.jpg', '81OfB1fbpkL._SX425_.jpg', 'makeup, makeup kit, makeup set for women'),
(16, 'Smartwatch', 'Learn to manage stress, sleep better and live healthier with Sense 2—our most advanced health and fitness smartwatch Manage stress and live healthier: all-day stress detection with cEDA and daily Stress Management Score, ECG app for atrial fibrillation as', 'White', 'Accessories', 'Watch', 5000, 40, '2022-11-21', '61Q79ulDs6L.__AC_SX300_SY300_QL70_FMwebp_.webp', '81BCgn4tuaL._AC_SX569_.jpg', '81EKi6AroiL._AC_SX569_.jpg', '81V0wmc8QHL._AC_SX569_.jpg', 'watch, smartwatch, advanced watch for men and women'),
(17, 'Polarized Sunglasses', 'Imported ★ Protect Your Eyes With Style ▶ We created our polarized sunglasses men women to Protect your eyes while you are out under the harmful sun UV rays and to make you look Irresistible at the same time. Whether you are driving, walking or working, w', 'Black', 'Men', 'Sunglasses', 7000, 14, '2022-11-21', '61KQXq71FJL._AC_UY500_.jpg', '71DErdmSS2L._AC_UY500_.jpg', '71R06S7oK+L._AC_UY500_.jpg', '71xfRX6tDLL._AC_UY500_.jpg', 'sunglasses, sunglasses for men, UV protect sunglasses'),
(18, 'Sunglasses', 'Imported Metal frame Polycarbonate lens Non-Polarized UV Protection Coating coating Lens width: 51 millimeters Lens height: 51 millimeters', 'White', 'Woman', 'Sunglasses', 4900, 40, '2022-11-21', '71I95YxRa-L._AC_UX522_.jpg', '713uhUwugeS._AC_UY500_.jpg', '6131E4WFXYL._AC_UX522_.jpg', '7104ko+0YFL._AC_UX522_.jpg', 'sunglasses, sunglasses for women, stone glasses for women'),
(19, 'All-in-One Trimmer', '13 attachments for all of your grooming needs: Full size steel trimmer, a steel precision trimmer, a nose and ear hair trimmer, 3 hair trimming guards, 3 beard trimming guards, a stubble guard, an accessory travel storage bag, and a cleaning brush. Unlike', 'Black', 'Beauty', 'Men Grooming', 1700, 0, '2022-11-21', '51s7FUpMbHL._SX300_SY300_QL70_FMwebp_.webp', '71p4U7kuraL._SX425_.jpg', '71PD-ZfXHAL._SX425_.jpg', '81jd4orpMOL._SX425_.jpg', 'Trimmer, multi functional trimmer'),
(20, 'Beard Trimming kit', 'Rechargeable Beard Trimmer - Groomsman is a rechargeable unit that allows for up to 60 minutes of run time on a single charge and features a contoured ergonomic handle with soft-grip pads as well as a bonus nose trimmer Precision Ground Blades – High-carb', 'White', 'Men', 'Men Grooming', 1999, 20, '2022-11-21', '81deIRHMPzL._SX425_.jpg', '81H3ejfi9AL._SX425_.jpg', '81jd4orpMOL._SX425_.jpg', '91-bMXekgVL._SX425_.jpg', 'Trimmer, multi functional trimmer'),
(21, 'Toilette Spray', 'FRUIT-FORWARD TOP NOTES - This scent opens with apple, waterlily, and apricot RICH HEART NOTES - The fresh top notes give way to decadent guava, chocolate, and tuberose EARTH BASE NOTE - The final finish rests on sweet notes of vanilla and amber RICH WITH', 'Blue', 'Woman', 'Fragrances', 7000, 12, '2022-11-21', '61L6oLTeufL._SX425_.jpg', '71y3FNJSqoL._SX425_.jpg', '91m+h71y8FL._SX425_.jpg', '313l6ZwBAEL._SX300_SY300_QL70_FMwebp_.webp', 'women fragrance, body spray, spray'),
(22, 'Candy Eau de Parfum', 'Brand	Ariana Grande Item Form	Spray Item Volume	3.4 Fluid Ounces Scent	Seductive, Sexy, Playful, Sweet Special Feature	Not Tested On Animals', 'White', 'Men', 'Fragrances', 5500, 8, '2022-11-21', '41VIkN0BOML._SX522_.jpg', '61A-+mMvFJS._SX425_.jpg', '61uxYmM1ZnL._SX425_.jpg', '61uxYmM1ZnL._SX425_.jpg', 'fragrance, parfum, spray'),
(23, 'Formal Shirt', 'White color formal shirt', 'White', 'Men', 'Topwear', 599, 30, '2022-11-24', 'xl-sh-chi-7-u-turn-original-imagjynfrxfwn4we.webp', 'xl-sh-chi-7-u-turn-original-imagjynfgdcyv9r4.webp', 'xl-sh-chi-7-u-turn-original-imagjynfpp5t4zjf.webp', 'xl-sh-chi-7-u-turn-original-imagjynfn2xtpvym.webp', 'Shirt,White shirt,formal, men'),
(24, 'Mens Black Jeans', 'Style Name: TM-EF58-OMCT-0258', 'White', 'Men', 'Bottomwear', 1800, 25, '2022-11-26', '0022153_mens-denim-trouser.jpeg', '0022155_mens-denim-trouser.jpeg', '0022154_mens-denim-trouser.jpeg', '0022157_mens-denim-trouser.jpeg', 'Mens, Casual, T-Shirt, Ash,'),
(25, 'MENS KNIT T-SHIRT', 'Style Name: SI-EA58-OMKT-0417', 'Navy', 'Men', 'Topwear', 690, 10, '2022-11-27', '0022302_mens-knit-t-shirt-h_s.jpeg', '0022303_mens-knit-t-shirt-h_s.jpeg', '0022304_mens-knit-t-shirt-h_s.jpeg', '0022305_mens-knit-t-shirt-h_s.jpeg', 'Mens, Casual, T-Shirt, Knit,'),
(26, 'Mens Cosy Jacket', 'Mens Camo Printed Cosy Jacket', 'Black', 'Men', 'Topwear', 1599, 5, '2022-11-27', '0018235_mens-camo-printed-cosy-jacket.jpeg', '0018236_mens-camo-printed-cosy-jacket.jpeg', '0018235_mens-camo-printed-cosy-jacket.jpeg', '0018236_mens-camo-printed-cosy-jacket.jpeg', 'Mens, Camo, Printed Cosy ,Jacket'),
(27, 'Womens  Long Kurtis', 'Womens Woven Long Kurtis ', 'Sky Blue', 'Woman', 'Desi and Fusion wear', 2000, 12, '2022-11-27', '0011739_womens-woven-long-kurtis.jpeg', '0011739_womens-woven-long-kurtis.jpeg', '0011739_womens-woven-long-kurtis.jpeg', '0011739_womens-woven-long-kurtis.jpeg', 'Womens, Woven Long , Kurtis'),
(28, 'Womens  Long Kurtis', 'Womens Woven Long Kurtis', 'Olvie', 'Woman', 'Desi and Fusion wear', 2700, 25, '2022-11-27', '0018938_womens-woven-long-kurtis (1).jpeg', '0018939_womens-woven-long-kurtis.jpeg', '0018940_womens-woven-long-kurtis.jpeg', '0018938_womens-woven-long-kurtis (1).jpeg', 'Womens, Woven Long, Kurtis'),
(29, 'Mens Knit T-shirt', 'Style Name: SI-EF58-OMKT-0421', 'Sky Blue', 'Men', 'Topwear', 690, 20, '2022-11-27', '0020223_mens-knit-t-shirt.jpeg', '0020224_mens-knit-t-shirt.jpeg', '0020223_mens-knit-t-shirt.jpeg', '0020224_mens-knit-t-shirt.jpeg', 'Mens, Knit, T-shirt'),
(30, 'Men Navy Shirt', 'Men Classic Navy Blue Shirt by HRX', 'Navy', 'Men', 'Topwear', 2300, 10, '2022-11-27', 'Untitled design (3).png', 'zodiac_shirts_carletti5_cf_z1_100_cotton_stru_066_fssc_cac_navy_29_38_0_z_2.jpg', 'Untitled design (2).png', 'Luca_Faloni_Portofino_Linen_Shirt_Made_In_Italy_Navy_Blue_8517_1024x1024@2x.webp', 'Men, Classic, Navy, Blue, Shirt, HRX'),
(31, 'Iron Man Sunglass', 'Ironman Sunglass fron Infinity War', 'Sky Blue', 'Accessories ', 'Sunglasses', 1390, 30, '2022-11-27', 'H053a137066184346887d1172da9cb595q.jpg_.webp', 'free-size-tony-stark-uv-protection-wayfarer-sunglasses-free-size-original-imaftut2avwzxrea.webp', 'm-iron-man-tony-stark-avengers-infinity-war-endgame-unisex-original-imafszt27jcytzgf.webp', 'free-size-iron-man-tony-stark-avengers-infinity-war-endgame-original-imag2tn87stgyupw.webp', 'Iron Man, Sunglass');

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
  `user_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `name`, `username`, `user_email`, `user_password`, `user_ip`, `user_address`, `user_address2`, `user_mobile`, `user_img`) VALUES
(1, 'Md. Al Emam', 'alemam', 'aryansuvo017@gmail.com', '$2y$10$ZECXEdDNzEZO2CQsJXTYOep2KoUCSs0C4Pd8i1S2T6voIixO0Oy02', '::1', '445, Shibganj, Monakosa', 'Shibganj, Monakasa', '01643155847', 'IMG_1662046253186.jpg'),
(9, 'Hr Shammo', 'shammo', 'shammo@gmail.com', '$2y$10$hrL25pi/XDXmnTSljypOGep0Nz.C3bgeyu4MUtihf79/tyvU4DZeO', '::1', 'Mirpur 14,Dhaka', 'Mirpur 14,Dhaka', '123456789', ''),
(14, 'Hamim Reza', 'hrshammo', 'hrshammo@gmail.com', '$2y$10$I6yZDpWRj4O4rveMeX9f/.Gmv813kmX1Zowsj7JHS94UAz98Ounlu', '::1', 'Stark Tower, New York City', '221B baker street', '01769696969', ''),
(17, 'Nayema ', 'nayema', 'nayema@gmail.com', '$2y$10$kl7fayuTnwoIWDqKVAgp.ebrU9j7y2yYDNJ9nZAPxn7/otEf5F9bO', '::1', 'mirpur,Dhaka', 'rupnagar abashik', '01822055190', 'NULL');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `amount` int(255) NOT NULL,
  `invoice_number` int(255) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`order_id`, `user_id`, `product_id`, `amount`, `invoice_number`, `order_date`, `order_status`) VALUES
(3, 17, 12, 1098, 1826920499, '2022-11-22 10:26:44', 'accepted'),
(5, 1, 13, 420, 1306410171, '2022-11-22 14:34:40', 'pending'),
(7, 1, 4, 799, 1439398906, '2022-11-24 11:20:09', 'pending'),
(8, 1, 23, 599, 1439398906, '2022-11-24 11:20:52', 'accepted'),
(9, 14, 24, 1800, 8524598, '2022-11-26 08:05:47', 'pending');

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
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_orders`
--
ALTER TABLE `user_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
