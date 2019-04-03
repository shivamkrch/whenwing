-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2019 at 08:43 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `whenwing`
--

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service_category` varchar(40) NOT NULL,
  `service` varchar(40) NOT NULL,
  `types` varchar(100) NOT NULL,
  `appliance_types` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_category`, `service`, `types`, `appliance_types`) VALUES
(1, 'Appliance Repair', 'AC service repair and installation', 'Repair,Installation,Un-Installation,Gas Filling,Wet Servicing', 'Window AC, Split AC'),
(2, 'Appliance Repair', 'Referigerator Repair', 'Repair/fixing,Maintenance', 'Single Door,Double Door,Triple Door,Side by Side'),
(3, 'Appliance Repair', 'washing machine repair', 'repair,installation/un-installation', 'Front load,top load,other'),
(4, 'Appliance Repair', 'water purifier repair', 'Repair,Service/Filter Charge,Installation,Un-Installation', ''),
(5, 'Appliance Repair', 'microwave repair', 'repair,heating problem,other', ''),
(6, 'Appliance Repair', 'TV repair and installation', 'Repair/Replacement,Installation', 'LCD,LED,Plasma'),
(7, 'Appliance Repair', 'water heater repair', 'repair,maintenance', 'Electric geyser,gas geyser,immersion rod,other'),
(8, 'Appliance Repair', 'computer repair', 'laptop,desktop,macbook', 'repair,maintenance'),
(9, 'Appliance Repair', 'mobile repair', 'symbian,Android,iOS,BADA,Windows,Palm', 'repair,software problem');

-- --------------------------------------------------------

--
-- Table structure for table `ww_customers`
--

