-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2020 at 01:51 PM
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

--
-- Dumping data for table `tbl_cust_info`
--

INSERT INTO `tbl_cust_info` (`custID`, `custName`, `custPhone`, `custEmail`, `custAddress`, `num_of_inv`) VALUES
(1, 'AB Joy Jami', '01779611966', 'jamijoy@gmail.com', 'Kotpara, Rangpur', 6),
(2, 'Jami Joy', '01779611967', 'jamijoy@gmail.com', 'Kotpara, Rangpur', 0),
(3, 'Abdullah ', '01774017778', 'abriyad@gmail.com', 'Kotpara, Rangpur', 0),
(7, 'Palash', '01726200207', 'palash10@gmail.com', 'Mohakhali, Dhaka-1229.', 1),
(8, 'Ratan Tata', '01986123789', 'ratana@gmail.com', 'Kotpara, kahat', 1),
(14, 'Ratan ALi', '01945678234', 'agorait@solution.com', 'RatagBhari, India.', 0),
(15, 'Motin vaya', '01779619166', 'atriazz@atriazz.com', 'Arambag, Dhaka.', 0);

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

--
-- Dumping data for table `tbl_invoice`
--

INSERT INTO `tbl_invoice` (`inv_id`, `inv_date`, `invNum`, `invSeq`, `vat`, `custID`, `inv_created_by`, `inv_createdDate`, `updateBy`, `updateDate`) VALUES
(1, '2020-03-30', '2020-03-30-BLU-2001', '2001', NULL, 4, 'sabit', '2020-03-30 11:08:30', NULL, '0000-00-00 00:00:00'),
(2, '2020-04-03', '2020-04-03-BLU-2002', '2002', NULL, 1, 'admin', '2020-04-03 20:30:39', NULL, '0000-00-00 00:00:00'),
(3, '2020-04-03', '2020-04-03-BLU-2002', '2002', NULL, 8, 'admin', '2020-04-03 20:32:01', NULL, '0000-00-00 00:00:00');

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

--
-- Dumping data for table `tbl_invoice_details`
--

