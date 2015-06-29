CREATE TABLE `personal_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `document` int(11) NOT NULL,
  `documentType` int(1) NOT NULL,
  `name` varchar(255) NOT NULL,
  `bornDate` date NOT NULL,
  `bornPlace` varchar(255) NOT NULL,
  `civilState` varchar(255) NOT NULL,
  `gender` int(1) NOT NULL,
  `ocupation` varchar(255) NULL,
  `procedencia` varchar(255) NULL,
  `address` varchar(255) NULL,
  `phone` varchar(255) NULL,
  `cellphone` varchar(255) NULL,
  `company` varchar(255) NULL,
  `companyPhone` varchar(255) NULL,
  `eps` varchar(255) NULL,
  `religion` varchar(255) NULL,
  `reference` varchar(255) NULL,
  `createDate` datetime NOT NULL,
  PRIMARY KEY (`id`)
)