CREATE TABLE `ww_customers` (
  `id` bigint(20) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `cust_password` varchar(256) NOT NULL,
  `reg_date` datetime DEFAULT NULL,
  `active_status` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ww_customers`
--

INSERT INTO `ww_customers` (`id`, `fullname`, `email`, `mobile`, `cust_password`, `reg_date`, `active_status`) VALUES
(1, 'sdfsdf', 'sdfsdf', 'sfdfsf', 'sdffdf', '2019-03-07 00:00:00', 2),
(2, 'sddas', 's@s.com', 'sssss', 's@s.com', NULL, 1),
(3, 'sadad', 'asdas@dfsdf..cfd', 'sdasfasfa', 'afsfasfasf', '2018-08-20 23:48:39', 1),
(4, '44tert', 'ytyrt@jgjgh', 'hghf', 'sdsadasd', '2018-08-23 03:15:16', 0),
(5, 'cgcgfgf', 'fxxfd', 'esfxedxe', 'fxcfd', '2018-08-23 03:15:58', 0),
(6, 'mzsasvdv', 'amitshssfavdnvnds', '5649791156', 'nskndvklnf', '2018-08-26 09:48:04', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ww_customers_social`
--

CREATE TABLE `ww_customers_social` (
  `id` bigint(20) NOT NULL,
  `id_social` varchar(50) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `reg_date` datetime DEFAULT NULL,
  `active_status` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ww_customer_order`
--

CREATE TABLE `ww_customer_order` (
  `order_id` bigint(20) NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `provider_id` bigint(20) NOT NULL,
  `order_type1` varchar(150) NOT NULL,
  `order_type2` varchar(150) NOT NULL,
  `order_type3` varchar(150) NOT NULL,
  `order_type4` varchar(150) NOT NULL,
  `order_date` datetime NOT NULL,
  `order_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ww_customer_order`
--

INSERT INTO `ww_customer_order` (`order_id`, `customer_id`, `provider_id`, `order_type1`, `order_type2`, `order_type3`, `order_type4`, `order_date`, `order_status`) VALUES
(1, 123, 533, 'Home Services', 'Carpainter', 'Door', 'Advisor (Free)', '2018-08-23 00:23:34', 0),
(2, 123, 533, 'Home Services', 'Carpainter', 'Door', 'Advisor (Free)', '2018-08-23 00:24:22', 1),
(3, 123, 533, 'Home Services', 'Carpainter', 'Door', 'Advisor (Free)', '2018-08-23 00:24:23', 0),
(4, 123, 533, 'Home Services', 'Carpainter', 'Door', 'Advisor (Free)', '2018-08-23 00:24:25', 0),
(5, 123, 533, 'Home Services', 'Carpainter', 'Door', 'Advisor (Free)', '2018-08-23 00:24:27', 1),
(6, 123, 533, 'Home Services', 'Carpainter', 'Door', 'Advisor (Free)', '2018-08-23 00:24:41', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ww_provider`
--

CREATE TABLE `ww_provider` (
  `prov_id` bigint(11) NOT NULL,
  `prov_name` varchar(256) NOT NULL,
  `age` int(11) NOT NULL,
  `addr` varchar(500) NOT NULL,
  `profession` varchar(50) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `workexp` varchar(20) NOT NULL,
  `prov_record` varchar(250) NOT NULL,
  `about` varchar(500) NOT NULL,
  `speciality` varchar(100) NOT NULL,
  `photo_id` varchar(32) NOT NULL,
  `price` int(11) NOT NULL,
  `reg_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `prov_active_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Service Provider Information';

--
-- Dumping data for table `ww_provider`
--

INSERT INTO `ww_provider` (`prov_id`, `prov_name`, `age`, `addr`, `profession`, `contact`, `workexp`, `prov_record`, `about`, `speciality`, `photo_id`, `price`, `reg_date`, `prov_active_status`) VALUES
(3, 'asdasd', 1, 'asd', 'Home Services', 'sadsad', 'dsad', 'sadas', 'asdasd', 'Specialities 1', 'photo', 0, '2018-08-20 23:51:54', 0),
(4, 'dsdsa', 3, 'asdad', 'Home Services', 'asdas', 'sdadd', 'sad', 'sdasd', 'Specialities 1', 'photo', 0, '2018-08-21 02:29:57', 2),
(5, 'dsdsa', 3, 'asdad', 'Home Services', 'asdas', 'sdadd', 'sad', 'sdasd', 'Specialities 1', 'photo', 0, '2018-08-21 02:30:45', 2),
(6, 'dsdsa', 3, 'asdad', 'Home Services', 'asdas', 'sdadd', 'sad', 'sdasd', 'Specialities 1', 'photo', 0, '2018-08-21 02:31:07', 2),
(7, 'dsdsa', 3, 'asdad', 'Home Services', 'asdas', 'sdadd', 'sad', 'sdasd', 'Specialities 1', 'photo', 0, '2018-08-21 02:31:39', 2),
(8, 'dsdsa', 3, 'asdad', 'Home Services', 'asdas', 'sdadd', 'sad', 'sdasd', 'Specialities 1', 'photo', 0, '2018-08-21 02:31:41', 0),
(9, 'dsdsa', 3, 'asdad', 'Home Services', 'asdas', 'sdadd', 'sad', 'sdasd', 'Specialities 1', 'photo', 0, '2018-08-21 02:31:56', 0),
(10, 'dasd', 2, 'sadasds', 'Home Services', 'asdsad', 'asdsad', 'sdsadas', 'asdasd', 'Specialities 1', 'photo', 0, '2018-08-21 02:32:52', 0),
(11, 'sadd', 1, 'sahdbhsbhd', 'Showroom', 'kkjjkb', 'hbbhjbjh', 'bhjbj', 'hjbjhb', 'Specialities 1', 'photo', 0, '2018-08-21 02:34:04', 2),
(12, 'aff', 0, '', 'Home Services', '9555553381', '', '', '', 'Choose Your Specialities', 'photo', 0, '2018-08-23 06:11:11', 0),
(13, 'manish', 55, 'a-584,gali no-6 tkncsk', 'Rojgar', '9555553381', 'new', 'azad', 'am new hee\r\n', 'Specialities 1', 'photo', 0, '2018-08-23 07:07:21', 0),
(14, 'sandee', 17, 'a-584,gali no-6 tkncsk', 'Looking Shop', '9555553381', 'new', 'azad', 'an new hee and want inceses m bsi', 'Specialities 1', 'photo', 0, '2018-08-24 03:25:45', 2),
(15, 'aff', 0, '', 'Carpainter', '9555553381', '', '', '', '', 'photo', 0, '2018-08-25 19:35:55', 1),
(16, 'aff', 0, '', 'Plumber', '9555553381', '', '', '', '', 'photo', 0, '2018-08-26 09:22:55', 0),
(17, 'manish', 45, 'a-584,gali no-6 tkncsk', 'Web Designer & Developer', '987133746', 'new', 'azad', 'nczlklbvnfd;lbxc cnk', 'feshe', 'photo', 0, '2018-08-26 09:47:27', 0),
(18, 'hhahs', 55, 'ftccgf', 'Renovation', '66', 'Fresher', 'ftyfty', 'gvgvh', 'Fresher', 'ce7c6dc93371451d8e15e13a3b2bda7b', 0, '2018-09-02 04:53:02', 0),
(19, 'eaklngkel', 513, 'sflhm', 'Web Designer & Developer', '46', 'New', '2018-09-11', 'safml;gml;s', 'zdghzd', 'e8ad924b6ff193d6d21d9ce50719f597', 0, '2018-09-02 06:01:58', 0),
(20, 'Yo yo honey Singh', 3000, 'GB road', 'Dancer', '1234567890', 'Experienced', 'Record bahut kharab hai \r\nDobara mat poochiyo', 'Kya karega Jaan ke complaint karega itni himmat ', 'Fresher', 'df01c3c036408e3d897bd3371513b76b', 0, '2018-09-03 08:20:02', 0),
(21, 'aff', 0, 'a-584,gali no-6 tkncsk', 'Renovation', '9555553381', 'New', '2018-09-05', 'fvhk,,,mmm', 'feshe', '31d10362f8b315f2b48bf11922cbb8b8', 0, '2018-09-09 05:33:32', 0),
(22, 'The SKC', 20, 'Muzaffarpur', 'AC service Repair and Installation', '98565656566', 'none', '', 'mcb jhhhjn jhhnn  jhd54ryh jkhfn jg', 'best in job', '', 300, '0000-00-00 00:00:00', 1),
(23, 'A8A Appliances', 21, 'Delhi', 'AC Service Repair and installation', '9665566566', '2 years', 'repaired 20 ACs in last 2 months', 'dask kajsd kasbdsd qjewq', 'repairs all kind of ACs', '', 250, '0000-00-00 00:00:00', 0),
(24, 'A8a appliances', 28, 'Shaniganj', 'Referigerator repair', '8465131656', '5 years', 'None', 'Best in the area', 'Repairs all kinnds of referigerators.', '', 400, '2019-04-02 18:53:10', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ww_customers`
--
ALTER TABLE `ww_customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ww_customers_social`
--
ALTER TABLE `ww_customers_social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ww_customer_order`
--
ALTER TABLE `ww_customer_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `ww_provider`
--
ALTER TABLE `ww_provider`
  ADD PRIMARY KEY (`prov_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ww_customers`
--
ALTER TABLE `ww_customers`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ww_customers_social`
--
ALTER TABLE `ww_customers_social`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ww_customer_order`
--
ALTER TABLE `ww_customer_order`
  MODIFY `order_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ww_provider`
--
ALTER TABLE `ww_provider`
  MODIFY `prov_id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
