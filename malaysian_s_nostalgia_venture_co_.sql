-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2021 at 06:43 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `malaysian's nostalgia venture co.`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerId` int(4) NOT NULL,
  `customerFname` varchar(50) NOT NULL,
  `customerLname` varchar(50) NOT NULL,
  `customerTelnumber` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerId`, `customerFname`, `customerLname`, `customerTelnumber`) VALUES
(1000, 'Aina', 'Abdul', '01167453913'),
(2000, 'Zurina', 'Ahmad', '0134567834'),
(3000, 'Farah', 'Mohd Zain', '0195634890'),
(4000, 'Athira', 'Zulkifle', '0175225301'),
(5000, 'Natasha', 'Ahmad', '01198623451'),
(6000, 'Farhana', 'Mohd Ali', '0175387298'),
(7000, 'Syafiqah', 'Hisham', '0178902341'),
(8000, 'Intan', 'Shaharuddin', '01123975607'),
(9000, 'Camilia', 'Mohd Radzi', '0137648903');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `foodId` int(3) NOT NULL,
  `foodname` varchar(50) NOT NULL,
  `foodCategory` varchar(50) NOT NULL,
  `foodPrice` varchar(45) NOT NULL,
  `foodQuantity` int(200) NOT NULL,
  `customerId` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`foodId`, `foodname`, `foodCategory`, `foodPrice`, `foodQuantity`, `customerId`) VALUES
(101, 'Nasi Kerabu', 'Rice-based', 'RM5.00', 1, 1000),
(102, 'Kuih Dangai', 'Cakes', 'RM2.00', 5, 2000),
(103, 'Nasi Ambeng', 'Rice-based', 'RM10.00', 1, 3000),
(104, 'Hot Tea', 'Drinks', 'RM1.50', 1, 4000),
(105, 'Pulut Udang', 'Cakes', 'RM2.00', 5, 5000),
(106, 'Bubur Nangka', 'Porridge', 'RM2.50', 1, 6000),
(107, 'Mee Rebus', 'Noodles', 'RM4.50', 1, 7000),
(108, 'Laksa Penang', 'Noodles', 'RM3.30', 1, 8000),
(109, 'Nasi lemak', 'Rice-based', 'RM5.00', 1, 9000);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `orderId` varchar(45) NOT NULL,
  `orderdate` date NOT NULL,
  `customerId` int(4) NOT NULL,
  `foodname` varchar(45) NOT NULL,
  `orderquantity` int(200) NOT NULL,
  `orderpayment` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`orderId`, `orderdate`, `customerId`, `foodname`, `orderquantity`, `orderpayment`) VALUES
('0001', '2021-05-02', 1000, 'Nasi Kerabu', 2, 'RM10.00'),
('0002', '2021-05-06', 2000, 'Kuih Dangai', 5, 'RM2.00'),
('0003', '2021-05-10', 3000, 'Nasi Ambeng', 1, 'RM10.00'),
('0004', '2021-05-13', 4000, 'Hot Tea', 2, 'RM3.00'),
('0005', '2021-05-18', 5000, 'Pulut Udang', 5, 'RM2.00'),
('0006', '2021-05-20', 6000, 'Bubur Nangka', 2, 'RM2.50'),
('0007', '2021-05-21', 7000, 'Mee Rebus', 3, 'RM13.50'),
('0008', '2021-05-24', 8000, 'Laksa Penang', 5, 'RM17.50'),
('0009', '2021-05-26', 9000, 'Nasi Lemak', 6, 'RM30');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `purchaseId` varchar(45) NOT NULL,
  `purchasedate` date NOT NULL,
  `customerId` int(4) NOT NULL,
  `foodname` varchar(45) NOT NULL,
  `purchasequantity` int(200) NOT NULL,
  `purchasepayment` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`purchaseId`, `purchasedate`, `customerId`, `foodname`, `purchasequantity`, `purchasepayment`) VALUES
('0001', '2021-05-02', 1000, 'Nasi Kerabu', 2, 'RM10.00'),
('0002', '2021-05-06', 2000, 'Kuih Dangai', 5, 'RM2.00'),
('0003', '2021-05-10', 3000, 'Nasi Ambeng', 1, 'RM10.00'),
('0004', '2021-05-13', 4000, 'Hot Tea', 2, 'RM3.00'),
('0005', '2021-05-18', 5000, 'Pulut Udang', 5, 'RM2.00'),
('0006', '2021-05-20', 6000, 'Bubur Nangka', 2, 'RM2.50'),
('0007', '2021-05-21', 7000, 'Mee Rebus', 3, 'RM13.50'),
('0008', '2021-07-24', 8000, 'Laksa Penang', 5, 'RM17.50'),
('0009', '2021-07-26', 9000, 'Nasi Lemak', 6, 'RM30.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerId`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`foodId`),
  ADD KEY `customerId` (`customerId`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`orderId`),
  ADD KEY `customerId` (`customerId`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`purchaseId`),
  ADD KEY `customerId` (`customerId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9001;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `foodId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
