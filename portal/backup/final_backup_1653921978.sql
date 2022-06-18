# ABMS : MySQL database backup
#
# Generated: Monday 30. May 2022
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
  `Quantity` varchar(250) NOT NULL,
  `Details` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8mb4;

INSERT INTO product VALUES("84","33","748hgsagndsa","new product","248","22","menu.jpg");
INSERT INTO product VALUES("85","2","faf425323542","1","0","2","g.jpg");
INSERT INTO product VALUES("88","20","faf425323542a","sample","0","ss","dash.jpg");
INSERT INTO product VALUES("89","11","aa","aa","0","11","fb.png");
INSERT INTO product VALUES("91","6776","yt76786r57","676r7","0","66878","cat.png");
INSERT INTO product VALUES("92","4","12345","new Product","718","334","try.jpg");
INSERT INTO product VALUES("95","75","202230040138","Stick o","48","food","download (4).jpg");
INSERT INTO product VALUES("97","44","202230041502","bawang na bawang","39","44","download.jpg");
INSERT INTO product VALUES("98","2222","202230042057","Stick o","2219","222","palmolive-naturals-intensive-moisture-shampoo-180ml.jpg");
INSERT INTO product VALUES("99","4545","202230042214","fsdgfdr","545","5454","download.jpg");
INSERT INTO product VALUES("100","23","202230042225","232","33","231","download (3).jpg");
INSERT INTO product VALUES("101","656","202230042406","new","7","32423","download.jpg");



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
  `time_date` varchar(250) NOT NULL,
  `Quantity` varchar(250) NOT NULL,
  `Price` int(250) NOT NULL,
  `total` int(250) NOT NULL,
  `validation` int(1) NOT NULL,
  `date` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=690 DEFAULT CHARSET=utf8mb4;

INSERT INTO purchase VALUES("688","84","new product","2022-05-30","1","33","33","1","05");
INSERT INTO purchase VALUES("689","84","new product","2022-05-30","1","33","33","1","05");



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
INSERT INTO registered VALUES("16","Mini Store 1","admin","21232f297a57a5a743894a0e4a801fc3","awfe4trwe","78654","download (2).jpg","1");



#
# Delete any existing table `sales`
#

DROP TABLE IF EXISTS `sales`;


#
# Table structure of table `sales`
#



CREATE TABLE `sales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Month` varchar(250) NOT NULL,
  `sales` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

INSERT INTO sales VALUES("3","January","","01");
INSERT INTO sales VALUES("4","Febuary","","02");
INSERT INTO sales VALUES("5","March","","03");
INSERT INTO sales VALUES("6","April","","04");
INSERT INTO sales VALUES("7","May","66","05");
INSERT INTO sales VALUES("8","June","0","06");
INSERT INTO sales VALUES("9","July","","07");
INSERT INTO sales VALUES("10","August","","08");
INSERT INTO sales VALUES("11","September","","09");
INSERT INTO sales VALUES("12","October","","10");
INSERT INTO sales VALUES("13","November","","11");
INSERT INTO sales VALUES("14","December","","12");



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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

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


