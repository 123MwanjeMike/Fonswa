DROP TABLE IF EXISTS category;

CREATE TABLE `category` (
  `Category_ID` int(255) NOT NULL AUTO_INCREMENT,
  `Category_Name` varchar(123) NOT NULL,
  `Discription` varchar(255) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  PRIMARY KEY (`Category_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

INSERT INTO category VALUES("46","SmartPhones","Smart phones","best_6.png");
INSERT INTO category VALUES("47","Feature Phones","Basic non phones","new_6.jpg");
INSERT INTO category VALUES("48","Computers  Laptops","Computers and Laptops","single_1.jpg");
INSERT INTO category VALUES("49","Tablet phones","Phones and Tablets","new_single.png");


DROP TABLE IF EXISTS chatting;

CREATE TABLE `chatting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(60) NOT NULL,
  `message` varchar(100) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `ip_address` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS clients;

CREATE TABLE `clients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(40) DEFAULT NULL,
  `contact` varchar(40) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `website` varchar(40) DEFAULT NULL,
  `comments` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS contact;

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(25) NOT NULL,
  `Email` varchar(29) NOT NULL,
  `Phone` varchar(29) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO contact VALUES("7","A.rahman Osman","Mucaad33@gmail.com","252634188000"," i like this Shopping site ");
INSERT INTO contact VALUES("8","Abdirahman Ali Abdi","jananalibritish@gmail.com","0252634138440"," What a nice shopping site");


DROP TABLE IF EXISTS customer;

CREATE TABLE `customer` (
  `Cust_Id` int(15) NOT NULL AUTO_INCREMENT,
  `FullName` varchar(25) NOT NULL DEFAULT '',
  `UserName` varchar(255) NOT NULL DEFAULT '',
  `Phone` varchar(25) NOT NULL DEFAULT '',
  `Email` varchar(55) NOT NULL DEFAULT '',
  `Password` varchar(20) NOT NULL DEFAULT '',
  `City` varchar(25) NOT NULL DEFAULT '',
  `Adress` varchar(55) NOT NULL DEFAULT '',
  `PostalCode` varchar(25) NOT NULL DEFAULT '',
  PRIMARY KEY (`Cust_Id`),
  UNIQUE KEY `UserName` (`UserName`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS employee;

CREATE TABLE `employee` (
  `Employee_ID` int(95) NOT NULL AUTO_INCREMENT,
  `Employee_Name` varchar(25) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  PRIMARY KEY (`Employee_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

INSERT INTO employee VALUES("53","Dobello","Dobello","1234","view_6.jpg");
INSERT INTO employee VALUES("54","Fonsw Mahad","Mahad","1234","user.svg");


DROP TABLE IF EXISTS invoice_items;

CREATE TABLE `invoice_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `invoice` int(10) unsigned DEFAULT NULL,
  `item` varchar(200) DEFAULT NULL,
  `unit_price` decimal(9,2) DEFAULT 0.00,
  `qty` decimal(9,3) DEFAULT 1.000,
  `tax` decimal(4,2) DEFAULT 0.00,
  `price` decimal(9,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `invoice` (`invoice`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS invoices;

CREATE TABLE `invoices` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(20) DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Due',
  `date_due` date DEFAULT NULL,
  `client` int(10) unsigned DEFAULT NULL,
  `client_contact` int(10) unsigned DEFAULT NULL,
  `client_address` int(10) unsigned DEFAULT NULL,
  `client_phone` int(10) unsigned DEFAULT NULL,
  `client_email` int(10) unsigned DEFAULT NULL,
  `client_website` int(10) unsigned DEFAULT NULL,
  `client_comments` int(10) unsigned DEFAULT NULL,
  `subtotal` decimal(9,2) DEFAULT NULL,
  `discount` decimal(4,2) DEFAULT 0.00,
  `tax` decimal(9,2) DEFAULT NULL,
  `total` decimal(9,2) DEFAULT 0.00,
  `comments` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`),
  KEY `client` (`client`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS membership_grouppermissions;

CREATE TABLE `membership_grouppermissions` (
  `permissionID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `groupID` int(11) DEFAULT NULL,
  `tableName` varchar(100) DEFAULT NULL,
  `allowInsert` tinyint(4) DEFAULT NULL,
  `allowView` tinyint(4) NOT NULL DEFAULT 0,
  `allowEdit` tinyint(4) NOT NULL DEFAULT 0,
  `allowDelete` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`permissionID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO membership_grouppermissions VALUES("1","1","clients","0","0","0","0");
INSERT INTO membership_grouppermissions VALUES("2","1","invoices","0","0","0","0");
INSERT INTO membership_grouppermissions VALUES("3","1","invoice_items","0","0","0","0");
INSERT INTO membership_grouppermissions VALUES("4","2","clients","0","0","0","0");
INSERT INTO membership_grouppermissions VALUES("5","2","invoices","0","0","0","0");
INSERT INTO membership_grouppermissions VALUES("6","2","invoice_items","0","0","0","0");
INSERT INTO membership_grouppermissions VALUES("7","3","clients","1","3","3","3");
INSERT INTO membership_grouppermissions VALUES("8","3","invoices","1","3","3","3");
INSERT INTO membership_grouppermissions VALUES("9","3","invoice_items","1","3","3","3");


DROP TABLE IF EXISTS membership_groups;

CREATE TABLE `membership_groups` (
  `groupID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `allowSignup` tinyint(4) DEFAULT NULL,
  `needsApproval` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`groupID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO membership_groups VALUES("1","anonymous","Anonymous group created automatically on 2014-08-17","0","0");
INSERT INTO membership_groups VALUES("2","anonymous","Anonymous group created automatically on 2014-08-17","0","0");
INSERT INTO membership_groups VALUES("3","Admins","Admin group created automatically on 2014-08-17","0","1");


DROP TABLE IF EXISTS membership_userrecords;

CREATE TABLE `membership_userrecords` (
  `recID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tableName` varchar(100) DEFAULT NULL,
  `pkValue` varchar(255) DEFAULT NULL,
  `memberID` varchar(20) DEFAULT NULL,
  `dateAdded` bigint(20) unsigned DEFAULT NULL,
  `dateUpdated` bigint(20) unsigned DEFAULT NULL,
  `groupID` int(11) DEFAULT NULL,
  PRIMARY KEY (`recID`),
  KEY `pkValue` (`pkValue`),
  KEY `tableName` (`tableName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS membership_users;

CREATE TABLE `membership_users` (
  `memberID` varchar(20) NOT NULL,
  `passMD5` varchar(40) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `signupDate` date DEFAULT NULL,
  `groupID` int(10) unsigned DEFAULT NULL,
  `isBanned` tinyint(4) DEFAULT NULL,
  `isApproved` tinyint(4) DEFAULT NULL,
  `custom1` text DEFAULT NULL,
  `custom2` text DEFAULT NULL,
  `custom3` text DEFAULT NULL,
  `custom4` text DEFAULT NULL,
  `comments` text DEFAULT NULL,
  PRIMARY KEY (`memberID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO membership_users VALUES("admin","21232f297a57a5a743894a0e4a801fc3","admin@localhost","2014-08-17","3","0","1","","","","","Admin member created automatically on 2014-08-17");
INSERT INTO membership_users VALUES("guest","","","2014-08-17","1","0","1","","","","","Anonymous member created automatically on 2014-08-17");


DROP TABLE IF EXISTS payment;

CREATE TABLE `payment` (
  `order_ID` int(255) NOT NULL AUTO_INCREMENT,
  `Full_Name` varchar(25) NOT NULL,
  `Email` varchar(55) NOT NULL,
  `Address` varchar(55) NOT NULL,
  `City` varchar(55) NOT NULL,
  `Phone` varchar(55) NOT NULL,
  `Warehouse_ID` int(255) NOT NULL,
  `Dilivery_Address` varchar(75) NOT NULL,
  `Total_Amount` varchar(55) NOT NULL,
  PRIMARY KEY (`order_ID`),
  KEY `Warehouse_ID` (`Warehouse_ID`),
  CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`Warehouse_ID`) REFERENCES `warehouse` (`Warehouse_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS product;

CREATE TABLE `product` (
  `Product_ID` int(255) NOT NULL AUTO_INCREMENT,
  `productName` varchar(77) NOT NULL,
  `Model` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Warehouse_ID` int(255) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  `Category_Name` char(255) DEFAULT NULL,
  PRIMARY KEY (`Product_ID`),
  KEY `Warehouse_ID` (`Warehouse_ID`),
  CONSTRAINT `product_ibfk_2` FOREIGN KEY (`Warehouse_ID`) REFERENCES `warehouse` (`Warehouse_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

INSERT INTO product VALUES("17","Samsung J8","Samsung J8","Samsung","1","best phone","700000","new_single.png","SmartPhones");
INSERT INTO product VALUES("18","HP 25","Latiso","laptop","1","32gb ram","1700000","single_1.jpg","Computers Laptops");
INSERT INTO product VALUES("19","watch","watch","watch","1","watch","220000","wrist-watch.jpg","watch");


DROP TABLE IF EXISTS tblsongs;

CREATE TABLE `tblsongs` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `songsinger` varchar(100) DEFAULT NULL,
  `songfile` varchar(50) DEFAULT NULL,
  `songwriter` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

INSERT INTO tblsongs VALUES("38","Parokya ","Parokya Ni Edgar - One And Only You.mp3","Parokya ");
INSERT INTO tblsongs VALUES("37","Amber Pacific","Amber Pacific - Falling Away.mp3","Them");
INSERT INTO tblsongs VALUES("42","Parokya ","Parokya Ni Edgar - Gitara.mp3","Parokya ");
INSERT INTO tblsongs VALUES("43","Boyce Avenue","Boyce Avenue - Because of You.mp3","Boyce Avenue");
INSERT INTO tblsongs VALUES("44","Boyce Avenue","Boyce Avenue - Every Breath.mp3","Boyce Avenue");
INSERT INTO tblsongs VALUES("45","Eminem","Eminen 8 miles.mp3","Eminem");


DROP TABLE IF EXISTS warehouse;

CREATE TABLE `warehouse` (
  `Warehouse_ID` int(255) NOT NULL AUTO_INCREMENT,
  `Country` varchar(25) NOT NULL,
  `City` varchar(25) NOT NULL,
  `Address` varchar(55) NOT NULL,
  `PostalCode` varchar(55) NOT NULL,
  `Email` varchar(35) NOT NULL,
  `Warehouse` varchar(55) NOT NULL,
  PRIMARY KEY (`Warehouse_ID`),
  UNIQUE KEY `Email` (`Email`),
  UNIQUE KEY `PostalCode` (`PostalCode`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO warehouse VALUES("1","Uganda","Kampala","Wandegeya","+256","fonswam@gmail.com","Electricals & Electronics");
INSERT INTO warehouse VALUES("7","","Hargeisa","Hargeisa","Hr103","dollarstore@dollor.com","Som Food Stuff");
INSERT INTO warehouse VALUES("8","","Hargeisa","Hargeisa","Hr202","ominco@omar.com","Som Bavarages");
INSERT INTO warehouse VALUES("9","","Arabsiyo","Arabsiyo","Ar271","somstore@somestore.com","Som Home Staff");
INSERT INTO warehouse VALUES("10","","Hargeisa","Hargeisa","Hr302","nation@gmail.com","Som Clothes");


