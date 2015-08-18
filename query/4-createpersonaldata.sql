CREATE TABLE `personal_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `document` int(11) NOT NULL,
  `documentType` int(1) NOT NULL,
  `name` varchar(255) NOT NULL,
  `bornDate` date NOT NULL,
  `bornPlace` varchar(255) NOT NULL,
  `civilState` varchar(255) NOT NULL,
  `gender` int(1) NOT NULL,
  `ocupation` varchar(255) DEFAULT NULL,
  `procedencia` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `cellphone` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `companyPhone` varchar(255) DEFAULT NULL,
  `eps` varchar(255) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `reference` varchar(255) DEFAULT NULL,
  `createDate` datetime NOT NULL,
  `updateDate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

