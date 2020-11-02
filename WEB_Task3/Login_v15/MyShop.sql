-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 12, 2020 at 09:33 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

DROP TABLE IF EXISTS `tbl_customer`;
CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `Customer_ID` int(11) NOT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `Surname` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Password` varchar(45) DEFAULT NULL,
  `Admin` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`Customer_ID`),
  UNIQUE KEY `Customer_ID_UNIQUE` (`Customer_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`Customer_ID`, `Name`, `Surname`, `Email`, `Password`, `Admin`) VALUES
(1, 'james', 'mcdonald', 'jm@adc.com', 'P@55w0rd!', '0'),
(2, 'chantelle', 'maxwell', 'cm@adc.com', 'P@55w0rd!', '0'),
(3, 'dylan', 'keet', 'dk@adc.com', 'P@55w0rd!', '0'),
(4, 'mike', 'mohr', 'mm@adc.com', 'P@55w0rd!', '0'),
(5, 'alex', 'davis', 'ad@adc.com', 'P@55w0rd!', '0'),
(6, 'john', 'jathter', 'jj@adc.com', 'P@55w0rd!', '0'),
(7, 'matt', 'carter', 'mc@adc.com', 'P@55w0rd!', '0'),
(8, 'kylowe', 'depinto', 'kd@adc.com', 'P@55w0rd!', '0'),
(9, 'faheem', 'mahomed', 'fm@adc.com', 'P@55w0rd!', '0'),
(10, 'connor', 'ansjf', 'ca@adc.com', 'P@55w0rd!', '0'),
(11, 'sean', 'dnan', 'sd@adc.com', 'P@55w0rd!', '0'),
(12, 'josh', 'hshs', 'jh@adc.com', 'P@55w0rd!', '0'),
(13, 'ishmael', 'bob', 'ib@adc.com', 'P@55w0rd!', '0'),
(14, 'ethan', 'sam', 'es@adc.com', 'P@55w0rd!', '0'),
(15, 'met', 'matt', 'mm@adc.com', 'P@55w0rd!', '0'),
(16, 'heth', 'heather', 'hh@adc.com', 'P@55w0rd!', '0'),
(17, 'maasf', 'amsfnbnj', 'ma@adc.com', 'P@55w0rd!', '0'),
(18, 'merle', 'macoandlo', 'mm@adc.com', 'P@55w0rd!', '0'),
(19, 'angus', 'askf', 'aa@adc.com', 'P@55w0rd!', '0'),
(20, 'ishma', 'ish', 'ii@adc.com', 'P@55w0rd!', '0'),
(21, 'tam', 'tamtam', 'tt@adc.com', 'P@55w0rd!', '0'),
(22, 'mos', 'moxy', 'mm@adc.com', 'P@55w0rd!', '0'),
(23, 'jonno', 'jaosd', 'jj@adc.com', 'P@55w0rd!', '0'),
(24, 'deigo', 'dags', 'dd@adc.com', 'P@55w0rd!', '0'),
(25, 'dean', 'ansfn', 'da@adc.com', 'P@55w0rd!', '0'),
(26, 'pav', 'asf', 'pa@adc.com', 'P@55w0rd!', '0'),
(27, 'anmjsnsns', 'asngfn', 'aa@adc.com', 'P@55w0rd!', '0'),
(28, 'jaosgfasi', 'anf', 'ja@adc.com', 'P@55w0rd!', '0'),
(29, 'jesus', 'gods', 'jg@adc.com', 'P@55w0rd!', '0'),
(30, 'mary', 'anne', 'ma@adc.com', 'P@55w0rd!', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoice`
--

DROP TABLE IF EXISTS `tbl_invoice`;
CREATE TABLE IF NOT EXISTS `tbl_invoice` (
  `tbl_Order_Order_ID` int(11) NOT NULL,
  `tbl_Item_Item_ID` int(11) NOT NULL,
  `Invoice_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Total_Price` double DEFAULT NULL,
  `Total_Quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`Invoice_ID`),
  KEY `fk_tbl_Order_has_tbl_Item_tbl_Item1_idx` (`tbl_Item_Item_ID`),
  KEY `fk_tbl_Order_has_tbl_Item_tbl_Order1_idx` (`tbl_Order_Order_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_invoice`
--

INSERT INTO `tbl_invoice` (`tbl_Order_Order_ID`, `tbl_Item_Item_ID`, `Invoice_ID`, `Total_Price`, `Total_Quantity`) VALUES
(1, 1, 1, 160, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item`
--

DROP TABLE IF EXISTS `tbl_item`;
CREATE TABLE IF NOT EXISTS `tbl_item` (
  `Item_ID` int(11) NOT NULL,
  `Description` varchar(45) DEFAULT NULL,
  `Cost_Price` double DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Sell_Price` double DEFAULT NULL,
  PRIMARY KEY (`Item_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_item`
--

INSERT INTO `tbl_item` (`Item_ID`, `Description`, `Cost_Price`, `Quantity`, `Sell_Price`) VALUES
(1, 'LoveCard', 60, 20, 80),
(2, 'ChristmasCard', 50, 20, 70),
(3, 'ValentinesCard', 40, 20, 60),
(4, 'AprilfoolcCard', 70, 20, 90),
(5, 'HappyBirthday50th', 80, 20, 100),
(6, 'C1elebratoryCard', 60, 20, 80),
(7, 'OldCard', 30, 20, 50),
(8, 'BusinessCard', 20, 20, 40),
(9, 'WeddingCard', 70, 20, 90),
(10, 'SailingCard', 60, 20, 80),
(11, 'BestFriendCard', 55, 20, 85),
(12, 'NewChildCard', 35, 20, 80),
(13, 'HappyBirthday18th', 65, 20, 70),
(14, 'HappyBirthday21st', 65, 20, 70);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

DROP TABLE IF EXISTS `tbl_order`;
CREATE TABLE IF NOT EXISTS `tbl_order` (
  `Order_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Total_Qauntity` int(11) DEFAULT NULL,
  `Total_Price` double DEFAULT NULL,
  `tbl_Customer_Customer_ID` int(11) NOT NULL,
  PRIMARY KEY (`Order_ID`,`tbl_Customer_Customer_ID`),
  UNIQUE KEY `Order_ID_UNIQUE` (`Order_ID`),
  KEY `fk_tbl_Order_tbl_Customer_idx` (`tbl_Customer_Customer_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`Order_ID`, `Total_Qauntity`, `Total_Price`, `tbl_Customer_Customer_ID`) VALUES
(1, 2, 80, 1),
(2, 1, 100, 5),
(3, 3, 40, 8),
(4, 1, 85, 11),
(5, 2, 80, 6),
(6, 2, 80, 1),
(7, 4, 70, 14),
(8, 3, 80, 12),
(9, 3, 50, 7),
(10, 1, 50, 7),
(11, 5, 90, 9),
(12, 2, 90, 9),
(13, 1, 100, 5),
(14, 2, 40, 8),
(15, 3, 80, 1),
(16, 3, 80, 10),
(17, 6, 70, 2),
(18, 2, 50, 7),
(19, 2, 90, 4),
(20, 1, 70, 14),
(21, 3, 50, 7),
(22, 3, 40, 8),
(23, 4, 60, 3),
(24, 2, 80, 1),
(25, 2, 90, 9),
(26, 4, 80, 12),
(27, 1, 90, 4),
(28, 3, 85, 11),
(29, 3, 70, 1),
(30, 1, 70, 14);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  ADD CONSTRAINT `fk_tbl_Order_has_tbl_Item_tbl_Item1` FOREIGN KEY (`tbl_Item_Item_ID`) REFERENCES `tbl_item` (`Item_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_Order_has_tbl_Item_tbl_Order1` FOREIGN KEY (`tbl_Order_Order_ID`) REFERENCES `tbl_order` (`Order_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `fk_tbl_Order_tbl_Customer` FOREIGN KEY (`tbl_Customer_Customer_ID`) REFERENCES `tbl_customer` (`Customer_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
