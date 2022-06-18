-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2022 at 10:44 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `id` int(11) NOT NULL,
  `Month` varchar(250) NOT NULL,
  `Year` varchar(250) NOT NULL,
  `Income` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`id`, `Month`, `Year`, `Income`) VALUES
(1, 'a', '', 9987);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(250) NOT NULL,
  `Price` varchar(250) NOT NULL,
  `product_id` varchar(250) NOT NULL,
  `Product_Name` varchar(250) NOT NULL,
  `Quantity` int(250) NOT NULL,
  `Details` longtext NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `Price`, `product_id`, `Product_Name`, `Quantity`, `Details`, `image`) VALUES
(83, '5', '43', 'Alibaba', 0, 'sss', 'g.jpg'),
(84, '11', '748hgsagndsa', 'Product 2', 0, 'aa', 'menu.jpg'),
(85, '2', 'faf425323542', '1', 2, '2', 'g.jpg'),
(86, '44', '22', 'sampleee', 11, '44', 'f.jpg'),
(88, '20', 'faf425323542a', 'sample', 0, 'ss', 'dash.jpg'),
(89, '11', 'aa', 'aa', 11, '11', 'fb.png'),
(90, '323', 'dvfefvr', 'wefer', 232, '2', 'try.jpg'),
(91, '6776', 'yt76786r57', '676r7', 0, '66878', 'cat.png'),
(92, '4', '12345', 'new Product', 933, '334', 'try.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(250) NOT NULL,
  `product_id` varchar(250) NOT NULL,
  `Product_Name` varchar(250) NOT NULL,
  `time/date` date NOT NULL,
  `Quantity` int(250) NOT NULL,
  `Price` int(250) NOT NULL,
  `total` varchar(250) NOT NULL,
  `validation` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `product_id`, `Product_Name`, `time/date`, `Quantity`, `Price`, `total`, `validation`) VALUES
(344, '83', 'Alibaba', '0000-00-00', 1, 5, '5.00', 1),
(345, '84', 'Product 2', '0000-00-00', 1, 11, '11.00', 1),
(347, '83', 'Alibaba', '0000-00-00', 1, 5, '5.00', 1),
(348, '84', 'Product 2', '0000-00-00', 1, 11, '11.00', 1),
(349, '85', '1', '0000-00-00', 1, 2, '2.00', 1),
(350, '86', 'sampleee', '0000-00-00', 1, 44, '44.00', 1),
(354, '83', 'Alibaba', '0000-00-00', 1, 5, '5.00', 1),
(357, '86', 'sampleee', '0000-00-00', 1, 44, '44.00', 1),
(358, '89', 'aa', '0000-00-00', 1, 11, '11.00', 1),
(359, '83', 'Alibaba', '0000-00-00', 1, 5, '5.00', 1),
(360, '84', 'Product 2', '0000-00-00', 1, 11, '11.00', 1),
(372, '83', 'Alibaba', '0000-00-00', 2, 5, '10.00', 1),
(373, '84', 'Product 2', '0000-00-00', 6, 11, '66.00', 1),
(374, '91', '676r7', '0000-00-00', 100, 6776, '677,600.00', 1),
(375, '91', '676r7', '0000-00-00', 77, 6776, '521,752.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `registered`
--

CREATE TABLE `registered` (
  `id` int(250) NOT NULL,
  `company_name` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `contact` varchar(250) NOT NULL,
  `logo` varchar(250) NOT NULL,
  `type` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registered`
--

INSERT INTO `registered` (`id`, `company_name`, `username`, `password`, `address`, `contact`, `logo`, `type`) VALUES
(13, 'Play Store', 'mj', '007de96adfa8b36dc2c8dd268d039129', 'saaaa', 'aaaa', 'm.jpg', 0),
(16, 'Mini Store', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'bdshrth', 'admin', 'images.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `supply`
--

CREATE TABLE `supply` (
  `id` int(11) NOT NULL,
  `NAME` varchar(250) NOT NULL,
  `ADDRESS` varchar(250) NOT NULL,
  `PRODUCT` varchar(250) NOT NULL,
  `TIMEANDDATE` date NOT NULL,
  `CONTACT` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supply`
--

INSERT INTO `supply` (`id`, `NAME`, `ADDRESS`, `PRODUCT`, `TIMEANDDATE`, `CONTACT`) VALUES
(10, 'sample', 'here', 'burger', '2022-04-30', '324547658756');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `CODE` varchar(250) NOT NULL,
  `DATE` varchar(250) NOT NULL,
  `TRANSACTION` varchar(250) NOT NULL,
  `AMOUNT` int(250) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`CODE`, `DATE`, `TRANSACTION`, `AMOUNT`, `ID`) VALUES
('WQFEF', 'QEGEGEGQG', 'EGEG', 436454, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `Password` varchar(250) NOT NULL,
  `Name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registered`
--
ALTER TABLE `registered`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supply`
--
ALTER TABLE `supply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=377;

--
-- AUTO_INCREMENT for table `registered`
--
ALTER TABLE `registered`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `supply`
--
ALTER TABLE `supply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