INSERT INTO `tbl_invoice_details` (`invDet_id`, `invNum`, `productTypeID`, `custName`, `custPhone`, `custAddress`, `custEmail`, `deliveryTime`, `prodQty`, `totalAmount`, `amountCollect`, `amountDue`, `invComment`) VALUES
(1, '2020-03-30-BLU-2001', NULL, 'Palash', '01726200207', 'Mohakhali, Dhaka-1229.', 'palash10@gmail.com', NULL, NULL, '640', '400', '240', ''),
(2, '2020-04-03-BLU-2002', NULL, 'AB Joy Jami', '01779611966', 'Kotpara, Rangpur', 'jamijoy@gmail.com', NULL, '3', '1488', '', 'NaN', ''),
(3, '2020-04-03-BLU-2002', NULL, 'Ratan Tata', '01986123789', 'Kotpara, kahat', 'ratana@gmail.com', NULL, '1', '2829', '600', 'NaN', '');

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

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`ordID`, `inv_num`, `prod_name`, `prod_id`, `prod_qty`, `unitPrice`, `totalAmount`, `creation_date`, `creation_by`, `created_status`) VALUES
(1, '2020-03-30-BLU-2001', 'Bio active facial ehitening cream for men', 8, 2, '200', '400', '2020-03-30 11:07:18', 'sabit', 'Y'),
(2, '2020-03-30-BLU-2001', 'kim whitening pearl cream', 4, 3, '80', '240', '2020-03-30 11:07:57', 'sabit', 'Y'),
(3, '2020-04-03-BLU-2002', 'Lanxi apple and gingo whitening cream', 0, 12, '12', '144', '2020-04-03 20:30:01', 'admin', 'Y'),
(4, '2020-04-03-BLU-2002', 'Lanxi ginseng whitening beauty melatonin cream', 0, 12, '12', '144', '2020-04-03 20:30:14', 'admin', 'Y'),
(5, '2020-04-03-BLU-2002', 'Dermeinaier egg shell yeast mask cream', 0, 12, '100', '1200', '2020-04-03 20:30:24', 'admin', 'Y'),
(6, '2020-04-03-BLU-2002', 'Lanxi ginseng whitening beauty melatonin cream', 0, 23, '123', '2829', '2020-04-03 20:31:53', 'admin', 'Y'),
(7, '2020-04-03-BLU-2003', 'Lanxi apple and gingo whitening cream', 0, 34, '24', '816', '2020-04-04 00:53:50', 'admin', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prod_details`
--

CREATE TABLE `tbl_prod_details` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(120) DEFAULT NULL,
  `prod_MRP_price` varchar(50) DEFAULT NULL,
  `prod_SELLER_price` varchar(20) DEFAULT NULL,
  `prod_qty` int(11) DEFAULT NULL,
  `prod_barcode` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `update_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_prod_details`
--

INSERT INTO `tbl_prod_details` (`prod_id`, `prod_name`, `prod_MRP_price`, `prod_SELLER_price`, `prod_qty`, `prod_barcode`, `created_date`, `created_by`, `update_date`, `update_by`) VALUES
(1, 'Lixiandi pearl whitening cream', '150', NULL, 10, NULL, '2020-03-27 17:18:00', 'jamijoy', NULL, NULL),
(2, 'Lanxi cherry kiwi tomato whitening cream', '180', NULL, 10, NULL, '2020-03-27 17:18:00', 'jamijoy', NULL, NULL),
(3, 'Lanxi apple and gingo whitening cream', '170', NULL, 10, NULL, '2020-03-27 17:18:00', 'jamijoy', NULL, NULL),
(4, 'kim whitening pearl cream', '122', NULL, 18, NULL, '2020-03-27 17:18:00', 'jamijoy', NULL, NULL),
(5, 'Aichun beauty whitening face cream', '182', NULL, 20, NULL, '2020-03-27 17:18:00', 'jamijoy', NULL, NULL),
(6, 'Lanxi ginseng whitening beauty melatonin cream', '182', NULL, 20, NULL, '2020-03-27 17:18:00', 'jamijoy', NULL, NULL),
(7, 'Dermeinaier egg shell yeast mask cream', '110', NULL, 10, NULL, '2020-03-27 17:18:00', 'jamijoy', NULL, NULL),
(8, 'Bio active facial ehitening cream for men', '170', NULL, 6, NULL, '2020-03-27 17:18:00', 'jamijoy', NULL, NULL),
(9, 'Bio active face whitening cream', '180', NULL, 6, NULL, '2020-03-27 17:18:00', 'jamijoy', NULL, NULL),
(10, 'ALIKE boost luster Superior whitening cream', '110', NULL, 6, NULL, '2020-03-27 17:18:00', 'jamijoy', NULL, NULL),
(11, '7 days plastic whitening regeneration cream', '150', NULL, 6, NULL, '2020-03-27 17:18:00', 'jamijoy', NULL, NULL),
(12, 'Garnier light complete farness cream', '180', NULL, 4, NULL, '2020-03-27 17:18:00', 'jamijoy', NULL, NULL),
(13, 'zafran whitening cream', '120', NULL, 4, NULL, '2020-03-27 17:18:00', 'jamijoy', NULL, NULL),
(14, 'Gul white 7 in 1 cream', '110', NULL, 11, NULL, '2020-03-27 17:18:00', 'jamijoy', NULL, NULL),
(15, '4k plus whitening cream', '150', NULL, 10, NULL, '2020-03-27 17:18:00', 'jamijoy', NULL, NULL),
(16, 'Cathy doll L-Glutathione Magic cream', '120', NULL, 10, NULL, '2020-03-27 17:18:00', 'jamijoy', NULL, NULL),
(17, 'Egg white & Cherry whitening cream', '110', NULL, 5, NULL, '2020-03-27 17:18:00', 'jamijoy', NULL, NULL),
(18, 'lanting Birds nest whitening cream', '160', NULL, 11, NULL, '2020-03-27 17:18:00', 'jamijoy', NULL, NULL),
(19, 'Yc whitenimg Total Fairness cream & Herbal formula', '160', NULL, 18, NULL, '2020-03-27 17:18:00', 'jamijoy', NULL, NULL),
(20, 'U white peral cream Ginseng whitening cream', '120', NULL, 12, NULL, '2020-03-27 17:18:00', 'jamijoy', NULL, NULL),
(21, 'Whitening Rose Beauty cream', '110', NULL, 12, NULL, '2020-03-27 17:18:00', 'jamijoy', NULL, NULL),
(22, 'Berry plus Extra  whitening cream', '110', NULL, 11, NULL, '2020-03-27 17:18:00', 'jamijoy', NULL, NULL),
(23, 'Collagen Deep cleansing snail whitening cream', '140', NULL, 11, NULL, '2020-03-27 17:18:00', 'jamijoy', NULL, NULL),
(24, '2 pcs FEIQUE herbal extract skin whitening Anti-Freckle cream', '110', NULL, 11, NULL, '2020-03-27 17:18:00', 'jamijoy', NULL, NULL),
(25, 'Lanxi pearl whitening Beauty Melatonin cream', '140', NULL, 14, NULL, '2020-03-27 17:18:00', 'jamijoy', NULL, NULL),
(26, 'Lanxi Birds Nest whitenimg cream', '140', NULL, 14, NULL, '2020-03-27 17:18:00', 'jamijoy', NULL, NULL),
(27, 'Body Cream NO-1 ..Vietnam Whitening cream', '120', NULL, 14, NULL, '2020-03-27 17:18:00', 'jamijoy', NULL, NULL),
(28, 'Cherry whitening Beauty Melatonin cream', '170', NULL, 14, NULL, '2020-03-27 17:18:00', 'jamijoy', NULL, NULL),
(29, 'LAB-Y whitening Booster body cream', '120', NULL, 14, NULL, '2020-03-27 17:18:00', 'jamijoy', NULL, NULL),
(30, 'Biocos beauty cream', '110', NULL, 14, NULL, '2020-03-27 17:18:00', 'jamijoy', NULL, NULL),
(42, 'Hola Biscuit', '60', NULL, 25, NULL, '2020-03-31 02:22:00', 'jami 2', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(15) NOT NULL,
  `company` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `email`, `password`, `type`, `company`, `address`, `contact`) VALUES
(1, 'Jami', 'jamijoyy@gmail.com', '7815696ecbf1c96e6894b779456d330e', 'admin', 'Blu Fashion Ltd.', 'Mohakhali, Dhaka - 1220.', 1779611966),
(2, 'Uday', 'nahinuday@gmail.com', '7815696ecbf1c96e6894b779456d330e', 'admin', 'N/A', 'N/A', 1700598073),
(4, 'jamijoy.science', 'jami@gmail.com', '7815696ecbf1c96e6894b779456d330e', 'user', 'teset', '', 1726900207);

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
  MODIFY `custID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  MODIFY `inv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_invoice_details`
--
ALTER TABLE `tbl_invoice_details`
  MODIFY `invDet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `ordID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_prod_details`
--
ALTER TABLE `tbl_prod_details`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
