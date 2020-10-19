-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2020 at 05:29 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `CATEGORY_ID` char(5) NOT NULL,
  `CATEGORY_NAME` varchar(50) DEFAULT NULL,
  `CATEGORY_STATUS` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`CATEGORY_ID`, `CATEGORY_NAME`, `CATEGORY_STATUS`) VALUES
('CAT01', 'makanan', 0),
('CAT02', 'minuman', 0),
('CAT03', 'snack', 0),
('CAT04', 'dissert', 0),
('CAT05', 'coba', 0),
('CAT06', 'dissert', 1);

--
-- Triggers `categories`
--
DELIMITER $$
CREATE TRIGGER `id_cat_auto` BEFORE INSERT ON `categories` FOR EACH ROW BEGIN
	SELECT COUNT(*) INTO @ID FROM categories;
	SET NEW.category_ID = CONCAT('CAT',LPAD(@ID+1,2,'0'));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CUSTOMER_ID` char(6) NOT NULL,
  `FIRST_NAME` varchar(50) DEFAULT NULL,
  `LAST_NAME` varchar(50) DEFAULT NULL,
  `PHONE` decimal(12,0) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `STREET` varchar(100) DEFAULT NULL,
  `CITY` varchar(50) DEFAULT NULL,
  `STATE` varchar(50) DEFAULT NULL,
  `ZIP_CODE` decimal(5,0) DEFAULT NULL,
  `CUSTOMER_STATUS` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CUSTOMER_ID`, `FIRST_NAME`, `LAST_NAME`, `PHONE`, `EMAIL`, `STREET`, `CITY`, `STATE`, `ZIP_CODE`, `CUSTOMER_STATUS`) VALUES
('CUS001', 'HAA', 'LO', '1883717319', 'HAA@gmail.com', 'A', 'A', 'A', '9081', 0),
('CUS002', 'MA', 'KAN', '897986513134', 'makan@gmail.com', 'A', 'a', 'a', '12', 0),
('CUS003', 'SHINDI', 'Purnama', '752513290', 'Shindi@gmail.com', 'wiyung', 'surabaya', 'indonesia', '60227', 0);

--
-- Triggers `customer`
--
DELIMITER $$
CREATE TRIGGER `id_cust_auto` BEFORE INSERT ON `customer` FOR EACH ROW BEGIN
	SELECT COUNT(*) INTO @ID FROM CUSTOMER;
	SET NEW.CUSTOMER_ID = CONCAT('CUS',LPAD(@ID+1,3,'0'));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `PRODUCT_ID` char(6) NOT NULL,
  `CATEGORY_ID` char(5) NOT NULL,
  `PRODUCT_NAME` varchar(50) DEFAULT NULL,
  `PRODUCT_PRICE` float DEFAULT NULL,
  `PRODUCT_STOCK` decimal(3,0) DEFAULT NULL,
  `EXPLANATION` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`PRODUCT_ID`, `CATEGORY_ID`, `PRODUCT_NAME`, `PRODUCT_PRICE`, `PRODUCT_STOCK`, `EXPLANATION`) VALUES
('PRO001', 'CAT01', 'Nasi Goreng', 10000, '10', 'nasi goreng jawa'),
('PRO002', 'CAT01', 'Bakmi Goreng', 10000, '10', NULL),
('PRO003', 'CAT02', 'Teh Panas', 3000, '100', NULL),
('PRO004', 'CAT02', 'Es Teh', 4000, '100', NULL),
('PRO005', 'CAT03', 'Citato', 5000, '50', NULL),
('PRO006', 'CAT01', 'Ice Creem AICE', 2000, '20', NULL),
('PRO007', 'CAT03', 'Cireng', 10000, '10', 'good');

--
-- Triggers `product`
--
DELIMITER $$
CREATE TRIGGER `id_product_auto` BEFORE INSERT ON `product` FOR EACH ROW BEGIN
	SELECT COUNT(*) INTO @ID FROM product;
	SET NEW.PRODUCT_ID = CONCAT('PRO',LPAD(@ID+1,3,'0'));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `NOTA_ID` char(7) NOT NULL,
  `USER_ID` char(5) DEFAULT NULL,
  `CUSTOMER_ID` char(6) DEFAULT NULL,
  `NOTA_DATE` date DEFAULT NULL,
  `TOTAL_PAYMENT` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`NOTA_ID`, `USER_ID`, `CUSTOMER_ID`, `NOTA_DATE`, `TOTAL_PAYMENT`) VALUES
('NT00001', 'US001', 'CUS002', '2020-04-01', 50000),
('NT00002', 'US003', 'CUS002', '2020-04-26', 11000);

--
-- Triggers `sales`
--
DELIMITER $$
CREATE TRIGGER `id_sales_auto` BEFORE INSERT ON `sales` FOR EACH ROW BEGIN
	SELECT COUNT(*) INTO @ID FROM sales;
	SET NEW.nota_id = CONCAT('NT',LPAD(@ID+1,5,'0'));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `sales_detail`
