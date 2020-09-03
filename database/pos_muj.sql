-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2020 at 04:37 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos_muj`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_ons`
--

CREATE TABLE `add_ons` (
  `add_ons_id` int(11) NOT NULL,
  `add_ons_name` varchar(30) NOT NULL,
  `add_ons_sale_price` int(8) NOT NULL,
  `add_ons_buy_price` int(8) NOT NULL,
  `add_ons_ket` text DEFAULT NULL,
  `add_ons_create_by` varchar(30) DEFAULT NULL,
  `add_ons_create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `add_ons_update_by` varchar(30) DEFAULT NULL,
  `add_ons_update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `add_ons_del_status` int(1) NOT NULL COMMENT '	0 = Aktif, 1 = Tdk Aktif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_ons`
--

INSERT INTO `add_ons` (`add_ons_id`, `add_ons_name`, `add_ons_sale_price`, `add_ons_buy_price`, `add_ons_ket`, `add_ons_create_by`, `add_ons_create_date`, `add_ons_update_by`, `add_ons_update_date`, `add_ons_del_status`) VALUES
(1, 'Emergency Kit', 16550000, 7750000, 'apa tuh', NULL, '2020-08-29 21:06:14', NULL, '2020-08-29 21:42:22', 0),
(2, 'Paket Winch Bumper', 21000000, 10500000, '- winch (3 ton)\r\n- bumper depan + tanduk\r\n- bumper belakang + towing', NULL, '2020-08-29 21:17:18', NULL, '2020-08-30 04:17:18', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bank_account`
--

CREATE TABLE `bank_account` (
  `bank_id` int(11) NOT NULL,
  `bank_comp_id` int(20) NOT NULL,
  `bank_name` varchar(20) NOT NULL,
  `bank_no_rek` varchar(30) NOT NULL,
  `bank_an` varchar(20) NOT NULL,
  `bank_branch` varchar(20) NOT NULL,
  `bank_create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `bank_create_by` varchar(20) DEFAULT NULL,
  `bank_update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `bank_update_by` varchar(20) DEFAULT NULL,
  `bank_del_status` int(1) NOT NULL COMMENT ' 0 = Aktif, 1 = Tdk Aktif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank_account`
--

INSERT INTO `bank_account` (`bank_id`, `bank_comp_id`, `bank_name`, `bank_no_rek`, `bank_an`, `bank_branch`, `bank_create_date`, `bank_create_by`, `bank_update_date`, `bank_update_by`, `bank_del_status`) VALUES
(1, 1, 'sfafwf', '2341241', 'sdfasfa', 'fefwefwe', '2020-07-25 21:22:17', NULL, '2020-07-26 04:22:17', NULL, 0),
(2, 2, 'manidir', '213232131', 'asdwqnd', 'asdnowiqdw', '2020-07-25 23:35:50', NULL, '2020-07-26 21:02:11', NULL, 0),
(3, 4, 'asadsa', '121412', 'asdada', 'sdadas', '2020-07-25 23:56:44', NULL, '2020-07-26 06:56:44', NULL, 0),
(4, 5, 'mandiri', '1829812318', 'bkaiad', 'nalskdawd', '2020-07-26 00:06:21', NULL, '2020-07-26 07:06:21', NULL, 0),
(5, 6, 'nadlnwd', '1212412', 's la wl', 's flwef wenlf', '2020-07-26 00:50:49', NULL, '2020-07-26 07:50:49', NULL, 0),
(6, 7, 'madmwpda', '21323', 'sdfasfa', 'fefwefwe', '2020-08-10 00:32:27', NULL, '2020-08-10 07:32:27', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `comp_id` int(11) NOT NULL,
  `comp_name` varchar(30) NOT NULL,
  `comp_datail` text NOT NULL,
  `comp_npwp` bigint(50) NOT NULL,
  `comp_address` text DEFAULT NULL,
  `comp_address2` text DEFAULT NULL,
  `comp_email` varchar(50) NOT NULL,
  `comp_phone` bigint(20) NOT NULL,
  `comp_create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `comp_create_by` varchar(20) DEFAULT NULL,
  `comp_update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `comp_update_by` varchar(20) DEFAULT NULL,
  `comp_del_status` int(1) NOT NULL COMMENT '0 = Aktif, 1 = Tdk Aktif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`comp_id`, `comp_name`, `comp_datail`, `comp_npwp`, `comp_address`, `comp_address2`, `comp_email`, `comp_phone`, `comp_create_date`, `comp_create_by`, `comp_update_date`, `comp_update_by`, `comp_del_status`) VALUES
(1, 'adawdqwdq', 'amd;lwqfq', 12434214, NULL, NULL, 'andiantonoshyfa@gmail.com', 21414313, '2020-07-25 21:22:17', NULL, '2020-07-26 06:36:54', NULL, 1),
(2, 'perusahan maju 2', 'adnwodqnoqiwd\"asdasd', 12412412, 'asdasd', 'adsdasd', 'syhfaa@yahoo.com', 8971621712, '2020-07-25 23:35:50', NULL, '2020-07-26 21:02:11', NULL, 0),
(3, 'adadwqdq', 'qwdqwdqwdqw', 2131241241, 'asfafsafwqfwqwf', NULL, 'admin@admin.com', 2141412412, '2020-07-25 23:56:08', NULL, '2020-07-26 06:58:01', NULL, 1),
(5, 'pt maju jaya', 'asndaos', 1234562151, 'asdnaksnda', NULL, 'admin@admin.com', 89637582977, '2020-07-26 00:06:21', NULL, '2020-07-26 07:06:21', NULL, 0),
(6, 'PT majuin dah', 'adwqdqw', 2412121, 'dasdasdasdq', 'dqwdqwdwed', 'syhfaa@yahoo.com', 21312312, '2020-07-26 00:50:49', NULL, '2020-07-26 07:50:49', NULL, 0),
(7, 'pt maju lancar', '- test 1,\r\n- test 2,\r\n- test 3', 124124, '- test 1,\r\n- test 2,\r\n- test 3', NULL, 'andiantonoshyfa@gmail.com', 2141412412, '2020-08-10 00:32:27', NULL, '2020-08-10 07:32:27', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `cust_comp_id` int(20) NOT NULL,
  `cust_name` varchar(50) NOT NULL,
  `cust_address` text NOT NULL,
  `cust_phone` bigint(20) NOT NULL,
  `cust_create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `cust_create_by` varchar(20) DEFAULT NULL,
  `cust_update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cust_update_by` varchar(20) DEFAULT NULL,
  `cust_del_status` int(1) NOT NULL COMMENT '0 = Aktif, 1 = Tdk Aktif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_comp_id`, `cust_name`, `cust_address`, `cust_phone`, `cust_create_date`, `cust_create_by`, `cust_update_date`, `cust_update_by`, `cust_del_status`) VALUES
(1, 6, 'shyfa adniantono', 'bekas jaya 12', 912381, '2020-07-27 02:29:35', NULL, '2020-07-29 23:07:47', NULL, 0),
(2, 6, 'andi', 'asdaw a asd', 124141241, '2020-07-27 02:45:50', NULL, '2020-07-27 09:45:55', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `facilities_id` int(11) NOT NULL,
  `facilities_ref_id` int(8) NOT NULL,
  `facilities_prod_id` int(8) NOT NULL,
  `facilities_create_by` varchar(30) DEFAULT NULL,
  `facilities_create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `facilities_update_by` varchar(30) DEFAULT NULL,
  `facilities_update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `facilites_del_status` int(1) NOT NULL COMMENT '	0 = Aktif, 1 = Tdk Aktif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`facilities_id`, `facilities_ref_id`, `facilities_prod_id`, `facilities_create_by`, `facilities_create_date`, `facilities_update_by`, `facilities_update_date`, `facilites_del_status`) VALUES
(1, 1, 1, NULL, '2020-09-02 06:59:18', NULL, '2020-09-02 13:59:18', 0),
(2, 2, 1, NULL, '2020-09-02 06:59:18', NULL, '2020-09-02 13:59:18', 0),
(3, 3, 1, NULL, '2020-09-02 06:59:18', NULL, '2020-09-02 13:59:18', 0),
(4, 5, 1, NULL, '2020-09-02 06:59:18', NULL, '2020-09-02 13:59:18', 0),
(5, 7, 1, NULL, '2020-09-02 06:59:18', NULL, '2020-09-02 13:59:18', 0),
(6, 8, 1, NULL, '2020-09-02 06:59:18', NULL, '2020-09-02 13:59:18', 0),
(7, 11, 1, NULL, '2020-09-02 06:59:18', NULL, '2020-09-02 13:59:18', 0),
(8, 12, 1, NULL, '2020-09-02 06:59:18', NULL, '2020-09-02 13:59:18', 0),
(9, 17, 1, NULL, '2020-09-02 06:59:18', NULL, '2020-09-02 13:59:18', 0),
(10, 22, 1, NULL, '2020-09-02 06:59:18', NULL, '2020-09-02 13:59:18', 0),
(11, 25, 1, NULL, '2020-09-02 06:59:18', NULL, '2020-09-02 13:59:18', 0);

-- --------------------------------------------------------

--
-- Table structure for table `facilities_master`
--

CREATE TABLE `facilities_master` (
  `facilmast_id` int(18) NOT NULL,
  `facilmast_name` text NOT NULL,
  `facilmast_desc` text DEFAULT NULL,
  `facilmast_create_by` varchar(30) DEFAULT NULL,
  `facilmast_create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `facilmast_update_by` varchar(30) DEFAULT NULL,
  `facilmast_update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `facilmast_del_status` int(1) NOT NULL COMMENT '	0 = Aktif, 1 = Tdk Aktif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facilities_master`
--

INSERT INTO `facilities_master` (`facilmast_id`, `facilmast_name`, `facilmast_desc`, `facilmast_create_by`, `facilmast_create_date`, `facilmast_update_by`, `facilmast_update_date`, `facilmast_del_status`) VALUES
(1, 'LED Light Bar Oval LTF 2000', NULL, NULL, '2020-08-30 06:47:38', NULL, '2020-08-30 06:55:56', 0),
(2, 'Lampu Rotari Light Bar 2', NULL, NULL, '2020-08-30 07:40:29', NULL, '2020-09-02 08:00:26', 0),
(3, 'Sirine Multi Suara Lengkap dengan mic', NULL, NULL, '2020-08-30 07:41:13', NULL, '2020-08-30 07:41:13', 0),
(4, 'Tempat duduk perawat dilengkapi dengan box peralatan', NULL, NULL, '2020-08-30 07:41:34', NULL, '2020-08-30 07:41:34', 0),
(5, 'Landasan Stretcer dilengkapi  dengan tempat scoop stretcher', NULL, NULL, '2020-08-30 07:41:54', NULL, '2020-08-30 07:41:54', 0),
(6, 'Tabung pemadam kebakaran 1 kg', NULL, NULL, '2020-08-30 07:42:16', NULL, '2020-08-30 07:42:16', 0),
(7, 'Lampu sorot belakang model spot light', NULL, NULL, '2020-08-30 07:42:27', NULL, '2020-08-30 07:42:27', 0),
(8, '2 buah lampu operasi yang dapat diatur arah', NULL, NULL, '2020-08-30 07:42:42', NULL, '2020-08-30 07:42:42', 0),
(9, 'Modifikasi lantai dari PVC Sheet Board dilapisi dengan vinyl Hospital Grade', NULL, NULL, '2020-08-30 07:42:58', NULL, '2020-08-30 07:42:58', 0),
(10, 'Modifikasi lantai dari PVC Sheet Board dilapisi dengan coin', NULL, NULL, '2020-08-30 07:43:14', NULL, '2020-08-30 07:43:14', 0),
(11, 'Modifikasi lantai polywood  dilapisi dengan coin', NULL, NULL, '2020-08-30 07:43:44', NULL, '2020-08-30 07:43:44', 0),
(12, 'Logo dan tulisan standar', NULL, NULL, '2020-08-30 07:43:58', NULL, '2020-08-30 07:43:58', 0),
(13, 'Kaca film 60% - 80%', NULL, NULL, '2020-08-30 07:44:14', NULL, '2020-08-30 07:44:14', 0),
(14, 'Lemari peralatan + Wastafel', NULL, NULL, '2020-08-30 07:44:23', NULL, '2020-08-30 07:44:23', 0),
(15, 'Kotak P 3 K', NULL, NULL, '2020-08-30 07:44:31', NULL, '2020-08-30 07:44:31', 0),
(16, 'Hand Sanitizer', NULL, NULL, '2020-08-30 07:44:42', NULL, '2020-08-30 07:44:42', 0),
(17, 'Gantungan infuse model geser terbuat dari bahan stainless', NULL, NULL, '2020-08-30 07:44:52', NULL, '2020-08-30 07:44:52', 0),
(18, 'Plat Stainless Steel Pelindung Bemper Belakang Mobil', NULL, NULL, '2020-08-30 07:45:06', NULL, '2020-08-30 07:45:06', 0),
(19, 'Extra DC', NULL, NULL, '2020-08-30 07:45:25', NULL, '2020-08-30 07:45:25', 0),
(20, 'Central Oksigen BSS System', '2 tabung oksigen 1m3, 2 buah regulator standar, 1 set selang oksigen tekanan tinggi, 1 set pengatur oksigen dengan kran ON/OFF, 1 set Flowmeter dan Humidifier , 1 buah nassal cannula , 1 buah masker oksigen', NULL, '2020-08-30 07:46:47', NULL, '2020-08-30 07:46:47', 0),
(21, 'Oksigen Therapy Set BSS', '1 tabung oksigen 1m3, 1 buah regulator standar, 1 set Flowmeter dan Humidifier , 1 buah nassal cannula , 1 buah masker oksigen', NULL, '2020-08-30 07:47:57', NULL, '2020-08-30 07:47:57', 0),
(22, 'Automatic Strethcer Supra Cot Kontruksi Rangka Alluminium', NULL, NULL, '2020-08-30 07:48:19', NULL, '2020-08-30 07:48:19', 0),
(23, 'Tandu Model Angkat Kontruksi Rangka Full Stainless Steel', NULL, NULL, '2020-08-30 07:48:29', NULL, '2020-08-30 07:48:29', 0),
(24, 'Keranda Jenazah Kontruksi Rangka Full Stainless Steel', NULL, NULL, '2020-08-30 07:48:39', NULL, '2020-08-30 07:48:39', 0),
(25, 'Scoop Stretcher', NULL, NULL, '2020-08-30 07:48:47', NULL, '2020-08-30 07:48:47', 0),
(26, 'Washtafel + kotak obat', NULL, NULL, '2020-08-30 07:48:56', NULL, '2020-08-30 07:48:56', 0),
(27, 'Confeor (Rel Peti Mati)', NULL, NULL, '2020-08-30 07:49:08', NULL, '2020-08-30 07:49:08', 0),
(28, 'Base Standar', NULL, NULL, '2020-08-30 07:49:16', NULL, '2020-08-30 07:49:16', 0);

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `posit_id` int(11) NOT NULL,
  `posit_name` varchar(50) NOT NULL,
  `posit_create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `posit_create_by` varchar(20) DEFAULT NULL,
  `posit_update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `posit_update_by` varchar(20) DEFAULT NULL,
  `posit_del_status` int(1) NOT NULL COMMENT '0 = Aktif, 1 = Tdk Aktif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`posit_id`, `posit_name`, `posit_create_date`, `posit_create_by`, `posit_update_date`, `posit_update_by`, `posit_del_status`) VALUES
(1, 'Human Resource (HRD)', '2020-07-22 12:03:00', NULL, '2020-07-22 05:36:54', NULL, 0),
(2, 'IT manager', '2020-07-22 12:33:17', NULL, '2020-07-22 12:33:17', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `product_sale_price` int(8) NOT NULL,
  `product_buy_price` int(8) NOT NULL,
  `product_create_by` varchar(30) DEFAULT NULL,
  `product_create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `product_update_by` varchar(30) DEFAULT NULL,
  `product_update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_del_status` int(1) NOT NULL COMMENT '	0 = Aktif, 1 = Tdk Aktif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_sale_price`, `product_buy_price`, `product_create_by`, `product_create_date`, `product_update_by`, `product_update_date`, `product_del_status`) VALUES
(1, 'Ambulan', 68000000, 37000000, NULL, '2020-09-02 06:59:18', NULL, '2020-09-02 14:17:13', 0);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(20) NOT NULL,
  `role_create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `role_create_by` varchar(20) DEFAULT NULL,
  `role_update_date` timestamp NULL DEFAULT current_timestamp(),
  `role_update_by` varchar(20) DEFAULT NULL,
  `role_del_status` int(1) NOT NULL COMMENT '0 = Aktif, 1 = Tdk Aktif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`, `role_create_date`, `role_create_by`, `role_update_date`, `role_update_by`, `role_del_status`) VALUES
(1, 'admin', '2020-07-20 10:02:07', NULL, '2020-07-21 00:08:28', NULL, 0),
(2, 'user', '2020-07-20 10:14:15', NULL, '2020-07-20 10:14:15', NULL, 1),
(3, 'user', '2020-07-21 05:54:06', NULL, '2020-07-21 05:54:06', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_firstname` varchar(30) NOT NULL,
  `user_lastname` varchar(30) DEFAULT NULL,
  `user_jointdate` varchar(50) NOT NULL,
  `user_nik` bigint(20) NOT NULL,
  `user_gender` varchar(20) NOT NULL,
  `user_phone` bigint(20) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_comp_id` int(20) NOT NULL,
  `user_role_id` int(20) NOT NULL,
  `user_posit_id` int(20) NOT NULL,
  `user_create_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_create_by` varchar(20) DEFAULT NULL,
  `user_update_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_update_by` varchar(20) DEFAULT NULL,
  `user_del_status` int(1) NOT NULL COMMENT '0 = Aktif, 1 = Tdk Aktif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_firstname`, `user_lastname`, `user_jointdate`, `user_nik`, `user_gender`, `user_phone`, `user_email`, `user_name`, `user_password`, `user_comp_id`, `user_role_id`, `user_posit_id`, `user_create_date`, `user_create_by`, `user_update_date`, `user_update_by`, `user_del_status`) VALUES
(1, 'shyfa', 'andiantono', '0000-00-00', 66152615212, 'laki - laki', 8961572121, 'sandiantono5@gmail.com', 'shyfaandiantono', 'shyfa111', 5, 1, 2, '2020-08-03 05:28:25', NULL, '2020-08-04 06:15:35', NULL, 1),
(2, 'asdw', 'wadwaw adwad', '08/03/2020', 12123123, 'laki - laki', 1231231, 'admin@admin.com', 'shyfaandiantono', 'asdwqdq', 5, 3, 1, '2020-08-03 05:32:13', NULL, '2020-08-04 00:15:57', NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_ons`
--
ALTER TABLE `add_ons`
  ADD PRIMARY KEY (`add_ons_id`);

--
-- Indexes for table `bank_account`
--
ALTER TABLE `bank_account`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`comp_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`facilities_id`);

--
-- Indexes for table `facilities_master`
--
ALTER TABLE `facilities_master`
  ADD PRIMARY KEY (`facilmast_id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`posit_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_ons`
--
ALTER TABLE `add_ons`
  MODIFY `add_ons_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bank_account`
--
ALTER TABLE `bank_account`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `comp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `facilities_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `facilities_master`
--
ALTER TABLE `facilities_master`
  MODIFY `facilmast_id` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `posit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
