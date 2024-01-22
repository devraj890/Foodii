-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2023 at 02:37 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vimi-sweet`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `full_name`, `username`, `password`) VALUES
(13, 'Mitali Purohit', 'admin', '827ccb0eea8a706c4c34a16891f84e7b'),
(14, 'dev ', 'dev', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `title`, `image_name`, `featured`, `active`) VALUES
(9, 'Milk-Based', 'Food_Category_192.jpg', 'Yes', 'Yes'),
(10, 'Laddu', 'Food_Category_998.jpg', 'Yes', 'Yes'),
(11, 'Burfi', 'Food_Category_904.png', 'Yes', 'Yes'),
(12, 'Pudding', 'Food_Category_980.jpg', 'Yes', 'Yes'),
(13, 'Halwa', 'Food_Category_956.jpg', 'Yes', 'Yes'),
(14, 'Suger-Syrup-Based', 'Food_Category_455.jpg', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `cid` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`cid`, `name`, `phone`, `email`, `comment`) VALUES
(6, 'Farukh khan', 9999111120, 'farukh1@gmail.com', 'The sweets are very testy and order delivery at the same day of the order placed. thank you ViMi Sweets...'),
(7, 'Dev rajput', 9865327410, 'dev123@gmail.com', 'The sweets are very testy and order delivery at the same day of the order placed. thank you ViMi Sweets...');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_food`
--

CREATE TABLE `tbl_food` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_food`
--

INSERT INTO `tbl_food` (`id`, `title`, `description`, `price`, `image_name`, `category_id`, `featured`, `active`) VALUES
(10, 'Kaju Katli', 'Kaju katli is an Indian dessert. Kaju means cashew; barfi is often made by thickening milk with sugar and other ingredients (such as dry fruits).', '800.00', 'Food-Name-2912.png', 11, 'Yes', 'Yes'),
(11, 'Gulab Jamun', 'Gulab jamun is a sweet confectionary or dessert, originating in the Indian subcontinent and popular in India, Pakistan, Nepal, the Maldives.', '200.00', 'Food-Name-5697.jpg', 14, 'Yes', 'Yes'),
(12, 'Ras Malai', 'Ras malai, rasamalai, or rossomalai is a dessert originating from the eastern regions of the Indian subcontinent.', '320.00', 'Food-Name-8266.jpg', 9, 'Yes', 'Yes'),
(13, 'Rabri', 'Rabri is a sweet, condensed-milk-based dish, originating from the Indian subcontinent', '340.00', 'Food-Name-3029.jpg', 12, 'Yes', 'Yes'),
(14, 'Laddu', 'Laddu  is a spherical sweet originating from India. Laddus are primarily made from flour, fat (ghee/butter/oil) and sugar or jaggery', '150.00', 'Food-Name-3544.jpg', 10, 'Yes', 'Yes'),
(15, 'Gajar Halwa', 'Gajar halwa is a carrot-based sweet dessert pudding from Punjab.It is made by placing grated carrots, water, milk and sugar, cardamom and then cooking while stirring regularly.', '150.00', 'Food-Name-6338.jpg', 13, 'Yes', 'Yes'),
(16, 'Mysore pak', 'Mysore pak is an Indian sweet prepared in ghee. It originated in the city of Mysore,', '350.00', 'Food-Name-3950.png', 9, 'Yes', 'Yes'),
(17, 'Sohan papdi', 'Soan papdi is a popular dessert in the Indian subcontinent. The term sohan is of Persian origin.', '560.00', 'Food-Name-8995.jpg', 11, 'Yes', 'Yes'),
(18, 'Sheera', 'Suji is a type of halvah made by toasting semolina (called सूजी, suji, sooji or रवा, rawa in India) in a fat like ghee or oil, and adding a sweetener like sugar syrup or honey.', '562.00', 'Food-Name-2305.jpg', 13, 'Yes', 'Yes'),
(19, 'sohan_halwa', 'Sohan halwa is a traditional Mughlai dessert in South Asia, which is a variety of dense, sweet confection or halwa. ', '452.00', 'Food-Name-4747.jpg', 13, 'Yes', 'Yes'),
(20, 'Besan laddu', 'Besan laddu is a popular Indian sweet dish made of besan (chickpea flour or gram flour), sugar, and ghee. Besan is roasted in ghee until it has a golden brown appearance with a nutty fragrance. Then sugar is added to it.', '454.00', 'Food-Name-8747.jpg', 10, 'Yes', 'Yes'),
(21, 'Motichoor-laddu', 'Motichoor laddu (Moti-choor means crushed pearls in Hindi[7]) is made from fine boondi where the balls are tiny and are cooked with ghee or oil. The recipe for this laddu originated in north India and is now popular throughout the Indian subcontinent.', '256.00', 'Food-Name-8986.jpg', 10, 'No', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `food` varchar(150) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `customer_name` varchar(150) NOT NULL,
  `customer_contact` varchar(20) NOT NULL,
  `customer_email` varchar(150) NOT NULL,
  `customer_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `food`, `price`, `qty`, `total`, `order_date`, `status`, `customer_name`, `customer_contact`, `customer_email`, `customer_address`) VALUES
(12, 'Kaju Katli', '800.00', 4, '3200.00', '2022-11-16 06:06:02', 'Delivered', 'mitali purohit', '9988776655', 'miti12@gmail.com', '3/2 mit ujjain');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `cid` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`cid`, `name`, `gender`, `phone`, `email`, `address`, `username`, `password`) VALUES
(1, 'mitali purohit', 'Female', 9876543210, 'mitali12@gmail.com', '32/11 sethi nagar ujjain mp', 'mitali12', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tbl_food`
--
ALTER TABLE `tbl_food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `cid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_food`
--
ALTER TABLE `tbl_food`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `cid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
