# ABMS : MySQL database backup
#
# Generated: Saturday 28. May 2022
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
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=utf8mb4;

INSERT INTO product VALUES("83","5","43","Alibaba","0","sss","g.jpg");
INSERT INTO product VALUES("84","11","748hgsagndsa","Product 2","0","aa","menu.jpg");
INSERT INTO product VALUES("85","2","faf425323542","1","2","2","g.jpg");
INSERT INTO product VALUES("88","20","faf425323542a","sample","0","ss","dash.jpg");
INSERT INTO product VALUES("89","11","aa","aa","11","11","fb.png");
INSERT INTO product VALUES("90","323","dvfefvr","wefer","232","2","try.jpg");
INSERT INTO product VALUES("91","6776","yt76786r57","676r7","0","66878","cat.png");
INSERT INTO product VALUES("92","4","12345","new Product","933","334","try.jpg");



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
  `Quantity` int(250) NOT NULL,
  `Price` int(250) NOT NULL,
  `total` int(250) NOT NULL,
  `validation` int(1) NOT NULL,
  `date` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=462 DEFAULT CHARSET=utf8mb4;

INSERT INTO purchase VALUES("458","85","1","2022-05-28","143","2","286","1","05");
INSERT INTO purchase VALUES("459","85","1","2022-05-28","144","2","288","1","05");
INSERT INTO purchase VALUES("460","90","wefer","2022-05-28","144","323","46","1","05");
INSERT INTO purchase VALUES("461","90","wefer","2022-05-28","1312","323","423","1","05");



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
INSERT INTO sales VALUES("7","May","1043","05");
INSERT INTO sales VALUES("8","June","","06");
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

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


