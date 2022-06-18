# ABMS : MySQL database backup
#
# Generated: Tuesday 24. May 2022
# Hostname: localhost
# Database: final
# --------------------------------------------------------


#
# Delete any existing table `income`
#

DROP TABLE IF EXISTS `income`;


#
# Table structure of table `income`
#



CREATE TABLE `income` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Month` varchar(250) NOT NULL,
  `Year` varchar(250) NOT NULL,
  `Income` int(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO income VALUES("1","a","","9987");



#
# Delete any existing table `product`
#

DROP TABLE IF EXISTS `product`;


#
# Table structure of table `product`
#



CREATE TABLE `product` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `Price` varchar(250) NOT NULL,
  `product_id` varchar(250) NOT NULL,
  `Product_Name` varchar(250) NOT NULL,
  `Quantity` int(250) NOT NULL,
  `Details` longtext NOT NULL,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=utf8mb4;

INSERT INTO product VALUES("83","5","43","Alibaba","10","sss","g.jpg");
INSERT INTO product VALUES("84","11","748hgsagndsa","Product 2","6","aa","menu.jpg");
INSERT INTO product VALUES("85","2","faf425323542","1","2","2","g.jpg");
INSERT INTO product VALUES("86","44","22","sampleee","44","44","f.jpg");
INSERT INTO product VALUES("88","20","faf425323542a","sample","0","ss","dash.jpg");
INSERT INTO product VALUES("89","11","aa","aa","11","11","fb.png");
INSERT INTO product VALUES("90","323","dvfefvr","wefer","232","2","try.jpg");
INSERT INTO product VALUES("91","6776","yt76786r57","676r7","77678","66878","cat.png");



#
# Delete any existing table `purchase`
#

DROP TABLE IF EXISTS `purchase`;


#
# Table structure of table `purchase`
#



CREATE TABLE `purchase` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `product_id` varchar(250) NOT NULL,
  `Product_Name` varchar(250) NOT NULL,
  `time/date` date NOT NULL,
  `Quantity` int(250) NOT NULL,
  `Price` int(250) NOT NULL,
  `total` varchar(250) NOT NULL,
  `validation` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=302 DEFAULT CHARSET=utf8mb4;

INSERT INTO purchase VALUES("299","83","Alibaba","0000-00-00","1","5","5.00","1");
INSERT INTO purchase VALUES("300","84","Product 2","0000-00-00","1","11","11.00","1");
INSERT INTO purchase VALUES("301","85","1","0000-00-00","1","2","2.00","1");



#
# Delete any existing table `registered`
#

DROP TABLE IF EXISTS `registered`;


#
# Table structure of table `registered`
#



CREATE TABLE `registered` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `contact` varchar(250) NOT NULL,
  `logo` varchar(250) NOT NULL,
  `type` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

INSERT INTO registered VALUES("13","Play Store","mj","007de96adfa8b36dc2c8dd268d039129","saaaa","aaaa","m.jpg","0");
INSERT INTO registered VALUES("16","Mini Store","admin","21232f297a57a5a743894a0e4a801fc3","bdshrth","admin","images.jpg","1");



#
# Delete any existing table `supply`
#

DROP TABLE IF EXISTS `supply`;


#
# Table structure of table `supply`
#



CREATE TABLE `supply` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(250) NOT NULL,
  `ADDRESS` varchar(250) NOT NULL,
  `PRODUCT` varchar(250) NOT NULL,
  `TIMEANDDATE` date NOT NULL,
  `CONTACT` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

INSERT INTO supply VALUES("10","sample","here","burger","2022-04-30","324547658756");



#
# Delete any existing table `transaction`
#

DROP TABLE IF EXISTS `transaction`;


#
# Table structure of table `transaction`
#



CREATE TABLE `transaction` (
  `CODE` varchar(250) NOT NULL,
  `DATE` varchar(250) NOT NULL,
  `TRANSACTION` varchar(250) NOT NULL,
  `AMOUNT` int(250) NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO transaction VALUES("WQFEF","QEGEGEGQG","EGEG","436454","1");



#
# Delete any existing table `user`
#

DROP TABLE IF EXISTS `user`;


#
# Table structure of table `user`
#



CREATE TABLE `user` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `Password` varchar(250) NOT NULL,
  `Name` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


