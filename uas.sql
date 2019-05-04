-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 04, 2019 at 08:29 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infinistyle`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `fullName` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `fullName`, `username`, `password`) VALUES
(1, 'Tony Stark', 'IronMan', 'db11b32c69e5f3e5f871d5b4363bded7');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerID` int(11) NOT NULL,
  `fullName` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `address` varchar(500) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerID`, `fullName`, `email`, `username`, `password`, `address`, `phone`) VALUES
(1, 'Jon Snow', 'snow.jon@westeros.ws', 'JonSnow', '778124c645e584859816f0192675d7c3', 'The North', '302210312'),
(2, 'Arya Stark', 'arya.stark@westeros.ws', 'AryaStark', 'bb5cc2bbd90a5d9bb81ce454d66d940c', 'House Stark', '42342354'),
(3, 'Daenerys Targaryen', 'daenerys@westeros.ws', 'DanyDragon', '83e92bb9a278410a0584b7d49bbccdb7', 'Winterfell', '1233432'),
(4, 'Cersei Lannister', 'cersei.lannister@westeros.ws', 'Lannister', '72545f3f86fad045a26ed54abd2bbb9f', 'Kings Landing', '123342');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `orderID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(11) NOT NULL,
  `orderDate` date NOT NULL,
  `orderStatus` varchar(50) NOT NULL,
  `customerID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `orderDate`, `orderStatus`, `customerID`) VALUES
(1, '2019-05-04', '\"on process\"', '1');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(11) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `productDescription` varchar(300) NOT NULL,
  `productPrice` int(50) NOT NULL,
  `productStock` int(50) NOT NULL,
  `productCategory` varchar(100) NOT NULL,
  `productImage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `productName`, `productDescription`, `productPrice`, `productStock`, `productCategory`, `productImage`) VALUES
(1, 'Flower Zora Shirt', 'A Flowery Shirt with an Italian touch', 79000, 10, 'Tops', 'P001.jpg'),
(2, 'Rags-A-Muffin Dress', 'With Cute on top', 89000, 10, 'Dress', 'P002.jpg'),
(3, 'Rags-A-Muffin Tops', 'Cute', 79000, 10, 'Tops', 'P003.jpg'),
(4, 'Rags-A-Muffin Jeans', 'Boy', 109000, 10, 'Bottoms', 'P004.jpg'),
(5, 'Rags-A-Muffin Scarfs', 'Winter Equipment', 39000, 5, 'Accecories', 'P005.jpg'),
(6, 'Ploomie Jumpsuit', 'Nice cute suit', 109000, 10, 'Jumpsuit', 'P006.jpg'),
(7, 'Vault Tech Jumpsuit', 'An apocaliptic-styled jumpsuit for kids', 99000, 6, 'Jumpsuit', 'P007.jpg'),
(8, 'Flower Zora Skirt', 'A Flowery Skirt with an Italian touch', 59000, 10, 'Bottoms', 'P008.jpg'),
(9, 'Simcity Cardigan', 'A Cardigan designed for future lifestyles', 69000, 10, 'Tops', 'P009.jpg'),
(10, 'Simcity Shawl Cardigan', 'A shawl designed for modern lifestyles', 69000, 10, 'Tops', 'P010.jpg'),
(11, 'Queens Cordelia Cocktail Dress', 'British styled dress', 209000, 10, 'Dress', 'P011.jpg'),
(12, 'Gingham-styled Jumpsuit', 'Nice Gingham for kids', 89000, 10, 'Jumpsuit', 'P012.jpg'),
(13, 'Gingham-styled skirt', 'Gingham skirt', 99000, 10, 'Bottoms', 'P013.jpg'),
(14, 'For WEeeBs', 'Jumpsuit with a japanese characters engraved on it', 109000, 3, 'Jumpsuit', 'P014.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcartdetails`
--

CREATE TABLE `shoppingcartdetails` (
  `cartID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `qty` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcarts`
--

CREATE TABLE `shoppingcarts` (
  `cartID` int(11) NOT NULL,
  `customerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerID`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `shoppingcarts`
--
ALTER TABLE `shoppingcarts`
  ADD PRIMARY KEY (`cartID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `shoppingcarts`
--
ALTER TABLE `shoppingcarts`
  MODIFY `cartID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
