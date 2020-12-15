-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2020 at 02:37 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
('CAT01', 'CATEGORY_NAME', 0),
('CAT02', 'Biskuit', 0),
('CAT03', 'Snack', 0),
('CAT04', 'Roti Dan Kue', 0),
('CAT05', 'Coklat Dan Permen', 0),
('CAT06', 'Mie Dan Pasta', 0);

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
('CUS001', 'Cika', 'Monica', '8911236182', 'cika@gmail.com', 'wiyung', 'surabaya', 'Indonesia', '6028', 0);

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
  `EXPLANATION` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`PRODUCT_ID`, `CATEGORY_ID`, `PRODUCT_NAME`, `PRODUCT_PRICE`, `PRODUCT_STOCK`, `EXPLANATION`) VALUES
('PRO001', 'CAT01', 'Regal', 17300, '123', 'Regal Marie Roll 230 gr merupakan biskuit dengan tekstur yang lembut membuat makanan ringan ini ideal dinikmati semua kalangan. Cocok dijadikan sajian untuk tamu, pelengkap saat minum bersama teh atau kopi, ataupun saat santai dinikmati saat menonton TV.\r\n'),
('PRO002', 'CAT01', 'Tim Tam', 3000, '309', 'Tim Tam Biscuit Jumbo Pack 22 gr merupakan biskuit lapis cokelat dari Tim Tam. Terbuat dari bahan berkualitas, sangat lezat, nikmat & memuaskan. Biskuit berlapis cokelat yang diisi oleh krim cokelat di dalamnya.Tekstur biskuitnya begitu renyah dan lumer di lidah. Kelezatannya begitu terasa sampai gigitan terakhir. Lebih nikmat lagi, jika dinikmati bersama teh atau kopi.\r\n'),
('PRO003', 'CAT01', 'Hatari', 5600, '63', 'Hatari See Hong Puff 260gr merupakan cemilan biskuit dengan varian rasa krim yang nikmat. Sangat cocok dinikmati saat santai bersama keluarga dan teman bersama kopi atau susu panas.\r\n'),
('PRO004', 'CAT02', 'Cheetos', 1000, '81', 'Terdiri atas 2 Variant Jagung bakar dan net barbeque\r\n'),
('PRO005', 'CAT02', 'Pringles', 19000, '10', 'Awalnya dipasarkan sebagai Pringles bermodel Potato Chips, Pringles adalah merek kentang dan berbasis gandum makanan ringan stackable chip yang sekarang dimiliki oleh Kelloggs dan dijual di lebih dari 140 negara. Pringles adalah merek makanan ringan yang paling populer keempat setelah Lay, Doritos dan Cheetos di 2012. Komposisi: Kentang, minyak nabati, tepung berasam pati gandum, air, maltodextrin, pengemulsi nabati, garam, dekstrosa, dan pengatur keasaman asam sitrat Pringles Original 107gr Terbuat dari kentang Asli dan serbuk gandum Renyah dan nikmat dikonsumsi Mengandung Sumber protein, Energi dan karbohidrat Ideal dinikmati saat santai Anda bersama keluarga\r\n');

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
('NT00001', 'US002', 'CUS001', '2020-10-21', 3300),
('NT00002', NULL, NULL, NULL, NULL);

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
('NT00001', 'PRO002', '1', 3000, 0, 3000);

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
  `JOB_STATUS` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USER_ID`, `FIRST_NAME`, `LAST_NAME`, `USERNAME`, `JABATAN`, `EMAIL`, `PHONE`, `PASSWORD`, `JOB_STATUS`) VALUES
('US001', 'Admin', '1', 'Admin1', 0, 'admin@admin.com', '8135286152', 'admin', '0'),
('US002', 'Kasir', '1', 'Kasir1', 1, 'kasir@kasir.com', '8135286152', 'kasir', '0');

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
