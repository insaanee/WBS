-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2019 at 05:10 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `employee_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time_in` time NOT NULL,
  `status` int(1) NOT NULL,
  `time_out` time NOT NULL,
  `num_hr` double NOT NULL,
  `id` int(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`employee_id`, `date`, `time_in`, `status`, `time_out`, `num_hr`, `id`) VALUES
(6, '2019-12-08', '01:32:24', 1, '05:00:00', 3, 13),
(6, '2019-12-15', '14:56:20', 0, '00:00:00', 0, 14),
(7, '2019-12-17', '15:36:42', 0, '00:00:00', 0, 15),
(8, '2019-12-17', '15:40:53', 0, '17:00:00', 1.3166666666667, 16);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_active` int(11) NOT NULL DEFAULT '0',
  `brand_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`, `brand_active`, `brand_status`) VALUES
(14, 'Rolex', 1, 1),
(15, 'Seiko', 1, 1),
(16, 'Citizen', 1, 1),
(17, 'Unilever12', 1, 2),
(18, 'jkj', 1, 2),
(19, 'dgs', 1, 2),
(20, 'rtyjkl', 1, 2),
(21, 'vgbvhnm', 1, 2),
(22, 'dfghj', 1, 2),
(23, 'xcgjv', 1, 2),
(24, 'cvx', 1, 2),
(25, 'dsf', 1, 2),
(26, 'dsss', 1, 2),
(27, 'sssss', 1, 2),
(28, 'dfghb', 1, 2),
(29, 'sdf', 1, 2),
(30, 'sdfbvn', 1, 2),
(31, 'xdcfgvbn', 1, 2),
(32, 'gjhjdfg', 1, 2),
(33, 'sdfgh', 1, 2),
(34, 'sdgn', 1, 2),
(35, 'erty', 1, 2),
(36, 'Unilever', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cashadvance`
--

