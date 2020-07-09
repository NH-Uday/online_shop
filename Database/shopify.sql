-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2020 at 01:43 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopify`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `user_id` int(15) NOT NULL,
  `prod_id` int(15) NOT NULL,
  `prod_quantity` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`user_id`, `prod_id`, `prod_quantity`) VALUES
(2, 21, 1),
(1, 21, 1),
(1, 42, 2),
(1, 28, 2),
(1, 8, 2),
(1, 9, 1),
(1, 22, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cust_info`
--

CREATE TABLE `tbl_cust_info` (
  `custID` int(11) NOT NULL,
  `custName` varchar(100) DEFAULT NULL,
  `custPhone` varchar(20) NOT NULL,
  `custEmail` varchar(50) NOT NULL,
  `custAddress` varchar(150) NOT NULL,
  `num_of_inv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoice`
--

CREATE TABLE `tbl_invoice` (
  `inv_id` int(11) NOT NULL,
  `inv_date` date DEFAULT NULL,
  `invNum` varchar(150) DEFAULT NULL,
  `invSeq` varchar(20) DEFAULT NULL,
  `vat` int(11) DEFAULT NULL,
  `custID` int(11) DEFAULT NULL,
  `inv_created_by` varchar(100) DEFAULT NULL,
  `inv_createdDate` datetime DEFAULT NULL,
  `updateBy` varchar(100) DEFAULT NULL,
  `updateDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoice_details`
--

CREATE TABLE `tbl_invoice_details` (
  `invDet_id` int(11) NOT NULL,
  `invNum` varchar(100) DEFAULT NULL,
  `productTypeID` int(11) DEFAULT NULL,
  `custName` varchar(150) DEFAULT NULL,
  `custPhone` varchar(20) DEFAULT NULL,
  `custAddress` varchar(150) DEFAULT NULL,
  `custEmail` varchar(50) DEFAULT NULL,
  `deliveryTime` varchar(50) DEFAULT NULL,
  `prodQty` varchar(20) DEFAULT NULL,
  `totalAmount` varchar(20) DEFAULT NULL,
  `amountCollect` varchar(20) DEFAULT NULL,
  `amountDue` varchar(20) DEFAULT NULL,
  `invComment` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `ordID` int(11) NOT NULL,
  `inv_num` varchar(100) NOT NULL,
  `prod_name` varchar(150) DEFAULT NULL,
  `prod_id` int(11) NOT NULL,
  `prod_qty` int(11) NOT NULL,
  `unitPrice` varchar(20) DEFAULT NULL,
  `totalAmount` varchar(20) DEFAULT NULL,
  `creation_date` datetime NOT NULL,
  `creation_by` varchar(100) NOT NULL,
  `created_status` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prod_details`
--

CREATE TABLE `tbl_prod_details` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(120) DEFAULT NULL,
  `prod_details` varchar(768) NOT NULL,
  `prod_MRP_price` varchar(50) DEFAULT NULL,
  `prod_SELLER_price` varchar(20) DEFAULT NULL,
  `prod_qty` int(11) DEFAULT NULL,
  `prod_image` varchar(50) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `prod_shop` varchar(100) DEFAULT NULL,
  `prod_cat` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_prod_details`
--

INSERT INTO `tbl_prod_details` (`prod_id`, `prod_name`, `prod_details`, `prod_MRP_price`, `prod_SELLER_price`, `prod_qty`, `prod_image`, `created_date`, `prod_shop`, `prod_cat`) VALUES
(1, 'Lixiandi pearl whitening cream', '', '150', NULL, 10, NULL, '2020-03-27 17:18:00', 'jamijoy', 'Category 1'),
(2, 'Lanxi cherry kiwi tomato whitening cream', '', '180', NULL, 10, NULL, '2020-03-27 17:18:00', 'jamijoy', 'Category 1'),
(3, 'Lanxi apple and gingo whitening cream', '', '170', NULL, 10, NULL, '2020-03-27 17:18:00', 'jamijoy', 'Category 1'),
(4, 'kim whitening pearl cream', '', '122', NULL, 18, NULL, '2020-03-27 17:18:00', 'jamijoy', 'Category 1'),
(5, 'Aichun beauty whitening face cream', '', '182', NULL, 20, NULL, '2020-03-27 17:18:00', 'jamijoy', 'Category 1'),
(6, 'Lanxi ginseng whitening beauty melatonin cream', '', '182', NULL, 20, NULL, '2020-03-27 17:18:00', 'jamijoy', 'Category 1'),
(7, 'Dermeinaier egg shell yeast mask cream', '', '110', NULL, 10, NULL, '2020-03-27 17:18:00', 'jamijoy', 'Category 1'),
(8, 'Bio active facial ehitening cream for men', '', '170', NULL, 6, NULL, '2020-03-27 17:18:00', 'jamijoy', 'Category 2'),
(9, 'Bio active face whitening cream', '', '180', NULL, 6, NULL, '2020-03-27 17:18:00', 'jamijoy', 'Category 2'),
(10, 'ALIKE boost luster Superior whitening cream', '', '110', NULL, 6, NULL, '2020-03-27 17:18:00', 'jamijoy', 'Category 2'),
(11, '7 days plastic whitening regeneration cream', '', '150', NULL, 6, NULL, '2020-03-27 17:18:00', 'jamijoy', 'Category 2'),
(12, 'Garnier light complete farness cream', '', '180', NULL, 4, NULL, '2020-03-27 17:18:00', 'jamijoy', 'Category 2'),
(13, 'zafran whitening cream', '', '120', NULL, 4, NULL, '2020-03-27 17:18:00', 'jamijoy', 'Category 2'),
(14, 'Gul white 7 in 1 cream', '', '110', NULL, 11, NULL, '2020-03-27 17:18:00', 'jamijoy', 'Category 2'),
(15, '4k plus whitening cream', '', '150', NULL, 10, NULL, '2020-03-27 17:18:00', 'jamijoy', 'Category 2'),
(16, 'Cathy doll L-Glutathione Magic cream', '', '120', NULL, 10, NULL, '2020-03-27 17:18:00', 'jamijoy', 'Category 2'),
(17, 'Egg white & Cherry whitening cream', '', '110', NULL, 5, NULL, '2020-03-27 17:18:00', 'jamijoy', 'Category 3'),
(18, 'lanting Birds nest whitening cream', '', '160', NULL, 11, NULL, '2020-03-27 17:18:00', 'jamijoy', 'Category 3'),
(19, 'Yc whitenimg Total Fairness cream & Herbal formula', '', '160', NULL, 18, NULL, '2020-03-27 17:18:00', 'jamijoy', 'Category 3'),
(20, 'U white peral cream Ginseng whitening cream', '', '120', NULL, 12, NULL, '2020-03-27 17:18:00', 'jamijoy', 'Category 3'),
(21, 'Whitening Rose Beauty cream', '', '110', NULL, 12, NULL, '2020-03-28 17:50:00', 'jamijoy', 'Category 3'),
(22, 'Berry plus Extra  whitening cream', '', '110', NULL, 11, NULL, '2020-03-28 17:46:00', 'jamijoy', 'Category 3'),
(23, 'Collagen Deep cleansing snail whitening cream', '', '140', NULL, 11, NULL, '2020-03-28 17:45:00', 'jamijoy', 'Category 3'),
(24, '2 pcs FEIQUE herbal extract skin whitening Anti-Freckle cream', '', '110', NULL, 11, NULL, '2020-03-28 17:42:00', 'jamijoy', 'Category 3'),
(25, 'Lanxi pearl whitening Beauty Melatonin cream', '', '140', NULL, 14, NULL, '2020-03-28 17:40:00', 'jamijoy', 'Category 4'),
(26, 'Lanxi Birds Nest whitenimg cream', '', '140', NULL, 14, NULL, '2020-03-28 17:38:00', 'jamijoy', 'Category 4'),
(27, 'Body Cream NO-1 ..Vietnam Whitening cream', '', '120', NULL, 14, NULL, '2020-03-28 17:28:00', 'jamijoy', 'Category 4'),
(28, 'Cherry whitening Beauty Melatonin cream', '', '170', NULL, 14, NULL, '2020-03-28 17:10:00', 'jamijoy', 'Category 4'),
(29, 'LAB-Y whitening Booster body cream', '', '120', NULL, 14, NULL, '2020-03-28 17:18:00', 'jamijoy', 'Category 4'),
(30, 'Biocos beauty cream', '', '110', NULL, 14, NULL, '2020-03-29 17:18:00', 'jamijoy', 'Category 4'),
(42, 'Hola Biscuit', '', '60', NULL, 25, NULL, '2020-03-31 02:22:00', 'jami 2', 'Category 4'),
(43, 'Ceilora Anti Hair Fall Shampoo', 'You Will love the Shampoo Very much, Naurishing and Very Shiney with milky absorber portion for hair for well care.', '300', '340', 35, NULL, '2020-07-09 11:07:46', 'Tribal Herbs', 'Category 3'),
(44, 'Hansa Hair Herbal Shampoo', '* Repairs Hair Root\r\n* Prevents Hair Falling\r\n* Gives Shiny look\r\n* Perfect hair naurishment', '525', '560', 35, NULL, '2020-07-09 11:12:51', 'Tribal Herbs', 'Category 3'),
(45, 'Heiko Tama Lightening Haircare (Japnese)', '* Repairs Hair Root\r\n* Prevents Hair Falling', '440', '450', 28, NULL, '2020-07-09 11:17:39', 'Tribal Herbs', 'Category 3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prod_visits`
--

CREATE TABLE `tbl_prod_visits` (
  `prod_id` int(15) NOT NULL,
  `userid` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_prod_visits`
--

INSERT INTO `tbl_prod_visits` (`prod_id`, `userid`) VALUES
(12, 2),
(18, 2),
(21, 4),
(16, 4),
(15, 4),
(14, 4),
(13, 5),
(12, 5),
(11, 5),
(10, 5),
(23, 1),
(12, 1),
(3, 1),
(21, 1),
(1, 1),
(22, 1),
(0, 1),
(1, 2),
(43, 2),
(44, 2),
(45, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sitedata`
--

CREATE TABLE `tbl_sitedata` (
  `element` varchar(30) NOT NULL,
  `data` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sitedata`
--

INSERT INTO `tbl_sitedata` (`element`, `data`) VALUES
('contact1', '(880) 1779 611966'),
('email1', 'sales@shopify.com'),
('fblink', 'www.facebook.com/ShopifyBD'),
('twtlink', 'www.twitter.com/ShopifyBD'),
('linkedin', 'www.linkedin.com/ShopifyBD'),
('gglink', 'www.google.com/ShopifyBD'),
('sublink', 'We serve your desire'),
('slider1head', 'Site Slide One'),
('slider1body', 'Subtitile'),
('slider1button', ''),
('slider2head', 'Learn To Shop'),
('slider2body', 'Subtitle Here'),
('slider2button', ''),
('cat1', ''),
('cat1sub', 'THis is showcase for data Category 1'),
('cat2', ''),
('cat2sub', 'THis Is Showcase For Data Category 2'),
('cat3', ''),
('cat3sub', 'THis Is Showcase For Data Category 3'),
('cat4', ''),
('cat4sub', 'THis Is Showcase For Data Category 4'),
('postcad', 'Shop Showcase'),
('postcadsub', 'Subtitle'),
('postcaddata', 'Data to reviiew ... Data to reviiew ...  Data to reviiew ...  Data to reviiew ... Data to reviiew ...  Data to reviiew ...  Data to reviiew ...  Data to reviiew ...'),
('postcadbutton', ''),
('ProdShowTitle1', 'WEEKLY FEATURED PRODUCTS'),
('ProdShowTitle2', 'TRENDING'),
('ProdShowTitle3', 'NEW ARRIVALS'),
('ProdShowTitle4', 'PRODUCTS VISITED'),
('ProdShowTitle5', 'FUN FACTORS'),
('ProdShowTitle6', 'OUR BRANDS'),
('btnlink1', ''),
('btnlink2', ''),
('btnlink3', ''),
('btnlink4', ''),
('btnlink5', ''),
('btnlink6', ''),
('btnlink7', ''),
('btnlink8', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_feedback`
--

CREATE TABLE `tbl_user_feedback` (
  `userid` int(10) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wishlist`
--

CREATE TABLE `tbl_wishlist` (
  `user_id` int(15) NOT NULL,
  `prod_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_wishlist`
--

INSERT INTO `tbl_wishlist` (`user_id`, `prod_id`) VALUES
(1, 15),
(1, 9),
(1, 21),
(1, 16),
(1, 19),
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(60) NOT NULL,
  `type` varchar(15) NOT NULL,
  `company` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `email`, `password`, `image`, `type`, `company`, `address`, `contact`) VALUES
(1, 'Jami', 'jamijoyy@gmail.com', '7815696ecbf1c96e6894b779456d330e', '1.jpg', 'admin', 'N/A', 'Banani, Dhaka - 1220.', 1779611976),
(2, 'Uday', 'nahinuday@shopify.bd', '7815696ecbf1c96e6894b779456d330e', '2.jpg', 'admin', 'N/A', 'Lalmonir hat, Bangladesh', 1700598073),
(4, 'jamijoy.science', 'jami@gmail.com', '7815696ecbf1c96e6894b779456d330e', '', 'user', 'teset', '', 1726900207),
(5, 'ranakader', 'rana.kader@gmail.com', 'debdeecd7ed7c3258ab945cba0396e15', '', 'user', 'N/A', 'Brooklyn Height, Barisal.', 1581273245);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cust_info`
--
ALTER TABLE `tbl_cust_info`
  ADD PRIMARY KEY (`custID`);

--
-- Indexes for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  ADD PRIMARY KEY (`inv_id`);

--
-- Indexes for table `tbl_invoice_details`
--
ALTER TABLE `tbl_invoice_details`
  ADD PRIMARY KEY (`invDet_id`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`ordID`);

--
-- Indexes for table `tbl_prod_details`
--
ALTER TABLE `tbl_prod_details`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cust_info`
--
ALTER TABLE `tbl_cust_info`
  MODIFY `custID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  MODIFY `inv_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_invoice_details`
--
ALTER TABLE `tbl_invoice_details`
  MODIFY `invDet_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `ordID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_prod_details`
--
ALTER TABLE `tbl_prod_details`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
