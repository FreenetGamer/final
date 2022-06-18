# ABMS : MySQL database backup
#
# Generated: Wednesday 1. June 2022
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
  `Details` longtext NOT NULL,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=120 DEFAULT CHARSET=utf8mb4;

INSERT INTO product VALUES("102","10","202230060448","Coka Cola","19","drinks","download.png");
INSERT INTO product VALUES("103","12","202230061000","Royal","38","drinks","download.jpg");
INSERT INTO product VALUES("113","15","202230064022","Alibaba","52","food","download (1).jpg");
INSERT INTO product VALUES("117","20","202231044837","Palmolive","85","food","palmolive-naturals-intensive-moisture-shampoo-180ml.jpg");
INSERT INTO product VALUES("119","50","20220531052120","Tobleron","1124","zXascdwefgr","download (3).jpg");



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
) ENGINE=InnoDB AUTO_INCREMENT=763 DEFAULT CHARSET=utf8mb4;

INSERT INTO purchase VALUES("688","84","new product","2022-05-30","1","33","33","1","05");
INSERT INTO purchase VALUES("689","84","new product","2022-05-30","1","33","33","1","05");
INSERT INTO purchase VALUES("691","102","Coka Cola","2022-05-30","1","10","10","1","05");
INSERT INTO purchase VALUES("692","103","Royal","2022-05-30","1","12","12","1","05");
INSERT INTO purchase VALUES("693","113","Alibaba","2022-05-30","1","15","15","1","05");
INSERT INTO purchase VALUES("694","103","Royal","2022-05-30","15","12","180","1","05");
INSERT INTO purchase VALUES("695","113","Alibaba","2022-05-30","1","15","15","1","05");
INSERT INTO purchase VALUES("696","102","Coka Cola","2022-05-30","1","10","10","1","05");
INSERT INTO purchase VALUES("697","102","Coka Cola","2022-05-31","1","10","10","1","05");
INSERT INTO purchase VALUES("698","102","Coka Cola","2022-05-31","1","10","10","1","05");
INSERT INTO purchase VALUES("699","102","Coka Cola","2022-05-31","1","10","10","1","05");
INSERT INTO purchase VALUES("700","102","Coka Cola","2022-05-31","1","10","10","1","05");
INSERT INTO purchase VALUES("701","102","Coka Cola","2022-05-31","1","10","10","1","05");
INSERT INTO purchase VALUES("702","102","Coka Cola","2022-05-31","1","10","10","1","05");
INSERT INTO purchase VALUES("703","103","Royal","2022-05-31","1","12","12","1","05");
INSERT INTO purchase VALUES("704","118","Mang-Juan","2022-05-31","1","15","15","1","05");
INSERT INTO purchase VALUES("711","117","Palmolive","2022-05-31","15","20","300","1","05");
INSERT INTO purchase VALUES("712","103","Royal","2022-05-31","14","12","168","1","05");
INSERT INTO purchase VALUES("713","102","Coka Cola","2022-05-31","1","10","10","1","05");
INSERT INTO purchase VALUES("714","118","Mang-Juan","2022-05-31","1","15","15","1","05");
INSERT INTO purchase VALUES("715","113","Alibaba","2022-05-31","16","15","240","1","05");
INSERT INTO purchase VALUES("716","102","Coka Cola","2022-05-31","1","10","10","1","05");
INSERT INTO purchase VALUES("717","102","Coka Cola","2022-05-31","1","10","10","1","05");
INSERT INTO purchase VALUES("719","102","Coka Cola","2022-05-31","1","10","10","1","05");
INSERT INTO purchase VALUES("735","102","Coka Cola","2022-06-01","15","10","150","1","06");
INSERT INTO purchase VALUES("760","103","Royal","2022-06-01","1","12","12","1","06");



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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;

INSERT INTO registered VALUES("16","Mini Store 1","admin","21232f297a57a5a743894a0e4a801fc3","sad","sad","logo1.png","1");
INSERT INTO registered VALUES("26","","mj","007de96adfa8b36dc2c8dd268d039129","","","","0");



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
INSERT INTO sales VALUES("7","May","1174","05");
INSERT INTO sales VALUES("8","June","162","06");
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

INSERT INTO supply VALUES("10","sample","here","burger","2022-04-30","324547658756");
INSERT INTO supply VALUES("13","aqwfwe","fdef","we","2022-05-31","werdw");



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
  `Autorized` varchar(250) NOT NULL,
  `Details` longtext NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

INSERT INTO transaction VALUES("20220531062428","2022-05-31","New Product Arrived","5000","6","admin","");
INSERT INTO transaction VALUES("20220531075810","2022-05-31","New Product Arrived","800","8","admin","sample");



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