CREATE TABLE IF NOT EXISTS `cashadvance` (
  `date_advance` date NOT NULL,
  `employee_id` varchar(15) NOT NULL,
  `amount` double NOT NULL,
  `id` int(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cashadvance`
--

INSERT INTO `cashadvance` (`date_advance`, `employee_id`, `amount`, `id`) VALUES
('2019-12-08', '6', 1000, 2),
('2019-12-15', '7', 500, 3);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `categories_id` int(11) NOT NULL,
  `categories_name` varchar(255) NOT NULL,
  `categories_active` int(11) NOT NULL DEFAULT '0',
  `categories_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categories_id`, `categories_name`, `categories_active`, `categories_status`) VALUES
(16, 'Male', 1, 1),
(17, 'Female', 1, 1),
(18, 'Kid', 1, 1),
(19, 'Wall Clock', 1, 2),
(20, 'Table clock', 1, 2),
(21, 'Daily product', 1, 2),
(22, 'dfgh', 2, 2),
(23, 'dfgd', 1, 2),
(24, 'dhgnhnh', 1, 2),
(25, 'dfg', 1, 2),
(26, 'Daily product', 1, 2),
(27, 'werfghjeee', 1, 2),
(28, 'sdfgh', 1, 2),
(29, 'Daily product', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `deductions`
--

CREATE TABLE IF NOT EXISTS `deductions` (
  `description` varchar(100) NOT NULL,
  `amount` double NOT NULL,
  `id` int(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deductions`
--

INSERT INTO `deductions` (`description`, `amount`, `id`) VALUES
('16103060', 500, 4);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `employee_id` varchar(15) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `birthdate` date NOT NULL,
  `contact_info` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `gross_value` varchar(90) NOT NULL,
  `position_id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `created_on` date NOT NULL,
  `id` int(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employee_id`, `firstname`, `lastname`, `address`, `birthdate`, `contact_info`, `gender`, `gross_value`, `position_id`, `schedule_id`, `photo`, `created_on`, `id`) VALUES
('16103060', 'sajib', 'hssin', 'dhaka', '1995-04-24', '01718527341', 'Male', '2000,3000,4000,2000,1000', 3, 1, 'log.png', '2019-12-08', 6),
('16103333', 'Saikat', 'saha', 'uttara', '1995-11-24', '01767359553', 'Male', '4000,5000,3000,2000,2000', 1, 2, 'man-300x300.png', '2019-12-08', 7),
('15205533', 'sam', 'ahamed', 'Dhaka', '1995-11-24', '0121541545', 'Male', '1000,5000,3000,500,500', 2, 2, '', '2019-12-17', 8),
('16103373', 'nadia', 'Islam', 'Dhaka', '1995-11-26', '01756362120', 'Female', '1000,5000,1000,500,500', 3, 2, '', '2019-12-30', 9),
('16103366', 'Naim', 'Rahaman', 'Dhaka', '1995-11-24', '01745124578', 'Male', '1000,5000,1000,500,500', 2, 2, '', '2019-12-30', 10);

-- --------------------------------------------------------

--
-- Table structure for table `employee_login`
--

CREATE TABLE IF NOT EXISTS `employee_login` (
  `id` int(20) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_login`
--

INSERT INTO `employee_login` (`id`, `user_id`, `password`) VALUES
(1, '15103272', '12345'),
(2, '16103272', '67890'),
(3, '15103301', '54321'),
(4, '15103287', '09876');

-- --------------------------------------------------------

--
-- Table structure for table `emp_leave`
--

CREATE TABLE IF NOT EXISTS `emp_leave` (
  `id` int(20) NOT NULL,
  `empid` varchar(50) NOT NULL,
  `from` varchar(100) NOT NULL,
  `to` varchar(50) NOT NULL,
  `reason` text NOT NULL,
  `status` int(50) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_leave`
--

INSERT INTO `emp_leave` (`id`, `empid`, `from`, `to`, `reason`, `status`, `name`) VALUES
(10, '15103272', '2019-08-01', '2019-08-03', ' sickness', 3, 'rafia');

-- --------------------------------------------------------

--
-- Table structure for table `emp_monitoring`
--

CREATE TABLE IF NOT EXISTS `emp_monitoring` (
  `id` int(20) NOT NULL,
  `emp_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `running_project` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `points` int(20) NOT NULL,
  `start_date` varchar(20) NOT NULL,
  `end_date` varchar(20) NOT NULL,
  `feedback` text NOT NULL,
  `submission_date` varchar(20) NOT NULL,
  `file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_monitoring`
--

INSERT INTO `emp_monitoring` (`id`, `emp_id`, `name`, `position`, `running_project`, `status`, `points`, `start_date`, `end_date`, `feedback`, `submission_date`, `file`) VALUES
(23, '16103272', 'Sojib', 'programmer', 'ecommerce project', '1', 3, '2019-08-03', '2019-08-04', ' In progress', '2019-08-04', '1st week.docx'),
(30, '15103272', 'rafia', 'programmer', 'hotel management', '1', 8, '2019-08-08', '2019-08-13', ' good', '2019-08-05', '1st week.docx'),
(37, '15103301', 'Bithi', 'programmer', 'website design', '0', 0, '2019-08-18', '2019-08-20', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `emp_ranking`
--

CREATE TABLE IF NOT EXISTS `emp_ranking` (
  `id` int(20) NOT NULL,
  `emp_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `rank` int(20) NOT NULL,
  `points` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hr_table`
--

CREATE TABLE IF NOT EXISTS `hr_table` (
  `id` int(30) NOT NULL,
  `employe_name` varchar(200) NOT NULL,
  `employe_designation` varchar(200) NOT NULL,
  `salary` int(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` int(200) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hr_table`
--

INSERT INTO `hr_table` (`id`, `employe_name`, `employe_designation`, `salary`, `email`, `mobile`, `Address`, `status`) VALUES
(3, '', '', 0, '', 0, 'sell was good													', 17);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `id` int(20) NOT NULL,
  `notice_title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_contact` varchar(255) NOT NULL,
  `sub_total` varchar(255) NOT NULL,
  `vat` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `grand_total` varchar(255) NOT NULL,
  `paid` varchar(255) NOT NULL,
  `due` varchar(255) NOT NULL,
  `payment_type` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL,
  `order_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_date`, `client_name`, `client_contact`, `sub_total`, `vat`, `total_amount`, `discount`, `grand_total`, `paid`, `due`, `payment_type`, `payment_status`, `order_status`) VALUES
(15, '2019-08-08', 'Hasan', '01930889528', '72000.00', '9360.00', '81360.00', '0', '81360.00', '81360', '0.00', 2, 1, 2),
(16, '2019-08-08', 'Hammam', '01930889528', '38500.00', '5005.00', '43505.00', '0', '43505.00', '43505', '0.00', 2, 1, 2),
(17, '2019-12-07', 'kpkop', '0412424', '6000.00', '780.00', '6780.00', '0', '6780.00', '6780', '0.00', 2, 1, 2),
(18, '2019-12-15', 'saam', '01251021252', '12200.00', '1586.00', '13786.00', '', '13786.00', '13786', '0.00', 2, 1, 2),
(19, '2019-12-15', 'kgjjg', '457643', '7000.00', '910.00', '7910.00', '0', '7910.00', '7910', '0.00', 2, 1, 2),
(20, '2019-12-15', 'sam', '023131232', '6100.00', '793.00', '6893.00', '0', '6893.00', '6893', '0.00', 2, 1, 1),
(21, '2019-12-17', 'dfghj', '4141', '3500.00', '455.00', '3955.00', '', '3955.00', '3955', '0.00', 2, 1, 1),
(22, '2019-12-17', 'dfghj', '4141', '3500.00', '455.00', '3955.00', '', '3955.00', '3955', '0.00', 2, 1, 2),
(23, '2019-12-17', 'dfgh', '14044', '6000.00', '780.00', '6780.00', '0', '6780.00', '6780', '0.00', 2, 1, 2),
(24, '2019-12-17', 'dfghj', '0441', '6000.00', '780.00', '6780.00', '0', '6780.00', '6775', '5.00', 2, 3, 2),
(25, '2019-12-10', 'cxvb', '052345524', '21500.00', '2795.00', '24295.00', '0', '24295.00', '24295', '0', 2, 1, 2),
(26, '2019-12-30', 'Rahim', '01745369885', '700.00', '91.00', '791.00', '0', '791.00', '791', '0.00', 2, 1, 1),
(27, '2019-12-30', 'karim', '01745362514', '1500.00', '195.00', '1695.00', '0', '1695.00', '0000', '1695.00', 2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE IF NOT EXISTS `order_item` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL DEFAULT '0',
  `product_id` int(11) NOT NULL DEFAULT '0',
  `quantity` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `order_item_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`order_item_id`, `order_id`, `product_id`, `quantity`, `rate`, `total`, `order_item_status`) VALUES
(24, 16, 18, '11', '3500', '38500.00', 2),
(25, 17, 17, '1', '6000', '6000.00', 2),
(26, 18, 20, '2', '100', '200.00', 2),
(27, 18, 17, '2', '6000', '12000.00', 2),
(29, 0, 20, '5', '100', '500.00', 1),
(30, 0, 17, '1', '6000', '6000.00', 1),
(37, 26, 22, '2', '250', '500.00', 1),
(38, 26, 23, '2', '100', '200.00', 1),
(39, 27, 23, '15', '100', '1500.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `overtime`
--

CREATE TABLE IF NOT EXISTS `overtime` (
  `employee_id` varchar(15) NOT NULL,
  `hours` double NOT NULL,
  `rate` double NOT NULL,
  `date_overtime` date NOT NULL,
  `id` int(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `overtime`
--

INSERT INTO `overtime` (`employee_id`, `hours`, `rate`, `date_overtime`, `id`) VALUES
('4', 3.25, 20, '2019-08-19', 2),
('2', 3.6666666666667, 15, '2019-07-28', 3);

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE IF NOT EXISTS `position` (
  `description` varchar(150) NOT NULL,
  `rate` double NOT NULL,
  `id` int(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`description`, `rate`, `id`) VALUES
('Manager', 100, 1),
('Security', 50, 2),
('Sales man', 35, 3),
('Worker', 20, 4);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` text NOT NULL,
  `brand_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `pro_cost` int(20) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `supplier_id` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_image`, `brand_id`, `categories_id`, `quantity`, `pro_cost`, `rate`, `active`, `status`, `supplier_id`) VALUES
(17, 'Rolex 1', '../assests/images/6462044855d4c2ce5ba55b.png', 14, 16, '5', 4500, '6000', 2, 1, 'ali express'),
(18, 'Seiko 2', '../assests/images/2664706335d4c2d190e0ba.png', 15, 17, '10', 2500, '3500', 1, 1, 'daraj '),
(19, 'test', '../assests/images/173435debcd789e29b.jpg', 14, 20, '110', 101, '10', 2, 2, 'ali express'),
(22, 'Vaseline (300ml)', '../assests/images/194165e098c5e6228f.jpg', 36, 29, '13', 220, '250', 1, 1, 'daraj '),
(23, 'Closeup (100gm)', '../assests/images/31145e098c8bce5c9.jpg', 36, 29, '-5', 80, '100', 1, 1, 'daraj ');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `id` int(20) NOT NULL,
  `prod_Id` int(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `msg` text NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `prod_Id`, `username`, `msg`, `date`) VALUES
(2, 18, 'saikat', '		nice sell												', '2019-12-07'),
(3, 17, 'saikat', '	best selling product													', '2019-12-07'),
(5, 20, 'user', '	good													', '2019-12-08');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE IF NOT EXISTS `schedules` (
  `time_in` time NOT NULL,
  `time_out` time NOT NULL,
  `id` int(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`time_in`, `time_out`, `id`) VALUES
('08:00:00', '16:00:00', 1),
('09:00:00', '17:00:00', 2),
('10:00:00', '18:00:00', 3),
('11:00:00', '03:00:00', 4);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `name` varchar(100) NOT NULL,
  `status` int(20) NOT NULL,
  `id` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`name`, `status`, `id`) VALUES
('Ebay', 1, 1),
('daraj ', 1, 2),
('ali express', 1, 3),
('alii', 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` int(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `type`) VALUES
(1, 'Hridoy', 'neer', '', 1),
(2, 'Neer', 'hridoy', '', 0),
(3, 'user', '1234', '', 0),
(4, 'Admin', 'admin', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cashadvance`
--
ALTER TABLE `cashadvance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categories_id`);

--
-- Indexes for table `deductions`
--
ALTER TABLE `deductions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_login`
--
ALTER TABLE `employee_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_leave`
--
ALTER TABLE `emp_leave`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_monitoring`
--
ALTER TABLE `emp_monitoring`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hr_table`
--
ALTER TABLE `hr_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`order_item_id`);

--
-- Indexes for table `overtime`
--
ALTER TABLE `overtime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `cashadvance`
--
ALTER TABLE `cashadvance`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categories_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `deductions`
--
ALTER TABLE `deductions`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `hr_table`
--
ALTER TABLE `hr_table`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `overtime`
--
ALTER TABLE `overtime`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