--

CREATE TABLE `sales_detail` (
  `NOTA_ID` char(7) NOT NULL,
  `PRODUCT_ID` char(6) NOT NULL,
  `QUANTITY` decimal(2,0) DEFAULT NULL,
  `SELLING_PRICE` float DEFAULT NULL,
  `DISCOUNT` float DEFAULT NULL,
  `TOTAL_PRICE` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_detail`
--

INSERT INTO `sales_detail` (`NOTA_ID`, `PRODUCT_ID`, `QUANTITY`, `SELLING_PRICE`, `DISCOUNT`, `TOTAL_PRICE`) VALUES
('NT00001', 'PRO001', '1', 25000, 0, 25000),
('NT00001', 'PRO002', '1', 25000, 0, 25000),
('NT00002', 'PRO001', '1', 10000, 0, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `USER_ID` char(5) NOT NULL,
  `FIRST_NAME` varchar(50) DEFAULT NULL,
  `LAST_NAME` varchar(50) DEFAULT NULL,
  `USERNAME` varchar(15) NOT NULL,
  `JABATAN` int(1) NOT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `PHONE` decimal(12,0) DEFAULT NULL,
  `PASSWORD` char(8) DEFAULT NULL,
  `JOB_STATUS` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USER_ID`, `FIRST_NAME`, `LAST_NAME`, `USERNAME`, `JABATAN`, `EMAIL`, `PHONE`, `PASSWORD`, `JOB_STATUS`) VALUES
('US001', 'AKU', 'KAMU', 'AkuKamu', 0, 'Hi@gmail.com', '1234568', 'hallo', '0'),
('US002', 'Hi', 'yo', 'Hiyo', 0, 'hiyo@gmail.com', '123456789', 'hiyo', '0'),
('US003', 'yo', 'whtsup', 'yowhtsup', 0, 'yowhtsup@gmail.com', '762891928', 'whtsup', '0'),
('US004', 'im', 'tired', 'imtired', 1, 'tired@gmail.com', '1526391012', 'capek', '0'),
('US005', 'whennn', 'its done', 'itsdone', 1, 'tired@gmail.com', '12345', '1234', '0'),
('US006', 'Delisa', 'Monica', 'DelisaMon', 1, 'halloZ@gmail.com', '1233654', '123', NULL),
('US007', 'hallo', 'Ardiansya', '151711513019', 1, 'nisap123@gmai.com', '321456', '123', '0'),
('US008', 'cempaka', 'bunga', 'cembung', 0, 'cembung@gmail.com', '12345678', '1234', '0'),
('US009', 'Badar', 'Putra', 'Batra', 1, 'batra@gmail.com', '12345', NULL, '0'),
('US010', 'admin', 'admin', 'admin', 0, 'admin@admin.com', '1233654', 'admin', '0'),
('US011', 'kasir', 'kasir', 'kasir', 1, 'kasir@kasir.com', '123546', 'kasir', NULL);

--
-- Triggers `user`
--
DELIMITER $$
CREATE TRIGGER `id_user_auto` BEFORE INSERT ON `user` FOR EACH ROW BEGIN
	SELECT COUNT(*) INTO @ID FROM user;
	SET NEW.user_ID = CONCAT('US',LPAD(@ID+1,3,'0'));
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`CATEGORY_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CUSTOMER_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`PRODUCT_ID`),
  ADD KEY `FK_CATEGORI_TO_PRODUCT` (`CATEGORY_ID`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`NOTA_ID`),
  ADD KEY `FK_CUST_TO_SALES` (`CUSTOMER_ID`),
  ADD KEY `FK_USER_TO_SALES` (`USER_ID`);

--
-- Indexes for table `sales_detail`
--
ALTER TABLE `sales_detail`
  ADD PRIMARY KEY (`NOTA_ID`,`PRODUCT_ID`),
  ADD KEY `FK_DETAIL_TO_PRODUCT` (`PRODUCT_ID`,`NOTA_ID`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`USER_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_CATEGORI_TO_PRODUCT` FOREIGN KEY (`CATEGORY_ID`) REFERENCES `categories` (`CATEGORY_ID`);

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `FK_CUST_TO_SALES` FOREIGN KEY (`CUSTOMER_ID`) REFERENCES `customer` (`CUSTOMER_ID`),
  ADD CONSTRAINT `FK_USER_TO_SALES` FOREIGN KEY (`USER_ID`) REFERENCES `user` (`USER_ID`);

--
-- Constraints for table `sales_detail`
--
ALTER TABLE `sales_detail`
  ADD CONSTRAINT `FK_DETAIL_TO_PRODUCT` FOREIGN KEY (`PRODUCT_ID`) REFERENCES `product` (`PRODUCT_ID`),
  ADD CONSTRAINT `FK_SALES_TO_DETAIL` FOREIGN KEY (`NOTA_ID`) REFERENCES `sales` (`NOTA_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
