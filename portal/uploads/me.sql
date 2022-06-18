CREATE TABLE `tblsales` (
  `SalesId` int(11) NOT NULL,
  `Product` varchar(90) NOT NULL,
  `TotalSales` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 
--
-- Dumping data for table `tblsales`
--
 
INSERT INTO `tblsales` (`SalesId`, `Product`, `TotalSales`) VALUES
(1, 'Surf Powder', 1400),
(2, 'Mr. Clean Powder', 800),
(3, 'Tide Powder', 5052),
(4, 'Ariel Powder', 8030);
 
--
-- Indexes for dumped tables
--
 
--
-- Indexes for table `tblsales`
--
ALTER TABLE `tblsales`
  ADD PRIMARY KEY (`SalesId`);
 
--
-- AUTO_INCREMENT for dumped tables
--
 
--
-- AUTO_INCREMENT for table `tblsales`
--
ALTER TABLE `tblsales`
  MODIFY `SalesId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;